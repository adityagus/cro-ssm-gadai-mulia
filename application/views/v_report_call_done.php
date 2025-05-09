<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Report Call Done</h1>
        </div><!-- /.col -->
        <div class="col-md-12">
          <hr>
      <form action="<?php echo base_url() ?>C_cro/getcustmonthcbg" method="POST">
        <div class="row">
          <div class="col-md-3">
            <label>Area</label>
            <select class="form-control" name="area_new" id="area_new" required>
              <option value="999">--Pilih Area--</option>
              <option value="99">All Area</option>
              <?php foreach($area as $a) {?>
                <option value="<?php echo $a->id_company ?>"><?php echo $a->nama ?></option>
              <?php } ?>
            </select>
            <input type="hidden" name="area_get" id="area_get" value="<?= @$area_get ?>" readonly>
            <input type="hidden" name="cabang_get" id="cabang_get" value="<?= @$cabang_get ?>" readonly>
            <input type="hidden" name="tipe_get" id="tipe_get" value="<?= @$tipe_get ?>" readonly>
            <input type="hidden" name="tipe_motor_get" id="tipe_motor_get" value="<?= @$tipe_motor_get ?>" readonly>
			<input type="hidden" name="month_get" id="month_get" value="<?= @$month_get ?>" readonly>
			<input type="hidden" name="year_get" id="year_get" value="<?= @$year_get ?>" readonly>
          </div>
          <div class="col-md-3">
            <label>Cabang</label>
            <select class="form-control" name="cabang_new" id="cabang_new" required>
              <option value="">--Pilih Cabang--</option>
            </select>
          </div>
          <div class="col-md-3">
            <label>Tipe</label>
            <select class="form-control" name="tipe_new" id="tipe_new" required>
              <option value="999">ALL</option>
              <option value="1">SALES</option>
              <option value="2">SERVICE</option>
            </select>
          </div>
          <div class="col-md-3">
            <label>Tipe Motor</label>
			<?php  
			if(@$tipe_motor_get != 99){
				@$Fix_tipe_motor = $tipe_motor_get;
			}else{
				@$Fix_tipe_motor = "";
			}
			?>
            <input class="form-control" type="text" name="tipe_motor_new" id="tipe_motor_new" value="<?= @$Fix_tipe_motor ?>">
          </div>
		  <div class="col-md-3">
		  	<label>Month</label>
            <select class="form-control" name="month_rpt_call_done" id="month_rpt_call_done" required>
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
            <select class="form-control" name="year_rpt_call_done" id="year_rpt_call_done" required>
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
            <!-- <button class="btn btn-primary" type="submit" style="margin-bottom: -73px;">Filter</button> -->
            <button class="btn btn-primary" type="button" style="margin-bottom: -73px;" id="filter_rpt_call_done_submit" name="filter_rpt_call_done_submit">Filter</button>
            <button class="btn btn-default" type="button" style="margin-bottom: -73px;" id="btn_clear_filter" name="btn_clear_filter" onclick="location.href = '<?php echo base_url(); ?>C_cro/viewreport_call_done';">Clear Filter</button>
          </div>
        </div>
      </form>
      <br>
      <br>
      <br>
      <div class="row">
        <div class="col-md-10">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Customer</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="report_call_done" class="">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tipe</th>
                  <th>Cabang</th>
                  <th>Nama</th>
                  <th>Tgl Inv</th>
                  <th>Counter</th>
                  <th>Detail</th>
                </tr>
                </thead>
                <tbody>
                  
                </tbody>
                <tfoot>
                  <tr>
                    <th>No</th>
                    <th>Tipe</th>
                    <th>Cabang</th>
                    <th>Nama</th>
                    <th>Tgl Inv</th>
                    <th>Counter</th>
                    <th>Detail</th>
                  </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
        </div>
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- /.content -->
</div>
