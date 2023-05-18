<?php include_once('../header.php')?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h1>Poliklinikl</h1>
                <h4>
                    <small>Data Poliklinik</small>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="data.php" class="btn btn-warning btn-xs">Kembali</a>
                    </div>
                </h4>
            </div>
            <div class="col-lg-6 col-lg-offset-3">
                <form action="add.php" method="post">
                    <div class="form-group">
                        <label for="count_add">Banyak Record yang Akan Ditambahkan</label>
                        <input type="text" name="count_add" id="count_add" maxlength="2" pattern="[0-9]+" class="form-control" required>
                    </div>
                    <div class="form-group d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                        <input type="submit" name="generate" value="Generate" class="btn btn-success">
                    </div>
                </form>
            </div>
        </div>
    </div>

<?php include_once('../footer.php')?>

