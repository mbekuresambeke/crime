<?php 
	include('connection.php');

?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Section</title>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
<div class="alert" style="width: 50%;height: 100px;float: left; ">
	<h2>Welcome<?php $fname= $_SESSION['fname'];
				$lname= $_SESSION['lname'];
				
			echo " ".$fname;
			echo " ".$lname;?></h2>


</div>
			<div class="info" style="width:48%;margin-left:20px;height:100px; font-size:24px;float:left;" >
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
		
				<center>
						<h1>User Dashboard</h1>
				</center>
				<hr>
				
		<div class="info" style="width: 100%;height: 500px;margin-top: 70px;">
			<table class="table table-hover table-striped table-bordered">
				<tr class="alert alert-danger">
					<th>Village</th><td><?php $village= $_SESSION['village'];
						echo "".$village;?></td>
				</tr>
				<tr>
				<th>Gender</th>
					<td><?php $gender =$_SESSION['gender'];
						echo "". $gender;?>
					</td>
				</tr>

				<tr class="alert alert-success">
					<th>School</th>
					<td><?php $school =$_SESSION['school'];
						echo "". $school;?>
					</td>
				</tr>

					<tr class="alert alert-info">
					<th>Pocket Money</th>
					<td><?php $pocket_money =$_SESSION['pocket_money'];
						echo "". $pocket_money;?>
					</td>
				</tr>

					<!-- <th>School Fees</th>
					<td><?php $school_fees =$_SESSION['school_fees'];
						echo "". $school_fees;?>
					</td> -->
					<tr class="alert alert-danger">
					<th>Transport Fees</th>
					<td><?php $transport_fees =$_SESSION['transport_fees'];
						echo "". $transport_fees;?>
					</td>
				</tr>
				<tr class="alert alert-info">
					<th>Education Level</th>
					<td><?php $education_level =$_SESSION['education_level'];
						echo "". $education_level;?>
					</td>
				</tr>
						<tr class="alert alert-success">
					<th>Start Year</th>
					<td><?php $start_year =$_SESSION['start_year'];
						echo "". $start_year;?>
					</td>
				</tr>
						<tr class="alert alert-danger">
					<th>End Year</th>
					<td><?php $end_year =$_SESSION['end_year'];
						echo "". $end_year;?>
					</td>

				</tr>
			</table>
		</div>

</div>
</body>
</html>