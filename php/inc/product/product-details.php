<div class="container my-5">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
        <div class="col-md-6">
            <div class="d-flex justify-content-center">
                <div style="background: gray; width: 250px; height: 250px;">
                    Will be add using backend component
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div>
                <div>
                    <p class="h4 my-2"><?php echo $ProductData->product_name; ?></p>
                    <p class="h6 mb-3"><?php echo $ProductData->product_code; ?></p>
                    <p class="h5 my-4">BDT ৳ <?php echo $ProductData->product_price; ?></p>
                    <p class="h6 my-1">Product Color : <?php echo $ProductData->product_color; ?></p>
                    <p class="h6 my-1">Product Size : <?php echo $ProductData->product_size; ?></p>
                    <!-- <p class="h5 my-4">Regular Price : BDT ৳ <?php //echo $ProductData->old_price; ?></p> -->
                    <p class="h6 my-1">In Stock : <?php echo $ProductData->product_qty; ?></p>

                    <p class="h5 my-1">In Stock : <?php echo $ProductData->product_qty; ?></p>

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Red</li>
                        <li class="list-group-item">Green</li>
                        <li class="list-group-item">Blue</li>
                        <li class="list-group-item">Yellow</li>
                    </ul>
                    <p class="h6 py-1">Avaliable Sizes</p>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Red</li>
                        <li class="list-group-item">Green</li>
                        <li class="list-group-item">Blue</li>
                        <li class="list-group-item">Yellow</li>
                    </ul>
                    <a href="http://localhost/GITHUB/revev/php/cart.php">
                        <button type="button" class="btn btn-dark my-4">Order Now</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<li>
    <h5><b>Band Name</b>: <?php echo $ProductData->band_name; ?></h5>
</li>
<li>
    <h5><b>Size</b>: <?php echo $ProductData->product_size; ?></h5>
</li>
<li>
    <h5><b>color</b>: <?php echo $ProductData->product_color; ?></h5>
</li>
<li>
    <h5><b>quantity</b>: <?php echo $ProductData->product_qty; ?></h5>
</li>
<li>
    <h5><b>Eid Special :</b>&nbsp;<?php echo $ProductData->product_price; ?>&nbsp;৳</h5>
</li>
<li>
    <h5><b>Regular Price:</b>&nbsp;<?php echo $ProductData->old_price; ?>&nbsp;৳</h5>
</li>
<li>
    <h5><b>Contact Now:</b>&nbsp;<?php echo $sitedata->phone_a; ?></h5>
</li>