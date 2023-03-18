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
    $id_detail_sarana = $_POST["id_detail_sarana"];
    $id_sarana = $_POST["id_sarana"];
    $id_detail_prasarana = $_POST["id_detail_prasarana"];
    $jumlah = $_POST["jumlah"];
    $baik = $_POST["baik"];
    $rusak = $_POST["rusak"];
    $perbaikan = $_POST["perbaikan"];
    $tanggal = $_POST["tanggal"];

    //query menginputkan data
    $insert = "INSERT INTO tb_detail_sarana
            VALUES 
            (null , '$id_sarana' , '$id_detail_prasarana' , '$jumlah', '$jumlah', '0', '0', CURRENT_TIMESTAMP())";
    mysqli_query($conn, $insert);
}

//cek data berhasil diinputkan

if (mysqli_affected_rows($conn) > 0) {
    echo "
        <script>
            alert ('Data Berhasil Ditambahkan');
            document.location.href = 'admin.php';
        </script>
    ";
}
?>

<div class="container mt-5">
    <div class="header">
        <h1>Tambah Data Sarana</h1>
        <hr>
    </div>
    <form action="" method="POST" class="table">
        <table class="table">
            <tr>
                <td>
                    <label for="id_sarana">Jenis Sarana </label>
                </td>
                <td>:</td>
                <td>
                    <select class="form-control-plaintext" name="id_sarana">
                        <option value="">--Pilih Jenis Sarana--</option>
                        <option value="211">Stetoskop</option>
                        <option value="212"> Ranjang Periksa </option>
                        <option value="215"> Meja </option>
                        <option value="216"> Kursi </option>
                        <option value="217"> Tensimeter </option>
                        <option value="218"> Termometer Medis </option>
                        <option value="219"> Nebulizer </option>
                        <option value="220"> Timbangan Badan </option>
                        <option value="221"> Fetal Doppler </option>
                        <option value="222"> Hearing Aid </option>
                        <option value="223"> Kursi Roda </option>
                        <option value="224"> Tongkat Kruk </option>
                        <option value="225"> Lampu Inframerah </option>
                        <option value="226"> Mesin CPAP </option>
                        <option value="227"> Autoclave </option>
                        <option value="228"> Oksigen Medis </option>
                        <option value="229"> Meja Operasi </option>
                        <option value="230"> Kursi Ginekologi </option>
                        <option value="231"> Overbed Table </option>
                        <option value="232"> Tiang Infus </option>
                        <option value="233"> Bed Screen </option>
                        <option value="234"> Ranjang Periksa </option>
                        <option value="235"> Patien Monitor </option>
                        <option value="236"> Clinical Centrifuge </option>
                        <option value="237"> Ventilator </option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="id_detail_prasarana">Lokasi Sarana</label>
                </td>
                <td>:</td>
                <td>
                    <select class="form-control-plaintext" name="id_detail_prasarana">
                        <option value="">--Pilih Lokasi Sarana-</option>
                        <option value="411">Unit Gawat Darurat</option>
                        <option value="412">POLIKLINIK OBGYN </option>
                        <option value="413">POLIKLINIK ANAK </option>
                        <option value="414">POLIKLINIK PENYAKIT DALAM</option>
                        <option value="415">POLIKLINIK BEDAH UMUM </option>
                        <option value="416">POLIKLINIK BEDAH ONKOLOGI </option>
                        <option value="417">POLIKLINIK MATA</option>
                        <option value="418">POLIKLINIK SARAF</option>
                        <option value="419">POLIKLINIK JANTUNG</option>
                        <option value="420">POLIKLINIK BEDAH DIGISTIF</option>
                        <option value="421">POLI PARU</option>
                        <option value="422">POLIKLINIK ORTHOPAEDI</option>
                        <option value="423">POLIKLINIK BEDAH PLASTIK</option>
                        <option value="424">POLIKLINIK UROLOGI</option>
                        <option value="425">POLIKLINIK JIWA</option>
                        <option value="426">POLIKLINIK KULIT DAN KELAMIN</option>
                        <option value="427">POLIKLINIK THT</option>
                        <option value="428">POLIKLINIK GIZI</option>
                        <option value="430"> POLIKLINIK GIGI & MULUT</option>
                        <option value="431">POLIKLINIK BEDAH MULUT</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="jumlah">Jumlah </label>
                </td>
                <td>:</td>
                <td>
                    <input class="form-control-plaintext" type="text" name="jumlah" id="jumlah" required onkeypress="return ValidateAngka(event);">
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