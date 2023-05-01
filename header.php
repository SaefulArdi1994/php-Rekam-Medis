<?php 

require_once "_config/config.php";

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
            <link href="<?= base_url() ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
        </head>
        <body>
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">RS</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" class="nav-link disabled">Data Pasien</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Data Poli klimik</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Data Obat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">Rekam Medis</a>
                            </li>
                            <li class="nav-link" class="nav-item">
                                <a href="<?= base_url('auth/logout.php')?>">Log Out</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <script src="<?= base_url('_assets/jquery/jquery-3.6.4.min.js') ?>"></script>
            <script src="<?= base_url('_assets/js/bootstrap.min.js') ?>"></script>
        </body>

    <?php 
    }
    ?>