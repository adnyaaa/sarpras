<?php
session_start();
include '../layout/header.php';
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == " ") {
    header("location:formlogin.php?pesan=gagal");
}


$hasil = mysqli_query($conn, "SELECT tb_inventory.`id_sarana`, tb_sarana.nama_sarana, tb_inventory.total FROM tb_inventory JOIN tb_sarana ON tb_inventory.`id_sarana`=tb_sarana.`id_sarana`
    GROUP BY tb_inventory.id_sarana;");

//cek ambil data di tabel mahasiswa
if (!$hasil) {
    echo mysqli_error();
}

?>
<div class="container mt-5">
    <div class="container-sm">
        <h1>SARANA</h1>
        <hr>
        <br>
        <div class="col">
            <div>
                <a href="exportinvent.php" class="btn btn-primary">DOWNLOAD</a>
            </div>

            <br>
            <div class="table-responsive text-nowrap">
                <table class="table" id="tabel">
                    <thead>
                        <tr class="table-info">
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

        <?php
        include '../layout/footer.php';
        ?>