<?php
include "koneksi.php";
$nim = $_GET['id'];

$query = mysqli_query($koneksi,"delete from datamahasiswa where nim='$nim'");
if ($query) {
	echo "<script>alert('data berhasil dihapus');
	document.location.href='table_mahasiswa.php'</script>";
} else {
	"<script>alert('gagal');
	document.location.href='table_mahasiswa.php'</script>";
}
?>