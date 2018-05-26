<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location : login.php");
	exit;
}

require 'controller/functions.php';
if (isset($_POST["submit"])) {

	// var_dump($_POST); 
	// var_dump($_FILES);
	// die();

	//cek berhasil atau tidak
	if (tambah($_POST) > 0) {
		echo "<script>
			alert('Data berhasil ditambah');
			document.location.href = 'index.php';
		</script>";
	}else {
		echo "<script>
			alert('Data gagal ditambah');
		</script>";
			// document.location.href = 'index.php';
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TAMBAH DATA</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>
<div class="container col-md-12">	
	<div class="col-md-4 col-md-offset-4">
	<h1 class="text-center">TAMBAH DATA</h1>
	<form action="" method="post" class="form-group" enctype="multipart/form-data">
		
				
					<label for="tgl">Tanggal : </label><br>
					<input type="text" name="tanggal" id="tanggal" class="form-control" autofocus><br>
				
					<label for="acara">Program kerja : </label><br>
					<input type="text" name="nama_acara" class="form-control" id="acara"><br>
				
					<label for="keplak">Penanggung jawab : </label><br>
					<input type="text" name="keplak" class="form-control" id="keplak"><br>

					<label for="dana">Dana : </label><br>
					<input type="text" name="dana" class="form-control" id="dana"><br>
				
					<label for="divisi">Departement : </label><br>
					<input type="text" name="divisi" class="form-control" id="divisi"><br>

					<label for="deskripsi">Deskripsi : </label><br>
					<textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"></textarea>
					<br>
				
					<label for="upload">Upload : </label><br>
					<input type="file" name="upload" id="upload"><br>
				
				
					<button type="submit" class="btn btn-success" name="submit">Tambah data!</button><br><br>
					<a href="index.php">Kembali</a>	
					<!-- Ketika di klik submit(aksi) maka php akan be-reakasi dengan isset post -->
	</form>
</div>
</div>
</body>
</html>