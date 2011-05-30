		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Colégio Dimitri Marques</title>
		<link rel="stylesheet" href="css/main.css" type=text/css media="screen" />
		<script src="js/functions.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script type="text/javascript" src="fancybox/jquery.easing-1.4.pack.js"></script>
		<script type="text/javascript" src="fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
		<script type="text/javascript" src="js/zoom_dom.js"></script>
		<script type="text/javascript" src="js/jquery.popeye-2.0.4.min.js"></script>
		<script type="text/javascript" src="js/swfobject.js"></script>
		<script type="text/javascript">

			// JAVASCRIPT VARS
			// cache buster
			var cacheBuster = "?t=" + Date.parse(new Date());		
			
			// stage dimensions
			var stageW = 623;//"100%";
			var stageH = 125;//"100%";
			
			
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

		
		
