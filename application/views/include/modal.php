<html>
<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
</head>
<body>
    <?php echo $css; echo $js; echo $modal_script;?>
    <?php echo form_open('Reservasi')?>
    <div id="lokasi" class="modal" tabindex="-1" role="dialog">
    <div  class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Pilih Cabang Restaurant</h5>
            <hr>
           
           
           
        </div>
        <div class="modal-body">
        <div class="form-group">
        <?php  echo $this->session->flashdata('msg'); ?>
			<label for="pilih_cabang" class="col-sm-12 control-label">Kota Cabang</label>
			<div class="col-sm-12">
				<div class="input-group">
					<div class="input-group-addon bg-light">
						<i class="fa fa-map-o text-info"></i>
					</div>
					<select name="kota_cabang" class="form-control">
						<option value="CB001">Jakarta</option>
						<option value="CB002">Bogor</option>
						<option value="CB003">Depok</option>
						<option value="CB004">Tangerang</option>
                        <option value="CB005">Bekasi</option>
					</select>
				</div>
			</div>
		</div>
        </div>
        <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Lanjutkan</button>
        </div>
        </div>
    </div>
    </div>
</body>
</html>