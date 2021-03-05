
<div class="invoice">
    <div class="invoice-company">
        <span class="pull-right hidden-print">
                    <a href="cetak_invoice.php ?>"class="btn btn-sm btn-success m-b-10"><i class="glyphicon glyphicon-eye-open m-r-5"></i> Cetak
                    </span>
        Laporan Buku Tamu 
    </div>
    <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><p align="center">No</p></th>
                                        <th><p align="center">Tanggal</p></th>
                                        <th><p align="center">No.ktp</p></th>
                                        <th><p align="center">Nama</p></th>
                                        <th><p align="center">No.Telp</p></th>
                                        <th><p align="center">alamat</p></th>
                                        <th><p align="center">Bertemu</p></th>
                                        <th><p align="center">keperluan</p></th>

                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                        include "config/config.php";
                                        error_reporting(0);
                                          $i=0;
                                         $sql="SELECT * FROM `buku` WHERE validasi='Y' ";
                                         $result= mysql_query($sql) or die ('Error');
                                         while($record= mysql_fetch_array($result))
                                                  {
                                                $noktp=$record['noktp'];
                                                $nama=$record['nama'];
                                                $notel=$record['notel'];
                                                $alamat=$record['alamat'];
                                                $bertemu=$record['bertemu'];
                                                $keperluan=$record['keperluan'];

                                            $i++;
                                        ?>
                                            <tr>
                                            <td align="center"><?php echo $i ?></td>
                                            <td align="center"><?php echo $noktp ?></td>
                                            <td align="center"><?php echo $nama ?></td>
                                            <td align="center"><?php echo $notel ?></td>
                                            <td align="center"><?php echo $alamat?></td>
                                            <td align="center"><?php echo $bertemu?></td>
                                            <td align="center"><?php echo $keperluan ?></td>

                                                
                                                </tr>
                                            <?php 
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>