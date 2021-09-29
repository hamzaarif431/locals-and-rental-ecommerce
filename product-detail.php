<?php
    include 'includes/header.php';
    $page = 'home';
?>
<section class="product__details">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="left_side">
                    <img src="images/cart-image.jpg" alt="" class="img-fluid">
                    <div class="left_side_ico">
                        <div class="grow" style="background-color: #fff;">
                            <i class="fal fa-expand-arrows"></i>
                            <a href="images/cart-image.jpg" target="_cart">
                                <p>
                                    Click to enlarge
                                </p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                <div class="right_side">
                    <div class="d-flex right_side_bread">
                        <ul>
                            <li><a href="#">Home /</a> </li>
                            <li><a href="#">APPAREL / </a> </li>
                            <li class="active"><a href="#">Camping Gear</a> </li>
                        </ul>
                    </div>
                    <div class="acc_text">
                        <h3> Camping Gear </h3>
                        <h4> $10.00 Unit Price</h4>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Pricing Info
                                    </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>
                                            Day based pricing : Rental
                                        </strong>
                                        <p>
                                            <span>
                                                $10.00

                                            </span>
                                            / days
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                            <div class="dropdown-with-search">
                                <h2>Pickup Location</h2>
                                <div class="dropdown">
  <button onclick="myFunctionsdrop()" class="dropbtn">Pickup Location<i class="fas fa-caret-down"></i></button>
  <div id="myDropdown" class="dropdown-content">
    <input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
    <a href="#about">Albama</a>
    <a href="#base">Florida</a>
    <a href="#blog">texas</a>
    <a href="#contact">Lasvegas</a>
  </div>
