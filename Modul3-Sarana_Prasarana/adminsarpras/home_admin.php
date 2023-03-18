<?php
session_start();
include '../layout/header.php';
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] != "admin") {
    header("location:../formlogin.php?pesan=gagal");
}
if ($_SESSION['level'] != "admin") {
    echo "<script>
    alert('kamu bukan pegawai');
    document.location.href='../formlogin.php';
    </script>";
}

?>

<script>
    alert('Halo <?php echo $_SESSION['username']; ?>');
</script>

<div class="container mt-5">
    <img id="thumbnail" src="../1.png" class="figure-img">

    <div class="table-responsive text-nowrap">
        <table class="table">
            <tr>
                <th align="right">
                    <a href="update.php"><img src="../editt.png" class="rounded float-right" width="180px" height="80"></a>
                    <a href="admin.php"><img src="../adminn.png" class="rounded float-left" width="180px" height="80"></a>
                </th>
                <th>

                </th>
            </tr>
        </table>
    </div>

</div>
<?php
include '../layout/footer.php';
?>