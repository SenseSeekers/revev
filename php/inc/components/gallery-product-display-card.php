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


<!-- More To Love : Gallery- Product Card -->
<div class="container-fluid my-5">
    <div class="row justify-content-center g-3">
        <?php foreach ($ProductData as $Product) : ?>
            <div class="col-auto">
                <!-- Product Card -->
                <a href="product.php" class="btn shadow-sm p-0 h-100">
                    <div class="card h-100 border-0" style="width: 8rem;">
                        <img src="
                        <?php echo $Product["Featured Thumbnail"]; ?> 
                        " class="card-img-top" alt="Image not Included">
                        <div class="card-body p-0 pt-1">
                            <p class="card-title text-secondary my-0 p-0">BDT &#2547;
                                <?php echo $Product["Product Price"];
                                ?>
                                &nbsp;</p>
                            <p class="card-text text-secondary my-0 p-0">
                                <?php echo $Product["Product Name"]; ?>
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>