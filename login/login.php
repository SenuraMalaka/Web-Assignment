<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	
<img class="logo" src="../images/mlogo.png" alt="logo" style="width:21%;height:7%;">

	<div id="frm">
		<form action="process.php" method="POST">
			<p>
				<label>Username</label>
				<input type="text" id="user" name="user"/>
			</p>
			<p>
				<label>Password</label>
				<input type="password" id="pass" name="pass"/>
			</p>
			<p>
				<input type="submit" id="btn" value="login"/>
			</p>
		</form>
	</div>
	<div class="fd" style="background-color:#8fd7ef">
	<footer style="color:black"><b>Copyright @ National School of Business Management No 309, High Level Road, Colombo 05, Sri Lanka.<br>Telephone: +94(11) 567 2545|5673535 - Email:info@nsbm.lk</b></footer></div>
</body>
</html>
