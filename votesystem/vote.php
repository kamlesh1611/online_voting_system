<?php
  	session_start();
  	if(isset($_SESSION['admin'])){
    	header('location: admin/home.php');
  	}

    if(isset($_SESSION['voter'])){
      header('location: home.php');
    }
?>
<?php include 'includes/header.php'; ?>

<body class="hold-transition login-page" style="height: auto;background-image: url(./logo/bgimg.png);min-height: 100%;background-repeat: no-repeat;background-position: center; "> 

<div class="closebtn">
	<a href="./index.php" class="goback" style="margin: 0 0 0 95%; font-size: 40px; color: red; font-weight:bolder;">X</a>
</div>

<div class="login-box" style="background-color: #fca311;color:white ; font-size: 22px; font-family:Times;">
  	<div class="login-logo" style="color:#202020; ; font-size: 22px; font-family:Georgia, 'Times New Roman', Times, serif; padding: 5px 5px 3px 5px; ">
  		<b> Online Voting System</b>
  	</div>
  
  	<div class="login-box-body" style="background-color: rgba(32, 32, 32, 0.8)  ;color:white ; font-size: 22px; font-family:Times;" >
    	<p class="login-box-msg" style="color:#fca311; font-weight:900; font-size: 16px; font-family:Times">Sign in to start your voting session</p>

    	<form action="login.php" method="POST">
      		<div class="form-group has-feedback">
        		<input type="text" class="form-control" name="voter" placeholder="Voter's ID" required>
        		<span class="glyphicon glyphicon-user form-control-feedback"></span>
      		</div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
      		<div class="row">
    			<div class="col-xs-4">
          			<button type="submit" class="btn btn-primary btn-block btn-curve" style="background-color: #202020 ;color: #fca311 ; font-size: 12px; font-family:Times" name="login"><i class="fa fa-sign-in"></i> Sign In</button>
        		</div>
      		</div>
    	</form>
  	</div>
  	<?php
  		if(isset($_SESSION['error'])){
  			echo "
  				<div class='callout callout-danger text-center mt20'>
			  		<p>".$_SESSION['error']."</p> 
			  	</div>
  			";
  			unset($_SESSION['error']);
  		}
  	?>
</div>
	
<?php include 'includes/scripts.php' ?>
</body>
</html>