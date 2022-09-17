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
        echo  "<th scope='col'>Название предмета</th>";
        echo   "<th scope='col'># сотрудника</th>";
        echo "</tr>";
			$db=mysqli_connect("localhost", "root", "", "education");
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "select * from `predmet`");
			$myrow = mysqli_fetch_array($r);
			do{
				echo "<tr>
				<form action = 'update.php' method = 'POST'>
					<td>$myrow[id_predmet]</td>
					<td><input size='50' class='form-control', name = 'name_of_predmet' type='text' value='$myrow[name_of_predmet]'></td>
					<td><input size='8' class='form-control', name = 'fk_rabotnik' type='text' value='$myrow[fk_rabotnik]'></td>
					<td><input name='id_predmet' type='checkbox' value='$myrow[id_predmet]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td>
					<form action='delete.php' method='POST'>
						<input name='id_predmet' type='checkbox' value='$myrow[id_predmet]'>
						<input name='submit' type='submit' class='btn btn-danger' value='Удалить'>
					</form>
				</td>
				</tr>";
			}
            while ($myrow = mysqli_fetch_array($r));
				
			echo "<tr>
				<form action = 'insertP.php' method = 'POST'>
					<td>$myrow[id_predmet]</td>
					<td><input size='50' class='form-control', name = 'name_of_predmet' type='text' value=''></td>
					<td><input size='8' class='form-control', name = 'fk_rabotnik' type='text' value=''></td>
					<td><input name='id_predmet' type='checkbox' value='$myrow[id_predmet]'></td>
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