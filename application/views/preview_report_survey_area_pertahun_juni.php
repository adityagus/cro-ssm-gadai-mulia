<html>
<head>
    <title>Preview Report Survey Area Pertahun</title>
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/5028/basics_3.css'>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css_report/responsive_table_1/style.css">
</head>
<body style="width: 140%;">
<h1 style="text-align: center;">Laporan Survey Semua Area</h1>
<h2 style="text-align: center;">Bulan Juni Tahun <?= @$get_year_filter ?></h2>
<!-- style="padding-left: 5%; padding-right: 5%;" -->
<div >
    <div>
<?php
// print_r($get_year_filter);
// print_r(" || ");
// print_r('JANUARI');
// echo "<br>";
// print_r($get_year_filter);
// for ($i=1; $i <=12; $i++) { 
//   if($i <= 9){
//     $num_month = "0".$i;
//   }else{
//     $num_month = $i;
//   }
//   print_r($num_month);
//   echo "<br>";
// }
$Data_mst_question = $this->db->query("SELECT * FROM mst_quest ORDER BY type ASC")->result();
?>
          <table class="responsive-table" style="width: 100%;">
            <thead>
                <tr>
                    <th scope="col">Area</th>
                    <th scope="col">Kota</th>
                    <th scope="col">Survey</th>
                    <th scope="col">No</th>
                    <th scope="col">Hasil Survey Pembeli & Service</th>
                    <th scope="col">0</th>
                    <th scope="col">1</th>
                    <th scope="col">2</th>
                    <th scope="col">3</th>
                    <th scope="col">4</th>
                    <th scope="col">5</th>
                    <th scope="col">6</th>
                    <th scope="col">7</th>
                    <th scope="col">8</th>
                    <th scope="col">9</th>
                    <th scope="col">10</th>
                    <th scope="col">Total</th>
                    <th scope="col">Total A</th>
                    <th scope="col">Total B</th>
                    <th scope="col">Total C</th>
                    <th scope="col">A</th>
                    <th scope="col">B</th>
                    <th scope="col">C</th>
                    <th scope="col">Result</th>
                    <th scope="col">-</th>
                </tr>
            </thead>
