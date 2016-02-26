<?php
	//Start session
	session_start();
	
	//Unset the variables stored in session
	unset($_SESSION['SESS_MEMBER_ID']);
	unset($_SESSION['SESS_USERNAME']);
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Logged Out</title>
</head>
<body>
<p>&nbsp;</p>

<h1 align="center">Logout </h1>
<h4 align="center" class="err">You have been logged out.</h4>
<p align="center">Click here to <a href="index.php">Login</a></p>

</body>
</html>
