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

<?php
require 'components/breadcrumb-category.php';
?>


<!-- Section : Product Subcategory -->
<div class="container-fluid mt-5 text-center">
    <!-- Section Header : Product Subcategory -->
    <h2 class="text-dark mb-5 display-4">Jackets</h2>
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

<!-- 
<div class="container-fluid mb-5">
    <h2 class="text-dark mb-5 display-4 text-center">Search Resuts</h2>
    <div class="row justify-content-center">
        <?php
                // require 'category/filter-accordion.php';
                // ?>
        <?php
        // require 'category/search-gallery.php';
        ?>
    </div>
</div>


<?php
// require 'inc\components\pagination-search-result.php';
?> -->