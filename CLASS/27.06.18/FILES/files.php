<!DOCTYPE html>
<html>
<head>
	<title>FILES</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
	<input type="file" name="fruit">
	<input type="submit">
</form>

<?
	$file_name = $_FILES["fruit"]["name"];
	$file_tmp = $_FILES["fruit"]["tmp_name"];
	$file_dir = "C:/phpfiles/".$file_name;

	move_uploaded_file($file_tmp, $file_dir);
?>

</body>
</html>