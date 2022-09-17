<?php
    //Начало сессии
     session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <!-- Форма регистрации -->
    <form action="inc/sign.php" method="POST" enctype="multipart/form-data" class="form_reg">
        <label>ФИО</label>
        <input type="text" name="full_name" placeholder="Введите свое полное имя">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="password_confirm" placeholder="Подтвердите пароль">
        <button  type="submit">Зарегистрироваться</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">войдите</a>!
        </p>

            <?php
                if($_SESSION['message']){
                    echo ' <p class="message"> ' . $_SESSION['message'] . ' </p>';
                }
                unset ($_SESSION['message']);
            ?>
    </form>

</body>
</html>