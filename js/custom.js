 
// navbar toggle search

$(function () {
    $('a[href="#search"]').on('click', function(event) {
        event.preventDefault();
        $('#search').addClass('open');
        $('#search > form > input[type="search"]').focus();
    });
    
    $('#search, #search button.close').on('click keyup', function(event) {
        if (event.target == this || event.target.className == 'close' || event.keyCode == 27) {
            $(this).removeClass('open');
        }
    });
    
    
    //Do not include! This prevents the form from submitting for DEMO purposes only!
    $('form').submit(function(event) {
        event.preventDefault();
        return false;
    })
});

// navbar toggle shopping cart

const toggleBtn = document.querySelector(".shopping-toggle");

const sidebar = document.querySelector(".sidebar");

const closeBtn = document.querySelector(".close-btn");

toggleBtn.addEventListener("click", function () {
  sidebar.classList.toggle("show-sidebar");
});

closeBtn.addEventListener("click", function () {
  sidebar.classList.remove("show-sidebar");
});



// price range slider

$("#slider-range").slider({
  range: true, 
  min: 0,
  max: 3500,
  step: 50,
  slide: function( event, ui ) {
    $( "#min-price").html(ui.values[ 0 ]);
    
    suffix = '';
    if (ui.values[ 1 ] == $( "#max-price").data('max') ){
       suffix = ' +';
    }
    $( "#max-price").html(ui.values[ 1 ] + suffix);         
  }
});




// on click 2 col query
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
      $("#twocolum1").css("width", "25%");
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


// scrooll up 
$(window).on("scroll", function () {
  if ($(this).scrollTop() > 600) {
    $(".scrollup").fadeIn(600);
  } else {
    $(".scrollup").fadeOut(600);
  }
});

 

 

 


$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});



function myFunctionsdrop() {
  document.getElementById("myDropdown").classList.toggle("show");
}

function filterFunction() {
  var input, filter, ul, li, a, i;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  div = document.getElementById("myDropdown");
  a = div.getElementsByTagName("a");
  for (i = 0; i < a.length; i++) {
    txtValue = a[i].textContent || a[i].innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      a[i].style.display = "";
    } else {
      a[i].style.display = "none";
    }
  }
}


/*24. CHECKBOX CHECK THEN ADD CLASS JS
    *===================================*/

    function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
     $('#text').slideDown();
        } else {
            $('#text').slideUp();
        }
}
$(document).ready(function(){
  $("#link").click(function(){
    $("#cupon").slideToggle("slow");
  });
});