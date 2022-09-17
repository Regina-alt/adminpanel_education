<?php
	$id_speciality = $_POST['id_speciality'];
	$name_of_speciality = $_POST['name_of_speciality'];
	$code_of_speciality = $_POST['code_of_speciality'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `speciality` SET name_of_speciality='$name_of_speciality', code_of_speciality='$code_of_speciality'WHERE id_speciality=$id_speciality");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>