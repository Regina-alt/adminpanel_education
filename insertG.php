<?php
	$id_kurs = $_POST['id_gruppa'];
	$number_of_kurs = $_POST['number_of_gruppa'];
	$fk_speciality = $_POST['fk_speciality'];
	$fk_kurs = $_POST['fk_kurs'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "INSERT INTO `gruppa`(number_of_gruppa,fk_speciality,fk_kurs) VALUES ('$number_of_kurs','$fk_speciality','$fk_kurs')");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>