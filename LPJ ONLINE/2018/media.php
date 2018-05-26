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
	<title>MEDIA | LPJ</title>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <?php include 'header.php'; ?>

<ol class="breadcrumb">
  <li><a href="../index.php">Departemen</a></li>
  <li class="../active">Media</li>
</ol>    

<div id="lpj" class="col-md-12">
    <div class="col-md-3">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["46"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["46"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["46"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["46"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["46"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
  	<div class="col-md-3">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["47"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["47"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["47"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["47"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["47"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>

    <div class="col-md-3">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["48"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["48"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["48"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["48"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["48"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
  	<div class="col-md-3">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["49"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["49"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["49"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["49"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["49"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>  



<?php include '../footer.php'; ?>
</body>
</html>