<?php 
    session_start();
    include("../includes/conn.php");
    include("mailmain.php");
    $email = $_POST["email"];
    $sql = "select * from candidates where email='$email'";
    $rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if(mysqli_num_rows($rs)>0) {
        $_SESSION['email']=$email;
        $otp = rand(11111, 99999);
        send_otp($email, "PHP OTP LOGIN", $otp);
        $sql = "update candidates set cand_otp='$otp' where email='$email'";
        $rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
        header("location:verify.php?msg=OTP Send Success!");
    }
    else {
        header("location:registration.php?msg=Email id is Invalid....plz check Again!");
    }
?>