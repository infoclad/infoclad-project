<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title></title>
		<link rel="stylesheet" href="css/default.css" type=text/css media="screen" />
		<link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
		<link rel="stylesheet" type="text/css" media="screen" href="css/overlay.css"/>
		<script src="js/functions.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/xfade2.js"></script>
		<script type="text/javascript" src="js/SpryCollapsiblePanel.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.galleria.pack.js"></script>
		<script type='text/javascript' src='js/queryLoader.js'></script>
		<script type="text/javascript" src="js/swfobject.js"></script>
		<script type="text/javascript" src="js/background.js"></script>
		<script type="text/javascript">
		
		jQuery(function($) {
			
			$('.gallery_demo_unstyled').addClass('gallery_demo'); // adds new class name to maintain degradability
			
			$('ul.gallery_demo').galleria({
				history   : false, // ativa a legenda da foto ampliada
				clickNext : false, // ativa o link sobre a imagem ampliada para a próxima
				insert    : '#main_image', // nome do div onde aparecerá a imagem ampliada
				onImage   : function(image,caption,thumb) { 
					
					// efeito na imagem e na legenda
					if(! ($.browser.mozilla && navigator.appVersion.indexOf("Win")!=-1) ) { 
						image.css('display','none').fadeIn(1000);
					}
					caption.css('display','none').fadeIn(1000);
					
					var _li = thumb.parents('li');
					
					_li.siblings().children('img.selected').fadeTo(500,0.3);
					
					thumb.fadeTo('fast',1).addClass('selected');
					
					// adiciona um título para a imagem ampliada
					image.attr('title','Próxima imagem >>');
				},
				onThumb : function(thumb) {				
					var _li = thumb.parents('li');				
					var _fadeTo = _li.is('.active') ? '1' : '0.3';				
					// efeito ao carregar os thumbs
					thumb.css({display:'none',opacity:_fadeTo}).fadeIn(1500);				
					// efeito ao colocar o mouse em cima do thumb
					thumb.hover(
						function() { thumb.fadeTo('fast',1); },
						function() { _li.not('.active').children('img').fadeTo('fast',0.3); } 
					)
				}
			});
		});
		
		</script>
		<script type="text/javascript">
			  var background = new Background('back_1');// id for the backgground movie

			  function onReady(id)
			  {
				  //this function will run when the background has finished loading the xml.
				  //console.log('backgorund is now ready '+id); // id is passed from flash file.
			  };

			window.onload =function()
			{
				document.getElementById('startbtn').onclick=function () {background.start();};
				document.getElementById('resumebtn').onclick=function () {background.resume();};
				document.getElementById('pausebtn').onclick=function (){background.pause();};
				document.getElementById('nextbtn').onclick=function (){background.next();};
				document.getElementById('prevbtn').onclick=function (){background.prev();};

				document.getElementById('movie_1').onclick=function(){background.playMovieByNum(1); };
				document.getElementById('movie_2').onclick=function(){background.playMovieByNum(2); };
				document.getElementById('movie_3').onclick=function(){background.playMovieByNum(3); };
				document.getElementById('movie_4').onclick=function(){background.playMovieByNum(4); };
				document.getElementById('movie_5').onclick=function(){background.playMovieByNum(5); };
			};
		</script>
		<script type="text/javascript">
			var flashvars = {};
			flashvars.id = 'back_1'; //id for the flash file, it needs to be the same as "attributes.id" and "atributes.name"
			var params = {};
			params.scale = "noscale";
			params.salign = "tl";
			params.bgcolor = "#000000";
			params.allowfullscreen = "true";
			params.allowscriptaccess = "always";
			params.wmode = "opaque";
			var attributes = {};
			attributes.id = 'back_1';// give the id to the flash file so it can be referenced.
			attributes.name='back_1';
			swfobject.embedSWF("preview_stripped.swf?" + Math.round(Math.random() * 10000), "myContent", "100%", "100%", "9.0.0", false, flashvars, params, attributes);
		</script>
	</head>
	<body onload="letra();">
		<div id="wrapper">
			<div class="content">
				<div class="b enter">
					<div class="b logo-index"><img src="img/calaca_grande.gif"/></div>
					<div class="b p5"><!-- --></div>
					<div class="b p5"><!-- --></div>
					<div class="b">
						<a class="b l" href="principal.php"><img src="img/enter.gif" /></a>
						<span class="b l p5"><!-- --></span>
						<span class="b l p5"><!-- --></span>
						<a class="b l" href="#"><img src="img/brazil.gif" /></a>
						<span class="b l p5"><!-- --></span>
						<a class="b l" href="#"><img src="img/usa.gif" /></a>
						<div class="c"><!-- --></div>
					</div>
					<div class="b p5"><!-- --></div>
					<div class="b">
						<img src="img/msg1.gif"/>
					</div>
					<div class="b p5"><!-- --></div>
					<div class="b p5"><!-- --></div>
					<div class="b p5"><!-- --></div>
					<div class="b">
						<img src="img/msg2.gif"/>
					</div>
					<div class="b p5"><!-- --></div>
					<div class="b p5"><!-- --></div>
					<div class="b">
						<div class="b l">
							<ul>
								<li><a href="#"><img src="img/facebookw.gif"/></a></li>
								<li><a href="#"><img src="img/twitterw.gif"/></a></li>
								<li><a href="#"><img src="img/youtubew.gif"/></a></li>
								<li><a href="#"><img src="img/flickrw.gif"/></a></li>
							</ul>
						</div>
						<div class="b l">
							<ul class="social_links">
								<li><a href="#">facebook</a></li>
								<li><a href="#">twitter</a></li>
								<li><a href="#">youtube</a></li>
								<li><a href="#">flickr</a></li>
							</ul>
						</div>
						<div class="c"><!-- --></div>
						<span class="b">
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
							Nam ac scelerisque mauris, Rio de Janeiro, RJ.</p>
							<p>+55 21 1234-5678 +55 21 1234-5678</p>
							<p><a href="mailto:contato@pedrocalaca.com.br">contato@pedrocalaca.com.br</a></p>
						</span>
					</div>
				</div>
			</div>
		</div>
		<script type='text/javascript'>
			QueryLoader.init();
		</script>
		<div id="myContent">
			<div id="myAlternativeContent">
				<h1>Alternative content</h1>

				<p>Full screen video background ActionScript 3 version</p>

				<p><a href="http://www.adobe.com/go/getflashplayer"><img
						src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player"/></a></p>
			</div>
		</div>
	</body>
</html>
