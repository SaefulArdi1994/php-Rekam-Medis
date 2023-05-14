<?php include_once ('../header.php') ;?>

    <div class="container">
        <div class="row">
            <div class="col-lg-4 mb-3">
                <h1>Obat</h1>
                <small>Data Obat</small>
            </div>
            <div class="col-lg-4 mt-3">
                <h4>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="data.php" class="btn btn-warning btn-x5"><i class="bi bi-arrow-left"></i> Kembali </a>
                    </div>
                </h4>         
            </div>
            <div class="col-lg-8 col-lg-offset-3">
                <?php 
                    $id = @$_GET['id'];
                    $sql_obat = mysqli_query($conn, "SELECT * FROM obat WHERE id_obat = '$id'") or die (mysqli_error($conn));
                    $data = mysqli_fetch_array($sql_obat);
                ?>
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="nama">Nama Obat</label>
                        <input type="hidden" name="id" value="<?= $data['id_obat']?>">
                        <input type="text" name="nama" id="nama"  class="form-control" value="<?=$data['nama_obat']?>" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="ket">Keterangan</label>
                        <textarea class="form-control" name="ket" id="ket" required><?=$data['ket_obat']?></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" name="edit" value="Simpan" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once ('../footer.php') ?>