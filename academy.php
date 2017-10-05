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
	<link rel="stylesheet" href="css/material-dashboard.css">
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
	<!-- angular -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular-cookies.js"></script>	
	<script src="js/academy.angular.js"></script>
</head>

<body ng-app="myApp" ng-controller="myCtrl">
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
		<div class="top">
			<h1 id="title" class=""><span id="logo"><span>COACH GADGETS</span></span></h1>
		</div>
		<div class="container">
		<div class="card-content" style="margin-top: 60px;">
                                 
                                    
								<div class="row" align="center">
								<div class="col-md-12" >
									<div class="col-md-6" >
										
	 									<div class="border-menu" ng-click="getacademy('U-9')">U-9</div>
										<div class="border-menu" ng-click="getacademy('U-11')">U-11</div>
										<div class="border-menu" ng-click="getacademy('All')">All</div>
									</div>
									
									<div class="col-md-6" >
										<div class="border-menu" ng-click="getacademy('U-13')">U-13</div>
										<div class="border-menu" ng-click="getacademy('U-15')">U-15</div>
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
	 <!-- Modal -->

<div class="modal fade bd-example-modal-lg" id="academy">
                    <div class="modal-dialog">
                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                            <input type="hidden" name="" ng-model="idremovebooking">
                                <!-- <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button> -->
                                <!-- <h4 class="modal-title">Academy <span ng-bind="class"></span></h4> -->
                            </div>
                            <div class="modal-body">
                                	<div class="card">
                                <div class="card-header" data-background-color="blue">
                                    <h4 class="title">Academy <span ng-bind="class"></span></h4>
                                    <!-- <p class="category">Here is a subtitle for this table</p> -->
                                </div>
                                <div class="card-content table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
	                                        <tr>
	                                            <th>Player Name</th>
	                                			<th>Birthday</th>
	                                			<th>Position</th>
	                                			<th>School</th>
	                                			<th>Height</th>
	                                			<th>Weight</th>
	                                			<th>Foot</th>
	                                			<th>Address</th>
	                                			<th>Phone</th>
	                                			<th>Sign Date</th>
	                                			<th>Release Date</th>
	                                			<th>Post Date</th>
	                                        </tr>
	                                    </thead>
                                        <tbody>
                                        	
                                            <tr ng-repeat="item in academyclass">
                                               	<td><span ng-bind="item.player_name"></span></td>
	                                			<td><span ng-bind="item.birthday "></span></td>
	                                			<td><span ng-bind="item.position"></span></td>
	                                			<td><span ng-bind="item.school"></span></td>
	                                			<td><span ng-bind="item.height"></span></td>
	                                			<td><span ng-bind="item.weight"></span></td>
	                                			<td><span ng-bind="item.foot"></span></td>
	                                			<td><span ng-bind="item.address"></span></td>
	                                			<td><span ng-bind="item.phone"></span></td>
	                                			<td><span ng-bind="item.sign_date"></span></td>
	                                			<td><span ng-bind="item.release_date"></span></td>
	                                			<td><span ng-bind="item.post_date*1000 | date:'dd-MM-yyyy h:mm:ss'"></span></td>
	                                			
                                            </tr>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                                	<!-- <table>
                                		<tr>
                                			<td>player_name</td>
                                			<td>date</td>
                                			<td>school</td>
                                		</tr>
                                		<tr>
                                			<td><span ng-bind="item.player_name"></span></td>
                                			<td><span ng-bind="item.birthday"></span></td>
                                			<td><span ng-bind="item.school"></span></td>

                                		</tr>
                                	</table> -->
                                </div>
								  <div class="modal-footer" style="    padding-top: 24px;
    padding-right: 24px;
    padding-bottom: 16px;
    padding-left: 24px;">
                                <!-- <button type="button" class="btn btn-danger" data-dismiss="modal" ng-click="deletebooking(idremovebooking)">Remove</button> -->
                                <button type="button" class="btn btn-success btn-fill btn-wd" data-dismiss="modal">Close</button>
                            
                        </div>
                            </div>
                          
                    </div>
                </div>

	<style>
	.title-academy{
		padding: 20px;
		text-align: center;

	}
		.border-menu{
			 border-radius: 5px;
		    width: 151px;
		    padding: 10px 10px;
		    margin-bottom: 10px;
		    border: 1px solid #4b87a2;
		    background: #1ABC9C;
		    cursor: pointer;

		}
		.modal-dialog{
			
    width: 800px ;
    
   /* left: 50vw;
    top: 50vh;
    margin-top: 0px !important;
    transform: translate(-50%,-50%) !important; */
    /*position: fixed; 
    z-index: 10;
		}
		.modal-content{
			width: 800px ;
		}*/
}

@media screen and (max-width: 767px){

.modal-content{
			width: 600px ;
}
.modal-dialog{
    width: 600px ;    
    
	}
	/*.navbar-toggle{
		display: none !important;
	}*/
}

	</style>
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
		  //       url: "php/getacademy.php",
		  //       type: "post",
		  //       data: JSON.stringify({ 'classs': "U-9"}),
		  //       contentType: "application/json; charset=utf-8", 
		  //       dataType: "json",
			 //    success: function(data){
			 //    	console.log(data);
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

</html>