<?php
session_start();
include '../layout/header.php';
if ($_SESSION['level'] != "kabid") {
    header("location:../formlogin.php?pesan=gagal");
}
if ($_SESSION['level'] != "kabid") {
    echo "<script>
    alert('kamu bukan kepala bidang');
    document.location.href='../formlogin.php';
    </script>";
}

$hasil = mysqli_query($conn, "SELECT tb_detail_sarana.id_sarana, tb_sarana.`nama_sarana`, tb_perbaikan.id_perbaikan, tb_perbaikan.jumlah_rusak, tb_perbaikan.sedang_diperbaiki, tb_perbaikan.telah_diperbaiki, tb_perbaikan.status_setuju
    FROM tb_detail_sarana
    JOIN tb_perbaikan 
    ON tb_detail_sarana.`id_sarana`= tb_perbaikan.`id_sarana`
    JOIN tb_sarana
    ON tb_detail_sarana.`id_sarana`= tb_sarana.`id_sarana` GROUP BY id_perbaikan;");

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
                            <th>ID Perbaikan</th>
                            <th>ID Sarana</th>
                            <th>Nama Sarana</th>
                            <th>Jumlah Rusak</th>
                            <th>Sedang Diperbaiki</th>
                            <th>Telah Diperbaiki</th>
                            <th>Status Setuju</th>
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
                                <td><?= $row["id_perbaikan"] ?></td>
                                <td><?= $row["id_sarana"] ?></td>
                                <td><?= $row["nama_sarana"] ?></td>
                                <td><?= $row["jumlah_rusak"] ?></td>
                                <td><?= $row["sedang_diperbaiki"] ?></td>
                                <td><?= $row["telah_diperbaiki"] ?></td>
                                <td class="coba"><?= $row["status_setuju"] ?></td>
                                <td><a class="btn btn-primary" href="edit_status.php?id_perbaikan=<?php echo $row["id_perbaikan"]; ?>">Edit</a></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>

                </table>
                </form>

            </div>
        </div>
    </div>
    <div>
        <a class="btn btn-primary mt-3" onclick="self.history.back()"><i class="fas fa-arrow-left"></i> Kembali</a>
    </div>
</div>

<?php
include '../layout/footer.php';
?>