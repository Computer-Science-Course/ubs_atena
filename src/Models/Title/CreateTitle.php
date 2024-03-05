<?php
/** Class to create a title on database. */
require_once('../../Models/Database/Database.php');

class CreateTitle
{
    /** @var string */
    private $title;

    /** @var string */
    private $description;

    /** HH:mm */
    /** @var string */
    private $duration;

    /** YY-dd-mm */
    /** @var string */
    private $releaseDate;

    /** @var string */
    private $poster;

    /** @var string */
    private $nationality;

    /** @var boolean */
    private $is_eroctic;

    /** @var array */
    private $genres;


    public function __construct(
        $title,
        $description,
        $duration,
        $releaseDate,
        $poster,
        $nationality,
        $is_eroctic,
        $genres,
    ) {
        $this->title = $title;
        $this->description = $description;
        $this->duration = $duration;
        $this->releaseDate = $releaseDate;
        $this->poster = $poster;
        $this->nationality = $nationality;
        $this->is_eroctic = $is_eroctic;
        $this->genres = $genres;
    }

    public function createOnDatabase()
    {
        $table = 'title';
        $sql_fields = 'name, description, duration, release_date, poster, nationality, is_erotic';
        $placeholder = '?, ?, ?, ?, ?, ?, ?';
        $bind_params = 'ssssssi';
        $values = [
            $this->title,
            $this->description,
            $this->duration,
            $this->releaseDate,
            $this->poster,
            $this->nationality,
            $this->is_eroctic,
        ];

        // Create a new database connection
        $database = new Database();
        // Execute the SQL to create new title
        return $database->create($table, $sql_fields, $placeholder, $bind_params, $values);
    }
}