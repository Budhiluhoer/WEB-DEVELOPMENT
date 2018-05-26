<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location : login.php");
	exit;
}

require 'controller/functions.php';

//ambil data di url
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$query = query("SELECT * FROM acara WHERE id = $id")[0];
// var_dump($query["nama"]);

if (isset($_POST["submit"])) {
	//cek berhasil atau tidak
	if (ubah($_POST) > 0) {
		echo "<script>
			alert('data berhasil diubah');
			document.location.href = 'index.php';
		</script>";
	}else {
		echo "<script>
			alert('data gagal diubah');
			// document.location.href = 'index.php';
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
<body>
<div class="container col-md-12">	
<div class="col-md-4 col-md-offset-4">	
	<h1>UBAH DATA</h1>
	
	<form action="" method="post" class="form-group" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<?= $query["id"]; ?>">
		
			
				<label for="tgl">Tanggal : </label>
				<input type="text" name="tanggal" id="tanggal" autofocus class="form-control"
				value="<?= $query["tanggal"]; ?>"><br>
			
			
				<label for="acara">Nama Acara : </label>
				<input type="text" name="nama_acara" id="nama_acara" class="form-control" value="<?= $query["nama_acara"]; ?>"><br>
			
			
				<label for="keplak">Ketua Pelaksana : </label>
				<input type="text" name="keplak" id="keplak" value="<?= $query["keplak"]; ?>" class="form-control"><br>

				<label for="dana">Dana : </label>
				<input type="text" name="dana" id="dana" value="<?= $query["dana"]; ?>" class="form-control"><br>
			
				<label for="divisi">Divisi : </label>
				<input type="text" name="divisi" id="divisi" value="<?= $query["divisi"]; ?>" class="form-control"><br>

				<label for="deskripsi">Deskripsi : </label>
				<textarea name="deskripsi" id="deskripsi" class="form-control" cols="30" rows="10"><?= $query["deskripsi"]; ?></textarea>
				<br>
			
				<label for="upload">Upload : </label>
				<input type="file" name="upload" id="upload"?><br>
				<p><?= $query["upload"]; ?></p>

				<button type="submit" class="btn btn-success" name="submit">Ubah data</button><br><br>
				<a href="index.php">Kembali</a>		
	</form>
</div>	
</div>
</body>
</html>