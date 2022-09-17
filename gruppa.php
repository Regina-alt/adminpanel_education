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
        echo  "<th scope='col'>Название группы</th>";
        echo   "<th scope='col'># специальности</th>";
        echo   "<th scope='col'># курса</th>";
        echo "</tr>";
			$db=mysqli_connect("localhost", "root", "", "education");
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "select * from `gruppa`");
			$myrow = mysqli_fetch_array($r);
			do{
				echo "<tr>
				<form action = 'update.php' method = 'POST'>
					<td>$myrow[id_gruppa]</td>
					<td><input size='15' class='form-control', name = 'number_of_gruppa' type='text' value='$myrow[number_of_gruppa]'></td>
					<td><input size='8' class='form-control', name = 'fk_speciality' type='text' value='$myrow[fk_speciality]'></td>
                    <td><input size='8' class='form-control', name = 'fk_kurs' type='text' value='$myrow[fk_kurs]'></td>
					<td><input name='id_gruppa' type='checkbox' value='$myrow[id_gruppa]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td>
					<form action='delete.php' method='POST'>
						<input name='id_gruppa' type='checkbox' value='$myrow[id_gruppa]'>
						<input name='submit' type='submit' class='btn btn-danger' value='Удалить'>
					</form>
				</td>
				</tr>";
			}
            while ($myrow = mysqli_fetch_array($r));
			echo "<tr>
				<form action = 'insertG.php' method = 'POST'>
					<td>$myrow[id_gruppa]</td>
					<td><input size='15' class='form-control', name = 'number_of_gruppa' type='text' value=''></td>
					<td><input size='8' class='form-control', name = 'fk_speciality' type='text' value=''></td>
					<td><input size='8' class='form-control', name = 'fk_kurs' type='text' value=''></td>
					<td><input name='id_gruppa' type='checkbox' value='$myrow[id_gruppa]'></td>
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