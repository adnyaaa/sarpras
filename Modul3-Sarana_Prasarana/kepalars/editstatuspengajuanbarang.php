<?php
session_start();
include '../layout/header.php';


if ($_SESSION['level'] != "kepalars") {
    header("location:../formlogins.php?pesan=gagal");
}
if ($_SESSION['level'] != "kepalars") {
    echo "<script>
    alert('kamu bukan kepalars');
    document.location.href='../formlogin.php';
    </script>";
}
?>
<div class="container mt-5">
    <div class="header">
        <h3 align="center"> Form Pengajuan Data Sarana</h3>
        <hr>
    </div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_sarprass");

    $id_pengajuan_barang = $_GET["id_pengajuan_barang"];
    $row = mysqli_query($conn, "SELECT * FROM tb_pengajuan_barang where id_pengajuan_barang='$id_pengajuan_barang'");
    while ($hasil = mysqli_fetch_array($row)) {
    ?>
        <form action="editdatastatuspengajuan.php" method="post">
            <table class="table">
                <div class="mb-3">
                    <tr class="table-dark">
                        <td align="center" colspan=6>
                            UPDATE DATA
                        </td>
                    </tr>
                    <tr>
                        <td>id_pengajuan_barang</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="id_pengajuan_barang" size=20 value="<?php echo $hasil['id_pengajuan_barang'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>nama_sarana</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="nama_sarana" size=30 value="<?php echo $hasil['nama_sarana'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>keperluan</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="keperluan" size=20 value="<?php echo $hasil['keperluan'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="id_perbaikan"></label>
                        </td>
                        <td>:</td>
                        <td>
                            <select class="form-control-plaintext" name="status">
                                <option value="belum disetujui">--Belum Disetujui--</option>
                                <option value="disetujui">SETUJU</option>
                                <option value="ditolak">TOLAK</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>tanggal</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="tanggal" size=20 value="<?php echo $hasil['tanggal'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <input class="btn btn-primary" type="submit" name="ubah" value="Ubah">
                            <input class="btn btn-danger" type="reset" name="batal" value="Batal">
                            <input class="btn btn-secondary" type="button" name="kembali" value="Kembali" onclick="self.history.back()">
                            <br>
                        </td>
                    </tr>
            </table>
        </form>
    <?php
    }
    ?>
</div>
</body>

<?php
include '../layout/footer.php';
?>