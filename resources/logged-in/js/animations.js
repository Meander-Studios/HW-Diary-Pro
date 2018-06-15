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

	//LINKS
	$(".js-goto-home").click(function() {
    window.location.assign("/HW-Diary-Pro/logged-in/index.php");
	});
  $(".js-goto-tasks").click(function() {
    window.location.assign("/HW-Diary-Pro/logged-in/tasks/index.php");
	});
  $(".js-goto-projects").click(function() {
    window.location.assign("/HW-Diary-Pro/logged-in/projects/index.php");
	});
  $(".js-goto-calendar").click(function() {
    window.location.assign("/HW-Diary-Pro/logged-in/calendar/index.php");
	});
  $(".js-goto-logout").click(function() {
    window.location.assign("/HW-Diary-Pro/logout.php");
	});
  $(".js-goto-profile").click(function() {
    window.location.assign("/HW-Diary-Pro/logged-in/profile/index.php");
	});
  $(".js-goto-settings").click(function() {
    window.location.assign("/HW-Diary-Pro/logged-in/settings/index.php");
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
