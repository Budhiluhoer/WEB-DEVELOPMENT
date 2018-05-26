<?php 

$db = mysqli_connect("localhost", "root", "", "barang"); //koneksi ke database

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
	$id = htmlspecialchars($data["id"]);
	$nama = htmlspecialchars($data["nama"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$stok_min = htmlspecialchars($data["stok_min"]);
	$satuan = htmlspecialchars($data["satuan"]);
	$lokasi = htmlspecialchars($data["lokasi"]);
	$kategori = htmlspecialchars($data["kategori"]);

	$query = "INSERT INTO gudang 
				VALUES 
			  ('$id','$nama','$jumlah','$stok_min','$satuan','$lokasi','$kategori')";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
}

// DELETE
function hapus($id){
	global $db;
	mysqli_query($db, "DELETE FROM gudang WHERE id = $id");
	return mysqli_affected_rows($db);
}

function ubah($data){
	global $db;
	$id = htmlspecialchars($data["id"]);
	$nama = htmlspecialchars($data["nama"]);
	$jumlah = htmlspecialchars($data["jumlah"]);
	$stok_min = htmlspecialchars($data["stok_min"]);
	$satuan = htmlspecialchars($data["satuan"]);
	$lokasi = htmlspecialchars($data["lokasi"]);
	$kategori = htmlspecialchars($data["kategori"]);

	$query = "UPDATE gudang SET
				id = '$id',
				nama = '$nama',
				jumlah = '$jumlah',
				stok_min = '$stok_min',
				satuan = '$satuan',
				lokasi = '$lokasi',
				kategori = '$kategori'

				WHERE id = $id ";

	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

function cari($keyword){
	$query = "SELECT * FROM gudang
				WHERE
			  nama LIKE '%$keyword%' OR
			  kategori LIKE '%$keyword%' OR
			  lokasi LIKE '%$keyword%'
			  ";	
	return query($query);
}


function register($data){
	global $db;
	$username = strtolower(stripslashes($data["username"]));
	$password = mysqli_real_escape_string($db, $data["password"]);
	$password2 = mysqli_real_escape_string($db, $data["password2"]);

	//cek kemiripan username
	$result = mysqli_query($db, "SELECT username  FROM users WHERE username = '$username'");
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
	mysqli_query($db, "INSERT INTO users VALUES('','$username','$password')");

	return mysqli_affected_rows($db);
}

?>