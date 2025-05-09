<html>
<head>
    <title>Preview Report Survey Bulanan</title>
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/5028/basics_3.css'>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css_report/responsive_table_1/style.css">
</head>
<body style="width: 140%;">
<h1 style="text-align: center;">Laporan Survey Bulanan</h1>
<center>
<!-- <?php
    $print_antrian = base_url('C_cro/cetak_report_survey?date_start='.@$date_start.'&date_end='.@$date_end);
?> -->
    <!-- <a href="<?= @$print_survey_bulanan ?>" target="_blank">Cetak Data</a><br><br> -->
</center>
<!-- style="padding-left: 5%; padding-right: 5%;" -->
<div >
    <div>
<?php
// print_r($get_month_filter);
// print_r(" || ");
// print_r($get_year_filter);
function group_by($key, $data) {
$result = array();

foreach($data as $val) {
    if(array_key_exists($key, $val)){
        $result[$val[$key]][] = $val;
    }else{
        $result[""][] = $val;
    }
}

return $result;
}
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
            if($KodeKantor == @$GetKodeKantor){
                // echo "Area : ";
                // print_r($KodeKantor);
                // print_r($JmlCabang);
                // echo "<br>";
                ?>
                <h4>Area : <?= @$KodeKantor ?></h4>
                <h4>Bulan : <?= @$get_name_month ?></h4>
                <h4>Tahun : <?= @$get_year_filter ?></h4>
                <!-- <br> -->

                <?php
                $DataCabang = $this->db->query("SELECT a.kota AS cabang, a.nama, a.kode_kantor FROM mst_company AS a WHERE a.kode_kantor='".$KodeKantor."' ")->result();
                  // echo $this->db->last_query();die();
                // print_r($DataCabang); 
                $cek_emptydata = 0;
                ?>

                <?php
                foreach($DataCabang as $row_cabang){
                    $CabangCompany = $row_cabang->cabang;
                    //start sample with where date
                    // $sql_sample_date = $this->db->query("SELECT * FROM antrian AS a INNER JOIN user AS u ON a.username = u.Username WHERE tanggal_masuk >= '".$date_start."' AND tanggal_masuk <= '".$date_end."' AND deleted = 0 ORDER BY id_antrian DESC ")->result();
                    // $query_start_end_date = "AND a.tgl_inv >= '".$date_start."' AND a.tgl_inv <= '".$date_end."' ";
                    //end sample with where date
                    $join_month_year_filter = $get_year_filter."-".$get_month_filter;
                    if($get_month_filter != '' && $get_year_filter != ''){
                        $DataReportBulanan = $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, COUNT(e.type) AS jml_data, a.nama_cust, c.kode_kantor, c.kota, e.no_type, e.type, e.quest, e.nm_quest, COUNT(IF(d.nilai = '0', 0, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 0, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 0, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 0, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 0, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 0, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 0, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 0, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 0, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 0, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 0, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, (SUM('0')+SUM('3')) AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = '".$KodeKantor."' AND c.kota = '".$CabangCompany."' AND b.id_respon = '6' AND a.tgl_inv LIKE '%".$join_month_year_filter."%' GROUP BY d.id_quest ORDER BY a.tipe_cust ASC, e.no_type ASC")->result(); 
                    }else{
                        $DataReportBulanan = $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, COUNT(e.type) AS jml_data, a.nama_cust, c.kode_kantor, c.kota, e.no_type, e.type, e.quest, e.nm_quest, COUNT(IF(d.nilai = '0', 0, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 0, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 0, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 0, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 0, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 0, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 0, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 0, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 0, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 0, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 0, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, (SUM('0')+SUM('3')) AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = '".$KodeKantor."' AND c.kota = '".$CabangCompany."' AND b.id_respon = '6' GROUP BY d.id_quest ORDER BY a.tipe_cust ASC, e.no_type ASC")->result();  
                    }
                    // echo "<br>";
                    // echo $this->db->last_query();
                    // echo "<br>";
                    $Array_DataReportBulanan[] = $DataReportBulanan;
                    $BulananReportData=$DataReportBulanan;
                    foreach($BulananReportData as $row_report){
                      $ItemTypeService[] = $row_report->type;
                    }
                if($DataReportBulanan == array() || $DataReportBulanan == NULL || $DataReportBulanan == ''){
                    // echo "Tidak Ada Data Untuk Cabang ";
                    // print_r($row_cabang->cabang);
                    // echo "<br>";
                }else{
                    // echo "<br>";
                    // echo "Nama Cabang : ";
                    // print_r($row_cabang->nama);
                    // echo "<br>";
                    $itemNamaCabang[] = $row_cabang->nama;
                    // echo "Cabang : ";
                    // print_r($row_cabang->cabang);
                    // echo "<br>";
                ?>

        <!-- <table border="1" style="width: 100%;"> -->
        <!-- <table class="responsive-table" style="width: 100%;"> -->
            <!-- <thead>
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
            </thead> -->
            <!-- <tfoot>
              <tr>
                <td colspan="7">Sources: <a href="http://en.wikipedia.org/wiki/List_of_highest-grossing_animated_films" rel="external">Wikipedia</a> &amp; <a href="http://www.boxofficemojo.com/genres/chart/?id=animation.htm" rel="external">Box Office Mojo</a>. Data is current as of March 12, 2014</td>
              </tr>
            </tfoot> -->
            <!-- <caption style="text-align: left; font-size: 17px;">Nama Cabang : <?= @$row_cabang->nama ?></caption> -->
            <tbody>
            <?php
            $no=0;
            $startTotal=0;
            // $noSales = @$SalesJmlData;
            // $noService = @$SarviceJmlData;
            foreach($DataReportBulanan as $row){
            $cek_emptydata++;
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
            if($row->type == 'SERVICE' && $row->no_type == 1){
              $GetOneTotal = $row->Total;
            }elseif($row->type == 'SALES' && $row->no_type == 1){
              $GetOneTotal = $row->Total;
            }
            else{
              $GetOneTotal = 0;
            }
            $ArrayGetTotal[] = $GetOneTotal;
            //start rata - rata
              //start for service
            if($row->type == 'SERVICE' && $row->no_type == '1'){
              $GetServiceNoType_1 = $Total_C;
            }else{
              $GetServiceNoType_1 = 0;
            }
            $Array_GetServiceNoType_1[] = $GetServiceNoType_1;
            if($row->type == 'SERVICE' && $row->no_type == '2'){
              $GetServiceNoType_2 = $Total_C;
            }else{
              $GetServiceNoType_2 = 0;
            }
            $Array_GetServiceNoType_2[] = $GetServiceNoType_2;
            if($row->type == 'SERVICE' && $row->no_type == '3'){
              $GetServiceNoType_3 = $Total_C;
            }else{
              $GetServiceNoType_3 = 0;
            }
            $Array_GetServiceNoType_3[] = $GetServiceNoType_3;
            if($row->type == 'SERVICE' && $row->no_type == '4'){
              $GetServiceNoType_4 = $Total_C;
            }else{
              $GetServiceNoType_4 = 0;
            }
            $Array_GetServiceNoType_4[] = $GetServiceNoType_4;
              //end for service
              //start for sales
            if($row->type == 'SALES' && $row->no_type == '1'){
              $GetSalesNoType_1 = $Total_C;
            }else{
              $GetSalesNoType_1 = 0;
            }
            $Array_GetSalesNoType_1[] = $GetSalesNoType_1;
            if($row->type == 'SALES' && $row->no_type == '2'){
              $GetSalesNoType_2 = $Total_C;
            }else{
              $GetSalesNoType_2 = 0;
            }
            $Array_GetSalesNoType_2[] = $GetSalesNoType_2;
            if($row->type == 'SALES' && $row->no_type == '3'){
              $GetSalesNoType_3 = $Total_C;
            }else{
              $GetSalesNoType_3 = 0;
            }
            $Array_GetSalesNoType_3[] = $GetSalesNoType_3;
            if($row->type == 'SALES' && $row->no_type == '4'){
              $GetSalesNoType_4 = $Total_C;
            }else{
              $GetSalesNoType_4 = 0;
            }
            $Array_GetSalesNoType_4[] = $GetSalesNoType_4;
              //end for sales
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
            // $Rplc_array1 = str_replace(" ", ",", $ItemSurvey);
            // $ItemsSurvey2 = array($ItemSurvey);
            // array_push($x, $ItemSurvey);
            // print_r(array($ItemSurvey));
            $ArrayItemSurvey = array($no => $ItemSurvey,);
            $SurveyItemArray[] = $ArrayItemSurvey;
            // var_dump($ItemSurvey);
            // print_r($SurveyItemArray);
            // print_r(array_merge($ArrayItemSurvey));
            // print_r(array_combine($ArrayItemSurvey));
            // echo "<br>";
            // if($ItemSurvey == "SERVICE SERVICE SERVICE SERVICE SALES SALES SALES SALES"){
            //   echo "11";
            // }elseif($ItemSurvey == "SALES SALES SALES SALES"){
            //   echo "22";
            // }else{
            //   echo "33";
            // }
            // if($ArrayItemSurvey[0] === 'SERVICE' && $ArrayItemSurvey[0] === 'SALES') {
            //   $x = 1;
            //   echo "1";
            //   echo "<br>";
            // }
            // if($ArrayItemSurvey[0] === 'SALES'){
            //   $x = 2;
            //   echo "2";
            //   echo "<br>";
            // }
            if(@$ArrayItemSurvey[1] == "SERVICE" || @$ArrayItemSurvey[5] == "SALES"){
              // $x = 11;
              // echo "11";
            }
            if(@$ArrayItemSurvey[1] == "SALES"){
              // $x = 22;
              // echo "22";
            }
            // print_r($ArrayItemSurvey);
            // print_r($SurveyItemArray);
            // echo "<br>";
            // $x = array_push($ArrayItemSurvey);
            // $x = array_merge($ArrayItemSurvey);
            // print_r($x);
            ?>
            <?php
            // if(in_array('SALES', $dataSurvey) && in_array('SERVICE', $dataSurvey)){
            //   echo "Ada Sales & Service";
            //   $ItemStatusSurvey=$no;
            //   // $GroupBySurvey = group_by("SALES", $dataSurvey);
            //   // print_r($GroupBySurvey);
            // }
            // if(in_array('SALES', $dataSurvey)){
            //   echo "Ada Seles";
            //   $ItemStatusSurvey=$no;
            // }elseif(in_array('SERVICE', $dataSurvey)){
            //   echo "Ada Service";
            //   $ItemStatusSurvey=$no;
            // }
            // // array_unshift($ItemStatusSurvey,"");
            // // unset($ItemStatusSurvey[0]);
            // // $SumItemStatusSurvey = array_sum($ItemStatusSurvey);
            // echo "<br>";
            // print_r($ItemStatusSurvey);
            ?>
                <!-- <tr style="text-align: center;"> -->
                <tr>
                  <!-- <td><?php echo $row->nama_cust ?></td> -->
                  <td data-title="Area"><?php echo $row->kode_kantor ?></td>
                  <td data-title="Kota"><?php echo $row->kota ?></td>
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
            <?php }?>
            <?php
            // print_r($ItemRowNo);
            // print_r($ArrayItemSurvey);
            // echo "<br>";
            // print_r($dataSurvey);
            // die();
            // if (in_array('SALES', $ItemSurvey)) {
            //     // echo "The 'prize_id' element is in the array";
            //   echo "SERVICE";
            // }
            // if(isset($ItemSurvey['say']) && $something['say'] === 'bla') {
            //     // do something
            // }
            ?>
            </tbody>
        <!-- </table> -->
        
                <?php
            }
                }
            }
        }
        ?>
        </table>
        <br>
        <?php
        array_unshift($Array_DataReportBulanan,"");
        unset($Array_DataReportBulanan[0]);
        // print_r($cek_emptydata);
        $TotalCabangIndex = $JmlCabangIndex;
        // if(empty($Array_DataReportBulanan)){
        //   echo "Tidak ada data samasekali";
        // }
        // foreach ($Array_DataReportBulanan as $key_cek) {
        //   if(empty($key_cek)){
        //     echo "Tidak ada data samasekali";
        //   }else{

        //   }
        // }
        // for ($i=1; $i <= 1; $i++) { 
          // foreach ($Array_DataReportBulanan as $row_cek_array_data) {
            // print_r($Array_DataReportBulanan[$i]);
          // }
        // }
        // foreach ($Array_DataReportBulanan as $row_cek_array_data) {
        //   for ($i=0; $i <= $TotalCabangIndex; $i++) { 
        //     print_r($i);
        //     // if($row_cek_array_data[$i] == Array () || $$row_cek_array_data[$i] == NULL || $$row_cek_array_data[$i] == ''){
        //     //   echo "Tidak ada data sama sekali!!!";
        //     // }
        //   }
        // }
        // if($Array_DataReportBulanan == Array()){
        //   echo "Tidak ada data sama sekali!!!";
        // }
        // foreach ($ArrayGetTotal as $row_get_total) {
        //   print_r($row_get_total);
        // }
        // print_r(array_sum($Array_GetSalesNoType_1));
        @$SumArrayGetTotal = array_sum($ArrayGetTotal);
        // print_r($ArrayGetTotal);
        //start coding bagian hitung Rata-Rata
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
        //start coding bagian hitung Rata-Rata
        if(@$cek_emptydata == 0){
          echo "<center><p style='color:red;'>Tidak Ada Laporan Survey Pada Area : ".@$GetKodeKantor."</p></center>";
        }else{
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
        <table class="responsive-table" style="width: 50%;">
            <thead>
                <!-- <caption>test 1</caption> -->
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Total All Responden</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-title="Summary">Summary</td>
                    <td data-title="Total All Responden" style="background-color: yellow;"><?= @$SumArrayGetTotal ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <!-- <table border="1" style="width: 50%;"> -->
        <!-- <table class="responsive-table" style="width: 50%;">
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
        ?>


    </div>
</div>

</body>
</html>