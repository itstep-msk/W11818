<? session_start(); ?>

<form action="" method="POST">
	<input name="fruit">
	<input type="submit">
</form>

<?

$_SESSION["apple"] = $_POST["fruit"];

echo $_SESSION["apple"];

?>