<?php
		include_once "studentattendence_db.php";
		mysqli_query($con,"DELETE FROM `student` WHERE `student_id` = ".$_GET["d"]." LIMIT 1;") or die("Delete student error");
	
		print "<script>";
				print "alert('Student Deleted succesfully.....');";
				print " self.location='viewstudent.php';"; 
		print "</script>";
		
	
?>


