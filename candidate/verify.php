
<html>  
<head>
    <title>BallotBoost</title>
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/regestration.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        input::-webkit-outer-spin-button,input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>
<body style="background-image: url(../logo/bgimg.png);background-repeat: no-repeat;background-position: center;">

<div class="content" style="height: 50%;margin-top: 13%; margin-left: 38%;  margin-bottom: 13%;">
    <div class="form_candidate" style="background-color: #fca311; width: 364px; height: 213px;">
        <h4 class="head-candidate" style="padding: 6% 10% 0 25%; font-family: 'Times New Roman', Times, serif; font-size: 20px;">Candidate Verification</h4>
        <div class="alert alert-primary" role="alert"> 
            <?php 
                if(isset($_REQUEST['msg']))
                    echo $_REQUEST['msg'];
            ?>
        </div>
        <div class="form-bg" style="background-color: rgba(32, 32, 32, 0.8); height: 88px; padding:5% ; color: #e5e5e5;">
            <form action="candidate_login.php" method="post">
                <div class="otp_div">
                    <input type="number" name="veriotp" id="email" placeholder="5 Digit OTP" class="email-input" style="width: 80%; border-radius: none; font-size: larger;">  
                </div>
                <button type="submit" class="btn btn-success" style="margin: 10% 0 0 0; color: #e5e5e5; background-color: #202020;">Verify OTP</button>
            </form>
        </div>
    </div>
</div>
    
</body>
</html>