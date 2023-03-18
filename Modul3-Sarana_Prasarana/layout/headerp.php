<?php
include '../config/conn.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SI Sarpras</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">

    <style>
        .profile-pic-div {
            height: 130px;
            width: 130px;
            position: inherit;
            top: 25%;
            left: 50%;
            right: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            overflow: hidden;
            border: 1px solid grey;
        }

        #photo {
            height: 100%;
            width: 100%;
        }

        #file {
            display: none;
        }

        #uploadBtn {
            height: 40px;
            width: 100%;
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            background: rgba(0, 0, 0, 0.7);
            color: wheat;
            line-height: 30px;
            cursor: pointer;
            display: none;
        }
    </style>
</head>

<body>
    <div class="main-container d-flex">
        <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
                <h1 class="fs-4"><span class="text-white">SI SARPRAS</span></h1>
                <button class="btn close-btn text-white"><i class="far fa-stream"></i></button>
            </div>
            <?php if ($_SESSION['level'] == "admin") : ?>
                <ul class="list-unstyled px-2">
                    <li class=""><a href="../adminsarpras/home_admin.php" class="text-decoration-none px-3 py-1 d-block">Home</a></li>
                </ul>
            <?php endif; ?>
            <?php if ($_SESSION['level'] == "kabid") : ?>
                <ul class="list-unstyled px-2">
                    <li class=""><a href="../kabidsarpras/home_kabid.php" class="text-decoration-none px-3 py-1 d-block">Home</a></li>
                </ul>
            <?php endif; ?>
            <?php if ($_SESSION['level'] == "kepalars") : ?>
                <ul class="list-unstyled px-2">
                    <li class=""><a href="../kepalars/home_rs.php" class="text-decoration-none px-3 py-1 d-block">Home</a></li>
                </ul>
            <?php endif; ?>
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
                                <a class="nav-link active" aria-current="page" href="#">Profile</a>
                            </li>
                            <?php if ($_SESSION['level'] == "admin") : ?>
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="../user-registration.php">Regis</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="../logout.php">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <?php
