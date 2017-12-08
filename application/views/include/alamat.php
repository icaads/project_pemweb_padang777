<div class="col-lg-7">


	<div class="row text-center">
		<div class="col-md-4">
			<a class="bg-info px-3 py-2 rounded text-white mb-2 d-inline-block">
				<i class="fa fa-map-marker"></i>
			</a>
			<p>
				<b>Universitas Multimedia Nusantara</b>
				<br>Tangerang</p>

		</div>

		<div class="col-md-4">
			<a class="bg-info px-3 py-2 rounded text-white mb-2 d-inline-block">
				<i class="fa fa-phone"></i>
			</a>
			<p>+628 7556 2145 12
				<br> Setiap Hari, 8:00-22:00</p>
		</div>

		<div class="col-md-4">
			<a class="bg-info px-3 py-2 rounded text-white mb-2 d-inline-block">
				<i class="fa fa-envelope"></i>
			</a>
			<p>padang777@gmail.com
				<br> cs_padang777@gmail.com</p>
		</div>
	</div>
	<div>
		<h2 style="text-align:center">
			<p>Cabang</p>
		</h2>
		<div class="row text-center">
            <?php foreach ($data as $row){?>
			<div class="col-md-4">
				<a class="bg-info px-3 py-2 rounded text-white mb-2 d-inline-block">
					<i class="fa fa-map-marker"></i>
				</a>
				<p>
					<b><?php echo $row['NamaCabang']?></b>
					<br><?php echo $row['Alamat']?><br><?php echo $row['Kota']?><br><?php echo $row['NoTlp']?></p>

            </div>
            <?php } ?>
		</div>
	</div>
</div>
