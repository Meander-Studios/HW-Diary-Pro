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

    <!-- JS Vendors -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

		<!-- JS Resources-->
		<script src='/HW-Diary-Pro/resources/non-logged-in/js/omegaCode.js'></script>
		<script src='/HW-Diary-Pro/resources/non-logged-in/js/animations.js'></script>

	  <!-- Fonts Vendors -->
		<link href="https://fonts.googleapis.com/css?family=Overpass:200,200i,300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">

		<!-- Title Tag -->
    <script language="javascript" type="text/javascript">
    	createTitle('Home');
	  </script>

    <!-- CSS -->
    <style>
      * {
        font-family: "Overpass",'Lato',sans-serif;
        padding: 0px;
        margin: 0px;
        border: none;
      }
      html, body {
        background-color: #e8e8e8;
        max-width: 100%;
        overflow-x: hidden;
      }
      ::selection {
        color: white;
        background-color: #f39c12;
      }

      .container {
        line-height: 25px;
        width: 100%;
        background-color: #e8e8e8;
        color: black;
        float: justify;
        font-weight: normal;
        min-height: 70vh;
        font-family: "Overpass",'Lato',sans-serif;
      }
      .paragraph{
        font-family: "Overpass","Lato",sans-serif;
      }

      .underline-link{
          color: #e67e22;
          text-decoration: none;
          border-bottom: 1px solid #e67e22;
          float: center;
          -webkit-transition-duration: 0.5s;
      }
      .underline-link:hover{
          color: #e8e8e8;
          border: none;
          background-color: #e67e22;
          text-decoration: none;
      }
      .main-section {
      	margin: 0px;
      	padding: 0px;
      	background-image: -webkit-linear-gradient(rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.7)), url('/HW-Diary-Pro/resources/img/coding.jpeg');
      	background-size: 100vw auto;
      	border: none;
      	min-height: 100vh;
      }
      .main-section h1 {
      	text-transform: uppercase;
      	font-size: 400%;
      	font-weight: 300;
      	color: white;
      	margin-left: 10vw;
      	padding-top: 12vw;
      	line-height: 150%;
      	padding-bottom: 3vw;
      }
    </style>
	</head>

	<body>
		<div class="container">
			<section class='main-section'>
				<!-- Top Nav -->
        <?php
				include '../non-logged-in/htmlextras/nav.html';
				?>
        <h1>Sorry, You Got Lost.<br><a class='underline-link' href='javascript:window.history.back();'>Go Back</a> Or <a class='underline-link' href='/HW-Diary-Pro/index.php'>Go To Home</a></h1>
			</section>
		</div>

		<!-- Footer -->
		<?php
		include '../non-logged-in/htmlextras/footer.html';
		?>

	</body>

</html>
