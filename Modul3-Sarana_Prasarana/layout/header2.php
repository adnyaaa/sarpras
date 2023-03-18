<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI Sarpras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
</head>

<body>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4"><span class="text-white">SI SARPRAS</span></h1>
                <button class="btn close-btn text-white"><i class="far fa-stream"></i></button>
            </div>

            <ul class="list-unstyled px-2">
                <li class=""><a href="index.php" class="text-decoration-none px-3 py-1 d-block">Home</a></li>
            </ul>
            <ul class="list-unstyled px-2">
                <li class=""><a href="kontenartikel/ugd.php" class="text-decoration-none px-3 py-1 d-block">Fasilitas UGD</a></li>
            </ul>
            <ul class="list-unstyled px-2">
                <li class=""><a href="kontenartikel/poli.php" class="text-decoration-none px-3 py-1 d-block">Fasilitas Poliklinik</a></li>
            </ul>
            <ul class="list-unstyled px-2">
                <li class=""><a href="kontenartikel/rawat.php" class="text-decoration-none px-3 py-1 d-block">Fasilitas Rawat Inap</a></li>
            </ul>
            <hr class="h-color mx-2">
        </div>

        <div class="content">
            <nav class="navbar navbar-expand-md navbar-light" style="background-color:#F6FBFD">
                <div class="container-fluid">
                    <div class="d-flex justify-content-between">
                        <a class="navbar-brand fs-4" href="#">SI SARPRAS</a>
                        <button class="btn px-1 py-0 open-btn"><i class="far fa-stream"></i></button>
                    </div>
                    <div class="d-flex justify-content-end" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="formlogin.php">Login</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>