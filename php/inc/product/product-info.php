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

<!-- <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" style="height: 4rem; width:8rem;" id="bkash-tab" data-bs-toggle="tab" data-bs-target="#bkash" type="button" role="tab" aria-controls="bkash" aria-selected="true">
            Overview
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" style="height: 4rem; width:8rem;" id="overview-tab" data-bs-toggle="tab" data-bs-target="#overview" type="button" role="tab" aria-controls="overview" aria-selected="false">
            Overview
        </button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="bkash" role="tabpanel" aria-labelledby="bkash-tab">
        <?php
        // require 'inc\product\product-info\overview.php';
        ?>
    </div>
    <div class="tab-pane fade" id="overview" role="tabpanel" aria-labelledby="overview-tab">
        <?php
        // require 'inc\product\product-info\overview.php';
        ?>
    </div>
</div> -->

<div class="container-fluid mt-5 text-center">
    <!-- Section Header : Product Subcategory -->
    <h2 class="text-dark display-6">Product Overview</h2>
    <!-- Section Body : Product Subcategory -->
    <div>
        <?php
        require 'inc\product\product-info\overview.php';
        ?>
    </div>
</div>