<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=josefin+Sans">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome\css\all.css">
    <style>
    *{
      margin:0;
      padding:0; font-family:'josefin Sans',sans-serif;
    }
    .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .hr{
    background-color:white;
  }
  .fli{
    padding:20px;
    margin-top:150px;
  }
  .a{
    text-decoration:none ;
    text-decoration-color:none ;
    color:black;
  }
    </style>
</head>
<body>

<header>
<?php include ('header1.php');?>
</header>
<section>
<div class="container-fluid ">
<div class="row">
<div class="col-lg-3 col-md-6 col-sm-4 col-4 bg-success ">
<ul class="list-unstyled pt-5 pb-5">
<li class="p-3"><a href="Notes.php" class="a"> computer enginnering</a></li>
<li class="p-3"><a href="error.php" class="a">chemical  enginnering</li>
<li class="p-3"><a href="error.php" class="a">Electrical  enginnering</li>
<li class="p-3"><a href="error.php" class="a">Elctronics communication  enginnering</li>
<li class="p-3"><a href="error.php" class="a">Mechnical  enginnering</li>
<li class="p-3"><a href="error.php" class="a">Polymer  enginnering</li>
</ul>
</div>

<div class="col-lg-9 col-md-6 col-sm-8 col-8 bg-light ">


<iframe src="Admin/demo1.php" frameborder="0"  style="width:981px; height:500px"></iframe>

</div>
</div>
</div>
</section>
<section >

   <!-- footer -->
  <?php include ("footer.php");?>
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>  
</body>
</html>