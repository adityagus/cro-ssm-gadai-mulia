<html>
<head>
	<title>Preview Report All Area Total Data</title>
    <style>
    .tableFixHead thead th { position: sticky; top: 0; z-index: 1; }
    .button-one, .button-two, .button-three{
      text-align: center;
      cursor: pointer;
      font-size:24px;
      margin: 0 0 0 100px;
    }

    /*Button One*/
    .button-one {
      padding:20px 60px;
      outline: none;
      background-color: #27ae60;
      border: none;
      border-radius:5px;
      box-shadow: 0 9px #95a5a6;
    }

    .button-one:hover{
      background-color: #2ecc71;
    }

    .button-one:active {
      background-color: #2ecc71;
      box-shadow: 0 5px #95a5a6;
      transform: translateY(4px);
    }
    </style>
</head>
<body style="width: 100%;">
<!-- <center>
  <?= @$case_all_area ?>
</center> -->
<?php
if(@$case_all_area == '1'){//jika hanya per Area saja
?>
<h1 style="text-align: center;">REPORT DATA TELEPON PERHARI</h1>
<div style="text-align: right;">
  <button class="button-one" style="font-family: Indie Flower;" id="btn_export_excel" name="btn_export_excel">Export to Excel</button>
</div>
<center>
  <?= @$year.'-'.@$month ?>
</center>
<!-- <br> -->
<?php
}else{//jika bukan per Area
?>
<h1 style="text-align: center;">REPORT ALL AREA TELEPON PERHARI</h1>
<div style="text-align: right;">
  <button class="button-one" style="font-family: Indie Flower;" id="btn_export_excel" name="btn_export_excel">Export to Excel</button>
</div>
<center>
  <?= @$year.'-'.@$month ?>
</center>
<!-- <br> -->
<?php
}
?>
<?php
$joinDate = $year.'-'.$month.'-01';
//start to call library
$CI =& get_instance();
$CI->load->library('MyLibrary');
$LibraryMy = new MyLibrary();
$library_get_month = array($LibraryMy->last_day_of_the_month($joinDate));
$lastDay = $library_get_month[0];
$getDay = substr($lastDay,-2);
$library_get_name_month = array($LibraryMy->convert_name_month($month));
$getNameMonth = $library_get_name_month[0];
// print_r($getDay);
// echo "<br>";
// print_r($getNameMonth);
// echo "<br>";
//end to call library
//start parameter to every view all area
$data['page'] = 'Report';
$data['month'] = $month;//date('m');
$data['year'] = $year;//date('Y');
$data['lastDay'] = $lastDay;
$data['getDay'] = $getDay;
$data['nameMonth'] = $getNameMonth;
$data['controller'] = $this;
$data['case_all_area'] = '1';//jika all area
$data['case_per_area'] = '0';//jika all area
//end parameter to every view all area
?>
<div class="tableFixHead">
<?php
//start view Jakarta
$this->load->view('report_total_data_view_jkt',$data);
//end view Jakarta
//start view Kaltim
$this->load->view('report_total_data_view_kaltim',$data);
//end view Kaltim
//start view Kalbar
$this->load->view('report_total_data_view_kalbar',$data);
//end view Kalbar
//start view Kalsel
$this->load->view('report_total_data_view_kalsel',$data);
//end view Kalsel
//start view Sumsel/Palembang
$this->load->view('report_total_data_view_sumsel',$data);
//end view Sumsel/Palembang
?>
</div>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/export/excel/jquery.table2excel.js"></script>
<script type="text/javascript">
// $(function(){
  $('#btn_export_excel').click(function(e){  
    // e.preventDefault();      
        $('#tbl_report_total_data').table2excel({
            exclude: ".noExl",
            name: "Excel Document Name",
            filename: "report_total_data_all_area.xls",
            fileext: ".xls",
            exclude_img: true,
            exclude_links: true,
            exclude_inputs: true,
            preserveColors: true
        });
    });
// });
</script>
</body>
</html>