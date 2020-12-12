
<?php


// variable
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
</head>
<body data-spy='.navbar' data-target=".navbar">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
  <a class="navbar-brand" href="#">GNDIT</a>
  <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'])=="index.php"){ echo "active";}else{
          echo"";
        }?>">
        <a class="nav-link" href="index.php ">Home</a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'])=="gallarey.php"){ echo "active";}else{
          echo"";
        }?> ">
        <a class="nav-link " href="gallarey.php">Gallery</a>
      </li>
      
      <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'])=="notice.php"){ echo "active";}else{
          echo"";
        }?> ">
        <a class="nav-link" href="notice.php">Notice</a>
      </li>
      <li class="nav-item <?php if(basename($_SERVER['PHP_SELF'])=="Notes.php"){ echo "active";} 
      elseif(basename($_SERVER['PHP_SELF'])=="syllabus.php"){ echo"active";}  
      elseif(basename($_SERVER['PHP_SELF'])=="login.php"){ echo"active";}else{
          echo"";
        }?> dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Student
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item " href="Notes.php">Notes</a>
          <a class="dropdown-item " href="syllabus.php">Syllabus</a>
          <a class="dropdown-item" href="https://www.onlinesbi.com/sbicollect/icollecthome.htm" target="blank">Pay Fees</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="login.php"><span class="btn btn-success">Login</span></a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="Admin">Admin</a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
    
      <input class="form-control mr-sm-2" type="search" placeholder="Search" id="search" onchange="openPage()"aria-label="Search" value="">
      <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit"onclick="onClick()" name="submit">Search</button> -->
    </form>
  </div>
</nav>
<div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/b.jpg" alt="Los Angeles" width="100%" height="500">
      <div class="carousel-caption">
        <h3>Los Angeles</h3>
        <p>We had such a great time in LA!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/a.jpg" alt="Chicago" width="100%" height="500">
      <div class="carousel-caption">
        <h3>Chicago</h3>
        <p>Thank you, Chicago!</p>
      </div>   
    </div>
    <div class="carousel-item">
      <img src="image/b.jpg" alt="New York" width="100%" height="500">
      <div class="carousel-caption">
        <h3>New York</h3>
        <p>We love the Big Apple!</p>
      </div>   
    </div>
  </div>
<a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a> 
</div>


<script src="bootstrap/js/jquery.min.js"></script>
<script src="bootstrap/js/proper.min.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script> 
  <script>
  function openPage(){
  var x = document.getElementById("search").value;
  if(x=="notes"){
    window.open("Notes.php");
  }
  if(x=="notice"){
    window.open("notice.php");
  }
  if(x=="gallarey"){
    window.open("gallarey.php");
  }
  if(x=="syllabus"){
    window.open("syllabus.php");
  }
  }
  
  </script>
</body>
</html>