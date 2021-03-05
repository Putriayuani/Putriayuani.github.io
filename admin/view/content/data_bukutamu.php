<?php 
    if ($_SESSION['level']=='admin'){
 ?>
<!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Admin</a></li>
                <li class="active">Data Buku Tamu</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header">Data Buku Tamu</h1>
            <!-- end page-header -->
            
            <div class="row">
                <!-- begin col-12 -->
                <div class="col-md-12">
                    <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">List Data Buku Tamu</h4>
                        </div>
                        
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><p align="center">No</p></th>
                                        <th><p align="center">Tanggal</p></th>
                                        <th><p align="center">No.Ktp</p></th>
                                        <th><p align="center">Nama</p></th>
                                        <th><p align="center">No.Telp</p></th>
                                        <th><p align="center">Alamat</p></th>
                                        <th><p align="center">Bertemu</p></th>
                                        <th><p align="center">Keperluan</p></th>
                                        <th><p align="center">Aksi</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                         include "config/config.php";
                                        $halaman = "index.php?p=data_bukutamu";
                                        $action = "model/hapus_bukutamu.php?";
                                         $i=0;
                                         $sql="select * from buku where validasi='T'";
                                         $tampil=mysql_query($sql);
                                         while($data=mysql_fetch_array($tampil)){
                                            $id_buku=$data['id_buku'];
                                         $i++;
                                        ?>

                                        <tr>
                                        <td align="center"><?php echo $i ?></td>
                                        <td align="center"><?php echo $data['tanggal']; ?></td> 
                                        <td align="center"><?php echo $data['noktp']; ?></td>
                                        <td align="center"><?php echo $data['nama']; ?></td>
                                        <td align="center"><?php echo $data['notel']; ?></td>
                                        <td align="center"><?php echo $data['alamat']; ?></td>
                                        <td align="center"><?php echo $data['bertemu']; ?></td>
                                        <td align="center"><?php echo $data['keperluan']; ?></td>
                                        <td style="width: 20%;" align="center">
                                            <a class="btn btn-default btn-icon btn-sm" href="index.php?p=validasi&id=<?php echo $data['id_buku']; ?>"><i class="fa fa-expand" title="Validasi"></i></a>
                                            <a class="btn btn-danger btn-icon btn-sm" onclick="return confirm('Apakah Yakin Mau Dihapus<?php echo "$data[nama]";?>!!')" href="model/hapus_bukutamu.php?id=<?php echo "$data[id_buku]";?>"><i class="fa fa-times" title="Hapus Data Buku Tamu"></i></a>
                                        </td>
                                       
                                         <?php
                                     }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <?php 
        }else{
            ?>
            <script type="text/javascript">
                window.location.href="halaman_error.php";
            </script>
        <?php
        }
     ?>