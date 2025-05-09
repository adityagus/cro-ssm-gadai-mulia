<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Customer Relation Officer - Super Sukses Motor</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css_report/responsive_tab/style.css">
  <!-- <link rel="stylesheet" href="./style.css"> -->

</head>
<body style="width: 140%;">
<!-- partial:index.partial.html -->
<div class="tabs">
    <input type="radio" name="tab" id="tab1" checked="checked">
    <label for="tab1">Januari</label>
    <input type="radio" name="tab" id="tab2">
    <label for="tab2">Februari</label>
    <input type="radio" name="tab" id="tab3">
    <label for="tab3">Maret</label>
    <input type="radio" name="tab" id="tab4">
    <label for="tab4">April</label>
    <input type="radio" name="tab" id="tab5">
    <label for="tab5">Mei</label>
    <input type="radio" name="tab" id="tab6">
    <label for="tab6">Juni</label>
    <input type="radio" name="tab" id="tab7">
    <label for="tab7">Juli</label>
    <input type="radio" name="tab" id="tab8">
    <label for="tab8">Agustus</label>
    <input type="radio" name="tab" id="tab9">
    <label for="tab9">September</label>
    <input type="radio" name="tab" id="tab10">
    <label for="tab10">Oktober</label>
    <input type="radio" name="tab" id="tab11">
    <label for="tab11">November</label>
    <input type="radio" name="tab" id="tab12">
    <label for="tab12">Desember</label>
    <input type="radio" name="tab" id="tab13">
    <label for="tab13">Rata-Rata Area</label>
  
    <div class="tab-content-wrapper">
      <?php
      $yearGet = @$get_year_filter;
      $baseURL = base_url().'get_report_area_pertahuns/'.$yearGet;
      ?>
      <div id="tab-content-1" class="tab-content">
        <!-- <p><?= @$baseURL ?></p> -->
        <?php
        // $data['JmlCabangIndex'] = $JmlCabangIndex;
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_januari',$data);
        ?>
      </div>
      <div id="tab-content-2" class="tab-content">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_februari',$data);
        ?>
      </div>
      <div id="tab-content-3" class="tab-content">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_maret',$data);
        ?>
      </div>
      <div id="tab-content-4" class="tab-content">
        <!-- <p><?= @$baseURL ?></p> -->
        <?php
        // $data['JmlCabangIndex'] = $JmlCabangIndex;
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        // $this->load->view('report_survey_area_pertahun_november',$data);//not used
        $this->load->view('preview_report_survey_area_pertahun_april',$data);
        ?>
      </div>
      <div id="tab-content-5" class="tab-content">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_mei',$data);
        ?>
      </div>
      <div id="tab-content-6" class="tab-content">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_juni',$data);
        ?>
      </div>
      <div id="tab-content-7" class="tab-content">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_juli',$data);
        ?>
      </div>
      <div id="tab-content-8" class="tab-content">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_agustus',$data);
        ?>
      </div>
      <div id="tab-content-9" class="tab-content">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_september',$data);
        ?>
      </div>
      <div id="tab-content-10" class="tab-content">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_oktober',$data);
        ?>
      </div>
      <div id="tab-content-11" class="tab-content">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_november',$data);
        ?>
      </div>
      <div id="tab-content-12" class="tab-content">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_desember',$data);
        ?>
      </div>
      <div id="tab-content-13" class="tab-content">
        <!-- <?php
        $Array_RataRataServiceNoType_1[] = @$Rata_rata_ServiceNoType_1;//@$Rata_rata_ServiceNoType_1;
        ?>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec efficitur mattis nibh, non ornare neque. In bibendum consequat imperdiet. Duis eros ex, vestibulum vel fermentum ut, gravida at turpis. Etiam porta sem dolor, at finibus metus consequat a. Aliquam erat volutpat. 13</p>
        <?php
        echo $Rata_rata_ServiceNoType_1;
        foreach ($Array_RataRataServiceNoType_1 as $row_tes) {
          echo $row_tes;
          echo "<br>";
        }
        ?> -->
        <?php
        // $month_now = 1;//tes month local
        $set_month = 12;
        if(@$month_now == 1){//jika bulan sekarang januari
          $before_month = @$set_month;//maka mulai dari bulan 12
        }elseif(@$month_now >= 2 && @$month_now <= 12 ){//jika mulai dari
          $before_month = @$month_now - 1;//maka bulan sekarang dikurang 1
        }else{
          $before_month = @$month_now;//maka bulan sekarang dikurang 1
        }
        echo @$month_now;
        echo "<br>";
        echo @$before_month;
        echo "<br>";
        ?>
        <table border="1" style="width: 20%;" >
          <tr>
            <td rowspan="5">Rata-Rata Area Jakarta</td>
            <td>Sales</td>
            <td>Survey Penjualan</td>
            <td>Jan</td>
            <td>Feb</td>
            <td>Mar</td>
            <td>April</td>
            <td>Mei</td>
            <td>Juni</td>
            <td>Juli</td>
            <td>Agustus</td>
            <td>September</td>
            <td>Oktober</td>
            <td>November</td>
            <td>Desember</td>
            <td>Rata-Rata</td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>1</td>
            <td>TIM SALES</td>
            <td>
              <input type="text" name="sales_type_1_januari" id="sales_type_1_januari" readonly="">
              <p id="p_sales_type_1_januari" name="p_sales_type_1_januari"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_februari" id="sales_type_1_februari" readonly="">
              <p id="p_sales_type_1_februari" name="p_sales_type_1_februari"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_maret" id="sales_type_1_maret" readonly="">
              <p id="p_sales_type_1_maret" name="p_sales_type_1_maret"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_april" id="sales_type_1_april" readonly="">
              <p id="p_sales_type_1_april" name="p_sales_type_1_april"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_mei" id="sales_type_1_mei" readonly="">
              <p id="p_sales_type_1_mei" name="p_sales_type_1_mei"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_juni" id="sales_type_1_juni" readonly="">
              <p id="p_sales_type_1_juni" name="p_sales_type_1_juni"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_juli" id="sales_type_1_juli" readonly="">
              <p id="p_sales_type_1_juli" name="p_sales_type_1_juli"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_agustus" id="sales_type_1_agustus" readonly="">
              <p id="p_sales_type_1_agustus" name="p_sales_type_1_agustus"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_september" id="sales_type_1_september" readonly="">
              <p id="p_sales_type_1_september" name="p_sales_type_1_september"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_oktober" id="sales_type_1_oktober" readonly="">
              <p id="p_sales_type_1_oktober" name="p_sales_type_1_oktober"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_november" id="sales_type_1_november" readonly="">
              <p id="p_sales_type_1_november" name="p_sales_type_1_november"></p>
            </td>
            <td>
              <input type="text" name="sales_type_1_desember" id="sales_type_1_desember" readonly="">
              <p id="p_sales_type_1_desember" name="p_sales_type_1_desember"></p>
            </td>
            <td>
              <input type="text" name="average_sales_type_1_all" id="average_sales_type_1_all" readonly="">
              <p id="p_sales_type_1_all" name="p_sales_type_1_all"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Kondisi Motor</td>
            <td>
              <input type="text" name="sales_type_2_januari" id="sales_type_2_januari" readonly="">
              <p id="p_sales_type_2_januari" name="p_sales_type_2_januari"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_februari" id="sales_type_2_februari" readonly="">
              <p id="p_sales_type_2_februari" name="p_sales_type_2_februari"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_maret" id="sales_type_2_maret" readonly="">
              <p id="p_sales_type_2_maret" name="p_sales_type_2_maret"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_april" id="sales_type_2_april" readonly="">
              <p id="p_sales_type_2_april" name="p_sales_type_2_april"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_mei" id="sales_type_2_mei" readonly="">
              <p id="p_sales_type_2_mei" name="p_sales_type_2_mei"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_juni" id="sales_type_2_juni" readonly="">
              <p id="p_sales_type_2_juni" name="p_sales_type_2_juni"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_juli" id="sales_type_2_juli" readonly="">
              <p id="p_sales_type_2_juli" name="p_sales_type_2_juli"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_agustus" id="sales_type_2_agustus" readonly="">
              <p id="p_sales_type_2_agustus" name="p_sales_type_2_agustus"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_september" id="sales_type_2_september" readonly="">
              <p id="p_sales_type_2_september" name="p_sales_type_2_september"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_oktober" id="sales_type_2_oktober" readonly="">
              <p id="p_sales_type_2_oktober" name="p_sales_type_2_oktober"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_november" id="sales_type_2_november" readonly="">
              <p id="p_sales_type_2_november" name="p_sales_type_2_november"></p>
            </td>
            <td>
              <input type="text" name="sales_type_2_desember" id="sales_type_2_desember" readonly="">
              <p id="p_sales_type_2_desember" name="p_sales_type_2_desember"></p>
            </td>
            <td>
              <input type="text" name="average_sales_type_2_all" id="average_sales_type_2_all" readonly="">
              <p id="p_sales_type_2_all" name="p_sales_type_2_all"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
            <td>0</td>
          </tr>
        </table>
      </div>
    </div>
  </div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
