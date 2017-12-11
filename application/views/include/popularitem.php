<div class="container">
<h2 class="text-center">Menu Populer</h2>
<hr>
<!-- <img src="<?php//echo base_url();?>/assets/picture/line copy.jpg"> -->
    <div id="carousel_example" class="carousel slide hidden-xs" data-ride="carousel" data-type="multi">
        <div class="carousel-inner">
            <div class="item active">
                <div class="row">
                <?php foreach ($menu as $row){ ?>
                    <div class="col-md-3 col-sm-3 col-xs-12">
                        <div class="slider-item">
                            <div class="slider-image">
                                <img src="https://dummyimage.com/250x200/#cccccc/1f1b1f.png" class="img-responsive" alt="a" />
                            </div>
                            <div class="slider-main-detail">
                                <div class="slider-detail">
                                    <div class="product-detail">
                                        <h5><?php echo $row['NamaMenu']; ?></h5>
                                        <h5 class="detail-price">$187.87</h5>
                                    </div>
                                </div>
                            <div class="cart-section">
                                <div class="row">
                                    <div class="col-md-12 col-sm-12 col-xs-6 review">
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                        <i class="fa fa-star-o" aria-hidden="true"></i>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-6">
                                        <a href="#" class="AddCart btn btn-info"><i class="fa fa-shopping-cart" aria-hidden="true"></i> Add To Cart</a>
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