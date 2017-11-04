<!DOCTYPE html>
<html lang="en">


<head>
	<meta charset="utf-8">
	<title>Coach Gadgets</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Custom Stylesheet -->
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<!-- angular -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>

	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular-cookies.js"></script>	
	<!-- <script src="js/coach.angular.js"></script> -->
</head>

<body ng-app="myApp" ng-controller="myCtrl" style="background: #227db2">
		<div class="navbar-header">
        	<div class="" style="    /* padding: 9px 10px; */
            margin-top: 12px;
            margin-left: 15px;
            /* margin-bottom: 8px; */
            font-size: 25px;
            display: inline-block;">
                        <div class="box-login-non" style="display: nones;cursor: pointer;"  ng-click="logo()">
                  
                       <!-- <i class="material-icons btn-login" style="">account_circle  </i> -->
                        <span style="font-size: 14px;" class="lng-login">BACK</span>
</div>
                 
                    <!-- <div class="box-login" style="width: 35px;  height: 35px; border-radius: 50px;  margin-top: -4px;">
                   <img class="imgmemu" src="https://dotdotdottrip.com/pic/default-avatar.png"></div>
                </div> -->
        		<button type="button" class="navbar-toggle" data-toggle="collapse">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		
        	</div>
        	</div>
		
		<div class="container">
		<div class="card-content" style="margin-top: 60px;">
			<div class="row">
				<div class="col-md-6">
					<span >man-u</span><div style="border:1px solid #ddd;padding: 15px ">20,000,000</div>
					<select class="form-control" id="label-addbooking">
                                                    <option ng-repeat="item in dataplayer" value="">{{}}</option>
                                              </select>
				</div>
				{{}}
				<div class="col-md-6" ng-repeat="item in dataplayer">
					<span >sss-u</span><div style="border:1px solid #ddd;padding: 15px ">20,000,000</div>
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<div align="center">
							<div style="    background: #ace8ab;
    /* width: 800px; */
    height: 600px;
    margin-bottom: 30px;
    margin-top: 30px;">
       <div>
       		<table width="100%">
					 	 	<tr>
					 	 		<td>0</td>
					 	 		<td>0</td>
					 	 	</tr>
					 	 </table>
       </div>
								
							</div>

						</div>
					</div>
				</div>
				<!-- <div class="row">
					 <div class="col-md-3">
					 	<div style="background: #ddd;height: 500px"></div>
					 </div>
					 <div class="col-md-6" style="text-align: center;">
					 	 <table width="100%">
					 	 	<tr>
					 	 		<td>0</td>
					 	 		<td>0</td>
					 	 	</tr>
					 	 </table>
					 </div>
					 <div class="col-md-3">
					 	<div style="background: #ddd;height: 500px"></div>
					 </div>
					
				</div> -->
			</div>
                                    
                                    
        </div>
		<!-- <table>
			<tr>
				<td>Name</td>
				<td>Date of birth</td>
				<td>Address</td>
				<td>Phone</td>
				<td>Sign date</td>
				<td>Release date</td>
				<td>Team Managed</td>
			</tr>
		</table> -->
		<!-- <div class="login-box animated fadeInUp">
			<div class="box-header">
				<h2>Log In</h2>
			</div>
			<label for="username"  >Username</label>
			<br/>
			<input type="text" id="username" ng-model="user">
			<br/>
			<label for="password">Password</label>
			<br/>
			<input type="password" id="password" ng-model="pass">
			<br/>
			<button type="submit" id="submit" ng-click="login()">Sign In</button>
			<br/>
			<a href="#"><p class="small">Forgot your password?</p></a>

			<div>
				<span>username</span>
				<span id="ssss" ng-bind="username"></span>
			</div>
			<div>
				<span>password</span>
				<span id="ssss" ng-bind="password"></span>
			</div>
			
		</div> -->
	</div>
</body>

<script>
	$(document).ready(function () {
    	$('#logo').addClass('animated fadeInDown');
    	$("input:text:visible:first").focus();

    	$("#submit").click(function(event) {
    		/* Act on the event */
    	});
    // 	$("#submit").click(function(){
    // 		var pass = $("#password").val()
    // 		var username = $("#username").val()
    // 		//alert("The paragraph was clicked.");
    // 		console.log(username)
    // 		console.log(pass)
    // 		var markers = [{ "position": "128.3657142857143", "markerPosition": "7" },
    //            { "position": "235.1944023323615", "markerPosition": "19" },
    //            { "position": "42.5978231292517", "markerPosition": "-3" }];

    // 		$.ajax({
		  //       url: "php/connect.php",
		  //       type: "post",
		  //       data: JSON.stringify({ username: markers}),
		  //       contentType: "application/json; charset=utf-8", 
		  //       dataType: "json",
			 //    success: function(data){
			 //    	alert(data);
			 //    },
			 //    failure: function(errMsg) {
			 //        alert(errMsg);
			 //    }


    // });

		//});
	});
	$('#username').focus(function() {
		$('label[for="username"]').addClass('selected');
	});
	$('#username').blur(function() {
		$('label[for="username"]').removeClass('selected');
	});
	$('#password').focus(function() {
		$('label[for="password"]').addClass('selected');
	});
	$('#password').blur(function() {
		$('label[for="password"]').removeClass('selected');
	});
</script>
<script>
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
	                        url : 'php/getplayer.php',
	                        //data: $.param({name: 1}),
	                        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
	                }).success(function(res){
	                        console.log(res);
	                        $scope.detaplayer = res;
	                        for (var i=0;i<= $scope.detaplayer.length; i++) {
	                        	//console.log($scope.detaplayer[i].name)
	                    }
	                        




	               });
	                // $http({
	                //         method : 'POST',
	                //         url : 'php/getmatch.php',
	                //         //data: $.param({name: 1}),
	                //         headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
	                // }).success(function(res){
	                //         console.log(res);
	                //         $scope.datamatch = res;
	                        




	                // });
	
});
</script>

</html>