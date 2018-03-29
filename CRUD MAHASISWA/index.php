<?php 
require 'controller/functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");

// jika tombol cari ditekan
if (isset($_POST["cari"])) {
	$mahasiswa = cari($_POST["keyword"]);
	//table mahasiswa akan ditimpa
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
</head>
<body>
<h1 align="center">Daftar Mahasiswa</h1>

<a href="tambah.php">Tambah data mahasiswa</a>
<br><br>

<form action="" method="post">
	<input type="text" name="keyword" autofocus placeholder="Telusuri">
	<button type="submit" name="cari">CARI</button>
</form>

<br><br>

<table border="1" cellpadding="10" cellspacing="0">
	<tr>
		<th>No.</th>
		<th>Aksi</th>
		<th>Gambar</th>
		<th>NPM</th>
		<th>Nama</th>
		<th>Email</th>
		<th>Jurusan</th>
	</tr>

	<?php $i=1; ?>
	<?php foreach ($mahasiswa as $row) : ?> 
	<tr>
		<td><?php echo $i; ?></td>
		<td>
			<a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> | 
			<a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
		</td> <!-- CRUD : UPDATE DAN DELETE -->
		<td><img alt="gambar" src="<?= $row["gambar"]; ?>" width="100"></td>
		<td><?php echo $row["npm"]; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["jurusan"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table>

</body>
</html>