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
				<div class="col-md-12">
					<div class="col-md-12" style="margin-bottom: 30px;padding-left: 0">
						<select class="form-control" ng-change="changTeamclass(selectclass)" id="label-addbooking" ng-model="selectclass" data-ng-options="i as i.class for i in dataclass"  style="width: 155px;
    display: inline-block;
    height: 50px;
    margin-right: 10px;">
                            <option value="">- Class -</option>
                         </select>
						<div style="padding: 15px;
    background: #fff;
    display: inline-block;
    border-radius: 4px;
    width: 200px;">20,000,000</div>

					</div>
					
					
				</div>
			
				
				<div class="row">
					<div class="col-md-12" style="margin-top: 30px;">
						 <div class="col-md-3">
					 	<ul style="list-style: none;background: #fff;padding: 20px;border-radius: 4px ">
					 	 	<li ng-repeat="item in datateam" style="padding: 8px 0;"><span ng-bind="$index+1+' '+item.player_name"></span></li>
					 	 </ul>
					 </div>
						<div class="col-md-6" align="center">
							<div style="background-image: url(./images/bg.png);
    background-repeat: no-repeat;
    background-position: center;
    height: 455px;
    margin-bottom: 30px;
    background-size: 100%;
    margin-top: -45px;">
       
								<div class="GK"></div>
								<div class="CB1"></div>
								<div class="CB2"></div>
								<div class="CB3"></div>
								<div class="RB"></div>
								<div class="LB"></div>
								<div class="DMF"></div>
								<div class="CMF1"></div>
								<div class="CMF2"></div>
								<div class="RMF"></div>
								<div class="LMF"></div>
								<div class="AMF"></div>
								<div class="RW"></div>
								<div class="LW"></div>
								<div class="ST"></div>
								<div class="CF1"></div>
								<div class="CF2"></div>
								<div class="CF3"></div>
							</div>

						</div>
						 <div class="col-md-3">
					 	<ul style="list-style: none;background: #fff;padding: 20px;border-radius: 4px">
					 	 	<!-- <li ng-repeat="item in datateam"><span ng-bind="$index+1+' '+item.player_name"></span></li> -->
					 	 </ul>
					 </div>
					</div>
				</div>
				
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
	var app = angular.module('myApp', ['ngCookies']);
app.controller('myCtrl', function($scope,$http,$location,$window) {
	$scope.test = "TEST";
	//alert('aaaaa')
	// $scope.datateam = new Array();
	// $scope.dataclass = new Array();

	
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
	$scope.changTeamclass = function(x){
		console.log(x)
		$http({
	                        method : 'POST',
	                        url : 'php/getPlayerbyid.php',
	                        data: $.param({'id': x.id}),
	                        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
	                }).success(function(res){
	                        console.log(res);
	                        $scope.datateam = res
	                        

	                        //$scope.dataclass = res;
	                    //     for (var i=0;i<= res.length; i++) {
	                    //     	$scope.dataclass.push(res[i])
	                    // }
	                        




	               });
	}
   
	$scope.name = ''
	$http({
	                        method : 'POST',
	                        url : 'php/getClassteam.php',
	                        //data: $.param({name: 1}),
	                        headers : {'Content-Type': 'application/x-www-form-urlencoded'} 
	                }).success(function(res){
	                        console.log(res);
	                        $scope.dataclass = res
	        //                 angular.forEach(res, function(data, key){
						   //    //if(value.Password == "thomasTheKing")
						   //       //console.log("username is thomas");
						   //       $scope.dataclass.push(data)

						   // });
	                        console.log($scope.dataclass)

	                        //$scope.dataclass = res;
	                    //     for (var i=0;i<= res.length; i++) {
	                    //     	$scope.dataclass.push(res[i])
	                    // }
	                        




	               });
	                console.log($scope.dataclass)
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
<style >
	.GK{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.CB1 {
    position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 117px;
	}
	.CB2 {
    position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 308px;
    margin-left: 117px;
	}
	.CB3 {
    position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 124px;
    margin-left: 117px;
	}
	.RB {
    position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 396px;
    margin-left: 146px;
	}
	.LB {
    position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 32px;
    margin-left: 146px;
	}
	.DMF {
    position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 259px;
	}
	.CMF1{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.CMF2{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.RMF{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.LMF{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.AMF{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.RW{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.LW{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.ST{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.CF1{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.CF2{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
	.CF3{
		position: absolute;
    width: 25px;
    height: 25px;
    background: #fff;
    border-radius: 50%;
    margin-top: 213px;
    margin-left: 45px;
	}
</style>
</html>