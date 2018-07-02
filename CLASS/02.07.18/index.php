<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="" method="POST">
	<input placeholder="¬ведите логин..." name="login">
	<input placeholder="¬ведите пароль..." type="password" name="password">
	<input type="submit">
</form>

<?
	include("db.php");

	$login = $_POST["login"];
	$password = $_POST["password"];

	if(!empty($login) && !empty($password)) {
		mysql_query("INSERT INTO users(login, password) VALUES ('$login','$password')");
	}

	$query = mysql_query("SELECT * FROM users");

	

	while($result = mysql_fetch_array($query, MYSQL_ASSOC)) {
		echo $result["login"];
		echo "<br>";
	}

	
?>
</body>
</html>

