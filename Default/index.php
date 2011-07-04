<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title></title>
		<link rel="stylesheet" href="css/default.css" type=text/css media="screen" />
		<!--[if lte IE 7]>
			<link rel="stylesheet" href="css/ie.css" type=text/css media="screen" />
		<![endif]-->
		<script type="text/javascript" src="js/functions.js"></script>
		<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
		<script type="text/javascript" src="js/xfade2.js"></script>
	</head>
	<body onload="letra();">
		<div id="wrapper">
			<div id="header" class="b"><?php include("includes/header.php"); ?></div>
			<div id="conteudo" class="b">
						<?php
						$page = isset($_GET['page']) ? $_GET['page'] : 'home';
						
						if (file_exists("includes/{$page}.php") == true) {
						    include("includes/{$page}.php");
						} else {
						    include('includes/home.php');
						}
						?>
			</div>
			<div class="push"><!--  --></div>
		</div>
		<div id="footer" class="b">
			<?php include("includes/footer.php"); ?>
		</div>
	</body>
</html>
