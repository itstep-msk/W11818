<!DOCTYPE html>
<html>
<head>
	<title>Site</title>
	<meta charset="utf-8">
</head>
<body>
<a href="?">Home</a>
<a href="?page=about">About</a>
<a href="?page=contacts">Contacts</a>
<br>
<?
	$pages = array("about","contacts");
	$get = $_GET["page"];

	if(empty($get)) {
		echo "Главная страница";
	} else {
		if(in_array($get,$pages)) {
			include("pages/".$get.".html");
		} else {
			echo "Не найдено";
		}
	}

		
 	
?>

</body>
</html>