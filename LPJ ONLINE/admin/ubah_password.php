<?php 
session_start();
if (isset($_SESSION["login"])) {
	header("Location: index.php");
	exit;
}


require 'controller/functions.php';

if (isset($_POST['submit'])) {
		$password_lama = $_POST["password_lama"];
		$password_baru = $_POST["password_baru"];
		$konfirmasi = $_POST["konfirmasi"];

		$cek = query($db,
			"SELECT * FROM akun WHERE password='$password_lama'");
		$row = mysqli_fetch_assoc($cek);
		password_verify($password_lama, $row["password"]);

		if ($cek) {
			if (strlen($password_baru) >= 5) {

				if ($password_baru = $konfirmasi) {
					$password_baru = password_verify($konfirmasi, $row["password"]);
					$username = $_SESSION["username"];
					$update = $db->
					query("UPDATE akun SET password='$password_baru' WHERE username='$username'");
					if ($update) {
						echo "password berhasil diubah";
					}else{
						echo "password gagal diubah";
					}
				}else{
					echo "konfirmasi password tidak cocok";
				}

			}else{
				echo "password minimal 5 karakter";
			}
		}else{
			echo "password lama tidak cocok";
		}




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
				<h3 id="brand"><a href="../index.php">LPJ Online</a></h3>
		  </div>
	</nav>

	<h1>Ganti Password</h1><hr>
	<form action="" method="post" class="form-group">
		
		<input type="password" name="password_lama" id="password_lama" class="form-control" autofocus placeholder="Password Lama"><br>

		<input type="password" name="password_baru" class="form-control" id="password_baru" placeholder="Password Baru"><br>

		<input type="password" name="konfirmasi" class="form-control" id="konfirmasi" placeholder="Konfirmasi Password Baru"><br>
		
		<a class="text-center" href="registrasi.php">Registrasi</a>	<br><br>
		
		<button type="submit" class="btn btn-primary btn-lg" name="submit">Submit</button><br><br>
	</form>
</div>

</body>
</html>