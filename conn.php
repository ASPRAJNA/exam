<?php
   session_start();
   $usn="USER";
   $pas="";
   $usn1="";
   $pas1="";
   $err="";
   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($usn1) or empty($pas1)){
        $error="* BOTH USERNAME AND PASSWORD MUST BE ENTERED";
    }
    $usn1=$_POST["usni"];
    $pas1=$_POST["pasi"];
      if(!empty($usn1) or !empty($pas1)){
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
               echo "<script>window.alert('INVALID USER NAME OR PASSWORD');</script>";
            }
            if($result->num_rows ==1 ){
               $_SESSION['user']=$usn1;
            }
   }
  
}
   ?>