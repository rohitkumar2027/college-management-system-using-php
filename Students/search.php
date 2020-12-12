
<?php

// variable
$errors = array(); 

// connect to database
$db = mysqli_connect('localhost', 'root', '', 'admin');

if (isset($_POST['submit'])) {
		$search =  $_POST['search'];

		if (empty($search)) {
            array_push($errors, "Please enter your search fied");
            header('../index.php');
		}
		

		if (count($errors) == 0) {
            $sql="SELECT * FROM `syllabus` WHERE `name` LIKE '%$search%'";
            $sql1="SELECT * FROM `notes` WHERE `name` LIKE '%$search%'";

            
            $results = mysqli_query($db, $sql);
			$results1 = mysqli_query($db, $sql1);
            

			if (mysqli_fetch_array($results) > 0) {
                header('location: ../syllabus.php');
				
      	 }else {
				array_push($errors, "your search fied is not found");
            }
            if (mysqli_num_array($results1) > 0) {
                header('location: ../Notes.php');
				
      	 }else {
            array_push($errors, "your search fied is not found");
        }
      
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document with hide</title>
     <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
    <style>
 a{
   cursor:pointer;
 }
 *{
        box-sizing:border-box;
    }
    body{
            font-family: sans-serif;
        }
        #mainbox1{
            font-size: 20px;
            cursor: pointer;
            float:right;
            margin-top: 0px;
            margin-right: 20px;
            color:black;
        }
        .sidemenu2{
            position: fixed;
            top: 0px;
            left: 0px;
            height:30%;
            width:0%;
            background-color:gainsboro;
            z-index: 1;
            overflow-x:hidden; 
            list-style: none;
        }
        .sidemenu2 ul li i{
            padding:2px;
            list-style: none;
            text-decoration: none;
            font-size: 20px;
            text-align:left;
            color: #999;
            display: block;
            border-bottom: 3px solid rgb(255,255,255,0.1);

        }
        .sidemenu2 ul i:hover{
            color: white;
            border-left: 4px solid lightblue;
        }
        .sidemenu2 .closebtn{
            position: absolute;
            cursor: pointer;
            top: 0px;
            right:25px;
            font-size:26;
            margin-left: 32px
            
        }
        .round{
            border-radius:5px;
        }

    </style>
    
</head>
<body >


<div class="container-fluid">
        
                <div id="mainbox1" onclick="openfunction2()"><i class="fas fa-search text-white"></i></div>
        <div id="smenu"class="sidemenu2">
            
        <div class="row">
        <div class="col-12">
             <ul class="list-unstyled ml-5">
    
                < <li >
                <form action="Students/search.php" method="post" class="pt-5 input-group">
                <input type="text" name="search" id="" class="round"><button type="submit" name="submit" class=" round"><i class="fas fa-search text-info"></i></button>
                </form>
                </li>
                <li>
                    <i class="closebtn" onclick="closefunction2()">&times</i>
                </li>
                <li>
         <p class="text-light pt-5 ">&copy; > GURU NANK DEV INSTITUTE OF TECHNOLOGY.</p>
                </li>
            </ul>
         </div>
         </div>
         </div>
         </div>

<script src="../bootstrap/js/jquery.js"></script>
  <script src="../bootstrap/js/bootstrap.js"></script> 
  <script type="text/javascript">
 function openfunction2() {
        document.getElementById("smenu").style.width="100%";
    }
      function closefunction2() {
        document.getElementById("smenu").style.width="0%";
    }
  </script>  
</body>
</html>

		