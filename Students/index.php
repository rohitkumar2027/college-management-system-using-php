
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first" ;
		header('location: ../login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: ../login.php");
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student  Dashboard</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 

</head>
<body>
	
		
<div class="container alert-danger text-center height">
	<h4>
<a href="../index.php?logout='1'" class="float-left p-5"> back to home</a>
<a href="index.php?logout='1'"  class="float-right p-5">Logout</a></h4>
		<h1 class="p-4"><sup class="ml-4">hi,</sup>
		<sub>Welcome <?php echo $_SESSION['user'];?></sub>
			</h1>
		
	</div>
	
	<div class="content1 mt-3 w-75">

		<!-- notification message -->
		<?php if (isset($_SESSION['success'])) : ?>
			<div class="error text-success pl-4 " >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>

		<!-- logged in user information -->
		<?php  if (isset($_SESSION['username'])) : ?>
		<?php endif ?>
		<div class="p-3">
	<table width="80%" align="center">
		
		
		<tr>
			<td>1.  <a href="../Admin/uploadnotes.php?user=<?php echo $_SESSION['user'];?>" class="text-dark">Upload Notes</a></td>
		</tr>
		
		<tr>
			<td>2.  <a href="../Admin/uploadnotice.php?user=<?php echo $_SESSION['user'];?>" class="text-dark">Upload Notice</a></td>
		</tr>
		<tr>
			<td>3.  <a href="../Admin/uploadimg.php?user=<?php echo $_SESSION['user'];?>" class="text-dark">Upload Images</a></td>
		</tr>
		
		
	</table>
	
</div>

	</div>
</body>
</html>
