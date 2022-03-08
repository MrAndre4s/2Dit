<?php include('header.php'); ?>

<body>
    <form action="controllers/login.php" method="GET" >
        <input type="email" name="email" id="" placeholder="Логин">
        <input type="password" name="password" id="" placeholder="Пароль">
        <div>
            <a href="registrationView.php">Регистрация</a>
            <input type="submit" value="Войти">  
        </div>
    </form>
</body>
</html>
