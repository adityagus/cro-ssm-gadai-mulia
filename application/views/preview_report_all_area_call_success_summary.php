<html>
<head>
    <title>Preview Report Survey Bulanan</title>
    <link rel='stylesheet' href='https://s3-us-west-2.amazonaws.com/s.cdpn.io/5028/basics_3.css'>
    <!-- <link rel="stylesheet" href="./style.css"> -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>css_report/responsive_table_1/style.css?x=<?php echo rand(100, 10000); ?>">
    <style>
    /* .tableFixHead          { height: 100px; } */
    .tableFixHead thead th { position: sticky; top: 0; z-index: 1; }
    /* Just common table stuff. Really. */
    /* table  { border-collapse: collapse; width: 100%;} */
    /* th, td { padding: 8px 16px; } */
    /* th     { background:#eee; } */
	/* START UNTUK NOMOR URUT OTOMATIS */
	/* table {
   		counter-reset: rowNumber;
	}

	table tr:not(:first-child) {
		counter-increment: rowNumber;
	}

	table tr td:first-child::before {
		content: counter(rowNumber);
		min-width: 1em;
		margin-right: 0.5em;
	} */
	/* END UNTUK NOMOR URUT OTOMATIS */
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
<body style="width: 140%;">
<h1 style="text-align: center;">Laporan Call Success Or Not All Area</h1>
<div style="text-align: right;">
	<button class="button-one" style="font-family: Indie Flower;" id="btn_export_excel" name="btn_export_excel">Export to Excel</button>
</div>
<?php
if(@$get_date_filter != '111'){
?>
	<h4>Tanggal : <?= @$get_date_filter ?></h4>
<?php
}else{
?>
	<h4>Tanggal : All Date</h4>
<?php
}
?>
<h4>Bulan : <?= @$get_name_month ?></h4>
<h4>Tahun : <?= @$get_year_filter ?></h4>
<h4>Respon : <?= @$get_respon ?></h4>
<center>
<!-- <?php
    $print_antrian = base_url('C_cro/cetak_report_survey?date_start='.@$date_start.'&date_end='.@$date_end);
?> -->
    <!-- <a href="<?= @$print_survey_bulanan ?>" target="_blank">Cetak Data</a><br><br> -->
</center>
<?php
// $join_month_year_filter = $get_year_filter."-".$get_month_filter;
// echo $join_month_year_filter;
// echo "<br>";
// $DataReportBulanan = $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota,
// a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, a.diskon, a.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, d.id_respon
// FROM tb_surv AS a INNER JOIN tb_surv_header_telepon AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
// INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
// WHERE c.kode_kantor = 'JKT' AND c.nama = 'BOGOR' AND a.tgl_inv LIKE '%".$join_month_year_filter."%' ORDER BY a.tgl_inv DESC")->result();
// print_r($DataReportBulanan);
// echo "<br>";
// echo $this->db->last_query();
// // die();
// echo "<br>";
// echo "<br>";
?>
<!-- style="padding-left: 5%; padding-right: 5%;" -->
<div>
    <div>
<!-- style="font-weight:bold" -->
<!-- position: fixed; -->
<div class="tableFixHead">
          <table class="responsive-table" style="width: 100%; height: 100%; display: block; overflow-x: scroll; white-space: nowrap;" id="tbl_report_all_area_call_success" name="tbl_report_all_area_call_success">
            <thead>
                <tr>
					<!-- <th scope="col">No</th> -->
                    <th scope="col">Area</th>
					<th scope="col">Survey</th>
                    <th scope="col">Cabang</th>
                    <th scope="col" style="width: 7%;">TGL. WO</th>
                    <th scope="col">Nama Customer</th>
                    <th scope="col">Telepon</th>
                    <th scope="col">Type</th>
                    <th scope="col" style="width: 7%;">TGL. INVOICE</th>
                    <th scope="col" style="width: 10%;">DISKON</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col" style="width: 10%;">Category</th>
					<th scope="col">Qty</th>
                </tr>
            </thead>
