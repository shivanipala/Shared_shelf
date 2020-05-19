<?php
  
  // session_start();

  require 'dbconnect.php';
  
$n=$_POST['names'];
$e=$_POST['email'];
$p=$_POST['phone'];
$pwd=$_POST['pwd'];
$cpwd=$_POST['cpwd'];

//check whether the user is new or old
mysql_select_db("bookshare",$conn);
$checkemail= "SELECT * FROM signup WHERE email='$e' ";
  $r=mysql_query($checkemail);
  if(!$r){
      print mysql_error();
  }
  global $emailerr;
  print mysql_num_rows($r);
  $c=mysql_num_rows($r);
  if($c > 0)
  {
    echo "u r already registered try a nother emil address";
    header('Location: signup.html');

  }
 else{



$msg= "this mail is sent to u bcoz u have registered for bookshare.....congrats";
$msg= wordwrap($msg,90);
$header= "From: mybookshelf.2020@gmail.com";
$mail= mail($e,"jst for fun",$msg,$header);
if($mail){
  print " mail sent";
}
else{
  print "not sent mail";
}
  $q1="INSERT INTO signup(names,email,phone,passwords) VALUES('$n','$e','$p','$pwd')";

   header('Location: login.php');
  if(!(mysql_query($q1,$conn))){
  print "nopesss";
  }

}




  







?>
