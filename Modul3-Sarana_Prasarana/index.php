<?php
include 'config/conn.php';
?>
<?php
include 'layout/header2.php';
?>

<div class="container mt-5">
    <img id="thumbnail" src="1.png" class="figure-img">
</div>

<br>
<br>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="inner">
                    <img src="kontenartikel/photo/home1.png" class="card-img-top" alt="foto ugd">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Fasilitas Unit Gawat Darurat</h5>
                    <p class="card-text" style="text-align:justify">Yang dimaksud dengan Pelayanan Gawat Darurat (Emergency Care) adalah bagian dari pelayanan kedokteran yang di butuhkan oleh penderita dalam waktu segera...</p>
                    <a href="kontenartikel/ugd.php" class="btn btn-info">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="inner">
                    <img src="kontenartikel/photo/home2.png" class="card-img-top" alt="poli bedah umum">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Fasilitas Poliklinik</h5>
                    <p class="card-text" style="text-align:justify">Poliklinik Rumah Sakit Prognet memiliki kelebihan dalam hal pemberian pelayanan yang efektif. Hal ini terwujud dalam satu konsep pelayanan “One Stop Service” dimana pasien memperoleh...</p>
                    <a href="kontenartikel/poli.php" class="btn btn-info">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="inner">
                    <img src="kontenartikel/photo/home3.png" class="card-img-top" alt="rawat inap">
                </div>
                <div class="card-body">
                    <h5 class="card-title">Fasilitas Rawat Inap</h5>
                    <p class="card-text" style="text-align:justify">Rawat inap merupakan salah satu bentuk layanan perawatan kesehatan yang disediakan oleh rumah sakit dengan pelayanan kesehatan seperti observasi, diagnosa, pengobatan, keperawatan...</p>
                    <a href="kontenartikel/rawat.php" class="btn btn-info">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
include 'layout/footer.php';
?>