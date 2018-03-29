<?php 

$db = mysqli_connect("localhost", "root", "", "phpdasar"); //koneksi ke database

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
	$nama = htmlspecialchars($data["nama"]);
	$npm = htmlspecialchars($data["npm"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "INSERT INTO mahasiswa 
				VALUES 
			  ('', '$nama', '$npm', '$email', '$jurusan', '$gambar')";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
}

// DELETE
function hapus($id){
	global $db;
	mysqli_query($db, "DELETE FROM mahasiswa WHERE id = $id");
	return mysqli_affected_rows($db);
}

function ubah($data){
	global $db;
	$id = $data["id"];
	$nama = htmlspecialchars($data["nama"]);
	$npm = htmlspecialchars($data["npm"]);
	$email = htmlspecialchars($data["email"]);
	$jurusan = htmlspecialchars($data["jurusan"]);
	$gambar = htmlspecialchars($data["gambar"]);

	$query = "UPDATE mahasiswa SET
				nama = '$nama',
				npm = '$npm',
				email = '$email',
				jurusan = '$jurusan',
				gambar = '$gambar'

				WHERE id = $id
			";

	mysqli_query($db, $query);

	return mysqli_affected_rows($db);
}

function cari($keyword){
	$query = "SELECT * FROM mahasiswa
				WHERE
			  nama LIKE '%$keyword%' OR
			  npm LIKE '%$keyword%' OR
			  email LIKE '%$keyword%'
			  ";	
	return query($query);
}


?>