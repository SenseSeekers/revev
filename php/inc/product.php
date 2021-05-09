<?php

/**
 * MyClass Class Doc Comment
 *
 *  PHP Version 8.0.1
 * 
 * @category Class
 * @package  MyPackage
 * @author   Md. Nurul Islam Talukder Nahid <nitalukder62443@gmail.com>
 * @license  https://github.com/SenseSeekers/revev/blob/main/LICENSE MIT License
 * @link     https://www.revevx.com/
 */
?>

<div class="container-fluid mt-5">
    <!-- Section Header : Payment Method -->
    <h2 class="text-dark mb-5 display-4 text-center">Product Info</h2>
    <div>
        <?php
        require 'inc\product\product-details.php';
        ?>
    </div>
</div>




<div class="container-fluid mt-5 text-center">
    <!-- Section Header : Payment Method -->
    <!-- <h2 class="text-dark mb-5 display-4">Product Info</h2> -->
    <div>
        <?php
        require 'inc\product\product-info.php';
        ?>
    </div>
</div>

<div class="container-fluid mt-5 text-center">
    <!-- Section Header : Payment Method -->
    <h2 class="text-dark mb-5 display-4" id="payment">Payment Methods</h2>
    <div>
        <?php
        require 'inc\product\payment-method.php';
        ?>
    </div>
</div>

<div class="container-fluid mt-5 text-center">
    <!-- Section Header : Payment Method -->
    <h2 class="text-dark mb-5 display-4" id="payment">Related Products</h2>
    <div>
        <?php
        require 'inc\components\gallery-product-display-card.php';
        ?>
    </div>
</div>