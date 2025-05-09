<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Customer Relation Officer - Super Sukses Motor</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

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
	<!-- css FOR Copied clipboard by Aji Firman -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/css_tooltip.css?w=<?php echo rand(100,10000); ?>">

  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/rowreorder/1.2.7/css/rowReorder.dataTables.min.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css">


  <style>
    @media (max-width: 576px) { 
      .btndetsurv{
        width:100%;
      }
    }
    /* .parent {
      position: relative;
      top: 0;
      left: 0;
      background-color: white;
    }
    .image1 {
      position: relative;
      top: 0;
      left: 0;
      border: 1px white solid;
    }
    .image2 {
      position: absolute;
      top: 30px;
      left: 30px;
      border: 1px green solid;
    } */
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
      <!-- <div class="parent">
        <img class="image1" src="<?php echo base_url(); ?>assets/logo/logo-ssm.png">
      </div> -->
      <h4 class="brand-text text-center" style="color:white;"><b>CRO SSM<b></h4>
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
           <?php
          $idgrup = $this->session->userdata('idgrup');
          // print_r($idgrup);
          if($idgrup == 1){// || $idgrup == 73 //hanya untuk staff cro dapat klik //$idgrup == 73 ||
          ?>
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
           <?php
          }
          ?>
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
							 <li class="nav-item">
                 <a href="<?php echo base_url() ?>C_cro/viewreport_call_done" class="nav-link <?php if($this->uri->segment(2) == 'viewreport_call_done'){echo 'active';} ?>">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Report Call Done</p>
                 </a>
               </li>
							 <li class="nav-item">
                 <a href="<?php echo base_url() ?>C_cro/viewreport_call_success" class="nav-link <?php if($this->uri->segment(2) == 'viewreport_call_success'){echo 'active';} ?>">
                   <i class="far fa-circle nav-icon"></i>
                   <p>Report Call Success/Not</p>
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

    // function show_hide_detsurv_question(){
    //   var id_respon = $("#id_respon").val();
    //   if(id_respon == '6'){
    //     document.getElementById('div_question').style.display = 'block';
    //     // document.getElementById('div_question').style.display = 'block';
    //   }
    // }

    $("#id_respon").change(function(){
      idrespon = $("#id_respon").val();
      // alert(idrespon);
      if(idrespon == 6){
        // alert(idrespon);
        document.getElementById('div_question').style.display = 'inline-flex';
        document.getElementById('div_harga_dapat').style.display = 'inline-flex';
      }else{
        // alert('no action');
        document.getElementById('div_question').style.display = 'none';
        document.getElementById('div_harga_dapat').style.display = 'none';
      }
    });

		//START FOR PAGE SURVEY
    var area_get = $("#area_get").val();
    var cabang_get = $("#cabang_get").val();
    var tipe_get = $("#tipe_get").val();
    var tipe_motor_get = $("#tipe_motor_get").val();
		//END FOR PAGE SURVEY
		//START FOR PAGE REPORT CALL DONE
		var month_get = $("#month_get").val();
		var year_get = $("#year_get").val();
		//END FOR PAGE REPORT CALL DONE
		//START FOR PAGE REPORT CALL NOT DONE
		var idsurv_get = $("#idsurv_get").val();
		//END FOR PAGE REPORT CALL NOT DONE
    //datatables
    $('#survey').DataTable({ 
        
        "processing": true, 
        "serverSide": true, 
        "stateSave" : true,
        "scrollX": true,
        "order": [], 
         
        "ajax": {
            // "url": "<?php echo site_url('C_cro/get_data_survey')?>",
            // <?php echo base_url(); ?>C_cro/get_report_bulanan/'+area+'/'+date_start+'/'+date_end, '_blank
            "url": "<?php echo base_url(); ?>C_cro/get_data_survey/"+area_get+"/"+cabang_get+"/"+tipe_get+"/"+tipe_motor_get,
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], 
            "orderable": false, 
        },
        ],

    });

		$('#report_call_done').DataTable({ 
        
        "processing": true, 
        "serverSide": true, 
        "order": [], 
         
        "ajax": {
            // "url": "<?php echo site_url('C_cro/get_data_report_call_done')?>",
            "url": "<?php echo base_url(); ?>C_cro/get_data_report_call_done/"+area_get+"/"+cabang_get+"/"+tipe_get+"/"+tipe_motor_get+"/"+month_get+"/"+year_get,
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], 
            "orderable": false, 
        },
        ],

    });

		$('#report_call_not_done').DataTable({ 
        
        "processing": true, 
        "serverSide": true, 
        "order": [], 
         
        "ajax": {
            // "url": "<?php echo site_url('C_cro/get_data_report_call_not_done')?>",
            "url": "<?php echo base_url(); ?>C_cro/get_data_report_call_not_done/"+idsurv_get,
            "type": "POST"
        },

        "columnDefs": [
        { 
            "targets": [ 0 ], 
            "orderable": false, 
        },
        ],

    });

    $('#date_start, #date_end').datepicker({//'#date_from, #date_out'
        dateFormat: 'yy-mm-dd'
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

//START FUNCTION COPY CLIPBOARD WITH BUTTON
function CopyToClipboard(value, showNotification, notificationText) {
		var $temp = $("<input>");
		$("body").append($temp);
		$temp.val(value).select();
		document.execCommand("copy");
		$temp.remove();

		if (typeof showNotification === 'undefined') {
				showNotification = true;
		}
		if (typeof notificationText === 'undefined') {
				notificationText = "Copied to clipboard";
		}

		var notificationTag = $("div.copy-notification");
		if (showNotification && notificationTag.length == 0) {
				notificationTag = $("<div/>", { "class": "copy-notification", text: notificationText });
				$("body").append(notificationTag);

				notificationTag.fadeIn("slow", function () {
						setTimeout(function () {
								notificationTag.fadeOut("slow", function () {
										notificationTag.remove();
								});
						}, 1000);
				});
		}
}
//END FUNCTION COPY CLIPBOARD WITH BUTTON

    // $('#date_start, #date_end').datepicker({//'#date_from, #date_out'
    //     dateFormat: 'yy-mm-dd'
    // });
</script>
<script>
//start bagian document ready function
$(document).ready(function(){

	$("#btn_copy_clipboard_tlp1").click(function (event) {
			event.preventDefault();
			var tlp1 = $('#txt_tlp1_detsurv').val();
			CopyToClipboard(tlp1, true, "Telephone Copied");
	});

	$("#btn_copy_clipboard_tlp2").click(function (event) {
			event.preventDefault();
			var tlp2 = $('#txt_tlp2_detsurv').val();
			CopyToClipboard(tlp2, true, "Telephone Copied");
	});

	$("#btn_copy_clipboard_tlp3").click(function (event) {
			event.preventDefault();
			var tlp3 = $('#txt_tlp3_detsurv').val();
			CopyToClipboard(tlp3, true, "Telephone Copied");
	});

	$("#btn_copy_clipboard_tlp4").click(function (event) {
			event.preventDefault();
			var tlp4 = $('#txt_tlp4_detsurv').val();
			CopyToClipboard(tlp4, true, "Telephone Copied");
	});

    $(".bulan").change(function(){
        a = $(".bulan").val();
        thnskrg = $(".thnskrg").val();
        thnlama = $(".thnlama").val();
        if(a != ''){
          if(a != 12){
            $(".tahun").val(thnskrg);
            $(".thnlama").attr('disabled',true);
          }else{
            $(".tahun").val(thnlama);
            $(".thnlama").attr('disabled',false);
          }
        }else{
          $(".tahun").val("");
        }
      });

//start bagian coding form halaman report survey bulanan
    $('#submitReportBulananSurvey').click(function(e){
        e.preventDefault();
        var area = $('#area').val();
        // var date_start = $('#date_start').val();//not used
        // var date_end = $('#date_end').val();//not used
        var month = $('#month_rpt_bulanan').val();
        var year = $('#year_rpt_bulanan').val();
        if(area == '' || area == '999'){
          alert('Harap Pilih Area Yang Sesuai!');
        }else if(month != '' && year == ''){
          alert('Harap Pilih Tahun Yang Benar!');
        }else if(month == '' && year != ''){
          alert('Harap Pilih Bulan Yang Benar!');
        }else{
          window.open('<?php echo base_url(); ?>C_cro/get_report_bulanan/'+area+'/'+month+'/'+year, '_blank');
        }
        // if(area != '' && date_start != '' && date_end != ''){//jika semua data ada
          // window.open('<?php echo base_url(); ?>C_cro/get_report_bulanan/'+area+'/'+date_start+'/'+date_end, '_blank');
          // window.open('<?php echo base_url(); ?>C_cro/get_report_area_month/'+area+'/'+date_start+'/'+date_end, '_blank');
        // }if else(area != '' && date_start == '' && date_end == ''){
        //   window.open('<?php echo base_url(); ?>C_cro/get_report_bulanan/'+area+, '_blank');
        // }if else(area == '' && date_start != '' && date_end != ''){
        //   window.open('<?php echo base_url(); ?>C_cro/get_report_bulanan/'+date_start+'/'+date_end, '_blank');
        // }else{
        //   window.open('<?php echo base_url(); ?>C_cro/get_report_bulanan/', '_blank');
        // }
        
        // $.post("<?php echo base_url(); ?>C_cro/get_report_bulanan", {area: area, date_start: date_start, date_end: date_end}, function() {
            // $('#content').load("<?php echo base_url(); ?>/message/view");
            // $('#message').val('');
            // window.open();
            // alert(area);
        // });
    });
//end bagian coding form halaman report survey bulanan

//start bagian coding form halaman report survey area pertahun
$('#submitReportAreaPertahun').click(function(e){
    e.preventDefault();
    // var area = $('#area').val();
    // var month = $('#month_rpt_bulanan').val();
    var year = $('#year_rpt_bulanan').val();
    if(year == ''){
      alert('Harap Pilih Year Yang Sesuai!');
    }else{
      // window.open('<?php echo base_url(); ?>C_cro/get_report_area_pertahun/'+year, '_blank');//old not used
      window.open('<?php echo base_url(); ?>C_cro/get_report_area_pertahuns/'+year, '_blank');//used
    }
});
//end bagian coding form halaman report survey area pertahun

//start bagian coding form halaman Report Total Data Call
$('#submitReportTotalDataCall').click(function(e){
    e.preventDefault();
    var area = $('#area_rpt_total_data').val();
    var month = $('#month_rpt_total_data').val();
    var year = $('#year_rpt_total_data').val();
    if(area == '' || area == '999'){
      alert('Harap Pilih Area Yang Sesuai!');
    }else if(year == ''){
      alert('Harap Pilih Year Yang Sesuai!');
    }else if(month == ''){
      alert('Harap Pilih Month Yang Sesuai!');
    }else{
      window.open('<?php echo base_url(); ?>C_cro/report_total_data/'+area+'/'+year+'/'+month, '_blank');
    }
});
//end bagian coding form halaman Report Total Data Call

//start bagian coding form halaman Report Call Success
$('#submitReportCallSuccess').click(function(e){
        e.preventDefault();
        var area = $('#area_rpt_call_success').val();
        // var date_start = $('#date_start').val();//not used
        // var date_end = $('#date_end').val();//not used
				var dates_filter = $('#date_rpt_call_success').val();
        var month = $('#month_rpt_call_success').val();
        var year = $('#year_rpt_call_success').val();
				var id_respon = $('#id_respon_report_call_success').val();
        var category = $('#category_report_call_success').val();
        if(area == '' || area == '999'){
          alert('Harap Pilih Area Yang Sesuai!');
        }else if(month != '' && year == ''){
          alert('Harap Pilih Tahun Yang Benar!');
        }else if(month == '' && year != ''){
          alert('Harap Pilih Bulan Yang Benar!');
        }else{
          window.open('<?php echo base_url(); ?>C_cro/get_report_call_success/'+area+'/'+month+'/'+year+'/'+id_respon+'/'+dates_filter+'/'+category, '_blank');
        }
    });
//end bagian coding form halaman Report Call Success

});
//end bagian document ready function

$("#area").change(function(){
    idarea = $("#area").val();
    $.ajax({
      url : "<?php echo base_url();?>C_cro/getcabangjs",
      method : "POST",
      data : {id: idarea},
      async : false,
      dataType : 'json',
      success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
              html += '<option value='+data[i].id_company+'>'+data[i].nama+'</option>';
          }
          $('#cabang').html(html);
      }
  });
});
$("#area_new").change(function(){
    idarea = $("#area_new").val();
    // alert(idarea);
    $.ajax({
      url : "<?php echo base_url();?>C_cro/getcabangjs",
      method : "POST",
      data : {id: idarea},
      async : false,
      dataType : 'json',
      success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
              html += '<option value='+data[i].id_company+'>'+data[i].nama+'</option>';
          }
          $('#cabang_new').html(html);
      }
  });
});
$("#area_rpt_total_data").change(function(){
    idarea = $("#area_rpt_total_data").val();
    // alert(idarea);
    $.ajax({
      url : "<?php echo base_url();?>C_cro/getcabangjs",
      method : "POST",
      data : {id: idarea},
      async : false,
      dataType : 'json',
      success: function(data){
          var html = '';
          var i;
          for(i=0; i<data.length; i++){
              html += '<option value='+data[i].id_company+'>'+data[i].nama+'</option>';
          }
          $('#cabang_rpt_total_data').html(html);
      }
  });
});
//start button survey new 
$('#filter_survey_new_submit').click(function(e){
      e.preventDefault();
      area_new = $("#area_new").val();
      cabang_new = $("#cabang_new").val();
      tipe_new = $("#tipe_new").val();
      tipe_motor_new = $("#tipe_motor_new").val();
      // alert(tipe_motor_new);
      // window.open('<?php echo base_url(); ?>C_cro/viewsurveys/'+area_new+'/'+cabang_new);
      window.location="<?php echo base_url(); ?>C_cro/viewsurveys/"+area_new+"/"+cabang_new+"/"+tipe_new+"/"+tipe_motor_new;
});
//end button survey new
//start button report call done
$('#filter_rpt_call_done_submit').click(function(e){
      e.preventDefault();
      area_new = $("#area_new").val();
      cabang_new = $("#cabang_new").val();
      tipe_new = $("#tipe_new").val();
      tipe_motor_new = $("#tipe_motor_new").val();
			month_new = $("#month_rpt_call_done").val();
			year_new = $("#year_rpt_call_done").val();
			if(tipe_motor_new != ''){
				FixTipeMotor = tipe_motor_new;
			}else{
				FixTipeMotor = 99;
			}
      // alert(tipe_motor_new);
      // window.open('<?php echo base_url(); ?>C_cro/viewsurveys/'+area_new+'/'+cabang_new);
      window.location="<?php echo base_url(); ?>C_cro/viewreport_call_done/"+area_new+"/"+cabang_new+"/"+tipe_new+"/"+FixTipeMotor+"/"+month_new+"/"+year_new;
});
//end button report call done
//start button back detsurv
$('#btn_back_detsurv_v1').click(function(e){
      e.preventDefault();
      filter_area = $("#filter_area").val();
      filter_cabang = $("#filter_cabang").val();
      filter_tipe = $("#filter_tipe").val();
      filter_tipe_motor = $("#filter_tipe_motor").val();
      if(filter_area != '' || filter_cabang != '' || filter_tipe != '' || filter_tipe_motor != ''){
        window.location="<?php echo base_url(); ?>C_cro/viewsurveys/"+filter_area+"/"+filter_cabang+"/"+filter_tipe+"/"+filter_tipe_motor;
      }else{
        window.location="<?php echo base_url(); ?>C_cro/viewsurveys";
      }
});
//end button back detsurv

