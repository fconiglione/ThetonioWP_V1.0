<?php

if (session_start() == PHP_SESSION_NONE) {
    session_start();
}
if (empty($_SESSION['user'])) {
    header('location: https://thetonio.com/admin-login/');
    exit();
}
?>