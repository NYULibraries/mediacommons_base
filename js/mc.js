function respond() {
  var w = $(window).width();
  console.log("w " + w);
  if (w < 600) {
    setUpMobileView();
  } else {
    setUpTabletView();
  }
}

function setUpMobileView() {
  $("a.logolink").unbind("click");
  $("a.drop-down").remove();
  $(".navitems2 ul").children().unwrap().unwrap();
  $("a.logolink").click(function(e) {
    $('ul.navitems').toggleClass("open", 100);
    e.preventDefault();
    e.stopPropagation();
  });


  $("a.logolink").blur(function() {
    $('ul.navitems').toggleClass("open", false, 100);
  });

  $(document).click(function(e) {
    e.preventDefault();
    $('ul.navitems').toggleClass("open", false, 100);
  });

}

function shutNavPlanks() {
  $('header[role=banner] form[role=search] fieldset').hide();
}

function setUpTabletView() {
  $("a.logolink").unbind();
  $(document).unbind("click");
  $("a.drop-down").remove();
  $(".navitems2 ul").children().unwrap().unwrap();

  var widthSum = 0;
  var spaceWidth = ($("nav.global").width() - $("a.logolink").width() - $("ul.utils").width()) - 125;
  $("ul.navitems li").each(function(index) {
    widthSum += $(this).width();
    if (widthSum > spaceWidth) {
      $(this).nextAll('li').addBack().wrapAll("<li class='navitems2 ' role='menuitem'><ul></ul><li>");
      $('.navitems2').prepend('<a class="drop-down" href="#">More</a>');
      $("a.drop-down").click(function() {
        $('.navitems2 ul').toggleClass("open", 100);
        $('.navitems2').toggleClass("open", 100);
        $('.navitems').toggleClass("open", 100);
        $(this).toggleClass("open");
      });
      return false;
    }
  });
}
$(function() {
  respond();
  $(window).resize(_.debounce(function() {
    respond();
  }, 100));
  $('header[role=banner] form[role=search] label').click(function() {
    if ($(this).parent('form').hasClass("open")) {
      // $(this).parent('form').find('fieldset').attr('aria-hidden', 'true');
      //$(this).parent('form').toggleClass("open", 400);
      $(this).parent('form').removeClass("open");
      $(this).parent('form').find('fieldset').slideUp(100);
      //$(this).parent('form').find('fieldset').toggleClass("open", 100);
    } else {
      // $(this).parent('form').find('fieldset').attr('aria-hidden', 'false');
      //$(this).parent('form').toggleClass("open", 400);
      $(this).parent('form').find('fieldset').slideDown(100);
      $(this).parent('form').addClass("open");
    }
  });
  $('.utils a.login-link').click(function() {
    // $('.utils ul[role="menu"]').show(1000).attr('aria-hidden', 'false');
    // $('.utils ul[role="menu"]').attr('aria-hidden', 'false');
    if ($(this).hasClass("open")) {
      $('.utils ul[aria-hidden="false"]').attr('aria-hidden', 'true');
      $(this).removeClass("open");
    } else {
      $('.utils ul[aria-hidden="true"]').attr('aria-hidden', 'false');
      $(this).addClass("open");
    }
  });
  $("header[role=banner] button").click(function() {
    //shutNavPlanks();
    if ($('nav.main').hasClass("open")) {
      console.log ('case 1');
      $('nav.main').removeClass("open");
      $('nav.main ul').slideUp(100);
    } else {
      console.log ('case 2');
      $('nav.main ul').slideDown(100);
      $('nav.main').addClass("open");
    }
    ///
  });
});