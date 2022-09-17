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
        echo  "<th scope='col'>Номер курса</th>";
        echo "</tr>";
			$db=mysqli_connect("localhost", "root", "", "education");
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "select * from `kurs`");
			$myrow = mysqli_fetch_array($r);
			do{
				echo "<tr>
				<form action = 'update.php' method = 'POST'>
					<td>$myrow[id_kurs]</td>
					<td><input size='15' class='form-control', name = 'number_of_kurs' type='text' value='$myrow[number_of_kurs]'></td>
					<td><input name='id_kurs' type='checkbox' value='$myrow[id_kurs]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td>
					<form action='delete.php' method='POST'>
						<input name='id_kurs' type='checkbox' value='$myrow[id_kurs]'>
						<input name='submit' type='submit' class='btn btn-danger' value='Удалить'>
					</form>
				</td>
				</tr>";
			}
            while ($myrow = mysqli_fetch_array($r));
			echo "<tr>
				<form action = 'insertK.php' method = 'POST'>
					<td>$myrow[id_kurs]</td>
					<td><input size='15' class='form-control', name = 'number_of_kurs' type='text' value=''></td>
					<td><input name='id_kurs' type='checkbox' value='$myrow[id_kurs]'></td>
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