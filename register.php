<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
	<title>Register</title>
	<link rel="stylesheet" href="indexcss.css">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel= 'stylesheet' href="/font/css/font-awesome.min.css">
	<script src="jscode.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href="/font/css/font-awesome.css" rel="stylesheet">

    </head>
    <body>
	    <!-- REGISTRATION FORM -->
	    <div class="text-center centrar" style="padding:50px 0">
		    <div class="logo">register</div>
		    <!-- Main Form -->
		    <div class="login-form-1">
			    <form id="register-form" class="text-left">
				    <div class="login-form-main-message"></div>
				    <div class="main-login-form">
					    <div class="login-group">
						    <div class="form-group">
							    <label for="reg_username" class="sr-only">Username</label>
							    <input type="text" class="form-control" id="reg_username" name="reg_username" placeholder="username">
						    </div>
						    <div class="form-group">
							    <label for="reg_password" class="sr-only">Password</label>
							    <input type="password" class="form-control" id="reg_password" name="reg_password" placeholder="password">
						    </div>
						    <div class="form-group">
							    <label for="reg_password_confirm" class="sr-only">Password Confirm</label>
							    <input type="password" class="form-control" id="reg_password_confirm" name="reg_password_confirm" placeholder="confirm password">
						    </div>

						    <div class="form-group">
							    <label for="reg_email" class="sr-only">Email</label>
							    <input type="text" class="form-control" id="reg_email" name="reg_email" placeholder="email">
						    </div>
						    <div class="form-group">
							    <label for="reg_fullname" class="sr-only">Full Name</label>
							    <input type="text" class="form-control" id="reg_fullname" name="reg_fullname" placeholder="full name">
						    </div>

						    <div class="form-group login-group-checkbox">
							    <input type="radio" class="" name="reg_gender" id="male" value = "male">
							    <label for="male">male</label>

							    <input type="radio" class="" name="reg_gender" id="female" value = "female" >
							    <label for="female">female</label>
						    </div>

						    <div class="form-group login-group-checkbox">
							    <input type="checkbox" class="" id="reg_agree" name="reg_agree">
							    <label for="reg_agree">i agree with <a href="#">terms</a></label>
						    </div>
					    </div>
					<button type="submit" class="login-button" formmethod="post" formaction="registra.php"></button>
				    </div>
				    <div class="etc-login-form">
					    <p>already have an account? <a href="index.php">login here</a></p>
				    </div>
			    </form>
		    </div>
		    <!-- end:Main Form -->
	    </div>
    </body>
</html>
