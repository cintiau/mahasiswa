<?php
include "koneksi.php";

$nim = $_GET['nim'];
$nama   = $_GET['nama'];
$prodi  = $_GET['prodi'];


$query = mysqli_query($koneksi, "UPDATE datamahasiswa SET
          nim='$nim',
          nama='$nama',
          prodi='$prodi'
          where nim='$nim'");

if($query) {
echo "<script>alert('data berhasil disimpan');
document.location.href='table_mahasiswa.php'</script>";
} else {
echo "<script>alert('data gagal disimpan');
document.location.href='edit_mahasiswa.php'</script>";}

?>

