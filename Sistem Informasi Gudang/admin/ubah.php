<?php 

session_start();

if (!isset($_SESSION["login"])) {
	header("Location : ../login.php");
	exit;
}


require '../controller/functions.php';

//ambil data di url
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$kueri = query("SELECT * FROM gudang WHERE id = $id")[0];
// var_dump($kueri["nama"]);

if (isset($_POST["submit"])) {
	//cek berhasil atau tidak
	if (ubah($_POST) > 0) {
		echo "<script>
			alert('data berhasil diubah');
			document.location.href = 'index.php';
		</script>";
	}else {
		echo "<script>
			alert('data berhasil diubah');
			document.location.href = 'index.php';
		</script>";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>UBAH DATA</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class="container">
<nav class="navbar navbar-default">
		  <div class="container">	
				<h3 id="brand"><a href="index.php">PT. Budhi Square</a></h3>
				<a href="index.php">Home</a><br><br>
		  </div>
</nav>

	<form action="" method="post" class="form-group">
		<input type="hidden" name="id" value="<?= $kueri["id"]; ?>">
		<h1 class="text-center">Ubah Data</h1>
		
		<label for="id">Id Barang : </label>
		<input class="form-control" type="text" name="id" id="id" required value="<?= $kueri["id"] ?>">
			
		<label for="nama">Nama Barang : </label>
		<input class="form-control" type="text" name="nama" id="nama" required value="<?= $kueri["nama"] ?>">
			
			
				<label for="jumlah">Jumlah : </label>
				<input class="form-control" type="text" name="jumlah" id="jumlah" required value="<?= $kueri["jumlah"] ?>">
			
			
				<label for="stok_min">Persediaan Minimum : </label>
				<input class="form-control" type="text" name="stok_min" id="stok_min" required value="<?= $kueri["stok_min"] ?>">
			
				<label for="satuan">Satuan : </label>
				<input class="form-control" type="text" name="satuan" id="satuan" required value="<?= $kueri["satuan"] ?>">
		
			
				<label for="lokasi">Lokasi barang : </label>
				<input class="form-control" type="text" name="lokasi" id="lokasi" required value="<?= $kueri["lokasi"] ?>">
			
			
				<label for="kategori">Kategori : </label>
				<input class="form-control" type="text" name="kategori" id="kategori" required value="<?= $kueri["kategori"] ?>"><br>
			
				<button class="btn btn-success" type="submit" name="submit">Ubah Data</button>
	</form>
</body>
</html>