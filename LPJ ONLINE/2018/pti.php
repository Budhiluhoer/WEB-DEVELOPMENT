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
	<title>PTI | LPJ</title>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
   <?php include 'header.php'; ?>

<ol class="breadcrumb">
  <li><a href="../index.php">Departemen</a></li>
  <li class="active">Pengembangan Teknologi Informasi</li>
</ol>    

<div id="lpj" class="col-md-12">
    <div class="col-md-6">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["17"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["17"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["17"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["17"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4><hr>
              <p><?= $acara["17"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
  	<div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["18"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["18"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["18"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["18"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["18"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>

<div class="col-md-12">
        <div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["19"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["19"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["19"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["19"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["19"]["nama_acara"]; ?></p>
     			 </div>
    		</div>
  	</div>
  	<div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["20"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["20"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["20"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["20"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["20"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>  

<div class="col-md-12">
    <div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["21"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["21"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["21"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["21"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["21"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
	  <div class="col-md-6">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["22"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["22"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["22"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["22"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["22"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
</body>
</html>