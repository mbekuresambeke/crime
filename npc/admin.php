<?php 
	include('connection.php');

?> 
<!DOCTYPE html>
<html>
<head>
	<title>Admin Section</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		
<div class="alert" style="width: 50%;height: auto;margin-top: 30px;float: left; ">
	<h2>Welcome<?php $fname=$_SESSION['fname'];
				$lname=$_SESSION['lname'];
				
			echo " ".$fname;
			echo " ".$lname;
			

			?>
				

			</h2>


</div>
			<div class="info" style="width:48%;margin-left:20px;height:auto;margin-top: 50px; font-size:24px;float:left;" >
				<h2>
				<?php 
				$email=$_SESSION['email'];
				
			echo $email;
				if (empty($_SESSION['email'])) {
					header('location:login.php');
				}
			?>
				


			</h2>
			<a href="logout.php" class="btn btn-success" style="float: right;margin-left:-10px;margin-top: -40px">Logout</a>
			
		</div>
</div>
			<hr style="border:2px solid gray;width: 95%;margin-top: -15px;">		
			<div class="alert alert-info" style="width:50%;margin: 0 auto;text-align: center;background:none;border: none;font-size: 24px;font-family: serif,calibri;">
				<p class="alert alert-info" style="width:50%;margin: 0 auto;background:none;text-align: center;border: none">Administrator Dashboard</p>
			<!-- <a href="register.php" class="btn btn-info">Add User</a>	 -->
			 <a href="view.php" class="btn btn-primary">Registered Users</a> 	
			</div>
	
			 <?php include('view.php');?> 
			<?php include('layout/footer.php');?>

</div>
</body>
</html>