<?php

	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	$error="";
$error1="";
	

	// connect to database
	$db = mysqli_connect('localhost', 'root', '', 'admin');

	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$username =  $_POST['user'];
		$rollno =  $_POST['roll'];
		$email =  $_POST['email'];
		$sem =  $_POST['sem'];
		$depart =  $_POST['depa'];
		$phoneno =  $_POST['phoneno'];
		$password_1 = $_POST['password_1'];
		$password_2 =  $_POST['password_2'];

		$sql="SELECT * FROM `students` WHERE email_id='$email'";
		$result= mysqli_query($db,$sql);
		$run=mysqli_fetch_row($result);

		// form validation: ensure that the form is correctly filled
		if (empty($username)) { array_push($errors, "**Username is required"); }
		if (empty($email)) { array_push($errors, "**Email is required"); }
		else if($run>0){
			array_push($errors, "**Email is allready registre "); 
		}
		if (empty($phoneno)) { 
			array_push($errors, "**phone is required");

		 }else if(strlen($phoneno)<10){
			array_push($errors,"**mobile number shoud be of 10 digites");
		 }else if(!preg_match("/^[6-9]\d{9}$/",$phoneno)){
			array_push($errors,"**invaled moblie number");
		 }

		if (empty($password_1)) { array_push($errors, "**Password is required"); }
		else if(strlen($password_1)<8){
			array_push($errors,"**password should be of 8 digites");

		}

		if ($password_1 != $password_2) {
			array_push($errors, "**The two passwords do not match");
		}

		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password =md5($password_1);//encrypt the password before saving in the database
			
			$query = " INSERT INTO `students`( `roll no`, `username`, `Phone no.`, `department`, `semester`, `email_id`, `password`) 
			VALUES ('$rollno','$username','$phoneno','$depart','$sem','$email','$password')";
			mysqli_query($db, $query);

			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You are now logged in $username";
			header('location: index.php');
		}

	}



?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Registration system PHP and MySQL</title>

    <link rel="stylesheet" href="../fontawesome/css/all.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
    
</head>
<body>


<div class="container col-10">
<div class="row justify-content-center">
<div class="col-md-5 col-sm-5 bg-light mt-5 rounded  ">
<h3 class="text-center text-info p-2">User Registration</h3>
<form action="User_Registraiation.php" method="post" class="p-3">
		<div>
		<p class="text-denger"><?php  if (count($errors) > 0) : ?>
	<div class="text-denger">
		<?php foreach ($errors as $errors) : ?>
			<p class="text-danger"><?php echo $errors ?></p>
		<?php endforeach ?>
	</div>
<?php  endif ?>
</p>
		</div>
		<div class="form-group ">
			<label >Username</label>
			<input type="text" name="user"  class="form-control form-control-lg rounded-2" placeholder="Enter your username">
		</div>
		<div class="form-group ">
				<label >Roll No. (BTE)</label>

				<input type="text" name="roll" id="pass" class="form-control form-control-lg rounded-2" placeholder="Enter Your Roll No. (BTE)">

		</div>
		<div class="form-group ">
				<label >Email Id</label>

				<input type="email" name="email" class="form-control form-control-lg rounded-2" placeholder="Enter your email id">
		</div>

        <div class="form-group">
			<label>Phone No.</label>
			<input type="tel" name="phoneno" maxlenght="10"   class="form-control form-control-lg rounded-2" placeholder="Enter your phone number">  
		</div>
		
		<div class="form-group">
			<label>Semester</label>
			<input type="text" name="sem" class="form-control form-control-lg rounded-2" placeholder="Enter your semster">
		</div>
		<div class="form-group">
			<label>Department</label>
			<input type="text" name="depa"  max="8" class="form-control form-control-lg rounded-2" placeholder="Enter your department">
		</div>
		
        
		<div class="form-group">
			<label>Password</label>
			<input type="password" name="password_1" class="form-control form-control-lg rounded-2" placeholder="Enter your password" >

		</div>
		<div class="form-group">
			<label>Confirm password</label>
			<input type="password" name="password_2"  max="8" class="form-control form-control-lg rounded-2" placeholder="Please confirm your password">
		</div>
		


<div class="from-group text-center pt-4">
<input type="submit" name="reg_user"value="Register" class="btn btn-success  btn-md bt-lg rounded-1">
</div>
<div class=" pt-3">
<p>
			Already a member? <a href="../login.php">Sign in</a>
		</p>
            </div>
</form>
</div>


</body>
</html>


