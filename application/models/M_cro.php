<?php

class M_cro extends CI_Model{

  function getMasterQuest()
  {
    return $this->db->get('mst_quest');
  }

  function getquest($statusCust='')
  {
    // return $this->db->get('mst_quest');
    if($statusCust == 1){
      $Status = "SALES";
    }elseif($statusCust == 2){
      $Status = "SERVICE";
    }else{
      $Status = "";
    }
    $this->db->where('type', $Status);
    $this->db->from('mst_quest');
    return $this->db->get();
  }
  function getresp()
  {
    return $this->db->get('mst_respon');
  }
  function get_custmonthslskws($bln,$thn)
  {
    $awal = mktime(0,0,0,$bln,1,$thn);
    $akhir = mktime(23,59,59,$bln+1,0,$thn);
    $db3 = $this->load->database('db3', TRUE);
    $db3->select(['id','nama_customer','customer.telepon_1','customer.telepon_2','customer.hp','type','tgl_invoice','warna','diskon','rpt_sales_bbn.id_company']);
    // $db3->select(['customer.id_customer','customer.nama','customer.telepon_1','customer.telepon_2','customer.hp','tgl_invoice','type','warna','diskon']);
    $db3->from('rpt_sales_bbn');
    $db3->join('pj_so','pj_so.no_so=rpt_sales_bbn.no_spk');
    $db3->join('customer','customer.id_customer=pj_so.id_customer');
    $db3->where('tgl_invoice >=', $awal);
    $db3->where('tgl_invoice <=', $akhir);
    $db3->where('cons_group', 'PERORANGAN');
    $db3->where("(customer.telepon_1 not in('','0') or customer.telepon_2 not in('','0') or customer.hp not in('','0'))");
    // $db3->limit(1);
    return $db3->get();
  }
  function get_custmonthservkws($bln,$thn)
  {
    $awal = mktime(0,0,0,$bln,1,$thn);
    $akhir = mktime(23,59,59,$bln+1,0,$thn);
    $db3 = $this->load->database('db3', TRUE);
    $db3->select(['customer.id_customer','nama_customer','telepon_1','telepon_2','hp','inventori.nama','date_sinv','pj_sinv.discount','pj_sinv.id_company','date_so','pj_so.alamat']);
    $db3->from('pj_sinv');
    $db3->join('customer','customer.id_customer=pj_sinv.id_customer');
    $db3->join('cus_has_motor','cus_has_motor.id_chm=pj_sinv.id_remark');
    $db3->join('inventori','inventori.id_inventori=cus_has_motor.id_inventori');
	$db3->join('pj_so','pj_so.id_so=pj_sinv.id_so');
    $db3->where('date_sinv >=', $awal);
    $db3->where('date_sinv <=', $akhir);
    $db3->where('customer.kode_cusgrup', 'PERORANGAN');
    $db3->where('pj_sinv.auto_type', 2);
    $db3->where('pj_sinv.approval1', 't');
    $db3->where("(customer.telepon_1 not in('','0') or customer.telepon_2 not in('','0') or customer.hp not in('','0') or pj_so.alamat not in('','0'))");
    // $db3->limit(1);
    return $db3->get();
  }
  function add_custslskws($x)
  {
    $this->db->insert('tb_surv', $x);
  }
  function add_custservkws($x)
  {
    $this->db->insert('tb_surv', $x);
  }
  function get_allcustmonth($yearNow='',$monthNow='')
  {
    // $this->db->where('id_respon is NULL', null, false);
    // // $this->db->or_where('id_respon !=', 6);
    // $this->db->from('tb_surv');
    // $this->db->join('mst_company','mst_company.id_company=tb_surv.id_comp');
    // return $this->db->get();
    // $sql = $this->db->query("SELECT * FROM tb_surv as a INNER JOIN mst_company as b ON a.id_comp = b.id_company WHERE a.id_respon <= '5' OR a.id_respon IS NULL ");//Old not used
    $joinMonthYearNow = $yearNow.'-'.$monthNow;
    $sql = $this->db->query("SELECT a.tipe_cust, b.nama, a.nama_cust, a.id_surv FROM tb_surv as a INNER JOIN mst_company as b ON a.id_comp = b.id_company WHERE (a.id_respon IS NULL OR a.id_respon = '1' OR a.id_respon = '5') AND a.tgl_inv = '%".$joinMonthYearNow."%' ORDER BY a.tgl_inv ASC");
    // echo $this->db->last_query();die();
    return $sql;
  }
  //start add filter get all cust
  function get_allcustmonth_filter($id_cabang)//not used
  {
    // $search = array('tinggi_badan >'=>150,'berat_badan <'=> 60);
    $search = array('id_respon <'=>6);
    $this->db->where('id_respon is NULL', null, false);
    $this->db->or_where($search);
    $this->db->where('id_comp', $id_cabang);
    $this->db->from('tb_surv');
    $this->db->join('mst_company','mst_company.id_company=tb_surv.id_comp');
    return $this->db->get();
  }
  function get_allcustmonth_filter2($id_cabang)
  {
    // $sql = $this->db->query("SELECT * FROM tb_surv as a INNER JOIN mst_company as b ON a.id_comp = b.id_company WHERE a.id_respon <= '5' OR a.id_respon IS NULL AND a.id_comp = '".$id_cabang."' ")->result();//old
    $sql = $this->db->query("SELECT a.tipe_cust, b.nama, a.nama_cust, a.id_surv FROM tb_surv as a INNER JOIN mst_company as b ON a.id_comp = b.id_company WHERE (a.id_respon IS NULL OR a.id_respon = '1' OR a.id_respon = '5') AND a.id_comp = '".$id_cabang."' ORDER BY a.tgl_inv ASC ")->result();
    // echo $this->db->last_query();die();
    return $sql;
  }
  //end add filter get all cust
  function get_allarea()
  {
    $this->db->where('id_parent', 1);
    $this->db->where_not_in('id_company', [30,39]);
    return $this->db->get('mst_company');
  }
  function get_cabangjs($id)
  {
    $this->db->where('id_parent', $id);
    return $this->db->get('mst_company');
  }
  function get_call_sukses_survey()
  {
    // $this->db->select('COUNT()');
    $this->db->where('id_respon', '6');
    $this->db->group_by('id_surv');
    return $this->db->count_all_results('tb_hedsurv');
    // return $this->db->get('tb_hedsurv');
    // $this->db->group_by('nom_dept'); 
    // $this->db->order_by('nom_dept', 'asc');  # or desc
    // echo $this->db->last_query();
    // die();
  }
  function get_call_failed_survey()
  {
    // $this->db->select('COUNT()');
    $this->db->where('id_respon !=', '6');
    $this->db->group_by('id_surv');
    return $this->db->count_all_results('tb_hedsurv');
    // return $this->db->get('tb_hedsurv');
    // $this->db->group_by('nom_dept'); 
    // $this->db->order_by('nom_dept', 'asc');  # or desc
    // echo $this->db->last_query();
    // die();
  }
  function get_no_have_tlp_survey()
  {
    // $this->db->select('COUNT()');
    $getMonthNow = date('m');
    $yearnow = date('Y');
    $localMonth = '05';
    if($getMonthNow < 10){
			$FixMonthNow = substr($getMonthNow, 1, 2);
		}else{
			$FixMonthNow = $getMonthNow;
		}
    $before_month = $FixMonthNow - 1;
    if($before_month < 10){
      $FixBeforeMonth = "0".$before_month;
    }else{
      $FixBeforeMonth = $before_month;
    }
    $NowYearMonth = date('Y-m');
    $BeforeYearMonth = $yearnow.'-'.$FixBeforeMonth;
    // $whereTlp = '(telepon1 IS NULL or telepon2 IS NULL or hp IS NULL)';
    // $whereTlp1 = 'telepon1 is null';//can't like this because can be escape at query builder ci
    // $whereTlp2 = 'telepon2 is null';//can't like this because can be escape at query builder ci
    // $whereHp = 'hp is null';//can't like this because can be escape at query builder ci
    // $whereDate = 'tgl_in';
    // $this->db->_protect_identifiers = FALSE;
    $this->db->where('telepon1 IS NULL', null, false);
    $this->db->where('telepon2 IS NULL', null, false);
    $this->db->where('hp IS NULL', null, false);
    $this->db->like('tgl_inv', $BeforeYearMonth);
    $sql = $this->db->count_all_results('tb_surv');
    return $sql;
    // die();
  }
  function get_detsurv($id)
  {
    $this->db->where('id_surv', $id);
    $this->db->from('tb_surv');
    $this->db->join('mst_company','mst_company.id_company=tb_surv.id_comp');
    return $this->db->get();
  }

