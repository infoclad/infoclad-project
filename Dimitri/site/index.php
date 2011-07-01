<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Colégio Dimitri Marques</title>
		<link rel="stylesheet" href="css/default.css" type=text/css media="screen" />
		<script src="js/functions.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/swfobject.js"></script>
		<script type="text/javascript" src="js/xfade2.js"></script>
		<script type="text/javascript" src="js/SpryCollapsiblePanel.js"></script>
		<script type="text/javascript" src="js/galleria-1.2.4.min.js"></script>
		<script type="text/javascript" src="js/galleria.classic.min.js"></script>
<script type="text/javascript">
var headline_count;
var current_headline=0;

$(document).ready(function(){
  headline_count = $("div.headline").size();
  $("div.headline:eq("+current_headline+")").css('top', '5px');
  setInterval(headline_rotate,5000); //time in milliseconds
});

function headline_rotate() {
  old_headline = current_headline % headline_count;
  new_headline = ++current_headline % headline_count;
  $("div.headline:eq(" + old_headline + ")").css('top', '210px');
  $("div.headline:eq(" + new_headline + ")").show().animate({top: 5},"slow");     
}
</script>
	</head>
	<body onload="letra(); mostrar();">
		<div id="header" class="b wrapper"><?php include("includes/header.php"); ?></div>
		<div id="breakingNews" class="b sprite-x"><?php include("includes/breaking.php"); ?></div>
		<div class="b p5"><!-- --></div>
		<div id="conteudo" class="b wrapper">
			<div class="conteudo">
				<div id="menu" class="b l">
					<?php include("includes/menu.php"); ?>
				</div>
				<div class="b l navegacao"> 
					<?php
					$page = isset($_GET['page']) ? $_GET['page'] : 'home';
					
					if (file_exists("includes/{$page}.php") == true) {
					    include("includes/{$page}.php");
					} else {
					    include('includes/home.php');
					}
					?>
				</div>
				<div class="c"><!--  --></div>
			</div>
		</div>
	<div id="footer" class="b">
		<?php include("includes/footer.php"); ?>
	</div>
	</body>
</html>
