<?php 
	include('connection.php');
	$sql=mysqli_query($conn,"SELECT * FROM users");
	if (mysqli_num_rows($sql)>0) {?>
		

<!DOCTYPE html>
<html>
<head>
	<title>Hello  Data Table Why Are disturb me like that mya man </title>
	<link rel="stylesheet" type="text/css" href="data/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="data/dataTables.bootstrap.min"/>
</head>
<body>
 <div class="container" style="margin-top: 40px">
 	<div class="row">
 		<div class="col-md-8 col-md-offset-2">
 	<table class="table table-hover table-bordered table-sm text-center">
 		<thead>
 		<th>First Name</th>
		<th>Last Name</th>
		<th>Email</th>
		<th>Gender</th>
		<th>School</th>
		<th>Village</th>
		<th>Pocket Money</th>
		<th>School Fees</th>
		<th>Transport Fees</th>
		<th>Education Level</th>
		<th>Start Year</th>
		<th>End Year</th>
 		</thead>
<?php while ($row=mysqli_fetch_assoc($sql)) {?>
	

 		<tbody>
 		<td><?php echo $row['fname'];?></td>
		<td><?php echo $row['lname'];?></td>
		<td><?php echo $row['email'];?></td>
		<td><?php echo $row['gender'];?></td>
		<td><?php echo $row['school'];?></td>
		<td><?php echo $row['village'];?></td>
		<td><?php echo $row['pocket_money'];?></td>
		<td><?php echo $row['school_fees'];?></td>
		<td><?php echo $row['transport_fees'];?></td>
		<td><?php echo $row['education_level'];?></td>
		<td><?php echo $row['start_year'];?></td>
		<td><?php echo $row['end_year'];?></td>
 		</tbody>


	<?php  } 
     }
?>
 	</table>
 		</div>
 	</div>

 </div>	
 <script type="text/javascript" src="data/jquery-3.3.1.min.js"></script>
 <script type="text/javascript" src="data/dataTables.bootstrap.min.js"></script>
 <script type="text/javascript" src="data/jquery.dataTables.min.js"></script>
 <script type="text/javascript">
 	$(document).ready(function(){
 		$(".table").DataTable();
 	});
 </script>

</body>
</html>