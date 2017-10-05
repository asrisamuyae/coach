<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Coach Gadgets</title>

	<!-- Google Fonts -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700|Lato:400,100,300,700,900' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="css/animate.css">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->

	<!-- Custom Stylesheet -->
	<!-- <link rel="stylesheet" href="css/style.css"> -->
	<!-- Jquery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<!-- angular -->
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular-cookies.js"></script>	
	<script src="js/main.angular.js"></script>

	<style>
	body,
	html {
  	margin: 0;
	}

.img-container {

  background-image: url('./images/football-background-image.jpeg');
  position: absolute;
  height: 100%;
  width: 100%;
  -webkit-filter: blur(70px);
  -o-filter: blur(70px);
  filter: blur(70px);
  filter: progid: DXImageTransform.Microsoft.Blur(PixelRadius='70');
  background-size: cover;
}

.content-container {
  width: 100%;
  height: 662px;
  position: relative;
  overflow: hidden;
  -webkit-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
}

.blur {
  /* All the background image supports */
  background-image: -webkit-linear-gradient(bottom left, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 45%, rgba(69, 77, 91, 0.6) 60%);
  background-image: -moz-linear-gradient(bottom left, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 45%, rgba(69, 77, 91, 0.6) 60%);
  background-image: -o-linear-gradient(bottom left, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 45%, rgba(69, 77, 91, 0.6) 60%);
  background-image: linear-gradient(to top right, rgba(43, 40, 50, 0.8) 0%, rgba(83, 86, 99, 0.8) 45%, rgba(69, 77, 91, 0.6) 60%);
  position: absolute;
  width: 100%;
  height: 100%;
  -webkit-filter: blur(50px);
  -o-filter: blur(50px);
  filter: blur(50px);
  filter: progid: DXImageTransform.Microsoft.Blur(PixelRadius='70');
  top: -70px;
  right: -70px;
  left: -70px;
  padding: 70px;
}

.blur:after {
  content: '';
  position: absolute;
  height: 100%;
  width: 100%;
  z-index: 1001;
  background-image: -webkit-linear-gradient(339deg, rgba(43, 40, 50, 0.8) 0%, rgba(43, 40, 50, 0.4) 46%, rgba(0, 0, 0, 0.05) 50%);
  background-image: -moz-linear-gradient(339deg, rgba(43, 40, 50, 0.8) 0%, rgba(43, 40, 50, 0.4) 46%, rgba(0, 0, 0, 0.05) 50%);
  background-image: -o-linear-gradient(339deg, rgba(43, 40, 50, 0.8) 0%, rgba(43, 40, 50, 0.4) 46%, rgba(0, 0, 0, 0.05) 50%);
  background-image: linear-gradient(339deg, rgba(43, 40, 50, 0.8) 0%, rgba(43, 40, 50, 0.4) 46%, rgba(0, 0, 0, 0.05) 50%);
  -webkit-filter: blur(70px);
  -o-filter: blur(70px);
  filter: progid: DXImageTransform.Microsoft.Blur(PixelRadius='70');
  filter: blur(70px);
}
</style>


</head>

<div class="content-container">
  <div class="img-container"></div>
  <div class="blur"></div>
	<div class="row">
		<div class="col-md-12" style="margin-bottom: 50px;">
			<div align="center" class="titie">
				<h3 style="font-size:42px;color:#1ABC9C;text-shadow:1px 1px 1px #000;"> <font
				 face="Lucida Console">COACH GADGETS</h3>
				<div id="userlog">({{test}})</div>

			</div>
			
		</div>
		<div class="row" align="center">
			<div class="col-md-12" >
				<div class="col-md-6" >
 					<div class="border-menu" ng-click="coach()" id="coach">COACH</div>
					<div class="border-menu" ng-click="academy()">ACADEMY</div>
					<div class="border-menu">FIND PLAYER</div>
				</div>
				<div class="col-md-6" >
					<div class="border-menu">SCHEDULE</div>
					<div class="border-menu" ng-click="BALANCE()">TEAM BALANCE</div>
					<div class="border-menu">TEAM RESULTS</div>
					<!-- <div class="border-menu"  id="coach">COACH</div> -->
					
				</div>
			</div>
		</div>
		<!-- <div class="row" align="center">
			<div class="col-md-12">
				<div class="border-menu">FIND PLAYER</div>
			</div>
		</div> -->
	</div>
	
		
	</div>
</body>


<style>
.title{
	    margin-top: 100px;

}
	.title h3{
		color: white;
		font-size: 20px;
		font-weight: 500;

	}
	#userlog{
		color: #52BE80;
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
</style>
<script>
	$(document).ready(function(){
  //   $("#coach").click(function(){
  //      //alert('aaaaa')
  //      console.log('in case')
  //      $.ajax({
		//    type: "POST",
		//    dataType: "json",
		//    contentType: "application/json; charset=utf-8",
		//    url:  './php/getdetailcoach.php',
		//    //data: '{ foo: \'' + bar + '\', zoo: \'' + calibri + '\'}',
		//    success: function(msg){
		//        console.log(msg)
		//    },
		// });
  //   });
});
</script>
</html>