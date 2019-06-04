<?php 
	include('connection.php');


        if (isset($_POST['login'])) {
		$errors= array();
		$email =mysqli_real_escape_string($conn,$_POST['email']);
		$password =mysqli_real_escape_string($conn,$_POST['password']);

		if (empty($email)) {
			array_push($errors, "Enter Your Email");
		}
		if (empty($password)) {
			array_push($errors, "Enter Password");
		}
		
		if(empty($errors)){
			$result= mysqli_query($conn,"SELECT * FROM users WHERE email='$email'");
			if (mysqli_num_rows($result)==1) {
				$row=mysqli_fetch_array($result);
				if (password_verify($password, $row['password'])) {
						if ($row['status']==1) {
							if ($row['role']==1) {
								$_SESSION['email']=$row['email'];
								$_SESSION['fname']=$row['fname'];
								$_SESSION['lname']=$row['lname'];
							
									header('location:admin.php');
							}
							else{
								$_SESSION['email']=$row['email'];
								$_SESSION['fname']=$row['fname'];
								$_SESSION['lname']=$row['lname'];
								$_SESSION['village']=$row['village'];
								$_SESSION['gender']=$row['gender'];
								$_SESSION['school']=$row['school'];
								$_SESSION['pocket_money']=$row['pocket_money'];
								$_SESSION['school_money']=$row['school_money'];
								$_SESSION['transport_fees']=$row['transport_fees'];
								$_SESSION['education_level']=$row['education_level'];
								$_SESSION['start_year']=$row['start_year'];
								$_SESSION['end_year']=$row['end_year'];
								//$_SESSION['']=$row[''];
								

										header('location:user_profile.php');
							}
						}
						else{
							array_push($errors, "You are registered but not Actived Yet Contact Admin");
						}
						
					}
		else{
			array_push($errors, "Wrong Password Try It Again");
				}

			}
			else{
				array_push($errors, "Your are not register Fill the form to register");
			}
		}
	}



	

?>



<!DOCTYPE html>
<html>
<head>
	<title>Login User</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<style type="text/css">
		/**{
			background-image:url('image/form.jpg'); 
			background-position: center;
			width: 100%;
			padding: 0;
			margin:0;
			height: auto;
			background-repeat: no-repeat;
		}*/
		
	</style>
</head>
<body>
		<div class="container">
	<div class="panel panel-heading " style="text-align: center;margin-top:20px;opacity:1;background: #444;color: #fff;" >
					<h2 style="	opacity: 1;">Ngorongoro Pastrolist Student Record</h2></div>

				<div class="bg-primary btn-block" style="text-align: center;height: 40px;width: 40%;margin-left: 30%;font-size:24px;line-height: 40px">
					<p>Only Registed Users Access Here</p>
				</div><br>
			<div class="row-justify-content-center">
				<div class="col-md-4 col-md-offset-4">
						<?php 
							if (!empty($errors)) {
								foreach ($errors as $error) {?>
									<div class="alert alert-danger"><?php echo $error; ?> </div>
								<?php }
							}
						?>
						<div class="card">
							<div class="card-body">
						<form method="POST">
							<input type="email" name="email" placeholder="Enter Your Email Address" class="form-control"><br>
							<input type="password" name="password" placeholder="Enter Your Password" class="form-control"><br>
							<input type="submit" name="login" class="btn btn-success btn-block" value="Login">

						</form>
					</div>
				</div>
						<br><br>
						<div class="bg-danger" style="height: 70px;text-align: center">
							<span>If you Dont have account click here to register</span>
							<p style="text-align: center;margin-top: 10px"><a  class="btn btn-danger btn-sm" href="register.php">Create Account Now</a></p>
						</div>

				</div>
			</div>
		</div>
		<?php include('layout/footer.php');?>

	
</body>
</html>