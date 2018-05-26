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
$kueri = query("SELECT * FROM nilai WHERE id = $id")[0];
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
				<h3 id="brand"><a href="index.php">Nilai Ujian Nasional</a></h3>
				<a href="index.php">Home</a><br><br>
		  </div>
</nav>

	<form action="" method="post" class="form-group">
		<input type="hidden" name="id" value="<?= $kueri["id"]; ?>">
		<h1 class="text-center">Ubah Data</h1>
		
				<label for="nis">NIS : </label>
				<input class="form-control" type="text" name="nis" id="nis" required value="<?= $kueri["nis"] ?>">
					
				<label for="nama">Nama Siswa : </label>
				<input class="form-control" type="text" name="nama" id="nama" required value="<?= $kueri["nama"] ?>">
					
				<label for="kelas">Kelas : </label>
				<input class="form-control" type="text" name="kelas" id="kelas" required value="<?= $kueri["kelas"] ?>">
			
				<label for="jk">Jenis Kelamin : </label>
				<input class="form-control" type="text" name="jk" id="jk" required value="<?= $kueri["jk"] ?>">
			
				<label for="mtk">Matematika : </label>
				<input class="form-control" type="text" name="mtk" id="mtk" required value="<?= $kueri["mtk"] ?>">
		
				<label for="ipa">Ilmu Pengetahuan Alam : </label>
				<input class="form-control" type="text" name="ipa" id="ipa" required value="<?= $kueri["ipa"] ?>">

				<label for="ips">Ilmu Pengetahuan Sosial : </label>
				<input class="form-control" type="text" name="ips" id="ips" required value="<?= $kueri["ips"] ?>">

				<label for="indo">Bahasa Indonesia : </label>
				<input class="form-control" type="text" name="indo" id="indo" required value="<?= $kueri["indo"] ?>">

				<label for="ing">Bahasa Inggris : </label>
				<input class="form-control" type="text" name="ing" id="ing" required value="<?= $kueri["ing"] ?>">
			
				<button class="btn btn-success" type="submit" name="submit">Ubah Data</button>
	</form>
</body>
</html>