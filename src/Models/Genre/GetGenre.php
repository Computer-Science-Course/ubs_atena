<?php
class GetGenre
{
    /** @var int */
    private $id;

    /** @var string */
    private $type;

    public function __construct($id, $type)
    {
        $this->id = $id;
        $this->type = $type;
    }

    public static function getAllGenres()
    {
        $table = 'genre';

        $db = new Database();
        $result = $db->getAll($table);
        $genres = [];
        foreach ($result as $row) {
            $genre = new GetGenre(
                $row['id'],
                $row['type'],
            );
            $genres[] = $genre;
        }
        return $genres;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}