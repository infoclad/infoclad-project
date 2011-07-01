<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>INFOCLAD - Integrando Tecnologia ao Seu Negócio !</title>
		<link rel="stylesheet" href="css/default.css" type=text/css media="screen" />
		<script src="js/functions.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/xfade2.js"></script>
		<script type="text/javascript" src="js/SpryCollapsiblePanel.js"></script>
		<script type="text/javascript">
		
		var jQury = jQuery.noConflict();
		
		jQury(document).ready(function() {
		
		    modalPublicidade = function () {
		
		        var maskHeight = jQury(document).height();
		        var maskWidth = jQury(window).width();
		
		        jQury('#mask').css({
		            'width':maskWidth,
		            'height':maskHeight
		        });
		
		        jQury('#mask').fadeIn(1000);
		        jQury('#mask').fadeTo("slow",0.8);
		
		        var winH = jQury(window).height();
		        var winW = jQury(window).width();
		
		        jQury('#dialog').css('top',  winH/2-jQury('#dialog').height()/2);
		        jQury('#dialog').css('left', winW/2-jQury('#dialog').width()/2);
		
		        jQury('#dialog').fadeIn(2000);
		
		        jQury('#dialog').show();
		    }
		
		    jQury('.window .close').click(function (e) {
		        e.preventDefault();
		
		        jQury('#mask').hide();
		        jQury('.window').hide();
		    });
		
		    jQury('#mask').click(function () {
		        jQury(this).hide();
		        jQury('.window').hide();
		    });
		
		    modalPublicidade();
		});
		
		</script>
	</head>
	<body onload="letra();">
		<div id="topBar" class="b"><?php include("includes/topBar.php"); ?></div>
		<div id="header" class="wrapper b"><?php include("includes/header.php"); ?></div>
		<div id="conteudo" class="wrapper b">
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
			<?php include("includes/footer.php"); ?>
		</div>
	</body>
</html>
