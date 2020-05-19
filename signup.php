<!DOCTYPE html>
<html>
  <head>
<style>
.error{
  color: #FF0000;
}
</style>

    <meta charset="utf-8">
    <title>Shared Shelf | Book Sharing Platform</title>
    <link rel="stylesheet" href="signup.css">
    <link rel="stylesheet" type="text/css" href="home.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Trade+Winds&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Special+Elite&display=swap" rel="stylesheet">
  <scr
  </head>
  <body>


  


    <div class="Signin-box">
      <h1>SignUp</h1>
      <form method="post" action=" <?php htmlspecialchars($_SERVER['PHP_SELF']); ?>">
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="E-mail Address">
          <span class="error">* <?php echo $emailerr; ?></span>
        <input type="number" name="phone" placeholder="Contact No.">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="cpwd" placeholder="Confirm Password">
        <input type="submit" value="SignUp">
      </form>
    </div>



  </body>
</html>
