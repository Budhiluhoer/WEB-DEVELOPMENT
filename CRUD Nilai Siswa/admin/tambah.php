<?php 

session_start();

if (!isset($_SESSION["login"])) {
	header("Location : ../login.php");
	exit;
}

require '../controller/functions.php';
if (isset($_POST["submit"])) {
	//cek berhasil atau tidak
	if (tambah($_POST) > 0) {
		echo "<script>
			alert('data berhasil ditambah');
			document.location.href = 'index.php';
		</script>";
	}else {
		echo "<script>
			alert('data gagal ditambah');
			document.location.href = 'index.php';
		</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TAMBAH DATA</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
		
	</style>
</head>
<body class="container">
<nav class="navbar navbar-default">
		  <div class="container">	
				<h3 id="brand"><a href="index.php">Nilai Ujian Nasional SMPN 1 KARAWANG</a></h3>
				<a href="index.php">Home</a><br><br>
		  </div>
</nav>



	<form class="form-group" action="" method="post">
				
				<h1 class="text-center">Tambah Data</h1>
	<div class="col-md-6">
				<label for="nis">NIS : </label>
				<input type="text" name="nis" id="nis" class="form-control">
	
				<label for="nama">Nama Siswa : </label>
				<input type="text" name="nama" id="nama" class="form-control">
	
				<label for="kelas">Kelas : </label>
				<input type="text" name="kelas" id="kelas" class="form-control">
	
				<label for="jk">Jenis Kelamin : </label>
				<input type="text" name="jk" id="jk" class="form-control">
	</div>
	<div class="col-md-6">
				<label for="mtk">Matematika : </label>
				<input type="text" name="mtk" id="mtk" class="form-control">
	
				<label for="ipa">Ilmu Pengetahuan Alam : </label>
				<input type="text" name="ipa" id="ipa" class="form-control">
	
				<label for="ips">Ilmu Pengetahuan Sosial : </label>
				<input type="text" name="ips" id="ips" class="form-control">
				
				<label for="indo">Bahasa Indonesia : </label>
				<input type="text" name="indo" id="indo" class="form-control">

				<label for="ing">Bahasa Inggris : </label>
				<input type="text" name="ing" id="ing" class="form-control"><br>

				<button type="submit" name="submit" class="btn btn-success">Tambah Data</button> 
	</div>
				<!-- Ketika di klik submit(aksi) maka php akan be-reakasi dengan isset post -->
		
	</form>
</body>
</html>