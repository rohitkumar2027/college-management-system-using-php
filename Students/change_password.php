<?php 
	session_start(); 

	if (!isset($_SESSION['user'])) {
		$_SESSION['msg'] = "You must log in first" ;
		header('location: ../login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("location: ../login.php");
	}

?>

<?php

// variable declaration
$error = array(); 



// connect to database
$db = mysqli_connect('localhost', 'root', '', 'admin');

if (isset($_POST['login'])) {
		$email=$_POST['email'];
		$Npass =  $_POST['user'];

		if (empty($Npass)) {
			array_push($error, "Username is required");
		}
		
		if (count($error) == 0) {
			$password=md5($Npass);
			$query = "UPDATE `students` SET `password`='$password' WHERE `students` . `email_id`='$email' ";
			$results = mysqli_query($db, $query);

			if ($results == 1) {
				$_SESSION['user'] = $username;
				$_SESSION['success'] = "You are now logged in $username;";
       ?><script>
	   alert('your password has been changed');
       window.open('../login.php ','_self');

        </script><?php
		 }else {
				array_push($error, "Wrong username/password combination");
			}
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forget Password</title>
    
    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
</head>
<body>
    <div class="container-fluid ">
    <p class="text-denger"><?php  if (count($error) > 0) : ?>
	<div class="text-denger">
		<?php foreach ($error as $error) : ?>
			<p class="text-danger"><?php echo $error ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
</p>

    <div class="row">
    <div class="col-lg-5 col-sm-12">
    <div><h1 class="px-3 pt-3">Change your password:</h1></div>
    <div><h4 class="pt-4 px-4">Enter youer New Password:</h4></div>
<form action="change_password.php" method="post">
<div class="form-group pt-4 px-4 ">
<input type="password" name="user"  class="w-75 form-control rouned-2" placeholder="password">
</div>



<div class="from-group  pt-2 px-4">
<input type="submit" value="Verify" name="login" class="btn btn-success  btn rounded-1">
</div>
 <input type="hidden" name="email" id="" value="<?php echo $_GET['email']?>">   
 </form>
you are not change your password<a href="../login.php?logout='1'"  class="">Logout</a>
</div>
</div>
</div>
</body>
</html>