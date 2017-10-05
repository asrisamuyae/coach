var app = angular.module('myApp2', ['ngCookies']);
app.controller('myCtrl2', function($scope,$http,$location) {
	$scope.test = "TEST";
	$scope.login = function(){

		$scope.username = $scope.user;
		$scope.password = $scope.pass;
		console.log($scope.username)
		console.log($scope.password)
		//$scope.test = "TEST";
	    var formData = { username: $scope.username, password : $scope.password };
	                
	                $http({
	                        method : 'POST',
	                        url : 'php/coach.php',
	                        data: formData,
	                        headers : {'Content-Type': 'application/x-www-form-urlencoded'}  

	                }).success(function(res){
	                        console.log(res);
	                        $scope.lpass = res.password;
	                        $scope.luser = res.username;
	                        console.log($scope.lpass);
	                        console.log($scope.luser);
	                        if ($scope.luser == $scope.username && $scope.lpass == $scope.password) {
	                        		console.log("login success")
	                        	 // $cookieStore.put('dotobject', $scope.lpass);
	                        	 // $cookieStore.get('dotobject')
	                        }
	                        else{
	                        	console.log("login fail")

	                        }




	                }).error(function(error){
	                        console.log(error);
	        });
	}
	
});