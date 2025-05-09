<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Pull Report Monthly</h1>
        </div><!-- /.col -->
        <div class="col-md-12">
          <hr>
      <form class="" action="<?php echo base_url() ?>C_cro/getcustmonth" method="post">
        <div class="row">
          <div class="col-md-2">
            <label>Bulan</label>
            <select class="form-control bulan" name="bulan" required>
              <option value="">--Pilih Bulan--</option>
              <option value="01">Januari</option>
              <option value="02">Februari</option>
              <option value="03">Maret</option>
              <option value="04">April</option>
              <option value="05">Mei</option>
              <option value="06">Juni</option>
              <option value="07">Juli</option>
              <option value="08">Agustus</option>
              <option value="09">September</option>
              <option value="10">Oktober</option>
              <option value="11">November</option>
              <option value="12">Desember</option>
            </select>
          </div>
          <div class="col-md-2">
            <label>Tahun</label>
            <?php $thn = date('Y');?>
            <select class="form-control tahun" name="tahun" required>
              <option value="">--Pilih Tahun--</option>
              <option class="thnskrg" value="<?php echo $thn ?>"><?php echo $thn ?></option>
              <option class="thnlama" value="<?php echo $thn-1 ?>"><?php echo $thn-1 ?></option>
            </select>
          </div>
          <div class="col-md-4">
          <?php
          $idgrup = $this->session->userdata('idgrup');
          // print_r($idgrup);
          if($idgrup == 73 || $idgrup == 1){//hanya untuk staff cro dapat klik
          ?>
            <button type="submit" class="btn btn-primary btnsub" name="button" style="margin-top:30px;">Submit</button>
          <?php
          }
          ?>
          </div>
        </div>
      </form><br>

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
