<?php
	$id_grade = $_POST['id_grade'];
	$fk_student = $_POST['fk_student'];
	$fk_kurs = $_POST['fk_kurs'];
	$fk_lesson = $_POST['fk_lesson'];
	$grade_for_lesson = $_POST['grade_for_lesson'];
	
		$db=mysqli_connect("localhost", "root", "", "education");
		mysqli_query($db, "set names utf8");
		$r = mysqli_query($db, "UPDATE `grade` SET fk_student='$fk_student', fk_kurs='$fk_kurs', fk_lesson='$fk_lesson', grade_for_lesson='$grade_for_lesson' WHERE id_grade=$id_grade");
		if ($r == 'true') {
			echo "<meta http-equiv='refresh'>";			
		} else {
			echo "<script>alert('Ошибка')</script><meta http-equiv='refresh'>";
		}
?>