<?php
foreach($DataCompanyAreaCabang as $row_company){
  $KodeKantor = $row_company->kode_kantor;
  $JmlCabang = $row_company->jml_cabang;
  if($KodeKantor == 'HO'){
    continue;
  }
  if($KodeKantor == 'PCO'){
    continue;
  }
  // print_r($row_company->kode_kantor);
  // echo "<br>";
  $DataCabang = $this->db->query("SELECT a.kota AS cabang, a.nama AS cabang_nama, a.kode_kantor FROM mst_company AS a WHERE a.kode_kantor='".$KodeKantor."' ")->result();
  $cek_emptydata = 0;
  foreach($DataCabang as $row_cabang){
    $CabangCompany = $row_cabang->cabang;
    $CabangNama = $row_cabang->cabang_nama;
    // for ($i=1; $i <= 12 ; $i++) { 
    //   if($i <= 9){
    //     $month = "0".$i;
    //   }else{
    //     $month = $i;
    //   }
    //   $join_month_year = $get_year_filter.'-'.$month;
    //   print_r($join_month_year);
    //   echo "<br>";
    // }
    $join_month_year = $get_year_filter.'-06';//for juni
    // print_r($join_month_year);
    // echo "<br>";
    $DataReportBulanan = $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, COUNT(e.type) AS jml_data, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, e.no_type, e.type, e.quest, e.nm_quest, COUNT(IF(d.nilai = '0', 0, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 0, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 0, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 0, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 0, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 0, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 0, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 0, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 0, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 0, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 0, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, (SUM('0')+SUM('3')) AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND b.id_respon = '6' AND a.tgl_telp LIKE '%".$join_month_year."%' GROUP BY d.id_quest ORDER BY a.tipe_cust ASC, e.no_type ASC")->result();
    $DataSemuaArea = $this->db->query("SELECT c.kode_kantor, a.id_comp, c.id_company, c.nama AS nama_cabang, c.kota FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND b.id_respon = '6' AND a.tgl_telp LIKE '%".$join_month_year."%' GROUP BY c.kode_kantor")->result();
    // echo "<br>";
    // echo $this->db->last_query();
    // print_r($DataReportBulanan);
    // die(); 
    // echo "<br>";
    $Array_DataReportBulanan[] = $DataReportBulanan;
    $Array_DataSemuaArea[] = $DataSemuaArea;
    $BulananReportData=$DataReportBulanan;
    foreach($BulananReportData as $row_report){
      $ItemTypeService[] = $row_report->type;
    }
    if($DataReportBulanan == array() || $DataReportBulanan == NULL || $DataReportBulanan == ''){
        // echo "Tidak Ada Data Untuk Cabang ";
        // print_r($row_cabang->cabang);
        // echo "<br>";
    }else{
?>
  <tbody>
<?php
$no=0;
$startTotal=0;
$cek_emptydata_new = 0;
// $noSales = @$SalesJmlData;
// $noService = @$SarviceJmlData;
foreach ($Array_DataSemuaArea as $row_all_area) {
  if($row_all_area != array() || $row_all_area != NULL){
    // print_r($row_all_area[0]->kode_kantor);
    // echo "<br>";
    $Ary_AllArea[] = $row_all_area[0]->kode_kantor;
  }
}
// echo "<br>";
// print_r(array_unique($Ary_AllArea));
$Data_Ary_all_area = array_unique($Ary_AllArea);
foreach($DataReportBulanan as $row){
$cek_emptydata_new++;
$no++;
$Total_A = $row->Kosong + $row->Pertama + $row->Dua + $row->Tiga + $row->Empat + $row->Lima + $row->Enam;
$Total_B = $row->Tujuh + $row->Delapan;
$Total_C = $row->Sembilan + $row->Sepuluh;
$A = $Total_A / $row->Total * 100;
$B = $Total_B / $row->Total * 100;
$C = $Total_C / $row->Total * 100;
$Result = $C - $A;
$Total_ar = array($row->Total);
$TotalPartipisan = $row->Total;
$TotalPartipisan++;
$getTotal = $TotalPartipisan;
$ReportBulanan[] = $row;
$data_total[] = $row->Total;
// if($row->Total == 1 ){
$dataSurvey[] = $row->type;
$dataNo[] = $no;
//start version old
if($row->type == 'SERVICE' && $row->no_type == 1){
  $GetOneTotal = $row->Total;
}elseif($row->type == 'SALES' && $row->no_type == 1){
  $GetOneTotal = $row->Total;
}
else{
  $GetOneTotal = 0;
}
$ArrayGetTotal[] = $GetOneTotal;
//end version old
//start total
  //START FOR JAKARTA
if($row->type == 'SERVICE' && $row->no_type == 1 && $row->kode_kantor == "JKT"){
  $GetOneTotal_jkt = $row->Total;
}elseif($row->type == 'SALES' && $row->no_type == 1 && $row->kode_kantor == "JKT"){
  $GetOneTotal_jkt = $row->Total;
}else{
  $GetOneTotal_jkt = 0;
}
$ArrayGetTotal_jkt[] = $GetOneTotal_jkt;
  //END FOR JAKARTA
  //START FOR KALTIM
if($row->type == 'SERVICE' && $row->no_type == 1 && $row->kode_kantor == "KALTIM"){
  $GetOneTotal_kaltim = $row->Total;
}elseif($row->type == 'SALES' && $row->no_type == 1 && $row->kode_kantor == "KALTIM"){
  $GetOneTotal_kaltim = $row->Total;
}else{
  $GetOneTotal_kaltim = 0;
}
$ArrayGetTotal_kaltim[] = $GetOneTotal_kaltim;
  //END FOR KALTIM
  //START FOR KALBAR
if($row->type == 'SERVICE' && $row->no_type == 1 && $row->kode_kantor == "KALBAR"){
  $GetOneTotal_kalbar = $row->Total;
}elseif($row->type == 'SALES' && $row->no_type == 1 && $row->kode_kantor == "KALBAR"){
  $GetOneTotal_kalbar = $row->Total;
}else{
  $GetOneTotal_kalbar = 0;
}
$ArrayGetTotal_kalbar[] = $GetOneTotal_kalbar;
  //END FOR KALBAR
  //START FOR KALSEL
if($row->type == 'SERVICE' && $row->no_type == 1 && $row->kode_kantor == "KALSEL"){
  $GetOneTotal_kalsel = $row->Total;
}elseif($row->type == 'SALES' && $row->no_type == 1 && $row->kode_kantor == "KALSEL"){
  $GetOneTotal_kalsel = $row->Total;
}else{
  $GetOneTotal_kalsel = 0;
}
$ArrayGetTotal_kalsel[] = $GetOneTotal_kalsel;
  //END FOR KALSEL
  //START FOR SUMSEL
if($row->type == 'SERVICE' && $row->no_type == 1 && $row->kode_kantor == "SUMSEL"){
  $GetOneTotal_sumsel = $row->Total;
}elseif($row->type == 'SALES' && $row->no_type == 1 && $row->kode_kantor == "SUMSEL"){
  $GetOneTotal_sumsel = $row->Total;
}else{
  $GetOneTotal_sumsel = 0;
}
$ArrayGetTotal_sumsel[] = $GetOneTotal_sumsel;
  //END FOR SUMSEL
//end total
//start rata - rata
  //START FOR JAKARTA
    //start for service
if($row->type == 'SERVICE' && $row->no_type == '1' && $row->kode_kantor == "JKT"){
  $GetServiceNoType_1_jkt = $Total_C;
}else{
  $GetServiceNoType_1_jkt = 0;
}
$Array_GetServiceNoType_1_jkt[] = $GetServiceNoType_1_jkt;
if($row->type == 'SERVICE' && $row->no_type == '2' && $row->kode_kantor == "JKT"){
  $GetServiceNoType_2_jkt = $Total_C;
}else{
  $GetServiceNoType_2_jkt = 0;
}
$Array_GetServiceNoType_2_jkt[] = $GetServiceNoType_2_jkt;
if($row->type == 'SERVICE' && $row->no_type == '3' && $row->kode_kantor == "JKT"){
  $GetServiceNoType_3_jkt = $Total_C;
}else{
  $GetServiceNoType_3_jkt = 0;
}
$Array_GetServiceNoType_3_jkt[] = $GetServiceNoType_3_jkt;
if($row->type == 'SERVICE' && $row->no_type == '4' && $row->kode_kantor == "JKT"){
  $GetServiceNoType_4_jkt = $Total_C;
}else{
  $GetServiceNoType_4_jkt = 0;
}
$Array_GetServiceNoType_4_jkt[] = $GetServiceNoType_4_jkt;
  //end for service
  //start for sales
if($row->type == 'SALES' && $row->no_type == '1' && $row->kode_kantor == "JKT"){
  $GetSalesNoType_1_jkt = $Total_C;
}else{
  $GetSalesNoType_1_jkt = 0;
}
$Array_GetSalesNoType_1_jkt[] = $GetSalesNoType_1_jkt;
if($row->type == 'SALES' && $row->no_type == '2' && $row->kode_kantor == "JKT"){
  $GetSalesNoType_2_jkt = $Total_C;
}else{
  $GetSalesNoType_2_jkt = 0;
}
$Array_GetSalesNoType_2_jkt[] = $GetSalesNoType_2_jkt;
if($row->type == 'SALES' && $row->no_type == '3' && $row->kode_kantor == "JKT"){
  $GetSalesNoType_3_jkt = $Total_C;
}else{
  $GetSalesNoType_3_jkt = 0;
}
$Array_GetSalesNoType_3_jkt[] = $GetSalesNoType_3_jkt;
if($row->type == 'SALES' && $row->no_type == '4' && $row->kode_kantor == "JKT"){
  $GetSalesNoType_4_jkt = $Total_C;
}else{
  $GetSalesNoType_4_jkt = 0;
}
$Array_GetSalesNoType_4_jkt[] = $GetSalesNoType_4_jkt;
    //end for sales
  //START FOR JAKARTA
  //START FOR KALTIM
    //start for service
if($row->type == 'SERVICE' && $row->no_type == '1' && $row->kode_kantor == "KALTIM"){
  $GetServiceNoType_1_kaltim = $Total_C;
}else{
  $GetServiceNoType_1_kaltim = 0;
}
$Array_GetServiceNoType_1_kaltim[] = $GetServiceNoType_1_kaltim;
if($row->type == 'SERVICE' && $row->no_type == '2' && $row->kode_kantor == "KALTIM"){
  $GetServiceNoType_2_kaltim = $Total_C;
}else{
  $GetServiceNoType_2_kaltim = 0;
}
$Array_GetServiceNoType_2_kaltim[] = $GetServiceNoType_2_kaltim;
if($row->type == 'SERVICE' && $row->no_type == '3' && $row->kode_kantor == "KALTIM"){
  $GetServiceNoType_3_kaltim = $Total_C;
}else{
  $GetServiceNoType_3_kaltim = 0;
}
$Array_GetServiceNoType_3_kaltim[] = $GetServiceNoType_3_kaltim;
if($row->type == 'SERVICE' && $row->no_type == '4' && $row->kode_kantor == "KALTIM"){
  $GetServiceNoType_4_kaltim = $Total_C;
}else{
  $GetServiceNoType_4_kaltim = 0;
}
$Array_GetServiceNoType_4_kaltim[] = $GetServiceNoType_4_kaltim;
  //end for service
  //start for sales
if($row->type == 'SALES' && $row->no_type == '1' && $row->kode_kantor == "KALTIM"){
  $GetSalesNoType_1_kaltim = $Total_C;
}else{
  $GetSalesNoType_1_kaltim = 0;
}
$Array_GetSalesNoType_1_kaltim[] = $GetSalesNoType_1_kaltim;
if($row->type == 'SALES' && $row->no_type == '2' && $row->kode_kantor == "KALTIM"){
  $GetSalesNoType_2_kaltim = $Total_C;
}else{
  $GetSalesNoType_2_kaltim = 0;
}
$Array_GetSalesNoType_2_kaltim[] = $GetSalesNoType_2_kaltim;
if($row->type == 'SALES' && $row->no_type == '3' && $row->kode_kantor == "KALTIM"){
  $GetSalesNoType_3_kaltim = $Total_C;
}else{
  $GetSalesNoType_3_kaltim = 0;
}
$Array_GetSalesNoType_3_kaltim[] = $GetSalesNoType_3_kaltim;
if($row->type == 'SALES' && $row->no_type == '4' && $row->kode_kantor == "KALTIM"){
  $GetSalesNoType_4_kaltim = $Total_C;
}else{
  $GetSalesNoType_4_kaltim = 0;
}
$Array_GetSalesNoType_4_kaltim[] = $GetSalesNoType_4_kaltim;
    //end for sales
  //START FOR KALTIM
  //START FOR KALBAR
    //start for service
if($row->type == 'SERVICE' && $row->no_type == '1' && $row->kode_kantor == "KALBAR"){
  $GetServiceNoType_1_kalbar = $Total_C;
}else{
  $GetServiceNoType_1_kalbar = 0;
}
$Array_GetServiceNoType_1_kalbar[] = $GetServiceNoType_1_kalbar;
if($row->type == 'SERVICE' && $row->no_type == '2' && $row->kode_kantor == "KALBAR"){
  $GetServiceNoType_2_kalbar = $Total_C;
}else{
  $GetServiceNoType_2_kalbar = 0;
}
$Array_GetServiceNoType_2_kalbar[] = $GetServiceNoType_2_kalbar;
if($row->type == 'SERVICE' && $row->no_type == '3' && $row->kode_kantor == "KALBAR"){
  $GetServiceNoType_3_kalbar = $Total_C;
}else{
  $GetServiceNoType_3_kalbar = 0;
}
$Array_GetServiceNoType_3_kalbar[] = $GetServiceNoType_3_kalbar;
if($row->type == 'SERVICE' && $row->no_type == '4' && $row->kode_kantor == "KALBAR"){
  $GetServiceNoType_4_kalbar = $Total_C;
}else{
  $GetServiceNoType_4_kalbar = 0;
}
$Array_GetServiceNoType_4_kalbar[] = $GetServiceNoType_4_kalbar;
  //end for service
  //start for sales
if($row->type == 'SALES' && $row->no_type == '1' && $row->kode_kantor == "KALBAR"){
  $GetSalesNoType_1_kalbar = $Total_C;
}else{
  $GetSalesNoType_1_kalbar = 0;
}
$Array_GetSalesNoType_1_kalbar[] = $GetSalesNoType_1_kalbar;
if($row->type == 'SALES' && $row->no_type == '2' && $row->kode_kantor == "KALBAR"){
  $GetSalesNoType_2_kalbar = $Total_C;
}else{
  $GetSalesNoType_2_kalbar = 0;
}
$Array_GetSalesNoType_2_kalbar[] = $GetSalesNoType_2_kalbar;
if($row->type == 'SALES' && $row->no_type == '3' && $row->kode_kantor == "KALBAR"){
  $GetSalesNoType_3_kalbar = $Total_C;
}else{
  $GetSalesNoType_3_kalbar = 0;
}
$Array_GetSalesNoType_3_kalbar[] = $GetSalesNoType_3_kalbar;
if($row->type == 'SALES' && $row->no_type == '4' && $row->kode_kantor == "KALBAR"){
  $GetSalesNoType_4_kalbar = $Total_C;
}else{
  $GetSalesNoType_4_kalbar = 0;
}
$Array_GetSalesNoType_4_kalbar[] = $GetSalesNoType_4_kalbar;
    //end for sales
  //START FOR KALBAR
  //START FOR KALSEL
    //start for service
if($row->type == 'SERVICE' && $row->no_type == '1' && $row->kode_kantor == "KALSEL"){
  $GetServiceNoType_1_kalsel = $Total_C;
}else{
  $GetServiceNoType_1_kalsel = 0;
}
$Array_GetServiceNoType_1_kalsel[] = $GetServiceNoType_1_kalsel;
if($row->type == 'SERVICE' && $row->no_type == '2' && $row->kode_kantor == "KALSEL"){
  $GetServiceNoType_2_kalsel = $Total_C;
}else{
  $GetServiceNoType_2_kalsel = 0;
}
$Array_GetServiceNoType_2_kalsel[] = $GetServiceNoType_2_kalsel;
if($row->type == 'SERVICE' && $row->no_type == '3' && $row->kode_kantor == "KALSEL"){
  $GetServiceNoType_3_kalsel = $Total_C;
}else{
  $GetServiceNoType_3_kalsel = 0;
}
$Array_GetServiceNoType_3_kalsel[] = $GetServiceNoType_3_kalsel;
if($row->type == 'SERVICE' && $row->no_type == '4' && $row->kode_kantor == "KALSEL"){
  $GetServiceNoType_4_kalsel = $Total_C;
}else{
  $GetServiceNoType_4_kalsel = 0;
}
$Array_GetServiceNoType_4_kalsel[] = $GetServiceNoType_4_kalsel;
  //end for service
  //start for sales
if($row->type == 'SALES' && $row->no_type == '1' && $row->kode_kantor == "KALSEL"){
  $GetSalesNoType_1_kalsel = $Total_C;
}else{
  $GetSalesNoType_1_kalsel = 0;
}
$Array_GetSalesNoType_1_kalsel[] = $GetSalesNoType_1_kalsel;
if($row->type == 'SALES' && $row->no_type == '2' && $row->kode_kantor == "KALSEL"){
  $GetSalesNoType_2_kalsel = $Total_C;
}else{
  $GetSalesNoType_2_kalsel = 0;
}
$Array_GetSalesNoType_2_kalsel[] = $GetSalesNoType_2_kalsel;
if($row->type == 'SALES' && $row->no_type == '3' && $row->kode_kantor == "KALSEL"){
  $GetSalesNoType_3_kalsel = $Total_C;
}else{
  $GetSalesNoType_3_kalsel = 0;
}
$Array_GetSalesNoType_3_kalsel[] = $GetSalesNoType_3_kalsel;
if($row->type == 'SALES' && $row->no_type == '4' && $row->kode_kantor == "KALSEL"){
  $GetSalesNoType_4_kalsel = $Total_C;
}else{
  $GetSalesNoType_4_kalsel = 0;
}
$Array_GetSalesNoType_4_kalsel[] = $GetSalesNoType_4_kalsel;
    //end for sales
  //START FOR KALSEL
  //START FOR SUMSEL/PALEMBANG
    //start for service
if($row->type == 'SERVICE' && $row->no_type == '1' && $row->kode_kantor == "SUMSEL"){
  $GetServiceNoType_1_sumsel = $Total_C;
}else{
  $GetServiceNoType_1_sumsel = 0;
}
$Array_GetServiceNoType_1_sumsel[] = $GetServiceNoType_1_sumsel;
if($row->type == 'SERVICE' && $row->no_type == '2' && $row->kode_kantor == "SUMSEL"){
  $GetServiceNoType_2_sumsel = $Total_C;
}else{
  $GetServiceNoType_2_sumsel = 0;
}
$Array_GetServiceNoType_2_sumsel[] = $GetServiceNoType_2_sumsel;
if($row->type == 'SERVICE' && $row->no_type == '3' && $row->kode_kantor == "SUMSEL"){
  $GetServiceNoType_3_sumsel = $Total_C;
}else{
  $GetServiceNoType_3_sumsel = 0;
}
$Array_GetServiceNoType_3_sumsel[] = $GetServiceNoType_3_sumsel;
if($row->type == 'SERVICE' && $row->no_type == '4' && $row->kode_kantor == "SUMSEL"){
  $GetServiceNoType_4_sumsel = $Total_C;
}else{
  $GetServiceNoType_4_sumsel = 0;
}
$Array_GetServiceNoType_4_sumsel[] = $GetServiceNoType_4_sumsel;
  //end for service
  //start for sales
if($row->type == 'SALES' && $row->no_type == '1' && $row->kode_kantor == "SUMSEL"){
  $GetSalesNoType_1_sumsel = $Total_C;
}else{
  $GetSalesNoType_1_sumsel = 0;
}
$Array_GetSalesNoType_1_sumsel[] = $GetSalesNoType_1_sumsel;
if($row->type == 'SALES' && $row->no_type == '2' && $row->kode_kantor == "SUMSEL"){
  $GetSalesNoType_2_sumsel = $Total_C;
}else{
  $GetSalesNoType_2_sumsel = 0;
}
$Array_GetSalesNoType_2_sumsel[] = $GetSalesNoType_2_sumsel;
if($row->type == 'SALES' && $row->no_type == '3' && $row->kode_kantor == "SUMSEL"){
  $GetSalesNoType_3_sumsel = $Total_C;
}else{
  $GetSalesNoType_3_sumsel = 0;
}
$Array_GetSalesNoType_3_sumsel[] = $GetSalesNoType_3_sumsel;
if($row->type == 'SALES' && $row->no_type == '4' && $row->kode_kantor == "SUMSEL"){
  $GetSalesNoType_4_sumsel = $Total_C;
}else{
  $GetSalesNoType_4_sumsel = 0;
}
$Array_GetSalesNoType_4_sumsel[] = $GetSalesNoType_4_sumsel;
    //end for sales
  //START FOR SUMSEL/PALEMBANG
//end rata - rata
// print_r($dataSurvey);
foreach ($dataSurvey as $row_type_survey) {
  $ItemSurvey = $row_type_survey;
  // $DataItem[] = $ItemSurvey;
  // print_r($ItemSurvey);
}
foreach ($dataNo as $row_no) {
  $ItemRowNo = $row_no;
}
$ArrayItemSurvey = array($no => $ItemSurvey,);
$SurveyItemArray[] = $ArrayItemSurvey;
?>

  <tr>
    <td data-title="Area"><?php echo $row->kode_kantor ?></td>
    <td data-title="Kota"><?php echo $row->nama_cabang ?></td>
    <td data-title="Survey"><?php echo $row->type ?></td>
    <td data-title="No"><?php echo $row->no_type ?></td>
    <td data-title="Hasil Survey Pembeli & Service" style="text-align: left;"><?php echo $row->nm_quest ?></td>
    <td data-title="0"><?php echo $row->Kosong ?></td>
    <td data-title="1"><?php echo $row->Pertama ?></td>
    <td data-title="2"><?php echo $row->Dua ?></td>
    <td data-title="3"><?php echo $row->Tiga ?></td>
    <td data-title="4"><?php echo $row->Empat ?></td>
    <td data-title="5"><?php echo $row->Lima ?></td>
    <td data-title="6"><?php echo $row->Enam ?></td>
    <td data-title="7"><?php echo $row->Tujuh ?></td>
    <td data-title="8"><?php echo $row->Delapan ?></td>
    <td data-title="9"><?php echo $row->Sembilan ?></td>
    <td data-title="10"><?php echo $row->Sepuluh ?></td>
    <td data-title="Total"><?php echo $row->Total ?></td>
    <td data-title="Total A"><?php echo $Total_A ?></td>
    <td data-title="Total B"><?php echo $Total_B ?></td>
    <td data-title="Total C"><?php echo $Total_C ?></td>
    <td data-title="A"><?php echo round($A)."%" ?></td>
    <td data-title="B"><?php echo round($B)."%" ?></td>
    <td data-title="C"><?php echo round($C)."%" ?></td>
    <td data-title="Result"><?php echo round($Result)."%" ?></td>
    <?php
    if($row->type == 'SALES' && $row->no_type == '1'){
    ?>
      <td data-title="-" style="background-color: yellow;"><?= @$row->Total ?></td>
    <?php
    }elseif($row->type == 'SERVICE' && $row->no_type == '1'){
    ?>
      <td data-title="-" style="background-color: yellow;"><?= @$row->Total ?></td>
    <?php
    }else{
    ?>
      <td data-title="-">-</td>
    <?php
    }
    ?>
  </tr>

<?php
    }           
?>
  </tbody>
<!-- </table> -->
<?php
  }
  }
}
// }//for month
?>
<!-- </table> -->
<br>
<?php
//start coding bagian hitung Rata-Rata
// print_r(@$cek_emptydata_new);//tes cek empty data
// print_r($Array_GetServiceNoType_1);
if(@$cek_emptydata_new == 0){
  echo "<center><p style='color:red;'>Tidak Ada Laporan Survey Semua Area Pada Bulan Juni.</p></center>";
//start coding bagian hitung Rata-Rata
  //start for service
@$Rata_rata_ServiceNoType_1 = 0;
@$Rata_rata_ServiceNoType_2 = 0;
@$Rata_rata_ServiceNoType_3 = 0;
@$Rata_rata_ServiceNoType_4 = 0;
  //end for service
  //start for sales
@$Rata_rata_SalesNoType_1 = 0;
@$Rata_rata_SalesNoType_2 = 0;
@$Rata_rata_SalesNoType_3 = 0;
@$Rata_rata_SalesNoType_4 = 0;
  //end for sales
//start coding bagian hitung Rata-Rata
?>
</table>
<!-- <input type="hidden" name="txt_Rata_rata_ServiceNoType_1" id="txt_Rata_rata_ServiceNoType_1" value="<?= @$Rata_rata_ServiceNoType_1 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_2" id="txt_Rata_rata_ServiceNoType_2" value="<?= @$Rata_rata_ServiceNoType_2 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_3" id="txt_Rata_rata_ServiceNoType_3" value="<?= @$Rata_rata_ServiceNoType_3 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_4" id="txt_Rata_rata_ServiceNoType_4" value="<?= @$Rata_rata_ServiceNoType_4 ?>" readonly>
<br>
<input type="hidden" name="txt_Rata_rata_SalesNoType_1" id="txt_Rata_rata_SalesNoType_1" value="<?= @$Rata_rata_SalesNoType_1 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_2" id="txt_Rata_rata_SalesNoType_2" value="<?= @$Rata_rata_SalesNoType_2 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_3" id="txt_Rata_rata_SalesNoType_3" value="<?= @$Rata_rata_SalesNoType_3 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_4" id="txt_Rata_rata_SalesNoType_4" value="<?= @$Rata_rata_SalesNoType_4 ?>" readonly> -->
<?php
}else{
array_unshift($Array_DataReportBulanan,"");
unset($Array_DataReportBulanan[0]);
@$SumArrayGetTotal = array_sum($ArrayGetTotal);
//start sum ArrayGetTotal ALl Area
@$SumArrayGetTotal_jkt = array_sum($ArrayGetTotal_jkt);
@$SumArrayGetTotal_kaltim = array_sum($ArrayGetTotal_kaltim);
@$SumArrayGetTotal_kalbar = array_sum($ArrayGetTotal_kalbar);
@$SumArrayGetTotal_kalsel = array_sum($ArrayGetTotal_kalsel);
@$SumArrayGetTotal_sumsel = array_sum($ArrayGetTotal_sumsel);
//end sum ArrayGetTotal ALl Area
?>
      <!-- <table border="1" style="width: 100%;">
          <tr style="text-align: center;">
            <td colspan="">
                Total ALL
            </td>
            <td>
                <?= @$SumArrayGetTotal ?>
            </td>
          </tr>
          <tr style="text-align: center;">
            <td colspan="">
                Rata - Rata (SERVICE -> Service Counter)
            </td>
            <td>
                <?= round(@$Rata_rata_ServiceNoType_1, 1).'%' ?>
            </td>
          <tr style="text-align: center;">
            <td colspan="">
                Rata - Rata (SERVICE -> Hasil Service)
            </td>
            <td>
                <?= round(@$SumArray_GetServiceNoType_2, 2).'%' ?>
            </td>
          </tr>
          <tr style="text-align: center;">
            <td colspan="">
                Rata - Rata (SERVICE -> Kondisi Showroom dan Bengkel)
            </td>
            <td>
                <?= round(@$SumArray_GetServiceNoType_3, 2).'%' ?>
            </td>
          </tr>
          <tr style="text-align: center;">
            <td colspan="">
                Rata - Rata (SERVICE -> Merekomendasikan SSM)
            </td>
            <td>
                <?= round(@$SumArray_GetServiceNoType_4, 2).'%' ?>
            </td>
          </tr>
          <tr style="text-align: center;">
            <td colspan="">
                Rata - Rata (SALES -> TIM SALES)
            </td>
            <td>
                <?= round(@$Rata_rata_SalesNoType_1, 2).'%' ?>
            </td>
          </tr>
          <tr style="text-align: center;">
            <td colspan="">
                Rata - Rata (SALES -> Kondisi Motor)
            </td>
            <td>
                <?= round(@$Rata_rata_SalesNoType_2, 2).'%' ?>
            </td>
          </tr>
          <tr style="text-align: center;">
            <td colspan="">
                Rata - Rata (SALES -> Kondisi Showroom)
            </td>
            <td>
                <?= round(@$Rata_rata_SalesNoType_3, 2).'%' ?>
            </td>
          </tr>
          <tr style="text-align: center;">
            <td colspan="">
                Rata - Rata (SALES -> Merekomendasikan SSM)
            </td>
            <td>
                <?= round(@$Rata_rata_SalesNoType_4, 2).'%' ?>
            </td>
          </tr>
        </table> -->
        <!-- <br> -->
        <!-- <table border="1" style="width: 50%;"> -->
        <!-- <table class="responsive-table" style="width: 15%;"> -->
            <!-- <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Total All</th>
                </tr>
            </thead> -->
            <tbody>
                <tr>
                    <td data-title="Summary" colspan="24" style="text-align: left;">Total All</td>
                    <td data-title="Total All" style="background-color: yellow;"><?= @$SumArrayGetTotal ?></td>
                </tr>
            </tbody>
        </table>
        <br>
<?php
//start version old
  //start for service
@$SumArray_GetServiceNoType_1 = array_sum($Array_GetServiceNoType_1);
@$Rata_rata_ServiceNoType_1 = $SumArray_GetServiceNoType_1/$SumArrayGetTotal;
@$SumArray_GetServiceNoType_2 = array_sum($Array_GetServiceNoType_2);
@$Rata_rata_ServiceNoType_2 = $SumArray_GetServiceNoType_2/$SumArrayGetTotal;
@$SumArray_GetServiceNoType_3 = array_sum($Array_GetServiceNoType_3);
@$Rata_rata_ServiceNoType_3 = $SumArray_GetServiceNoType_3/$SumArrayGetTotal;
@$SumArray_GetServiceNoType_4 = array_sum($Array_GetServiceNoType_4);
@$Rata_rata_ServiceNoType_4 = $SumArray_GetServiceNoType_4/$SumArrayGetTotal;
  //end for service
  //start for sales
@$SumArray_GetSalesNoType_1 = array_sum($Array_GetSalesNoType_1);
@$Rata_rata_SalesNoType_1 = $SumArray_GetSalesNoType_1/$SumArrayGetTotal;
@$SumArray_GetSalesNoType_2 = array_sum($Array_GetSalesNoType_2);
@$Rata_rata_SalesNoType_2 = $SumArray_GetSalesNoType_2/$SumArrayGetTotal;
@$SumArray_GetSalesNoType_3 = array_sum($Array_GetSalesNoType_3);
@$Rata_rata_SalesNoType_3 = $SumArray_GetSalesNoType_3/$SumArrayGetTotal;
@$SumArray_GetSalesNoType_4 = array_sum($Array_GetSalesNoType_4);
@$Rata_rata_SalesNoType_4 = $SumArray_GetSalesNoType_4/$SumArrayGetTotal;
  //end for sales
//end version old
//start coding bagian hitung Rata-Rata
  //START FOR JAKARTA
    //start for service
@$SumArray_GetServiceNoType_1_jkt = array_sum($Array_GetServiceNoType_1_jkt);
@$Rata_rata_ServiceNoType_1_jkt = $SumArray_GetServiceNoType_1_jkt/$SumArrayGetTotal_jkt;
@$SumArray_GetServiceNoType_2_jkt = array_sum($Array_GetServiceNoType_2_jkt);
@$Rata_rata_ServiceNoType_2_jkt = $SumArray_GetServiceNoType_2_jkt/$SumArrayGetTotal_jkt;
@$SumArray_GetServiceNoType_3_jkt = array_sum($Array_GetServiceNoType_3_jkt);
@$Rata_rata_ServiceNoType_3_jkt = $SumArray_GetServiceNoType_3_jkt/$SumArrayGetTotal_jkt;
@$SumArray_GetServiceNoType_4_jkt = array_sum($Array_GetServiceNoType_4_jkt);
@$Rata_rata_ServiceNoType_4_jkt = $SumArray_GetServiceNoType_4_jkt/$SumArrayGetTotal_jkt;
    //end for service
    //start for sales
@$SumArray_GetSalesNoType_1_jkt = array_sum($Array_GetSalesNoType_1_jkt);
@$Rata_rata_SalesNoType_1_jkt = $SumArray_GetSalesNoType_1_jkt/$SumArrayGetTotal_jkt;
@$SumArray_GetSalesNoType_2_jkt = array_sum($Array_GetSalesNoType_2_jkt);
@$Rata_rata_SalesNoType_2_jkt = $SumArray_GetSalesNoType_2_jkt/$SumArrayGetTotal_jkt;
@$SumArray_GetSalesNoType_3_jkt = array_sum($Array_GetSalesNoType_3_jkt);
@$Rata_rata_SalesNoType_3_jkt = $SumArray_GetSalesNoType_3_jkt/$SumArrayGetTotal_jkt;
@$SumArray_GetSalesNoType_4_jkt = array_sum($Array_GetSalesNoType_4_jkt);
@$Rata_rata_SalesNoType_4_jkt = $SumArray_GetSalesNoType_4_jkt/$SumArrayGetTotal_jkt;
    //end for sales
  //END FOR JAKARTA
  //START FOR KALTIM
    //start for service
@$SumArray_GetServiceNoType_1_kaltim = array_sum($Array_GetServiceNoType_1_kaltim);
@$Rata_rata_ServiceNoType_1_kaltim = $SumArray_GetServiceNoType_1_kaltim/$SumArrayGetTotal_kaltim;
@$SumArray_GetServiceNoType_2_kaltim = array_sum($Array_GetServiceNoType_2_kaltim);
@$Rata_rata_ServiceNoType_2_kaltim = $SumArray_GetServiceNoType_2_kaltim/$SumArrayGetTotal_kaltim;
@$SumArray_GetServiceNoType_3_kaltim = array_sum($Array_GetServiceNoType_3_kaltim);
@$Rata_rata_ServiceNoType_3_kaltim = $SumArray_GetServiceNoType_3_kaltim/$SumArrayGetTotal_kaltim;
@$SumArray_GetServiceNoType_4_kaltim = array_sum($Array_GetServiceNoType_4_kaltim);
@$Rata_rata_ServiceNoType_4_kaltim = $SumArray_GetServiceNoType_4_kaltim/$SumArrayGetTotal_kaltim;
    //end for service
    //start for sales
@$SumArray_GetSalesNoType_1_kaltim = array_sum($Array_GetSalesNoType_1_kaltim);
@$Rata_rata_SalesNoType_1_kaltim = $SumArray_GetSalesNoType_1_kaltim/$SumArrayGetTotal_kaltim;
@$SumArray_GetSalesNoType_2_kaltim = array_sum($Array_GetSalesNoType_2_kaltim);
@$Rata_rata_SalesNoType_2_kaltim = $SumArray_GetSalesNoType_2_kaltim/$SumArrayGetTotal_kaltim;
@$SumArray_GetSalesNoType_3_kaltim = array_sum($Array_GetSalesNoType_3_kaltim);
@$Rata_rata_SalesNoType_3_kaltim = $SumArray_GetSalesNoType_3_kaltim/$SumArrayGetTotal_kaltim;
@$SumArray_GetSalesNoType_4_kaltim = array_sum($Array_GetSalesNoType_4_kaltim);
@$Rata_rata_SalesNoType_4_kaltim = $SumArray_GetSalesNoType_4_kaltim/$SumArrayGetTotal_kaltim;
    //end for sales
  //END FOR KALTIM
  //START FOR KALBAR
    //start for service
@$SumArray_GetServiceNoType_1_kalbar = array_sum($Array_GetServiceNoType_1_kalbar);
@$Rata_rata_ServiceNoType_1_kalbar = $SumArray_GetServiceNoType_1_kalbar/$SumArrayGetTotal_kalbar;
@$SumArray_GetServiceNoType_2_kalbar = array_sum($Array_GetServiceNoType_2_kalbar);
@$Rata_rata_ServiceNoType_2_kalbar = $SumArray_GetServiceNoType_2_kalbar/$SumArrayGetTotal_kalbar;
@$SumArray_GetServiceNoType_3_kalbar = array_sum($Array_GetServiceNoType_3_kalbar);
@$Rata_rata_ServiceNoType_3_kalbar = $SumArray_GetServiceNoType_3_kalbar/$SumArrayGetTotal_kalbar;
@$SumArray_GetServiceNoType_4_kalbar = array_sum($Array_GetServiceNoType_4_kalbar);
@$Rata_rata_ServiceNoType_4_kalbar = $SumArray_GetServiceNoType_4_kalbar/$SumArrayGetTotal_kalbar;
    //end for service
    //start for sales
@$SumArray_GetSalesNoType_1_kalbar = array_sum($Array_GetSalesNoType_1_kalbar);
@$Rata_rata_SalesNoType_1_kalbar = $SumArray_GetSalesNoType_1_kalbar/$SumArrayGetTotal_kalbar;
@$SumArray_GetSalesNoType_2_kalbar = array_sum($Array_GetSalesNoType_2_kalbar);
@$Rata_rata_SalesNoType_2_kalbar = $SumArray_GetSalesNoType_2_kalbar/$SumArrayGetTotal_kalbar;
@$SumArray_GetSalesNoType_3_kalbar = array_sum($Array_GetSalesNoType_3_kalbar);
@$Rata_rata_SalesNoType_3_kalbar = $SumArray_GetSalesNoType_3_kalbar/$SumArrayGetTotal_kalbar;
@$SumArray_GetSalesNoType_4_kalbar = array_sum($Array_GetSalesNoType_4_kalbar);
@$Rata_rata_SalesNoType_4_kalbar = $SumArray_GetSalesNoType_4_kalbar/$SumArrayGetTotal_kalbar;
    //end for sales
  //END FOR KALBAR
  //START FOR KALSEL
    //start for service
@$SumArray_GetServiceNoType_1_kalsel = array_sum($Array_GetServiceNoType_1_kalsel);
@$Rata_rata_ServiceNoType_1_kalsel = $SumArray_GetServiceNoType_1_kalsel/$SumArrayGetTotal_kalsel;
@$SumArray_GetServiceNoType_2_kalsel = array_sum($Array_GetServiceNoType_2_kalsel);
@$Rata_rata_ServiceNoType_2_kalsel = $SumArray_GetServiceNoType_2_kalsel/$SumArrayGetTotal_kalsel;
@$SumArray_GetServiceNoType_3_kalsel = array_sum($Array_GetServiceNoType_3_kalsel);
@$Rata_rata_ServiceNoType_3_kalsel = $SumArray_GetServiceNoType_3_kalsel/$SumArrayGetTotal_kalsel;
@$SumArray_GetServiceNoType_4_kalsel = array_sum($Array_GetServiceNoType_4_kalsel);
@$Rata_rata_ServiceNoType_4_kalsel = $SumArray_GetServiceNoType_4_kalsel/$SumArrayGetTotal_kalsel;
    //end for service
    //start for sales
@$SumArray_GetSalesNoType_1_kalsel = array_sum($Array_GetSalesNoType_1_kalsel);
@$Rata_rata_SalesNoType_1_kalsel = $SumArray_GetSalesNoType_1_kalsel/$SumArrayGetTotal_kalsel;
@$SumArray_GetSalesNoType_2_kalsel = array_sum($Array_GetSalesNoType_2_kalsel);
@$Rata_rata_SalesNoType_2_kalsel = $SumArray_GetSalesNoType_2_kalsel/$SumArrayGetTotal_kalsel;
@$SumArray_GetSalesNoType_3_kalsel = array_sum($Array_GetSalesNoType_3_kalsel);
@$Rata_rata_SalesNoType_3_kalsel = $SumArray_GetSalesNoType_3_kalsel/$SumArrayGetTotal_kalsel;
@$SumArray_GetSalesNoType_4_kalsel = array_sum($Array_GetSalesNoType_4_kalsel);
@$Rata_rata_SalesNoType_4_kalsel = $SumArray_GetSalesNoType_4_kalsel/$SumArrayGetTotal_kalsel;
    //end for sales
  //END FOR KALSEL
  //START FOR SUMSEL
    //start for service
@$SumArray_GetServiceNoType_1_sumsel = array_sum($Array_GetServiceNoType_1_sumsel);
@$Rata_rata_ServiceNoType_1_sumsel = $SumArray_GetServiceNoType_1_sumsel/$SumArrayGetTotal_sumsel;
@$SumArray_GetServiceNoType_2_sumsel = array_sum($Array_GetServiceNoType_2_sumsel);
@$Rata_rata_ServiceNoType_2_sumsel = $SumArray_GetServiceNoType_2_sumsel/$SumArrayGetTotal_sumsel;
@$SumArray_GetServiceNoType_3_sumsel = array_sum($Array_GetServiceNoType_3_sumsel);
@$Rata_rata_ServiceNoType_3_sumsel = $SumArray_GetServiceNoType_3_sumsel/$SumArrayGetTotal_sumsel;
@$SumArray_GetServiceNoType_4_sumsel = array_sum($Array_GetServiceNoType_4_sumsel);
@$Rata_rata_ServiceNoType_4_sumsel = $SumArray_GetServiceNoType_4_sumsel/$SumArrayGetTotal_sumsel;
    //end for service
    //start for sales
@$SumArray_GetSalesNoType_1_sumsel = array_sum($Array_GetSalesNoType_1_sumsel);
@$Rata_rata_SalesNoType_1_sumsel = $SumArray_GetSalesNoType_1_sumsel/$SumArrayGetTotal_sumsel;
@$SumArray_GetSalesNoType_2_sumsel = array_sum($Array_GetSalesNoType_2_sumsel);
@$Rata_rata_SalesNoType_2_sumsel = $SumArray_GetSalesNoType_2_sumsel/$SumArrayGetTotal_sumsel;
@$SumArray_GetSalesNoType_3_sumsel = array_sum($Array_GetSalesNoType_3_sumsel);
@$Rata_rata_SalesNoType_3_sumsel = $SumArray_GetSalesNoType_3_sumsel/$SumArrayGetTotal_sumsel;
@$SumArray_GetSalesNoType_4_sumsel = array_sum($Array_GetSalesNoType_4_sumsel);
@$Rata_rata_SalesNoType_4_sumsel = $SumArray_GetSalesNoType_4_sumsel/$SumArrayGetTotal_sumsel;
    //end for sales
  //END FOR SUMSEL
//start coding bagian hitung Rata-Rata
?>
<!-- <input type="hidden" name="txt_Rata_rata_ServiceNoType_1" id="txt_Rata_rata_ServiceNoType_1" value="<?= @$Rata_rata_ServiceNoType_1 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_2" id="txt_Rata_rata_ServiceNoType_2" value="<?= @$Rata_rata_ServiceNoType_2 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_3" id="txt_Rata_rata_ServiceNoType_3" value="<?= @$Rata_rata_ServiceNoType_3 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_4" id="txt_Rata_rata_ServiceNoType_4" value="<?= @$Rata_rata_ServiceNoType_4 ?>" readonly>
<br>
<input type="hidden" name="txt_Rata_rata_SalesNoType_1" id="txt_Rata_rata_SalesNoType_1" value="<?= @$Rata_rata_SalesNoType_1 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_2" id="txt_Rata_rata_SalesNoType_2" value="<?= @$Rata_rata_SalesNoType_2 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_3" id="txt_Rata_rata_SalesNoType_3" value="<?= @$Rata_rata_SalesNoType_3 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_4" id="txt_Rata_rata_SalesNoType_4" value="<?= @$Rata_rata_SalesNoType_4 ?>" readonly> -->
<!-- <table class="responsive-table" style="width: 50%;">
  <thead>
      <tr>
          <th scope="col"></th>
          <th scope="col">Total All Responden</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td data-title="Summary">Summary</td>
          <td data-title="Total All Responden"><?= @$SumArrayGetTotal ?></td>
      </tr>
  </tbody>
</table>
<br>
<table class="responsive-table" style="width: 50%;">
  <thead>
      <tr>
          <th scope="col">Service</th>
          <th scope="col">Rata-Rata</th>
          <th scope="col">Sales</th>
          <th scope="col">Rata-Rata</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td data-title="Type" style="text-align: left;">Service Counter</td>
          <td data-title="Summary"><?= round(@$Rata_rata_ServiceNoType_1, 1).'%' ?></td>
          <td data-title="Type" style="text-align: left;">TIM SALES</td>
          <td data-title="Summary"><?= round(@$Rata_rata_SalesNoType_1, 2).'%' ?></td>
      </tr>
      <tr>
          <td data-title="Type" style="text-align: left;">Hasil Service</td>
          <td data-title="Summary"><?= round(@$Rata_rata_ServiceNoType_2, 2).'%' ?></td>
          <td data-title="Type" style="text-align: left;">Kondisi Motor</td>
          <td data-title="Summary"><?= round(@$Rata_rata_SalesNoType_2, 2).'%' ?></td>
      </tr>
      <tr>
          <td data-title="Type" style="text-align: left;">Kondisi Showroom dan Bengkel</td>
          <td data-title="Summary"><?= round(@$Rata_rata_ServiceNoType_3, 2).'%' ?></td>
          <td data-title="Type" style="text-align: left;">Kondisi Showroom</td>
          <td data-title="Summary"><?= round(@$Rata_rata_SalesNoType_3, 2).'%' ?></td>
      </tr>
      <tr>
          <td data-title="Type" style="text-align: left;">Merekomendasikan SSM</td>
          <td data-title="Summary"><?= round(@$Rata_rata_ServiceNoType_4, 2).'%' ?></td>
          <td data-title="Type" style="text-align: left;">Merekomendasikan SSM</td>
          <td data-title="Summary"><?= round(@$Rata_rata_SalesNoType_4, 2).'%' ?></td>
      </tr>
  </tbody>
</table> -->
<?php
// echo "Ada data!!!";
}
//start version old
  //start bagian Service
if(@$Rata_rata_ServiceNoType_1 != ''){
  $Fix_Rata_rata_ServiceNoType_1 = round((float)$Rata_rata_ServiceNoType_1 * 100 ) . '%';
}else{
  $Fix_Rata_rata_ServiceNoType_1 = '0%';
}
if(@$Rata_rata_ServiceNoType_2 != ''){
  $Fix_Rata_rata_ServiceNoType_2 = round((float)$Rata_rata_ServiceNoType_2 * 100 ) . '%';
}else{
  $Fix_Rata_rata_ServiceNoType_2 = '0%';
}
if(@$Rata_rata_ServiceNoType_3 != ''){
  $Fix_Rata_rata_ServiceNoType_3 = round((float)$Rata_rata_ServiceNoType_3 * 100 ) . '%';
}else{
  $Fix_Rata_rata_ServiceNoType_3 = '0%';
}
if(@$Rata_rata_ServiceNoType_4 != ''){
  $Fix_Rata_rata_ServiceNoType_4 = round((float)$Rata_rata_ServiceNoType_4 * 100 ) . '%';
}else{
  $Fix_Rata_rata_ServiceNoType_4 = '0%';
}
  //end bagian Service
  //start bagian Sales
if(@$Rata_rata_SalesNoType_1 != ''){
  $Fix_Rata_rata_SalesNoType_1 = round((float)$Rata_rata_SalesNoType_1 * 100 ) . '%';
}else{
  $Fix_Rata_rata_SalesNoType_1 = '0%';
}
if(@$Rata_rata_SalesNoType_2 != ''){
  $Fix_Rata_rata_SalesNoType_2 = round((float)$Rata_rata_SalesNoType_2 * 100 ) . '%';
}else{
  $Fix_Rata_rata_SalesNoType_2 = '0%';
}
if(@$Rata_rata_SalesNoType_3 != ''){
  $Fix_Rata_rata_SalesNoType_3 = round((float)$Rata_rata_SalesNoType_3 * 100 ) . '%';
}else{
  $Fix_Rata_rata_SalesNoType_3 = '0%';
}
if(@$Rata_rata_SalesNoType_4 != ''){
  $Fix_Rata_rata_SalesNoType_4 = round((float)$Rata_rata_SalesNoType_4 * 100 ) . '%';
}else{
  $Fix_Rata_rata_SalesNoType_4 = '0%';
}
  //end bagian Sales
//end version old
//start Variabel coding bagian Rata-Rata Type Sales & Service
  //START FOR JAKARTA
    //start bagian Service
if(!is_nan(@$Rata_rata_ServiceNoType_1_jkt) || @$Rata_rata_ServiceNoType_1_jkt == 0){
  $Fix_Rata_rata_ServiceNoType_1_jkt = round((float)@$Rata_rata_ServiceNoType_1_jkt * 100 ) . '%';
}elseif(is_nan($Rata_rata_ServiceNoType_1_jkt) && @$Rata_rata_ServiceNoType_1_jkt != 0){
  $Fix_Rata_rata_ServiceNoType_1_jkt = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_1_jkt = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_2_jkt) || @$Rata_rata_ServiceNoType_2_jkt == 0){
  $Fix_Rata_rata_ServiceNoType_2_jkt = round((float)@$Rata_rata_ServiceNoType_2_jkt * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_2_jkt) && @$Rata_rata_ServiceNoType_2_jkt != 0){
  $Fix_Rata_rata_ServiceNoType_2_jkt = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_2_jkt = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_3_jkt) || @$Rata_rata_ServiceNoType_3_jkt == 0){
  $Fix_Rata_rata_ServiceNoType_3_jkt = round((float)@$Rata_rata_ServiceNoType_3_jkt * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_3_jkt) && @$Rata_rata_ServiceNoType_3_jkt != 0){
  $Fix_Rata_rata_ServiceNoType_3_jkt = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_3_jkt = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_4_jkt) || @$Rata_rata_ServiceNoType_4_jkt == 0){
  $Fix_Rata_rata_ServiceNoType_4_jkt = round((float)@$Rata_rata_ServiceNoType_4_jkt * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_4_jkt) && @$Rata_rata_ServiceNoType_4_jkt != 0){
  $Fix_Rata_rata_ServiceNoType_4_jkt = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_4_jkt = '0%';
}
    //end bagian Service
    //start bagian Sales
