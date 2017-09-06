<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Case</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
  <style type="text/css">
  	 .form-control {
  	 	width: 50%;
  	 }
  	 .signup-form {
  	 	margin-left: 10%;
  	 }

  	 .bg-image {
		  background-image: url('http://www.tutorialboneyard.com/wp-content/uploads/2015/07/back1.png');
		  background-repeat: repeat;
		  background-position: top left;
		  background-attachment: fixed;
 		}

 		#wrapper { 		 
 		  position: relative;
		  max-width: 960px;
		  margin: 0 auto;
		  box-shadow: 0 0 18px rgba(0, 0, 0, .4);
		  background: #f8f8f8;
		  overflow: hidden;
 		}
 		.btn.signup {
 			margin-bottom: 10%!important;
 		}
    .navbar-inverse {
      background-color: #f8f8f8;
      border: none;
      color: black;
    }
    h3, span.pull-right{
      color: teal;
    }
    input:focus {
      background-color: azure;
      color: black;
      font-size: 12pt;
    }
  </style>
</head>
<body class="bg-image">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a href="#"><img  src="need2.png" width="65%" height="50px"></img></a>
    </div>
    <div>
      <h3>Personal Movie Data Base Sign up Form <span class="pull-right">Laxman@lucky</span></h3>      
    </div>
  </div>
</nav>
<div id="wrapper">
 <div class="container">
    <div class="row">
    	 
    	 <form role="form" class="signup-form" method="post" action="process.php" enctype="multipart/form-data">
    	 <h3> Please Create Your Account Here</h3>
    	 	  <div class="form-group">
                <label  for="Full Name">Full Name</label>               
                <input type="text" name="fullname" class="form-control" autofocus pattern="^[a-zA-Z]+[a-zA-Z ]*" required>                    
	          </div>
              <div class="form-group ">
                <label  for="Email">Email Address</label>
                <input type="email" name="email" class="form-control" autofocus required>          
              </div>
              <div class="form-group">
                <label  for="Username">Username</label>               
                <input type="text" name="username" class="form-control"  >                    
	          </div>
            <div class="form-group">
                <label  for="Username">Choose Password</label>               
                <input type="password" name="password" class="form-control" required placeholder="password Must conatin 8 letters">                    
            </div>
	          <div class="form-group">
                <label  for="Mobile Number">Mobile Number</label>               
                <input type="text" name="mobile" class="form-control" required pattern="^[7-9][0-9]{9}" oninvalid="setCustomValidity('Only 10Digits and Must start with 7/8/9')"
    onchange="try{setCustomValidity('')}catch(e){}">                    
	          </div>
	          <div class="form-group">
                <label  for="City">City</label>               
                <input type="text" name="city" class="form-control" id="autoc" required>                    
	          </div>
	          <div class="form-group">
                <label  for="State">Favourite Actor</label>               
                <input type="text" name="favhero" class="form-control" required id="cric">                    
	          </div>
	          <div class="form-group">
                <label  for="profile pic">Profile Picture</label>               
                <input type="file" name="pic" class="form-control" required  accept="image/*">                    
	          </div>
	          <div class="checkbox">
			      <label><input type="checkbox" required>I Agreed To The <a href="#">Terms&Conditions</a></label>
			  </div>
	            <div>
	                <input type="submit" class="btn btn-primary signup" value="Create My Account" name="submit">
	            </div>
    	 </form>
    </div> 	
 </div></div>

<script type="text/javascript">
 $(document).ready(function() {
  $("#autoc").autocomplete({
     source: "autocity.php" 
  });

    var cricketes = [
        'Chiranjeevi',
        'Pawwan Kalyan',
        'Mahesh Babu',
        'Ram Charan Tej',
        'Allu Arjun',
        'Prabhas',
        'Jr Ntr',
        'Bala Krishna'
    ];
    $("#cric").autocomplete({
      source: cricketes
  })
})
</script>
   
