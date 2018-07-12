<? header("Content-type: text/html; charset=utf-8");?>
<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
</head>
<body>
<h1>Регистрация</h1>
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
		$data = mysql_query("SELECT login FROM users WHERE login='$login'");
		$result = mysql_fetch_array($data);

		if($result) {
			echo "Такой логин уже занят.";
		} else {
			mysql_query("INSERT INTO users(login, password) VALUES('$login','$password')");
			echo "Успешная регистрация";
		}
	}
?>
</body>
</html>