if(!is_nan(@$Rata_rata_SalesNoType_1_jkt) || @$Rata_rata_SalesNoType_1_jkt == 0){
  $Fix_Rata_rata_SalesNoType_1_jkt = round((float)@$Rata_rata_SalesNoType_1_jkt * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_1_jkt) && @$Rata_rata_SalesNoType_1_jkt != 0){
  $Fix_Rata_rata_SalesNoType_1_jkt = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_1_jkt = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_2_jkt) || @$Rata_rata_SalesNoType_2_jkt == 0){
  $Fix_Rata_rata_SalesNoType_2_jkt = round((float)@$Rata_rata_SalesNoType_2_jkt * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_2_jkt) && @$Rata_rata_SalesNoType_2_jkt != 0){
  $Fix_Rata_rata_SalesNoType_2_jkt = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_2_jkt = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_3_jkt) || @$Rata_rata_SalesNoType_3_jkt == 0){
  $Fix_Rata_rata_SalesNoType_3_jkt = round((float)@$Rata_rata_SalesNoType_3_jkt * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_3_jkt) && @$Rata_rata_SalesNoType_3_jkt != 0){
  $Fix_Rata_rata_SalesNoType_3_jkt = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_3_jkt = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_4_jkt) || @$Rata_rata_SalesNoType_4_jkt == 0){
  $Fix_Rata_rata_SalesNoType_4_jkt = round((float)@$Rata_rata_SalesNoType_4_jkt * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_4_jkt) && @$Rata_rata_SalesNoType_4_jkt != 0){
  $Fix_Rata_rata_SalesNoType_4_jkt = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_4_jkt = '0%';
}
    //end bagian Sales
  //END FOR JAKARTA
  //START FOR KALTIM
    //start bagian Service
