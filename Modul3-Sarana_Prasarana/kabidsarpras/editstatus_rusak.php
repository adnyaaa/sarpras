<?php
$conn = mysqli_connect("localhost", "root", "", "db_sarprass");
$id_perbaikan = $_POST["id_perbaikan"];
$id_sarana = $_POST["id_sarana"];
$jumlah_rusak = $_POST["jumlah_rusak"];
$sedang_diperbaiki = $_POST["sedang_diperbaiki"];
$telah_diperbaiki = $_POST["telah_diperbaiki"];
$status_setuju = $_POST["status_setuju"];

$update = mysqli_query($conn, "UPDATE tb_perbaikan SET id_sarana='$id_sarana', jumlah_rusak='$jumlah_rusak', sedang_diperbaiki='$sedang_diperbaiki', telah_diperbaiki='$telah_diperbaiki', status_setuju='$status_setuju' WHERE id_perbaikan='$id_perbaikan'");

if ($update) {
    echo "<script>alert ('Data Berhasil Diupdate')</script>";
    header("refresh:0;atasan_perbaikan.php");
} else {
    echo "<script>alert ('Data Tidak Berhasil Diupdate')</script>";
    header("refresh:0;atasan_perbaikan.php");
}
