<?php
session_start();
include '../layout/header.php';
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == " ") {
    header("location:../formlogin.php?pesan=gagal");
}


$hasil = mysqli_query($conn, "SELECT tb_inventory.`id_sarana`, tb_sarana.nama_sarana, tb_inventory.total FROM tb_inventory JOIN tb_sarana ON tb_inventory.`id_sarana`=tb_sarana.`id_sarana`
    GROUP BY tb_inventory.id_sarana;");

//cek ambil data di tabel mahasiswa
if (!$hasil) {
    echo mysqli_error();
}

?>

<head>
    <title>Stock Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
<div class="container mt-5">
    <div class="container-sm">
        <h1>SARANA</h1>
        <hr>
        <br>
        <div class="col">

            <br>
            <div class="table-responsive text-nowrap">
                <table class="table" id="mauexport">
                    <thead>
                        <tr class="table-dark">
                            <th>ID</th>
                            <th>Nama Sarana</th>
                            <th>Total Stok Sarana</th>
                        </tr>
                    </thead>

                    <!--sekarang perlu mengisi data tabel sesuai dengan tabel mahasiswa-->
                    <!--perlu untuk perulangan (while) untuk mengisi data pada tabel-->
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($hasil)) :
                        ?>
                            <tr>
                                <td><?= $row["id_sarana"] ?></td>
                                <td><?= $row["nama_sarana"] ?></td>
                                <td><?= $row["total"] ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>


                </table>

            </div>
            <div>
                <a class="btn btn-primary mt-3" onclick="self.history.back()"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>
        <?php include '../js/export.php';
        ?>