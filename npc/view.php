<?php 

// //include('connection.php');
// 	if (empty($_SESSION['email'])) {
// 		header('location:login.php');
// 	}
$conn=mysqli_connect('localhost','root','mimi','ncaa');
$data=mysqli_query($conn, "SELECT * FROM users ORDER BY fname ASC");
if (mysqli_num_rows($data)>0) { ?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Admin | View | User</title>
	<link rel="stylesheet" type="text/css" href="data/bootstrap.min.css"/>
	<link rel="stylesheet" type="text/css" href="data/dataTables.bootstrap.css"/>
</head>
<body>
	<div class="container" style="margin-top: 30px">
			
			<a class="btn btn-info btn-lg" style="float: right;" href="register.php" id="hide">Add New User</a><br><br><br>
			
		<div class="row">
					<div class="col-md-8 col-md-offset-2">
							<table class="table table-hover ">
                                <thead>
								<tr>
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
		<th>Action</th>
        <th colspan="2">Admin Action</th>
	</tr>
     </thead>
<?php 
while($row=mysqli_fetch_assoc($data)){
		if ($row['status']==1) {
						$status="Active";
					}
			else {
						$status="Inactive";
					}
		if ($row['role']==1) {
						$role="Admin";
					}
			else 	{
						$role="User";
					}
					

	?>
    <tbody>
	<tr>
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
		<td>
         <a class="btn btn-sm btn-success" href="changestatus.php?id=<?php echo $row['id'];?>"><?php echo $status; ?></a>
         <a class="btn btn-sm btn-primary" href="changerole.php?id=<?php echo $row['id'];?>"><?php echo $role;?></a></td>
        <td><a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $row['id'];?>">Remove</a> 
            <a class="btn btn-warning" href="update.php?id=<?php echo $row['id'];?>">Edit</a></td>
	</tr>
    </tbody>
<?php }
}
?>
							</table>
			</div>
		</div>
	</div>
   <script type="text/javascript" src="data/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="data/jquery.dataTables.min.js"></script>
	<script type="text/javascript" src="data/dataTables.bootstrap.min.js"></script>
	<script>
			$(document).ready(function(){
					$(".table").DataTable();
              
			});
	</script>
    </body>
</html>