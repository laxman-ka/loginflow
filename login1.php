<html>
<head>
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<script type="text/javascript" src="../js/jquery.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<style type="text/css">

		.container h3 {
			color: teal;
			margin-left: 8%!important;
			padding-bottom: 40px;
		}
		.bg-image {
		  background-image: url('http://www.intechnic.com/themes/theme_intechnic.com/img/b/bg-red.jpg');
		  background-repeat: repeat;
		  background-position: top left;
		  background-attachment: fixed;
 		}

 		#wrapper {
 		  position: relative;
		  max-width: 600px;
		  margin: 10% auto;
		  box-shadow: 0 0 18px rgba(0, 0, 0, .4);
		  background: azure;
		  overflow: hidden;
		  padding-left: 10px;
 		}
 		.btn.login {
 			margin-bottom: 7%!important;
 		}
 		.login-form {
 			margin-left:8%;
 		}
 		.form-control {
 			width: 30%!important;
 		}
 		input:focus {
      background-color: wheat;
      color: black;
      font-size: 12pt;
    }
    input[type="text"] {
      color: black;
      font-size: 12pt;
    }
	</style>
</head>
<body class="bg-image">
	<?php
    /*include "header.php"; */
?>
	<div id="wrapper">
	<div class="container">
		<h3 >Please Login To Your Account Below</h3>
		<form class="login-form" role="form" action="login.php" method="POST">
			<div class="form-group">
				<label for="Username">Username</label>
					<input type="text" name="username" class="form-control" required>
			</div>
			<div class="form-group ">
				<label  for="Password" required>Password</label>
					<input type="password" name="password" class="form-control">
			</div>
			<div>
		        <button type="submit" class="btn btn-primary login">Login Now</button>
			</div>
		</form>
	</div></div>
</body>