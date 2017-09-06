<!DOCTYPE HTML>
<html>
<head>
    <title>Dialstreet Theme</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css'>
    <link type="text/css" rel="stylesheet" href="styles.css?v=12221123" />
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
</head>
<body>
    <header>
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <div class="row">
                <div class="navbar-header">
                  <a class="navbar-brand" href="#"><img src="need2.png" class="img-brand" height="65px" width="100%"></a>
                </div>
                <div>
                  <ul class="nav navbar-nav main">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li class="menu-view"><a href="#">SMS</a></li>
                    <li><a href="#">Voice</a></li> 
                    <li><a href="#">Reports</a></li> 
                    <li><a href="calllogs.php">Logs</a></li>
                    <li><a href="#">Agents</a></li>
                    <li><a href="#">Phonebook</a></li>
                  </ul>
                </div>
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Account: globalinfini12345</a></li>
                <li><a href="#"><i class="fa fa-power-off text-right"></i> Logout</a></li>
             </ul>           
            </div>
          </div>
        </nav>
        <nav class="navbar navbar-default2">
            <div class="container-fluid">
            <div class="row">
                <div class="navbar-header" style="display:none">
                  <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-brand" height="50" width="100%"></a>
                </div>
                <div style="display:none" class="menu-display">
                  <ul class="nav navbar-nav main">
                    <li ><a href="sendsms.php">Send Sms</a></li>
                    <li><a href="outgoingsms.php">Outgoing Sms</a></li>
                    <li><a href="incomingsms.php">Incoming Sms</a></li> 
                    <li><a href="#">Manage Keywords</a></li> 
                    <li><a href="managesenderid.php">Manage SenderId</a></li>
                    <li><a href="#">Manage Txtly</a></li>
                  </ul>
                </div>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Balance: 123/-</a></li>
                <li><a href="#">Phone: 8867135684</a></li>
             </ul>
            </div>
            </div>
        </nav>
    </header>    
<script type="text/javascript">
$(document).ready(function() {
    $('input[name="intervaltype"]').click(function () {
        $(this).closest('label').tab('show');
        });

    $(".menu-view").hover(function() {
            $(".menu-display").css("display", "inline").css("position", "relative");           
    });
    
})
</script>