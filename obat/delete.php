<?php
require_once "../_config/config.php";

mysqli_query($conn, "DELETE FROM obat WHERE id_obat = '$_GET[id]'") or die (mysqli_error($conn));
echo "<script>window.location='data.php';</script>";
?>