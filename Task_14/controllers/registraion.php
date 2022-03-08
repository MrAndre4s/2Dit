<?php

include('../models/User.php');

session_start();

$fio = $_GET['fio'];
$age = $_GET['age'];
$address = $_GET['address'];
$email = $_GET['email'];
$phone = $_GET['phone'];
$password = $_GET['password'];

if (($fio != '') &&  ($age != '') && ($address != '') &&
    ($email != '') && ($phone != '') && ($password != '')) {

    $user = new User();

    $user->Registration($fio, $age, $address, $email, $phone, $password);    

    $_SESSION['fio'] = $fio;

    header("Location: ../index.php");
} else {
    echo '<div>Заполните все поля</div>';
}
