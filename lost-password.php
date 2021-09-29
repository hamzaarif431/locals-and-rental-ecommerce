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
   <section class="lost-password">
     <div class="container">
       <div class="row justify-content-center">
         <div class="col-12 col-md-12 col-sm-12 col-lg-4 col-xl-4 col-xxl-4">
           <div class="lost-password-content">
             <p>Lost your password? Please enter your username or email address. You will receive a link to create a new password via email.</p>
             <hr>
             <form>
               <div class="customize-input">
          <label>Username or email </label>
          <input type="Email" name="Email">
        </div>
        <button>reset password</button>
             </form>
           </div>
         </div>
       </div>
     </div>
   </section>
 <?php
   include 'includes/footer.php';
   $page = 'home';
?>  