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
?>
<div class="container mt-5">
    <div class="header">
        <h3 align="center"> Form Ubah Data Sarana</h3>
        <hr>
    </div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "db_sarprass");

    $id_detail_sarana = $_GET["id_detail_sarana"];
    $row = mysqli_query($conn, "SELECT * FROM tb_detail_sarana where id_detail_sarana='$id_detail_sarana'");
    while ($hasil = mysqli_fetch_array($row)) {
    ?>
        <form action="editdata.php" method="post">
            <table class="table">
                <div class="mb-3">
                    <tr class="table-dark">
                        <td align="center" colspan=6>
                            UPDATE DATA
                        </td>
                    </tr>
                    <tr>
                        <td>id_detail_sarana</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="id_detail_sarana" size=20 value="<?php echo $hasil['id_detail_sarana'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>id_sarana</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="id_sarana" size=30 value="<?php echo $hasil['id_sarana'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>id_detail_prasarana</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" ype="text" name="id_detail_prasarana" size=20 value="<?php echo $hasil['id_detail_prasarana'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>jumlah</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="jumlah" value="<?php echo $hasil['jumlah'] ?>" readonly>
                        </td>
                    </tr>
                    <tr>
                        <td>Kondisi Baik</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="baik" size=20 value="<?php echo $hasil['baik'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Kondisi Buruk</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="rusak" size=20 value="<?php echo $hasil['rusak'] ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Perbaikan</td>
                        <td>:</td>
                        <td>
                            <input class="form-control-plaintext" type="text" name="perbaikan" size=20 value="<?php echo $hasil['perbaikan'] ?>">
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