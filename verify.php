<html>
	<head>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script type="text/javascript" src="js/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
		<style type="text/css">
		h3{
			text-align: center;
			font-size: 13pt;
			margin-bottom: 5%;
		}
		label {
			font-size: 13pt;
		}
		.in-active {
			display: none;
			font-size: 10pt;
			text-align: center;
			color: darkblue
		}
		.form-control {
			width: 46%!important;
		}
		.col-sm-offset-3 {
		  margin-left: 30%!important;
		}
		</style>
	</head>
	<body>
		<?php include "header.php"; ?>
		<h3>Please Enter OTP That Has Been Sent To Email Address During Login <a href="#">Know More</a></h3>
		<div class="in-active">
			<p>OTP Is For Authentication Purpose Because Username and Password Sometimes So.. OTP Prevensts Unauthorised Access
		</div>
		<form role="form" action="forward.php" method="POST" class="form-horizontal">
			<div class="container">
				<div class="form-group">
					<label  class="control-label col-sm-3 " for="OTP">Verification Code</label>
					<div class="col-sm-6">
						<input type="text" class="form-control" name="otp" placeholder="Please Enter OTP " required pattern="[0-9]*" data-message="Please Enter Numbers only">
					</div>					
				</div> 
				<div class="form-group">
					<div class="col-sm-offset-3">
					<input type="submit" class="btn btn-primary " value="Verify And Go To Home">
					</div>
				</div>
			</div>
		</form>
		<script type="text/javascript">
		$("a").click(function() {
			$(".in-active").slideDown("slow").css("display", "inline").css('position', 'relative');
		})
		</script>
	</body>
</html>
