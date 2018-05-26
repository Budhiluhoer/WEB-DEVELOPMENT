<?php 
session_start();

if (!isset($_SESSION["login"])) {
	header("Location : login.php");
	exit;
}

require 'controller/functions.php';
$proker = query("SELECT * FROM acara");

if (isset($_POST["cari"])) {
	$proker = cari($_POST["keyword"]);
	
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<style>
		#brand a {
			color:white;
			text-decoration: none;
		}
		.btn {
			border-radius: 0;
		}
		body {
			background-color: #fff;
		}
	</style>
</head>
<body>
<div class="container">	
		
		<nav class="navbar navbar-inverse navbar-fixed-top">
		  <div class="container">
				<div class="col-md-12">

					<div class="col-md-3">
						<h3 id="brand"><a href="../index.php">LPJ Online</a></h3>
					</div>
					<div class="col-md-9">
						<form action="" method="post" class="navbar-form navbar-right form-group">
							<input type="text" name="keyword" autofocus placeholder="Telusuri" class="form-control">
							<button type="submit" class="btn btn-primary" name="cari">Cari</button>
							<a class="btn btn-danger navbar-btn" href="logout.php">Logout</a>
						</form>
					</div>

				</div>
		  </div>
		</nav>


		<table class="table table-striped" width="70%"><br><br><br><br>
			<h1 class="text-center">Program Kerja</h1>
			<a class="btn btn-success" href="tambah.php">Tambah data</a><br><br>
			<tr>
				<th>No.</th>
				<th>Ubah</th>
				<th>Hapus</th>
				<th>Tanggal</th>
				<th>Nama Acara</th>
				<th>Ketua Pelaksana</th>
				<th>Dana</th>
				<th>Divisi</th>
				<th>Deskripsi</th>
				<th>File</th>
			</tr>

			<?php $i=0; ?>
			<?php foreach ($proker as $row) : ?> 
			<tr>
				<td><?php echo $i; ?></td>
				<td>
					<a href="ubah.php?id=<?= $row["id"]; ?>" class="btn btn-warning">Ubah</a>
				</td>
				<td>
					<a href="hapus.php?id=<?= $row["id"]; ?>" class="btn btn-danger" onclick="return confirm('Yakin?');">Hapus</a>
				</td>
				<td><?php echo $row["tanggal"]; ?></td>
				<td><?php echo $row["nama_acara"]; ?></td>
				<td><?php echo $row["keplak"]; ?></td>
				<td><?php echo $row["dana"]; ?></td>
				<td><?php echo $row["divisi"]; ?></td>
				<td><?php echo $row["deskripsi"]; ?></td>
				<td><?php echo $row["upload"]; ?></td>
			</tr>
			<?php $i++; ?>
			<?php endforeach; ?>
		</table>
</div>
</body>
</html>