//start button back detsurv
$('#btn_back_detcalldone_v1').click(function(e){
      e.preventDefault();
      filter_area = $("#filter_area").val();
      filter_cabang = $("#filter_cabang").val();
      filter_tipe = $("#filter_tipe").val();
      filter_tipe_motor = $("#filter_tipe_motor").val();
      if(filter_area != '' || filter_cabang != '' || filter_tipe != '' || filter_tipe_motor != ''){
        window.location="<?php echo base_url(); ?>C_cro/viewreport_call_done/"+filter_area+"/"+filter_cabang+"/"+filter_tipe+"/"+filter_tipe_motor;
      }else{
        window.location="<?php echo base_url(); ?>C_cro/viewreport_call_done";
      }
});
//end button back detsurv

//start button back page report call not done
$('#btn_back_detcallnotdone_v1').click(function(e){
      e.preventDefault();
      filter_area = $("#filter_area").val();
      filter_cabang = $("#filter_cabang").val();
      filter_tipe = $("#filter_tipe").val();
      filter_tipe_motor = $("#filter_tipe_motor").val();
      // if(filter_area != '' || filter_cabang != '' || filter_tipe != '' || filter_tipe_motor != ''){
        // window.location="<?php echo base_url(); ?>C_cro/viewreport_call_done/"+filter_area+"/"+filter_cabang+"/"+filter_tipe+"/"+filter_tipe_motor;
      // }else{
        window.location="<?php echo base_url(); ?>C_cro/viewreport_call_done";
      // }
});
//end button back page report call not done

//start function for page survey total data call
function get_total_call_success_survey(){
  // alert("Btn Test");
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url();?>C_cro/get_total_call_sukses_survey',
        success: function(data) {
            // alert("Btn Test");
            // $("text_call_sukses_survey").text(data);
            $("#text_call_sukses_survey").val(data);
        }
    });
}
function get_total_call_failed_survey(){
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url();?>C_cro/get_total_call_failed_survey',
        success: function(data) {
            // alert("Btn Test");
            $("#text_call_failed_survey").val(data);
        }
    });
}
function get_total_no_have_tlp_survey(){
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url();?>C_cro/get_total_no_have_tlp_survey',
        success: function(data) {
            // alert("Btn Test");
            $("#text_no_have_tlp_survey").val(data);
        }
    });
}
//end function for page survey total data call
</script>

</body>
</html>
