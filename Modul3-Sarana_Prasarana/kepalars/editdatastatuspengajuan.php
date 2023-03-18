<?php
$conn = mysqli_connect("localhost", "root", "", "db_sarprass");
$id_pengajuan_barang = $_POST["id_pengajuan_barang"];
$nama_sarana = $_POST["nama_sarana"];
$status = $_POST["status"];
$keperluan = $_POST["keperluan"];
$tanggal = $_POST["tanggal"];


$update = mysqli_query($conn, "UPDATE tb_pengajuan_barang SET id_pengajuan_barang='$id_pengajuan_barang',  keperluan='$keperluan', status='$status', tanggal=CURRENT_TIMESTAMP() WHERE id_pengajuan_barang='$id_pengajuan_barang'");

if ($update) {
    echo "<script>alert ('Data Berhasil Diupdate')</script>";
    header("refresh:0;pengajuanbarangkeprs.php");
} else {
    echo "<script>alert ('Data Tidak Berhasil Diupdate')</script>";
    header("refresh:0;pengajuanbarangkeprs.php");
}
