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
    			<td rowspan="12">KALSEL</td>
    			<td rowspan="2">Ahmad Yani</td>
    			<td>Sales</td>
    			<?php
    			for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Ahmadyani = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Ahmadyani = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '9' ")->result();
                foreach ($GetDataCountPerDate_Ahmadyani as $row_total_ahmadyani) {
                    $GetTotalPerAhmadyani = $row_total_ahmadyani->total_per_date;
                }
                if($GetTotalPerAhmadyani <= 0 || $GetTotalPerAhmadyani == ''){
                    $TotalPerDateAhmadyani = '0';
                }else{
                    $TotalPerDateAhmadyani = $GetTotalPerAhmadyani;
                }
                $ParentTotalSales_Right_Ahmadyani[] = $TotalPerDateAhmadyani;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Ahmadyani[] = $TotalPerDateAhmadyani;
                array_unshift($ArySubSalesTotal_Ahmadyani,"");
                unset($ArySubSalesTotal_Ahmadyani[0]);
                if($MyLibraryHoliday_Ahmadyani[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateAhmadyani ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateAhmadyani != '0' || @$TotalPerDateAhmadyani > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateAhmadyani ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateAhmadyani ?></label></td>
                    <?php
                    }
                }
    			?>
    			<!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
    			<?php
    			}
                $ArySumTotalSalesRight_Ahmadyani = array_sum($ParentTotalSales_Right_Ahmadyani);
    			?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Ahmadyani ?>
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
                $MyLibraryHoliday_Ahmadyani = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Ahmadyani = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '9' ")->result();
                foreach ($GetDataCountPerDate_Ahmadyani as $row_total_ahmadyani) {
                    $GetTotalPerAhmadyani = $row_total_ahmadyani->total_per_date;
                }
                if($GetTotalPerAhmadyani <= 0 || $GetTotalPerAhmadyani == ''){
                    $TotalPerDateAhmadyani = '0';
                }else{
                    $TotalPerDateAhmadyani = $GetTotalPerAhmadyani;
                }
                $ParentTotalService_Right_Ahmadyani[] = $TotalPerDateAhmadyani;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Ahmadyani[] = $TotalPerDateAhmadyani;
                array_unshift($ArySubServiceTotal_Ahmadyani,"");
                unset($ArySubServiceTotal_Ahmadyani[0]);
    			if($MyLibraryHoliday_Ahmadyani[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateAhmadyani ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateAhmadyani != '0' || @$TotalPerDateAhmadyani > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateAhmadyani ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateAhmadyani ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Ahmadyani = array_sum($ParentTotalService_Right_Ahmadyani);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_Ahmadyani ?>     
                </td>
    		</tr>
    		<tr>
    			<!-- <td></td> -->
    			<td rowspan="2">Martapura</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Martapura = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Martapura = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '12' ")->result();
                foreach ($GetDataCountPerDate_Martapura as $row_total_martapura) {
                    $GetTotalPerMartapura = $row_total_martapura->total_per_date;
                }
                if($GetTotalPerMartapura <= 0 || $GetTotalPerMartapura == ''){
                    $TotalPerDateMartapura = '0';
                }else{
                    $TotalPerDateMartapura = $GetTotalPerMartapura;
                }
                $ParentTotalSales_Right_Martapura[] = $TotalPerDateMartapura;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Martapura[] = $TotalPerDateMartapura;
                array_unshift($ArySubSalesTotal_Martapura,"");
                unset($ArySubSalesTotal_Martapura[0]);
                if($MyLibraryHoliday_Martapura[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateMartapura ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateMartapura != '0' || @$TotalPerDateMartapura > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateMartapura ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateMartapura ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Martapura = array_sum($ParentTotalSales_Right_Martapura);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Martapura ?>        
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
                $MyLibraryHoliday_Martapura = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Martapura = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '12' ")->result();
                foreach ($GetDataCountPerDate_Martapura as $row_total_martapura) {
                    $GetTotalPerMartapura = $row_total_martapura->total_per_date;
                }
                if($GetTotalPerMartapura <= 0 || $GetTotalPerMartapura == ''){
                    $TotalPerDateMartapura = '0';
                }else{
                    $TotalPerDateMartapura = $GetTotalPerMartapura;
                }
                $ParentTotalService_Right_Martapura[] = $TotalPerDateMartapura;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Martapura[] = $TotalPerDateMartapura;
                array_unshift($ArySubServiceTotal_Martapura,"");
                unset($ArySubServiceTotal_Martapura[0]);
                if($MyLibraryHoliday_Martapura[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateMartapura ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateMartapura != '0' || @$TotalPerDateMartapura > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateMartapura ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateMartapura ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Martapura = array_sum($ParentTotalService_Right_Martapura);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_Martapura ?>        
                </td>
    		</tr>
    		<tr>
    			<!-- <td></td> -->
    			<td rowspan="2">Pelaihari</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Pelaihari = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Pelaihari = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '14' ")->result();
                foreach ($GetDataCountPerDate_Pelaihari as $row_total_pelaihari) {
                    $GetTotalPerPelaihari = $row_total_pelaihari->total_per_date;
                }
                if($GetTotalPerPelaihari <= 0 || $GetTotalPerPelaihari == ''){
                    $TotalPerDatePelaihari = '0';
                }else{
                    $TotalPerDatePelaihari = $GetTotalPerPelaihari;
                }
                $ParentTotalSales_Right_Pelaihari[] = $TotalPerDatePelaihari;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Pelaihari[] = $TotalPerDatePelaihari;
                array_unshift($ArySubSalesTotal_Pelaihari,"");
                unset($ArySubSalesTotal_Pelaihari[0]);
                if($MyLibraryHoliday_Pelaihari[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDatePelaihari ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDatePelaihari != '0' || @$TotalPerDatePelaihari > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDatePelaihari ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDatePelaihari ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Pelaihari = array_sum($ParentTotalSales_Right_Pelaihari);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Pelaihari ?>         
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
                $MyLibraryHoliday_Pelaihari = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Pelaihari = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '14' ")->result();
                foreach ($GetDataCountPerDate_Pelaihari as $row_total_pelaihari) {
                    $GetTotalPerPelaihari = $row_total_pelaihari->total_per_date;
                }
                if($GetTotalPerPelaihari <= 0 || $GetTotalPerPelaihari == ''){
                    $TotalPerDatePelaihari = '0';
                }else{
                    $TotalPerDatePelaihari = $GetTotalPerPelaihari;
                }
                $ParentTotalService_Right_Pelaihari[] = $TotalPerDatePelaihari;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Pelaihari[] = $TotalPerDatePelaihari;
                array_unshift($ArySubServiceTotal_Pelaihari,"");
                unset($ArySubServiceTotal_Pelaihari[0]);
                if($MyLibraryHoliday_Pelaihari[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDatePelaihari ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDatePelaihari != '0' || @$TotalPerDatePelaihari > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDatePelaihari ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDatePelaihari ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Pelaihari = array_sum($ParentTotalService_Right_Pelaihari);
                ?>
    			<td>
                    <?= @$ArySumTotalServiceRight_Pelaihari ?>      
                </td>
    		</tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Palangkaraya</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_palangkaraya = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_palangkaraya = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '15' ")->result();
                foreach ($GetDataCountPerDate_palangkaraya as $row_total_palangkaraya) {
                    $GetTotalPerPalangkaraya = $row_total_palangkaraya->total_per_date;
                }
                if($GetTotalPerPalangkaraya <= 0 || $GetTotalPerPalangkaraya == ''){
                    $TotalPerDatePalangkaraya = '0';
                }else{
                    $TotalPerDatePalangkaraya = $GetTotalPerPalangkaraya;
                }
                $ParentTotalSales_Right_Palangkaraya[] = $TotalPerDatePalangkaraya;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Palangkaraya[] = $TotalPerDatePalangkaraya;
                array_unshift($ArySubSalesTotal_Palangkaraya,"");
                unset($ArySubSalesTotal_Palangkaraya[0]);
                if($MyLibraryHoliday_palangkaraya[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDatePalangkaraya ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDatePalangkaraya != '0' || @$TotalPerDatePalangkaraya > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDatePalangkaraya ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDatePalangkaraya ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Palangkaraya = array_sum($ParentTotalSales_Right_Palangkaraya);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Palangkaraya ?>        
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
                $MyLibraryHoliday_palangkaraya = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_palangkaraya = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '15' ")->result();
                foreach ($GetDataCountPerDate_palangkaraya as $row_total_palangkaraya) {
                    $GetTotalPerPalangkaraya = $row_total_palangkaraya->total_per_date;
                }
                if($GetTotalPerPalangkaraya <= 0 || $GetTotalPerPalangkaraya == ''){
                    $TotalPerDatePalangkaraya = '0';
                }else{
                    $TotalPerDatePalangkaraya = $GetTotalPerPalangkaraya;
                }
                $ParentTotalService_Right_Palangkaraya[] = $TotalPerDatePalangkaraya;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Palangkaraya[] = $TotalPerDatePalangkaraya;
                array_unshift($ArySubServiceTotal_Palangkaraya,"");
                unset($ArySubServiceTotal_Palangkaraya[0]);
                if($MyLibraryHoliday_palangkaraya[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDatePalangkaraya ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDatePalangkaraya != '0' || @$TotalPerDatePalangkaraya > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDatePalangkaraya ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDatePalangkaraya ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Palangkaraya = array_sum($ParentTotalService_Right_Palangkaraya);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Palangkaraya ?>
                    <?php
                    ?>        
                </td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Sampit</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_sampit = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_sampit = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '16' ")->result();
                foreach ($GetDataCountPerDate_sampit as $row_total_sampit) {
                    $GetTotalPerSampit = $row_total_sampit->total_per_date;
                }
                if($GetTotalPerSampit <= 0 || $GetTotalPerSampit == ''){
                    $TotalPerDateSampit = '0';
                }else{
                    $TotalPerDateSampit = $GetTotalPerSampit;
                }
                $ParentTotalSales_Right_Sampit[] = $TotalPerDateSampit;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Sampit[] = $TotalPerDateSampit;
                array_unshift($ArySubSalesTotal_Sampit,"");
                unset($ArySubSalesTotal_Sampit[0]);
                if($MyLibraryHoliday_sampit[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateSampit ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateSampit != '0' || @$TotalPerDateSampit > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateSampit ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateSampit ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Sampit = array_sum($ParentTotalSales_Right_Sampit);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Sampit ?>        
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
                $MyLibraryHoliday_sampit = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_sampit = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '16' ")->result();
                foreach ($GetDataCountPerDate_sampit as $row_total_sampit) {
                    $GetTotalPerSampit = $row_total_sampit->total_per_date;
                }
                if($GetTotalPerSampit <= 0 || $GetTotalPerSampit == ''){
                    $TotalPerDateSampit = '0';
                }else{
                    $TotalPerDateSampit = $GetTotalPerSampit;
                }
                $ParentTotalService_Right_Sampit[] = $TotalPerDateSampit;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Sampit[] = $TotalPerDateSampit;
                array_unshift($ArySubServiceTotal_Sampit,"");
                unset($ArySubServiceTotal_Sampit[0]);
                if($MyLibraryHoliday_sampit[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateSampit ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateSampit != '0' || @$TotalPerDateSampit > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateSampit ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateSampit ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Sampit = array_sum($ParentTotalService_Right_Sampit);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Sampit ?>        
                </td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Pangkalanbun</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_pangkalanbun = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_pangkalanbun = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '32' ")->result();
                foreach ($GetDataCountPerDate_pangkalanbun as $row_total_pangkalanbun) {
                    $GetTotalPerPangkalanbun = $row_total_pangkalanbun->total_per_date;
                }
                if($GetTotalPerPangkalanbun <= 0 || $GetTotalPerPangkalanbun == ''){
                    $TotalPerDatePangkalanbun = '0';
                }else{
                    $TotalPerDatePangkalanbun = $GetTotalPerPangkalanbun;
                }
                $ParentTotalSales_Right_Pangkalanbun[] = $TotalPerDatePangkalanbun;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Pangkalanbun[] = $TotalPerDatePangkalanbun;
                array_unshift($ArySubSalesTotal_Pangkalanbun,"");
                unset($ArySubSalesTotal_Pangkalanbun[0]);
                if($MyLibraryHoliday_pangkalanbun[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDatePangkalanbun ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDatePangkalanbun != '0' || @$TotalPerDatePangkalanbun > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDatePangkalanbun ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDatePangkalanbun ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Pangkalanbun = array_sum($ParentTotalSales_Right_Pangkalanbun);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Pangkalanbun ?>        
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
                $MyLibraryHoliday_pangkalanbun = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_pangkalanbun = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '32' ")->result();
                foreach ($GetDataCountPerDate_pangkalanbun as $row_total_pangkalanbun) {
                    $GetTotalPerPangkalanbun = $row_total_pangkalanbun->total_per_date;
                }
                if($GetTotalPerPangkalanbun <= 0 || $GetTotalPerPangkalanbun == ''){
                    $TotalPerDatePangkalanbun = '0';
                }else{
                    $TotalPerDatePangkalanbun = $GetTotalPerPangkalanbun;
                }
                $ParentTotalService_Right_Pangkalanbun[] = $TotalPerDatePangkalanbun;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Pangkalanbun[] = $TotalPerDatePangkalanbun;
                array_unshift($ArySubServiceTotal_Pangkalanbun,"");
                unset($ArySubServiceTotal_Pangkalanbun[0]);
                if($MyLibraryHoliday_pangkalanbun[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDatePangkalanbun ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDatePangkalanbun != '0' || @$TotalPerDatePangkalanbun > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDatePangkalanbun ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDatePangkalanbun ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Pangkalanbun = array_sum($ParentTotalService_Right_Pangkalanbun);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Pangkalanbun ?>
                    <?php
                    ?>        
                </td>
            </tr>
    		<tr>
    			<td colspan="3" style="width: 8%; background-color: #ADD8E6;">Sub Total</td>
    			<?php
    			for ($i=1; $i <= $getDay; $i++) { 
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_DPK = array($LibraryMy->getHoliday($joinLoopDate));
                $joinAryTest = array($ArySubSalesTotal_Ahmadyani, $ArySubServiceTotal_Ahmadyani, $ArySubSalesTotal_Martapura, $ArySubServiceTotal_Martapura, $ArySubSalesTotal_Pelaihari, $ArySubServiceTotal_Pelaihari, $ArySubSalesTotal_Palangkaraya, $ArySubSalesTotal_Sampit, $ArySubServiceTotal_Sampit, $ArySubServiceTotal_Palangkaraya, $ArySubSalesTotal_Pangkalanbun, $ArySubServiceTotal_Pangkalanbun);
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
                $TotalSumSubTotal_kalsel = array_sum($arySumSubTotal);
                $aryTotalSumSubTotal_Kalsel = $arySumSubTotal;
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
                    <?= @$TotalSumSubTotal_kalsel ?>
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
        $this->session->set_userdata('AryTotalSumSubTotal_Kalsel', $aryTotalSumSubTotal_Kalsel);
        $sessAryTotalSumSubTotal_Kalsel = $this->session->userdata('AryTotalSumSubTotal_Kalsel');
        // print_r($sessAryTotalSumSubTotal_Kalsel);
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
            filename: "report_total_data_kalsel.xls",
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
