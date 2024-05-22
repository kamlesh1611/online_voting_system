<!DOCTYPE html>
<html>  
<head>
    <title>BallotBoost | Candidate</title>
    <link rel="shortcut icon" href="../images/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/regestration.css">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
</head>
<body style="background-image: url(../logo/bgimg.png);background-repeat: no-repeat;background-position: center;">

<div class="closebtn">
	<a href="../index.php" class="goback" style="margin: 0 0 0 95%; font-size: 40px; color: red; font-weight:bolder; font-family:Arial, Helvetica, sans-serif; text-decoration: none;">X</a>
</div>

<div class="content" style="height: 50%;margin-top: 13%; margin-left: 38%;  margin-bottom: 20%;">
    <div class="form_candidate" style="background-color: #fca311; width: 364px; height: 213px;">
        <h4 class="head-candidate" style="padding: 10% 10% 0 25%; font-family: 'Times New Roman', Times, serif; font-size: 20px;">Candidate Portal</h4>
        <div class="alert alert-primary" role="alert"> 
            <?php 
                if(isset($_REQUEST['msg']))
                    echo $_REQUEST['msg'];
            ?>
        </div>
        <div class="form-bg" style="background-color: rgba(32, 32, 32, 0.8); height: 91px; padding:5% ; color: #e5e5e5;">
            <form action="send_otp" method="post">
                <div class="email_div">
                    <input type="email" name="email" id="email" placeholder="Candidate Register ID" class="email-input" style="width: 80%; border-radius: none; font-size: larger;">  
                </div>
                <button type="submit" class="btn btn-success" style="margin: 10% 0 0 0; color: #e5e5e5; background-color: #202020;">Send OTP</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>