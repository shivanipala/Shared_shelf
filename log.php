<?php
session_start();
require 'dbconnect.php';
$u=$_POST['name'];
$p=$_POST['pwd'];
mysql_select_db("bookshare",$conn);
$match= "SELECT * FROM signup WHERE names='$u' ";
$r=mysql_query($match);
$row= mysql_fetch_array($r);
if(!$r){
    print mysql_error();
}
$matches=mysql_num_rows($r);
if($matches!=1){
    print "ü r not a registered user";
    header('Location: signup.html');
}
else if($row['passwords']==$p){
    print "congrats u r logged in";
    
    $_SESSION['login']=$row['id'];
    header("Location: profile.php");
    exit();
}
else{
    print "enter correct password";
    header('location: login.php');
}