</div>

                            </div>
                        </div>                        

                    </div>
                    <div class="right_form">
                        <form>
                            <div class="row">
                                <h6>Pickup Date & Time</h6>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker1">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                            <input type="date" class="form-control" placeholder="PickDate" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker1">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Pickup Time" />

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-4">
                                <h6>Dropoff Date & Time</h6>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker1">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                            <input type="date" class="form-control" placeholder="PickDate" />

                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                                    <div class="form-group">
                                        <div class="input-group date" id="datetimepicker1">
                                            <span class="input-group-addon">
                                                <span class="glyphicon glyphicon-calendar"></span>
                                            </span>
                                            <input type="text" class="form-control" placeholder="Drop-off Time" />

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="row mt-4">
                                <h6>Adults</h6>
                                <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Choose Adult</option>
                                        <option value="1">
                                            <span>
                                                jenifer :
                                            </span>
                                        </option>
                                        <option value="2">john :</option>
                                    </select>

                                </div>


                            </div>

                        </form>
                    </div>

                   
                    


                    <div class="d-grid gap-2 check_btn mt-4">
                        <button class="btn btn-primary" type="button">Book Now</button>
                    </div>

                    <div class="right_social_icon mt-4">
                        <ul class="d-flex">
                            <li><i class="fal fa-random"></i><a href="#">Compare</a></li>
                            <li><i class="fal fa-heart"></i><a href="#">Add to wishlist</a></li>

                        </ul>
                        <hr>
                        <ul class="right_share">
                            <li><a href="#">Category: APPAREL</a></li>
                            <li class="d-flex mt-2"><a href="#">Share</a>
                                <ul class="d-flex">
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin"></i></a></li>
                                    <li><a href="#"><i class="fab fa-telegram"></i></a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>





                </div>
            </div>
        </div>

    </div>
    <br>
    <hr>
    <section class="product--tab">
        <div class="container mt-5">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">ATTRIBUTES</button>
                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                        type="button" role="tab" aria-controls="nav-profile" aria-selected="false">FEATURES</button>
                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                        type="button" role="tab" aria-controls="nav-contact" aria-selected="false"> REVIEWS (0)</button>

                    <button class="nav-link" id="nav-contact-tab1" data-bs-toggle="tab" data-bs-target="#nav-contact1"
                        type="button" role="tab" aria-controls="nav-contact1" aria-selected="false">SHIPPING &
                        DELIVERY</button>


                    <button class="nav-link" id="nav-contact-tab2" data-bs-toggle="tab" data-bs-target="#nav-contact2"
                        type="button" role="tab" aria-controls="nav-contact2" aria-selected="false">
                        VENDOR INFO</button>


                    <button class="nav-link" id="nav-contact-tab3" data-bs-toggle="tab" data-bs-target="#nav-contact3"
                        type="button" role="tab" aria-controls="nav-contact3" aria-selected="false">
                        MORE PRODUCTS</button>



                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="tab--1-c">
                        <ul class="d-flex">
                            <li>Drill rod caliber : 3 :</li>
                            <li>No-Load Speed : 6 :</li>
                            <li>Power Type : 6 :</li>
                        </ul>
                        <ul class="d-flex tab--ul--attri">
                            <li>Weight : 6 :</li>
                            <li>Weight Type-2 : 1 :</li>
                        </ul>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="tab--1-c">
                        <ul class="d-flex">
                            <li>Boring direction: vertical down</li>
                            <li>Drill type: Human-made thin drilling bit</li>
                            <li>Gloves</li>
                        </ul>
                        <ul class="d-flex tab--ul--attri">
                            <li>Promotional Price</li>
                            <!-- <li>Weight Type-2 : 1 :</li> -->
                        </ul>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">








                    <div class="tab--2-c">
                        <div class="row">
                            <div class="col-sm-4 col-md-4 col-lg-4 col-xxl-4">
                                <div class="tab--2--t">
                                    <h1>REVIEWS <br>
                                        There are no reviews yet.</h1>
                                </div>
                            </div>
                            <div class="col-sm-2 col-md-2 col-lg-2 col-xxl-2">
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                                <div class="tab--form">
                                    <h3>BE THE FIRST TO REVIEW “DINASOUR SHORTS”</h3>
                                    <h4>Your email address will not be published. Required fields are marked
                                        <span>*</span>
                                    </h4>
                                    <ul>
                                        <li>Your rating <span>*</span> :</li>
                                        <li><i class="fal fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                        <li><i class="fal fa-star"></i></li>
                                    </ul>
                                    <form>
                                        <h5>Your review <span>*</span></h5>
                                        <textarea name="" id="" cols="80" rows="5"></textarea>
                                        <div class="tab--form--input">
                                            <label>Name <span>*</span> </label>
                                            <input type="text">
                                            <label>Email <span>*</span> </label>
                                            <input type="text">
                                            <label>
                                                <input type="checkbox">
                                                Save my name, email, and website in this browser for the next time I
                                                comment.
                                            </label>
                                            <br>
                                            <button>Submit</button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>



                </div>

                <div class="tab-pane fade" id="nav-contact1" role="tabpanel" aria-labelledby="nav-contact-tab1">
                    <div class="tab--c--4">
                        <div class="row">
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                                <div class="row">
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                                        <img src="images/tab-1.jpg" class="img-fluid">

                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                                        <img src="images/tab-1.jpg" class="img-fluid">
                                    </div>



                                </div>
                            </div>
                            <div class="col-sm-6 col-md-6 col-lg-6 col-xxl-6">
                                <div class="tab--c--text">
                                    <h1>MAECENAS IACULIS</h1>
                                    <p>
                                        Vestibulum curae torquent diam diam commodo parturient penatibus nunc dui
                                        adipiscing convallis bulum parturient suspendisse parturient a.Parturient in
                                        parturient scelerisque nibh lectus quam a natoque adipiscing a vestibulum
                                        hendrerit et pharetra fames nunc natoque dui.
                                    </p>

                                    <h1>ADIPISCING CONVALLIS BULUM</h1>
                                    <ul class="tab--4--ul">
                                        <li><i class="fa fa-angle-right"></i> Vestibulum penatibus nunc dui adipiscing
                                            convallis bulum parturient suspendisse.</li>
                                        <li><i class="fa fa-angle-right"></i> Vestibulum penatibus nunc dui adipiscing
                                            convallis bulum parturient suspendisse.</li>
                                        <li><i class="fa fa-angle-right"></i> Vestibulum penatibus nunc dui adipiscing
                                            convallis bulum parturient suspendisse.</li>
                                    </ul>
                                    <p>
                                        Scelerisque adipiscing bibendum sem vestibulum et in a a a purus lectus faucibus
                                        lobortis tincidunt purus lectus nisl class eros.Condimentum a et ullamcorper
                                        dictumst mus et tristique elementum nam inceptos hac parturient scelerisque
                                        vestibulum amet elit ut volutpat.
                                    </p>


                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-contact2" role="tabpanel" aria-labelledby="nav-contact-tab2">
                    <div class="tab--c--4">
                        <h2>Vendor INFROMATION</h2>
                        <h4>Vendor: admin</h4>
                        <h6>No ratings found yet!</h6>
                    </div>
                </div>

                <div class="tab-pane fade" id="nav-contact3" role="tabpanel" aria-labelledby="nav-contact-tab3">
                    <div class="tab--c--5">
                        <div class="product-detail-cart-product">
                            <div class="row">
                <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3"  id="twocolum">
                  <div class="productbox">
                    <img src="images/product1.jpg" class="img-fluid" alt="img">
                    <div class="producthideslideup">
                      <div class="tooltip2"><i class="far fa-random"></i>
                        <span class="tooltiptext2">Compare</span>
                      </div>

                      <div class="clearfix"></div>
                      <hr>
                    </div>
                    <div class="positionsetting">

                      <h3><a href="#">Bicycles</a></h3>
                      <h5>$16.00</h5>
                      <div class="producthidesection">

                        <ul>
                          <li>
                            <div class="tooltip5"><i class="far fa-heart"></i>
                             <span class="tooltiptext5">Add to wishlist</span>
                           </div>

                         </li>
                         <li>
                          <div class="tooltip6"><i class="fal fa-cart-plus"></i>
                            <span class="tooltiptext6">Add to cart</span>
                          </div>
                        </li>
                        <li>
                          <div class="tooltip4"><i class="fal fa-search"></i>
                            <span class="tooltiptext4">Quick view</span>
                          </div>
                        </li> 
                      </ul>
                    </div>
                  </div>
                  
                  

                </div>
              </div>
              <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3" id="twocolum1">
                <div class="productbox">
                  <img src="images/product2.jpg" class="img-fluid" alt="img">
                  <div class="producthideslideup">
                    <div class="tooltip2"><i class="far fa-random"></i>
                      <span class="tooltiptext2">Compare</span>
                    </div>
                    
                    <div class="clearfix"></div>
                    <hr>
                  </div>
                  <div class="positionsetting">

                    <h3><a href="#">Camping Gear</a></h3>
                    <h5>$16.00</h5>
                    <div class="producthidesection">


                      <ul>
                        <li>
                          <div class="tooltip5"><i class="far fa-heart"></i>
                           <span class="tooltiptext5">Add to wishlist</span>
                         </div>

                       </li>
                       <li>
                        <div class="tooltip6"><i class="fal fa-cart-plus"></i>
                          <span class="tooltiptext6">Add to cart</span>
                        </div>
                      </li>
                      <li>
                        <div class="tooltip4"><i class="fal fa-search"></i>
                          <span class="tooltiptext4">Quick view</span>
                        </div>
                      </li> 
                    </ul>
                  </div>
                </div>


                
              </div>
            </div>
            <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3" id="twocolum2">
              <div class="productbox">
                <img src="images/product3.jpg" class="img-fluid" alt="img">
                <div class="producthideslideup">
                  <div class="tooltip2"><i class="far fa-random"></i>
                    <span class="tooltiptext2">Compare</span>
                  </div>

                  <div class="clearfix"></div>
                  <hr>
                </div>
                <div class="positionsetting">

                  <h3><a href="#">Fanatic – 10’6″ </a></h3>
                  <h5>$16.00</h5>
                  <div class="producthidesection">


                    <ul>
                      <li>
                        <div class="tooltip5"><i class="far fa-heart"></i>
                         <span class="tooltiptext5">Add to wishlist</span>
                       </div>

                     </li>
                     <li>
                      <div class="tooltip6"><i class="fal fa-cart-plus"></i>
                        <span class="tooltiptext6">Add to cart</span>
                      </div>
                    </li>
                    <li>
                      <div class="tooltip4"><i class="fal fa-search"></i>
                        <span class="tooltiptext4">Quick view</span>
                      </div>
                    </li> 
                  </ul>
                </div>
              </div>



            </div>
          </div>
          <div class="col-6 col-sm-6 col-md-6 col-lg-3 col-xl-3 col-xxl-3" id="twocolum2">
              <div class="productbox">
                <img src="images/product4.jpg" class="img-fluid" alt="img">
                <div class="producthideslideup">
                  <div class="tooltip2"><i class="far fa-random"></i>
                    <span class="tooltiptext2">Compare</span>
                  </div>

                  <div class="clearfix"></div>
                  <hr>
                </div>
                <div class="positionsetting">

                  <h3><a href="#">Fanatic – 10’6″ </a></h3>
                  <h5>$16.00</h5>
                  <div class="producthidesection">


                    <ul>
                      <li>
                        <div class="tooltip5"><i class="far fa-heart"></i>
                         <span class="tooltiptext5">Add to wishlist</span>
                       </div>

                     </li>
                     <li>
                      <div class="tooltip6"><i class="fal fa-cart-plus"></i>
                        <span class="tooltiptext6">Add to cart</span>
                      </div>
                    </li>
                    <li>
                      <div class="tooltip4"><i class="fal fa-search"></i>
                        <span class="tooltiptext4">Quick view</span>
                      </div>
                    </li> 
                  </ul>
                </div>
              </div>



            </div>
          </div>
         </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </div>
        </div>
    </section>

    <section class="releated__product">
        <hr>
        <div class="container">
            <div class="releated__product_h">
                <h4>RELATED PRODUCTS</h4>
            </div>
            <section class="our-products">
                <div class="sec-featured">
                    <div class="row">
                        <div class="col-12 col-md-3 col-sm-12 col-lg-3 col-xl-3 col-xxl-3  ">
                            <div class="card f-card">
                                <div class="f-img">
                                    <a href="product.php" class="f-a">
                                        <img src="images/skis.jpg" class="f-thumb img-fluid" alt="img">
                                    </a>
                                    <div class="right-icons">
                                        <ul class="icons-ul">
                                            <li class="icon-li"><a class="icon-a" href="#"><i
                                                        class="far fa-random"></i></a>
                                            </li>
                                            <li class="icon-li"><a class="icon-a" href="#"><i
                                                        class="far fa-search"></i></a>
                                            </li>
                                            <li class="icon-li"><a class="icon-a" href="#"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="f-desc">
                                    <div class="compare_ico">
                                        <i class="fa fa-random " title="compare" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom"></i>

                                    </div>
                                    <a href="product.php" class="f-name">Skis</a>
                                    <span class="f-price">$15.00 Unit Price</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-sm-12 col-lg-3 col-xl-3 col-xxl-3 ">
                            <div class="card f-card">
                                <div class="f-img">
                                    <a href="product.php" class="f-a">
                                        <img src="images/cart-image.jpg" class="f-thumb img-fluid" alt="img">
                                    </a>
                                    <div class="right-icons">
                                        <ul class="icons-ul">
                                            <li class="icon-li"><a class="icon-a" href="#"><i
                                                        class="far fa-random"></i></a>
                                            </li>
                                            <li class="icon-li"><a class="icon-a" href="#"><i
                                                        class="far fa-search"></i></a>
                                            </li>
                                            <li class="icon-li"><a class="icon-a" href="#"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="f-desc">
                                    <div class="compare_ico">
                                        <i class="fa fa-random " title="compare" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom"></i>

                                    </div>
                                    <a href="product.php" class="f-name">Skis</a>
                                    <span class="f-price">$15.00 Unit Price</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-sm-12 col-lg-3 col-xl-3 col-xxl-3 ">
                            <div class="card f-card">
                                <div class="f-img">
                                    <a href="product.php" class="f-a">
                                        <img src="images/cart-2.jpg" class="f-thumb img-fluid" alt="img">
                                    </a>
                                    <div class="right-icons">
                                        <ul class="icons-ul">
                                            <li class="icon-li"><a class="icon-a" href="#"><i
                                                        class="far fa-random"></i></a>
                                            </li>
                                            <li class="icon-li"><a class="icon-a" href="#"><i
                                                        class="far fa-search"></i></a>
                                            </li>
                                            <li class="icon-li"><a class="icon-a" href="#"><i
                                                        class="far fa-heart"></i></a></li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="f-desc">
                                    <div class="compare_ico">
                                        <i class="fa fa-random " title="compare" data-bs-toggle="tooltip"
                                            data-bs-placement="bottom"></i>

                                    </div>
                                    <a href="product.php" class="f-name">Skis</a>
                                    <span class="f-price">$15.00 Unit Price</span>
                                </div>

                            </div>
                        </div>
                        <div class="col-12 col-md-3 col-sm-12 col-lg-3 col-xl-3 col-xxl-3">

                        </div>

                    </div>

                </div>
            </section>
        </div>

    </section>

</section>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    debugger

    $(document).ready(function(){
        debugger
    $(".classHeader").addClass("headerNavProductDetail");
});
</script>
<script>
    debugger

    $(document).ready(function(){
        debugger
    $(".navbar-expand-lg").addClass("headertopbar");
});
</script>

<?php
    include 'includes/footer.php';
    $page = 'home';
?>