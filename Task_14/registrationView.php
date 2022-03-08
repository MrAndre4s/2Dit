<?php include('header.php'); ?>

<body>
    <form action="controllers/registraion.php" method="get">
        <input type="text" name="fio" id="" placeholder="Фио">
        <input type="text" name="age" id="" placeholder="Возраст">
        <input type="text" name="address" id="" placeholder="Адрес">
        <input type="text" name="phone" id="" placeholder="Телефон">
        <input type="email" name="email" id="" placeholder="Логин">
        <input type="password" name="password" id="" placeholder="Пароль">
        <div>
            <a href="index.php">Назад</a>
            <input type="submit" name="submit" value="Регистрация">
        </div>
    </form>
</body>

</html>