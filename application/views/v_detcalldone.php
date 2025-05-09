<!-- <meta http-equiv="refresh" content="0;url=aa.php"> -->
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Detail Call Done</h1>
        </div><!-- /.col -->
        <div class="col-sm-12">
          <hr>
        </div>
      </div><!-- /.row -->
      <!-- <a href="<?php echo base_url() ?>C_cro/viewsurveys" class="btn btn-secondary">Back</a> -->
      <input type="hidden" name="filter_area" id="filter_area" value="<?= @$filter_area ?>" readonly>
      <input type="hidden" name="filter_cabang" id="filter_cabang" value="<?= @$filter_cabang ?>" readonly>
      <input type="hidden" name="filter_tipe" id="filter_tipe" value="<?= @$filter_tipe ?>" readonly> 
      <input type="hidden" name="filter_tipe_motor" id="filter_tipe_motor" value="<?= @$filter_tipe_motor ?>" readonly>
      <button type="button" class="btn btn-default" id="btn_back_detcalldone_v1" name="btn_back_detcalldone_v1" style="background-color:darkgrey;">Back</button>
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <form action="<?php echo base_url() ?>C_cro/save_detsurvey" method="POST">
        <div class="row">
          <div class="col-md-9">
            <div class="row text-center mb-3">
              <div class="col-md-3">
                <label>Telepon 1</label><br>
                <?php if(isset($det->telepon1)){ ?>
				<input type="hidden" class="form-control" value="<?php echo $det->telepon1 ?>" id="txt_tlp1_detsurv" name="txt_tlp1_detsurv">
                <a href="tel:<?php echo $det->telepon1 ?>" class="btn btn-primary"><i class="fas fa-phone"></i> <?php echo $det->telepon1 ?></a>
				<button id="btn_copy_clipboard_tlp1" class="btn btn-default" title="Copy">
					<div class="demo-google-material-icon">
						<i class="material-icons">content_copy</i>
					</div>
				</button>
                <?php } ?>
              </div>
              <div class="col-md-3">
                <label>Telepon 2</label><br>
                <?php if(isset($det->telepon2)){ ?>
				<input type="hidden" class="form-control" value="<?php echo $det->telepon2 ?>" id="txt_tlp2_detsurv" name="txt_tlp2_detsurv">
                <a href="tel:<?php echo $det->telepon2 ?>" class="btn btn-primary"><i class="fas fa-phone"></i> <?php echo $det->telepon2 ?></a>
				<button id="btn_copy_clipboard_tlp2" class="btn btn-default" title="Copy">
					<div class="demo-google-material-icon">
						<i class="material-icons">content_copy</i>
					</div>
				</button>
				<?php } ?>
              </div>
              <div class="col-md-3">
                <label>Telepon 3</label><br>
                <?php if(isset($det->hp)){ ?>
				<input type="hidden" class="form-control" value="<?php echo $det->hp ?>" id="txt_tlp3_detsurv" name="txt_tlp3_detsurv">
                <a href="tel:<?php echo $det->hp ?>" class="btn btn-primary"><i class="fas fa-phone"></i> <?php echo $det->hp ?></a>
                <button id="btn_copy_clipboard_tlp3" class="btn btn-default" title="Copy">
					<div class="demo-google-material-icon">
						<i class="material-icons">content_copy</i>
					</div>
				</button>
				<?php } ?>
              </div>
				<div class="col-md-3">
                <label>Telepon 4</label><br>
                <?php if(isset($det->tlp_wo)){ ?>
				<input type="hidden" class="form-control" value="<?php echo $det->tlp_wo ?>" id="txt_tlp4_detsurv" name="txt_tlp4_detsurv">
                <a href="tel:<?php echo $det->tlp_wo ?>" class="btn btn-primary"><i class="fas fa-phone"></i> <?php echo $det->tlp_wo ?></a>
				<button id="btn_copy_clipboard_tlp4" class="btn btn-default" title="Copy">
					<div class="demo-google-material-icon">
						<i class="material-icons">content_copy</i>
					</div>
				</button>
				<?php } ?>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title float-left">Data Survey</h3>
                <h3 class="card-title float-right">
                <?php
                if($det->tipe_cust == 1){
                  echo '<b>Sales</b>';
                }else{
                  echo '<b>Service</b>';
                }
                //name='detail["+row+"][qty]'
                ?>
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-4">
                    <label>Nama</label>
                    <input type="text" name="nama_cust" value="<?php echo $det->nama_cust ?>" class="form-control" readonly>
                    <input type="hidden" name="id_surv" value="<?php echo $det->id_surv ?>" class="form-control" readonly>
                    <input type="hidden" value="<?php echo $det->id_surv ?>" name="header[<?php echo $det->id_surv ?>][id_surv]" readonly>
                    <input type="hidden" value="<?php echo $created_at_by ?>" name="created_at_by" readonly>
                    <input type="hidden" value="<?php echo $status_cust ?>" name="status_cust" readonly>
                    <input type="hidden" value="<?php echo @$time_now ?>" name="time_telp" readonly>
                  </div>
                  <div class="col-md-4">
                    <label>Cabang</label>
                    <input type="text" name="nama_cabang" value="<?php echo $det->nama ?>" class="form-control" readonly>
                  </div>
                  <div class="col-md-4">
                    <label>Tanggal Invoice</label>
                    <input type="text" name="tgl_inv" value="<?php echo date('d F Y', strtotime($det->tgl_inv)) ?>" class="form-control" readonly>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-4">
                    <label>Tipe Motor</label>
                    <input type="text" name="tipe_motor" value="<?php echo $det->type ?>" class="form-control" readonly>
                  </div>
                  <div class="col-md-4">
                    <label>Diskon</label>
                    <input type="text" name="diskon" value="<?php echo number_format($det->diskon) ?>" class="form-control" readonly>
                  </div>
                  <div class="col-md-4">
                    <label>Tanggal Telepon</label>
                    <input type="text" name="tgl_telp" value="<?= @$date_now_used ?>" class="form-control" readonly>
                  </div>
                </div>
                <div class="row">
                  <?php
                  // print_r($DataTeleponCust->telepon1);
                  // echo "<br>";
                  // foreach ($DataTeleponCust as $row_telepon) {
                    // print_r($row_telepon);
                  // }
                  ?>
                  <div class="col-md-4">
                    <label>Telepon</label>
                    <select class="form-control" name="flex_tlp" required="" disabled="disabled">
                    <option value="">--Pilih Telepon--</option>
                    <?php
                    if($DataTeleponCust->telepon1 != '' || $DataTeleponCust->telepon1 != array()){
                      $TeleponOne = $DataTeleponCust->telepon1;
                    ?>
                    <option value="telepon1" <?php if($telepon_done == $TeleponOne){ echo "Selected"; } ?> ><?= $TeleponOne ?></option>
                    <?php
                    }
                    ?>
                    <?php
                    if($DataTeleponCust->telepon2 != '' || $DataTeleponCust->telepon2 != array()){
                      $TeleponTwo = $DataTeleponCust->telepon2;
                    ?>
                    <option value="telepon2" <?php if($telepon_done == $TeleponTwo){ echo "Selected"; } ?> ><?= $TeleponTwo ?></option>
                    <?php
                    }
                    ?>
                    <?php
                    if($DataTeleponCust->hp != '' || $DataTeleponCust->hp != array()){
                      $TeleponHp = $DataTeleponCust->hp;
                    ?>
                    <option value="hp" <?php if($telepon_done == $TeleponHp){ echo "Selected"; } ?> ><?= $TeleponHp ?></option>
                    <?php
                    }
                    ?>
					<?php
                    if($DataTeleponCust->tlp_wo != '' || $DataTeleponCust->tlp_wo != array()){
                      $TeleponFour = $DataTeleponCust->tlp_wo;
                    ?>
                    <option value="tlp_wo" <?php if($telepon_done == $TeleponFour){ echo "Selected"; } ?> ><?= $TeleponFour ?></option>
                    <?php
                    }
                    ?>
                    </select>
                  </div>
                  <div class="col-md-4">
                    <label>Respon</label>
                    <select class="form-control" name="id_respon" id="id_respon" required="" disabled="disabled">
                    <option value="">--Pilih Respon--</option>
                    <?php foreach($resp as $a){ ?>
                      <option value="<?php echo $a->id_respon ?>" <?php if($det->id_respon == $a->id_respon){ echo "Selected"; } ?> ><?php echo $a->nm_respon ?></option>
                    <?php } ?>
                    </select>
                  </div>
                </div>
                <hr>
                
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer"> -->
                <!-- <button class="btn btn-primary btndetsurv">Simpan</button> -->
                <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
              <!-- </div> -->
            </div>
            <!-- /.card -->

