<?php
	if(isset($_POST["btnsubmit"]))
	{
		extract($_POST);
		include "studentattendence_db.php";
		if($rec=mysqli_fetch_array(mysqli_query($con,"SELECT student_id FROM `student` order by student_id desc limit 1")))
		{
			$bid =1+ $rec['student_id'];
		}
		$en = date("Y").$bid;
		
		$query = "INSERT INTO  `student`(`enrolment_no` ,  `name` ,  `mobile` ,  `email`) VALUES('$en','$name','$mobile','$email')";

		$q = mysqli_query($con,$query)or die("insert error");
		
			print "<script>";
			print "alert('Student add successfully....');";
			print "self.location='index1.php';";
			print "</script>";
		
	}
	else
	{
		header("Location:index1.php");
	}
?>
