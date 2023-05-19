<?php include_once('../header.php')?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Poliklinik</h1>
                <h4>
                    <small>Tambah Data Poliklinik</small>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="data.php" class="btn btn-info btn-xs">Data</a>
                        <a href="generate.php" class="btn btn-info btn-xs">Tambah Data </a>
                    </div>
                </h4>
            </div>
            <div class="col-lg-6 col-lg-offset-2">
                <form action="proses.php" method="post">
                    <input type="hidden" name="total" value="<?=@$_POST['count_add']?>">
                    <table class="table">
                        <tr>
                            <td>#</td>
                            <td>Nama Poliklinik</td>
                            <th>Gedung</th>
                        </tr>
                        <?php
                        if (isset($_POST['count_add'])) {
                                for ($i=1; $i<=$_POST['count_add']; $i++) { ?>
                                    <tr>
                                        <td><?=$i?></td>
                                        
                                        <td>
                                            <input type="text" name="nama-<?=$i?>" class="form-control" required>
                                        </td>
                                        <td>
                                            <input type="text" name="gedung-<?=$i?>" class="form-control" required>
                                        </td>
                                    </tr>
                                <?php
                            }
                        }
                        ?>
                    </table>
                    <div class="form-group">
                        <input type="submit" name="add" value="Simpan Semua" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once('../footer.php')?>