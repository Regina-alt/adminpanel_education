<?php
		$id_lesson = $_POST['id_lesson'];

		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "DELETE FROM `lesson` WHERE id_lesson=$id_lesson");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>