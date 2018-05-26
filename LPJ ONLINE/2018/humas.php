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
	<title>HUMAS | LPJ</title>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <?php include 'header.php'; ?>

<ol class="breadcrumb">
  <li><a href="../index.php">Departemen</a></li>
  <li class="active">Hubungan Masyarakat</li>
</ol>    

<div id="lpj" class="col-md-12">
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["50"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["50"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["50"]["keplak"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["50"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
  	<div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["51"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["51"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["51"]["keplak"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["51"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
    <div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["52"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["52"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["52"]["keplak"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["52"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>

<?php include '../footer.php'; ?>

</body>
</html>