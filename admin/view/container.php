<?php 
  if ($_SESSION['level']=='admin'){
 ?>
  <div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
      <!-- begin container-fluid -->
      <div class="container-fluid">
        <!-- begin mobile sidebar expand / collapse button -->
        <div class="navbar-header">
         <div align="left"><a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="fa fa-bars"></i></a><img src="assets/dist/img/index.png" width="205" height="50">
                <span class="style2"><b> APLIKASI BUKU TAMU</b></span> </div>
                <div align="right"><span class>
            </a> 
          
          </p> 
              </div>
          <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <!-- end mobile sidebar expand / collapse button -->
        
        <!-- begin header navigation right -->
        <ul class="nav navbar-nav navbar-right">
          <li>
            <form class="navbar-form full-width">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Enter keyword" />
                <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
              </div>
            </form>
          </li>
          <li class="dropdown navbar-user">
            <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
              <img src="assets/dist/img/avatar2.png" alt="User Image" /> 
              <span class="hidden-xs"><?php echo  ucwords($_SESSION['level']); ?></span> <b class="caret"></b>
            </a>
            <ul class="dropdown-menu">
               <li class="user-header">
                <img src="assets/dist/img/avatar2.png" class="img-circle" alt="User Image" />
                <p>
                   <?php echo  ucwords($_SESSION['level']); ?>
                  <small><?=date('d M Y') ?></small>
                </p>
              </li>
             <li class="user-footer">
                <div class="pull-left">
                  <a href="#" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a a href="model/aksi_logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
          </li>
        </ul>
        <!-- end header navigation right -->
      </div>
      <!-- end container-fluid -->
    </div>
    <!-- end #header -->
      
    
    <!-- begin #sidebar -->
    <div id="sidebar" class="sidebar">
      <!-- begin sidebar scrollbar -->
      <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
          <li class="nav-profile">
            <div class="user-panel">
               <div class="pull-left image">
                <a href="index.php?p=profil&&username=<?php echo $_SESSION['level']; ?>"><img src="assets/dist/img/avatar2.png" class="img-circle" alt="User Image" /> </a>
              </div> 
            </div>
            <div class="info">
              <?php echo  ucwords($_SESSION['level']); ?>
              <small><?php echo  ucwords($_SESSION['level']); ?></small>
            </div>
          </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
          <ul class="nav">
             <li class="nav-header">Navigation</li>
            <li class="has-sub active">
              <a href="index.php">
                  <i class="fa fa-dashboard"></i>
                  <span> Dashbord</span>
                </a>
            <li class="has-sub active">
              <a href="javascript:;">
                  <b class="caret pull-right"></b>
                  <i class="fa fa-laptop"></i>
                  <span> Admin</span>
                </a>
              <ul class="sub-menu">
                  <li><a href="index.php?p=data_pengguna"> Data Pengguna</a></li>
                  <li><a href="index.php?p=data_user"> Data User</a></li>
              </ul>
            </li>
            <li class="has-sub active">
              <a href="javascript:;">
                  <b class="caret pull-right"></b>
                  <i class="fa fa-suitcase"></i>
                  <span>Master</span> 
              </a>
              <ul class="sub-menu">
                <li><a href="index.php?p=data_bukutamu">Buku Tamu</a></li>
                <li><a href="index.php?p=file">File</a></li>
              </ul>
            </li>
            <li class="has-sub active">
              <a href="index.php?p=laporan_bukutamu">
                  <i class="fa fa-bar-chart"></i>
                 
                  <span> Laporan</span>
                </a>
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
                <!-- end sidebar minify button -->
          </ul>
          <!-- end sidebar nav -->
        </div>
        <!-- end sidebar scrollbar -->
      </div>
      <div class="sidebar-bg"></div>
      <!-- end #sidebar -->
      
      <!-- begin #content -->
      <div id="content" class="content">
      <?php
              $pages_dir = 'view/content';
                  if(!empty($_GET['p'])){
                      $pages = scandir($pages_dir, 0);
                      unset($pages[0], $pages[1]);
                      $p = $_GET['p'];
                      if(in_array($p.'.php', $pages)){
                          include($pages_dir.'/'.$p.'.php');
                      } else {
                          ?>
                      <script type="text/javascript">
                          window.location.href="halaman_error.php";
                      </script>
                  <?php
                      }
                  } else {
                      include($pages_dir.'/home.php');
                  }
              ?>
        
      </div>
          
          <!-- end theme-panel -->
      
      <!-- begin scroll to top btn -->
      <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
      <!-- end scroll to top btn -->
    </div>
         <?php 
          }else{
              ?>
              <script type="text/javascript">
                  window.location.href="../../halaman_error.php";
              </script>
          <?php
          }
       ?>