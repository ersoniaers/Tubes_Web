<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$db = 'tubes_web';

$koneksi = mysqli_connect($servername, $username, $password, $db);
 
// Check connection
if (mysqli_connect_error()){
	echo "Koneksi database gagal : " . mysqli_connect_error();
}
 ?>
