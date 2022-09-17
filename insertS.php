<?php
	$id_student = $_POST['id_student'];
	$fio = $_POST['fio'];
	$fk_gruppa = $_POST['fk_gruppa'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "INSERT INTO `student`(fio, fk_gruppa) VALUES ('$fio', '$fk_gruppa')");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>