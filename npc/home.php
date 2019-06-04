<?php 
	include('connection.php');

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>WEB DEVELOPMENTS</title>
	<style type="text/css">
		
		.nav-bar{
			width: 100%;
			height: 100px;
			background:#2299ff;
		}
		.logo{
			width:20%;
			float: left;
			height: 100%;
			line-height: 100px;
			font-size: 24px;
			text-align: center;
			font-size: 24px;
			color: #fff;
		}  
		.logo h1{
			border-bottom: 1px solid #555;
			
		}
		.nav-bar a{
			margin: 1px;
			color: #fff;
			padding: 10px;
			text-align: center;
			text-decoration: none;
			line-height: 80px;
			font-size: 25px;
			font-family:verdana;
			float: left;
		}
		.main{
			width: 100%;
			height: 400px;
			margin-top: 10px;
		}
		.left{
			width: 33%;
			height: 400px;
			float: left;
		
		}
		.center{
			width: 32%;
			height:400px;
			float: left;
			margin-left: 10px;
		}
		.right{
			width: 33%;
			height: 400px;
			float: left;
			margin-left: 10px;
		}
		.footer{
			width: 100%;
			height: 40px;
			background:darkcyan;
			margin-top: 10px;
			color: white;
			text-align: center;
			line-height: 40px;font-size: 24px;
			font-family: sans-serif,verdana,calibri;
		}
	</style>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

</head>
<body>
<div class="nav-bar">
	<div class="logo">Tanzania Police Force</div>
	<a href="">Home</a>
	<a href="">News</a>
	<a href="">Notification Center</a>
	<a href="">Contact</a>
	<a href="">Parents</a>
	<a href="">Student</a>
	<a href="">About</a>
	<a href="">Account</a>
</div>
<div class="main">
	<div class="left">
		<h1>User Information Center</h1>
		
			<div class="row">
				<div class="col-md-12">
					<div class="jumbotron">
			<h2>Number of registered Student</h2>
			<?php 
				$sql=mysqli_query($conn,"SELECT COUNT(id) AS countUser FROM users");
				$user=mysqli_fetch_assoc($sql);
				echo "Total Number of student Registered "."<p>.$user['countUser'];</p>"

			?>
				</div>

			</div>
		</div>
	</div>
	<div class="center">
		<h1>Criminal Notification Center
		</h1>
	</div>
	<div class="right">
		<h1>Trends Criminal news 2018</h1>

	</div>

</div>
<div class="footer">
	&copy;The Bush King <?php echo date('Y');?>

</div>

</body>
</html>   