<?php 


$db = mysqli_connect("localhost", "root", "", "lpj_bem"); //koneksi ke database

// READ
function query($query) {
	global $db; //variabel scope (global)
	$result = mysqli_query($db, $query);
	$rows = [];
	while($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

//INSERT
function tambah($data){
	global $db;
	$tanggal = htmlspecialchars($data["tanggal"]);
	$nama_acara = htmlspecialchars($data["nama_acara"]);
	$keplak = htmlspecialchars($data["keplak"]);
	$dana = htmlspecialchars($data["dana"]);
	$divisi = htmlspecialchars($data["divisi"]);
	$upload = $_FILES['upload']['name'];
	$deskripsi = htmlspecialchars($data["deskripsi"]);

//upload
	$file = upload();
	if (!$file) {
		return false;
	}

	
	$query = "INSERT INTO acara 
				VALUES 
			  ('', '$tanggal', '$nama_acara', '$keplak', '$dana','$upload', '$divisi', '$deskripsi')";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
}

function upload(){
	$namaFile = $_FILES['upload']['name'];
	$ukuranFile = $_FILES['upload']['size'];
	$error = $_FILES['upload']['error'];
	$tmpName = $_FILES['upload']['tmp_name'];

	//cek jika tdk ada yg di upload
	if ($error === 4) {
		echo "<script>
				alert('masukan file dulu');
			 </script>";
		return false;
	}

	//cek jenis upload
	$ekstensiValid = ['docx','doc','pdf'];
	$ekstensiDok = explode('.', $namaFile);
	$ekstensiDok = strtolower(end($ekstensiDok));

	if (!in_array($ekstensiDok, $ekstensiValid)) {
		echo "<script>
				alert('File bukan dokumen');
			 </script>";
		return false;
	}

	//cek ukuran file
	if ($ukuranFile > 1000000) {
		echo "<script>
				alert('File terlalu besar');
			 </script>";
	}

	//lolos pengecekan
	move_uploaded_file($tmpName, 'files/' . $namaFile);

	return $namaFile;
}

// DELETE
function hapus($id){
	global $db;
	mysqli_query($db, "DELETE FROM acara WHERE id = $id");
	return mysqli_affected_rows($db);
}


// UPDATE
function ubah($data){
	global $db;
	$id = $data["id"];
	$tanggal = htmlspecialchars($data["tanggal"]);
	$nama_acara = htmlspecialchars($data["nama_acara"]);
	$keplak = htmlspecialchars($data["keplak"]);
	$dana = htmlspecialchars($data["dana"]);
	$upload = $_FILES['upload']['name'];
	$divisi = htmlspecialchars($data["divisi"]);
	$deskripsi = htmlspecialchars($data["deskripsi"]);

	$query = "UPDATE acara SET
				tanggal = '$tanggal',
				nama_acara = '$nama_acara',
				keplak = '$keplak',
				dana = '$dana',
				upload = '$upload',
				divisi = '$divisi',
				deskripsi = '$deskripsi'

				WHERE id = $id
			";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
}

function cari($keyword){ //search
	$query = "SELECT * FROM acara
				WHERE
			  nama_acara LIKE '%$keyword%' OR
			  divisi LIKE '%$keyword%' OR
			  keplak LIKE '%$keyword%'
			  ";	
	return query($query);
}


function register($data){
	global $db;
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($db, $data["password"]);
	$password2 = mysqli_real_escape_string($db, $data["password2"]);

	//cek kemiripan username
	$result = mysqli_query($db, "SELECT username  FROM akun WHERE username = '$username'");
	if (mysqli_fetch_assoc($result)) {
		echo "<script>
				alert('username sudah terdaftar');
			</script>";
		return false;
	}

	//cek konfirmasi password
	if ($password !== $password2) {
		echo "<script>
				alert('password tidak sesuai');
			</script>";
		return false;
	}

	//enkripsi
	// $password = md5($password); // jangan pake md5
	$password = password_hash($password, PASSWORD_DEFAULT);
	mysqli_query($db, "INSERT INTO akun VALUES('','$username','$password')");

	return mysqli_affected_rows($db);
}

?>