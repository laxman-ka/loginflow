<?php include "header.php";

session_start();
$email = $_SESSION['unemail'];

if (isset($_POST['submit'])) {
    $pass1 = $_POST['pass1'];
    $pass2 = $_POST['pass2'];

    if ($pass1 == $pass2) {
        $con = mysqli_connect("localhost", "laxman", "Infi@1234", "laxman");
         $sql = "update users set password='$pass1' where Uname='$email' or Email='$email'";

        $res = mysqli_query($con, $sql);

        if ($res) {
            echo "<div class='successs'>Your Password Has been Reset Successfully</div>";
            echo "<p class='successs'> You will be redircted in <span id='counter'>5</span> second(s)";
            session_destroy();
        } else {
            echo "<div class='error'>Error:".mysqli_error($con)."</div>";
        }
    } else {
        echo "<div class='error'>Your Passwords Did Not Match</div>";
    }
}



?>
<form  role="form" action="newpass.php" method="POST" class="reset-pass">
            <div class="form-group">
                <label  for="Username">New Password</label>               
                <input type="password" name="pass1" class="form-control" required>                    
            </div>
            <div class="form-group ">
                <label  for="Password" required>Reset Password</label>
                <input type="password" name="pass2" class="form-control" required>          
            </div>
            <div>
                <input type="submit" class="btn btn-primary" value="Reset password" name="submit">
            </div>
</form>    
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

