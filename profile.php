<?php
     session_start(); //Начало сессии
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Авторизация и регистрация</title>

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
</head>
<body>

    <!-- Профиль -->
    <div class="profile">
        <h2 ><?= $_SESSION['user']['fio'] ?></h2>
        </br>
        <a href="inc/logout.php" class="logout">Выход</a>
    </div>

    <div class="main">
    <ul class="widget-list">
        <li><a href="student.php" target="iframeB">Студенты</a></li>
        <li><a href="speciality.php" target="iframeB">Специальности</a></li>
        <li><a href="rabotnik.php" target="iframeB">Сотрудники</a></li>
        <li><a href="predmet.php" target="iframeB">Предметы</a></li>
        <li><a href="lesson.php" target="iframeB">Занятия</a></li>
        <li><a href="kurs.php" target="iframeB">Курсы</a></li>
        <li><a href="gruppa.php" target="iframeB">Группы</a></li>
        <li><a href="grade.php" target="iframeB">Успеваемость</a></li>
    </ul>
    </div>
    </br>
    <div class="tabl">
    <section>
        <iframe name="iframeB" frameborder=0 width="1200px" height="700px"></iframe>
    </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</body>
</html>