if(!is_nan(@$Rata_rata_ServiceNoType_1_kaltim) || @$Rata_rata_ServiceNoType_1_kaltim == 0){
  $Fix_Rata_rata_ServiceNoType_1_kaltim = round((float)@$Rata_rata_ServiceNoType_1_kaltim * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_1_kaltim) && @$Rata_rata_ServiceNoType_1_kaltim != 0){
  $Fix_Rata_rata_ServiceNoType_1_kaltim = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_1_kaltim = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_2_kaltim) || @$Rata_rata_ServiceNoType_2_kaltim == 0){
  $Fix_Rata_rata_ServiceNoType_2_kaltim = round((float)@$Rata_rata_ServiceNoType_2_kaltim * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_2_kaltim) && @$Rata_rata_ServiceNoType_2_kaltim != 0){
  $Fix_Rata_rata_ServiceNoType_2_kaltim = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_2_kaltim = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_3_kaltim) || @$Rata_rata_ServiceNoType_3_kaltim == 0){
  $Fix_Rata_rata_ServiceNoType_3_kaltim = round((float)@$Rata_rata_ServiceNoType_3_kaltim * 100 ) . '%';
}elseif(is_nan($Rata_rata_ServiceNoType_3_kaltim) && @$Rata_rata_ServiceNoType_3_kaltim != 0){
  $Fix_Rata_rata_ServiceNoType_3_kaltim = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_3_kaltim = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_4_kaltim) || @$Rata_rata_ServiceNoType_4_kaltim == 0){
  $Fix_Rata_rata_ServiceNoType_4_kaltim = round((float)@$Rata_rata_ServiceNoType_4_kaltim * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_4_kaltim) && @$Rata_rata_ServiceNoType_4_kaltim != 0){
  $Fix_Rata_rata_ServiceNoType_4_kaltim = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_4_kaltim = '0%';
}
    //end bagian Service
    //start bagian Sales
