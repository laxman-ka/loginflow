<?php

$uname = $_POST['username'];

//$_SESSION['username'];
$pass = $_POST['password'];
$con  = mysqli_connect('172.16.1.213', 'sankar', 'Infi@1234', 'laxman');
$sql  = "select  Password from users where Uname='$uname'";
$res  = mysqli_query($con, $sql);
$row  = mysqli_fetch_assoc($res);

if ($pass != $row['Password']) {
    echo "<p style='text-align: center;color: red;font-size: 13pt;position: top;'>Please Enter a Valid Password That Belongs To Your account And Login again<p>";
    header('refresh:5;url=login1.php');
} else {
    session_start();
    $_SESSION['username'] = $uname;

    $code = substr(rand(), 0, 4);
    $sql2 = "update users set code='$code' where Uname='$uname'";
    $res1 = mysqli_query($con, $sql2);
    if ($res1) {
        $to      = 'laxman46.k@gmail.com';
        $subject = 'This is subject';
        $message = "The OTP for ativating ur account is '$code'";
        $header  = "From:Laxman@lucky.com \r\n";
        $retval  = mail($to, $subject, $message, $header);
        if ($retval == true) {
            header('location:verify.php');
        }
    } else {
        echo mysqli_error($con);
    }
}
