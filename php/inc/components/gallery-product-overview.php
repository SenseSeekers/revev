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
require "./inc/database/product-data.php";
?>

<!-- More To Love : Gallery- Product Overview -->
<div class="container-fluid mb-5">
    <div class="row justify-content-center g-3">
        <?php foreach ($ProductData as $Product) : ?>
            <div class="col-12">
                <!-- Product Overview -->
                <img src="
                    <?php echo $Product["Featured Thumbnail"]; ?> 
                    " class="w-100 h-100" alt="Image not Included" style="max-width: 720px;">
            </div>
        <?php endforeach; ?>
    </div>
</div>