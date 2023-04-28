<!-- koneksi -->
<?php
require_once "_config/config.php";

// start session 
if (isset($_SESSION['user'])) {
    echo "<h1>Hello, world!</h1> <a href=\"auth/logout.php\">Logout</a>";
} else {
    echo "<script>window.location='".base_url('auth/login.php')."'</script>";
}

?>
