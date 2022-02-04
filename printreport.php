<!DOCTYPE html>
<html>
<head>
<title>Student Attendance</title>
<style type="text/css">
<!--
.style1 {
	font-family: sans-serif;, monospace;
	font-size: 60px;
	color: black;
}
.style2 {
	font-size: 24px;
	color: black;
}
.style6 {font-size: 16px}
-->
</style>
</head>
<body>
<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="black" bgcolor="yellow"><h1 align="center"><strong><span class="style1">Student Attendance</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#87CEFA"><div align="center">
       						<?php 
									include "menu.php";
							?> 
        				</div>       </td>
      </tr>
      <tr>
        <td><div align="center">
        <form action="" method="post">
          <table width="606" border="2" align="center" bordercolor="black" bgcolor="yellow">
          	<tr><td colspan="3" align="center"><h3>Search Enrolment No Wise Records Here</h3></td></tr>
            <tr>
              <td width="308" bgcolor="#87CEFA"><div align="center"><strong><span class="style2">Enter the enrolment no</span></strong></div></td>
              <td width="144" bgcolor="#87CEFA"><span class="style6">
                <input type="text" name="eno" />
              </span></td>
              <td width="130" bgcolor="#87CEFA"><input type="submit" value="View Information" name="btnsubmit"/></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
		<?php
		if(isset($_POST["btnsubmit"]))
		{
			include "studentattendence_db.php";
			extract($_POST);
			$query = "select * from `student` where enrolment_no = ".$eno." limit 1";

			$result = mysqli_query($con, $query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="400" border="2" align="center" bordercolor="black" bgcolor="yellow">
				<tr>
				  <td width="160" bgcolor="#87CEFA"><span class="style2">Enrolment No</span></td>
				  <td width="160" bgcolor="#87CEFA"><span class="style2">Name</span></td>';
				  $query1 = "select * from `attendence` where `student_id` = ".$rec["student_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="#87CEFA" class=style2>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222"><span class="style6">'.$rec["enrolment_no"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["name"].'</span></td>';
				  $query1 = "select *from `attendence` where `student_id` = ".$rec["student_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td>';
						if($rec1["attendence"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
								
			  </table></td></tr>';
			}
		}
		else
		{
			include "studentattendence_db.php";
			extract($_POST);
			$query = "select * from `student` ";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr><td colspan="2"><table width="90%" border="2" align="center" bordercolor="black" bgcolor="white">
				<tr>
				  <td width="160" bgcolor="#87CEFA"><span class="style2">Enrolment No</span></td>
				  <td width="160" bgcolor="#87CEFA"><span class="style2">Name</span></td>';
				  $query1 = "select * from `attendence` where `student_id` = ".$rec["student_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td bgcolor="white" class=style2>'.$rec1["date"].'</td>';
					}
				echo '</tr>
				<tr>
				  <td width="222"><span class="style6">'.$rec["enrolment_no"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["name"].'</span></td>';
				  $query1 = "select *from `attendence` where `student_id` = ".$rec["student_id"]." order by date";
					$result1 = mysqli_query($con,$query1)or die("select error error");
					while($rec1 = mysqli_fetch_array($result1))
					{
				  		echo '<td>';
						if($rec1["attendence"]==0)
							echo "Absent";
						else
							echo "Present";
						echo '</td>';
					}
				
				echo '
				</tr>
								
			  </table></td></tr>';
			}
		}
		?>    
	</table>
</body>
</html>