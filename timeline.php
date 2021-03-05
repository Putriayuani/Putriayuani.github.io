<?php require_once("auth.php"); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku Tamu</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-4">

            <div class="card">
                <div class="card-body text-center">

                    <img class="img img-responsive rounded-circle mb-3" width="160" src="img/<?php echo $_SESSION['user']['photo'] ?>" />
                    
                    <h3><?php echo  $_SESSION["user"]["username"] ?></h3>
                    <p><?php echo $_SESSION["user"]["email"] ?></p>

                    <p><a href="logout.php">Logout</a></p>
                </div>
            </div>
            <div class="card text-center">
                
                    <p><a href="tabel_user.php">Keterangan</a></p>
             
            </div>
        </div>


        <div class="col-md-8">
                    <?php 
                      include "config.php";
                      if ($_SESSION['user']['username']) {
                        $username = isset($_GET['user']['username']) ? $_GET['user']['username'] : '';
                        $sqlx="SELECT * FROM users where users.id='".$_SESSION['user']['id']."'";
                        $tampil=mysql_query($sqlx);
                        while($data=mysql_fetch_array($tampil)){
                     ?>


            <form action="proses.php" method="post" enctype="multipart/form-data"/>
            
             <div class="form-group">
                    <label>Tanggal <small class="text-danger">*</small></label>
                    <input name="tanggal" type="date" class="form-control" required/>
            </div>
                 <div class="form-group">
                    <label>No.Ktp <small class="text-danger">*</small></label>
                    <input type="number" name="noktp" minlength="16" maxlength="16" class="form-control" placeholder="Masukkan no ktp anda" required />
                </div>
                 <div class="form-group">

                            <input type="hidden" class="form-control" value="<?php echo $data['id'];?>" name="id" data-parsley-required="true" />
                           <!--  <input type="hidden" class="form-control" value="<?php echo $data['id_buku'];?>" name="id" data-parsley-required="true" /> -->
                 </div>
                 <div class="form-group">
                        <label>Nama Lengkap<small class="text-danger">*</small></label>
                        <input name="nama" class="form-control" type="text" placeholder="Masukkan Nama Lengkap anda" required/>
                        <input type="hidden" name="validasi" value="T" data-parsley-required="true" />
                  </div>
                 <div class="form-group">
                    <label>No.Telp <small class="text-danger">*</small></label>
                    <input type="number" name="notel" minlength="12" maxlength="12" class="form-control" placeholder="Masukkan no Telp anda" required/>
                </div>
                 <div class="form-group">
                    <label>Alamat <small class="text-danger">*</small></label>
                    <input name="alamat" type="text" class="form-control" placeholder="Masukkan alamat Lengkap anda" required/>
                </div>
                 <div class="form-group">
                    <label>Bertemu <small class="text-danger">*</small></label>
                    <input name="bertemu" type="text" class="form-control" placeholder="Masukkan nama yang ingin ditemui" required/>
                </div>
                  <div class="form-group">
                    <label>Keperluan <small class="text-danger">*</small></label>
                    <input name="keperluan" type="text" class="form-control" placeholder="Masukkan Keperluan anda" required/>
                </div>
                <div class="form-group">
                    <input type="file" name="upload" required/>
                </div>
                <button type="submit" class='btn btn-info btn-fill btn-success btn-wd' name="submit"> Submit</button>
            </form>
             <?php
                  }
                }
                  ?>
        </div>
    
    </div>
</div>
<script>
  $('#myModal').modal('show');
</script>
</body>
</html>