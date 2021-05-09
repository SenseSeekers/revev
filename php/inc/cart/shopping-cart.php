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

<div class="container my-5">
    <!-- Stack the columns on mobile by making one full-width and the other half-width -->
    <div class="row">
        <div class="col-md-8">
            <div class="d-flex justify-content-center">
                <div style="background: gray; width: 250px; height: 250px;">
                    Will be add using backend component
                </div>
            </div>
        </div>
        <div class="col-6 col-md-4  text-start">
            <p class="h4 my-2">Product Title</p>
            <p class="h6 mb-3">Product Code</p>
            <p class="h5 my-4">BDT ৳ 1500</p>
            <form class=" text-start">
                <p class="h6 pt-3">Select Color</p>
                <div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioColor" id="colorP">
                        <label class="form-check-label" for="Colorp">
                            Red
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioColor" id="colorP">
                        <label class="form-check-label" for="Colorp">
                            Green
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioColor" id="colorP">
                        <label class="form-check-label" for="Colorp">
                            Blue
                        </label>
                    </div>
                </div>
                <p class="h6 pt-3">Select Size</p>
                <div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioSize" id="Sizep">
                        <label class="form-check-label" for="Sizep">
                            S
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioSize" id="Sizep">
                        <label class="form-check-label" for="Sizep">
                            M
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioSize" id="Sizep">
                        <label class="form-check-label" for="Sizep">
                            L
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioSize" id="Sizep">
                        <label class="form-check-label" for="Sizep">
                            Xl
                        </label>
                    </div>
                </div>
                <div class="my-3">
                    <label for="exampleInputEmail1" class="form-label h6">Contact Number</label>
                    <input type="phone" class="form-control" id="exampleInputphone" aria-describedby="phoneHelp">
                    <div id="phoneHelp" class="form-text">We'll never share your contact info with anyone else.</div>
                </div>
                <p class="h6 py-1">Choice Method</p>
                <div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Payment">
                        <label class="form-check-label" for="Payment">
                            Cash on Delivery
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Payment">
                        <label class="form-check-label" for="Payment">
                            Bikash / Nagad
                        </label>
                    </div>
                </div>
                <p class="h6 py-1">Payment Info</p>
                <div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Payment">
                        <label class="form-check-label" for="Payment">
                            Bkash
                        </label>
                    </div>
                    <div class="form-check text-start">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="Payment">
                        <label class="form-check-label" for="Payment">
                            Nagad
                        </label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label h6 my-3">Payment TxnID</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="enterTxnID">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Confirm Order</button>
            </form>
        </div>
    </div>
</div>