	function get_detsurv_notdone($id='',$id_hedsurv='')
  {
    $this->db->where('tb_surv.id_surv', $id);
		$this->db->where('tb_hedsurv.id_hedsurv', $id_hedsurv);
    $this->db->from('tb_surv');
    $this->db->join('mst_company','mst_company.id_company=tb_surv.id_comp');
		$this->db->join('tb_hedsurv','tb_hedsurv.id_surv=tb_hedsurv.id_surv');
    return $this->db->get();
  }

  function countRowRespon(){
    $query = $this->db->query("SELECT *,count(id_respon) AS id_respon FROM mst_respon");
    // print_r($query->result());
    return $query->result();
  }

    function saveDetSurvey($data){
        if ($data != null) {
            $sql = $this->db->insert('tb_detsurv', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

  function updateHeaderSurvey($id_surv='',$id_respon='',$tgl_telp='',$time_telp='',$kritiksaran='',$harga_beli='',$harga_diskon='',$status_dapat_invoice=''){
    $data = array(
                'id_respon' => $id_respon,
                'tgl_telp' => $tgl_telp,
                'time_telp' => $time_telp,
                'kritik_saran' => $kritiksaran,
                'harga_beli' => $harga_beli,
                'harga_diskon' => $harga_diskon,
                'status_dapat_invoice' => $status_dapat_invoice
            );
    $this->db->where('id_surv', $id_surv);
    $this->db->update('tb_surv', $data);
  }

  function AddHeaderSurvey($surv_id,$id_respon,$tgl_telp,$time_telp,$kritiksaran,$harga_beli,$harga_diskon,$status_dapat_invoice,$status_cust,$created_at_by){
    if($id_respon <= 5){
      $StatusInsertDetsurv = 0;//berarti data tidak di insert ke table tb_detsurv
    }elseif($id_respon == 6){
      $StatusInsertDetsurv = 1;//berarti data di insert ke table tb_detsurv
    }else{
      $StatusInsertDetsurv = 00;//berarti Undifined
    }
    $data = array(
                    'id_surv' => $surv_id,
                    'tgl_telp' => $tgl_telp,
                    'time_telp' => $time_telp,
                    'id_respon' => $id_respon,
                    'kritik_saran' => $kritiksaran,
                    'harga_beli' => $harga_beli,
                    'harga_diskon' => $harga_diskon,
                    'status_dapat_invoice' => $status_dapat_invoice,
                    'tipe_cust' => $status_cust,
                    'status_insert_detsurv' => $StatusInsertDetsurv,
                    'created_at_by' => $created_at_by
                );
    $this->db->insert('tb_hedsurv', $data);
    // print_r($this->db->affected_rows());
    // die();
    return $this->db->affected_rows();
  }

  function updateHeaderSurvey_not_used($data){
    // print_r($data);
    // die();
        if ($data != null) {
            $sql = $this->db->insert('tb_surv', $data);
            if ($this->db->affected_rows() > 0) {
                return true;
            } else {
                return false;
            }
        }
    }

  function getStatusCust($id = null){
    $this->db->where('id_surv',$id);
    $sql = $this->db->get('tb_surv');
    if ($sql->num_rows() > 0)
    {
      return $sql->row_array(); 
    }
  }

  function getTeleponCust($id=''){
    $sql = $this->db->query("SELECT telepon1, telepon2, hp, tlp_wo FROM tb_surv WHERE id_surv =  '".$id."' ")->result();
    // echo $this->db->last_query();die();
    return $sql; 
  }

  function getIDHeadSurv($surv_id,$tgl_telp,$id_respon,$kritiksaran,$tipe_cust,$status_insert_detsurv)
  {
    $this->db->where('id_surv', $surv_id);
    $this->db->where('tgl_telp', $tgl_telp);
    $this->db->where('id_respon', $id_respon);
    $this->db->where('kritik_saran', $kritiksaran);
    $this->db->where('tipe_cust', $tipe_cust);
    // $this->db->where('status_insert_detsurv', $status_insert_detsurv);//not used
    $this->db->from('tb_hedsurv');
    return $this->db->get();
  }

  function viewReportBulanan($area='',$date_start='',$date_end=''){
        // $sql = $this->db->query("SELECT * FROM antrian AS a INNER JOIN user AS u ON a.username = u.Username WHERE tanggal_masuk >= '".$date_start."' AND tanggal_masuk <= '".$date_end."' AND deleted = 0 ORDER BY id_antrian DESC ")->result();
    // $sql = $this->db->query("SELECT d.kode_kantor AS Area, d.kota AS Cabang, e.type AS Survey, e.id_quest AS NO, e.quest AS Hasil_Survey FROM tb_hedsurv AS a INNER JOIN tb_detsurv AS b ON a.id_hedsurv = b.id_hedsurv INNER JOIN tb_surv AS c ON a.id_surv = c.id_surv INNER JOIN mst_company AS d ON c.id_comp = d.id_company INNER JOIN mst_quest AS e ON b.id_quest = e.id_quest WHERE d.id_company='".$area."' ORDER BY a.id_hedsurv DESC ")->result();
    // $sql = $this->db->query("SELECT e.kode_kantor AS Area, e.kota AS Cabang, d.type AS Survey, d.id_quest AS NO, d.quest AS Hasil_Survey FROM tb_detsurv AS a INNER JOIN tb_hedsurv AS b ON a.id_hedsurv = b.id_hedsurv INNER JOIN tb_surv AS c ON a.id_surv = c.id_surv INNER JOIN mst_quest AS d ON a.id_quest = d.id_quest INNER JOIN mst_company AS e ON c.id_comp = e.id_company WHERE e.id_company='".$area."' ORDER BY a.id_hedsurv DESC ")->result();
    // $sql = $this->db->query("SELECT e.kode_kantor AS Area, e.kota AS Cabang, d.type AS Survey, d.id_quest AS NO, d.quest AS Hasil_Survey, COUNT(IF(a.nilai = '1', 1, NULL)) 'NOL' FROM tb_detsurv AS a INNER JOIN tb_hedsurv AS b ON a.id_hedsurv = b.id_hedsurv INNER JOIN tb_surv AS c ON a.id_surv = c.id_surv INNER JOIN mst_quest AS d ON a.id_quest = d.id_quest INNER JOIN mst_company AS e ON c.id_comp = e.id_company WHERE e.id_company='".$area."' ORDER BY a.id_hedsurv DESC ")->result();
    //start sample query by aji
    // SELECT a.nama_cust, c.kode_kantor, c.kota, d.id_quest, COUNT(IF(d.nilai = '0', 1, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 1, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 1, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 1, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 1, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 1, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 1, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 1, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 1, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 1, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 1, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, ('Kosong'+'Enam') AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv WHERE a.id_comp = '6' GROUP BY d.id_quest
    //end sample query by aji
    //start create query
    $sql = $this->db->query("SELECT a.nama_cust, c.kode_kantor, c.kota, e.no_type, e.type, e.quest, COUNT(IF(d.nilai = '0', 0, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 0, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 0, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 0, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 0, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 0, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 0, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 0, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 0, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 0, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 0, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, (SUM('0')+SUM('3')) AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = 'JKT' GROUP BY d.id_quest")->result();
    //end create query
    // echo $this->db->last_query();die();
    return $sql; 
    }

    function jmlAreaCompany(){
      $sql = $this->db->query("SELECT COUNT(IF(a.kode_kantor = 'JKT', 0, NULL)) 'jml_area_company' FROM mst_company AS a")->result();
      // echo $this->db->last_query();die();
      return $sql; 
    }

    function jmlAreaAllCompany(){
      // $sql = $this->db->query("SELECT a.kode_kantor, COUNT(a.kode_kantor) 'jml_area_company' FROM mst_company AS a")->result();
      $sql = $this->db->query("SELECT a.kode_kantor, a.kota, COUNT(a.kode_kantor) AS jml_cabang FROM mst_company AS a GROUP BY a.kode_kantor")->result();
      // echo $this->db->last_query();die();
      return $sql; 
    }

		function getKetRespon($id_respon=''){
      // $sql = $this->db->query("SELECT a.kode_kantor, COUNT(a.kode_kantor) 'jml_area_company' FROM mst_company AS a")->result();
      $sql = $this->db->query("SELECT nm_respon FROM mst_respon WHERE id_respon = '".$id_respon."' ")->result();
      // echo $this->db->last_query();die();
      return $sql;
    }

    function getJmlDataService(){
      $sql = $this->db->query("SELECT COUNT(IF(a.type = 'SERVICE', 0, NULL)) 'jml_service', COUNT(IF(a.type = 'SALES', 0, NULL)) 'jml_sales' FROM mst_quest AS a")->result();
      // echo $this->db->last_query();die();
      return $sql; 
    }

    function getDataKotaCompany(){
      $sql = $this->db->query("SELECT a.kota AS cabang FROM mst_company AS a")->result();
      // echo $this->db->last_query();die();
      return $sql; 
    }

    function getTotalDataCabang($area=''){
      $sql = $this->db->query("SELECT COUNT(kode_kantor) AS jml_cabang FROM mst_company AS a WHERE a.kode_kantor = '".$area."' ")->result();
      // echo $this->db->last_query();
      // die();
      return $sql;
    }

    //start coding by aji firman for report area jakarta
    function cabangAreaJakarta($area=''){
      $this->db->query("SELECT COUNT(e.type) AS jml_data, a.nama_cust, c.kode_kantor, c.kota, e.no_type, e.type, e.quest, COUNT(IF(d.nilai = '0', 0, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 0, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 0, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 0, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 0, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 0, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 0, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 0, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 0, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 0, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 0, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, (SUM('0')+SUM('3')) AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = '".$KodeKantor."' AND c.kota = '".$CabangCompany."' GROUP BY d.id_quest")->result();
    }
    //end coding by aji firman for report jakarta

    function CekDataHeaderTlp($surv_id=''){
      $sql = $this->db->query("SELECT COUNT(id_surv) AS cek_data FROM tb_surv_header_telepon AS a WHERE a.id_surv = '".$surv_id."' ")->result();
      // echo $this->db->last_query();
      // die();
      return $sql;
    }

    function CekDataHeaderSurvey($surv_id=''){
      $sql = $this->db->query("SELECT COUNT(id_surv) AS cek_data FROM tb_hedsurv AS a WHERE a.id_surv = '".$surv_id."' ")->result();
      // echo $this->db->last_query();
      // die();
      return $sql;
    }

    function AddSurvHeaderTlp($surv_id,$flex_tlp,$status_cust,$created_at_by){
      $data = array(
                      'id_surv' => $surv_id,
                      'flex_telepon' => $flex_tlp,
                      'counter' => 1,//karna awal set counter = 1
                      'tipe_cust' => $status_cust,
                      'created_at_by' => $created_at_by
                  );
      $this->db->insert('tb_surv_header_telepon', $data);
      // print_r($this->db->affected_rows());
      // die();
      return $this->db->affected_rows();
    }

    function GetDataTlp($surv_id='',$flex_tlp=''){
      if($flex_tlp == 'telepon1'){
        $sql = $this->db->query("SELECT a.telepon1 AS telepon FROM tb_surv AS a WHERE a.id_surv = '".$surv_id."' ")->result();
      }elseif($flex_tlp == 'telepon2'){
        $sql = $this->db->query("SELECT a.telepon2 AS telepon FROM tb_surv AS a WHERE a.id_surv = '".$surv_id."' ")->result();
      }elseif($flex_tlp == 'hp'){
        $sql = $this->db->query("SELECT a.hp AS telepon FROM tb_surv AS a WHERE a.id_surv = '".$surv_id."' ")->result();
      }elseif($flex_tlp == 'tlp_wo'){
        $sql = $this->db->query("SELECT a.tlp_wo AS telepon FROM tb_surv AS a WHERE a.id_surv = '".$surv_id."' ")->result();
      }else{
        $sql = $this->db->query("SELECT a.telepon1 AS telepon FROM tb_surv AS a WHERE a.id_surv = '".$surv_id."' ")->result();
      }
      return $sql;
    }

    function GetDataIDHeaderSurvTlp($surv_id='',$status_cust=''){//$flex_tlp=''
      $sql = $this->db->query("SELECT a.id_header_telepon FROM tb_surv_header_telepon AS a WHERE a.id_surv = '".$surv_id."' AND  a.tipe_cust = '".$status_cust."' ")->result();
      // print_r($this->db->affected_rows());
      // die();
      return $sql;
    }

    function UpdateHeaderDetailTlp($surv_id='',$flex_tlp='',$status_cust='',$created_at_by='',$FixIDHeaderTlp='',$FixDataTlp='',$id_respon='',$tgl_telp='',$time_telp=''){
      $getCounter[0] = $this->db->query("SELECT a.counter FROM tb_surv_header_telepon AS a WHERE a.id_surv = '".$surv_id."' AND  a.tipe_cust = '".$status_cust."' ")->result();
      $CounterGet = $getCounter[0];
      $CounterOld = $CounterGet[0]->counter;
      $NewCounter = $CounterOld + 1;
      $data = array(
                  'flex_telepon' => $flex_tlp,
                  'counter' => $NewCounter,
                  'updated_at_by' => $created_at_by
              );
      $this->db->where('id_header_telepon', $FixIDHeaderTlp);
      $this->db->update('tb_surv_header_telepon', $data);
    }

    function AddSurvDetailTlp($FixIDHeaderTlp='',$FixDataTlp='',$id_respon='',$tgl_telp='',$time_telp=''){
      $data = array(
                      'id_header_telepon' => $FixIDHeaderTlp,
                      'telepon' => $FixDataTlp,
                      'id_respon' => $id_respon,
                      'tgl_detail_telepon' => $tgl_telp,
                      'time_detail_telepon' => $time_telp
                  );
      $this->db->insert('tb_surv_detail_telepon', $data);
      // print_r($this->db->affected_rows());
      // die();
      return $this->db->affected_rows();
    }

    //start model datatables
    function filter($search, $limit, $start, $order_field, $order_ascdesc){
      // $this->db->like('nis', $search); // Untuk menambahkan query where LIKE
      // $this->db->or_like('nama', $search); // Untuk menambahkan query where OR LIKE
      // $this->db->or_like('telp', $search); // Untuk menambahkan query where OR LIKE
      // $this->db->or_like('alamat', $search); // Untuk menambahkan query where OR LIKE
      // $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
      // $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
      // return $this->db->get('siswa')->result_array(); // Eksekusi query sql sesuai kondisi diatas

      $where = "a.id_respon is NULL";
      $this->db->where($where);
      $this->db->or_where('a.id_respon', '1');
      $this->db->or_where('a.id_respon', '5');
      $this->db->like('b.nama', $search); // Untuk menambahkan query where LIKE
      $this->db->or_like('a.nama_cust', $search); // Untuk menambahkan query where OR LIKE
      $this->db->from('tb_surv as a');
      $this->db->join('mst_company as b','a.id_id_comp=b.id_comppany');
      $this->db->order_by($order_field, $order_ascdesc); // Untuk menambahkan query ORDER BY
      $this->db->limit($limit, $start); // Untuk menambahkan query LIMIT
      return $this->db->get()->result_array(); // Eksekusi query sql sesuai kondisi diatas
    }
    function count_all_old($search){
      // return $this->db->count_all('tb_surv'); // Untuk menghitung semua data siswa //OLD
      $this->db->select('a.tipe_cust, b.nama, a.nama_cust, a.id_surv');
      // $this->db->where('id_respon =', NULL);
      $where = "a.id_respon is NULL";
      $this->db->where($where);
      $this->db->or_where('a.id_respon', '1');
      $this->db->or_where('a.id_respon', '5');
      $this->db->like('b.nama', $search); // Untuk menambahkan query where LIKE
      $this->db->or_like('a.nama_cust', $search); // Untuk menambahkan query where OR LIKE
      $this->db->from('tb_surv as a');
      $this->db->join('mst_company as b','a.id_id_comp=b.id_comppany');
      return $this->db->count_all(); // Untuk menghitung semua data siswa
    }

    function count_filter($search){
      // $this->db->like('nis', $search); // Untuk menambahkan query where LIKE
      // $this->db->or_like('nama', $search); // Untuk menambahkan query where OR LIKE
      // $this->db->or_like('telp', $search); // Untuk menambahkan query where OR LIKE
      // $this->db->or_like('alamat', $search); // Untuk menambahkan query where OR LIKE
      // return $this->db->get('tb_surv')->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian

      $this->db->select('a.tipe_cust, b.nama, a.nama_cust, a.id_surv');
      // $this->db->where('id_respon =', NULL);
      $where = "a.id_respon is NULL";
      $this->db->where($where);
      $this->db->or_where('a.id_respon', '1');
      $this->db->or_where('a.id_respon', '5');
      $this->db->like('b.nama', $search); // Untuk menambahkan query where LIKE
      $this->db->or_like('a.nama_cust', $search); // Untuk menambahkan query where OR LIKE
      $this->db->from('tb_surv as a');
      $this->db->join('mst_company as b','a.id_id_comp=b.id_comppany');
      $this->db->order_by("a.tgl_inv", "asc");
      return $this->db->get()->num_rows(); // Untuk menghitung jumlah data sesuai dengan filter pada textbox pencarian

      // $sql = $this->db->query("SELECT a.tipe_cust, b.nama, a.nama_cust, a.id_surv FROM tb_surv as a INNER JOIN mst_company as b ON a.id_comp = b.id_company WHERE a.id_respon IS NULL OR a.id_respon = '1' OR a.id_respon = '5' ORDER BY a.tgl_inv ASC");
      // $this->db->where('id_surv', $id);
      // $this->db->from('tb_surv');
      // $this->db->join('mst_company','mst_company.id_company=tb_surv.id_comp');
      // return $this->db->get();
    }
    
    //start variabel create di luar controller
    // var $table = 'tbl_user'; //nama tabel dari database
    var $table = 'tb_surv'; //nama tabel dari database
    // var $column_order = array(null, 'user_nama','user_email','user_alamat'); //field yang ada di table user
    var $column_order = array(null,'a.tipe_cust', 'b.nama', 'a.nama_cust', 'a.tgl_inv', 'a.type', 'a.telepon1','a.telepon2','a.hp','a.tlp_wo', 'a.diskon', null);
    // var $column_search = array('user_nama','user_email','user_alamat'); //field yang diizin untuk pencarian 
    var $column_search = array('a.tipe_cust','b.nama','a.nama_cust','a.tgl_inv', 'a.type', 'a.telepon1','a.telepon2','a.hp','a.tlp_wo','a.diskon');
    // var $order = array('user_id' => 'asc'); // default order 
    var $order = array('tgl_inv' => 'asc');
    //end variabel create di luar controller

		//START FOR DATABLES DATA SURVEY MODUL
    function _get_datatables_query($area='',$cabang='',$tipe='',$tipe_motor='',$yearNow='',$monthNow='')
    {
        $monthFix = $this->get_prev_month_data_surv($yearNow,$monthNow);
        $year = $yearNow;
        if($monthFix == 12){
          $yearNow = $year - 1;
        }else{
          $yearNow = $year;
        }
        $joinYearMonthNow = $yearNow.'-'.$monthFix;
        // $joinYearMonthNow = $yearNow.'-09';
        $this->db->select('a.tipe_cust, b.nama, a.nama_cust, a.tgl_inv, a.id_surv, a.type, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.diskon');
        $where = '(a.id_comp != "2" AND a.id_comp != "3" AND a.id_comp != "8" AND a.id_comp != "4" AND a.id_comp != "33" AND a.id_comp != "39" AND a.id_comp != "30")';
        $this->db->where($where);
        if($area == '99'){
          //no action
          $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
          $this->db->where($where);
        }else{
          if($cabang != ''){
            $this->db->where('a.id_comp', $cabang);
            // $where = ['a.id_respon' => NULL, 'a.id_comp' => $cabang];
            $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
            $this->db->where($where);
          }else{
            // $where = ['a.id_respon' => NULL];
            $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
            $this->db->where($where);
          }
        }
        if($tipe == '1'){//untuk SALES
          $this->db->where('a.tipe_cust', '1');
        }elseif($tipe == '2'){//untuk SERVICE
          $this->db->where('a.tipe_cust', '2');
        }else{
          //no action
        }
        if($tipe_motor != ''){//untuk Tipe Motor jika ada data
          $charRplcTipeMotor = str_replace('%',' ',$tipe_motor);
          // print_r($charRplcTipeMotor);
          // die();
          $this->db->where('a.type', $tipe_motor);
          // $this->db->like('a.type', $tipe_motor);
          // $this->db->where('a.type', 'ZX25R ABS SE');
        }else{
          //no action
          // $this->db->where('a.type', 'ZX25R ABS SE');
        }
        // $where = "a.id_respon is NULL";
        // $this->db->where($where);
        // $this->db->or_where('a.id_respon', '1');
        // $this->db->or_where('a.id_respon', '5');
        $whereTlp = '(a.telepon1 IS NOT NULL or a.telepon2 IS NOT NULL or a.hp IS NOT NULL)';
        $this->db->where($whereTlp);
        $this->db->like('a.tgl_inv', $joinYearMonthNow);
        // $this->db->or_like('a.tgl_inv', '2022-04');
        $this->db->from('tb_surv as a');
        $this->db->join('mst_company as b','a.id_comp=b.id_company');
				// $this->db->group_by('a.nama_cust'); // with single group by
				$this->db->group_by(array('a.nama_cust', 'a.type', 'a.tgl_inv', 'a.tipe_cust'));  // Produces: GROUP BY title, date // $this->db->group_by(array("title", "date"));
        // $this->db->from($this->table);
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables($area='',$cabang='',$tipe='',$tipe_motor='',$yearNow='',$monthNow=''){
        $this->_get_datatables_query($area,$cabang,$tipe,$tipe_motor,$yearNow,$monthNow);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered($area='',$cabang='',$tipe='',$tipe_motor='',$yearNow='',$monthNow=''){
        $this->_get_datatables_query($area,$cabang,$tipe,$tipe_motor,$yearNow,$monthNow);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    function count_all($area='',$cabang='',$tipe='',$tipe_motor='',$yearNow='',$monthNow=''){
        // $sql = $this->db->query("SELECT a.tipe_cust, b.nama, a.nama_cust, a.id_surv FROM tb_surv as a INNER JOIN mst_company as b ON a.id_comp = b.id_company WHERE (a.id_respon IS NULL OR a.id_respon = '1' OR a.id_respon = '5') AND a.id_comp = '".$id_cabang."' ORDER BY a.tgl_inv ASC ");
        $monthFix = $this->get_prev_month_data_surv($yearNow,$monthNow);
        $year = $yearNow;
        if($monthFix == 12){
          $yearNow = $year - 1;
        }else{
          $yearNow = $year;
        }
        $joinYearMonthNow = $yearNow.'-'.$monthFix;
        // $joinYearMonthNow = $yearNow.'-09';
        $this->db->select('a.tipe_cust, b.nama, a.nama_cust, a.tgl_inv, a.id_surv, a.type, a.telepon1, a.telepon2, a.hp, a.tlp_wo, a.diskon');
        $where = '(a.id_comp != "2" AND a.id_comp != "3" AND a.id_comp != "8" AND a.id_comp != "4" AND a.id_comp != "33" AND a.id_comp != "39" AND a.id_comp != "30")';
        $this->db->where($where);
        if($area == '99'){
          //no action
          $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
          $this->db->where($where);
        }else{
          if($cabang != ''){
            $this->db->where('a.id_comp', $cabang);
            // $where = ['a.id_respon' => NULL, 'a.id_comp' => $cabang];
            $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
            $this->db->where($where);
          }else{
            // $where = ['a.id_respon' => NULL];
            $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
            $this->db->where($where);
          }
        }
        if($tipe == '1'){//untuk SALES
          $this->db->where('a.tipe_cust', '1');
        }elseif($tipe == '2'){//untuk SERVICE
          $this->db->where('a.tipe_cust', '2');
        }else{
          //no action
        }
        if($tipe_motor != ''){//untuk Tipe Motor jika ada data
          $charRplcTipeMotor = str_replace('%',' ',$tipe_motor);
          // ZX25R ABS SE
          $this->db->where('a.type', $tipe_motor);
          // $this->db->where('a.type', 'ZX25R ABS SE');
          // $this->db->like('a.type', $tipe_motor);
        }else{
          //no action
          // $this->db->where('a.type', 'ZX25R ABS SE');
        }
        // $where = "a.id_respon is NULL";
        // $this->db->where($where);
        // $this->db->or_where('a.id_respon', '1');
        // $this->db->or_where('a.id_respon', '5');
        $this->db->like('a.tgl_inv', $joinYearMonthNow);
        // $this->db->or_like('a.tgl_inv', '2022-04');
        $this->db->from('tb_surv as a');
        $this->db->join('mst_company as b','a.id_comp=b.id_company');
				// $this->db->group_by('a.nama_cust'); // with single group by
				$this->db->group_by(array('a.nama_cust', 'a.type', 'a.tgl_inv', 'a.tipe_cust'));  // Produces: GROUP BY title, date // $this->db->group_by(array("title", "date"));
        // $this->db->from($this->table);
        return $this->db->count_all_results();
    }
		//END FOR DATABLES DATA SURVEY MODUL

    function get_prev_month_data_surv($yearNow='',$monthNow=''){
      $a = $monthNow;
      if($a == 10 || $a == 11 || $a == 12){
        $x = $a - 1;
				if($x < 10){
					$x = '0'.$x;
				}else{
					$x = $x;
				}
        // echo $x;
      }else{
        $rplc_a = str_replace("0", "", $a);
        // echo $rplc_a;
        if($rplc_a == 1){
          $x = '12';
        }else{
          $x = $rplc_a - 1;
          $x = '0'.$x;
        }
        // echo $x;
      }
      return $x;
    }
      //NEW
    //end model datatables

  function cekDataJanuariRprtAreaPertahun($Month=''){
    $this->db->query("SELECT COUNT(c.kode_kantor) AS jml_data_area, COUNT(e.type) AS jml_data, a.nama_cust, c.kode_kantor, c.kota, e.no_type, e.type, e.quest, COUNT(IF(d.nilai = '0', 0, NULL)) 'Kosong', COUNT(IF(d.nilai = '1', 0, NULL)) 'Pertama', COUNT(IF(d.nilai = '2', 0, NULL)) 'Dua', COUNT(IF(d.nilai = '3', 0, NULL)) 'Tiga', COUNT(IF(d.nilai = '4', 0, NULL)) 'Empat', COUNT(IF(d.nilai = '5', 0, NULL)) 'Lima', COUNT(IF(d.nilai = '6', 0, NULL)) 'Enam', COUNT(IF(d.nilai = '7', 0, NULL)) 'Tujuh', COUNT(IF(d.nilai = '8', 0, NULL)) 'Delapan', COUNT(IF(d.nilai = '9', 0, NULL)) 'Sembilan', COUNT(IF(d.nilai = '10', 0, NULL)) 'Sepuluh', (SUM(0)+SUM(1)) AS Total, (SUM('0')+SUM('3')) AS Total_A FROM tb_surv AS a INNER JOIN tb_hedsurv AS b ON a.id_surv = b.id_surv INNER JOIN mst_company AS c ON a.id_comp = c.id_company INNER JOIN tb_detsurv AS d ON a.id_surv = d.id_surv INNER JOIN mst_quest AS e ON d.id_quest = e.id_quest WHERE c.kode_kantor = '".$KodeKantor."' AND c.kota = '".$CabangCompany."' AND b.id_respon = '6' AND a.tgl_inv LIKE '%".$get_year_filter."%' GROUP BY d.id_quest ORDER BY a.tipe_cust ASC, e.no_type ASC")->result();
  }
  function saveRptAllArea($service_1='',$service_2='',$service_3='',$service_4='',$sales_1='',$sales_2='',$sales_3='',$sales_4='',$year='',$month=''){
    // $CekDataHeaderTlp[0] = $this->M_cro->CekDataHeaderTlp($surv_id);//untuk tes local dengan id_surv = 1280
    $TypeService = 'SERVICE';
    $TypeSales = 'SALES';
    $CekDataRptAllAreaService[0] = $this->db->query("SELECT COUNT(id_rpt_year_each_month) AS cek_data FROM rpt_survey_allarea_year_each_month AS a WHERE a.month = '".$month."' AND a.year = '".$year."' AND a.type = '".$TypeService."' ")->result();
    $DataCekRptAllAreaService = $CekDataRptAllAreaService[0];
    $JmlDataCekRptAllAreaService = $DataCekRptAllAreaService[0]->cek_data;
    if($JmlDataCekRptAllAreaService >= 4 && $JmlDataCekRptAllAreaService != 0){//jika data ada, maka akan dilakukan update data
      //no action, not yet
      $var = '00';
      return $var;
    }else{//jika belum ada data, maka akan dilakukan insert data
      //start save data service
      $notype1_service = 1;
      $SqlSaveRpt = $this->save_rpt_allarea($TypeService,$notype1_service,$service_1,$month,$year);
      $notype2_service = 2;
      $SqlSaveRpt = $this->save_rpt_allarea($TypeService,$notype2_service,$service_2,$month,$year);
      $notype3_service = 3;
      $SqlSaveRpt = $this->save_rpt_allarea($TypeService,$notype3_service,$service_2,$month,$year);
      $notype4_service = 4;
      $SqlSaveRpt = $this->save_rpt_allarea($TypeService,$notype4_service,$service_4,$month,$year);
      //end save data service
      //start save data sales
      $notype1_sales = 1;
      $SqlSaveRpt = $this->save_rpt_allarea($TypeSales,$notype1_sales,$sales_1,$month,$year);
      $notype2_sales = 2;
      $SqlSaveRpt = $this->save_rpt_allarea($TypeSales,$notype2_sales,$sales_2,$month,$year);
      $notype3_sales = 3;
      $SqlSaveRpt = $this->save_rpt_allarea($TypeSales,$notype3_sales,$sales_3,$month,$year);
      $notype4_sales = 4;
      $SqlSaveRpt = $this->save_rpt_allarea($TypeSales,$notype4_sales,$sales_4,$month,$year);
      //end save data sales
      $var = '11';
      return $var;
    }
  }
  function save_rpt_allarea($Type='',$notype='',$service='',$month='',$year=''){
      $data = array(
                    'type' => $Type,
                    'no_type' => $notype,
                    'rata_rata' => $service,
                    'month' => $month,
                    'year' => $year,
                    'created_at_by' => "dummy from aji"
                  );
      $this->db->insert('rpt_survey_allarea_year_each_month', $data);
      // print_r($this->db->affected_rows());
      // die();
      $SqlSaveRpt =  $this->db->affected_rows();
      return $SqlSaveRpt;
    }
    function checkDataSurv($bln='',$thn=''){
      $joinDate = $thn.'-'.$bln;
      $sql = $this->db->query("SELECT COUNT(a.id_surv) AS cek_data FROM tb_surv AS a WHERE a.tgl_inv LIKE '%".$joinDate."%' ")->result();
      // echo $this->db->last_query();
      // die();
      return $sql;
    }

		//START FOR DATABLES DATA REPORT CALL DONE
    function _get_datatables_query_call_done($area='',$cabang='',$tipe='',$tipe_motor='',$yearNow='',$monthNow='',$month_filter='',$year_filter='')
    {
        $monthFix = $this->get_prev_month_data_surv($yearNow,$monthNow);
        // $joinYearMonthNow = $yearNow.'-'.$monthFix;
        $year = $yearNow;
        if($monthFix == 12){
          $yearNow = $year - 1;
        }else{
          $yearNow = $year;
        }
				if($month_filter != '' && $year_filter != ''){
					$joinYearMonthNow = $year_filter.'-'.$month_filter;
				}else{
					// $joinYearMonthNow = $yearNow.'-'.$monthNow;
					$joinYearMonthNow = $yearNow.'-'.$monthFix;
				}
        // $joinYearMonthNow = $yearNow.'-05';
        $this->db->select('a.tipe_cust, b.nama, a.nama_cust, a.tgl_inv, a.id_surv');
        if($area == '99'){
          //no action
          // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
          // $this->db->where($where);
					$this->db->where('a.id_respon', '6');
        }else{
          if($cabang != ''){
            $this->db->where('a.id_comp', $cabang);
            // $where = ['a.id_respon' => NULL, 'a.id_comp' => $cabang];
            // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
            // $this->db->where($where);
						$this->db->where('a.id_respon', '6');
          }else{
            // $where = ['a.id_respon' => NULL];
            // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
            // $this->db->where($where);
						$this->db->where('a.id_respon', '6');
          }
        }
        if($tipe == '1'){//untuk SALES
          $this->db->where('a.tipe_cust', '1');
        }elseif($tipe == '2'){//untuk SERVICE
          $this->db->where('a.tipe_cust', '2');
        }else{
          //no action
        }
        if($tipe_motor != '' && $tipe_motor != 99){//untuk Tipe Motor jika ada data
          $charRplcTipeMotor = str_replace('%',' ',$tipe_motor);
          // print_r($charRplcTipeMotor);
          // die();
          $this->db->where('a.type', $tipe_motor);
          // $this->db->like('a.type', $tipe_motor);
          // $this->db->where('a.type', 'ZX25R ABS SE');
        }elseif($tipe_motor == 99){
					//no action
				}else{
          //no action
          // $this->db->where('a.type', 'ZX25R ABS SE');
        }
        // $where = "a.id_respon is NULL";
        // $this->db->where($where);
        // $this->db->or_where('a.id_respon', '1');
        // $this->db->or_where('a.id_respon', '5');
        $whereTlp = '(a.telepon1 IS NOT NULL or a.telepon2 IS NOT NULL or a.hp IS NOT NULL)';
        $this->db->where($whereTlp);
        $this->db->like('a.tgl_inv', $joinYearMonthNow);
        $this->db->from('tb_surv as a');
        $this->db->join('mst_company as b','a.id_comp=b.id_company');
        // $this->db->from($this->table);
				// echo $this->db->last_query();
				// print_r($this->db->last_query());
				// die();
				// die();
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
				// echo $this->db->last_query();
    }
 
    function get_datatables_call_done($area='',$cabang='',$tipe='',$tipe_motor='',$yearNow='',$monthNow='',$month_filter='',$year_filter=''){
        $this->_get_datatables_query_call_done($area,$cabang,$tipe,$tipe_motor,$yearNow,$monthNow,$month_filter,$year_filter);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_call_done($area='',$cabang='',$tipe='',$tipe_motor='',$yearNow='',$monthNow='',$month_filter='',$year_filter=''){
        $this->_get_datatables_query_call_done($area,$cabang,$tipe,$tipe_motor,$yearNow,$monthNow,$month_filter,$year_filter);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    function count_all_call_done($area='',$cabang='',$tipe='',$tipe_motor='',$yearNow='',$monthNow='',$month_filter='',$year_filter=''){
        // $sql = $this->db->query("SELECT a.tipe_cust, b.nama, a.nama_cust, a.id_surv FROM tb_surv as a INNER JOIN mst_company as b ON a.id_comp = b.id_company WHERE (a.id_respon IS NULL OR a.id_respon = '1' OR a.id_respon = '5') AND a.id_comp = '".$id_cabang."' ORDER BY a.tgl_inv ASC ");
        $monthFix = $this->get_prev_month_data_surv($yearNow,$monthNow);
        $year = $yearNow;
        if($monthFix == 12){
          $yearNow = $year - 1;
        }else{
          $yearNow = $year;
        }
        // $joinYearMonthNow = $yearNow.'-'.$monthFix;
				if($month_filter != '' && $year_filter != ''){
					$joinYearMonthNow = $year_filter.'-'.$month_filter;
				}else{
					$joinYearMonthNow = $yearNow.'-'.$monthFix;
				}
        // $joinYearMonthNow = $yearNow.'-05';
        $this->db->select('a.tipe_cust, b.nama, a.nama_cust, a.tgl_inv, a.id_surv');
        if($area == '99'){
          //no action
          // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
          // $this->db->where($where);
					$this->db->where('a.id_respon', '6');
        }else{
          if($cabang != ''){
            $this->db->where('a.id_comp', $cabang);
            // $where = ['a.id_respon' => NULL, 'a.id_comp' => $cabang];
            // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
            // $this->db->where($where);
						$this->db->where('a.id_respon', '6');
          }else{
            // $where = ['a.id_respon' => NULL];
            // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
            // $this->db->where($where);
						$this->db->where('a.id_respon', '6');
          }
        }
        if($tipe == '1'){//untuk SALES
          $this->db->where('a.tipe_cust', '1');
        }elseif($tipe == '2'){//untuk SERVICE
          $this->db->where('a.tipe_cust', '2');
        }else{
          //no action
        }
        if($tipe_motor != '' && $tipe_motor != 99){//untuk Tipe Motor jika ada data
          $charRplcTipeMotor = str_replace('%',' ',$tipe_motor);
          // ZX25R ABS SE
          $this->db->where('a.type', $tipe_motor);
          // $this->db->where('a.type', 'ZX25R ABS SE');
          // $this->db->like('a.type', $tipe_motor);
        }elseif($tipe_motor == 99){
					//no action
				}else{
          //no action
          // $this->db->where('a.type', 'ZX25R ABS SE');
        }
        // $where = "a.id_respon is NULL";
        // $this->db->where($where);
        // $this->db->or_where('a.id_respon', '1');
        // $this->db->or_where('a.id_respon', '5');
        $this->db->like('a.tgl_inv', $joinYearMonthNow);
        $this->db->from('tb_surv as a');
        $this->db->join('mst_company as b','a.id_comp=b.id_company');
        // $this->db->from($this->table);
        return $this->db->count_all_results();
    }
		//END FOR DATABLES DATA REPORT CALL DONE

		//START FOR DATABLES DATA REPORT CALL NOT DONE
    function _get_datatables_query_call_not_done($id_surv='')
    {
        // $monthFix = $this->get_prev_month_data_surv($yearNow,$monthNow);
        // // $joinYearMonthNow = $yearNow.'-'.$monthFix;
				// if($month_filter != '' && $year_filter != ''){
				// 	$joinYearMonthNow = $year_filter.'-'.$month_filter;
				// }else{
				// 	$joinYearMonthNow = $yearNow.'-'.$monthFix;
				// }
        // $joinYearMonthNow = $yearNow.'-05';
        $this->db->select('a.tipe_cust, b.nama, a.nama_cust, a.tgl_inv, a.id_surv, c.id_respon, c.id_hedsurv');
				$this->db->where('c.id_surv', $id_surv);
				$whereIdRespon = '(c.id_respon IS NULL or c.id_respon != 6)';
        $this->db->where($whereIdRespon);
        // if($area == '99'){
        //   //no action
        //   // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
        //   // $this->db->where($where);
				// 	$this->db->where('a.id_respon', '6');
        // }else{
        //   if($cabang != ''){
        //     $this->db->where('a.id_comp', $cabang);
        //     // $where = ['a.id_respon' => NULL, 'a.id_comp' => $cabang];
        //     // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
        //     // $this->db->where($where);
				// 		$this->db->where('a.id_respon', '6');
        //   }else{
        //     // $where = ['a.id_respon' => NULL];
        //     // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
        //     // $this->db->where($where);
				// 		$this->db->where('a.id_respon', '6');
        //   }
        // }
        // if($tipe == '1'){//untuk SALES
        //   $this->db->where('a.tipe_cust', '1');
        // }elseif($tipe == '2'){//untuk SERVICE
        //   $this->db->where('a.tipe_cust', '2');
        // }else{
        //   //no action
        // }
        // if($tipe_motor != '' && $tipe_motor != 99){//untuk Tipe Motor jika ada data
        //   $charRplcTipeMotor = str_replace('%',' ',$tipe_motor);
        //   // print_r($charRplcTipeMotor);
        //   // die();
        //   $this->db->where('a.type', $tipe_motor);
        //   // $this->db->like('a.type', $tipe_motor);
        //   // $this->db->where('a.type', 'ZX25R ABS SE');
        // }elseif($tipe_motor == 99){
				// 	//no action
				// }else{
        //   //no action
        //   // $this->db->where('a.type', 'ZX25R ABS SE');
        // }
        // $where = "a.id_respon is NULL";
        // $this->db->where($where);
        // $this->db->or_where('a.id_respon', '1');
        // $this->db->or_where('a.id_respon', '5');
        // $whereTlp = '(a.telepon1 IS NOT NULL or a.telepon2 IS NOT NULL or a.hp IS NOT NULL)';
        // $this->db->where($whereTlp);
        // $this->db->like('a.tgl_inv', $joinYearMonthNow);
        $this->db->from('tb_surv as a');
        $this->db->join('mst_company as b','a.id_comp=b.id_company');
				$this->db->join('tb_hedsurv as c','a.id_surv=c.id_surv');
				// $db3->join('pj_so','pj_so.id_so=pj_sinv.id_so');
        // $this->db->from($this->table);
        $i = 0;
     
        foreach ($this->column_search as $item) // looping awal
        {
            if($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {
                 
                if($i===0) // looping awal
                {
                    $this->db->group_start(); 
                    $this->db->like($item, $_POST['search']['value']);
                }
                else
                {
                    $this->db->or_like($item, $_POST['search']['value']);
                }
 
                if(count($this->column_search) - 1 == $i) 
                    $this->db->group_end(); 
            }
            $i++;
        }
         
        if(isset($_POST['order'])) 
        {
            $this->db->order_by($this->column_order[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } 
        else if(isset($this->order))
        {
            $order = $this->order;
            $this->db->order_by(key($order), $order[key($order)]);
        }
    }
 
    function get_datatables_call_not_done($id_surv=''){
        $this->_get_datatables_query_call_not_done($id_surv);
        if($_POST['length'] != -1)
        $this->db->limit($_POST['length'], $_POST['start']);
        $query = $this->db->get();
        return $query->result();
    }
 
    function count_filtered_call_not_done($id_surv=''){
        $this->_get_datatables_query_call_not_done($id_surv);
        $query = $this->db->get();
        return $query->num_rows();
    }
 
    function count_all_call_not_done($id_surv=''){
        // $sql = $this->db->query("SELECT a.tipe_cust, b.nama, a.nama_cust, a.id_surv FROM tb_surv as a INNER JOIN mst_company as b ON a.id_comp = b.id_company WHERE (a.id_respon IS NULL OR a.id_respon = '1' OR a.id_respon = '5') AND a.id_comp = '".$id_cabang."' ORDER BY a.tgl_inv ASC ");
        // $monthFix = $this->get_prev_month_data_surv($yearNow,$monthNow);
        // // $joinYearMonthNow = $yearNow.'-'.$monthFix;
				// if($month_filter != '' && $year_filter != ''){
				// 	$joinYearMonthNow = $year_filter.'-'.$month_filter;
				// }else{
				// 	$joinYearMonthNow = $yearNow.'-'.$monthFix;
				// }
        // $joinYearMonthNow = $yearNow.'-05';
        $this->db->select('a.tipe_cust, b.nama, a.nama_cust, a.tgl_inv, a.id_surv, c.id_respon c.id_hedsurv');
				$this->db->where('c.id_surv', $id_surv);
				$whereIdRespon = '(c.id_respon IS NULL or c.id_respon != 6)';
        $this->db->where($whereIdRespon);
        // if($area == '99'){
        //   //no action
        //   // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
        //   // $this->db->where($where);
				// 	$this->db->where('a.id_respon', '6');
        // }else{
        //   if($cabang != ''){
        //     $this->db->where('a.id_comp', $cabang);
        //     // $where = ['a.id_respon' => NULL, 'a.id_comp' => $cabang];
        //     // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
        //     // $this->db->where($where);
				// 		$this->db->where('a.id_respon', '6');
        //   }else{
        //     // $where = ['a.id_respon' => NULL];
        //     // $where = '(a.id_respon is NULL or a.id_respon = "1" or a.id_respon = "5")';
        //     // $this->db->where($where);
				// 		$this->db->where('a.id_respon', '6');
        //   }
        // }
        // if($tipe == '1'){//untuk SALES
        //   $this->db->where('a.tipe_cust', '1');
        // }elseif($tipe == '2'){//untuk SERVICE
        //   $this->db->where('a.tipe_cust', '2');
        // }else{
        //   //no action
        // }
        // if($tipe_motor != '' && $tipe_motor != 99){//untuk Tipe Motor jika ada data
        //   $charRplcTipeMotor = str_replace('%',' ',$tipe_motor);
        //   // print_r($charRplcTipeMotor);
        //   // die();
        //   $this->db->where('a.type', $tipe_motor);
        //   // $this->db->like('a.type', $tipe_motor);
        //   // $this->db->where('a.type', 'ZX25R ABS SE');
        // }elseif($tipe_motor == 99){
				// 	//no action
				// }else{
        //   //no action
        //   // $this->db->where('a.type', 'ZX25R ABS SE');
        // }
        // $where = "a.id_respon is NULL";
        // $this->db->where($where);
        // $this->db->or_where('a.id_respon', '1');
        // $this->db->or_where('a.id_respon', '5');
        // $whereTlp = '(a.telepon1 IS NOT NULL or a.telepon2 IS NOT NULL or a.hp IS NOT NULL)';
        // $this->db->where($whereTlp);
        // $this->db->like('a.tgl_inv', $joinYearMonthNow);
        $this->db->from('tb_surv as a');
        $this->db->join('mst_company as b','a.id_comp=b.id_company');
				$this->db->join('tb_hedsurv as c','a.id_surv=c.id_surv');
        // $this->db->from($this->table);
        return $this->db->count_all_results();
    }
		//END FOR DATABLES DATA REPORT CALL NOT DONE

}
