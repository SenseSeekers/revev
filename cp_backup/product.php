<div class=" container-fluid single-caption-section ">
    <div class="">
        <img src="<?php echo base_url(); ?>img/cover/product.jpg" width="100%" height="100">
    </div>
</div>
<br>
<!-- Pick up start -->
<section class="pick_up">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-lg-4">

                <div class="pick_up_blog">
                    <div class="exzoom hidden" id="exzoom">
                        <div class="exzoom_img_box">
                            <ul class='exzoom_img_ul'>
                                <li style="margin-bottom: 0px;padding: 0px;"><img src="<?php echo base_url(); ?>img/product/<?php echo $ProductData->product_image; ?>" class="d-block w-100" /></li>
                                <?php
                                foreach ($ProductDataImg as $ProductImg) {
                                ?>
                                    <li style="margin-bottom: 0px;padding: 0px;"><img src="<?php echo base_url(); ?>img/product/<?php echo $ProductImg->product_image; ?>" class="d-block w-100" />
                                    </li>
                                <?php
                                }
                                ?>

                            </ul>
                        </div>
                        <div class="exzoom_nav"></div>
                        <p class="exzoom_btn">
                            <a href="javascript:void(0);" class="exzoom_prev_btn">
                                < </a>
                                    <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
                        </p>
                    </div>
                </div>

            </div>
            <!--end-->
            <div class="col-lg-8">
                <div class="pick_up_blog">
                    <div class="pick_up_blog_text">
                        <div class="product_caption">
                            <div style="flex-grow: 8; color: #000;">
                                <h2><?php echo $ProductData->product_name; ?></h2>
                            </div>

                        </div>
                        <div class="single-product-content">
                            <ul>
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
                            </ul>
                        </div>

                        <table style="width:100%">
                            <?php if ($ProductData->product_details == '') {
                                echo 'null';
                            } else {
                                echo $ProductData->product_details;
                            } ?>
                        </table>

                        <!-- Button trigger modal -->
                        <a href="<?php echo base_url('FrontFile/Order/'); ?><?php echo $ProductData->product_id; ?>" class="btn btn-warning">Order Now</a>

                    </div>
                </div>
            </div>
        </div>
        <!--end-->
        <div class="product-details-more">
            <ul class="nav nav-pills justify-content-center" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Specfication</a>
                </li>
            </ul>
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"> asdf<?php echo $ProductData->product_details; ?></div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                    asdff
                    <?php
                    $id = $ProductData->product_id;
                    $AllSubProductImg = $this->Product_model->PrroductIdBySubImage($id);
                    $sl = 0;
                    foreach ($AllSubProductImg as $SubProductImg) {
                        $sl++;
                    ?>

                        <div class="col-6">
                            <div class="view overlay rounded z-depth-1 gallery-item hoverable">
                                <img src="<?php echo base_url(); ?>img/product/<?php echo $SubProductImg->product_image; ?>" class="img-fluid">
                                <div class="mask rgba-white-slight"></div>
                            </div>
                        </div><br><br>
                    <?php } ?>
                </div>
            </div>
        </div>

    </div>
    </div>
</section>
<!--end--->


<script type="text/javascript">
    $('.container').imagesLoaded(function() {
        $("#exzoom").exzoom({
            autoPlay: false,
        });
        $("#exzoom").removeClass('hidden')
    });
</script>
<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
        var ga = document.createElement('script');
        ga.type = 'text/javascript';
        ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ga, s);
    })();
</script>