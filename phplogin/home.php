<?php
// We need to use sessions, so you should always start sessions using the below code.
session_start();
// If the user is not logged in redirect to the login page...
if (!isset($_SESSION['loggedin'])) {
	header('Location: index.html');
	exit();
}
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title></title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="stylesheet.css">
	</head>
	<body class="loggedin">
		<nav class="navtop">
			<div>
				<h1>1 HILFREICHE WEBSITE™</h1>
				<a href="profile.php"><i class="fas fa-user-circle"></i>Profile</a>
				<a href="logout.php"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</div>
		</nav>
		<div class="content">
			<h2>Willkommen zurück!</h2>
			<p>Hi, <?=$_SESSION['name']?>!</p>
		</div>
		<P> ⠀  ⠀  ⠀  ⠀  ⠀  ⠀   ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀ ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀ ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  ⠀  <a href="WEBSITE.php"><button>Hier geht es zur HomePage!</button></a></p>
	</body>
</html>
