<?php
session_start();
include_once('../Controllers/UserController.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    /** Check if values exists. */
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    /** Get all users from database with this username. */
    $user_controller = new UserController();
    $users = $user_controller->getAllWhere('username', $username);

    /** If it found anyone, it stores the first found in $user.
     * If it hadn't find anyone, it stores null in $user.
     */
    $user = count($users) > 0 ? $users[0] : null;

    /** If no one user was found, it redirects the flow back to
     * login page and finish the execution with die();
     */
    if (!$user) {
        header('Location: ../Views/Login/index.php');
        die();
    }

    /** If password is incorrect, it redirects the flow back to
     * login page and finish the execution with die();
     */
    if ($user->getPassword() !== $password) {
        header('Location: ../Views/Login/index.php');
        die();
    }

    /** Store username and user type in session and redirect user
     * to service page.
     */
    $_SESSION['username'] = $user->getUsername();
    $_SESSION['user_type'] = $user->getUserType();
    // tava testando mateus, se der bo pra ti tira kk -Newdon
    $_SESSION['user_id'] = $user->getId();
    // isso aqui de cima só
    header('Location: ../Views/Service/index.php');
}
