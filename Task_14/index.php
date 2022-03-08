<?php 

include('header.php');

session_start();

if (isset($_SESSION['fio'])) {
    $name = $_SESSION['fio'];
} else {
    $name = 'Гость';
}

?>

<body>
    <div class="welcome">
        <h1>Привет <?php print($name); ?></h1>
        <div class="buttons">
            <a href="loginView.php">Войти</a>
            <a href="registrationView.php">Зарегистрироваться</a>
        </div>
    </div>
</body>

</html>