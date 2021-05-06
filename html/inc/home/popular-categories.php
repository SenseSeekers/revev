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


<!-- Section : Popular Categories -->
<div class="container-fluid mt-5 text-center">
    <!-- Section Header : Popular Categories -->
    <h2 class="text-dark mb-5 display-4">Popular Categories</h2>
    <!-- Section Body : Popular Categories -->
    <div>
        <?php
        require 'inc\components\gallery-all-category-card.php';
        ?>
        <?php
        require 'inc\components\button-view-categories.php';
        ?>
    </div>
</div>