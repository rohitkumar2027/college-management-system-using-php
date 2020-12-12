<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallarey</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=josefin+Sans">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="fontawesome/css/all.css">
    
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
    </style>
</head>
<body>

<header>

<?php include ("header1.php");?>
</header>

<section>
    <div class="container">
        <h1 class="text-center capitalize pt-5">Gallery</h1>
        <hr class="w-25 mx-auto pt-5">
            <div class="row">
             <iframe src="Admin/demo.php" frameborder="0" width="1200px" height="500px"></iframe>
             </div>
</div>
</section>
<section >
   

   <!-- footer -->
   <?php include ("footer.php");?>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/proper.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>  
</body>
</html>   
</body>
</html>