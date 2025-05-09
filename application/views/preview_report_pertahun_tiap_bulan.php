<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Customer Relation Officer - Super Sukses Motor</title>
  <link rel="stylesheet" href="<?php echo base_url(); ?>css_report/responsive_tab/style.css?w=<?php echo rand(100,10000); ?>">
  <!-- <link rel="stylesheet" href="./style.css"> -->
  <style>
    .tableFixHead thead th { position: sticky; top: 0; z-index: 1; }
  </style>

</head>
<body style="width: 150%; height: auto;">
<div class="tableFixHead">
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
      <div id="tab-content-1" class="tab-content" style="top: -99999px;">
        <!-- <p><?= @$baseURL ?></p> -->
        <?php
        // $data['JmlCabangIndex'] = $JmlCabangIndex;
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_januari',$data);
        ?>
      </div>
      <div id="tab-content-2" class="tab-content" style="top: -99999px;">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_februari',$data);
        ?>
      </div>
      <div id="tab-content-3" class="tab-content" style="top: -99999px;">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_maret',$data);
        ?>
      </div>
      <div id="tab-content-4" class="tab-content" style="top: -99999px;">
        <!-- <p><?= @$baseURL ?></p> -->
        <?php
        // $data['JmlCabangIndex'] = $JmlCabangIndex;
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        // $this->load->view('report_survey_area_pertahun_november',$data);//not used
        $this->load->view('preview_report_survey_area_pertahun_april',$data);
        ?>
      </div>
      <div id="tab-content-5" class="tab-content" style="top: -99999px;">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_mei',$data);
        ?>
      </div>
      <div id="tab-content-6" class="tab-content" style="top: -99999px;">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_juni',$data);
        ?>
      </div>
      <div id="tab-content-7" class="tab-content" style="top: -99999px;">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_juli',$data);
        ?>
      </div>
      <div id="tab-content-8" class="tab-content" style="top: -99999px;">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_agustus',$data);
        ?>
      </div>
      <div id="tab-content-9" class="tab-content" style="top: -99999px;">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_september',$data);
        ?>
      </div>
      <div id="tab-content-10" class="tab-content" style="top: -99999px;">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_oktober',$data);
        ?>
      </div>
      <div id="tab-content-11" class="tab-content" style="top: -99999px;">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_november',$data);
        ?>
      </div>
      <div id="tab-content-12" class="tab-content" style="top: -99999px;">
        <?php
        $data['DataCompanyAreaCabang'] = $DataCompanyAreaCabang;
        $data['get_year_filter'] = $yearGet;
        $this->load->view('preview_report_survey_area_pertahun_desember',$data);
        ?>
      </div>
      <div id="tab-content-13" class="tab-content" style="top: -99999px;">
      <h1 style="text-align: center;">RATA-RATA AREA</h1>
      <h2 style="text-align: center;">TAHUN <?= @$get_year_filter ?></h2>
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
        if(@$yearGet == @$year_now){
          if(@$month_now == 1){//jika bulan sekarang januari
            $before_month = @$set_month;//maka mulai dari bulan 12
          }elseif(@$month_now >= 2 && @$month_now <= 12 ){//jika mulai dari
            $before_month = @$month_now - 1;//maka bulan sekarang dikurang 1
          }else{
            $before_month = @$month_now;//maka bulan sekarang dikurang 1
          }
        }else{
          $before_month = @$set_month;//maka mulai dari bulan 12
        }
        // echo @$yearGet;
        // echo "<br>";
        // echo @$month_now;
        // echo "<br>";
        // echo @$before_month;
        // echo "<br>";
        ?>
        <input type="hidden" name="month_now" id="month_now" value="<?= @$month_now ?>" readonly="">
        <input type="hidden" name="before_month" id="before_month" value="<?= @$before_month ?>" readonly="">
        <table class="responsive-table" style="width: 100%;" >
        <!-- START BAGIAN SEMUA CABANG AREA JAKARTA -->
        <tr>
            <td rowspan="10">Rata-Rata Area Jakarta</td>
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
              <input type="hidden" name="sales_type_1_januari_jkt" id="sales_type_1_januari_jkt" readonly="">
              <p id="p_sales_type_1_januari_jkt" name="p_sales_type_1_januari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_februari_jkt" id="sales_type_1_februari_jkt" readonly="">
              <p id="p_sales_type_1_februari_jkt" name="p_sales_type_1_februari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_maret_jkt" id="sales_type_1_maret_jkt" readonly="">
              <p id="p_sales_type_1_maret_jkt" name="p_sales_type_1_maret_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_april_jkt" id="sales_type_1_april_jkt" readonly="">
              <p id="p_sales_type_1_april_jkt" name="p_sales_type_1_april_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_mei_jkt" id="sales_type_1_mei_jkt" readonly="">
              <p id="p_sales_type_1_mei_jkt" name="p_sales_type_1_mei_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_juni_jkt" id="sales_type_1_juni_jkt" readonly="">
              <p id="p_sales_type_1_juni_jkt" name="p_sales_type_1_juni_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_juli_jkt" id="sales_type_1_juli_jkt" readonly="">
              <p id="p_sales_type_1_juli_jkt" name="p_sales_type_1_juli_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_agustus_jkt" id="sales_type_1_agustus_jkt" readonly="">
              <p id="p_sales_type_1_agustus_jkt" name="p_sales_type_1_agustus_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_september_jkt" id="sales_type_1_september_jkt" readonly="">
              <p id="p_sales_type_1_september_jkt" name="p_sales_type_1_september_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_oktober_jkt" id="sales_type_1_oktober_jkt" readonly="">
              <p id="p_sales_type_1_oktober_jkt" name="p_sales_type_1_oktober_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_november_jkt" id="sales_type_1_november_jkt" readonly="">
              <p id="p_sales_type_1_november_jkt" name="p_sales_type_1_november_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_desember_jkt" id="sales_type_1_desember_jkt" readonly="">
              <p id="p_sales_type_1_desember_jkt" name="p_sales_type_1_desember_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_1_all_jkt" id="average_sales_type_1_all_jkt" readonly="">
              <p id="p_sales_type_1_all_jkt" name="p_sales_type_1_all_jkt"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Kondisi Motor</td>
            <td>
              <input type="hidden" name="sales_type_2_januari_jkt" id="sales_type_2_januari_jkt" readonly="">
              <p id="p_sales_type_2_januari_jkt" name="p_sales_type_2_januari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_februari_jkt" id="sales_type_2_februari_jkt" readonly="">
              <p id="p_sales_type_2_februari_jkt" name="p_sales_type_2_februari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_maret_jkt" id="sales_type_2_maret_jkt" readonly="">
              <p id="p_sales_type_2_maret_jkt" name="p_sales_type_2_maret_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_april_jkt" id="sales_type_2_april_jkt" readonly="">
              <p id="p_sales_type_2_april_jkt" name="p_sales_type_2_april_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_mei_jkt" id="sales_type_2_mei_jkt" readonly="">
              <p id="p_sales_type_2_mei_jkt" name="p_sales_type_2_mei_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_juni_jkt" id="sales_type_2_juni_jkt" readonly="">
              <p id="p_sales_type_2_juni_jkt" name="p_sales_type_2_juni_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_juli_jkt" id="sales_type_2_juli_jkt" readonly="">
              <p id="p_sales_type_2_juli_jkt" name="p_sales_type_2_juli_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_agustus_jkt" id="sales_type_2_agustus_jkt" readonly="">
              <p id="p_sales_type_2_agustus_jkt" name="p_sales_type_2_agustus_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_september_jkt" id="sales_type_2_september_jkt" readonly="">
              <p id="p_sales_type_2_september_jkt" name="p_sales_type_2_september_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_oktober_jkt" id="sales_type_2_oktober_jkt" readonly="">
              <p id="p_sales_type_2_oktober_jkt" name="p_sales_type_2_oktober_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_november_jkt" id="sales_type_2_november_jkt" readonly="">
              <p id="p_sales_type_2_november_jkt" name="p_sales_type_2_november_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_desember_jkt" id="sales_type_2_desember_jkt" readonly="">
              <p id="p_sales_type_2_desember_jkt" name="p_sales_type_2_desember_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_2_all_jkt" id="average_sales_type_2_all_jkt" readonly="">
              <p id="p_sales_type_2_all_jkt" name="p_sales_type_2_all_jkt"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom</td>
            <td>
              <input type="hidden" name="sales_type_3_januari_jkt" id="sales_type_3_januari_jkt" readonly="">
              <p id="p_sales_type_3_januari_jkt" name="p_sales_type_3_januari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_februari_jkt" id="sales_type_3_februari_jkt" readonly="">
              <p id="p_sales_type_3_februari_jkt" name="p_sales_type_3_februari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_maret_jkt" id="sales_type_3_maret_jkt" readonly="">
              <p id="p_sales_type_3_maret_jkt" name="p_sales_type_3_maret_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_april_jkt" id="sales_type_3_april_jkt" readonly="">
              <p id="p_sales_type_3_april_jkt" name="p_sales_type_3_april_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_mei_jkt" id="sales_type_3_mei_jkt" readonly="">
              <p id="p_sales_type_3_mei_jkt" name="p_sales_type_3_mei_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_juni_jkt" id="sales_type_3_juni_jkt" readonly="">
              <p id="p_sales_type_3_juni_jkt" name="p_sales_type_3_juni_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_juli_jkt" id="sales_type_3_juli_jkt" readonly="">
              <p id="p_sales_type_3_juli_jkt" name="p_sales_type_3_juli_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_agustus_jkt" id="sales_type_3_agustus_jkt" readonly="">
              <p id="p_sales_type_3_agustus_jkt" name="p_sales_type_3_agustus_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_september_jkt" id="sales_type_3_september_jkt" readonly="">
              <p id="p_sales_type_3_september_jkt" name="p_sales_type_3_september_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_oktober_jkt" id="sales_type_3_oktober_jkt" readonly="">
              <p id="p_sales_type_3_oktober_jkt" name="p_sales_type_3_oktober_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_november_jkt" id="sales_type_3_november_jkt" readonly="">
              <p id="p_sales_type_3_november_jkt" name="p_sales_type_3_november_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_desember_jkt" id="sales_type_3_desember_jkt" readonly="">
              <p id="p_sales_type_3_desember_jkt" name="p_sales_type_3_desember_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_3_all_jkt" id="average_sales_type_3_all_jkt" readonly="">
              <p id="p_sales_type_3_all_jkt" name="p_sales_type_3_all_jkt"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>
              <input type="hidden" name="sales_type_4_januari_jkt" id="sales_type_4_januari_jkt" readonly="">
              <p id="p_sales_type_4_januari_jkt" name="p_sales_type_4_januari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_februari_jkt" id="sales_type_4_februari_jkt" readonly="">
              <p id="p_sales_type_4_februari_jkt" name="p_sales_type_4_februari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_maret_jkt" id="sales_type_4_maret_jkt" readonly="">
              <p id="p_sales_type_4_maret_jkt" name="p_sales_type_4_maret_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_april_jkt" id="sales_type_4_april_jkt" readonly="">
              <p id="p_sales_type_4_april_jkt" name="p_sales_type_4_april_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_mei_jkt" id="sales_type_4_mei_jkt" readonly="">
              <p id="p_sales_type_4_mei_jkt" name="p_sales_type_4_mei_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_juni_jkt" id="sales_type_4_juni_jkt" readonly="">
              <p id="p_sales_type_4_juni_jkt" name="p_sales_type_4_juni_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_juli_jkt" id="sales_type_4_juli_jkt" readonly="">
              <p id="p_sales_type_4_juli_jkt" name="p_sales_type_4_juli_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_agustus_jkt" id="sales_type_4_agustus_jkt" readonly="">
              <p id="p_sales_type_4_agustus_jkt" name="p_sales_type_4_agustus_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_september_jkt" id="sales_type_4_september_jkt" readonly="">
              <p id="p_sales_type_4_september_jkt" name="p_sales_type_4_september_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_oktober_jkt" id="sales_type_4_oktober_jkt" readonly="">
              <p id="p_sales_type_4_oktober_jkt" name="p_sales_type_4_oktober_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_november_jkt" id="sales_type_4_november_jkt" readonly="">
              <p id="p_sales_type_4_november_jkt" name="p_sales_type_4_november_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_desember_jkt" id="sales_type_4_desember_jkt" readonly="">
              <p id="p_sales_type_4_desember_jkt" name="p_sales_type_4_desember_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_4_all_jkt" id="average_sales_type_4_all_jkt" readonly="">
              <p id="p_sales_type_4_all_jkt" name="p_sales_type_4_all_jkt"></p>
            </td>
          </tr>
          <tr>
            <!-- <td rowspan="10">Rata-Rata Area Jakarta</td> -->
            <td>Service</td>
            <td>Survey Service</td>
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
            <td>SERVICE COUNTER</td>
            <td>
              <input type="hidden" name="service_type_1_januari_jkt" id="service_type_1_januari_jkt" readonly="">
              <p id="p_service_type_1_januari_jkt" name="p_service_type_1_januari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_februari_jkt" id="service_type_1_februari_jkt" readonly="">
              <p id="p_service_type_1_februari_jkt" name="p_service_type_1_februari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_maret_jkt" id="service_type_1_maret_jkt" readonly="">
              <p id="p_service_type_1_maret_jkt" name="p_service_type_1_maret_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_april_jkt" id="service_type_1_april_jkt" readonly="">
              <p id="p_service_type_1_april_jkt" name="p_service_type_1_april_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_mei_jkt" id="service_type_1_mei_jkt" readonly="">
              <p id="p_service_type_1_mei_jkt" name="p_service_type_1_mei_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_juni_jkt" id="service_type_1_juni_jkt" readonly="">
              <p id="p_service_type_1_juni_jkt" name="p_service_type_1_juni_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_juli_jkt" id="service_type_1_juli_jkt" readonly="">
              <p id="p_service_type_1_juli_jkt" name="p_service_type_1_juli_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_agustus_jkt" id="service_type_1_agustus_jkt" readonly="">
              <p id="p_service_type_1_agustus_jkt" name="p_service_type_1_agustus_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_september_jkt" id="service_type_1_september_jkt" readonly="">
              <p id="p_service_type_1_september_jkt" name="p_service_type_1_september_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_oktober_jkt" id="service_type_1_oktober_jkt" readonly="">
              <p id="p_service_type_1_oktober_jkt" name="p_service_type_1_oktober_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_november_jkt" id="service_type_1_november_jkt" readonly="">
              <p id="p_service_type_1_november_jkt" name="p_service_type_1_november_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_desember_jkt" id="service_type_1_desember_jkt" readonly="">
              <p id="p_service_type_1_desember_jkt" name="p_service_type_1_desember_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_1_all_jkt" id="average_service_type_1_all_jkt" readonly="">
              <p id="p_service_type_1_all_jkt" name="p_service_type_1_all_jkt"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Hasil Service</td>
            <td>
              <input type="hidden" name="service_type_2_januari_jkt" id="service_type_2_januari_jkt" readonly="">
              <p id="p_service_type_2_januari_jkt" name="p_service_type_2_januari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_februari_jkt" id="service_type_2_februari_jkt" readonly="">
              <p id="p_service_type_2_februari_jkt" name="p_service_type_2_februari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_maret_jkt" id="service_type_2_maret_jkt" readonly="">
              <p id="p_service_type_2_maret_jkt" name="p_service_type_2_maret_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_april_jkt" id="service_type_2_april_jkt" readonly="">
              <p id="p_service_type_2_april_jkt" name="p_service_type_2_april_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_mei_jkt" id="service_type_2_mei_jkt" readonly="">
              <p id="p_service_type_2_mei_jkt" name="p_service_type_2_mei_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_juni_jkt" id="service_type_2_juni_jkt" readonly="">
              <p id="p_service_type_2_juni_jkt" name="p_service_type_2_juni_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_juli_jkt" id="service_type_2_juli_jkt" readonly="">
              <p id="p_service_type_2_juli_jkt" name="p_service_type_2_juli_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_agustus_jkt" id="service_type_2_agustus_jkt" readonly="">
              <p id="p_service_type_2_agustus_jkt" name="p_service_type_2_agustus_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_september_jkt" id="service_type_2_september_jkt" readonly="">
              <p id="p_service_type_2_september_jkt" name="p_service_type_2_september_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_oktober_jkt" id="service_type_2_oktober_jkt" readonly="">
              <p id="p_service_type_2_oktober_jkt" name="p_service_type_2_oktober_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_november_jkt" id="service_type_2_november_jkt" readonly="">
              <p id="p_service_type_2_november_jkt" name="p_service_type_2_november_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_desember_jkt" id="service_type_2_desember_jkt" readonly="">
              <p id="p_service_type_2_desember_jkt" name="p_service_type_2_desember_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_2_all_jkt" id="average_service_type_2_all_jkt" readonly="">
              <p id="p_service_type_2_all_jkt" name="p_service_type_2_all_jkt"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom dan Bengkel</td>
            <td>
              <input type="hidden" name="service_type_3_januari_jkt" id="service_type_3_januari_jkt" readonly="">
              <p id="p_service_type_3_januari_jkt" name="p_service_type_3_januari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_februari_jkt" id="service_type_3_februari_jkt" readonly="">
              <p id="p_service_type_3_februari_jkt" name="p_service_type_3_februari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_maret_jkt" id="service_type_3_maret_jkt" readonly="">
              <p id="p_service_type_3_maret_jkt" name="p_service_type_3_maret_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_april_jkt" id="service_type_3_april_jkt" readonly="">
              <p id="p_service_type_3_april_jkt" name="p_service_type_3_april_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_mei_jkt" id="service_type_3_mei_jkt" readonly="">
              <p id="p_service_type_3_mei_jkt" name="p_service_type_3_mei_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_juni_jkt" id="service_type_3_juni_jkt" readonly="">
              <p id="p_service_type_3_juni_jkt" name="p_service_type_3_juni_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_juli_jkt" id="service_type_3_juli_jkt" readonly="">
              <p id="p_service_type_3_juli_jkt" name="p_service_type_3_juli_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_agustus_jkt" id="service_type_3_agustus_jkt" readonly="">
              <p id="p_service_type_3_agustus_jkt" name="p_service_type_3_agustus_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_september_jkt" id="service_type_3_september_jkt" readonly="">
              <p id="p_service_type_3_september_jkt" name="p_service_type_3_september_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_oktober_jkt" id="service_type_3_oktober_jkt" readonly="">
              <p id="p_service_type_3_oktober_jkt" name="p_service_type_3_oktober_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_november_jkt" id="service_type_3_november_jkt" readonly="">
              <p id="p_service_type_3_november_jkt" name="p_service_type_3_november_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_desember_jkt" id="service_type_3_desember_jkt" readonly="">
              <p id="p_service_type_3_desember_jkt" name="p_service_type_3_desember_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_3_all_jkt" id="average_service_type_3_all_jkt" readonly="">
              <p id="p_service_type_3_all_jkt" name="p_service_type_3_all_jkt"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>
              <input type="hidden" name="service_type_4_januari_jkt" id="service_type_4_januari_jkt" readonly="">
              <p id="p_service_type_4_januari_jkt" name="p_service_type_4_januari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_februari_jkt" id="service_type_4_februari_jkt" readonly="">
              <p id="p_service_type_4_februari_jkt" name="p_service_type_4_februari_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_maret_jkt" id="service_type_4_maret_jkt" readonly="">
              <p id="p_service_type_4_maret_jkt" name="p_service_type_4_maret_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_april_jkt" id="service_type_4_april_jkt" readonly="">
              <p id="p_service_type_4_april_jkt" name="p_service_type_4_april_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_mei_jkt" id="service_type_4_mei_jkt" readonly="">
              <p id="p_service_type_4_mei_jkt" name="p_service_type_4_mei_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_juni_jkt" id="service_type_4_juni_jkt" readonly="">
              <p id="p_service_type_4_juni_jkt" name="p_service_type_4_juni_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_juli_jkt" id="service_type_4_juli_jkt" readonly="">
              <p id="p_service_type_4_juli_jkt" name="p_service_type_4_juli_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_agustus_jkt" id="service_type_4_agustus_jkt" readonly="">
              <p id="p_service_type_4_agustus_jkt" name="p_service_type_4_agustus_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_september_jkt" id="service_type_4_september_jkt" readonly="">
              <p id="p_service_type_4_september_jkt" name="p_service_type_4_september_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_oktober_jkt" id="service_type_4_oktober_jkt" readonly="">
              <p id="p_service_type_4_oktober_jkt" name="p_service_type_4_oktober_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_november_jkt" id="service_type_4_november_jkt" readonly="">
              <p id="p_service_type_4_november_jkt" name="p_service_type_4_november_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_desember_jkt" id="service_type_4_desember_jkt" readonly="">
              <p id="p_service_type_4_desember_jkt" name="p_service_type_4_desember_jkt"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_4_all_jkt" id="average_service_type_4_all_jkt" readonly="">
              <p id="p_service_type_4_all_jkt" name="p_service_type_4_all_jkt"></p>
            </td>
          </tr>
          <!-- END BAGIAN SEMUA CABANG AREA JAKARTA -->
          <!-- START BAGIAN SEMUA CABANG AREA KALTIM -->
          <tr>
            <td rowspan="10">Rata-Rata Area Kaltim</td>
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
              <input type="hidden" name="sales_type_1_januari_kaltim" id="sales_type_1_januari_kaltim" readonly="">
              <p id="p_sales_type_1_januari_kaltim" name="p_sales_type_1_januari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_februari_kaltim" id="sales_type_1_februari_kaltim" readonly="">
              <p id="p_sales_type_1_februari_kaltim" name="p_sales_type_1_februari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_maret_kaltim" id="sales_type_1_maret_kaltim" readonly="">
              <p id="p_sales_type_1_maret_kaltim" name="p_sales_type_1_maret_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_april_kaltim" id="sales_type_1_april_kaltim" readonly="">
              <p id="p_sales_type_1_april_kaltim" name="p_sales_type_1_april_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_mei_kaltim" id="sales_type_1_mei_kaltim" readonly="">
              <p id="p_sales_type_1_mei_kaltim" name="p_sales_type_1_mei_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_juni_kaltim" id="sales_type_1_juni_kaltim" readonly="">
              <p id="p_sales_type_1_juni_kaltim" name="p_sales_type_1_juni_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_juli_kaltim" id="sales_type_1_juli_kaltim" readonly="">
              <p id="p_sales_type_1_juli_kaltim" name="p_sales_type_1_juli_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_agustus_kaltim" id="sales_type_1_agustus_kaltim" readonly="">
              <p id="p_sales_type_1_agustus_kaltim" name="p_sales_type_1_agustus_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_september_kaltim" id="sales_type_1_september_kaltim" readonly="">
              <p id="p_sales_type_1_september_kaltim" name="p_sales_type_1_september_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_oktober_kaltim" id="sales_type_1_oktober_kaltim" readonly="">
              <p id="p_sales_type_1_oktober_kaltim" name="p_sales_type_1_oktober_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_november_kaltim" id="sales_type_1_november_kaltim" readonly="">
              <p id="p_sales_type_1_november_kaltim" name="p_sales_type_1_november_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_desember_kaltim" id="sales_type_1_desember_kaltim" readonly="">
              <p id="p_sales_type_1_desember_kaltim" name="p_sales_type_1_desember_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_1_all_kaltim" id="average_sales_type_1_all_kaltim" readonly="">
              <p id="p_sales_type_1_all_kaltim" name="p_sales_type_1_all_kaltim"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Kondisi Motor</td>
            <td>
              <input type="hidden" name="sales_type_2_januari_kaltim" id="sales_type_2_januari_kaltim" readonly="">
              <p id="p_sales_type_2_januari_kaltim" name="p_sales_type_2_januari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_februari_kaltim" id="sales_type_2_februari_kaltim" readonly="">
              <p id="p_sales_type_2_februari_kaltim" name="p_sales_type_2_februari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_maret_kaltim" id="sales_type_2_maret_kaltim" readonly="">
              <p id="p_sales_type_2_maret_kaltim" name="p_sales_type_2_maret_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_april_kaltim" id="sales_type_2_april_kaltim" readonly="">
              <p id="p_sales_type_2_april_kaltim" name="p_sales_type_2_april_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_mei_kaltim" id="sales_type_2_mei_kaltim" readonly="">
              <p id="p_sales_type_2_mei_kaltim" name="p_sales_type_2_mei_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_juni_kaltim" id="sales_type_2_juni_kaltim" readonly="">
              <p id="p_sales_type_2_juni_kaltim" name="p_sales_type_2_juni_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_juli_kaltim" id="sales_type_2_juli_kaltim" readonly="">
              <p id="p_sales_type_2_juli_kaltim" name="p_sales_type_2_juli_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_agustus_kaltim" id="sales_type_2_agustus_kaltim" readonly="">
              <p id="p_sales_type_2_agustus_kaltim" name="p_sales_type_2_agustus_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_september_kaltim" id="sales_type_2_september_kaltim" readonly="">
              <p id="p_sales_type_2_september_kaltim" name="p_sales_type_2_september_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_oktober_kaltim" id="sales_type_2_oktober_kaltim" readonly="">
              <p id="p_sales_type_2_oktober_kaltim" name="p_sales_type_2_oktober_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_november_kaltim" id="sales_type_2_november_kaltim" readonly="">
              <p id="p_sales_type_2_november_kaltim" name="p_sales_type_2_november_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_desember_kaltim" id="sales_type_2_desember_kaltim" readonly="">
              <p id="p_sales_type_2_desember_kaltim" name="p_sales_type_2_desember_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_2_all_kaltim" id="average_sales_type_2_all_kaltim" readonly="">
              <p id="p_sales_type_2_all_kaltim" name="p_sales_type_2_all_kaltim"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom</td>
            <td>
              <input type="hidden" name="sales_type_3_januari_kaltim" id="sales_type_3_januari_kaltim" readonly="">
              <p id="p_sales_type_3_januari_kaltim" name="p_sales_type_3_januari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_februari_kaltim" id="sales_type_3_februari_kaltim" readonly="">
              <p id="p_sales_type_3_februari_kaltim" name="p_sales_type_3_februari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_maret_kaltim" id="sales_type_3_maret_kaltim" readonly="">
              <p id="p_sales_type_3_maret_kaltim" name="p_sales_type_3_maret_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_april_kaltim" id="sales_type_3_april_kaltim" readonly="">
              <p id="p_sales_type_3_april_kaltim" name="p_sales_type_3_april_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_mei_kaltim" id="sales_type_3_mei_kaltim" readonly="">
              <p id="p_sales_type_3_mei_kaltim" name="p_sales_type_3_mei_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_juni_kaltim" id="sales_type_3_juni_kaltim" readonly="">
              <p id="p_sales_type_3_juni_kaltim" name="p_sales_type_3_juni_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_juli_kaltim" id="sales_type_3_juli_kaltim" readonly="">
              <p id="p_sales_type_3_juli_kaltim" name="p_sales_type_3_juli_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_agustus_kaltim" id="sales_type_3_agustus_kaltim" readonly="">
              <p id="p_sales_type_3_agustus_kaltim" name="p_sales_type_3_agustus_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_september_kaltim" id="sales_type_3_september_kaltim" readonly="">
              <p id="p_sales_type_3_september_kaltim" name="p_sales_type_3_september_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_oktober_kaltim" id="sales_type_3_oktober_kaltim" readonly="">
              <p id="p_sales_type_3_oktober_kaltim" name="p_sales_type_3_oktober_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_november_kaltim" id="sales_type_3_november_kaltim" readonly="">
              <p id="p_sales_type_3_november_kaltim" name="p_sales_type_3_november_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_desember_kaltim" id="sales_type_3_desember_kaltim" readonly="">
              <p id="p_sales_type_3_desember_kaltim" name="p_sales_type_3_desember_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_3_all_kaltim" id="average_sales_type_3_all_kaltim" readonly="">
              <p id="p_sales_type_3_all_kaltim" name="p_sales_type_3_all_kaltim"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>
              <input type="hidden" name="sales_type_4_januari_kaltim" id="sales_type_4_januari_kaltim" readonly="">
              <p id="p_sales_type_4_januari_kaltim" name="p_sales_type_4_januari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_februari_kaltim" id="sales_type_4_februari_kaltim" readonly="">
              <p id="p_sales_type_4_februari_kaltim" name="p_sales_type_4_februari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_maret_kaltim" id="sales_type_4_maret_kaltim" readonly="">
              <p id="p_sales_type_4_maret_kaltim" name="p_sales_type_4_maret_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_april_kaltim" id="sales_type_4_april_kaltim" readonly="">
              <p id="p_sales_type_4_april_kaltim" name="p_sales_type_4_april_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_mei_kaltim" id="sales_type_4_mei_kaltim" readonly="">
              <p id="p_sales_type_4_mei_kaltim" name="p_sales_type_4_mei_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_juni_kaltim" id="sales_type_4_juni_kaltim" readonly="">
              <p id="p_sales_type_4_juni_kaltim" name="p_sales_type_4_juni_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_juli_kaltim" id="sales_type_4_juli_kaltim" readonly="">
              <p id="p_sales_type_4_juli_kaltim" name="p_sales_type_4_juli_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_agustus_kaltim" id="sales_type_4_agustus_kaltim" readonly="">
              <p id="p_sales_type_4_agustus_kaltim" name="p_sales_type_4_agustus_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_september_kaltim" id="sales_type_4_september_kaltim" readonly="">
              <p id="p_sales_type_4_september_kaltim" name="p_sales_type_4_september_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_oktober_kaltim" id="sales_type_4_oktober_kaltim" readonly="">
              <p id="p_sales_type_4_oktober_kaltim" name="p_sales_type_4_oktober_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_november_kaltim" id="sales_type_4_november_kaltim" readonly="">
              <p id="p_sales_type_4_november_kaltim" name="p_sales_type_4_november_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_desember_kaltim" id="sales_type_4_desember_kaltim" readonly="">
              <p id="p_sales_type_4_desember_kaltim" name="p_sales_type_4_desember_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_4_all_kaltim" id="average_sales_type_4_all_kaltim" readonly="">
              <p id="p_sales_type_4_all_kaltim" name="p_sales_type_4_all_kaltim"></p>
            </td>
          </tr>
          <tr>
            <!-- <td rowspan="10">Rata-Rata Area Kaltim</td> -->
            <td>Service</td>
            <td>Survey Service</td>
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
            <td>SERVICE COUNTER</td>
            <td>
              <input type="hidden" name="service_type_1_januari_kaltim" id="service_type_1_januari_kaltim" readonly="">
              <p id="p_service_type_1_januari_kaltim" name="p_service_type_1_januari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_februari_kaltim" id="service_type_1_februari_kaltim" readonly="">
              <p id="p_service_type_1_februari_kaltim" name="p_service_type_1_februari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_maret_kaltim" id="service_type_1_maret_kaltim" readonly="">
              <p id="p_service_type_1_maret_kaltim" name="p_service_type_1_maret_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_april_kaltim" id="service_type_1_april_kaltim" readonly="">
              <p id="p_service_type_1_april_kaltim" name="p_service_type_1_april_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_mei_kaltim" id="service_type_1_mei_kaltim" readonly="">
              <p id="p_service_type_1_mei_kaltim" name="p_service_type_1_mei_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_juni_kaltim" id="service_type_1_juni_kaltim" readonly="">
              <p id="p_service_type_1_juni_kaltim" name="p_service_type_1_juni_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_juli_kaltim" id="service_type_1_juli_kaltim" readonly="">
              <p id="p_service_type_1_juli_kaltim" name="p_service_type_1_juli_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_agustus_kaltim" id="service_type_1_agustus_kaltim" readonly="">
              <p id="p_service_type_1_agustus_kaltim" name="p_service_type_1_agustus_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_september_kaltim" id="service_type_1_september_kaltim" readonly="">
              <p id="p_service_type_1_september_kaltim" name="p_service_type_1_september_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_oktober_kaltim" id="service_type_1_oktober_kaltim" readonly="">
              <p id="p_service_type_1_oktober_kaltim" name="p_service_type_1_oktober_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_november_kaltim" id="service_type_1_november_kaltim" readonly="">
              <p id="p_service_type_1_november_kaltim" name="p_service_type_1_november_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_desember_kaltim" id="service_type_1_desember_kaltim" readonly="">
              <p id="p_service_type_1_desember_kaltim" name="p_service_type_1_desember_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_1_all_kaltim" id="average_service_type_1_all_kaltim" readonly="">
              <p id="p_service_type_1_all_kaltim" name="p_service_type_1_all_kaltim"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Hasil Service</td>
            <td>
              <input type="hidden" name="service_type_2_januari_kaltim" id="service_type_2_januari_kaltim" readonly="">
              <p id="p_service_type_2_januari_kaltim" name="p_service_type_2_januari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_februari_kaltim" id="service_type_2_februari_kaltim" readonly="">
              <p id="p_service_type_2_februari_kaltim" name="p_service_type_2_februari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_maret_kaltim" id="service_type_2_maret_kaltim" readonly="">
              <p id="p_service_type_2_maret_kaltim" name="p_service_type_2_maret_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_april_kaltim" id="service_type_2_april_kaltim" readonly="">
              <p id="p_service_type_2_april_kaltim" name="p_service_type_2_april_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_mei_kaltim" id="service_type_2_mei_kaltim" readonly="">
              <p id="p_service_type_2_mei_kaltim" name="p_service_type_2_mei_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_juni_kaltim" id="service_type_2_juni_kaltim" readonly="">
              <p id="p_service_type_2_juni_kaltim" name="p_service_type_2_juni_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_juli_kaltim" id="service_type_2_juli_kaltim" readonly="">
              <p id="p_service_type_2_juli_kaltim" name="p_service_type_2_juli_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_agustus_kaltim" id="service_type_2_agustus_kaltim" readonly="">
              <p id="p_service_type_2_agustus_kaltim" name="p_service_type_2_agustus_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_september_kaltim" id="service_type_2_september_kaltim" readonly="">
              <p id="p_service_type_2_september_kaltim" name="p_service_type_2_september_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_oktober_kaltim" id="service_type_2_oktober_kaltim" readonly="">
              <p id="p_service_type_2_oktober_kaltim" name="p_service_type_2_oktober_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_november_kaltim" id="service_type_2_november_kaltim" readonly="">
              <p id="p_service_type_2_november_kaltim" name="p_service_type_2_november_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_desember_kaltim" id="service_type_2_desember_kaltim" readonly="">
              <p id="p_service_type_2_desember_kaltim" name="p_service_type_2_desember_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_2_all_kaltim" id="average_service_type_2_all_kaltim" readonly="">
              <p id="p_service_type_2_all_kaltim" name="p_service_type_2_all_kaltim"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom dan Bengkel</td>
            <td>
              <input type="hidden" name="service_type_3_januari_kaltim" id="service_type_3_januari_kaltim" readonly="">
              <p id="p_service_type_3_januari_kaltim" name="p_service_type_3_januari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_februari_kaltim" id="service_type_3_februari_kaltim" readonly="">
              <p id="p_service_type_3_februari_kaltim" name="p_service_type_3_februari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_maret_kaltim" id="service_type_3_maret_kaltim" readonly="">
              <p id="p_service_type_3_maret_kaltim" name="p_service_type_3_maret_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_april_kaltim" id="service_type_3_april_kaltim" readonly="">
              <p id="p_service_type_3_april_kaltim" name="p_service_type_3_april_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_mei_kaltim" id="service_type_3_mei_kaltim" readonly="">
              <p id="p_service_type_3_mei_kaltim" name="p_service_type_3_mei_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_juni_kaltim" id="service_type_3_juni_kaltim" readonly="">
              <p id="p_service_type_3_juni_kaltim" name="p_service_type_3_juni_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_juli_kaltim" id="service_type_3_juli_kaltim" readonly="">
              <p id="p_service_type_3_juli_kaltim" name="p_service_type_3_juli_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_agustus_kaltim" id="service_type_3_agustus_kaltim" readonly="">
              <p id="p_service_type_3_agustus_kaltim" name="p_service_type_3_agustus_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_september_kaltim" id="service_type_3_september_kaltim" readonly="">
              <p id="p_service_type_3_september_kaltim" name="p_service_type_3_september_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_oktober_kaltim" id="service_type_3_oktober_kaltim" readonly="">
              <p id="p_service_type_3_oktober_kaltim" name="p_service_type_3_oktober_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_november_kaltim" id="service_type_3_november_kaltim" readonly="">
              <p id="p_service_type_3_november_kaltim" name="p_service_type_3_november_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_desember_kaltim" id="service_type_3_desember_kaltim" readonly="">
              <p id="p_service_type_3_desember_kaltim" name="p_service_type_3_desember_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_3_all_kaltim" id="average_service_type_3_all_kaltim" readonly="">
              <p id="p_service_type_3_all_kaltim" name="p_service_type_3_all_kaltim"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>
              <input type="hidden" name="service_type_4_januari_kaltim" id="service_type_4_januari_kaltim" readonly="">
              <p id="p_service_type_4_januari_kaltim" name="p_service_type_4_januari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_februari_kaltim" id="service_type_4_februari_kaltim" readonly="">
              <p id="p_service_type_4_februari_kaltim" name="p_service_type_4_februari_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_maret_kaltim" id="service_type_4_maret_kaltim" readonly="">
              <p id="p_service_type_4_maret_kaltim" name="p_service_type_4_maret_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_april_kaltim" id="service_type_4_april_kaltim" readonly="">
              <p id="p_service_type_4_april_kaltim" name="p_service_type_4_april_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_mei_kaltim" id="service_type_4_mei_kaltim" readonly="">
              <p id="p_service_type_4_mei_kaltim" name="p_service_type_4_mei_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_juni_kaltim" id="service_type_4_juni_kaltim" readonly="">
              <p id="p_service_type_4_juni_kaltim" name="p_service_type_4_juni_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_juli_kaltim" id="service_type_4_juli_kaltim" readonly="">
              <p id="p_service_type_4_juli_kaltim" name="p_service_type_4_juli_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_agustus_kaltim" id="service_type_4_agustus_kaltim" readonly="">
              <p id="p_service_type_4_agustus_kaltim" name="p_service_type_4_agustus_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_september_kaltim" id="service_type_4_september_kaltim" readonly="">
              <p id="p_service_type_4_september_kaltim" name="p_service_type_4_september_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_oktober_kaltim" id="service_type_4_oktober_kaltim" readonly="">
              <p id="p_service_type_4_oktober_kaltim" name="p_service_type_4_oktober_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_november_kaltim" id="service_type_4_november_kaltim" readonly="">
              <p id="p_service_type_4_november_kaltim" name="p_service_type_4_november_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_desember_kaltim" id="service_type_4_desember_kaltim" readonly="">
              <p id="p_service_type_4_desember_kaltim" name="p_service_type_4_desember_kaltim"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_4_all_kaltim" id="average_service_type_4_all_kaltim" readonly="">
              <p id="p_service_type_4_all_kaltim" name="p_service_type_4_all_kaltim"></p>
            </td>
          </tr>
          <!-- END BAGIAN SEMUA CABANG AREA KALTIM -->
          <!-- START BAGIAN SEMUA CABANG AREA KALBAR -->
          <tr>
            <td rowspan="10">Rata-Rata Area Kalbar</td>
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
              <input type="hidden" name="sales_type_1_januari_kalbar" id="sales_type_1_januari_kalbar" readonly="">
              <p id="p_sales_type_1_januari_kalbar" name="p_sales_type_1_januari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_februari_kalbar" id="sales_type_1_februari_kalbar" readonly="">
              <p id="p_sales_type_1_februari_kalbar" name="p_sales_type_1_februari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_maret_kalbar" id="sales_type_1_maret_kalbar" readonly="">
              <p id="p_sales_type_1_maret_kalbar" name="p_sales_type_1_maret_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_april_kalbar" id="sales_type_1_april_kalbar" readonly="">
              <p id="p_sales_type_1_april_kalbar" name="p_sales_type_1_april_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_mei_kalbar" id="sales_type_1_mei_kalbar" readonly="">
              <p id="p_sales_type_1_mei_kalbar" name="p_sales_type_1_mei_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_juni_kalbar" id="sales_type_1_juni_kalbar" readonly="">
              <p id="p_sales_type_1_juni_kalbar" name="p_sales_type_1_juni_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_juli_kalbar" id="sales_type_1_juli_kalbar" readonly="">
              <p id="p_sales_type_1_juli_kalbar" name="p_sales_type_1_juli_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_agustus_kalbar" id="sales_type_1_agustus_kalbar" readonly="">
              <p id="p_sales_type_1_agustus_kalbar" name="p_sales_type_1_agustus_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_september_kalbar" id="sales_type_1_september_kalbar" readonly="">
              <p id="p_sales_type_1_september_kalbar" name="p_sales_type_1_september_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_oktober_kalbar" id="sales_type_1_oktober_kalbar" readonly="">
              <p id="p_sales_type_1_oktober_kalbar" name="p_sales_type_1_oktober_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_november_kalbar" id="sales_type_1_november_kalbar" readonly="">
              <p id="p_sales_type_1_november_kalbar" name="p_sales_type_1_november_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_desember_kalbar" id="sales_type_1_desember_kalbar" readonly="">
              <p id="p_sales_type_1_desember_kalbar" name="p_sales_type_1_desember_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_1_all_kalbar" id="average_sales_type_1_all_kalbar" readonly="">
              <p id="p_sales_type_1_all_kalbar" name="p_sales_type_1_all_kalbar"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Kondisi Motor</td>
            <td>
              <input type="hidden" name="sales_type_2_januari_kalbar" id="sales_type_2_januari_kalbar" readonly="">
              <p id="p_sales_type_2_januari_kalbar" name="p_sales_type_2_januari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_februari_kalbar" id="sales_type_2_februari_kalbar" readonly="">
              <p id="p_sales_type_2_februari_kalbar" name="p_sales_type_2_februari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_maret_kalbar" id="sales_type_2_maret_kalbar" readonly="">
              <p id="p_sales_type_2_maret_kalbar" name="p_sales_type_2_maret_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_april_kalbar" id="sales_type_2_april_kalbar" readonly="">
              <p id="p_sales_type_2_april_kalbar" name="p_sales_type_2_april_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_mei_kalbar" id="sales_type_2_mei_kalbar" readonly="">
              <p id="p_sales_type_2_mei_kalbar" name="p_sales_type_2_mei_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_juni_kalbar" id="sales_type_2_juni_kalbar" readonly="">
              <p id="p_sales_type_2_juni_kalbar" name="p_sales_type_2_juni_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_juli_kalbar" id="sales_type_2_juli_kalbar" readonly="">
              <p id="p_sales_type_2_juli_kalbar" name="p_sales_type_2_juli_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_agustus_kalbar" id="sales_type_2_agustus_kalbar" readonly="">
              <p id="p_sales_type_2_agustus_kalbar" name="p_sales_type_2_agustus_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_september_kalbar" id="sales_type_2_september_kalbar" readonly="">
              <p id="p_sales_type_2_september_kalbar" name="p_sales_type_2_september_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_oktober_kalbar" id="sales_type_2_oktober_kalbar" readonly="">
              <p id="p_sales_type_2_oktober_kalbar" name="p_sales_type_2_oktober_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_november_kalbar" id="sales_type_2_november_kalbar" readonly="">
              <p id="p_sales_type_2_november_kalbar" name="p_sales_type_2_november_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_desember_kalbar" id="sales_type_2_desember_kalbar" readonly="">
              <p id="p_sales_type_2_desember_kalbar" name="p_sales_type_2_desember_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_2_all_kalbar" id="average_sales_type_2_all_kalbar" readonly="">
              <p id="p_sales_type_2_all_kalbar" name="p_sales_type_2_all_kalbar"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom</td>
            <td>
              <input type="hidden" name="sales_type_3_januari_kalbar" id="sales_type_3_januari_kalbar" readonly="">
              <p id="p_sales_type_3_januari_kalbar" name="p_sales_type_3_januari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_februari_kalbar" id="sales_type_3_februari_kalbar" readonly="">
              <p id="p_sales_type_3_februari_kalbar" name="p_sales_type_3_februari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_maret_kalbar" id="sales_type_3_maret_kalbar" readonly="">
              <p id="p_sales_type_3_maret_kalbar" name="p_sales_type_3_maret_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_april_kalbar" id="sales_type_3_april_kalbar" readonly="">
              <p id="p_sales_type_3_april_kalbar" name="p_sales_type_3_april_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_mei_kalbar" id="sales_type_3_mei_kalbar" readonly="">
              <p id="p_sales_type_3_mei_kalbar" name="p_sales_type_3_mei_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_juni_kalbar" id="sales_type_3_juni_kalbar" readonly="">
              <p id="p_sales_type_3_juni_kalbar" name="p_sales_type_3_juni_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_juli_kalbar" id="sales_type_3_juli_kalbar" readonly="">
              <p id="p_sales_type_3_juli_kalbar" name="p_sales_type_3_juli_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_agustus_kalbar" id="sales_type_3_agustus_kalbar" readonly="">
              <p id="p_sales_type_3_agustus_kalbar" name="p_sales_type_3_agustus_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_september_kalbar" id="sales_type_3_september_kalbar" readonly="">
              <p id="p_sales_type_3_september_kalbar" name="p_sales_type_3_september_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_oktober_kalbar" id="sales_type_3_oktober_kalbar" readonly="">
              <p id="p_sales_type_3_oktober_kalbar" name="p_sales_type_3_oktober_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_november_kalbar" id="sales_type_3_november_kalbar" readonly="">
              <p id="p_sales_type_3_november_kalbar" name="p_sales_type_3_november_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_desember_kalbar" id="sales_type_3_desember_kalbar" readonly="">
              <p id="p_sales_type_3_desember_kalbar" name="p_sales_type_3_desember_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_3_all_kalbar" id="average_sales_type_3_all_kalbar" readonly="">
              <p id="p_sales_type_3_all_kalbar" name="p_sales_type_3_all_kalbar"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>
              <input type="hidden" name="sales_type_4_januari_kalbar" id="sales_type_4_januari_kalbar" readonly="">
              <p id="p_sales_type_4_januari_kalbar" name="p_sales_type_4_januari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_februari_kalbar" id="sales_type_4_februari_kalbar" readonly="">
              <p id="p_sales_type_4_februari_kalbar" name="p_sales_type_4_februari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_maret_kalbar" id="sales_type_4_maret_kalbar" readonly="">
              <p id="p_sales_type_4_maret_kalbar" name="p_sales_type_4_maret_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_april_kalbar" id="sales_type_4_april_kalbar" readonly="">
              <p id="p_sales_type_4_april_kalbar" name="p_sales_type_4_april_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_mei_kalbar" id="sales_type_4_mei_kalbar" readonly="">
              <p id="p_sales_type_4_mei_kalbar" name="p_sales_type_4_mei_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_juni_kalbar" id="sales_type_4_juni_kalbar" readonly="">
              <p id="p_sales_type_4_juni_kalbar" name="p_sales_type_4_juni_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_juli_kalbar" id="sales_type_4_juli_kalbar" readonly="">
              <p id="p_sales_type_4_juli_kalbar" name="p_sales_type_4_juli_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_agustus_kalbar" id="sales_type_4_agustus_kalbar" readonly="">
              <p id="p_sales_type_4_agustus_kalbar" name="p_sales_type_4_agustus_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_september_kalbar" id="sales_type_4_september_kalbar" readonly="">
              <p id="p_sales_type_4_september_kalbar" name="p_sales_type_4_september_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_oktober_kalbar" id="sales_type_4_oktober_kalbar" readonly="">
              <p id="p_sales_type_4_oktober_kalbar" name="p_sales_type_4_oktober_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_november_kalbar" id="sales_type_4_november_kalbar" readonly="">
              <p id="p_sales_type_4_november_kalbar" name="p_sales_type_4_november_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_desember_kalbar" id="sales_type_4_desember_kalbar" readonly="">
              <p id="p_sales_type_4_desember_kalbar" name="p_sales_type_4_desember_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_4_all_kalbar" id="average_sales_type_4_all_kalbar" readonly="">
              <p id="p_sales_type_4_all_kalbar" name="p_sales_type_4_all_kalbar"></p>
            </td>
          </tr>
          <tr>
            <!-- <td rowspan="10">Rata-Rata Area kalbar</td> -->
            <td>Service</td>
            <td>Survey Service</td>
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
            <td>SERVICE COUNTER</td>
            <td>
              <input type="hidden" name="service_type_1_januari_kalbar" id="service_type_1_januari_kalbar" readonly="">
              <p id="p_service_type_1_januari_kalbar" name="p_service_type_1_januari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_februari_kalbar" id="service_type_1_februari_kalbar" readonly="">
              <p id="p_service_type_1_februari_kalbar" name="p_service_type_1_februari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_maret_kalbar" id="service_type_1_maret_kalbar" readonly="">
              <p id="p_service_type_1_maret_kalbar" name="p_service_type_1_maret_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_april_kalbar" id="service_type_1_april_kalbar" readonly="">
              <p id="p_service_type_1_april_kalbar" name="p_service_type_1_april_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_mei_kalbar" id="service_type_1_mei_kalbar" readonly="">
              <p id="p_service_type_1_mei_kalbar" name="p_service_type_1_mei_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_juni_kalbar" id="service_type_1_juni_kalbar" readonly="">
              <p id="p_service_type_1_juni_kalbar" name="p_service_type_1_juni_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_juli_kalbar" id="service_type_1_juli_kalbar" readonly="">
              <p id="p_service_type_1_juli_kalbar" name="p_service_type_1_juli_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_agustus_kalbar" id="service_type_1_agustus_kalbar" readonly="">
              <p id="p_service_type_1_agustus_kalbar" name="p_service_type_1_agustus_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_september_kalbar" id="service_type_1_september_kalbar" readonly="">
              <p id="p_service_type_1_september_kalbar" name="p_service_type_1_september_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_oktober_kalbar" id="service_type_1_oktober_kalbar" readonly="">
              <p id="p_service_type_1_oktober_kalbar" name="p_service_type_1_oktober_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_november_kalbar" id="service_type_1_november_kalbar" readonly="">
              <p id="p_service_type_1_november_kalbar" name="p_service_type_1_november_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_desember_kalbar" id="service_type_1_desember_kalbar" readonly="">
              <p id="p_service_type_1_desember_kalbar" name="p_service_type_1_desember_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_1_all_kalbar" id="average_service_type_1_all_kalbar" readonly="">
              <p id="p_service_type_1_all_kalbar" name="p_service_type_1_all_kalbar"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Hasil Service</td>
            <td>
              <input type="hidden" name="service_type_2_januari_kalbar" id="service_type_2_januari_kalbar" readonly="">
              <p id="p_service_type_2_januari_kalbar" name="p_service_type_2_januari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_februari_kalbar" id="service_type_2_februari_kalbar" readonly="">
              <p id="p_service_type_2_februari_kalbar" name="p_service_type_2_februari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_maret_kalbar" id="service_type_2_maret_kalbar" readonly="">
              <p id="p_service_type_2_maret_kalbar" name="p_service_type_2_maret_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_april_kalbar" id="service_type_2_april_kalbar" readonly="">
              <p id="p_service_type_2_april_kalbar" name="p_service_type_2_april_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_mei_kalbar" id="service_type_2_mei_kalbar" readonly="">
              <p id="p_service_type_2_mei_kalbar" name="p_service_type_2_mei_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_juni_kalbar" id="service_type_2_juni_kalbar" readonly="">
              <p id="p_service_type_2_juni_kalbar" name="p_service_type_2_juni_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_juli_kalbar" id="service_type_2_juli_kalbar" readonly="">
              <p id="p_service_type_2_juli_kalbar" name="p_service_type_2_juli_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_agustus_kalbar" id="service_type_2_agustus_kalbar" readonly="">
              <p id="p_service_type_2_agustus_kalbar" name="p_service_type_2_agustus_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_september_kalbar" id="service_type_2_september_kalbar" readonly="">
              <p id="p_service_type_2_september_kalbar" name="p_service_type_2_september_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_oktober_kalbar" id="service_type_2_oktober_kalbar" readonly="">
              <p id="p_service_type_2_oktober_kalbar" name="p_service_type_2_oktober_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_november_kalbar" id="service_type_2_november_kalbar" readonly="">
              <p id="p_service_type_2_november_kalbar" name="p_service_type_2_november_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_desember_kalbar" id="service_type_2_desember_kalbar" readonly="">
              <p id="p_service_type_2_desember_kalbar" name="p_service_type_2_desember_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_2_all_kalbar" id="average_service_type_2_all_kalbar" readonly="">
              <p id="p_service_type_2_all_kalbar" name="p_service_type_2_all_kalbar"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom dan Bengkel</td>
            <td>
              <input type="hidden" name="service_type_3_januari_kalbar" id="service_type_3_januari_kalbar" readonly="">
              <p id="p_service_type_3_januari_kalbar" name="p_service_type_3_januari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_februari_kalbar" id="service_type_3_februari_kalbar" readonly="">
              <p id="p_service_type_3_februari_kalbar" name="p_service_type_3_februari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_maret_kalbar" id="service_type_3_maret_kalbar" readonly="">
              <p id="p_service_type_3_maret_kalbar" name="p_service_type_3_maret_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_april_kalbar" id="service_type_3_april_kalbar" readonly="">
              <p id="p_service_type_3_april_kalbar" name="p_service_type_3_april_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_mei_kalbar" id="service_type_3_mei_kalbar" readonly="">
              <p id="p_service_type_3_mei_kalbar" name="p_service_type_3_mei_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_juni_kalbar" id="service_type_3_juni_kalbar" readonly="">
              <p id="p_service_type_3_juni_kalbar" name="p_service_type_3_juni_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_juli_kalbar" id="service_type_3_juli_kalbar" readonly="">
              <p id="p_service_type_3_juli_kalbar" name="p_service_type_3_juli_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_agustus_kalbar" id="service_type_3_agustus_kalbar" readonly="">
              <p id="p_service_type_3_agustus_kalbar" name="p_service_type_3_agustus_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_september_kalbar" id="service_type_3_september_kalbar" readonly="">
              <p id="p_service_type_3_september_kalbar" name="p_service_type_3_september_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_oktober_kalbar" id="service_type_3_oktober_kalbar" readonly="">
              <p id="p_service_type_3_oktober_kalbar" name="p_service_type_3_oktober_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_november_kalbar" id="service_type_3_november_kalbar" readonly="">
              <p id="p_service_type_3_november_kalbar" name="p_service_type_3_november_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_desember_kalbar" id="service_type_3_desember_kalbar" readonly="">
              <p id="p_service_type_3_desember_kalbar" name="p_service_type_3_desember_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_3_all_kalbar" id="average_service_type_3_all_kalbar" readonly="">
              <p id="p_service_type_3_all_kalbar" name="p_service_type_3_all_kalbar"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>
              <input type="hidden" name="service_type_4_januari_kalbar" id="service_type_4_januari_kalbar" readonly="">
              <p id="p_service_type_4_januari_kalbar" name="p_service_type_4_januari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_februari_kalbar" id="service_type_4_februari_kalbar" readonly="">
              <p id="p_service_type_4_februari_kalbar" name="p_service_type_4_februari_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_maret_kalbar" id="service_type_4_maret_kalbar" readonly="">
              <p id="p_service_type_4_maret_kalbar" name="p_service_type_4_maret_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_april_kalbar" id="service_type_4_april_kalbar" readonly="">
              <p id="p_service_type_4_april_kalbar" name="p_service_type_4_april_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_mei_kalbar" id="service_type_4_mei_kalbar" readonly="">
              <p id="p_service_type_4_mei_kalbar" name="p_service_type_4_mei_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_juni_kalbar" id="service_type_4_juni_kalbar" readonly="">
              <p id="p_service_type_4_juni_kalbar" name="p_service_type_4_juni_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_juli_kalbar" id="service_type_4_juli_kalbar" readonly="">
              <p id="p_service_type_4_juli_kalbar" name="p_service_type_4_juli_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_agustus_kalbar" id="service_type_4_agustus_kalbar" readonly="">
              <p id="p_service_type_4_agustus_kalbar" name="p_service_type_4_agustus_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_september_kalbar" id="service_type_4_september_kalbar" readonly="">
              <p id="p_service_type_4_september_kalbar" name="p_service_type_4_september_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_oktober_kalbar" id="service_type_4_oktober_kalbar" readonly="">
              <p id="p_service_type_4_oktober_kalbar" name="p_service_type_4_oktober_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_november_kalbar" id="service_type_4_november_kalbar" readonly="">
              <p id="p_service_type_4_november_kalbar" name="p_service_type_4_november_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_desember_kalbar" id="service_type_4_desember_kalbar" readonly="">
              <p id="p_service_type_4_desember_kalbar" name="p_service_type_4_desember_kalbar"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_4_all_kalbar" id="average_service_type_4_all_kalbar" readonly="">
              <p id="p_service_type_4_all_kalbar" name="p_service_type_4_all_kalbar"></p>
            </td>
          </tr>
          <!-- END BAGIAN SEMUA CABANG AREA KALBAR -->
          <!-- START BAGIAN SEMUA CABANG AREA KALSEL -->
          <tr>
            <td rowspan="10">Rata-Rata Area Kalsel</td>
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
              <input type="hidden" name="sales_type_1_januari_kalsel" id="sales_type_1_januari_kalsel" readonly="">
              <p id="p_sales_type_1_januari_kalsel" name="p_sales_type_1_januari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_februari_kalsel" id="sales_type_1_februari_kalsel" readonly="">
              <p id="p_sales_type_1_februari_kalsel" name="p_sales_type_1_februari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_maret_kalsel" id="sales_type_1_maret_kalsel" readonly="">
              <p id="p_sales_type_1_maret_kalsel" name="p_sales_type_1_maret_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_april_kalsel" id="sales_type_1_april_kalsel" readonly="">
              <p id="p_sales_type_1_april_kalsel" name="p_sales_type_1_april_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_mei_kalsel" id="sales_type_1_mei_kalsel" readonly="">
              <p id="p_sales_type_1_mei_kalsel" name="p_sales_type_1_mei_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_juni_kalsel" id="sales_type_1_juni_kalsel" readonly="">
              <p id="p_sales_type_1_juni_kalsel" name="p_sales_type_1_juni_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_juli_kalsel" id="sales_type_1_juli_kalsel" readonly="">
              <p id="p_sales_type_1_juli_kalsel" name="p_sales_type_1_juli_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_agustus_kalsel" id="sales_type_1_agustus_kalsel" readonly="">
              <p id="p_sales_type_1_agustus_kalsel" name="p_sales_type_1_agustus_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_september_kalsel" id="sales_type_1_september_kalsel" readonly="">
              <p id="p_sales_type_1_september_kalsel" name="p_sales_type_1_september_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_oktober_kalsel" id="sales_type_1_oktober_kalsel" readonly="">
              <p id="p_sales_type_1_oktober_kalsel" name="p_sales_type_1_oktober_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_november_kalsel" id="sales_type_1_november_kalsel" readonly="">
              <p id="p_sales_type_1_november_kalsel" name="p_sales_type_1_november_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_desember_kalsel" id="sales_type_1_desember_kalsel" readonly="">
              <p id="p_sales_type_1_desember_kalsel" name="p_sales_type_1_desember_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_1_all_kalsel" id="average_sales_type_1_all_kalsel" readonly="">
              <p id="p_sales_type_1_all_kalsel" name="p_sales_type_1_all_kalsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Kondisi Motor</td>
            <td>
              <input type="hidden" name="sales_type_2_januari_kalsel" id="sales_type_2_januari_kalsel" readonly="">
              <p id="p_sales_type_2_januari_kalsel" name="p_sales_type_2_januari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_februari_kalsel" id="sales_type_2_februari_kalsel" readonly="">
              <p id="p_sales_type_2_februari_kalsel" name="p_sales_type_2_februari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_maret_kalsel" id="sales_type_2_maret_kalsel" readonly="">
              <p id="p_sales_type_2_maret_kalsel" name="p_sales_type_2_maret_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_april_kalsel" id="sales_type_2_april_kalsel" readonly="">
              <p id="p_sales_type_2_april_kalsel" name="p_sales_type_2_april_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_mei_kalsel" id="sales_type_2_mei_kalsel" readonly="">
              <p id="p_sales_type_2_mei_kalsel" name="p_sales_type_2_mei_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_juni_kalsel" id="sales_type_2_juni_kalsel" readonly="">
              <p id="p_sales_type_2_juni_kalsel" name="p_sales_type_2_juni_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_juli_kalsel" id="sales_type_2_juli_kalsel" readonly="">
              <p id="p_sales_type_2_juli_kalsel" name="p_sales_type_2_juli_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_agustus_kalsel" id="sales_type_2_agustus_kalsel" readonly="">
              <p id="p_sales_type_2_agustus_kalsel" name="p_sales_type_2_agustus_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_september_kalsel" id="sales_type_2_september_kalsel" readonly="">
              <p id="p_sales_type_2_september_kalsel" name="p_sales_type_2_september_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_oktober_kalsel" id="sales_type_2_oktober_kalsel" readonly="">
              <p id="p_sales_type_2_oktober_kalsel" name="p_sales_type_2_oktober_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_november_kalsel" id="sales_type_2_november_kalsel" readonly="">
              <p id="p_sales_type_2_november_kalsel" name="p_sales_type_2_november_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_desember_kalsel" id="sales_type_2_desember_kalsel" readonly="">
              <p id="p_sales_type_2_desember_kalsel" name="p_sales_type_2_desember_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_2_all_kalsel" id="average_sales_type_2_all_kalsel" readonly="">
              <p id="p_sales_type_2_all_kalsel" name="p_sales_type_2_all_kalsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom</td>
            <td>
              <input type="hidden" name="sales_type_3_januari_kalsel" id="sales_type_3_januari_kalsel" readonly="">
              <p id="p_sales_type_3_januari_kalsel" name="p_sales_type_3_januari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_februari_kalsel" id="sales_type_3_februari_kalsel" readonly="">
              <p id="p_sales_type_3_februari_kalsel" name="p_sales_type_3_februari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_maret_kalsel" id="sales_type_3_maret_kalsel" readonly="">
              <p id="p_sales_type_3_maret_kalsel" name="p_sales_type_3_maret_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_april_kalsel" id="sales_type_3_april_kalsel" readonly="">
              <p id="p_sales_type_3_april_kalsel" name="p_sales_type_3_april_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_mei_kalsel" id="sales_type_3_mei_kalsel" readonly="">
              <p id="p_sales_type_3_mei_kalsel" name="p_sales_type_3_mei_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_juni_kalsel" id="sales_type_3_juni_kalsel" readonly="">
              <p id="p_sales_type_3_juni_kalsel" name="p_sales_type_3_juni_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_juli_kalsel" id="sales_type_3_juli_kalsel" readonly="">
              <p id="p_sales_type_3_juli_kalsel" name="p_sales_type_3_juli_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_agustus_kalsel" id="sales_type_3_agustus_kalsel" readonly="">
              <p id="p_sales_type_3_agustus_kalsel" name="p_sales_type_3_agustus_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_september_kalsel" id="sales_type_3_september_kalsel" readonly="">
              <p id="p_sales_type_3_september_kalsel" name="p_sales_type_3_september_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_oktober_kalsel" id="sales_type_3_oktober_kalsel" readonly="">
              <p id="p_sales_type_3_oktober_kalsel" name="p_sales_type_3_oktober_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_november_kalsel" id="sales_type_3_november_kalsel" readonly="">
              <p id="p_sales_type_3_november_kalsel" name="p_sales_type_3_november_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_desember_kalsel" id="sales_type_3_desember_kalsel" readonly="">
              <p id="p_sales_type_3_desember_kalsel" name="p_sales_type_3_desember_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_3_all_kalsel" id="average_sales_type_3_all_kalsel" readonly="">
              <p id="p_sales_type_3_all_kalsel" name="p_sales_type_3_all_kalsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>
              <input type="hidden" name="sales_type_4_januari_kalsel" id="sales_type_4_januari_kalsel" readonly="">
              <p id="p_sales_type_4_januari_kalsel" name="p_sales_type_4_januari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_februari_kalsel" id="sales_type_4_februari_kalsel" readonly="">
              <p id="p_sales_type_4_februari_kalsel" name="p_sales_type_4_februari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_maret_kalsel" id="sales_type_4_maret_kalsel" readonly="">
              <p id="p_sales_type_4_maret_kalsel" name="p_sales_type_4_maret_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_april_kalsel" id="sales_type_4_april_kalsel" readonly="">
              <p id="p_sales_type_4_april_kalsel" name="p_sales_type_4_april_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_mei_kalsel" id="sales_type_4_mei_kalsel" readonly="">
              <p id="p_sales_type_4_mei_kalsel" name="p_sales_type_4_mei_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_juni_kalsel" id="sales_type_4_juni_kalsel" readonly="">
              <p id="p_sales_type_4_juni_kalsel" name="p_sales_type_4_juni_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_juli_kalsel" id="sales_type_4_juli_kalsel" readonly="">
              <p id="p_sales_type_4_juli_kalsel" name="p_sales_type_4_juli_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_agustus_kalsel" id="sales_type_4_agustus_kalsel" readonly="">
              <p id="p_sales_type_4_agustus_kalsel" name="p_sales_type_4_agustus_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_september_kalsel" id="sales_type_4_september_kalsel" readonly="">
              <p id="p_sales_type_4_september_kalsel" name="p_sales_type_4_september_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_oktober_kalsel" id="sales_type_4_oktober_kalsel" readonly="">
              <p id="p_sales_type_4_oktober_kalsel" name="p_sales_type_4_oktober_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_november_kalsel" id="sales_type_4_november_kalsel" readonly="">
              <p id="p_sales_type_4_november_kalsel" name="p_sales_type_4_november_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_desember_kalsel" id="sales_type_4_desember_kalsel" readonly="">
              <p id="p_sales_type_4_desember_kalsel" name="p_sales_type_4_desember_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_4_all_kalsel" id="average_sales_type_4_all_kalsel" readonly="">
              <p id="p_sales_type_4_all_kalsel" name="p_sales_type_4_all_kalsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td rowspan="10">Rata-Rata Area kalsel</td> -->
            <td>Service</td>
            <td>Survey Service</td>
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
            <td>SERVICE COUNTER</td>
            <td>
              <input type="hidden" name="service_type_1_januari_kalsel" id="service_type_1_januari_kalsel" readonly="">
              <p id="p_service_type_1_januari_kalsel" name="p_service_type_1_januari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_februari_kalsel" id="service_type_1_februari_kalsel" readonly="">
              <p id="p_service_type_1_februari_kalsel" name="p_service_type_1_februari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_maret_kalsel" id="service_type_1_maret_kalsel" readonly="">
              <p id="p_service_type_1_maret_kalsel" name="p_service_type_1_maret_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_april_kalsel" id="service_type_1_april_kalsel" readonly="">
              <p id="p_service_type_1_april_kalsel" name="p_service_type_1_april_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_mei_kalsel" id="service_type_1_mei_kalsel" readonly="">
              <p id="p_service_type_1_mei_kalsel" name="p_service_type_1_mei_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_juni_kalsel" id="service_type_1_juni_kalsel" readonly="">
              <p id="p_service_type_1_juni_kalsel" name="p_service_type_1_juni_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_juli_kalsel" id="service_type_1_juli_kalsel" readonly="">
              <p id="p_service_type_1_juli_kalsel" name="p_service_type_1_juli_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_agustus_kalsel" id="service_type_1_agustus_kalsel" readonly="">
              <p id="p_service_type_1_agustus_kalsel" name="p_service_type_1_agustus_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_september_kalsel" id="service_type_1_september_kalsel" readonly="">
              <p id="p_service_type_1_september_kalsel" name="p_service_type_1_september_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_oktober_kalsel" id="service_type_1_oktober_kalsel" readonly="">
              <p id="p_service_type_1_oktober_kalsel" name="p_service_type_1_oktober_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_november_kalsel" id="service_type_1_november_kalsel" readonly="">
              <p id="p_service_type_1_november_kalsel" name="p_service_type_1_november_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_desember_kalsel" id="service_type_1_desember_kalsel" readonly="">
              <p id="p_service_type_1_desember_kalsel" name="p_service_type_1_desember_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_1_all_kalsel" id="average_service_type_1_all_kalsel" readonly="">
              <p id="p_service_type_1_all_kalsel" name="p_service_type_1_all_kalsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Hasil Service</td>
            <td>
              <input type="hidden" name="service_type_2_januari_kalsel" id="service_type_2_januari_kalsel" readonly="">
              <p id="p_service_type_2_januari_kalsel" name="p_service_type_2_januari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_februari_kalsel" id="service_type_2_februari_kalsel" readonly="">
              <p id="p_service_type_2_februari_kalsel" name="p_service_type_2_februari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_maret_kalsel" id="service_type_2_maret_kalsel" readonly="">
              <p id="p_service_type_2_maret_kalsel" name="p_service_type_2_maret_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_april_kalsel" id="service_type_2_april_kalsel" readonly="">
              <p id="p_service_type_2_april_kalsel" name="p_service_type_2_april_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_mei_kalsel" id="service_type_2_mei_kalsel" readonly="">
              <p id="p_service_type_2_mei_kalsel" name="p_service_type_2_mei_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_juni_kalsel" id="service_type_2_juni_kalsel" readonly="">
              <p id="p_service_type_2_juni_kalsel" name="p_service_type_2_juni_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_juli_kalsel" id="service_type_2_juli_kalsel" readonly="">
              <p id="p_service_type_2_juli_kalsel" name="p_service_type_2_juli_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_agustus_kalsel" id="service_type_2_agustus_kalsel" readonly="">
              <p id="p_service_type_2_agustus_kalsel" name="p_service_type_2_agustus_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_september_kalsel" id="service_type_2_september_kalsel" readonly="">
              <p id="p_service_type_2_september_kalsel" name="p_service_type_2_september_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_oktober_kalsel" id="service_type_2_oktober_kalsel" readonly="">
              <p id="p_service_type_2_oktober_kalsel" name="p_service_type_2_oktober_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_november_kalsel" id="service_type_2_november_kalsel" readonly="">
              <p id="p_service_type_2_november_kalsel" name="p_service_type_2_november_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_desember_kalsel" id="service_type_2_desember_kalsel" readonly="">
              <p id="p_service_type_2_desember_kalsel" name="p_service_type_2_desember_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_2_all_kalsel" id="average_service_type_2_all_kalsel" readonly="">
              <p id="p_service_type_2_all_kalsel" name="p_service_type_2_all_kalsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom dan Bengkel</td>
            <td>
              <input type="hidden" name="service_type_3_januari_kalsel" id="service_type_3_januari_kalsel" readonly="">
              <p id="p_service_type_3_januari_kalsel" name="p_service_type_3_januari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_februari_kalsel" id="service_type_3_februari_kalsel" readonly="">
              <p id="p_service_type_3_februari_kalsel" name="p_service_type_3_februari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_maret_kalsel" id="service_type_3_maret_kalsel" readonly="">
              <p id="p_service_type_3_maret_kalsel" name="p_service_type_3_maret_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_april_kalsel" id="service_type_3_april_kalsel" readonly="">
              <p id="p_service_type_3_april_kalsel" name="p_service_type_3_april_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_mei_kalsel" id="service_type_3_mei_kalsel" readonly="">
              <p id="p_service_type_3_mei_kalsel" name="p_service_type_3_mei_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_juni_kalsel" id="service_type_3_juni_kalsel" readonly="">
              <p id="p_service_type_3_juni_kalsel" name="p_service_type_3_juni_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_juli_kalsel" id="service_type_3_juli_kalsel" readonly="">
              <p id="p_service_type_3_juli_kalsel" name="p_service_type_3_juli_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_agustus_kalsel" id="service_type_3_agustus_kalsel" readonly="">
              <p id="p_service_type_3_agustus_kalsel" name="p_service_type_3_agustus_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_september_kalsel" id="service_type_3_september_kalsel" readonly="">
              <p id="p_service_type_3_september_kalsel" name="p_service_type_3_september_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_oktober_kalsel" id="service_type_3_oktober_kalsel" readonly="">
              <p id="p_service_type_3_oktober_kalsel" name="p_service_type_3_oktober_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_november_kalsel" id="service_type_3_november_kalsel" readonly="">
              <p id="p_service_type_3_november_kalsel" name="p_service_type_3_november_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_desember_kalsel" id="service_type_3_desember_kalsel" readonly="">
              <p id="p_service_type_3_desember_kalsel" name="p_service_type_3_desember_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_3_all_kalsel" id="average_service_type_3_all_kalsel" readonly="">
              <p id="p_service_type_3_all_kalsel" name="p_service_type_3_all_kalsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>
              <input type="hidden" name="service_type_4_januari_kalsel" id="service_type_4_januari_kalsel" readonly="">
              <p id="p_service_type_4_januari_kalsel" name="p_service_type_4_januari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_februari_kalsel" id="service_type_4_februari_kalsel" readonly="">
              <p id="p_service_type_4_februari_kalsel" name="p_service_type_4_februari_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_maret_kalsel" id="service_type_4_maret_kalsel" readonly="">
              <p id="p_service_type_4_maret_kalsel" name="p_service_type_4_maret_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_april_kalsel" id="service_type_4_april_kalsel" readonly="">
              <p id="p_service_type_4_april_kalsel" name="p_service_type_4_april_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_mei_kalsel" id="service_type_4_mei_kalsel" readonly="">
              <p id="p_service_type_4_mei_kalsel" name="p_service_type_4_mei_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_juni_kalsel" id="service_type_4_juni_kalsel" readonly="">
              <p id="p_service_type_4_juni_kalsel" name="p_service_type_4_juni_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_juli_kalsel" id="service_type_4_juli_kalsel" readonly="">
              <p id="p_service_type_4_juli_kalsel" name="p_service_type_4_juli_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_agustus_kalsel" id="service_type_4_agustus_kalsel" readonly="">
              <p id="p_service_type_4_agustus_kalsel" name="p_service_type_4_agustus_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_september_kalsel" id="service_type_4_september_kalsel" readonly="">
              <p id="p_service_type_4_september_kalsel" name="p_service_type_4_september_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_oktober_kalsel" id="service_type_4_oktober_kalsel" readonly="">
              <p id="p_service_type_4_oktober_kalsel" name="p_service_type_4_oktober_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_november_kalsel" id="service_type_4_november_kalsel" readonly="">
              <p id="p_service_type_4_november_kalsel" name="p_service_type_4_november_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_desember_kalsel" id="service_type_4_desember_kalsel" readonly="">
              <p id="p_service_type_4_desember_kalsel" name="p_service_type_4_desember_kalsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_4_all_kalsel" id="average_service_type_4_all_kalsel" readonly="">
              <p id="p_service_type_4_all_kalsel" name="p_service_type_4_all_kalsel"></p>
            </td>
          </tr>
          <!-- END BAGIAN SEMUA CABANG AREA KALSEL -->
          <!-- START BAGIAN SEMUA CABANG AREA SUMSEL -->
          <tr>
            <td rowspan="10">Rata-Rata Area Sumsel</td>
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
              <input type="hidden" name="sales_type_1_januari_sumsel" id="sales_type_1_januari_sumsel" readonly="">
              <p id="p_sales_type_1_januari_sumsel" name="p_sales_type_1_januari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_februari_sumsel" id="sales_type_1_februari_sumsel" readonly="">
              <p id="p_sales_type_1_februari_sumsel" name="p_sales_type_1_februari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_maret_sumsel" id="sales_type_1_maret_sumsel" readonly="">
              <p id="p_sales_type_1_maret_sumsel" name="p_sales_type_1_maret_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_april_sumsel" id="sales_type_1_april_sumsel" readonly="">
              <p id="p_sales_type_1_april_sumsel" name="p_sales_type_1_april_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_mei_sumsel" id="sales_type_1_mei_sumsel" readonly="">
              <p id="p_sales_type_1_mei_sumsel" name="p_sales_type_1_mei_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_juni_sumsel" id="sales_type_1_juni_sumsel" readonly="">
              <p id="p_sales_type_1_juni_sumsel" name="p_sales_type_1_juni_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_juli_sumsel" id="sales_type_1_juli_sumsel" readonly="">
              <p id="p_sales_type_1_juli_sumsel" name="p_sales_type_1_juli_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_agustus_sumsel" id="sales_type_1_agustus_sumsel" readonly="">
              <p id="p_sales_type_1_agustus_sumsel" name="p_sales_type_1_agustus_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_september_sumsel" id="sales_type_1_september_sumsel" readonly="">
              <p id="p_sales_type_1_september_sumsel" name="p_sales_type_1_september_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_oktober_sumsel" id="sales_type_1_oktober_sumsel" readonly="">
              <p id="p_sales_type_1_oktober_sumsel" name="p_sales_type_1_oktober_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_november_sumsel" id="sales_type_1_november_sumsel" readonly="">
              <p id="p_sales_type_1_november_sumsel" name="p_sales_type_1_november_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_1_desember_sumsel" id="sales_type_1_desember_sumsel" readonly="">
              <p id="p_sales_type_1_desember_sumsel" name="p_sales_type_1_desember_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_1_all_sumsel" id="average_sales_type_1_all_sumsel" readonly="">
              <p id="p_sales_type_1_all_sumsel" name="p_sales_type_1_all_sumsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Kondisi Motor</td>
            <td>
              <input type="hidden" name="sales_type_2_januari_sumsel" id="sales_type_2_januari_sumsel" readonly="">
              <p id="p_sales_type_2_januari_sumsel" name="p_sales_type_2_januari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_februari_sumsel" id="sales_type_2_februari_sumsel" readonly="">
              <p id="p_sales_type_2_februari_sumsel" name="p_sales_type_2_februari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_maret_sumsel" id="sales_type_2_maret_sumsel" readonly="">
              <p id="p_sales_type_2_maret_sumsel" name="p_sales_type_2_maret_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_april_sumsel" id="sales_type_2_april_sumsel" readonly="">
              <p id="p_sales_type_2_april_sumsel" name="p_sales_type_2_april_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_mei_sumsel" id="sales_type_2_mei_sumsel" readonly="">
              <p id="p_sales_type_2_mei_sumsel" name="p_sales_type_2_mei_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_juni_sumsel" id="sales_type_2_juni_sumsel" readonly="">
              <p id="p_sales_type_2_juni_sumsel" name="p_sales_type_2_juni_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_juli_sumsel" id="sales_type_2_juli_sumsel" readonly="">
              <p id="p_sales_type_2_juli_sumsel" name="p_sales_type_2_juli_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_agustus_sumsel" id="sales_type_2_agustus_sumsel" readonly="">
              <p id="p_sales_type_2_agustus_sumsel" name="p_sales_type_2_agustus_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_september_sumsel" id="sales_type_2_september_sumsel" readonly="">
              <p id="p_sales_type_2_september_sumsel" name="p_sales_type_2_september_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_oktober_sumsel" id="sales_type_2_oktober_sumsel" readonly="">
              <p id="p_sales_type_2_oktober_sumsel" name="p_sales_type_2_oktober_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_november_sumsel" id="sales_type_2_november_sumsel" readonly="">
              <p id="p_sales_type_2_november_sumsel" name="p_sales_type_2_november_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_2_desember_sumsel" id="sales_type_2_desember_sumsel" readonly="">
              <p id="p_sales_type_2_desember_sumsel" name="p_sales_type_2_desember_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_2_all_sumsel" id="average_sales_type_2_all_sumsel" readonly="">
              <p id="p_sales_type_2_all_sumsel" name="p_sales_type_2_all_sumsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom</td>
            <td>
              <input type="hidden" name="sales_type_3_januari_sumsel" id="sales_type_3_januari_sumsel" readonly="">
              <p id="p_sales_type_3_januari_sumsel" name="p_sales_type_3_januari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_februari_sumsel" id="sales_type_3_februari_sumsel" readonly="">
              <p id="p_sales_type_3_februari_sumsel" name="p_sales_type_3_februari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_maret_sumsel" id="sales_type_3_maret_sumsel" readonly="">
              <p id="p_sales_type_3_maret_sumsel" name="p_sales_type_3_maret_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_april_sumsel" id="sales_type_3_april_sumsel" readonly="">
              <p id="p_sales_type_3_april_sumsel" name="p_sales_type_3_april_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_mei_sumsel" id="sales_type_3_mei_sumsel" readonly="">
              <p id="p_sales_type_3_mei_sumsel" name="p_sales_type_3_mei_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_juni_sumsel" id="sales_type_3_juni_sumsel" readonly="">
              <p id="p_sales_type_3_juni_sumsel" name="p_sales_type_3_juni_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_juli_sumsel" id="sales_type_3_juli_sumsel" readonly="">
              <p id="p_sales_type_3_juli_sumsel" name="p_sales_type_3_juli_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_agustus_sumsel" id="sales_type_3_agustus_sumsel" readonly="">
              <p id="p_sales_type_3_agustus_sumsel" name="p_sales_type_3_agustus_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_september_sumsel" id="sales_type_3_september_sumsel" readonly="">
              <p id="p_sales_type_3_september_sumsel" name="p_sales_type_3_september_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_oktober_sumsel" id="sales_type_3_oktober_sumsel" readonly="">
              <p id="p_sales_type_3_oktober_sumsel" name="p_sales_type_3_oktober_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_november_sumsel" id="sales_type_3_november_sumsel" readonly="">
              <p id="p_sales_type_3_november_sumsel" name="p_sales_type_3_november_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_3_desember_sumsel" id="sales_type_3_desember_sumsel" readonly="">
              <p id="p_sales_type_3_desember_sumsel" name="p_sales_type_3_desember_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_3_all_sumsel" id="average_sales_type_3_all_sumsel" readonly="">
              <p id="p_sales_type_3_all_sumsel" name="p_sales_type_3_all_sumsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>
              <input type="hidden" name="sales_type_4_januari_sumsel" id="sales_type_4_januari_sumsel" readonly="">
              <p id="p_sales_type_4_januari_sumsel" name="p_sales_type_4_januari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_februari_sumsel" id="sales_type_4_februari_sumsel" readonly="">
              <p id="p_sales_type_4_februari_sumsel" name="p_sales_type_4_februari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_maret_sumsel" id="sales_type_4_maret_sumsel" readonly="">
              <p id="p_sales_type_4_maret_sumsel" name="p_sales_type_4_maret_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_april_sumsel" id="sales_type_4_april_sumsel" readonly="">
              <p id="p_sales_type_4_april_sumsel" name="p_sales_type_4_april_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_mei_sumsel" id="sales_type_4_mei_sumsel" readonly="">
              <p id="p_sales_type_4_mei_sumsel" name="p_sales_type_4_mei_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_juni_sumsel" id="sales_type_4_juni_sumsel" readonly="">
              <p id="p_sales_type_4_juni_sumsel" name="p_sales_type_4_juni_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_juli_sumsel" id="sales_type_4_juli_sumsel" readonly="">
              <p id="p_sales_type_4_juli_sumsel" name="p_sales_type_4_juli_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_agustus_sumsel" id="sales_type_4_agustus_sumsel" readonly="">
              <p id="p_sales_type_4_agustus_sumsel" name="p_sales_type_4_agustus_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_september_sumsel" id="sales_type_4_september_sumsel" readonly="">
              <p id="p_sales_type_4_september_sumsel" name="p_sales_type_4_september_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_oktober_sumsel" id="sales_type_4_oktober_sumsel" readonly="">
              <p id="p_sales_type_4_oktober_sumsel" name="p_sales_type_4_oktober_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_november_sumsel" id="sales_type_4_november_sumsel" readonly="">
              <p id="p_sales_type_4_november_sumsel" name="p_sales_type_4_november_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="sales_type_4_desember_sumsel" id="sales_type_4_desember_sumsel" readonly="">
              <p id="p_sales_type_4_desember_sumsel" name="p_sales_type_4_desember_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_sales_type_4_all_sumsel" id="average_sales_type_4_all_sumsel" readonly="">
              <p id="p_sales_type_4_all_sumsel" name="p_sales_type_4_all_sumsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td rowspan="10">Rata-Rata Area sumsel</td> -->
            <td>Service</td>
            <td>Survey Service</td>
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
            <td>SERVICE COUNTER</td>
            <td>
              <input type="hidden" name="service_type_1_januari_sumsel" id="service_type_1_januari_sumsel" readonly="">
              <p id="p_service_type_1_januari_sumsel" name="p_service_type_1_januari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_februari_sumsel" id="service_type_1_februari_sumsel" readonly="">
              <p id="p_service_type_1_februari_sumsel" name="p_service_type_1_februari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_maret_sumsel" id="service_type_1_maret_sumsel" readonly="">
              <p id="p_service_type_1_maret_sumsel" name="p_service_type_1_maret_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_april_sumsel" id="service_type_1_april_sumsel" readonly="">
              <p id="p_service_type_1_april_sumsel" name="p_service_type_1_april_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_mei_sumsel" id="service_type_1_mei_sumsel" readonly="">
              <p id="p_service_type_1_mei_sumsel" name="p_service_type_1_mei_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_juni_sumsel" id="service_type_1_juni_sumsel" readonly="">
              <p id="p_service_type_1_juni_sumsel" name="p_service_type_1_juni_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_juli_sumsel" id="service_type_1_juli_sumsel" readonly="">
              <p id="p_service_type_1_juli_sumsel" name="p_service_type_1_juli_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_agustus_sumsel" id="service_type_1_agustus_sumsel" readonly="">
              <p id="p_service_type_1_agustus_sumsel" name="p_service_type_1_agustus_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_september_sumsel" id="service_type_1_september_sumsel" readonly="">
              <p id="p_service_type_1_september_sumsel" name="p_service_type_1_september_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_oktober_sumsel" id="service_type_1_oktober_sumsel" readonly="">
              <p id="p_service_type_1_oktober_sumsel" name="p_service_type_1_oktober_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_november_sumsel" id="service_type_1_november_sumsel" readonly="">
              <p id="p_service_type_1_november_sumsel" name="p_service_type_1_november_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_1_desember_sumsel" id="service_type_1_desember_sumsel" readonly="">
              <p id="p_service_type_1_desember_sumsel" name="p_service_type_1_desember_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_1_all_sumsel" id="average_service_type_1_all_sumsel" readonly="">
              <p id="p_service_type_1_all_sumsel" name="p_service_type_1_all_sumsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>2</td>
            <td>Hasil Service</td>
            <td>
              <input type="hidden" name="service_type_2_januari_sumsel" id="service_type_2_januari_sumsel" readonly="">
              <p id="p_service_type_2_januari_sumsel" name="p_service_type_2_januari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_februari_sumsel" id="service_type_2_februari_sumsel" readonly="">
              <p id="p_service_type_2_februari_sumsel" name="p_service_type_2_februari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_maret_sumsel" id="service_type_2_maret_sumsel" readonly="">
              <p id="p_service_type_2_maret_sumsel" name="p_service_type_2_maret_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_april_sumsel" id="service_type_2_april_sumsel" readonly="">
              <p id="p_service_type_2_april_sumsel" name="p_service_type_2_april_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_mei_sumsel" id="service_type_2_mei_sumsel" readonly="">
              <p id="p_service_type_2_mei_sumsel" name="p_service_type_2_mei_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_juni_sumsel" id="service_type_2_juni_sumsel" readonly="">
              <p id="p_service_type_2_juni_sumsel" name="p_service_type_2_juni_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_juli_sumsel" id="service_type_2_juli_sumsel" readonly="">
              <p id="p_service_type_2_juli_sumsel" name="p_service_type_2_juli_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_agustus_sumsel" id="service_type_2_agustus_sumsel" readonly="">
              <p id="p_service_type_2_agustus_sumsel" name="p_service_type_2_agustus_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_september_sumsel" id="service_type_2_september_sumsel" readonly="">
              <p id="p_service_type_2_september_sumsel" name="p_service_type_2_september_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_oktober_sumsel" id="service_type_2_oktober_sumsel" readonly="">
              <p id="p_service_type_2_oktober_sumsel" name="p_service_type_2_oktober_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_november_sumsel" id="service_type_2_november_sumsel" readonly="">
              <p id="p_service_type_2_november_sumsel" name="p_service_type_2_november_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_2_desember_sumsel" id="service_type_2_desember_sumsel" readonly="">
              <p id="p_service_type_2_desember_sumsel" name="p_service_type_2_desember_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_2_all_sumsel" id="average_service_type_2_all_sumsel" readonly="">
              <p id="p_service_type_2_all_sumsel" name="p_service_type_2_all_sumsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>3</td>
            <td>Kondisi Showroom dan Bengkel</td>
            <td>
              <input type="hidden" name="service_type_3_januari_sumsel" id="service_type_3_januari_sumsel" readonly="">
              <p id="p_service_type_3_januari_sumsel" name="p_service_type_3_januari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_februari_sumsel" id="service_type_3_februari_sumsel" readonly="">
              <p id="p_service_type_3_februari_sumsel" name="p_service_type_3_februari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_maret_sumsel" id="service_type_3_maret_sumsel" readonly="">
              <p id="p_service_type_3_maret_sumsel" name="p_service_type_3_maret_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_april_sumsel" id="service_type_3_april_sumsel" readonly="">
              <p id="p_service_type_3_april_sumsel" name="p_service_type_3_april_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_mei_sumsel" id="service_type_3_mei_sumsel" readonly="">
              <p id="p_service_type_3_mei_sumsel" name="p_service_type_3_mei_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_juni_sumsel" id="service_type_3_juni_sumsel" readonly="">
              <p id="p_service_type_3_juni_sumsel" name="p_service_type_3_juni_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_juli_sumsel" id="service_type_3_juli_sumsel" readonly="">
              <p id="p_service_type_3_juli_sumsel" name="p_service_type_3_juli_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_agustus_sumsel" id="service_type_3_agustus_sumsel" readonly="">
              <p id="p_service_type_3_agustus_sumsel" name="p_service_type_3_agustus_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_september_sumsel" id="service_type_3_september_sumsel" readonly="">
              <p id="p_service_type_3_september_sumsel" name="p_service_type_3_september_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_oktober_sumsel" id="service_type_3_oktober_sumsel" readonly="">
              <p id="p_service_type_3_oktober_sumsel" name="p_service_type_3_oktober_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_november_sumsel" id="service_type_3_november_sumsel" readonly="">
              <p id="p_service_type_3_november_sumsel" name="p_service_type_3_november_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_3_desember_sumsel" id="service_type_3_desember_sumsel" readonly="">
              <p id="p_service_type_3_desember_sumsel" name="p_service_type_3_desember_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_3_all_sumsel" id="average_service_type_3_all_sumsel" readonly="">
              <p id="p_service_type_3_all_sumsel" name="p_service_type_3_all_sumsel"></p>
            </td>
          </tr>
          <tr>
            <!-- <td></td> -->
            <td>4</td>
            <td>Merekomendasikan SSM</td>
            <td>
              <input type="hidden" name="service_type_4_januari_sumsel" id="service_type_4_januari_sumsel" readonly="">
              <p id="p_service_type_4_januari_sumsel" name="p_service_type_4_januari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_februari_sumsel" id="service_type_4_februari_sumsel" readonly="">
              <p id="p_service_type_4_februari_sumsel" name="p_service_type_4_februari_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_maret_sumsel" id="service_type_4_maret_sumsel" readonly="">
              <p id="p_service_type_4_maret_sumsel" name="p_service_type_4_maret_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_april_sumsel" id="service_type_4_april_sumsel" readonly="">
              <p id="p_service_type_4_april_sumsel" name="p_service_type_4_april_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_mei_sumsel" id="service_type_4_mei_sumsel" readonly="">
              <p id="p_service_type_4_mei_sumsel" name="p_service_type_4_mei_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_juni_sumsel" id="service_type_4_juni_sumsel" readonly="">
              <p id="p_service_type_4_juni_sumsel" name="p_service_type_4_juni_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_juli_sumsel" id="service_type_4_juli_sumsel" readonly="">
              <p id="p_service_type_4_juli_sumsel" name="p_service_type_4_juli_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_agustus_sumsel" id="service_type_4_agustus_sumsel" readonly="">
              <p id="p_service_type_4_agustus_sumsel" name="p_service_type_4_agustus_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_september_sumsel" id="service_type_4_september_sumsel" readonly="">
              <p id="p_service_type_4_september_sumsel" name="p_service_type_4_september_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_oktober_sumsel" id="service_type_4_oktober_sumsel" readonly="">
              <p id="p_service_type_4_oktober_sumsel" name="p_service_type_4_oktober_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_november_sumsel" id="service_type_4_november_sumsel" readonly="">
              <p id="p_service_type_4_november_sumsel" name="p_service_type_4_november_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="service_type_4_desember_sumsel" id="service_type_4_desember_sumsel" readonly="">
              <p id="p_service_type_4_desember_sumsel" name="p_service_type_4_desember_sumsel"></p>
            </td>
            <td>
              <input type="hidden" name="average_service_type_4_all_sumsel" id="average_service_type_4_all_sumsel" readonly="">
              <p id="p_service_type_4_all_sumsel" name="p_service_type_4_all_sumsel"></p>
            </td>
          </tr>
          <!-- END BAGIAN SEMUA CABANG AREA SUMSEL -->
        </table>
      </div>
    </div>
  </div>
<!-- partial -->
</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
</body>
</html>
<script type="text/javascript">
//start bagian document ready function
$(document).ready(function(){
  // alert('Testing Index Version Pages Peryear Survey');//success!!!

  get_rata_rata_every_month_peryear_jakarta();
  get_rata_rata_every_month_peryear_kaltim();
  get_rata_rata_every_month_peryear_kalbar();
  get_rata_rata_every_month_peryear_kalsel();
  get_rata_rata_every_month_peryear_sumsel();

  function substr_percent(number=''){//for hide param percent in number
    var number_substr = number;
    if(number_substr == '0%' || number_substr == '0'){
      var fix_number_substr = number_substr.substring(0, 1);
    }else{
      var fix_number_substr = number_substr.substring(0, 2);
    }
    return fix_number_substr;
  }

  // txt_Rata_rata_ServiceNoType_1_januari_jkt
  //START FOR AREA SEMUA CABANG JAKARTA
  function get_rata_rata_every_month_peryear_jakarta(){
    x = $("#txt_Rata_rata_ServiceNoType_4_maret_jkt").val();
    // alert(x);
    //start month January
      //start for Tyoe Service
    RataRataService_1_Januari_jkt = $("#txt_Rata_rata_ServiceNoType_1_januari_jkt").val();
    var substr_service_type_1_januari_jkt = substr_percent(RataRataService_1_Januari_jkt);
    RataRataService_2_Januari_jkt = $("#txt_Rata_rata_ServiceNoType_2_januari_jkt").val();
    var substr_service_type_2_januari_jkt = substr_percent(RataRataService_2_Januari_jkt);
    RataRataService_3_Januari_jkt = $("#txt_Rata_rata_ServiceNoType_3_januari_jkt").val();
    var substr_service_type_3_januari_jkt = substr_percent(RataRataService_3_Januari_jkt);
    RataRataService_4_Januari_jkt = $("#txt_Rata_rata_ServiceNoType_4_januari_jkt").val();
    var substr_service_type_4_januari_jkt = substr_percent(RataRataService_4_Januari_jkt);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Januari_jkt = $("#txt_Rata_rata_SalesNoType_1_januari_jkt").val();
    var substr_sales_type_1_januari_jkt = substr_percent(RataRataSales_1_Januari_jkt);
    RataRataSales_2_Januari_jkt = $("#txt_Rata_rata_SalesNoType_2_januari").val();
    var substr_sales_type_2_januari_jkt = substr_percent(RataRataSales_2_Januari_jkt);
    RataRataSales_3_Januari_jkt = $("#txt_Rata_rata_SalesNoType_3_januari").val();
    var substr_sales_type_3_januari_jkt = substr_percent(RataRataSales_3_Januari_jkt);
    RataRataSales_4_Januari_jkt = $("#txt_Rata_rata_SalesNoType_4_januari").val();
    var substr_sales_type_4_januari_jkt = substr_percent(RataRataSales_4_Januari_jkt);
      //end for Type Sales
    //end month January
    //start month Februari
      //start Service
    RataRataService_1_Februari_jkt = $("#txt_Rata_rata_ServiceNoType_1_februari_jkt").val();
    var substr_service_type_1_februari_jkt = substr_percent(RataRataService_1_Februari_jkt);
    RataRataService_2_Februari_jkt = $("#txt_Rata_rata_ServiceNoType_2_februari_jkt").val();
    var substr_service_type_2_februari_jkt = substr_percent(RataRataService_2_Februari_jkt);
    RataRataService_3_Februari_jkt = $("#txt_Rata_rata_ServiceNoType_3_februari_jkt").val();
    var substr_service_type_3_februari_jkt = substr_percent(RataRataService_3_Februari_jkt);
    RataRataService_4_Februari_jkt = $("#txt_Rata_rata_ServiceNoType_4_februari_jkt").val();
    var substr_service_type_4_februari_jkt = substr_percent(RataRataService_4_Februari_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_Februari_jkt = $("#txt_Rata_rata_SalesNoType_1_februari_jkt").val();
    var substr_sales_type_1_februari_jkt = substr_percent(RataRataSales_1_Februari_jkt);
    RataRataSales_2_Februari_jkt = $("#txt_Rata_rata_SalesNoType_2_februari_jkt").val();
    var substr_sales_type_2_februari_jkt = substr_percent(RataRataSales_2_Februari_jkt);
    RataRataSales_3_Februari_jkt = $("#txt_Rata_rata_SalesNoType_3_februari_jkt").val();
    var substr_sales_type_3_februari_jkt = substr_percent(RataRataSales_3_Februari_jkt);
    RataRataSales_4_Februari_jkt = $("#txt_Rata_rata_SalesNoType_4_februari_jkt").val();
    var substr_sales_type_4_februari_jkt = substr_percent(RataRataSales_4_Februari_jkt);
      //end Sales
    //end month Februari
    //start month Maret
      //start Service
    RataRataService_1_Maret_jkt = $("#txt_Rata_rata_ServiceNoType_1_maret_jkt").val();
    var substr_service_type_1_maret_jkt = substr_percent(RataRataService_1_Maret_jkt);
    RataRataService_2_Maret_jkt = $("#txt_Rata_rata_ServiceNoType_2_maret_jkt").val();
    var substr_service_type_2_maret_jkt = substr_percent(RataRataService_2_Maret_jkt);
    RataRataService_3_Maret_jkt = $("#txt_Rata_rata_ServiceNoType_3_maret_jkt").val();
    var substr_service_type_3_maret_jkt = substr_percent(RataRataService_3_Maret_jkt);
    RataRataService_4_Maret_jkt = $("#txt_Rata_rata_ServiceNoType_4_maret_jkt").val();
    var substr_service_type_4_maret_jkt = substr_percent(RataRataService_4_Maret_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_Maret_jkt = $("#txt_Rata_rata_SalesNoType_1_maret_jkt").val();
    var substr_sales_type_1_maret_jkt = substr_percent(RataRataSales_1_Maret_jkt);
    RataRataSales_2_Maret_jkt = $("#txt_Rata_rata_SalesNoType_2_maret_jkt").val();
    var substr_sales_type_2_maret_jkt = substr_percent(RataRataSales_2_Maret_jkt);
    RataRataSales_3_Maret_jkt = $("#txt_Rata_rata_SalesNoType_3_maret_jkt").val();
    var substr_sales_type_3_maret_jkt = substr_percent(RataRataSales_3_Maret_jkt);
    RataRataSales_4_Maret_jkt = $("#txt_Rata_rata_SalesNoType_4_maret_jkt").val();
    var substr_sales_type_4_maret_jkt = substr_percent(RataRataSales_4_Maret_jkt);
      //end Sales
    //end month Maret
    //start month april
      //start Service
    RataRataService_1_April_jkt = $("#txt_Rata_rata_ServiceNoType_1_april_jkt").val();
    var substr_service_type_1_april_jkt = substr_percent(RataRataService_1_April_jkt);
    RataRataService_2_April_jkt = $("#txt_Rata_rata_ServiceNoType_2_april_jkt").val();
    var substr_service_type_2_april_jkt = substr_percent(RataRataService_2_April_jkt);
    RataRataService_3_April_jkt = $("#txt_Rata_rata_ServiceNoType_3_april_jkt").val();
    var substr_service_type_3_april_jkt = substr_percent(RataRataService_3_April_jkt);
    RataRataService_4_April_jkt = $("#txt_Rata_rata_ServiceNoType_4_april_jkt").val();
    var substr_service_type_4_april_jkt = substr_percent(RataRataService_4_April_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_April_jkt = $("#txt_Rata_rata_SalesNoType_1_april_jkt").val();
    var substr_sales_type_1_april_jkt = substr_percent(RataRataSales_1_April_jkt);
    RataRataSales_2_April_jkt = $("#txt_Rata_rata_SalesNoType_2_april_jkt").val();
    var substr_sales_type_2_april_jkt = substr_percent(RataRataSales_2_April_jkt);
    RataRataSales_3_April_jkt = $("#txt_Rata_rata_SalesNoType_3_april_jkt").val();
    var substr_sales_type_3_april_jkt = substr_percent(RataRataSales_3_April_jkt);
    RataRataSales_4_April_jkt = $("#txt_Rata_rata_SalesNoType_4_april_jkt").val();
    var substr_sales_type_4_april_jkt = substr_percent(RataRataSales_4_April_jkt);
      //end Sales
    //end month april
    //start month mei
      //start Service
    RataRataService_1_Mei_jkt = $("#txt_Rata_rata_ServiceNoType_1_mei_jkt").val();
    var substr_service_type_1_mei_jkt = substr_percent(RataRataService_1_Mei_jkt);
    RataRataService_2_Mei_jkt = $("#txt_Rata_rata_ServiceNoType_2_mei_jkt").val();
    var substr_service_type_2_mei_jkt = substr_percent(RataRataService_2_Mei_jkt);
    RataRataService_3_Mei_jkt = $("#txt_Rata_rata_ServiceNoType_3_mei_jkt").val();
    var substr_service_type_3_mei_jkt = substr_percent(RataRataService_3_Mei_jkt);
    RataRataService_4_Mei_jkt = $("#txt_Rata_rata_ServiceNoType_4_mei_jkt").val();
    var substr_service_type_4_mei_jkt = substr_percent(RataRataService_4_Mei_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_Mei_jkt = $("#txt_Rata_rata_SalesNoType_1_mei_jkt").val();
    var substr_sales_type_1_mei_jkt = substr_percent(RataRataSales_1_Mei_jkt);
    RataRataSales_2_Mei_jkt = $("#txt_Rata_rata_SalesNoType_2_mei_jkt").val();
    var substr_sales_type_2_mei_jkt = substr_percent(RataRataSales_2_Mei_jkt);
    RataRataSales_3_Mei_jkt = $("#txt_Rata_rata_SalesNoType_3_mei_jkt").val();
    var substr_sales_type_3_mei_jkt = substr_percent(RataRataSales_3_Mei_jkt);
    RataRataSales_4_Mei_jkt = $("#txt_Rata_rata_SalesNoType_4_mei_jkt").val();
    var substr_sales_type_4_mei_jkt = substr_percent(RataRataSales_4_Mei_jkt);
      //end Sales
    //end month mei
    //start month juni
      //start Service
    RataRataService_1_Juni_jkt = $("#txt_Rata_rata_ServiceNoType_1_juni_jkt").val();
    var substr_service_type_1_juni_jkt = substr_percent(RataRataService_1_Juni_jkt);
    RataRataService_2_Juni_jkt = $("#txt_Rata_rata_ServiceNoType_2_juni_jkt").val();
    var substr_service_type_2_juni_jkt = substr_percent(RataRataService_2_Juni_jkt);
    RataRataService_3_Juni_jkt = $("#txt_Rata_rata_ServiceNoType_3_juni_jkt").val();
    var substr_service_type_3_juni_jkt = substr_percent(RataRataService_3_Juni_jkt);
    RataRataService_4_Juni_jkt = $("#txt_Rata_rata_ServiceNoType_4_juni_jkt").val();
    var substr_service_type_4_juni_jkt = substr_percent(RataRataService_4_Juni_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_Juni_jkt = $("#txt_Rata_rata_SalesNoType_1_juni_jkt").val();
    var substr_sales_type_1_juni_jkt = substr_percent(RataRataSales_1_Juni_jkt);
    RataRataSales_2_Juni_jkt = $("#txt_Rata_rata_SalesNoType_2_juni_jkt").val();
    var substr_sales_type_2_juni_jkt = substr_percent(RataRataSales_2_Juni_jkt);
    RataRataSales_3_Juni_jkt = $("#txt_Rata_rata_SalesNoType_3_juni_jkt").val();
    var substr_sales_type_3_juni_jkt = substr_percent(RataRataSales_3_Juni_jkt);
    RataRataSales_4_Juni_jkt = $("#txt_Rata_rata_SalesNoType_4_juni_jkt").val();
    var substr_sales_type_4_juni_jkt = substr_percent(RataRataSales_4_Juni_jkt);
      //end Sales
    //end month juni
    //start month juli
      //start Service
    RataRataService_1_Juli_jkt = $("#txt_Rata_rata_ServiceNoType_1_juli_jkt").val();
    var substr_service_type_1_juli_jkt = substr_percent(RataRataService_1_Juli_jkt);
    RataRataService_2_Juli_jkt = $("#txt_Rata_rata_ServiceNoType_2_juli_jkt").val();
    var substr_service_type_2_juli_jkt = substr_percent(RataRataService_2_Juli_jkt);
    RataRataService_3_Juli_jkt = $("#txt_Rata_rata_ServiceNoType_3_juli_jkt").val();
    var substr_service_type_3_juli_jkt = substr_percent(RataRataService_3_Juli_jkt);
    RataRataService_4_Juli_jkt = $("#txt_Rata_rata_ServiceNoType_4_juli_jkt").val();
    var substr_service_type_4_juli_jkt = substr_percent(RataRataService_4_Juli_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_Juli_jkt = $("#txt_Rata_rata_SalesNoType_1_juli_jkt").val();
    var substr_sales_type_1_juli_jkt = substr_percent(RataRataSales_1_Juli_jkt);
    RataRataSales_2_Juli_jkt = $("#txt_Rata_rata_SalesNoType_2_juli_jkt").val();
    var substr_sales_type_2_juli_jkt = substr_percent(RataRataSales_2_Juli_jkt);
    RataRataSales_3_Juli_jkt = $("#txt_Rata_rata_SalesNoType_3_juli_jkt").val();
    var substr_sales_type_3_juli_jkt = substr_percent(RataRataSales_3_Juli_jkt);
    RataRataSales_4_Juli_jkt = $("#txt_Rata_rata_SalesNoType_4_juli_jkt").val();
    var substr_sales_type_4_juli_jkt = substr_percent(RataRataSales_4_Juli_jkt);
      //end Sales
    //end month juli
    //start month agustus
      //start Service
    RataRataService_1_Agustus_jkt = $("#txt_Rata_rata_ServiceNoType_1_agustus_jkt").val();
    var substr_service_type_1_agustus_jkt = substr_percent(RataRataService_1_Agustus_jkt);
    RataRataService_2_Agustus_jkt = $("#txt_Rata_rata_ServiceNoType_2_agustus_jkt").val();
    var substr_service_type_2_agustus_jkt = substr_percent(RataRataService_2_Agustus_jkt);
    RataRataService_3_Agustus_jkt = $("#txt_Rata_rata_ServiceNoType_3_agustus_jkt").val();
    var substr_service_type_3_agustus_jkt = substr_percent(RataRataService_3_Agustus_jkt);
    RataRataService_4_Agustus_jkt = $("#txt_Rata_rata_ServiceNoType_4_agustus_jkt").val();
    var substr_service_type_4_agustus_jkt = substr_percent(RataRataService_4_Agustus_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_Agustus_jkt = $("#txt_Rata_rata_SalesNoType_1_agustus_jkt").val();
    var substr_sales_type_1_agustus_jkt = substr_percent(RataRataSales_1_Agustus_jkt);
    RataRataSales_2_Agustus_jkt = $("#txt_Rata_rata_SalesNoType_2_agustus_jkt").val();
    var substr_sales_type_2_agustus_jkt = substr_percent(RataRataSales_2_Agustus_jkt);
    RataRataSales_3_Agustus_jkt = $("#txt_Rata_rata_SalesNoType_3_agustus_jkt").val();
    var substr_sales_type_3_agustus_jkt = substr_percent(RataRataSales_3_Agustus_jkt);
    RataRataSales_4_Agustus_jkt = $("#txt_Rata_rata_SalesNoType_4_agustus_jkt").val();
    var substr_sales_type_4_agustus_jkt = substr_percent(RataRataSales_4_Agustus_jkt);
      //end Sales
    //end month agustus
    //start month september
      //start Service
    RataRataService_1_September_jkt = $("#txt_Rata_rata_ServiceNoType_1_september_jkt").val();
    var substr_service_type_1_september_jkt = substr_percent(RataRataService_1_September_jkt);
    RataRataService_2_September_jkt = $("#txt_Rata_rata_ServiceNoType_2_september_jkt").val();
    var substr_service_type_2_september_jkt = substr_percent(RataRataService_2_September_jkt);
    RataRataService_3_September_jkt = $("#txt_Rata_rata_ServiceNoType_3_september_jkt").val();
    var substr_service_type_3_september_jkt = substr_percent(RataRataService_3_September_jkt);
    RataRataService_4_September_jkt = $("#txt_Rata_rata_ServiceNoType_4_september_jkt").val();
    var substr_service_type_4_september_jkt = substr_percent(RataRataService_4_September_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_September_jkt = $("#txt_Rata_rata_SalesNoType_1_september_jkt").val();
    var substr_sales_type_1_september_jkt = substr_percent(RataRataSales_1_September_jkt);
    RataRataSales_2_September_jkt = $("#txt_Rata_rata_SalesNoType_2_september_jkt").val();
    var substr_sales_type_2_september_jkt = substr_percent(RataRataSales_2_September_jkt);
    RataRataSales_3_September_jkt = $("#txt_Rata_rata_SalesNoType_3_september_jkt").val();
    var substr_sales_type_3_september_jkt = substr_percent(RataRataSales_3_September_jkt);
    RataRataSales_4_September_jkt = $("#txt_Rata_rata_SalesNoType_4_september_jkt").val();
    var substr_sales_type_4_september_jkt = substr_percent(RataRataSales_4_September_jkt);
      //end Sales
    //end month september
    //start month oktober
      //start Service
    RataRataService_1_Oktober_jkt = $("#txt_Rata_rata_ServiceNoType_1_oktober_jkt").val();
    var substr_service_type_1_oktober_jkt = substr_percent(RataRataService_1_Oktober_jkt);
    RataRataService_2_Oktober_jkt = $("#txt_Rata_rata_ServiceNoType_2_oktober_jkt").val();
    var substr_service_type_2_oktober_jkt = substr_percent(RataRataService_2_Oktober_jkt);
    RataRataService_3_Oktober_jkt = $("#txt_Rata_rata_ServiceNoType_3_oktober_jkt").val();
    var substr_service_type_3_oktober_jkt = substr_percent(RataRataService_3_Oktober_jkt);
    RataRataService_4_Oktober_jkt = $("#txt_Rata_rata_ServiceNoType_4_oktober_jkt").val();
    var substr_service_type_4_oktober_jkt = substr_percent(RataRataService_4_Oktober_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_Oktober_jkt = $("#txt_Rata_rata_SalesNoType_1_oktober_jkt").val();
    var substr_sales_type_1_oktober_jkt = substr_percent(RataRataSales_1_Oktober_jkt);
    RataRataSales_2_Oktober_jkt = $("#txt_Rata_rata_SalesNoType_2_oktober_jkt").val();
    var substr_sales_type_2_oktober_jkt = substr_percent(RataRataSales_2_Oktober_jkt);
    RataRataSales_3_Oktober_jkt = $("#txt_Rata_rata_SalesNoType_3_oktober_jkt").val();
    var substr_sales_type_3_oktober_jkt = substr_percent(RataRataSales_3_Oktober_jkt);
    RataRataSales_4_Oktober_jkt = $("#txt_Rata_rata_SalesNoType_4_oktober_jkt").val();
    var substr_sales_type_4_oktober_jkt = substr_percent(RataRataSales_4_Oktober_jkt);
      //end Sales
    //end month oktober
    //start month november
      //start Service
    RataRataService_1_November_jkt = $("#txt_Rata_rata_ServiceNoType_1_november_jkt").val();
    var substr_service_type_1_november_jkt = substr_percent(RataRataService_1_November_jkt);
    RataRataService_2_November_jkt = $("#txt_Rata_rata_ServiceNoType_2_november_jkt").val();
    var substr_service_type_2_november_jkt = substr_percent(RataRataService_2_November_jkt);
    RataRataService_3_November_jkt = $("#txt_Rata_rata_ServiceNoType_3_november_jkt").val();
    var substr_service_type_3_november_jkt = substr_percent(RataRataService_3_November_jkt);
    RataRataService_4_November_jkt = $("#txt_Rata_rata_ServiceNoType_4_november_jkt").val();
    var substr_service_type_4_november_jkt = substr_percent(RataRataService_4_November_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_November_jkt = $("#txt_Rata_rata_SalesNoType_1_november_jkt").val();
    var substr_sales_type_1_november_jkt = substr_percent(RataRataSales_1_November_jkt);
    RataRataSales_2_November_jkt = $("#txt_Rata_rata_SalesNoType_2_november_jkt").val();
    var substr_sales_type_2_november_jkt = substr_percent(RataRataSales_2_November_jkt);
    RataRataSales_3_November_jkt = $("#txt_Rata_rata_SalesNoType_3_november_jkt").val();
    var substr_sales_type_3_november_jkt = substr_percent(RataRataSales_3_November_jkt);
    RataRataSales_4_November_jkt = $("#txt_Rata_rata_SalesNoType_4_november_jkt").val();
    var substr_sales_type_4_november_jkt = substr_percent(RataRataSales_4_November_jkt);
      //end Sales
    //end month november
    //start month desember
      //start Service
    RataRataService_1_Desember_jkt = $("#txt_Rata_rata_ServiceNoType_1_desember_jkt").val();
    var substr_service_type_1_desember_jkt = substr_percent(RataRataService_1_Desember_jkt);
    RataRataService_2_Desember_jkt = $("#txt_Rata_rata_ServiceNoType_2_desember_jkt").val();
    var substr_service_type_2_desember_jkt = substr_percent(RataRataService_2_Desember_jkt);
    RataRataService_3_Desember_jkt = $("#txt_Rata_rata_ServiceNoType_3_desember_jkt").val();
    var substr_service_type_3_desember_jkt = substr_percent(RataRataService_3_Desember_jkt);
    RataRataService_4_Desember_jkt = $("#txt_Rata_rata_ServiceNoType_4_desember_jkt").val();
    var substr_service_type_4_desember_jkt = substr_percent(RataRataService_4_Desember_jkt);
      //end Service
      //Start Sales
    RataRataSales_1_Desember_jkt = $("#txt_Rata_rata_SalesNoType_1_desember_jkt").val();
    var substr_sales_type_1_desember_jkt = substr_percent(RataRataSales_1_Desember_jkt);
    RataRataSales_2_Desember_jkt = $("#txt_Rata_rata_SalesNoType_2_desember_jkt").val();
    var substr_sales_type_2_desember_jkt = substr_percent(RataRataSales_2_Desember_jkt);
    RataRataSales_3_Desember_jkt = $("#txt_Rata_rata_SalesNoType_3_desember_jkt").val();
    var substr_sales_type_3_desember_jkt = substr_percent(RataRataSales_3_Desember_jkt);
    RataRataSales_4_Desember_jkt = $("#txt_Rata_rata_SalesNoType_4_desember_jkt").val();
    var substr_sales_type_4_desember_jkt = substr_percent(RataRataSales_4_Desember_jkt);
      //end Sales
    //end month desember

    MonthNow = $("#month_now").val();
    BeforeMonth = $("#before_month").val();

    //start hitung rata-rata
      //start month januari
      //start service
    var SumRataRataService_1_jkt = parseInt(substr_service_type_1_januari_jkt) + parseInt(substr_service_type_1_februari_jkt) + parseInt(substr_service_type_1_maret_jkt) + parseInt(substr_service_type_1_april_jkt) + parseInt(substr_service_type_1_mei_jkt) + parseInt(substr_service_type_1_juni_jkt) + parseInt(substr_service_type_1_juli_jkt) + parseInt(substr_service_type_1_agustus_jkt) + parseInt(substr_service_type_1_september_jkt) + parseInt(substr_service_type_1_oktober_jkt) + parseInt(substr_service_type_1_november_jkt) + parseInt(substr_service_type_1_desember_jkt);
    var TotalRataRataService_1_jkt = parseInt(SumRataRataService_1_jkt)/parseInt(BeforeMonth);
    var FixTotalRataRataService_1_jkt = parseFloat(TotalRataRataService_1_jkt).toFixed(0)+'%';
      //------
    var SumRataRataService_2_jkt = parseInt(substr_service_type_2_januari_jkt) + parseInt(substr_service_type_2_februari_jkt) + parseInt(substr_service_type_2_maret_jkt) + parseInt(substr_service_type_2_april_jkt) + parseInt(substr_service_type_2_mei_jkt) + parseInt(substr_service_type_2_juni_jkt) + parseInt(substr_service_type_2_juli_jkt) + parseInt(substr_service_type_2_agustus_jkt) + parseInt(substr_service_type_2_september_jkt) + parseInt(substr_service_type_2_oktober_jkt) + parseInt(substr_service_type_2_november_jkt) + parseInt(substr_service_type_2_desember_jkt);
    var TotalRataRataService_2_jkt = parseInt(SumRataRataService_2_jkt)/parseInt(BeforeMonth);
    var FixTotalRataRataService_2_jkt = parseFloat(TotalRataRataService_2_jkt).toFixed(0)+'%';
      //------
    var SumRataRataService_3_jkt = parseInt(substr_service_type_3_januari_jkt) + parseInt(substr_service_type_3_februari_jkt) + parseInt(substr_service_type_3_maret_jkt) + parseInt(substr_service_type_3_april_jkt) + parseInt(substr_service_type_3_mei_jkt) + parseInt(substr_service_type_3_juni_jkt) + parseInt(substr_service_type_3_juli_jkt) + parseInt(substr_service_type_3_agustus_jkt) + parseInt(substr_service_type_3_september_jkt) + parseInt(substr_service_type_3_oktober_jkt) + parseInt(substr_service_type_3_november_jkt) + parseInt(substr_service_type_3_desember_jkt);
    var TotalRataRataService_3_jkt = parseInt(SumRataRataService_3_jkt)/parseInt(BeforeMonth);
    var FixTotalRataRataService_3_jkt = parseFloat(TotalRataRataService_3_jkt).toFixed(0)+'%';
      //------
    var SumRataRataService_4_jkt = parseInt(substr_service_type_4_januari_jkt) + parseInt(substr_service_type_4_februari_jkt) + parseInt(substr_service_type_4_maret_jkt) + parseInt(substr_service_type_4_april_jkt) + parseInt(substr_service_type_4_mei_jkt) + parseInt(substr_service_type_4_juni_jkt) + parseInt(substr_service_type_4_juli_jkt) + parseInt(substr_service_type_4_agustus_jkt) + parseInt(substr_service_type_4_september_jkt) + parseInt(substr_service_type_4_oktober_jkt) + parseInt(substr_service_type_4_november_jkt) + parseInt(substr_service_type_4_desember_jkt);
    var TotalRataRataService_4_jkt = parseInt(SumRataRataService_4_jkt)/parseInt(BeforeMonth);
    var FixTotalRataRataService_4_jkt = parseFloat(TotalRataRataService_4_jkt).toFixed(0)+'%';
      //end service
      //start sales
    var SumRataRataSales_1_jkt = parseInt(substr_sales_type_1_januari_jkt) + parseInt(substr_sales_type_1_februari_jkt) + parseInt(substr_sales_type_1_maret_jkt) + parseInt(substr_sales_type_1_april_jkt) + parseInt(substr_sales_type_1_mei_jkt) + parseInt(substr_sales_type_1_juni_jkt) + parseInt(substr_sales_type_1_juli_jkt) + parseInt(substr_sales_type_1_agustus_jkt) + parseInt(substr_sales_type_1_september_jkt) + parseInt(substr_sales_type_1_oktober_jkt) + parseInt(substr_sales_type_1_november_jkt) + parseInt(substr_sales_type_1_desember_jkt);
    var TotalRataRataSales_1_jkt = parseInt(SumRataRataSales_1_jkt)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_1_jkt = parseFloat(TotalRataRataSales_1_jkt).toFixed(0)+'%';
      //------
    var SumRataRataSales_2_jkt = parseInt(substr_sales_type_2_januari_jkt) + parseInt(substr_sales_type_2_februari_jkt) + parseInt(substr_sales_type_2_maret_jkt) + parseInt(substr_sales_type_2_april_jkt) + parseInt(substr_sales_type_2_mei_jkt) + parseInt(substr_sales_type_2_juni_jkt) + parseInt(substr_sales_type_2_juli_jkt) + parseInt(substr_sales_type_2_agustus_jkt) + parseInt(substr_sales_type_2_september_jkt) + parseInt(substr_sales_type_2_oktober_jkt) + parseInt(substr_sales_type_2_november_jkt) + parseInt(substr_sales_type_2_desember_jkt);
    var TotalRataRataSales_2_jkt = parseInt(SumRataRataSales_2_jkt)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_2_jkt = parseFloat(TotalRataRataSales_2_jkt).toFixed(0)+'%';
      //------
    var SumRataRataSales_3_jkt = parseInt(substr_sales_type_3_januari_jkt) + parseInt(substr_sales_type_3_februari_jkt) + parseInt(substr_sales_type_3_maret_jkt) + parseInt(substr_sales_type_3_april_jkt) + parseInt(substr_sales_type_3_mei_jkt) + parseInt(substr_sales_type_3_juni_jkt) + parseInt(substr_sales_type_3_juli_jkt) + parseInt(substr_sales_type_3_agustus_jkt) + parseInt(substr_sales_type_3_september_jkt) + parseInt(substr_sales_type_3_oktober_jkt) + parseInt(substr_sales_type_3_november_jkt) + parseInt(substr_sales_type_3_desember_jkt);
    var TotalRataRataSales_3_jkt = parseInt(SumRataRataSales_3_jkt)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_3_jkt = parseFloat(TotalRataRataSales_3_jkt).toFixed(0)+'%';
      //------
    var SumRataRataSales_4_jkt = parseInt(substr_sales_type_4_januari_jkt) + parseInt(substr_sales_type_4_februari_jkt) + parseInt(substr_sales_type_4_maret_jkt) + parseInt(substr_sales_type_4_april_jkt) + parseInt(substr_sales_type_4_mei_jkt) + parseInt(substr_sales_type_4_juni_jkt) + parseInt(substr_sales_type_4_juli_jkt) + parseInt(substr_sales_type_4_agustus_jkt) + parseInt(substr_sales_type_4_september_jkt) + parseInt(substr_sales_type_4_oktober_jkt) + parseInt(substr_sales_type_4_november_jkt) + parseInt(substr_sales_type_4_desember_jkt);
    var TotalRataRataSales_4_jkt = parseInt(SumRataRataSales_4_jkt)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_4_jkt = parseFloat(TotalRataRataSales_4_jkt).toFixed(0)+'%';
      //end sales
      //end month januari
    //end hitung rata-rata //average_sales_type_1_all_jkt

    //start januari
      //start service
    $("#average_service_type_1_all_jkt").val(substr_percent(FixTotalRataRataService_1_jkt));  
    $('#p_service_type_1_all_jkt').html(FixTotalRataRataService_1_jkt);
    $("#average_service_type_2_all_jkt").val(substr_percent(FixTotalRataRataService_2_jkt));  
    $('#p_service_type_2_all_jkt').html(FixTotalRataRataService_2_jkt);
    $("#average_service_type_3_all_jkt").val(substr_percent(FixTotalRataRataService_3_jkt));  
    $('#p_service_type_3_all_jkt').html(FixTotalRataRataService_3_jkt);
    $("#average_service_type_4_all_jkt").val(substr_percent(FixTotalRataRataService_4_jkt));  
    $('#p_service_type_4_all_jkt').html(FixTotalRataRataService_4_jkt);
      //end service
      //start sales
    $("#average_sales_type_1_all_jkt").val(substr_percent(FixTotalRataRataSales_1_jkt));  
    $('#p_sales_type_1_all_jkt').html(FixTotalRataRataSales_1_jkt);
    $("#average_sales_type_2_all_jkt").val(substr_percent(FixTotalRataRataSales_2_jkt));  
    $('#p_sales_type_2_all_jkt').html(FixTotalRataRataSales_2_jkt);
    $("#average_sales_type_3_all_jkt").val(substr_percent(FixTotalRataRataSales_3_jkt));  
    $('#p_sales_type_3_all_jkt').html(FixTotalRataRataSales_3_jkt);
    $("#average_sales_type_4_all_jkt").val(substr_percent(FixTotalRataRataSales_4_jkt));  
    $('#p_sales_type_4_all_jkt').html(FixTotalRataRataSales_4_jkt);
      //end sales
    //end januari

    // alert(RataRataSales_3_Mei);//just for testing data with alert
    // AverageSalesType_1 average_sales_type_1
    // document.getElementById("demo").innerHTML = res; // for tag <p>
    // alert(RataRataSales_1_Januari_jkt);
    //start Januari
      //start service
      $("#service_type_1_januari_jkt").val(substr_service_type_1_januari_jkt);
      $('#p_service_type_1_januari_jkt').html(RataRataService_1_Januari_jkt);
      $("#service_type_2_januari_jkt").val(substr_service_type_2_januari_jkt);
      $('#p_service_type_2_januari_jkt').html(RataRataService_2_Januari_jkt);
      $("#service_type_3_januari_jkt").val(substr_service_type_3_januari_jkt);
      $('#p_service_type_3_januari_jkt').html(RataRataService_3_Januari_jkt);
      $("#service_type_4_januari_jkt").val(substr_service_type_4_januari_jkt);
      $('#p_service_type_4_januari_jkt').html(RataRataService_4_Januari_jkt);
      //end service
      //start sales
      $("#sales_type_1_januari_jkt").val(substr_sales_type_1_januari_jkt);
      $('#p_sales_type_1_januari_jkt').html(RataRataSales_1_Januari_jkt);
      $("#sales_type_2_januari_jkt").val(substr_sales_type_2_januari_jkt);
      $('#p_sales_type_2_januari_jkt').html(RataRataSales_2_Januari_jkt);
      $("#sales_type_3_januari_jkt").val(substr_sales_type_3_januari_jkt);
      $('#p_sales_type_3_januari_jkt').html(RataRataSales_3_Januari_jkt);
      $("#sales_type_4_januari_jkt").val(substr_sales_type_4_januari_jkt);
      $('#p_sales_type_4_januari_jkt').html(RataRataSales_4_Januari_jkt);
      //end sales
    //end Januari
    //start Februari
      //start service
      $("#service_type_1_februari_jkt").val(substr_service_type_1_februari_jkt);
      $('#p_service_type_1_februari_jkt').html(RataRataService_1_Februari_jkt);
      $("#service_type_2_februari_jkt").val(substr_service_type_2_februari_jkt);
      $('#p_service_type_2_februari_jkt').html(RataRataService_2_Februari_jkt);
      $("#service_type_3_februari_jkt").val(substr_service_type_3_februari_jkt);
      $('#p_service_type_3_februari_jkt').html(RataRataService_3_Februari_jkt);
      $("#service_type_4_februari_jkt").val(substr_service_type_4_februari_jkt);
      $('#p_service_type_4_februari_jkt').html(RataRataService_4_Februari_jkt);
      //end service
      //start sales
      $("#sales_type_1_februari_jkt").val(substr_sales_type_1_februari_jkt);
      $('#p_sales_type_1_februari_jkt').html(RataRataSales_1_Februari_jkt);
      $("#sales_type_2_februari_jkt").val(substr_sales_type_2_februari_jkt);
      $('#p_sales_type_2_februari_jkt').html(RataRataSales_2_Februari_jkt);
      $("#sales_type_3_februari_jkt").val(substr_sales_type_3_februari_jkt);
      $('#p_sales_type_3_februari_jkt').html(RataRataSales_3_Februari_jkt);
      $("#sales_type_4_februari_jkt").val(substr_sales_type_4_februari_jkt);
      $('#p_sales_type_4_februari_jkt').html(RataRataSales_4_Februari_jkt);
      //end sales
    //end Februari
    //start maret
      //start service
      $("#service_type_1_maret_jkt").val(substr_service_type_1_maret_jkt);
      $('#p_service_type_1_maret_jkt').html(RataRataService_1_Maret_jkt);
      $("#service_type_2_maret_jkt").val(substr_service_type_2_maret_jkt);
      $('#p_service_type_2_maret_jkt').html(RataRataService_2_Maret_jkt);
      $("#service_type_3_maret_jkt").val(substr_service_type_3_maret_jkt);
      $('#p_service_type_3_maret_jkt').html(RataRataService_3_Maret_jkt);
      $("#service_type_4_maret_jkt").val(substr_service_type_4_maret_jkt);
      $('#p_service_type_4_maret_jkt').html(RataRataService_4_Maret_jkt);
      //end service
      //start sales
      $("#sales_type_1_maret_jkt").val(substr_sales_type_1_maret_jkt);
      $('#p_sales_type_1_maret_jkt').html(RataRataSales_1_Maret_jkt);
      $("#sales_type_2_maret_jkt").val(substr_sales_type_2_maret_jkt);
      $('#p_sales_type_2_maret_jkt').html(RataRataSales_2_Maret_jkt);
      $("#sales_type_3_maret_jkt").val(substr_sales_type_3_maret_jkt);
      $('#p_sales_type_3_maret_jkt').html(RataRataSales_3_Maret_jkt);
      $("#sales_type_4_maret_jkt").val(substr_sales_type_4_maret_jkt);
      $('#p_sales_type_4_maret_jkt').html(RataRataSales_4_Maret_jkt);
      //end sales
    //end maret
    //start april
      //start service
      $("#service_type_1_april_jkt").val(substr_service_type_1_april_jkt);
      $('#p_service_type_1_april_jkt').html(RataRataService_1_April_jkt);
      $("#service_type_2_april_jkt").val(substr_service_type_2_april_jkt);
      $('#p_service_type_2_april_jkt').html(RataRataService_2_April_jkt);
      $("#service_type_3_april_jkt").val(substr_service_type_3_april_jkt);
      $('#p_service_type_3_april_jkt').html(RataRataService_3_April_jkt);
      $("#service_type_4_april_jkt").val(substr_service_type_4_april_jkt);
      $('#p_service_type_4_april_jkt').html(RataRataService_4_April_jkt);
      //end service
      //start sales
      $("#sales_type_1_april_jkt").val(substr_sales_type_1_april_jkt);
      $('#p_sales_type_1_april_jkt').html(RataRataSales_1_April_jkt);
      $("#sales_type_2_april_jkt").val(substr_sales_type_2_april_jkt);
      $('#p_sales_type_2_april_jkt').html(RataRataSales_2_April_jkt);
      $("#sales_type_3_april_jkt").val(substr_sales_type_3_april_jkt);
      $('#p_sales_type_3_april_jkt').html(RataRataSales_3_April_jkt);
      $("#sales_type_4_april_jkt").val(substr_sales_type_4_april_jkt);
      $('#p_sales_type_4_april_jkt').html(RataRataSales_4_April_jkt);
      //end sales
    //end april
    //start mei
      //start service
      $("#service_type_1_mei_jkt").val(substr_service_type_1_mei_jkt);
      $('#p_service_type_1_mei_jkt').html(RataRataService_1_Mei_jkt);
      $("#service_type_2_mei_jkt").val(substr_service_type_2_mei_jkt);
      $('#p_service_type_2_mei_jkt').html(RataRataService_2_Mei_jkt);
      $("#service_type_3_mei_jkt").val(substr_service_type_3_mei_jkt);
      $('#p_service_type_3_mei_jkt').html(RataRataService_3_Mei_jkt);
      $("#service_type_4_mei_jkt").val(substr_service_type_4_mei_jkt);
      $('#p_service_type_4_mei_jkt').html(RataRataService_4_Mei_jkt);
      //end service
      //start sales
      $("#sales_type_1_mei_jkt").val(substr_sales_type_1_mei_jkt);
      $('#p_sales_type_1_mei_jkt').html(RataRataSales_1_Mei_jkt);
      $("#sales_type_2_mei_jkt").val(substr_sales_type_2_mei_jkt);
      $('#p_sales_type_2_mei_jkt').html(RataRataSales_2_Mei_jkt);
      $("#sales_type_3_mei_jkt").val(substr_sales_type_3_mei_jkt);
      $('#p_sales_type_3_mei_jkt').html(RataRataSales_3_Mei_jkt);
      $("#sales_type_4_mei_jkt").val(substr_sales_type_4_mei_jkt);
      $('#p_sales_type_4_mei_jkt').html(RataRataSales_4_Mei_jkt);
      //end sales
    //end mei
    //start juni
      //start service
      $("#service_type_1_juni_jkt").val(substr_service_type_1_juni_jkt);
      $('#p_service_type_1_juni_jkt').html(RataRataService_1_Juni_jkt);
      $("#service_type_2_juni_jkt").val(substr_service_type_2_juni_jkt);
      $('#p_service_type_2_juni_jkt').html(RataRataService_2_Juni_jkt);
      $("#service_type_3_juni_jkt").val(substr_service_type_3_juni_jkt);
      $('#p_service_type_3_juni_jkt').html(RataRataService_3_Juni_jkt);
      $("#service_type_4_juni_jkt").val(substr_service_type_4_juni_jkt);
      $('#p_service_type_4_juni_jkt').html(RataRataService_4_Juni_jkt);
      //end service
      //start sales
      $("#sales_type_1_juni_jkt").val(substr_sales_type_1_juni_jkt);
      $('#p_sales_type_1_juni_jkt').html(RataRataSales_1_Juni_jkt);
      $("#sales_type_2_juni_jkt").val(substr_sales_type_2_juni_jkt);
      $('#p_sales_type_2_juni_jkt').html(RataRataSales_2_Juni_jkt);
      $("#sales_type_3_juni_jkt").val(substr_sales_type_3_juni_jkt);
      $('#p_sales_type_3_juni_jkt').html(RataRataSales_3_Juni_jkt);
      $("#sales_type_4_juni_jkt").val(substr_sales_type_4_juni_jkt);
      $('#p_sales_type_4_juni_jkt').html(RataRataSales_4_Juni_jkt);
      //end sales
    //end juni
    //start juli
      //start service
      $("#service_type_1_juli_jkt").val(substr_service_type_1_juli_jkt);
      $('#p_service_type_1_juli_jkt').html(RataRataService_1_Juli_jkt);
      $("#service_type_2_juli_jkt").val(substr_service_type_2_juli_jkt);
      $('#p_service_type_2_juli_jkt').html(RataRataService_2_Juli_jkt);
      $("#service_type_3_juli_jkt").val(substr_service_type_3_juli_jkt);
      $('#p_service_type_3_juli_jkt').html(RataRataService_3_Juli_jkt);
      $("#service_type_4_juli_jkt").val(substr_service_type_4_juli_jkt);
      $('#p_service_type_4_juli_jkt').html(RataRataService_4_Juli_jkt);
      //end service
      //start sales
      $("#sales_type_1_juli_jkt").val(substr_sales_type_1_juli_jkt);
      $('#p_sales_type_1_juli_jkt').html(RataRataSales_1_Juli_jkt);
      $("#sales_type_2_juli_jkt").val(substr_sales_type_2_juli_jkt);
      $('#p_sales_type_2_juli_jkt').html(RataRataSales_2_Juli_jkt);
      $("#sales_type_3_juli_jkt").val(substr_sales_type_3_juli_jkt);
      $('#p_sales_type_3_juli_jkt').html(RataRataSales_3_Juli_jkt);
      $("#sales_type_4_juli_jkt").val(substr_sales_type_4_juli_jkt);
      $('#p_sales_type_4_juli_jkt').html(RataRataSales_4_Juli_jkt);
      //end sales
    //end juli
    //start agustus
      //start service
      $("#service_type_1_agustus_jkt").val(substr_service_type_1_agustus_jkt);
      $('#p_service_type_1_agustus_jkt').html(RataRataService_1_Agustus_jkt);
      $("#service_type_2_agustus_jkt").val(substr_service_type_2_agustus_jkt);
      $('#p_service_type_2_agustus_jkt').html(RataRataService_2_Agustus_jkt);
      $("#service_type_3_agustus_jkt").val(substr_service_type_3_agustus_jkt);
      $('#p_service_type_3_agustus_jkt').html(RataRataService_3_Agustus_jkt);
      $("#service_type_4_agustus_jkt").val(substr_service_type_4_agustus_jkt);
      $('#p_service_type_4_agustus_jkt').html(RataRataService_4_Agustus_jkt);
      //end service
      //start sales
      $("#sales_type_1_agustus_jkt").val(substr_sales_type_1_agustus_jkt);
      $('#p_sales_type_1_agustus_jkt').html(RataRataSales_1_Agustus_jkt);
      $("#sales_type_2_agustus_jkt").val(substr_sales_type_2_agustus_jkt);
      $('#p_sales_type_2_agustus_jkt').html(RataRataSales_2_Agustus_jkt);
      $("#sales_type_3_agustus_jkt").val(substr_sales_type_3_agustus_jkt);
      $('#p_sales_type_3_agustus_jkt').html(RataRataSales_3_Agustus_jkt);
      $("#sales_type_4_agustus_jkt").val(substr_sales_type_4_agustus_jkt);
      $('#p_sales_type_4_agustus_jkt').html(RataRataSales_4_Agustus_jkt);
      //end sales
    //end agustus
    //start september
      //start service
      $("#service_type_1_september_jkt").val(substr_service_type_1_september_jkt);
      $('#p_service_type_1_september_jkt').html(RataRataService_1_September_jkt);
      $("#service_type_2_september_jkt").val(substr_service_type_2_september_jkt);
      $('#p_service_type_2_september_jkt').html(RataRataService_2_September_jkt);
      $("#service_type_3_september_jkt").val(substr_service_type_3_september_jkt);
      $('#p_service_type_3_september_jkt').html(RataRataService_3_September_jkt);
      $("#service_type_4_september_jkt").val(substr_service_type_4_september_jkt);
      $('#p_service_type_4_september_jkt').html(RataRataService_4_September_jkt);
      //end service
      //start sales
      $("#sales_type_1_september_jkt").val(substr_sales_type_1_september_jkt);
      $('#p_sales_type_1_september_jkt').html(RataRataSales_1_September_jkt);
      $("#sales_type_2_september_jkt").val(substr_sales_type_2_september_jkt);
      $('#p_sales_type_2_september_jkt').html(RataRataSales_2_September_jkt);
      $("#sales_type_3_september_jkt").val(substr_sales_type_3_september_jkt);
      $('#p_sales_type_3_september_jkt').html(RataRataSales_3_September_jkt);
      $("#sales_type_4_september_jkt").val(substr_sales_type_4_september_jkt);
      $('#p_sales_type_4_september_jkt').html(RataRataSales_4_September_jkt);
      //end sales
    //end september
    //start oktober
      //start service
      $("#service_type_1_oktober_jkt").val(substr_service_type_1_oktober_jkt);
      $('#p_service_type_1_oktober_jkt').html(RataRataService_1_Oktober_jkt);
      $("#service_type_2_oktober_jkt").val(substr_service_type_2_oktober_jkt);
      $('#p_service_type_2_oktober_jkt').html(RataRataService_2_Oktober_jkt);
      $("#service_type_3_oktober_jkt").val(substr_service_type_3_oktober_jkt);
      $('#p_service_type_3_oktober_jkt').html(RataRataService_3_Oktober_jkt);
      $("#service_type_4_oktober_jkt").val(substr_service_type_4_oktober_jkt);
      $('#p_service_type_4_oktober_jkt').html(RataRataService_4_Oktober_jkt);
      //end service
      //start sales
      $("#sales_type_1_oktober_jkt").val(substr_sales_type_1_oktober_jkt);
      $('#p_sales_type_1_oktober_jkt').html(RataRataSales_1_Oktober_jkt);
      $("#sales_type_2_oktober_jkt").val(substr_sales_type_2_oktober_jkt);
      $('#p_sales_type_2_oktober_jkt').html(RataRataSales_2_Oktober_jkt);
      $("#sales_type_3_oktober_jkt").val(substr_sales_type_3_oktober_jkt);
      $('#p_sales_type_3_oktober_jkt').html(RataRataSales_3_Oktober_jkt);
      $("#sales_type_4_oktober_jkt").val(substr_sales_type_4_oktober_jkt);
      $('#p_sales_type_4_oktober_jkt').html(RataRataSales_4_Oktober_jkt);
      //end sales
    //end oktober
    //start november
      //start service
      $("#service_type_1_november_jkt").val(substr_service_type_1_november_jkt);
      $('#p_service_type_1_november_jkt').html(RataRataService_1_November_jkt);
      $("#service_type_2_november_jkt").val(substr_service_type_2_november_jkt);
      $('#p_service_type_2_november_jkt').html(RataRataService_2_November_jkt);
      $("#service_type_3_november_jkt").val(substr_service_type_3_november_jkt);
      $('#p_service_type_3_november_jkt').html(RataRataService_3_November_jkt);
      $("#service_type_4_november_jkt").val(substr_service_type_4_november_jkt);
      $('#p_service_type_4_november_jkt').html(RataRataService_4_November_jkt);
      //end service
      //start sales
      $("#sales_type_1_november_jkt").val(substr_sales_type_1_november_jkt);
      $('#p_sales_type_1_november_jkt').html(RataRataSales_1_November_jkt);
      $("#sales_type_2_november_jkt").val(substr_sales_type_2_november_jkt);
      $('#p_sales_type_2_november_jkt').html(RataRataSales_2_November_jkt);
      $("#sales_type_3_november_jkt").val(substr_sales_type_3_november_jkt);
      $('#p_sales_type_3_november_jkt').html(RataRataSales_3_November_jkt);
      $("#sales_type_4_november_jkt").val(substr_sales_type_4_november_jkt);
      $('#p_sales_type_4_november_jkt').html(RataRataSales_4_November_jkt);
      //end sales
    //end november
    //start desember
      //start service
      $("#service_type_1_desember_jkt").val(substr_service_type_1_desember_jkt);
      $('#p_service_type_1_desember_jkt').html(RataRataService_1_Desember_jkt);
      $("#service_type_2_desember_jkt").val(substr_service_type_2_desember_jkt);
      $('#p_service_type_2_desember_jkt').html(RataRataService_2_Desember_jkt);
      $("#service_type_3_desember_jkt").val(substr_service_type_3_desember_jkt);
      $('#p_service_type_3_desember_jkt').html(RataRataService_3_Desember_jkt);
      $("#service_type_4_desember_jkt").val(substr_service_type_4_desember_jkt);
      $('#p_service_type_4_desember_jkt').html(RataRataService_4_Desember_jkt);
      //end service
      //start sales
      $("#sales_type_1_desember_jkt").val(substr_sales_type_1_desember_jkt);
      $('#p_sales_type_1_desember_jkt').html(RataRataSales_1_Desember_jkt);
      $("#sales_type_2_desember_jkt").val(substr_sales_type_2_desember_jkt);
      $('#p_sales_type_2_desember_jkt').html(RataRataSales_2_Desember_jkt);
      $("#sales_type_3_desember_jkt").val(substr_sales_type_3_desember_jkt);
      $('#p_sales_type_3_desember_jkt').html(RataRataSales_3_Desember_jkt);
      $("#sales_type_4_desember_jkt").val(substr_sales_type_4_desember_jkt);
      $('#p_sales_type_4_desember_jkt').html(RataRataSales_4_Desember_jkt);
      //end sales
    //end desember

    //start tag p
    // $('#p_sales_type_1_agustus').html(RataRataSales_1_Agustus);//not used
    //end tag p
  }
  //END FOR AREA SEMUA CABANG JAKARTA

  //START FOR AREA SEMUA CABANG KALTIM
  function get_rata_rata_every_month_peryear_kaltim(){
    x = $("#txt_Rata_rata_ServiceNoType_4_maret_kaltim").val();
    // alert(x);
    //start month January
      //start for Tyoe Service
    RataRataService_1_Januari_kaltim = $("#txt_Rata_rata_ServiceNoType_1_januari_kaltim").val();
    var substr_service_type_1_januari_kaltim = substr_percent(RataRataService_1_Januari_kaltim);
    RataRataService_2_Januari_kaltim = $("#txt_Rata_rata_ServiceNoType_2_januari_kaltim").val();
    var substr_service_type_2_januari_kaltim = substr_percent(RataRataService_2_Januari_kaltim);
    RataRataService_3_Januari_kaltim = $("#txt_Rata_rata_ServiceNoType_3_januari_kaltim").val();
    var substr_service_type_3_januari_kaltim = substr_percent(RataRataService_3_Januari_kaltim);
    RataRataService_4_Januari_kaltim = $("#txt_Rata_rata_ServiceNoType_4_januari_kaltim").val();
    var substr_service_type_4_januari_kaltim = substr_percent(RataRataService_4_Januari_kaltim);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Januari_kaltim = $("#txt_Rata_rata_SalesNoType_1_januari_kaltim").val();
    var substr_sales_type_1_januari_kaltim = substr_percent(RataRataSales_1_Januari_kaltim);
    RataRataSales_2_Januari_kaltim = $("#txt_Rata_rata_SalesNoType_2_januari").val();
    var substr_sales_type_2_januari_kaltim = substr_percent(RataRataSales_2_Januari_kaltim);
    RataRataSales_3_Januari_kaltim = $("#txt_Rata_rata_SalesNoType_3_januari").val();
    var substr_sales_type_3_januari_kaltim = substr_percent(RataRataSales_3_Januari_kaltim);
    RataRataSales_4_Januari_kaltim = $("#txt_Rata_rata_SalesNoType_4_januari").val();
    var substr_sales_type_4_januari_kaltim = substr_percent(RataRataSales_4_Januari_kaltim);
      //end for Type Sales
    //end month January
    //start month Februari
      //start Service
    RataRataService_1_Februari_kaltim = $("#txt_Rata_rata_ServiceNoType_1_februari_kaltim").val();
    var substr_service_type_1_februari_kaltim = substr_percent(RataRataService_1_Februari_kaltim);
    RataRataService_2_Februari_kaltim = $("#txt_Rata_rata_ServiceNoType_2_februari_kaltim").val();
    var substr_service_type_2_februari_kaltim = substr_percent(RataRataService_2_Februari_kaltim);
    RataRataService_3_Februari_kaltim = $("#txt_Rata_rata_ServiceNoType_3_februari_kaltim").val();
    var substr_service_type_3_februari_kaltim = substr_percent(RataRataService_3_Februari_kaltim);
    RataRataService_4_Februari_kaltim = $("#txt_Rata_rata_ServiceNoType_4_februari_kaltim").val();
    var substr_service_type_4_februari_kaltim = substr_percent(RataRataService_4_Februari_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_Februari_kaltim = $("#txt_Rata_rata_SalesNoType_1_februari_kaltim").val();
    var substr_sales_type_1_februari_kaltim = substr_percent(RataRataSales_1_Februari_kaltim);
    RataRataSales_2_Februari_kaltim = $("#txt_Rata_rata_SalesNoType_2_februari_kaltim").val();
    var substr_sales_type_2_februari_kaltim = substr_percent(RataRataSales_2_Februari_kaltim);
    RataRataSales_3_Februari_kaltim = $("#txt_Rata_rata_SalesNoType_3_februari_kaltim").val();
    var substr_sales_type_3_februari_kaltim = substr_percent(RataRataSales_3_Februari_kaltim);
    RataRataSales_4_Februari_kaltim = $("#txt_Rata_rata_SalesNoType_4_februari_kaltim").val();
    var substr_sales_type_4_februari_kaltim = substr_percent(RataRataSales_4_Februari_kaltim);
      //end Sales
    //end month Februari
    //start month Maret
      //start Service
    RataRataService_1_Maret_kaltim = $("#txt_Rata_rata_ServiceNoType_1_maret_kaltim").val();
    var substr_service_type_1_maret_kaltim = substr_percent(RataRataService_1_Maret_kaltim);
    RataRataService_2_Maret_kaltim = $("#txt_Rata_rata_ServiceNoType_2_maret_kaltim").val();
    var substr_service_type_2_maret_kaltim = substr_percent(RataRataService_2_Maret_kaltim);
    RataRataService_3_Maret_kaltim = $("#txt_Rata_rata_ServiceNoType_3_maret_kaltim").val();
    var substr_service_type_3_maret_kaltim = substr_percent(RataRataService_3_Maret_kaltim);
    RataRataService_4_Maret_kaltim = $("#txt_Rata_rata_ServiceNoType_4_maret_kaltim").val();
    var substr_service_type_4_maret_kaltim = substr_percent(RataRataService_4_Maret_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_Maret_kaltim = $("#txt_Rata_rata_SalesNoType_1_maret_kaltim").val();
    var substr_sales_type_1_maret_kaltim = substr_percent(RataRataSales_1_Maret_kaltim);
    RataRataSales_2_Maret_kaltim = $("#txt_Rata_rata_SalesNoType_2_maret_kaltim").val();
    var substr_sales_type_2_maret_kaltim = substr_percent(RataRataSales_2_Maret_kaltim);
    RataRataSales_3_Maret_kaltim = $("#txt_Rata_rata_SalesNoType_3_maret_kaltim").val();
    var substr_sales_type_3_maret_kaltim = substr_percent(RataRataSales_3_Maret_kaltim);
    RataRataSales_4_Maret_kaltim = $("#txt_Rata_rata_SalesNoType_4_maret_kaltim").val();
    var substr_sales_type_4_maret_kaltim = substr_percent(RataRataSales_4_Maret_kaltim);
      //end Sales
    //end month Maret
    //start month april
      //start Service
    RataRataService_1_April_kaltim = $("#txt_Rata_rata_ServiceNoType_1_april_kaltim").val();
    var substr_service_type_1_april_kaltim = substr_percent(RataRataService_1_April_kaltim);
    RataRataService_2_April_kaltim = $("#txt_Rata_rata_ServiceNoType_2_april_kaltim").val();
    var substr_service_type_2_april_kaltim = substr_percent(RataRataService_2_April_kaltim);
    RataRataService_3_April_kaltim = $("#txt_Rata_rata_ServiceNoType_3_april_kaltim").val();
    var substr_service_type_3_april_kaltim = substr_percent(RataRataService_3_April_kaltim);
    RataRataService_4_April_kaltim = $("#txt_Rata_rata_ServiceNoType_4_april_kaltim").val();
    var substr_service_type_4_april_kaltim = substr_percent(RataRataService_4_April_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_April_kaltim = $("#txt_Rata_rata_SalesNoType_1_april_kaltim").val();
    var substr_sales_type_1_april_kaltim = substr_percent(RataRataSales_1_April_kaltim);
    RataRataSales_2_April_kaltim = $("#txt_Rata_rata_SalesNoType_2_april_kaltim").val();
    var substr_sales_type_2_april_kaltim = substr_percent(RataRataSales_2_April_kaltim);
    RataRataSales_3_April_kaltim = $("#txt_Rata_rata_SalesNoType_3_april_kaltim").val();
    var substr_sales_type_3_april_kaltim = substr_percent(RataRataSales_3_April_kaltim);
    RataRataSales_4_April_kaltim = $("#txt_Rata_rata_SalesNoType_4_april_kaltim").val();
    var substr_sales_type_4_april_kaltim = substr_percent(RataRataSales_4_April_kaltim);
      //end Sales
    //end month april
    //start month mei
      //start Service
    RataRataService_1_Mei_kaltim = $("#txt_Rata_rata_ServiceNoType_1_mei_kaltim").val();
    var substr_service_type_1_mei_kaltim = substr_percent(RataRataService_1_Mei_kaltim);
    RataRataService_2_Mei_kaltim = $("#txt_Rata_rata_ServiceNoType_2_mei_kaltim").val();
    var substr_service_type_2_mei_kaltim = substr_percent(RataRataService_2_Mei_kaltim);
    RataRataService_3_Mei_kaltim = $("#txt_Rata_rata_ServiceNoType_3_mei_kaltim").val();
    var substr_service_type_3_mei_kaltim = substr_percent(RataRataService_3_Mei_kaltim);
    RataRataService_4_Mei_kaltim = $("#txt_Rata_rata_ServiceNoType_4_mei_kaltim").val();
    var substr_service_type_4_mei_kaltim = substr_percent(RataRataService_4_Mei_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_Mei_kaltim = $("#txt_Rata_rata_SalesNoType_1_mei_kaltim").val();
    var substr_sales_type_1_mei_kaltim = substr_percent(RataRataSales_1_Mei_kaltim);
    RataRataSales_2_Mei_kaltim = $("#txt_Rata_rata_SalesNoType_2_mei_kaltim").val();
    var substr_sales_type_2_mei_kaltim = substr_percent(RataRataSales_2_Mei_kaltim);
    RataRataSales_3_Mei_kaltim = $("#txt_Rata_rata_SalesNoType_3_mei_kaltim").val();
    var substr_sales_type_3_mei_kaltim = substr_percent(RataRataSales_3_Mei_kaltim);
    RataRataSales_4_Mei_kaltim = $("#txt_Rata_rata_SalesNoType_4_mei_kaltim").val();
    var substr_sales_type_4_mei_kaltim = substr_percent(RataRataSales_4_Mei_kaltim);
      //end Sales
    //end month mei
    //start month juni
      //start Service
    RataRataService_1_Juni_kaltim = $("#txt_Rata_rata_ServiceNoType_1_juni_kaltim").val();
    var substr_service_type_1_juni_kaltim = substr_percent(RataRataService_1_Juni_kaltim);
    RataRataService_2_Juni_kaltim = $("#txt_Rata_rata_ServiceNoType_2_juni_kaltim").val();
    var substr_service_type_2_juni_kaltim = substr_percent(RataRataService_2_Juni_kaltim);
    RataRataService_3_Juni_kaltim = $("#txt_Rata_rata_ServiceNoType_3_juni_kaltim").val();
    var substr_service_type_3_juni_kaltim = substr_percent(RataRataService_3_Juni_kaltim);
    RataRataService_4_Juni_kaltim = $("#txt_Rata_rata_ServiceNoType_4_juni_kaltim").val();
    var substr_service_type_4_juni_kaltim = substr_percent(RataRataService_4_Juni_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_Juni_kaltim = $("#txt_Rata_rata_SalesNoType_1_juni_kaltim").val();
    var substr_sales_type_1_juni_kaltim = substr_percent(RataRataSales_1_Juni_kaltim);
    RataRataSales_2_Juni_kaltim = $("#txt_Rata_rata_SalesNoType_2_juni_kaltim").val();
    var substr_sales_type_2_juni_kaltim = substr_percent(RataRataSales_2_Juni_kaltim);
    RataRataSales_3_Juni_kaltim = $("#txt_Rata_rata_SalesNoType_3_juni_kaltim").val();
    var substr_sales_type_3_juni_kaltim = substr_percent(RataRataSales_3_Juni_kaltim);
    RataRataSales_4_Juni_kaltim = $("#txt_Rata_rata_SalesNoType_4_juni_kaltim").val();
    var substr_sales_type_4_juni_kaltim = substr_percent(RataRataSales_4_Juni_kaltim);
      //end Sales
    //end month juni
    //start month juli
      //start Service
    RataRataService_1_Juli_kaltim = $("#txt_Rata_rata_ServiceNoType_1_juli_kaltim").val();
    var substr_service_type_1_juli_kaltim = substr_percent(RataRataService_1_Juli_kaltim);
    RataRataService_2_Juli_kaltim = $("#txt_Rata_rata_ServiceNoType_2_juli_kaltim").val();
    var substr_service_type_2_juli_kaltim = substr_percent(RataRataService_2_Juli_kaltim);
    RataRataService_3_Juli_kaltim = $("#txt_Rata_rata_ServiceNoType_3_juli_kaltim").val();
    var substr_service_type_3_juli_kaltim = substr_percent(RataRataService_3_Juli_kaltim);
    RataRataService_4_Juli_kaltim = $("#txt_Rata_rata_ServiceNoType_4_juli_kaltim").val();
    var substr_service_type_4_juli_kaltim = substr_percent(RataRataService_4_Juli_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_Juli_kaltim = $("#txt_Rata_rata_SalesNoType_1_juli_kaltim").val();
    var substr_sales_type_1_juli_kaltim = substr_percent(RataRataSales_1_Juli_kaltim);
    RataRataSales_2_Juli_kaltim = $("#txt_Rata_rata_SalesNoType_2_juli_kaltim").val();
    var substr_sales_type_2_juli_kaltim = substr_percent(RataRataSales_2_Juli_kaltim);
    RataRataSales_3_Juli_kaltim = $("#txt_Rata_rata_SalesNoType_3_juli_kaltim").val();
    var substr_sales_type_3_juli_kaltim = substr_percent(RataRataSales_3_Juli_kaltim);
    RataRataSales_4_Juli_kaltim = $("#txt_Rata_rata_SalesNoType_4_juli_kaltim").val();
    var substr_sales_type_4_juli_kaltim = substr_percent(RataRataSales_4_Juli_kaltim);
      //end Sales
    //end month juli
    //start month agustus
      //start Service
    RataRataService_1_Agustus_kaltim = $("#txt_Rata_rata_ServiceNoType_1_agustus_kaltim").val();
    var substr_service_type_1_agustus_kaltim = substr_percent(RataRataService_1_Agustus_kaltim);
    RataRataService_2_Agustus_kaltim = $("#txt_Rata_rata_ServiceNoType_2_agustus_kaltim").val();
    var substr_service_type_2_agustus_kaltim = substr_percent(RataRataService_2_Agustus_kaltim);
    RataRataService_3_Agustus_kaltim = $("#txt_Rata_rata_ServiceNoType_3_agustus_kaltim").val();
    var substr_service_type_3_agustus_kaltim = substr_percent(RataRataService_3_Agustus_kaltim);
    RataRataService_4_Agustus_kaltim = $("#txt_Rata_rata_ServiceNoType_4_agustus_kaltim").val();
    var substr_service_type_4_agustus_kaltim = substr_percent(RataRataService_4_Agustus_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_Agustus_kaltim = $("#txt_Rata_rata_SalesNoType_1_agustus_kaltim").val();
    var substr_sales_type_1_agustus_kaltim = substr_percent(RataRataSales_1_Agustus_kaltim);
    RataRataSales_2_Agustus_kaltim = $("#txt_Rata_rata_SalesNoType_2_agustus_kaltim").val();
    var substr_sales_type_2_agustus_kaltim = substr_percent(RataRataSales_2_Agustus_kaltim);
    RataRataSales_3_Agustus_kaltim = $("#txt_Rata_rata_SalesNoType_3_agustus_kaltim").val();
    var substr_sales_type_3_agustus_kaltim = substr_percent(RataRataSales_3_Agustus_kaltim);
    RataRataSales_4_Agustus_kaltim = $("#txt_Rata_rata_SalesNoType_4_agustus_kaltim").val();
    var substr_sales_type_4_agustus_kaltim = substr_percent(RataRataSales_4_Agustus_kaltim);
      //end Sales
    //end month agustus
    //start month september
      //start Service
    RataRataService_1_September_kaltim = $("#txt_Rata_rata_ServiceNoType_1_september_kaltim").val();
    var substr_service_type_1_september_kaltim = substr_percent(RataRataService_1_September_kaltim);
    RataRataService_2_September_kaltim = $("#txt_Rata_rata_ServiceNoType_2_september_kaltim").val();
    var substr_service_type_2_september_kaltim = substr_percent(RataRataService_2_September_kaltim);
    RataRataService_3_September_kaltim = $("#txt_Rata_rata_ServiceNoType_3_september_kaltim").val();
    var substr_service_type_3_september_kaltim = substr_percent(RataRataService_3_September_kaltim);
    RataRataService_4_September_kaltim = $("#txt_Rata_rata_ServiceNoType_4_september_kaltim").val();
    var substr_service_type_4_september_kaltim = substr_percent(RataRataService_4_September_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_September_kaltim = $("#txt_Rata_rata_SalesNoType_1_september_kaltim").val();
    var substr_sales_type_1_september_kaltim = substr_percent(RataRataSales_1_September_kaltim);
    RataRataSales_2_September_kaltim = $("#txt_Rata_rata_SalesNoType_2_september_kaltim").val();
    var substr_sales_type_2_september_kaltim = substr_percent(RataRataSales_2_September_kaltim);
    RataRataSales_3_September_kaltim = $("#txt_Rata_rata_SalesNoType_3_september_kaltim").val();
    var substr_sales_type_3_september_kaltim = substr_percent(RataRataSales_3_September_kaltim);
    RataRataSales_4_September_kaltim = $("#txt_Rata_rata_SalesNoType_4_september_kaltim").val();
    var substr_sales_type_4_september_kaltim = substr_percent(RataRataSales_4_September_kaltim);
      //end Sales
    //end month september
    //start month oktober
      //start Service
    RataRataService_1_Oktober_kaltim = $("#txt_Rata_rata_ServiceNoType_1_oktober_kaltim").val();
    var substr_service_type_1_oktober_kaltim = substr_percent(RataRataService_1_Oktober_kaltim);
    RataRataService_2_Oktober_kaltim = $("#txt_Rata_rata_ServiceNoType_2_oktober_kaltim").val();
    var substr_service_type_2_oktober_kaltim = substr_percent(RataRataService_2_Oktober_kaltim);
    RataRataService_3_Oktober_kaltim = $("#txt_Rata_rata_ServiceNoType_3_oktober_kaltim").val();
    var substr_service_type_3_oktober_kaltim = substr_percent(RataRataService_3_Oktober_kaltim);
    RataRataService_4_Oktober_kaltim = $("#txt_Rata_rata_ServiceNoType_4_oktober_kaltim").val();
    var substr_service_type_4_oktober_kaltim = substr_percent(RataRataService_4_Oktober_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_Oktober_kaltim = $("#txt_Rata_rata_SalesNoType_1_oktober_kaltim").val();
    var substr_sales_type_1_oktober_kaltim = substr_percent(RataRataSales_1_Oktober_kaltim);
    RataRataSales_2_Oktober_kaltim = $("#txt_Rata_rata_SalesNoType_2_oktober_kaltim").val();
    var substr_sales_type_2_oktober_kaltim = substr_percent(RataRataSales_2_Oktober_kaltim);
    RataRataSales_3_Oktober_kaltim = $("#txt_Rata_rata_SalesNoType_3_oktober_kaltim").val();
    var substr_sales_type_3_oktober_kaltim = substr_percent(RataRataSales_3_Oktober_kaltim);
    RataRataSales_4_Oktober_kaltim = $("#txt_Rata_rata_SalesNoType_4_oktober_kaltim").val();
    var substr_sales_type_4_oktober_kaltim = substr_percent(RataRataSales_4_Oktober_kaltim);
      //end Sales
    //end month oktober
    //start month november
      //start Service
    RataRataService_1_November_kaltim = $("#txt_Rata_rata_ServiceNoType_1_november_kaltim").val();
    var substr_service_type_1_november_kaltim = substr_percent(RataRataService_1_November_kaltim);
    RataRataService_2_November_kaltim = $("#txt_Rata_rata_ServiceNoType_2_november_kaltim").val();
    var substr_service_type_2_november_kaltim = substr_percent(RataRataService_2_November_kaltim);
    RataRataService_3_November_kaltim = $("#txt_Rata_rata_ServiceNoType_3_november_kaltim").val();
    var substr_service_type_3_november_kaltim = substr_percent(RataRataService_3_November_kaltim);
    RataRataService_4_November_kaltim = $("#txt_Rata_rata_ServiceNoType_4_november_kaltim").val();
    var substr_service_type_4_november_kaltim = substr_percent(RataRataService_4_November_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_November_kaltim = $("#txt_Rata_rata_SalesNoType_1_november_kaltim").val();
    var substr_sales_type_1_november_kaltim = substr_percent(RataRataSales_1_November_kaltim);
    RataRataSales_2_November_kaltim = $("#txt_Rata_rata_SalesNoType_2_november_kaltim").val();
    var substr_sales_type_2_november_kaltim = substr_percent(RataRataSales_2_November_kaltim);
    RataRataSales_3_November_kaltim = $("#txt_Rata_rata_SalesNoType_3_november_kaltim").val();
    var substr_sales_type_3_november_kaltim = substr_percent(RataRataSales_3_November_kaltim);
    RataRataSales_4_November_kaltim = $("#txt_Rata_rata_SalesNoType_4_november_kaltim").val();
    var substr_sales_type_4_november_kaltim = substr_percent(RataRataSales_4_November_kaltim);
      //end Sales
    //end month november
    //start month desember
      //start Service
    RataRataService_1_Desember_kaltim = $("#txt_Rata_rata_ServiceNoType_1_desember_kaltim").val();
    var substr_service_type_1_desember_kaltim = substr_percent(RataRataService_1_Desember_kaltim);
    RataRataService_2_Desember_kaltim = $("#txt_Rata_rata_ServiceNoType_2_desember_kaltim").val();
    var substr_service_type_2_desember_kaltim = substr_percent(RataRataService_2_Desember_kaltim);
    RataRataService_3_Desember_kaltim = $("#txt_Rata_rata_ServiceNoType_3_desember_kaltim").val();
    var substr_service_type_3_desember_kaltim = substr_percent(RataRataService_3_Desember_kaltim);
    RataRataService_4_Desember_kaltim = $("#txt_Rata_rata_ServiceNoType_4_desember_kaltim").val();
    var substr_service_type_4_desember_kaltim = substr_percent(RataRataService_4_Desember_kaltim);
      //end Service
      //Start Sales
    RataRataSales_1_Desember_kaltim = $("#txt_Rata_rata_SalesNoType_1_desember_kaltim").val();
    var substr_sales_type_1_desember_kaltim = substr_percent(RataRataSales_1_Desember_kaltim);
    RataRataSales_2_Desember_kaltim = $("#txt_Rata_rata_SalesNoType_2_desember_kaltim").val();
    var substr_sales_type_2_desember_kaltim = substr_percent(RataRataSales_2_Desember_kaltim);
    RataRataSales_3_Desember_kaltim = $("#txt_Rata_rata_SalesNoType_3_desember_kaltim").val();
    var substr_sales_type_3_desember_kaltim = substr_percent(RataRataSales_3_Desember_kaltim);
    RataRataSales_4_Desember_kaltim = $("#txt_Rata_rata_SalesNoType_4_desember_kaltim").val();
    var substr_sales_type_4_desember_kaltim = substr_percent(RataRataSales_4_Desember_kaltim);
      //end Sales
    //end month desember

    MonthNow = $("#month_now").val();
    BeforeMonth = $("#before_month").val();

    //start hitung rata-rata
      //start month januari
      //start service
    var SumRataRataService_1_kaltim = parseInt(substr_service_type_1_januari_kaltim) + parseInt(substr_service_type_1_februari_kaltim) + parseInt(substr_service_type_1_maret_kaltim) + parseInt(substr_service_type_1_april_kaltim) + parseInt(substr_service_type_1_mei_kaltim) + parseInt(substr_service_type_1_juni_kaltim) + parseInt(substr_service_type_1_juli_kaltim) + parseInt(substr_service_type_1_agustus_kaltim) + parseInt(substr_service_type_1_september_kaltim) + parseInt(substr_service_type_1_oktober_kaltim) + parseInt(substr_service_type_1_november_kaltim) + parseInt(substr_service_type_1_desember_kaltim);
    var TotalRataRataService_1_kaltim = parseInt(SumRataRataService_1_kaltim)/parseInt(BeforeMonth);
    var FixTotalRataRataService_1_kaltim = parseFloat(TotalRataRataService_1_kaltim).toFixed(0)+'%';
      //------
    var SumRataRataService_2_kaltim = parseInt(substr_service_type_2_januari_kaltim) + parseInt(substr_service_type_2_februari_kaltim) + parseInt(substr_service_type_2_maret_kaltim) + parseInt(substr_service_type_2_april_kaltim) + parseInt(substr_service_type_2_mei_kaltim) + parseInt(substr_service_type_2_juni_kaltim) + parseInt(substr_service_type_2_juli_kaltim) + parseInt(substr_service_type_2_agustus_kaltim) + parseInt(substr_service_type_2_september_kaltim) + parseInt(substr_service_type_2_oktober_kaltim) + parseInt(substr_service_type_2_november_kaltim) + parseInt(substr_service_type_2_desember_kaltim);
    var TotalRataRataService_2_kaltim = parseInt(SumRataRataService_2_kaltim)/parseInt(BeforeMonth);
    var FixTotalRataRataService_2_kaltim = parseFloat(TotalRataRataService_2_kaltim).toFixed(0)+'%';
      //------
    var SumRataRataService_3_kaltim = parseInt(substr_service_type_3_januari_kaltim) + parseInt(substr_service_type_3_februari_kaltim) + parseInt(substr_service_type_3_maret_kaltim) + parseInt(substr_service_type_3_april_kaltim) + parseInt(substr_service_type_3_mei_kaltim) + parseInt(substr_service_type_3_juni_kaltim) + parseInt(substr_service_type_3_juli_kaltim) + parseInt(substr_service_type_3_agustus_kaltim) + parseInt(substr_service_type_3_september_kaltim) + parseInt(substr_service_type_3_oktober_kaltim) + parseInt(substr_service_type_3_november_kaltim) + parseInt(substr_service_type_3_desember_kaltim);
    var TotalRataRataService_3_kaltim = parseInt(SumRataRataService_3_kaltim)/parseInt(BeforeMonth);
    var FixTotalRataRataService_3_kaltim = parseFloat(TotalRataRataService_3_kaltim).toFixed(0)+'%';
      //------
    var SumRataRataService_4_kaltim = parseInt(substr_service_type_4_januari_kaltim) + parseInt(substr_service_type_4_februari_kaltim) + parseInt(substr_service_type_4_maret_kaltim) + parseInt(substr_service_type_4_april_kaltim) + parseInt(substr_service_type_4_mei_kaltim) + parseInt(substr_service_type_4_juni_kaltim) + parseInt(substr_service_type_4_juli_kaltim) + parseInt(substr_service_type_4_agustus_kaltim) + parseInt(substr_service_type_4_september_kaltim) + parseInt(substr_service_type_4_oktober_kaltim) + parseInt(substr_service_type_4_november_kaltim) + parseInt(substr_service_type_4_desember_kaltim);
    var TotalRataRataService_4_kaltim = parseInt(SumRataRataService_4_kaltim)/parseInt(BeforeMonth);
    var FixTotalRataRataService_4_kaltim = parseFloat(TotalRataRataService_4_kaltim).toFixed(0)+'%';
      //end service
      //start sales
    var SumRataRataSales_1_kaltim = parseInt(substr_sales_type_1_januari_kaltim) + parseInt(substr_sales_type_1_februari_kaltim) + parseInt(substr_sales_type_1_maret_kaltim) + parseInt(substr_sales_type_1_april_kaltim) + parseInt(substr_sales_type_1_mei_kaltim) + parseInt(substr_sales_type_1_juni_kaltim) + parseInt(substr_sales_type_1_juli_kaltim) + parseInt(substr_sales_type_1_agustus_kaltim) + parseInt(substr_sales_type_1_september_kaltim) + parseInt(substr_sales_type_1_oktober_kaltim) + parseInt(substr_sales_type_1_november_kaltim) + parseInt(substr_sales_type_1_desember_kaltim);
    var TotalRataRataSales_1_kaltim = parseInt(SumRataRataSales_1_kaltim)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_1_kaltim = parseFloat(TotalRataRataSales_1_kaltim).toFixed(0)+'%';
      //------
    var SumRataRataSales_2_kaltim = parseInt(substr_sales_type_2_januari_kaltim) + parseInt(substr_sales_type_2_februari_kaltim) + parseInt(substr_sales_type_2_maret_kaltim) + parseInt(substr_sales_type_2_april_kaltim) + parseInt(substr_sales_type_2_mei_kaltim) + parseInt(substr_sales_type_2_juni_kaltim) + parseInt(substr_sales_type_2_juli_kaltim) + parseInt(substr_sales_type_2_agustus_kaltim) + parseInt(substr_sales_type_2_september_kaltim) + parseInt(substr_sales_type_2_oktober_kaltim) + parseInt(substr_sales_type_2_november_kaltim) + parseInt(substr_sales_type_2_desember_kaltim);
    var TotalRataRataSales_2_kaltim = parseInt(SumRataRataSales_2_kaltim)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_2_kaltim = parseFloat(TotalRataRataSales_2_kaltim).toFixed(0)+'%';
      //------
    var SumRataRataSales_3_kaltim = parseInt(substr_sales_type_3_januari_kaltim) + parseInt(substr_sales_type_3_februari_kaltim) + parseInt(substr_sales_type_3_maret_kaltim) + parseInt(substr_sales_type_3_april_kaltim) + parseInt(substr_sales_type_3_mei_kaltim) + parseInt(substr_sales_type_3_juni_kaltim) + parseInt(substr_sales_type_3_juli_kaltim) + parseInt(substr_sales_type_3_agustus_kaltim) + parseInt(substr_sales_type_3_september_kaltim) + parseInt(substr_sales_type_3_oktober_kaltim) + parseInt(substr_sales_type_3_november_kaltim) + parseInt(substr_sales_type_3_desember_kaltim);
    var TotalRataRataSales_3_kaltim = parseInt(SumRataRataSales_3_kaltim)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_3_kaltim = parseFloat(TotalRataRataSales_3_kaltim).toFixed(0)+'%';
      //------
    var SumRataRataSales_4_kaltim = parseInt(substr_sales_type_4_januari_kaltim) + parseInt(substr_sales_type_4_februari_kaltim) + parseInt(substr_sales_type_4_maret_kaltim) + parseInt(substr_sales_type_4_april_kaltim) + parseInt(substr_sales_type_4_mei_kaltim) + parseInt(substr_sales_type_4_juni_kaltim) + parseInt(substr_sales_type_4_juli_kaltim) + parseInt(substr_sales_type_4_agustus_kaltim) + parseInt(substr_sales_type_4_september_kaltim) + parseInt(substr_sales_type_4_oktober_kaltim) + parseInt(substr_sales_type_4_november_kaltim) + parseInt(substr_sales_type_4_desember_kaltim);
    var TotalRataRataSales_4_kaltim = parseInt(SumRataRataSales_4_kaltim)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_4_kaltim = parseFloat(TotalRataRataSales_4_kaltim).toFixed(0)+'%';
      //end sales
      //end month januari
    //end hitung rata-rata //average_sales_type_1_all_kaltim

    //start januari
      //start service
    $("#average_service_type_1_all_kaltim").val(substr_percent(FixTotalRataRataService_1_kaltim));  
    $('#p_service_type_1_all_kaltim').html(FixTotalRataRataService_1_kaltim);
    $("#average_service_type_2_all_kaltim").val(substr_percent(FixTotalRataRataService_2_kaltim));  
    $('#p_service_type_2_all_kaltim').html(FixTotalRataRataService_2_kaltim);
    $("#average_service_type_3_all_kaltim").val(substr_percent(FixTotalRataRataService_3_kaltim));  
    $('#p_service_type_3_all_kaltim').html(FixTotalRataRataService_3_kaltim);
    $("#average_service_type_4_all_kaltim").val(substr_percent(FixTotalRataRataService_4_kaltim));  
    $('#p_service_type_4_all_kaltim').html(FixTotalRataRataService_4_kaltim);
      //end service
      //start sales
    $("#average_sales_type_1_all_kaltim").val(substr_percent(FixTotalRataRataSales_1_kaltim));  
    $('#p_sales_type_1_all_kaltim').html(FixTotalRataRataSales_1_kaltim);
    $("#average_sales_type_2_all_kaltim").val(substr_percent(FixTotalRataRataSales_2_kaltim));  
    $('#p_sales_type_2_all_kaltim').html(FixTotalRataRataSales_2_kaltim);
    $("#average_sales_type_3_all_kaltim").val(substr_percent(FixTotalRataRataSales_3_kaltim));  
    $('#p_sales_type_3_all_kaltim').html(FixTotalRataRataSales_3_kaltim);
    $("#average_sales_type_4_all_kaltim").val(substr_percent(FixTotalRataRataSales_4_kaltim));  
    $('#p_sales_type_4_all_kaltim').html(FixTotalRataRataSales_4_kaltim);
      //end sales
    //end januari

    // alert(RataRataSales_3_Mei);//just for testing data with alert
    // AverageSalesType_1 average_sales_type_1
    // document.getElementById("demo").innerHTML = res; // for tag <p>
    // alert(RataRataSales_1_Januari_kaltim);
    //start Januari
      //start service
      $("#service_type_1_januari_kaltim").val(substr_service_type_1_januari_kaltim);
      $('#p_service_type_1_januari_kaltim').html(RataRataService_1_Januari_kaltim);
      $("#service_type_2_januari_kaltim").val(substr_service_type_2_januari_kaltim);
      $('#p_service_type_2_januari_kaltim').html(RataRataService_2_Januari_kaltim);
      $("#service_type_3_januari_kaltim").val(substr_service_type_3_januari_kaltim);
      $('#p_service_type_3_januari_kaltim').html(RataRataService_3_Januari_kaltim);
      $("#service_type_4_januari_kaltim").val(substr_service_type_4_januari_kaltim);
      $('#p_service_type_4_januari_kaltim').html(RataRataService_4_Januari_kaltim);
      //end service
      //start sales
      $("#sales_type_1_januari_kaltim").val(substr_sales_type_1_januari_kaltim);
      $('#p_sales_type_1_januari_kaltim').html(RataRataSales_1_Januari_kaltim);
      $("#sales_type_2_januari_kaltim").val(substr_sales_type_2_januari_kaltim);
      $('#p_sales_type_2_januari_kaltim').html(RataRataSales_2_Januari_kaltim);
      $("#sales_type_3_januari_kaltim").val(substr_sales_type_3_januari_kaltim);
      $('#p_sales_type_3_januari_kaltim').html(RataRataSales_3_Januari_kaltim);
      $("#sales_type_4_januari_kaltim").val(substr_sales_type_4_januari_kaltim);
      $('#p_sales_type_4_januari_kaltim').html(RataRataSales_4_Januari_kaltim);
      //end sales
    //end Januari
    //start Februari
      //start service
      $("#service_type_1_februari_kaltim").val(substr_service_type_1_februari_kaltim);
      $('#p_service_type_1_februari_kaltim').html(RataRataService_1_Februari_kaltim);
      $("#service_type_2_februari_kaltim").val(substr_service_type_2_februari_kaltim);
      $('#p_service_type_2_februari_kaltim').html(RataRataService_2_Februari_kaltim);
      $("#service_type_3_februari_kaltim").val(substr_service_type_3_februari_kaltim);
      $('#p_service_type_3_februari_kaltim').html(RataRataService_3_Februari_kaltim);
      $("#service_type_4_februari_kaltim").val(substr_service_type_4_februari_kaltim);
      $('#p_service_type_4_februari_kaltim').html(RataRataService_4_Februari_kaltim);
      //end service
      //start sales
      $("#sales_type_1_februari_kaltim").val(substr_sales_type_1_februari_kaltim);
      $('#p_sales_type_1_februari_kaltim').html(RataRataSales_1_Februari_kaltim);
      $("#sales_type_2_februari_kaltim").val(substr_sales_type_2_februari_kaltim);
      $('#p_sales_type_2_februari_kaltim').html(RataRataSales_2_Februari_kaltim);
      $("#sales_type_3_februari_kaltim").val(substr_sales_type_3_februari_kaltim);
      $('#p_sales_type_3_februari_kaltim').html(RataRataSales_3_Februari_kaltim);
      $("#sales_type_4_februari_kaltim").val(substr_sales_type_4_februari_kaltim);
      $('#p_sales_type_4_februari_kaltim').html(RataRataSales_4_Februari_kaltim);
      //end sales
    //end Februari
    //start maret
      //start service
      $("#service_type_1_maret_kaltim").val(substr_service_type_1_maret_kaltim);
      $('#p_service_type_1_maret_kaltim').html(RataRataService_1_Maret_kaltim);
      $("#service_type_2_maret_kaltim").val(substr_service_type_2_maret_kaltim);
      $('#p_service_type_2_maret_kaltim').html(RataRataService_2_Maret_kaltim);
      $("#service_type_3_maret_kaltim").val(substr_service_type_3_maret_kaltim);
      $('#p_service_type_3_maret_kaltim').html(RataRataService_3_Maret_kaltim);
      $("#service_type_4_maret_kaltim").val(substr_service_type_4_maret_kaltim);
      $('#p_service_type_4_maret_kaltim').html(RataRataService_4_Maret_kaltim);
      //end service
      //start sales
      $("#sales_type_1_maret_kaltim").val(substr_sales_type_1_maret_kaltim);
      $('#p_sales_type_1_maret_kaltim').html(RataRataSales_1_Maret_kaltim);
      $("#sales_type_2_maret_kaltim").val(substr_sales_type_2_maret_kaltim);
      $('#p_sales_type_2_maret_kaltim').html(RataRataSales_2_Maret_kaltim);
      $("#sales_type_3_maret_kaltim").val(substr_sales_type_3_maret_kaltim);
      $('#p_sales_type_3_maret_kaltim').html(RataRataSales_3_Maret_kaltim);
      $("#sales_type_4_maret_kaltim").val(substr_sales_type_4_maret_kaltim);
      $('#p_sales_type_4_maret_kaltim').html(RataRataSales_4_Maret_kaltim);
      //end sales
    //end maret
    //start april
      //start service
      $("#service_type_1_april_kaltim").val(substr_service_type_1_april_kaltim);
      $('#p_service_type_1_april_kaltim').html(RataRataService_1_April_kaltim);
      $("#service_type_2_april_kaltim").val(substr_service_type_2_april_kaltim);
      $('#p_service_type_2_april_kaltim').html(RataRataService_2_April_kaltim);
      $("#service_type_3_april_kaltim").val(substr_service_type_3_april_kaltim);
      $('#p_service_type_3_april_kaltim').html(RataRataService_3_April_kaltim);
      $("#service_type_4_april_kaltim").val(substr_service_type_4_april_kaltim);
      $('#p_service_type_4_april_kaltim').html(RataRataService_4_April_kaltim);
      //end service
      //start sales
      $("#sales_type_1_april_kaltim").val(substr_sales_type_1_april_kaltim);
      $('#p_sales_type_1_april_kaltim').html(RataRataSales_1_April_kaltim);
      $("#sales_type_2_april_kaltim").val(substr_sales_type_2_april_kaltim);
      $('#p_sales_type_2_april_kaltim').html(RataRataSales_2_April_kaltim);
      $("#sales_type_3_april_kaltim").val(substr_sales_type_3_april_kaltim);
      $('#p_sales_type_3_april_kaltim').html(RataRataSales_3_April_kaltim);
      $("#sales_type_4_april_kaltim").val(substr_sales_type_4_april_kaltim);
      $('#p_sales_type_4_april_kaltim').html(RataRataSales_4_April_kaltim);
      //end sales
    //end april
    //start mei
      //start service
      $("#service_type_1_mei_kaltim").val(substr_service_type_1_mei_kaltim);
      $('#p_service_type_1_mei_kaltim').html(RataRataService_1_Mei_kaltim);
      $("#service_type_2_mei_kaltim").val(substr_service_type_2_mei_kaltim);
      $('#p_service_type_2_mei_kaltim').html(RataRataService_2_Mei_kaltim);
      $("#service_type_3_mei_kaltim").val(substr_service_type_3_mei_kaltim);
      $('#p_service_type_3_mei_kaltim').html(RataRataService_3_Mei_kaltim);
      $("#service_type_4_mei_kaltim").val(substr_service_type_4_mei_kaltim);
      $('#p_service_type_4_mei_kaltim').html(RataRataService_4_Mei_kaltim);
      //end service
      //start sales
      $("#sales_type_1_mei_kaltim").val(substr_sales_type_1_mei_kaltim);
      $('#p_sales_type_1_mei_kaltim').html(RataRataSales_1_Mei_kaltim);
      $("#sales_type_2_mei_kaltim").val(substr_sales_type_2_mei_kaltim);
      $('#p_sales_type_2_mei_kaltim').html(RataRataSales_2_Mei_kaltim);
      $("#sales_type_3_mei_kaltim").val(substr_sales_type_3_mei_kaltim);
      $('#p_sales_type_3_mei_kaltim').html(RataRataSales_3_Mei_kaltim);
      $("#sales_type_4_mei_kaltim").val(substr_sales_type_4_mei_kaltim);
      $('#p_sales_type_4_mei_kaltim').html(RataRataSales_4_Mei_kaltim);
      //end sales
    //end mei
    //start juni
      //start service
      $("#service_type_1_juni_kaltim").val(substr_service_type_1_juni_kaltim);
      $('#p_service_type_1_juni_kaltim').html(RataRataService_1_Juni_kaltim);
      $("#service_type_2_juni_kaltim").val(substr_service_type_2_juni_kaltim);
      $('#p_service_type_2_juni_kaltim').html(RataRataService_2_Juni_kaltim);
      $("#service_type_3_juni_kaltim").val(substr_service_type_3_juni_kaltim);
      $('#p_service_type_3_juni_kaltim').html(RataRataService_3_Juni_kaltim);
      $("#service_type_4_juni_kaltim").val(substr_service_type_4_juni_kaltim);
      $('#p_service_type_4_juni_kaltim').html(RataRataService_4_Juni_kaltim);
      //end service
      //start sales
      $("#sales_type_1_juni_kaltim").val(substr_sales_type_1_juni_kaltim);
      $('#p_sales_type_1_juni_kaltim').html(RataRataSales_1_Juni_kaltim);
      $("#sales_type_2_juni_kaltim").val(substr_sales_type_2_juni_kaltim);
      $('#p_sales_type_2_juni_kaltim').html(RataRataSales_2_Juni_kaltim);
      $("#sales_type_3_juni_kaltim").val(substr_sales_type_3_juni_kaltim);
      $('#p_sales_type_3_juni_kaltim').html(RataRataSales_3_Juni_kaltim);
      $("#sales_type_4_juni_kaltim").val(substr_sales_type_4_juni_kaltim);
      $('#p_sales_type_4_juni_kaltim').html(RataRataSales_4_Juni_kaltim);
      //end sales
    //end juni
    //start juli
      //start service
      $("#service_type_1_juli_kaltim").val(substr_service_type_1_juli_kaltim);
      $('#p_service_type_1_juli_kaltim').html(RataRataService_1_Juli_kaltim);
      $("#service_type_2_juli_kaltim").val(substr_service_type_2_juli_kaltim);
      $('#p_service_type_2_juli_kaltim').html(RataRataService_2_Juli_kaltim);
      $("#service_type_3_juli_kaltim").val(substr_service_type_3_juli_kaltim);
      $('#p_service_type_3_juli_kaltim').html(RataRataService_3_Juli_kaltim);
      $("#service_type_4_juli_kaltim").val(substr_service_type_4_juli_kaltim);
      $('#p_service_type_4_juli_kaltim').html(RataRataService_4_Juli_kaltim);
      //end service
      //start sales
      $("#sales_type_1_juli_kaltim").val(substr_sales_type_1_juli_kaltim);
      $('#p_sales_type_1_juli_kaltim').html(RataRataSales_1_Juli_kaltim);
      $("#sales_type_2_juli_kaltim").val(substr_sales_type_2_juli_kaltim);
      $('#p_sales_type_2_juli_kaltim').html(RataRataSales_2_Juli_kaltim);
      $("#sales_type_3_juli_kaltim").val(substr_sales_type_3_juli_kaltim);
      $('#p_sales_type_3_juli_kaltim').html(RataRataSales_3_Juli_kaltim);
      $("#sales_type_4_juli_kaltim").val(substr_sales_type_4_juli_kaltim);
      $('#p_sales_type_4_juli_kaltim').html(RataRataSales_4_Juli_kaltim);
      //end sales
    //end juli
    //start agustus
      //start service
      $("#service_type_1_agustus_kaltim").val(substr_service_type_1_agustus_kaltim);
      $('#p_service_type_1_agustus_kaltim').html(RataRataService_1_Agustus_kaltim);
      $("#service_type_2_agustus_kaltim").val(substr_service_type_2_agustus_kaltim);
      $('#p_service_type_2_agustus_kaltim').html(RataRataService_2_Agustus_kaltim);
      $("#service_type_3_agustus_kaltim").val(substr_service_type_3_agustus_kaltim);
      $('#p_service_type_3_agustus_kaltim').html(RataRataService_3_Agustus_kaltim);
      $("#service_type_4_agustus_kaltim").val(substr_service_type_4_agustus_kaltim);
      $('#p_service_type_4_agustus_kaltim').html(RataRataService_4_Agustus_kaltim);
      //end service
      //start sales
      $("#sales_type_1_agustus_kaltim").val(substr_sales_type_1_agustus_kaltim);
      $('#p_sales_type_1_agustus_kaltim').html(RataRataSales_1_Agustus_kaltim);
      $("#sales_type_2_agustus_kaltim").val(substr_sales_type_2_agustus_kaltim);
      $('#p_sales_type_2_agustus_kaltim').html(RataRataSales_2_Agustus_kaltim);
      $("#sales_type_3_agustus_kaltim").val(substr_sales_type_3_agustus_kaltim);
      $('#p_sales_type_3_agustus_kaltim').html(RataRataSales_3_Agustus_kaltim);
      $("#sales_type_4_agustus_kaltim").val(substr_sales_type_4_agustus_kaltim);
      $('#p_sales_type_4_agustus_kaltim').html(RataRataSales_4_Agustus_kaltim);
      //end sales
    //end agustus
    //start september
      //start service
      $("#service_type_1_september_kaltim").val(substr_service_type_1_september_kaltim);
      $('#p_service_type_1_september_kaltim').html(RataRataService_1_September_kaltim);
      $("#service_type_2_september_kaltim").val(substr_service_type_2_september_kaltim);
      $('#p_service_type_2_september_kaltim').html(RataRataService_2_September_kaltim);
      $("#service_type_3_september_kaltim").val(substr_service_type_3_september_kaltim);
      $('#p_service_type_3_september_kaltim').html(RataRataService_3_September_kaltim);
      $("#service_type_4_september_kaltim").val(substr_service_type_4_september_kaltim);
      $('#p_service_type_4_september_kaltim').html(RataRataService_4_September_kaltim);
      //end service
      //start sales
      $("#sales_type_1_september_kaltim").val(substr_sales_type_1_september_kaltim);
      $('#p_sales_type_1_september_kaltim').html(RataRataSales_1_September_kaltim);
      $("#sales_type_2_september_kaltim").val(substr_sales_type_2_september_kaltim);
      $('#p_sales_type_2_september_kaltim').html(RataRataSales_2_September_kaltim);
      $("#sales_type_3_september_kaltim").val(substr_sales_type_3_september_kaltim);
      $('#p_sales_type_3_september_kaltim').html(RataRataSales_3_September_kaltim);
      $("#sales_type_4_september_kaltim").val(substr_sales_type_4_september_kaltim);
      $('#p_sales_type_4_september_kaltim').html(RataRataSales_4_September_kaltim);
      //end sales
    //end september
    //start oktober
      //start service
      $("#service_type_1_oktober_kaltim").val(substr_service_type_1_oktober_kaltim);
      $('#p_service_type_1_oktober_kaltim').html(RataRataService_1_Oktober_kaltim);
      $("#service_type_2_oktober_kaltim").val(substr_service_type_2_oktober_kaltim);
      $('#p_service_type_2_oktober_kaltim').html(RataRataService_2_Oktober_kaltim);
      $("#service_type_3_oktober_kaltim").val(substr_service_type_3_oktober_kaltim);
      $('#p_service_type_3_oktober_kaltim').html(RataRataService_3_Oktober_kaltim);
      $("#service_type_4_oktober_kaltim").val(substr_service_type_4_oktober_kaltim);
      $('#p_service_type_4_oktober_kaltim').html(RataRataService_4_Oktober_kaltim);
      //end service
      //start sales
      $("#sales_type_1_oktober_kaltim").val(substr_sales_type_1_oktober_kaltim);
      $('#p_sales_type_1_oktober_kaltim').html(RataRataSales_1_Oktober_kaltim);
      $("#sales_type_2_oktober_kaltim").val(substr_sales_type_2_oktober_kaltim);
      $('#p_sales_type_2_oktober_kaltim').html(RataRataSales_2_Oktober_kaltim);
      $("#sales_type_3_oktober_kaltim").val(substr_sales_type_3_oktober_kaltim);
      $('#p_sales_type_3_oktober_kaltim').html(RataRataSales_3_Oktober_kaltim);
      $("#sales_type_4_oktober_kaltim").val(substr_sales_type_4_oktober_kaltim);
      $('#p_sales_type_4_oktober_kaltim').html(RataRataSales_4_Oktober_kaltim);
      //end sales
    //end oktober
    //start november
      //start service
      $("#service_type_1_november_kaltim").val(substr_service_type_1_november_kaltim);
      $('#p_service_type_1_november_kaltim').html(RataRataService_1_November_kaltim);
      $("#service_type_2_november_kaltim").val(substr_service_type_2_november_kaltim);
      $('#p_service_type_2_november_kaltim').html(RataRataService_2_November_kaltim);
      $("#service_type_3_november_kaltim").val(substr_service_type_3_november_kaltim);
      $('#p_service_type_3_november_kaltim').html(RataRataService_3_November_kaltim);
      $("#service_type_4_november_kaltim").val(substr_service_type_4_november_kaltim);
      $('#p_service_type_4_november_kaltim').html(RataRataService_4_November_kaltim);
      //end service
      //start sales
      $("#sales_type_1_november_kaltim").val(substr_sales_type_1_november_kaltim);
      $('#p_sales_type_1_november_kaltim').html(RataRataSales_1_November_kaltim);
      $("#sales_type_2_november_kaltim").val(substr_sales_type_2_november_kaltim);
      $('#p_sales_type_2_november_kaltim').html(RataRataSales_2_November_kaltim);
      $("#sales_type_3_november_kaltim").val(substr_sales_type_3_november_kaltim);
      $('#p_sales_type_3_november_kaltim').html(RataRataSales_3_November_kaltim);
      $("#sales_type_4_november_kaltim").val(substr_sales_type_4_november_kaltim);
      $('#p_sales_type_4_november_kaltim').html(RataRataSales_4_November_kaltim);
      //end sales
    //end november
    //start desember
      //start service
      $("#service_type_1_desember_kaltim").val(substr_service_type_1_desember_kaltim);
      $('#p_service_type_1_desember_kaltim').html(RataRataService_1_Desember_kaltim);
      $("#service_type_2_desember_kaltim").val(substr_service_type_2_desember_kaltim);
      $('#p_service_type_2_desember_kaltim').html(RataRataService_2_Desember_kaltim);
      $("#service_type_3_desember_kaltim").val(substr_service_type_3_desember_kaltim);
      $('#p_service_type_3_desember_kaltim').html(RataRataService_3_Desember_kaltim);
      $("#service_type_4_desember_kaltim").val(substr_service_type_4_desember_kaltim);
      $('#p_service_type_4_desember_kaltim').html(RataRataService_4_Desember_kaltim);
      //end service
      //start sales
      $("#sales_type_1_desember_kaltim").val(substr_sales_type_1_desember_kaltim);
      $('#p_sales_type_1_desember_kaltim').html(RataRataSales_1_Desember_kaltim);
      $("#sales_type_2_desember_kaltim").val(substr_sales_type_2_desember_kaltim);
      $('#p_sales_type_2_desember_kaltim').html(RataRataSales_2_Desember_kaltim);
      $("#sales_type_3_desember_kaltim").val(substr_sales_type_3_desember_kaltim);
      $('#p_sales_type_3_desember_kaltim').html(RataRataSales_3_Desember_kaltim);
      $("#sales_type_4_desember_kaltim").val(substr_sales_type_4_desember_kaltim);
      $('#p_sales_type_4_desember_kaltim').html(RataRataSales_4_Desember_kaltim);
      //end sales
    //end desember

    //start tag p
    // $('#p_sales_type_1_agustus').html(RataRataSales_1_Agustus);//not used
    //end tag p
  }
  //END FOR AREA SEMUA CABANG KALTIM

  //START FOR AREA SEMUA CABANG KALBAR
  function get_rata_rata_every_month_peryear_kalbar(){
    x = $("#txt_Rata_rata_ServiceNoType_4_maret_kalbar").val();
    // alert(x);
    //start month January
      //start for Tyoe Service
    RataRataService_1_Januari_kalbar = $("#txt_Rata_rata_ServiceNoType_1_januari_kalbar").val();
    var substr_service_type_1_januari_kalbar = substr_percent(RataRataService_1_Januari_kalbar);
    RataRataService_2_Januari_kalbar = $("#txt_Rata_rata_ServiceNoType_2_januari_kalbar").val();
    var substr_service_type_2_januari_kalbar = substr_percent(RataRataService_2_Januari_kalbar);
    RataRataService_3_Januari_kalbar = $("#txt_Rata_rata_ServiceNoType_3_januari_kalbar").val();
    var substr_service_type_3_januari_kalbar = substr_percent(RataRataService_3_Januari_kalbar);
    RataRataService_4_Januari_kalbar = $("#txt_Rata_rata_ServiceNoType_4_januari_kalbar").val();
    var substr_service_type_4_januari_kalbar = substr_percent(RataRataService_4_Januari_kalbar);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Januari_kalbar = $("#txt_Rata_rata_SalesNoType_1_januari_kalbar").val();
    var substr_sales_type_1_januari_kalbar = substr_percent(RataRataSales_1_Januari_kalbar);
    RataRataSales_2_Januari_kalbar = $("#txt_Rata_rata_SalesNoType_2_januari").val();
    var substr_sales_type_2_januari_kalbar = substr_percent(RataRataSales_2_Januari_kalbar);
    RataRataSales_3_Januari_kalbar = $("#txt_Rata_rata_SalesNoType_3_januari").val();
    var substr_sales_type_3_januari_kalbar = substr_percent(RataRataSales_3_Januari_kalbar);
    RataRataSales_4_Januari_kalbar = $("#txt_Rata_rata_SalesNoType_4_januari").val();
    var substr_sales_type_4_januari_kalbar = substr_percent(RataRataSales_4_Januari_kalbar);
      //end for Type Sales
    //end month January
    //start month Februari
      //start Service
    RataRataService_1_Februari_kalbar = $("#txt_Rata_rata_ServiceNoType_1_februari_kalbar").val();
    var substr_service_type_1_februari_kalbar = substr_percent(RataRataService_1_Februari_kalbar);
    RataRataService_2_Februari_kalbar = $("#txt_Rata_rata_ServiceNoType_2_februari_kalbar").val();
    var substr_service_type_2_februari_kalbar = substr_percent(RataRataService_2_Februari_kalbar);
    RataRataService_3_Februari_kalbar = $("#txt_Rata_rata_ServiceNoType_3_februari_kalbar").val();
    var substr_service_type_3_februari_kalbar = substr_percent(RataRataService_3_Februari_kalbar);
    RataRataService_4_Februari_kalbar = $("#txt_Rata_rata_ServiceNoType_4_februari_kalbar").val();
    var substr_service_type_4_februari_kalbar = substr_percent(RataRataService_4_Februari_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_Februari_kalbar = $("#txt_Rata_rata_SalesNoType_1_februari_kalbar").val();
    var substr_sales_type_1_februari_kalbar = substr_percent(RataRataSales_1_Februari_kalbar);
    RataRataSales_2_Februari_kalbar = $("#txt_Rata_rata_SalesNoType_2_februari_kalbar").val();
    var substr_sales_type_2_februari_kalbar = substr_percent(RataRataSales_2_Februari_kalbar);
    RataRataSales_3_Februari_kalbar = $("#txt_Rata_rata_SalesNoType_3_februari_kalbar").val();
    var substr_sales_type_3_februari_kalbar = substr_percent(RataRataSales_3_Februari_kalbar);
    RataRataSales_4_Februari_kalbar = $("#txt_Rata_rata_SalesNoType_4_februari_kalbar").val();
    var substr_sales_type_4_februari_kalbar = substr_percent(RataRataSales_4_Februari_kalbar);
      //end Sales
    //end month Februari
    //start month Maret
      //start Service
    RataRataService_1_Maret_kalbar = $("#txt_Rata_rata_ServiceNoType_1_maret_kalbar").val();
    var substr_service_type_1_maret_kalbar = substr_percent(RataRataService_1_Maret_kalbar);
    RataRataService_2_Maret_kalbar = $("#txt_Rata_rata_ServiceNoType_2_maret_kalbar").val();
    var substr_service_type_2_maret_kalbar = substr_percent(RataRataService_2_Maret_kalbar);
    RataRataService_3_Maret_kalbar = $("#txt_Rata_rata_ServiceNoType_3_maret_kalbar").val();
    var substr_service_type_3_maret_kalbar = substr_percent(RataRataService_3_Maret_kalbar);
    RataRataService_4_Maret_kalbar = $("#txt_Rata_rata_ServiceNoType_4_maret_kalbar").val();
    var substr_service_type_4_maret_kalbar = substr_percent(RataRataService_4_Maret_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_Maret_kalbar = $("#txt_Rata_rata_SalesNoType_1_maret_kalbar").val();
    var substr_sales_type_1_maret_kalbar = substr_percent(RataRataSales_1_Maret_kalbar);
    RataRataSales_2_Maret_kalbar = $("#txt_Rata_rata_SalesNoType_2_maret_kalbar").val();
    var substr_sales_type_2_maret_kalbar = substr_percent(RataRataSales_2_Maret_kalbar);
    RataRataSales_3_Maret_kalbar = $("#txt_Rata_rata_SalesNoType_3_maret_kalbar").val();
    var substr_sales_type_3_maret_kalbar = substr_percent(RataRataSales_3_Maret_kalbar);
    RataRataSales_4_Maret_kalbar = $("#txt_Rata_rata_SalesNoType_4_maret_kalbar").val();
    var substr_sales_type_4_maret_kalbar = substr_percent(RataRataSales_4_Maret_kalbar);
      //end Sales
    //end month Maret
    //start month april
      //start Service
    RataRataService_1_April_kalbar = $("#txt_Rata_rata_ServiceNoType_1_april_kalbar").val();
    var substr_service_type_1_april_kalbar = substr_percent(RataRataService_1_April_kalbar);
    RataRataService_2_April_kalbar = $("#txt_Rata_rata_ServiceNoType_2_april_kalbar").val();
    var substr_service_type_2_april_kalbar = substr_percent(RataRataService_2_April_kalbar);
    RataRataService_3_April_kalbar = $("#txt_Rata_rata_ServiceNoType_3_april_kalbar").val();
    var substr_service_type_3_april_kalbar = substr_percent(RataRataService_3_April_kalbar);
    RataRataService_4_April_kalbar = $("#txt_Rata_rata_ServiceNoType_4_april_kalbar").val();
    var substr_service_type_4_april_kalbar = substr_percent(RataRataService_4_April_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_April_kalbar = $("#txt_Rata_rata_SalesNoType_1_april_kalbar").val();
    var substr_sales_type_1_april_kalbar = substr_percent(RataRataSales_1_April_kalbar);
    RataRataSales_2_April_kalbar = $("#txt_Rata_rata_SalesNoType_2_april_kalbar").val();
    var substr_sales_type_2_april_kalbar = substr_percent(RataRataSales_2_April_kalbar);
    RataRataSales_3_April_kalbar = $("#txt_Rata_rata_SalesNoType_3_april_kalbar").val();
    var substr_sales_type_3_april_kalbar = substr_percent(RataRataSales_3_April_kalbar);
    RataRataSales_4_April_kalbar = $("#txt_Rata_rata_SalesNoType_4_april_kalbar").val();
    var substr_sales_type_4_april_kalbar = substr_percent(RataRataSales_4_April_kalbar);
      //end Sales
    //end month april
    //start month mei
      //start Service
    RataRataService_1_Mei_kalbar = $("#txt_Rata_rata_ServiceNoType_1_mei_kalbar").val();
    var substr_service_type_1_mei_kalbar = substr_percent(RataRataService_1_Mei_kalbar);
    RataRataService_2_Mei_kalbar = $("#txt_Rata_rata_ServiceNoType_2_mei_kalbar").val();
    var substr_service_type_2_mei_kalbar = substr_percent(RataRataService_2_Mei_kalbar);
    RataRataService_3_Mei_kalbar = $("#txt_Rata_rata_ServiceNoType_3_mei_kalbar").val();
    var substr_service_type_3_mei_kalbar = substr_percent(RataRataService_3_Mei_kalbar);
    RataRataService_4_Mei_kalbar = $("#txt_Rata_rata_ServiceNoType_4_mei_kalbar").val();
    var substr_service_type_4_mei_kalbar = substr_percent(RataRataService_4_Mei_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_Mei_kalbar = $("#txt_Rata_rata_SalesNoType_1_mei_kalbar").val();
    var substr_sales_type_1_mei_kalbar = substr_percent(RataRataSales_1_Mei_kalbar);
    RataRataSales_2_Mei_kalbar = $("#txt_Rata_rata_SalesNoType_2_mei_kalbar").val();
    var substr_sales_type_2_mei_kalbar = substr_percent(RataRataSales_2_Mei_kalbar);
    RataRataSales_3_Mei_kalbar = $("#txt_Rata_rata_SalesNoType_3_mei_kalbar").val();
    var substr_sales_type_3_mei_kalbar = substr_percent(RataRataSales_3_Mei_kalbar);
    RataRataSales_4_Mei_kalbar = $("#txt_Rata_rata_SalesNoType_4_mei_kalbar").val();
    var substr_sales_type_4_mei_kalbar = substr_percent(RataRataSales_4_Mei_kalbar);
      //end Sales
    //end month mei
    //start month juni
      //start Service
    RataRataService_1_Juni_kalbar = $("#txt_Rata_rata_ServiceNoType_1_juni_kalbar").val();
    var substr_service_type_1_juni_kalbar = substr_percent(RataRataService_1_Juni_kalbar);
    RataRataService_2_Juni_kalbar = $("#txt_Rata_rata_ServiceNoType_2_juni_kalbar").val();
    var substr_service_type_2_juni_kalbar = substr_percent(RataRataService_2_Juni_kalbar);
    RataRataService_3_Juni_kalbar = $("#txt_Rata_rata_ServiceNoType_3_juni_kalbar").val();
    var substr_service_type_3_juni_kalbar = substr_percent(RataRataService_3_Juni_kalbar);
    RataRataService_4_Juni_kalbar = $("#txt_Rata_rata_ServiceNoType_4_juni_kalbar").val();
    var substr_service_type_4_juni_kalbar = substr_percent(RataRataService_4_Juni_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_Juni_kalbar = $("#txt_Rata_rata_SalesNoType_1_juni_kalbar").val();
    var substr_sales_type_1_juni_kalbar = substr_percent(RataRataSales_1_Juni_kalbar);
    RataRataSales_2_Juni_kalbar = $("#txt_Rata_rata_SalesNoType_2_juni_kalbar").val();
    var substr_sales_type_2_juni_kalbar = substr_percent(RataRataSales_2_Juni_kalbar);
    RataRataSales_3_Juni_kalbar = $("#txt_Rata_rata_SalesNoType_3_juni_kalbar").val();
    var substr_sales_type_3_juni_kalbar = substr_percent(RataRataSales_3_Juni_kalbar);
    RataRataSales_4_Juni_kalbar = $("#txt_Rata_rata_SalesNoType_4_juni_kalbar").val();
    var substr_sales_type_4_juni_kalbar = substr_percent(RataRataSales_4_Juni_kalbar);
      //end Sales
    //end month juni
    //start month juli
      //start Service
    RataRataService_1_Juli_kalbar = $("#txt_Rata_rata_ServiceNoType_1_juli_kalbar").val();
    var substr_service_type_1_juli_kalbar = substr_percent(RataRataService_1_Juli_kalbar);
    RataRataService_2_Juli_kalbar = $("#txt_Rata_rata_ServiceNoType_2_juli_kalbar").val();
    var substr_service_type_2_juli_kalbar = substr_percent(RataRataService_2_Juli_kalbar);
    RataRataService_3_Juli_kalbar = $("#txt_Rata_rata_ServiceNoType_3_juli_kalbar").val();
    var substr_service_type_3_juli_kalbar = substr_percent(RataRataService_3_Juli_kalbar);
    RataRataService_4_Juli_kalbar = $("#txt_Rata_rata_ServiceNoType_4_juli_kalbar").val();
    var substr_service_type_4_juli_kalbar = substr_percent(RataRataService_4_Juli_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_Juli_kalbar = $("#txt_Rata_rata_SalesNoType_1_juli_kalbar").val();
    var substr_sales_type_1_juli_kalbar = substr_percent(RataRataSales_1_Juli_kalbar);
    RataRataSales_2_Juli_kalbar = $("#txt_Rata_rata_SalesNoType_2_juli_kalbar").val();
    var substr_sales_type_2_juli_kalbar = substr_percent(RataRataSales_2_Juli_kalbar);
    RataRataSales_3_Juli_kalbar = $("#txt_Rata_rata_SalesNoType_3_juli_kalbar").val();
    var substr_sales_type_3_juli_kalbar = substr_percent(RataRataSales_3_Juli_kalbar);
    RataRataSales_4_Juli_kalbar = $("#txt_Rata_rata_SalesNoType_4_juli_kalbar").val();
    var substr_sales_type_4_juli_kalbar = substr_percent(RataRataSales_4_Juli_kalbar);
      //end Sales
    //end month juli
    //start month agustus
      //start Service
    RataRataService_1_Agustus_kalbar = $("#txt_Rata_rata_ServiceNoType_1_agustus_kalbar").val();
    var substr_service_type_1_agustus_kalbar = substr_percent(RataRataService_1_Agustus_kalbar);
    RataRataService_2_Agustus_kalbar = $("#txt_Rata_rata_ServiceNoType_2_agustus_kalbar").val();
    var substr_service_type_2_agustus_kalbar = substr_percent(RataRataService_2_Agustus_kalbar);
    RataRataService_3_Agustus_kalbar = $("#txt_Rata_rata_ServiceNoType_3_agustus_kalbar").val();
    var substr_service_type_3_agustus_kalbar = substr_percent(RataRataService_3_Agustus_kalbar);
    RataRataService_4_Agustus_kalbar = $("#txt_Rata_rata_ServiceNoType_4_agustus_kalbar").val();
    var substr_service_type_4_agustus_kalbar = substr_percent(RataRataService_4_Agustus_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_Agustus_kalbar = $("#txt_Rata_rata_SalesNoType_1_agustus_kalbar").val();
    var substr_sales_type_1_agustus_kalbar = substr_percent(RataRataSales_1_Agustus_kalbar);
    RataRataSales_2_Agustus_kalbar = $("#txt_Rata_rata_SalesNoType_2_agustus_kalbar").val();
    var substr_sales_type_2_agustus_kalbar = substr_percent(RataRataSales_2_Agustus_kalbar);
    RataRataSales_3_Agustus_kalbar = $("#txt_Rata_rata_SalesNoType_3_agustus_kalbar").val();
    var substr_sales_type_3_agustus_kalbar = substr_percent(RataRataSales_3_Agustus_kalbar);
    RataRataSales_4_Agustus_kalbar = $("#txt_Rata_rata_SalesNoType_4_agustus_kalbar").val();
    var substr_sales_type_4_agustus_kalbar = substr_percent(RataRataSales_4_Agustus_kalbar);
      //end Sales
    //end month agustus
    //start month september
      //start Service
    RataRataService_1_September_kalbar = $("#txt_Rata_rata_ServiceNoType_1_september_kalbar").val();
    var substr_service_type_1_september_kalbar = substr_percent(RataRataService_1_September_kalbar);
    RataRataService_2_September_kalbar = $("#txt_Rata_rata_ServiceNoType_2_september_kalbar").val();
    var substr_service_type_2_september_kalbar = substr_percent(RataRataService_2_September_kalbar);
    RataRataService_3_September_kalbar = $("#txt_Rata_rata_ServiceNoType_3_september_kalbar").val();
    var substr_service_type_3_september_kalbar = substr_percent(RataRataService_3_September_kalbar);
    RataRataService_4_September_kalbar = $("#txt_Rata_rata_ServiceNoType_4_september_kalbar").val();
    var substr_service_type_4_september_kalbar = substr_percent(RataRataService_4_September_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_September_kalbar = $("#txt_Rata_rata_SalesNoType_1_september_kalbar").val();
    var substr_sales_type_1_september_kalbar = substr_percent(RataRataSales_1_September_kalbar);
    RataRataSales_2_September_kalbar = $("#txt_Rata_rata_SalesNoType_2_september_kalbar").val();
    var substr_sales_type_2_september_kalbar = substr_percent(RataRataSales_2_September_kalbar);
    RataRataSales_3_September_kalbar = $("#txt_Rata_rata_SalesNoType_3_september_kalbar").val();
    var substr_sales_type_3_september_kalbar = substr_percent(RataRataSales_3_September_kalbar);
    RataRataSales_4_September_kalbar = $("#txt_Rata_rata_SalesNoType_4_september_kalbar").val();
    var substr_sales_type_4_september_kalbar = substr_percent(RataRataSales_4_September_kalbar);
      //end Sales
    //end month september
    //start month oktober
      //start Service
    RataRataService_1_Oktober_kalbar = $("#txt_Rata_rata_ServiceNoType_1_oktober_kalbar").val();
    var substr_service_type_1_oktober_kalbar = substr_percent(RataRataService_1_Oktober_kalbar);
    RataRataService_2_Oktober_kalbar = $("#txt_Rata_rata_ServiceNoType_2_oktober_kalbar").val();
    var substr_service_type_2_oktober_kalbar = substr_percent(RataRataService_2_Oktober_kalbar);
    RataRataService_3_Oktober_kalbar = $("#txt_Rata_rata_ServiceNoType_3_oktober_kalbar").val();
    var substr_service_type_3_oktober_kalbar = substr_percent(RataRataService_3_Oktober_kalbar);
    RataRataService_4_Oktober_kalbar = $("#txt_Rata_rata_ServiceNoType_4_oktober_kalbar").val();
    var substr_service_type_4_oktober_kalbar = substr_percent(RataRataService_4_Oktober_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_Oktober_kalbar = $("#txt_Rata_rata_SalesNoType_1_oktober_kalbar").val();
    var substr_sales_type_1_oktober_kalbar = substr_percent(RataRataSales_1_Oktober_kalbar);
    RataRataSales_2_Oktober_kalbar = $("#txt_Rata_rata_SalesNoType_2_oktober_kalbar").val();
    var substr_sales_type_2_oktober_kalbar = substr_percent(RataRataSales_2_Oktober_kalbar);
    RataRataSales_3_Oktober_kalbar = $("#txt_Rata_rata_SalesNoType_3_oktober_kalbar").val();
    var substr_sales_type_3_oktober_kalbar = substr_percent(RataRataSales_3_Oktober_kalbar);
    RataRataSales_4_Oktober_kalbar = $("#txt_Rata_rata_SalesNoType_4_oktober_kalbar").val();
    var substr_sales_type_4_oktober_kalbar = substr_percent(RataRataSales_4_Oktober_kalbar);
      //end Sales
    //end month oktober
    //start month november
      //start Service
    RataRataService_1_November_kalbar = $("#txt_Rata_rata_ServiceNoType_1_november_kalbar").val();
    var substr_service_type_1_november_kalbar = substr_percent(RataRataService_1_November_kalbar);
    RataRataService_2_November_kalbar = $("#txt_Rata_rata_ServiceNoType_2_november_kalbar").val();
    var substr_service_type_2_november_kalbar = substr_percent(RataRataService_2_November_kalbar);
    RataRataService_3_November_kalbar = $("#txt_Rata_rata_ServiceNoType_3_november_kalbar").val();
    var substr_service_type_3_november_kalbar = substr_percent(RataRataService_3_November_kalbar);
    RataRataService_4_November_kalbar = $("#txt_Rata_rata_ServiceNoType_4_november_kalbar").val();
    var substr_service_type_4_november_kalbar = substr_percent(RataRataService_4_November_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_November_kalbar = $("#txt_Rata_rata_SalesNoType_1_november_kalbar").val();
    var substr_sales_type_1_november_kalbar = substr_percent(RataRataSales_1_November_kalbar);
    RataRataSales_2_November_kalbar = $("#txt_Rata_rata_SalesNoType_2_november_kalbar").val();
    var substr_sales_type_2_november_kalbar = substr_percent(RataRataSales_2_November_kalbar);
    RataRataSales_3_November_kalbar = $("#txt_Rata_rata_SalesNoType_3_november_kalbar").val();
    var substr_sales_type_3_november_kalbar = substr_percent(RataRataSales_3_November_kalbar);
    RataRataSales_4_November_kalbar = $("#txt_Rata_rata_SalesNoType_4_november_kalbar").val();
    var substr_sales_type_4_november_kalbar = substr_percent(RataRataSales_4_November_kalbar);
      //end Sales
    //end month november
    //start month desember
      //start Service
    RataRataService_1_Desember_kalbar = $("#txt_Rata_rata_ServiceNoType_1_desember_kalbar").val();
    var substr_service_type_1_desember_kalbar = substr_percent(RataRataService_1_Desember_kalbar);
    RataRataService_2_Desember_kalbar = $("#txt_Rata_rata_ServiceNoType_2_desember_kalbar").val();
    var substr_service_type_2_desember_kalbar = substr_percent(RataRataService_2_Desember_kalbar);
    RataRataService_3_Desember_kalbar = $("#txt_Rata_rata_ServiceNoType_3_desember_kalbar").val();
    var substr_service_type_3_desember_kalbar = substr_percent(RataRataService_3_Desember_kalbar);
    RataRataService_4_Desember_kalbar = $("#txt_Rata_rata_ServiceNoType_4_desember_kalbar").val();
    var substr_service_type_4_desember_kalbar = substr_percent(RataRataService_4_Desember_kalbar);
      //end Service
      //Start Sales
    RataRataSales_1_Desember_kalbar = $("#txt_Rata_rata_SalesNoType_1_desember_kalbar").val();
    var substr_sales_type_1_desember_kalbar = substr_percent(RataRataSales_1_Desember_kalbar);
    RataRataSales_2_Desember_kalbar = $("#txt_Rata_rata_SalesNoType_2_desember_kalbar").val();
    var substr_sales_type_2_desember_kalbar = substr_percent(RataRataSales_2_Desember_kalbar);
    RataRataSales_3_Desember_kalbar = $("#txt_Rata_rata_SalesNoType_3_desember_kalbar").val();
    var substr_sales_type_3_desember_kalbar = substr_percent(RataRataSales_3_Desember_kalbar);
    RataRataSales_4_Desember_kalbar = $("#txt_Rata_rata_SalesNoType_4_desember_kalbar").val();
    var substr_sales_type_4_desember_kalbar = substr_percent(RataRataSales_4_Desember_kalbar);
      //end Sales
    //end month desember

    MonthNow = $("#month_now").val();
    BeforeMonth = $("#before_month").val();

    //start hitung rata-rata
      //start month januari
      //start service
    var SumRataRataService_1_kalbar = parseInt(substr_service_type_1_januari_kalbar) + parseInt(substr_service_type_1_februari_kalbar) + parseInt(substr_service_type_1_maret_kalbar) + parseInt(substr_service_type_1_april_kalbar) + parseInt(substr_service_type_1_mei_kalbar) + parseInt(substr_service_type_1_juni_kalbar) + parseInt(substr_service_type_1_juli_kalbar) + parseInt(substr_service_type_1_agustus_kalbar) + parseInt(substr_service_type_1_september_kalbar) + parseInt(substr_service_type_1_oktober_kalbar) + parseInt(substr_service_type_1_november_kalbar) + parseInt(substr_service_type_1_desember_kalbar);
    var TotalRataRataService_1_kalbar = parseInt(SumRataRataService_1_kalbar)/parseInt(BeforeMonth);
    var FixTotalRataRataService_1_kalbar = parseFloat(TotalRataRataService_1_kalbar).toFixed(0)+'%';
      //------
    var SumRataRataService_2_kalbar = parseInt(substr_service_type_2_januari_kalbar) + parseInt(substr_service_type_2_februari_kalbar) + parseInt(substr_service_type_2_maret_kalbar) + parseInt(substr_service_type_2_april_kalbar) + parseInt(substr_service_type_2_mei_kalbar) + parseInt(substr_service_type_2_juni_kalbar) + parseInt(substr_service_type_2_juli_kalbar) + parseInt(substr_service_type_2_agustus_kalbar) + parseInt(substr_service_type_2_september_kalbar) + parseInt(substr_service_type_2_oktober_kalbar) + parseInt(substr_service_type_2_november_kalbar) + parseInt(substr_service_type_2_desember_kalbar);
    var TotalRataRataService_2_kalbar = parseInt(SumRataRataService_2_kalbar)/parseInt(BeforeMonth);
    var FixTotalRataRataService_2_kalbar = parseFloat(TotalRataRataService_2_kalbar).toFixed(0)+'%';
      //------
    var SumRataRataService_3_kalbar = parseInt(substr_service_type_3_januari_kalbar) + parseInt(substr_service_type_3_februari_kalbar) + parseInt(substr_service_type_3_maret_kalbar) + parseInt(substr_service_type_3_april_kalbar) + parseInt(substr_service_type_3_mei_kalbar) + parseInt(substr_service_type_3_juni_kalbar) + parseInt(substr_service_type_3_juli_kalbar) + parseInt(substr_service_type_3_agustus_kalbar) + parseInt(substr_service_type_3_september_kalbar) + parseInt(substr_service_type_3_oktober_kalbar) + parseInt(substr_service_type_3_november_kalbar) + parseInt(substr_service_type_3_desember_kalbar);
    var TotalRataRataService_3_kalbar = parseInt(SumRataRataService_3_kalbar)/parseInt(BeforeMonth);
    var FixTotalRataRataService_3_kalbar = parseFloat(TotalRataRataService_3_kalbar).toFixed(0)+'%';
      //------
    var SumRataRataService_4_kalbar = parseInt(substr_service_type_4_januari_kalbar) + parseInt(substr_service_type_4_februari_kalbar) + parseInt(substr_service_type_4_maret_kalbar) + parseInt(substr_service_type_4_april_kalbar) + parseInt(substr_service_type_4_mei_kalbar) + parseInt(substr_service_type_4_juni_kalbar) + parseInt(substr_service_type_4_juli_kalbar) + parseInt(substr_service_type_4_agustus_kalbar) + parseInt(substr_service_type_4_september_kalbar) + parseInt(substr_service_type_4_oktober_kalbar) + parseInt(substr_service_type_4_november_kalbar) + parseInt(substr_service_type_4_desember_kalbar);
    var TotalRataRataService_4_kalbar = parseInt(SumRataRataService_4_kalbar)/parseInt(BeforeMonth);
    var FixTotalRataRataService_4_kalbar = parseFloat(TotalRataRataService_4_kalbar).toFixed(0)+'%';
      //end service
      //start sales
    var SumRataRataSales_1_kalbar = parseInt(substr_sales_type_1_januari_kalbar) + parseInt(substr_sales_type_1_februari_kalbar) + parseInt(substr_sales_type_1_maret_kalbar) + parseInt(substr_sales_type_1_april_kalbar) + parseInt(substr_sales_type_1_mei_kalbar) + parseInt(substr_sales_type_1_juni_kalbar) + parseInt(substr_sales_type_1_juli_kalbar) + parseInt(substr_sales_type_1_agustus_kalbar) + parseInt(substr_sales_type_1_september_kalbar) + parseInt(substr_sales_type_1_oktober_kalbar) + parseInt(substr_sales_type_1_november_kalbar) + parseInt(substr_sales_type_1_desember_kalbar);
    var TotalRataRataSales_1_kalbar = parseInt(SumRataRataSales_1_kalbar)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_1_kalbar = parseFloat(TotalRataRataSales_1_kalbar).toFixed(0)+'%';
      //------
    var SumRataRataSales_2_kalbar = parseInt(substr_sales_type_2_januari_kalbar) + parseInt(substr_sales_type_2_februari_kalbar) + parseInt(substr_sales_type_2_maret_kalbar) + parseInt(substr_sales_type_2_april_kalbar) + parseInt(substr_sales_type_2_mei_kalbar) + parseInt(substr_sales_type_2_juni_kalbar) + parseInt(substr_sales_type_2_juli_kalbar) + parseInt(substr_sales_type_2_agustus_kalbar) + parseInt(substr_sales_type_2_september_kalbar) + parseInt(substr_sales_type_2_oktober_kalbar) + parseInt(substr_sales_type_2_november_kalbar) + parseInt(substr_sales_type_2_desember_kalbar);
    var TotalRataRataSales_2_kalbar = parseInt(SumRataRataSales_2_kalbar)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_2_kalbar = parseFloat(TotalRataRataSales_2_kalbar).toFixed(0)+'%';
      //------
    var SumRataRataSales_3_kalbar = parseInt(substr_sales_type_3_januari_kalbar) + parseInt(substr_sales_type_3_februari_kalbar) + parseInt(substr_sales_type_3_maret_kalbar) + parseInt(substr_sales_type_3_april_kalbar) + parseInt(substr_sales_type_3_mei_kalbar) + parseInt(substr_sales_type_3_juni_kalbar) + parseInt(substr_sales_type_3_juli_kalbar) + parseInt(substr_sales_type_3_agustus_kalbar) + parseInt(substr_sales_type_3_september_kalbar) + parseInt(substr_sales_type_3_oktober_kalbar) + parseInt(substr_sales_type_3_november_kalbar) + parseInt(substr_sales_type_3_desember_kalbar);
    var TotalRataRataSales_3_kalbar = parseInt(SumRataRataSales_3_kalbar)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_3_kalbar = parseFloat(TotalRataRataSales_3_kalbar).toFixed(0)+'%';
      //------
    var SumRataRataSales_4_kalbar = parseInt(substr_sales_type_4_januari_kalbar) + parseInt(substr_sales_type_4_februari_kalbar) + parseInt(substr_sales_type_4_maret_kalbar) + parseInt(substr_sales_type_4_april_kalbar) + parseInt(substr_sales_type_4_mei_kalbar) + parseInt(substr_sales_type_4_juni_kalbar) + parseInt(substr_sales_type_4_juli_kalbar) + parseInt(substr_sales_type_4_agustus_kalbar) + parseInt(substr_sales_type_4_september_kalbar) + parseInt(substr_sales_type_4_oktober_kalbar) + parseInt(substr_sales_type_4_november_kalbar) + parseInt(substr_sales_type_4_desember_kalbar);
    var TotalRataRataSales_4_kalbar = parseInt(SumRataRataSales_4_kalbar)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_4_kalbar = parseFloat(TotalRataRataSales_4_kalbar).toFixed(0)+'%';
      //end sales
      //end month januari
    //end hitung rata-rata //average_sales_type_1_all_kalbar

    //start januari
      //start service
    $("#average_service_type_1_all_kalbar").val(substr_percent(FixTotalRataRataService_1_kalbar));  
    $('#p_service_type_1_all_kalbar').html(FixTotalRataRataService_1_kalbar);
    $("#average_service_type_2_all_kalbar").val(substr_percent(FixTotalRataRataService_2_kalbar));  
    $('#p_service_type_2_all_kalbar').html(FixTotalRataRataService_2_kalbar);
    $("#average_service_type_3_all_kalbar").val(substr_percent(FixTotalRataRataService_3_kalbar));  
    $('#p_service_type_3_all_kalbar').html(FixTotalRataRataService_3_kalbar);
    $("#average_service_type_4_all_kalbar").val(substr_percent(FixTotalRataRataService_4_kalbar));  
    $('#p_service_type_4_all_kalbar').html(FixTotalRataRataService_4_kalbar);
      //end service
      //start sales
    $("#average_sales_type_1_all_kalbar").val(substr_percent(FixTotalRataRataSales_1_kalbar));  
    $('#p_sales_type_1_all_kalbar').html(FixTotalRataRataSales_1_kalbar);
    $("#average_sales_type_2_all_kalbar").val(substr_percent(FixTotalRataRataSales_2_kalbar));  
    $('#p_sales_type_2_all_kalbar').html(FixTotalRataRataSales_2_kalbar);
    $("#average_sales_type_3_all_kalbar").val(substr_percent(FixTotalRataRataSales_3_kalbar));  
    $('#p_sales_type_3_all_kalbar').html(FixTotalRataRataSales_3_kalbar);
    $("#average_sales_type_4_all_kalbar").val(substr_percent(FixTotalRataRataSales_4_kalbar));  
    $('#p_sales_type_4_all_kalbar').html(FixTotalRataRataSales_4_kalbar);
      //end sales
    //end januari

    // alert(RataRataSales_3_Mei);//just for testing data with alert
    // AverageSalesType_1 average_sales_type_1
    // document.getElementById("demo").innerHTML = res; // for tag <p>
    // alert(RataRataSales_1_Januari_kalbar);
    //start Januari
      //start service
      $("#service_type_1_januari_kalbar").val(substr_service_type_1_januari_kalbar);
      $('#p_service_type_1_januari_kalbar').html(RataRataService_1_Januari_kalbar);
      $("#service_type_2_januari_kalbar").val(substr_service_type_2_januari_kalbar);
      $('#p_service_type_2_januari_kalbar').html(RataRataService_2_Januari_kalbar);
      $("#service_type_3_januari_kalbar").val(substr_service_type_3_januari_kalbar);
      $('#p_service_type_3_januari_kalbar').html(RataRataService_3_Januari_kalbar);
      $("#service_type_4_januari_kalbar").val(substr_service_type_4_januari_kalbar);
      $('#p_service_type_4_januari_kalbar').html(RataRataService_4_Januari_kalbar);
      //end service
      //start sales
      $("#sales_type_1_januari_kalbar").val(substr_sales_type_1_januari_kalbar);
      $('#p_sales_type_1_januari_kalbar').html(RataRataSales_1_Januari_kalbar);
      $("#sales_type_2_januari_kalbar").val(substr_sales_type_2_januari_kalbar);
      $('#p_sales_type_2_januari_kalbar').html(RataRataSales_2_Januari_kalbar);
      $("#sales_type_3_januari_kalbar").val(substr_sales_type_3_januari_kalbar);
      $('#p_sales_type_3_januari_kalbar').html(RataRataSales_3_Januari_kalbar);
      $("#sales_type_4_januari_kalbar").val(substr_sales_type_4_januari_kalbar);
      $('#p_sales_type_4_januari_kalbar').html(RataRataSales_4_Januari_kalbar);
      //end sales
    //end Januari
    //start Februari
      //start service
      $("#service_type_1_februari_kalbar").val(substr_service_type_1_februari_kalbar);
      $('#p_service_type_1_februari_kalbar').html(RataRataService_1_Februari_kalbar);
      $("#service_type_2_februari_kalbar").val(substr_service_type_2_februari_kalbar);
      $('#p_service_type_2_februari_kalbar').html(RataRataService_2_Februari_kalbar);
      $("#service_type_3_februari_kalbar").val(substr_service_type_3_februari_kalbar);
      $('#p_service_type_3_februari_kalbar').html(RataRataService_3_Februari_kalbar);
      $("#service_type_4_februari_kalbar").val(substr_service_type_4_februari_kalbar);
      $('#p_service_type_4_februari_kalbar').html(RataRataService_4_Februari_kalbar);
      //end service
      //start sales
      $("#sales_type_1_februari_kalbar").val(substr_sales_type_1_februari_kalbar);
      $('#p_sales_type_1_februari_kalbar').html(RataRataSales_1_Februari_kalbar);
      $("#sales_type_2_februari_kalbar").val(substr_sales_type_2_februari_kalbar);
      $('#p_sales_type_2_februari_kalbar').html(RataRataSales_2_Februari_kalbar);
      $("#sales_type_3_februari_kalbar").val(substr_sales_type_3_februari_kalbar);
      $('#p_sales_type_3_februari_kalbar').html(RataRataSales_3_Februari_kalbar);
      $("#sales_type_4_februari_kalbar").val(substr_sales_type_4_februari_kalbar);
      $('#p_sales_type_4_februari_kalbar').html(RataRataSales_4_Februari_kalbar);
      //end sales
    //end Februari
    //start maret
      //start service
      $("#service_type_1_maret_kalbar").val(substr_service_type_1_maret_kalbar);
      $('#p_service_type_1_maret_kalbar').html(RataRataService_1_Maret_kalbar);
      $("#service_type_2_maret_kalbar").val(substr_service_type_2_maret_kalbar);
      $('#p_service_type_2_maret_kalbar').html(RataRataService_2_Maret_kalbar);
      $("#service_type_3_maret_kalbar").val(substr_service_type_3_maret_kalbar);
      $('#p_service_type_3_maret_kalbar').html(RataRataService_3_Maret_kalbar);
      $("#service_type_4_maret_kalbar").val(substr_service_type_4_maret_kalbar);
      $('#p_service_type_4_maret_kalbar').html(RataRataService_4_Maret_kalbar);
      //end service
      //start sales
      $("#sales_type_1_maret_kalbar").val(substr_sales_type_1_maret_kalbar);
      $('#p_sales_type_1_maret_kalbar').html(RataRataSales_1_Maret_kalbar);
      $("#sales_type_2_maret_kalbar").val(substr_sales_type_2_maret_kalbar);
      $('#p_sales_type_2_maret_kalbar').html(RataRataSales_2_Maret_kalbar);
      $("#sales_type_3_maret_kalbar").val(substr_sales_type_3_maret_kalbar);
      $('#p_sales_type_3_maret_kalbar').html(RataRataSales_3_Maret_kalbar);
      $("#sales_type_4_maret_kalbar").val(substr_sales_type_4_maret_kalbar);
      $('#p_sales_type_4_maret_kalbar').html(RataRataSales_4_Maret_kalbar);
      //end sales
    //end maret
    //start april
      //start service
      $("#service_type_1_april_kalbar").val(substr_service_type_1_april_kalbar);
      $('#p_service_type_1_april_kalbar').html(RataRataService_1_April_kalbar);
      $("#service_type_2_april_kalbar").val(substr_service_type_2_april_kalbar);
      $('#p_service_type_2_april_kalbar').html(RataRataService_2_April_kalbar);
      $("#service_type_3_april_kalbar").val(substr_service_type_3_april_kalbar);
      $('#p_service_type_3_april_kalbar').html(RataRataService_3_April_kalbar);
      $("#service_type_4_april_kalbar").val(substr_service_type_4_april_kalbar);
      $('#p_service_type_4_april_kalbar').html(RataRataService_4_April_kalbar);
      //end service
      //start sales
      $("#sales_type_1_april_kalbar").val(substr_sales_type_1_april_kalbar);
      $('#p_sales_type_1_april_kalbar').html(RataRataSales_1_April_kalbar);
      $("#sales_type_2_april_kalbar").val(substr_sales_type_2_april_kalbar);
      $('#p_sales_type_2_april_kalbar').html(RataRataSales_2_April_kalbar);
      $("#sales_type_3_april_kalbar").val(substr_sales_type_3_april_kalbar);
      $('#p_sales_type_3_april_kalbar').html(RataRataSales_3_April_kalbar);
      $("#sales_type_4_april_kalbar").val(substr_sales_type_4_april_kalbar);
      $('#p_sales_type_4_april_kalbar').html(RataRataSales_4_April_kalbar);
      //end sales
    //end april
    //start mei
      //start service
      $("#service_type_1_mei_kalbar").val(substr_service_type_1_mei_kalbar);
      $('#p_service_type_1_mei_kalbar').html(RataRataService_1_Mei_kalbar);
      $("#service_type_2_mei_kalbar").val(substr_service_type_2_mei_kalbar);
      $('#p_service_type_2_mei_kalbar').html(RataRataService_2_Mei_kalbar);
      $("#service_type_3_mei_kalbar").val(substr_service_type_3_mei_kalbar);
      $('#p_service_type_3_mei_kalbar').html(RataRataService_3_Mei_kalbar);
      $("#service_type_4_mei_kalbar").val(substr_service_type_4_mei_kalbar);
      $('#p_service_type_4_mei_kalbar').html(RataRataService_4_Mei_kalbar);
      //end service
      //start sales
      $("#sales_type_1_mei_kalbar").val(substr_sales_type_1_mei_kalbar);
      $('#p_sales_type_1_mei_kalbar').html(RataRataSales_1_Mei_kalbar);
      $("#sales_type_2_mei_kalbar").val(substr_sales_type_2_mei_kalbar);
      $('#p_sales_type_2_mei_kalbar').html(RataRataSales_2_Mei_kalbar);
      $("#sales_type_3_mei_kalbar").val(substr_sales_type_3_mei_kalbar);
      $('#p_sales_type_3_mei_kalbar').html(RataRataSales_3_Mei_kalbar);
      $("#sales_type_4_mei_kalbar").val(substr_sales_type_4_mei_kalbar);
      $('#p_sales_type_4_mei_kalbar').html(RataRataSales_4_Mei_kalbar);
      //end sales
    //end mei
    //start juni
      //start service
      $("#service_type_1_juni_kalbar").val(substr_service_type_1_juni_kalbar);
      $('#p_service_type_1_juni_kalbar').html(RataRataService_1_Juni_kalbar);
      $("#service_type_2_juni_kalbar").val(substr_service_type_2_juni_kalbar);
      $('#p_service_type_2_juni_kalbar').html(RataRataService_2_Juni_kalbar);
      $("#service_type_3_juni_kalbar").val(substr_service_type_3_juni_kalbar);
      $('#p_service_type_3_juni_kalbar').html(RataRataService_3_Juni_kalbar);
      $("#service_type_4_juni_kalbar").val(substr_service_type_4_juni_kalbar);
      $('#p_service_type_4_juni_kalbar').html(RataRataService_4_Juni_kalbar);
      //end service
      //start sales
      $("#sales_type_1_juni_kalbar").val(substr_sales_type_1_juni_kalbar);
      $('#p_sales_type_1_juni_kalbar').html(RataRataSales_1_Juni_kalbar);
      $("#sales_type_2_juni_kalbar").val(substr_sales_type_2_juni_kalbar);
      $('#p_sales_type_2_juni_kalbar').html(RataRataSales_2_Juni_kalbar);
      $("#sales_type_3_juni_kalbar").val(substr_sales_type_3_juni_kalbar);
      $('#p_sales_type_3_juni_kalbar').html(RataRataSales_3_Juni_kalbar);
      $("#sales_type_4_juni_kalbar").val(substr_sales_type_4_juni_kalbar);
      $('#p_sales_type_4_juni_kalbar').html(RataRataSales_4_Juni_kalbar);
      //end sales
    //end juni
    //start juli
      //start service
      $("#service_type_1_juli_kalbar").val(substr_service_type_1_juli_kalbar);
      $('#p_service_type_1_juli_kalbar').html(RataRataService_1_Juli_kalbar);
      $("#service_type_2_juli_kalbar").val(substr_service_type_2_juli_kalbar);
      $('#p_service_type_2_juli_kalbar').html(RataRataService_2_Juli_kalbar);
      $("#service_type_3_juli_kalbar").val(substr_service_type_3_juli_kalbar);
      $('#p_service_type_3_juli_kalbar').html(RataRataService_3_Juli_kalbar);
      $("#service_type_4_juli_kalbar").val(substr_service_type_4_juli_kalbar);
      $('#p_service_type_4_juli_kalbar').html(RataRataService_4_Juli_kalbar);
      //end service
      //start sales
      $("#sales_type_1_juli_kalbar").val(substr_sales_type_1_juli_kalbar);
      $('#p_sales_type_1_juli_kalbar').html(RataRataSales_1_Juli_kalbar);
      $("#sales_type_2_juli_kalbar").val(substr_sales_type_2_juli_kalbar);
      $('#p_sales_type_2_juli_kalbar').html(RataRataSales_2_Juli_kalbar);
      $("#sales_type_3_juli_kalbar").val(substr_sales_type_3_juli_kalbar);
      $('#p_sales_type_3_juli_kalbar').html(RataRataSales_3_Juli_kalbar);
      $("#sales_type_4_juli_kalbar").val(substr_sales_type_4_juli_kalbar);
      $('#p_sales_type_4_juli_kalbar').html(RataRataSales_4_Juli_kalbar);
      //end sales
    //end juli
    //start agustus
      //start service
      $("#service_type_1_agustus_kalbar").val(substr_service_type_1_agustus_kalbar);
      $('#p_service_type_1_agustus_kalbar').html(RataRataService_1_Agustus_kalbar);
      $("#service_type_2_agustus_kalbar").val(substr_service_type_2_agustus_kalbar);
      $('#p_service_type_2_agustus_kalbar').html(RataRataService_2_Agustus_kalbar);
      $("#service_type_3_agustus_kalbar").val(substr_service_type_3_agustus_kalbar);
      $('#p_service_type_3_agustus_kalbar').html(RataRataService_3_Agustus_kalbar);
      $("#service_type_4_agustus_kalbar").val(substr_service_type_4_agustus_kalbar);
      $('#p_service_type_4_agustus_kalbar').html(RataRataService_4_Agustus_kalbar);
      //end service
      //start sales
      $("#sales_type_1_agustus_kalbar").val(substr_sales_type_1_agustus_kalbar);
      $('#p_sales_type_1_agustus_kalbar').html(RataRataSales_1_Agustus_kalbar);
      $("#sales_type_2_agustus_kalbar").val(substr_sales_type_2_agustus_kalbar);
      $('#p_sales_type_2_agustus_kalbar').html(RataRataSales_2_Agustus_kalbar);
      $("#sales_type_3_agustus_kalbar").val(substr_sales_type_3_agustus_kalbar);
      $('#p_sales_type_3_agustus_kalbar').html(RataRataSales_3_Agustus_kalbar);
      $("#sales_type_4_agustus_kalbar").val(substr_sales_type_4_agustus_kalbar);
      $('#p_sales_type_4_agustus_kalbar').html(RataRataSales_4_Agustus_kalbar);
      //end sales
    //end agustus
    //start september
      //start service
      $("#service_type_1_september_kalbar").val(substr_service_type_1_september_kalbar);
      $('#p_service_type_1_september_kalbar').html(RataRataService_1_September_kalbar);
      $("#service_type_2_september_kalbar").val(substr_service_type_2_september_kalbar);
      $('#p_service_type_2_september_kalbar').html(RataRataService_2_September_kalbar);
      $("#service_type_3_september_kalbar").val(substr_service_type_3_september_kalbar);
      $('#p_service_type_3_september_kalbar').html(RataRataService_3_September_kalbar);
      $("#service_type_4_september_kalbar").val(substr_service_type_4_september_kalbar);
      $('#p_service_type_4_september_kalbar').html(RataRataService_4_September_kalbar);
      //end service
      //start sales
      $("#sales_type_1_september_kalbar").val(substr_sales_type_1_september_kalbar);
      $('#p_sales_type_1_september_kalbar').html(RataRataSales_1_September_kalbar);
      $("#sales_type_2_september_kalbar").val(substr_sales_type_2_september_kalbar);
      $('#p_sales_type_2_september_kalbar').html(RataRataSales_2_September_kalbar);
      $("#sales_type_3_september_kalbar").val(substr_sales_type_3_september_kalbar);
      $('#p_sales_type_3_september_kalbar').html(RataRataSales_3_September_kalbar);
      $("#sales_type_4_september_kalbar").val(substr_sales_type_4_september_kalbar);
      $('#p_sales_type_4_september_kalbar').html(RataRataSales_4_September_kalbar);
      //end sales
    //end september
    //start oktober
      //start service
      $("#service_type_1_oktober_kalbar").val(substr_service_type_1_oktober_kalbar);
      $('#p_service_type_1_oktober_kalbar').html(RataRataService_1_Oktober_kalbar);
      $("#service_type_2_oktober_kalbar").val(substr_service_type_2_oktober_kalbar);
      $('#p_service_type_2_oktober_kalbar').html(RataRataService_2_Oktober_kalbar);
      $("#service_type_3_oktober_kalbar").val(substr_service_type_3_oktober_kalbar);
      $('#p_service_type_3_oktober_kalbar').html(RataRataService_3_Oktober_kalbar);
      $("#service_type_4_oktober_kalbar").val(substr_service_type_4_oktober_kalbar);
      $('#p_service_type_4_oktober_kalbar').html(RataRataService_4_Oktober_kalbar);
      //end service
      //start sales
      $("#sales_type_1_oktober_kalbar").val(substr_sales_type_1_oktober_kalbar);
      $('#p_sales_type_1_oktober_kalbar').html(RataRataSales_1_Oktober_kalbar);
      $("#sales_type_2_oktober_kalbar").val(substr_sales_type_2_oktober_kalbar);
      $('#p_sales_type_2_oktober_kalbar').html(RataRataSales_2_Oktober_kalbar);
      $("#sales_type_3_oktober_kalbar").val(substr_sales_type_3_oktober_kalbar);
      $('#p_sales_type_3_oktober_kalbar').html(RataRataSales_3_Oktober_kalbar);
      $("#sales_type_4_oktober_kalbar").val(substr_sales_type_4_oktober_kalbar);
      $('#p_sales_type_4_oktober_kalbar').html(RataRataSales_4_Oktober_kalbar);
      //end sales
    //end oktober
    //start november
      //start service
      $("#service_type_1_november_kalbar").val(substr_service_type_1_november_kalbar);
      $('#p_service_type_1_november_kalbar').html(RataRataService_1_November_kalbar);
      $("#service_type_2_november_kalbar").val(substr_service_type_2_november_kalbar);
      $('#p_service_type_2_november_kalbar').html(RataRataService_2_November_kalbar);
      $("#service_type_3_november_kalbar").val(substr_service_type_3_november_kalbar);
      $('#p_service_type_3_november_kalbar').html(RataRataService_3_November_kalbar);
      $("#service_type_4_november_kalbar").val(substr_service_type_4_november_kalbar);
      $('#p_service_type_4_november_kalbar').html(RataRataService_4_November_kalbar);
      //end service
      //start sales
      $("#sales_type_1_november_kalbar").val(substr_sales_type_1_november_kalbar);
      $('#p_sales_type_1_november_kalbar').html(RataRataSales_1_November_kalbar);
      $("#sales_type_2_november_kalbar").val(substr_sales_type_2_november_kalbar);
      $('#p_sales_type_2_november_kalbar').html(RataRataSales_2_November_kalbar);
      $("#sales_type_3_november_kalbar").val(substr_sales_type_3_november_kalbar);
      $('#p_sales_type_3_november_kalbar').html(RataRataSales_3_November_kalbar);
      $("#sales_type_4_november_kalbar").val(substr_sales_type_4_november_kalbar);
      $('#p_sales_type_4_november_kalbar').html(RataRataSales_4_November_kalbar);
      //end sales
    //end november
    //start desember
      //start service
      $("#service_type_1_desember_kalbar").val(substr_service_type_1_desember_kalbar);
      $('#p_service_type_1_desember_kalbar').html(RataRataService_1_Desember_kalbar);
      $("#service_type_2_desember_kalbar").val(substr_service_type_2_desember_kalbar);
      $('#p_service_type_2_desember_kalbar').html(RataRataService_2_Desember_kalbar);
      $("#service_type_3_desember_kalbar").val(substr_service_type_3_desember_kalbar);
      $('#p_service_type_3_desember_kalbar').html(RataRataService_3_Desember_kalbar);
      $("#service_type_4_desember_kalbar").val(substr_service_type_4_desember_kalbar);
      $('#p_service_type_4_desember_kalbar').html(RataRataService_4_Desember_kalbar);
      //end service
      //start sales
      $("#sales_type_1_desember_kalbar").val(substr_sales_type_1_desember_kalbar);
      $('#p_sales_type_1_desember_kalbar').html(RataRataSales_1_Desember_kalbar);
      $("#sales_type_2_desember_kalbar").val(substr_sales_type_2_desember_kalbar);
      $('#p_sales_type_2_desember_kalbar').html(RataRataSales_2_Desember_kalbar);
      $("#sales_type_3_desember_kalbar").val(substr_sales_type_3_desember_kalbar);
      $('#p_sales_type_3_desember_kalbar').html(RataRataSales_3_Desember_kalbar);
      $("#sales_type_4_desember_kalbar").val(substr_sales_type_4_desember_kalbar);
      $('#p_sales_type_4_desember_kalbar').html(RataRataSales_4_Desember_kalbar);
      //end sales
    //end desember

    //start tag p
    // $('#p_sales_type_1_agustus').html(RataRataSales_1_Agustus);//not used
    //end tag p
  }
  //END FOR AREA SEMUA CABANG KALBAR

  //START FOR AREA SEMUA CABANG KALSEL
  function get_rata_rata_every_month_peryear_kalsel(){
    x = $("#txt_Rata_rata_ServiceNoType_4_maret_kalsel").val();
    // alert(x);
    //start month January
      //start for Tyoe Service
    RataRataService_1_Januari_kalsel = $("#txt_Rata_rata_ServiceNoType_1_januari_kalsel").val();
    var substr_service_type_1_januari_kalsel = substr_percent(RataRataService_1_Januari_kalsel);
    RataRataService_2_Januari_kalsel = $("#txt_Rata_rata_ServiceNoType_2_januari_kalsel").val();
    var substr_service_type_2_januari_kalsel = substr_percent(RataRataService_2_Januari_kalsel);
    RataRataService_3_Januari_kalsel = $("#txt_Rata_rata_ServiceNoType_3_januari_kalsel").val();
    var substr_service_type_3_januari_kalsel = substr_percent(RataRataService_3_Januari_kalsel);
    RataRataService_4_Januari_kalsel = $("#txt_Rata_rata_ServiceNoType_4_januari_kalsel").val();
    var substr_service_type_4_januari_kalsel = substr_percent(RataRataService_4_Januari_kalsel);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Januari_kalsel = $("#txt_Rata_rata_SalesNoType_1_januari_kalsel").val();
    var substr_sales_type_1_januari_kalsel = substr_percent(RataRataSales_1_Januari_kalsel);
    RataRataSales_2_Januari_kalsel = $("#txt_Rata_rata_SalesNoType_2_januari").val();
    var substr_sales_type_2_januari_kalsel = substr_percent(RataRataSales_2_Januari_kalsel);
    RataRataSales_3_Januari_kalsel = $("#txt_Rata_rata_SalesNoType_3_januari").val();
    var substr_sales_type_3_januari_kalsel = substr_percent(RataRataSales_3_Januari_kalsel);
    RataRataSales_4_Januari_kalsel = $("#txt_Rata_rata_SalesNoType_4_januari").val();
    var substr_sales_type_4_januari_kalsel = substr_percent(RataRataSales_4_Januari_kalsel);
      //end for Type Sales
    //end month January
    //start month Februari
      //start Service
    RataRataService_1_Februari_kalsel = $("#txt_Rata_rata_ServiceNoType_1_februari_kalsel").val();
    var substr_service_type_1_februari_kalsel = substr_percent(RataRataService_1_Februari_kalsel);
    RataRataService_2_Februari_kalsel = $("#txt_Rata_rata_ServiceNoType_2_februari_kalsel").val();
    var substr_service_type_2_februari_kalsel = substr_percent(RataRataService_2_Februari_kalsel);
    RataRataService_3_Februari_kalsel = $("#txt_Rata_rata_ServiceNoType_3_februari_kalsel").val();
    var substr_service_type_3_februari_kalsel = substr_percent(RataRataService_3_Februari_kalsel);
    RataRataService_4_Februari_kalsel = $("#txt_Rata_rata_ServiceNoType_4_februari_kalsel").val();
    var substr_service_type_4_februari_kalsel = substr_percent(RataRataService_4_Februari_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_Februari_kalsel = $("#txt_Rata_rata_SalesNoType_1_februari_kalsel").val();
    var substr_sales_type_1_februari_kalsel = substr_percent(RataRataSales_1_Februari_kalsel);
    RataRataSales_2_Februari_kalsel = $("#txt_Rata_rata_SalesNoType_2_februari_kalsel").val();
    var substr_sales_type_2_februari_kalsel = substr_percent(RataRataSales_2_Februari_kalsel);
    RataRataSales_3_Februari_kalsel = $("#txt_Rata_rata_SalesNoType_3_februari_kalsel").val();
    var substr_sales_type_3_februari_kalsel = substr_percent(RataRataSales_3_Februari_kalsel);
    RataRataSales_4_Februari_kalsel = $("#txt_Rata_rata_SalesNoType_4_februari_kalsel").val();
    var substr_sales_type_4_februari_kalsel = substr_percent(RataRataSales_4_Februari_kalsel);
      //end Sales
    //end month Februari
    //start month Maret
      //start Service
    RataRataService_1_Maret_kalsel = $("#txt_Rata_rata_ServiceNoType_1_maret_kalsel").val();
    var substr_service_type_1_maret_kalsel = substr_percent(RataRataService_1_Maret_kalsel);
    RataRataService_2_Maret_kalsel = $("#txt_Rata_rata_ServiceNoType_2_maret_kalsel").val();
    var substr_service_type_2_maret_kalsel = substr_percent(RataRataService_2_Maret_kalsel);
    RataRataService_3_Maret_kalsel = $("#txt_Rata_rata_ServiceNoType_3_maret_kalsel").val();
    var substr_service_type_3_maret_kalsel = substr_percent(RataRataService_3_Maret_kalsel);
    RataRataService_4_Maret_kalsel = $("#txt_Rata_rata_ServiceNoType_4_maret_kalsel").val();
    var substr_service_type_4_maret_kalsel = substr_percent(RataRataService_4_Maret_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_Maret_kalsel = $("#txt_Rata_rata_SalesNoType_1_maret_kalsel").val();
    var substr_sales_type_1_maret_kalsel = substr_percent(RataRataSales_1_Maret_kalsel);
    RataRataSales_2_Maret_kalsel = $("#txt_Rata_rata_SalesNoType_2_maret_kalsel").val();
    var substr_sales_type_2_maret_kalsel = substr_percent(RataRataSales_2_Maret_kalsel);
    RataRataSales_3_Maret_kalsel = $("#txt_Rata_rata_SalesNoType_3_maret_kalsel").val();
    var substr_sales_type_3_maret_kalsel = substr_percent(RataRataSales_3_Maret_kalsel);
    RataRataSales_4_Maret_kalsel = $("#txt_Rata_rata_SalesNoType_4_maret_kalsel").val();
    var substr_sales_type_4_maret_kalsel = substr_percent(RataRataSales_4_Maret_kalsel);
      //end Sales
    //end month Maret
    //start month april
      //start Service
    RataRataService_1_April_kalsel = $("#txt_Rata_rata_ServiceNoType_1_april_kalsel").val();
    var substr_service_type_1_april_kalsel = substr_percent(RataRataService_1_April_kalsel);
    RataRataService_2_April_kalsel = $("#txt_Rata_rata_ServiceNoType_2_april_kalsel").val();
    var substr_service_type_2_april_kalsel = substr_percent(RataRataService_2_April_kalsel);
    RataRataService_3_April_kalsel = $("#txt_Rata_rata_ServiceNoType_3_april_kalsel").val();
    var substr_service_type_3_april_kalsel = substr_percent(RataRataService_3_April_kalsel);
    RataRataService_4_April_kalsel = $("#txt_Rata_rata_ServiceNoType_4_april_kalsel").val();
    var substr_service_type_4_april_kalsel = substr_percent(RataRataService_4_April_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_April_kalsel = $("#txt_Rata_rata_SalesNoType_1_april_kalsel").val();
    var substr_sales_type_1_april_kalsel = substr_percent(RataRataSales_1_April_kalsel);
    RataRataSales_2_April_kalsel = $("#txt_Rata_rata_SalesNoType_2_april_kalsel").val();
    var substr_sales_type_2_april_kalsel = substr_percent(RataRataSales_2_April_kalsel);
    RataRataSales_3_April_kalsel = $("#txt_Rata_rata_SalesNoType_3_april_kalsel").val();
    var substr_sales_type_3_april_kalsel = substr_percent(RataRataSales_3_April_kalsel);
    RataRataSales_4_April_kalsel = $("#txt_Rata_rata_SalesNoType_4_april_kalsel").val();
    var substr_sales_type_4_april_kalsel = substr_percent(RataRataSales_4_April_kalsel);
      //end Sales
    //end month april
    //start month mei
      //start Service
    RataRataService_1_Mei_kalsel = $("#txt_Rata_rata_ServiceNoType_1_mei_kalsel").val();
    var substr_service_type_1_mei_kalsel = substr_percent(RataRataService_1_Mei_kalsel);
    RataRataService_2_Mei_kalsel = $("#txt_Rata_rata_ServiceNoType_2_mei_kalsel").val();
    var substr_service_type_2_mei_kalsel = substr_percent(RataRataService_2_Mei_kalsel);
    RataRataService_3_Mei_kalsel = $("#txt_Rata_rata_ServiceNoType_3_mei_kalsel").val();
    var substr_service_type_3_mei_kalsel = substr_percent(RataRataService_3_Mei_kalsel);
    RataRataService_4_Mei_kalsel = $("#txt_Rata_rata_ServiceNoType_4_mei_kalsel").val();
    var substr_service_type_4_mei_kalsel = substr_percent(RataRataService_4_Mei_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_Mei_kalsel = $("#txt_Rata_rata_SalesNoType_1_mei_kalsel").val();
    var substr_sales_type_1_mei_kalsel = substr_percent(RataRataSales_1_Mei_kalsel);
    RataRataSales_2_Mei_kalsel = $("#txt_Rata_rata_SalesNoType_2_mei_kalsel").val();
    var substr_sales_type_2_mei_kalsel = substr_percent(RataRataSales_2_Mei_kalsel);
    RataRataSales_3_Mei_kalsel = $("#txt_Rata_rata_SalesNoType_3_mei_kalsel").val();
    var substr_sales_type_3_mei_kalsel = substr_percent(RataRataSales_3_Mei_kalsel);
    RataRataSales_4_Mei_kalsel = $("#txt_Rata_rata_SalesNoType_4_mei_kalsel").val();
    var substr_sales_type_4_mei_kalsel = substr_percent(RataRataSales_4_Mei_kalsel);
      //end Sales
    //end month mei
    //start month juni
      //start Service
    RataRataService_1_Juni_kalsel = $("#txt_Rata_rata_ServiceNoType_1_juni_kalsel").val();
    var substr_service_type_1_juni_kalsel = substr_percent(RataRataService_1_Juni_kalsel);
    RataRataService_2_Juni_kalsel = $("#txt_Rata_rata_ServiceNoType_2_juni_kalsel").val();
    var substr_service_type_2_juni_kalsel = substr_percent(RataRataService_2_Juni_kalsel);
    RataRataService_3_Juni_kalsel = $("#txt_Rata_rata_ServiceNoType_3_juni_kalsel").val();
    var substr_service_type_3_juni_kalsel = substr_percent(RataRataService_3_Juni_kalsel);
    RataRataService_4_Juni_kalsel = $("#txt_Rata_rata_ServiceNoType_4_juni_kalsel").val();
    var substr_service_type_4_juni_kalsel = substr_percent(RataRataService_4_Juni_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_Juni_kalsel = $("#txt_Rata_rata_SalesNoType_1_juni_kalsel").val();
    var substr_sales_type_1_juni_kalsel = substr_percent(RataRataSales_1_Juni_kalsel);
    RataRataSales_2_Juni_kalsel = $("#txt_Rata_rata_SalesNoType_2_juni_kalsel").val();
    var substr_sales_type_2_juni_kalsel = substr_percent(RataRataSales_2_Juni_kalsel);
    RataRataSales_3_Juni_kalsel = $("#txt_Rata_rata_SalesNoType_3_juni_kalsel").val();
    var substr_sales_type_3_juni_kalsel = substr_percent(RataRataSales_3_Juni_kalsel);
    RataRataSales_4_Juni_kalsel = $("#txt_Rata_rata_SalesNoType_4_juni_kalsel").val();
    var substr_sales_type_4_juni_kalsel = substr_percent(RataRataSales_4_Juni_kalsel);
      //end Sales
    //end month juni
    //start month juli
      //start Service
    RataRataService_1_Juli_kalsel = $("#txt_Rata_rata_ServiceNoType_1_juli_kalsel").val();
    var substr_service_type_1_juli_kalsel = substr_percent(RataRataService_1_Juli_kalsel);
    RataRataService_2_Juli_kalsel = $("#txt_Rata_rata_ServiceNoType_2_juli_kalsel").val();
    var substr_service_type_2_juli_kalsel = substr_percent(RataRataService_2_Juli_kalsel);
    RataRataService_3_Juli_kalsel = $("#txt_Rata_rata_ServiceNoType_3_juli_kalsel").val();
    var substr_service_type_3_juli_kalsel = substr_percent(RataRataService_3_Juli_kalsel);
    RataRataService_4_Juli_kalsel = $("#txt_Rata_rata_ServiceNoType_4_juli_kalsel").val();
    var substr_service_type_4_juli_kalsel = substr_percent(RataRataService_4_Juli_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_Juli_kalsel = $("#txt_Rata_rata_SalesNoType_1_juli_kalsel").val();
    var substr_sales_type_1_juli_kalsel = substr_percent(RataRataSales_1_Juli_kalsel);
    RataRataSales_2_Juli_kalsel = $("#txt_Rata_rata_SalesNoType_2_juli_kalsel").val();
    var substr_sales_type_2_juli_kalsel = substr_percent(RataRataSales_2_Juli_kalsel);
    RataRataSales_3_Juli_kalsel = $("#txt_Rata_rata_SalesNoType_3_juli_kalsel").val();
    var substr_sales_type_3_juli_kalsel = substr_percent(RataRataSales_3_Juli_kalsel);
    RataRataSales_4_Juli_kalsel = $("#txt_Rata_rata_SalesNoType_4_juli_kalsel").val();
    var substr_sales_type_4_juli_kalsel = substr_percent(RataRataSales_4_Juli_kalsel);
      //end Sales
    //end month juli
    //start month agustus
      //start Service
    RataRataService_1_Agustus_kalsel = $("#txt_Rata_rata_ServiceNoType_1_agustus_kalsel").val();
    var substr_service_type_1_agustus_kalsel = substr_percent(RataRataService_1_Agustus_kalsel);
    RataRataService_2_Agustus_kalsel = $("#txt_Rata_rata_ServiceNoType_2_agustus_kalsel").val();
    var substr_service_type_2_agustus_kalsel = substr_percent(RataRataService_2_Agustus_kalsel);
    RataRataService_3_Agustus_kalsel = $("#txt_Rata_rata_ServiceNoType_3_agustus_kalsel").val();
    var substr_service_type_3_agustus_kalsel = substr_percent(RataRataService_3_Agustus_kalsel);
    RataRataService_4_Agustus_kalsel = $("#txt_Rata_rata_ServiceNoType_4_agustus_kalsel").val();
    var substr_service_type_4_agustus_kalsel = substr_percent(RataRataService_4_Agustus_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_Agustus_kalsel = $("#txt_Rata_rata_SalesNoType_1_agustus_kalsel").val();
    var substr_sales_type_1_agustus_kalsel = substr_percent(RataRataSales_1_Agustus_kalsel);
    RataRataSales_2_Agustus_kalsel = $("#txt_Rata_rata_SalesNoType_2_agustus_kalsel").val();
    var substr_sales_type_2_agustus_kalsel = substr_percent(RataRataSales_2_Agustus_kalsel);
    RataRataSales_3_Agustus_kalsel = $("#txt_Rata_rata_SalesNoType_3_agustus_kalsel").val();
    var substr_sales_type_3_agustus_kalsel = substr_percent(RataRataSales_3_Agustus_kalsel);
    RataRataSales_4_Agustus_kalsel = $("#txt_Rata_rata_SalesNoType_4_agustus_kalsel").val();
    var substr_sales_type_4_agustus_kalsel = substr_percent(RataRataSales_4_Agustus_kalsel);
      //end Sales
    //end month agustus
    //start month september
      //start Service
    RataRataService_1_September_kalsel = $("#txt_Rata_rata_ServiceNoType_1_september_kalsel").val();
    var substr_service_type_1_september_kalsel = substr_percent(RataRataService_1_September_kalsel);
    RataRataService_2_September_kalsel = $("#txt_Rata_rata_ServiceNoType_2_september_kalsel").val();
    var substr_service_type_2_september_kalsel = substr_percent(RataRataService_2_September_kalsel);
    RataRataService_3_September_kalsel = $("#txt_Rata_rata_ServiceNoType_3_september_kalsel").val();
    var substr_service_type_3_september_kalsel = substr_percent(RataRataService_3_September_kalsel);
    RataRataService_4_September_kalsel = $("#txt_Rata_rata_ServiceNoType_4_september_kalsel").val();
    var substr_service_type_4_september_kalsel = substr_percent(RataRataService_4_September_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_September_kalsel = $("#txt_Rata_rata_SalesNoType_1_september_kalsel").val();
    var substr_sales_type_1_september_kalsel = substr_percent(RataRataSales_1_September_kalsel);
    RataRataSales_2_September_kalsel = $("#txt_Rata_rata_SalesNoType_2_september_kalsel").val();
    var substr_sales_type_2_september_kalsel = substr_percent(RataRataSales_2_September_kalsel);
    RataRataSales_3_September_kalsel = $("#txt_Rata_rata_SalesNoType_3_september_kalsel").val();
    var substr_sales_type_3_september_kalsel = substr_percent(RataRataSales_3_September_kalsel);
    RataRataSales_4_September_kalsel = $("#txt_Rata_rata_SalesNoType_4_september_kalsel").val();
    var substr_sales_type_4_september_kalsel = substr_percent(RataRataSales_4_September_kalsel);
      //end Sales
    //end month september
    //start month oktober
      //start Service
    RataRataService_1_Oktober_kalsel = $("#txt_Rata_rata_ServiceNoType_1_oktober_kalsel").val();
    var substr_service_type_1_oktober_kalsel = substr_percent(RataRataService_1_Oktober_kalsel);
    RataRataService_2_Oktober_kalsel = $("#txt_Rata_rata_ServiceNoType_2_oktober_kalsel").val();
    var substr_service_type_2_oktober_kalsel = substr_percent(RataRataService_2_Oktober_kalsel);
    RataRataService_3_Oktober_kalsel = $("#txt_Rata_rata_ServiceNoType_3_oktober_kalsel").val();
    var substr_service_type_3_oktober_kalsel = substr_percent(RataRataService_3_Oktober_kalsel);
    RataRataService_4_Oktober_kalsel = $("#txt_Rata_rata_ServiceNoType_4_oktober_kalsel").val();
    var substr_service_type_4_oktober_kalsel = substr_percent(RataRataService_4_Oktober_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_Oktober_kalsel = $("#txt_Rata_rata_SalesNoType_1_oktober_kalsel").val();
    var substr_sales_type_1_oktober_kalsel = substr_percent(RataRataSales_1_Oktober_kalsel);
    RataRataSales_2_Oktober_kalsel = $("#txt_Rata_rata_SalesNoType_2_oktober_kalsel").val();
    var substr_sales_type_2_oktober_kalsel = substr_percent(RataRataSales_2_Oktober_kalsel);
    RataRataSales_3_Oktober_kalsel = $("#txt_Rata_rata_SalesNoType_3_oktober_kalsel").val();
    var substr_sales_type_3_oktober_kalsel = substr_percent(RataRataSales_3_Oktober_kalsel);
    RataRataSales_4_Oktober_kalsel = $("#txt_Rata_rata_SalesNoType_4_oktober_kalsel").val();
    var substr_sales_type_4_oktober_kalsel = substr_percent(RataRataSales_4_Oktober_kalsel);
      //end Sales
    //end month oktober
    //start month november
      //start Service
    RataRataService_1_November_kalsel = $("#txt_Rata_rata_ServiceNoType_1_november_kalsel").val();
    var substr_service_type_1_november_kalsel = substr_percent(RataRataService_1_November_kalsel);
    RataRataService_2_November_kalsel = $("#txt_Rata_rata_ServiceNoType_2_november_kalsel").val();
    var substr_service_type_2_november_kalsel = substr_percent(RataRataService_2_November_kalsel);
    RataRataService_3_November_kalsel = $("#txt_Rata_rata_ServiceNoType_3_november_kalsel").val();
    var substr_service_type_3_november_kalsel = substr_percent(RataRataService_3_November_kalsel);
    RataRataService_4_November_kalsel = $("#txt_Rata_rata_ServiceNoType_4_november_kalsel").val();
    var substr_service_type_4_november_kalsel = substr_percent(RataRataService_4_November_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_November_kalsel = $("#txt_Rata_rata_SalesNoType_1_november_kalsel").val();
    var substr_sales_type_1_november_kalsel = substr_percent(RataRataSales_1_November_kalsel);
    RataRataSales_2_November_kalsel = $("#txt_Rata_rata_SalesNoType_2_november_kalsel").val();
    var substr_sales_type_2_november_kalsel = substr_percent(RataRataSales_2_November_kalsel);
    RataRataSales_3_November_kalsel = $("#txt_Rata_rata_SalesNoType_3_november_kalsel").val();
    var substr_sales_type_3_november_kalsel = substr_percent(RataRataSales_3_November_kalsel);
    RataRataSales_4_November_kalsel = $("#txt_Rata_rata_SalesNoType_4_november_kalsel").val();
    var substr_sales_type_4_november_kalsel = substr_percent(RataRataSales_4_November_kalsel);
      //end Sales
    //end month november
    //start month desember
      //start Service
    RataRataService_1_Desember_kalsel = $("#txt_Rata_rata_ServiceNoType_1_desember_kalsel").val();
    var substr_service_type_1_desember_kalsel = substr_percent(RataRataService_1_Desember_kalsel);
    RataRataService_2_Desember_kalsel = $("#txt_Rata_rata_ServiceNoType_2_desember_kalsel").val();
    var substr_service_type_2_desember_kalsel = substr_percent(RataRataService_2_Desember_kalsel);
    RataRataService_3_Desember_kalsel = $("#txt_Rata_rata_ServiceNoType_3_desember_kalsel").val();
    var substr_service_type_3_desember_kalsel = substr_percent(RataRataService_3_Desember_kalsel);
    RataRataService_4_Desember_kalsel = $("#txt_Rata_rata_ServiceNoType_4_desember_kalsel").val();
    var substr_service_type_4_desember_kalsel = substr_percent(RataRataService_4_Desember_kalsel);
      //end Service
      //Start Sales
    RataRataSales_1_Desember_kalsel = $("#txt_Rata_rata_SalesNoType_1_desember_kalsel").val();
    var substr_sales_type_1_desember_kalsel = substr_percent(RataRataSales_1_Desember_kalsel);
    RataRataSales_2_Desember_kalsel = $("#txt_Rata_rata_SalesNoType_2_desember_kalsel").val();
    var substr_sales_type_2_desember_kalsel = substr_percent(RataRataSales_2_Desember_kalsel);
    RataRataSales_3_Desember_kalsel = $("#txt_Rata_rata_SalesNoType_3_desember_kalsel").val();
    var substr_sales_type_3_desember_kalsel = substr_percent(RataRataSales_3_Desember_kalsel);
    RataRataSales_4_Desember_kalsel = $("#txt_Rata_rata_SalesNoType_4_desember_kalsel").val();
    var substr_sales_type_4_desember_kalsel = substr_percent(RataRataSales_4_Desember_kalsel);
      //end Sales
    //end month desember

    MonthNow = $("#month_now").val();
    BeforeMonth = $("#before_month").val();

    //start hitung rata-rata
      //start month januari
      //start service
    var SumRataRataService_1_kalsel = parseInt(substr_service_type_1_januari_kalsel) + parseInt(substr_service_type_1_februari_kalsel) + parseInt(substr_service_type_1_maret_kalsel) + parseInt(substr_service_type_1_april_kalsel) + parseInt(substr_service_type_1_mei_kalsel) + parseInt(substr_service_type_1_juni_kalsel) + parseInt(substr_service_type_1_juli_kalsel) + parseInt(substr_service_type_1_agustus_kalsel) + parseInt(substr_service_type_1_september_kalsel) + parseInt(substr_service_type_1_oktober_kalsel) + parseInt(substr_service_type_1_november_kalsel) + parseInt(substr_service_type_1_desember_kalsel);
    var TotalRataRataService_1_kalsel = parseInt(SumRataRataService_1_kalsel)/parseInt(BeforeMonth);
    var FixTotalRataRataService_1_kalsel = parseFloat(TotalRataRataService_1_kalsel).toFixed(0)+'%';
      //------
    var SumRataRataService_2_kalsel = parseInt(substr_service_type_2_januari_kalsel) + parseInt(substr_service_type_2_februari_kalsel) + parseInt(substr_service_type_2_maret_kalsel) + parseInt(substr_service_type_2_april_kalsel) + parseInt(substr_service_type_2_mei_kalsel) + parseInt(substr_service_type_2_juni_kalsel) + parseInt(substr_service_type_2_juli_kalsel) + parseInt(substr_service_type_2_agustus_kalsel) + parseInt(substr_service_type_2_september_kalsel) + parseInt(substr_service_type_2_oktober_kalsel) + parseInt(substr_service_type_2_november_kalsel) + parseInt(substr_service_type_2_desember_kalsel);
    var TotalRataRataService_2_kalsel = parseInt(SumRataRataService_2_kalsel)/parseInt(BeforeMonth);
    var FixTotalRataRataService_2_kalsel = parseFloat(TotalRataRataService_2_kalsel).toFixed(0)+'%';
      //------
    var SumRataRataService_3_kalsel = parseInt(substr_service_type_3_januari_kalsel) + parseInt(substr_service_type_3_februari_kalsel) + parseInt(substr_service_type_3_maret_kalsel) + parseInt(substr_service_type_3_april_kalsel) + parseInt(substr_service_type_3_mei_kalsel) + parseInt(substr_service_type_3_juni_kalsel) + parseInt(substr_service_type_3_juli_kalsel) + parseInt(substr_service_type_3_agustus_kalsel) + parseInt(substr_service_type_3_september_kalsel) + parseInt(substr_service_type_3_oktober_kalsel) + parseInt(substr_service_type_3_november_kalsel) + parseInt(substr_service_type_3_desember_kalsel);
    var TotalRataRataService_3_kalsel = parseInt(SumRataRataService_3_kalsel)/parseInt(BeforeMonth);
    var FixTotalRataRataService_3_kalsel = parseFloat(TotalRataRataService_3_kalsel).toFixed(0)+'%';
      //------
    var SumRataRataService_4_kalsel = parseInt(substr_service_type_4_januari_kalsel) + parseInt(substr_service_type_4_februari_kalsel) + parseInt(substr_service_type_4_maret_kalsel) + parseInt(substr_service_type_4_april_kalsel) + parseInt(substr_service_type_4_mei_kalsel) + parseInt(substr_service_type_4_juni_kalsel) + parseInt(substr_service_type_4_juli_kalsel) + parseInt(substr_service_type_4_agustus_kalsel) + parseInt(substr_service_type_4_september_kalsel) + parseInt(substr_service_type_4_oktober_kalsel) + parseInt(substr_service_type_4_november_kalsel) + parseInt(substr_service_type_4_desember_kalsel);
    var TotalRataRataService_4_kalsel = parseInt(SumRataRataService_4_kalsel)/parseInt(BeforeMonth);
    var FixTotalRataRataService_4_kalsel = parseFloat(TotalRataRataService_4_kalsel).toFixed(0)+'%';
      //end service
      //start sales
    var SumRataRataSales_1_kalsel = parseInt(substr_sales_type_1_januari_kalsel) + parseInt(substr_sales_type_1_februari_kalsel) + parseInt(substr_sales_type_1_maret_kalsel) + parseInt(substr_sales_type_1_april_kalsel) + parseInt(substr_sales_type_1_mei_kalsel) + parseInt(substr_sales_type_1_juni_kalsel) + parseInt(substr_sales_type_1_juli_kalsel) + parseInt(substr_sales_type_1_agustus_kalsel) + parseInt(substr_sales_type_1_september_kalsel) + parseInt(substr_sales_type_1_oktober_kalsel) + parseInt(substr_sales_type_1_november_kalsel) + parseInt(substr_sales_type_1_desember_kalsel);
    var TotalRataRataSales_1_kalsel = parseInt(SumRataRataSales_1_kalsel)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_1_kalsel = parseFloat(TotalRataRataSales_1_kalsel).toFixed(0)+'%';
      //------
    var SumRataRataSales_2_kalsel = parseInt(substr_sales_type_2_januari_kalsel) + parseInt(substr_sales_type_2_februari_kalsel) + parseInt(substr_sales_type_2_maret_kalsel) + parseInt(substr_sales_type_2_april_kalsel) + parseInt(substr_sales_type_2_mei_kalsel) + parseInt(substr_sales_type_2_juni_kalsel) + parseInt(substr_sales_type_2_juli_kalsel) + parseInt(substr_sales_type_2_agustus_kalsel) + parseInt(substr_sales_type_2_september_kalsel) + parseInt(substr_sales_type_2_oktober_kalsel) + parseInt(substr_sales_type_2_november_kalsel) + parseInt(substr_sales_type_2_desember_kalsel);
    var TotalRataRataSales_2_kalsel = parseInt(SumRataRataSales_2_kalsel)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_2_kalsel = parseFloat(TotalRataRataSales_2_kalsel).toFixed(0)+'%';
      //------
    var SumRataRataSales_3_kalsel = parseInt(substr_sales_type_3_januari_kalsel) + parseInt(substr_sales_type_3_februari_kalsel) + parseInt(substr_sales_type_3_maret_kalsel) + parseInt(substr_sales_type_3_april_kalsel) + parseInt(substr_sales_type_3_mei_kalsel) + parseInt(substr_sales_type_3_juni_kalsel) + parseInt(substr_sales_type_3_juli_kalsel) + parseInt(substr_sales_type_3_agustus_kalsel) + parseInt(substr_sales_type_3_september_kalsel) + parseInt(substr_sales_type_3_oktober_kalsel) + parseInt(substr_sales_type_3_november_kalsel) + parseInt(substr_sales_type_3_desember_kalsel);
    var TotalRataRataSales_3_kalsel = parseInt(SumRataRataSales_3_kalsel)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_3_kalsel = parseFloat(TotalRataRataSales_3_kalsel).toFixed(0)+'%';
      //------
    var SumRataRataSales_4_kalsel = parseInt(substr_sales_type_4_januari_kalsel) + parseInt(substr_sales_type_4_februari_kalsel) + parseInt(substr_sales_type_4_maret_kalsel) + parseInt(substr_sales_type_4_april_kalsel) + parseInt(substr_sales_type_4_mei_kalsel) + parseInt(substr_sales_type_4_juni_kalsel) + parseInt(substr_sales_type_4_juli_kalsel) + parseInt(substr_sales_type_4_agustus_kalsel) + parseInt(substr_sales_type_4_september_kalsel) + parseInt(substr_sales_type_4_oktober_kalsel) + parseInt(substr_sales_type_4_november_kalsel) + parseInt(substr_sales_type_4_desember_kalsel);
    var TotalRataRataSales_4_kalsel = parseInt(SumRataRataSales_4_kalsel)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_4_kalsel = parseFloat(TotalRataRataSales_4_kalsel).toFixed(0)+'%';
      //end sales
      //end month januari
    //end hitung rata-rata //average_sales_type_1_all_kalsel

    //start januari
      //start service
    $("#average_service_type_1_all_kalsel").val(substr_percent(FixTotalRataRataService_1_kalsel));  
    $('#p_service_type_1_all_kalsel').html(FixTotalRataRataService_1_kalsel);
    $("#average_service_type_2_all_kalsel").val(substr_percent(FixTotalRataRataService_2_kalsel));  
    $('#p_service_type_2_all_kalsel').html(FixTotalRataRataService_2_kalsel);
    $("#average_service_type_3_all_kalsel").val(substr_percent(FixTotalRataRataService_3_kalsel));  
    $('#p_service_type_3_all_kalsel').html(FixTotalRataRataService_3_kalsel);
    $("#average_service_type_4_all_kalsel").val(substr_percent(FixTotalRataRataService_4_kalsel));  
    $('#p_service_type_4_all_kalsel').html(FixTotalRataRataService_4_kalsel);
      //end service
      //start sales
    $("#average_sales_type_1_all_kalsel").val(substr_percent(FixTotalRataRataSales_1_kalsel));  
    $('#p_sales_type_1_all_kalsel').html(FixTotalRataRataSales_1_kalsel);
    $("#average_sales_type_2_all_kalsel").val(substr_percent(FixTotalRataRataSales_2_kalsel));  
    $('#p_sales_type_2_all_kalsel').html(FixTotalRataRataSales_2_kalsel);
    $("#average_sales_type_3_all_kalsel").val(substr_percent(FixTotalRataRataSales_3_kalsel));  
    $('#p_sales_type_3_all_kalsel').html(FixTotalRataRataSales_3_kalsel);
    $("#average_sales_type_4_all_kalsel").val(substr_percent(FixTotalRataRataSales_4_kalsel));  
    $('#p_sales_type_4_all_kalsel').html(FixTotalRataRataSales_4_kalsel);
      //end sales
    //end januari

    // alert(RataRataSales_3_Mei);//just for testing data with alert
    // AverageSalesType_1 average_sales_type_1
    // document.getElementById("demo").innerHTML = res; // for tag <p>
    // alert(RataRataSales_1_Januari_kalsel);
    //start Januari
      //start service
      $("#service_type_1_januari_kalsel").val(substr_service_type_1_januari_kalsel);
      $('#p_service_type_1_januari_kalsel').html(RataRataService_1_Januari_kalsel);
      $("#service_type_2_januari_kalsel").val(substr_service_type_2_januari_kalsel);
      $('#p_service_type_2_januari_kalsel').html(RataRataService_2_Januari_kalsel);
      $("#service_type_3_januari_kalsel").val(substr_service_type_3_januari_kalsel);
      $('#p_service_type_3_januari_kalsel').html(RataRataService_3_Januari_kalsel);
      $("#service_type_4_januari_kalsel").val(substr_service_type_4_januari_kalsel);
      $('#p_service_type_4_januari_kalsel').html(RataRataService_4_Januari_kalsel);
      //end service
      //start sales
      $("#sales_type_1_januari_kalsel").val(substr_sales_type_1_januari_kalsel);
      $('#p_sales_type_1_januari_kalsel').html(RataRataSales_1_Januari_kalsel);
      $("#sales_type_2_januari_kalsel").val(substr_sales_type_2_januari_kalsel);
      $('#p_sales_type_2_januari_kalsel').html(RataRataSales_2_Januari_kalsel);
      $("#sales_type_3_januari_kalsel").val(substr_sales_type_3_januari_kalsel);
      $('#p_sales_type_3_januari_kalsel').html(RataRataSales_3_Januari_kalsel);
      $("#sales_type_4_januari_kalsel").val(substr_sales_type_4_januari_kalsel);
      $('#p_sales_type_4_januari_kalsel').html(RataRataSales_4_Januari_kalsel);
      //end sales
    //end Januari
    //start Februari
      //start service
      $("#service_type_1_februari_kalsel").val(substr_service_type_1_februari_kalsel);
      $('#p_service_type_1_februari_kalsel').html(RataRataService_1_Februari_kalsel);
      $("#service_type_2_februari_kalsel").val(substr_service_type_2_februari_kalsel);
      $('#p_service_type_2_februari_kalsel').html(RataRataService_2_Februari_kalsel);
      $("#service_type_3_februari_kalsel").val(substr_service_type_3_februari_kalsel);
      $('#p_service_type_3_februari_kalsel').html(RataRataService_3_Februari_kalsel);
      $("#service_type_4_februari_kalsel").val(substr_service_type_4_februari_kalsel);
      $('#p_service_type_4_februari_kalsel').html(RataRataService_4_Februari_kalsel);
      //end service
      //start sales
      $("#sales_type_1_februari_kalsel").val(substr_sales_type_1_februari_kalsel);
      $('#p_sales_type_1_februari_kalsel').html(RataRataSales_1_Februari_kalsel);
      $("#sales_type_2_februari_kalsel").val(substr_sales_type_2_februari_kalsel);
      $('#p_sales_type_2_februari_kalsel').html(RataRataSales_2_Februari_kalsel);
      $("#sales_type_3_februari_kalsel").val(substr_sales_type_3_februari_kalsel);
      $('#p_sales_type_3_februari_kalsel').html(RataRataSales_3_Februari_kalsel);
      $("#sales_type_4_februari_kalsel").val(substr_sales_type_4_februari_kalsel);
      $('#p_sales_type_4_februari_kalsel').html(RataRataSales_4_Februari_kalsel);
      //end sales
    //end Februari
    //start maret
      //start service
      $("#service_type_1_maret_kalsel").val(substr_service_type_1_maret_kalsel);
      $('#p_service_type_1_maret_kalsel').html(RataRataService_1_Maret_kalsel);
      $("#service_type_2_maret_kalsel").val(substr_service_type_2_maret_kalsel);
      $('#p_service_type_2_maret_kalsel').html(RataRataService_2_Maret_kalsel);
      $("#service_type_3_maret_kalsel").val(substr_service_type_3_maret_kalsel);
      $('#p_service_type_3_maret_kalsel').html(RataRataService_3_Maret_kalsel);
      $("#service_type_4_maret_kalsel").val(substr_service_type_4_maret_kalsel);
      $('#p_service_type_4_maret_kalsel').html(RataRataService_4_Maret_kalsel);
      //end service
      //start sales
      $("#sales_type_1_maret_kalsel").val(substr_sales_type_1_maret_kalsel);
      $('#p_sales_type_1_maret_kalsel').html(RataRataSales_1_Maret_kalsel);
      $("#sales_type_2_maret_kalsel").val(substr_sales_type_2_maret_kalsel);
      $('#p_sales_type_2_maret_kalsel').html(RataRataSales_2_Maret_kalsel);
      $("#sales_type_3_maret_kalsel").val(substr_sales_type_3_maret_kalsel);
      $('#p_sales_type_3_maret_kalsel').html(RataRataSales_3_Maret_kalsel);
      $("#sales_type_4_maret_kalsel").val(substr_sales_type_4_maret_kalsel);
      $('#p_sales_type_4_maret_kalsel').html(RataRataSales_4_Maret_kalsel);
      //end sales
    //end maret
    //start april
      //start service
      $("#service_type_1_april_kalsel").val(substr_service_type_1_april_kalsel);
      $('#p_service_type_1_april_kalsel').html(RataRataService_1_April_kalsel);
      $("#service_type_2_april_kalsel").val(substr_service_type_2_april_kalsel);
      $('#p_service_type_2_april_kalsel').html(RataRataService_2_April_kalsel);
      $("#service_type_3_april_kalsel").val(substr_service_type_3_april_kalsel);
      $('#p_service_type_3_april_kalsel').html(RataRataService_3_April_kalsel);
      $("#service_type_4_april_kalsel").val(substr_service_type_4_april_kalsel);
      $('#p_service_type_4_april_kalsel').html(RataRataService_4_April_kalsel);
      //end service
      //start sales
      $("#sales_type_1_april_kalsel").val(substr_sales_type_1_april_kalsel);
      $('#p_sales_type_1_april_kalsel').html(RataRataSales_1_April_kalsel);
      $("#sales_type_2_april_kalsel").val(substr_sales_type_2_april_kalsel);
      $('#p_sales_type_2_april_kalsel').html(RataRataSales_2_April_kalsel);
      $("#sales_type_3_april_kalsel").val(substr_sales_type_3_april_kalsel);
      $('#p_sales_type_3_april_kalsel').html(RataRataSales_3_April_kalsel);
      $("#sales_type_4_april_kalsel").val(substr_sales_type_4_april_kalsel);
      $('#p_sales_type_4_april_kalsel').html(RataRataSales_4_April_kalsel);
      //end sales
    //end april
    //start mei
      //start service
      $("#service_type_1_mei_kalsel").val(substr_service_type_1_mei_kalsel);
      $('#p_service_type_1_mei_kalsel').html(RataRataService_1_Mei_kalsel);
      $("#service_type_2_mei_kalsel").val(substr_service_type_2_mei_kalsel);
      $('#p_service_type_2_mei_kalsel').html(RataRataService_2_Mei_kalsel);
      $("#service_type_3_mei_kalsel").val(substr_service_type_3_mei_kalsel);
      $('#p_service_type_3_mei_kalsel').html(RataRataService_3_Mei_kalsel);
      $("#service_type_4_mei_kalsel").val(substr_service_type_4_mei_kalsel);
      $('#p_service_type_4_mei_kalsel').html(RataRataService_4_Mei_kalsel);
      //end service
      //start sales
      $("#sales_type_1_mei_kalsel").val(substr_sales_type_1_mei_kalsel);
      $('#p_sales_type_1_mei_kalsel').html(RataRataSales_1_Mei_kalsel);
      $("#sales_type_2_mei_kalsel").val(substr_sales_type_2_mei_kalsel);
      $('#p_sales_type_2_mei_kalsel').html(RataRataSales_2_Mei_kalsel);
      $("#sales_type_3_mei_kalsel").val(substr_sales_type_3_mei_kalsel);
      $('#p_sales_type_3_mei_kalsel').html(RataRataSales_3_Mei_kalsel);
      $("#sales_type_4_mei_kalsel").val(substr_sales_type_4_mei_kalsel);
      $('#p_sales_type_4_mei_kalsel').html(RataRataSales_4_Mei_kalsel);
      //end sales
    //end mei
    //start juni
      //start service
      $("#service_type_1_juni_kalsel").val(substr_service_type_1_juni_kalsel);
      $('#p_service_type_1_juni_kalsel').html(RataRataService_1_Juni_kalsel);
      $("#service_type_2_juni_kalsel").val(substr_service_type_2_juni_kalsel);
      $('#p_service_type_2_juni_kalsel').html(RataRataService_2_Juni_kalsel);
      $("#service_type_3_juni_kalsel").val(substr_service_type_3_juni_kalsel);
      $('#p_service_type_3_juni_kalsel').html(RataRataService_3_Juni_kalsel);
      $("#service_type_4_juni_kalsel").val(substr_service_type_4_juni_kalsel);
      $('#p_service_type_4_juni_kalsel').html(RataRataService_4_Juni_kalsel);
      //end service
      //start sales
      $("#sales_type_1_juni_kalsel").val(substr_sales_type_1_juni_kalsel);
      $('#p_sales_type_1_juni_kalsel').html(RataRataSales_1_Juni_kalsel);
      $("#sales_type_2_juni_kalsel").val(substr_sales_type_2_juni_kalsel);
      $('#p_sales_type_2_juni_kalsel').html(RataRataSales_2_Juni_kalsel);
      $("#sales_type_3_juni_kalsel").val(substr_sales_type_3_juni_kalsel);
      $('#p_sales_type_3_juni_kalsel').html(RataRataSales_3_Juni_kalsel);
      $("#sales_type_4_juni_kalsel").val(substr_sales_type_4_juni_kalsel);
      $('#p_sales_type_4_juni_kalsel').html(RataRataSales_4_Juni_kalsel);
      //end sales
    //end juni
    //start juli
      //start service
      $("#service_type_1_juli_kalsel").val(substr_service_type_1_juli_kalsel);
      $('#p_service_type_1_juli_kalsel').html(RataRataService_1_Juli_kalsel);
      $("#service_type_2_juli_kalsel").val(substr_service_type_2_juli_kalsel);
      $('#p_service_type_2_juli_kalsel').html(RataRataService_2_Juli_kalsel);
      $("#service_type_3_juli_kalsel").val(substr_service_type_3_juli_kalsel);
      $('#p_service_type_3_juli_kalsel').html(RataRataService_3_Juli_kalsel);
      $("#service_type_4_juli_kalsel").val(substr_service_type_4_juli_kalsel);
      $('#p_service_type_4_juli_kalsel').html(RataRataService_4_Juli_kalsel);
      //end service
      //start sales
      $("#sales_type_1_juli_kalsel").val(substr_sales_type_1_juli_kalsel);
      $('#p_sales_type_1_juli_kalsel').html(RataRataSales_1_Juli_kalsel);
      $("#sales_type_2_juli_kalsel").val(substr_sales_type_2_juli_kalsel);
      $('#p_sales_type_2_juli_kalsel').html(RataRataSales_2_Juli_kalsel);
      $("#sales_type_3_juli_kalsel").val(substr_sales_type_3_juli_kalsel);
      $('#p_sales_type_3_juli_kalsel').html(RataRataSales_3_Juli_kalsel);
      $("#sales_type_4_juli_kalsel").val(substr_sales_type_4_juli_kalsel);
      $('#p_sales_type_4_juli_kalsel').html(RataRataSales_4_Juli_kalsel);
      //end sales
    //end juli
    //start agustus
      //start service
      $("#service_type_1_agustus_kalsel").val(substr_service_type_1_agustus_kalsel);
      $('#p_service_type_1_agustus_kalsel').html(RataRataService_1_Agustus_kalsel);
      $("#service_type_2_agustus_kalsel").val(substr_service_type_2_agustus_kalsel);
      $('#p_service_type_2_agustus_kalsel').html(RataRataService_2_Agustus_kalsel);
      $("#service_type_3_agustus_kalsel").val(substr_service_type_3_agustus_kalsel);
      $('#p_service_type_3_agustus_kalsel').html(RataRataService_3_Agustus_kalsel);
      $("#service_type_4_agustus_kalsel").val(substr_service_type_4_agustus_kalsel);
      $('#p_service_type_4_agustus_kalsel').html(RataRataService_4_Agustus_kalsel);
      //end service
      //start sales
      $("#sales_type_1_agustus_kalsel").val(substr_sales_type_1_agustus_kalsel);
      $('#p_sales_type_1_agustus_kalsel').html(RataRataSales_1_Agustus_kalsel);
      $("#sales_type_2_agustus_kalsel").val(substr_sales_type_2_agustus_kalsel);
      $('#p_sales_type_2_agustus_kalsel').html(RataRataSales_2_Agustus_kalsel);
      $("#sales_type_3_agustus_kalsel").val(substr_sales_type_3_agustus_kalsel);
      $('#p_sales_type_3_agustus_kalsel').html(RataRataSales_3_Agustus_kalsel);
      $("#sales_type_4_agustus_kalsel").val(substr_sales_type_4_agustus_kalsel);
      $('#p_sales_type_4_agustus_kalsel').html(RataRataSales_4_Agustus_kalsel);
      //end sales
    //end agustus
    //start september
      //start service
      $("#service_type_1_september_kalsel").val(substr_service_type_1_september_kalsel);
      $('#p_service_type_1_september_kalsel').html(RataRataService_1_September_kalsel);
      $("#service_type_2_september_kalsel").val(substr_service_type_2_september_kalsel);
      $('#p_service_type_2_september_kalsel').html(RataRataService_2_September_kalsel);
      $("#service_type_3_september_kalsel").val(substr_service_type_3_september_kalsel);
      $('#p_service_type_3_september_kalsel').html(RataRataService_3_September_kalsel);
      $("#service_type_4_september_kalsel").val(substr_service_type_4_september_kalsel);
      $('#p_service_type_4_september_kalsel').html(RataRataService_4_September_kalsel);
      //end service
      //start sales
      $("#sales_type_1_september_kalsel").val(substr_sales_type_1_september_kalsel);
      $('#p_sales_type_1_september_kalsel').html(RataRataSales_1_September_kalsel);
      $("#sales_type_2_september_kalsel").val(substr_sales_type_2_september_kalsel);
      $('#p_sales_type_2_september_kalsel').html(RataRataSales_2_September_kalsel);
      $("#sales_type_3_september_kalsel").val(substr_sales_type_3_september_kalsel);
      $('#p_sales_type_3_september_kalsel').html(RataRataSales_3_September_kalsel);
      $("#sales_type_4_september_kalsel").val(substr_sales_type_4_september_kalsel);
      $('#p_sales_type_4_september_kalsel').html(RataRataSales_4_September_kalsel);
      //end sales
    //end september
    //start oktober
      //start service
      $("#service_type_1_oktober_kalsel").val(substr_service_type_1_oktober_kalsel);
      $('#p_service_type_1_oktober_kalsel').html(RataRataService_1_Oktober_kalsel);
      $("#service_type_2_oktober_kalsel").val(substr_service_type_2_oktober_kalsel);
      $('#p_service_type_2_oktober_kalsel').html(RataRataService_2_Oktober_kalsel);
      $("#service_type_3_oktober_kalsel").val(substr_service_type_3_oktober_kalsel);
      $('#p_service_type_3_oktober_kalsel').html(RataRataService_3_Oktober_kalsel);
      $("#service_type_4_oktober_kalsel").val(substr_service_type_4_oktober_kalsel);
      $('#p_service_type_4_oktober_kalsel').html(RataRataService_4_Oktober_kalsel);
      //end service
      //start sales
      $("#sales_type_1_oktober_kalsel").val(substr_sales_type_1_oktober_kalsel);
      $('#p_sales_type_1_oktober_kalsel').html(RataRataSales_1_Oktober_kalsel);
      $("#sales_type_2_oktober_kalsel").val(substr_sales_type_2_oktober_kalsel);
      $('#p_sales_type_2_oktober_kalsel').html(RataRataSales_2_Oktober_kalsel);
      $("#sales_type_3_oktober_kalsel").val(substr_sales_type_3_oktober_kalsel);
      $('#p_sales_type_3_oktober_kalsel').html(RataRataSales_3_Oktober_kalsel);
      $("#sales_type_4_oktober_kalsel").val(substr_sales_type_4_oktober_kalsel);
      $('#p_sales_type_4_oktober_kalsel').html(RataRataSales_4_Oktober_kalsel);
      //end sales
    //end oktober
    //start november
      //start service
      $("#service_type_1_november_kalsel").val(substr_service_type_1_november_kalsel);
      $('#p_service_type_1_november_kalsel').html(RataRataService_1_November_kalsel);
      $("#service_type_2_november_kalsel").val(substr_service_type_2_november_kalsel);
      $('#p_service_type_2_november_kalsel').html(RataRataService_2_November_kalsel);
      $("#service_type_3_november_kalsel").val(substr_service_type_3_november_kalsel);
      $('#p_service_type_3_november_kalsel').html(RataRataService_3_November_kalsel);
      $("#service_type_4_november_kalsel").val(substr_service_type_4_november_kalsel);
      $('#p_service_type_4_november_kalsel').html(RataRataService_4_November_kalsel);
      //end service
      //start sales
      $("#sales_type_1_november_kalsel").val(substr_sales_type_1_november_kalsel);
      $('#p_sales_type_1_november_kalsel').html(RataRataSales_1_November_kalsel);
      $("#sales_type_2_november_kalsel").val(substr_sales_type_2_november_kalsel);
      $('#p_sales_type_2_november_kalsel').html(RataRataSales_2_November_kalsel);
      $("#sales_type_3_november_kalsel").val(substr_sales_type_3_november_kalsel);
      $('#p_sales_type_3_november_kalsel').html(RataRataSales_3_November_kalsel);
      $("#sales_type_4_november_kalsel").val(substr_sales_type_4_november_kalsel);
      $('#p_sales_type_4_november_kalsel').html(RataRataSales_4_November_kalsel);
      //end sales
    //end november
    //start desember
      //start service
      $("#service_type_1_desember_kalsel").val(substr_service_type_1_desember_kalsel);
      $('#p_service_type_1_desember_kalsel').html(RataRataService_1_Desember_kalsel);
      $("#service_type_2_desember_kalsel").val(substr_service_type_2_desember_kalsel);
      $('#p_service_type_2_desember_kalsel').html(RataRataService_2_Desember_kalsel);
      $("#service_type_3_desember_kalsel").val(substr_service_type_3_desember_kalsel);
      $('#p_service_type_3_desember_kalsel').html(RataRataService_3_Desember_kalsel);
      $("#service_type_4_desember_kalsel").val(substr_service_type_4_desember_kalsel);
      $('#p_service_type_4_desember_kalsel').html(RataRataService_4_Desember_kalsel);
      //end service
      //start sales
      $("#sales_type_1_desember_kalsel").val(substr_sales_type_1_desember_kalsel);
      $('#p_sales_type_1_desember_kalsel').html(RataRataSales_1_Desember_kalsel);
      $("#sales_type_2_desember_kalsel").val(substr_sales_type_2_desember_kalsel);
      $('#p_sales_type_2_desember_kalsel').html(RataRataSales_2_Desember_kalsel);
      $("#sales_type_3_desember_kalsel").val(substr_sales_type_3_desember_kalsel);
      $('#p_sales_type_3_desember_kalsel').html(RataRataSales_3_Desember_kalsel);
      $("#sales_type_4_desember_kalsel").val(substr_sales_type_4_desember_kalsel);
      $('#p_sales_type_4_desember_kalsel').html(RataRataSales_4_Desember_kalsel);
      //end sales
    //end desember

    //start tag p
    // $('#p_sales_type_1_agustus').html(RataRataSales_1_Agustus);//not used
    //end tag p
  }
  //END FOR AREA SEMUA CABANG KALSEL

  //START FOR AREA SEMUA CABANG SUMSEL
  function get_rata_rata_every_month_peryear_sumsel(){
    x = $("#txt_Rata_rata_ServiceNoType_4_maret_sumsel").val();
    // alert(x);
    //start month January
      //start for Tyoe Service
    RataRataService_1_Januari_sumsel = $("#txt_Rata_rata_ServiceNoType_1_januari_sumsel").val();
    var substr_service_type_1_januari_sumsel = substr_percent(RataRataService_1_Januari_sumsel);
    RataRataService_2_Januari_sumsel = $("#txt_Rata_rata_ServiceNoType_2_januari_sumsel").val();
    var substr_service_type_2_januari_sumsel = substr_percent(RataRataService_2_Januari_sumsel);
    RataRataService_3_Januari_sumsel = $("#txt_Rata_rata_ServiceNoType_3_januari_sumsel").val();
    var substr_service_type_3_januari_sumsel = substr_percent(RataRataService_3_Januari_sumsel);
    RataRataService_4_Januari_sumsel = $("#txt_Rata_rata_ServiceNoType_4_januari_sumsel").val();
    var substr_service_type_4_januari_sumsel = substr_percent(RataRataService_4_Januari_sumsel);
      //end for Type Service
      //start for Type Sales
    RataRataSales_1_Januari_sumsel = $("#txt_Rata_rata_SalesNoType_1_januari_sumsel").val();
    var substr_sales_type_1_januari_sumsel = substr_percent(RataRataSales_1_Januari_sumsel);
    RataRataSales_2_Januari_sumsel = $("#txt_Rata_rata_SalesNoType_2_januari").val();
    var substr_sales_type_2_januari_sumsel = substr_percent(RataRataSales_2_Januari_sumsel);
    RataRataSales_3_Januari_sumsel = $("#txt_Rata_rata_SalesNoType_3_januari").val();
    var substr_sales_type_3_januari_sumsel = substr_percent(RataRataSales_3_Januari_sumsel);
    RataRataSales_4_Januari_sumsel = $("#txt_Rata_rata_SalesNoType_4_januari").val();
    var substr_sales_type_4_januari_sumsel = substr_percent(RataRataSales_4_Januari_sumsel);
      //end for Type Sales
    //end month January
    //start month Februari
      //start Service
    RataRataService_1_Februari_sumsel = $("#txt_Rata_rata_ServiceNoType_1_februari_sumsel").val();
    var substr_service_type_1_februari_sumsel = substr_percent(RataRataService_1_Februari_sumsel);
    RataRataService_2_Februari_sumsel = $("#txt_Rata_rata_ServiceNoType_2_februari_sumsel").val();
    var substr_service_type_2_februari_sumsel = substr_percent(RataRataService_2_Februari_sumsel);
    RataRataService_3_Februari_sumsel = $("#txt_Rata_rata_ServiceNoType_3_februari_sumsel").val();
    var substr_service_type_3_februari_sumsel = substr_percent(RataRataService_3_Februari_sumsel);
    RataRataService_4_Februari_sumsel = $("#txt_Rata_rata_ServiceNoType_4_februari_sumsel").val();
    var substr_service_type_4_februari_sumsel = substr_percent(RataRataService_4_Februari_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_Februari_sumsel = $("#txt_Rata_rata_SalesNoType_1_februari_sumsel").val();
    var substr_sales_type_1_februari_sumsel = substr_percent(RataRataSales_1_Februari_sumsel);
    RataRataSales_2_Februari_sumsel = $("#txt_Rata_rata_SalesNoType_2_februari_sumsel").val();
    var substr_sales_type_2_februari_sumsel = substr_percent(RataRataSales_2_Februari_sumsel);
    RataRataSales_3_Februari_sumsel = $("#txt_Rata_rata_SalesNoType_3_februari_sumsel").val();
    var substr_sales_type_3_februari_sumsel = substr_percent(RataRataSales_3_Februari_sumsel);
    RataRataSales_4_Februari_sumsel = $("#txt_Rata_rata_SalesNoType_4_februari_sumsel").val();
    var substr_sales_type_4_februari_sumsel = substr_percent(RataRataSales_4_Februari_sumsel);
      //end Sales
    //end month Februari
    //start month Maret
      //start Service
    RataRataService_1_Maret_sumsel = $("#txt_Rata_rata_ServiceNoType_1_maret_sumsel").val();
    var substr_service_type_1_maret_sumsel = substr_percent(RataRataService_1_Maret_sumsel);
    RataRataService_2_Maret_sumsel = $("#txt_Rata_rata_ServiceNoType_2_maret_sumsel").val();
    var substr_service_type_2_maret_sumsel = substr_percent(RataRataService_2_Maret_sumsel);
    RataRataService_3_Maret_sumsel = $("#txt_Rata_rata_ServiceNoType_3_maret_sumsel").val();
    var substr_service_type_3_maret_sumsel = substr_percent(RataRataService_3_Maret_sumsel);
    RataRataService_4_Maret_sumsel = $("#txt_Rata_rata_ServiceNoType_4_maret_sumsel").val();
    var substr_service_type_4_maret_sumsel = substr_percent(RataRataService_4_Maret_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_Maret_sumsel = $("#txt_Rata_rata_SalesNoType_1_maret_sumsel").val();
    var substr_sales_type_1_maret_sumsel = substr_percent(RataRataSales_1_Maret_sumsel);
    RataRataSales_2_Maret_sumsel = $("#txt_Rata_rata_SalesNoType_2_maret_sumsel").val();
    var substr_sales_type_2_maret_sumsel = substr_percent(RataRataSales_2_Maret_sumsel);
    RataRataSales_3_Maret_sumsel = $("#txt_Rata_rata_SalesNoType_3_maret_sumsel").val();
    var substr_sales_type_3_maret_sumsel = substr_percent(RataRataSales_3_Maret_sumsel);
    RataRataSales_4_Maret_sumsel = $("#txt_Rata_rata_SalesNoType_4_maret_sumsel").val();
    var substr_sales_type_4_maret_sumsel = substr_percent(RataRataSales_4_Maret_sumsel);
      //end Sales
    //end month Maret
    //start month april
      //start Service
    RataRataService_1_April_sumsel = $("#txt_Rata_rata_ServiceNoType_1_april_sumsel").val();
    var substr_service_type_1_april_sumsel = substr_percent(RataRataService_1_April_sumsel);
    RataRataService_2_April_sumsel = $("#txt_Rata_rata_ServiceNoType_2_april_sumsel").val();
    var substr_service_type_2_april_sumsel = substr_percent(RataRataService_2_April_sumsel);
    RataRataService_3_April_sumsel = $("#txt_Rata_rata_ServiceNoType_3_april_sumsel").val();
    var substr_service_type_3_april_sumsel = substr_percent(RataRataService_3_April_sumsel);
    RataRataService_4_April_sumsel = $("#txt_Rata_rata_ServiceNoType_4_april_sumsel").val();
    var substr_service_type_4_april_sumsel = substr_percent(RataRataService_4_April_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_April_sumsel = $("#txt_Rata_rata_SalesNoType_1_april_sumsel").val();
    var substr_sales_type_1_april_sumsel = substr_percent(RataRataSales_1_April_sumsel);
    RataRataSales_2_April_sumsel = $("#txt_Rata_rata_SalesNoType_2_april_sumsel").val();
    var substr_sales_type_2_april_sumsel = substr_percent(RataRataSales_2_April_sumsel);
    RataRataSales_3_April_sumsel = $("#txt_Rata_rata_SalesNoType_3_april_sumsel").val();
    var substr_sales_type_3_april_sumsel = substr_percent(RataRataSales_3_April_sumsel);
    RataRataSales_4_April_sumsel = $("#txt_Rata_rata_SalesNoType_4_april_sumsel").val();
    var substr_sales_type_4_april_sumsel = substr_percent(RataRataSales_4_April_sumsel);
      //end Sales
    //end month april
    //start month mei
      //start Service
    RataRataService_1_Mei_sumsel = $("#txt_Rata_rata_ServiceNoType_1_mei_sumsel").val();
    var substr_service_type_1_mei_sumsel = substr_percent(RataRataService_1_Mei_sumsel);
    RataRataService_2_Mei_sumsel = $("#txt_Rata_rata_ServiceNoType_2_mei_sumsel").val();
    var substr_service_type_2_mei_sumsel = substr_percent(RataRataService_2_Mei_sumsel);
    RataRataService_3_Mei_sumsel = $("#txt_Rata_rata_ServiceNoType_3_mei_sumsel").val();
    var substr_service_type_3_mei_sumsel = substr_percent(RataRataService_3_Mei_sumsel);
    RataRataService_4_Mei_sumsel = $("#txt_Rata_rata_ServiceNoType_4_mei_sumsel").val();
    var substr_service_type_4_mei_sumsel = substr_percent(RataRataService_4_Mei_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_Mei_sumsel = $("#txt_Rata_rata_SalesNoType_1_mei_sumsel").val();
    var substr_sales_type_1_mei_sumsel = substr_percent(RataRataSales_1_Mei_sumsel);
    RataRataSales_2_Mei_sumsel = $("#txt_Rata_rata_SalesNoType_2_mei_sumsel").val();
    var substr_sales_type_2_mei_sumsel = substr_percent(RataRataSales_2_Mei_sumsel);
    RataRataSales_3_Mei_sumsel = $("#txt_Rata_rata_SalesNoType_3_mei_sumsel").val();
    var substr_sales_type_3_mei_sumsel = substr_percent(RataRataSales_3_Mei_sumsel);
    RataRataSales_4_Mei_sumsel = $("#txt_Rata_rata_SalesNoType_4_mei_sumsel").val();
    var substr_sales_type_4_mei_sumsel = substr_percent(RataRataSales_4_Mei_sumsel);
      //end Sales
    //end month mei
    //start month juni
      //start Service
    RataRataService_1_Juni_sumsel = $("#txt_Rata_rata_ServiceNoType_1_juni_sumsel").val();
    var substr_service_type_1_juni_sumsel = substr_percent(RataRataService_1_Juni_sumsel);
    RataRataService_2_Juni_sumsel = $("#txt_Rata_rata_ServiceNoType_2_juni_sumsel").val();
    var substr_service_type_2_juni_sumsel = substr_percent(RataRataService_2_Juni_sumsel);
    RataRataService_3_Juni_sumsel = $("#txt_Rata_rata_ServiceNoType_3_juni_sumsel").val();
    var substr_service_type_3_juni_sumsel = substr_percent(RataRataService_3_Juni_sumsel);
    RataRataService_4_Juni_sumsel = $("#txt_Rata_rata_ServiceNoType_4_juni_sumsel").val();
    var substr_service_type_4_juni_sumsel = substr_percent(RataRataService_4_Juni_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_Juni_sumsel = $("#txt_Rata_rata_SalesNoType_1_juni_sumsel").val();
    var substr_sales_type_1_juni_sumsel = substr_percent(RataRataSales_1_Juni_sumsel);
    RataRataSales_2_Juni_sumsel = $("#txt_Rata_rata_SalesNoType_2_juni_sumsel").val();
    var substr_sales_type_2_juni_sumsel = substr_percent(RataRataSales_2_Juni_sumsel);
    RataRataSales_3_Juni_sumsel = $("#txt_Rata_rata_SalesNoType_3_juni_sumsel").val();
    var substr_sales_type_3_juni_sumsel = substr_percent(RataRataSales_3_Juni_sumsel);
    RataRataSales_4_Juni_sumsel = $("#txt_Rata_rata_SalesNoType_4_juni_sumsel").val();
    var substr_sales_type_4_juni_sumsel = substr_percent(RataRataSales_4_Juni_sumsel);
      //end Sales
    //end month juni
    //start month juli
      //start Service
    RataRataService_1_Juli_sumsel = $("#txt_Rata_rata_ServiceNoType_1_juli_sumsel").val();
    var substr_service_type_1_juli_sumsel = substr_percent(RataRataService_1_Juli_sumsel);
    RataRataService_2_Juli_sumsel = $("#txt_Rata_rata_ServiceNoType_2_juli_sumsel").val();
    var substr_service_type_2_juli_sumsel = substr_percent(RataRataService_2_Juli_sumsel);
    RataRataService_3_Juli_sumsel = $("#txt_Rata_rata_ServiceNoType_3_juli_sumsel").val();
    var substr_service_type_3_juli_sumsel = substr_percent(RataRataService_3_Juli_sumsel);
    RataRataService_4_Juli_sumsel = $("#txt_Rata_rata_ServiceNoType_4_juli_sumsel").val();
    var substr_service_type_4_juli_sumsel = substr_percent(RataRataService_4_Juli_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_Juli_sumsel = $("#txt_Rata_rata_SalesNoType_1_juli_sumsel").val();
    var substr_sales_type_1_juli_sumsel = substr_percent(RataRataSales_1_Juli_sumsel);
    RataRataSales_2_Juli_sumsel = $("#txt_Rata_rata_SalesNoType_2_juli_sumsel").val();
    var substr_sales_type_2_juli_sumsel = substr_percent(RataRataSales_2_Juli_sumsel);
    RataRataSales_3_Juli_sumsel = $("#txt_Rata_rata_SalesNoType_3_juli_sumsel").val();
    var substr_sales_type_3_juli_sumsel = substr_percent(RataRataSales_3_Juli_sumsel);
    RataRataSales_4_Juli_sumsel = $("#txt_Rata_rata_SalesNoType_4_juli_sumsel").val();
    var substr_sales_type_4_juli_sumsel = substr_percent(RataRataSales_4_Juli_sumsel);
      //end Sales
    //end month juli
    //start month agustus
      //start Service
    RataRataService_1_Agustus_sumsel = $("#txt_Rata_rata_ServiceNoType_1_agustus_sumsel").val();
    var substr_service_type_1_agustus_sumsel = substr_percent(RataRataService_1_Agustus_sumsel);
    RataRataService_2_Agustus_sumsel = $("#txt_Rata_rata_ServiceNoType_2_agustus_sumsel").val();
    var substr_service_type_2_agustus_sumsel = substr_percent(RataRataService_2_Agustus_sumsel);
    RataRataService_3_Agustus_sumsel = $("#txt_Rata_rata_ServiceNoType_3_agustus_sumsel").val();
    var substr_service_type_3_agustus_sumsel = substr_percent(RataRataService_3_Agustus_sumsel);
    RataRataService_4_Agustus_sumsel = $("#txt_Rata_rata_ServiceNoType_4_agustus_sumsel").val();
    var substr_service_type_4_agustus_sumsel = substr_percent(RataRataService_4_Agustus_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_Agustus_sumsel = $("#txt_Rata_rata_SalesNoType_1_agustus_sumsel").val();
    var substr_sales_type_1_agustus_sumsel = substr_percent(RataRataSales_1_Agustus_sumsel);
    RataRataSales_2_Agustus_sumsel = $("#txt_Rata_rata_SalesNoType_2_agustus_sumsel").val();
    var substr_sales_type_2_agustus_sumsel = substr_percent(RataRataSales_2_Agustus_sumsel);
    RataRataSales_3_Agustus_sumsel = $("#txt_Rata_rata_SalesNoType_3_agustus_sumsel").val();
    var substr_sales_type_3_agustus_sumsel = substr_percent(RataRataSales_3_Agustus_sumsel);
    RataRataSales_4_Agustus_sumsel = $("#txt_Rata_rata_SalesNoType_4_agustus_sumsel").val();
    var substr_sales_type_4_agustus_sumsel = substr_percent(RataRataSales_4_Agustus_sumsel);
      //end Sales
    //end month agustus
    //start month september
      //start Service
    RataRataService_1_September_sumsel = $("#txt_Rata_rata_ServiceNoType_1_september_sumsel").val();
    var substr_service_type_1_september_sumsel = substr_percent(RataRataService_1_September_sumsel);
    RataRataService_2_September_sumsel = $("#txt_Rata_rata_ServiceNoType_2_september_sumsel").val();
    var substr_service_type_2_september_sumsel = substr_percent(RataRataService_2_September_sumsel);
    RataRataService_3_September_sumsel = $("#txt_Rata_rata_ServiceNoType_3_september_sumsel").val();
    var substr_service_type_3_september_sumsel = substr_percent(RataRataService_3_September_sumsel);
    RataRataService_4_September_sumsel = $("#txt_Rata_rata_ServiceNoType_4_september_sumsel").val();
    var substr_service_type_4_september_sumsel = substr_percent(RataRataService_4_September_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_September_sumsel = $("#txt_Rata_rata_SalesNoType_1_september_sumsel").val();
    var substr_sales_type_1_september_sumsel = substr_percent(RataRataSales_1_September_sumsel);
    RataRataSales_2_September_sumsel = $("#txt_Rata_rata_SalesNoType_2_september_sumsel").val();
    var substr_sales_type_2_september_sumsel = substr_percent(RataRataSales_2_September_sumsel);
    RataRataSales_3_September_sumsel = $("#txt_Rata_rata_SalesNoType_3_september_sumsel").val();
    var substr_sales_type_3_september_sumsel = substr_percent(RataRataSales_3_September_sumsel);
    RataRataSales_4_September_sumsel = $("#txt_Rata_rata_SalesNoType_4_september_sumsel").val();
    var substr_sales_type_4_september_sumsel = substr_percent(RataRataSales_4_September_sumsel);
      //end Sales
    //end month september
    //start month oktober
      //start Service
    RataRataService_1_Oktober_sumsel = $("#txt_Rata_rata_ServiceNoType_1_oktober_sumsel").val();
    var substr_service_type_1_oktober_sumsel = substr_percent(RataRataService_1_Oktober_sumsel);
    RataRataService_2_Oktober_sumsel = $("#txt_Rata_rata_ServiceNoType_2_oktober_sumsel").val();
    var substr_service_type_2_oktober_sumsel = substr_percent(RataRataService_2_Oktober_sumsel);
    RataRataService_3_Oktober_sumsel = $("#txt_Rata_rata_ServiceNoType_3_oktober_sumsel").val();
    var substr_service_type_3_oktober_sumsel = substr_percent(RataRataService_3_Oktober_sumsel);
    RataRataService_4_Oktober_sumsel = $("#txt_Rata_rata_ServiceNoType_4_oktober_sumsel").val();
    var substr_service_type_4_oktober_sumsel = substr_percent(RataRataService_4_Oktober_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_Oktober_sumsel = $("#txt_Rata_rata_SalesNoType_1_oktober_sumsel").val();
    var substr_sales_type_1_oktober_sumsel = substr_percent(RataRataSales_1_Oktober_sumsel);
    RataRataSales_2_Oktober_sumsel = $("#txt_Rata_rata_SalesNoType_2_oktober_sumsel").val();
    var substr_sales_type_2_oktober_sumsel = substr_percent(RataRataSales_2_Oktober_sumsel);
    RataRataSales_3_Oktober_sumsel = $("#txt_Rata_rata_SalesNoType_3_oktober_sumsel").val();
    var substr_sales_type_3_oktober_sumsel = substr_percent(RataRataSales_3_Oktober_sumsel);
    RataRataSales_4_Oktober_sumsel = $("#txt_Rata_rata_SalesNoType_4_oktober_sumsel").val();
    var substr_sales_type_4_oktober_sumsel = substr_percent(RataRataSales_4_Oktober_sumsel);
      //end Sales
    //end month oktober
    //start month november
      //start Service
    RataRataService_1_November_sumsel = $("#txt_Rata_rata_ServiceNoType_1_november_sumsel").val();
    var substr_service_type_1_november_sumsel = substr_percent(RataRataService_1_November_sumsel);
    RataRataService_2_November_sumsel = $("#txt_Rata_rata_ServiceNoType_2_november_sumsel").val();
    var substr_service_type_2_november_sumsel = substr_percent(RataRataService_2_November_sumsel);
    RataRataService_3_November_sumsel = $("#txt_Rata_rata_ServiceNoType_3_november_sumsel").val();
    var substr_service_type_3_november_sumsel = substr_percent(RataRataService_3_November_sumsel);
    RataRataService_4_November_sumsel = $("#txt_Rata_rata_ServiceNoType_4_november_sumsel").val();
    var substr_service_type_4_november_sumsel = substr_percent(RataRataService_4_November_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_November_sumsel = $("#txt_Rata_rata_SalesNoType_1_november_sumsel").val();
    var substr_sales_type_1_november_sumsel = substr_percent(RataRataSales_1_November_sumsel);
    RataRataSales_2_November_sumsel = $("#txt_Rata_rata_SalesNoType_2_november_sumsel").val();
    var substr_sales_type_2_november_sumsel = substr_percent(RataRataSales_2_November_sumsel);
    RataRataSales_3_November_sumsel = $("#txt_Rata_rata_SalesNoType_3_november_sumsel").val();
    var substr_sales_type_3_november_sumsel = substr_percent(RataRataSales_3_November_sumsel);
    RataRataSales_4_November_sumsel = $("#txt_Rata_rata_SalesNoType_4_november_sumsel").val();
    var substr_sales_type_4_november_sumsel = substr_percent(RataRataSales_4_November_sumsel);
      //end Sales
    //end month november
    //start month desember
      //start Service
    RataRataService_1_Desember_sumsel = $("#txt_Rata_rata_ServiceNoType_1_desember_sumsel").val();
    var substr_service_type_1_desember_sumsel = substr_percent(RataRataService_1_Desember_sumsel);
    RataRataService_2_Desember_sumsel = $("#txt_Rata_rata_ServiceNoType_2_desember_sumsel").val();
    var substr_service_type_2_desember_sumsel = substr_percent(RataRataService_2_Desember_sumsel);
    RataRataService_3_Desember_sumsel = $("#txt_Rata_rata_ServiceNoType_3_desember_sumsel").val();
    var substr_service_type_3_desember_sumsel = substr_percent(RataRataService_3_Desember_sumsel);
    RataRataService_4_Desember_sumsel = $("#txt_Rata_rata_ServiceNoType_4_desember_sumsel").val();
    var substr_service_type_4_desember_sumsel = substr_percent(RataRataService_4_Desember_sumsel);
      //end Service
      //Start Sales
    RataRataSales_1_Desember_sumsel = $("#txt_Rata_rata_SalesNoType_1_desember_sumsel").val();
    var substr_sales_type_1_desember_sumsel = substr_percent(RataRataSales_1_Desember_sumsel);
    RataRataSales_2_Desember_sumsel = $("#txt_Rata_rata_SalesNoType_2_desember_sumsel").val();
    var substr_sales_type_2_desember_sumsel = substr_percent(RataRataSales_2_Desember_sumsel);
    RataRataSales_3_Desember_sumsel = $("#txt_Rata_rata_SalesNoType_3_desember_sumsel").val();
    var substr_sales_type_3_desember_sumsel = substr_percent(RataRataSales_3_Desember_sumsel);
    RataRataSales_4_Desember_sumsel = $("#txt_Rata_rata_SalesNoType_4_desember_sumsel").val();
    var substr_sales_type_4_desember_sumsel = substr_percent(RataRataSales_4_Desember_sumsel);
      //end Sales
    //end month desember

    MonthNow = $("#month_now").val();
    BeforeMonth = $("#before_month").val();

    //start hitung rata-rata
      //start month januari
      //start service
    var SumRataRataService_1_sumsel = parseInt(substr_service_type_1_januari_sumsel) + parseInt(substr_service_type_1_februari_sumsel) + parseInt(substr_service_type_1_maret_sumsel) + parseInt(substr_service_type_1_april_sumsel) + parseInt(substr_service_type_1_mei_sumsel) + parseInt(substr_service_type_1_juni_sumsel) + parseInt(substr_service_type_1_juli_sumsel) + parseInt(substr_service_type_1_agustus_sumsel) + parseInt(substr_service_type_1_september_sumsel) + parseInt(substr_service_type_1_oktober_sumsel) + parseInt(substr_service_type_1_november_sumsel) + parseInt(substr_service_type_1_desember_sumsel);
    var TotalRataRataService_1_sumsel = parseInt(SumRataRataService_1_sumsel)/parseInt(BeforeMonth);
    var FixTotalRataRataService_1_sumsel = parseFloat(TotalRataRataService_1_sumsel).toFixed(0)+'%';
      //------
    var SumRataRataService_2_sumsel = parseInt(substr_service_type_2_januari_sumsel) + parseInt(substr_service_type_2_februari_sumsel) + parseInt(substr_service_type_2_maret_sumsel) + parseInt(substr_service_type_2_april_sumsel) + parseInt(substr_service_type_2_mei_sumsel) + parseInt(substr_service_type_2_juni_sumsel) + parseInt(substr_service_type_2_juli_sumsel) + parseInt(substr_service_type_2_agustus_sumsel) + parseInt(substr_service_type_2_september_sumsel) + parseInt(substr_service_type_2_oktober_sumsel) + parseInt(substr_service_type_2_november_sumsel) + parseInt(substr_service_type_2_desember_sumsel);
    var TotalRataRataService_2_sumsel = parseInt(SumRataRataService_2_sumsel)/parseInt(BeforeMonth);
    var FixTotalRataRataService_2_sumsel = parseFloat(TotalRataRataService_2_sumsel).toFixed(0)+'%';
      //------
    var SumRataRataService_3_sumsel = parseInt(substr_service_type_3_januari_sumsel) + parseInt(substr_service_type_3_februari_sumsel) + parseInt(substr_service_type_3_maret_sumsel) + parseInt(substr_service_type_3_april_sumsel) + parseInt(substr_service_type_3_mei_sumsel) + parseInt(substr_service_type_3_juni_sumsel) + parseInt(substr_service_type_3_juli_sumsel) + parseInt(substr_service_type_3_agustus_sumsel) + parseInt(substr_service_type_3_september_sumsel) + parseInt(substr_service_type_3_oktober_sumsel) + parseInt(substr_service_type_3_november_sumsel) + parseInt(substr_service_type_3_desember_sumsel);
    var TotalRataRataService_3_sumsel = parseInt(SumRataRataService_3_sumsel)/parseInt(BeforeMonth);
    var FixTotalRataRataService_3_sumsel = parseFloat(TotalRataRataService_3_sumsel).toFixed(0)+'%';
      //------
    var SumRataRataService_4_sumsel = parseInt(substr_service_type_4_januari_sumsel) + parseInt(substr_service_type_4_februari_sumsel) + parseInt(substr_service_type_4_maret_sumsel) + parseInt(substr_service_type_4_april_sumsel) + parseInt(substr_service_type_4_mei_sumsel) + parseInt(substr_service_type_4_juni_sumsel) + parseInt(substr_service_type_4_juli_sumsel) + parseInt(substr_service_type_4_agustus_sumsel) + parseInt(substr_service_type_4_september_sumsel) + parseInt(substr_service_type_4_oktober_sumsel) + parseInt(substr_service_type_4_november_sumsel) + parseInt(substr_service_type_4_desember_sumsel);
    var TotalRataRataService_4_sumsel = parseInt(SumRataRataService_4_sumsel)/parseInt(BeforeMonth);
    var FixTotalRataRataService_4_sumsel = parseFloat(TotalRataRataService_4_sumsel).toFixed(0)+'%';
      //end service
      //start sales
    var SumRataRataSales_1_sumsel = parseInt(substr_sales_type_1_januari_sumsel) + parseInt(substr_sales_type_1_februari_sumsel) + parseInt(substr_sales_type_1_maret_sumsel) + parseInt(substr_sales_type_1_april_sumsel) + parseInt(substr_sales_type_1_mei_sumsel) + parseInt(substr_sales_type_1_juni_sumsel) + parseInt(substr_sales_type_1_juli_sumsel) + parseInt(substr_sales_type_1_agustus_sumsel) + parseInt(substr_sales_type_1_september_sumsel) + parseInt(substr_sales_type_1_oktober_sumsel) + parseInt(substr_sales_type_1_november_sumsel) + parseInt(substr_sales_type_1_desember_sumsel);
    var TotalRataRataSales_1_sumsel = parseInt(SumRataRataSales_1_sumsel)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_1_sumsel = parseFloat(TotalRataRataSales_1_sumsel).toFixed(0)+'%';
      //------
    var SumRataRataSales_2_sumsel = parseInt(substr_sales_type_2_januari_sumsel) + parseInt(substr_sales_type_2_februari_sumsel) + parseInt(substr_sales_type_2_maret_sumsel) + parseInt(substr_sales_type_2_april_sumsel) + parseInt(substr_sales_type_2_mei_sumsel) + parseInt(substr_sales_type_2_juni_sumsel) + parseInt(substr_sales_type_2_juli_sumsel) + parseInt(substr_sales_type_2_agustus_sumsel) + parseInt(substr_sales_type_2_september_sumsel) + parseInt(substr_sales_type_2_oktober_sumsel) + parseInt(substr_sales_type_2_november_sumsel) + parseInt(substr_sales_type_2_desember_sumsel);
    var TotalRataRataSales_2_sumsel = parseInt(SumRataRataSales_2_sumsel)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_2_sumsel = parseFloat(TotalRataRataSales_2_sumsel).toFixed(0)+'%';
      //------
    var SumRataRataSales_3_sumsel = parseInt(substr_sales_type_3_januari_sumsel) + parseInt(substr_sales_type_3_februari_sumsel) + parseInt(substr_sales_type_3_maret_sumsel) + parseInt(substr_sales_type_3_april_sumsel) + parseInt(substr_sales_type_3_mei_sumsel) + parseInt(substr_sales_type_3_juni_sumsel) + parseInt(substr_sales_type_3_juli_sumsel) + parseInt(substr_sales_type_3_agustus_sumsel) + parseInt(substr_sales_type_3_september_sumsel) + parseInt(substr_sales_type_3_oktober_sumsel) + parseInt(substr_sales_type_3_november_sumsel) + parseInt(substr_sales_type_3_desember_sumsel);
    var TotalRataRataSales_3_sumsel = parseInt(SumRataRataSales_3_sumsel)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_3_sumsel = parseFloat(TotalRataRataSales_3_sumsel).toFixed(0)+'%';
      //------
    var SumRataRataSales_4_sumsel = parseInt(substr_sales_type_4_januari_sumsel) + parseInt(substr_sales_type_4_februari_sumsel) + parseInt(substr_sales_type_4_maret_sumsel) + parseInt(substr_sales_type_4_april_sumsel) + parseInt(substr_sales_type_4_mei_sumsel) + parseInt(substr_sales_type_4_juni_sumsel) + parseInt(substr_sales_type_4_juli_sumsel) + parseInt(substr_sales_type_4_agustus_sumsel) + parseInt(substr_sales_type_4_september_sumsel) + parseInt(substr_sales_type_4_oktober_sumsel) + parseInt(substr_sales_type_4_november_sumsel) + parseInt(substr_sales_type_4_desember_sumsel);
    var TotalRataRataSales_4_sumsel = parseInt(SumRataRataSales_4_sumsel)/parseInt(BeforeMonth);
    var FixTotalRataRataSales_4_sumsel = parseFloat(TotalRataRataSales_4_sumsel).toFixed(0)+'%';
      //end sales
      //end month januari
    //end hitung rata-rata //average_sales_type_1_all_sumsel

    //start januari
      //start service
    $("#average_service_type_1_all_sumsel").val(substr_percent(FixTotalRataRataService_1_sumsel));  
    $('#p_service_type_1_all_sumsel').html(FixTotalRataRataService_1_sumsel);
    $("#average_service_type_2_all_sumsel").val(substr_percent(FixTotalRataRataService_2_sumsel));  
    $('#p_service_type_2_all_sumsel').html(FixTotalRataRataService_2_sumsel);
    $("#average_service_type_3_all_sumsel").val(substr_percent(FixTotalRataRataService_3_sumsel));  
    $('#p_service_type_3_all_sumsel').html(FixTotalRataRataService_3_sumsel);
    $("#average_service_type_4_all_sumsel").val(substr_percent(FixTotalRataRataService_4_sumsel));  
    $('#p_service_type_4_all_sumsel').html(FixTotalRataRataService_4_sumsel);
      //end service
      //start sales
    $("#average_sales_type_1_all_sumsel").val(substr_percent(FixTotalRataRataSales_1_sumsel));  
    $('#p_sales_type_1_all_sumsel').html(FixTotalRataRataSales_1_sumsel);
    $("#average_sales_type_2_all_sumsel").val(substr_percent(FixTotalRataRataSales_2_sumsel));  
    $('#p_sales_type_2_all_sumsel').html(FixTotalRataRataSales_2_sumsel);
    $("#average_sales_type_3_all_sumsel").val(substr_percent(FixTotalRataRataSales_3_sumsel));  
    $('#p_sales_type_3_all_sumsel').html(FixTotalRataRataSales_3_sumsel);
    $("#average_sales_type_4_all_sumsel").val(substr_percent(FixTotalRataRataSales_4_sumsel));  
    $('#p_sales_type_4_all_sumsel').html(FixTotalRataRataSales_4_sumsel);
      //end sales
    //end januari

    // alert(RataRataSales_3_Mei);//just for testing data with alert
    // AverageSalesType_1 average_sales_type_1
    // document.getElementById("demo").innerHTML = res; // for tag <p>
    // alert(RataRataSales_1_Januari_sumsel);
    //start Januari
      //start service
      $("#service_type_1_januari_sumsel").val(substr_service_type_1_januari_sumsel);
      $('#p_service_type_1_januari_sumsel').html(RataRataService_1_Januari_sumsel);
      $("#service_type_2_januari_sumsel").val(substr_service_type_2_januari_sumsel);
      $('#p_service_type_2_januari_sumsel').html(RataRataService_2_Januari_sumsel);
      $("#service_type_3_januari_sumsel").val(substr_service_type_3_januari_sumsel);
      $('#p_service_type_3_januari_sumsel').html(RataRataService_3_Januari_sumsel);
      $("#service_type_4_januari_sumsel").val(substr_service_type_4_januari_sumsel);
      $('#p_service_type_4_januari_sumsel').html(RataRataService_4_Januari_sumsel);
      //end service
      //start sales
      $("#sales_type_1_januari_sumsel").val(substr_sales_type_1_januari_sumsel);
      $('#p_sales_type_1_januari_sumsel').html(RataRataSales_1_Januari_sumsel);
      $("#sales_type_2_januari_sumsel").val(substr_sales_type_2_januari_sumsel);
      $('#p_sales_type_2_januari_sumsel').html(RataRataSales_2_Januari_sumsel);
      $("#sales_type_3_januari_sumsel").val(substr_sales_type_3_januari_sumsel);
      $('#p_sales_type_3_januari_sumsel').html(RataRataSales_3_Januari_sumsel);
      $("#sales_type_4_januari_sumsel").val(substr_sales_type_4_januari_sumsel);
      $('#p_sales_type_4_januari_sumsel').html(RataRataSales_4_Januari_sumsel);
      //end sales
    //end Januari
    //start Februari
      //start service
      $("#service_type_1_februari_sumsel").val(substr_service_type_1_februari_sumsel);
      $('#p_service_type_1_februari_sumsel').html(RataRataService_1_Februari_sumsel);
      $("#service_type_2_februari_sumsel").val(substr_service_type_2_februari_sumsel);
      $('#p_service_type_2_februari_sumsel').html(RataRataService_2_Februari_sumsel);
      $("#service_type_3_februari_sumsel").val(substr_service_type_3_februari_sumsel);
      $('#p_service_type_3_februari_sumsel').html(RataRataService_3_Februari_sumsel);
      $("#service_type_4_februari_sumsel").val(substr_service_type_4_februari_sumsel);
      $('#p_service_type_4_februari_sumsel').html(RataRataService_4_Februari_sumsel);
      //end service
      //start sales
      $("#sales_type_1_februari_sumsel").val(substr_sales_type_1_februari_sumsel);
      $('#p_sales_type_1_februari_sumsel').html(RataRataSales_1_Februari_sumsel);
      $("#sales_type_2_februari_sumsel").val(substr_sales_type_2_februari_sumsel);
      $('#p_sales_type_2_februari_sumsel').html(RataRataSales_2_Februari_sumsel);
      $("#sales_type_3_februari_sumsel").val(substr_sales_type_3_februari_sumsel);
      $('#p_sales_type_3_februari_sumsel').html(RataRataSales_3_Februari_sumsel);
      $("#sales_type_4_februari_sumsel").val(substr_sales_type_4_februari_sumsel);
      $('#p_sales_type_4_februari_sumsel').html(RataRataSales_4_Februari_sumsel);
      //end sales
    //end Februari
    //start maret
      //start service
      $("#service_type_1_maret_sumsel").val(substr_service_type_1_maret_sumsel);
      $('#p_service_type_1_maret_sumsel').html(RataRataService_1_Maret_sumsel);
      $("#service_type_2_maret_sumsel").val(substr_service_type_2_maret_sumsel);
      $('#p_service_type_2_maret_sumsel').html(RataRataService_2_Maret_sumsel);
      $("#service_type_3_maret_sumsel").val(substr_service_type_3_maret_sumsel);
      $('#p_service_type_3_maret_sumsel').html(RataRataService_3_Maret_sumsel);
      $("#service_type_4_maret_sumsel").val(substr_service_type_4_maret_sumsel);
      $('#p_service_type_4_maret_sumsel').html(RataRataService_4_Maret_sumsel);
      //end service
      //start sales
      $("#sales_type_1_maret_sumsel").val(substr_sales_type_1_maret_sumsel);
      $('#p_sales_type_1_maret_sumsel').html(RataRataSales_1_Maret_sumsel);
      $("#sales_type_2_maret_sumsel").val(substr_sales_type_2_maret_sumsel);
      $('#p_sales_type_2_maret_sumsel').html(RataRataSales_2_Maret_sumsel);
      $("#sales_type_3_maret_sumsel").val(substr_sales_type_3_maret_sumsel);
      $('#p_sales_type_3_maret_sumsel').html(RataRataSales_3_Maret_sumsel);
      $("#sales_type_4_maret_sumsel").val(substr_sales_type_4_maret_sumsel);
      $('#p_sales_type_4_maret_sumsel').html(RataRataSales_4_Maret_sumsel);
      //end sales
    //end maret
    //start april
      //start service
      $("#service_type_1_april_sumsel").val(substr_service_type_1_april_sumsel);
      $('#p_service_type_1_april_sumsel').html(RataRataService_1_April_sumsel);
      $("#service_type_2_april_sumsel").val(substr_service_type_2_april_sumsel);
      $('#p_service_type_2_april_sumsel').html(RataRataService_2_April_sumsel);
      $("#service_type_3_april_sumsel").val(substr_service_type_3_april_sumsel);
      $('#p_service_type_3_april_sumsel').html(RataRataService_3_April_sumsel);
      $("#service_type_4_april_sumsel").val(substr_service_type_4_april_sumsel);
      $('#p_service_type_4_april_sumsel').html(RataRataService_4_April_sumsel);
      //end service
      //start sales
      $("#sales_type_1_april_sumsel").val(substr_sales_type_1_april_sumsel);
      $('#p_sales_type_1_april_sumsel').html(RataRataSales_1_April_sumsel);
      $("#sales_type_2_april_sumsel").val(substr_sales_type_2_april_sumsel);
      $('#p_sales_type_2_april_sumsel').html(RataRataSales_2_April_sumsel);
      $("#sales_type_3_april_sumsel").val(substr_sales_type_3_april_sumsel);
      $('#p_sales_type_3_april_sumsel').html(RataRataSales_3_April_sumsel);
      $("#sales_type_4_april_sumsel").val(substr_sales_type_4_april_sumsel);
      $('#p_sales_type_4_april_sumsel').html(RataRataSales_4_April_sumsel);
      //end sales
    //end april
    //start mei
      //start service
      $("#service_type_1_mei_sumsel").val(substr_service_type_1_mei_sumsel);
      $('#p_service_type_1_mei_sumsel').html(RataRataService_1_Mei_sumsel);
      $("#service_type_2_mei_sumsel").val(substr_service_type_2_mei_sumsel);
      $('#p_service_type_2_mei_sumsel').html(RataRataService_2_Mei_sumsel);
      $("#service_type_3_mei_sumsel").val(substr_service_type_3_mei_sumsel);
      $('#p_service_type_3_mei_sumsel').html(RataRataService_3_Mei_sumsel);
      $("#service_type_4_mei_sumsel").val(substr_service_type_4_mei_sumsel);
      $('#p_service_type_4_mei_sumsel').html(RataRataService_4_Mei_sumsel);
      //end service
      //start sales
      $("#sales_type_1_mei_sumsel").val(substr_sales_type_1_mei_sumsel);
      $('#p_sales_type_1_mei_sumsel').html(RataRataSales_1_Mei_sumsel);
      $("#sales_type_2_mei_sumsel").val(substr_sales_type_2_mei_sumsel);
      $('#p_sales_type_2_mei_sumsel').html(RataRataSales_2_Mei_sumsel);
      $("#sales_type_3_mei_sumsel").val(substr_sales_type_3_mei_sumsel);
      $('#p_sales_type_3_mei_sumsel').html(RataRataSales_3_Mei_sumsel);
      $("#sales_type_4_mei_sumsel").val(substr_sales_type_4_mei_sumsel);
      $('#p_sales_type_4_mei_sumsel').html(RataRataSales_4_Mei_sumsel);
      //end sales
    //end mei
    //start juni
      //start service
      $("#service_type_1_juni_sumsel").val(substr_service_type_1_juni_sumsel);
      $('#p_service_type_1_juni_sumsel').html(RataRataService_1_Juni_sumsel);
      $("#service_type_2_juni_sumsel").val(substr_service_type_2_juni_sumsel);
      $('#p_service_type_2_juni_sumsel').html(RataRataService_2_Juni_sumsel);
      $("#service_type_3_juni_sumsel").val(substr_service_type_3_juni_sumsel);
      $('#p_service_type_3_juni_sumsel').html(RataRataService_3_Juni_sumsel);
      $("#service_type_4_juni_sumsel").val(substr_service_type_4_juni_sumsel);
      $('#p_service_type_4_juni_sumsel').html(RataRataService_4_Juni_sumsel);
      //end service
      //start sales
      $("#sales_type_1_juni_sumsel").val(substr_sales_type_1_juni_sumsel);
      $('#p_sales_type_1_juni_sumsel').html(RataRataSales_1_Juni_sumsel);
      $("#sales_type_2_juni_sumsel").val(substr_sales_type_2_juni_sumsel);
      $('#p_sales_type_2_juni_sumsel').html(RataRataSales_2_Juni_sumsel);
      $("#sales_type_3_juni_sumsel").val(substr_sales_type_3_juni_sumsel);
      $('#p_sales_type_3_juni_sumsel').html(RataRataSales_3_Juni_sumsel);
      $("#sales_type_4_juni_sumsel").val(substr_sales_type_4_juni_sumsel);
      $('#p_sales_type_4_juni_sumsel').html(RataRataSales_4_Juni_sumsel);
      //end sales
    //end juni
    //start juli
      //start service
      $("#service_type_1_juli_sumsel").val(substr_service_type_1_juli_sumsel);
      $('#p_service_type_1_juli_sumsel').html(RataRataService_1_Juli_sumsel);
      $("#service_type_2_juli_sumsel").val(substr_service_type_2_juli_sumsel);
      $('#p_service_type_2_juli_sumsel').html(RataRataService_2_Juli_sumsel);
      $("#service_type_3_juli_sumsel").val(substr_service_type_3_juli_sumsel);
      $('#p_service_type_3_juli_sumsel').html(RataRataService_3_Juli_sumsel);
      $("#service_type_4_juli_sumsel").val(substr_service_type_4_juli_sumsel);
      $('#p_service_type_4_juli_sumsel').html(RataRataService_4_Juli_sumsel);
      //end service
      //start sales
      $("#sales_type_1_juli_sumsel").val(substr_sales_type_1_juli_sumsel);
      $('#p_sales_type_1_juli_sumsel').html(RataRataSales_1_Juli_sumsel);
      $("#sales_type_2_juli_sumsel").val(substr_sales_type_2_juli_sumsel);
      $('#p_sales_type_2_juli_sumsel').html(RataRataSales_2_Juli_sumsel);
      $("#sales_type_3_juli_sumsel").val(substr_sales_type_3_juli_sumsel);
      $('#p_sales_type_3_juli_sumsel').html(RataRataSales_3_Juli_sumsel);
      $("#sales_type_4_juli_sumsel").val(substr_sales_type_4_juli_sumsel);
      $('#p_sales_type_4_juli_sumsel').html(RataRataSales_4_Juli_sumsel);
      //end sales
    //end juli
    //start agustus
      //start service
      $("#service_type_1_agustus_sumsel").val(substr_service_type_1_agustus_sumsel);
      $('#p_service_type_1_agustus_sumsel').html(RataRataService_1_Agustus_sumsel);
      $("#service_type_2_agustus_sumsel").val(substr_service_type_2_agustus_sumsel);
      $('#p_service_type_2_agustus_sumsel').html(RataRataService_2_Agustus_sumsel);
      $("#service_type_3_agustus_sumsel").val(substr_service_type_3_agustus_sumsel);
      $('#p_service_type_3_agustus_sumsel').html(RataRataService_3_Agustus_sumsel);
      $("#service_type_4_agustus_sumsel").val(substr_service_type_4_agustus_sumsel);
      $('#p_service_type_4_agustus_sumsel').html(RataRataService_4_Agustus_sumsel);
      //end service
      //start sales
      $("#sales_type_1_agustus_sumsel").val(substr_sales_type_1_agustus_sumsel);
      $('#p_sales_type_1_agustus_sumsel').html(RataRataSales_1_Agustus_sumsel);
      $("#sales_type_2_agustus_sumsel").val(substr_sales_type_2_agustus_sumsel);
      $('#p_sales_type_2_agustus_sumsel').html(RataRataSales_2_Agustus_sumsel);
      $("#sales_type_3_agustus_sumsel").val(substr_sales_type_3_agustus_sumsel);
      $('#p_sales_type_3_agustus_sumsel').html(RataRataSales_3_Agustus_sumsel);
      $("#sales_type_4_agustus_sumsel").val(substr_sales_type_4_agustus_sumsel);
      $('#p_sales_type_4_agustus_sumsel').html(RataRataSales_4_Agustus_sumsel);
      //end sales
    //end agustus
    //start september
      //start service
      $("#service_type_1_september_sumsel").val(substr_service_type_1_september_sumsel);
      $('#p_service_type_1_september_sumsel').html(RataRataService_1_September_sumsel);
      $("#service_type_2_september_sumsel").val(substr_service_type_2_september_sumsel);
      $('#p_service_type_2_september_sumsel').html(RataRataService_2_September_sumsel);
      $("#service_type_3_september_sumsel").val(substr_service_type_3_september_sumsel);
      $('#p_service_type_3_september_sumsel').html(RataRataService_3_September_sumsel);
      $("#service_type_4_september_sumsel").val(substr_service_type_4_september_sumsel);
      $('#p_service_type_4_september_sumsel').html(RataRataService_4_September_sumsel);
      //end service
      //start sales
      $("#sales_type_1_september_sumsel").val(substr_sales_type_1_september_sumsel);
      $('#p_sales_type_1_september_sumsel').html(RataRataSales_1_September_sumsel);
      $("#sales_type_2_september_sumsel").val(substr_sales_type_2_september_sumsel);
      $('#p_sales_type_2_september_sumsel').html(RataRataSales_2_September_sumsel);
      $("#sales_type_3_september_sumsel").val(substr_sales_type_3_september_sumsel);
      $('#p_sales_type_3_september_sumsel').html(RataRataSales_3_September_sumsel);
      $("#sales_type_4_september_sumsel").val(substr_sales_type_4_september_sumsel);
      $('#p_sales_type_4_september_sumsel').html(RataRataSales_4_September_sumsel);
      //end sales
    //end september
    //start oktober
      //start service
      $("#service_type_1_oktober_sumsel").val(substr_service_type_1_oktober_sumsel);
      $('#p_service_type_1_oktober_sumsel').html(RataRataService_1_Oktober_sumsel);
      $("#service_type_2_oktober_sumsel").val(substr_service_type_2_oktober_sumsel);
      $('#p_service_type_2_oktober_sumsel').html(RataRataService_2_Oktober_sumsel);
      $("#service_type_3_oktober_sumsel").val(substr_service_type_3_oktober_sumsel);
      $('#p_service_type_3_oktober_sumsel').html(RataRataService_3_Oktober_sumsel);
      $("#service_type_4_oktober_sumsel").val(substr_service_type_4_oktober_sumsel);
      $('#p_service_type_4_oktober_sumsel').html(RataRataService_4_Oktober_sumsel);
      //end service
      //start sales
      $("#sales_type_1_oktober_sumsel").val(substr_sales_type_1_oktober_sumsel);
      $('#p_sales_type_1_oktober_sumsel').html(RataRataSales_1_Oktober_sumsel);
      $("#sales_type_2_oktober_sumsel").val(substr_sales_type_2_oktober_sumsel);
      $('#p_sales_type_2_oktober_sumsel').html(RataRataSales_2_Oktober_sumsel);
      $("#sales_type_3_oktober_sumsel").val(substr_sales_type_3_oktober_sumsel);
      $('#p_sales_type_3_oktober_sumsel').html(RataRataSales_3_Oktober_sumsel);
      $("#sales_type_4_oktober_sumsel").val(substr_sales_type_4_oktober_sumsel);
      $('#p_sales_type_4_oktober_sumsel').html(RataRataSales_4_Oktober_sumsel);
      //end sales
    //end oktober
    //start november
      //start service
      $("#service_type_1_november_sumsel").val(substr_service_type_1_november_sumsel);
      $('#p_service_type_1_november_sumsel').html(RataRataService_1_November_sumsel);
      $("#service_type_2_november_sumsel").val(substr_service_type_2_november_sumsel);
      $('#p_service_type_2_november_sumsel').html(RataRataService_2_November_sumsel);
      $("#service_type_3_november_sumsel").val(substr_service_type_3_november_sumsel);
      $('#p_service_type_3_november_sumsel').html(RataRataService_3_November_sumsel);
      $("#service_type_4_november_sumsel").val(substr_service_type_4_november_sumsel);
      $('#p_service_type_4_november_sumsel').html(RataRataService_4_November_sumsel);
      //end service
      //start sales
      $("#sales_type_1_november_sumsel").val(substr_sales_type_1_november_sumsel);
      $('#p_sales_type_1_november_sumsel').html(RataRataSales_1_November_sumsel);
      $("#sales_type_2_november_sumsel").val(substr_sales_type_2_november_sumsel);
      $('#p_sales_type_2_november_sumsel').html(RataRataSales_2_November_sumsel);
      $("#sales_type_3_november_sumsel").val(substr_sales_type_3_november_sumsel);
      $('#p_sales_type_3_november_sumsel').html(RataRataSales_3_November_sumsel);
      $("#sales_type_4_november_sumsel").val(substr_sales_type_4_november_sumsel);
      $('#p_sales_type_4_november_sumsel').html(RataRataSales_4_November_sumsel);
      //end sales
    //end november
    //start desember
      //start service
      $("#service_type_1_desember_sumsel").val(substr_service_type_1_desember_sumsel);
      $('#p_service_type_1_desember_sumsel').html(RataRataService_1_Desember_sumsel);
      $("#service_type_2_desember_sumsel").val(substr_service_type_2_desember_sumsel);
      $('#p_service_type_2_desember_sumsel').html(RataRataService_2_Desember_sumsel);
      $("#service_type_3_desember_sumsel").val(substr_service_type_3_desember_sumsel);
      $('#p_service_type_3_desember_sumsel').html(RataRataService_3_Desember_sumsel);
      $("#service_type_4_desember_sumsel").val(substr_service_type_4_desember_sumsel);
      $('#p_service_type_4_desember_sumsel').html(RataRataService_4_Desember_sumsel);
      //end service
      //start sales
      $("#sales_type_1_desember_sumsel").val(substr_sales_type_1_desember_sumsel);
      $('#p_sales_type_1_desember_sumsel').html(RataRataSales_1_Desember_sumsel);
      $("#sales_type_2_desember_sumsel").val(substr_sales_type_2_desember_sumsel);
      $('#p_sales_type_2_desember_sumsel').html(RataRataSales_2_Desember_sumsel);
      $("#sales_type_3_desember_sumsel").val(substr_sales_type_3_desember_sumsel);
      $('#p_sales_type_3_desember_sumsel').html(RataRataSales_3_Desember_sumsel);
      $("#sales_type_4_desember_sumsel").val(substr_sales_type_4_desember_sumsel);
      $('#p_sales_type_4_desember_sumsel').html(RataRataSales_4_Desember_sumsel);
      //end sales
    //end desember

    //start tag p
    // $('#p_sales_type_1_agustus').html(RataRataSales_1_Agustus);//not used
    //end tag p
  }
  //END FOR AREA SEMUA CABANG SUMSEL

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
