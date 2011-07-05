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
		<script type="text/javascript" src="js/swfobject.js"></script>
		<script src="js/mootools-1.2.1-core-yc.js" type="text/javascript"></script>
		<script src="js/mootools-1.2-more.js" type="text/javascript"></script>
		<script src="js/jd.gallery.js" type="text/javascript"></script>
		<script type="text/javascript">

			// JAVASCRIPT VARS
			// cache buster
			var cacheBuster = "?t=" + Date.parse(new Date());		
			
			// stage dimensions
			var stageW = 1005;//"100%";
			var stageH = 350;//"100%";
			var stageH2 = 190;

			
			// ATTRIBUTES
		    var attributes = {};
		    attributes.id = 'FlabellComponent';
		    attributes.name = attributes.id;

		    // NAVIGATION
		    
			var navigation = {};
			navigation.id = 'FlabellComponent2';
			navigation.name = navigation.id

		    
			// PARAMS
			var params = {};
			params.bgcolor = "#ffffff";
			

		    /* FLASH VARS */
			var flashvars = {};	
			var navVars = {};
	
			
			/// if commented / delete these lines, the component will take the stage dimensions defined 
			/// above in "JAVASCRIPT SECTIONS" section or those defined in the settings xml			
			flashvars.componentWidth = stageW;
			flashvars.componentHeight = stageH;
			navVars.componentHeight = stageH2;


			
			/// path to the content folder(where the xml files, images or video are nested)
			/// if you want to use absolute paths(like "http://domain.com/images/....") then leave it empty("")
			flashvars.pathToFiles = "banner/";
			flashvars.xmlPath = "xml/banner.xml";

			navVars.pathToFiles = "banner/";
			navVars.xmlPath = "xml/banner.xml";
						
			
			/** EMBED THE SWF**/
			swfobject.embedSWF("preview.swf"+cacheBuster, attributes.id, stageW, stageH, "9.0.124", "js/expressInstall.swf", flashvars, params);
			swfobject.embedSWF("preview.swf"+cacheBuster, navigation.id, stageW, stageH2, "9.0.124", "js/expressInstall.swf", navVars, params);

			
		</script>
	</head>
	<body onload="letra();">
		<div id="wrapper">
			<div id="header" class="b"><?php include("includes/header.php"); ?></div>
			<div id="conteudo" class="b">
				<div class="b">
							<?php
							$page = isset($_GET['page']) ? $_GET['page'] : 'home';
							
							if (file_exists("includes/{$page}.php") == true) {
							    include("includes/{$page}.php");
							} else {
							    include('includes/home.php');
							}
							?>
				</div>
			</div>
				<div class="b p5"><!--  --></div>
				<div class="b wrapper">
					<div class="b r"><iframe src="http://www.facebook.com/plugins/like.php?app_id=123859777702228&amp;href=http%3A%2F%2Fwww.pedrocalaca.com.br&amp;send=false&amp;layout=standard&amp;width=270&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:270px; height:35px;" allowTransparency="true"></iframe></div>
					<div class="c"><!--  --></div>
				</div>
		</div>
		<div id="footer" class="b">
			<?php include("includes/footer.php"); ?>
		</div>

	</body>
</html>
