<!DOCTYPE html5>
<html>
<link href='https://fonts.googleapis.com/css?family=Judson' rel='stylesheet'>
<body>
  <style>
     
 .idec{
     padding:4px;
     margin:130px;
 }
        .li2:nth-child(even) {
        padding:10px;
        list-style-type: none; 
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      background-color: white;
      margin-top: 10px;
      font-weight:bolder;
      font-size:25px;
      font-family: 'Judson';
    }
    h6{
        font-weight:bolder;
      font-family: 'Judson';
      color:black;  
    } 
    .li2:nth-child(odd) {
        padding:10px;
        list-style-type:none;       
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      background-color: rgb(231, 229, 229, 0.9);
      margin-top: 10px;
      font-size:25px;
      font-weight:bolder;
      font-family: 'Judson';
    } 
    @media screen and (max-width: 800px) {
   
   .idec{
       margin:30px;
   }
}
    @media screen and (max-width: 400px) {
   
    .idec{
        margin:10px;
    }
}
  </style>
  <br><br>
<br>
<br>
<h1 style="color:9744be;text-align:center;font-family:'Yeseva One'">RESULT</h1><br><br>
<div class="container">
<?php
$id=1;
$st=1;
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "exam";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
$sql="SELECT * from result where NAME='".$_SESSION['user']."'";
$result = $conn->query($sql);
echo "<li class='li2' style='color:white;background-color: #9744be;'><i class='idec'>TEST</i><i class='idec'>SCORE</i><i class='idec'>DATE</i></li>";
 
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $op1= $row["DATE_E"];
    $op2= $row["TEST"];
    $op3= $row["SCORE"];
    echo "<li class='li2'><i class='idec'>".$op2."</i><i class='idec'>".$op3."</i><i class='idec'>".$op1."</i></li>";
    //      ".$op2."            ".$op3."
  }
}
echo "<br><br>";
$sql1="SELECT * from result where NAME='".$_SESSION['user']."'";
$result = $conn->query($sql1);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $op2= $row["TEST"];
    $op3= $row["SCORE"];
    $var=$op3*4;
    if($var<=40){
  echo '
  <h6 style="font-size:20px;text-align:center;">'.$op2.'</h6>
                <div class="progress" style="height:18px">
                    <div class="progress-bar  progress-bar-striped progress-bar-animated " style="width:'.$var.'%;background-color:red;border-radius: 5px;">'.$var.'%</div>
                  </div><br>  
  ';}
  else if($var>=80){
    echo '
    <h6 style="font-size:20px;text-align:center;">'.$op2.'</h6>
                  <div class="progress" style="height:18px">
                      <div class="progress-bar  progress-bar-striped progress-bar-animated " style="width:'.$var.'%;background-color:green;border-radius: 5px;">'.$var.'%</div>
                    </div><br>  
    ';}
    else{
        echo '
        <h6 style="font-size:20px;text-align:center;">'.$op2.'</h6>
                      <div class="progress" style="height:18px">
                          <div class="progress-bar bg-warning progress-bar-striped progress-bar-animated " style="width:'.$var.'%;border-radius: 5px;font-size:14px;">'.$var.'%</div>
                        </div><br>  
        ';}
  }
}
?>       
</div>
  </div>
  <!-- Latest compiled and minified CSS -->
  <link href='https://fonts.googleapis.com/css?family=Judson' rel='stylesheet'>
  <link href='https://fonts.googleapis.com/css?family=Yeseva One' rel='stylesheet'>
  <footer>
    &copy;2020-2021|a.s.prajna
  </footer>
</div>
</body>

</html>