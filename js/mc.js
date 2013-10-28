function respond() {
  var w = $(window).width();
  console.log("w " + w);
  // remove inline display styles set by jquery.
  //.removeAttr("style")
  // $("header[role=banner] *").css('display', '');
  $("header[role=banner] *").removeAttr("style");
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

function siteHeaderBehavior() {
  // SEARCH
  $('header[role=banner] form[role=search] label').click(function() {
    $theSearchButton = $(this);
    if ($($theSearchButton).parent('form').hasClass("open")) {
      // $(this).parent('form').find('fieldset').attr('aria-hidden', 'true');
      //$(this).parent('form').toggleClass("open", 400);
      $(this).parent('form').removeClass("open");
      $($theSearchButton).parent('form').find('fieldset').slideUp(300,
        function() {
          $(this).parent('form').removeClass("open");
        });
      //$(this).parent('form').find('fieldset').toggleClass("open", 100);
    } else {
      // $(this).parent('form').find('fieldset').attr('aria-hidden', 'false');
      //$(this).parent('form').toggleClass("open", 400);
      $('nav.main ul').slideUp(300, function() {
        $('header[role=banner] button').removeClass("open");
        $('header[role=banner] form[role=search] fieldset').slideDown(300,
          function() {
            $(this).parent('form').addClass("open");
          });
      });


    }
  });

  $("header[role=banner] button").click(function() {
    //shutNavPlanks();
    var $theMenuButton = this;
    if ($("nav.main ul").is(":visible")) {
      console.log(" is visible");
      $('nav.main ul').slideUp(300, function() {
       
        $($theMenuButton).removeClass("open");
      });
    } else {
      console.log(" is NOT visible");
      $('header[role=banner] form[role=search] fieldset').slideUp(200,
        function() {
          $('nav.main ul').slideDown(300, function() {
            $('header[role=banner] form[role=search]').removeClass("open");
            $($theMenuButton).addClass("open");
          });
        });
    }
    ///
  });
}
$(function() {
  respond();
  siteHeaderBehavior();
  $(window).resize(_.debounce(function() {
    respond();
    //siteHeaderBehavior();
  }, 100));

  // Global nav - Login - global behavior
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

});