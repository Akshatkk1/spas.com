<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminlogin.css">
    
</head>
<body>
    <form class="admin-login" action ="admin.php" method="POST">
        <h1>
            Admin Login
        </h1>
        <input type="text" name="" placeholder="Enter Username" id="Username" required>
        <input type="password" name="" placeholder="Enter Password" id="Password" required>
        <input type="submit" name="" value="Login" onclick="return validate()" href="admin.<?php  ?>">
        </form>
        <script rel="javascript">  
            function validate()
            {
                var username=document.getElementById("Username").value;
                var password=document.getElementById("Password").value;
                if(username=="admin" && password=="111")
                {
                    alert("login successfully");
                    window.location.href="admin.php";
                }
                else
                {
                    alert("login failed");
                }
            }
        </script>


 

</body>
</html>