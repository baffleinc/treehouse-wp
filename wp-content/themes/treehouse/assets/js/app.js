'use strict';

// Apologies to future developers... The original design was a
// perfect candidate for angular, so I wrote a bunch of the 
// functionality in angular. Nick then changed his mind and
// supplied his own design, so I ported over bits and pieces
// to save time. Shame, the other one was fully hectic!

angular.module('thApp', ['uiGmapgoogle-maps', 'duScroll'])
	.controller('MainController', function ($scope, $location){

		$scope.coords = {
			sydney: { latitude: -33.8791282, longitude: 151.2157934 },
			melbourne: { latitude: -37.826466, longitude: 144.992912 },
		}

		var mapObj;

		$scope.map = { 
			center: $scope.coords.melbourne, 
			zoom: 17,
			 scrollwheel: false,
			events: {
				tilesloaded: function(map){
					mapObj = map;
				}
			}
		};

		$scope.switchMap = function(coords){
			mapObj.setCenter(coords);
		}

		var params = $location.search();
		var path = window.location.pathname;

		$scope.showContact = false;

		if(params.contact){
			$scope.showContact = true;
		}



		$scope.showAbout = function(isContact){
			if(path === '/about/'){
				if(isContact){
					$scope.showContact = true;
				} else {
					$scope.showContact = false;
				}
			} else {
				if(isContact){
					window.location.href = '/about#?contact';
				} else {
					window.location.href = '/about';
				}
				
			}
		}



	})

	.directive('fadeIntoView', function($document){

		var directive = {
			restrict: 'A',
			link: linkFn
		};

		return directive;

		function linkFn(scope, el){


			if(!Modernizr.mq('screen and (max-width: 40em)')){
				$document.on('scroll', function(){
					var elTop = $(el).offset().top;
					var scrollTop = $(document).scrollTop();
					var windowHeight = $(window).height();

					if((scrollTop + windowHeight) > elTop){
						el.addClass('show');
					} else {
						el.removeClass('show');
					}
				})
			}
		}
	});

// jQuery dependant stuff

$(function() {
	// Grid.init();

	var $container = $('#og-grid');
	var slickOpts;

	var $contIso = $container.isotope({
		itemSelector: '.iso-item'
	});

	setTimeout(function(){
		$container.isotope( 'layout' )
	}, 500);

	$container.css('height', 'auto');

	var filters = {};



	// filter items on button click
	$('.iso-filters').on( 'click', 'button', function() {

	  if($(this).hasClass('reset')){
	  	$('.iso-filters .active').removeClass('active');
  		$container.isotope({ filter: filterValue });
  	  } else {
  	  	var group = $(this).parents('[data-filter-group]');
		  var fgroup = group.attr('data-filter-group');

		  filters[fgroup] = $(this).attr('data-filter');

		  group.find('.active').removeClass('active');

		  var filterValue = $.map(filters, function(el){
		  	return [el]
		  }).join('');

		  $container.isotope({ filter: filterValue });
  	  }

	  $(this).addClass('active');

		  
	});

	$(".fancybox.gallery").fancybox({
		openEffect	: 'fade',
		closeEffect	: 'fade',
		helpers: {
	    overlay: {
	      locked: false
	    }
	  },

	});

	$(".fancybox.video").fancybox({
		openEffect	: 'fade',
		closeEffect	: 'fade',
		helpers: {
		    overlay: {
		      locked: false
		    },
		    media: {}
		},
		width: 1000,
		height: 640,
		aspectRation: true,
		fitToView: true
	});

	if(!Modernizr.mq('screen and (max-width: 40em)')){
		slickOpts = {
		  infinite: true,
		  slidesToShow: 4,
		  slidesToScroll: 4,
		  autoplay: true,
		  autoplaySpeed: 2000,
		}
	} else {
		slickOpts = {
		  infinite: true,
		  slidesToShow: 2,
		  slidesToScroll: 2,
		  autoplay: true,
		  autoplaySpeed: 2000,
		}
	}

	$('.client-list').slick(slickOpts);

	if(!Modernizr.mq('screen and (max-width: 64em)') && window.location.pathname == '/'){
		var smController = new ScrollMagic.Controller();
		var wh = $(window).height();

		new ScrollMagic.Scene({ duration: wh })
		.setTween("#animate", 1, { transform: "translateY(-100px) scale(1.1)", opacity: "0"  })
		.addTo(smController);

			// var textBgOffset = jQuery('#about').offset().top;
			// var clientOffset = jQuery('#clients').offset().top;

			new ScrollMagic.Scene({ duration: wh, triggerElement: '#trigger-about' })
			.setTween("#about", 1, { backgroundPosition: 'center 0px' })
			.addTo(smController);

			new ScrollMagic.Scene({ duration: wh, triggerElement: '#trigger-clients' })
			.setTween("#clients", 1, { backgroundPosition: 'center 0px' })
			.addTo(smController);

			
	}

	// grab an element
	var myElement = document.querySelector("header.header");
	// construct an instance of Headroom, passing the element
	var headroom  = new Headroom(myElement);
	// initialise
	headroom.init(); 

});
