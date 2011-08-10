<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title></title>
		<link rel="stylesheet" href="css/default.css" type=text/css media="screen" />
		<script src="js/functions.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
		<script type="text/javascript" src="js/xfade2.js"></script>
		<script type="text/javascript" src="js/SpryCollapsiblePanel.js"></script>
		<script type="text/javascript" src="js/jquery.js"></script>
		<script type="text/javascript" src="js/jquery.galleria.pack.js"></script>
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
	</head>
	<body onload="letra();">
		<div id="header" class="b">
			<?php include("includes/header.php"); ?>
		</div>
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
		<div id="footer" class="b">
			<?php include("includes/footer.php"); ?>
		</div>
	</body>
</html>
