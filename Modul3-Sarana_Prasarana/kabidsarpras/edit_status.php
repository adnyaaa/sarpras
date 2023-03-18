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
?>
<div class="container mt-5">
    <div class="header">
        <h3 align="center"> Form Ubah Data Sarana</h3>
        <hr>
    </div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_sarprass");

    $id_perbaikan = $_GET["id_perbaikan"];
    $row = mysqli_query($conn, "SELECT * FROM tb_perbaikan where id_perbaikan='$id_perbaikan'");
    while ($hasil = mysqli_fetch_array($row)) {
    ?>
        <form action="editstatus_rusak.php" method="post">
            <table class="table">
                <div class="mb-3">
                    <tr class="table-dark">
                        <td align="center" colspan=6>
                            UPDATE DATA
                        </td>
                    </tr>
                    <tr>
                        <td>ID Perbaikan</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="id_perbaikan" size=20 value="<?php echo $hasil['id_perbaikan'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>ID Sarana</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="id_sarana" size=30 value="<?php echo $hasil['id_sarana'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Jumlah Rusak</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="jumlah_rusak" size=20 value="<?php echo $hasil['jumlah_rusak'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>sedang diperbaiki</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="sedang_diperbaiki" size=20 value="<?php echo $hasil['sedang_diperbaiki'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>telah diperbaiki</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="telah_diperbaiki" size=20 value="<?php echo $hasil['telah_diperbaiki'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="id_perbaikan">STATUS PERSETUJUAN</label>
                        </td>
                        <td>:</td>
                        <td>
                            <select class="form-control-plaintext" name="status_setuju">
                                <option value="belum disetujui">--Belum Disetujui--</option>
                                <option value="disetujui">SETUJU</option>
                                <option value="ditolak">TOLAK</option>

                            </select>
                        </td>
                    </tr>
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