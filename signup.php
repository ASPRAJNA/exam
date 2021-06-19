<!DOCTYPE html5>
<html>

<body>
    <div>
        <?php
// Set session variables
require 'head.php';
?><div style="font-family: 'Amaranth';
font-size: 20px;
margin-top:130px;
text-align:center;
cursor: pointer;
color: #9744be; 
">
    <?php
// Set session variables
require 'dbs.php';
?>
  
</div>
        <br><br>
        <center >
            <div class="row container">
                <div class="col-sm-3"></div>
                <div class="col-sm-6 logp">
                    <h2 style="font-family: 'Amaranth';color:#9744be;">SIGNUP</h2>
                    <form id="logf" method="post" action="">
                        <br><br>
                        <div style="margin-top:5px;">
                            <label style="width:130px;">USERNAME :</label>
                            <input autocomplete="off" name="usns" class="inpf" type="text" value="<?php echo $usns ?>"><br>
                        </div>
                        <div style="margin-top:5px;">
                            <label style="width:130px;">PHONE NO:</label>
                            <input autocomplete="off" name="phon" class="inpf" type="number" maxlength="10"
                                value="<?php echo $phon ?>"><br>
                        </div>
                        <div style="margin-top:5px;">
                            <label style="width:130px;">ADDRESS:</label>
                            <input autocomplete="off" name="adss" class="inpf" type="text" value="<?php echo $adss ?>"><br>
                        </div>
                        <div style="margin-top:5px;">
                            <label style="width:130px;">DOB:</label>
                            <input autocomplete="off" name="dob" class="inpf" type="date" value="<?php echo $dob ?>"><br>
                        </div>
                        <div style="margin-top:5px;">
                            <label style="width:130px;">PASSWORD:</label>
                            <input autocomplete="off" name="pass" class="inpf" type="password" value="<?php echo $pass ?>"><br>
                        </div>
                        <div style="margin-top:5px;">
                            <label style="width:130px;">CONFIRM :</label>
                            <input autocomplete="off" name="pass1" class="inpf" type="password" value="<?php echo $pass1 ?>"><br><br>
                        </div>
                        <input autocomplete="off" type="submit" name="submit" class="btn btn-outline-success" Value="SUBMIT">
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
            <label
                style=" margin-top:30px;font-size: 20px;color: #9744be;font-weight: bolder;font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">
                <?php echo $error ?>
            </label>
        </center>
        <br><br>
        <footer>
            &copy;2020-2021|a.s.prajna
        </footer>
        <!-- Latest compiled and minified CSS -->

    </div>
</body>

</html>