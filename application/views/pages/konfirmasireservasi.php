<!DOCTYPE html>
<html>

<head>
    <title>Konfirmasi Pemesanan Meja</title>
</head>

<body>
    <?php echo $js; echo $css;  ?>
    <div class="container">
        <?php
			if($this->session->userdata('status')=='member'){
				echo $navigation_login;
			}
			else {
				echo $navbar_guest;
				
			}
			
		?>
            <br>
            <br>
            <h1 class="text-center">Konfirmasi Pemesanan Meja</h1>
            <hr>
            <div class="col-md-12">
                <div class="panel panel-default panel-center">
                    <div class="panel-heading">
                        <h3> ID Reservasi :
                            <?php echo $this->session->userdata('idtransreservasi'); ?>
                        </h3><hr>
                        <div class="in-line">
                        <h4 style="display: inline">Detail Pemesan : <strong> 
                            <?php
                            if (strpos($reservasi[0]['username'], 'guest') !== false) {
                                echo substr($reservasi[0]['username'],0,strlen($reservasi[0]['username'])-5).' (Guest)';
                            }
                            else {
                                echo $reservasi[0]['username'].' (Member)';
                            }
                             ?>
                        </strong>
                        </h4>
                        <h4 style="display: inline">  
                            <?php echo $reservasi[0]['NoTlp'] ?></h4>
                        </div>
                        
                        
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Cabang</th>
                                <th>Lokasi Meja</th>
                                <th>Tanggal</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1;?>
                            <?php foreach($reservasi as $row){
                                $id = $row['IDReservasi'];    
                            ?>
                        </h3>
                            <tr>
                                <td>
                                    <?php echo $i; ?>
                                </td>
                                <td>
                                    <?php echo $row['NamaCabang']?>
                                </td>
                                <td>
                                    <?php echo $row['IDMeja']; ?>
                                </td>
                                <td>
                                    <?php echo $row['tanggalreservasi'];?>
                                </td>
                                <td>
                                    <div style="text-align:center">
                                        <a href="<?php echo base_url("reservasi/hapus_reservasi?id=$id")?>">
                                            <button class="btn btn-danger">Remove</button>
                                        </a>
                                </td>
                                </div>
                            </tr>
                            <?php $i=$i+1; } ?>
                        </tbody>
                    </table>
                </div>


            </div>
            <a href="<?php echo base_url('reservasi/konfirmasi_akhir'); ?>">
            <div style="text-align:center">
                <button type="button" class="btn btn-info pull-center">Konfirmasi Reservasi</button>
                <br>
                <br>
            </div>
            </a>
            

    </div>

    <?php echo $footer; ?>
</body>

</html>