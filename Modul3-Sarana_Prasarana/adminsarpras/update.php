<?php
session_start();
include '../layout/header.php';


if ($_SESSION['level'] != "admin") {
    echo "<script>
    alert('kamu bukan admin');
    document.location.href='../formlogin.php?pesan=gagal';
    </script>";
    header("location:../formlogin.php?pesan=gagal");
}
if ($_SESSION['level'] != "admin") {
}

$hasil = mysqli_query($conn, "SELECT id_detail_sarana,tb_sarana.nama_sarana, tb_detail_prasarana.nama_prasarana, tb_detail_sarana.jumlah, tb_detail_sarana.baik, tb_detail_sarana.rusak, tb_detail_sarana.perbaikan , tb_detail_sarana.tanggal FROM tb_detail_sarana
    JOIN tb_sarana ON tb_detail_sarana.id_sarana=tb_sarana.id_sarana
    JOIN tb_detail_prasarana ON tb_detail_sarana.id_detail_prasarana=tb_detail_prasarana.id_detail_prasarana
    JOIN tb_prasarana ON tb_detail_prasarana.id_prasarana=tb_prasarana.id_prasarana");


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
            <br>
            <div class="table-responsive text-nowrap">
                <table class="table" id="tabel">
                    <thead>
                        <tr class="table-info">
                            <th>ID</th>
                            <th>Nama Sarana</th>
                            <th>Lokasi Prasarana</th>
                            <th>Jumlah</th>
                            <th>Kondisi Baik</th>
                            <th>Kondisi Rusak</th>
                            <th>Dalam Perbaikan</th>
                            <th>Tanggal</th>
                            <th>Edit</th>
                        </tr>
                    </thead>

                    <!--sekarang perlu mengisi data tabel sesuai dengan tabel mahasiswa-->
                    <!--perlu untuk perulangan (while) untuk mengisi data pada tabel-->
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($hasil)) :
                        ?>
                            <tr>
                                <td><?= $row["id_detail_sarana"] ?></td>
                                <td><?= $row["nama_sarana"] ?></td>
                                <td><?= $row["nama_prasarana"] ?></td>
                                <td><?= $row["jumlah"] ?></td>
                                <td><?= $row["baik"] ?></td>
                                <td><?= $row["rusak"] ?></td>
                                <td><?= $row["perbaikan"] ?></td>
                                <td><?= date('d/m/Y H:i:s', strtotime($row["tanggal"])); ?></td>
                                <td><a class="btn btn-primary" href="edit.php?id_detail_sarana=<?php echo $row["id_detail_sarana"]; ?>">Edit</a></td>
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