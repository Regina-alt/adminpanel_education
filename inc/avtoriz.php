<?php
    //Начало сессии
    session_start();

    //Подлючаю базу данных
    include ("connect.php");

    //Заношу под переменные то, чтобы было введено пользователем в edit
    $login = $_POST['login'];
    $password = $_POST['password'];

    //Выполняю выборку, где ищу в массиве нужные строчки и сравниваю их с данными из БД
    $check_user = mysqli_query($connect, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id_user" => $user['id_user'],
            "fio" => $user['fio']
        ];

        header('Location: ../profile.php'); //Переношу на страницу профиля

    } else {
        $_SESSION['message'] = 'Не верный логин или пароль';
        header('Location: ../index.php'); //В случае неудачи, возвращаю на начальную страницу
    }
    ?>
