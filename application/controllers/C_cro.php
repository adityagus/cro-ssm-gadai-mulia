<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_cro extends CI_Controller {

	public $CI = NULL;

	function __construct(){
    	parent:: __construct();
    	$this->CI = & get_instance();
		$this->load->model('M_cro');
		$this->load->library('MyLibrary');
		$this->load->library('Form_validation');
		if($this->session->userdata('status') != "login"){
			redirect(base_url());
		}
		date_default_timezone_set("Asia/Jakarta");
  	}

	public function index()
	{
    	$data['content_page'] = 'tes';
		$this->load->view('index',$data);//
	}

	function loading_page(){
		$base_url = base_url().'C_cro/home';
		// .'alert("Warning! The role you are to going delete has some employees");' .
		echo '<script language="javascript">' .
	     'setTimeout(function(){ window.location.href = "'.$base_url.'"; }, 2000);' .
	     '</script>';
		$this->load->view('loading_page');//for loading pages
	}

	public function home(){
		$data['content_page'] = 'home';
		$data['css'] = '1';//untuk aktifkan css card pada bagian home
		$data['page'] = 'Home';
		$this->load->view('index',$data);
	}

	function viewquest()
	{
		$data['quest'] = $this->M_cro->getMasterQuest()->result();
    	$data['content_page'] = 'v_quest';
		$data['page'] = 'Master';
		$this->load->view('index',$data);
	}
	function viewresp()
	{
		$data['resp'] = $this->M_cro->getresp()->result();
    	$data['content_page'] = 'v_respon';
		$data['page'] = 'Master';
		$this->load->view('index',$data);
	}
	function viewsurvey()//old
	{
		$data['cust'] = $this->M_cro->get_allcustmonth()->result();
		// $data['cust2'] = $this->M_cro->get_allcustmonth_filter2($id_cabang);
		$data['area'] = $this->M_cro->get_allarea()->result();
    	$data['content_page'] = 'v_survey';
		$data['page'] = 'Modul';
		$this->load->view('index',$data);
	}
	function viewsurveys($area='',$cabang='',$tipe='',$tipe_motor=''){
		// echo "<script>alert('|".$tipe_motor."|');</script>";
		$yearNow = date('Y');
		$monthNow = date('m');
		// $a = '11';
		// $x = $a - 1;
		// echo $x;
		// if($a == 10 || $a == 11 || $a == 12){
		//   $x = $a - 1;
		//   echo $x;
		// }else{
		//   $rplc_a = str_replace("0", "", $a);
		//   // echo $rplc_a;
		//   $x = $rplc_a - 1;
		//   echo $x;
		// }
		$charRplcTipeMotor = str_replace('%20',' ',$tipe_motor);
		// die();
		$data['cust'] = $this->M_cro->get_allcustmonth($yearNow,$monthNow)->result();
		// $data['cust2'] = $this->M_cro->get_allcustmonth_filter2($id_cabang);
		$data['area'] = $this->M_cro->get_allarea()->result();
    	$data['content_page'] = 'v_survey_new';
		$data['page'] = 'Modul';
		$data['area_get'] = $area;
		$data['cabang_get'] = $cabang;
		$data['tipe_get'] = $tipe;
		$data['tipe_motor_get'] = $charRplcTipeMotor;
		$this->load->view('index',$data);
	}
	//start add coding by aji firman for datatables
  	function get_data_survey($area='',$cabang='',$tipe='',$tipe_motors='')
    {
    	$yearNow = date('Y');
		$monthNow = date('m');
		$tipe_motor = str_replace('%20',' ',$tipe_motors);
    	// print_r($_POST);
    	// die();
    	// if($area != '' || $cabang != ''){
    		$list = $this->M_cro->get_datatables($area,$cabang,$tipe,$tipe_motor,$yearNow,$monthNow);
    	// }else{
    		// $list = $this->M_cro->get_datatables();	
    	// }
        $data = array();
        $no = $_POST['start'];
        $baseUrl = base_url();
        foreach ($list as $field) {
            $no++;
            $row = array();
            $idSurv = $field->id_surv;
            $CekCounter = $this->db->query("SELECT id_surv FROM tb_surv_header_telepon WHERE id_surv='".$idSurv."' ")->num_rows();
            if($CekCounter > 0){
	            $GetCounter = $this->db->query("SELECT counter FROM tb_surv_header_telepon WHERE id_surv='".$idSurv."' ")->result();
	            foreach($GetCounter as $row_counter){
	              @$DataCounter = $row_counter->counter;
	            }
	            if(@$DataCounter != '' || @$DataCounter != array()){
	              $FixDataCounter = @$DataCounter;
	            }else{
	              $FixDataCounter = 0;
	            }
	        }else{
	           $FixDataCounter = 0;
	        }
            if($field->tipe_cust == 1){
            	$TipeCust = "SALES";
            }else{
            	$TipeCust = "SERVICE";
            }
			$aryDataFilter = array(
				'area' => $area,
				'cabang' => $cabang,
				'tipe' => $tipe,
				'tipe_motor' => $tipe_motor
			);
			$joinAllTlp = $field->telepon1.'/'.$field->telepon2.'/'.$field->hp.'/'.$field->tlp_wo;
			$id_surv = $field->id_surv;
            $btnViewUrl = $baseUrl.'C_cro/detsurv/'.$field->id_surv;//version old
			$btnViewUrl_v2 = $baseUrl.'C_cro/detsurv_v2';//version new used
            $btnView = "<a href='$btnViewUrl' class=''><i class='far fa-eye nav-icon' style='color:black'></i></a>";
			$btnForm = "<form action='$btnViewUrl_v2' method='POST'><input type='hidden' name='id_surv' value='$id_surv'><input type='hidden' name='area' value='$area'><input type='hidden' name='cabang' value='$cabang'><input type='hidden' name='tipe' value='$tipe'><input type='hidden' name='tipe_motor' value='$tipe_motor'><button style='background-color: Transparent; border: none;' type='submit' value='Views'><i class='far fa-eye nav-icon' style='color:blue;' title='View Detail'></i></button></form>";
            $row[] = $no;
            $row[] = $TipeCust;
            $row[] = $field->nama;
            $row[] = $field->nama_cust;
            $row[] = $field->tgl_inv;
			$row[] = $field->type;
			$row[] = $joinAllTlp;
						$row[] = $field->diskon;
            $row[] = $FixDataCounter.'x';
            $row[] = $btnForm;
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_cro->count_all($area,$cabang,$tipe,$tipe_motor,$yearNow,$monthNow),
            "recordsFiltered" => $this->M_cro->count_filtered($area,$cabang,$tipe,$tipe_motor,$yearNow,$monthNow),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
  	//end add coding by aji firman for datatables
	//start bagian survey version 2 USED
	function detsurv_v2(){
		// print_r($_POST);
		// die();
		$id = $this->input->post('id_surv');
		$area = $this->input->post('area');
		$cabang = $this->input->post('cabang');
		$tipe = $this->input->post('tipe');
		$tipe_motor = $this->input->post('tipe_motor');
		$data['det'] = $this->M_cro->get_detsurv($id)->row();
		$DataCustSurvey = $this->M_cro->get_detsurv($id)->row();
		// if($DataCustSurvey->tgl_telp == NULL || $DataCustSurvey->tgl_telp == ''){
			$DateNowUsed = date('Y-m-d');
		// }else{
			// $DateNowUsed = $DataCustSurvey->tgl_telp;
		// }
		$data['resp'] = $this->M_cro->getresp()->result();
		//start get data status customer
		$getStatusCust = $this->M_cro->getStatusCust($id);
        $statusCust = $getStatusCust['tipe_cust'];//Jika tipe_cust 1 = sales JIka tipe_cust 2 = service
        // print_r($statusCust);
        // die();
		//end get data status customer
		//satrt get data 3 telepon customer
        $getTeleponCust = $this->M_cro->getTeleponCust($id);
        $CustGetTelepon = $getTeleponCust[0];
        // print_r($getTeleponCust[0]);
        // die();
        //start kritik & saran
        $GetDataDetailSurvey = $this->db->query("SELECT kritik_saran, harga_beli, harga_diskon, status_dapat_invoice FROM tb_surv WHERE id_surv='".$id."' ")->result();
        foreach($GetDataDetailSurvey as $row_detail){
          @$KritikSaran = $row_detail->kritik_saran;
          @$HargaBeli = $row_detail->harga_beli;
          @$HargaDiskon = $row_detail->harga_diskon;
          @$StatusDapatInvoice = $row_detail->status_dapat_invoice;
        }
        //end kritik & saran

		//end get data 3 teelpon customer
		$data['quest'] = $this->M_cro->getquest($statusCust)->result();
    	// $data['content_page'] = 'v_detsurvey';//old
    	$data['content_page'] = 'v_detsurvey_new';//new
		$data['page'] = 'Modul';
		$data['date_now'] = date('Y-m-d');
		$data['date_now_used'] = $DateNowUsed;
		$data['time_now'] = date('H:i:s');
		$DateTime = date('Y-m-d').'||'.date('H:i:s');
		$Username = $this->session->userdata('user');
		$Name_user = $this->session->userdata('nama');
		$Username_Name_user = $Username." - ".$Name_user;
		$Created_at_by = "Created At ".$DateTime." & By ".$Username_Name_user;
		$data['created_at_by'] = $Created_at_by;
		$data['status_cust'] = $statusCust;
		$data['DataTeleponCust'] = $CustGetTelepon;
		$data['KritikSaran'] = $KritikSaran;
		$data['HargaBeli'] = $HargaBeli;
		$data['HargaDiskon'] = $HargaDiskon;
		$data['StatusDapatInvoice'] = $StatusDapatInvoice;
		$data['filter_area'] = $area;
		$data['filter_cabang'] = $cabang;
		$data['filter_tipe'] = $tipe;
		$data['filter_tipe_motor'] = $tipe_motor;
		$this->load->view('index',$data);
	}
	//end bagian survey version 2 USED
	//start add coding filter table survey 
	function getcustmonthcbg(){
		$area = $this->input->post('area');
		$id_cabang = $this->input->post('cabang');
		// $data['cust'] = $this->M_cro->get_allcustmonth_filter($id_cabang)->result();
		$data['cust'] = $this->M_cro->get_allcustmonth_filter2($id_cabang);
		$data['area'] = $this->M_cro->get_allarea()->result();
    	$data['content_page'] = 'v_survey';
		$data['page'] = 'Modul';
		$this->load->view('index',$data);
	}
	//end add coding filter table survey

	function viewlaporanbulanan(){
    	$data['content_page'] = 'v_laporanbulanan';
		$data['page'] = 'Master';
		$this->load->view('index',$data);
	}

	//start get data laporan dari database sosis
	function getcustmonth()
	{
		$bln = $this->input->post('bulan');
		$thn = $this->input->post('tahun');
		$joinYearMonth = $thn."-".$bln;
		$YearMonthNow = date('Y-m');
		$DateNow = date('Y-m-d');
		$MonthNow = date('m');
		$getNameMonth = $this->convert_name_month($bln);
		$nameMonth = $getNameMonth;
		$getNameMonthNow = $this->convert_name_month($MonthNow);
		$nameMonthNow = $getNameMonthNow;
		//start check data double
		$CekDataSrv = $this->M_cro->checkDataSurv($bln,$thn);
		$DataCekSrv = $CekDataSrv[0];
		$GetJmlDataCekSrv = $DataCekSrv->cek_data;
		$getLastDay = $this->last_day_of_the_month($DateNow);
		$getDayNow = substr($getLastDay, -2);
		// print_r($getDayNow);
		// die();
		// if($bln == $MonthNow && ){

		// }
		if($joinYearMonth > $YearMonthNow || $bln == $MonthNow){
			echo "<script>alert('Gagal Tarik Data Tahun : ".$thn." & Bulan : ".@$nameMonth.". Data Belum Siap Ditarik. Karena Sekarang Masih Bulan ".@$nameMonthNow."!');</script>";
			redirect('C_cro/viewlaporanbulanan','refresh');
		}elseif($GetJmlDataCekSrv > 0){//berarti data ada
			//no action
			echo "<script>alert('Gagal Tarik Data Tahun : ".$thn." & Bulan : ".@$nameMonth.". Data sudah ditarik/sudah ada.');</script>";
        	redirect('C_cro/viewlaporanbulanan','refresh');
		}else{//berarti tidak ada data
			//with action
			$custslskws = $this->M_cro->get_custmonthslskws($bln,$thn)->result();
			$custservkws = $this->M_cro->get_custmonthservkws($bln,$thn)->result();
			foreach($custslskws as $a){
				$telp1 = null;
				$telp2 = null;
				$hp = null;
				if(substr($a->telepon_1,0,2) == '08'){
					$telp1 = $a->telepon_1;
				}
				if(substr($a->telepon_2,0,2) == '08'){
					$telp2 = $a->telepon_2;
				}
				if(substr($a->hp,0,2) == '08'){
					$hp = $a->hp;
				}
				//start replace phone just integer
				$rplace_tlp1 = str_replace(' ','',$telp1);
				$fix_telp1 = str_replace('-','',$rplace_tlp1);
				$rplace_tlp2 = str_replace(' ','',$telp2);
				$fix_telp2 = str_replace('-','',$rplace_tlp2);
				$rplace_hp = str_replace(' ','',$hp);
				$fix_hp = str_replace('-','',$rplace_hp);
				//end replace phone just integer
				$ex = explode(".", $a->diskon);
				$diskon = $ex[0];
				$date = date('Y-m-d',$a->tgl_invoice);
				$x= array(
					'tgl_surv' => null,
					'id_comp' => $a->id_company,
					'id_cust' => $a->id,
					'nama_cust' => $a->nama_customer,
					'telepon1' => $fix_telp1,
					'telepon2' => $fix_telp2,
					'hp' => $fix_hp,
					'type' => $a->type,
					'tgl_inv' => $date,
					'diskon' => $diskon,
					'id_respon' => null,
					'tipe_cust' => 1
				);
				$this->M_cro->add_custslskws($x);
			}
			foreach ($custservkws as $a) {
				$telp1 = null;
				$telp2 = null;
				$hp = null;
				$tlpwo = null;
				if(substr($a->telepon_1,0,2) == '08'){
					$telp1 = $a->telepon_1;
				}
				if(substr($a->telepon_2,0,2) == '08'){
					$telp2 = $a->telepon_2;
				}
				if(substr($a->hp,0,2) == '08'){
					$hp = $a->hp;
				}
				if(substr($a->alamat,0,2) == '08'){
					$tlpwo = $a->alamat;
				}
				//start replace phone just integer
				$rplace_tlp1 = str_replace(' ','',$telp1);
				$fix_telp1 = str_replace('-','',$rplace_tlp1);
				$rplace_tlp2 = str_replace(' ','',$telp2);
				$fix_telp2 = str_replace('-','',$rplace_tlp2);
				$rplace_hp = str_replace(' ','',$hp);
				$fix_hp = str_replace('-','',$rplace_hp);
				$rplace_tlpwo = str_replace(' ','',$tlpwo);
				$fix_tlpwo = str_replace('-','',$rplace_tlpwo);
				//end replace phone just integer
				$ex = explode(".", $a->discount);
				$diskon = $ex[0];
				$date = date('Y-m-d',$a->date_sinv);
				$tglwo = date('Y-m-d',$a->date_so);
				$x= array(
						'tgl_surv' => null,
						'id_comp' => $a->id_company,
						'id_cust' => $a->id_customer,
						'nama_cust' => $a->nama_customer,
						'telepon1' => $fix_telp1,
						'telepon2' => $fix_telp2,
						'hp' => $fix_hp,
						'type' => $a->nama,
						'tgl_inv' => $date,
						'diskon' => $diskon,
						'id_respon' => null,
						'tipe_cust' => 2,
						'tgl_wo' => $tglwo,
						'tlp_wo' => $fix_tlpwo
					);
					$this->M_cro->add_custservkws($x);
			}
		}
		//end check data double
		echo "<script>alert('Berhasil Tarik Data Tahun : ".$thn." & Bulan : ".@$nameMonth."');</script>";
        redirect('C_cro/viewsurveys','refresh');
		// redirect(base_url('C_cro/viewsurveys'));
	}
	function getcabangjs()
	{
		$id = $this->input->post('id');
		$data = $this->M_cro->get_cabangjs($id)->result();
		echo json_encode($data);
	}
	function get_total_call_sukses_survey()
	{
		$id = $this->input->post('id');
		// $data = $this->M_cro->get_call_sukses_survey()->result();
		$data = $this->M_cro->get_call_sukses_survey();
		echo json_encode($data);
	}
	function get_total_call_failed_survey()
	{
		$id = $this->input->post('id');
		// $data = $this->M_cro->get_call_sukses_survey()->result();
		$data = $this->M_cro->get_call_failed_survey();
		echo json_encode($data);
	}
	function get_total_no_have_tlp_survey()
	{
		$id = $this->input->post('id');
		// $data = $this->M_cro->get_call_sukses_survey()->result();
		$data = $this->M_cro->get_no_have_tlp_survey();
		// $this->db->_protect_identifiers = TRUE;
		echo json_encode($data);
	}
	function detsurv($id='',$area='',$cabang='',$tipe='',$tipe_motor='') //NOT USED VERSION OLD
	{
		$data['det'] = $this->M_cro->get_detsurv($id)->row();
		$DataCustSurvey = $this->M_cro->get_detsurv($id)->row();
		if($DataCustSurvey->tgl_telp == NULL || $DataCustSurvey->tgl_telp == ''){
			$DateNowUsed = date('Y-m-d');
		}else{
			$DateNowUsed = $DataCustSurvey->tgl_telp;
		}
		$data['resp'] = $this->M_cro->getresp()->result();
		//start get data status customer
		$getStatusCust = $this->M_cro->getStatusCust($id);
        $statusCust = $getStatusCust['tipe_cust'];//Jika tipe_cust 1 = sales JIka tipe_cust 2 = service
        // print_r($statusCust);
        // die();
		//end get data status customer
		//satrt get data 3 telepon customer
        $getTeleponCust = $this->M_cro->getTeleponCust($id);
        $CustGetTelepon = $getTeleponCust[0];
        // print_r($getTeleponCust[0]);
        // die();
        //start kritik & saran
        $GetDataDetailSurvey = $this->db->query("SELECT kritik_saran, harga_beli, harga_diskon, status_dapat_invoice FROM tb_surv WHERE id_surv='".$id."' ")->result();
        foreach($GetDataDetailSurvey as $row_detail){
          @$KritikSaran = $row_detail->kritik_saran;
          @$HargaBeli = $row_detail->harga_beli;
          @$HargaDiskon = $row_detail->harga_diskon;
          @$StatusDapatInvoice = $row_detail->status_dapat_invoice;
        }
        //end kritik & saran

		//end get data 3 teelpon customer
		$data['quest'] = $this->M_cro->getquest($statusCust)->result();
    	// $data['content_page'] = 'v_detsurvey';//old
    	$data['content_page'] = 'v_detsurvey_new';//new
		$data['page'] = 'Modul';
		$data['date_now'] = date('Y-m-d');
		$data['date_now_used'] = $DateNowUsed;
		$data['time_now'] = date('H:i:s');
		$DateTime = date('Y-m-d').'||'.date('H:i:s');
		$Username = $this->session->userdata('user');
		$Name_user = $this->session->userdata('nama');
		$Username_Name_user = $Username." - ".$Name_user;
		$Created_at_by = "Created At ".$DateTime." & By ".$Username_Name_user;
		$data['created_at_by'] = $Created_at_by;
		$data['status_cust'] = $statusCust;
		$data['DataTeleponCust'] = $CustGetTelepon;
		$data['KritikSaran'] = $KritikSaran;
		$data['HargaBeli'] = $HargaBeli;
		$data['HargaDiskon'] = $HargaDiskon;
		$data['StatusDapatInvoice'] = $StatusDapatInvoice;
		$this->load->view('index',$data);
	}

	function save_detsurvey(){//used
		$id_surv = $this->input->post('id_surv');
		$nama_cust = $this->input->post('nama_cust');
		$nama_cabang = $this->input->post('nama_cabang');
		$tgl_inv = $this->input->post('tgl_inv');
		$tgl_telp = $this->input->post('tgl_telp');
		$time_telp = $this->input->post('time_telp');
		$tipe_motor = $this->input->post('tipe_motor');
		$diskon = $this->input->post('diskon');
		$flex_tlp = $this->input->post('flex_tlp');
		$id_respon = $this->input->post('id_respon');
		$kritiksaran = $this->input->post('kritiksaran');
		$harga_beli = $this->input->post('harga_beli');
		$harga_diskon = $this->input->post('harga_diskon');
		$status_dapat_invoice = $this->input->post('status_dapat_invoice');
		$status_cust = $this->input->post('status_cust');
		$created_at_by = $this->input->post('created_at_by');
		$details = $this->input->post("detail");
		$header = $this->input->post("header");
		//start for filter
		$filter_area = $this->input->post("filter_area_form");
		$filter_cabang = $this->input->post("filter_cabang_form");
		$filter_tipe = $this->input->post("filter_tipe_form");
		$filter_tipe_motor = $this->input->post("filter_tipe_motor_form");
		//end for filter
		$x = $this->M_cro->countRowRespon();
		// foreach ($x as $row_respon){
		// 	// print_r($row_respon->id_respon);
		// 	$totalRowRespon = $row_respon->id_respon;

		// 	//start save detail survey
		// 	$detail["id_surv"] = $id_surv;
	 //        $detail["id_quest"] = $header['created_by'];
	 //        $saveDetail = $this->M_cro->saveDetSurvey($detail);
		// 	//end save detail survey
		// }
		// $paramQuest = 'quest_'.$totalRowRespon;
		// $paramNilai = 'nilai_'.$totalRowRespon;

		//start update data tb_surv
		// $header["id_surv"] = $id_respon;
		// $header["id_respon"] = $id_respon;
		foreach ($header as $row_header){
			// print_r($row_header['id_surv']);
			$surv_id = $row_header['id_surv'];
		}
		// die();
		$UpdateHeader_tb_surv = $this->M_cro->updateHeaderSurvey($surv_id,$id_respon,$tgl_telp,$time_telp,$kritiksaran,$harga_beli,$harga_diskon,$status_dapat_invoice);
		$AddHeader_tb_hedsurv = $this->M_cro->AddHeaderSurvey($surv_id,$id_respon,$tgl_telp,$time_telp,$kritiksaran,$harga_beli,$harga_diskon,$status_dapat_invoice,$status_cust,$created_at_by);
		//end update data tb_surv
		//start cek data header survey
		$CekDataHeaderSurvey[0] = $this->M_cro->CekDataHeaderSurvey($surv_id);//untuk tes local dengan id_surv = 1280
		$DataCekHeaderSUrvey = $CekDataHeaderSurvey[0];
		$JmlDataCekHeaderSurvey = $DataCekHeaderSUrvey[0]->cek_data;
		// if($JmlDataCekHeaderSurvey == 0){//jika tidak ada data pada tb_hedsurv
			
		// }else{//jika ada data pada tb_hedsurv
			
		// }
		//end cek data header survey

		//start save data flex telepon
		$CekDataHeaderTlp[0] = $this->M_cro->CekDataHeaderTlp($surv_id);//untuk tes local dengan id_surv = 1280
		$DataCekTlpHeader = $CekDataHeaderTlp[0];
		$JmlDataCekHeaderTlp = $DataCekTlpHeader[0]->cek_data;
		// print_r($JmlDataCekHeaderTlp);
		// die();
		if($JmlDataCekHeaderTlp == 0){//tidak Ada Data //maka akan input data baru
			// echo "Tidak Ada Data";
			$AddHeader_tb_counter_tlp = $this->M_cro->AddSurvHeaderTlp($surv_id,$flex_tlp,$status_cust,$created_at_by);
			//start get data ID Header Surv Telepon
			$GetIDHeaderSurvTlp = $this->M_cro->GetDataIDHeaderSurvTlp($surv_id,$status_cust);//$flex_tlp
			// $GetIDHeaderTlp = $GetIDHeaderSurvTlp[0];
			$FixIDHeaderTlp = $GetIDHeaderSurvTlp[0]->id_header_telepon;
			// print_r($GetIDHeaderSurvTlp);
			// die();
			// $FixIDHeaderTlp = $GetIDHeaderSurvTlp;
			//end get data ID Header Surv Telepon
			//start get data telepon
			$GetDataTelepon = $this->M_cro->GetDataTlp($surv_id,$flex_tlp);
			// $GetTeleponData = $GetDataTelepon[0];
			$FixDataTlp = $GetDataTelepon[0]->telepon;
			// $FixDataTlp = $GetDataTelepon;
			// print_r($FixIDHeaderTlp);
			// print_r($FixDataTlp);
			//start get data telepon
			$AddDetail_tb_counter_tlp = $this->M_cro->AddSurvDetailTlp($FixIDHeaderTlp,$FixDataTlp,$id_respon,$tgl_telp,$time_telp);
		}else{//Ada Data // maka akan update data counter
			// echo "Ada Data";
			//start get data ID Header Surv Telepon
			$GetIDHeaderSurvTlp = $this->M_cro->GetDataIDHeaderSurvTlp($surv_id,$status_cust);//$flex_tlp
			// $GetIDHeaderTlp = $GetIDHeaderSurvTlp[0];
			$FixIDHeaderTlp = $GetIDHeaderSurvTlp[0]->id_header_telepon;
			//end get data ID Header Surv Telepon
			//start get data telepon
			$GetDataTelepon = $this->M_cro->GetDataTlp($surv_id,$flex_tlp);
			// $GetTeleponData = $GetDataTelepon[0];
			$FixDataTlp = $GetDataTelepon[0]->telepon;
			//start get data telepon
			$AddDetail_tb_counter_tlp = $this->M_cro->UpdateHeaderDetailTlp($surv_id,$flex_tlp,$status_cust,$created_at_by,$FixIDHeaderTlp,$FixDataTlp,$id_respon,$tgl_telp,$time_telp);
			$AddDetail_tb_counter_tlp = $this->M_cro->AddSurvDetailTlp($FixIDHeaderTlp,$FixDataTlp,$id_respon,$tgl_telp,$time_telp);
		}
		// die();
		//end save data flex telepon
		if($id_respon == 6){
			$status_insert_detsurv = 1;
			$GetIDHeadSurv = $this->M_cro->getIDHeadSurv($surv_id,$tgl_telp,$id_respon,$kritiksaran,$status_cust,$status_insert_detsurv)->row();
			$IDHedSurv = $GetIDHeadSurv->id_hedsurv;
			foreach (@$details as $detail) {
				//start save detail survey
				$detail["id_hedsurv"] = $IDHedSurv;//$id_surv;
				$detail["id_surv"] = $id_surv;
	        	$saveDetail = $this->M_cro->saveDetSurvey($detail);
				//end save detail survey
			}
		}
		// if($id_respon == 6){
			
		// }
		// $this->viewsurveys();
		if($filter_area != '' || $filter_cabang != '' || $filter_tipe != '' || $filter_tipe_motor != ''){
			redirect(base_url('C_cro/viewsurveys/'.$filter_area.'/'.$filter_cabang.'/'.$filter_tipe.'/'.$filter_tipe_motor));
		}else{
			redirect(base_url('C_cro/viewsurveys'));
		}
		// redirect(base_url('C_cro/viewsurveys'));//version old not used
		//start coding class viewsurvey
		// $data['cust'] = $this->M_cro->get_allcustmonth()->result();
		// // $data['cust2'] = $this->M_cro->get_allcustmonth_filter2($id_cabang);
		// $data['area'] = $this->M_cro->get_allarea()->result();
  //   	$data['content_page'] = 'v_survey';
		// $data['page'] = 'Modul';
		// $this->load->view('index',$data);
		//end coding class viewsurvey
		// die();
	}

	function viewreportbulanan()
	{
		// $data['resp'] = $this->M_cro->getresp()->result();
		$data['area'] = $this->M_cro->get_allarea()->result();
    	$data['content_page'] = 'v_reportbulanan';
		$data['page'] = 'Report';
		$data['month'] = date('m');
		$data['year'] = date('Y');
		$this->load->view('index',$data);
	}

	function get_report_bulanan($kode_kantor='',$month='',$year=''){//$date_start='',$date_end='' //variabel lama yang tidak digunakan
		$area = $kode_kantor;//$this->input->post('area', TRUE);//area adalah id_company
		// $date_start = $date_start;//$this->input->post('date_start', TRUE);
		// $date_end = $date_end;//$this->input->post('date_end', TRUE);
		$month = $month;
		$year = $year;
		// $TestReport = $this->M_cro->jmlAreaCompany();
		$DataAreaCabangCompany = $this->M_cro->jmlAreaAllCompany();
		// $getJmlDataService = $this->M_cro->getJmlDataService();
		// $JmlDataService = $getJmlDataService[0]->jml_service;
		// $JmlDataSales = $getJmlDataService[0]->jml_sales;
		// print_r($TestReport);
		// print_r($area);
		// die();
		// $date_start = "2020-01-07";
		// $date_end = "2020-05-08";
		// $data['Antrian']=$this->M_Antrian->viewReportAntrian($date_start,$date_end);
		// $dataSurveyBulanan[0] = $this->M_cro->viewReportBulanan($area,$date_start,$date_end);
		$GetTotalDataCabang[0] = $this->M_cro->getTotalDataCabang($area);
		$LoopTotalDataCabang = $GetTotalDataCabang[0];
		foreach ($LoopTotalDataCabang as $row_jml_cabang) {
			$JmlDataCabang = $row_jml_cabang->jml_cabang;
		}
		// print_r($dataSurveyBulanan[0]);
		// die();
		$NameMonth = $this->convert_name_month($month);
		// print_r($NameMonth);
		// die();
		// $data['JumlahTerlayani'] = $this->M_Antrian->getSumTerlayani($date_start,$date_end);
		// $data['JumlahLost'] = $this->M_Antrian->getSumLost($date_start,$date_end);
		// $data['SurveyBulanan'] = $dataSurveyBulanan[0];//not used
		// $data['SalesJmlData'] = $JmlDataSales;
		// $data['SarviceJmlData'] = $JmlDataService;
		$data['JmlCabangIndex'] = $JmlDataCabang;
		$data['DataCompanyAreaCabang'] = $DataAreaCabangCompany;
		$data['GetKodeKantor'] = $area;
		// $data['date_start'] = $date_start;//not used
		// $data['date_end'] = $date_end;//not used
		$data['date_now'] = date('Y-m-d');//date('Y-m-d H:i:s')
		$data['get_month_filter'] = $month;
		$data['get_name_month'] = $NameMonth;
		$data['get_year_filter'] = $year;
		if($area == '909'){//jika pilih All Area
			$this->load->view('preview_report_survey_bulanan_allarea',$data);
		}else{//jika pilih 
			$this->load->view('preview_report_survey_bulanan_new',$data);
		}
	}

	function get_report_area_month($kode_kantor='',$date_start='',$date_end=''){
		$area = $kode_kantor;//$this->input->post('area', TRUE);//area adalah id_company
		$date_start = $date_start;//$this->input->post('date_start', TRUE);
		$date_end = $date_end;//$this->input->post('date_end', TRUE);
		$GetTotalDataCabang[0] = $this->M_cro->getTotalDataCabang($area);
		$LoopTotalDataCabang = $GetTotalDataCabang[0];
		foreach ($LoopTotalDataCabang as $row_jml_cabang) {
			$JmlDataCabang = $row_jml_cabang->jml_cabang;
		}
		// print_r($JmlDataCabang);
		// die();
		$DataAreaCabangCompany = $this->M_cro->jmlAreaAllCompany();
		$dataSurveyBulanan[0] = $this->M_cro->viewReportBulanan($area,$date_start,$date_end);
		$data['SurveyBulanan'] = $dataSurveyBulanan[0];
		$data['DataCompanyAreaCabang'] = $DataAreaCabangCompany;
		$data['GetKodeKantor'] = $area;
		$data['date_start'] = $date_start;
		$data['date_end'] = $date_end;
		$data['date_now'] = date('Y-m-d');//date('Y-m-d H:i:s')
		$this->load->view('preview_report_survey_bulanan_new',$data);
	}

	function viewreport_area_pertahun(){
		// $data['resp'] = $this->M_cro->getresp()->result();
		$data['area'] = $this->M_cro->get_allarea()->result();
    	$data['content_page'] = 'v_report_area_pertahun';
		$data['page'] = 'Report';
		$data['month'] = date('m');
		$data['year'] = date('Y');
		$this->load->view('index',$data);
	}

	function get_report_area_pertahun($year=''){//$date_start='',$date_end='' //variabel lama yang tidak digunakan
		// $month = $month;
		$year = $year;
		$DataAreaCabangCompany = $this->M_cro->jmlAreaAllCompany();
		// $GetTotalDataCabang[0] = $this->M_cro->getTotalDataCabang($area);
		// $LoopTotalDataCabang = $GetTotalDataCabang[0];
		// foreach ($LoopTotalDataCabang as $row_jml_cabang) {
		// 	$JmlDataCabang = $row_jml_cabang->jml_cabang;
		// }
		// print_r($dataSurveyBulanan[0]);
		// die();
		// $data['JmlCabangIndex'] = $JmlDataCabang;
		$data['DataCompanyAreaCabang'] = $DataAreaCabangCompany;
		// $data['date_start'] = $date_start;//not used
		// $data['date_end'] = $date_end;//not used
		$data['date_now'] = date('Y-m-d');//date('Y-m-d H:i:s')
		$data['get_year_filter'] = $year;
		$this->load->view('preview_report_survey_area_pertahun',$data);
	}
	function get_report_area_pertahuns($year=''){//$date_start='',$date_end='' //variabel lama yang tidak digunakan //FUNCTION VIEW YANG TERPAKAI
		// $month = $month;
		// $year = $year;
		// $year = '2021';//for tes local
		$DataAreaCabangCompany = $this->M_cro->jmlAreaAllCompany();
		// $GetTotalDataCabang[0] = $this->M_cro->getTotalDataCabang($area);
		// $LoopTotalDataCabang = $GetTotalDataCabang[0];
		// foreach ($LoopTotalDataCabang as $row_jml_cabang) {
		// 	$JmlDataCabang = $row_jml_cabang->jml_cabang;
		// }
		// $data['JmlCabangIndex'] = $JmlDataCabang;
		$getMonthNow = date('m');//dinamis
		// $getMonthNow = '01';//local tes
		if($getMonthNow < 10){
			$FixMonthNow = substr($getMonthNow, 1, 2);
		}else{
			$FixMonthNow = $getMonthNow;
		}
		// print_r($FixMonthNow);
		// die();
		$data['DataCompanyAreaCabang'] = $DataAreaCabangCompany;
		$data['month_now'] = $FixMonthNow;//get month
		$data['year_now'] = date('Y');//year now
		$data['date_now'] = date('Y-m-d');//date('Y-m-d H:i:s')
		$data['get_year_filter'] = $year;
		$this->load->view('preview_report_pertahun_tiap_bulan',$data);
	}
	function cek_data_permonth_area_pertahun($year=''){
		// $year = $year;
		$year = '2020';//tes local
		$januari = '01';
		$DataJanuari = $this->M_cro->cekDataJanuariRprtAreaPertahun($januari);
		$Februari = '02';
		$DataFebruari = $this->M_cro->cekDataJanuariRprtAreaPertahun($Februari);
		$Maret = '03';
		$DataMaret = $this->M_cro->cekDataJanuariRprtAreaPertahun($Maret);
		$April = '04';
		$DataApril = $this->M_cro->cekDataJanuariRprtAreaPertahun($April);
		$Mei = '05';
		$DataMei = $this->M_cro->cekDataJanuariRprtAreaPertahun($Mei);
		$Juni = '06';
		$DataJuni = $this->M_cro->cekDataJanuariRprtAreaPertahun($Juni);
		$Juli = '07';
		$DataJuli = $this->M_cro->cekDataJanuariRprtAreaPertahun($Juli);
		$Agustus = '08';
		$DataAgustus = $this->M_cro->cekDataJanuariRprtAreaPertahun($Agustus);
		$September = '09';
		$DataSeptember = $this->M_cro->cekDataJanuariRprtAreaPertahun($September);
		$Oktober = '10';
		$DataOktober = $this->M_cro->cekDataJanuariRprtAreaPertahun($Oktober);
		$November = '11';
		$DataNovember = $this->M_cro->cekDataJanuariRprtAreaPertahun($November);
		$Desember = '22';
		$DataDesember = $this->M_cro->cekDataJanuariRprtAreaPertahun($Desember);
	}

	function convert_name_month($month=''){
		if($month == '01'){
			$NameMonth = 'Januari';
		}elseif($month == '02'){
			$NameMonth = 'Februari';
		}elseif($month == '03'){
			$NameMonth = 'Maret';
		}elseif($month == '04'){
			$NameMonth = 'April';
		}elseif($month == '05'){
			$NameMonth = 'Mei';
		}elseif($month == '06'){
			$NameMonth = 'Juni';
		}elseif($month == '07'){
			$NameMonth = 'Juli';
		}elseif($month == '08'){
			$NameMonth = 'Agustus';
		}elseif($month == '09'){
			$NameMonth = 'September';
		}elseif($month == '10'){
			$NameMonth = 'Oktober';
		}elseif($month == '11'){
			$NameMonth = 'November';
		}elseif($month == '12'){
			$NameMonth = 'Desember';
		}else{
			$NameMonth = 'Undifined';
		}
		return $NameMonth;
	}
	function generate_save_rpt_allarea(){
		// print_r($_POST);
		// die();
		$service_1 = $this->input->post('service_1');
		$service_2 = $this->input->post('service_2');
		$service_3 = $this->input->post('service_3');
		$service_4 = $this->input->post('service_4');
		$sales_1 = $this->input->post('sales_1');
		$sales_2 = $this->input->post('sales_2');
		$sales_3 = $this->input->post('sales_3');
		$sales_4 = $this->input->post('sales_4');
		$year = $this->input->post('year');
		$month = $this->input->post('month');
		$data = $this->M_cro->saveRptAllArea($service_1,$service_2,$service_3,$service_4,$sales_1,$sales_2,$sales_3,$sales_4,$year,$month)->result();
		echo json_encode($data);
	}
	function viewreport_total_data(){
		$data['area'] = $this->M_cro->get_allarea()->result();
    	$data['content_page'] = 'v_report_total_data';
		$data['page'] = 'Report';
		$data['month'] = date('m');
		$data['year'] = date('Y');
		$this->load->view('index',$data);
	}
	function last_day_of_the_month($date = ''){//to get last day from date
		// $date = '2021-06';//tes local
	    $month  = date('m', strtotime($date));
	    $year   = date('Y', strtotime($date));
	    $result = strtotime("{$year}-{$month}-01");
	    $result = strtotime('-1 second', strtotime('+1 month', $result));
	    $fix_result = date('Y-m-d', $result);
	    // print_r(date('Y-m-d', $result));
	    // print_r($fix_result);
	    // die();
	    return $fix_result;
	}
	function report_total_data($area='',$year='',$month=''){
		$joinDate = $year.'-'.$month.'-01';
		$lastDay = $this->last_day_of_the_month($joinDate);
		$getDay = substr($lastDay,-2);
		$getNameMonth = $this->convert_name_month($month);
		// print_r($lastDay);
		// die();
		$data['area'] = $this->M_cro->get_allarea()->result();
		$data['page'] = 'Report';
		$data['month'] = $month;//date('m');
		$data['year'] = $year;//date('Y');
		$data['lastDay'] = $lastDay;
		$data['getDay'] = $getDay;
		$data['nameMonth'] = $getNameMonth;
		$data['controller'] = $this;//to call controller in view PHP CI
		$data['case_all_area'] = '0';//jika bukan all area
		$data['case_per_area'] = '1';//jika bukan all area
		// $this->load->view('report_total_data_view',$data);//index
		// start kondisi penentuan area manual
		if($area == '111'){//jika All Area
			// $data['content_page'] = 'report_total_data_view_area';//untuk all area
			$this->load->view('report_total_data_view_all_area',$data);//index
		}elseif($area == 'JKT'){//jika jakarta
			// $data['content_page'] = 'report_total_data_view_jkt';//untuk Jakarta
			$this->load->view('report_total_data_view_jkt',$data);//index
		}elseif($area == 'KALBAR'){//jika kalbar
			// $data['content_page'] = 'report_total_data_view_kalbar';//untuk kalbar
			$this->load->view('report_total_data_view_kalbar',$data);//index
		}elseif($area == 'KALSEL'){//jika kalses
			// $data['content_page'] = 'report_total_data_view_kalsel';//untuk kalsel
			$this->load->view('report_total_data_view_kalsel',$data);//index
		}elseif($area == 'KALTIM'){//jika kaltim
			// $data['content_page'] = 'report_total_data_view_kaltim';//untuk kaltim
			$this->load->view('report_total_data_view_kaltim',$data);//index
		}
		elseif($area == 'SUMSEL'){//jika sumsel
			// $data['content_page'] = 'report_total_data_view_sumsel';//untuk sumsel
			$this->load->view('report_total_data_view_sumsel',$data);//index
		}
		else{//jika belum/tidak ada data area pada coding
			echo "<script>alert('Data Area ".$area." Belum Ada Pada System.');</script>";
        	redirect('C_cro/viewreport_total_data','refresh');
		}
		// end kondisi penentuan area manual
	}
	//start function check holiday for international
	function checkHoliday($date=''){
	  // $date = '2021-05-02';//test local
	  if(date('l', strtotime($date)) == 'Saturday'){
	  	$var = array('id' => '0',
	  				 'id_parent' => '01',
	  				 'holiday' => 'Saturday'
	  				);
	  	// print_r($var['holiday']);
	    // return $var;
	  }else if(date('l', strtotime($date)) == 'Sunday'){
	  	$var = array('id' => '0',
	  				 'id_parent' => '02',
	  				 'holiday' => 'Sunday'
	  				);
	  	// print_r($var);
	    // return $var;
	  }else{
	  	// nanti dibuatkan halaman untuk input tgl libur manual melalui modul //tidak jadi dibuatkan
	  	// start bagian untuk manual array tanggal libur
	    // $receivedDate = date('d M', strtotime($date));
	    // $holiday = array(
	    //   '01 Jan' => 'New Year Day',
	    //   '18 Jan' => 'Martin Luther King Day',
	    //   '22 Feb' => 'Washington\'s Birthday',
	    //   '05 Jul' => 'Independence Day',
	    //   '11 Nov' => 'Veterans Day',
	    //   '24 Dec' => 'Christmas Eve',
	    //   '25 Dec' => 'Christmas Day',
	    //   '31 Dec' => 'New Year Eve'
	    // );
	    // foreach($holiday as $key => $value){
	    //   if($receivedDate == $key){
	    //   	echo $value;
	    //     // return $value;
	    //   }
	    // }
	    // end bagian untuk manual array tanggal libur
	    $var = array('id' => '1',
	  				 'id_parent' => '11',
	  				 'holiday' => 'Not Holiday'
	  				);
	  }
	  print_r($var);
	  // return $var;
	}
	//end function check holiday fo international

	function viewreport_call_success(){
		$dateNow = date('Y-m-d');
		$data['area'] = $this->M_cro->get_allarea()->result();
		$data['resp'] = $this->M_cro->getresp()->result();
		$data['get_last_date'] = $this->get_last_date($dateNow);
		$dateLast = $this->get_last_date($dateNow);
		$rplc_dateLast = substr($dateLast, -2);
		// print_r($rplc_dateLast);
		// die();
		$data['get_last_date_fix'] = $rplc_dateLast;
    	$data['content_page'] = 'v_report_call_success';
		$data['page'] = 'Report';
		$data['dateNow'] = $dateNow;
		$data['month'] = date('m');
		$data['year'] = date('Y');
		$this->load->view('index',$data);
	}

	function get_report_call_success($kode_kantor='',$month='',$year='',$id_respon='',$dates='',$category=''){//$date_start='',$date_end='' //variabel lama yang tidak digunakan
		// $tipeMotor = $this->uri->segment(6);
		$area = $kode_kantor;//$this->input->post('area', TRUE);//area adalah id_company
		// $date_start = $date_start;//$this->input->post('date_start', TRUE);
		// $date_end = $date_end;//$this->input->post('date_end', TRUE);
		$month = $month;
		$year = $year;
		// $TestReport = $this->M_cro->jmlAreaCompany();
		$DataAreaCabangCompany = $this->M_cro->jmlAreaAllCompany();
		// $getJmlDataService = $this->M_cro->getJmlDataService();
		// $JmlDataService = $getJmlDataService[0]->jml_service;
		// $JmlDataSales = $getJmlDataService[0]->jml_sales;
		// print_r($TestReport);
		// print_r($area);
		// die();
		// $date_start = "2020-01-07";
		// $date_end = "2020-05-08";
		// $data['Antrian']=$this->M_Antrian->viewReportAntrian($date_start,$date_end);
		// $dataSurveyBulanan[0] = $this->M_cro->viewReportBulanan($area,$date_start,$date_end);
		$GetTotalDataCabang[0] = $this->M_cro->getTotalDataCabang($area);
		$LoopTotalDataCabang = $GetTotalDataCabang[0];
		foreach ($LoopTotalDataCabang as $row_jml_cabang) {
			$JmlDataCabang = $row_jml_cabang->jml_cabang;
		}
		$GetKetRespon = $this->M_cro->getKetRespon($id_respon);
		foreach ($GetKetRespon as $row_row_nm_respon) {
			$respon_nm_fix = $row_row_nm_respon->nm_respon;
		}
		if($id_respon == 99){//all respon
			$respon_nm = "All Respon";
		}elseif($id_respon == 91){//tanpa call sukses
			$respon_nm = "Tanpa Call Sukses";
		}else{
			$respon_nm = $respon_nm_fix;
		}
		// print_r($dataSurveyBulanan[0]);
		// die();
		$NameMonth = $this->convert_name_month($month);
		// print_r($KetRespon);
		// die();
		// $data['JumlahTerlayani'] = $this->M_Antrian->getSumTerlayani($date_start,$date_end);
		// $data['JumlahLost'] = $this->M_Antrian->getSumLost($date_start,$date_end);
		// $data['SurveyBulanan'] = $dataSurveyBulanan[0];//not used
		// $data['SalesJmlData'] = $JmlDataSales;
		// $data['SarviceJmlData'] = $JmlDataService;
		$data['JmlCabangIndex'] = $JmlDataCabang;
		$data['DataCompanyAreaCabang'] = $DataAreaCabangCompany;
		$data['GetKodeKantor'] = $area;
		// $data['date_start'] = $date_start;//not used
		// $data['date_end'] = $date_end;//not used
		$data['date_now'] = date('Y-m-d');//date('Y-m-d H:i:s')
		$data['get_date_filter'] = $dates;
		$data['get_month_filter'] = $month;
		$data['get_name_month'] = $NameMonth;
		$data['get_year_filter'] = $year;
		$data['get_id_respon_filter'] = $id_respon;
		$data['get_respon'] = $respon_nm;
		// print_r($area);
		// die();
		if($category == 11){//jika kategori Summary
			if($kode_kantor == '222'){//jika pilih all area
				$this->load->view('preview_report_all_area_call_success_summary',$data);
			}else{
				$this->load->view('preview_report_call_success_summary',$data);
			}
		}else{//jika kategori bukan summary/jika kategori detail
			if($kode_kantor == '222'){//jika pilih all area
				$this->load->view('preview_report_all_area_call_success',$data);
			}else{
				$this->load->view('preview_report_call_success',$data);
			}
		}
	}

	function viewreport_call_done($area='',$cabang='',$tipe='',$tipe_motor='',$month='',$year=''){
		// echo "<script>alert('|".$tipe_motor."|');</script>";
		// $tipeMotor = $this->uri->segment(6);
		$yearNow = date('Y');
		$monthNow = date('m');
		// if($tipe_motor != '' || $tipe_motor == NULL){
			$charRplcTipeMotor = str_replace('%20',' ',$tipe_motor);
		// }else{
		// 	$charRplcTipeMotor = "11";
		// }
		// die();
		$data['cust'] = $this->M_cro->get_allcustmonth($yearNow,$monthNow)->result();
		// $data['cust2'] = $this->M_cro->get_allcustmonth_filter2($id_cabang);
		$data['area'] = $this->M_cro->get_allarea()->result();
    	$data['content_page'] = 'v_report_call_done';
		$data['page'] = 'Report';
		$data['month'] = date('m');
		$data['year'] = date('Y');
		$data['area_get'] = $area;
		$data['cabang_get'] = $cabang;
		$data['tipe_get'] = $tipe;
		$data['tipe_motor_get'] = $charRplcTipeMotor;
		$data['month_get'] = $month;
		$data['year_get'] = $year;
		$this->load->view('index',$data);
	}

	//start add coding by aji firman for datatables //FOR DATA REPORT CALL DONE
	function get_data_report_call_done($area='',$cabang='',$tipe='',$tipe_motors='',$month='',$year='')
    {
    	$yearNow = date('Y');
		$monthNow = date('m');
		$tipe_motor = str_replace('%20',' ',$tipe_motors);
		$month_filter = $month;
		$year_filter = $year;
		// $printR = print_r($_POST);
		// log_message('error', $yearNow);
		// echo "<script>alert('Berhasil Tarik Data Tahun : ".@$printR."');</script>";
    	// print_r($year_filter);
		// print_r($month_filter);
		// print_r($tipe_motor);
		// print_r($area);
		// print_r($cabang);
    	// die();
    	// if($area != '' || $cabang != ''){
    		$list = $this->M_cro->get_datatables_call_done($area,$cabang,$tipe,$tipe_motor,$yearNow,$monthNow,$month_filter,$year_filter);
    	// }else{
    		// $list = $this->M_cro->get_datatables();
    	// }
        $data = array();
        $no = $_POST['start'];
        $baseUrl = base_url();
        foreach ($list as $field) {
            $no++;
            $row = array();
            $idSurv = $field->id_surv;
            $CekCounter = $this->db->query("SELECT id_surv FROM tb_surv_header_telepon WHERE id_surv='".$idSurv."' ")->num_rows();
            if($CekCounter > 0){
	            $GetCounter = $this->db->query("SELECT counter FROM tb_surv_header_telepon WHERE id_surv='".$idSurv."' ")->result();
	            foreach($GetCounter as $row_counter){
	              @$DataCounter = $row_counter->counter;
	            }
	            if(@$DataCounter != '' || @$DataCounter != array()){
	              $FixDataCounter = @$DataCounter;
	            }else{
	              $FixDataCounter = 0;
	            }
	        }else{
	           $FixDataCounter = 0;
	        }
            if($field->tipe_cust == 1){
            	$TipeCust = "SALES";
            }else{
            	$TipeCust = "SERVICE";
            }
			$aryDataFilter = array(
				'area' => $area,
				'cabang' => $cabang,
				'tipe' => $tipe,
				'tipe_motor' => $tipe_motor
			);
			$id_surv = $field->id_surv;
			$btnViewUrl_v2 = $baseUrl.'C_cro/detsurv_v2';//version not used
			$btnViewUrl_v3 = $baseUrl.'C_cro/detcalldone';//version used
			$btnViewUrl_v4 = $baseUrl.'C_cro/viewreport_call_not_done';//version used //detcallnotdone
            $btnView = "<a href='$btnViewUrl_v2' class=''><i class='far fa-eye nav-icon' style='color:black'></i></a>";
			$btnForm_done = "<form action='$btnViewUrl_v3' method='POST'><input type='hidden' name='id_surv' value='$id_surv'><input type='hidden' name='area' value='$area'><input type='hidden' name='cabang' value='$cabang'><input type='hidden' name='tipe' value='$tipe'><input type='hidden' name='tipe_motor' value='$tipe_motor'><button style='background-color: Transparent; border: none;' type='submit' value='Views'><i class='far fa-eye nav-icon' style='color:blue;' title='View Detail Call Done'></i></button></form>";
			$btnForm_not_done = "<form action='$btnViewUrl_v4' method='POST'><input type='hidden' name='id_surv' value='$id_surv'><input type='hidden' name='area' value='$area'><input type='hidden' name='cabang' value='$cabang'><input type='hidden' name='tipe' value='$tipe'><input type='hidden' name='tipe_motor' value='$tipe_motor'><input type='hidden' name='month' value='$month_filter'><input type='hidden' name='year' value='$year_filter'><button style='background-color: Transparent; border: none;' type='submit' value='Views'><i class='far fa-eye nav-icon' style='color:red;' title='View Detail Call Not Done'></i></button></form>";
            $row[] = $no;
            $row[] = $TipeCust;
            $row[] = $field->nama;
            $row[] = $field->nama_cust;
            $row[] = $field->tgl_inv;
            $row[] = $FixDataCounter.'x (DONE)';
			if($FixDataCounter >= 2){
				$row[] = $btnForm_done." ".$btnForm_not_done;
			}else{
				$row[] = $btnForm_done;
			}
 
            $data[] = $row;
        }
 
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->M_cro->count_all_call_done($area,$cabang,$tipe,$tipe_motor,$yearNow,$monthNow,$month_filter,$year_filter),
            "recordsFiltered" => $this->M_cro->count_filtered_call_done($area,$cabang,$tipe,$tipe_motor,$yearNow,$monthNow,$month_filter,$year_filter),
            "data" => $data,
        );
        //output dalam format JSON
        echo json_encode($output);
    }
  	//end add coding by aji firman for datatables //FOR DATA REPORT CALL DONE
	
	  function viewreport_call_not_done(){
		// echo "<script>alert('|".$tipe_motor."|');</script>";
		// $tipeMotor = $this->uri->segment(6);
		$id = $this->input->post('id_surv');
		$area = $this->input->post('area');
		$cabang = $this->input->post('cabang');
		$tipe = $this->input->post('tipe');
		$tipe_motor = $this->input->post('tipe_motor');
		$month = $this->input->post('month');
		$year = $this->input->post('year');
		$yearNow = date('Y');
		$monthNow = date('m');
		// if($tipe_motor != '' || $tipe_motor == NULL){
			$charRplcTipeMotor = str_replace('%20',' ',$tipe_motor);
		// }else{
		// 	$charRplcTipeMotor = "11";
		// }
		// die();
		$data['cust'] = $this->M_cro->get_allcustmonth($yearNow,$monthNow)->result();
		// $data['cust2'] = $this->M_cro->get_allcustmonth_filter2($id_cabang);
		$data['area'] = $this->M_cro->get_allarea()->result();
    	$data['content_page'] = 'v_report_call_not_done';
		$data['page'] = 'Report';
		$data['month'] = date('m');
		$data['year'] = date('Y');
		$data['idsurv_get'] = $id;
		$data['area_get'] = $area;
		$data['cabang_get'] = $cabang;
		$data['tipe_get'] = $tipe;
		$data['tipe_motor_get'] = $charRplcTipeMotor;
		$data['month_get'] = $month;
		$data['year_get'] = $year;
		$this->load->view('index',$data);
	}

	//start add coding by aji firman for datatables //FOR DATA REPORT CALL NOT DONE
	function get_data_report_call_not_done($id_surv=''){
			$yearNow = date('Y');
			$monthNow = date('m');
			// $tipe_motor = str_replace('%20',' ',$tipe_motors);
			// $month_filter = $month;
			// $year_filter = $year;
			// print_r($_POST);
			// die();
			// if($area != '' || $cabang != ''){
				$list = $this->M_cro->get_datatables_call_not_done($id_surv);
			// }else{
				// $list = $this->M_cro->get_datatables();
			// }
			$data = array();
			$no = $_POST['start'];
			$baseUrl = base_url();
			foreach ($list as $field) {
				$no++;
				$row = array();
				$idSurv = $field->id_surv;
				// $CekCounter = $this->db->query("SELECT id_surv FROM tb_surv_header_telepon WHERE id_surv='".$idSurv."' ")->num_rows();
				// if($CekCounter > 0){
				// 	$GetCounter = $this->db->query("SELECT counter FROM tb_surv_header_telepon WHERE id_surv='".$idSurv."' ")->result();
				// 	foreach($GetCounter as $row_counter){
				// 	  @$DataCounter = $row_counter->counter;
				// 	}
				// 	if(@$DataCounter != '' || @$DataCounter != array()){
				// 	  $FixDataCounter = @$DataCounter;
				// 	}else{
				// 	  $FixDataCounter = 0;
				// 	}
				// }else{
				//    $FixDataCounter = 0;
				// }
				if($field->tipe_cust == 1){
					$TipeCust = "SALES";
				}else{
					$TipeCust = "SERVICE";
				}
				if($field->id_respon == "1"){
					$KetRespon = "Tidak Aktif";
				}elseif($field->id_respon == "2"){
					$KetRespon = "Salah Sambung";
				}elseif($field->id_respon == "3"){
					$KetRespon = "Tidak Beri Nilai";
				}elseif($field->id_respon == "4"){
					$KetRespon = "Tidak Terdaftar";
				}elseif($field->id_respon == "5"){
					$KetRespon = "Tidak Direspon";
				}elseif($field->id_respon == "6"){
					$KetRespon = "Call Success";
				}else{
					$KetRespon = "Undifined";
				}
				$aryDataFilter = array(
					'idsurv' => $idSurv
					// 'area' => $area,
					// 'cabang' => $cabang,
					// 'tipe' => $tipe,
					// 'tipe_motor' => $tipe_motor
				);
				$id_surv = $field->id_surv;
				$id_hedsurv = $field->id_hedsurv;
				$btnViewUrl_v2 = $baseUrl.'C_cro/detsurv_v2';//version not used
				$btnViewUrl_v3 = $baseUrl.'C_cro/detcalldone';//version used
				$btnViewUrl_v4 = $baseUrl.'C_cro/viewreport_call_not_done';//version used //detcallnotdone
				$btnViewUrl_v5 = $baseUrl.'C_cro/detcallnotdone';//version used //detcallnotdone
				$btnView = "<a href='$btnViewUrl_v2' class=''><i class='far fa-eye nav-icon' style='color:black'></i></a>";
				// $btnForm_done = "<form action='$btnViewUrl_v3' method='POST'><input type='hidden' name='id_surv' value='$id_surv'><input type='hidden' name='area' value='$area'><input type='hidden' name='cabang' value='$cabang'><input type='hidden' name='tipe' value='$tipe'><input type='hidden' name='tipe_motor' value='$tipe_motor'><button style='background-color: Transparent; border: none;' type='submit' value='Views'><i class='far fa-eye nav-icon' style='color:blue;' title='View Detail Call Done'></i></button></form>";
				$btnForm_det_not_done = "<form action='$btnViewUrl_v5' method='POST'><input type='hidden' name='id_hedsurv' value='$id_hedsurv'><input type='hidden' name='id_surv' value='$id_surv'><button style='background-color: Transparent; border: none;' type='submit' value='Views'><i class='far fa-eye nav-icon' style='color:red;' title='View Detail Call Not Done'></i></button></form>";
				$row[] = $no;
				$row[] = $TipeCust;
				$row[] = $field->nama;
				$row[] = $field->nama_cust;
				$row[] = $field->tgl_inv;
				$row[] = $KetRespon;
				$row[] = $btnForm_det_not_done;
	 
				$data[] = $row;
			}
	 
			$output = array(
				"draw" => $_POST['draw'],
				"recordsTotal" => $this->M_cro->count_all_call_not_done($id_surv),
				"recordsFiltered" => $this->M_cro->count_filtered_call_not_done($id_surv),
				"data" => $data,
			);
			//output dalam format JSON
			echo json_encode($output);
		}
		  //end add coding by aji firman for datatables //FOR DATA REPORT CALL NOT DONE

	//start bagian report call done version 2 USED
	function detcalldone(){
		// print_r($_POST);
		// die();
		$id = $this->input->post('id_surv');
		$area = $this->input->post('area');
		$cabang = $this->input->post('cabang');
		$tipe = $this->input->post('tipe');
		$tipe_motor = $this->input->post('tipe_motor');
		$data['det'] = $this->M_cro->get_detsurv($id)->row();
		$DataCustSurvey = $this->M_cro->get_detsurv($id)->row();
		if($DataCustSurvey->tgl_telp == NULL || $DataCustSurvey->tgl_telp == ''){
			$DateNowUsed = date('Y-m-d');
		}else{
			$DateNowUsed = $DataCustSurvey->tgl_telp;
		}
		$data['resp'] = $this->M_cro->getresp()->result();
		//start get data status customer
		$getStatusCust = $this->M_cro->getStatusCust($id);
        $statusCust = $getStatusCust['tipe_cust'];//Jika tipe_cust 1 = sales JIka tipe_cust 2 = service
        // print_r($statusCust);
        // die();
		//end get data status customer
		//satrt get data 3 telepon customer
        $getTeleponCust = $this->M_cro->getTeleponCust($id);
        $CustGetTelepon = $getTeleponCust[0];
        // print_r($getTeleponCust[0]);
        // die();
        //start kritik & saran
        $GetDataDetailSurvey = $this->db->query("SELECT kritik_saran, harga_beli, harga_diskon, status_dapat_invoice FROM tb_surv WHERE id_surv='".$id."' ")->result();
        foreach($GetDataDetailSurvey as $row_detail){
          @$KritikSaran = $row_detail->kritik_saran;
          @$HargaBeli = $row_detail->harga_beli;
          @$HargaDiskon = $row_detail->harga_diskon;
          @$StatusDapatInvoice = $row_detail->status_dapat_invoice;
        }
        //end kritik & saran
		//start get flex telepon
		$GetFlexTlp = $this->db->query("SELECT a.flex_telepon, b.telepon FROM tb_surv_header_telepon AS a INNER JOIN tb_surv_detail_telepon AS b ON a.id_header_telepon=b.id_header_telepon WHERE a.id_surv='".$id."' ")->result();
		foreach($GetFlexTlp as $row_flx_tlp){
			$FlexTlp = $row_flx_tlp->flex_telepon;
			$FixTlp = $row_flx_tlp->telepon;
		}
		// print_r($Tlp);
		// die();
		//end get flex telepon

		//end get data 3 teelpon customer
		$data['quest'] = $this->M_cro->getquest($statusCust)->result();
    	// $data['content_page'] = 'v_detsurvey';//old
    	$data['content_page'] = 'v_detcalldone';//new
		$data['page'] = 'Report';
		$data['date_now'] = date('Y-m-d');
		$data['date_now_used'] = $DateNowUsed;
		$data['time_now'] = date('H:i:s');
		$data['telepon_done'] = $FixTlp;
		$DateTime = date('Y-m-d').'||'.date('H:i:s');
		$Username = $this->session->userdata('user');
		$Name_user = $this->session->userdata('nama');
		$Username_Name_user = $Username." - ".$Name_user;
		$Created_at_by = "Created At ".$DateTime." & By ".$Username_Name_user;
		$data['created_at_by'] = $Created_at_by;
		$data['status_cust'] = $statusCust;
		$data['DataTeleponCust'] = $CustGetTelepon;
		$data['KritikSaran'] = $KritikSaran;
		$data['HargaBeli'] = $HargaBeli;
		$data['HargaDiskon'] = $HargaDiskon;
		$data['StatusDapatInvoice'] = $StatusDapatInvoice;
		$data['filter_area'] = $area;
		$data['filter_cabang'] = $cabang;
		$data['filter_tipe'] = $tipe;
		$data['filter_tipe_motor'] = $tipe_motor;
		$this->load->view('index',$data);
	}
	function detcallnotdone(){
		// print_r($_POST);
		// die();
		$id_hedsurv = $this->input->post('id_hedsurv');
		$id = $this->input->post('id_surv');
		$area = $this->input->post('area');
		$cabang = $this->input->post('cabang');
		$tipe = $this->input->post('tipe');
		$tipe_motor = $this->input->post('tipe_motor');
		// $data['det'] = $this->M_cro->get_detsurv($id)->row(); //version old
		$data['det'] = $this->M_cro->get_detsurv_notdone($id,$id_hedsurv)->row();
		$DataCustSurvey = $this->M_cro->get_detsurv($id)->row();
		if($DataCustSurvey->tgl_telp == NULL || $DataCustSurvey->tgl_telp == ''){
			$DateNowUsed = date('Y-m-d');
		}else{
			$DateNowUsed = $DataCustSurvey->tgl_telp;
		}
		$data['resp'] = $this->M_cro->getresp()->result();
		//start get data status customer
		$getStatusCust = $this->M_cro->getStatusCust($id);
        $statusCust = $getStatusCust['tipe_cust'];//Jika tipe_cust 1 = sales JIka tipe_cust 2 = service
        // print_r($statusCust);
        // die();
		//end get data status customer
		//satrt get data 3 telepon customer
        $getTeleponCust = $this->M_cro->getTeleponCust($id);
        $CustGetTelepon = $getTeleponCust[0];
        // print_r($getTeleponCust[0]);
        // die();
        //start kritik & saran
        // $GetDataDetailSurvey = $this->db->query("SELECT kritik_saran, harga_beli, harga_diskon, status_dapat_invoice FROM tb_surv WHERE id_surv='".$id."' ")->result();
        // foreach($GetDataDetailSurvey as $row_detail){
        //   @$KritikSaran = $row_detail->kritik_saran;
        //   @$HargaBeli = $row_detail->harga_beli;
        //   @$HargaDiskon = $row_detail->harga_diskon;
        //   @$StatusDapatInvoice = $row_detail->status_dapat_invoice;
        // }
		$GetDataDetailSurvey = $this->db->query("SELECT tgl_telp, kritik_saran, harga_beli, harga_diskon, status_dapat_invoice FROM tb_hedsurv WHERE id_hedsurv='".$id_hedsurv."' ")->result();
        foreach($GetDataDetailSurvey as $row_detail){
		  @$TglTelp = $row_detail->tgl_telp;
          @$KritikSaran = $row_detail->kritik_saran;
          @$HargaBeli = $row_detail->harga_beli;
          @$HargaDiskon = $row_detail->harga_diskon;
          @$StatusDapatInvoice = $row_detail->status_dapat_invoice;
        }
        //end kritik & saran
		//start get flex telepon
		$GetFlexTlp = $this->db->query("SELECT a.flex_telepon, b.telepon FROM tb_surv_header_telepon AS a INNER JOIN tb_surv_detail_telepon AS b ON a.id_header_telepon=b.id_header_telepon WHERE a.id_surv='".$id."' ")->result();
		foreach($GetFlexTlp as $row_flx_tlp){
			$FlexTlp = $row_flx_tlp->flex_telepon;
			$FixTlp = $row_flx_tlp->telepon;
		}
		// print_r($Tlp);
		// die();
		//end get flex telepon

		//end get data 3 teelpon customer
		$data['quest'] = $this->M_cro->getquest($statusCust)->result();
    	// $data['content_page'] = 'v_detsurvey';//old
    	$data['content_page'] = 'v_detcallnotdone';//new
		$data['page'] = 'Report';
		$data['date_now'] = date('Y-m-d');
		$data['date_now_used'] = $DateNowUsed;
		$data['date_terakhir'] = $TglTelp;
		$data['time_now'] = date('H:i:s');
		$data['telepon_done'] = $FixTlp;
		$DateTime = date('Y-m-d').'||'.date('H:i:s');
		$Username = $this->session->userdata('user');
		$Name_user = $this->session->userdata('nama');
		$Username_Name_user = $Username." - ".$Name_user;
		$Created_at_by = "Created At ".$DateTime." & By ".$Username_Name_user;
		$data['created_at_by'] = $Created_at_by;
		$data['status_cust'] = $statusCust;
		$data['DataTeleponCust'] = $CustGetTelepon;
		$data['KritikSaran'] = $KritikSaran;
		$data['HargaBeli'] = $HargaBeli;
		$data['HargaDiskon'] = $HargaDiskon;
		$data['StatusDapatInvoice'] = $StatusDapatInvoice;
		$data['filter_area'] = $area;
		$data['filter_cabang'] = $cabang;
		$data['filter_tipe'] = $tipe;
		$data['filter_tipe_motor'] = $tipe_motor;
		$this->load->view('index',$data);
	}
	//end bagian report call done version 3 USED

	//START FUNCTION GET LAST DAY AT MONTH
	function get_last_date($date=''){
		// $date = '2021-10-01';//test local
		// print_r($date);
		// die();
		// echo date("Y-m-t", strtotime($date));
		$GetFixLastDate = date("Y-m-t", strtotime($date));
		return $GetFixLastDate;
	}
	//END FUNCTION GET LAST DAY AT MONTH

}
