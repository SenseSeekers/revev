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
require "./inc/database/category-data.php";
?>

<!-- Popular Categories : Gallery- Category Card -->
<div class="container-fluid my-5">
    <div class="row justify-content-center g-3">
        <?php foreach ($CategoryData as $Category) : ?>
            <!-- Popular Categories : Image - Category Card -->
            <div class="col-auto">
                <!-- Category Card -->
                <a href="category.php" class="btn btn-outline-secondary shadow-sm p-0 h-100">
                    <div class="card shadow-sm" style="width: 18rem;">
                        <div class="container-fluid my-3">
                            <div class="row justify-content-center g-1">
                                <div class="col">
                                    <img src="
                                <?php echo $Category["Featured Thumbnail 01"]; ?> 
                                " class="img-thumbnail" alt="Image not Included">
                                </div>
                                <div class="col">
                                    <img src="
                                <?php echo $Category["Featured Thumbnail 02"]; ?> 
                                " class="img-thumbnail" alt="Image not Included">
                                </div>
                                <div class="col">
                                    <img src="
                                <?php echo $Category["Featured Thumbnail 03"]; ?> 
                                " class="img-thumbnail" alt="Image not Included">
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title text-dark">
                                <?php echo $Category["Category Name"]; ?>
                            </h5>
                        </div>
                    </div>
                </a>
            </div>
        <?php endforeach; ?>
    </div>
</div>



<!-- <a href="#" class="btn btn-outline-secondary shadow-sm p-0 h-100">
    <div class="card h-100" style="width: 12rem;">
        <img src="
                        <?php echo $Product["Featured Thumbnail"]; ?> 
                        " class="card-img-top" alt="Image not Included">
        <div class="card-body">
            <h5 class="card-title text-dark">Price : &#2547;
                <?php echo $Product["Product Price"];
                ?>
                &nbsp;</h5>
            <p class="card-text h6 text-secondary my-1">
                <?php echo $Product["Brand Name"]
                    . ' ' . $Product["Product Name"]; ?>
            </p>
        </div>
    </div>
</a> -->


<!-- Category Card -->
<!-- <div class="card shadow-sm" style="width: 18rem;">
    <div class="container-fluid my-3">
        <div class="row justify-content-center g-1">
            <div class="col">
                <img src="
                                <?php //echo $Category["Featured Thumbnail 01"]; 
                                ?> 
                                " class="img-thumbnail" alt="Image not Included">
            </div>
            <div class="col">
                <img src="
                                <?php //echo $Category["Featured Thumbnail 02"]; 
                                ?> 
                                " class="img-thumbnail" alt="Image not Included">
            </div>
            <div class="col">
                <img src="
                                <?php //echo $Category["Featured Thumbnail 03"]; 
                                ?> 
                                " class="img-thumbnail" alt="Image not Included">
            </div>
        </div>
    </div>
    <div class="card-body">
        <h5 class="card-title text-dark">
            <?php //echo $Category["Category Name"]; 
            ?>
        </h5>
    </div>
</div> -->