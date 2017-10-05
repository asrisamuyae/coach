var app = angular.module('myApp', ['ngCookies']);
app.controller('myCtrl', function($scope,$http,$location,$window ,$filter) {

	$scope.test = "TEST";
	//alert('aaaaa')
	
	$scope.login = function(){

		$scope.username = $scope.user;
		$scope.password = $scope.pass;
		console.log($scope.username)
		console.log($scope.password)
		
	    var formData = { username: $scope.username, password : $scope.password };
	                
	        //         $http({
	        //                 method : 'POST',
	        //                 url : 'php/connect.php',
	        //                 data: formData,
	        //                 headers : {'Content-Type': 'application/x-www-form-urlencoded'}  

	        //         }).success(function(res){
	        //                 console.log(res);
	        //                 $scope.lpass = res.password;
	        //                 $scope.luser = res.username;
	        //                 console.log($scope.lpass);
	        //                 console.log($scope.luser);
	        //                 if ($scope.luser == $scope.username && $scope.lpass == $scope.password) {
	        //                 		console.log("login success")
	        //                 	 // $cookieStore.put('dotobject', $scope.lpass);
	        //                 	 // $cookieStore.get('dotobject')
	        //                 }
	        //                 else{
	        //                 	console.log("login fail")

	        //                 }




	        //         }).error(function(error){
	        //                 console.log(error);
	        // });
	    
	}
	$scope.logo = function(){
		$window.location.href = 'index.php';
	}
	$scope.academyclass = [];
	$scope.getacademy = function(x){
		$scope.academyclass = [];
		console.log(x);
		$scope.class = x;
		console.log($scope.academydata);
		for (var i = 0; i < $scope.academydata.length; i++) {
			//console.log($scope.academydata[i]);
			console.log($scope.academydata[i].team_class);
			if(x == $scope.academydata[i].team_class){
				//console.log($scope.academydata)
				
				$scope.academyclass.push($scope.academydata[i]);
				$('#academy').modal('show');
			}
			if(x == 'All'){
				//alert('aaaaa');
				$scope.academyclass.push($scope.academydata[i]);
				$('#academy').modal('show');
			}
		}
		// console.log('======================================================');
		
		 // angular.forEach($scope.academydata, function(data, i){
   //    		console.log(data)
   // 		});

	}
	
	$http({
	                        method : 'POST',
	                        url : 'php/getacademy.php',
	                        //data: $.param({ 'classs': "U-9"}),
	                        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
	                }).success(function(res){
	                        console.log(res);
	                        $scope.academydata = res;
	                        




	                }).error(function(error){
	                        console.log(error);
	        });
	
});