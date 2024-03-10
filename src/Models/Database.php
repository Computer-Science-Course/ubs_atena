<?php

$ROOT_PATH = __DIR__ . '/../..';
require $ROOT_PATH . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable($ROOT_PATH);
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

    public function getServerName()
    {
        return $this->servername;
    }

    public function getPort()
    {
        return $this->port;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getDatabase()
    {
        return $this->database;
    }
}