<!doctype html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, user-scalable=no">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link href="./stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<link href="./stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />

		<script type="text/javascript" src="js/libs/jquery.min.js"></script>
		<script type="text/javascript" src="js/script.js"></script>

		<!--[if IE]>
			<link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
		<![endif]-->
	</head>
	<body>
		<?php 
		
			if($_GET['lang']){
				$lang = $_GET['lang'];
			}else{
				$lang = "en";
			}

			echo $lang;
			include  $lang."/content.php";

		?>
	</body>
</html>