<div class="row" id="div_question" name="idv_question" style="display: none;">
<?php 
$no=0;
foreach($quest as  $a) {
$no++;
?>
<?php
$paramNameID = "quest_".$a->id_quest;
$paramNameNilai = "nilai_".$a->id_quest;
?>
  <div class="col-sm-4 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="" style="text-align: center;">Question <?= $no ?></h5>
        <p class="" style="text-align: center;"><?php echo $a->nm_quest ?></p>
        <input type="hidden" value="<?php echo $a->id_quest ?>" name="detail[<?php echo $a->id_quest ?>][id_quest]" readonly>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        <?php if(isset($det->id_detsurv)) {?>
        <input type="text" value="<?php echo $a->id_quest ?>">
        <?php } ?>
        <select class="form-control" name="detail[<?php echo $a->id_quest ?>][nilai]">
        <?php for ($i=0; $i < 11 ; $i++) { ?>
          <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
        <?php } ?>
        </select>
      </div>
    </div>
  </div>
<?php } ?>
</div>
<!-- display: inline-flex; -->
<div class="row" id="div_harga_dapat" name="div_harga_dapat" style="display: none;">
<?php
if($status_cust == 1){//SALES
?>
  <div class="col-sm-5 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="" style="text-align: center;">Harga Beli</h5>
        <textarea rows="4" name="harga_beli" id="harga_beli" style="resize: none;" class="form-control" placeholder="Harga Beli ..."><?= @$HargaBeli ?></textarea>
      </div>
    </div>
  </div>
  <div class="col-sm-4 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="" style="text-align: center;">Harga Diskon</h5>
        <textarea rows="4" name="harga_diskon" id="harga_diskon" style="resize: none;" class="form-control" placeholder="Harga Diskon ..."><?= @$HargaDiskon ?></textarea>
      </div>
    </div>
  </div>
  <div class="col-sm-4 col-sm-6 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="" style="text-align: center;">Dapat Invoice
        <?php
        // print_r($StatusDapatInvoice);
        ?>
        </h5>
        <select class="form-control" name="status_dapat_invoice" required="">
          <?php
          if(@$StatusDapatInvoice == '22'){
          ?>
          <option value="11">--Pilih Y/T--</option>
          <option value="22" selected="">Ya</option>
          <option value="33">Tidak</option>
          <?php
          }elseif(@$StatusDapatInvoice == '33'){
          ?>
          <option value="11">--Pilih Y/T--</option>
          <option value="22">Ya</option>
          <option value="33" selected="">Tidak</option>
          <?php
          }else{
          ?>
          <option value="11" selected="">--Pilih Y/T--</option>
          <option value="22">Ya</option>
          <option value="33">Tidak</option>
          <?php
          }
          ?>
        </select>
      </div>
    </div>
  </div>
<?php
}
?>
</div>