if(!is_nan(@$Rata_rata_SalesNoType_1_kaltim) || @$Rata_rata_SalesNoType_1_kaltim == 0){
  $Fix_Rata_rata_SalesNoType_1_kaltim = round((float)@$Rata_rata_SalesNoType_1_kaltim * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_1_kaltim) && @$Rata_rata_SalesNoType_1_kaltim != 0){
  $Fix_Rata_rata_SalesNoType_1_kaltim = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_1_kaltim = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_2_kaltim) || @$Rata_rata_SalesNoType_2_kaltim == 0){
  $Fix_Rata_rata_SalesNoType_2_kaltim = round((float)@$Rata_rata_SalesNoType_2_kaltim * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_2_kaltim) && @$Rata_rata_SalesNoType_2_kaltim != 0){
  $Fix_Rata_rata_SalesNoType_2_kaltim = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_2_kaltim = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_3_kaltim) || @$Rata_rata_SalesNoType_3_kaltim == 0){
  $Fix_Rata_rata_SalesNoType_3_kaltim = round((float)@$Rata_rata_SalesNoType_3_kaltim * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_3_kaltim) && @$Rata_rata_SalesNoType_3_kaltim != 0){
  $Fix_Rata_rata_SalesNoType_3_kaltim = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_3_kaltim = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_4_kaltim) || @$Rata_rata_SalesNoType_4_kaltim == 0){
  $Fix_Rata_rata_SalesNoType_4_kaltim = round((float)@$Rata_rata_SalesNoType_4_kaltim * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_4_kaltim) && @$Rata_rata_SalesNoType_4_kaltim != 0){
  $Fix_Rata_rata_SalesNoType_4_kaltim = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_4_kaltim = '0%';
}
    //end bagian Sales
  //END FOR KALTIM
  //START FOR KALBAR
    //start bagian Service
