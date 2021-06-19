<!DOCTYPE html5>
<html>

<body>
  <link href='https://fonts.googleapis.com/css?family=Judson' rel='stylesheet'>
  <?php require'head.php';
  ?>
  <style>
    .format2:nth-child(even) {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      background-color: rgb(231, 229, 229, 0.5);
      margin-top: 5px;
      font-weight: bolder;
      font-family: 'Judson';
    }

    .format2:nth-child(odd) {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
      background-color: white;
      margin-top: 5px;
      font-weight: bolder;
      font-family: 'Judson';
    }

    i {
      font-weight: bolder;
    }

    form {
      font-family: 'Judson';
      font-size: 22px;
      font-weight: boledr;
    }

    .format2 {
      padding: 20px;
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    }
  </style>
  <br><br>
  <?php
$id=1;
$cansop="Z";
$ent=0;
$track=0;
$st=1;
$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "exam";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
   }
$sql2="SELECT COUNT(ENTRY) as track FROM result WHERE NAME='".$_SESSION["user"]."'AND TEST='TEST 2'";
$result2 = $conn->query($sql2);
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
  while($row = $result2->fetch_assoc()) {
  $no=$row["track"];
  if($no==1){
  require 'ristrict.php';
  echo "<style>
  .bk{
      display:none;}
</style>";  }
  }

}
if($ent==0){
$sql="SELECT * from test2 where QNO='".$id."'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $quest= $row["QUESTION"];
    $op1= $row["OP1"];
    $op2= $row["OP2"];
    $op3= $row["OP3"];
    $op4= $row["OP4"];
    $cans=$row["CORRECTANS"];
    $cansop=$row["CORRECTANS"];
  }
}
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id=$_POST['idt'];
    $track=$_POST['cans'];
    $id=(int)$id+1;
    date_default_timezone_set("Indian/Comoro");
    $date_t=date("d/m/y");
    if($id>=26){
      $sql = "INSERT INTO result (NAME, TEST, SCORE,DATE_E) VALUES ('".$_SESSION['user']."', 'TEST 2', '".$track."','".$date_t."')";
if ($conn->query($sql) === TRUE) {
  
}
    require 'endmsg.php';
        $st=0;
        echo "<style>
        .bk{
            display:none;}
      </style>";   
    }
    if($st==1){
      $cansop=$_POST['cansop'];
      $subans=$_POST['anss'];
      if($cansop==$subans){
        $track++;
        }
    $sql="SELECT * from test2 where QNO='".$id."'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
        $quest= $row["QUESTION"];
        $op1= $row["OP1"];
        $op2= $row["OP2"];
        $op3= $row["OP3"];
        $op4= $row["OP4"];
        $cansop=$row["CORRECTANS"];
      }
    }   
}
}
?><br>
  <br>
  <div class="bk">
    <h1 style="color:9744be;text-align:center;font-family:'Yeseva One'">TEST 2</h1><br><br>
    <div class="container">
      <div style="float:right;">
        <i class="fa fa-clock-o" style="font-size:24px;color:#9744be"> </i><i id="MyClockDisplay" class="clock"
          onload="showTime()"></i>
        <i id="effect" style="margin-left:10px;"> 00:00:00 </i><i style="color:#9744be" class="fa fa-hourglass-half"
          style="font-size:20px"> </i>
      </div>
      <br><br>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" id="format">
        <div id="format1">
          <input style="display:none;" type="text" name="idt" readonly value="<?php echo $id; ?>">
          <input style="display:none;" type="text" name="cans" readonly value="<?php echo $track; ?>">
          <input style="display:none;" type="text" name="cansop" readonly value="<?php echo $cansop; ?>">
          <div class="format2" style="background-color:#9744be;color:white">
            <?php echo  $id.") ".$quest; ?>
          </div>
          <div class="format2"><input type="radio" name="anss" value="A" required>
            <?php echo $op1; ?>
          </div>
          <div class="format2"><input type="radio" name="anss" value="B" required>
            <?php echo $op2; ?>
          </div>
          <div class="format2"><input type="radio" name="anss" value="C" required>
            <?php echo $op3; ?>
          </div>
          <div class="format2"><input type="radio" name="anss" value="D" required>
            <?php echo $op4; ?>
          </div>
        </div>
        <br><br>
        <div>
          <button type="submit" class="btn btn-primary"
            style="font-weight: bolder;word-spacing:3px;font-size:23px;">SUBMIT <i class="fa fa-send"
              style="font-size:16px"></i></button>
        </div>

        <br>
      </form>

      <script>
        var m = 0, s = 0, h = 0;
        function ab() {
          s++;
          document.getElementById('effect').innerHTML = h + ":" + m + ":" + s;
          if (s == 59) {
            s = 0;
            m++;
          }
          if (m == 59) {
            m = 0;
            h++;
          }
          setTimeout(ab, 1000);
        }
        ab();
        function showTime() {
          var date = new Date();
          var h = date.getHours(); // 0 - 23
          var m = date.getMinutes(); // 0 - 59
          var s = date.getSeconds(); // 0 - 59
          var session = "AM";

          if (h == 0) {
            h = 12;
          }

          if (h > 12) {
            h = h - 12;
            session = "PM";
          }

          h = (h < 10) ? "0" + h : h;
          m = (m < 10) ? "0" + m : m;
          s = (s < 10) ? "0" + s : s;

          var time = h + ":" + m + ":" + s + " " + session;
          document.getElementById("MyClockDisplay").innerHTML = time;

          setTimeout(showTime, 1000);

        }

        showTime();
      </script>
    </div>
    <!-- Latest compiled and minified CSS -->

    <link href='https://fonts.googleapis.com/css?family=Yeseva One' rel='stylesheet'>
    <footer>
      &copy;2020-2021|a.s.prajna
    </footer>
  </div>
</body>

</html>