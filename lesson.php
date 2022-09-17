<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Практическая работа №1</title>
</head>
<body>
		<?php
        echo "<table class='table'>";
        echo "<tr>";
        echo  "<th scope='col'>#</th>";
        echo  "<th scope='col'>Название занятия</th>";
        echo   "<th scope='col'>Дата занятия</th>";
        echo   "<th scope='col'># предмета</th>";
        echo "</tr>";
			$db=mysqli_connect("localhost", "root", "", "education");
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "select * from `lesson`");
			$myrow = mysqli_fetch_array($r);
			do{
				echo "<tr>
				<form action = 'update.php' method = 'POST'>
					<td>$myrow[id_lesson]</td>
					<td><input size='50' class='form-control', name = 'name_of_lesson' type='text' value='$myrow[name_of_lesson]'></td>
					<td><input size='8' class='form-control', name = 'date_of_lesson' type='date' value='$myrow[date_of_lesson]'></td>
                    <td><input size='8' class='form-control', name = 'fk_predmet' type='text' value='$myrow[fk_predmet]'></td>
					<td><input name='id_lesson' type='checkbox' value='$myrow[id_lesson]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td>
					<form action='delete.php' method='POST'>
						<input name='id_lesson' type='checkbox' value='$myrow[id_lesson]'>
						<input name='submit' type='submit' class='btn btn-danger' value='Удалить'>
					</form>
				</td>
				</tr>";
			}
            while ($myrow = mysqli_fetch_array($r));
			echo "<tr>
			<form action = 'insertL.php' method = 'POST'>
				<td>$myrow[id_lesson]</td>
				<td><input size='50' class='form-control', name = 'name_of_lesson' type='text' value=''></td>
				<td><input size='8' class='form-control', name = 'date_of_lesson' type='date' value=''></td>
				<td><input size='8' class='form-control', name = 'fk_predmet' type='text' value=''></td>
				<td><input name='id_lesson' type='checkbox' value='$myrow[id_lesson]'></td>
				<td><input type='submit' class='btn btn-warning' value='Добавить'></td>
			</form>
			<td>
			</td>
			</tr>";
        echo "</table>";
        
        ?>
        
		

<script src="js/jquery-3.6.0.min.js"></script>
</body>
</html>