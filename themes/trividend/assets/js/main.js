(function($) {

/*Google Map Style*/
var CustomMapStyles  = [{"featureType":"water","elementType":"geometry","stylers":[{"color":"#e9e9e9"},{"lightness":17}]},{"featureType":"landscape","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":20}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"},{"lightness":17}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#ffffff"},{"lightness":29},{"weight":.2}]},{"featureType":"road.arterial","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":18}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#ffffff"},{"lightness":16}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#f5f5f5"},{"lightness":21}]},{"featureType":"poi.park","elementType":"geometry","stylers":[{"color":"#dedede"},{"lightness":21}]},{"elementType":"labels.text.stroke","stylers":[{"visibility":"on"},{"color":"#ffffff"},{"lightness":16}]},{"elementType":"labels.text.fill","stylers":[{"saturation":36},{"color":"#333333"},{"lightness":40}]},{"elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"transit","elementType":"geometry","stylers":[{"color":"#f2f2f2"},{"lightness":19}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#fefefe"},{"lightness":20}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#fefefe"},{"lightness":17},{"weight":1.2}]}]

var windowWidth = $(window).width();
$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	
  
//matchHeightCol
if($('.mHc').length){
  $('.mHc').matchHeight();
};
if($('.mHc1').length){
  $('.mHc1').matchHeight();
};
if($('.mHc2').length){
  $('.mHc2').matchHeight();
};
if($('.mHc3').length){
  $('.mHc3').matchHeight();
};
if($('.mHc4').length){
  $('.mHc4').matchHeight();
};
if($('.mHc5').length){
  $('.mHc5').matchHeight();
};


//$('[data-toggle="tooltip"]').tooltip();

//banner animation
$(window).scroll(function() {
  var scroll = $(window).scrollTop();
  $('.page-banner-bg').css({
    '-webkit-transform' : 'scale(' + (1 + scroll/2000) + ')',
    '-moz-transform'    : 'scale(' + (1 + scroll/2000) + ')',
    '-ms-transform'     : 'scale(' + (1 + scroll/2000) + ')',
    '-o-transform'      : 'scale(' + (1 + scroll/2000) + ')',
    'transform'         : 'scale(' + (1 + scroll/2000) + ')'
  });
});


if($('.fancybox').length){
$('.fancybox').fancybox({
    //openEffect  : 'none',
    //closeEffect : 'none'
  });

}


/**
Responsive on 767px
*/

// if (windowWidth <= 767) {
  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      autoplay: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}



var swiper = new Swiper('.catagorySlider', {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: '.catagorySlider-arrows .swiper-button-next',
      prevEl: '.catagorySlider-arrows .swiper-button-prev',
    },
    breakpoints: {
       639: {
        slidesPerView: 2,
        spaceBetween: 0,
      },
      991: {
        slidesPerView: 3,
        spaceBetween: 0,
      },
      1199: {
        loop: false,
        slidesPerView: 4,
        spaceBetween: 0,
      },
      1920: {
        loop: false,
        slidesPerView: 4,
        spaceBetween: 0,
      },
    }
  });


if( $('#mapID').length ){
var latitude = $('#mapID').data('latitude');
var longitude = $('#mapID').data('longitude');

var myCenter= new google.maps.LatLng(latitude,  longitude);
function initialize(){
    var mapProp = {
      center:myCenter,
      mapTypeControl:true,
      scrollwheel: false,
      zoomControl: true,
      disableDefaultUI: true,
      zoom:7,
      streetViewControl: false,
      rotateControl: true,
      mapTypeId:google.maps.MapTypeId.ROADMAP,
      styles: CustomMapStyles
      };

    var map= new google.maps.Map(document.getElementById('mapID'),mapProp);
    var marker= new google.maps.Marker({
      position:myCenter,
        //icon:'map-marker.png'
      });
    marker.setMap(map);
}
google.maps.event.addDomListener(window, 'load', initialize);

}



