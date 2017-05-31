(function($) {

 "use strict";
  $(document).on('ready', function() {



var fixed_top = $(".main-menu");

$(window).on('scroll', function() {
	
	if( $(this).scrollTop() > 100 ){	
		fixed_top.addClass("menu-fixed animated fadeInDown");
	}
	else{
		fixed_top.removeClass("menu-fixed animated fadeInDown");
	}
	
});


$('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });


//Counter up
$('.counter').counterUp();


//lightcase
jQuery('a[data-rel^=lightcase]').lightcase();


//trainer slider
var swiper = new Swiper('.trainer-slider', {
    slidesPerView: 5,
    nextButton: '.trainer-button-next',
    prevButton: '.trainer-button-prev',
    spaceBetween: 0,
    autoplay: 2000,
    breakpoints: {
	    // when window width is <= 320px
	    320: {
	      slidesPerView: 1
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2
	    },
	    // when window width is <= 767px
	    767: {
	      slidesPerView: 3
	    },
	    // when window width is <= 991px
	    991: {
	      slidesPerView: 4
	    }
	  }
    });


//Classes slider
var swiper = new Swiper('.classes-slider', {
    slidesPerView: 4,
    nextButton: '.classes-button-next',
    prevButton: '.classes-button-prev',
    spaceBetween: 30,
    breakpoints: {
	    // when window width is <= 320px
	    320: {
	      slidesPerView: 1
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2
	    },
	    // when window width is <= 767px
	    767: {
	      slidesPerView: 3
	    }
	  }
    });


//Testimonial Slider
var swiper = new Swiper('.testimonial-slider', {
    pagination: '.testimonial-pagination',
    slidesPerView: 2,
    paginationClickable: true,
    spaceBetween: 30,
    breakpoints: {
	    // when window width is <= 767px
	    767: {
	      slidesPerView: 1
	    }
	  }
    });

//Product Slider
var swiper = new Swiper('.product-slider', {
    slidesPerView: 4,
    nextButton: '.product-button-next',
    prevButton: '.product-button-prev',
    spaceBetween: 30,
    breakpoints: {
	    // when window width is <= 320px
	    320: {
	      slidesPerView: 1
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2
	    },
	    // when window width is <= 767px
	    767: {
	      slidesPerView: 3
	    }
	  }
    });


//Client Slider
var swiper = new Swiper('.client-slider', {
    slidesPerView: 4,
    spaceBetween: 10,
    autoplay: 2000,
    loop: true,
    breakpoints: {
	    // when window width is <= 320px
	    320: {
	      slidesPerView: 1
	    },
	    // when window width is <= 480px
	    480: {
	      slidesPerView: 2
	    },
	    // when window width is <= 767px
	    767: {
	      slidesPerView: 3
	    }
	  }
    });


//product Slider
$(window).on('load', function() {
	// The slider being synced must be initialized first
	$('#carousel').flexslider({
		animation: "slide",
		direction: 'vertical',
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		itemWidth: 103,
		itemMargin: 5,
		asNavFor: '#slider'
	});

	$('#slider').flexslider({
		animation: "fade",
		direction: 'vertical',
		controlNav: false,
		animationLoop: false,
		slideshow: false,
		sync: "#carousel"
	});
});




    



});


    
    
	jQuery('.price_ex_class:first-child').addClass('col-md-offset-4');


})(jQuery);