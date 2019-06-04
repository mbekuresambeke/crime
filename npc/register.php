<?php 
	include('connection.php');

	if (isset($_POST['register'])) {
		$errors= array();
		$fname=mysqli_real_escape_string($conn,$_POST['fname']);
		$lname=mysqli_real_escape_string($conn,$_POST['lname']);
		$email=mysqli_real_escape_string($conn,$_POST['email']);
		$gender=mysqli_real_escape_string($conn,$_POST['gender']);
		$school=mysqli_real_escape_string($conn,$_POST['school']);
		$village=mysqli_real_escape_string($conn,$_POST['village']);
		$pocket_money=mysqli_real_escape_string($conn,$_POST['pocket_money']);
		$school_fees=mysqli_real_escape_string($conn,$_POST['school_fees']);
		$transport_fees=mysqli_real_escape_string($conn,$_POST['transport_fees']);
		$education_level=mysqli_real_escape_string($conn,$_POST['education_level']);
		$start_year=mysqli_real_escape_string($conn,$_POST['start_year']);
		$end_year=mysqli_real_escape_string($conn,$_POST['end_year']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);
		$hashed_password =password_hash($password,PASSWORD_BCRYPT);
		
			if (empty($fname)) {
				array_push($errors, "First Name Cannot be blank");
								}
			if (empty($lname)) {
				array_push($errors, "Fill Lastname");
								}
			if (empty($email)) {
				array_push($errors, "Email can not be blank");
								}
			if (empty($gender)) {
				array_push($errors, "Select your Gender");
								}
			if (empty($school)) {
				array_push($errors, "Select school");
								}
			if (empty($village)) {
				array_push($errors, "Fill yout village");
								}

			if (empty($pocket_money)) {
				array_push($errors, "Enter your pocket Money");
								}
			if (empty($school_fees)) {
				array_push($errors, "Enter School Fees amount");
								}
			if (empty($transport_fees)) {
				array_push($errors, "Transport Fees Required");
								}
			if (empty($education_level)) {
					array_push($errors, "Choose your education level");
											}
			if (empty($start_year)) {
					array_push($errors, "Enter Start year");
									}
			if (empty($start_year)) {
					array_push($errors, "Enter End Year");
									}
			if (empty($password)) {
				array_push($errors, "Password Cannot be Empty!");
								}
				else{
					if (empty($errors)) {
						$select =mysqli_query($conn,"SELECT * FROM users WHERE  email='$email'");
							if(mysqli_num_rows($select) > 0){
								array_push($errors,"The Name you enter aready existed");
								header('location:home.php');
							}
							else{
								$insert=mysqli_query($conn,"INSERT INTO users (fname,lname,email,gender,school,village,pocket_money,school_fees,transport_fees,education_level,start_year,end_year,password) VALUES ('$fname','$lname','$email','$gender','$school','$village','$pocket_money','$school_fees','$transport_fees','$education_level','$start_year','$end_year','$hashed_password')");
								header('location:login.php');
							}
					
					}
				}

		
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>STUDENT | REGISTRATION </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
		<div class="container">
			<div class="panel panel-heading " style="text-align: center;" >
					<h2>Ngorongoro Pastrolist Student Record</h2>

			</div>
			<div class="row-justify-content-center">
				<div class="col-md-4 col-md-offset-4">
						<p>
							<?php 
								if (!empty($errors)) {
									foreach ($errors as $error) {?>
										<p class="alert alert-danger">
											<?php echo $error; ?>
										</p>
									<?php }
								}
							?>

						</p>
						<form method="POST">
								<input type="text" name="fname" placeholder="Fill Your First name" class="form-control"><br>
								<input type="text" name="lname" placeholder="Fill Your Lastname" class="form-control"><br>
								<input type="email" name="email" placeholder="Enter Your Email Address" class="form-control"><br>
								<select name="gender" class="form-control">
									<option value="select gender">Select Gender</option>
									<option value="Male">Male</option>
									<option value="Female" >Female</option>
									
								</select><br>
								<input type="text" name="school" class="form-control" placeholder="Enter Name of School"><br>
								<select name="village" class="form-control">
									<option value="---Select Village---">Select Village</option>
									<option value="Misigiyo">Misigiyo</option>
									<option value="Endulen">Endulen</option>
									<option value="Nainokanoka">Nainokanoka</option>
									<option value="Orbabal">Orbabal</option>
									<option value="Esere">Esere</option>
									<option value="Ngoile">Ngoile</option>
									<option value="Orpiro">Orpiro</option>
									<option value="Kapenjiro">Kapenjiro</option>
									<option value="Olaililai">Olaililai</option>
									<option value="Mokilal">Mokilal</option>
									<option value="Nayobi">Nayobi</option>
									<option value="Kakesio">Kakesio</option>
									<option value="Ndian">Ndian</option>
									<option value="Oloirobi">Oloirobi</option>
									<option value="Sendui">Sendui</option>
									<option value="Osinoni">Osinoni</option>
									<option value="Makao Mapya">Makao Mapya</option>
									<option value="Bulati">Bulati</option>
									
								</select><br>
								<input type="text" name="pocket_money" class="form-control" placeholder="Enter Your Pocket Money"><br>
								<input type="text" name="school_fees" class="form-control" placeholder="Enter School fees"><br>
								<input type="text" name="transport_fees" class="form-control" placeholder="Enter Transport Fees"><br>
								<select name="education_level" class="form-control">
									<option value="education Level">Select Education Level</option>
									<option value="Primary Education" class="form-control">Primary Education</option>
									<option value="Secondary Education" class="form-control">Secondary Education</option>
									<option value="Certificate" class="form-control">Certificate</option>
									<option value="Diploma Level" class="form-control">Diploma Level</option>
									<option value="Bachelor Level" class="form-control">Bachelor Level</option>
									<option value="Form Five Education" class="form-control">Form Five Education</option>
								</select><br>
								
								<input type="date" name="start_year" class="form-control"><br>
								<input type="date" name="end_year"  class="form-control"> <br>
								<input type="password" name="password" placeholder="Enter Your Password" class="form-control"><br>
								<input type="password" name="Confirm_password" placeholder="Confirm Password" class="form-control"><br>
								<input type="submit" name="register" class="btn btn-info btn- pull-right" value="Register">
							
						</form>
				</div>

			</div>


		</div><br>
<div class="bg-primary" style="width: 30%;margin-left: 35%;text-align: center;">
			<span>If you have create account Login here</span><br><br>
			<a href="login.php" class="btn btn-info">Login</a>

		</div>
		<?php include('layout/footer.php');?>
</body>
</html>