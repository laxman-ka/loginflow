<?php include 'header.php';

if (isset($_POST['submit'])) {
    $name       = $_POST['fullname'];
    $email      = $_POST['email'];
    $uname      = $_POST['username'];
    $mobile     = $_POST['mobile'];
    $favhero    = $_POST['favhero'];
    $city       = $_POST['city'];
    $password   = $_POST['password'];
    $profilepic = $_FILES['pic']['name'];
    $created    = time();
    $target     = 'img/';

/*if(!move_uploaded_file($_FILES['pic']['tmp_name'], "$target"."laxman"."-".$profilepic)) {
        echo "<div class='error'>The files is not uploaded</div>";
}
*/
$con = mysqli_connect('172.16.1.213', 'sankar', 'Infi@1234', 'laxman');

    if (!$con) {
        die('connection failed:'.mysqli_connect_error());
    }

    $sql1 = "select * from users where Uname='$uname'";
    $sql2 = "select * from users where Email='$email'";

    $res1 = mysqli_query($con, $sql1);

    $res2 = mysqli_query($con, $sql2);

    if (mysqli_num_rows($res1)) {
        echo "<div class='error'>This Username is Already Registerd With us..pLease try another</div>";
    } elseif (mysqli_num_rows($res2)) {
        echo "<div class='error'>This Email is Already Registerd With us..pLease try another</div>";
    }

/* if (strlen($uname) != 8) {
    echo "<div class='error'> Username Must Contain 8 Characters</div>";
 } else if (!preg_match('/^[a-zA-Z][a-zA-Z0-9]{6,15}$/', $uname)) {
    echo "<div class='error'> Username Must Start With Letter and Contain Numbers and alphabets Only</div>";
 }
 die;*/

  $sql = "insert into users(Fname,Email,Uname,mobile,Password,favhero,imgname,Place,activated_at) values('$name', '$email', '$uname', '$mobile',
 	    '$password', '$favhero', '$profilepic', '$city', '$created')";
    $res = mysqli_query($con, $sql);

    if ($res) {
        echo "<div class='successs'> Your Accoun Has Been Successfully Created.. Please Login</div>";
        echo "<p class='successs'> You will be redircted in <span id='counter'>5</span> second(s)";
    /*header("refresh:5,login1.php");*/
    } else {
        echo "<div class='error'>Error:".mysqli_error($con).'</div>';
    }
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