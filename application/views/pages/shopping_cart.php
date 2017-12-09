<html>

<head>
    <?php
echo $js; echo $css; 
?>
</head>

<body>
    <div class="container">
        <?php echo $navigation; ?>
        
        <br>
        <div class="row">
       <?php if ($cart = $this->cart->contents()){  ?>
            <?php foreach ($cart as $row) {	
                ?>
            <div class="col-sm-12 col-md-10 col-md-offset-1">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Product</th>
                            <th>Quantity</th>
                            <th class="text-center">Price</th>
                            <th class="text-center">Total</th>
                            <th> </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <div class="my-list">
                                <td class="col-sm-8 col-md-6">
                                    <div class="media">
                                        <a class="thumbnail pull-left" href="#">
                                            <img style="width:100px; height:100px;"  src="<?php echo base_url();?><?php echo $row['options'];?>" alt="dsadas" /> </a>
                                        <div class="media-body">
                                            <h4 class="media-heading">
                                                <br>
                                                <?php echo $row['name']; ?>
                                            </h4>
                                        </div>
                                    </div>
                                </td>
                                <td class="col-sm-1 col-md-1" style="text-align: center">
                                    <p><?php echo $row['qty']; ?></p>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center">
                                    <p><?php $harga = sprintf('%0.3f',$row['price']/1000); 
                                        echo 'Rp'.$harga.',00';
                                    ?></p>
                                </td>
                                <td class="col-sm-1 col-md-1 text-center">
                                    <strong><?php $total = sprintf('%0.3f',$row['qty']*$row['price']/1000) ;
                                    echo 'Rp'.$total.',00';?></strong>
                                </td>
                                <td class="col-sm-1 col-md-1">
                                <?php $row_id = $row['rowid']; ?>
                                <a href=<?php echo base_url("Shop/remove?id=$row_id")?>>
								<button class="btn btn-danger">Remove</button>	
								</a>
                                </td>
                            </div>
                        </tr>
                        <?php } }?>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h5>Subtotal</h5>
                               
                            </td>
                            <td class="text-right">
                                <h5>
                                    <strong><?php echo 'Rp'.$this->cart->total().',00'; ?></strong>
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h5>Ongkos Kirim</h5>
                            </td>
                            <td class="text-right">
                                <h5>
                                    <strong>RpS15.000,00</strong>
                                </h5>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                                <h4>Total</h4>
                            </td>
                            <td class="text-right">
                                <h4>
                                    <strong><?php 
                                    $total = $this->cart->total() + 15000;
                                    echo   'Rp'.$total,',00';?></strong>
                                </h4>
                            </td>
                        </tr>
                        <tr>
                            <td>   </td>
                            <td>   </td>
                            <td>   </td>
                            <td>
                            <a href=<?php echo base_url("Shop")?>>
                                <button type="button" class="btn btn-default">
                                    <span class="fa fa-shopping-cart"></span> Continue Shopping
                                </button>
                            </td>
                            </a>
                            <td>
                            <a href=<?php echo base_url("Shop/destroy_cart")?>>
                                <button type="button" class="btn btn-success">
                                    Checkout
                                    <span class="fa fa-play"></span>
                                </button>
                            </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <?php echo $footer; ?>
</body>

</html>