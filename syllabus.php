<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Syllabus</title>
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
    padding:10px;
    margin-top:150px;
  }
    .ol{
    list-style:none;
    cursor:pointer;
    }
    .li{
        padding:20px;
    }
    .li .ol{
        display:none;
        cursor:pointer;
    }
    .li:hover .ol {
        display:block;
    }
   

    </style>
</head>
<body>
<header>
<?php include ("header1.php");?>
</header>




<section>
<div class="container-fluid">
<div class="row">
<div class="col-12 text-center">

<iframe src="Admin/syllabus/demo3.php" frameborder="0" height="350px" class="embed-responsive "></iframe>
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