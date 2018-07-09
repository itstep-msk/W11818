<? header("Content-type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<meta charset="utf-8">
</head>
<body>
<?
	include("db.php");

	if(empty($_GET)) {
		$query = mysql_query("SELECT * FROM contents");

		while($data = mysql_fetch_array($query, MYSQL_ASSOC)) {
			echo $data["header"]." Дата: ".$data["date"]
			."<br>"
			.$data["content"]
			."<br>"
			."<a href='?page=".$data['id']."'>Читать далее</a>"
			."<hr>";
		}
	} else {
		$id = $_GET["page"];
		$query = mysql_query("SELECT * FROM contents WHERE id='$id'");
		$data = mysql_fetch_array($query, MYSQL_ASSOC);
		echo $data["header"]." Дата: ".$data["date"]
			."<br>"
			.$data["content"]
			."<br>";
	}

?>
</body>
</html>