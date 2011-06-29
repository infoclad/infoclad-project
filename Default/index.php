<a href=""></a><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title></title>
		<link rel="stylesheet" href="css/default.css" type=text/css media="screen" />
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="css/ie.css" type=text/css media="screen" />
		<![endif]-->
		<script type="text/javascript" src="js/functions.js"></script>
		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
	</head>
	<body>
	<div id="header" class="b">
		<? include("includes/header.php"); ?>
	</div>
	<div class="wrapper b">
		<?php
		$page = isset($_GET['page']) ? $_GET['page'] : 'home';
		
		if (file_exists("includes/{$page}.php") == true) {
		    include("includes/{$page}.php");
		} else {
		    include('includes/home.php');
		}
		?>
	</div>
	<div id="footer" class="b">
		<? include("includes/footer.php"); ?>
	</div>
	</body>
</html>
