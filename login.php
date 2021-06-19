<!DOCTYPE html5>
<html>
<body>
    
<?php
// Set session variables
require 'head.php';

?>
   <br>
   <br>
   <div style="font-family: 'Amaranth';
font-size: 20px;
margin-top:130px;
text-align:center;
cursor: pointer;
color: #9744be; 
">
    <?php
// Set session variables
require 'dbl.php';
?>
   <center style="margin:30px;">
    <div class="row container">
    <div class="col-sm-3"></div>
    <div class="col-sm-6 logp">
            <h2 style="font-family: 'Amaranth';color:#9744be;">LOGIN</h2>
            <form id="logf" method="post" action="">
            <br><br>
            <h5>USER NAME</h5>
            <input autocomplete="off"  name="usni" class="inpf" type="text" value="<?php echo $usn ?>">
            <h5 style="margin:5px;">PASSWORD</h5>
            <input autocomplete="off" name="pasi" class="inpf"  type="password" value="<?php echo $pas ?>"><br><br>
            <input autocomplete="off"  type="submit" name="submit" class="btn btn-outline-success" Value="SUBMIT">
</form>
        </div>
        <div class="col-sm-3"></div>
</div>
<h5 style=" margin-top:30px;font-size: 20px;color: #9744be;font-weight: bolder;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;"><?php echo $error ?></h5>
    </center>
    <br><br>
    <footer>
         &copy;2020-2021|a.s.prajna
    </footer>
   
</body>
</html>