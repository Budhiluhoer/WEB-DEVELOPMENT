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
	<title>Pendidikan & Keilmuan | LPJ</title>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
   <?php include 'header.php'; ?>
   
<ol class="breadcrumb">
  <li><a href="../index.php">Departemen</a></li>
  <li class="active">Pendidikan dan Kelimuan</li>
</ol>    

<div id="lpj" class="col-md-12">
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["3"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["3"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["3"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["3"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["3"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
  	<div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["5"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["5"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["5"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["5"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["5"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
    <div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["4"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["4"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["4"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["4"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["4"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>

<div id="lpj" class="col-md-12">
  	<div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["6"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["6"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["6"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["6"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["6"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
    <div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["8"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["8"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["8"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["8"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["8"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
	  <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["7"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["7"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["7"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["7"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["7"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["9"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["9"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["9"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["9"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["9"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
</body>
</html>