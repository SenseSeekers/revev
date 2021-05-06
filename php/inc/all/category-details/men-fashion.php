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


<div class="accordion" id="accordionMenSubCategory">
    <!-- Section : Popular Categories -->
    <div class="container-fluid accordion-item my-5 p-0 text-center">
        <!-- Section Header : Popular Categories -->
        <h2 class="accordion-header" id="headingMensFashion">
            <button class="accordion-button " type="button" data-bs-toggle="collapse" data-bs-target="#collapseMensFashion" aria-expanded="true" aria-controls="collapseMensFashion">
                <div class="display-6 text-dark text-center w-100">
                    Men's Fashion
                </div>
            </button>
        </h2>
        <div id="collapseMensFashion" class="accordion-collapse collapse show" aria-labelledby="headingMensFashion" data-bs-parent="#accordionMenSubCategory">
            <div class="accordion-body p-3">
                <?php
                require 'inc\components\gallery-all-subcategory-card.php';
                ?>
            </div>
        </div>
    </div>
</div>