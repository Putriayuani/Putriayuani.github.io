
<?php 
    if ($_SESSION['level']=='admin'){
 ?>
<ol class="breadcrumb pull-right">
    <li><a href="javascript:;">Home</a></li>
    <li><a href="javascript:;">Admin</a></li>
    <li class="active">Profil</li>
</ol>
<h1 class="page-header">Profil</h1>
<div class="row">
    <div class="col-md-6">
        <div class="panel panel-inverse" data-sortable-id="form-validation-1">
            <div class="panel-heading">
                <div class="panel-heading-btn">
                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                </div>
                <h4 class="panel-title">Edit Profil</h4>
            </div>
            <div class="panel-body panel-form">
            <?php
                include "config/config.php";
                $sql="select * from admin where id='$_GET[id]'";
                $tampil=mysql_query($sql);
                $data=mysql_fetch_array($tampil);
            ?>
                <form class="form-horizontal d" data-parsley-validate="true" name="demo-form" action="model/update_pengguna.php" method="POST" enctype="multipart/form-data">
                <br>
                    
                    <hr>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4" for="fullname">Username :</label>
                        <div class="col-md-6 col-sm-6">
                            <input class="form-control" type="text" id="fullname" name="username" placeholder="Username" data-parsley-required="true" value="<?php echo $data['username']; ?>" />
                            <input type="hidden" name="id" value="<?php echo "$data[id]"; ?>">
                            <input type="hidden" name="level" value="admin" data-parsley-required="true" />
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4">Password :</label>
                        <div class="col-md-6 col-sm-6">
                            <input type="password" name="password" id="password-indicator-default" class="form-control m-b-5" />
                            <div id="passwordStrengthDiv" class="is0 m-t-5"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-4 col-sm-4"></label>
                        <div class="col-md-6 col-sm-6">
                            <button type="submit" class="btn btn-primary btn-sm">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
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