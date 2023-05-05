<?php include_once ('../header.php') ?>

<div class="box">
    <div class="container">
        <h1>Obat</h1>
        <h4>
            <small>Data Obat</small>
            <div class="pull-right">
                <a href="" class="btn btn-success btn-x5">O</a>
                <a href="" class="btn btn-success btn-x5">Tambah Data</a>
            </div>
        </h4>
        <div class="">
            <form action="" class="form-inline" method="post">
                <div class="form-group">
                    <input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table class="table table-striped table-border table-hover">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Obat</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    $sql_obat = mysqli_query($conn, "SELECT * FROM obat") or die (mysqli_error($conn));
                    if (mysqli_num_rows($sql_obat) > 0) {
                        while($data = mysqli_fetch_array($sql_obat)) { ?> 
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['nama_obat']?></td>
                            <td><?= $data['ket_obat']?></td>
                            <td>
                                <a href="">Edit</a> | <a href="">Hapus</a>
                            </td>
                        </tr>    
                        <?php 
                        }
                    } else {
                        echo "<tr>
                                <td colspan=\"4\" align=\"center\">
                                    Data tidak ditemukan
                                </td>
                            </tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
   
</div>

<?php include_once ('../footer.php') ?>