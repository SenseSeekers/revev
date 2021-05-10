<footer class="container-fluid mt-auto pt-5">
    <!-- Footer Sections -->
    <div class="row text-secondary bg-light">
        <!-- Social Links Section -->
        <div class="col-lg col-xl-3 text-center py-3">
            <h4>Stay Connected</h4>
            <!-- Social Links -->
            <div class="container py-3">
                <div class="btn-group" role="group">
                    <div class="col">
                        <!-- Facebook -->
                        <a class="btn btn-secondary btn-floating text-light m-2" href="#!" role="button"><i class="bi bi-facebook"></i></a>
                    </div>
                    <div class="col">
                        <!-- Twitter -->
                        <a class="btn btn-secondary btn-floating text-light m-2" href="#!" role="button"><i class="bi bi-twitter"></i></a>
                    </div>
                    <div class="col">
                        <!-- Instagram -->
                        <a class="btn btn-secondary btn-floating text-light m-2" href="#!" role="button"><i class="bi bi-instagram"></i></a>
                    </div>
                    <div class="col">
                        <!-- Linkedin -->
                        <a class="btn btn-secondary btn-floating text-light m-2" href="#!" role="button"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Help & Support Section -->
        <div class="col-lg col-xl-3 text-center py-3">
            <h4>Top Cateogries</h4>
            <!-- Help & Support Links -->
            <div class="container">
                <div class="row">
                    <?php
                    foreach ($AllCategoryData as $categoryData) {
                    ?>
                        <div class="col-md-6">
                            <a class="btn btn-link text-secondary" href="<?php echo base_url('FrontFile/product_cat/'); ?><?php echo $categoryData->id; ?>" role="button"><?php echo $categoryData->cat_name; ?></a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
        <!-- Help & Support Section -->
        <div class="col-lg col-xl-3 text-center py-3">
            <h4>Help & Support</h4>
            <!-- Help & Support Links -->
            <div class="container">
                <div class="row">
                    <div class="col-xxl">
                        <a class="btn btn-link text-secondary" href="#!" role="button">+88 01870-250005</a>
                    </div>
                    <div class="col-xxl">
                        <a class="btn btn-link text-secondary" href="#!" role="button">+88 01870-250005</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Help & Support Section -->
        <div class="col-lg col-xl-3 text-center py-3">
            <h4>We Accept</h4>
            <!-- Help & Support Links -->
            <div class="container">
                <div class="row">
                    <div class="col-xxl">
                        <a class="btn btn-link text-secondary" href="#!" role="button">Nagad Payment</a>
                    </div>
                    <div class="col-xxl">
                        <a class="btn btn-link text-secondary" href="#!" role="button">Bkash Payment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright & Developer Info -->
    <div class="row text-secondary bg-dark">
        <div class="col-md col-lg-6 text-center py-3">
            © 2021 <a href="http://revevx.com" role="button" class="btn-link text-secondary m-0 p-0">revevx.com</a>. All Rights Reserved
        </div>
        <div class="col-md col-lg-6 text-center py-3">
            Designed & Developed by <a href="mailto:teamsenseseekers@gmail.com" role="button" class="btn-link text-secondary m-0 p-0">SenseSeekers</a>
        </div>
    </div>
</footer>