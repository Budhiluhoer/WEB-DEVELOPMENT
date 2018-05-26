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
				<h3 id="brand"><a href="index.php">PT. Budhi Square</a></h3>
				<a href="index.php">Home</a><br><br>
		  </div>
</nav>



	<form class="form-group" action="" method="post">
				<h1 class="text-center">Tambah Data</h1>
				<label for="id">Kode barang : </label>
				<input type="text" name="id" id="id" class="form-control">
	
				<label for="nama">Nama item : </label>
				<input type="text" name="nama" id="nama" class="form-control">
	
				<label for="jumlah">jumlah : </label>
				<input type="text" name="jumlah" id="jumlah" class="form-control">
	
				<label for="stok_min">Persediaan Minimum : </label>
				<input type="text" name="stok_min" id="stok_min" class="form-control">
	
				<label for="satuan">Satuan : </label>
				<input type="text" name="satuan" id="satuan" class="form-control">
	
				<label for="lokasi">Lokasi barang : </label>
				<input type="text" name="lokasi" id="lokasi" class="form-control">
	
				<label for="kategori">Kategori barang : </label>
				<input type="text" name="kategori" id="kategori" class="form-control"><br>
	
				<button type="submit" name="submit" class="btn btn-success">Tambah Data</button> 
				<!-- Ketika di klik submit(aksi) maka php akan be-reakasi dengan isset post -->
		
	</form>
</body>
</html>