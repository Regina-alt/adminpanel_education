<?php
	$id_predmet = $_POST['id_predmet'];
	$name_of_predmet = $_POST['name_of_predmet'];
	$fk_rabotnik = $_POST['fk_rabotnik'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "INSERT INTO `predmet`(name_of_predmet, fk_rabotnik) VALUES ('$name_of_predmet', '$fk_rabotnik')");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>