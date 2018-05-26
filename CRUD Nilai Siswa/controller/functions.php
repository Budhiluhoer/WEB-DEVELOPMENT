<?php 

$db = mysqli_connect("localhost", "root", "", "siswa"); //koneksi ke database

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
	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jk = htmlspecialchars($data["jk"]);
	$mtk = htmlspecialchars($data["mtk"]);
	$ipa = htmlspecialchars($data["ipa"]);
	$ips = htmlspecialchars($data["ips"]);
	$indo = htmlspecialchars($data["indo"]);
	$ing = htmlspecialchars($data["ing"]);

	$query = "INSERT INTO nilai 
				VALUES 
			  ('','$nis','$nama','$kelas','$jk','$mtk','$ipa','$ips', '$indo', '$ing')";
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
}

// DELETE
function hapus($id){
	global $db;
	mysqli_query($db, "DELETE FROM nilai WHERE id = $id");
	return mysqli_affected_rows($db);
}

function ubah($data){
	global $db;
	$id = htmlspecialchars($data["id"]);
	$nis = htmlspecialchars($data["nis"]);
	$nama = htmlspecialchars($data["nama"]);
	$kelas = htmlspecialchars($data["kelas"]);
	$jk = htmlspecialchars($data["jk"]);
	$mtk = htmlspecialchars($data["mtk"]);
	$ipa = htmlspecialchars($data["ipa"]);
	$ips = htmlspecialchars($data["ips"]);
	$indo = htmlspecialchars($data["indo"]);
	$ing = htmlspecialchars($data["ing"]);

	$query = "UPDATE nilai SET
				id = '$id',
				nis = '$nis',
				nama = '$nama',
				kelas = '$kelas',
				jk = '$jk',
				mtk = '$mtk',
				ipa = '$ipa',
				ips = '$ips',
				indo = '$indo',
				ing = '$ing'

				WHERE id = $id ";
				
	mysqli_query($db, $query);
	return mysqli_affected_rows($db);
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