<?php
session_start();
include_once('../Controllers/UserController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // $name = $_POST['name'] ?? '';
    // $cpf = $_POST['cpf'] ?? '';

    // $phone = $_POST['phone'] ?? '';
    // $email = $_POST['email'] ?? '';

    // $username = $_POST['username'] ?? '';
    // $password: $_POST['password'] ?? '';
    // $repeat_password: $_POST['repeat_password'] ?? '';
    // $user_type: $_POST['user_type'] ?? '';

    $name = $_POST['name'] ?? '';
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';
    $repeat_password = $_POST['repeat_password'] ?? '';
    $cpf = $_POST['cpf'] ?? '';
    $phone = $_POST['phone'] ?? '';
    $email = $_POST['email'] ?? '';
    $user_type = $_POST['user_type'] ?? '';
    
    if($password !== $repeat_password){
        echo "Senhas não conferem !!!";
        die();
    }
    
    $user_controller = new UserController();
    $existing_user_cpf = $user_controller->getAllWhere('cpf', $cpf);
    $existing_user_email = $user_controller->getAllWhere('email', $email);
    $existing_user_username = $user_controller->getAllWhere('username', $username);

    if($existing_user_cpf && $existing_user_email && $existing_user_username){
        echo "Dados repetidos: CPF, Email e Usuário !!!";
    }elseif($existing_user_cpf){
        echo "Dados repetidos: CPF !!!";
    }elseif($existing_user_email){
        echo "Dados repetidos: Email !!!";
    }elseif($existing_user_username){
        echo "Dados repetidos: Nome de Usuário !!!";
    }else{
        $user = new User(
            name: $name,
            username: $username,
            password: $password,
            cpf: $cpf,
            phone: $phone,
            email: $email,
            user_type: $user_type,
        );
    }

    $user = $user_controller->create($user);

    if ($user) {
        echo "Usuário criado com sucesso. ID: " . $user;
    } else {
        echo "Erro ao criar usuário.";
    }
}
?>