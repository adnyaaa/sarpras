<?php
session_start();
include '../layout/header.php';
if ($_SESSION['level'] == " ") {
    header("location:../formlogin.php?pesan=gagal");
}

$hasil = mysqli_query($conn, "SELECT id_detail_sarana,tb_sarana.nama_sarana, tb_detail_prasarana.nama_prasarana, tb_detail_sarana.jumlah, tb_detail_sarana.baik, tb_detail_sarana.rusak, tb_detail_sarana.perbaikan , tb_detail_sarana.tanggal FROM tb_detail_sarana
     JOIN tb_sarana ON tb_detail_sarana.id_sarana=tb_sarana.id_sarana
     JOIN tb_detail_prasarana ON tb_detail_sarana.id_detail_prasarana=tb_detail_prasarana.id_detail_prasarana
     JOIN tb_prasarana ON tb_detail_prasarana.id_prasarana=tb_prasarana.id_prasarana");

//cek ambil data di tabel mahasiswa
if (!$hasil) {
    echo mysqli_error();
}
?>
<html>

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

<body>
    <div class="container mt-5">
        <div class="container-sm">
            <h2>SI SARPRAS</h2>
            <hr>
            <div class="table-responsive text-nowrap">

                <table class="table" id="mauexport">
                    <thead>
                        <tr class="table-dark">
                            <th>ID</th>
                            <th>Nama Sarana</th>
                            <th>Lokasi Prasarana</th>
                            <th>Jumlah</th>
                            <th>Kondisi Baik</th>
                            <th>Kondisi Rusak</th>
                            <th>Dalam Perbaikan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>

                    <!--sekarang perlu mengisi data tabel sesuai dengan tabel mahasiswa-->
                    <!--perlu untuk perulangan (while) untuk mengisi data pada tabel-->
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($hasil)) :
                        ?>
                            <tr>
                                <td><?php echo  $row["id_detail_sarana"] ?></td>
                                <td><?php echo $row["nama_sarana"] ?></td>
                                <td><?php echo $row["nama_prasarana"] ?></td>
                                <td><?php echo $row["jumlah"] ?></td>
                                <td><?php echo $row["baik"] ?></td>
                                <td><?php echo $row["rusak"] ?></td>
                                <td><?php echo $row["perbaikan"] ?></td>
                                <td><?php echo date('d/m/Y H:i:s', strtotime($row["tanggal"])); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>


                </table>

            </div>
        </div>
        <div>
            <a class="btn btn-primary mt-3" onclick="self.history.back()"><i class="fas fa-arrow-left"></i> Kembali</a>
        </div>
    </div>


    <?php include '../js/export.php';
    ?>