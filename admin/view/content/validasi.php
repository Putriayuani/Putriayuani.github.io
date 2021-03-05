
<!-- begin breadcrumb -->
      <ol class="breadcrumb pull-right">
        <li><a href="javascript:;">Home</a></li>
        <li><a href="javascript:;">Master</a></li>
        <li class="active">konfirmasi validasi</li>
      </ol>
      <!-- end breadcrumb -->
      <!-- begin page-header -->
      <h1 class="page-header">validasi</h1>
      <!-- end page-header -->
      
      <!-- begin row -->
      <div class="row">
                <!-- begin col-6 -->
          <div class="col-md-6">
              <!-- begin panel -->
                    <div class="panel panel-inverse" data-sortable-id="form-validation-1">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                            </div>
                            <h4 class="panel-title">konfirmasi validasi</h4>
                        </div>
                        <div class="panel-body panel-form">
                   <?php 
                      include "config/config.php";
                      $sqlx="SELECT * FROM buku WHERE `id_buku`='$_GET[id]'";
                      $tampil=mysql_query($sqlx);
                      while($data=mysql_fetch_array($tampil)){
                     ?>
                            <form class="form-horizontal form-bordered" data-parsley-validate="true"  action="" method="POST">
                        <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="tgl">Nama :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" value="<?php echo $data['nama'];?>" >
                                        <input type="hidden" class="form-control" value="<?php echo $data['id_buku'];?>" name="id_buku" data-parsley-required="true" />
                                    </div>
                                    </div>
                               
                        <div class="form-group">
                          <label class="control-label col-md-4 col-sm-4" for="tgl">validasi :</label>
                          <div class="col-md-6 col-sm-6">
                                                <select class="form-control" name="validasi">
                            <option selected="">[ Pilih ]</option>
                            <option value="Y">Konfirmasi</option>
                        </select>
                          </div>
                        </div>
                         <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Keterangan :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="textarea" name="ket"/>
                                    </div>
                                </div>
                
                <div class="form-group">
                  <label class="control-label col-md-4 col-sm-4"></label>
                  <div class="col-md-6 col-sm-6">
                    <input type="submit" class="btn btn-success" name="save" value="validasi"> 
                  </div>
                </div>
                            </form>
                      <?php
                  }
                  ?>
                        </div>
                    </div>
                </div>
            </div>
          <?php
include "config/config.php";

if (isset($_POST['save'])){
    $sql=mysql_query(" UPDATE buku SET validasi='$_POST[validasi]',ket='$_POST[ket]' WHERE id_buku='$_POST[id_buku]'");
    $sql1="INSERT INTO buku VALUES ('','$_POST[ket]')";
    if($sql&&$sql1==true){
        echo'<div class="alert alert-success fade in">
    <a href="?p=data_bukutamu" class="close" data-dismiss="alert" aria-label="close">&times;</a> Berhasi Tersimpan..
  </div>';
    }else{
        echo "Gagal Menyimpan Data.." . $sql . "<br>" . mysql_error();
    }

}
?>
