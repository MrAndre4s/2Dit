<?php

include('../models/User.php');

session_start();

$user = new User();

$email = $_GET['email'];
$password = $_GET['password'];

$result = $user->Login($email, $password);

if (!empty($result)) {
    $_SESSION['fio'] = $result['fio'];
    header("Location: ../index.php");
} else {
    print("Неверный логин или пароль");
}