<div class="row">
  <div class="col-sm-6 col-sm-12 col-xs-12">
    <div class="card">
      <div class="card-body">
        <h5 class="" style="text-align: center;">Kritik & Saran</h5>
        <!-- <input type="hidden" value="<?php echo $a->id_quest ?>" name="detail[<?php echo $a->id_quest ?>][id_quest]" readonly> -->
        <textarea rows="4" name="kritiksaran" id="kritiksaran" style="resize: none;" class="form-control" placeholder="Kritik & Saran ..." readonly><?= @$KritikSaran ?></textarea>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="" style="width: 100%;">
    <div class="card">
      <div class="card-body">
      <input type="hidden" name="filter_area_form" id="filter_area_form" value="<?= @$filter_area ?>" readonly>
      <input type="hidden" name="filter_cabang_form" id="filter_cabang_form" value="<?= @$filter_cabang ?>" readonly>
      <input type="hidden" name="filter_tipe_form" id="filter_tipe_form" value="<?= @$filter_tipe ?>" readonly> 
      <input type="hidden" name="filter_tipe_motor_form" id="filter_tipe_motor_form" value="<?= @$filter_tipe_motor ?>" readonly>
        <!-- <h5 class="" style="text-align: center;">Button</h5> -->
        <center>
        <?php
        $idgrup = $this->session->userdata('idgrup');
        // print_r($idgrup);
        if($idgrup == 73){////hanya untuk staff cro dapat klik
        ?>
          <!-- <button type="submit" class="btn btn-primary">Simpan</button> -->
        <?php
        }
        ?>
		<p>Status Input</p>
		<button type="button" class="btn btn-primary" style="background-color: green;">DONE</button>
        </center>
      </div>
    </div>
  </div>
</div>

          </div>
        </div>
      </form>
    </div><!-- /.container-fluid -->




  </section>
  <!-- /.content -->
</div>
