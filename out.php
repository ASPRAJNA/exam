<!DOCTYPE html5>
<html>
<body>

<?php
// Set session variables
session_start(); 
$_SESSION["user"]=" LOGIN";
$_SESSION["linkl"]="login.php";
$_SESSION["var1"]=" SIGNUP";
$_SESSION["link2"]="signup.php";
$_SESSION["varicon"]="fa fa-sign-in";
require 'head2.php';
?>
<br><br>
<center><div style=" color: #9744be;
            font-weight: bolder;
            font-size: 35px;
            width:50%;
        border-radius: 1em;
        padding: 15px;" class="logp">YOU'VE SUCCESSFULLY LOGGED OUT

<a href="index1.php" style="text-decoration:none;color:#9744be;"><i class="fa fa-mail-reply"></i></a></div>
            </center>

    <!-- Latest compiled and minified CSS -->
    
  
</body>

</html>