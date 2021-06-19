<?php
  
echo "
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link href='https://fonts.googleapis.com/css?family=Amaranth' rel='stylesheet'>
    <title>EXAM</title>
     <link rel='stylesheet' href='style.css'>
</head><nav>
        <ul id='nav1'>
            <a href='index1.php' style='text-decoration: none;'>
                <li class='li1'>HOME</li>
            </a>
            
            <a href='room.php'  style='text-decoration: none;'>
                <li class='li1'>EXAM</li>
            </a>
            <a href='food.php'  style='text-decoration: none;'>
                <li class='li1'>RESULT</li>
            </a>
            <a href='".$_SESSION["linkl"]."'>
            <li id='log'><i class='fa fa-user-circle'></i>".$_SESSION["user"]."</li>
            </a>
            <a href='".$_SESSION["link2"]."'>
                <li id='log'><i class='".$_SESSION["varicon"]."'></i>".$_SESSION["var1"]."</li>
            </a>
        </ul>
    </nav>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css'>

    <!-- jQuery library -->
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>

    <!-- Popper JS -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js'></script>

    <!-- Latest compiled JavaScript -->
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js'></script>
    <!-- FONT AWESOME-->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link href='https://fonts.googleapis.com/css?family=Averia Serif Libre' rel='stylesheet'>";
   ?> 