<?php

Class MyLibrary{

	function nama_saya(){
		echo "Nama saya adalah aji firman syahputra !";
	}
 
	function nama_kamu($nama){
		echo "Nama kamu adalah ". $nama ." !";
	}

	function ary_test($date=''){
		$var = array('id' => '1',
					  'date' => $date,
					  'holiday' => 'Not Working'
				);
		return $var;
	}

	function getHoliday($date=''){
		$CI =& get_instance();
		$CI->load->model('MyFunction');  //<-------Load the Model first
		$HolidayGet = $CI->MyFunction->checkHoliday($date);
		return $HolidayGet;
	}

	function last_day_of_the_month($date=''){//function get last data month
		$CI =& get_instance();
		$CI->load->model('MyFunction');  //<-------Load the Model first
		$HolidayGet = $CI->MyFunction->last_day_of_the_month($date);
		return $HolidayGet;
	}

	function convert_name_month($month=''){//function name month
		$CI =& get_instance();
		$CI->load->model('MyFunction');  //<-------Load the Model first
		$NameMonthGet = $CI->MyFunction->convert_name_month($month);
		return $NameMonthGet;
	}

}

?>