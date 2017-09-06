<?php
include "header.php";

session_start();
$code = $_POST['otp'];
 $nanan = $_SESSION['username'];
$con = mysqli_connect("localhost", "laxman", "Infi@1234", "laxman");
$sql = "select * from users where Uname='$nanan'";
$res = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($res);

if ($row['code'] == $code) {
	header("location:quiz2.php");
} else {
	echo "<div class='error'>Please Enter A Valid OTP that has been Sent to Email Address</div>";
	 echo "<p class='successs'> You will be redircted in <span id='counter'>5</span> second(s)";
}

?>

<script type="text/javascript">
        function countdown() {
            var i = document.getElementById('counter');
            if (parseInt(i.innerHTML)<=0) {
                location.href = 'login1.php';
            }
            i.innerHTML = parseInt(i.innerHTML)-1;
        }
        setInterval(function(){ countdown(); },1000);
        </script>