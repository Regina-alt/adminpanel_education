<?php
	$id_gruppa = $_POST['id_gruppa'];
	$number_of_gruppa = $_POST['number_of_gruppa'];
	$fk_speciality = $_POST['fk_speciality'];
	$fk_kurs = $_POST['fk_kurs'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `gruppa` SET number_of_gruppa='$number_of_gruppa', fk_speciality='$fk_speciality', fk_kurs='$fk_kurs' WHERE id_gruppa=$id_gruppa");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>