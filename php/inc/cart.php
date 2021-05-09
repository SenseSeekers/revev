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

<div class="container-fluid mt-5 text-center">
    <!-- Section Header : Payment Method -->
    <h2 class="text-dark mb-5 display-4">Order Product</h2>
    <div>
        <?php
        require 'inc\cart\shopping-cart.php';
        ?>
    </div>
</div>

<div class="container-fluid mt-5 text-center">
    <!-- Section Header : Payment Method -->
    <h2 class="text-dark mb-5 display-4">Payment Methods</h2>
    <div>
        <?php
        require 'inc\cart\payment-method.php';
        ?>
    </div>
</div>



<!-- <style>
    body {
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        font-family: sans-serif;
        font-size: 1rem;
        font-weight: bold;
    }

    .title {
        margin-bottom: 5vh
    }

    .card {
        margin: 33px auto;
        max-width: 950px;
        width: 90%;
        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        border-radius: 1rem;
        border: transparent
    }

    @media(max-width:767px) {
        .card {
            margin: 3vh auto
        }
    }

    .cart {
        background-color: #fff;
        padding: 4vh 5vh;
        border-bottom-left-radius: 1rem;
        border-top-left-radius: 1rem
    }

    @media(max-width:767px) {
        .cart {
            padding: 4vh;
            border-bottom-left-radius: unset;
            border-top-right-radius: 1rem
        }
    }

    .summary {
        background-color: rgb(240, 240, 240);
        border-top-right-radius: 1rem;
        border-bottom-right-radius: 1rem;
        padding: 4vh;
        color: rgb(65, 65, 65)
    }

    @media(max-width:768px) {
        .summary {
            border-top-right-radius: unset;
            border-bottom-left-radius: 1rem
        }

        .poan {
            margin-left: 5px;
            letter-spacing: 0.01rem;
        }
    }

    .summary .col-2 {
        padding: 0
    }

    .summary .col-10 {
        padding: 0
    }

    .row {
        margin: 0
    }

    .title b {
        font-size: 1.5rem
    }

    .main {
        margin: 0;
        padding: 2vh 0;
        width: 100%
    }

    .col-2,
    .col {
        padding: 0 0vh
    }

    a {
        padding: 0 1vh
    }

    .close {
        margin-left: auto;
        font-size: 0.7rem
    }

    img {
        width: 3.5rem;
    }

    .back-to-shop {
        margin-top: 4.5rem
    }

    h5 {
        margin-top: 4vh
    }

    hr {
        margin-top: 1.25rem
    }

    form {
        padding: 2vh 0
    }

    select {
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1.5vh 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247)
    }

    input {
        border: 1px solid rgba(0, 0, 0, 0.137);
        padding: 1vh;
        margin-bottom: 4vh;
        outline: none;
        width: 100%;
        background-color: rgb(247, 247, 247)
    }

    input:focus::-webkit-input-placeholder {
        color: transparent
    }

    .btn {
        background-color: #000;
        border-color: #000;
        color: white;
        width: 100%;
        font-size: 0.7rem;
        margin-top: 4vh;
        padding: 1vh;
        border-radius: 0
    }

    .btn:focus {
        box-shadow: none;
        outline: none;
        box-shadow: none;
        color: white;
        -webkit-box-shadow: none;
        user-select: none;
        -webkit-user-select: none;
        transition: none
    }

    .btn:hover {
        color: white
    }

    a {
        color: black
    }

    a:hover {
        color: black;
        text-decoration: none
    }

    .po {
        margin: 33px 11px;
    }

    .pheading {
        padding: 0;
    }

    .poan {
        font: 400 1rem/2rem arial;
        letter-spacing: 0.1rem;
        margin-left: 25px;
    }

    .pis {
        list-style-type: none;
        padding-left: 0;
    }

    .pis li {
        font: 300 1rem/2rem arial;
        padding: 11px 6px;
    }

    .pis li,
    -strong {
        text-transform: capitalize;
    }

    .pis strong {
        font: bold 1.1rem/2rem sans-serif;
        text-transform: capitalize;
    }
</style>

