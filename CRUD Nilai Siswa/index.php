<?php 
require 'controller/functions.php';
$nilai = query("SELECT * FROM nilai");


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
				<h3 id="brand"><a href="index.php">Nilai Ujian Nasional SMPN 1 KARAWANG</a></h3>
				<ul class="nav nav-tabs">
				  <li role="presentation"><a href="login.php">Login</a></li>	
				</ul>
		  </div>
</nav>

<table class="table table-hover" align="center" cellpadding="10" cellspacing="0" width="75%">
	<tr algin="center">
		<th algin="center">NIS</th>
		<th algin="center">Nama Siswa</th>
		<th algin="center">Kelas</th>
		<th algin="center">Jenis Kelamin</th>
		<th algin="center">Matematika</th>
		<th algin="center">IPA</th>
		<th algin="center">IPS</th>
		<th algin="center">Bahasa Indonesia</th>
		<th algin="center">Bahasa Inggris</th>
	</tr>

	<?php $i=1; ?>
	<?php foreach ($nilai as $row) : ?> 
	<tr>
		<td><?php echo $row["nis"]; ?></td>
		<td><?php echo $row["nama"]; ?></td>
		<td><?php echo $row["kelas"]; ?></td>
		<td><?php echo $row["jk"]; ?></td>
		<td><?php echo $row["mtk"]; ?></td>
		<td><?php echo $row["ipa"]; ?></td>
		<td><?php echo $row["ips"]; ?></td>
		<td><?php echo $row["indo"]; ?></td>
		<td><?php echo $row["ing"]; ?></td>
	</tr>
	<?php $i++; ?>
	<?php endforeach; ?>
</table><br><br>
</body>
</html>