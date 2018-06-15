$(document).ready(function() {
    //Nav Sticky
    $('.who-section').waypoint(function(direction) {
        if (direction == "down") {
            $('nav').removeClass('regular-nav');
            $('nav').addClass('fixed-nav');
        } else {
          $('nav').removeClass('fixed-nav');
          $('nav').addClass('regular-nav');
        }
    }, {
      offset: '15%;'
    });

	$(".js-goto-who").click(function() {
    $('html, body').animate({
        scrollTop: $(".who-section").offset().top - $(window).height() * 0.1
    }, 1000);
	});


	//Contact

	$(".js-goto-contact").click(function() {
    $('html, body').animate({
        scrollTop: $(".contact-section").offset().top - $(window).height() * 0.1
    }, 1000);
	});


	//HOME
	$(".js-goto-home").click(function() {
    $('html, body').animate({
        scrollTop: $(".home-section").offset().top
    }, 1000);
	});

	//LOGIN

  $(".js-goto-login").click(function() {
  $('html, body').animate({
      scrollTop: $(".login-section").offset().top - $(window).height() * 0.1
  }, 1000);
  });
  $(".js-goto-login-2").click(function() {
  $('html, body').animate({
      scrollTop: $(".login-section").offset().top - $(window).height() * 0.1
  }, 1000);
  });
  $(".js-goto-login-3").click(function() {
  $('html, body').animate({
      scrollTop: $(".login-section").offset().top - $(window).height() * 0.1
  }, 1000);
  });

  //Sign Up
  $(".js-goto-signup").click(function() {
  $('html, body').animate({
      scrollTop: $(".signup-section").offset().top - $(window).height() * 0.1
  }, 1000);
  });

  $(".js-goto-signup-2").click(function() {
  $('html, body').animate({
      scrollTop: $(".signup-section").offset().top - $(window).height() * 0.1
  }, 1000);
  });

  $(".js-goto-signup-3").click(function() {
  $('html, body').animate({
      scrollTop: $(".signup-section").offset().top - $(window).height() * 0.1
  }, 1000);
  });

  // FORMS ICHECK

  $('input').iCheck({
    checkboxClass: 'icheckbox_square-orange',
    radioClass: 'iradio_square-orange',
    increaseArea: '20%'
  });

  $('.menu-button').click(function() {
      var nav = $('.js-main-nav');
      var menuButton = $('.menu-button');
      var menuImg = $('#menu-img');

      nav.slideToggle(300);

      if (menuButton.hasClass('js-open-nav')) {
          menuButton.addClass('js-close-nav');
          menuButton.removeClass('js-open-nav');
          nav.addClass("menu-enabled");
          menuImg.attr('src', 'resources/img/icons/orange-icons/close-nav.png');
      } else {
          menuButton.addClass('js-open-nav');
          menuButton.removeClass('js-close-nav');
          nav.addClass("menu-disabled");
          menuImg.attr('src', 'resources/img/icons/orange-icons/open-nav.png');
      }
  });

});
