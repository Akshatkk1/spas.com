<!DOCTYPE html>
<html>
<head>
<title>Student Attendance</title><style type="text/css">
<!--
.style1 {
	font-family: sans-serif, monospace;
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
        <td bordercolor="blue" bgcolor="yellow"><h1 align="center"><strong><span class="style1">Student Attendance</span></strong></h1></td>
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
        <form action="insertstudent.php" method="post">
          <table width="400" border="2" align="center" bordercolor="black" bgcolor="white">
            <tr>
              <td colspan="2" bgcolor="yellow"><div align="center"><strong><span class="style2">Enter the student information</span></strong></div></td>
            </tr>
            <tr>
              <td width="160"><span class="style6">Name</span></td>
              <td width="222"><span class="style6"><input type="text" name="name" /></span></td>
            </tr>
            <tr>
              <td><span class="style6">Mobile</span></td>
              <td><span class="style6"><input type="text" name="mobile" /></span></td>
            </tr>
            <tr>
              <td><span class="style6">Email</span></td>
              <td><span class="style6"><input type="email" name="email" /></span></td>
            </tr>
            <tr>
              <td colspan="2"><div align="center">
                <input type="submit" value="Add Student" name="btnsubmit"/>
                &nbsp;&nbsp;
                <input type="reset" value="Reset" name="btnreset"/>
              </div></td>
            </tr>
          </table>
          </form>
        </div></td>
      </tr>
    </table>
</body>
</html>
