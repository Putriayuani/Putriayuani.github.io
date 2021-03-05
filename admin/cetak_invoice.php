<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/extra_invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Nov 2015 11:55:07 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Print Invoice</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="assets/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet" />
	<link href="assets/css/style_nyunyu.min.css" rel="stylesheet" />
    <link href="assets/css/style-responsive_nyunyu.min.css" rel="stylesheet" />
    <link href="assets/css/theme/default_nyunyu.css" rel="stylesheet" id="theme" />
	<link href="assets/css/invoice-print.min.css" rel="stylesheet" />
	<link href="assets/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/pace/pace.min.js"></script>
	<!-- ================== END BASE JS ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
<div class="invoice">
    <div class="invoice-company">
        <div class="invoice-from">
            <span class="pull-right hidden-print">
            <a href="javascript:;" onclick="window.print()" class="btn btn-sm btn-success m-b-10"><i class="fa fa-print m-r-5"></i> Print</a>
        </span>
                            <table id="data-table" class="table table-striped table-bordered">
                                <thead>
                                    <tr>
                                        <th><p align="center">No</p></th>
                                        <th><p align="center">Tanggal</p></th>
                                        <th><p align="center">No.ktp</p></th>
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
                                         $sql="SELECT * FROM `buku` WHERE validasi='Y' ";
                                         $result= mysql_query($sql) or die ('Error');
                                         while($record= mysql_fetch_array($result))
                                                  {
                                                $tanggal=$record['tanggal'];
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
                                            <td align="center"><?php echo $tanggal ?></td>
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
</div>
</div>
        

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="assets/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="assets/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="assets/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="assets/crossbrowserjs/html5shiv.js"></script>
		<script src="assets/crossbrowserjs/respond.min.js"></script>
		<script src="assets/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->
	
	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="assets/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->
	
	<script>
		$(document).ready(function() {
			App.init();
		});
	</script>
	<script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','../../../../www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-53034621-1', 'auto');
      ga('send', 'pageview');
    </script>
</body>

<!-- Mirrored from seantheme.com/color-admin-v1.9/admin/html/extra_invoice.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Nov 2015 11:55:08 GMT -->
</html>

