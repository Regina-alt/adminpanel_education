<?php
	$id_kurs = $_POST['id_kurs'];
	$number_of_kurs = $_POST['number_of_kurs'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `kurs` SET number_of_kurs='$number_of_kurs' WHERE id_kurs=$id_kurs");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>