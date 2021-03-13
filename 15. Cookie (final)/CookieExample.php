<?php 
	setcookie("user_id", "abc", time() + 3600);

	/*
	
		$f = fopen("data.txt", "a");
		fwrite($f, "user_id" . "abc");

	*/
?>

<!DOCTYPE html>
<html>
<head>
	<title>Cookie Example</title>
</head>
<body>

	<h1>Cookie Example</h1>

	<?php 

		$val = count($_COOKIE);

		if($val > 0) {
			echo "Cookie enabled";
		}
		else {
			echo "Cookie disabled";
		}

		/* jdi user_id vul di like user_id = "user_id" but diyechi "user_id_1" 

		if(isset($_COOKIE["user_id_1"])) {
			echo "Name of the cookie is: " . $_COOKIE["user_id_1"];
		}
		else {
			echo "user_id" . " cookie not set";
		}
		
		*/

		if(isset($_COOKIE["user_id"])) {
			echo "Name of the cookie is: " . $_COOKIE["user_id"];
		}
		else {
			echo "user_id" . " cookie not set";
		}
	?>

</body>
</html>