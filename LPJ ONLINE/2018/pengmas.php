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
	<title>PENGMAS | LPJ</title>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <?php include 'header.php'; ?>

<ol class="breadcrumb">
  <li><a href="../index.php">Departemen</a></li>
  <li class="active">Pengabdian Masyarakat</li>
</ol>    

<div id="lpj" class="col-md-12">
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["36"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["36"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["36"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["36"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["36"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
  	<div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["37"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["37"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["37"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["37"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["37"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["38"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["38"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["38"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["38"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["38"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
</div>

<div id="lpj" class="col-md-12">
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["39"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["39"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["39"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["39"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["39"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["40"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["40"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["40"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["40"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["40"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["41"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["41"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["41"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["41"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["41"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
</div>

<div id="lpj" class="col-md-12">
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["42"]["nama_acara"]; ?></h3>
              <h4>Hari : <?= $acara["42"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["42"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["42"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["42"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
</body>
</html>