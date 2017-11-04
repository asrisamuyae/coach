var app = angular.module('myApp', ['ngCookies']);
app.controller('myCtrl', function($scope,$http,$location,$window ,$filter) {

	$scope.test = "TEST";
	$scope.addgoal = false;
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
	$scope.checkx = '';
	$scope.changeincre = function(item){
		console.log(item)
		console.log(item.id)
		// $('#showinput'+item.id).css("display", "inline-block");
		// $('#showsave'+item.id).css("display", "inline-block");

		// $('#showedit'+item.id).css("display", "none");
		$scope.goalid = item.id;
		if ($scope.checkx == '' ) {
			console.log('in case null')
			

			$('#showinput'+item.id).css("display", "block");
			$('#showsave'+item.id).css("display", "block");
			$('#showedit'+item.id).css("display", "none");
			$scope.checkx = item.id;
		}
		else if (item.id != $scope.checkx) {
			console.log('in case x==checkx')			
			$('#showinput'+$scope.checkx).css("display", "none");
			$('#showsave'+$scope.checkx).css("display", "none");
			$('#showedit'+$scope.checkx).css("display", "block");

			$('#showinput'+item.id).css("display", "block");
			$('#showsave'+item.id).css("display", "block");
			$('#showedit'+item.id).css("display", "none");
			$scope.checkx = item.id;
		}
		else{
			$('#showinput'+item.id).css("display", "block");
			$('#showsave'+item.id).css("display", "block");
			$('#showedit'+item.id).css("display", "none");
			$scope.checkx = item.id;
		}
		//$scope.addgoal+ = true;
	}

	$scope.saveaddgoal = function(x){

		$('#showinput'+x).css("display", "none");
		$scope.inputgoal = $('#showinput'+x).val();

		$('#showsave'+x).css("display", "none");

		$('#showedit'+x).css("display", "block");

		//$scope.addgoal = false;
		console.log(x)
		console.log($scope.inputgoal)

		$http({
	                        method : 'POST',
	                        url : 'php/updateGoal.php',
	                        data: $.param({ 'id': x
	                        	,'goal': $scope.inputgoal
	                    	}),
	                        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
	                }).success(function(res){
	                        console.log(res);
	                         angular.forEach($scope.academyclass, function(data){
						      		if (data.id == x) {
						      			data.goal = $scope.inputgoal;
						      			$scope.inputgoal = '';
						      		}
						   		});
	                        //$window.location.reload();

	                 });
	}
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
		
		 // angular.forEach($scope.academyclass, function(data, i){
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
	                $http({
	                        method : 'POST',
	                        url : 'php/getplayer.php',
	                        //data: $.param({name: 1}),
	                        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
	                }).success(function(res){
	                        console.log(res);
	                        $scope.detaplayer = res;
	                        for (var i=0;i<= $scope.detaplayer.length; i++) {
	                        	console.log($scope.detaplayer[i].name)
	                    }
	                        




	               });
	
});