<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Survey</h1>
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
            <input class="form-control" type="text" name="tipe_motor_new" id="tipe_motor_new" value="<?= @$tipe_motor_get ?>">
          </div>
        </div>
        <div class="row">
          <div class="col-md-3">
            <!-- <button class="btn btn-primary" type="submit" style="margin-bottom: -73px;">Filter</button> -->
            <button class="btn btn-primary" type="button" style="margin-bottom: -73px;" id="filter_survey_new_submit" name="filter_survey_new_submit">Filter</button>
            <button class="btn btn-default" type="button" style="margin-bottom: -73px;" id="btn_clear_filter" name="btn_clear_filter" onclick="location.href = '<?php echo base_url(); ?>C_cro/viewsurveys';">Clear Filter</button>
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
              <table id="survey" class="">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Tipe</th>
                  <th>Cabang</th>
                  <th>Nama</th>
                  <th>Tgl Inv</th>
									<th>Type Motor</th>
									<th>Telepon</th>
                  <th>Diskon</th>
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
										<th>Type Motor</th>
										<th>Telepon</th>
                    <th>Diskon</th>
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

  <div class="col-sm-4 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="" style="text-align: center;">Total Data</h5>
        <!-- <p class="" style="text-align: left;">Call Sukses</p> -->
        <!-- <input type="" name="" rea> -->
        <div class="col-sm-12 col-sm-12 col-xs-12">
          <label>Call Success</label>
          &nbsp;&nbsp;&nbsp;
          <button class="btn btn-default" type="button" style="" id="btn_call_sukses" name="btn_call_sukses" onclick="get_total_call_success_survey()">Show</button>
          <input type="text" value="" name="text_call_sukses_survey" id="text_call_sukses_survey" class="form-control" readonly style="width: 20%;">
        </div>
        <br>
        <div class="col-sm-12 col-sm-12 col-xs-12">
          <label>Call Failed</label>
          &nbsp;&nbsp;&nbsp;
          <button class="btn btn-default" type="button" style="" id="btn_call_failed" name="btn_call_failed" onclick="get_total_call_failed_survey()">Show</button>
          <input type="text" value="" name="text_call_failed_survey" id="text_call_failed_survey" class="form-control" readonly style="width: 20%;">
        </div>
        <br>
        <div class="col-sm-12 col-sm-12 col-xs-12">
          <label>No Have Telephone</label>
          &nbsp;&nbsp;&nbsp;
          <button class="btn btn-default" type="button" style="" id="btn_no_have_tlp" name="btn_no_have_tlp" onclick="get_total_no_have_tlp_survey()">Show</button>
          <input type="text" value="" name="text_no_have_tlp_survey" id="text_no_have_tlp_survey" class="form-control" readonly style="width: 20%;">
        </div>
      </div>
    </div>
  </div>

  <!-- /.content -->
</div>
