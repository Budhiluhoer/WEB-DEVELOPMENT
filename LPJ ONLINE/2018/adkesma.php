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
	<title>ADKESMA | LPJ</title>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
    <?php include 'header.php'; ?>

<ol class="breadcrumb">
  <li><a href="../index.php">Departemen</a></li>
  <li class="active">Adkesma</li>
</ol>    

<div id="lpj" class="col-md-12">
    <div class="col-md-6">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["28"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["28"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["28"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["28"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["28"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
  	<div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["29"]["nama_acara"]; ?></h3>
        			<h4>Tanggal : <?= $acara["29"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["29"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["29"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["29"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>

<div class="col-md-12">
        <div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["30"]["nama_acara"]; ?></h3>
        			<h4>Tanggal : <?= $acara["30"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["30"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["30"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["30"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
  	<div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["31"]["nama_acara"]; ?></h3>
        			<h4>Tanggal : <?= $acara["31"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["31"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["31"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["31"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>  

<div class="col-md-12">
    <div class="col-md-6">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["32"]["nama_acara"]; ?></h3>
        			<h4>Tanggal : <?= $acara["32"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["32"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["32"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["32"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
	  <div class="col-md-6">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["33"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["33"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["33"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["33"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["33"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
</div>

<div class="col-md-12">
    <div class="col-md-6">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["34"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["34"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["34"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["34"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["34"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["35"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["35"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["35"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["35"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?= $acara["35"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>

</body>
</html>