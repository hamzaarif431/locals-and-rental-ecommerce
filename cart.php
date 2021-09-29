<?php
    include 'includes/header.php';
    $page = 'home';
?> 
<main>
    <section class="sec-about">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="banner-h">
                        <ul class="shopping-ul">
                            <li class="shopping-li"><a href="#" class="shopping-a">shopping cart</a></li>
                            <li class="shopping-li"><a href="#" class="shopping-a">checkout</a></li>
                            <li class="shopping-li"><a class="shopping-a">order complete</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="cart-main-content">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col">PRODUCT</th>
                                <th scope="col">PRICE</th>
                                <th scope="col">QUANTITY</th>
                                <th scope="col">SUB TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fas fa-times"></i></td>
                                <td><img src="images/product2.jpg" class="img-fluid" alt="img"></td>
                                <td>
                                    <h2>Camping Gear</h2>
                                    <ul>
                                        <li>Vendor</li>
                                        <li class="d-flex">Deposite:
                                            <ul class="deposite">
                                            <li>CWD(<small>$0.00</small>-Per Day)</li><li>Personal Accident Ins. (<small>$0.00</small>  - Per Day ) ,</li></ul> </li>
                                        <li>Adults:Jenifer</li>
                                        <li>Pickup Date & Time: 07/28/2021 at 12:30</li>
                                        <li>Dropoff Date & Time: 07/28/2021 at 13:30</li>
                                        <li>Choose Inventory: Rental</li>
                                        <li>Total Days: 1 Days 0 Hours</li>
                                    </ul>

                                </td>
                                <td>£239.00</td>

                                <td>
                                    1
                                </td>
                                <td>£239.00</td>

                            </tr>
                        </tbody>
                    </table>
                    <div class="button-section">
                        <div class="row">
                            <div class="col-12 col-sm-12 col-md-12 col-lg-8 col-xl-8 col-xxl-8">
                                <div class="form-section">
                                    <div class="row align-items-center">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <input type="text" name="coupon" placeholder="Coupon code">
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                            <div class="apply-coupon">
                                                <a href="">Apply coupon</a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4 col-xxl-4">
                                <div class="addtocartbutton">
                                    <a href="">Update cart</a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="col-12 col-sm-12 col-md-12 col-lg-4 col-xl-4 col-xxl-4">
                    <div class="card-for-cart">
                        <div class="card">
                            <div class="card-body">
                                <h2>Cart totals</h2>
                                <div class="subtotal">
                                    <ul>
                                        <li>Subtotal</li>
                                        <li>£937.00</li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <hr>
                                <div class="total">
                                    <ul>
                                        <li>Total</li>
                                        <li>£937.00</li>
                                    </ul>
                                </div>
                                <div class="clearfix"></div>
                                <div class="proceed-to-checkout-button">
                                    <a href="checkout.php">Proceed To Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
</main>

   <?php
   include 'includes/footer.php';
   $page = 'home';
?>  