<div class="card">
    <div class="row">
        <div class="col-md-8 cart">
            <div class="title">
                <div class="row">
                    <div class="col">
                        <h4><b>Shopping Cart</b></h4>
                    </div>
                    <div class="col align-self-center text-right text-muted">3 items</div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://image.spreadshirtmedia.com/image-server/v1/mp/products/T650A2MPA4005PT17X95Y48D1025649332FS2187/views/1,width=378,height=378,appearanceId=2,backgroundColor=F2F2F2,modelId=5084,crop=list/funny-gear-shift-manual-transmission-car-gift-mens-tall-t-shirt.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">Shirt</div>
                        <div class="row">Cotton T-shirt</div>
                    </div>
                    <div class="col"> <a href="#" class="sli"><i class="bi bi-dash"></i></a><a href="#" class="border">1</a><a href="#" class="sli"><i class="bi bi-plus"></i></a> </div>
                    <div class="col">&#2547; 44.00 <span class="close">&#10005;</span></div>
                </div>
            </div>
            <div class="row">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://image.spreadshirtmedia.com/image-server/v1/mp/products/T650A2MPA4005PT17X95Y48D1025649332FS2187/views/1,width=378,height=378,appearanceId=2,backgroundColor=F2F2F2,modelId=5084,crop=list/funny-gear-shift-manual-transmission-car-gift-mens-tall-t-shirt.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">Shirt</div>
                        <div class="row">Cotton T-shirt</div>
                    </div>
                    <div class="col"> <a href="#" class="sli"><i class="bi bi-dash"></i></a><a href="#" class="border">1</a><a href="#" class="sli"><i class="bi bi-plus"></i></a> </div>
                    <div class="col">&#2547; 44.00 <span class="close">&#10005;</span></div>
                </div>
            </div>
            <div class="row border-top border-bottom">
                <div class="row main align-items-center">
                    <div class="col-2"><img class="img-fluid" src="https://image.spreadshirtmedia.com/image-server/v1/mp/products/T650A2MPA4005PT17X95Y48D1025649332FS2187/views/1,width=378,height=378,appearanceId=2,backgroundColor=F2F2F2,modelId=5084,crop=list/funny-gear-shift-manual-transmission-car-gift-mens-tall-t-shirt.jpg"></div>
                    <div class="col">
                        <div class="row text-muted">Shirt</div>
                        <div class="row">Cotton T-shirt</div>
                    </div>
                    <div class="col"> <a href="#" class="sli"><i class="bi bi-dash"></i></a><a href="#" class="border">1</a><a href="#" class="sli"><i class="bi bi-plus"></i></a> </div>
                    <div class="col">&#2547; 44.00 <span class="close">&#10005;</span></div>
                </div>
            </div>

            payment instruction

            <div class="accordion" id="accordionExample">
                <div class="accordion-item po">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button collaspsed pheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            <img src="src/img/bkash.png" alt=""><span class="poan">+8801952657015</span>
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="pis">
                                <li>
                                    <strong>step-1:</strong>
                                    Commodi iste minus expedita architecto libero molestiae rerum tenetur, at quidem sint adipisci modi.
                                </li>
                                <li>
                                    <strong>step-2:</strong>
                                    animi cupiditate omnis, accusamus eaque similique assumenda Molestiae impedit mollitia perspiciatis tenetur hic.
                                </li>
                                <li>
                                    <strong>step-3:</strong>
                                    aliquid tenetur illo inventore, necessitatibus eos expedita accusamus corrupti veniam, harum architecto neque.
                                </li>
                                <li>
                                    <strong>step-4:</strong>
                                    suscipit molestias provident accusamus facere ducimus explicabo magnam tenetur, id animi.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item po">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed pheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            <img src="src/img/dbbl-rocket.png" alt=""><span class="poan">+8801680524210</span>
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="pis">
                                <li>
                                    <strong>step-1:</strong>
                                    Commodi iste minus expedita architecto libero molestiae rerum tenetur, at quidem sint adipisci modi.
                                </li>
                                <li>
                                    <strong>step-2:</strong>
                                    animi cupiditate omnis, accusamus eaque similique assumenda Molestiae impedit mollitia perspiciatis tenetur hic.
                                </li>
                                <li>
                                    <strong>step-3:</strong>
                                    aliquid tenetur illo inventore, necessitatibus eos expedita accusamus corrupti veniam, harum architecto neque.
                                </li>
                                <li>
                                    <strong>step-4:</strong>
                                    suscipit molestias provident accusamus facere ducimus explicabo magnam tenetur, id animi.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="accordion-item po">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed pheading" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <img src="src/img/nogad.png" alt=""><span class="poan">+8801820501250</span>
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                        <div class="accordion-body">
                            <ul class="pis">
                                <li>
                                    <strong>step-1:</strong>
                                    Commodi iste minus expedita architecto libero molestiae rerum tenetur, at quidem sint adipisci modi.
                                </li>
                                <li>
                                    <strong>step-2:</strong>
                                    animi cupiditate omnis, accusamus eaque similique assumenda Molestiae impedit mollitia perspiciatis tenetur hic.
                                </li>
                                <li>
                                    <strong>step-3:</strong>
                                    aliquid tenetur illo inventore, necessitatibus eos expedita accusamus corrupti veniam, harum architecto neque.
                                </li>
                                <li>
                                    <strong>step-4:</strong>
                                    suscipit molestias provident accusamus facere ducimus explicabo magnam tenetur, id animi.
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="back-to-shop"><a href="#" style="text-decoration: none;"><i class="bi bi-arrow-left"></i></a><span class="text-muted">Back to shop</span></div>
        </div>
        <div class="col-md-4 summary">
            <div>
                <h5><b>Summary</b></h5>
            </div>
            <hr>
            <div class="row">
                <div class="col" style="padding-left:0;">ITEMS 3</div>
                <div class="col text-right">&#2547; 132.00</div>
            </div>

            <div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
                <div class="col">TOTAL PRICE</div>
                <div class="col text-right">&#2547; 132.00</div>
            </div> <button class="btn">BUY NOW</button>
        </div>
    </div>
</div> -->



<!-- <div class="container-fluid mt-5 text-center">
    Section Header : Payment Method
    <h2 class="text-dark mb-5 display-4">In Your Cart</h2>
    <div>
        <?php
        // require 'inc\cart\shopping-cart.php';
        ?>
    </div>
</div> -->