jQuery(document).ready(function($) {

  var current_package = 0;

  $('#slick-blog-slider').slick({
    appendArrows: $('#slick-blog-arrows'),
    arrows: true,
    centerMode: true,
    centerPadding: '37.5px',
    prevArrow: '<button><img class="img-responsive left svg arrow" src="/SoN/wp-content/themes/soncustom/dist/icons/arrow.svg "/></button>',
    nextArrow: '<button><img class="img-responsive right svg arrow" src="/SoN/wp-content/themes/soncustom/dist/icons/arrow.svg "/></button>',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '22.5px',
          slidesToShow: 1,
        }
      }
    ]
  });

  $('#slick-social-slider').slick({
    adaptiveHeight: true,
    arrows: false,
    centerMode: true,
    centerPadding: '22.5px',
    initialSlide: 1,
    mobileFirst: true,
    prevArrow: '<button><img class="img-responsive left svg arrow" src="/SoN/wp-content/themes/soncustom/dist/icons/arrow.svg "/></button>',
    nextArrow: '<button><img class="img-responsive right svg arrow" src="/SoN/wp-content/themes/soncustom/dist/icons/arrow.svg "/></button>',
    slidesToShow: 1,
    infinite: false,
    responsive: [
      {
        breakpoint: 767,
        settings: {
          initialSlide: 1,
          slidesToShow: 3,
        }
      },
      {
        breakpoint: 1023,
        settings: {
          initialSlide: 1,
          slidesToShow: 3,
          centerPadding: '37.5px',
        }
      }
    ]
  });

  $('#slick-packages-slider').slick({
    appendArrows: $('#slick-packages-arrows'),
    arrows: true,
    centerMode: true,
    centerPadding: '0px',
    infinite: false,
    prevArrow: '<button><img class="img-responsive left svg arrow" src="/SoN/wp-content/themes/soncustom/dist/icons/arrow.svg "/></button>',
    nextArrow: '<button><img class="img-responsive right svg arrow" src="/SoN/wp-content/themes/soncustom/dist/icons/arrow.svg "/></button>',
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
        }
      }
    ]
  });

  $('#slick-packages-slider').on('afterChange', function(event, slick, currentSlide){
    current_package = currentSlide;
    $('.package-number').removeClass('active');
    $('.package-number').eq(current_package).addClass('active');
  })

  $('#slick-about-slider').slick({
    arrows: false,
    centerMode: true,
    centerPadding: '0px',
    infinite: true,
    slidesToShow: 1,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
        }
      }
    ]
  });

  var pagenum = parseInt($('#curpage').html());
  var maxpage = parseInt($('#maxpage').html());
  var category;

  $('.blog-section').on('click', '.filter-blog', function(e){
    e.preventDefault();
    if($(this).hasClass('pageforward')){
      if(pagenum < maxpage){
        pagenum += 1;
        $('#curpage').html(pagenum);
      }
    } else if($(this).hasClass('pagebackward')) {
      if(pagenum > 1){
        pagenum -= 1;
        $('#curpage').html(pagenum);
      }
    } else {
      $(".category-dropdown").slideToggle();
      category = $(this).data('category');
      pagenum = 1;
      $('#curpage').html(pagenum);
      $('#categoryname').html($(this).html());
    }

  $.ajax({
    url:my_ajax_object.ajax_url,
    data:{
        'action':'filter_blog',
        'category':category,
        'pagenum':pagenum,
    },
    success:function(data){
      $('body').animate({scrollTop: 0}, 500, 'swing', function(){
        $('#post-blog-container').html(data);
        maxpage = parseInt($('#maxpage').html());
      });
    },
    error: function(){}
  });
})


  var activePackage = $(".package-number").eq(0);
  var bannerHeight = $("#animated-banner").height();

  if($(window).width() >= 768){
    $('#box-shadow').css({'padding-bottom': $('#footer-container').height() - 55})
  } else {
    $('#box-shadow').css({'padding-bottom': $('#footer-container').height()})
  }

  function equalizeHeights(){
    $('#slick-packages-slider').each(function(){  
      // Reset any inline-style heights
      $('.slick-slide',this).css('height','auto');

      // Cache the highest
      var highestBox = 0;
      
      // Select and loop the elements you want to equalise
      $('.slick-slide', this).each(function(){
        if($(this).height() > highestBox) {
          highestBox = $(this).height(); 
        }
      
      });  
            
      // Set the height of all those children to whichever was highest 
      $('.slick-slide',this).height(highestBox);
                    
    }); 
  }

  function landingSlider(){
    $('#landing-background-container > .sizer').eq(1).animate({left: 0})
    $('#landing-background-container > .sizer').first().animate({left: '-100vw'});
    setTimeout(function(){
      $('#landing-background-container > .sizer').first().css({left: ''});
      $('#landing-background-container > .sizer').last().after($('#landing-background-container > .sizer').first());
    }, 1000);
  }

  setInterval(landingSlider, 7500);

  function landingFader(){
    $('#landing-image-container > .img-responsive').last().after($('#landing-image-container > .img-responsive').first());
  }

  setInterval(landingFader, 7500);

  $(window).scroll(function(){
    const player = $('#ink').get(0);
    if($(window).scrollTop() + $(window).height() == $(document).height()) {
      player.play();
    } else if($(document).height() - ($(window).scrollTop() + $(window).height()) > bannerHeight) {
      player.pause();
      player.currentTime = 0;
    }
  })

  $(window).scroll(function(){
    if($(window).scrollTop() > 30){
      $('#mobile-menu').addClass('fixed');
      if($(window).outerWidth() < 768){
        $('.container-fluid').eq(0).css({'padding-top': $('#mobile-menu').outerHeight()})
      }
    } else {
      $('.container-fluid').eq(0).css({'padding-top': 0})
      $('#mobile-menu').removeClass('fixed');
    }
  })

  if($('#map-container').length > 0 && window.innerWidth >= 768 ){
    $(window).scroll(function(){
      const offset = $('.social-slider-container').offset().top - $('#map-container').outerHeight();
      if($(window).scrollTop() > offset){
        $('#map-container').css({position: 'absolute', bottom: 0, top: 'auto'});
      } else {
        $('#map-container').css({position: 'fixed', bottom: null, top: 0});
      }
    });
  }
  

  if($('#slick-packages-slider').length > 0){
    $(window).scroll(function(){
      const packageOffset = $('#slick-packages-slider').offset().top - $(window).scrollTop();
      if(packageOffset < 300){
        $('.package-number').eq(current_package).addClass('active');
      } else {
        $('.package-number').eq(current_package).removeClass('active'); 
      }
    });
  }

  var mywindow = $(window);
  var mypos = mywindow.scrollTop();
  var up = false;
  var offset;

  mywindow.scroll(function () {
  offset = mywindow.scrollTop();
  console.log(mypos);
  if (offset > mypos && !up) {
    $('.mobile-icons').stop().slideUp();
    up = !up;
    console.log("I'm hidden");
  } else if (offset < mypos && up) {
    $('.mobile-icons').stop().slideDown();
    up = !up;
    console.log("I'm shown");
  }
  mypos = offset;
  });

  $(window).resize(function(){
    equalizeHeights();
    if($(window).width() >= 768){
      $('#box-shadow').css({'padding-bottom': $('#footer-container').height() - 55})
    } else {
      $('#box-shadow').css({'padding-bottom': $('#footer-container').height()})
    }
    bannerHeight = $("#animated-banner").height();
  });


  $('#hamburger').on('click', function(){
    $('#mobile-menu').toggleClass('active');
  });

  $('#mobile-menu > .overlay').on('click', function(){
    $('#mobile-menu').toggleClass('active');
  })

   $(".category-selector").on("click", function() {
    $(".category-dropdown").slideToggle();
  });

  jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});


  if($(window).scrollTop() > 30){
    $('#mobile-menu').addClass('fixed');
    if($(window).outerWidth() < 768){
      $('.container-fluid').eq(0).css({'padding-top': $('#mobile-menu').outerHeight()})
    }
  }

  $('.line-slider-lines > span').on('click', function(){
    const index = $(this).index();
    $('.line-slider-lines > span').removeClass('active');
    $(this).addClass('active');
    $('.line-slider > .slide').removeClass('active');
    $('.line-slider > .slide').eq(index).addClass('active');
  })

  equalizeHeights();

});


