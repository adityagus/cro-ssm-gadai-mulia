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
    			<td rowspan="22">KALTIM</td>
    			<td rowspan="2">Karang Jati</td>
    			<td>Sales</td>
    			<?php
    			for ($i=1; $i <= $getDay; $i++){ 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_karangjati = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_karangjati = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '24' ")->result();
                foreach ($GetDataCountPerDate_karangjati as $row_total_karangjati) {
                    $GetTotalPerKarangjati = $row_total_karangjati->total_per_date;
                }
                if($GetTotalPerKarangjati <= 0 || $GetTotalPerKarangjati == ''){
                    $TotalPerDateKarangJati = '0';
                }else{
                    $TotalPerDateKarangJati = $GetTotalPerKarangjati;
                }
                $ParentTotalSales_Right_KarangJati[] = $TotalPerDateKarangJati;
                // echo $this->db->last_query();
                $ArySubSalesTotal_KarangJati[] = $TotalPerDateKarangJati;
                array_unshift($ArySubSalesTotal_KarangJati,"");
                unset($ArySubSalesTotal_KarangJati[0]);
                if($MyLibraryHoliday_karangjati[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateKarangJati ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateKarangJati != '0' || @$TotalPerDateKarangJati > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateKarangJati ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateKarangJati ?></label></td>
                    <?php
                    }
                }
    			?>
    			<!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
    			<?php
    			}
                $ArySumTotalSalesRight_KarangJati = array_sum($ParentTotalSales_Right_KarangJati);
    			?>
    			<td>
                    <?= @$ArySumTotalSalesRight_KarangJati ?>
                </td>
    		</tr>
    		<tr>
    			<td>Service</td>
    			<!-- <td></td>
    			<td></td> -->
    			<?php
                for ($i=1; $i <= $getDay; $i++){ 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_karangjati = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_karangjati = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '24' ")->result();
                foreach ($GetDataCountPerDate_karangjati as $row_total_karangjati) {
                    $GetTotalPerKarangjati = $row_total_karangjati->total_per_date;
                }
                if($GetTotalPerKarangjati <= 0 || $GetTotalPerKarangjati == ''){
                    $TotalPerDateKarangJati = '0';
                }else{
                    $TotalPerDateKarangJati = $GetTotalPerKarangjati;
                }
                $ParentTotalService_Right_KarangJati[] = $TotalPerDateKarangJati;
                // echo $this->db->last_query();
                $ArySubServiceTotal_KarangJati[] = $TotalPerDateKarangJati;
                array_unshift($ArySubServiceTotal_KarangJati,"");
                unset($ArySubServiceTotal_KarangJati[0]);
                if($MyLibraryHoliday_karangjati[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateKarangJati ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateKarangJati != '0' || @$TotalPerDateKarangJati > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateKarangJati ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateKarangJati ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_KarangJati = array_sum($ParentTotalService_Right_KarangJati);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_KarangJati ?>
                </td>
    		</tr>
    		<tr>
    			<!-- <td></td> -->
    			<td rowspan="2">Balikpapan</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Balikpapan = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Balikpapan = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '21' ")->result();
                foreach ($GetDataCountPerDate_Balikpapan as $row_total_balikpapan) {
                    $GetTotalPerBalikpapan = $row_total_balikpapan->total_per_date;
                }
                if($GetTotalPerBalikpapan <= 0 || $GetTotalPerBalikpapan == ''){
                    $TotalPerDateBalikpapan = '0';
                }else{
                    $TotalPerDateBalikpapan = $GetTotalPerBalikpapan;
                }
                $ParentTotalSales_Right_Balikpapan[] = $TotalPerDateBalikpapan;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Balikpapan[] = $TotalPerDateBalikpapan;
                array_unshift($ArySubSalesTotal_Balikpapan,"");
                unset($ArySubSalesTotal_Balikpapan[0]);
                if($MyLibraryHoliday_Balikpapan[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBalikpapan ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBalikpapan != '0' || @$TotalPerDateBalikpapan > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBalikpapan ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBalikpapan ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Balikpapan = array_sum($ParentTotalSales_Right_Balikpapan);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Balikpapan ?>
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
                $MyLibraryHoliday_Balikpapan = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Balikpapan = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '21' ")->result();
                foreach ($GetDataCountPerDate_Balikpapan as $row_total_balikpapan) {
                    $GetTotalPerBalikpapan = $row_total_balikpapan->total_per_date;
                }
                if($GetTotalPerBalikpapan <= 0 || $GetTotalPerBalikpapan == ''){
                    $TotalPerDateBalikpapan = '0';
                }else{
                    $TotalPerDateBalikpapan = $GetTotalPerBalikpapan;
                }
                $ParentTotalService_Right_Balikpapan[] = $TotalPerDateBalikpapan;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Balikpapan[] = $TotalPerDateBalikpapan;
                array_unshift($ArySubServiceTotal_Balikpapan,"");
                unset($ArySubServiceTotal_Balikpapan[0]);
                if($MyLibraryHoliday_Balikpapan[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBalikpapan ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBalikpapan != '0' || @$TotalPerDateBalikpapan > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBalikpapan ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBalikpapan ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Balikpapan = array_sum($ParentTotalService_Right_Balikpapan);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Balikpapan ?>
                    <?php
                    // print_r($ArySubSalesTotal_TGRG);
                    ?>          
                </td>
    		</tr>
    		<tr>
    			<!-- <td></td> -->
    			<td rowspan="2">Pemuda</td>
    			<td>Sales</td>
    			<?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_Pemuda = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Pemuda = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '25' ")->result();
                foreach ($GetDataCountPerDate_Pemuda as $row_total_pemuda) {
                    $GetTotalPerPemuda = $row_total_pemuda->total_per_date;
                }
                if($GetTotalPerPemuda <= 0 || $GetTotalPerPemuda == ''){
                    $TotalPerDatePemuda = '0';
                }else{
                    $TotalPerDatePemuda = $GetTotalPerPemuda;
                }
                $ParentTotalSales_Right_Pemuda[] = $TotalPerDatePemuda;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Pemuda[] = $TotalPerDatePemuda;
                array_unshift($ArySubSalesTotal_Pemuda,"");
                unset($ArySubSalesTotal_Pemuda[0]);
                if($MyLibraryHoliday_Pemuda[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDatePemuda ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDatePemuda != '0' || @$TotalPerDatePemuda > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDatePemuda ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDatePemuda ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Pemuda = array_sum($ParentTotalSales_Right_Pemuda);
                ?>
    			<td>
                    <?= @$ArySumTotalSalesRight_Pemuda ?>
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
                $MyLibraryHoliday_Pemuda = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_Pemuda = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '25' ")->result();
                foreach ($GetDataCountPerDate_Pemuda as $row_total_pemuda) {
                    $GetTotalPerPemuda = $row_total_pemuda->total_per_date;
                }
                if($GetTotalPerPemuda <= 0 || $GetTotalPerPemuda == ''){
                    $TotalPerDatePemuda = '0';
                }else{
                    $TotalPerDatePemuda = $GetTotalPerPemuda;
                }
                $ParentTotalService_Right_Pemuda[] = $TotalPerDatePemuda;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Pemuda[] = $TotalPerDatePemuda;
                array_unshift($ArySubServiceTotal_Pemuda,"");
                unset($ArySubServiceTotal_Pemuda[0]);
                if($MyLibraryHoliday_Pemuda[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDatePemuda ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDatePemuda != '0' || @$TotalPerDatePemuda > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDatePemuda ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDatePemuda ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Pemuda = array_sum($ParentTotalService_Right_Pemuda);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Pemuda ?>
                    <?php
                    // print_r($ArySubSalesTotal_DPK);
                    ?>          
                </td>
    		</tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Imam Bonjol</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_imambonjol = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_imambonjol = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '23' ")->result();
                foreach ($GetDataCountPerDate_imambonjol as $row_total_imambonjol) {
                    $GetTotalPerImambonjol = $row_total_imambonjol->total_per_date;
                }
                if($GetTotalPerImambonjol <= 0 || $GetTotalPerImambonjol == ''){
                    $TotalPerDateImambonjol = '0';
                }else{
                    $TotalPerDateImambonjol = $GetTotalPerImambonjol;
                }
                $ParentTotalSales_Right_Imambonjol[] = $TotalPerDateImambonjol;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Imambonjol[] = $TotalPerDateImambonjol;
                array_unshift($ArySubSalesTotal_Imambonjol,"");
                unset($ArySubSalesTotal_Imambonjol[0]);
                if($MyLibraryHoliday_imambonjol[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateImambonjol ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateImambonjol != '0' || @$TotalPerDateImambonjol > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateImambonjol ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateImambonjol ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Imambonjol = array_sum($ParentTotalSales_Right_Imambonjol);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Imambonjol ?>        
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
                $MyLibraryHoliday_imambonjol = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_imambonjol = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '23' ")->result();
                foreach ($GetDataCountPerDate_imambonjol as $row_total_imambonjol) {
                    $GetTotalPerImambonjol = $row_total_imambonjol->total_per_date;
                }
                if($GetTotalPerImambonjol <= 0 || $GetTotalPerImambonjol == ''){
                    $TotalPerDateImambonjol = '0';
                }else{
                    $TotalPerDateImambonjol = $GetTotalPerImambonjol;
                }
                $ParentTotalService_Right_Imambonjol[] = $TotalPerDateImambonjol;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Imambonjol[] = $TotalPerDateImambonjol;
                array_unshift($ArySubServiceTotal_Imambonjol,"");
                unset($ArySubServiceTotal_Imambonjol[0]);
                if($MyLibraryHoliday_imambonjol[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateImambonjol ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateImambonjol != '0' || @$TotalPerDateImambonjol > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateImambonjol ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateImambonjol ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Imambonjol = array_sum($ParentTotalService_Right_Imambonjol);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Imambonjol ?>        
                </td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Tenggarong</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_tenggarong = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_tenggarong = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '28' ")->result();
                foreach ($GetDataCountPerDate_tenggarong as $row_total_tenggarong) {
                    $GetTotalPerTenggarong = $row_total_tenggarong->total_per_date;
                }
                if($GetTotalPerTenggarong <= 0 || $GetTotalPerTenggarong == ''){
                    $TotalPerDateTenggarong = '0';
                }else{
                    $TotalPerDateTenggarong = $GetTotalPerTenggarong;
                }
                $ParentTotalSales_Right_Tenggarong[] = $TotalPerDateTenggarong;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Tenggarong[] = $TotalPerDateTenggarong;
                array_unshift($ArySubSalesTotal_Tenggarong,"");
                unset($ArySubSalesTotal_Tenggarong[0]);
                if($MyLibraryHoliday_tenggarong[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateTenggarong ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateTenggarong != '0' || @$TotalPerDateTenggarong > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateTenggarong ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateTenggarong ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Tenggarong = array_sum($ParentTotalSales_Right_Tenggarong);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Tenggarong ?>        
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
                $MyLibraryHoliday_tenggarong = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_tenggarong = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '28' ")->result();
                foreach ($GetDataCountPerDate_tenggarong as $row_total_tenggarong) {
                    $GetTotalPerTenggarong = $row_total_tenggarong->total_per_date;
                }
                if($GetTotalPerTenggarong <= 0 || $GetTotalPerTenggarong == ''){
                    $TotalPerDateTenggarong = '0';
                }else{
                    $TotalPerDateTenggarong = $GetTotalPerTenggarong;
                }
                $ParentTotalService_Right_Tenggarong[] = $TotalPerDateTenggarong;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Tenggarong[] = $TotalPerDateTenggarong;
                array_unshift($ArySubServiceTotal_Tenggarong,"");
                unset($ArySubServiceTotal_Tenggarong[0]);
                if($MyLibraryHoliday_tenggarong[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateTenggarong ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateTenggarong != '0' || @$TotalPerDateTenggarong > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateTenggarong ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateTenggarong ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Tenggarong = array_sum($ParentTotalService_Right_Tenggarong);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Tenggarong ?>        
                </td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Bontang</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_bontang = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_bontang = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '22' ")->result();
                foreach ($GetDataCountPerDate_bontang as $row_total_bontang) {
                    $GetTotalPerBontang = $row_total_bontang->total_per_date;
                }
                if($GetTotalPerBontang <= 0 || $GetTotalPerBontang == ''){
                    $TotalPerDateBontang = '0';
                }else{
                    $TotalPerDateBontang = $GetTotalPerBontang;
                }
                $ParentTotalSales_Right_Bontang[] = $TotalPerDateBontang;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Bontang[] = $TotalPerDateBontang;
                array_unshift($ArySubSalesTotal_Bontang,"");
                unset($ArySubSalesTotal_Bontang[0]);
                if($MyLibraryHoliday_bontang[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBontang ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBontang != '0' || @$TotalPerDateBontang > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBontang ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBontang ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Bontang = array_sum($ParentTotalSales_Right_Bontang);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Bontang ?>        
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
                $MyLibraryHoliday_bontang = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_bontang = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '22' ")->result();
                foreach ($GetDataCountPerDate_bontang as $row_total_bontang) {
                    $GetTotalPerBontang = $row_total_bontang->total_per_date;
                }
                if($GetTotalPerBontang <= 0 || $GetTotalPerBontang == ''){
                    $TotalPerDateBontang = '0';
                }else{
                    $TotalPerDateBontang = $GetTotalPerBontang;
                }
                $ParentTotalService_Right_Bontang[] = $TotalPerDateBontang;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Bontang[] = $TotalPerDateBontang;
                array_unshift($ArySubServiceTotal_Bontang,"");
                unset($ArySubServiceTotal_Bontang[0]);
                if($MyLibraryHoliday_bontang[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBontang ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBontang != '0' || @$TotalPerDateBontang > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBontang ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBontang ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Bontang = array_sum($ParentTotalService_Right_Bontang);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Bontang ?>        
                </td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Sangata</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_sangata = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_sangata = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '26' ")->result();
                foreach ($GetDataCountPerDate_sangata as $row_total_sangata) {
                    $GetTotalPerSangata = $row_total_sangata->total_per_date;
                }
                if($GetTotalPerSangata <= 0 || $GetTotalPerSangata == ''){
                    $TotalPerDateSangata = '0';
                }else{
                    $TotalPerDateSangata = $GetTotalPerSangata;
                }
                $ParentTotalSales_Right_Sangata[] = $TotalPerDateSangata;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Sangata[] = $TotalPerDateSangata;
                array_unshift($ArySubSalesTotal_Sangata,"");
                unset($ArySubSalesTotal_Sangata[0]);
                if($MyLibraryHoliday_sangata[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateSangata ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateSangata != '0' || @$TotalPerDateSangata > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateSangata ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateSangata ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Sangata = array_sum($ParentTotalSales_Right_Sangata);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Sangata ?>        
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
                $MyLibraryHoliday_sangata = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_sangata = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '26' ")->result();
                foreach ($GetDataCountPerDate_sangata as $row_total_sangata) {
                    $GetTotalPerSangata = $row_total_sangata->total_per_date;
                }
                if($GetTotalPerSangata <= 0 || $GetTotalPerSangata == ''){
                    $TotalPerDateSangata = '0';
                }else{
                    $TotalPerDateSangata = $GetTotalPerSangata;
                }
                $ParentTotalService_Right_Sangata[] = $TotalPerDateSangata;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Sangata[] = $TotalPerDateSangata;
                array_unshift($ArySubServiceTotal_Sangata,"");
                unset($ArySubServiceTotal_Sangata[0]);
                if($MyLibraryHoliday_sangata[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateSangata ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateSangata != '0' || @$TotalPerDateSangata > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateSangata ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateSangata ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Sangata = array_sum($ParentTotalService_Right_Sangata);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Sangata ?>        
                </td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Berau</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_berau = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_berau = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '7' ")->result();
                foreach ($GetDataCountPerDate_berau as $row_total_berau) {
                    $GetTotalPerBerau = $row_total_berau->total_per_date;
                }
                if($GetTotalPerBerau <= 0 || $GetTotalPerBerau == ''){
                    $TotalPerDateBerau = '0';
                }else{
                    $TotalPerDateBerau = $GetTotalPerBerau;
                }
                $ParentTotalSales_Right_Berau[] = $TotalPerDateBerau;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Berau[] = $TotalPerDateBerau;
                array_unshift($ArySubSalesTotal_Berau,"");
                unset($ArySubSalesTotal_Berau[0]);
                if($MyLibraryHoliday_berau[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBerau ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBerau != '0' || @$TotalPerDateBerau > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBerau ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBerau ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Berau = array_sum($ParentTotalSales_Right_Berau);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Berau ?>        
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
                $MyLibraryHoliday_berau = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_berau = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '7' ")->result();
                foreach ($GetDataCountPerDate_berau as $row_total_berau) {
                    $GetTotalPerBerau = $row_total_berau->total_per_date;
                }
                if($GetTotalPerBerau <= 0 || $GetTotalPerBerau == ''){
                    $TotalPerDateBerau = '0';
                }else{
                    $TotalPerDateBerau = $GetTotalPerBerau;
                }
                $ParentTotalService_Right_Berau[] = $TotalPerDateBerau;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Berau[] = $TotalPerDateBerau;
                array_unshift($ArySubServiceTotal_Berau,"");
                unset($ArySubServiceTotal_Berau[0]);
                if($MyLibraryHoliday_berau[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBerau ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBerau != '0' || @$TotalPerDateBerau > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBerau ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBerau ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Berau = array_sum($ParentTotalService_Right_Berau);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Berau ?>       
                </td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Grogot</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_grogot = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_grogot = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '27' ")->result();
                foreach ($GetDataCountPerDate_grogot as $row_total_grogot) {
                    $GetTotalPerGrogot = $row_total_grogot->total_per_date;
                }
                if($GetTotalPerGrogot <= 0 || $GetTotalPerGrogot == ''){
                    $TotalPerDateGrogot = '0';
                }else{
                    $TotalPerDateGrogot = $GetTotalPerGrogot;
                }
                $ParentTotalSales_Right_Grogot[] = $TotalPerDateGrogot;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Grogot[] = $TotalPerDateGrogot;
                array_unshift($ArySubSalesTotal_Grogot,"");
                unset($ArySubSalesTotal_Grogot[0]);
                if($MyLibraryHoliday_grogot[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateGrogot ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateGrogot != '0' || @$TotalPerDateGrogot > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateGrogot ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateGrogot ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Grogot = array_sum($ParentTotalSales_Right_Grogot);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Grogot ?>        
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
                $MyLibraryHoliday_grogot = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_grogot = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '27' ")->result();
                foreach ($GetDataCountPerDate_grogot as $row_total_grogot) {
                    $GetTotalPerGrogot = $row_total_grogot->total_per_date;
                }
                if($GetTotalPerGrogot <= 0 || $GetTotalPerGrogot == ''){
                    $TotalPerDateGrogot = '0';
                }else{
                    $TotalPerDateGrogot = $GetTotalPerGrogot;
                }
                $ParentTotalService_Right_Grogot[] = $TotalPerDateGrogot;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Grogot[] = $TotalPerDateGrogot;
                array_unshift($ArySubServiceTotal_Grogot,"");
                unset($ArySubServiceTotal_Grogot[0]);
                if($MyLibraryHoliday_grogot[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateGrogot ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateGrogot != '0' || @$TotalPerDateGrogot > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateGrogot ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateGrogot ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Grogot = array_sum($ParentTotalService_Right_Grogot);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Grogot ?>        
                </td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Tarakan</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_tarakan = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_tarakan = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '29' ")->result();
                foreach ($GetDataCountPerDate_tarakan as $row_total_tarakan) {
                    $GetTotalPerTarakan = $row_total_tarakan->total_per_date;
                }
                if($GetTotalPerTarakan <= 0 || $GetTotalPerTarakan == ''){
                    $TotalPerDateTarakan = '0';
                }else{
                    $TotalPerDateTarakan = $GetTotalPerTarakan;
                }
                $ParentTotalSales_Right_Tarakan[] = $TotalPerDateTarakan;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Tarakan[] = $TotalPerDateTarakan;
                array_unshift($ArySubSalesTotal_Tarakan,"");
                unset($ArySubSalesTotal_Tarakan[0]);
                if($MyLibraryHoliday_tarakan[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateTarakan ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateTarakan != '0' || @$TotalPerDateTarakan > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateTarakan ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateTarakan ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Tarakan = array_sum($ParentTotalSales_Right_Tarakan);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Tarakan ?>        
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
                $MyLibraryHoliday_tarakan = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_tarakan = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '29' ")->result();
                foreach ($GetDataCountPerDate_tarakan as $row_total_tarakan) {
                    $GetTotalPerTarakan = $row_total_tarakan->total_per_date;
                }
                if($GetTotalPerTarakan <= 0 || $GetTotalPerTarakan == ''){
                    $TotalPerDateTarakan = '0';
                }else{
                    $TotalPerDateTarakan = $GetTotalPerTarakan;
                }
                $ParentTotalService_Right_Tarakan[] = $TotalPerDateTarakan;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Tarakan[] = $TotalPerDateTarakan;
                array_unshift($ArySubServiceTotal_Tarakan,"");
                unset($ArySubServiceTotal_Tarakan[0]);
                if($MyLibraryHoliday_tarakan[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateTarakan ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateTarakan != '0' || @$TotalPerDateTarakan > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateTarakan ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateTarakan ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Tarakan = array_sum($ParentTotalService_Right_Tarakan);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Tarakan ?>        
                </td>
            </tr>
            <tr>
                <!-- <td></td> -->
                <td rowspan="2">Barong Tongkok</td>
                <td>Sales</td>
                <?php
                for ($i=1; $i <= $getDay; $i++) { 
                if($i <= 9){
                    $i = '0'.$i;
                }else{
                    $i = $i;
                }
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_barongtongkok = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_barongtongkok = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '1' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '31' ")->result();
                foreach ($GetDataCountPerDate_barongtongkok as $row_total_barongtongkok) {
                    $GetTotalPerBarongtongkok = $row_total_barongtongkok->total_per_date;
                }
                if($GetTotalPerBarongtongkok <= 0 || $GetTotalPerBarongtongkok == ''){
                    $TotalPerDateBarongtongkok = '0';
                }else{
                    $TotalPerDateBarongtongkok = $GetTotalPerBarongtongkok;
                }
                $ParentTotalSales_Right_Barongtongkok[] = $TotalPerDateBarongtongkok;
                // echo $this->db->last_query();
                $ArySubSalesTotal_Barongtongkok[] = $TotalPerDateBarongtongkok;
                array_unshift($ArySubSalesTotal_Barongtongkok,"");
                unset($ArySubSalesTotal_Barongtongkok[0]);
                if($MyLibraryHoliday_barongtongkok[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBarongtongkok ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBarongtongkok != '0' || @$TotalPerDateBarongtongkok > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBarongtongkok ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBarongtongkok ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalSalesRight_Barongtongkok = array_sum($ParentTotalSales_Right_Barongtongkok);
                ?>
                <td>
                    <?= @$ArySumTotalSalesRight_Barongtongkok ?>        
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
                $MyLibraryHoliday_barongtongkok = array($LibraryMy->getHoliday($joinLoopDate));
                $GetDataCountPerDate_barongtongkok = $this->db->query("SELECT count(*) AS total_per_date FROM tb_hedsurv AS a INNER JOIN tb_surv AS b ON a.id_surv=b.id_surv WHERE a.tipe_cust = '2' AND a.id_respon = '6' AND a.tgl_telp = '".$joinLoopDate."' AND b.id_comp = '31' ")->result();
                foreach ($GetDataCountPerDate_barongtongkok as $row_total_barongtongkok) {
                    $GetTotalPerBarongtongkok = $row_total_barongtongkok->total_per_date;
                }
                if($GetTotalPerBarongtongkok <= 0 || $GetTotalPerBarongtongkok == ''){
                    $TotalPerDateBarongtongkok = '0';
                }else{
                    $TotalPerDateBarongtongkok = $GetTotalPerBarongtongkok;
                }
                $ParentTotalService_Right_Barongtongkok[] = $TotalPerDateBarongtongkok;
                // echo $this->db->last_query();
                $ArySubServiceTotal_Barongtongkok[] = $TotalPerDateBarongtongkok;
                array_unshift($ArySubServiceTotal_Barongtongkok,"");
                unset($ArySubServiceTotal_Barongtongkok[0]);
                if($MyLibraryHoliday_barongtongkok[0]['id'] == '0'){//jika hari libur pada hari sabtu/minggu
                ?>
                <td style="background-color: red;"><label><?= @$TotalPerDateBarongtongkok ?></label></td>
                <?php
                }else{//jika bukan hari libur
                    if(@$TotalPerDateBarongtongkok != '0' || @$TotalPerDateBarongtongkok > 0){//warna kuning
                    ?>
                    <td style="background-color: yellow;"><label><?= @$TotalPerDateBarongtongkok ?></label></td>
                    <?php
                    }else{//warna putih
                    ?>
                    <td style=""><label><?= @$TotalPerDateBarongtongkok ?></label></td>
                    <?php
                    }
                }
                ?>
                <!-- <td><input type="text" name="tgl" value="<?= @$i ?>"></td> -->
                <?php
                }
                $ArySumTotalServiceRight_Barongtongkok = array_sum($ParentTotalService_Right_Barongtongkok);
                ?>
                <td>
                    <?= @$ArySumTotalServiceRight_Barongtongkok ?>        
                </td>
            </tr>
            <!-- START BAGIAN SUB TOTAL -->
    		<tr>
    			<td colspan="3" style="width: 8%; background-color: #ADD8E6;">Sub Total</td>
    			<?php
    			for ($i=1; $i <= $getDay; $i++) { 
                $joinLoopDate = $joinYearMonth.$i;
                $MyLibraryHoliday_DPK = array($LibraryMy->getHoliday($joinLoopDate));
                $joinAryTest = array($ArySubSalesTotal_KarangJati, $ArySubServiceTotal_KarangJati, $ArySubSalesTotal_Balikpapan, $ArySubServiceTotal_Balikpapan, $ArySubSalesTotal_Pemuda, $ArySubServiceTotal_Pemuda, $ArySubSalesTotal_Imambonjol, $ArySubServiceTotal_Imambonjol, $ArySubSalesTotal_Tenggarong, $ArySubServiceTotal_Tenggarong, $ArySubSalesTotal_Bontang, $ArySubServiceTotal_Bontang, $ArySubSalesTotal_Sangata, $ArySubServiceTotal_Sangata, $ArySubSalesTotal_Berau, $ArySubServiceTotal_Berau, $ArySubSalesTotal_Grogot, $ArySubServiceTotal_Grogot, $ArySubSalesTotal_Tarakan, $ArySubServiceTotal_Tarakan, $ArySubSalesTotal_Barongtongkok, $ArySubServiceTotal_Barongtongkok);
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
                $TotalSumSubTotal_kaltim = array_sum($arySumSubTotal);
                $aryTotalSumSubTotal_Kaltim = $arySumSubTotal;
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
                    <?= @$TotalSumSubTotal_kaltim ?>
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
        $this->session->set_userdata('AryTotalSumSubTotal_Kaltim', $aryTotalSumSubTotal_Kaltim);
        $sessAryTotalSumSubTotal_Kaltim = $this->session->userdata('aryTotalSumSubTotal_Kaltim');
        // print_r($sessAryTotalSumSubTotal_Kaltim);
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
            filename: "report_total_data_kaltim.xls",
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
