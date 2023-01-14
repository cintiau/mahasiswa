<?php
include 'koneksi.php'; //memanggil koneksi
/* $_POST karena forum methodnya post */
$nim = $_POST['nim']; //menggambil data nim yang disi di tambah mahasiswa
$nama = $_POST['nama']; //menggambil data nama yang disi di tambah mahasiswa
$prodi = $_POST['prodi'];//menggambil data prodi yang disi di tambah mahasiswa

is_integer($nim);
/* query insert into, data yang sebelumnya diisi akan dimasukan ke dalam database*/
$sql = "insert into datamahasiswa (nim, nama, prodi) values ('$nim','$nama','$prodi')";
$query = mysqli_query($koneksi, $sql);

if ($query) { 
	echo "<script>alert('data berhasil disimpan');
	document.location.href='table_mahasiswa.php'</script>";
} else {
	echo "<script>alert('data gagal disimpan');
	document.location.href='tambah_mahasiswa.php'</script>";
}

?>