<?php 

require 'controller/functions.php';

//ambil data di url
$id = $_GET["id"];
//query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs["nama"]);

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
	<title>UBAH DATA MAHASISWA</title>
</head>
<body>
	<h1>UBAH DATA MAHASISWA</h1>
	<a href="index.php"><< Home</a>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
		<ul>
			<li>
				<label for="nama">NAMA : </label>
				<input type="text" name="nama" id="nama" required
				value="<?= $mhs["nama"] ?>">
			</li><br>
			<li>
				<label for="npm">NPM : </label>
				<input type="text" name="npm" id="npm" required value="<?= $mhs["npm"] ?>">
			</li><br>
			<li>
				<label for="email">E-MAIL : </label>
				<input type="text" name="email" id="email" required value="<?= $mhs["email"] ?>">
			</li><br>
			<li>
				<label for="jurusan">JURUSAN : </label>
				<input type="text" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"] ?>">
			</li><br>
			<li>
				<label for="gambar">GAMBAR : </label>
				<input type="text" name="gambar" id="gambar" required value="<?= $mhs["gambar"] ?>">
			</li>
			<li>
				<button type="submit" name="submit">Ubah data!</button>
			</li>
		</ul>
	</form>
</body>
</html>