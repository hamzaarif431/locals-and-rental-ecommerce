<!DOCTYPE html>
<html>
   <head>
      <title> Home  </title>
      <meta charset="UTF-8">
      <meta name="description" content="Free Web tutorials">
      <meta name="keywords" content="HTML, CSS, JavaScript">
      <meta name="author" content="John Doe">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
      <link href="css/custom.css" rel="stylesheet" type="text/css">
      <link href="slick/slick-theme.css" rel="stylesheet" type="text/css">
      <link href="css/animate.css" rel="stylesheet" type="text/css">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
      <link rel="icon" href="images/fav-icon.png" type="image/png" sizes="">
      <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
      <link href="https://kit-pro.fontawesome.com/releases/v5.15.3/css/pro.min.css" rel="stylesheet">

   </head>
   <body>
     <section class="top-section-header">
        <div class="container">
           <div class="row">
              <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
                 <div class="top-header-section">
                    <div class="row">
                       <div class="col-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-sm-3">
                          <div class="customize-input">
                             <input type="text" name="Search" placeholder="Search Your Near by"><i class="far fa-search"></i>
                          </div>
                       </div>
                       <div class="col-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6 col-sm-6">
                          <div class="social-links">
                             <ul>
                                <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-pinterest"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                                <li><a href="javascript:;"><i class="fab fa-telegram"></i></a></li>

                             </ul>
                          </div>
                       </div>
                       <div class="col-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3 col-sm-3 p-0">
                          <div class="contact-button">
                             <ul>
                                <li><a href="javascript:;"><i class="far fa-envelope"></i>NEWSLETTER</a></li>
                                 <li><a href="contactus.php">Contact us</a></li>
                                 <li><a href="faq.php">FAQS</a></li>
                             </ul>
                          </div>
                       </div>

                    </div>
                 </div>
              </div>
           </div>
        </div>
     </section>
      <header class="classHeader">
        <nav class="navbar navbar-expand-lg headerNav" >
            <div class="container">
                <a class="navbar-brand" href="index.php"><strong>Locals and Rentals</strong></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto">
                        <li class="nav-item">
                            <a class="nav-link active-a" aria-current="page" href="index.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="aboutus.php">about us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="rent.php">Rent</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="faq.php">Faqs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contactus.php">contact us</a>
                        </li>
                    </ul>
                </div>

                <div class="icon-btn-main">
                  <ul>
                     <li><h3><a href="my-account.php">Login/Register</a></h3></li>
                     <li><a href="#search" class="sidebar-toggle"><i class="far fa-search"></i></a></li>
                        <li>
                           <a href="wishlist-empty.php" class="sidebar-toggle"><i class="fal fa-heart"></i><span class="red-icon">0</span></a>
                        </li>
                        <li> 
                           <button class="sidebar-toggle shopping-toggle"><i class="fal fa-shopping-bag"></i><span class="red-icon">0</span></button>
                    </li>
                    <li><a href="#"><h6>$0.00</h6></a></li>
                  </ul>
                  
                   
                    
                   
                </div>
            </div>
        </nav>

        <!-- shopping cart -->
        <aside class="sidebar">
          <div class="sidebar-header">
            <p class="shopping-cart-txt">shopping cart</p>
            <button class="close-btn"><i class="fas fa-times"></i></button>
          </div>
          <!-- links -->
          <div class="addtocart-shopingcart">
            <div class="card side-shopping-cart">
          <div class="row">
            <div class="col-3 col-sm-3 col-md-3 col-lg-3 col-xl-3 col-xxl-3">
              <img src="images/cart-image.jpg" class="img-fluid" alt="img">
            </div>
            <div class="col-7 col-sm-7 col-md-7 col-lg-7 col-xl-7 col-xxl-7">
              <h3>Camping Gear</h3>
              <ul><li>2</li><li>x</li><li>$16</li></ul>
            </div>
            <div class="col-2 col-sm-2 col-md-2 col-lg-2 col-xl-2 col-xxl-2">
              <div class="crossicon">
                <i class="fal fa-times"></i>
              </div>
            </div> 

</div>
          </div>  
          </div>
          <div class="total-section-cart">
          <hr> 
          <div class="checkout-cart-both-links">
            <div class="row">
            <div class="col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 col-xxl-12">
              <ul><li>Subtotal:</li><li>$32</li></ul>
              <div class="clearfix"></div>
              <div class="cartbutton-shoppingcart">
                <a href="cart.php">View cart</a>
              </div>
              <div class="checkoutbutton-shoppingcart">
                <a href="checkout.php">Checkout</a>
              </div>
            </div>
          </div>
          </div> 
          
          </div>
            
        </aside>



        <!-- User Sign  -->


        <div id="search">
    <button type="button" class="close"> ×</button>
    <form>
        <input type="search" value="" placeholder="Search for Rentals"/>
        <hr> 
        <p>Start typing to see products you are looking for</p>  
    </form>
</div>

    </header>