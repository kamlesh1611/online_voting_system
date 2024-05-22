<?php
    session_start();
    include("../includes/conn.php");
    $email = $_SESSION["email"];
    $otp = $_POST['veriotp'];
    $sql = "select * from candidates where email='$email' and cand_otp=$otp";
    $rs = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if(mysqli_num_rows($rs)>0) {
        header("location:candidate_page.php");
    }
    else {
        header("location:varify.php?msg=OTP is is Invalid....plz check Again!");
    }
?>