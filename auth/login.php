<!-- koneksi -->
<?php
require_once "../_config/config.php";

// session 
if (isset($_SESSION['user'])) {
    echo "<script>window.location='".base_url()."'</script>";
} else {
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
        <link href="<?= base_url() ?>/_assets/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container-fluid">
            <div class="col-lg-3">
                <h2>Form Login</h2>
                <?php
                // logic login
                if(isset($_POST['login']))
                {
                    $user = trim(mysqli_real_escape_string($conn, $_POST['username']));
                    $pass = sha1(trim(mysqli_real_escape_string($conn, $_POST['password'])));
                    $sql_login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$user' AND password = '$pass'") or die (mysqli_error($conn));
                    if(mysqli_num_rows($sql_login) > 0 ) {
                        $_SESSION['user'] = $user;
                        echo "<script>window.location='".base_url()."'</script>";
                    } else { ?>
                            <div class="row">
                                <div class="col-lg-12 col-lg-offset-3">
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        <strong>Login gagal!</strong> Username atau password anda salah!
                                    </div>
                                </div>
                            </div>
                        <?php
                    }
                }
                ?>
                <form action="" method="post" class="navbar-form">
                    <div class="form-group">
                        <label for="">Username</label>
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-primary" type="submit" name="login">Login</button>
                    </div>
                </form>
            </div>
        </div>
        <script src="<?= base_url('_assets/jquery/jquery-3.6.4.min.js') ?>"></script>
        <script src="<?= base_url('_assets/js/bootstrap.min.js') ?>"></script>
    </body>
</html>

<!-- session -->
<?php 
}
?>