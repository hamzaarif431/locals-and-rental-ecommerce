
   <?php
   include 'includes/header.php';
   $page = 'home';
?> 
 <section class="sec-checkout-banner">
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
<section class="sec-checkout">
    <div class="container">
        <h6 class="coupon">Have a coupon? <a href="javaavoid:;" class="coupon-a" id="link">Click here to enter your code</a></h6>
        <div class="row">
            <div class="col-5 col-lg-5 col-sm-5 col-md-5 col-xl-5 col-xxl-5">
              <div id="cupon">
            <div class="cupon-card">
                <p>If you have a coupon code, please apply it below.</p>
                <div class="row align-items-center">
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-7 col-xl-7 col-xxl-7 p-0">
                                            <input type="text" name="coupon" placeholder="Coupon code">
                                        </div>
                                        <div class="col-6 col-sm-6 col-md-6 col-lg-5 col-xl-5 col-xxl-5">
                                            <div class="apply-coupon">
                                                <a href="">Apply coupon</a>
                                            </div>
                                        </div>

                                    </div>
            </div>
        </div>  
            </div>
        </div>
        
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <form class="personal-info-main">
                    <h5 class="label-head">BILLING DETAILS</h5>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <label for="" class="per-label">first name<abbr>*</abbr></label>
                            <input type="text" class="form-control personal-info-control" placeholder="">
                        </div>
                        <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                            <label for="" class="per-label">last name<abbr>*</abbr></label>
                            <input type="text" class="form-control personal-info-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <label for="" class="per-label">Company name (optional)</label>
                            <input type="email" class="form-control personal-info-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <label for="" class="per-label">Country / Region<abbr>*</abbr></label>
                            <div class="dropdown">
  <button onclick="myFunctionsdrop()" class="dropbtn">Pickup Location<i class="fas fa-caret-down"></i></button>
  <div id="myDropdown" class="dropdown-content">
    <div class="custom-input">
    <input type="text" placeholder="" id="myInput" onkeyup="filterFunction()"><i class="far fa-search"></i>
            
    </div>
    <a href="#about">Albama</a>
    <a href="#base">Florida</a>
    <a href="#blog">texas</a>
    <a href="#contact">Lasvegas</a>
    <a href="#about">Albama</a>
    <a href="#base">Florida</a>
    <a href="#blog">texas</a>
    <a href="#contact">Lasvegas</a>
  </div>
</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <label for="" class="per-label">Street address<abbr>*</abbr></label>
                            <input type="text" class="form-control personal-info-control" placeholder="House number and street name">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <input type="text" class="form-control personal-info-control" placeholder="Apartment, suite, unit, etc. (optional)">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <label for="" class="per-label">Town / City<abbr>*</abbr></label>
                            <input type="text" class="form-control personal-info-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <label for="" class="per-label">Company name (optional)</label>
                            <input type="email" class="form-control personal-info-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <label for="" class="per-label">Postcode / ZIP<abbr>*</abbr></label>
                            <input type="text" class="form-control personal-info-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <label for="" class="per-label">Phone<abbr>*</abbr></label>
                            <input type="text" class="form-control personal-info-control" placeholder="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <label for="" class="per-label">Email address<abbr>*</abbr></label>
                            <input type="text" class="form-control personal-info-control" placeholder="">
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <h5 class="label-head">Additional information</h5>
                            <label for="" class="per-label">Order notes (optional)</label>
                            <textarea name="" id="" rows="10" class="personal-info-control-area" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                        </div>
                    </div>
                   
                </form>
            </div>

            <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
                <div class="total-main">
                    <h6 class="head-order">your order</h6>
                    <div class="card-bg">
                        <div class="row justify-content-between mb-3">
                            <div class="col-6">
                                <h6 class="service-name">Product</h6>
                            </div>
                            <div class="col-3">
                                <h6 class="service-total">Subtotal</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-between mb-3 d-flex align-items-center">
                            <div class="col-6">
                                <h6 class="service-name2">Dinasour shorts <strong>× 1</strong></h6>
                                <ul>
                                        <li>Vendor</li>
                                        <li>Deposite:
                                            <ul class="deposite">
                                            <li>CWD(<small>$0.00</small>-Per Day)</li><li>Personal Accident Ins. (<small>$0.00</small>  - Per Day ) ,</li></ul> </li>
                                        <li>Adults:Jenifer</li>
                                        <li>Pickup Date &amp; Time: 07/28/2021 at 12:30</li>
                                        <li>Dropoff Date &amp; Time: 07/28/2021 at 13:30</li>
                                        <li>Choose Inventory: Rental</li>
                                        <li>Total Days: 1 Days 0 Hours</li>
                                    </ul>
                            </div>
                            <div class="col-3">
                                <h6 class="service-total2">£229.00</h6>
                            </div>
                        </div>
                        <hr>
                        <div class="row justify-content-between mb-3">
                            <div class="col-6">
                                <h6 class="service-name3">Subtotal</h6>
                            </div>
                            <div class="col-3">
                                <h6 class="service-total3">$229.00</h6>
                            </div>
                        </div>

                        <hr class="price-d">
                        <div class="total-price-main">
                            <div class="row justify-content-between mb-3">
                                <div class="col-6">
                                    <h6 class="total-cost">Total</h6>
                                </div>
                                <div class="col-5">
                                    <h6 class="total-price">$229.00</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-images">
                       <div class="row">
                        <div class="col-4 col-md-4 col-lg-4 col-sm-4 col-xxl-4 col-xl-4">
                            <h3>Credit Card (Stripe)</h3>
                        </div>
                        <div class="col-8 col-md-8 col-lg-8 col-sm-8 col-xxl-8 col-xl-8">
                            <ul>
                              
                            </ul>
                        </div>

                    </div>  
                    </div>
                   
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12 col-xxl-12">
                          <div class="card-bg2">
                            <div class="payment-methods">
                                 <p>Pay with your credit card via Stripe.</p>
                        <div class="custom-input">
                            <label>Card Number <span>*</span></label>
                            <input type="text" name="number" placeholder="1234 1234 1234 1234">
                        </div>
                         <div class="custom-input">
                            <label>Expiry Date<span>*</span></label>
                            <input type="number" name="number" placeholder="MM/YY">
                        </div>
                         <div class="custom-input">
                            <label>Card Code (CVC)<span>*</span></label>
                            <input type="number" name="number" placeholder="CVC">
                        </div>
                            </div>
                       
                    </div>  
                        </div>
                    </div>
                    
                    <hr>
                    <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our <a href="">privacy policy.</a></p>
                    <div class="btn-main">
                        <button type="submit" class="btn order-btn">place order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


   <?php
   include 'includes/footer.php';
   $page = 'home';
?> 