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
        echo  "<th scope='col'>ФИО</th>";
        echo   "<th scope='col'>Должность</th>";
        echo "</tr>";
			$db=mysqli_connect("localhost", "root", "", "education");
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "select * from `rabotnik`");
			$myrow = mysqli_fetch_array($r);
			do{
				echo "<tr>
				<form action = 'update.php' method = 'POST'>
					<td>$myrow[id_rabotnik]</td>
					<td><input size='30' class='form-control', name = 'fio' type='text' value='$myrow[fio]'></td>
					<td><input size='25' class='form-control', name = 'position' type='text' value='$myrow[position]'></td>
					<td><input name='id_rabotnik' type='checkbox' value='$myrow[id_rabotnik]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td>
					<form action='delete.php' method='POST'>
						<input name='id_rabotnik' type='checkbox' value='$myrow[id_rabotnik]'>
						<input name='submit' type='submit' class='btn btn-danger' value='Удалить'>
					</form>
				</td>
				</tr>";
			}
            while ($myrow = mysqli_fetch_array($r));
				
			echo "<tr>
				<form action = 'insertR.php' method = 'POST'>
					<td>$myrow[id_rabotnik]</td>
					<td><input size='30' class='form-control', name = 'fio' type='text' value=''></td>
					<td><input size='25' class='form-control', name = 'position' type='text' value=''></td>
					<td><input name='id_rabotnik' type='checkbox' value='$myrow[id_rabotnik]'></td>
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