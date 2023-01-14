<?php 
$koneksi = mysqli_connect("localhost","root","","table_mahasiswa");

// check conection
if (mysqli_connect_error()) {
	echo "koneksi database gagal : ".
	mysqli_connect_error();
}
?>