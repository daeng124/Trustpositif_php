<!DOCTYPE html>
<html lang="en">
<?php session_start();
if (!$_SESSION['nama']) {
  header('Location: ../index.php?page=session-expired');
}
?>
<?php include('header.php'); ?>
<?php include('../conf/config.php'); ?>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Preloader -->
    <?php include('preloader.php'); ?>

    <!-- Navbar -->
    <?php include('navbar.php'); ?>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <?php include('logo.php'); ?>

      <!-- Sidebar -->
      <?php include('sidebar.php'); ?>
      <!-- /.sidebar-menu -->

      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <?php include('content_header.php') ?>
      <!-- /.content-header -->

      <!-- Main content -->
      <?php
      if (isset($_GET['page'])) {
        if ($_GET['page'] == 'dashboard') {
          include('dashboard.php');
        } else if ($_GET['page'] == 'data-domain-aktif') {
          include('data_domain.php');
        } else if ($_GET['page'] == 'data-domain-Terblokir') {
          include('domain_terblokir.php');
        } else if ($_GET['page'] == 'cek-ssl') {
          include('ssl_checker.php');
        }
      } else {
        include('dashboard.php');
      }
      ?>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('footer.php'); ?>
</body>

</html>