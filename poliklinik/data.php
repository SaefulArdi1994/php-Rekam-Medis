<?php include_once ('../header.php') ?>

<div class="box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mb-3">
                <h1>Obat</h1>
                <small>Data Obat</small>
            </div>
            
            <div class="col-lg-4">
                <div class="">
                    <form action="" class="form-inline" method="POST">
                        <div class="input-group">
                            <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                            <button class="btn btn-primary"><i class="bi bi-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-8">
                <h4>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <a href="edit.php" class="btn btn-success btn-x5"><i class="bi bi-arrow-clockwise"></i></a>
                        <a href="add.php" class="btn btn-success btn-x5"><i class="bi bi-plus-lg"></i> Tambah Data</a>
                    </div>
                </h4>
            </div>
            <div class="col-lg-12">
                <div class="table-responsive">
                    <table class="table table-striped table-border table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Poliklinik</th>
                                <th>Gedung</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once ('../footer.php') ?>