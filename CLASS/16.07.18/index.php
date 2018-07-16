<? header("Content-type: text/html; charset=utf-8") ?>
<!DOCTYPE html>
<html>
<head>
	<title>PREG_MATCH</title>
</head>
<body>

<?

$doc = file_get_contents("http://www.lineageclassic.ru/cp/x1/index.php?page=stats&catid=5");

preg_match_all('/<table .*>(.*)<\/table>/Uis', $doc, $result);

echo $result[0][0];

?>

</body>
</html>