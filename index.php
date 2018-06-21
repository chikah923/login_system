<?php
ini_set( 'display_errors', 1 );

session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Symple Login System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php if (isset($_SESSION['id'])) {
		echo $_SESSION['last'].", you are logged in !!";
		} else {
			echo "You are not logged in!";
		}
?>

	<form action = "login.php" method="POST">
		<div class = "input-group">
			<label>UserID</label>
			<input type="text" name="uid" placeholder="UserName"><br>
		</div>
		<div class = "input-group">
			<label>Password</label>
			<input type="password" name="pwd" placeholder="Password"><br>
		<div>
		<button type = "submit" class="btn">Login</button>
	</form>

<br><br><br>

	<form method="post" action="signup.php">

		<div class = "input-group">
			<label>First Name</label>
			<input type="text" name="first" placeholder="FirstName"><br>	
		</div>

		<div class = "input-group">
			<label>Last Name</label>
			<input type="text" name="last" placeholder="LastName"><br>
		</div>


		<div class = "input-group">
			<label>UserID</label>
			<input type="text" name="uid" placeholder="UserName"><br>
		</div>

		<div class = "input-group">
			<label>Password</label>
			<input type="password" name="pwd" placeholder="Password"><br>
		<div>


		<button type = "submit" class="btn">Sign Up</button>
	</form>

<br><br><br>

	<form action="logout.php">
		<button>Logout</button>
	</form>
</body>
</html>