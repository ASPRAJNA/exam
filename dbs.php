<?php
$usns="username";
$pass="pass";
$pass1="pass";
$adss="add";
$dob="";
$phon="";
$usnsd="";
$passd="";
$pass1d="";
$adssd="";
$dobd="";
$phond="";  
$error="* ENTER ALL FIELDS";
$status=0;
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usnsd=$_POST["usns"];
    $phond=$_POST["phon"];
    $passd=$_POST["pass"];
    $pass1d=$_POST["pass1"];
    $adssd=$_POST["adss"];
    $dobd=$_POST["dob"];
    if(empty($usnsd)){
        $status=1;
        $usnsd=$_POST["usns"];
    $phond=$_POST["phon"];
    $passd=$_POST["pass"];
    $pass1d=$_POST["pass1"];
    $adssd=$_POST["adss"];
    $dobd=$_POST["dob"];
        exit("USERNAME REQUIRED");   
    }
    if(empty($passd)){
        $status=1;
        $usnsd=$_POST["usns"];
    $phond=$_POST["phon"];
    $passd=$_POST["pass"];
    $pass1d=$_POST["pass1"];
    $adssd=$_POST["adss"];
    $dobd=$_POST["dob"];
        exit("PASSWORD REQUIRED");    
    }
    if(empty($pass1d)){
        $status=1;
        $usnsd=$_POST["usns"];
    $phond=$_POST["phon"];
    $passd=$_POST["pass"];
    $pass1d=$_POST["pass1"];
    $adssd=$_POST["adss"];
    $dobd=$_POST["dob"];
        exit("PASSWORD SHOULD BE ENTERED TWICE");    
    }
    if(empty($adssd)){
        $status=1;
        $usnsd=$_POST["usns"];
    $phond=$_POST["phon"];
    $passd=$_POST["pass"];
    $pass1d=$_POST["pass1"];
    $adssd=$_POST["adss"];
    $dobd=$_POST["dob"];
        exit("ADDRESS REQUIRED");    
    }
    if(empty($dobd)){
        $status=1;
        $usnsd=$_POST["usns"];
    $phond=$_POST["phon"];
    $passd=$_POST["pass"];
    $pass1d=$_POST["pass1"];
    $adssd=$_POST["adss"];
    $dobd=$_POST["dob"];
        exit("DOB  REQUIRED");    
    }
    if($passd!=$pass1d){
        $status=1;
        $usnsd=$_POST["usns"];
    $phond=$_POST["phon"];
    $passd=$_POST["pass"];
    $pass1d=$_POST["pass1"];
    $adssd=$_POST["adss"];
    $dobd=$_POST["dob"];
        exit("PASSWORD AND CONFIRM PASSWORD MUST BE SAME"); 
    }
    if($status==0){
          $host = "localhost";
          $dbusername = "root";
          $dbpassword = "";
          $dbname = "exam";
          $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
             
            }
            $sql="INSERT INTO  users(USER, PASS, ADDR, PHON, DOB) VALUES ('".$usnsd."','".$passd."','".$adssd."','".$phond."','".$dobd."')";            
            if ($conn->query($sql) === TRUE) {
                header("location:http://localhost/EXAM/login.php");
            } else {
                $phond=$_POST["phon"];
                $passd=$_POST["pass"];
                $pass1d=$_POST["pass1"];
                $adssd=$_POST["adss"];
                $dobd=$_POST["dob"];
              echo "USER ALREADY EXIST PLEASE ENTER UNIQUE USERNAME";
            }
   
  
}
   }
   ?>