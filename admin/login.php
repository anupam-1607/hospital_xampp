<html>

<head>
	<title>Admin Login</title>
	<link rel="stylesheet" href="style.css">
</head>

<body>

<div class="box">
	<h2>Admin Login</h2>
	<form action="process.php" method="post">
	
		<div class="inputBox">
			<input type="text" name="email" required="">
			<label>Email ID</label>
		</div>
		
		<div class="inputBox">
			<input type="password" name="pass" required="">
			<label>Password</label>
		</div>
		
		<input type="submit" name="Login" value="Login">
	
	</form>

</body>

</html>