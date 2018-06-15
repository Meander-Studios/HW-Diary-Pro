<!DOCTYPE HTML>
<html lang='en'>
	<head>
		<!-- Character Set Declaration -->
		<meta charset="UTF-8">

		<!-- Search Engine Optimization -->
		<meta name="description" content="HW Diary Pro is an Advanced Homework Organization and Focus Web App.">

		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="resources/img/logos/favicon.ico/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="resources/img/logos/favicon.ico/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="resources/img/logos/favicon.ico/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="resources/img/logos/favicon.ico/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="resources/img/logos/favicon.ico/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="resources/img/logos/favicon.ico/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="resources/img/logos/favicon.ico/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="resources/img/logos/favicon.ico/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="resources/img/logos/favicon.ico/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="resources/img/logos/favicon.ico/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="resources/img/logos/favicon.ico/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="resources/img/logos/favicon.ico/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="resources/img/logos/favicon.ico/favicon-16x16.png">
		<link rel="manifest" href="resources/img/logos/favicon.ico/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="resources/img/logos/favicon.ico/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- CSS Vendors -->
		<link href="vendors/js/jquery/square/orange.css" rel="stylesheet">

		<!-- CSS Resources -->
		<link rel="stylesheet" type="text/css" href="resources/non-logged-in/css/main.css">
		<link rel="stylesheet" type="text/css" href="resources/non-logged-in/css/homestyle.css">
		<link rel="stylesheet" type="text/css" href="resources/non-logged-in/css/loginstyle.css">
		<link rel="stylesheet" type="text/css" href="resources/non-logged-in/css/signupstyle.css">

		<!-- JS Vendors -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="vendors/js/jquery/jquery.waypoints.min.js"></script>
		<script src="vendors/js/jquery/icheck.js"></script>
		<script type="text/javascript" src="vendors/js/jquery/noty/js/noty/packaged/jquery.noty.packaged.min.js"></script>

		<!-- JS Resources-->
		<script src='resources/non-logged-in/js/omegaCode.js'></script>
		<script src='resources/non-logged-in/js/animations.js'></script>

	  <!-- Fonts Vendors -->
		<link href="https://fonts.googleapis.com/css?family=Overpass:200,200i,300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

		<!-- Title Tag -->
    <script language="javascript" type="text/javascript">
    	createTitle('Home');
	  </script>
	</head>

	<body>
		<div class="container">
			<section class='home-section'>
				<!-- Top Nav -->
				<?php
				include 'resources/non-logged-in/htmlextras/nav.html';
				?>

				<!-- Top Section -->
				<h1>Your Homework Finally Organized.<br>With HW Diary Pro.</h1>
				<a class='button-signup js-goto-signup-2'>Sign Up</a>
				<a class='button-login js-goto-login-2'>Login</a>
			</section>
			<section class='who-section'>

			</section>
			<section id='signup' class='signup-section'>
			    <!-- Signup Form -->
				<div class="center-section">
				<h1>Sign Up:</h1><br>
				<form action="register.php" method="POST" name="signup" id='signup-form'>
					<h2>Email Address:&nbsp;<input type="text" name="email" required="required"></h2>
					<br>
					<h2>Username:&nbsp;<input type="text" name="username" required="required"></h2>
					<br>
					<h2>Password:&nbsp;<input type="password" name="password" required="required"></h2>
					<br>
					<h2>First Name:&nbsp;<input type="text" name="first_name" required="required"></h2>
					<br>
					<h2>Current Time:&nbsp;<input type="text" name="time-zone" required="required"></h2>
					<br>
					<h2>Last Name:&nbsp;<input type="text" name="last_name" required="required"></h2>
					<input type="submit" value="Sign Up" class='button'>
				</form>
				<h3>Already Have An Account? <a class='underline-link js-goto-login-3'>Login Here</a>!</h3>
				</div>
			</section>
			<section class='contact-section'>

			</section>
			<section id='login' class='login-section'>
			    <!-- Login Form -->
				<h1>Login</h1><br>
				<form action="verifylogin.php" method="POST" name="login" id="login-form">
					<h2>Enter Username: <input type="text" name="username" require ="required"></h2><br>
					<h2>Enter Password: <input type="password" name="password" required="required"></h2><br>
					<input type="submit" value="Login" class='button'>
				</form>
				<h3>Don't Have An Account? <a class='underline-link js-goto-signup-3'>Create One Here</a>!</h3>
			</section>
		</div>

		<!-- Footer -->
		<?php
		include 'resources/non-logged-in/htmlextras/footer.html';
		?>

	</body>

</html>
