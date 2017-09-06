<html>
	<head>
	  <title>Bootstrap Quiz</title>
      <link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script type="text/javascript" src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
      <style type="text/css">
      .list-group-item{
      	 font-size: 11pt;
      	}
      	ul li a:hover{
      		text-decoration: none;
      	}
      	.text-success {
      		font-weight: 400;
      	}
      	</style>
	</head>
	<body>
<!-- 		<iframe src="../biilng.html" scrolling="no">Laxman</iframe>
 -->		<h3 class="text-center">Bootstrap Quiz Tutorial</h3>
		<div class="container">
			<div class="col-lg-10">
				<div class="col-lg-10">
					<h4 > What is the Full Form of PHP ? </h4> <p class="hide text-success text-right">Correct</p>
					<ul class="list-group">
						<li class="list-group-item"><a href="#" value="1">Personal Home Page</a> </li>
						<li class="list-group-item"><a href="#" value="2">Personal Home Page</a></li>
						<li class="list-group-item"><a href="#" value="3">Personal Home Page</a></li>
						<li class="list-group-item"><a href="#" value="4">Personal Home Page</a></li>
					</ul>
				</div>	
			</div>
			<div class="col-lg-2">
				<div class="text-right">
					Name : <?php session_start();
					       echo $_SESSION['username']; ?>
				</div>
			</div>
		</div>
		<ul class="pager">
		  <li class="previous"><a href="#">Previous</a></li>
		  <li class="next"><a href="#">Next</a></li>
		</ul>
		<script type="text/javascript">
		$(document).ready(function() {
			$("a").click(function() {
				var laxmn = $(this).attr('value');
				if (laxmn == 3) {
					$(this).addClass('text-success');
					$("p").removeClass('hide');
					$(this).addClass("show");
				} else {
					$(this).addClass('text-danger');
					$(this).addClass("show").text("Wrong");
				}
			})
		})
		</script>
	</body>
</html>