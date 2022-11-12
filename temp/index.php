<!DOCTYPE html>
<html lang="en">

<!-- header -->
<?php 
  session_start(); 
  if(!$_SESSION['nama']){
    header('Location: ../');
  }
      include('header.php');
      include('../conn/config.php');
?> 
<!-- /.header -->

<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">

  <!-- Preloader -->
<?php include('preloader.php');
?>

<!-- navbar -->
<?php include('navbar.php');
?>
<!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
<?php include('brandlogo.php');
?>

    <!-- Sidebar -->
<?php include('sidebar.php')
?>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
<?php include('content_header.php');
?>
    <!-- /.content-header -->

    <!-- Main content -->
<?php
  if (isset($_GET['page'])){
    if($_GET['page']=='dashboard'){
      include('dashboard.php');
    }else if($_GET['page']=='pengguna'){
      include('data_pengguna.php');
    }else if($_GET['page']=='pemilik'){
      include('data_pemilik.php');
    }else if($_GET['page']=='kost'){
      include('data_kost.php');
    }else if($_GET['page']=='pemesanan'){
      include('data_pemesanan.php');
    }else{
      include('notfound.php');
    }
  }
  else{
      include('dashboard.php');
  }
?>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php include('footer.php');
?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->



</body>
</html>
