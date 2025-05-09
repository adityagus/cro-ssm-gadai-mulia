<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Report Area Peryear</h1>
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
          <!-- <div class="col-md-3">
            <label>Month</label>
            <select class="form-control" name="month_rpt_bulanan" id="month_rpt_bulanan" required>
              <?php
              $MonthNow = @$month;
              for ($i = 1; $i <= 12; ++$i){
                $time = strtotime(sprintf('+%d months', $i));
                $label = date('F ', $time);
                $value = date('m', $time);
                echo '<option value="'.$value.'" ';
                if((isset($MonthNow))&&($value==$MonthNow))echo 'selected';// Check if form submitted or not. select the month if yes
                echo '>'.$label.'</option>';
              }
              ?>
            </select>
          </div> -->
          <div class="col-md-3">
            <label>Year</label>
            <select class="form-control" name="year_rpt_bulanan" id="year_rpt_bulanan" required>
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
            <button class="btn btn-primary" type="submit" style="margin-bottom: -25px;" id="submitReportAreaPertahun" name="submitReportAreaPertahun">Preview</button>
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