<?php
		$no_first = 0;
        foreach($DataCompanyAreaCabang as $row_company){
			
            $KodeKantor = $row_company->kode_kantor;
            $JmlCabang = $row_company->jml_cabang;
            // if($KodeKantor == @$GetKodeKantor){
			if($GetKodeKantor == '222'){
                // echo "Area : ";
                // print_r($KodeKantor);
                // print_r($JmlCabang);
                // echo "<br>";
                ?>
                <!-- <h4>Area : <?= @$KodeKantor ?></h4> -->
                <!-- <h4>Bulan : <?= @$get_name_month ?></h4>
                <h4>Tahun : <?= @$get_year_filter ?></h4> -->
				<!-- <h4>Tahun tes : <?= @$join_month_year_filter = $get_year_filter."-".$get_month_filter."-".$get_date_filter; ?></h4> -->
                <!-- <br> -->

                <?php
                // $DataCabang = $this->db->query("SELECT a.kota AS cabang, a.nama AS cabang_nama, a.kode_kantor FROM mst_company AS a WHERE a.kode_kantor='".$KodeKantor."' ")->result();
				$DataCabang = $this->db->query("SELECT a.kota AS cabang, a.nama AS cabang_nama, a.kode_kantor FROM mst_company AS a WHERE a.kode_kantor != 'PCO' AND a.kode_kantor != 'HO' AND a.kode_kantor='".$KodeKantor."' ")->result();
				// echo $this->db->last_query();die();
                // print_r($DataCabang);
                $cek_emptydata = 0;
                ?>

                <?php
                foreach($DataCabang as $row_cabang){
					$no_first++;
                    $CabangCompany = $row_cabang->cabang;
                    $CabangNama = $row_cabang->cabang_nama;
                    //start sample with where date
                    // $sql_sample_date = $this->db->query("SELECT * FROM antrian AS a INNER JOIN user AS u ON a.username = u.Username WHERE tanggal_masuk >= '".$date_start."' AND tanggal_masuk <= '".$date_end."' AND deleted = 0 ORDER BY id_antrian DESC ")->result();
                    // $query_start_end_date = "AND a.tgl_inv >= '".$date_start."' AND a.tgl_inv <= '".$date_end."' ";
                    //end sample with where date
                    // $join_month_year_filter = $get_year_filter."-".$get_month_filter;// version old
					if($get_date_filter == '111'){//jika tidak pilih dengan tanggal
						$join_month_year_filter = $get_year_filter."-".$get_month_filter;
						// $join_month_year_filter = '2021-09-01';
					}else{//jika pilih dengan tanggal
						$join_month_year_filter = $get_year_filter."-".$get_month_filter."-".$get_date_filter;
						// $join_month_year_filter = '2021-09-01';
					}
					$id_respon = $get_id_respon_filter;
                    if($get_month_filter != '' && $get_year_filter != ''){
						if($id_respon == 99){//jika pilih All Respon
							$DataReportBulanan_jmlDataArea = $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
							$DataReportBulanan = $this->db->query("SELECT a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
							// echo $this->db->last_query();
							// die();
						}elseif($id_respon == 91){//jika pilih tanpa respon call sukses
							$DataReportBulanan_jmlDataArea = $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' AND e.id_respon != '6' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
							$DataReportBulanan = $this->db->query("SELECT a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' AND e.id_respon != '6' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
						}else{//jika bukan pilih All Respon
							$DataReportBulanan_jmlDataArea = $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' AND e.id_respon = '".$id_respon."' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
							$DataReportBulanan = $this->db->query("SELECT a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' AND e.id_respon = '".$id_respon."' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
							// echo $this->db->last_query();
							// die();
						}
						// echo $this->db->last_query();
						// die();
					}else{
						if($id_respon == 99){//jika pilih All Respon
							$DataReportBulanan_jmlDataArea = $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
							$DataReportBulanan = $this->db->query("SELECT a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
						}elseif($id_respon == 91){
							$DataReportBulanan_jmlDataArea = $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' AND e.id_respon != '6' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
							$DataReportBulanan = $this->db->query("SELECT a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' AND e.id_respon != '6' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
						}else{//jika bukan pilih All Respon
							$DataReportBulanan_jmlDataArea = $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' AND e.id_respon = '".$id_respon."' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();	
							$DataReportBulanan = $this->db->query("SELECT a.id_surv, d.tgl_detail_telepon, a.nama_cust, c.kode_kantor, a.id_comp, c.nama AS nama_cabang, c.kota, a.tipe_cust, a.tgl_wo, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.type AS type_motor, a.tgl_inv, e.harga_diskon as diskon, e.kritik_saran, b.flex_telepon, b.counter, d.telepon AS tlp_detail, e.id_respon
							FROM tb_hedsurv AS e INNER JOIN tb_surv AS a ON e.id_surv = a.id_surv INNER JOIN tb_surv_header_telepon AS b ON e.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company
							INNER JOIN tb_surv_detail_telepon AS d ON b.id_header_telepon = d.id_header_telepon
							WHERE c.kode_kantor = '".$KodeKantor."' AND c.nama = '".$CabangNama."' AND e.tgl_telp LIKE '%".$join_month_year_filter."%' AND e.id_respon = '".$id_respon."' GROUP BY e.id_surv, e.id_respon ORDER BY d.tgl_detail_telepon ASC")->result();
						}
						// echo $this->db->last_query();
						// die();
					}
                    // echo "<br>";
                    // echo $this->db->last_query();
                    // echo "<br>";
                    $Array_DataReportBulanan[] = $DataReportBulanan;
                    $BulananReportData=$DataReportBulanan;
                    // foreach($BulananReportData as $row_report){
                    //   $ItemTypeService[] = $row_report->type;
                    // }
					foreach($DataReportBulanan_jmlDataArea as $row_cek_data_rpt){
						$JmlDataArea = $row_cek_data_rpt->jml_data_area;
					}
                if($DataReportBulanan == array() || $DataReportBulanan == NULL || $DataReportBulanan == '' || $JmlDataArea == '0'){
                    // echo "Tidak Ada Data Untuk Cabang ";
                    // print_r($row_cabang->cabang);
                    // echo "<br>";
					continue;
                }else{
                    // echo "<br>";
                    // echo "Nama Cabang : ";
                    // print_r($row_cabang->nama);
                    // echo "<br>";
                    $itemNamaCabang[] = $row_cabang->cabang_nama;
                    // echo "Cabang : ";
                    // print_r($row_cabang->cabang);
                    // echo "<br>";
                ?>
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
			$startTotal++;
            $no++;
			$Surv_ID = $row->id_surv;
			$ID_Respon = $row->id_respon;
			$GetHeadsurv_diskon_ket = $this->db->query("SELECT kritik_saran, harga_beli, harga_diskon FROM tb_hedsurv WHERE id_surv='".$Surv_ID."' AND id_respon='".$ID_Respon."' ")->result();
			foreach($GetHeadsurv_diskon_ket as $row_hedsurv_ket){
				@$Get_KritikSaran = $row_hedsurv_ket->kritik_saran;
				@$Get_HargaBeli = $row_hedsurv_ket->harga_beli;
				@$Get_HargaDiskon = $row_hedsurv_ket->harga_diskon;
			}
			if($row->tipe_cust == 1){
				$TipeCust = "SALES";
			}elseif($row->tipe_cust == 2){
				$TipeCust = "SERVICE";
			}else{
				$TipeCust = "Undifined";
			}
			if($row->id_respon == 1){
				$KetRespon = "Tidak Aktif";
			}elseif($row->id_respon == 2){
				$KetRespon = "Salah Sambung";
			}elseif($row->id_respon == 3){
				$KetRespon = "Tidak Beri Nilai";
			}elseif($row->id_respon == 4){
				$KetRespon = "Tidak Terdaftar";
			}elseif($row->id_respon == 5){
				$KetRespon = "Tidak Direspon";
			}elseif($row->id_respon == 6){
				$KetRespon = "Call Success";
			}else{
				$KetRespon = "Undifined";
			}
			$telp1 = $row->telepon1;
			$telp2 = $row->telepon2;
			$telp3 = $row->hp;
			$telp4 = $row->tlp_wo;
			$join_telp = $telp1."/".$telp2."/".$telp3."/".$telp4;
			$qty = 1;
			$Ary_qty[] = $qty;
            // $Total_A = $row->Kosong + $row->Pertama + $row->Dua + $row->Tiga + $row->Empat + $row->Lima + $row->Enam;
            // $Total_B = $row->Tujuh + $row->Delapan;
            // $Total_C = $row->Sembilan + $row->Sepuluh;
            // $A = $Total_A / $row->Total * 100;
            // $B = $Total_B / $row->Total * 100;
            // $C = $Total_C / $row->Total * 100;
            // $Result = $C - $A;
            // $Total_ar = array($row->Total);
            // $TotalPartipisan = $row->Total;
            // $TotalPartipisan++;
            // $getTotal = $TotalPartipisan;
            // $ReportBulanan[] = $row;
            // $data_total[] = $row->Total;
            // if($row->Total == 1 ){
            // $dataSurvey[] = $row->type;
            // $dataNo[] = $no;
            // if($row->type == 'SERVICE' && $row->no_type == 1){
            //   $GetOneTotal = $row->Total;
            // }elseif($row->type == 'SALES' && $row->no_type == 1){
            //   $GetOneTotal = $row->Total;
            // }
            // else{
            //   $GetOneTotal = 0;
            // }
            // $ArrayGetTotal[] = $GetOneTotal;
            ?>
                <tr>
                  <!-- <td></td> -->
                  <td data-title="Kode_Kantor" tyle="text-align: left;"><?php echo $row->kode_kantor ?></td>
                  <td data-title="Tipe_cust" tyle="text-align: left;"><?php echo $TipeCust ?></td>
				  <td data-title="Nama_cabang" tyle="text-align: left;"><?php echo $row->nama_cabang ?></td>
                  <td data-title="Tgl_wo" tyle="text-align: left;"><?php echo $row->tgl_wo ?></td>
                  <td data-title="Nama_cust" style="text-align: left;"><?php echo $row->nama_cust ?></td>
                  <td data-title="Telepon" tyle="text-align: left;"><?php echo $join_telp ?></td>
                  <td data-title="Type_motor" style="text-align: left;"><?php echo $row->type_motor ?></td>
                  <td data-title="Tgl_inv" tyle="text-align: left;"><?php echo $row->tgl_inv ?></td>
                  <!-- <td data-title="Diskon" tyle="text-align: left;"><?php echo "Rp. ".number_format((float)@$Get_HargaDiskon, 0, ".", ".") ?></td> -->
				  <td data-title="Diskon" tyle="text-align: left;"><?php echo $Get_HargaDiskon ?></td>
                  <td data-title="Keterangan" style="text-align: left;"><?php echo $Get_KritikSaran ?></td>
                  <td data-title="Respon" tyle="text-align: left;"><?php echo $KetRespon ?></td>
				  <td data-title="Respon" tyle="text-align: left;">1</td>
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
        <!-- </table> -->
        <!-- <br> -->
        <?php
        // array_unshift($Array_DataReportBulanan,"");
        // unset($Array_DataReportBulanan[0]);
        // print_r($cek_emptydata);
		// print_r($startTotal);
        // $TotalCabangIndex = $JmlCabangIndex;//not used
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
        // @$SumArrayGetTotal = array_sum($ArrayGetTotal);
        // print_r($ArrayGetTotal);
        //start coding bagian hitung Rata-Rata
          //start for service
        // @$SumArray_GetServiceNoType_1 = array_sum($Array_GetServiceNoType_1);
        // @$Rata_rata_ServiceNoType_1 = $SumArray_GetServiceNoType_1/$SumArrayGetTotal;
        // @$SumArray_GetServiceNoType_2 = array_sum($Array_GetServiceNoType_2);
        // @$Rata_rata_ServiceNoType_2 = $SumArray_GetServiceNoType_2/$SumArrayGetTotal;
        // @$SumArray_GetServiceNoType_3 = array_sum($Array_GetServiceNoType_3);
        // @$Rata_rata_ServiceNoType_3 = $SumArray_GetServiceNoType_3/$SumArrayGetTotal;
        // @$SumArray_GetServiceNoType_4 = array_sum($Array_GetServiceNoType_4);
        // @$Rata_rata_ServiceNoType_4 = $SumArray_GetServiceNoType_4/$SumArrayGetTotal;
        //   //end for service
        //   //start for sales
        // @$SumArray_GetSalesNoType_1 = array_sum($Array_GetSalesNoType_1);
        // @$Rata_rata_SalesNoType_1 = $SumArray_GetSalesNoType_1/$SumArrayGetTotal;
        // @$SumArray_GetSalesNoType_2 = array_sum($Array_GetSalesNoType_2);
        // @$Rata_rata_SalesNoType_2 = $SumArray_GetSalesNoType_2/$SumArrayGetTotal;
        // @$SumArray_GetSalesNoType_3 = array_sum($Array_GetSalesNoType_3);
        // @$Rata_rata_SalesNoType_3 = $SumArray_GetSalesNoType_3/$SumArrayGetTotal;
        // @$SumArray_GetSalesNoType_4 = array_sum($Array_GetSalesNoType_4);
        // @$Rata_rata_SalesNoType_4 = $SumArray_GetSalesNoType_4/$SumArrayGetTotal;
          //end for sales
        //start coding bagian hitung Rata-Rata
        // array_unshift($Array_GetSalesNoType_1,"");
        // unset($Array_GetSalesNoType_1[0]);
        // print_r($Array_GetSalesNoType_1);
        // echo "<br>";
        // print_r($ArrayGetTotal);
        if(@$startTotal == 0){
          echo "<center><p style='color:red;'>Tidak Ada Laporan Call Success/Not Pada Area : ".@$GetKodeKantor."</p></center>";
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
        <!-- <table class="responsive-table" style="width: 15%;"> -->
            <!-- <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Total All</th>
                </tr>
            </thead> -->
            <tbody>
                <tr>
                    <td data-title="Summary" colspan="11" style="text-align: left;">
					TOTAL
					<?php 
					// print_r($Ary_qty); 
					@$SumArrayGetTotal = array_sum($Ary_qty);
					// @$SumArrayGetTotalFix = @$SumArrayGetTotal - 1;
					?>
					
				</td>
                    <td data-title="Total" style="background-color: yellow;"><?= @$SumArrayGetTotal; ?></td>
                </tr>
            </tbody>
        </table>
        <br>
        <?php
          // echo "Ada data!!!";
        }
        ?>
</div>

    </div>
</div>
<!-- jQuery -->
<script src="<?php echo base_url(); ?>assets/plugins/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/export/excel/jquery.table2excel.js"></script>
<script type="text/javascript">
// $(function(){
	$('#btn_export_excel').click(function(e){  
		// e.preventDefault();      
        $('#tbl_report_all_area_call_success').table2excel({
            exclude: ".noExl",
			name: "Excel Document Name",
            filename: "Report_all_area_call_success.xls",
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
