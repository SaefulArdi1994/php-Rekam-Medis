<?php 

require_once "../_config/config.php";
require "../_assets/library/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

// $uuid = Uuid::uuid4();

// printf(
//     $uuid->toString()
// );

if (isset($_POST['add'])) {
    $uuid = Uuid::uuid4()->toString();
    $nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
    $ket = trim(mysqli_real_escape_string($conn, $_POST['ket']));
    mysqli_query($conn, "INSERT INTO obat (id_obat, nama_obat, ket_obat) VALUES ('$uuid', '$nama', '$ket')") or die (mysqli_error($conn));
    echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])) {
    $id =  $_POST['id'];
    $nama = trim(mysqli_real_escape_string($conn, $_POST['nama']));
    $ket = trim(mysqli_real_escape_string($conn, $_POST['ket']));
    mysqli_query($conn, "UPDATE obat SET nama_obat = '$nama', ket_obat = '$ket' WHERE id_obat = '$id'") or die (mysqli_error($conn));
    echo "<script>window.location='data.php';</script>";
}

?>
