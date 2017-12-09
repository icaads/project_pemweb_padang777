<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Details</title>
</head>
<?php echo $js; echo $css;?>

<body>
    <div class="container">
        <?php
	        if ($this->session->userdata('status') == 'guest') echo $navbar_guest;
	        else {
                echo $navigation_login; $modal_script;} 
        ?>
            <br>
            <br>
            <div class="item-container">
                <div class="row">
                    <?php foreach($menu as $row) {
            $id = $row['IDMenu'];
        ?>
                    <div class="col-md-12">
                        <div class="product col-md-3 service-image-left">
                            <center>
                                <img style="width:2500px; height:220px;" src="<?php echo base_url();?><?php echo $row['Gambar'];?>" alt="dsadas" />
                            </center>
                        </div>
                    </div>
                    &nbsp;
                    <div class="col-md-7">
                        <div class="product_title">
                            <h4>
                                <?php echo $row['NamaMenu']; ?>
                            </h4>
                        </div>
                        <p>
                            <?php echo $row['Deskripsi'];?>
                        </p>
                        <div class="offer">
                            <div class="col-md-12 col-sm-12 col-xs-6 review">
                                <?php for ($i=0;$i<$row['Rating'];$i=$i+1){?>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <?php } ?>
                                <?php for ($j=0;$j<5-$row['Rating'];$j=$j+1){?>
                                <i class="fa fa-star-o" aria-hidden="true"></i>
                                <?php } ?>
                            </div>
                        </div>
                        <hr>
                        <h4 class="cost">
                            <?php $harga = sprintf('%0.3f',$row['Harga']/1000); ?>
                            <?php echo 'Rp. '.$harga.',00';?>
                        </h4>

                        <hr>
                        <div class="btn-group cart">
                        <a href=<?php echo base_url("Shop/belanja?id=$id")?>>
                            <button type="button" class="btn btn-success">
                            <span class="fa fa-shopping-cart"></span> Pesan
                            </button>
                            </a>
                        </div>
                        <div class="btn-group wishlist">
                        <a href=<?php echo base_url("Shop")?>>
                            <button type="button" class="btn btn-danger">
                                <span class="fa fa-arrow-left"></span> Kembali
                            </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php } ?>
    </div>
<br>
    <?php echo $footer; ?>
</body>

</html>