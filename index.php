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
		date_default_timezone_set("Europe/Paris");
		require './libs/smarty/libs/Smarty.class.php';

		$smarty = new Smarty;

		//$smarty->force_compile = true;
		$smarty->debugging = true;
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;

		$smarty->assign("Name", "Fred Irving Johnathan Bradley Peppergill", true);

		$smarty->display('header.tpl');
		
			if(isset($_GET['lang'])) {
				$lang = $_GET['lang'];
			}else{
				$lang = "en";
			}

			include  $lang."/content.php";
			//echo $_SERVER['REQUEST_URI']."<br />";

?>


	</body>
</html>
