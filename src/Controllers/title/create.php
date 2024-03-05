<?php

require_once('../../Models/Genre/GetGenre.php');
require_once('../../Models/Title/CreateTitle.php');
require_once('../../Models/TitleGenre/CreateTitleGenre.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $title = $_POST['name'] ?? '';
    $description = $_POST['description'] ?? '';
    $duration = $_POST['duration'] ?? '';
    $releaseDate = $_POST['release_date'] ?? '';
    $poster = $_POST['poster'] ?? '';
    $nationality = $_POST['nationality'] ?? '';
    $isErotic = isset($_POST['is_erotic']) ? true : false;
    $genres = $_POST['genre'] ?? [];

    $create_title = new CreateTitle(
        $title,
        $description,
        $duration,
        $releaseDate,
        $poster,
        $nationality,
        $isErotic,
        $genres,
    );

    $last_id = $create_title->createOnDatabase();
    $genres_from_db = GetGenre::getAllGenres();

    foreach ($genres_from_db as $genre) {
        foreach ($genres as $genre_type) {
            $cleaned_genre_type = strtolower(trim($genre_type));
            $cleaned_genre = strtolower(trim($genre->getType()));

            if ($cleaned_genre == $cleaned_genre_type) {
                $create_title_genre = new CreateTitleGenre($last_id, $genre->getId());
                $create_title_genre->createOnDatabase();
            }
        }
    }

}