/* BS form Validator*/
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();




  /* Start of Noyon */

  if( $('.humberger-icon').length ){
    $('.humberger-icon').click(function(){
      $('body').toggleClass('allWork');
    });
  }
  if( $('li.menu-item-has-children a').length ){
    $('li.menu-item-has-children a').click(function(e){
       event.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('sub-menu-arrow');
    });
  }


  if( $('.hdr-search').length ){
    $('.hdr-search button').click(function(e){
      event.preventDefault();
      $('.hdr-search').toggleClass('hdr-search-input-show');
    });
  }

  $(document).click(function(event) { 
    var $target = $(event.target);
    if(!$target.closest('.hdr-search').length && 
      $('.hdr-search').is(":visible")) {
      $('.hdr-search').removeClass('hdr-search-input-show');
  }        
});
  /*slider */
  if( $('.homeBnrSlider').length ){
    $('.homeBnrSlider').slick({
      dots: true,
      infinite: true,
      autoplay: true,
      arrows: true,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: $('.hm-banner-cntlr .fl-nxt-prev .fl-prev'),
      nextArrow: $('.hm-banner-cntlr .fl-nxt-prev .fl-next'),
    });
}

    if($('.ourServicesSliders').length ){
      $('.ourServicesSliders').slick({
        dots: false,
        infinite: false,
        autoplay: false,
        arrows: true,
        autoplaySpeed: 2000,
        speed: 300,
        slidesToShow: 3,
        slidesToScroll: 1,
        prevArrow: $('.Our-services-sliders-cntlr .fl-nxt-prev .fl-prev'),
        nextArrow: $('.Our-services-sliders-cntlr .fl-nxt-prev .fl-next'),
      });
    }


    if($('.customerSlider').length ){
      $('.customerSlider').slick({
        dots: true,
        infinite: false,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 2000,
        speed: 300,
        slidesToShow: 6,
        slidesToScroll: 1,
      });
    }





  /* Start of Shariful */

    if( $('.nwSlider').length ){
        $('.nwSlider').slick({
          dots: false,
          infinite: false,
          autoplay: false,
          arrows: true,
          autoplaySpeed: 2000,
          speed: 300,
          slidesToShow: 3,
          slidesToScroll: 1,
          prevArrow: $('.tvd-nieuws-slider-ctlr .fl-nxt-prev .fl-prev'),
          nextArrow: $('.tvd-nieuws-slider-ctlr .fl-nxt-prev .fl-next'),
          responsive: [
          {
            breakpoint: 1200,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 768,
            settings: {
              dots: true,
              arrows: false,
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
        });
    }

     $('.dfp-accordion h5').on('click', function(){
       $(this).toggleClass('active');
        $(this).parent().siblings().find('h5').removeClass('active'); 
        $(this).parent().find('p').slideToggle(300);
        $(this).parent().siblings().find('p').slideUp(300);
        
      });

     if($('.bnpgnSlider').length ){
      $('.bnpgnSlider').slick({
        dots: true,
        infinite: false,
        autoplay: true,
        arrows: false,
        autoplaySpeed: 2000,
        speed: 300,
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1
            }
          }
          // You can unslick at a given breakpoint now by adding:
          // settings: "unslick"
          // instead of a settings object
        ]
      });
    }


    if (windowWidth <= 767) {
      $('.ftr-menu h4').on('click', function(){
        $(this).toggleClass('active');
        $(this).parent().siblings().find('h4').removeClass('active');
        $(this).parent().find('.ftr-menu-des').slideToggle(300);
        $(this).parent().siblings().find('.ftr-menu-des').slideUp(300);
      });

    }

    if(windowWidth <= 767){
      if($('.bnwsSlider').length ){
        $('.bnwsSlider').slick({
          dots: true,
          infinite: false,
          autoplay: false,
          arrows: false,
          autoplaySpeed: 2000,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
        });
      }
    }

    if(windowWidth <= 575){
      if($('.proSlider').length ){
        $('.proSlider').slick({
          dots: true,
          infinite: false,
          autoplay: false,
          arrows: false,
          autoplaySpeed: 2000,
          speed: 300,
          slidesToShow: 1,
          slidesToScroll: 1,
        });
      }
    }





  /* Start of Milon */
  $('label.wpforms-error').on('click', function(){
    $(this).parent('.wpforms-field').removeClass('wpforms-has-error');
  });


  /*slider */
  if( $('.tvd-team-grid-slider').length ){
    $('.tvd-team-grid-slider').slick({
      dots: false,
      infinite: true,
      autoplay: false,
      arrows: false,
      autoplaySpeed: 2000,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 991,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
            dots: false
          }
        },
        {
          breakpoint: 575,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}



    new WOW().init();

})(jQuery);