<!DOCTYPE html5>
<head>
    <title>HOTEL</title>
    <style>
        body{
            background-image: url("2.png");
            background-repeat:no-repeat;
            background-size: 100% 100%;
        }
        button{
            background-color: rgba(255, 255, 255, 0.712);
            color: #9744be;
            font-weight: bolder;
            font-size: 25px;
            border-color: white;
        border-radius: 1em;
        padding: 15px;
        position: absolute;
        top: 50%;
        left: 50%;
        margin-right: -50%;
        transform: translate(-50%, -50%) 
}
        button:hover{
            border-color: white;
            background-color: rgba(255, 255, 255, 0.87);
            color: #9744be;
        }
    </style>
    <body>
    <?php
// Set session variables#ff4136;
session_start();
$_SESSION["user"]=" LOGIN";
$_SESSION["linkl"]="login.php";
$_SESSION["var1"]=" SIGNUP";
$_SESSION["link2"]="signup.php";
$_SESSION["varicon"]="fa fa-sign-in";
$_SESSION["count"]=1;
?>
        <center>
            <a href="index1.php"><button type="button">VISIT PAGE</button></a>
        </center>
    </body>
</head>