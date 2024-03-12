<?php
session_start();
include_once('../Controllers/UserController.php');
$user_id = $_GET['user_id'];

// Metodo para salvar agora
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $userController = new UserController();

    $name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $user_type = $_POST['user_type'] ?? '';

    $user = new User(
        name: $name,
        username: $username,
        password: $password,
        cpf: $cpf,
        phone: $phone,
        email: $email,
        user_type: $user_type,
    );

    $userController->updateAllWhere($user, 'id', $user_id);

    header('Location: ../Views/User/index.php');
}
?>







