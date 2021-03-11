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

		// How to declare a variable in PHP
		echo "<br>";

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

		/* Find the type of variable by var_dump($a) */
		echo "<br>";

		var_dump($a);
		var_dump($b);

		echo "<br>";

		$c = true;
		var_dump($c);

		echo "<br>";

		$fruits = array("Apple", "Banana", "Mango", 20);
		var_dump($fruits);

		/* Conditional Statement (if-else) */
		echo "<br>";

		$z = 20;

		if ($z == 20) {
			echo "The value is 20";
		}
		else {
			echo "The value is not 20";
		}

		echo "<br>";

		$z = 20;

		if ($z != 20) {
			echo "The value is 20";
		}
		else {
			echo "The value is not 20";
		}

		echo "<br>";

		$s = "str";

		if ($s == "stz") {
			echo "Text is stz";
		} elseif ($s == "str") {
			echo "Text is str";
		} else{
			echo "Text is unknown";
		}

		/* Switch Statement */
		echo "<br>";

		$randomNumber = 20;

		switch ($randomNumber) {
			case 1:
				echo "Lucky Number";
				break;
			case 2:
				echo "Unlucky Number";
				break;	
			case 20:
				echo "You will get a surprise";
				break;			
			default:
				echo "No match found";
				break;
		}

		/* Loops */
		echo "<br>";

		for ($p = 1; $p <= 10; $p++) {
			echo $p . "<br>";
		}

		echo "<br>";

		$q = 1;

		while ($q <= 10) {
			echo $q . "<br>";
			$q++;
		}

		/* do {} while(expression) */   // try yourself the do while loop

		/* for-each loop */
		echo "<br>";

		$fruits = array("apple", "banana", "mango");

		foreach ($fruits as $value) {
			echo $value . " ";
		}

		echo "<br>";

		$students = array("abc" => 1, "def" => 2);

		foreach ($students as $student => $value) {
		 	echo "$student = $value" . "<br>";
		} 

		/* break vs continue */  // obviously show yourself from w3school.com

		/* Strings */
		echo "<br>";

		$sample = "Hello PHP";
		echo "Number of words: " . str_word_count($sample);

		/* string position */
		echo "<br>";

		echo "Position: " . strpos($sample, "PHP");

		/* character ke choto boro o krte prben mane uper case lower case o ache */

		/* string length */
		echo "<br>";

		echo "Length: " . strlen($sample);

		echo "<br>";

		// strrev(), lower-case ache but lower-case er method tar name vule gechi, echara aro onk reference ache w3school.com theke dekhe niben

		/* apni emn ekta number likhlen jeta PHP er integer limit cross kre felse thle by default PHP setake as a float hisebe consider krbe then float limit o cross kre felle setake bola hoy infinit number; w3school.com er "PHP Number" theke php er number limit ta dekhe nite hbe */


		/* Functions in PHP */
		// declare user-define-function and call that user-define-function 
		function greetings(){
			echo "Hello PHP <br>";
		}

		greetings();

		// user-define-function with parameter
		function greetingsWithParameter($msg){
			echo "Hello PHP " . $msg . "<br>";
		}

		greetingsWithParameter("Text");
		greetingsWithParameter(1);

		/*

		//or
		// wrong declaration "Text" as the datatype is int
		function greetingsWithParameter(int $msg){
			echo "Hello PHP " . $msg . "<br>";
		}

		greetingsWithParameter("Text");
		greetingsWithParameter(1);

		*/

		/*
		
		//or
		// right declaration 2 as the datatype is int
		function greetingsWithParameter(int $msg){
			echo "Hello PHP " . $msg . "<br>";
		}

		greetingsWithParameter(2);
		greetingsWithParameter(1);

		*/

		/*
		
		//or
		// right declaration as the default parameter "Dummy" is providing 
		function greetingsWithParameter($msg = "Dummy"){
			echo "Hello PHP " . $msg . "<br>";
		}

		greetingsWithParameter();
		greetingsWithParameter(1);

		*/

		/* for pass by reference use & before parameter name */
		function expectingReturn() {
			return 20;
		}

		$returnValue = expectingReturn();

		echo "<br>";

		echo "returnValue";

		/*

		//or
		// you can declare datatype also " : int "
		function expectingReturn() : int {
			return 20;
		}

		$returnValue = expectingReturn();

		echo "<br>";

		echo "returnValue";

		*/

		/*

		//or
		// wrong declaration as return type is int but we passed string "ABC"
		function expectingReturn() : int {
			return "ABC";
		}

		$returnValue = expectingReturn();

		echo "<br>";

		echo "returnValue";

		*/

		
		/* PHP Super global variable */
		
		/*
		The PHP superglobal variables are:
		$GLOBALS
		$_SERVER
		$_REQUEST
		$_POST
		$_GET
		$_FILES
		$_ENV
		$_COOKIE
		$_SESSION
		*/

		/* Constant Variable Declaration */
		define("pi", 3.1416);
		echo pi;



		/* Regular Expression 

		// show the following examples of regular expression from https://w3schools.com
		preg_match()
		preg_match_all()
		preg_replace()

		*/

	?>

</body>
</html>