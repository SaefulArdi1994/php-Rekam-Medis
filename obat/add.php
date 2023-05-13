<?php include_once ('../header.php') ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <h1>Obat</h1>
                <small>Data Obat</small>
            </div>
            <div class="col-lg-12">
                <h4>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="data.php" class="btn btn-warning btn-x5"><i class="bi bi-arrow-left"></i> Kembali </a>
                    </div>
                </h4>         
            </div>
            <div class="col-lg-8 col-lg-offset-3">
                <form action="proses.php" method="post">
                    <div class="form-group">
                        <label for="">Nama Obat</label>
                        <input type="text" name="nama" id="nama" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea class="form-control" name="ket" id="ket" cols="130" rows="5"></textarea>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" name="add" value="simpan" class="btn btn-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


<?php include_once ('../footer.php') ?>