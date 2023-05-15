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
                                <th>Nama Obat</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $batas = 3;
                            $hal = @$_GET['hal'];
                            if(empty($hal)) {
                                $posisi = 0;
                                $hal = 1;
                            } else {
                                $posisi = ($hal - 1) * $batas;
                            } 
                            $no = 1;
                            if($_SERVER['REQUEST_METHOD'] == "POST") {
                                $pencarian = trim(mysqli_real_escape_string($conn, $_POST['pencarian']));
                                if($pencarian != '' ) {
                                    $sql = "SELECT * FROM obat WHERE nama_obat LIKE '%$pencarian%'";
                                    $query = $sql;
                                    $queryJml = $sql;
                                } else {
                                    $query = "SELECT * FROM obat LIMIT $posisi, $batas";
                                    $queryJml = "SELECT * FROM obat";
                                    $no = $posisi + 1;
                                }
                            } else {
                                $query = "SELECT * FROM obat LIMIT $posisi, $batas";
                                $queryJml = "SELECT * FROM obat";
                                $no = $posisi + 1;
                            }
                   
                            $sql_obat = mysqli_query($conn, $query) or die (mysqli_error($conn));
                            if (mysqli_num_rows($sql_obat) > 0) {
                                while($data = mysqli_fetch_array($sql_obat)) { ?> 
                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama_obat']?></td>
                                    <td><?= $data['ket_obat']?></td>
                                    <td>
                                        <a href="edit.php?id=<?=$data['id_obat']?>"><i class="bi bi-pencil-square"></i></a> | <a href="delete.php?id=<?=$data['id_obat']?>"><i class="bi bi-trash"></i></a>
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
                <?php
                    if(@$_POST['pencarian'] == '') { ?>
                        <div style="float:left;">
                            <?php
                            $jml = mysqli_num_rows(mysqli_query($conn, $queryJml));
                            echo "Jumlah Data: <b>$jml</b>";
                            ?>
                        </div>
                        <div style="float: right;">
                            <ul class="pagination pagination-sm" style="margin: 0;">
                                <?php
                                $jml_hal = ceil($jml / $batas);
                                for ($i=1; $i <= $jml_hal; $i++) { 
                                    if ($i != $hal) {
                                        echo "<li><a href=\"?hal=$i\">$i</a></li>";
                                    } else {
                                        echo "<li><a href=\"active\">$i</a></li>";
                                    }
                                }
                                ?>
                            </ul>
                        </div>
                    <?php
                    } else {
                        echo "<div style=\"float:left\">";
                        $jml = mysqli_num_rows(mysqli_query($conn, $queryJml));
                        echo "Data hasil pencarian : <b>$jml</b>";
                        echo "</div>";
                    }
                    ?>
            </div>
        </div>
    </div>
</div>

<?php include_once ('../footer.php') ?>