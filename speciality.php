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
        echo  "<th scope='col'>Название специальности</th>";
        echo   "<th scope='col'>Код специальности</th>";
        echo "</tr>";
			$db=mysqli_connect("localhost", "root", "", "education");
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "select * from `speciality`");
			$myrow = mysqli_fetch_array($r);
			do{
				echo "<tr>
				<form action = 'updateS.php' method = 'POST'>
					<td>$myrow[id_speciality]</td>
					<td><input size='45' class='form-control', name = 'name_of_speciality' type='text' value='$myrow[name_of_speciality]'></td>
					<td><input size='20' class='form-control', name = 'code_of_speciality' type='text' value='$myrow[code_of_speciality]'></td>
					<td><input name='id_speciality' type='checkbox' value='$myrow[id_speciality]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td>
					<form action='deleteS.php' method='POST'>
						<input name='id_speciality' type='checkbox' value='$myrow[id_speciality]'>
						<input name='submit' type='submit' class='btn btn-danger' value='Удалить'>
					</form>
				</td>
				</tr>";
			}
            while ($myrow = mysqli_fetch_array($r));
				
				echo "<tr>
				<form action = 'insertSP.php' method = 'POST'>
					<td>$myrow[id_speciality]</td>
					<td><input size='45' class='form-control', name = 'name_of_speciality' type='text' value=''></td>
					<td><input size='20' class='form-control', name = 'code_of_speciality' type='text' value=''></td>
					<td><input name='id_speciality' type='checkbox' value='$myrow[id_speciality]'></td>
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