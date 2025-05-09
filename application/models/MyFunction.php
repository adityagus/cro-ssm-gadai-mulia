<?php

Class MyFunction extends CI_Model{

	function __construct(){
		parent:: __construct();
		date_default_timezone_set("Asia/Jakarta");
	}

  function getMasterQuest(){
    return $this->db->get('mst_quest');
  }

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
	  // print_r($var);
	  return $var;
	}

	function last_day_of_the_month($date = ''){//to get last day from date
	    $month  = date('m', strtotime($date));
	    $year   = date('Y', strtotime($date));
	    $result = strtotime("{$year}-{$month}-01");
	    $result = strtotime('-1 second', strtotime('+1 month', $result));
	    $fix_result = date('Y-m-d', $result);
	    // print_r(date('Y-m-d', $result));
	    // die();
	    return $fix_result;
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

}

?>