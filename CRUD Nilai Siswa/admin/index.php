<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location : login.php");
	exit;
}

require '../controller/functions.php';
$nilai = query("SELECT * FROM nilai");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
		ul li{ list-style: none; display: inline; }
	</style>
</head>
<body class="container">

<nav class="navbar navbar-default">
		  <div class="container">	
				<h3 id="brand"><a href="index.php">Nilai Ujian Nasional SMPN 1 KARAWANG</a></h3>
				<ul>
					<li><a class="btn" href="../index.php">Home</a></li>
					<li><a class="btn" href="../logout.php" onclick="return confirm('Yakin?');">Logout</a></li>
				</ul>
		  </div>
</nav>

<br><br>
<a class="btn btn-success" href="tambah.php" id="add">Tambah data</a>
<br><br>
<table class="table table-hover" align="center" cellpadding="10" cellspacing="0" width="75%">
	<tr class="active">
		<th algin="center">NIS</th>
		<th algin="center">Nama Siswa</th>
		<th algin="center">Kelas</th>
		<th algin="center">Jenis Kelamin</th>
		<th algin="center">Matematika</th>
		<th algin="center">IPA</th>
		<th algin="center">IPS</th>
		<th algin="center">Bahasa Indonesia</th>
		<th algin="center">Bahasa Inggris</th>
		<th>Ubah</a></th>
		<th>Hapus</a></th>
	</tr>

	<?php $i=1; ?>
	<?php foreach ($nilai as $row) : ?> 
	<tr>
		<td><?= $row["nis"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["kelas"]; ?></td>
		<td><?= $row["jk"]; ?></td>
		<td><?= $row["mtk"]; ?></td>
		<td><?= $row["ipa"]; ?></td>
		<td><?= $row["ips"]; ?></td>
		<td><?= $row["indo"]; ?></td>
		<td><?= $row["ing"]; ?></td>
		<td><a class="btn btn-warning" href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a></td>
		<td><a class="btn btn-danger" href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('Yakin?');">Hapus</a></td> 
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table><br><br>
</body>
</html>