if(!is_nan(@$Rata_rata_ServiceNoType_1_kalbar) || @$Rata_rata_ServiceNoType_1_kalbar == 0){
  $Fix_Rata_rata_ServiceNoType_1_kalbar = round((float)@$Rata_rata_ServiceNoType_1_kalbar * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_1_kalbar) && @$Rata_rata_ServiceNoType_1_kalbar != 0){
  $Fix_Rata_rata_ServiceNoType_1_kalbar = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_1_kalbar = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_2_kalbar) || @$Rata_rata_ServiceNoType_2_kalbar == 0){
  $Fix_Rata_rata_ServiceNoType_2_kalbar = round((float)@$Rata_rata_ServiceNoType_2_kalbar * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_2_kalbar) && @$Rata_rata_ServiceNoType_2_kalbar != 0){
  $Fix_Rata_rata_ServiceNoType_2_kalbar = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_2_kalbar = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_3_kalbar) || @$Rata_rata_ServiceNoType_3_kalbar == 0){
  $Fix_Rata_rata_ServiceNoType_3_kalbar = round((float)@$Rata_rata_ServiceNoType_3_kalbar * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_3_kalbar) && @$Rata_rata_ServiceNoType_3_kalbar != 0){
  $Fix_Rata_rata_ServiceNoType_3_kalbar = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_3_kalbar = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_4_kalbar) || @$Rata_rata_ServiceNoType_4_kalbar == 0){
  $Fix_Rata_rata_ServiceNoType_4_kalbar = round((float)@$Rata_rata_ServiceNoType_4_kalbar * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_4_kalbar) && @$Rata_rata_ServiceNoType_4_kalbar != 0){
  $Fix_Rata_rata_ServiceNoType_4_kalbar = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_4_kalbar = '0%';
}
    //end bagian Service
    //start bagian Sales
if(!is_nan(@$Rata_rata_SalesNoType_1_kalbar) || @$Rata_rata_SalesNoType_1_kalbar == 0){
  $Fix_Rata_rata_SalesNoType_1_kalbar = round((float)@$Rata_rata_SalesNoType_1_kalbar * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_1_kalbar) && @$Rata_rata_SalesNoType_1_kalbar != 0){
  $Fix_Rata_rata_SalesNoType_1_kalbar = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_1_kalbar = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_2_kalbar) || @$Rata_rata_SalesNoType_2_kalbar == 0){
  $Fix_Rata_rata_SalesNoType_2_kalbar = round((float)@$Rata_rata_SalesNoType_2_kalbar * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_2_kalbar) && @$Rata_rata_SalesNoType_2_kalbar != 0){
  $Fix_Rata_rata_SalesNoType_2_kalbar = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_2_kalbar = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_3_kalbar) || @$Rata_rata_SalesNoType_3_kalbar == 0){
  $Fix_Rata_rata_SalesNoType_3_kalbar = round((float)@$Rata_rata_SalesNoType_3_kalbar * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_3_kalbar) && @$Rata_rata_SalesNoType_3_kalbar != 0){
  $Fix_Rata_rata_SalesNoType_3_kalbar = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_3_kalbar = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_4_kalbar) || @$Rata_rata_SalesNoType_4_kalbar == 0){
  $Fix_Rata_rata_SalesNoType_4_kalbar = round((float)@$Rata_rata_SalesNoType_4_kalbar * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_4_kalbar) && @$Rata_rata_SalesNoType_4_kalbar != 0){
  $Fix_Rata_rata_SalesNoType_4_kalbar = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_4_kalbar = '0%';
}
    //end bagian Sales
  //END FOR KALBAR
  //START FOR KALSEL
    //start bagian Service
if(!is_nan(@$Rata_rata_ServiceNoType_1_kalsel) || @$Rata_rata_ServiceNoType_1_kalsel == 0){
  $Fix_Rata_rata_ServiceNoType_1_kalsel = round((float)@$Rata_rata_ServiceNoType_1_kalsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_1_kalsel) && @$Rata_rata_ServiceNoType_1_kalsel != 0){
  $Fix_Rata_rata_ServiceNoType_1_kalsel = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_1_kalsel = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_2_kalsel) || @$Rata_rata_ServiceNoType_2_kalsel == 0){
  $Fix_Rata_rata_ServiceNoType_2_kalsel = round((float)@$Rata_rata_ServiceNoType_2_kalsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_2_kalsel) && @$Rata_rata_ServiceNoType_2_kalsel != 0){
  $Fix_Rata_rata_ServiceNoType_2_kalsel = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_2_kalsel = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_3_kalsel) || @$Rata_rata_ServiceNoType_3_kalsel == 0){
  $Fix_Rata_rata_ServiceNoType_3_kalsel = round((float)@$Rata_rata_ServiceNoType_3_kalsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_3_kalsel) && @$Rata_rata_ServiceNoType_3_kalsel != 0){
  $Fix_Rata_rata_ServiceNoType_3_kalsel = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_3_kalsel = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_4_kalsel) || @$Rata_rata_ServiceNoType_4_kalsel == 0){
  $Fix_Rata_rata_ServiceNoType_4_kalsel = round((float)@$Rata_rata_ServiceNoType_4_kalsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_4_kalsel) && @$Rata_rata_ServiceNoType_4_kalsel != 0){
  $Fix_Rata_rata_ServiceNoType_4_kalsel = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_4_kalsel = '0%';
}
    //end bagian Service
    //start bagian Sales
if(!is_nan(@$Rata_rata_SalesNoType_1_kalsel) || @$Rata_rata_SalesNoType_1_kalsel == 0){
  $Fix_Rata_rata_SalesNoType_1_kalsel = round((float)@$Rata_rata_SalesNoType_1_kalsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_1_kalsel) && @$Rata_rata_SalesNoType_1_kalsel != 0){
  $Fix_Rata_rata_SalesNoType_1_kalsel = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_1_kalsel = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_2_kalsel) || @$Rata_rata_SalesNoType_2_kalsel == 0){
  $Fix_Rata_rata_SalesNoType_2_kalsel = round((float)@$Rata_rata_SalesNoType_2_kalsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_2_kalsel) && @$Rata_rata_SalesNoType_2_kalsel != 0){
  $Fix_Rata_rata_SalesNoType_2_kalsel = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_2_kalsel = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_3_kalsel) || @$Rata_rata_SalesNoType_3_kalsel == 0){
  $Fix_Rata_rata_SalesNoType_3_kalsel = round((float)@$Rata_rata_SalesNoType_3_kalsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_3_kalsel) && @$Rata_rata_SalesNoType_3_kalsel != 0){
  $Fix_Rata_rata_SalesNoType_3_kalsel = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_3_kalsel = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_4_kalsel) || @$Rata_rata_SalesNoType_4_kalsel == 0){
  $Fix_Rata_rata_SalesNoType_4_kalsel = round((float)@$Rata_rata_SalesNoType_4_kalsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_4_kalsel) && @$Rata_rata_SalesNoType_4_kalsel != 0){
  $Fix_Rata_rata_SalesNoType_4_kalsel = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_4_kalsel = '0%';
}
    //end bagian Sales
  //END FOR KALSEL
  //START FOR SUMSEL/PALEMBANG
    //start bagian Service
if(!is_nan(@$Rata_rata_ServiceNoType_1_sumsel) || @$Rata_rata_ServiceNoType_1_sumsel == 0){
  $Fix_Rata_rata_ServiceNoType_1_sumsel = round((float)@$Rata_rata_ServiceNoType_1_sumsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_1_sumsel) && @$Rata_rata_ServiceNoType_1_sumsel != 0){
  $Fix_Rata_rata_ServiceNoType_1_sumsel = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_1_sumsel = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_2_sumsel) || @$Rata_rata_ServiceNoType_2_sumsel == 0){
  $Fix_Rata_rata_ServiceNoType_2_sumsel = round((float)@$Rata_rata_ServiceNoType_2_sumsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_2_sumsel) && @$Rata_rata_ServiceNoType_2_sumsel != 0){
  $Fix_Rata_rata_ServiceNoType_2_sumsel = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_2_sumsel = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_3_sumsel) || @$Rata_rata_ServiceNoType_3_sumsel == 0){
  $Fix_Rata_rata_ServiceNoType_3_sumsel = round((float)@$Rata_rata_ServiceNoType_3_sumsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_3_sumsel) && @$Rata_rata_ServiceNoType_3_sumsel != 0){
  $Fix_Rata_rata_ServiceNoType_3_sumsel = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_3_sumsel = '0%';
}
if(!is_nan(@$Rata_rata_ServiceNoType_4_sumsel) || @$Rata_rata_ServiceNoType_4_sumsel == 0){
  $Fix_Rata_rata_ServiceNoType_4_sumsel = round((float)@$Rata_rata_ServiceNoType_4_sumsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_ServiceNoType_4_sumsel) && @$Rata_rata_ServiceNoType_4_sumsel != 0){
  $Fix_Rata_rata_ServiceNoType_4_sumsel = '0%';
}else{
  $Fix_Rata_rata_ServiceNoType_4_sumsel = '0%';
}
    //end bagian Service
    //start bagian Sales
