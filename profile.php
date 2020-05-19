<?php
//  session_start();

require 'navbar.php';
require 'dbconnect.php';
mysql_select_db("bookshare",$conn);
$sid=$_SESSION['login'];
$query1="SELECT * FROM signup WHERE id=$sid";
$q1=mysql_query($query1);
while($row=mysql_fetch_assoc($q1)){
    $name=$row['names'];
    $email=$row['email'];
    $phone=$row['phone'];
}

?>
<html>
    <head>
        <br>
        <br>
        <br>
        <title>My Profile</title>
    </head>
    <body>
        <h1 style= "color:red"><center>My details</center></h1>

        <center><h2>Name:    <?php
            echo $name;?></h2>
         
        <h2>Email:   <?php
            echo $email;?></h2>
        
        <h2>Phone:   <?php
            echo $phone;?>
        </h2>
            </center>
            <h1 style= "color:red"><center>Books i Lended</center></h1>
            <?php 
            
            $myid=$_SESSION['login'];
            $mybooks="SELECT * FROM books WHERE login_id=$myid";
            $mybooksquery=mysql_query($mybooks);
            $i=1;
            ?>
            <center><table border="2px">
                    <th>
                    <td>Branch</td>
                        <td>Year</td>
                        
                        <td>Subject</td>
                        <td>Publication</td>
                        <td>Subject Code</td>
                        <td>Author</td>
            </tr>
            <?php
            while($row=mysql_fetch_assoc($mybooksquery)){
                $br=$row['branch'];
                $yr=$row['year'];
                
                $su=$row['subject'];
                $pu=$row['publication'];
                $sc=$row['sub_code'];
                $au=$row['author'];
                ?>
                
            <tr>
            <td><?php echo ''.$i. "\n";?></td>
            <td><?php echo ''.$br. "\n";?></td>
            <td><?php  echo ''.$yr. "\n";?></td>
            
            <td><?php echo ''.$su. "\n";?></td>
            <td><?php  echo ''.$pu. "\n";?></td>
            <td><?php echo ''.$sc. "\n";?></td>
            <td><?php echo ''.$au. "\n";?></td>
            </tr>
                <?php
                $i=$i+1;
            }?>
            </table></center>

            <h1 style= "color:red"><center>Requests</center></h1>
            <?php 
                $select_request="SELECT * FROM request WHERE owner_id=$sid";
                $select_request_query=mysql_query($select_request);
                $i=1;
                while($rows=mysql_fetch_assoc($select_request_query))
                {
                    
                    $book_id=$rows['lend_id'];
                    $buyer_id=$rows['buyer_id'];
                    // select book details
                    $select_book="SELECT * FROM books WHERE id=$book_id";
                    $select_book_query=mysql_query($select_book);
                    while($book_row=mysql_fetch_assoc($select_book_query)){
                        $subject=$book_row['subject'];
                        $publication=$book_row['publication'];
                        $branch=$book_row['branch'];
                        $year=$book_row['year'];
                    }

                    // select buyer details
                    $select_buyer="SELECT * FROM signup WHERE id=$buyer_id";
                    $select_buyer_query=mysql_query($select_buyer);
                    while($buyer_row=mysql_fetch_assoc($select_buyer_query))
                    {
                        $buyer_name=$buyer_row['names'];
                        $buyer_phone=$buyer_row['phone'];
                        $buyer_email=$buyer_row['email'];
                    }

                    echo "" .$i. ".  <br>";
                    echo "Subject: " .$subject. "<br>";
                    echo "Publication: " .$publication. "<br>";
                    echo "Branch: " .$branch. "<br>";
                    echo "Year: " .$year. "<br>";
                    echo "Buyers Name: " .$buyer_name. "<br>";
                    echo "Phone: " .$buyer_phone. "<br>";
                    ?>
                    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <input type="submit" value="accept">
                </form>
                <?php 
                if($_SERVER["REQUEST_METHOD"]=="POST"){
                    $msg= "
                    <html>
                    <head>
                    <title>Book Confirmed</title>
                    </head>
                    <body>

                    <h2>Congrats!!!!<br> Your book with the following details is approved...<br> 
                    Here are the necessary details<h2> 
                    <br>
                    <h2>Name of the book:   $subject</h2>
                    <h2>Owner's Name:       $name</h2>
                    <h2>Contact No:         $phone</h2>
                    <br>
                    <br>
                    <p>
                    Thanks for using Shared Shelf!!!<br>
                    Hope to see you again...<br></p>
                    </body>
                    </html>";





                    $msg= wordwrap($msg,90);
                    $header="MIME-Version: 1.0" . "\r\n";
                    $header.="Content-type:text/html; charset=UTF-8" . "\r \n";
                    $header.= "From: mybookshelf.2020@gmail.com";
                    $mail= mail($buyer_email,"jst for fun",$msg,$header);
                    if($mail){
                    print " mail sent";
                    }
                    else{
                    print "not sent mail";
                    }

                }

                    
                    $i=$i+1;
                }
            ?>
    </body>
</html>
