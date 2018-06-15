<!DOCTYPE HTML>
<html lang='en'>
	<head>
		<!-- Character Set Declaration -->
		<meta charset="UTF-8">

		<!-- Search Engine Optimization -->
		<meta name="description" content="HW Diary Pro is an Advanced Homework Organization and Focus Web App.">

		<!-- Favicons -->
		<link rel="apple-touch-icon" sizes="57x57" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/apple-icon-57x57.png">
		<link rel="apple-touch-icon" sizes="60x60" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/apple-icon-60x60.png">
		<link rel="apple-touch-icon" sizes="72x72" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/apple-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="76x76" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/apple-icon-76x76.png">
		<link rel="apple-touch-icon" sizes="114x114" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/apple-icon-114x114.png">
		<link rel="apple-touch-icon" sizes="120x120" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/apple-icon-120x120.png">
		<link rel="apple-touch-icon" sizes="144x144" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/apple-icon-144x144.png">
		<link rel="apple-touch-icon" sizes="152x152" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/apple-icon-152x152.png">
		<link rel="apple-touch-icon" sizes="180x180" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/apple-icon-180x180.png">
		<link rel="icon" type="image/png" sizes="192x192"  href="/HW-Diary-Pro/resources/img/logos/favicon.ico/android-icon-192x192.png">
		<link rel="icon" type="image/png" sizes="32x32" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/favicon-32x32.png">
		<link rel="icon" type="image/png" sizes="96x96" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/favicon-96x96.png">
		<link rel="icon" type="image/png" sizes="16x16" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/favicon-16x16.png">
		<link rel="manifest" href="/HW-Diary-Pro/resources/img/logos/favicon.ico/manifest.json">
		<meta name="msapplication-TileColor" content="#ffffff">
		<meta name="msapplication-TileImage" content="/HW-Diary-Pro/resources//img/logos/favicon.ico/ms-icon-144x144.png">
		<meta name="theme-color" content="#ffffff">

		<!-- CSS Vendors -->
		<link href="../../vendors/js/jquery/square/orange.css" rel="stylesheet">

		<!-- CSS Resources -->
		<link rel="stylesheet" type="text/css" href="../../resources/logged-in/css/main.css">
		<link rel="stylesheet" type="text/css" href="../../resources/logged-in/css/tasksstyle.css">

		<!-- JS Vendors -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="../../vendors/js/jquery/jquery.waypoints.min.js"></script>
		<script src="../../vendors/js/jquery/icheck.js"></script>
		<script type="text/javascript" src="../../vendors/js/jquery/noty/js/noty/packaged/jquery.noty.packaged.min.js"></script>

		<!-- JS Resources-->
		<script src='../../resources/logged-in/js/omegaCode.js'></script>
		<script src='../../resources/logged-in/js/animations.js'></script>

	  <!-- Fonts Vendors -->
		<link href="https://fonts.googleapis.com/css?family=Overpass:200,200i,300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

		<!-- Title Tag -->
    <script language="javascript" type="text/javascript">
    	createTitle('Today\'s Tasks');
	  </script>
	</head>

	<body>
		<div class="container">
			<section class='home-section'>
				<!-- Top Nav -->
				<?php
				include '../../resources/logged-in/htmlextras/nav.html';
				?>
				<script>$('nav').removeClass('regular-nav');$('nav').addClass('fixed-nav');$('nav').css("position","relative");</script>

				<!-- Top Section -->
			</section>
		</div>

		<!-- Footer -->
		<?php
		include '../../resources/non-logged-in/htmlextras/footer.html';
		?>

	</body>

</html>
