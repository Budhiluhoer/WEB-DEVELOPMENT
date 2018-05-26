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
	<title>SDM | LPJ</title>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>

</head>
<body>
<?php include 'header.php'; ?>

<ol class="breadcrumb">
  <li><a href="../index.php">Departemen</a></li>
  <li class="active">Pengembangan Sumber Daya Manusia</li>
</ol>    

<div id="lpj" class="col-md-12">
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["10"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["10"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["10"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["10"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4><hr>
              <p><?= $acara["10"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
  	<div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["11"]["nama_acara"]; ?></h3>
        	    <h4>Tanggal : <?= $acara["11"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["11"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["11"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4><hr>
              <p><?= $acara["11"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
    <div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["12"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["12"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["12"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["12"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4><hr>
              <p><?= $acara["12"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>

<div class="col-md-12">
  	<div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["13"]["nama_acara"]; ?></h3>
        			<h4>Tanggal : <?= $acara["13"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["13"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["13"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4><hr>
              <p><?= $acara["13"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
    <div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3><?= $acara["14"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["14"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["14"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["14"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4><hr>
              <p><?= $acara["14"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
	  <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["15"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["15"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["15"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["15"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4><hr>
              <p><?= $acara["15"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
</div>  

<div class="col-md-12">
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3><?= $acara["16"]["nama_acara"]; ?></h3>
              <h4>Tanggal : <?= $acara["16"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?= $acara["16"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?= $acara["16"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4><hr>
              <p><?= $acara["16"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
</div>

<?php include '../footer.php'; ?>
</body>
</html>