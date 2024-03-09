<?php

session_start();

/** Delete all session data */
$_SESSION = array();

/** Delete cookies */
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(
        session_name(),
        '',
        time() - 42000,
        $params["path"],
        $params["domain"],
        $params["secure"],
        $params["httponly"]
    );
}

/** Destroy session */
session_destroy();

header('Location: ../Views/Login/index.php');