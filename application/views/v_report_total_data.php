<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Report Daily <small>Data Call</small></h1>
        </div><!-- /.col -->
        <div class="col-md-12">
          <hr>
<!-- action="<?php echo base_url() ?>C_cro/get_report_bulanan" -->
<form method="POST">
  <div class="col-sm-6 col-sm-12 col-xs-12">
    <div class="card">
      <div class="card-body">
        <!-- <h5 class="" style="text-align: center;">Question </h5> -->
        <div class="row">
          <div class="col-md-3">
            <label>Area</label>
            <select class="form-control" name="area_rpt_total_data" id="area_rpt_total_data" required="">
              <option value="999">--Pilih Area--</option>
              <option value="111">All Area</option>
              <?php foreach($area as $a) {?>
                <option value="<?php echo $a->kode_kantor ?>"><?php echo $a->nama ?></option>
              <?php } ?>
            </select>
          </div>
          <!-- <div class="col-md-3">
            <label>Cabang</label>
            <select class="form-control" name="cabang_rpt_total_data" id="cabang_rpt_total_data" required>
              <option value="">--Pilih Cabang--</option>
            </select>
          </div> -->
         <!--  <div class="col-md-3">
            <label>Start Date</label>
            <input type="text" class="form-control" name="date_start" id="date_start" placeholder="2020-01-01">
          </div>
          <div class="col-md-3">
            <label>End Date</label>
            <input type="text" class="form-control" name="date_end" id="date_end" placeholder="2020-01-30">
          </div> -->
          <div class="col-md-3">
            <label>Month</label>
            <select class="form-control" name="month_rpt_total_data" id="month_rpt_total_data" required>
              <?php
              $MonthNow = @$month;
              ?>
              <option value='01' <?php if($MonthNow == '01'){ echo "selected"; } ?> >January</option>
              <option value='02' <?php if($MonthNow == '02'){ echo "selected"; } ?> >February</option>
              <option value='03' <?php if($MonthNow == '03'){ echo "selected"; } ?> >March</option>
              <option value='04' <?php if($MonthNow == '04'){ echo "selected"; } ?> >April</option>
              <option value='05' <?php if($MonthNow == '05'){ echo "selected"; } ?> >May</option>
              <option value='06' <?php if($MonthNow == '06'){ echo "selected"; } ?> >June</option>
              <option value='07' <?php if($MonthNow == '07'){ echo "selected"; } ?> >July</option>
              <option value='08' <?php if($MonthNow == '08'){ echo "selected"; } ?> >August</option>
              <option value='09' <?php if($MonthNow == '09'){ echo "selected"; } ?> >September</option>
              <option value='10' <?php if($MonthNow == '10'){ echo "selected"; } ?> >October</option>
              <option value='11' <?php if($MonthNow == '11'){ echo "selected"; } ?> >November</option>
              <option value='12' <?php if($MonthNow == '12'){ echo "selected"; } ?> >December</option>
            </select>
          </div>
          <div class="col-md-3">
            <label>Year</label>
            <select class="form-control" name="year_rpt_total_data" id="year_rpt_total_data" required>
              <?php
              $YearNow = @$year;
              $startYear = 2015;
              for ($i=$startYear; $i <= $year; $i++) { 
              ?>
              <option value="<?= $i ?>" <?php if($i == $year){ echo "selected"; }else{ echo ""; } ?> ><?= $i ?></option>
              <?php
              }
              ?>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <button class="btn btn-primary" type="submit" style="margin-bottom: -25px;" id="submitReportTotalDataCall" name="submitReportTotalDataCall">Preview</button>
          </div>
        </div>
      </div>
      <br>
      <!-- <div class="card-footer"> -->

      <!-- </div> -->
    </div>
  </div>
</form>
      <br>

        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content -->
</div>
