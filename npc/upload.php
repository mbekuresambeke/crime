<?php 
	if (isset($_FILES['file'])) {
			$file=$_FILES['file'];
			print_r($file);
			$file_name=$file['name'];
			$file_temp_name=$file['temp_name'];
			$file_error=$file['error'];
			
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>UPLOAD</title>
</head>
<body>
	<form method="POST" enctype="multipart-data">
		<input type="file" name="file"><br><br>
		<input type="submit" name="submit" value="Upload file">
	</form>
</body>
</html>