if(!is_nan(@$Rata_rata_SalesNoType_1_sumsel) || @$Rata_rata_SalesNoType_1_sumsel == 0){
  $Fix_Rata_rata_SalesNoType_1_sumsel = round((float)@$Rata_rata_SalesNoType_1_sumsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_1_sumsel) && @$Rata_rata_SalesNoType_1_sumsel != 0){
  $Fix_Rata_rata_SalesNoType_1_sumsel = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_1_sumsel = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_2_sumsel) || @$Rata_rata_SalesNoType_2_sumsel == 0){
  $Fix_Rata_rata_SalesNoType_2_sumsel = round((float)@$Rata_rata_SalesNoType_2_sumsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_2_sumsel) && @$Rata_rata_SalesNoType_2_sumsel != 0){
  $Fix_Rata_rata_SalesNoType_2_sumsel = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_2_sumsel = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_3_sumsel) || @$Rata_rata_SalesNoType_3_sumsel == 0){
  $Fix_Rata_rata_SalesNoType_3_sumsel = round((float)@$Rata_rata_SalesNoType_3_sumsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_3_sumsel) && @$Rata_rata_SalesNoType_3_sumsel != 0){
  $Fix_Rata_rata_SalesNoType_3_sumsel = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_3_sumsel = '0%';
}
if(!is_nan(@$Rata_rata_SalesNoType_4_sumsel) || @$Rata_rata_SalesNoType_4_sumsel == 0){
  $Fix_Rata_rata_SalesNoType_4_sumsel = round((float)@$Rata_rata_SalesNoType_4_sumsel * 100 ) . '%';
}elseif(is_nan(@$Rata_rata_SalesNoType_4_sumsel) && @$Rata_rata_SalesNoType_4_sumsel != 0){
  $Fix_Rata_rata_SalesNoType_4_sumsel = '0%';
}else{
  $Fix_Rata_rata_SalesNoType_4_sumsel = '0%';
}
    //end bagian Sales
  //END FOR SUMSEL/PALEMBANG
//end Variabel coding bagian Rata-Rata Type Sales & Service
?>
<!-- START VERSION OLD -->
<input type="hidden" name="txt_Rata_rata_ServiceNoType_1_juni" id="txt_Rata_rata_ServiceNoType_1_juni" value="<?= $Fix_Rata_rata_ServiceNoType_1 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_2_juni" id="txt_Rata_rata_ServiceNoType_2_juni" value="<?= @$Fix_Rata_rata_ServiceNoType_2 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_3_juni" id="txt_Rata_rata_ServiceNoType_3_juni" value="<?= @$Fix_Rata_rata_ServiceNoType_3 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_4_juni" id="txt_Rata_rata_ServiceNoType_4_juni" value="<?= @$Fix_Rata_rata_ServiceNoType_4 ?>" readonly>
<br>
<input type="hidden" name="txt_Rata_rata_SalesNoType_1_juni" id="txt_Rata_rata_SalesNoType_1_juni" value="<?= @$Fix_Rata_rata_SalesNoType_1 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_2_juni" id="txt_Rata_rata_SalesNoType_2_juni" value="<?= @$Fix_Rata_rata_SalesNoType_2 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_3_juni" id="txt_Rata_rata_SalesNoType_3_juni" value="<?= @$Fix_Rata_rata_SalesNoType_3 ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_4_juni" id="txt_Rata_rata_SalesNoType_4_juni" value="<?= @$Fix_Rata_rata_SalesNoType_4 ?>" readonly>
<!-- END VERSION OLD -->
<!-- START BAGIAN TEXT INPUT -->
  <!-- START FOR JAKARTA -->
<input type="hidden" name="txt_Rata_rata_ServiceNoType_1_juni_jkt" id="txt_Rata_rata_ServiceNoType_1_juni_jkt" value="<?= $Fix_Rata_rata_ServiceNoType_1_jkt ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_2_juni_jkt" id="txt_Rata_rata_ServiceNoType_2_juni_jkt" value="<?= @$Fix_Rata_rata_ServiceNoType_2_jkt ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_3_juni_jkt" id="txt_Rata_rata_ServiceNoType_3_juni_jkt" value="<?= @$Fix_Rata_rata_ServiceNoType_3_jkt ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_4_juni_jkt" id="txt_Rata_rata_ServiceNoType_4_juni_jkt" value="<?= @$Fix_Rata_rata_ServiceNoType_4_jkt ?>" readonly>
<!-- <br> -->
<input type="hidden" name="txt_Rata_rata_SalesNoType_1_juni_jkt" id="txt_Rata_rata_SalesNoType_1_juni_jkt" value="<?= @$Fix_Rata_rata_SalesNoType_1_jkt ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_2_juni_jkt" id="txt_Rata_rata_SalesNoType_2_juni_jkt" value="<?= @$Fix_Rata_rata_SalesNoType_2_jkt ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_3_juni_jkt" id="txt_Rata_rata_SalesNoType_3_juni_jkt" value="<?= @$Fix_Rata_rata_SalesNoType_3_jkt ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_4_juni_jkt" id="txt_Rata_rata_SalesNoType_4_juni_jkt" value="<?= @$Fix_Rata_rata_SalesNoType_4_jkt ?>" readonly>
  <!-- END FOR JAKARTA -->
  <!-- START FOR KALTIM -->
<input type="hidden" name="txt_Rata_rata_ServiceNoType_1_juni_kaltim" id="txt_Rata_rata_ServiceNoType_1_juni_kaltim" value="<?= $Fix_Rata_rata_ServiceNoType_1_kaltim ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_2_juni_kaltim" id="txt_Rata_rata_ServiceNoType_2_juni_kaltim" value="<?= @$Fix_Rata_rata_ServiceNoType_2_kaltim ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_3_juni_kaltim" id="txt_Rata_rata_ServiceNoType_3_juni_kaltim" value="<?= @$Fix_Rata_rata_ServiceNoType_3_kaltim ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_4_juni_kaltim" id="txt_Rata_rata_ServiceNoType_4_juni_kaltim" value="<?= @$Fix_Rata_rata_ServiceNoType_4_kaltim ?>" readonly>
<!-- <br> -->
<input type="hidden" name="txt_Rata_rata_SalesNoType_1_juni_kaltim" id="txt_Rata_rata_SalesNoType_1_juni_kaltim" value="<?= @$Fix_Rata_rata_SalesNoType_1_kaltim ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_2_juni_kaltim" id="txt_Rata_rata_SalesNoType_2_juni_kaltim" value="<?= @$Fix_Rata_rata_SalesNoType_2_kaltim ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_3_juni_kaltim" id="txt_Rata_rata_SalesNoType_3_juni_kaltim" value="<?= @$Fix_Rata_rata_SalesNoType_3_kaltim ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_4_juni_kaltim" id="txt_Rata_rata_SalesNoType_4_juni_kaltim" value="<?= @$Fix_Rata_rata_SalesNoType_4_kaltim ?>" readonly>
  <!-- END FOR KALTIM -->
  <!-- START FOR KALBAR -->
<input type="hidden" name="txt_Rata_rata_ServiceNoType_1_juni_kalbar" id="txt_Rata_rata_ServiceNoType_1_juni_kalbar" value="<?= $Fix_Rata_rata_ServiceNoType_1_kalbar ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_2_juni_kalbar" id="txt_Rata_rata_ServiceNoType_2_juni_kalbar" value="<?= @$Fix_Rata_rata_ServiceNoType_2_kalbar ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_3_juni_kalbar" id="txt_Rata_rata_ServiceNoType_3_juni_kalbar" value="<?= @$Fix_Rata_rata_ServiceNoType_3_kalbar ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_4_juni_kalbar" id="txt_Rata_rata_ServiceNoType_4_juni_kalbar" value="<?= @$Fix_Rata_rata_ServiceNoType_4_kalbar ?>" readonly>
<!-- <br> -->
<input type="hidden" name="txt_Rata_rata_SalesNoType_1_juni_kalbar" id="txt_Rata_rata_SalesNoType_1_juni_kalbar" value="<?= @$Fix_Rata_rata_SalesNoType_1_kalbar ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_2_juni_kalbar" id="txt_Rata_rata_SalesNoType_2_juni_kalbar" value="<?= @$Fix_Rata_rata_SalesNoType_2_kalbar ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_3_juni_kalbar" id="txt_Rata_rata_SalesNoType_3_juni_kalbar" value="<?= @$Fix_Rata_rata_SalesNoType_3_kalbar ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_4_juni_kalbar" id="txt_Rata_rata_SalesNoType_4_juni_kalbar" value="<?= @$Fix_Rata_rata_SalesNoType_4_kalbar ?>" readonly>
  <!-- END FOR KALBAR -->
  <!-- START FOR KALSEL -->
<input type="hidden" name="txt_Rata_rata_ServiceNoType_1_juni_kalsel" id="txt_Rata_rata_ServiceNoType_1_juni_kalsel" value="<?= $Fix_Rata_rata_ServiceNoType_1_kalsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_2_juni_kalsel" id="txt_Rata_rata_ServiceNoType_2_juni_kalsel" value="<?= @$Fix_Rata_rata_ServiceNoType_2_kalsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_3_juni_kalsel" id="txt_Rata_rata_ServiceNoType_3_juni_kalsel" value="<?= @$Fix_Rata_rata_ServiceNoType_3_kalsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_4_juni_kalsel" id="txt_Rata_rata_ServiceNoType_4_juni_kalsel" value="<?= @$Fix_Rata_rata_ServiceNoType_4_kalsel ?>" readonly>
<!-- <br> -->
<input type="hidden" name="txt_Rata_rata_SalesNoType_1_juni_kalsel" id="txt_Rata_rata_SalesNoType_1_juni_kalsel" value="<?= @$Fix_Rata_rata_SalesNoType_1_kalsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_2_juni_kalsel" id="txt_Rata_rata_SalesNoType_2_juni_kalsel" value="<?= @$Fix_Rata_rata_SalesNoType_2_kalsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_3_juni_kalsel" id="txt_Rata_rata_SalesNoType_3_juni_kalsel" value="<?= @$Fix_Rata_rata_SalesNoType_3_kalsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_4_juni_kalsel" id="txt_Rata_rata_SalesNoType_4_juni_kalsel" value="<?= @$Fix_Rata_rata_SalesNoType_4_kalsel ?>" readonly>
  <!-- END FOR KALSEL -->
  <!-- START FOR SUMSEL -->
