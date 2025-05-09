<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customer Relation Officer - Super Sukses Motor</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/cro.png">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">


  <style>
    @media (max-width: 576px) { 
      .btndetsurv{
        width:100%;
      }
    }
  </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-danger navbar-light" style="color:white;">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a style="color:white;" class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <p style="color:white;">Welcome, <?php echo $this->session->userdata('nama') ?> <i class="fas fa-angle-down"></i></p>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <a href="<?php echo base_url() ?>C_login/logout" class="dropdown-item">
            <i class="fas fa-sign-out-alt"></i> Logout
          </a>
          <!-- <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a> -->
        </div>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-danger elevation-4">
    <!-- Brand Logo -->
    <a href="<?php echo base_url() ?>C_cro/home" class="brand-link navbar-danger">
      <h4 class="brand-text text-center" style="color:white;"><b>CRO<b></h4>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
           <li class="nav-item has-treeview">
            <a href="<?php echo base_url() ?>C_cro/home" class="nav-link <?php if(isset($page)){if($page == 'Home'){echo 'active';}} ?>">
               <i class="nav-icon fas fa-home"></i>
               <p>
                 Home
                 <!-- <i class="fas fa-angle-left right"></i> -->
               </p>
             </a>
           </li>
           <li class="nav-item has-treeview <?php if(isset($page)){if($page == 'Master'){echo 'menu-open';}} ?>">
             <a href="#" class="nav-link <?php if(isset($page)){if($page == 'Master'){echo 'active';}} ?>">
               <i class="nav-icon fas fa-book"></i>
               <p>
                 Master
                 <i class="fas fa-angle-left right"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="<?php echo base_url() ?>C_cro/viewquest" class="nav-link <?php if($this->uri->segment(2) == 'viewquest'){echo 'active';} ?>">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Question</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?php echo base_url() ?>C_cro/viewresp" class="nav-link <?php if($this->uri->segment(2) == 'viewresp'){echo 'active';} ?>">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Respon</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?php echo base_url() ?>C_cro/viewlaporanbulanan" class="nav-link <?php if($this->uri->segment(2) == 'viewlaporanbulanan'){echo 'active';} ?>">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Pull Report Monthly</p>
                   <!-- Laporan Bulanan -->
                 </a>
               </li>
             </ul>
           </li>
           <li class="nav-item has-treeview <?php if(isset($page)){if($page == 'Modul'){echo 'menu-open';}} ?>">
             <a href="#" class="nav-link <?php if(isset($page)){if($page == 'Modul'){echo 'active';}} ?>">
               <i class="nav-icon fas fa-table"></i>
               <p>
                 Modul
                 <i class="fas fa-angle-left right"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="<?php echo base_url() ?>C_cro/viewsurveys" class="nav-link <?php if($this->uri->segment(2) == 'viewsurveys' or $this->uri->segment(2) == 'detsurv'){echo 'active';} ?>">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Survey</p>
                 </a>
               </li>
             </ul>
           </li>
           <li class="nav-item has-treeview <?php if(isset($page)){if($page == 'Report'){echo 'menu-open';}} ?>">
             <a href="#" class="nav-link <?php if(isset($page)){if($page == 'Report'){echo 'active';}} ?>">
               <i class="nav-icon fas fa-table"></i>
               <p>
                 Report
                 <i class="fas fa-angle-left right"></i>
               </p>
             </a>
             <ul class="nav nav-treeview">
               <li class="nav-item">
                 <a href="<?php echo base_url() ?>C_cro/viewreportbulanan" class="nav-link <?php if($this->uri->segment(2) == 'viewreportbulanan'){echo 'active';} ?>">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Report Monthly</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?php echo base_url() ?>C_cro/viewreport_area_pertahun" class="nav-link <?php if($this->uri->segment(2) == 'viewreport_area_pertahun'){echo 'active';} ?>">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Report Area Peryear</p>
                 </a>
               </li>
               <li class="nav-item">
                 <a href="<?php echo base_url() ?>C_cro/viewreport_total_data" class="nav-link <?php if($this->uri->segment(2) == 'viewreport_total_data'){echo 'active';} ?>">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Report Daily</p>
                 </a>
               </li>
             </ul>
           </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <?php if(isset($content_page)){
    $this->load->view($content_page);
  } ?>

  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2021 -
    Super Sukses Motor.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 2.0
      <!-- Editing By Aji Firman Syahputra ~ Month May 2021 -->
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url(); ?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/sparklines/sparkline.js"></script> -->
<!-- JQVMap -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script> -->
<!-- jQuery Knob Chart -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script> -->
<!-- daterangepicker -->
<!-- <script src="<?php echo base_url(); ?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>assets/plugins/daterangepicker/daterangepicker.js"></script> -->
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url(); ?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url(); ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url(); ?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>assets/dist/js/demo.js"></script>

<!-- <script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>

<!-- <script src="<?php echo base_url('datatables/jquery/jquery-2.2.3.min.js')?>"></script> -->
<!-- <script src="<?php echo base_url('datatables/js/jquery.dataTables.min.js')?>"></script> -->

<script type="text/javascript">
  var table;
  $(document).ready(function(){
    // $('#example1').DataTable();
    $('#example1').DataTable({
        responsive: true
    });

  });
</script>
<script type="text/javascript">
        function hanyaAngka(evt) {//START CODING LOCK NUMBER IN TEXTBOX
          var charCode = (evt.which) ? evt.which : event.keyCode
           if (charCode > 31 && (charCode < 48 || charCode > 57))
 
            return false;
          return true;
        }//END CODING LOCK NUMBER IN TEXTBOX

    // $('#date_start, #date_end').datepicker({//'#date_from, #date_out'
    //     dateFormat: 'yy-mm-dd'
    // });
</script>
<script>
//start bagian document ready function
$(document).ready(function(){
  alert('Testing Index Version Pages Peryear Survey');
});
//end bagian document ready function
</script>

</body>
</html>
