<!DOCTYPE HTML>
<html>
	<head>
		<!-- Character Set Declaration -->
		<meta charset="utf-8">

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
		<?php
			session_start();
			if($_SESSION['user']){ //checks if user is logged in
			}
			else{
				header("location:index.php"); // redirects if user is not logged in
			}
		?>
		<h2>Home Page</h2>
		<p>Hello <?php Print "$user"?>!</p> <!--Displays user's name-->
		<a href="logout.php">Click here to logout</a><br/><br/>
		<form action="add.php" method="POST">
			Add an assignment: <input type="text" name="task"/><br/>
			<input type="submit" value="Add to list"/>
		</form>
		<h2 align="center">My list</h2>
		<table border="1px" width="100%">
			<tr>
				<th>Id</th>
				<th>Details</th>
				<th>Post Time</th>
				<th>Edit Time</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
		</table>
		<?php
		include 'resources/non-logged-in/htmlextras/footer.html';
		?>
	</body>
</html>
