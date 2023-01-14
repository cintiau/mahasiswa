<?php //memanggil koneksi
include "koneksi.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Dashboard</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
        <div class="sidebar" data-image="../assets/img/official1.jpg">
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="table_mahasiswa.php" class="simple-text">
                        Mahasiswa
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="table_mahasiswa.php">
                            <i class="nc-icon nc-notes"></i>
                            <p>Table Mahasiswa</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="tambah_mahasiswa.php">
                            <i class="nc-icon nc-simple-add"></i>
                            <p>Tambah Data</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    <div class="main-panel">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card strpied-tabled-with-hover">
                            <div class="card-header ">
                                <h4 class="card-title">Semua Data Mahasiswa</h4>
                            </div>
                            <div class="card-body table-full-width table-responsive">
                                <form action="table_mahasiswa.php" method="get">
                                    <table class="table table-hover table-striped" width="100%" cellspacing="0">
                                        <thead> 
                                            <tr>
                                                <th scope="col">No</th>
                                                <th scope="col">Nim</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Prodi</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $connection = mysqli_query($koneksi, "SELECT * FROM datamahasiswa");
                                            $no = 1;
                                            while ($data = mysqli_fetch_array($connection)){
                                            ?>
                                            <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['nim']; ?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['prodi'];?></td>
                                            <td><a href="edit_mahasiswa.php?id=<?php echo $data['nim'];?>" >Edit </a> || <a href="apus_mahasiswa.php?id=<?php echo $data['nim'];?>" onClick = "return confirm('Apakah Anda ingin mengapus  <?php echo $data['nim']; ?>?')"> Hapus</a></a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
