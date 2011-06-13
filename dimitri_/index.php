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
		<script type="text/javascript">

			// JAVASCRIPT VARS
			// cache buster
			var cacheBuster = "?t=" + Date.parse(new Date());		
			
			// stage dimensions
			var stageW = 623;//"100%";
			var stageH = 200;//"100%";
			
			
			// ATTRIBUTES
		    var attributes = {};
		    attributes.id = 'FlabellComponent';
		    attributes.name = attributes.id;
		    
			// PARAMS
			var params = {};
			params.bgcolor = "#FFFFFF";
			

		    /* FLASH VARS */
			var flashvars = {};				
			
			/// if commented / delete these lines, the component will take the stage dimensions defined 
			/// above in "JAVASCRIPT SECTIONS" section or those defined in the settings xml			
			flashvars.componentWidth = stageW;
			flashvars.componentHeight = stageH;
			
			/// path to the content folder(where the xml files, images or video are nested)
			/// if you want to use absolute paths(like "http://domain.com/images/....") then leave it empty("")
			flashvars.pathToFiles = "banner/";
			flashvars.xmlPath = "xml/banner.xml";
						
			
			/** EMBED THE SWF**/
			swfobject.embedSWF("js/preview.swf"+cacheBuster, attributes.id, stageW, stageH, "9.0.124", "js/expressInstall.swf", flashvars, params);
			
		</script>
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
	<div id="wrapper">
		<div id="header" class="b"><?php include("includes/header.php"); ?></div>
		<div id="conteudo" class="b">
			<div id="menu" class="b l">
				<?php include("includes/menu.php"); ?>
			</div>
			<div class="conteudo b l">
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
