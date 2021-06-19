<?php
$usn="username";
   $pas="password";
   $usn1="";
   $pas1="";
   $error="* BOTH USERNAME AND PASSWORD MUST BE ENTERED";
   $status=0;
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $usn1=$_POST["usni"];
    $pas1=$_POST["pasi"];
    if(empty($usn1)){
        
        $status=1;
        exit("USERNAME REQUIRED");
        
    }
    if(empty($pas1)){
        $status=1;
        exit("PASSWORD REQUIRED");
        
    }
    if($status==0){
      if(!empty($usn1) or !empty($pas1) or $usn!="" or $pas1!=""){
          $host = "localhost";
          $dbusername = "root";
          $dbpassword = "";
          $dbname = "exam";
          $conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
          if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            $sql="SELECT * from users where USER='".$usn1."' and PASS='".$pas1."'";
            $result = $conn->query($sql);
            if($result->num_rows ==0 ){
                exit("WRONG USERNAME OR PASSWORD");
            }
            if($result->num_rows ==1 ){
                
               $_SESSION["user"]=$usn1;
               $_SESSION["linkl"]="#";
               $_SESSION["var1"]=" LOGOUT";
               $_SESSION["link2"]="out.php";
               $_SESSION["varicon"]="fa fa-power-off";
               header("location:http://localhost/EXAM/index1.php");
               
            }
   }
  
}
   }
   ?>
