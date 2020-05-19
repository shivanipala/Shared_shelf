<!DOCTYPE html>
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
<?php
require 'navbar.php';?>
  <div class="container-fluid" style="background-image: url('boook.jpg'); background-size: cover; height: 600px; width: 100%;">
      <div class="content">
      <div class="name">
      <h1 class="heading">Shared-Shelf</h1>
      <h2 class="lfb">LooK for BooK</h2>
      </div>
      

  <div class="sbar">
      <form class="form-inline mr-auto">
        <input class="sbar_text" type="text" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success btn-rounded btn-sm my-0 search_btn" type="submit">Search</button>
      </form>
  </div>

  <div class="txt col-md-8 col-sm-6">
      <h2 class="txt1">What do you do of your used BOOKs?<br>
    Thinking of a pastiwala?<br>
    Well.... You can go for a better option!!!<br>
    so just..........</h2><h1 class="sys">Share your shelf</h1> 
  </div>


  </div>
</div>


<div class="row" style="margin-top: 60px; margin-bottom: 80px;">
  <div class="container">
    <div class="col-sm-6" style="padding-left: 200px; ">
      <div class="container-fluid"><img src="Lend.png"></div>
       <h3 class="card-title" style="padding-left: 13px; color: blue;">Lend Books</h3>
          <h4 class="card-text ct1">Share or exchange<br>books lying on your shelf.</h4>
    </div>
    <div class="col-sm-6" style="padding-left: 200px;">
     <div class="container-fluid">
      <img src="Borrow.png" width="137" height="118">

       <h3 class="card-title" style="padding-left: 0px; color: blue;">Borrow Books</h3>
          <h4 class="card-text ct2">Searching for your college textbooks?<br>Get it from your own seniors</h4>
</div> 
    </div>
    </div>
</div>



<!--<div class="desc_wrapper"><h2 class="title">Lend Books</h2><div class="desc">Share or Exchange used books lying idle on the shelf. Earn profit while you grow your reading network.</div></div>

-->  

</body>
</html>
