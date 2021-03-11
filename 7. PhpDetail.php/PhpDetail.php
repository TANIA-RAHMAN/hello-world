<!DOCTYPE html>
<html>
<head>
	<title>PHP Detail</title>
</head>
<body>

	<?php
		// This is comment
		# echo "Hello PHP";

		/*
			This is a multi line comment
		*/

		/* echo vs print */
		echo "Hello PHP";
		echo "<br>";
		print "Hello PHP";

		/* Data type */
		// String
		// Float
		// Integer
		// Boolean
		// Array
		// Object
		// Null

		echo "<br>";

		// How to declare a variable in PHP
		$x = "PHP";
		$y = "Learn";

		echo $x . " " . $y;

		echo "<br>";

		/*

		$a = 10;
		$b = 10.5;

		echo $a + $b;

		echo "<br>";

		$a = 10;
		$b = "10.5";

		echo $a + $b;

		echo "<br>";

		
		$a = "10";
		$b = "10.5";

		echo $a + $b;

		echo "<br>";
		
		// variable error

		$a = "A";
		$b = "10.5";

		echo $a + $b;

		*/

		$a = "10";
		$b = 10.5;

		echo $a + $b;

		echo "<br>";

		var_dump($a);
		var_dump($b);

		echo "<br>";

		$c = true;
		var_dump($c);

		echo "<br>";

		$fruits = array("Apple", "Banana", "Mango", 20);
		var_dump($fruits);

		echo "<br>";



	?>

</body>
</html>