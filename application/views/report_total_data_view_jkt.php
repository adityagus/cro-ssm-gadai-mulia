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
<!-- <center>
  <?= @$case_all_area ?>
</center> -->
<?php
if(@$case_per_area == '1'){//jika hanya per Area saja
?>
<center>
<h1 style="text-align: center;">REPORT DATA TELEPON PERHARI</h1>
  <?= @$year.'-'.@$month ?>
<div style="text-align: right;">
  <button class="button-one" style="font-family: Indie Flower;" id="btn_export_excel" name="btn_export_excel">Export to Excel</button>
</div>
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
        <div class="tableFixHead">
    	<table class="responsive-table" style="width: 100%; height: 100%; display: block; overflow-x: scroll; white-space: nowrap; text-align: center;" id="tbl_report_total_data" name="tbl_report_total_data">
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
    		<tr>
    			<td rowspan="6">JKT</td>
    			<td rowspan="2">Bogor</td>
    			<td>Sales</td>
    			<?php
    			for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_JKT = array($LibraryMy->getHoliday($joinLoopDate));
                // $GetDataCountPerDate_JKT = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' ")->result();
                $GetDataCountPerDate_JKT = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '38' ")->result();
                foreach ($GetDataCountPerDate_JKT as $row_total_jkt) {
                    $GetTotalPerJKT = $row_total_jkt->total_per_date;
                }
                if($GetTotalPerJKT <= 0 || $GetTotalPerJKT == ''){
                    $TotalPerDateJKT = '0';
                }else{
                    $TotalPerDateJKT = $GetTotalPerJKT;
                }
                $ParentTotalSales_Right_JKT[] = $TotalPerDateJKT;
                // echo $this->db->last_query();
                $ArySubSalesTotal_JKT[] = $TotalPerDateJKT;
                array_unshift($ArySubSalesTotal_JKT,"");
                unset($ArySubSalesTotal_JKT[0]);
                if($MyLibraryHoliday_JKT[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateJKT ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateJKT != '0' || @$TotalPerDateJKT > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateJKT ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateJKT ?></label></td>
                    <?php
                    }
                }
    			?>
    			<!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
    			<?php
    			}
                $ArySumTotalSalesRight_TGRG = array_sum($ParentTotalSales_Right_JKT);
    			?>
    			<td>
                    <?= @$ArySumTotalSalesRight_TGRG ?>
                    <?php
                    // print_r($ArySubSalesTotal_JKT);
                    // echo ' || ';
                    // $joinAryTest = array($ArySubSalesTotal_JKT, $ArySubSalesTotal_JKT);
                    // $sum = array_sum(array_column($joinAryTest, 21));
                    // print_r($sum);
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
                $MyLibraryHoliday_JKT = array($LibraryMy->getHoliday($joinLoopDate));
                // $GetDataCountPerDate_JKT = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' ")->result();
                $GetDataCountPerDate_JKT = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '38' ")->result();
                foreach ($GetDataCountPerDate_JKT as $row_total_jkt) {
                    $GetTotalPerJKT = $row_total_jkt->total_per_date;
                }
                if($GetTotalPerJKT <= 0 || $GetTotalPerJKT == ''){
                    $TotalPerDateJKT = '0';
                }else{
                    $TotalPerDateJKT = $GetTotalPerJKT;
                }
                $ParentTotalService_Right_JKT[] = $TotalPerDateJKT;
                // echo $this->db->last_query();
                $ArySubServiceTotal_JKT[] = $TotalPerDateJKT;
                array_unshift($ArySubServiceTotal_JKT,"");
                unset($ArySubServiceTotal_JKT[0]);
    			if($MyLibraryHoliday_JKT[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateJKT ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateJKT != '0' || @$TotalPerDateJKT > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateJKT ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateJKT ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_JKT = array_sum($ParentTotalService_Right_JKT);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_JKT ?>
                    <?php
                    // print_r($ArySubServiceTotal_JKT);
                    // echo ' || ';
                    // $joinAryTest = array($ArySubSalesTotal_JKT, $ArySubServiceTotal_JKT);
                    // $sum = array_sum(array_column($joinAryTest, 24));
                    // print_r($sum);
                    ?>        
                </td>
    		</tr>
    		<tr>
    			<!-- <td></td> -->
    			<td rowspan="2">Tanggerang</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_TGRG = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_TGRG = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '17' ")->result();
                foreach ($GetDataCountPerDate_TGRG as $row_total_tgrg) {
                    $GetTotalPerTGRG = $row_total_tgrg->total_per_date;
                }
                if($GetTotalPerTGRG <= 0 || $GetTotalPerTGRG == ''){
                    $TotalPerDateTGRG = '0';
                }else{
                    $TotalPerDateTGRG = $GetTotalPerTGRG;
                }
                $ParentTotalSales_Right_TGRG[] = $TotalPerDateTGRG;
                // echo $this->db->last_query();
                $ArySubSalesTotal_TGRG[] = $TotalPerDateTGRG;
                array_unshift($ArySubSalesTotal_TGRG,"");
                unset($ArySubSalesTotal_TGRG[0]);
                if($MyLibraryHoliday_TGRG[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateTGRG ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateTGRG != '0' || @$TotalPerDateTGRG > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateTGRG ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateTGRG ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_TGRG = array_sum($ParentTotalSales_Right_TGRG);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_TGRG ?>
                    <?php
                    // print_r($ArySubSalesTotal_TGRG);
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
                $MyLibraryHoliday_TGRG = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_TGRG = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '17' ")->result();
                foreach ($GetDataCountPerDate_TGRG as $row_total_tgrg) {
                    $GetTotalPerTGRG = $row_total_tgrg->total_per_date;
                }
                if($GetTotalPerTGRG <= 0 || $GetTotalPerTGRG == ''){
                    $TotalPerDateTGRG = '0';
                }else{
                    $TotalPerDateTGRG = $GetTotalPerTGRG;
                }
                $ParentTotalService_Right_TGRG[] = $TotalPerDateTGRG;
                // echo $this->db->last_query();
                $ArySubServiceTotal_TGRG[] = $TotalPerDateTGRG;
                array_unshift($ArySubServiceTotal_TGRG,"");
                unset($ArySubServiceTotal_TGRG[0]);
                if($MyLibraryHoliday_TGRG[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateTGRG ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateTGRG != '0' || @$TotalPerDateTGRG > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateTGRG ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateTGRG ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_TGRG = array_sum($ParentTotalService_Right_TGRG);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_TGRG ?>
                    <?php
                    // print_r($ArySubServiceTotal_TGRG);
                    ?>         
                </td>
    		</tr>
    		<tr>
    			<!-- <td></td> -->
    			<td rowspan="2">Depok</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_DPK = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_DPK = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '6' ")->result();
                foreach ($GetDataCountPerDate_DPK as $row_total_dpk) {
                    $GetTotalPerDPK = $row_total_dpk->total_per_date;
                }
                if($GetTotalPerDPK <= 0 || $GetTotalPerDPK == ''){
                    $TotalPerDateDPK = '0';
                }else{
                    $TotalPerDateDPK = $GetTotalPerDPK;
                }
                $ParentTotalSales_Right_DPK[] = $TotalPerDateDPK;
                // echo $this->db->last_query();
                $ArySubSalesTotal_DPK[] = $TotalPerDateDPK;
                array_unshift($ArySubSalesTotal_DPK,"");
                unset($ArySubSalesTotal_DPK[0]);
                if($MyLibraryHoliday_DPK[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateDPK ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateDPK != '0' || @$TotalPerDateDPK > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateDPK ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateDPK ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_DPK = array_sum($ParentTotalSales_Right_DPK);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_DPK ?>
                    <?php
                    // print_r($ArySubSalesTotal_DPK);
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
                $MyLibraryHoliday_DPK = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_DPK = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '6' ")->result();
                foreach ($GetDataCountPerDate_DPK as $row_total_dpk) {
                    $GetTotalPerDPK = $row_total_dpk->total_per_date;
                }
                if($GetTotalPerDPK <= 0 || $GetTotalPerDPK == ''){
                    $TotalPerDateDPK = '0';
                }else{
                    $TotalPerDateDPK = $GetTotalPerDPK;
                }
                $ParentTotalService_Right_DPK[] = $TotalPerDateDPK;
                // echo $this->db->last_query();
                $ArySubServiceTotal_DPK[] = $TotalPerDateDPK;
                array_unshift($ArySubServiceTotal_DPK,"");
                unset($ArySubServiceTotal_DPK[0]);
                if($MyLibraryHoliday_DPK[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateDPK ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateDPK != '0' || @$TotalPerDateDPK > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateDPK ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateDPK ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_DPK = array_sum($ParentTotalService_Right_DPK);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_DPK ?>
                    <?php
                    // print_r($ArySubServiceTotal_DPK);
                    ?>        
                </td>
    		</tr>
    		<tr>
    			<td colspan="3" style="width: 8%; background-color: #ADD8E6;">Sub Total</td>
    			<?php
    			for ($i=1; $i <= $getDay; $i++) { 
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_DPK = array($LibraryMy->getHoliday($joinLoopDate));
                $joinAryTest = array($ArySubSalesTotal_JKT, $ArySubServiceTotal_JKT, $ArySubSalesTotal_TGRG, $ArySubServiceTotal_TGRG, $ArySubSalesTotal_DPK, $ArySubServiceTotal_DPK);
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
                $TotalSumSubTotal_Jkt = array_sum($arySumSubTotal);
                $aryTotalSumSubTotal_Jkt = $arySumSubTotal;
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
                    <?= @$TotalSumSubTotal_Jkt ?>
                </td>
    		</tr>
        <?php
        if(@$case_per_area == '1'){//jika hanya per Area saja
        ?>
    	</table>
        <div>
        <?php
        }
        echo "<br>";
        $this->load->library('session');
        $this->session->set_userdata('AryTotalSumSubTotal_Jkt', $aryTotalSumSubTotal_Jkt);
        $sessAryTotalSumSubTotal_JKT = $this->session->userdata('AryTotalSumSubTotal_Jkt');
        // print_r($sessAryTotalSumSubTotal_JKT);
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
            filename: "report_total_data_jkt.xls",
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