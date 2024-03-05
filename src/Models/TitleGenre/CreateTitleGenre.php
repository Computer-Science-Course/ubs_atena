<?php
/** Class to create a title on database. */
require_once('../../Models/Database/Database.php');

class CreateTitleGenre
{
    /** @var int */
    private $id;

    /** @var int */
    private $title_id;

    /** @var int */
    private $genre_id;

    public function __construct(
        $title_id,
        $genre_id,
        $id = null,
    ) {
        $this->id = $id;
        $this->title_id = $title_id;
        $this->genre_id = $genre_id;
    }

    public function createOnDatabase()
    {
        $table = 'title_genre';
        $sql_fields = 'title_id, genre_id';
        $placeholder = '?, ?';
        $bind_params = 'ii';
        $values = [
            $this->title_id,
            $this->genre_id,
        ];

        // Create a new database connection
        $database = new Database();
        // Execute the SQL to create new title
        return $database->create($table, $sql_fields, $placeholder, $bind_params, $values);
    }
}