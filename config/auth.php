<?php
session_start();

function isAuthenticated()
{
    return isset($_SESSION['user_id']);
}

function requireLogin()
{
    if (!isAuthenticated()) {
        header('Location: login.php');
        exit;
    }
}

?>;