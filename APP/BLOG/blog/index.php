<? header("Content-type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
<?
	include("db.php");

	if(empty($_GET)) {
		$query = mysql_query("SELECT * FROM contents");

		while($data = mysql_fetch_array($query, MYSQL_ASSOC)) {
			$template_file = file_get_contents("template-post.php");
			$keywords = array("%header%","%date%","%content%","%link%");
			$data_array = array($data["header"], $data["date"], $data["content"],$data["id"]);
			$result = str_replace($keywords,$data_array,$template_file);
			echo $result;
		}
	} else {
		$id = $_GET["page"];
		$query = mysql_query("SELECT * FROM contents WHERE id='$id'");
		$data = mysql_fetch_array($query, MYSQL_ASSOC);
		$template_file = file_get_contents("template-post.php");
		$keywords = array("%header%","%date%","%content%");
		$data_array = array($data["header"], $data["date"], $data["content"]);
		$result = str_replace($keywords,$data_array,$template_file);
		echo $result;

		
	}

?>
</body>
</html>