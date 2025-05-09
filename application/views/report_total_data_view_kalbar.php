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
    			<td rowspan="8">KALBAR</td>
    			<td rowspan="2">Pontianak</td>
    			<td>Sales</td>
    			<?php
    			for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Pontianak = array($LibraryMy->getHoliday($joinLoopDate));
                // $GetDataCountPerDate_JKT = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' ")->result();
                $GetDataCountPerDate_Pontianak = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '20' ")->result();
                foreach ($GetDataCountPerDate_Pontianak as $row_total_pontianak) {
                    $GetTotalPerPontianak = $row_total_pontianak->total_per_date;
                }
                if($GetTotalPerPontianak <= 0 || $GetTotalPerPontianak == ''){
                    $TotalPerDatePontianak = '0';
                }else{
                    $TotalPerDatePontianak = $GetTotalPerPontianak;
                }
                $ParentTotalSales_Right_Pontianak[] = $TotalPerDatePontianak;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Pontianak[] = $TotalPerDatePontianak;
                array_unshift($ArySubSalesTotal_Pontianak,"");
                unset($ArySubSalesTotal_Pontianak[0]);
                if($MyLibraryHoliday_Pontianak[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDatePontianak ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDatePontianak != '0' || @$TotalPerDatePontianak > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDatePontianak ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDatePontianak ?></label></td>
                    <?php
                    }
                }
    			?>
    			<!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
    			<?php
    			}
                $ArySumTotalSalesRight_Pontianak = array_sum($ParentTotalSales_Right_Pontianak);
    			?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Pontianak ?>
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
                $MyLibraryHoliday_Pontianak = array($LibraryMy->getHoliday($joinLoopDate));
                // $GetDataCountPerDate_JKT = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' ")->result();
                $GetDataCountPerDate_Pontianak = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '20' ")->result();
                foreach ($GetDataCountPerDate_Pontianak as $row_total_pontianak) {
                    $GetTotalPerPontianak = $row_total_pontianak->total_per_date;
                }
                if($GetTotalPerPontianak <= 0 || $GetTotalPerPontianak == ''){
                    $TotalPerDatePontianak = '0';
                }else{
                    $TotalPerDatePontianak = $GetTotalPerPontianak;
                }
                $ParentTotalService_Right_Pontianak[] = $TotalPerDatePontianak;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Pontianak[] = $TotalPerDatePontianak;
                array_unshift($ArySubServiceTotal_Pontianak,"");
                unset($ArySubServiceTotal_Pontianak[0]);
    			if($MyLibraryHoliday_Pontianak[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDatePontianak ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDatePontianak != '0' || @$TotalPerDatePontianak > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDatePontianak ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDatePontianak ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Pontianak = array_sum($ParentTotalService_Right_Pontianak);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_Pontianak ?>      
                </td>
    		</tr>
    		<tr>
    			<!-- <td></td> -->
    			<td rowspan="2">Sanggau</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Sanggau = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Sanggau = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '19' ")->result();
                foreach ($GetDataCountPerDate_Sanggau as $row_total_sanggau) {
                    $GetTotalPerSanggau = $row_total_sanggau->total_per_date;
                }
                if($GetTotalPerSanggau <= 0 || $GetTotalPerSanggau == ''){
                    $TotalPerDateSanggau = '0';
                }else{
                    $TotalPerDateSanggau = $GetTotalPerSanggau;
                }
                $ParentTotalSales_Right_Sanggau[] = $TotalPerDateSanggau;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Sanggau[] = $TotalPerDateSanggau;
                array_unshift($ArySubSalesTotal_Sanggau,"");
                unset($ArySubSalesTotal_Sanggau[0]);
                if($MyLibraryHoliday_Sanggau[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateSanggau ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateSanggau != '0' || @$TotalPerDateSanggau > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateSanggau ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateSanggau ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Sanggau = array_sum($ParentTotalSales_Right_Sanggau);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Sanggau ?>
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
                $MyLibraryHoliday_Sanggau = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Sanggau = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '19' ")->result();
                foreach ($GetDataCountPerDate_Sanggau as $row_total_sanggau) {
                    $GetTotalPerSanggau = $row_total_sanggau->total_per_date;
                }
                if($GetTotalPerSanggau <= 0 || $GetTotalPerSanggau == ''){
                    $TotalPerDateSanggau = '0';
                }else{
                    $TotalPerDateSanggau = $GetTotalPerSanggau;
                }
                $ParentTotalService_Right_Sanggau[] = $TotalPerDateSanggau;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Sanggau[] = $TotalPerDateSanggau;
                array_unshift($ArySubServiceTotal_Sanggau,"");
                unset($ArySubServiceTotal_Sanggau[0]);
                if($MyLibraryHoliday_Sanggau[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateSanggau ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateSanggau != '0' || @$TotalPerDateSanggau > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateSanggau ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateSanggau ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Sanggau = array_sum($ParentTotalService_Right_Sanggau);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_Sanggau ?>
                    <?php
                    // print_r($ArySubServiceTotal_TGRG);
                    ?>         
                </td>
    		</tr>
    		<tr>
    			<!-- <td></td> -->
    			<td rowspan="2">Sintang</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Sintang = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Sintang = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '18' ")->result();
                foreach ($GetDataCountPerDate_Sintang as $row_total_sintang) {
                    $GetTotalPerSintang = $row_total_sintang->total_per_date;
                }
                if($GetTotalPerSintang <= 0 || $GetTotalPerSintang == ''){
                    $TotalPerDateSintang = '0';
                }else{
                    $TotalPerDateSintang = $GetTotalPerSintang;
                }
                $ParentTotalSales_Right_Sintang[] = $TotalPerDateSintang;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Sintang[] = $TotalPerDateSintang;
                array_unshift($ArySubSalesTotal_Sintang,"");
                unset($ArySubSalesTotal_Sintang[0]);
                if($MyLibraryHoliday_Sintang[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateSintang ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateSintang != '0' || @$TotalPerDateSintang > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateSintang ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateSintang ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Sintang = array_sum($ParentTotalSales_Right_Sintang);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Sintang ?>
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
                $MyLibraryHoliday_Sintang = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Sintang = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '18' ")->result();
                foreach ($GetDataCountPerDate_Sintang as $row_total_sintang) {
                    $GetTotalPerSintang = $row_total_sintang->total_per_date;
                }
                if($GetTotalPerSintang <= 0 || $GetTotalPerSintang == ''){
                    $TotalPerDateSintang = '0';
                }else{
                    $TotalPerDateSintang = $GetTotalPerSintang;
                }
                $ParentTotalService_Right_Sintang[] = $TotalPerDateSintang;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Sintang[] = $TotalPerDateSintang;
                array_unshift($ArySubServiceTotal_Sintang,"");
                unset($ArySubServiceTotal_Sintang[0]);
                if($MyLibraryHoliday_Sintang[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateSintang ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateSintang != '0' || @$TotalPerDateSintang > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateSintang ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateSintang ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Sintang = array_sum($ParentTotalService_Right_Sintang);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_Sintang ?>
                    <?php
                    // print_r($ArySubServiceTotal_DPK);
                    ?>        
                </td>
    		</tr>
            <tr>
    			<!-- <td></td> -->
    			<td rowspan="2">Ketapang</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Ktp = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Ktp = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '40' ")->result();
                foreach ($GetDataCountPerDate_Ktp as $row_total_ktp) {
                    $GetTotalPerKtp = $row_total_ktp->total_per_date;
                }
                if($GetTotalPerKtp <= 0 || $GetTotalPerKtp == ''){
                    $TotalPerDateKtp = '0';
                }else{
                    $TotalPerDateKtp = $GetTotalPerKtp;
                }
                $ParentTotalSales_Right_Ktp[] = $TotalPerDateKtp;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Ktp[] = $TotalPerDateKtp;
                array_unshift($ArySubSalesTotal_Ktp,"");
                unset($ArySubSalesTotal_Ktp[0]);
                if($MyLibraryHoliday_Ktp[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateKtp ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateKtp != '0' || @$TotalPerDateKtp > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateKtp ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateKtp ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Ktp = array_sum($ParentTotalSales_Right_Ktp);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Ktp ?>
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
                $MyLibraryHoliday_Ktp = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Ktp = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '40' ")->result();
                foreach ($GetDataCountPerDate_Ktp as $row_total_ktp) {
                    $GetTotalPerKtp = $row_total_ktp->total_per_date;
                }
                if($GetTotalPerKtp <= 0 || $GetTotalPerKtp == ''){
                    $TotalPerDateKtp = '0';
                }else{
                    $TotalPerDateKtp = $GetTotalPerKtp;
                }
                $ParentTotalService_Right_Ktp[] = $TotalPerDateKtp;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Ktp[] = $TotalPerDateKtp;
                array_unshift($ArySubServiceTotal_Ktp,"");
                unset($ArySubServiceTotal_Ktp[0]);
                if($MyLibraryHoliday_Ktp[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateKtp ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateKtp != '0' || @$TotalPerDateKtp > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateKtp ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateKtp ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Ktp = array_sum($ParentTotalService_Right_Ktp);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_Ktp ?>
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
                $joinAryTest = array($ArySubSalesTotal_Pontianak, $ArySubServiceTotal_Pontianak, $ArySubSalesTotal_Sanggau, $ArySubServiceTotal_Sanggau, $ArySubSalesTotal_Sintang, $ArySubServiceTotal_Sintang, $ArySubSalesTotal_Ktp, $ArySubServiceTotal_Ktp);
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
                $TotalSumSubTotal_kalbar = array_sum($arySumSubTotal);
                $aryTotalSumSubTotal_Kalbar = $arySumSubTotal;
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
                    <?= @$TotalSumSubTotal_kalbar ?>
                </td>
    		</tr>
    	<?php
        if(@$case_per_area == '1'){//jika hanya per Area saja
        ?>
        </table>
        </div>
        <?php
        }
        // echo "<br>";
        $this->load->library('session');
        $this->session->set_userdata('AryTotalSumSubTotal_Kalbar', $aryTotalSumSubTotal_Kalbar);
        $sessAryTotalSumSubTotal_Kalbar = $this->session->userdata('AryTotalSumSubTotal_Kalbar');
        // print_r($sessAryTotalSumSubTotal_Kalbar);
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
            filename: "report_total_data_kalbar.xls",
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
