<?php include "header.php"; 
  if (isset($_POST['submit'])) {
    $email = $_POST['uname'];
    session_start();

    $con = mysqli_connect("localhost", "laxman", "Infi@1234", "laxman");
     $sql = "select  *  from users where Uname='$email' or Email='$email'";

    $res = mysqli_query($con, $sql);
    if (mysqli_num_rows($res) > 0) {
      header("location:newpass.php");
    } else {
      echo "<div class='error'>We Didn't Find Any Account With this Email/Username... So Please Register</div>";
    }

    $_SESSION['unemail'] = $email;
    

  }
    
  ?>

<body>
  <div class="container">
       <div class="row">
           <form role="form" action="resetpass.php" method="post">
         <div class="form-group">
             <label>Enter Email or Username Of Your Account</label>
             <input type="text" name="uname" class="form-control" placeholder="Enter EMail or Username">
         </div>
         <input type="submit" class="btn btn-primary" name="submit">
    </form>  
       </div>
  </div>
 
    
</body>