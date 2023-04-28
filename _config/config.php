<?php 

// setting default timezone
date_default_timezone_set('Asia/Jakarta');

// session
session_start();

// koneksi
$conn = mysqli_connect('localhost', 'root', '', 'db_rumah_sakit');
if(mysqli_connect_errno()){
    echo mysqli_connect_error();
}

// base url
function base_url($url = null)
{
    $base_url = "http://localhost/php-Rekam-Medis";
    if ($url != null) {
        return $base_url."/". $url;
    } else {
        return $base_url;
    }
}