<input type="hidden" name="txt_Rata_rata_ServiceNoType_1_juni_sumsel" id="txt_Rata_rata_ServiceNoType_1_juni_sumsel" value="<?= $Fix_Rata_rata_ServiceNoType_1_sumsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_2_juni_sumsel" id="txt_Rata_rata_ServiceNoType_2_juni_sumsel" value="<?= @$Fix_Rata_rata_ServiceNoType_2_sumsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_3_juni_sumsel" id="txt_Rata_rata_ServiceNoType_3_juni_sumsel" value="<?= @$Fix_Rata_rata_ServiceNoType_3_sumsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_ServiceNoType_4_juni_sumsel" id="txt_Rata_rata_ServiceNoType_4_juni_sumsel" value="<?= @$Fix_Rata_rata_ServiceNoType_4_sumsel ?>" readonly>
<!-- <br> -->
<input type="hidden" name="txt_Rata_rata_SalesNoType_1_juni_sumsel" id="txt_Rata_rata_SalesNoType_1_juni_sumsel" value="<?= @$Fix_Rata_rata_SalesNoType_1_sumsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_2_juni_sumsel" id="txt_Rata_rata_SalesNoType_2_juni_sumsel" value="<?= @$Fix_Rata_rata_SalesNoType_2_sumsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_3_juni_sumsel" id="txt_Rata_rata_SalesNoType_3_juni_sumsel" value="<?= @$Fix_Rata_rata_SalesNoType_3_sumsel ?>" readonly>
<input type="hidden" name="txt_Rata_rata_SalesNoType_4_juni_sumsel" id="txt_Rata_rata_SalesNoType_4_juni_sumsel" value="<?= @$Fix_Rata_rata_SalesNoType_4_sumsel ?>" readonly>
  <!-- END FOR SUMSEL -->
<!-- END BAGIAN TEXT INPUT -->
<?php
if(@$cek_emptydata_new == 0){//jika tidak ada data pada semua area
  //no action
}else{//jika ada data pada semua area
?>
<table border="0" class="responsive-table" style="width: 10%;">
  <thead>
    <tr>
      <th colspan="4">Rata-Rata</th>
      <th>Hasil</th>
    </tr>
  </thead>
  <tbody>
<?php
foreach ($Data_Ary_all_area as $row_ary_all_area) {
    foreach ($Data_mst_question as $row_mst_quest) {
      $NoTypeQuest = $row_mst_quest->no_type;
?>
<tr>
  <td><?= @$row_ary_all_area ?></td>
  <td><?= @$row_mst_quest->type ?></td>
  <td><?= @$row_mst_quest->no_type ?></td>
  <td style="text-align: left;"><?= @$row_mst_quest->quest ?></td>
  <!-- <td><?= @$row_mst_quest->nm_quest ?></td> -->
<?php
  $one_double = "bird";
  $one_double_null = "";
  // $double_fix_rata_rata_tes1 = "Fix_Rata_rata_SalesNoType_1_JKT";
  $double_variable = "$one_double_null";
  if(@$row_mst_quest->type == 'SALES'){
    $a1 = "\"$Fix_Rata_rata_SalesNoType_1_jkt\"";
    // $rplc_rata_no_type = str_replace('number', $row_mst_quest->no_type, $a1);
    $sbstr_a1_first = substr($a1, 1);//for first charackter
    $sbstr_a1_last = substr($sbstr_a1_first, -4, -1);//for last charackter
    $lowercase = "JKT";
    $str_lowercase_all_area = strtolower(@$row_ary_all_area);
    // Fix_Rata_rata_ServiceNoType_1_sumsel
    // $Fix_Rata_rata_SalesNoType_number_area = "";
    $x = "Fix_Rata_rata_SalesNoType_number_area";
    $rplc_rata_no_type = str_replace('number', $row_mst_quest->no_type, $x);
    $rplc_rata_area = str_replace('area', $str_lowercase_all_area, $rplc_rata_no_type);
    $rplc_rata_area2 = "\"$".$rplc_rata_area."\"";
    $rplc_all_area3 = "\"$rplc_rata_area2\"";
    $str_lowercase_all_area2 = "_".$str_lowercase_all_area;
    // print_r($rplc_all_area);
    // $sbstr_all_area_first = substr($rplc_all_area, 1);//for first charackter
    // $sbstr_all_area_last = substr($sbstr_all_area_first, -4, -1);//for last charackter
    // $Fix_Rata_rata_Sales = '$Fix_Rata_rata_ServiceNoType'.'_'.$row_mst_quest->no_type.'_'.$row_ary_all_area;
    //START FOR SALES
    echo "<td>";
    if($row_mst_quest->no_type == 1 && $row_ary_all_area == "JKT"){
      // $x1 = "Fix_Rata_rata_SalesNoType_".$NoTypeQuest."_$str_lowercase_all_area";
      echo $Fix_Rata_rata_SalesNoType_1_jkt;
    }elseif($row_mst_quest->no_type == 2 && $row_ary_all_area == "JKT"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_2_jkt;
    }elseif($row_mst_quest->no_type == 3 && $row_ary_all_area == "JKT"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_3_jkt;
    }elseif($row_mst_quest->no_type == 4 && $row_ary_all_area == "JKT"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_4_jkt;
    }
    elseif($row_mst_quest->no_type == 1 && $row_ary_all_area == "KALTIM"){
      // $x1 = "Fix_Rata_rata_SalesNoType_".$NoTypeQuest."_$str_lowercase_all_area";
      echo $Fix_Rata_rata_SalesNoType_1_kaltim;
    }elseif($row_mst_quest->no_type == 2 && $row_ary_all_area == "KALTIM"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_2_kaltim;
    }elseif($row_mst_quest->no_type == 3 && $row_ary_all_area == "KALTIM"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_3_kaltim;
    }elseif($row_mst_quest->no_type == 4 && $row_ary_all_area == "KALTIM"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_4_kaltim;
    }
    elseif($row_mst_quest->no_type == 1 && $row_ary_all_area == "KALBAR"){
      // $x1 = "Fix_Rata_rata_SalesNoType_".$NoTypeQuest."_$str_lowercase_all_area";
      echo $Fix_Rata_rata_SalesNoType_1_kalbar;
    }elseif($row_mst_quest->no_type == 2 && $row_ary_all_area == "KALBAR"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_2_kalbar;
    }elseif($row_mst_quest->no_type == 3 && $row_ary_all_area == "KALBAR"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_3_kalbar;
    }elseif($row_mst_quest->no_type == 4 && $row_ary_all_area == "KALBAR"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_4_kalbar;
    }
    elseif($row_mst_quest->no_type == 1 && $row_ary_all_area == "KALSEL"){
      // $x1 = "Fix_Rata_rata_SalesNoType_".$NoTypeQuest."_$str_lowercase_all_area";
      echo $Fix_Rata_rata_SalesNoType_1_kalsel;
    }elseif($row_mst_quest->no_type == 2 && $row_ary_all_area == "KALSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_2_kalsel;
    }elseif($row_mst_quest->no_type == 3 && $row_ary_all_area == "KALSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_3_kalsel;
    }elseif($row_mst_quest->no_type == 4 && $row_ary_all_area == "KALSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_4_kalsel;
    }
    elseif($row_mst_quest->no_type == 1 && $row_ary_all_area == "SUMSEL"){
      // $x1 = "Fix_Rata_rata_SalesNoType_".$NoTypeQuest."_$str_lowercase_all_area";
      echo $Fix_Rata_rata_SalesNoType_1_sumsel;
    }elseif($row_mst_quest->no_type == 2 && $row_ary_all_area == "SUMSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_2_sumsel;
    }elseif($row_mst_quest->no_type == 3 && $row_ary_all_area == "SUMSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_3_sumsel;
    }elseif($row_mst_quest->no_type == 4 && $row_ary_all_area == "SUMSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_SalesNoType_4_sumsel;
    }
    else{
      echo "No Action.";
    }
    // echo '\"$rplc_rata_area2\"';
    // echo htmlspecialchars($rplc_rata_area2);
    echo "</td>";
    //END FOR SALES
  }else{
    //START FOR SERVICE
    echo "<td>";
    if($row_mst_quest->no_type == 1 && $row_ary_all_area == "JKT"){
      // $x1 = "Fix_Rata_rata_SalesNoType_".$NoTypeQuest."_$str_lowercase_all_area";
      echo $Fix_Rata_rata_ServiceNoType_1_jkt;
    }elseif($row_mst_quest->no_type == 2 && $row_ary_all_area == "JKT"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_2_jkt;
    }elseif($row_mst_quest->no_type == 3 && $row_ary_all_area == "JKT"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_3_jkt;
    }elseif($row_mst_quest->no_type == 4 && $row_ary_all_area == "JKT"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_4_jkt;
    }
    elseif($row_mst_quest->no_type == 1 && $row_ary_all_area == "KALTIM"){
      // $x1 = "Fix_Rata_rata_SalesNoType_".$NoTypeQuest."_$str_lowercase_all_area";
      echo $Fix_Rata_rata_ServiceNoType_1_kaltim;
    }elseif($row_mst_quest->no_type == 2 && $row_ary_all_area == "KALTIM"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_2_kaltim;
    }elseif($row_mst_quest->no_type == 3 && $row_ary_all_area == "KALTIM"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_3_kaltim;
    }elseif($row_mst_quest->no_type == 4 && $row_ary_all_area == "KALTIM"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_4_kaltim;
    }
    elseif($row_mst_quest->no_type == 1 && $row_ary_all_area == "KALBAR"){
      // $x1 = "Fix_Rata_rata_SalesNoType_".$NoTypeQuest."_$str_lowercase_all_area";
      echo $Fix_Rata_rata_ServiceNoType_1_kalbar;
    }elseif($row_mst_quest->no_type == 2 && $row_ary_all_area == "KALBAR"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_2_kalbar;
    }elseif($row_mst_quest->no_type == 3 && $row_ary_all_area == "KALBAR"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_3_kalbar;
    }elseif($row_mst_quest->no_type == 4 && $row_ary_all_area == "KALBAR"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_4_kalbar;
    }
    elseif($row_mst_quest->no_type == 1 && $row_ary_all_area == "KALSEL"){
      // $x1 = "Fix_Rata_rata_SalesNoType_".$NoTypeQuest."_$str_lowercase_all_area";
      echo $Fix_Rata_rata_ServiceNoType_1_kalsel;
    }elseif($row_mst_quest->no_type == 2 && $row_ary_all_area == "KALSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_2_kalsel;
    }elseif($row_mst_quest->no_type == 3 && $row_ary_all_area == "KALSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_3_kalsel;
    }elseif($row_mst_quest->no_type == 4 && $row_ary_all_area == "KALSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_4_kalsel;
    }
    elseif($row_mst_quest->no_type == 1 && $row_ary_all_area == "SUMSEL"){
      // $x1 = "Fix_Rata_rata_SalesNoType_".$NoTypeQuest."_$str_lowercase_all_area";
      echo $Fix_Rata_rata_ServiceNoType_1_sumsel;
    }elseif($row_mst_quest->no_type == 2 && $row_ary_all_area == "SUMSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_2_sumsel;
    }elseif($row_mst_quest->no_type == 3 && $row_ary_all_area == "SUMSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_3_sumsel;
    }elseif($row_mst_quest->no_type == 4 && $row_ary_all_area == "SUMSEL"){
      // echo @$Fix_Rata_rata_SalesNoType_.$NoTypeQuest."_".$str_lowercase_all_area;
      echo $Fix_Rata_rata_ServiceNoType_4_sumsel;
    }
    else{
      echo "No Action.";
    }
    // echo '\"$rplc_rata_area2\"';
    // echo htmlspecialchars($rplc_rata_area2);
    echo "</td>";
    //END FOR SERVICE
  }
?>
  <!-- <td>-</td> -->
</tr>
<?php
  }
}
?>
  </tbody>
</table>
<?php
}
?>

    </div>
</div>

</body>
</html>