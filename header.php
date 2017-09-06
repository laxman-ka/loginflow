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
   .navbar-primary{
      background-color: aquamarine;
      color: black
    }
    .navbar-nav{
      margin-left: 16%;
    }

    .navbar {
      min-height: 20px!important;
      height: 50px!important;
    }

    .navbar-nav>li>a:hover{
      background-color: transparent;
    } 
    .navbar-nav>li>a {
      background-color: transparent;
    }
    ul li a{
      color: black!important;
    }
    .scrolldo {
      position: relative;
      margin-top: -20px;
      float: right;
      left: 40px     
    }

    .reset-pass {
      margin-left: 30%;
     }

     .reset-pass .form-control {
      width: 40%!important;
     }
    .error {
      text-align: center;
      color: red;
      font-size: 13pt;
      position: top;
    }
    .successs {
      text-align: center;
      color: blue;
      font-size: 13pt;
      position: top;
      margin-bottom: 18px!important;
    }
    .list-group-item {
     background-color: deepskyblue!important;
     color: white;
     font-weight: 200;
    }
    
    input:focus {
      background-color: azure;
      color: black;
      font-size: 12pt;
    }
    input[type="text"] {
      font-size: 12pt;
    }
    p {
      text-align: center;
    }
    .form-control {
      width: 50%;
    }
    .btn-group-sm>.btn, .btn-sm {
  padding: 8px 10px;
  font-size: 12px;
  line-height: 1.5;
  margin: -17px 0px 0px 110px;
  border-radius: 3px;
}
    </style>
    <script type="text/javascript">
    $(document).ready(function() {
      $(".img-circle").click(function() {
        $(".scrolldo").slideDown().css("display", "block").css("position", "relative");        
        })
      $(".scrolldo").mouseleave(function() {
          $(".scrolldo").slideUp();
      })
    })
    </script>
</head>
<body>
<nav class="navbar navbar-primary">
  <div class="container-fluid">
    <div class="navbar-header">
    <img src="http://www.gravatar.com/avatar/7897279c94bdca0046fef455b72a82cf" height="35px" width="45px" class="img-circle">
      <a class="navbar-brand" href="#" style="color:black;font-family:saans">Lakshmi Narayana@Admin</a>      
    </div>
    <div>
      <ul class="nav navbar-nav">
        <li class="active"><a href="listing.php">Home</a></li>
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Page 1-1</a></li>
            <li><a href="#">Page 1-2</a></li>
            <li><a href="#">Page 1-3</a></li>
          </ul>
        </li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><img src="http://www.gravatar.com/avatar/7897279c94bdca0046fef455b72a82cf" height="35px" width="45px" class="img-circle"></a></li>
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a  href="#" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Please Login Here</h4>
        </div>
        <div class="modal-body">
          <form method="post" action='login.php' name="loginForm" role="form">
        <div class="form-group">
           <label>Username or Email</label>
           <input type="text" class="form-control" name="username" id="email" placeholder="Enter Email" required>
        </div>
        <div class="form-group">
           <label>Password</label>
           <input type="password" class="form-control" name="password" id="email" placeholder="Enter password" required>
        </div>
        <button type="submit" class="btn btn-success">Sign in</button><a href="resetpass.php" class="pull-right">Forgot Password</a></p>
      </form>
        </div>
        <div class="modal-footer">
          <p class="text-left"> Don't Have Account <a href="signup.php">Sign Up</a></p>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
      </ul>
    </div>
  </div>
</nav>
<a onclick=" window.history.go(-1);"><span class="glyphicon glyphicon-arrow-left" style="font-size:3em;cursor:pointer"></span></a>
<div class="scrolldo" style="display:none;width:20%;z-index:10">
        <ul class="list-group">
          <li class="list-group-item">Lakshmi Narayana</li>
          <li class="list-group-item">Php Developer</li>    
          <li class="list-group-item">@Solutions Infini</li>    
          <li class="list-group-item">Bangalore</li>
        </ul>
      </div>
</body>
<!-- <div class="col-lg-3">
  <a href="mailto:laxman46.k@gmail.com?body=Hiiii">Mail Me</a>

</div>
<div class="col-lg-9">
  
<script type="text/javascript">
function swap(oField1, oField2){
  var temp = oField1.value;
  oField1.value = oField2.value;
  oField2.value = temp;
}

$(document).ready(function() {
  $(".cii").autocomplete({
     source: "autocity.php" 
  })
})
</script>

<form name="capsform" role="form" class="form-horizontal" style="float:right">
<div class="form-group">
<label class="control-label col-lg-2">From</label>
<div class="col-lg-10">
<input type="text" name="caps1" size="40" value="" onchange="this.value=this.value.toUpperCase();"  class="form-control cii" /></div>
</div><center><button type="button" onclick="swap(this.form.caps1, this.form.caps2)" class="btn btn-sm"/><span class="glyphicon glyphicon-sort"></span></button></center>

<div class="form-group">
<label class="control-label col-lg-2">To</label>
<div class="col-lg-10">
<input type="text" name="caps2" size="40" value="" onchange="this.value=this.value.toUpperCase();" class="form-control cii"/></div></div>
</form></div>
</body>
</html>

</html> -->
