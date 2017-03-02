angular.module("expositores",['ui.materialize'])
	.controller("app",function($scope,$http){
		$scope.ponentes=[];
		$scope.ponentes_e=[];
		$scope.loading = true;
		$http.get("js/ponentes.json")
			.success(function(data){
				console.log(data);
				$scope.ponentes= data.nacional;
				$scope.ponentes_e= data.extranjero;
				$scope.loading = false;
			})
			.error(function(data){
				$scope.loading = false;
	})
	}) 
	.controller("app-new",function($scope,$http ){
		$scope.ponentes=[];
		$scope.ponentes_e=[];
		$scope.loading = true;
		$http.get("js/ponentes-2016.json")
			.success(function(data){
				console.log(data);
				$scope.ponentes= data.nacional;
				$scope.ponentes_e= data.extranjero; 
				$scope.loading = false;

			})
			.error(function(data){
				$scope.loading = false;
	})
 		
	});
