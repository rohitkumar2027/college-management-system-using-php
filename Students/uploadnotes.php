
<?php 
	session_start(); 

	if (!isset($_SESSION['user'])) {
		$_SESSION['msg'] = "You must log in first" ;
		header('location: ../login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: ../login.php");
	}

?>
<?php
$db = mysqli_connect('localhost', 'root', '', 'notes');

// notes upload
if (isset($_POST['submit'])) {
    // receive all input values from the form
    $user       =$_POST['user'];
    $name       =$_POST['chname'];
    $description=$_POST['Abch'];
    $sem        =$_POST['Semster'];
   
    $notes=$_FILES['file'] ['name'];
    $tempname=$_FILES['file']['tmp_name'];
    $path ="Notes/$notes";
     move_uploaded_file($tempname, $path);
  


        $sql="INSERT INTO `notes`( `name`, `file`, `description`, `bm`,`username`) VALUES ('$name','$notes','$description','$sem','$user')";

        $result= mysqli_query($db,$sql);//store notes on table

        // move image on the folder

        if ($result==1) {
            ?><script>alert('Notes uploaded successfully');
             window.open('delete_updatenotes.php?user=<?php echo $user;?>','_self');
            </script>
            <?php
        }else{
            ?> <script>alert('There was a problem uploading Notes');</script>
            <?php
            }


     }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css"> 
   
</head>
<body>
<div class="container-fluid  bg-light ">
     <div  class="row justify-content-center">
     <div class=" col-lg-5c ol-md-4 col-sm-4 bg-secondary mt-5 mb-5 rounded ">
    <form action="uploadnotes.php" method="post"enctype="multipart/form-data">
    <div class="form-group text-white">
    <label>Chapter name:</label>
    <input type="text" name="chname" class="form-control form-control-lg rounded-2" required>
    </div>
    <div class="form-group text-white">
    <label>About Chapter:</label>
    <textarea name="Abch"  cols="50" rows="10" class="form-control form-control-lg rounded-2" required ></textarea>
    </div>
    <div class="form-group text-white">
    <label >Choose Semster</label>
    <select name="Semster"  class="form-control form-control-lg rounded-2" required>
    <option value=""></option>
    <option value="1st Semster">1st Semster</option>
    <option value="2nd Semster">2nd Semster</option>
    <option value="3rd Semster">3rd Semster</option>
    <option value="4th Semster">4th Semster</option>
    <option value="5th Semster">5th Semster</option>
    <option value="6th Semster">6th Semster</option>
    </select>
    </div>
    <div class="form-group text-white">
    <label>File</label>
    <input type="file" name="file"  class="form-control form-control-lg rounded-2" required >
    </div>
    <div class="pb-5">
        <button class="btn bg-success text-white " name="submit">Upload Notes</button>
        <input type="hidden" name="user" value=<?php echo $_GET['user']?>>
    </div>
    </form>
    </div>
    </div>
    </div>
</body>
</html>

