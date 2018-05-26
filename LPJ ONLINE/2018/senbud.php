<?php 
require '../admin/controller/functions.php';
$acara = query("SELECT * FROM acara");
?>


<!DOCTYPE html>
<html lang="id">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SENBUD | LPJ</title>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
   <?php include 'header.php'; ?>

<ol class="breadcrumb">
  <li><a href="../index.php">Departemen</a></li>
  <li class="active">Seni Budaya</li>
</ol>    

<div id="lpj" class="col-md-12">
    <div class="col-md-6">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["23"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["23"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["23"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["23"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["23"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
  	<div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["24"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["24"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["24"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["24"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["24"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>

<div class="col-md-12">
        <div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["25"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["25"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["25"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["25"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["25"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
  	<div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["26"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["26"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["26"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["26"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["26"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>  

<div class="col-md-12">
    <div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["27"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["27"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["27"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["27"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["27"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>

<?php include '../footer.php'; ?>
</body>
</html>