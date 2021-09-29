<?php
    include 'includes/header.php';
    $page = 'home';
?>  

   <section class="bannerSection">
      <div class="mainHeadingBanner">
         <h1>my account</h1>
         <div class="breadcrumbBanner">
            <ul class="breadcrumbBannerUl">
               <li><a href="index.html">Home</a></li>
               <li>/</li>
               <li><a href="about.html">my account</a></li>
            </ul>
         </div>
      </div>
   </section>

   <section class="my-account">
     <div class="container">
       <div class="row">
         <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6 border-right-account">
           <div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
    <div class="login-tabs">
      <h3>Login</h3>
      <form>
        <div class="customize-input">
          <label>Username or email <span>*</span></label>
          <input type="Email" name="Email">
        </div>
         <div class="customize-input">
          <label>Password<span>*</span></label>
          <input type="Password" name="Password">
        </div>
        <button>Log in</button>
        <div class="inline-login-remember-forget">
          <div class="row">
          <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="custom-input">
              <input type="checkbox" name="checkbox"><label>Remember me</label>
            </div>
          </div>
          <div class="col-6 col-md-6 col-sm-6 col-lg-6 col-xl-6 col-xxl-6">
            <div class="forget-password-link">
              <a href="">Lost your password?</a>
            </div>
          </div>

        </div>
        </div>
      </form>
    </div>
  </div>
  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
    <div class="register-tabs-content">
      <h3>Register</h3>
      <form>
      <div class="customize-input">
          <label>Email address <span>*</span></label>
          <input type="Email" name="Email">
        </div>
    <p>A password will be sent to your email address.</p>
    <div id="text">
              <div class="customize-input">
          <label>First Name <span>*</span></label>
          <input type="name" name="name">
        </div>
         <div class="customize-input">
          <label>Last Name<span>*</span></label>
          <input type="name" name="name">
        </div>
         <div class="customize-input">
          <label>Phone<span>*</span></label>
          <input type="name" name="name">
        </div>
            </div>
      <div class="custom-input">
              <input type="radio" name="radio"><label>I am a customer</label>
            </div>
            <div class="custom-input">
              <input type="radio" name="radio"  id="myCheck" onclick="myFunction()"><label>I am a vendor</label>
            </div>
            

            <p class="next-paragraph">Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our <a href=""> privacy policy.</a> </p>
            <button>register</button>
            </form>
  </div>
</div>
    </div>

         </div>
         <div class="col-12 col-md-12 col-lg-6 col-xl-6 col-xxl-6">
          <div class="my-account-tabs">
            <h3>REGISTER</h3>
            <p>Registering for this site allows you to access your order status and history. Just fill in the fields below, and we'll get a new account set up for you in no time. We will only ask you for information necessary to make the purchase process faster and easier.</p>
              <ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Login</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Register</button>
  </li>
</ul>
          </div>
         

         </div>
       </div>
     </div>
   </section>
     <?php
   include 'includes/footer.php';
   $page = 'home';
?>  