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

<ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
    <li class="nav-item" role="presentation">
        <button class="nav-link active" style="height: 4rem; width:8rem;" id="bkash-tab" data-bs-toggle="tab" data-bs-target="#bkash" type="button" role="tab" aria-controls="bkash" aria-selected="true">
            <img src="https://upload.wikimedia.org/wikipedia/en/6/68/BKash_logo.svg" class="card-img-top h-100 w-100" alt="Image not Included">
        </button>
    </li>
    <li class="nav-item" role="presentation">
        <button class="nav-link" style="height: 4rem; width:8rem;" id="nagad-tab" data-bs-toggle="tab" data-bs-target="#nagad" type="button" role="tab" aria-controls="nagad" aria-selected="false">
            <img src="https://upload.wikimedia.org/wikipedia/commons/0/07/Nagad_Logo_2019.svg" class="card-img-top h-100 w-100" alt="Image not Included">
        </button>
    </li>
</ul>
<div class="tab-content" id="myTabContent">
    <div class="tab-pane fade show active" id="bkash" role="tabpanel" aria-labelledby="bkash-tab">
        <?php
        require 'inc\cart\payment-method\bkash.php';
        ?>
    </div>
    <div class="tab-pane fade" id="nagad" role="tabpanel" aria-labelledby="nagad-tab">
        <?php
        require 'inc\cart\payment-method\nagad.php';
        ?>
    </div>
</div>