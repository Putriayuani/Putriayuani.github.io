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
                
                    <p><a href="timeline.php">Kembali</a></p>
             
            </div>
            
        </div>


        <div class="col-md-8">

            <form action="" method="post" enctype="multipart/form-data"/>
                <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><p align="center">No</p></th>
                                        <th><p align="center">Nama</p></th>
                                        <th><p align="center">No.Telp</p></th>
                                        <th><p align="center">alamat</p></th>
                                        <th><p align="center">Bertemu</p></th>
                                        <th><p align="center">Keperluan</p></th>
                                        <th><p align="center">Keterangan</p></th>
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                        require 'config.php';
                                        
                                        $i=0;
                                            //$sql = "SELECT * FROM `buku` JOIN users ON buku.id_buku=users.id_buku AND validasi='Y' where users.id='".$_SESSION['user']['id']."'";
                                            $sql = "SELECT * FROM `buku` JOIN users ON buku.id=users.id AND validasi='Y' where users.id='".$_SESSION['user']['id']."'";
                                            $tampil=mysql_query($sql);
                                            while($data=mysql_fetch_array($tampil)){
                                            $i++;
                                        ?>
                                            <tr>
                                                <td align="center"><?php echo $i ?></td>
                                                <!-- <td align="center"><?php echo  $_SESSION["user"]["username"];?></td>  -->
                                                <td align="center"><?php echo $data['nama']; ?></td>
                                                <td align="center"><?php echo $data['notel']; ?></td>
                                                <td align="center"><?php echo $data['alamat']; ?></td>
                                                <td align="center"><?php echo $data['bertemu']; ?></td>
                                                <td align="center"><?php echo $data['keperluan']; ?></td>
                                                <td align="center"><?php echo $data['ket']; ?></td>
                                               
                                                </tr>
                                            <?php
                                                }
                                            ?>

                                </tbody>
                            </table>
                        </div>
            </form>
        </div>
    
    </div>
</div>

</body>
</html>
