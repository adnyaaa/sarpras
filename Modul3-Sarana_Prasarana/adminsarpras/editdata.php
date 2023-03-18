<?php
$conn = mysqli_connect("localhost","root","","db_sarprass");
$id_detail_sarana = $_POST["id_detail_sarana"];
$id_sarana = $_POST["id_sarana"];
$id_detail_prasarana = $_POST["id_detail_prasarana"];
$jumlah = $_POST["jumlah"];
$baik = $_POST["baik"];
$rusak = $_POST["rusak"];
$perbaikan = $_POST["perbaikan"];
$tanggal = $_POST["tanggal"];


$update=mysqli_query($conn, "UPDATE tb_detail_sarana SET id_sarana='$id_sarana', id_detail_prasarana='$id_detail_prasarana', jumlah='$jumlah', baik='$baik', rusak='$rusak', perbaikan='$perbaikan',tanggal=CURRENT_TIMESTAMP() WHERE id_detail_sarana='$id_detail_sarana'");
 
if($update){
    echo"<script>alert ('Data Berhasil Diupdate')</script>";
    header("refresh:0;update.php");
}else{
    echo"<script>alert ('Data Tidak Berhasil Diupdate')</script>";
    header("refresh:0;update.php");
}
