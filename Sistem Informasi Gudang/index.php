<?php 
require 'controller/functions.php';
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
</head>
<body class="container">
<nav class="navbar navbar-default">
		  <div class="container">	
				<h3 id="brand"><a href="index.php">PT. Budhi Square</a></h3>
				<ul class="nav nav-tabs">
				  <li role="presentation"><a href="view kategori.php">Kategori</a></li>
				  <li role="presentation" class="active"><a href="index.php">Item</a></li>
				  <li role="presentation"><a href="login.php">Login</a></li>	
				</ul>
		  </div>
</nav>

<h2>ITEM</h2>
<table class="table table-hover" align="center" cellpadding="10" cellspacing="0" width="75%">
	<tr algin="center">
		<th algin="center">Kode<br>Item</th>
		<th algin="center">Nama<br>Item</th>
		<th algin="center">Kategori<br>barang</th>
		<th algin="center">Jumlah</th>
		<th algin="center">Persediaan<br>Minimum</th>
		<th algin="center">Satuan</th>
		<th algin="center">Lokasi</th>
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
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table><br><br>
</body>
</html>