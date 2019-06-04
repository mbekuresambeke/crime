<?php 
include('connection.php');
$id =$_GET['id'];
$result=mysqli_query($conn,"SELECT * FROM users WHERE id='$id'");
while ($row=mysqli_fetch_assoc($result)) {
	if ($row['status']==1){
		mysqli_query($conn,"UPDATE users SET status = 0 WHERE id ='$id'");
		header('location:view.php');
	}
	else{
		mysqli_query($conn,"UPDATE users SET status=1 WHERE id ='$id'");
		header('location:view.php');
	}
}
