'use strict';

angular.module('thApp', [])
	.controller('MainController', function ($scope, $http){
		
		$http({
			url: '/wp-json/posts',
			params: {
				'type[]' : 'portfolio-item'
			}
		})
		.then(function(resp){
			if(resp.status == 200){
				$scope.work = resp.data;
				console.log(resp.data);
			}
		})

	});