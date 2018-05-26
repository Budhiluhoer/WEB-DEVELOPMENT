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
				  <li role="presentation" class="active"><a href="view kategori.php">Kategori</a></li>
				  <li role="presentation"><a href="index.php">Item</a></li>
				  <li role="presentation"><a href="login.php">Login</a></li>	
				</ul>
		  </div>
</nav>

<h2>KATEGORI</h2>
<table class="table table-hover" align="center" cellpadding="10" cellspacing="0" width="75%">

	<tr algin="center">
		<th align="center">Kode Item</th>
		<th align="center">Nama Barang</th>
		<th align="center">Kategori barang</th>
	</tr>

	<?php $i = 1; ?>
	<?php foreach ($barang as $row) : ?>
	<tr>
		<td><?= $row["id"]; ?></td>
		<td><?= $row["nama"]; ?></td>
		<td><?= $row["kategori"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
	
</table>
</body>
</html>