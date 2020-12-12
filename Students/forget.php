<?php
session_start();

// variable declaration
$username = "";
$email    = "";
$error = array(); 
$_SESSION['success'] = "";



// connect to database
$db = mysqli_connect('localhost', 'root', '', 'admin');

if (isset($_POST['login'])) {
		$username =  $_POST['user'];

		if (empty($username)) {
			array_push($error, "email-id is required");
		}
		
		if (count($error) == 0) {
			$query = "SELECT * FROM `students` WHERE email_id='$username'";
			$results = mysqli_query($db, $query);

			if (mysqli_num_rows($results) == 1) {
				$_SESSION['user'] = $username;
				$_SESSION['success'] = "You are now logged in $username;";
       ?><script>
       window.open('change_password.php?email=<?php echo"$username"; ?>','_self');

        </script><?php
		 }else {
				array_push($error, "your email-id is not exist");
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
    <div><h1 class="px-3 pt-3">Forget your password:</h1></div>
    <div><h4 class="pt-4 px-4">Enter youer email-id</h4></div>
<form action="forget.php" method="post">
<div class="form-group pt-4 px-4 ">
<input type="email" name="user"  class="w-75 form-control rouned-2" placeholder="username">
</div>

<div class="from-group  pt-2 px-4">
<a href="change_password.php?email=<?php echo  " $username ";?>"><button name="login" class="btn bg-success text-white">verify</button></a>
</div>
             
</form>
</div>
</div>
</div>
</body>
</html>