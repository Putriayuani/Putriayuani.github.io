<?php 
    if ($_SESSION['level']=='admin'){
 ?>
<!-- begin breadcrumb -->
            <ol class="breadcrumb pull-right">
                <li><a href="javascript:;">Home</a></li>
                <li><a href="javascript:;">Admin</a></li>
                <li class="active"> Laporan Buku Tamu</li>
            </ol>
            <!-- end breadcrumb -->
            <!-- begin page-header -->
            <h1 class="page-header"> Laporan Buku Tamu</h1>
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
                            <h4 class="panel-title">List Laporan Buku Tamu</h4>
                        </div>
                        
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <form class="form-horizontal" method="post" id="form" name="form" action="">
                                        <div class="form-group">
                                            <label class="control-label col-xs-1" for="tanggal">Tanggal :  </label>
                                                <div class="col-xs-3">
                                                    <input type="date" class="form-control" name="tanggal_start" id="tanggal" maxlength="10"  >
                                                    <input type="date" class="form-control" name="tanggal_and" id="tanggal" maxlength="10"  >
                                                    <input type="submit" class="btn btn-success" name="save" value="Tampilkan">
                                                </div>
                                        </div>
                                        </form>
                                    <hr>
                                    <div class="row">
                                    <?php 
                                    if(isset($_POST['save'])){ ?>
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
                                                </tr>
                                            </thead>
                                                <tbody>
                                                    <?php
                                                         include "config/config.php";
                                                         error_reporting(0);
                                                         $i=0;
                                                         $sql=mysql_query("SELECT * FROM `buku` where validasi='Y' AND tanggal>='$_POST[tanggal_start]'  and  tanggal<='$_POST[tanggal_and]' ");
                                                            while ($data=mysql_fetch_array($sql)) {
                                                                $id_buku=$data['id_buku'];
                                                                $tanggal=$data['tanggal'];
                                                                $noktp=$data['noktp'];
                                                                $nama=$data['nama'];
                                                                $notel=$data['notel'];
                                                                $alamat=$data['alamat'];
                                                                $bertemu=$data['bertemu'];
                                                                $keperluan=$data['keperluan'];
                                                         $i++;
                                                        ?>

                                        <tr>
                                        <td align="center"><?php echo $i ?></td>
                                        <td align="center"><?php echo $tanggal; ?></td> 
                                        <td align="center"><?php echo $noktp; ?></td>
                                        <td align="center"><?php echo $nama; ?></td>
                                        <td align="center"><?php echo $notel; ?></td>
                                        <td align="center"><?php echo $alamat; ?></td>
                                        <td align="center"><?php echo $bertemu; ?></td>
                                        <td align="center"><?php echo $keperluan; ?></td>
                                        </tr>
                                       
                                         <?php
                                     }
                                    ?>
                                    <div class="box-header">
                                        <h5 class="box-title"> &nbsp;&nbsp;<a href="cetak_invoice.php" class="btn btn-primary btn-sm">PRINT</a></h3> 
                                    </div>
                                </tbody>
                            </table>
                             <?php
                                     }
                                    ?>
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

   