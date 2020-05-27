<?php

session_start();
if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

unset($_SESSION['user']);
header('Location: login.php');
exit();