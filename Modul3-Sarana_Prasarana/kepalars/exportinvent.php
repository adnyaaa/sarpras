<?php
session_start();
include '../layout/header.php';
// cek apakah yang mengakses halaman ini sudah login
if ($_SESSION['level'] == " ") {
    header("location:../formlogin.php?pesan=gagal");
}


$hasil = mysqli_query($conn, "SELECT tb_inventory.`id_sarana`, tb_sarana.nama_sarana, tb_inventory.total FROM tb_inventory JOIN tb_sarana ON tb_inventory.`id_sarana`=tb_sarana.`id_sarana`
    GROUP BY tb_inventory.id_sarana;");

//cek ambil data di tabel mahasiswa
if (!$hasil) {
    echo mysqli_error();
}

?>

<head>
    <title>Stock Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
<div class="container mt-5">
    <div class="container-sm">
        <h1>SARANA</h1>
        <hr>
        <br>
        <div class="col">

            <br>
            <div class="table-responsive text-nowrap">
                <table class="table" id="mauexport">
                    <thead>
                        <tr class="table-dark">
                            <th>ID</th>
                            <th>Nama Sarana</th>
                            <th>Total Stok Sarana</th>
                        </tr>
                    </thead>

                    <!--sekarang perlu mengisi data tabel sesuai dengan tabel mahasiswa-->
                    <!--perlu untuk perulangan (while) untuk mengisi data pada tabel-->
                    <tbody>
                        <?php
                        while ($row = mysqli_fetch_array($hasil)) :
                        ?>
                            <tr>
                                <td><?= $row["id_sarana"] ?></td>
                                <td><?= $row["nama_sarana"] ?></td>
                                <td><?= $row["total"] ?></td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>


                </table>

            </div>
        </div>

        <script>
            $(document).ready(function() {
                $('#mauexport').dataTable({
                    dom: 'lBfrtip',
                    buttons: [{
                            extend: 'copyHtml5',
                            text: '<i class="fas fa-copy"></i> Copy',
                            titleAttr: 'Copy'
                        },
                        {
                            extend: 'excelHtml5',
                            text: '<i class="fas fa-file-excel"></i> Excel',
                            titleAttr: 'Excel'
                        },
                        {
                            extend: 'csvHtml5',
                            text: '<i class="fas fa-file-csv"></i> CSV',
                            titleAttr: 'CSV'
                        },
                        {
                            extend: 'pdfHtml5',
                            text: '<i class="fas fa-file-pdf"></i> PDF',
                            titleAttr: 'PDF'
                        },
                        {
                            extend: 'print',
                            text: '<i class="fas fa-print"></i> Print',
                            titleAttr: 'Print'
                        }

                    ]
                });
            });
        </script>

        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>
        <script>
            $(".sidebar ul li").on('click', function() {
                $(".sidebar ul li.active").removeClass('active');
                $(this).addClass('active');
            })

            $(".open-btn").on('click', function() {
                $(".sidebar").addClass('active');
            })

            $(".close-btn").on('click', function() {
                $(".sidebar").removeClass('active');
            })
        </script>