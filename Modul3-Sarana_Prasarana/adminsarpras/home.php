<?php
session_start();
include '../layout/header.php';
if ($_SESSION['level'] == " ") {
    header("location:index.php?pesan=gagal");
}

?>
<?php
?>
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