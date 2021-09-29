

// price range slider

$("#slider-range").slider({
    range: true, 
    min: 0,
    max: 30,
    step: 1,
    slide: function( event, ui ) {
      $( "#min-price").html(ui.values[ 0 ]);
      
      suffix = '';
      if (ui.values[ 1 ] == $( "#max-price").data('max') ){
         suffix = ' ';
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