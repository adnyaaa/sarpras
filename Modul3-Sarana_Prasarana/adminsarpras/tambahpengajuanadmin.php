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
//cek apakah button simpan sudah ditekan atau belum
if (isset($_POST["submit"])) {
    //ambil data dari form
    $id_pengajuan_barang = $_POST["id_pengajuan_barang"];
    $nama_sarana = $_POST["nama_sarana"];
    $keperluan = $_POST["keperluan"];
    $status = $_POST["status"];
    $tanggal = $_POST["tanggal"];

    //query menginputkan data
    $insert = "INSERT INTO tb_pengajuan_barang
            VALUES 
            (null , '$nama_sarana' , '$keperluan' , 'belum disetujui', CURRENT_TIMESTAMP())";
    mysqli_query($conn, $insert);
}

//cek data berhasil diinputkan

if (mysqli_affected_rows($conn) > 0) {
    echo "
        <script>
            alert ('Data Berhasil Ditambahkan');
            document.location.href = 'pengajuanbarangadmin.php';
        </script>
    ";
}
?>

<div class="container mt-5">
    <div class="header">
        <h1>Tambah Pengajuan Data Sarana</h1>
        <hr>
    </div>
    <form action="" method="POST" class="table">
        <table class="table">
            <tr>
                <td>
                    <label for="nama">Nama Sarana </label>
                </td>
                <td>:</td>
                <td>
                    <input class="form-control-plaintext" type="text" name="nama_sarana" id="nama_sarana" required onkeypress="return ValidateNama(event);">
                </td>
            </tr>
            <tr>
            <tr>
                <td>
                    <label for="Keperluan">Keperluan</label>
                </td>
                <td>:</td>
                <td>
                    <input class="form-control-plaintext" type="text" name="keperluan" id="keperluan" required onkeypress="return ValidateNama(event);">
                </td>
            </tr>
            <tr>
                <td>
                    <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    <input type="button" name="kembali" class="btn btn-secondary" value="Kembali" onclick="self.history.back()">
                </td>
            </tr>



        </table>
</div>


</form>

</div>
<?php
include '../js/validasi.php';
include '../layout/footer.php';
?>