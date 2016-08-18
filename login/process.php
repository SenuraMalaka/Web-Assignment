<?php
	// Get values passe from form in login.php file
	$username = $_POST['user'];
	$password = $_POST['pass'];

	// TO prevent mysql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysql_real_escape_string($username);
	$password = mysql_real_escape_string($password);

	// Connect to the server and select database
	mysql_connect("localhost", "root", "");
	mysql_select_db("login");

	// Query the database for user
	$result = mysql_query("select * from users where username = '$username' and password = '$password'") or die ("Failedd to query database".mysql_error());
	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password){
		header('Location: http://localhost/NSBM');
	} else {
		echo "<script> alert ('Username or Password is incorrect')</script>";
	}

?>