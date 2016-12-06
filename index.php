<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
	<title>Loggin</title>
	<link rel="stylesheet" href="indexcss.css">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<link rel= 'stylesheet' href="/font/css/font-awesome.min.css">
	<script src="jscode.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<link href="/font/css/font-awesome.css" rel="stylesheet">
    </head>

    <body>
	<!-- All the files that are required -->
        <!-- Where all the magic happens -->
	<!-- LOGIN FORM -->
	<div class="centrar" style="padding:50px 0">
		<div class="logo">login</div>
		<!-- Main Form -->
		<div class="login-form-1">
			<form id="login-form" class="text-left">
				<div class="login-form-main-message"></div>
				<div class="main-login-form">
					<div class="login-group">
						<div class="form-group">
							<label for="lg_username" class="sr-only">Username</label>
							<input type="text" class="form-control" id="lg_username" name="lg_username" placeholder="username">
						</div>
						<div class="form-group">
							<label for="lg_password" class="sr-only">Password</label>
							<input type="password" class="form-control" id="lg_password" name="lg_password" placeholder="password">
						</div>
						<div class="form-group login-group-checkbox">
							<input type="checkbox" id="lg_remember" name="lg_remember">
							<label for="lg_remember">remember</label>
						</div>
					</div>
				    <button type="submit" class="login-button" formmethod="post" formaction="login.php"><i class="fa fa-chevron-right"></i></button>
				</div>
				<div class="etc-login-form">
					<p>new user? <a href="http://localhost/~nicolas/loginphp/register.php">create new account</a></p>
				</div>
			</form>
		</div>
		<!-- end:Main Form -->
	</div>
    </body>
</html>





