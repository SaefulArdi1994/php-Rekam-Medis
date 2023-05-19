<?php include_once ('../header.php') ?>

    <div class="box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-3">
                    <h1>Poliklinik</h1>
                    <small>Data Poliklinik</small>
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
                            <a href="generate.php" class="btn btn-success btn-x5"><i class="bi bi-plus-lg"></i> Tambah Data</a>
                        </div>
                    </h4>
                </div>
                <div class="col-lg-12">
                    <form action="" method="post">
                        <div class="table-responsive">
                            <table class="table table-striped table-border table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Poliklinik</th>
                                        <th>Gedung</th>
                                        <th>
                                            <input type="checkbox" id="select_all" value="">
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                        $sql_poli = mysqli_query($conn, "SELECT * FROM poli") or die (mysqli_error($conn));
                                        if (mysqli_num_rows($sql_poli) > 0) {
                                            while ($data = mysqli_fetch_array($sql_poli)) { ?>
                                            <tr>
                                                    <td><?= $no++?></td>
                                                    <td><?= $data['nama_poli']?></td>
                                                    <td><?= $data['gedung']?></td>
                                                    <td>
                                                        <input type="checkbox" class="check" name="checked[]" value="<?= $data['id_poli']?>">
                                                    </td>
                                            </tr>
                                            <?php
                                            }
                                        } else {
                                            echo "<tr><td colspan=\"4\" align=\"center\">Data tidak ditemukan</td></tr>";
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </form>
                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                        <button class="btn btn-warning btn-sm" onclick="edit()">Edit</button>
                        <button class="btn btn-danger btn-sm" onclick="hapus()">Hapus</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        // multiple checklist
        $(document).ready(function() {
            $('#select_all').on('click', function() {
                if (this.checked) {
                    $('.check').each(function() {
                        this.checked = true;
                    }) 
                } else {
                    $('.check').each(function() {
                    this.checked = false;
                    })
                }
            });
            $('.check').on('click', function() {
                if ($('.check:checked').length == $('.check').length) {
                    $('#slect_all').prop('checked', true)
                } else {
                    $('#select_all').prop('checked', false)
                }
            })
        });

        function edit() {
            document.proses.action = 'edit.php';
            document.proses.submit();
        }

        function hapus() {
            var conf = confirm('Anda yakin ?');
            if (conf) {
                document.proses.action = 'delete.php';
                document.proses.submit();
            }
        }
    </script>



<?php include_once ('../footer.php') ?>
