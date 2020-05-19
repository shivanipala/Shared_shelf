<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shared Shelf|Book Sharing Platform</title>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
  <?php require 'navbar.php';?>
    
    <div class="login-box">
      <h1>LogIn</h1>
      <div class="textbox">
        <i class='fas fa-user-alt'></i>
        <form action="log.php" method="post">
        <input type="text" name="name" placeholder="Username">
      </div>
      <div class="textbox">
        <i class='fas fa-lock'></i>
        <input type="text" name="pwd" placeholder="Password">
      </div>
      <input class="btn" type="submit" value="SignIn">
</form>
      <h3 id="extra">Don't have an account?<a href="signup.html">SignUp</a></h3>
    </div>
  </body>
</html>
