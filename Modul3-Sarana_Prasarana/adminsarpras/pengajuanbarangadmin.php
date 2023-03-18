<?php
session_start();
include '../layout/header.php';


if ($_SESSION['level'] != "admin") {
    header("location:../formlogin.php?pesan=gagal");
}
if ($_SESSION['level'] != "admin") {
    echo "<script>
    alert('kamu bukan admin');
    document.location.href='../formlogin.php';
    </script>";
}

$hasil = mysqli_query($conn, "SELECT * from tb_pengajuan_barang");


//cek ambil data di tabel mahasiswa
if (!$hasil) {
    echo mysqli_error();
}


//cek data berhasil diinputkan

?>

<div class="container mt-5">
    <div class="container-sm">
        <h1>SARANA</h1>
        <hr>
        <br>
        <div class="col">
            <div>
                <a href="tambahpengajuanadmin.php" class="btn btn-primary">TAMBAH SARANA</a>
                <a href="export.php" class="btn btn-primary">DOWNLOAD</a>
            </div>

            <br>
            <div class="table-responsive text-nowrap">
                <table class="table" id="tabel">
                    <thead>
                        <tr class="table-info">
                            <th>ID</th>
                            <th>Nama Sarana</th>
                            <th>Keperluan</th>
                            <th>Status</th>
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
                                <td><?= $row["id_pengajuan_barang"] ?></td>
                                <td><?= $row["nama_sarana"] ?></td>
                                <td><?= $row["keperluan"] ?></td>
                                <td><?= $row["status"] ?></td>
                                <td><?= date('d/m/Y H:i:s', strtotime($row["tanggal"])); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>


                </table>

            </div>
            <div>
                <a class="btn btn-primary mt-3" onclick="self.history.back()"><i class="fas fa-arrow-left"></i> Kembali</a>
            </div>
        </div>

        <?php
        include '../layout/footer.php';
        ?>