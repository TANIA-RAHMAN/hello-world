<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

		/* right approach for Superglobal variable POST request and form method=POST */

		echo $_POST['fname'] . " " . $_POST['lname'];

		

		/* wrong approach for Superglobal variable GET request and form method=POST

		// echo $_GET['fname'] . " " . $_GET['lname'];

		*/

		/* right approach for Superglobal variable $_REQUEST as $_REQUEST can hold both POST and GET request

		// echo $_REQUEST['fname'] . " " . $_REQUEST['lname'];

		*/



	?>

</body>
</html>