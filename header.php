<?php 

require_once "_config/config.php";
require "_assets/library/vendor/autoload.php";

// start session 
if (!isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url('auth/login.php')."'</script>";
} else {
    ?>
    <!doctype html>
    <html lang="en">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
           
            <title>Aplikasi Rumah Sakit</title>
            <script src="https://unpkg.com/feather-icons"></script>
            <link href="<?= base_url() ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="<?= base_url() ?>/_assets/bootstrap-icons-1.10.5/font/bootstrap-icons.min.css">
        </head>
        <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#"><i class="bi bi-hospital"></i> RS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Rekam Medis</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Master Data</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Data Pasien</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('obat/data.php') ?>">Data Obat</a></li>
                                    <li><a class="dropdown-item" href="#">Data Dokter</a></li>
                                    <li><a class="dropdown-item" href="#">Data Poli Klinik</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">Setting</a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Profile</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('auth/logout.php')?>">Log Out</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <script src="<?= base_url('_assets/jquery/jquery-3.6.4.min.js') ?>"></script>
            <script src="<?= base_url('_assets/js/bootstrap.bundle.min.js') ?>"></script>
            <script>
            feather.replace()
            </script>
        </body>

    <?php 
    }
    ?>