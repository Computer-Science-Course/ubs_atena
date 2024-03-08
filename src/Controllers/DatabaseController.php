<?php

include_once("../Models/Database.php");

class DatabaseController
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }

    /** Create a new instance on database.
     * 
     * @param string $table - Table name. E.g.: 'title'.
     * @param string $sql_fields - Fields to insert. E.g.: 'name, description, duration,
     *  release_date'.
     * @param string $placeholder - Placeholder for values, it has to be a string with the same
     *  length of $sql_fields, but with '?' instead of the fields. E.g.: '?, ?, ?, ?'.
     * @param string $bind_types - Types of the fields to bind. ThE types are: 's' for string, 'i'
     *  for integer or boolean, 'd' for double, 'b' for blob. E.g.: 'ssssi'.
     * @param array $bind_params - Array with the values to bind. E.g.: ['name', 'username', 'cpf',
     * 'height'].
     * 
     * @return int|null - The id of the last inserted row or null if the insert failed.
     */
    public function create(
        $table,
        $sql_fields,
        $placeholder,
        $bind_types,
        $bind_params,
    ) {

        // SQL to insert a new title
        $sql = "INSERT INTO $table ($sql_fields) VALUES ($placeholder)";

        // Create connection
        $conn = new mysqli(
            $this->db->getServerName(),
            $this->db->getUsername(),
            $this->db->getPassword(),
            $this->db->getDatabase(),
            $this->db->getPort(),
        );

        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die('Error: ' . $conn->error);
        }
        $stmt->bind_param($bind_types, ...$bind_params);

        $last_id = null;
        // Execute the statement
        if ($stmt->execute()) {
            $last_id = $conn->insert_id;
        } else {
            echo 'Error: ' . $sql . '<br>' . $stmt->error;
        }

        // Close statement and connection
        $stmt->close();
        $conn->close();
        return $last_id;
    }

    /** Get all rows from a table.
     * 
     * @param string $table - Table name. E.g.: 'patient'.
     * 
     * @return array - Array with all rows from the table.
     */
    public function getAll($table)
    {
        // SQL to get all titles
        $sql = "SELECT * FROM $table";

        // Create connection
        $conn = new mysqli(
            $this->db->getServerName(),
            $this->db->getUsername(),
            $this->db->getPassword(),
            $this->db->getDatabase(),
            $this->db->getPort(),
        );

        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Execute the statement
        $result = $conn->query($sql);

        // Close connection
        $conn->close();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /** Get all rows from a table given field and value.
     * 
     * @param string $table - Table name. E.g.: 'patient'.
     * @param string $where - Required field. E.g.: 'name'.
     * @param string $equals - Specific value to given field. E.g.: 'Marcos'.
     * 
     * @return array - Array with all rows from the table that follow condition.
     */
    public function getAllWhere($table, $where, $equals)
    {
        // SQL to get all titles
        $sql = "SELECT * FROM $table WHERE $where = ?"; // Modify SQL statement to use prepared statement

        // Create connection
        $conn = new mysqli(
            $this->db->getServerName(),
            $this->db->getUsername(),
            $this->db->getPassword(),
            $this->db->getDatabase(),
            $this->db->getPort(),
        );

        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Prepare and bind parameter
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $equals);

        // Execute the statement
        $stmt->execute();
        $result = $stmt->get_result();

        // Fetch all rows
        $rows = $result->fetch_all(MYSQLI_ASSOC);

        // Close statement and connection
        $stmt->close();
        $conn->close();

        return $rows;
    }

    /** Delete all rows from a table given field and value.
     * 
     * @param string $table - Table name. E.g.: 'patient'.
     * @param string $where - Required field. E.g.: 'name'.
     * @param string $equals - Specific value to given field. E.g.: 'Marcos'.
     * 
     */
    public function deleteAllWhere($table, $where, $equals)
    {
        // SQL to delete rows
        $sql = "DELETE FROM $table WHERE $where = ?"; // Modify SQL statement to use prepared statement

        // Create connection
        $conn = new mysqli(
            $this->db->getServerName(),
            $this->db->getUsername(),
            $this->db->getPassword(),
            $this->db->getDatabase(),
            $this->db->getPort(),
        );

        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Prepare and bind parameter
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('s', $equals);

        // Execute the statement
        $stmt->execute();

        // Close statement and connection
        $stmt->close();
        $conn->close();
    }

    /**
     * Builds the SET clause for an UPDATE query using the given keys and values.
     *
     * @param array $keys The keys for the columns to be updated.
     * @param array $values The values for the columns to be updated.
     * @return string The SET clause for the UPDATE query.
     */
    public function buildUpdateSetQueryChunk($keys, $values)
    {
        $sets = implode(', ', array_map(function ($key, $value) {
            return "`$key` = '$value'";
        }, $keys, $values));
        return $sets;
    }

    public function updateAllWhere($table, $keys, $values, $where, $equals)
    {
        // Build the SET part of the SQL query
        $set = $this->buildUpdateSetQueryChunk($keys, $values);

        // SQL query with placeholders for prepared statement
        $sql = "UPDATE $table SET $set WHERE $where = ?";

        // Create connection
        $conn = new mysqli(
            $this->db->getServerName(),
            $this->db->getUsername(),
            $this->db->getPassword(),
            $this->db->getDatabase(),
            $this->db->getPort()
        );

        // Check connection
        if ($conn->connect_error) {
            die('Connection failed: ' . $conn->connect_error);
        }

        // Prepare and bind parameters
        $stmt = $conn->prepare($sql);
        if (!$stmt) {
            die('Failed to prepare statement: ' . $conn->error);
        }
        $stmt->bind_param('s', $equals);

        // Execute the statement
        if (!$stmt->execute()) {
            die('Failed to execute statement: ' . $stmt->error);
        }

        // Get the number of affected rows
        $affectedRows = $stmt->affected_rows;

        // Close statement and connection
        $stmt->close();
        $conn->close();

        return $affectedRows;
    }
}