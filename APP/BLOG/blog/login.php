<? session_start();?>
<? header("Content-type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
<head>
	<title>Авторизация</title>
</head>
<body>
<h1>Авторизация</h1>
<form action="" method="POST">
	<input name="login" placeholder="Логин">
	<input type="password" name="password" placeholder="Пароль">
	<input type="submit">
</form>
<?
	include("db.php");


	$login = $_POST["login"];
	$password = $_POST["password"];

	if(!empty($login) && !empty($password)) {
		$data = mysql_query("SELECT * FROM users WHERE login='$login' AND password='$password'");
		$result = mysql_fetch_array($data, MYSQL_ASSOC);

		if($result) {
			echo "Авторизация успешна";
			$_SESSION["user"] = $result["login"];
			header('HTTP/1.1 200 OK');
			header('Location: admin.php');
			exit();
		} else {
			echo "Такой логин не существует или не верный пароль";
		}
	}
?>
</body>
</html>