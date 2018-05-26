<?php 
require 'controller/functions.php';

if (isset($_POST['submit'])) {
		if (register($_POST) > 0) {
			echo "<script>
				alert('buat akun berhasil');
				document.location.href = 'login.php';
			</script>";
		} else {
			echo "<script>
				alert('buat akun gagal');
			</script>";
		}
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registrasi</title>
	<style>
		.bg {
			background-color: #fff;
			width: 500px;
			height: 380px;
			padding: 25px;
			padding-top: 30px;
			margin:auto;
			margin-top: 120px;
			border-radius: 10px;
		}
		button {
			padding-left: 100px;
		}
		#brand a {
			color: white;
			text-decoration: none;
		}
	</style>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="bg">
		
	<nav class="navbar navbar-inverse navbar-fixed-top">
		<div class="container">		
			<h3 id="brand"><a href="../index.php">LPJ Online</a></h3>
		</div>
	</nav>

	<h1>Registrasi</h1><hr>
	<form action="" method="post" class="form-group" enctype="multipart/form-data">

		<input type="text" name="username" id="username" class="form-control" autofocus placeholder="Username"><br>
		<input type="password" name="password" class="form-control" id="password" placeholder="Password"><br>
		<input type="password" name="password2" class="form-control" id="password2" placeholder="Konfirmasi Password"><br>
		<a href="login.php">Login?</a>
		<br><br>	
		<button type="submit" class="btn btn-primary btn-lg" name="submit">Daftar</button><br><br>
	
	</form>
</div>
</div>
</body>
</html>