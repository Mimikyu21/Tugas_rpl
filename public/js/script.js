$(document).ready(function () {

  $(".filter-button").click(function() {
      var value = $(this).attr('data-filter');

      if(value == "all")
      {
          $('.filter').show('1000');
      }
      else
      {
          $(".filter").not('.'+value).hide('3000');
          $(".filter").filter('.'+value).show('3000');
      }
  });
    
      if ($(".filter-button").removeClass("active")) {
          $(this).removeClass("active");
      }
      $(this).addClass("active");
});

const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
        console.log(entry)
        if (entry.isIntersecting) {
            entry.target.classList.add('show');
        } else {
            entry.target.classList.remove('show');
        }
    });
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

(function($) {

    "use strict";

    var fullHeight = function() {

        $('.js-fullheight').css('height', $(window).height());
        $(window).resize(function(){
            $('.js-fullheight').css('height', $(window).height());
        });

    };
    fullHeight();

    $(".toggle-password").click(function() {

      $(this).toggleClass("fa-eye fa-eye-slash");
      var input = $($(this).attr("toggle"));
      if (input.attr("type") == "password") {
        input.attr("type", "text");
      } else {
        input.attr("type", "password");
      }
    });

})(jQuery);

document.addEventListener('DOMContentLoaded', function () {
    // Get the main image element
    const mainImg = document.querySelector('.main-img');

    // Get all small images
    const smallImgs = document.querySelectorAll('.small-img');

    // Add click event listener to each small image
    smallImgs.forEach(img => {
        img.addEventListener('click', function () {
            // Change the src of the main image to the src of the clicked small image
            mainImg.src = this.getAttribute('data-src');
        });
    });
});