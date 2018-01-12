$('#slider-home').owlCarousel({
    loop:true,
    lazyLoad: true,
    margin:0,
    nav:true,
    center: false,
   // autoWidth: true,
    autoplay: true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
});

$('#slider-productos').owlCarousel({
    loop:true,
    lazyLoad: true,
    margin:0,
    nav:true,
    dots: false,
    center: false,
   // autoWidth: true,
    autoplay: false,
    responsive:{
        0:{
            items:1
        },
        768:{
            items:4
        },
        991:{
            items:4
        }
    }
});
$('.botonera-zoom-producto').owlCarousel({
    loop:false,
    lazyLoad: true,
    margin:0,
    nav:true,
    dots: false,
    center: false,
   // autoWidth: true,
    autoplay: false,
    responsive:{
        0:{
            items:2
        },
        768:{
            items:2
        },
        991:{
            items:2
        }
    }
});

      // ===== smooth scroll to section ====

              $(function() {
                $('a[href*="#"]:not([href="#"])').click(function() {
                  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
                    if (target.length) {

                      $('html, body').animate({
                        scrollTop: target.offset().top
                      }, 1000);
                      return false;
                    }
                  }
                });
              });

// ===== Scroll to Top ==== //
  $(window).scroll(function() {
      if ($(this).scrollTop() >= 500) {        // If page is scrolled more than 500px
          $('#return-to-top').fadeIn(500);    // Fade in the arrow
      } else {
          $('#return-to-top').fadeOut(200);   // Else fade out the arrow
      }
  });

$('#return-to-top').click(function() {      // When arrow is clicked
      $('body,html').animate({ scrollTop : 0 }, {
              duration:2000,
              easing :'easeOutQuint'
        });           // Scroll to top of body
    });

// seccion news

$.fn.moveIt = function(){
	  var $window = $(window);
	  var instances = [];

	  $(this).each(function(){
	    instances.push(new moveItItem($(this)));
	  });

	  window.onscroll = function(){
	    var scrollTop = $window.scrollTop();
	    instances.forEach(function(inst){
	      inst.update(scrollTop);
	    });
	  }
	}

	var moveItItem = function(el){
	  this.el = $(el);
	  this.speed = parseInt(this.el.attr('data-scroll-speed'));
	};

	moveItItem.prototype.update = function(scrollTop){
	  this.el.css('transform', 'translateY(' + -(scrollTop / this.speed) + 'px)');
	};

	$(function(){
	  $('[data-scroll-speed]').moveIt();
	});

// ===== zoom  ==== //
//initiate the plugin and pass the id of the div containing gallery images

// ===== zoom  ==== //
//initiate the plugin and pass the id of the div containing gallery images

$("#img-producto").elevateZoom({
    gallery:'botonera-producto',
    galleryActiveClass: 'active',
    responsive: true,
    zoomType: "inner",
    imageCrossfade: true,
    cursor: "crosshair",
    zoomWindowFadeIn: 500,
    zoomWindowFadeOut: 750
  });






   // $(".mCustomScrollbar").mCustomScrollbar({axis:"x"});






