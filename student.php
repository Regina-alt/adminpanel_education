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
        echo   "<th scope='col'># группы</th>";
        echo "</tr>";
			$db=mysqli_connect("localhost", "root", "", "education");
			mysqli_query($db, "set names utf8");
			$r = mysqli_query($db, "SELECT `id_student`, `fio`, `fk_gruppa` FROM `student`");
			$myrow = mysqli_fetch_array($r);
			do{
				echo "<tr>
				<form action = 'updateST.php' method = 'POST'>
					<td>$myrow[id_student]</td>
					<td><input size='30' class='form-control', name = 'fio' type='text' value='$myrow[fio]'></td>
					<td><input size='8' class='form-control', name = 'fk_gruppa' type='text' value='$myrow[fk_gruppa]'></td>
					<td><input name='id_student' type='checkbox' value='$myrow[id_student]'></td>
					<td><input type='submit' class='btn btn-warning' value='Изменить'></td>
				</form>
				<td>
					<form action='deleteST.php' method='POST'>
						<input name='id_student' type='checkbox' value='$myrow[id_student]'>
						<input name='submit' type='submit' class='btn btn-danger' value='Удалить'>
					</form>
				</td>
				</tr>";
			}
            while ($myrow = mysqli_fetch_array($r));
			echo "<tr>
				<form action = 'insertS.php' method = 'POST'>
					<td>$myrow[id_student]</td>
					<td><input size='30' class='form-control', name = 'fio' type='text' value=''></td>
					<td><input size='8' class='form-control', name = 'fk_gruppa' type='text' value=''></td>
					<td><input name='id_student' type='checkbox' value='$myrow[id_student]'></td>
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