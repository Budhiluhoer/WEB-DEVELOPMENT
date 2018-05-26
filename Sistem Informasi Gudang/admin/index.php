<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location : login.php");
	exit;
}


require '../controller/functions.php';
$barang = query("SELECT * FROM gudang");

// jika tombol cari ditekan
if (isset($_POST["cari"])) {
	$barang = cari($_POST["keyword"]);
	//table mahasiswa akan ditimpa
}

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
				<h3 id="brand"><a href="index.php">PT. Budhi Square</a></h3>
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
		<th algin="center">Kode<br>Item</th>
		<th algin="center">Nama<br>Item</th>
		<th algin="center">Kategori<br>barang</th>
		<th algin="center">Jumlah</th>
		<th algin="center">Persediaan<br>Minimum</th>
		<th algin="center">Satuan</th>
		<th algin="center">Lokasi</th>
		<th>Ubah</a></th>
		<th>Hapus</a></th>
	</tr>

	<?php $i=1; ?>
	<?php foreach ($barang as $row) : ?> 
	<tr>
		<td><?php echo $row["id"]; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["kategori"]; ?></td>
		<td><?php echo $row["jumlah"]; ?></td>
		<td><?php echo $row["stok_min"]; ?></td>
		<td><?php echo $row["satuan"]; ?></td>
		<td><?php echo $row["lokasi"]; ?></td>
		<td><a class="btn btn-primary" href="ubah.php?id= <?= $row["id"]; ?>">Ubah</a></td>
		<td><a class="btn btn-danger" href="hapus.php?id= <?= $row["id"]; ?>" onclick="return confirm('Yakin?');">Hapus</a></td> 
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table><br><br>
</body>
</html>