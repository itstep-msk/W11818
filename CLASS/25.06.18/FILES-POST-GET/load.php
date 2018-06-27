<?

$file = fopen("data.txt", "a+");
fwrite($file, $_POST["fruit"]);
fclose($file);

?>