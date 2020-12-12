<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
<div class="container-fluid">
<h1 class="text-center text-capitalize pt-5">About Principal</h1>
<hr class="w-50 mx-auto pb-5">
<?php 

                  $db=mysqli_connect('localhost','root','','admin');

                   $sql="SELECT * FROM `dp` ";

                     $result=mysqli_query($db,$sql);

                 while ($row =mysqli_fetch_array($result)) {
                       echo'<div class="row mb-5">' ;    
                      echo '<div class="col-lg-6 col-md-6 col-sm-3 col-12 ">';
                      //   echo"<img src='images/".$row['image']." ' class='img-fluid' >";
                      //   echo"<div><a href='images/".$row['image']." '><button>View</button></a>";
                      //   echo"<a href='images/dowload.php?file=".$row['image']."'><button>Dowload</button></a></div>";
                      echo"<img src='Admin/images/".$row['image']." ' class='img-fluid' >";
                      echo '</div>';
                      echo"<div class='col-lg-6 col-md-6 col-12'>";
                      echo"<h1>".$row['name']."</h1>";
                      echo"<p>".$row['ds']."</p>";
                      
                  }
               ?>

</div>

</div>
</div>



<section >
 
<section >
   

   <!-- footer -->
   <?php include ("footer.php");?>
   
</section>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <script src="bootstrap/js/jquery.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>  
</body>
</html>