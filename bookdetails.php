<html>
    <head>
        <title>This Book</title>
    </head>
    <body>
        
    <center><img src="<?php echo $_GET['img']; ?>" style='margin-bottom: 30px' width="300px" height="400px"></center>
    <center><h2>Subject:<?php 
    $e2= $_GET['sub'];
    echo $e2;?></h2></center>
    
    <center><h2>Publication: <?php 
    $e1= $_GET['pub'];
    echo $e1;?></h2></center>

    <center><h2>Author: <?php 
    $e3= $_GET['au'];
    echo $e3;?></h2></center>

    <center><h2>Subject Code: <?php 
    $e4= $_GET['sc'];
    echo $e4;?></h2></center>
    
    <center><h2>Subject Code: <?php 
    $e5= $_GET['ownername'];
    echo $e5;?></h2></center>

    <center><h2>Subject Code: <?php 
    $e6= $_GET['owneremail'];
    echo $e6;?></h2></center>
<?php 
    $owner_id=$_GET['owner_id'];
    $lend_id=$_GET['lend_id'];
    $buyer_id=$_GET['buyer_id'];



?>
<form method="post">
    <center><input type="submit" value="Request" name="submit"></center>
</form>
<?php

    session_start();
    require 'dbconnect.php';
    if(isset($_POST['submit']))
    {
        mysql_select_db("bookshare",$conn);
        $request_book="INSERT INTO request(owner_id,buyer_id,lend_id)  VALUES('$owner_id','$buyer_id','$lend_id') ";
        if(mysql_query($request_book))
        {
            print "requested";
        }
        else{
            print "notrequested";
        }
        $i=$_GET['myname'];
        $msg= $i." wants ur book.Do u wanna give?";
        $msg= wordwrap($msg,90);
        $header= "From: mybookshelf.2020@gmail.com";
        $mail= mail($e6,"jst for fun",$msg,$header);
        if($mail){
        print "mail sent";
        }
        else{
        print "not sent mail";
        }
    }
    else{}



?>
</body>
</html>
