'use strict';

angular.module('thApp', ['uiGmapgoogle-maps'])
	.controller('MainController', function ($scope, $http, $location){

		$scope.coords = {
			sydney: { latitude: -33.8791282, longitude: 151.2157934 },
			melbourne: { latitude: -37.8272442, longitude: 144.9933963 },
		}

		var mapObj;

		$scope.map = { 
			center: $scope.coords.melbourne, 
			zoom: 17,
			events: {
				tilesloaded: function(map){
					console.log('tilesloaded');
					mapObj = map;
				}
			}
		};

		$scope.switchMap = function(coords){
			mapObj.setCenter(coords);
		}

		var params = $location.search();
		var path = window.location.pathname;

		console.log(params);

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

	});



$(function() {
	// Grid.init();

	var $container = $('#og-grid');

	$container.isotope({
		itemSelector: '.iso-item'
	});

	setTimeout(function(){
		$container.isotope( 'layout' )
	}, 500);

	$container.css('height', 'auto');

	// filter items on button click
	$('.iso-filters').on( 'click', 'button', function() {
	  var filterValue = $(this).attr('data-filter');
	  $container.isotope({ filter: filterValue });
	});

	$(".fancybox").fancybox({
		openEffect	: 'elastic',
		closeEffect	: 'elastic',
		helpers: {
		    overlay: {
		      locked: false
		    }
		  }
	});
});
