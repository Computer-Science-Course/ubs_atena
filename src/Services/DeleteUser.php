<?php
session_start();
include_once('../Controllers/UserController.php');

$user_id = $_GET['user_id'];

$userController = new UserController();

$userController->deleteAllWhere('id', $user_id);

header('Location: ../Views/User/index.php');
?>