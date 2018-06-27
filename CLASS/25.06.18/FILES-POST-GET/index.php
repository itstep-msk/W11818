<!DOCTYPE html>
<html>
<head>
	<title>POST / GET</title>
</head>
<body>

<form action="" method="GET">
	<input name="fruit">
	<input name="vegetable">
	<input type="submit">
</form>

<!-- 
1) Данные формируются
	fruit=Значение&vegetable=Значение
2) Перезагружает страницу
3) Ссылается на обработчик
4) Обработчик забирает данные из пункта "1)"
5) Переносит данные в массив $_POST или $_GET в зависимости от содержание атрибута method у формы.
-->

<?

	var_dump($_GET);

	/*$file = fopen("data.txt", "a+");
	fwrite($file, $_GET["fruit"]);
	fclose($file);

	echo file_get_contents("data.txt");*/
?>

</body>
</html>