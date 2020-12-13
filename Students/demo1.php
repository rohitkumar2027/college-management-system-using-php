<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$errors = array(); 
$_SESSION['success'] = "";



// connect to database
$db = mysqli_connect('localhost', 'root', '', 'admin');

if (isset($_POST['login'])) {
		$username =  $_POST['user'];
		$password_1 =  $_POST['pass'];

		if (empty($username)) {
			array_push($errors, "Username is required");
		}
		if (empty($password_1)) {
			array_push($errors, "Password is required");
		}

		if (count($errors) == 0) {
			$password =  md5($password_1);//encryption password
			$query = "SELECT * FROM `students` WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You are now logged in $username;";
       ?><script>
       window.open('index.php','blank');

        

        </script><?php
		 }else {
				array_push($errors, "Wrong username/password combination");
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

    </style>
    
</head>
<body class="bg-secondary">


<div class="container col-12">
<div class="row justify-content-center">
<div class="col-md-5 bg-light mt-5 rounded  ">
<h3 class="text-center text-info p-2">User Login</h3>
<p class="text-denger"><?php  if (count($errors) > 0) : ?>
	<div class="text-denger">
		<?php foreach ($errors as $errors) : ?>
			<p class="text-danger"><?php echo $errors ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
</p>
<form action="demo1.php" method="post" class="p-3">
<div class="form-group ">
<input type="text" name="user"  class="form-control form-control-lg rounded-2" placeholder="username">
</div>
<div class="form-group input-group">
<input type="password" name="pass" id="pass" class="form-control form-control-lg rounded-2" placeholder="password">
<div class="input-group-prepend ">
<div class="input-group-text">
<a  class="text-dark" id="icon-click">
<i class="fas fa-eye" id="icon"></i>
</a>
</div>
</div>
</div>
<div class="from-group ">
  <a href="forget.php" class="float-right text-dark" target="blank">Forgot password ?</a>
</div>

<div class="from-group text-center pt-4">
<input type="submit" value="Login" name="login" class="btn btn-success  btn-md w-25 rounded-1">
</div>
<div class=" pt-3">
                <span> you are not a member? <a href="User_Registraiation.php" target="blank"> create account </a></span>
            </div>
</form>
</div>

</div>
</div> 
<script src="../bootstrap/js/jquery.js"></script>
  <script src="../bootstrap/js/bootstrap.js"></script> 
  <script type="text/javascript">
  $(Document).ready(function (){
      
      $("#icon-click").click(function () {

          $("#icon").toggleClass('fa-eye-slash');
          var input =$("#pass");
          if(input.attr("type")==="password"){
              input.attr("type","text");
          }else{
            input.attr("type","password");

          }   
      }); 
  });
  </script>  
</body>
</html>
<div>
		