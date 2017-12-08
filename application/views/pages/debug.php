<div class="col-lg-12">
	<br><br><br><br>
	<div class="row">
		<?php foreach ($menu as $row) {	
			$gambar = $row['Gambar'];?>
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
			<div class="my-list">
				<img src="<?php echo base_url('');?>/<?php echo $gambar;?>" alt="dsadas" >
				<h3>
					<?php echo $row['NamaMenu']; ?>
					<?php $harga = sprintf('%0.3f',$row['Harga']/1000); ?>
				</h3>
				<span>
					<?php echo 'Rp '.$harga.',00';?> </span>
				<div class="offer">
					<div class="col-md-12 col-sm-12 col-xs-6 review">
						<?php for ($i=0;$i<$row['Rating'];$i=$i+1){ ?>
						<i class="fa fa-star" aria-hidden="true"></i>
						<?php } ?>
							<?php for ($j=0;$j<5-$row['Rating'];$j=$j+1){ ?>
							<i class="fa fa-star-o" aria-hidden="true"></i>
							<?php } ?>
					</div>
				</div>
				<div class="detail">
					<br>
					<img src="<?php echo base_url('');?>/<? echo $gambar;?>" alt="dsadas" >
					<br>
					<br>
					<button href="#" class="btn btn-info">Pesan</button>
					<button type="button" class="btn btn-info" data-toggle="modal" data-target="#produkdetail">Detail</button>
				</div>
			</div>
		</div>
	</div>
</div>
