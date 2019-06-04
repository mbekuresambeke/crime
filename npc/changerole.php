<?php 
	include('connection.php');

	$id=$_GET['id'];

	$result=mysqli_query($conn,"SELECT * FROM users WHERE id ='$id'");
	while ($row=mysqli_fetch_assoc($result)) {
		if ($row['role']==1) {
			mysqli_query($conn,"UPDATE users SET role=0 WHERE id='$id'");
			echo mysqli_error($conn);
			header('location:view.php');
		}else{
			mysqli_query($conn,"UPDATE users SET role=1 WHERE id='$id'");
			header('location:view.php');
		}
	}

?>

