<?php
	$id_lesson = $_POST['id_lesson'];
	$name_of_lesson = $_POST['name_of_lesson'];
	$date_of_lesson = $_POST['date_of_lesson'];
	$fk_predmet = $_POST['fk_predmet'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "INSERT INTO `lesson`(name_of_lesson, date_of_lesson, fk_predmet) VALUES ('$name_of_lesson', '$date_of_lesson', '$fk_predmet')");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>