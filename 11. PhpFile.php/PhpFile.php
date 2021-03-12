<!DOCTYPE html>
<html>
<head>
	<title>PHP File Example</title>
</head>
<body>

	<h1>PHP File Example</h1>

	<?php

		/* File Read */

		$filePath = "data.txt";

		echo readfile($filePath);

		echo "<br>";

		echo fopen($filePath, "r");

		echo "<br>";

		$f = fopen($filePath, "r");

		echo "filesize is: " . filesize($filePath);

		echo "<br>";

		echo fread($f, filesize($filePath));

		fclose($f);

		echo "<br>";

		$f1 = fopen($filePath, "r");

		echo fread($f1, filesize($filePath) - 1);

		fclose($f1);

		/*  

		// fgets()  => eta single line read kre 
		// fgetc()	=> eta single character read kre 
		// feof()	=> file read krte krte end prjnto cole asche kina check krte pare se ekta boolean result return kre 

		*/

		/* diff w vs a 

			// w => w mode e open krar mane hocce file open krar somoy erase kre dibe and def ta k e rakhtece nijer moddhe as " fwrite($f2, "\ndef"); "

			// a => a mode e open krar mane hocce last je prjnto file er state ache trpr theke write kro, so apni jekno content caile or moddhe store krte paren and apnr agr value gulao erase hocce na
			
		*/
		// $f2 = fopen($filePath, "w");

		$f2 = fopen($filePath, "a");

		fwrite($f2, "\ndef");

		fclose($f2);

		/* x+, r+, w+, a+, c, c+  (show picture no : 609, 610)

			// r+  => read o kra jay write o kra jay
			// w+  => read o kra jay write o kra jay
			// a+  => read o kra jay write o kra jay
			// x+  => read o kra jay write o kra jay

		*/

		

	?>

</body>
</html>