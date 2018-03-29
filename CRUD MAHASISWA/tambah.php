<?php 

require 'controller/functions.php';
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
	<title>TAMBAH DATA MAHASISWA</title>
</head>
<body>
	<h1>TAMBAH DATA MAHASISWA</h1>
	<a href="index.php"><< Home</a>
	<form action="" method="post">
		<ul>
			<li>
				<label for="nama">NAMA : </label>
				<input type="text" name="nama" id="nama" required>
			</li><br>
			<li>
				<label for="npm">NPM : </label>
				<input type="text" name="npm" id="npm" required>
			</li><br>
			<li>
				<label for="email">E-MAIL : </label>
				<input type="text" name="email" id="email" required>
			</li><br>
			<li>
				<label for="jurusan">JURUSAN : </label>
				<input type="text" name="jurusan" id="jurusan" required>
			</li><br>
			<li>
				<label for="gambar">GAMBAR : </label>
				<input type="text" name="gambar" id="gambar" required>
			</li>
			<li>
				<button type="submit" name="submit">Tambah data!</button> 
				<!-- Ketika di klik submit(aksi) maka php akan be-reakasi dengan isset post -->
			</li>
		</ul>
	</form>
</body>
</html>