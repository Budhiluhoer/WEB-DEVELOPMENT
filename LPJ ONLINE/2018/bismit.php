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
	<title>BISMIT | LPJ</title>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <?php include 'header.php'; ?>

<ol class="breadcrumb">
  <li><a href="../index.php">Departemen</a></li>
  <li class="active">Bisnis dan Kemitraan</li>
</ol>    

<div id="lpj" class="col-md-12">
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["43"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["43"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["43"]["keplak"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["43"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
  	<div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["44"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["44"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["44"]["keplak"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["44"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
    <div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["45"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["45"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["45"]["keplak"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["45"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>

<?php include '../footer.php'; ?>
</body>
</html>