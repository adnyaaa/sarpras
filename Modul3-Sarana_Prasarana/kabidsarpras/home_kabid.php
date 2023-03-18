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

<script>
    alert('Halo <?php echo $_SESSION['username']; ?>');
</script>

<div class="container mt-5">

    <img id="thumbnail" src="../1.png" class="figure-img">

</div>
<?php
include '../layout/footer.php';
?>