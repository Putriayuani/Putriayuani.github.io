<?php 
    if ($_SESSION['level']=='admin'){
 ?>
<!-- begin breadcrumb -->
			<ol class="breadcrumb pull-right">
				<li><a href="javascript:;">Home</a></li>
				<li><a href="javascript:;">Admin</a></li>
				<li class="active">Data User</li>
			</ol>
			<!-- end breadcrumb -->
			<!-- begin page-header -->
			<h1 class="page-header">Data User</h1>
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
                            <h4 class="panel-title">List Data User</h4>
                        </div>
                        
                        <div class="panel-body">
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><p align="center">No</p></th>
                                        <th><p align="center">Username</p></th>
                                        <!-- <th><p align="center">Password</p></th> -->
                                        <th><p align="center">email</p></th>
                                        <!-- <th><p align="center">Aksi</p></th> -->
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                         include "config/config.php";
                                        $halaman = "index.php?p=data_pengguna";
                                        $action = "model/hapus_pengguna.php?";
                                         $i=0;
                                         $sql=" SELECT * FROM users ";
                                         $tampil=mysql_query($sql);
                                         while($data=mysql_fetch_array($tampil)){
                                            $nip=$data['id'];
                                         $i++;
                                        ?>

                                        <tr>
                                        <td align="center"><?php echo $i ?></td>
                                        <td align="center"><?php echo $data['username']; ?></td>
                                        <!-- <td align="center"><?php echo $data['password']; ?></td> -->
                                        <td align="center"><?php echo $data['email']; ?></td>
                                        <!-- <td style="width: 20%;" align="center">
                                            <a class="btn btn-danger btn-icon btn-sm" onclick="return confirm('Apakah Yakin Mau Dihapus<?php echo "$data[username]";?>!!')" href="model/hapus_user.php?id=<?php echo "$data[id]";?>"><i class="fa fa-times" title="Hapus Data Pengguna"></i></a>
                                        </td> -->
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