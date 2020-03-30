<?php
session_start();
include("dbconnection.php");
if(isset($_SESSION[customerid]))
{
	header("Location: cusdashboard.php");
}
$result = mysql_query("SELECT * FROM customers
	WHERE loginid='$_POST[login]' AND accpassword='$_POST[password]'");
if(mysql_num_rows($result) == 1)
	{
		while($recarr = mysql_fetch_array($result))
		{
			
		$_SESSION[customerid] = 	$recarr[customerid];
		$_SESSION[ifsccode] = 	$recarr[ifsccode];
		$_SESSION[customername] = 	$recarr[firstname]. " ". $recarr[lastname];
		$_SESSION[loginid] = 	$recarr[loginid];
		$_SESSION[accstatus] = 	$recarr[accstatus];
		$_SESSION[accopendate] = 	$recarr[accopendate];
		$_SESSION[lastlogin] = 	$recarr[lastlogin];		
		}
		$_SESSION["loginid"] =$_POST["login"];
		header("Location: cusdashboard.php");
	}
	else
	{
		$logininfo = "Invalid Username or password entered";
	}	
?>
<!DOCTYPE html>
<!--[if lte IE 9]><html class="no-js is-ie"><![endif]-->
<!--[if gt IE 8]><!--><html class=no-js><!--<![endif]-->
<head>
<meta charset="utf-8">
	<meta name="description" content="BlackTie Free Bootstrap Theme">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	

	<title>BASCOD E-BANKING SYSTEM</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel=stylesheet href="index/css/main.css">
	<!--[if lte IE 8]>
	<link rel=stylesheet href="css/ie.css">
	<![endif]-->
		<script src="index/js/vendor/modernizr.js"></script>

		<script src="index/js/vendor/respond.min.js"></script>

</head>
<body>
	<div class="level level-hero hero-home has-hint">
		

		<div class="hero-overlay visible-lg"></div>

		<video loop id=bg-video class=fullscreen-video>
			<source src="http://alvarez.is/bt/appi.webm" type="video/webm">
			<source src="http://alvarez.is/bt/appi.mp4" type="video/mp4">

		</video>

		<div class="container full-height">
			<div class=v-align-parent>
				<div class=v-center>
					<div class="row">
						<div class="col-xs-10 col-sm-6">
							<h1 class="mb-10 heading">WELCOME TO <span>BASCOD E-BANKING</span></h1>
                            <p><h3>DISCLAIMER</h3></p>
							<div class="subheading mb-20">We shall not be responsible for wrong transactions and wanton disclosure of details by you. <br class=hidden-xs>Viewing option and transaction option on the net are different. You may exercise your option diligently. </div>
						</div>
					</div>
					<div>
						<a class="btn btn-prepend" href="login.php">
							<i class="fa fa-users"></i>    CUSTOMER LOGIN
						</a>
					</div>
				</div>
			</div>

			<div class=hint-arrow></div>
		</div>
	</div>
	<div class="footer text-center">
	<p class="fmenu">
		<a href="emplogin.php">STAFF LOGIN</a> | <a href="about.html">CONTACT US</a>
	</p>

	</div>	

	
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.1.min.js"><\/script>')</script>

	<script src="index/js/bootstrap.min.js"></script>
	<script src="index/js/dropdown.js"></script>
	<script src="index/js/modal.js"></script>
	<script src="index/js/main.js"></script>
	<!-- //-end- concat_js -->


	

</body>
</html>
