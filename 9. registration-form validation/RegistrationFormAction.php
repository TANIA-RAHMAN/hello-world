<!DOCTYPE html>
<html>
<head>
	<title>Registration Form Action</title>
</head>
<body>

	<h1>Registration Form Action</h1>

	<?php 

		/* PHP Form Validation */

		if($_SERVER["REQUEST_METHOD"] == "POST") {

			if(empty($_POST['fname']) && empty($_POST['lname'])) {
				echo "Fill the form properly";
			}
			else {
				echo $_POST['fname'] . " " . $_POST['lname'];
			}
		}
		// echo $_REQUEST['fname'] . " " . $_REQUEST['lname'];



		/* Me */
		/* right approach for Superglobal variable POST request and form method=POST */

		//echo $_POST['fname'] . " " . $_POST['lname'];

		

		/* wrong approach for Superglobal variable GET request and form method=POST

		// echo $_GET['fname'] . " " . $_GET['lname'];

		*/

		/* right approach for Superglobal variable $_REQUEST as $_REQUEST can hold both POST and GET request

		// echo $_REQUEST['fname'] . " " . $_REQUEST['lname'];

		*/
	?>

</body>
</html>