<html>
<head>
    <title>Preview Report Total Data Call</title>
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/5028/basics_3.css'>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css_report/responsive_table_1/style.css?w=<?php echo rand(100,10000); ?>">
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
<?php
if(@$case_all_area == '0'){//jika hanya per Area saja
?>
<h1 style="text-align: center;">REPORT DATA TELEPON PERHARI</h1>
<div style="text-align: right;">
  <button class="button-one" style="font-family: Indie Flower;" id="btn_export_excel" name="btn_export_excel">Export to Excel</button>
</div>
<center>
  <!-- <?= @$lastDay ?> -->
  <?= @$year.'-'.@$month ?>
</center>
<br>
<?php
}
?>
<!-- style="padding-left: 5%; padding-right: 5%;" -->
<?php
// echo @$getDay;
$sumHeaderTitle = $getDay + 4;
$joinYearMonth = $year.'-'.$month.'-';
$dateLocalHoliday = '2021-05-02';
// echo "<br>";
$checkHoliday = base_url().'C_cro/checkHoliday/'.$dateLocalHoliday;
// $ctrl_test_holiday = $controller->checkHoliday($dateLocalHoliday);
// echo "<br>";
$CI =& get_instance();
// $x = $this->CI->checkHoliday($dateLocalHoliday);
$CI->load->library('MyLibrary');
$LibraryMy = new MyLibrary();
// $perfil_usuario = $usuario->nama_kamu('Aji');
$test_MyLibrary = array($LibraryMy->ary_test($dateLocalHoliday));
// print_r($test_MyLibrary[0]['holiday']);//to call libaray in view in CI PHP
// print_r($ctrl_test_holiday);
// echo "<br>";
$test_MyLibrary2 = array($LibraryMy->getHoliday($dateLocalHoliday));
// print_r($test_MyLibrary2[0]['id']);
?>
<div >
    <div>
    	   <?php
            if(@$case_all_area == '0'){//jika hanya per Area saja
            ?>
        <div class="tableFixHead">
    	<table class="responsive-table" style="width: 100%; height: 100%; display: block; overflow-x: scroll; white-space: nowrap;" id="tbl_report_total_data" name="tbl_report_total_data">
            <thead>
    		<tr>
    			<th colspan="<?= @$sumHeaderTitle ?>" style="text-align: center; background-color: #ADD8E6;">
    				<b>Bulan <?= @$nameMonth ?> <?= @$year ?></b>
    			</th>
    		</tr>
            <tr style="background-color: #ADD8E6;">
    			<th>KOTA AREA</th>
    			<th>CABANG AREA</th>
    			<th>SURVEY(Sales/Service)</th>
    			<?php
    			for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
    			?>
    			<th><?= @$i.'-'.@$nameMonth ?></th>
    			<?php
    			}
    			?>
    			<th>Total</th>
    		</tr>
            </thead>
            <?php
            }
            ?>
    		<tr>
    			<td rowspan="6">Palembang</td>
    			<td rowspan="2">Basuki Rahmat</td>
    			<td>Sales</td>
    			<?php
    			for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Basukirahmat = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Basukirahmat = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '34' ")->result();
                foreach ($GetDataCountPerDate_Basukirahmat as $row_total_basukirahmat) {
                    $GetTotalPerBasukirahmat = $row_total_basukirahmat->total_per_date;
                }
                if($GetTotalPerBasukirahmat <= 0 || $GetTotalPerBasukirahmat == ''){
                    $TotalPerDateBasukirahmat = '0';
                }else{
                    $TotalPerDateBasukirahmat = $GetTotalPerBasukirahmat;
                }
                $ParentTotalSales_Right_Basukirahmat[] = $TotalPerDateBasukirahmat;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Basukirahmat[] = $TotalPerDateBasukirahmat;
                array_unshift($ArySubSalesTotal_Basukirahmat,"");
                unset($ArySubSalesTotal_Basukirahmat[0]);
                if($MyLibraryHoliday_Basukirahmat[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBasukirahmat ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBasukirahmat != '0' || @$TotalPerDateBasukirahmat > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBasukirahmat ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBasukirahmat ?></label></td>
                    <?php
                    }
                }
    			?>
    			<!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
    			<?php
    			}
                $ArySumTotalSalesRight_Basukirahmat = array_sum($ParentTotalSales_Right_Basukirahmat);
    			?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Basukirahmat ?>
                </td>
    		</tr>
    		<tr>
    			<td>Service</td>
    			<!-- <td></td>
    			<td></td> -->
    			<?php
    			for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Basukirahmat = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Basukirahmat = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '34' ")->result();
                foreach ($GetDataCountPerDate_Basukirahmat as $row_total_basukirahmat) {
                    $GetTotalPerBasukirahmat = $row_total_basukirahmat->total_per_date;
                }
                if($GetTotalPerBasukirahmat <= 0 || $GetTotalPerBasukirahmat == ''){
                    $TotalPerDateBasukirahmat = '0';
                }else{
                    $TotalPerDateBasukirahmat = $GetTotalPerBasukirahmat;
                }
                $ParentTotalService_Right_Basukirahmat[] = $TotalPerDateBasukirahmat;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Basukirahmat[] = $TotalPerDateBasukirahmat;
                array_unshift($ArySubServiceTotal_Basukirahmat,"");
                unset($ArySubServiceTotal_Basukirahmat[0]);
    			if($MyLibraryHoliday_Basukirahmat[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBasukirahmat ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBasukirahmat != '0' || @$TotalPerDateBasukirahmat > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBasukirahmat ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBasukirahmat ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Basukirahmat = array_sum($ParentTotalService_Right_Basukirahmat);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_Basukirahmat ?>       
                </td>
    		</tr>
    		<tr>
    			<!-- <td></td> -->
    			<td rowspan="2">KM 12</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Km12 = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Km12 = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '35' ")->result();
                foreach ($GetDataCountPerDate_Km12 as $row_total_km12) {
                    $GetTotalPerKm12 = $row_total_km12->total_per_date;
                }
                if($GetTotalPerKm12 <= 0 || $GetTotalPerKm12 == ''){
                    $TotalPerDateKm12 = '0';
                }else{
                    $TotalPerDateKm12 = $GetTotalPerKm12;
                }
                $ParentTotalSales_Right_Km12[] = $TotalPerDateKm12;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Km12[] = $TotalPerDateKm12;
                array_unshift($ArySubSalesTotal_Km12,"");
                unset($ArySubSalesTotal_Km12[0]);
                if($MyLibraryHoliday_Km12[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateKm12 ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateKm12 != '0' || @$TotalPerDateKm12 > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateKm12 ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateKm12 ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Km12 = array_sum($ParentTotalSales_Right_Km12);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Km12 ?>
                    <?php
                    ?>          
                </td>
    		</tr>
    		<tr>
    			<td>Service</td>
    			<!-- <td></td>
    			<td></td> -->
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Km12 = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Km12 = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '35' ")->result();
                foreach ($GetDataCountPerDate_Km12 as $row_total_km12) {
                    $GetTotalPerKm12 = $row_total_km12->total_per_date;
                }
                if($GetTotalPerKm12 <= 0 || $GetTotalPerKm12 == ''){
                    $TotalPerDateKm12 = '0';
                }else{
                    $TotalPerDateKm12 = $GetTotalPerKm12;
                }
                $ParentTotalService_Right_Km12[] = $TotalPerDateKm12;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Km12[] = $TotalPerDateKm12;
                array_unshift($ArySubServiceTotal_Km12,"");
                unset($ArySubServiceTotal_Km12[0]);
                if($MyLibraryHoliday_Km12[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateKm12 ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateKm12 != '0' || @$TotalPerDateKm12 > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateKm12 ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateKm12 ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Km12 = array_sum($ParentTotalService_Right_Km12);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_Km12 ?>        
                </td>
    		</tr>
    		<tr>
    			<!-- <td></td> -->
    			<td rowspan="2">Baturaja</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Baturaja = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Baturaja = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '36' ")->result();
                foreach ($GetDataCountPerDate_Baturaja as $row_total_baturaja) {
                    $GetTotalPerBaturaja = $row_total_baturaja->total_per_date;
                }
                if($GetTotalPerBaturaja <= 0 || $GetTotalPerBaturaja == ''){
                    $TotalPerDateBaturaja = '0';
                }else{
                    $TotalPerDateBaturaja = $GetTotalPerBaturaja;
                }
                $ParentTotalSales_Right_Baturaja[] = $TotalPerDateBaturaja;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Baturaja[] = $TotalPerDateBaturaja;
                array_unshift($ArySubSalesTotal_Baturaja,"");
                unset($ArySubSalesTotal_Baturaja[0]);
                if($MyLibraryHoliday_Baturaja[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBaturaja ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBaturaja != '0' || @$TotalPerDateBaturaja > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBaturaja ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBaturaja ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Baturaja = array_sum($ParentTotalSales_Right_Baturaja);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Baturaja ?>         
                </td>
    		</tr>
    		<tr>
    			<td>Service</td>
    			<!-- <td></td>
    			<td></td> -->
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Baturaja = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Baturaja = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '36' ")->result();
                foreach ($GetDataCountPerDate_Baturaja as $row_total_baturaja) {
                    $GetTotalPerBaturaja = $row_total_baturaja->total_per_date;
                }
                if($GetTotalPerBaturaja <= 0 || $GetTotalPerBaturaja == ''){
                    $TotalPerDateBaturaja = '0';
                }else{
                    $TotalPerDateBaturaja = $GetTotalPerBaturaja;
                }
                $ParentTotalService_Right_Baturaja[] = $TotalPerDateBaturaja;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Baturaja[] = $TotalPerDateBaturaja;
                array_unshift($ArySubServiceTotal_Baturaja,"");
                unset($ArySubServiceTotal_Baturaja[0]);
                if($MyLibraryHoliday_Baturaja[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBaturaja ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBaturaja != '0' || @$TotalPerDateBaturaja > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBaturaja ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBaturaja ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Baturaja = array_sum($ParentTotalService_Right_Baturaja);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_Baturaja ?>       
                </td>
    		</tr>
    		<tr>
    			<td colspan="3" style="width: 8%; background-color: #ADD8E6;">Sub Total</td>
    			<?php
    			for ($i=1; $i <= $getDay; $i++) { 
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_DPK = array($LibraryMy->getHoliday($joinLoopDate));
                $joinAryTest = array($ArySubSalesTotal_Basukirahmat, $ArySubServiceTotal_Basukirahmat, $ArySubSalesTotal_Km12, $ArySubServiceTotal_Km12, $ArySubSalesTotal_Baturaja, $ArySubServiceTotal_Baturaja);
                $sumSubTotal = array_sum(array_column($joinAryTest, $i));
                // print_r($sum);
                $arySumSubTotal[] = $sumSubTotal;
                array_unshift($arySumSubTotal,"");
                unset($arySumSubTotal[0]);
    			if($MyLibraryHoliday_DPK[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label>0</label></td>
                <?php
                }else{//jika bukan hari libur
                ?>
                <td style="background-color: #ADD8E6;"><label><?= @$sumSubTotal ?></label></td>
                <?php
                }
                ?>
    			<!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
    			<?php
                $TotalSumSubTotal_sumsel = array_sum($arySumSubTotal);
                $aryTotalSumSubTotal_Sumsel = $arySumSubTotal;
    			}
    			?>
    			<td style="background-color: #ADD8E6;">
                    <?php
                    // ParentTotalService_Right_TGRG
                    // print_r($arySumSubTotal);
                    // $string1=implode(",",$arySumSubTotal);
                    // print_r(array($string1));
                    // $TotalSumSubTotal2 = array_sum($arySumSubTotal);
                    ?>
                    <?= @$TotalSumSubTotal_sumsel ?>
                </td>
    		</tr>
    	<?php
        if(@$case_per_area == '1'){//jika hanya per Area saja
        ?>
        </table>
        <?php
        }
        ?>
        <?php
        if(@$case_all_area == '1'){//Untuk Total All Area
        ?>
            <tr>
                <td colspan="3" style="width: 8%; background-color: #ADD8E6;">TOTAL ALL AREA</td>
            <?php
            for ($i=1; $i <= $getDay; $i++) { 
            $joinLoopDate = $joinYearMonth.$i;
            $MyLibraryHoliday_TotalAllArea = array($LibraryMy->getHoliday($joinLoopDate));
            //start bagian sum total All Area
            $this->load->library('session');
            $this->session->set_userdata('AryTotalSumSubTotal_Sumsel', $aryTotalSumSubTotal_Sumsel);
            $sessAryTotalSumSubTotal_Sumsel = $this->session->userdata('AryTotalSumSubTotal_Sumsel');
            $sessAryTotalSumSubTotal_JKT = $this->session->userdata('AryTotalSumSubTotal_Jkt');
            $sessAryTotalSumSubTotal_Kaltim = $this->session->userdata('AryTotalSumSubTotal_Kaltim');
            $sessAryTotalSumSubTotal_Kalbar = $this->session->userdata('AryTotalSumSubTotal_Kalbar');
            $sessAryTotalSumSubTotal_Kalsel = $this->session->userdata('AryTotalSumSubTotal_Kalsel');
            $sessAryTotalSumSubTotal_Sumsel = $this->session->userdata('AryTotalSumSubTotal_Sumsel');
            //end bagian sum total All Area
            $joinAryTotalAllArea = array($sessAryTotalSumSubTotal_JKT, $sessAryTotalSumSubTotal_Kaltim, $sessAryTotalSumSubTotal_Kalbar, $sessAryTotalSumSubTotal_Kalsel, $sessAryTotalSumSubTotal_Sumsel);
            $sumTotalAllArea = array_sum(array_column($joinAryTotalAllArea, $i));
            // print_r($sum);
            $arySumTotalAllArea[] = $sumTotalAllArea;
            array_unshift($arySumTotalAllArea,"");
            unset($arySumTotalAllArea[0]);
            if($MyLibraryHoliday_TotalAllArea[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
            ?>
            <td style="background-color: red;"><label>-</label></td>
            <?php
            }else{//jika bukan hari libur
            ?>
            <td style="background-color: #ADD8E6;"><label><?= @$sumTotalAllArea ?></label></td>
            <?php
            }
            ?>
            <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
            <?php
            $TotalSumTotalAllArea = array_sum($arySumTotalAllArea);
            }
            ?>
                <td style="background-color: #ADD8E6;">
                    <?= @$TotalSumTotalAllArea ?>
                </td>
            </tr>
        </table>
        <!-- <center>TESTING FOR TOTAL ALL AREA</center> -->
        <?php
        }
        echo "<br>";
        // $this->load->library('session');
        // $this->session->set_userdata('AryTotalSumSubTotal_Sumsel', $aryTotalSumSubTotal_Sumsel);
        // $sessAryTotalSumSubTotal_Sumsel = $this->session->userdata('AryTotalSumSubTotal_Sumsel');
        // $this->session->unset_userdata('AryTotalSumSubTotal_Jkt'); //untuk remove session data
        // print_r($sessAryTotalSumSubTotal_JKT);
        // $sessAryTotalSumSubTotal_JKT = $this->session->userdata('AryTotalSumSubTotal_Jkt');
        // print_r($sessAryTotalSumSubTotal_JKT);
        // echo "<br>";
        // $sessAryTotalSumSubTotal_Kaltim = $this->session->userdata('AryTotalSumSubTotal_Kaltim');
        // print_r($sessAryTotalSumSubTotal_Kaltim);
        // echo "<br>";
        // $sessAryTotalSumSubTotal_Kalbar = $this->session->userdata('AryTotalSumSubTotal_Kalbar');
        // print_r($sessAryTotalSumSubTotal_Kalbar);
        // echo "<br>";
        // $sessAryTotalSumSubTotal_Kalsel = $this->session->userdata('AryTotalSumSubTotal_Kalsel');
        // print_r($sessAryTotalSumSubTotal_Kalsel);
        // echo "<br>";
        // $sessAryTotalSumSubTotal_Sumsel = $this->session->userdata('AryTotalSumSubTotal_Sumsel');
        // print_r($sessAryTotalSumSubTotal_Sumsel);
        // echo "<br>";
        ?>

    </div>
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
            filename: "report_total_data_sumsel.xls",
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
