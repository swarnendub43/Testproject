<?php
    require_once "google_config.php";
    $loginURL = $gClient->createAuthUrl();
?>
<html>
	<head>
            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen">
            <link rel="stylesheet" type="text/css" href="css/login.css" media="screen">
            <script src="js/jquery-1.11.1.min.js"></script>
            <script src="js/bootstrap.js"></script>
		<title>Login</title>
		
	</head>
	<body>
		<div class="auth-wrapper">
			<div class="auth-header">
                
			</div>
                    <form action="login_action.php" method="post">
			<div class="container">
    

    <div class="omb_login">
    	<h3 class="omb_authTitle">Login or <a href="#">Sign up</a></h3>
		<div class="row omb_row-sm-offset-3 omb_socialButtons">
    	    
        	<div class="col-xs-4 col-sm-2">
		        <a href="#" class="btn btn-lg btn-block omb_btn-google" onclick="window.location = '<?php echo $loginURL ?>';">
			        <i class="fa fa-google-plus visible-xs"></i>
			        <span class="hidden-xs">Google+</span>
		        </a>
	        </div>	
		</div>

		<div class="row omb_row-sm-offset-3 omb_loginOr">
			<div class="col-xs-12 col-sm-6">
				<hr class="omb_hrOr">
				<span class="omb_spanOr">or</span>
			</div>
		</div>

		<div class="row omb_row-sm-offset-3">
                    <div class="col-xs-12 col-sm-6">	
                    <form class="omb_loginForm" action="" autocomplete="off" method="POST">
			<div class="input-group">
			<span class="input-group-addon"><i class="fa fa-user"></i></span>
			<input type="text" class="form-control" name="email" placeholder="email address">
			</div>
                    <span class="help-block"></span>
										
                    <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                    <input  type="password" class="form-control" name="pass" placeholder="Password">
                    </div>
                

                    <button class="btn btn-lg btn-primary btn-block" type="submit" name="submit">Login</button>
                    </form>
		</div>
    	</div>
		<div class="row omb_row-sm-offset-3">
			<div class="col-xs-12 col-sm-3">
				<label class="checkbox">
					<input type="checkbox" value="remember-me">Remember Me
				</label>
			</div>
			<div class="col-xs-12 col-sm-3">
				<p class="omb_forgotPwd">
					<a href="#">Forgot password?</a>
				</p>
			</div>
		</div>	    	
	</div>
          </form>
		</div>
	</body>
</html>