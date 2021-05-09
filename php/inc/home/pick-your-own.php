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
 * 
 * @return string[]
 * phpcs:disable
 * 
 */
?>

<!-- Section : Product Subcategory -->
<div class="container-fluid mt-5 text-center">
    <!-- Section Header : Product Subcategory -->
    <h2 class="text-dark mb-5 display-4">Pick Your Own</h2>
    <!-- Section Body : Product Subcategory -->
    <div>
        <?php
        require 'inc\components\gallery-product-display-card.php';
        ?>
        <?php
        require 'inc\components\button-view-more-products.php';
        ?>
    </div>
</div>
