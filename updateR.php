<?php
	$id_rabotnik = $_POST['id_rabotnik'];
	$fio = $_POST['fio'];
	$position = $_POST['position'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `rabotnik` SET fio='$fio', position='$position'WHERE id_rabotnik=$id_rabotnik");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>