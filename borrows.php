<html>
    <head>
        <title>Get Ur Book</title>
        <link rel="stylesheet" href="bootstrap3.css">
        <!-- <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"> -->
        <!-- <link rel="stylesheet" href="ig.css"> -->
    </head>
    <body>
        <div class="container">
`           <div class="row">

        <?php
            session_start();
            require 'dbconnect.php';
            $b=$_POST['branch'];
            $y=$_POST['year'];
            $s=$_POST['subject'];
            mysql_select_db("bookshare", $conn);
            //select my emailaddress
            $sid=$_SESSION["login"];
            $myemailquery="SELECT * FROM signup WHERE id='$sid' ";
            $meq=mysql_query($myemailquery);
            while($row=mysql_fetch_assoc($meq))
            {
                $myemail=$row['names'];
            }

            //select the book selected
            if($s==""){
                $query="SELECT * FROM books WHERE branch='$b' AND year='$y'";
            }
            else{
            $query="SELECT * FROM books WHERE branch='$b' AND year='$y' AND subject='$s'";
            }
            $q2=mysql_query($query);
            if(!$q2){
                print "select didnt work";
            }
            else
            {
                $nor=mysql_num_rows($q2);
                if($nor==0){
                    print "no record sorry";
                }
                else
                {
                    while($row=mysql_fetch_assoc($q2))
                    {
                        if($_SESSION['login']==$row['login_id'])
                        {
                            // print "its ur book";
                        }

                        else
                        {
                            $pub=$row['publication'];
                            $sub=$row['subject'];
                            // $yr=$row['year'];
                            $au=$row['author'];
                            $sc=$row['sub_code'];
                            $book_id=$row['id'];
                            // fetch owners details
                            $lid=$row['login_id'];
                            $query_owner="SELECT * FROM signup where id=$lid";
                            $query_owner1=mysql_query($query_owner);
                            while($rows=mysql_fetch_assoc($query_owner1))
                            {
                                $ownername=$rows['names'];
                                $owneremail=$rows['email'];
                            }
                            // fetch my details
                            $myid=$_SESSION['login'];
                            $query_my="SELECT * FROM signup WHERE id=$myid";
                            $query_my1=mysql_query($query_my);
                            while($rowss=mysql_fetch_assoc($query_my1))
                            {
                                $myname=$rowss['names'];
                                $myemail=$rowss['email'];
                            }
                            
                            
                            

        ?>
                                <div class="col-md-4 col-sm-6">

                                    <?php 
                                    // $img= " images/.
                                    $name= $row['image'] ;
                                    $img="images/$name";
                                    // echo $img;?>
                                    <a href="bookdetails.php?img=<?php echo $img; ?>&pub=<?php echo $pub;?>&sub=<?php echo $sub;?>&au=<?php echo $au;?>&sc=<?php echo $sc;?>&myname=<?php echo $myname;?>&myemail=<?php echo $myemail;?>&ownername=<?php echo $ownername;?>&owneremail=<?php echo $owneremail;?>&owner_id=<?php echo $lid;?>&buyer_id=<?php echo $myid;?>&lend_id=<?php echo $book_id;?>"><img src="<?php echo $img; ?>" alt="" class='img-thumbnail' style='margin-bottom: 0px' ></a>
                                    <p style='margin-bottom: -10px'><?php echo "".$row['subject']."\n";?></p>
                                    <p style='margin-bottom: 40px'><?php echo "".$row['publication']."\n";?></p>
                       <?php }
                    }
                }
            }?>
                                </div>
                            </div>
            </div>
   