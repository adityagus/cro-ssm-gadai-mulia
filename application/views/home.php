<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <!-- <h1 class="m-0 text-dark">Report Harian <small>Data Call</small></h1> -->
        </div><!-- /.col -->
        <div class="col-md-12">
          <hr>
<!-- action="<?php echo base_url() ?>C_cro/get_report_bulanan" -->
<!-- <form method="POST"> -->
  <div class="col-sm-6 col-sm-12 col-xs-12">
  <?php
  $idgrup = $this->session->userdata('idgrup');
  // print_r($idgrup);
  if($idgrup == 1){////hanya untuk staff cro dapat klik
  ?>
    <h1 style="font-family: Indie Flower;">Master</h1>
    <ul class="cards">
      <li class="cards_item">
        <div class="card">
          <!-- <img src="https://picsum.photos/500/300/?image=5"> -->
          <div class="card_image"><img style="width: 300px; height: 215px;" src="<?php echo base_url(); ?>assets/icon/master-data2.png"></div>
          <div class="card_content">
            <center>
              <h2 class="card_title">Question</h2>
              <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
              <br><br>
              <a href="<?php echo base_url() ?>C_cro/viewquest">
                <button class="btn card_btn">Go to</button>
              </a>
            </center>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img style="width: 300px; height: 215px;" src="<?php echo base_url(); ?>assets/icon/master-data2.png"></div>
          <div class="card_content">
            <center>
              <h2 class="card_title">Respon</h2>
              <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
              <br><br>
              <a href="<?php echo base_url() ?>C_cro/viewresp">
                <button class="btn card_btn">Go to</button>
              </a>
            </center>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img style="width: 300px; height: 215px;" src="<?php echo base_url(); ?>assets/icon/master-data2.png"></div>
          <div class="card_content">
            <center>
              <h2 class="card_title">Pull Report Monthly</h2>
              <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
              <br><br>
              <a href="<?php echo base_url() ?>C_cro/viewlaporanbulanan">
                <button class="btn card_btn">Go to</button>
              </a>
            </center>
          </div>
        </div>
      </li>
      </li>
    </ul>
    <?php
    }
    ?>
    <h1 style="font-family: Indie Flower;">Modul</h1>
    <ul class="cards">
      <li class="cards_item">
        <div class="card">
          <!-- <img src="https://picsum.photos/500/300/?image=5"> -->
          <div class="card_image"><img style="width: 300px; height: 215px;" src="<?php echo base_url(); ?>assets/icon/modul-2.png"></div>
          <div class="card_content">
            <center>
              <h2 class="card_title">Survey</h2>
              <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
              <br><br>
              <a href="<?php echo base_url() ?>C_cro/viewsurveys">
                <button class="btn card_btn">Go to</button>
              </a>
            </center>
          </div>
        </div>
      </li>
      </li>
    </ul>
    <h1 style="font-family: Indie Flower;">Report</h1>
    <ul class="cards">
      <li class="cards_item">
        <div class="card">
          <!-- <img src="https://picsum.photos/500/300/?image=5"> -->
          <div class="card_image"><img style="width: 300px; height: 215px;" src="<?php echo base_url(); ?>assets/icon/reports-1.jpg"></div>
          <div class="card_content">
            <center>
              <h2 class="card_title">Report Monthly</h2>
              <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
              <br><br>
              <a href="<?php echo base_url() ?>C_cro/viewreportbulanan">
                <button class="btn card_btn">Go to</button>
              </a>
            </center>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img style="width: 300px; height: 215px;" src="<?php echo base_url(); ?>assets/icon/reports-1.jpg"></div>
          <div class="card_content">
            <center>
              <h2 class="card_title">Report Area Peryear</h2>
              <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
              <br><br>
              <a href="<?php echo base_url() ?>C_cro/viewreport_area_pertahun">
                <button class="btn card_btn">Go to</button>
              </a>
            </center>
          </div>
        </div>
      </li>
      <li class="cards_item">
        <div class="card">
          <div class="card_image"><img style="width: 300px; height: 215px;" src="<?php echo base_url(); ?>assets/icon/reports-1.jpg"></div>
          <div class="card_content">
            <center>
              <h2 class="card_title">Report Daily</h2>
              <!-- <p class="card_text">Demo of pixel perfect pure CSS simple responsive card grid layout</p> -->
              <br><br>
              <a href="<?php echo base_url() ?>C_cro/viewreport_total_data">
                <button class="btn card_btn">Go to</button>
              </a>
            </center>
          </div>
        </div>
      </li>
      </li>
    </ul>
  </div>
<!-- </form> -->
      <br>

        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content -->
</div>
<!-- iCheck -->
<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css_card/style.css?w=<?php echo rand(100,10000); ?>">
