<?php
    //Подключение сессии
    session_start();

    //Подключение к БД
    require_once 'connect.php';


    //Заношу под переменные то, чтобы было введено пользователем в edit
    $fio = $_POST['fio'];
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];

    //Если пароли совпадают продолжнаю регистрацию
    if ($password === $password_confirm){
        
        //Произвожу добавление пользователя в базу данных
        mysqli_query($connect, "INSERT INTO `users` (`id_user`, `fio`, `login`, `password`) VALUES (NULL, '$fio', '$login', '$password')");
        $_SESSION['message'] = 'Регистрация прошла успешно!';
        header('location: ../index.php'); //Возвращаю на страницу входа

    } else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('location: ../register.php'); //Если не совпадают пароли, обновляю страницу
    }

?>