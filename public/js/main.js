;(function($){
"use strict";  

    $(window).load(function(){
        $('.loader').fadeOut(200);
    });
    
    /*---------------------
     jQuery MeanMenu
    --------------------- */
	jQuery('nav#dropdown').meanmenu();	
    
    function clientsSlider(){
        if( $('.slider-carousel').length ){
            $('.slider-carousel').owlCarousel({
                loop:true,
                margin:55,
                autoplay: true,
                nav: true,
                items:2,
                navContainer: '.slider-carousel',
                navText: ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
                responsiveClass:true,
                responsive:{
                    0:{
                        items:1,
                    },
                    768:{
                        items:2,
                        margin:20,
                    },
                    992:{
                        items:2,
                    }
                }
            })
        }
    }
    clientsSlider();

    /*===ajax validate ===*/
    if ($('.js-ajax-form').length) {
        $('.js-ajax-form').each(function(){
            $(this).validate({
                errorClass: 'error wobble-error',
                submitHandler: function(form){
                    $.ajax({
                        type: "POST",
                        url:"mail.php",
                        data: $(form).serialize(),
                        success: function() {
                            $('#success').show();
                        },

                        error: function(){
                            $('#error').show();
                        }
                    });
                }
            });
        });
    }
    
    /*===PartnerSlider js ===*/
    function PartnerSlider(){
        if( $('.partner-carousel').length ){
            $('.partner-carousel').owlCarousel({
                loop:true,
                margin:30,
                autoplay: false,
                nav: false,
                items:5,
                responsiveClass:true,
                responsive:{
                    0:{
                        items:2,
                    },
                    550:{
                        items:3,
                    },
                    992:{
                        items:5,
                    }
                }
            })
        }
    }
    PartnerSlider();
    /*===== progress-bar =====*/
    function circle_progress(){
        if( $('.circle').length ){
            $(".circle").each(function() {
                $(this).waypoint(function() {
                    $('.circle').circleProgress({
                        startAngle:-14.1,
                        size: 100,
                        duration: 2000,
                        easing: "circleProgressEase",
                        emptyFill: 'rgb(241, 241, 241)',
                        lineCap: 'round',
                        thickness:2,
                    })
                }, {
                    triggerOnce: true,
                    offset: 'bottom-in-view'
                })
            })
        }
    }
    circle_progress();
    
    function counterActivator(){
        if ( $('.counter').length ){
            $('.counter').counterUp({
                delay: 70,
                time: 1000
            })
        }
    }
    counterActivator();
    
    /*==== revslider js=====*/
    function revsliderOne(){
		if ( $('#slider1').length ){
			$("#slider1").revolution({
				sliderType:"standard",
				sliderLayout:"auto",
				delay:9000,
      			autoHeight:"on",
				navigation: {
		  			touch:{
						touchenabled:"on"
					},
                    bullets: {
                        enable:true,
                        hide_onmobile:true,
                        style:"zeus",
                        hide_onleave:false,
                        hide_delay:200,
                        hide_delay_mobile:1200,
                        direction:"vertical",
                        h_align:"right",
                        v_align:"center",
                        h_offset:90,
                        v_offset:0,
                        space:45,
                        tmp:'<span class="tp-bullet-image"></span><span class="tp-bullet-imageoverlay"></span><span class="tp-bullet-title">{{title}}</span>'
                    },
					arrows: {
						style: "hermes",
						enable: false,
						hide_onmobile: false,
						hide_onleave: false,
						tmp: '<div class="tp-arr-allwrapper">	<div class="tp-arr-imgholder"></div>	<div class="tp-arr-titleholder">{{title}}</div>	</div>',
						left: {
							h_align: "left",
							v_align: "center",
							h_offset: 10,
							v_offset: 0
						},
						right: {
							h_align: "right",
							v_align: "center",
							h_offset: 10,
							v_offset: 0
						}
					},
				},			
				responsiveLevels:[4096,1200,992,768,639,480],
			  	gridwidth:[1140,940,720,450,450,290],
			  	gridheight:[587,480,480,450,480,480]
			})
		}
	}
	revsliderOne();
    
    /*====Demo Color Box=====*/
    var colorTrigger = $('.colorDemo ul li');
    var colorBox = $('.colorDemo')
    colorTrigger.on('click', function(){
        var body = $('body');
        var CCcolor = $(this).data('color');
        var colorList = colorTrigger.map(function() {
            return $(this).data('color');
        }).get();
        colorList = colorList.join(' ');
        body.removeClass( colorList );
        body.addClass( CCcolor );
        colorTrigger.removeClass('active');
        $(this).addClass('active');
    });
    $('.colorDemo > a').on('click', function(){
        colorBox.toggleClass('open');
    });

    //ColorBox Time Out
    setTimeout(function(){
        colorBox.toggleClass('open');
    }, 5000);

    //Service Middle Content
    var serviceFigure = $('#services-area figure');
    var serviceFigureHeight = serviceFigure.width();
    serviceFigure.css('height', serviceFigureHeight);
    
    $('a[href="#"]').click (function(e){
        e.preventDefault();
    })
})(jQuery)