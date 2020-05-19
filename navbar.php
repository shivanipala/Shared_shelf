<?php session_start();?>
<html lang="en">
<head>
  <title>HAckathon</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="home.css">
</head>
<body><!-- style="background-image: url('boook.jpg'); background-size: cover;"-->
<nav class="navbar navbar-inverse navbar-fixed-top" class="navfont" style="background-color: black;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <lable class="Wname">SharedShelf</lable>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="li"><a href="home.php">HOME</a></li>
        <li id="li"><a href="lend.php" target="_blank">LEND</a></li>
        <li id="li"><a href="borrow.php">BORROW</a></li>
        <li id="li" ><a href="help.php" name="help" onclick='return f1()'>HELP</a></li>
        
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php
      
        if(isset($_SESSION['login']) && !empty($_SESSION['login'])){ ?>
        
        
        <li id="li" ><a href="profile.php"><span class="glyphicon glyphicon-user"></span> My Profile</a></li>       
        <li id="li" ><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log Out</a></li>  
        <?php }
        else{
          ?>
        <li id="li" ><a href="signup.html"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li id="li" ><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        
        <?php }?>
      </ul>
    </div>
  </div>
</nav>
</body>
</html>