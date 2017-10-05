var app = angular.module('myApp', ['ngCookies']);
app.controller('myCtrl', function($scope,$http,$location,$window) {
	$scope.test = "TEST";
	//alert('aaaaa')
	
	$scope.login = function(){

		$scope.username = $scope.user;
		$scope.password = $scope.pass;
		console.log($scope.username)
		console.log($scope.password)
		
	    var formData = { username: $scope.username, password : $scope.password };
	                
	                $http({
	                        method : 'POST',
	                        url : 'php/connect.php',
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
	$scope.logo = function(){
		$window.location.href = 'index.php';
	}
	$scope.regiscoach = function(){
		alert("aaaa")
		console.log($scope.name)
	}
	$scope.name = ''
	$http({
	                        method : 'POST',
	                        url : 'php/getdetailcoach.php',
	                        //data: $.param({name: 1}),
	                        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
	                }).success(function(res){
	                        console.log(res);
	                        $scope.detaildata = res;
	                        




	                }).error(function(error){
	                        console.log(error);
	        });
	
});