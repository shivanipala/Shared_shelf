<?php
    session_start();
    require 'dbconnect.php';
    $b=$_POST['branch'];
    $y=$_POST['year'];
    $s=$_POST['subject'];
    $p=$_POST['publication'];
    $a=$_POST['author'];
    $sc=$_POST['scode'];
    $lid=$_SESSION['login'];
    // $i=$_POST['image'];
    // print $i;
    mysql_select_db("bookshare", $conn);
    

    if (isset($_POST['submit'])) {
        // Get image name
        $image = $_FILES['image']['name'];
        // Get text
        // $image_text = mysql_real_escape_string($db, $_POST['image_text']);
  
        // image file directory
        $target = "images/".basename($image);
  
        // $sql = "INSERT INTO images (image, image_text) VALUES ('$image', '$image_text')";
        // execute query
        // mysql_query($db, $sql);
        $sql=" INSERT INTO books(branch,year,subject,publication,author,sub_code,image, login_id) 
        VALUES ('$b', '$y', '$s', '$p', '$a', '$sc', '$image', '$lid') ";
        if(!(mysql_query($sql,$conn))){
            print "nopesss";
        }
    
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
        }
    }

   

    // $result = mysqli_query($db, "SELECT * FROM images");
  


?>