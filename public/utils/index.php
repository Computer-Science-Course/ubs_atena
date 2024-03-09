<?php
/**
 * Checks if the user is logged in.
 * If the user is not logged in, it redirects them to the login page.
 * 
 * @return void
 */
function check_is_logged_in()
{
    if (!isset($_SESSION['username'])) {
        header('Location: ../../../src/Views/Login/index.php');
        die();
    }
}

/**
 * Checks if the current user is an administrator.
 *
 * @return bool Returns true if the user is an administrator, false otherwise.
 */
function is_administrator()
{
    return $_SESSION['user_type'] === 'administrador';
}

/**
 * Checks if the user is an administrator and redirects them if not.
 *
 * @return void
 */
function check_for_administrator()
{
    if (!is_administrator()) {
        header('Location: ../../../src/Views/Service/index.php');
        die();
    }
}

/**
 * Checks if a session is active and if the user is logged in.
 * If not, it starts a new session and checks if the user is logged in.
 */
function check_sessions()
{
    session_start();
    check_is_logged_in();
}