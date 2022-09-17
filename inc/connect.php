<?php
    //Подключение к БД
    $connect = mysqli_connect('localhost', 'root', '', 'education');
    if(!$connect){
        die('Error connect to database');
    }
?>