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
	<title>Olahraga | LPJ</title>
	<link rel="shortcut icon" href="../img/icon.ico">
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
</head>
<body>
   <?php include 'header.php'; ?>

<ol class="breadcrumb">
  <li><a href="../index.php">Departemen</a></li>
  <li class="active">Olahraga</li>
</ol>    

<div id="lpj" class="col-md-12">
    <div class="col-md-4">
        <div class="thumbnail">
            <div class="caption text-center">
              <h3>UKOR (Unit Kegiatan Olahraga)</h3>
              <h4>Tanggal : <?php echo $acara["1"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?php echo $acara["1"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?php echo $acara["1"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?php echo $acara["1"]["deskripsi"]; ?></p>
           </div>
        </div>
    </div>
  	<div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3 class="text-center">FASILKOM CUP</h3>
              <h4>Tanggal : <?php echo $acara["0"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?php echo $acara["0"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?php echo $acara["0"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="<?php in_array("fasilkomcup", $acara); ?>">Download</a></h4>
              <p><?php echo $acara["0"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
    <div class="col-md-4">
    		<div class="thumbnail">
      			<div class="caption text-center">
        			<h3>SPORT MEDIA</h3>
              <h4>Tanggal : <?php echo $acara["2"]["tanggal"]; ?></h4>
              <h4>Ketua Pelaksana : <?php echo $acara["2"]["keplak"]; ?></h4>
              <h4>Realisasi Dana : <?php echo $acara["2"]["dana"]; ?></h4>
              <h4 class="text-center"><a href="">Download</a></h4>
              <p><?php echo $acara["2"]["deskripsi"]; ?></p>
     			 </div>
    		</div>
  	</div>
</div>

<?php include '../footer.php'; ?>
</body>
</html>