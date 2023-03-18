<?php
session_start();
include '../layout/header.php';
if ($_SESSION['level'] != "kepalars") {
    header("location:../formlogin.php?pesan=gagal");
}
if ($_SESSION['level'] != "kepalars") {
    echo "<script>
    alert('kamu bukan kepala rs');
    document.location.href='../formlogin.php';
    </script>";
}
?>
<?php
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