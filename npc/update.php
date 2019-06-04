<?php 		include ('connection.php');
			if(isset($_POST['update'])){
				$fname=mysqli_real_escape_string($conn,$_POST['fname']);
				$lname=mysqli_real_escape_string($conn,$_POST['lname']);
				$email=mysqli_real_escape_string($conn,$_POST['email']);
				$id=$_POST['id'];
				$update=mysqli_query($conn,"UPDATE users SET fname='$fname', lname='$lname' WHERE id='$id' ");
				if (!$update) {
					echo mysqli_error($conn);
				}else{
				header('location:admin.php');}
			}
			$id=$_GET['id'];
			$result=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
			while ($row=mysqli_fetch_assoc($result)) {?>
				
			

<!DOCTYPE html>
<html>
<head>
	<title>EDIT ACCOUNT</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body><div class="container">
			<div class="row-justify-content-center">
				<div class="col-md-4 col-md-offset-4">
				<form method="POST">
				<input type="text" name="fname" value="<?php echo $row['fname'];?>" class="form-control"><br>
				<input type="text" name="lname" value="<?php echo $row['lname'];?>" class="form-control"><br>
				<input type="email" name="email" value="<?php echo $row['email'];?>" class="form-control"><br>
				<input type="hidden" name="id"value="<?php echo $id;?>" ><br>
				<input type="submit" name="update" value="Update" class="btn btn-primary"><br>

					</form>

				</div>
			</div>
		</div>
	<?php }


		?>


				

</body>
</html>