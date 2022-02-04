<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Student Attendance</title><style type="text/css">
<!--
.style1 {
	font-family: sans-serif;, monospace;
	font-size: 60px;
	color: black;
}
.style2 {
	font-size: 24px;
	color: black
}
.style6 {font-size: 16px}
-->
tr{

}
tr:hover{
	background-color: yellow;

}
</style></head>

<body>
<table width="800" border="1" align="center">
      <tr>
        <td bordercolor="black" bgcolor="yellow"><h1 align="center"><strong><span class="style1">Student Attendance</span></strong></h1></td>
      </tr>
      <tr>
        <td bgcolor="#87CFEA"><div align="center">
       						<?php 
									include "menu.php";
							?> 
        				</div>       </td>
      </tr>
      
      	<tr style="background-color: white;"><td colspan="2">
        <form action="" method=post>
        
        <table width="500" border="2" align="center" cellpadding="5" cellspacing="10" bordercolor="black" bgcolor="white">
        	<tr>
				  <td colspan="5" bgcolor="yellow"><div align="center"><strong><span class="style2">Student information</span></strong></div></td>
			</tr>
            <tr>
				  <td  bgcolor="#87CFEA"><div align="center"><strong><span class="style2">Enrolment No</span></strong></div></td>
                  <td  bgcolor="#87CFEA"><div align="center"><strong><span class="style2">Name</span></strong></div></td>
                  <td  bgcolor="#87CFEA"><div align="center"><strong><span class="style2">Mobile</span></strong></div></td>
                  <td  bgcolor="#87CFEA"><div align="center"><strong><span class="style2">Email</span></strong></div></td>
                  <td  bgcolor="#87CFEA"><div align="center"><strong><span class="style2">Delete</span></strong></div></td>
			</tr>
				
		<?php
			include "studentattendence_db.php";
			$query = "select *from `student` ";

			$result = mysqli_query($con,$query)or die("select error error");
			while($rec = mysqli_fetch_array($result))
			{
				echo '<tr height=30px>
				  <td width="222"><span class="style6">'.$rec["enrolment_no"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["name"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["mobile"].'</span></td>
				  <td width="222"><span class="style6">'.$rec["email"].'</span></td>
				  <td width="222"><span class="style6">';
				  echo '<a style="background-color:white;color:black;border:solid;text-decoration:none;border-radius:10px;position:relative;top:0px;border-color:#87CFEA;" href="deletestudent.php?d='.$rec["student_id"].'">&nbsp;Delete&nbsp;</a></span></td></tr>';			  
			}
		
		?>    
        </table>
        </form>
        </td>
        </tr>
	</table>


	</body>
	</html>    



