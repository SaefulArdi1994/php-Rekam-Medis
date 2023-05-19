<?php 

require_once "../_config/config.php";
require "../_assets/library/vendor/autoload.php";

use Ramsey\Uuid\Uuid;

if (isset($_POST['add'])) {
    $total = $_POST['total'];
    for ($i=1; $i<=$total ; $i++) { 
        $uuid = Uuid::uuid4()->toString();
        $nama = trim(mysqli_real_escape_string($conn, $_POST['nama-' . $i]));
        $gedung = trim(mysqli_real_escape_string($conn, $_POST['gedung-' . $i]));
        $sql = mysqli_query($conn, "INSERT INTO poli (id_poli, nama_poli, gedung) VALUES ('$uuid', '$nama', '$gedung')") or die (mysqli_error($conn));
    }
    if ($sql) {
        echo "<script>alert('".$total." data berasil ditambahkan'); window.location='data.php';</script>";
    } else {
        echo "<script>alert('Gagal tambah data, coba lagi'); window.location='generate.php';</script>";
    }
} else if (isset($_POST['edit'])) {
    
}

?>
