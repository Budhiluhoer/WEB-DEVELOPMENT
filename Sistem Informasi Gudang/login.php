<?php 
session_start();
if (isset($_SESSION["login"])) {
	header("Location: login.php");
	exit;
}


require 'controller/functions.php';

if (isset($_POST['submit'])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		$kueri = mysqli_query($db,
			"SELECT * FROM users WHERE username='$username'");

	//cek username
	if (mysqli_num_rows($kueri) == 1) {
		//cek password
		$row = mysqli_fetch_assoc($kueri);
		if( password_verify($password, $row["password"]) ){
			
			// set session
			$_SESSION["login"] = true;

			header("Location: admin/index.php");
			exit;
		}else{
			echo "<script>alert('login gagal');</script>";
		}
	}

	$error = true;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Log In</title>
	<style>
		#brand a {
			color:white;
			text-decoration: none;
		}
		.bg {
			background-color: #fff;
			width: 500px;
			height: 360px;
			padding: 20px;
			padding-top: 30px;
			margin:auto;
			margin-top: 120px;
			border-radius: 10px;
		}

		button {
			padding-left: 100px;
		}
	</style>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="bg">
	<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">	
				<h3 id="brand"><a href="index.php">PT. Budhi Square</a></h3>
		  </div>
	</nav>

	<h1>Log In</h1><hr>
	<form action="" method="post" class="form-group">
		<input type="text" name="username" id="username" class="form-control" autofocus placeholder="Username"><br>
		<input type="password" name="password" class="form-control" id="password" placeholder="Password"><br>
		<a class="text-center" href="registrasi.php">Registrasi</a>	<br><br>
		<button type="submit" class="btn btn-primary btn-lg" name="submit">Masuk</button><br><br>
	</form>
</div>

</body>
</html>