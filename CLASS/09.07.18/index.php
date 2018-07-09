<!DOCTYPE html>
<html>
<head>
	<title>Function</title>
</head>
<body>

<?
/*/////////////////
	function hello($name = "Dog") {
		return "Hello $name<br>";
	}

	echo hello("Dima");
	echo hello("Alex");
	$apple = hello("Petya");
	echo $apple;
	echo hello();
	*/
	/*
	function square($num) {
		$apple = $num * $num;
		return $apple;
	}

	echo square(7);
	*/


/*///////////////
	function checkAge($age) {
		if($age > 18) {
			return true;
		} else {
			return false;
		}
	}

	function showMovie($age) {
		if(checkAge($age)) {
			return "Ïîêàçàòü êèíî";
		} else {
			return "Ïîêàçàòü ìóëüòèêè";
		}
	}

	echo showMovie(20);
	echo showMovie(16);
	*/

	/*////////////////////////////
	function ShowMovieAndCheckAge($age) {
		if ($age > 18) {
			echo "Ïîêàçàòü ôèëüì";
		} else {
			echo "Âàì ìåíüøå 18";
		}
	}

	ShowMovieAndCheckAge(18)
	*/
	function factorial($number) {

		if($number == 1) {
			return 1;
		} else {
			return $result = $number * factorial($number - 1);
		}
	}

	echo factorial(5);
/* ÂÈÇÓÀËÈÇÀÖÈß ÐÅÊÓÐÑÈÈ
	function factorial(5) {

		if($number == 1) {
			return 1;
		} else {
			return $result = 5 * 24;
		}
	}

	function factorial(4) {

		if($number == 1) {
			return 1;
		} else {
			return $result = 4 * 6;
		}
	}

	function factorial(3) {

		if($number == 1) {
			return 1;
		} else {
			return $result = 3 * 2;
		}
	}

	function factorial(2) {

		if($number == 1) {
			return 1;
		} else {
			return $result = 2 * 1;
		}
	}

	function factorial(1) {

		if($number == 1) {
			return 1;
		} else {
			return $result = $number * factorial($number - 1);
		}
	*/
?>

</body>
</html>