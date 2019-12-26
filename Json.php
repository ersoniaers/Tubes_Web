<?php 
include 'koneksi.php';

$query = mysqli_query($koneksi, 'SELECT * FROM user'); 
if (mysqli_num_rows($query) > 0) {
	# buat array
	$user = array();
	$user["data"] = array();
	while ($row = mysqli_fetch_assoc($query)) {
		# kerangka format penampilan data json
		$data['id_user'] = $row["id_user"];
		$data['nama_user'] = $row["nama_user"];
		$data['alamat_email'] = $row["alamat_email"];
		$data['alamat'] = $row["alamat"];
		$data['password'] = $row["password"];
		array_push($user["data"], $data);
 
	}
	echo json_encode($user);
} else {
	# menmapilkan pesan jika tidak ada data dalam tabel
	$user["message"]="tidak ada data";
	echo json_encode($user);
}
 ?>