(function ($) {
  "user strict";

  $(document).ready(function() {
      // preloader
    $("#preloader").delay(300).animate({
      "opacity" : "0"
    }, 500, function() {
      $("#preloader").css("display","none");
    });
    // nice-select
    $('select').niceSelect();
  });

  // header-scroll
  var fixed_top_three = $(".header");
  $(window).on('scroll', function () {
    if ($(this).scrollTop() < 500) {
      fixed_top_three.removeClass("active");
    } else {
      fixed_top_three.addClass("active");
    }
  });

  // navbar-click
  $(".navbar li a").on("click", function () {
    var element = $(this).parent("li");
    if (element.hasClass("show")) {
      element.removeClass("show");
      element.find("li").removeClass("show");
    }
    else {
      element.addClass("show");
      element.siblings("li").removeClass("show");
      element.siblings("li").find("li").removeClass("show");
    }
  });

  // popup js
  $('.popup-youtube').magnificPopup({
    type: 'video'
  });
  $('.image-popup').magnificPopup({
    type: 'image'
  });

  // scroll-to-top
  var ScrollTop = $(".scrollToTop");
  $(window).on('scroll', function () {
    if ($(this).scrollTop() < 500) {
        ScrollTop.removeClass("active");
    } else {
        ScrollTop.addClass("active");
    }
  });

  // slider
  var swiper = new Swiper('.brand-wrapper', {
    slidesPerView: 3,
    loop: true,
    autoplay: {
      speeds: 1000,
      delay: 2000,
    },
    breakpoints: {
      991: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 2,
      },
      575: {
        slidesPerView: 1,
      },
    }
  });

  // slider
  var swiper = new Swiper('.testimonial-wrapper', {
    slidesPerView: 2,
    loop: true,
    autoplay: {
      speeds: 1000,
      delay: 2000,
    },
    breakpoints: {
      991: {
        slidesPerView: 1,
      },
      767: {
        slidesPerView: 1,
      },
      575: {
        slidesPerView: 1,
      },
    }
  });

  // slider
  var swiper = new Swiper('.client-wrapper', {
    slidesPerView: 1,
    loop: true,
    autoplay: {
      speeds: 1000,
      delay: 2000,
    },
    breakpoints: {
      991: {
        slidesPerView: 1,
      },
      767: {
        slidesPerView: 1,
      },
      575: {
        slidesPerView: 1,
      },
    }
  });

  // slider
  var swiper = new Swiper('.price-wrapper', {
    slidesPerView: 3,
    centeredSlides: true,
    loop: true,
    navigation: {
      nextEl: '.ruddra-next',
      prevEl: '.ruddra-prev',
    },
    autoplay: {
      speeds: 1000,
      delay: 4000,
    },
    breakpoints: {
      991: {
        slidesPerView: 2,
      },
      767: {
        slidesPerView: 1,
      },
    }
  });

    //Search
    $('.search-bar, .skip').on('click', function() {
        $('.header-form').toggleClass('active');
      });
      $('.ellipsis-bar').on('click', function() {
        $('.header-top-area').toggleClass('active');
        $('.overlay').addClass('active');
      })

      //Overlay On Click Functions
      $('.overlay').on('click', function () {
        $(this).removeClass('active');
        $('.header-bar').removeClass('active');
        $('.menu').removeClass('active');
        $('.header-top-area').removeClass('active');
      })

      //The Password Show
      $('#show-pass-one').on('click', function() {
        var x = document.getElementById("myInput");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    });

    $('#show-pass-two').on('click', function() {
        var x = document.getElementById("myInputTwo");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    });

    $('#show-pass-three').on('click', function() {
        var x = document.getElementById("myInputThree");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
    });

    //Form Slider
    $('.account-control-button').on('click', function() {
        $('.account-area').toggleClass('change-form');
    })

    // counter
    $('.counter-number').counterUp({
      delay: 10,
      time: 8000,
      offset: 70,
      beginAt: 10,
      formatter: function (n) {
        return n.replace(/,/g, '.');
      }
    });
    

  })(jQuery);
   
        