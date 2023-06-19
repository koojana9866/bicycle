$(document).ready(function() {
    $("#AboutUsbut").click(function() {
      $('html, body').animate({
        scrollTop: $("#aboutus").offset().top
      }, 1000); // Adjust the animation duration (in milliseconds) as needed
    });
  });
  
  