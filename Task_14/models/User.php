<?php

class User {
    
    private $fio;
    private $age;
    private $address;
    private $email;
    private $phone;
    private $password;

    public function __get($fio)
    {
        return $this->fio;
    }

    public function Login($email, $password) {     
        $db = new PDO("mysql:host=localhost;dbname=2dit", "root", "");
        $password = md5($password . "MyUniqueSault");  
        $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
        $result = $db->query($sql);

        return $result->fetch();
    }

    public function Registration($fio, $age, $address, $email, $phone, $password) {
        $password = password_hash($password, PASSWORD_DEFAULT);

        $db = new PDO("mysql:host=localhost;dbname=2dit", "root", "");
    
        $sql = "INSERT INTO users (id, fio, age, address, email, phone, password, type) VALUES (null, '$fio', '$age', '$address', '$email', '$phone', '$password', 'admin')";
    
        $result = $db->exec($sql);
    }
}