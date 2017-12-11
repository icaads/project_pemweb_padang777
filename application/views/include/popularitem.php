<div class="container">
    <h2 class="text-center">Menu Populer</h2>
    <hr>
    <div id="carousel_example" class="carousel slide hidden-xs" data-ride="carousel" data-type="multi">
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                    <?php foreach ($menu as $row){ ?>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="slider-item">
                            <div class="slider-image">
                                <img src="<?php echo base_url()?><?php echo $row['Gambar']; ?> " class="img-responsive" alt="a" />
                            </div>
                            <div class="slider-main-detail">
                                <div class="slider-detail">
                                    <div class="product-detail">
                                        <h5>
                                            <?php echo $row['NamaMenu']; ?>
                                        </h5>
                                        <h5 class="detail-price">
                                            <?php
                                         $harga = sprintf('%0.3f',$row['Harga']/1000);
                                        echo 'Rp'.$harga.',00'; ?>
                                        </h5>
                                    </div>
                                </div>
                                <div class="cart-section">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-6 review">
                                            <?php for ($i=0;$i<$row['Rating'];$i++){?>
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <?php } ?>
                                            <?php for ($i=0;$i<5-$row['Rating'];$i++){?>
                                            <i class="fa fa-star-o" aria-hidden="true"></i>
                                            <?php } ?>
                                        </div>
                                        <div class="col-md-6 col-sm-12 col-xs-6">
                                            <a href="<?php
                                        $id = $row['IDMenu'];
                                        echo base_url(" Shop/belanjapopuler?id=$id ")?>" class="AddCart btn btn-info">
                                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>Pesan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>