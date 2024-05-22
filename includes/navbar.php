
<header class="main-header" style="background-color: #202020">
  <nav class="navbar navbar-static-top" style="background-color: #202020 ">
    <div class="container" style="background-color: #202020 ">
      <div class="navbar-header" style="background-color:#717A83 ">
        <img src="../images/logo.jpg" alt="" srcset="">
        <a class="navbar-brand" style="background-color:#202020 ;color: #E5E5E5 ; font-size: 22px; font-family: 'Times new Roman', serif;font-weight:bold;">SmartPolling</a>
        <button type="button" class="navbar-toggle collapsed"style="background-color:#717A83 " data-toggle="collapse" data-target="#navbar-collapse">
          <i class="fa fa-bars"></i>
        </button>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
        <ul class="nav navbar-nav">
          <?php
            if(isset($_SESSION['student'])){
              echo "
                <li><a href='index.php'>HOME</a></li>
                <li><a href='transaction.php'>TRANSACTION</a></li>
              ";
            } 
          ?> 
        </ul>
      </div>
      <!-- /.navbar-collapse -->
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu"  >
        <ul class="nav navbar-nav"  >
          <li class="user user-menu" >
            <a href="">
              <!-- <img src="<?php echo (!empty($voter['photo'])) ? 'images/'.$voter['photo'] : 'images/profile.jpg' ?>" class="user-image" alt="User Image"> -->
              <span class="hidden-xs"  style="color: #FCA311 ; font-size: 22px; font-family:Times  "><?php echo $voter['firstname'].' '.$voter['lastname']; ?></span>
            </a>
          </li>
          <li><a href="logout.php"> LOGOUT </a></li>  
        </ul>
      </div>
      <!-- /.navbar-custom-menu -->
    </div>
    <!-- /.container-fluid -->
  </nav>
</header>