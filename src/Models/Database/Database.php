<?php

$ROO_PATH = __DIR__ . '/../../..';
require $ROO_PATH . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable($ROO_PATH);
$dotenv->load();

/** Class with methods to handle databale */
class Database
{
    private $servername = '';
    private $port = '';
    private $username = '';
    private $password = '';
    private $database = '';

    public function __construct()
    {
        $this->servername = $_ENV['SERVER'];
        $this->port = $_ENV['PORT'];
        $this->username = $_ENV['USERNAME'];
        $this->password = $_ENV['PASSWORD'];
        $this->database = $_ENV['DATABASE'];
    }

    /** Create a new instance on database
     * 
     * @param string $table - Table name. E.g.: 'title'.
     * @param string $sql_fields - Fields to insert. E.g.: 'name, description, duration, release_date'.
     * @param string $placeholder - Placeholder for values, it has to be a string with the same length of $sql_fields, but with '?' instead of the fields. E.g.: '?, ?, ?, ?'.
     * @param string $bind_types - Types of the fields to bind. ThE types are: 's' for string, 'i' for integer or boolean, 'd' for double, 'b' for blob. E.g.: 'ssssi'.
     * @param array $bind_params - Array with the values to bind. E.g.: ['title', 'description', 'duration', 'release_date', 'poster', 'nationaly', 'is_erotic'].
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
            $this->servername,
            $this->username,
            $this->password,
            $this->database,
            $this->port,
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

    /** Get all rows from a table
     * 
     * @param string $table - Table name. E.g.: 'title'.
     * 
     * @return array - Array with all rows from the table.
     */
    public function getAll($table)
    {
        // SQL to get all titles
        $sql = "SELECT * FROM $table";

        // Create connection
        $conn = new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->database,
            $this->port,
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
}