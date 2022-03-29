$(document).ready(function(){

	
	$('.lg-bnr-city-icon').hover(function(){
		$(this).toggleClass('active');
		$('.lg-bnr-city-icon').toggleClass('not-active');
		$(this).removeClass('not-active');

		console.log('hovered');
    });	

	$('.lg-bnr-city-icon.New').hover(function(){
		console.log('newyork hovered');
		$('#landing-page-home').css('background-image', 'url(/wp-content/uploads/ny-view-scaled.jpeg)');
    });	

	$('.lg-bnr-city-icon.Miami').hover(function(){
		$('#landing-page-home').css('background-image', 'url(/wp-content/uploads/miami-view-scaled.jpeg)');
		
    });	

	$('.lg-bnr-city-icon.Atlanta').hover(function(){
		$('#landing-page-home').css('background-image', 'url(/wp-content/uploads/atlanta-view-scaled.jpeg)');
		
    });	

	$('.lg-bnr-city-icon.Los').hover(function(){
		$('#landing-page-home').css('background-image', 'url(/wp-content/uploads/la-view-scaled.jpeg)');
		
    });	
	


	
$(window).on('scroll', function(){
	if($(window).scrollTop() > $(window).height())
	{
	$("#backToTop").addClass('showit');
	}else
	{
	$("#backToTop").removeClass('showit');
	}
	
	});
	
	$("body, html").on("click", "#backToTop", function(e){
	e.preventDefault();
	$('html, body').animate({scrollTop : 0}, 100);
	});
	

	//FOCUS RING STUFF
	function handleFirstTab(e) {
	    if (e.keyCode === 9) { // the "I am a keyboard user" key
	        document.body.classList.add('user-is-tabbing');
	        window.removeEventListener('keydown', handleFirstTab);
	    }
	}
	window.addEventListener('keydown', handleFirstTab);
	
	// GRAVITY FORMS ERROR REDIRECT
	if ($("#gform_wrapper_3 .validation_error").length != 0){
	    document.location.href = '/form-error';
	}	
	
		
	
	//Inview Handlers
	$('section').on('inview', function(ev, isInView) { //Add class to sections that are in view
		if (isInView) {
		  $(this).addClass('in-view');
		} else {
		  $(this).removeClass('in-view');
		}
	  });
	  
	  $('.will_animate').on('inview', function(ev, isInView) {
		if (isInView) {
		  $(this).addClass('animated');
		}
	  });
	
	//Determine which click event to use based on user agent
	var ua = navigator.userAgent,
		clickEvent = (ua.match(/iPad/i)) ? "touchend" : "click";
	if( clickEvent == "click" ){
		clickEvent = (ua.match(/iPhone/i)) ? "touchend" : "click";
	}
	


	//Menu Class Toggler
    let menuOpen = false;	
	$('body').on(clickEvent, '#menu-trigger', function(){
		console.log('opening menu')
		if( !menuOpen ) { openMenu(); }
		else{ closeMenu(); }
	});
	function openMenu(){
		console.log('actual menu is openeing');
		const trigger = document.getElementById('menu-trigger'),
			  menu 	  = document.getElementById('main-menu');
			  
		//menu.classList.toggle('invisible-opacity');
		trigger.classList.add('opened');
		menu.classList.add('opened-menu');
		$('.menu-logo').addClass('white-logo');
		$('#menu-primary-menu li').addClass('ladder');
		$('.social-media-holder .header-social-icon').addClass('ladder');
		menuOpen = true;
	}
	function closeMenu(){
		const trigger = document.getElementById('menu-trigger'),
			  menu 	  = document.getElementById('main-menu');
			  
		//menu.classList.toggle('invisible-opacity');
		trigger.classList.remove('opened');
		menu.classList.remove('opened-menu');
		$('.menu-logo').removeClass('white-logo');
		$('#menu-primary-menu li').removeClass('ladder');
		$('.social-media-holder .header-social-icon').removeClass('ladder');
		menuOpen = false;
	}
	


//left menu Opener
function leftMenuClick(ev) {
	const $leftMenu = document.querySelector('.left-menu');
	const $mobileMenu = document.querySelector('.left-menu-content');
	const $imggo = document.querySelector('.device-holder');
	const $bgimg = document.querySelector('.lg-bnr-city');
	const $title = document.querySelector('.city-hero-title-holder');
	const $cityIcons = document.querySelector('.city-with-icons-holder');

	$title.classList.toggle('hide');
	$bgimg.classList.toggle('hide');
	$imggo.classList.toggle('hide');
	$cityIcons.classList.toggle('show');
	$leftMenu.classList.toggle('open');
	$mobileMenu.classList.toggle('open');
	ev.currentTarget.classList.toggle('btnToggle');
  }

  
	const $menuButton = document.querySelector('.left-menu-icon');
	$menuButton.addEventListener('click', leftMenuClick);
  	


});
		
	
	
	
