<!--footer start-->
   <footer>
   
   <div class="main-footer">
     <div class="container">
        <div class="row">
          <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4 col-xxl-4">
            <div class="first-footer">
              <h3><a href="">Locals and Rentals</a></h3>
              <p>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,.</p>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4 col-xxl-4">
            <div class="footer-two">
              <h4>Contact Us</h4>
              <ul>  
                  <li><a href=" "><i class="fas fa-map-marker-alt"></i> 1013 Galleria Blvd Ste 220, Roseville.CA, 95678</a></li>
                  <li><a href=" "><i class="fas fa-mobile-alt"></i> Phone: 5306350283</a></li>
                  <li><a href=" "><i class="far fa-envelope"></i> Email : cameron@realtywithripley.com</a></li>

              </ul>
            </div>
          </div>
          <div class="col-4 col-md-4 col-sm-4 col-xl-4 col-lg-4 col-xxl-4">
            <div class="footer-three">
              <h4>Subscribe our news letter</h4>
              <form class="d-flex">  
                  <input type="Email" name="Email" placeholder="Your email address">
                  <button>Sign up</button>
              </form>
            </div>
          </div>          
        </div>
      </div>
   </div>          
    <div class="bottom-footer">
      <div class="container">
        <div class="row">
          <div class="col-12 col-md-12 col-sm-12 col-lg-12 col-xl-12 col-xxl-12">
            <p>© 2021 <a href="">Locals and Rentals.</a>All rights reserved</p>
          </div>
        </div>
      </div>
    </div>
 </footer>
<!--footer close-->
<a href="#top" class="scrollup" style=""><i class="fal fa-chevron-up"></i></a>
      <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
      <script src="js/bootstrap.js"></script>
       <script type="text/javascript" src="js/jquery-ui.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="js/wow.min.js">  </script>
      <script type="text/javascript" src="slick/slick.min.js"></script> 
      <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script> 

      <script type="text/javascript">
         new WOW().init();
      </script>
       <script type="text/javascript">
  $(document).ready(function(){
  $("#menu1").click(function(){
     $("#twocolum").css("width", "50%");
      $("#twocolum1").css("width", "50%");
      $("#twocolum2").css("width", "50%");
      $("#twocolum3").css("width", "50%");
      $("#twocolum4").css("width", "50%");
      $("#twocolum5").css("width", "50%");
      $("#twocolum6").css("width", "50%");
      $("#twocolum7").css("width", "50%");

      $(".producthideslideup").css("top", "86%");

  });
});

// on click 4 col query
$(document).ready(function(){
  $("#menu3").click(function(){
     $("#twocolum").css("width", "25%");
      $("#twocolum1").css("width", "25%");75%
      $("#twocolum2").css("width", "25%");
      $("#twocolum3").css("width", "25%");
      $("#twocolum4").css("width", "25%");
      $("#twocolum5").css("width", "25%");
      $("#twocolum6").css("width", "25%");
      $("#twocolum7").css("width", "25%");
      $(".producthideslideup").css("top", "75%");
  });
});

// on 3 col query

$(document).ready(function(){
  $("#menu2").click(function(){
     $("#twocolum").css("width", "33%");
      $("#twocolum1").css("width", "33%");
      $("#twocolum2").css("width", "33%");
      $("#twocolum3").css("width", "33%");
      $("#twocolum4").css("width", "33%");
      $("#twocolum5").css("width", "33%");
      $("#twocolum6").css("width", "33%");
      $("#twocolum7").css("width", "33%");
       $(".producthideslideup").css("top", "81%");

  });
});

$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

     //>=, not <=
    if (scroll >= 75) {
        debugger
        $(".navbar").removeClass("headerNav");
        $(".classHeader").addClass("darkHeader");
    }
    else{
        $(".navbar").addClass("headerNav");
        $(".classHeader").removeClass("darkHeader");
    }
}); //missing );
 </script>

   </body>
</html>