<script type="text/javascript">
//start bagian document ready function
$(document).ready(function(){
  // alert('Testing Index Version Pages Peryear Survey');//success!!!
  get_rata_rata_every_month_peryear();

  function substr_percent(number=''){
    var number_substr = number;
    if(number_substr == '0%' || number_substr == '0'){
      var fix_number_substr = number_substr.substring(0, 1);
    }else{
      var fix_number_substr = number_substr.substring(0, 2);
    }
    return fix_number_substr;
  }

  // txt_Rata_rata_ServiceNoType_1_januari_jkt
  function get_rata_rata_every_month_peryear(){
    x = $("#txt_Rata_rata_ServiceNoType_4_maret_jkt").val();
    alert(x);
    //start month January
      //start for Tyoe Service
    RataRataService_1_Januari = $("#txt_Rata_rata_ServiceNoType_1_januari").val();
    var substr_service_type_1_januari = substr_percent(RataRataService_1_Januari);
    RataRataService_2_Januari = $("#txt_Rata_rata_ServiceNoType_2_januari").val();
    var substr_service_type_2_januari = substr_percent(RataRataService_2_Januari);
    RataRataService_3_Januari = $("#txt_Rata_rata_ServiceNoType_3_januari").val();
    var substr_service_type_3_januari = substr_percent(RataRataService_3_Januari);
    RataRataService_4_Januari = $("#txt_Rata_rata_ServiceNoType_4_januari").val();
    var substr_service_type_4_januari = substr_percent(RataRataService_4_Januari);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Januari = $("#txt_Rata_rata_SalesNoType_1_januari").val();
    var substr_sales_type_1_januari = substr_percent(RataRataSales_1_Januari);
    RataRataSales_2_Januari = $("#txt_Rata_rata_SalesNoType_2_januari").val();
    var substr_sales_type_2_januari = substr_percent(RataRataSales_2_Januari);
    RataRataSales_3_Januari = $("#txt_Rata_rata_SalesNoType_3_januari").val();
    var substr_sales_type_3_januari = substr_percent(RataRataSales_3_Januari);
    RataRataSales_4_Januari = $("#txt_Rata_rata_SalesNoType_4_januari").val();
    var substr_sales_type_4_januari = substr_percent(RataRataSales_4_Januari);
      //end for Type Sales
    //end month January
    //start month February
      //start for Type Service
    RataRataService_1_Februari = $("#txt_Rata_rata_ServiceNoType_1_februari").val();
    var substr_service_type_1_februari = substr_percent(RataRataService_1_Februari);
    RataRataService_2_Februari = $("#txt_Rata_rata_ServiceNoType_2_februari").val();
    var substr_service_type_2_februari = substr_percent(RataRataService_2_Februari);
    RataRataService_3_Februari = $("#txt_Rata_rata_ServiceNoType_3_februari").val();
    var substr_service_type_3_februari = substr_percent(RataRataService_3_Februari);
    RataRataService_4_Februari = $("#txt_Rata_rata_ServiceNoType_4_februari").val();
    var substr_service_type_4_februari = substr_percent(RataRataService_4_Februari);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Februari = $("#txt_Rata_rata_SalesNoType_1_februari").val();
    var substr_sales_type_1_februari = substr_percent(RataRataSales_1_Februari);
    RataRataSales_2_Februari = $("#txt_Rata_rata_SalesNoType_2_februari").val();
    var substr_sales_type_2_februari = substr_percent(RataRataSales_2_Februari);
    RataRataSales_3_Februari = $("#txt_Rata_rata_SalesNoType_3_februari").val();
    var substr_sales_type_3_februari = substr_percent(RataRataSales_3_Februari);
    RataRataSales_4_Februari = $("#txt_Rata_rata_SalesNoType_4_februari").val();
    var substr_sales_type_4_februari = substr_percent(RataRataSales_4_Februari);
      //end for Type Sales
    //end month February
    //start month Maret
      //start for Type Service
    RataRataService_1_Maret = $("#txt_Rata_rata_ServiceNoType_1_maret_jkt").val();
    var substr_service_type_1_maret = substr_percent(RataRataService_1_Maret);
    RataRataService_2_Maret = $("#txt_Rata_rata_ServiceNoType_2_maret").val();
    var substr_service_type_2_maret = substr_percent(RataRataService_2_Maret);
    RataRataService_3_Maret = $("#txt_Rata_rata_ServiceNoType_3_maret").val();
    var substr_service_type_3_maret = substr_percent(RataRataService_3_Maret);
    RataRataService_4_Maret = $("#txt_Rata_rata_ServiceNoType_4_maret").val();
    var substr_service_type_4_maret = substr_percent(RataRataService_4_Maret);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Maret = $("#txt_Rata_rata_SalesNoType_1_maret_jkt").val();
    var substr_sales_type_1_maret = substr_percent(RataRataSales_1_Maret);
    RataRataSales_2_Maret = $("#txt_Rata_rata_SalesNoType_2_maret").val();
    var substr_sales_type_2_maret = substr_percent(RataRataSales_2_Maret);
    RataRataSales_3_Maret = $("#txt_Rata_rata_SalesNoType_3_maret").val();
    var substr_sales_type_3_maret = substr_percent(RataRataSales_3_Maret);
    RataRataSales_4_Maret = $("#txt_Rata_rata_SalesNoType_4_maret").val();
    var substr_sales_type_4_maret = substr_percent(RataRataSales_4_Maret);
      //end for Type Sales
    //end month Maret
    //start month April
      //start for Type Service
    RataRataService_1_April = $("#txt_Rata_rata_ServiceNoType_1_april").val();
    var substr_service_type_1_april = substr_percent(RataRataService_1_April);
    RataRataService_2_April = $("#txt_Rata_rata_ServiceNoType_2_april").val();
    var substr_service_type_2_april = substr_percent(RataRataService_2_April);
    RataRataService_3_April = $("#txt_Rata_rata_ServiceNoType_3_april").val();
    var substr_service_type_3_april = substr_percent(RataRataService_3_April);
    RataRataService_4_April = $("#txt_Rata_rata_ServiceNoType_4_april").val();
    var substr_service_type_4_april = substr_percent(RataRataService_4_April);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_April = $("#txt_Rata_rata_SalesNoType_1_april").val();
    var substr_sales_type_1_april = substr_percent(RataRataSales_1_April);
    RataRataSales_2_April = $("#txt_Rata_rata_SalesNoType_2_april").val();
    var substr_sales_type_2_april = substr_percent(RataRataSales_2_April);
    RataRataSales_3_April = $("#txt_Rata_rata_SalesNoType_3_april").val();
    var substr_sales_type_3_april = substr_percent(RataRataSales_3_April);
    RataRataSales_4_April = $("#txt_Rata_rata_SalesNoType_4_april").val();
    var substr_sales_type_4_april = substr_percent(RataRataSales_4_April);
      //end for Type Sales
    //end month April
    //start month May
      //start for Type Service
    RataRataService_1_Mei = $("#txt_Rata_rata_ServiceNoType_1_mei").val();
    var substr_service_type_1_mei = substr_percent(RataRataService_1_Mei);
    RataRataService_2_Mei = $("#txt_Rata_rata_ServiceNoType_2_mei").val();
    var substr_service_type_2_mei = substr_percent(RataRataService_2_Mei);
    RataRataService_3_Mei = $("#txt_Rata_rata_ServiceNoType_3_mei").val();
    var substr_service_type_3_mei = substr_percent(RataRataService_3_Mei);
    RataRataService_4_Mei = $("#txt_Rata_rata_ServiceNoType_4_mei").val();
    var substr_service_type_4_mei = substr_percent(RataRataService_4_Mei);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Mei = $("#txt_Rata_rata_SalesNoType_1_mei").val();
    var substr_sales_type_1_mei = substr_percent(RataRataSales_1_Mei);
    RataRataSales_2_Mei = $("#txt_Rata_rata_SalesNoType_2_mei").val();
    var substr_sales_type_2_mei = substr_percent(RataRataSales_2_Mei);
    RataRataSales_3_Mei = $("#txt_Rata_rata_SalesNoType_3_mei").val();
    var substr_sales_type_3_mei = substr_percent(RataRataSales_3_Mei);
    RataRataSales_4_Mei = $("#txt_Rata_rata_SalesNoType_4_mei").val();
    var substr_sales_type_4_mei = substr_percent(RataRataSales_4_Mei);
      //end for Type Sales
    //end month May
     //start month Juni
      //start for Type Service
    RataRataService_1_Juni = $("#txt_Rata_rata_ServiceNoType_1_juni").val();
    var substr_service_type_1_juni = substr_percent(RataRataService_1_Juni);
    RataRataService_2_Juni = $("#txt_Rata_rata_ServiceNoType_2_juni").val();
    var substr_service_type_2_juni = substr_percent(RataRataService_2_Juni);
    RataRataService_3_Juni = $("#txt_Rata_rata_ServiceNoType_3_juni").val();
    var substr_service_type_3_juni = substr_percent(RataRataService_3_Juni);
    RataRataService_4_Juni = $("#txt_Rata_rata_ServiceNoType_4_juni").val();
    var substr_service_type_4_juni = substr_percent(RataRataService_4_Juni);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Juni = $("#txt_Rata_rata_SalesNoType_1_juni").val();
    var substr_sales_type_1_juni = substr_percent(RataRataSales_1_Juni);
    RataRataSales_2_Juni = $("#txt_Rata_rata_SalesNoType_2_juni").val();
    var substr_sales_type_2_juni = substr_percent(RataRataSales_2_Juni);
    RataRataSales_3_Juni = $("#txt_Rata_rata_SalesNoType_3_juni").val();
    var substr_sales_type_3_juni = substr_percent(RataRataSales_3_Juni);
    RataRataSales_4_Juni = $("#txt_Rata_rata_SalesNoType_4_juni").val();
    var substr_sales_type_4_juni = substr_percent(RataRataSales_4_Juni);
      //end for Type Sales
    //end month Juni
     //start month Juli
      //start for Type Service
    RataRataService_1_Juli = $("#txt_Rata_rata_ServiceNoType_1_juli").val();
    var substr_service_type_1_juli = substr_percent(RataRataService_1_Juli);
    RataRataService_2_Juli = $("#txt_Rata_rata_ServiceNoType_2_juli").val();
    var substr_service_type_2_juli = substr_percent(RataRataService_2_Juli);
    RataRataService_3_Juli = $("#txt_Rata_rata_ServiceNoType_3_juli").val();
    var substr_service_type_3_juli = substr_percent(RataRataService_3_Juli);
    RataRataService_4_Juli = $("#txt_Rata_rata_ServiceNoType_4_juli").val();
    var substr_service_type_4_juli = substr_percent(RataRataService_4_Juli);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Juli = $("#txt_Rata_rata_SalesNoType_1_juli").val();
    var substr_sales_type_1_juli = substr_percent(RataRataSales_1_Juli);
    RataRataSales_2_Juli = $("#txt_Rata_rata_SalesNoType_2_juli").val();
    var substr_sales_type_2_juli = substr_percent(RataRataSales_2_Juli);
    RataRataSales_3_Juli = $("#txt_Rata_rata_SalesNoType_3_juli").val();
    var substr_sales_type_3_juli = substr_percent(RataRataSales_3_Juli);
    RataRataSales_4_Juli = $("#txt_Rata_rata_SalesNoType_4_juli").val();
    var substr_sales_type_4_juli = substr_percent(RataRataSales_4_Juli);
      //end for Type Sales
    //end month Juli
     //start month Agustus
      //start for Type Service
    RataRataService_1_Agustus = $("#txt_Rata_rata_ServiceNoType_1_agustus").val();
    var substr_service_type_1_agustus = substr_percent(RataRataService_1_Agustus);
    RataRataService_2_Agustus = $("#txt_Rata_rata_ServiceNoType_2_agustus").val();
    var substr_service_type_2_agustus = substr_percent(RataRataService_2_Agustus);
    RataRataService_3_Agustus = $("#txt_Rata_rata_ServiceNoType_3_agustus").val();
    var substr_service_type_3_agustus = substr_percent(RataRataService_3_Agustus);
    RataRataService_4_Agustus = $("#txt_Rata_rata_ServiceNoType_4_agustus").val();
    var substr_service_type_4_agustus = substr_percent(RataRataService_4_Agustus);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Agustus = $("#txt_Rata_rata_SalesNoType_1_agustus").val();
    var substr_sales_type_1_agustus = substr_percent(RataRataSales_1_Agustus);
    RataRataSales_2_Agustus = $("#txt_Rata_rata_SalesNoType_2_agustus").val();
    var substr_sales_type_2_agustus = substr_percent(RataRataSales_2_Agustus);
    RataRataSales_3_Agustus = $("#txt_Rata_rata_SalesNoType_3_agustus").val();
    var substr_sales_type_3_agustus = substr_percent(RataRataSales_3_Agustus);
    RataRataSales_4_Agustus = $("#txt_Rata_rata_SalesNoType_4_agustus").val();
    var substr_sales_type_4_agustus = substr_percent(RataRataSales_4_Agustus);
      //end for Type Sales
    //end month Agustus
     //start month September
      //start for Type Service
    RataRataService_1_September = $("#txt_Rata_rata_ServiceNoType_1_september").val();
    var substr_service_type_1_september = substr_percent(RataRataService_1_September);
    RataRataService_2_September = $("#txt_Rata_rata_ServiceNoType_2_september").val();
    var substr_service_type_2_september = substr_percent(RataRataService_2_September);
    RataRataService_3_September = $("#txt_Rata_rata_ServiceNoType_3_september").val();
    var substr_service_type_3_september = substr_percent(RataRataService_3_September);
    RataRataService_4_September = $("#txt_Rata_rata_ServiceNoType_4_september").val();
    var substr_service_type_4_september = substr_percent(RataRataService_4_September);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_September = $("#txt_Rata_rata_SalesNoType_1_september").val();
    var substr_sales_type_1_september = substr_percent(RataRataSales_1_September);
    RataRataSales_2_September = $("#txt_Rata_rata_SalesNoType_2_september").val();
    var substr_sales_type_2_september = substr_percent(RataRataSales_2_September);
    RataRataSales_3_September = $("#txt_Rata_rata_SalesNoType_3_september").val();
    var substr_sales_type_3_september = substr_percent(RataRataSales_3_September);
    RataRataSales_4_September = $("#txt_Rata_rata_SalesNoType_4_september").val();
    var substr_sales_type_4_september = substr_percent(RataRataSales_4_September);
      //end for Type Sales
    //end month September
     //start month Oktober
      //start for Type Service
    RataRataService_1_Oktober = $("#txt_Rata_rata_ServiceNoType_1_oktober").val();
    var substr_service_type_1_oktober = substr_percent(RataRataService_1_Oktober);
    RataRataService_2_Oktober = $("#txt_Rata_rata_ServiceNoType_2_oktober").val();
    var substr_service_type_2_oktober = substr_percent(RataRataService_2_Oktober);
    RataRataService_3_Oktober = $("#txt_Rata_rata_ServiceNoType_3_oktober").val();
    var substr_service_type_3_oktober = substr_percent(RataRataService_3_Oktober);
    RataRataService_4_Oktober = $("#txt_Rata_rata_ServiceNoType_4_oktober").val();
    var substr_service_type_4_oktober = substr_percent(RataRataService_4_Oktober);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Oktober = $("#txt_Rata_rata_SalesNoType_1_oktober").val();
    var substr_sales_type_1_oktober = substr_percent(RataRataSales_1_Oktober);
    RataRataSales_2_Oktober = $("#txt_Rata_rata_SalesNoType_2_oktober").val();
    var substr_sales_type_2_oktober = substr_percent(RataRataSales_2_Oktober);
    RataRataSales_3_Oktober = $("#txt_Rata_rata_SalesNoType_3_oktober").val();
    var substr_sales_type_3_oktober = substr_percent(RataRataSales_3_Oktober);
    RataRataSales_4_Oktober = $("#txt_Rata_rata_SalesNoType_4_oktober").val();
    var substr_sales_type_4_oktober = substr_percent(RataRataSales_4_Oktober);
      //end for Type Sales
    //end month Oktober
     //start month November
      //start for Type Service
    RataRataService_1_November = $("#txt_Rata_rata_ServiceNoType_1_november").val();
    var substr_service_type_1_november = substr_percent(RataRataService_1_November);
    RataRataService_2_November = $("#txt_Rata_rata_ServiceNoType_2_november").val();
    var substr_service_type_2_november = substr_percent(RataRataService_2_November);
    RataRataService_3_November = $("#txt_Rata_rata_ServiceNoType_3_november").val();
    var substr_service_type_3_november = substr_percent(RataRataService_3_November);
    RataRataService_4_November = $("#txt_Rata_rata_ServiceNoType_4_november").val();
    var substr_service_type_4_november = substr_percent(RataRataService_4_November);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_November = $("#txt_Rata_rata_SalesNoType_1_november").val();
    var substr_sales_type_1_november = substr_percent(RataRataSales_1_November);
    RataRataSales_2_November = $("#txt_Rata_rata_SalesNoType_2_november").val();
    var substr_sales_type_2_november = substr_percent(RataRataSales_2_November);
    RataRataSales_3_November = $("#txt_Rata_rata_SalesNoType_3_november").val();
    var substr_sales_type_3_november = substr_percent(RataRataSales_3_November);
    RataRataSales_4_November = $("#txt_Rata_rata_SalesNoType_4_november").val();
    var substr_sales_type_4_november = substr_percent(RataRataSales_4_November);
      //end for Type Sales
    //end month November
     //start month Desember
      //start for Type Service
    RataRataService_1_Desember = $("#txt_Rata_rata_ServiceNoType_1_desember").val();
    var substr_service_type_1_desember = substr_percent(RataRataService_1_Desember);
    RataRataService_2_Desember = $("#txt_Rata_rata_ServiceNoType_2_desember").val();
    var substr_service_type_2_desember = substr_percent(RataRataService_2_Desember);
    RataRataService_3_Desember = $("#txt_Rata_rata_ServiceNoType_3_desember").val();
    var substr_service_type_3_desember = substr_percent(RataRataService_3_Desember);
    RataRataService_4_Desember = $("#txt_Rata_rata_ServiceNoType_4_desember").val();
    var substr_service_type_4_desember = substr_percent(RataRataService_4_Desember);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Desember = $("#txt_Rata_rata_SalesNoType_1_desember").val();
    var substr_sales_type_1_desember = substr_percent(RataRataSales_1_Desember);
    RataRataSales_2_Desember = $("#txt_Rata_rata_SalesNoType_2_desember").val();
    var substr_sales_type_2_desember = substr_percent(RataRataSales_2_Desember);
    RataRataSales_3_Desember = $("#txt_Rata_rata_SalesNoType_3_desember").val();
    var substr_sales_type_3_desember = substr_percent(RataRataSales_3_Desember);
    RataRataSales_4_Desember = $("#txt_Rata_rata_SalesNoType_4_desember").val();
    var substr_sales_type_4_desember = substr_percent(RataRataSales_4_Desember);
      //end for Type Sales
    //end month Desember
    // alert(RataRataSales_3_Mei);//just for testing data with alert
    // AverageSalesType_1 average_sales_type_1
    // document.getElementById("demo").innerHTML = res; // for tag <p>
    $("#sales_type_1_januari").val(substr_sales_type_1_januari);

    $("#sales_type_1_februari").val(substr_sales_type_1_februari);

    $("#sales_type_1_maret").val(substr_sales_type_1_maret);

    $("#sales_type_1_april").val(substr_sales_type_1_april);

    $("#sales_type_1_mei").val(substr_sales_type_1_mei);

    $("#sales_type_1_juni").val(substr_sales_type_1_juni);

    $("#sales_type_1_juli").val(substr_sales_type_1_juli);

    $("#sales_type_1_agustus").val(substr_sales_type_1_agustus);

    $("#sales_type_1_september").val(substr_sales_type_1_september);

    $("#sales_type_1_oktober").val(substr_sales_type_1_oktober);

    $("#sales_type_1_november").val(substr_sales_type_1_november);

    $("#sales_type_1_desember").val(substr_sales_type_1_desember);

    //start tag p
    $('#p_sales_type_1_januari').html(RataRataSales_1_Januari);
    $('#p_sales_type_1_februari').html(RataRataSales_1_Februari);
    $('#p_sales_type_1_maret').html(RataRataSales_1_Maret);
    $('#p_sales_type_1_april').html(RataRataSales_1_April);
    $('#p_sales_type_1_mei').html(RataRataSales_1_Mei);
    $('#p_sales_type_1_juni').html(RataRataSales_1_Juni);
    $('#p_sales_type_1_juli').html(RataRataSales_1_Juli);
    $('#p_sales_type_1_agustus').html(RataRataSales_1_Agustus);
    $('#p_sales_type_1_september').html(RataRataSales_1_September);
    $('#p_sales_type_1_oktober').html(RataRataSales_1_Oktober);
    $('#p_sales_type_1_november').html(RataRataSales_1_November);
    $('#p_sales_type_1_desember').html(RataRataSales_1_Desember);
    // $('#p_sales_type_1_agustus').html(RataRataSales_1_Agustus);
    //end tag p
  }

});
//end bagian document ready function
//start function for page report preview all area per month
function generate_rpt_all_area_januari(){//not used //not implement by aji
  service_1 = $("#txt_Rata_rata_ServiceNoType_1_januari").val();
  service_2 = $("#txt_Rata_rata_ServiceNoType_2_januari").val();
  service_3 = $("#txt_Rata_rata_ServiceNoType_3_januari").val();
  service_4 = $("#txt_Rata_rata_ServiceNoType_4_januari").val();
  sales_1 = $("#txt_Rata_rata_SalesNoType_1_januari").val();
  sales_2 = $("#txt_Rata_rata_SalesNoType_2_januari").val();
  sales_3 = $("#txt_Rata_rata_SalesNoType_3_januari").val();
  sales_4 = $("#txt_Rata_rata_SalesNoType_4_januari").val();
  year = $("#txt_year_all_area_januari").val();
  month = $("#txt_month_all_area_januari").val();
  $.ajax({
        type: 'POST',
        url: '<?php echo base_url();?>C_cro/generate_save_rpt_allarea',
        data : {service_1: service_1, service_2: service_2, service_3: service_3, service_4: service_4, sales_1: sales_1, sales_2: sales_2, sales_3: sales_3, sales_4: sales_4, year: year, month: month},
        success: function(data) {
            alert("Btn tes generate all area januari");
            // $("#text_call_failed_survey").val(data);
        }
    });
}
//end function for page report preview all area per month
</script>