<?php
	$id_lesson = $_POST['id_lesson'];
	$name_of_lesson = $_POST['name_of_lesson'];
	$date_of_lesson = $_POST['date_of_lesson'];
	$fk_predmet = $_POST['fk_predmet'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `lesson` SET name_of_lesson='$name_of_lesson', date_of_lesson='$date_of_lesson', , fk_predmet='$fk_predmet' WHERE id_lesson=$id_lesson");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>