<?php
	$id_student = $_POST['id_student'];
	$fio = $_POST['fio'];
	$fk_gruppa = $_POST['fk_gruppa'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `student` SET fio='$fio', fk_gruppa='$fk_gruppa'WHERE id_student=$id_student");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>