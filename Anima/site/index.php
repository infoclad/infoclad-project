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
<script type="text/javascript">
function exibeDataHora(div){

   /*
   *
   * Funcao para exibicao de data e hora
   * Angelito M. Goulart
   * <angelito@bsd.com.br>
   * 06/04/2011
   *
   * Uso: basta chama-la ao carregar a pagina
   * e passar a div onde sera exibida a data
   * e hora como parametro.
   *
   */

   //cria um objeto do tipo date
   var data = new Date();
   
   // obtem o dia, mes e ano
   dia = data.getDate();
   mes = data.getMonth() + 1;
   ano = data.getFullYear();
   
   //obtem as horas, minutos e segundos
   horas = data.getHours();
   minutos = data.getMinutes();
   segundos = data.getSeconds();
   
   //converte as horas, minutos e segundos para string
   str_horas = new String(horas);
   str_minutos = new String(minutos);
   str_segundos = new String(segundos);
   
   //se tiver menos que 2 digitos, acrescenta o 0
   if (str_horas.length < 2)
      str_horas = 0 + str_horas;
   if (str_minutos.length < 2)
      str_minutos = 0 + str_minutos;
   if (str_segundos.length < 2)
      str_segundos = 0 + str_segundos;
   
   //converte o dia e o mes para string
   str_dia = new String(dia);
   str_mes = new String(mes);
   
   //se tiver menos que 2 digitos, acrescenta o 0
   if (str_dia.length < 2)
      str_dia = 0 + str_dia;
   if (str_mes.length < 2)
      str_mes = 0 + str_mes;
   
   //cria a string que sera exibida na div
   data = str_dia + '/' + str_mes + '/' + ano + ' - ' + str_horas + ':' + str_minutos + ':' + str_segundos;
   
   //exibe a string na div
   document.getElementById(div).innerHTML = data;
   
   //executa a funcao com intervalo de 1 segundo
   setTimeout("exibeDataHora('hora')", 1000);
   
}
</script>
	</head>
	<body onload="letra();javascript:exibeDataHora('hora');">
		<div id="wrapper">
			<div id="header" class="b"><?php include("includes/header.php"); ?></div>
			<div id="conteudo" class="b">
				<span class="b p5"><!--  --></span>
				<span class="b wrapper"><?php include("includes/breadcrumb.php"); ?></span>
				<span class="b p5"><!--  --></span>
				<div class="wrapper"> 
					<div class="b l">
						<?php include("includes/sidebar.php"); ?>
					</div>
					<div class="b l p5"><!--  --></div>
					<div class="b l conteudo">
								<?php
								$page = isset($_GET['page']) ? $_GET['page'] : 'home';
								
								if (file_exists("includes/{$page}.php") == true) {
								    include("includes/{$page}.php");
								} else {
								    include('includes/home.php');
								}
								?>
					</div>
					<div class="c p5"><!--  --></div>
				</div>
			</div>
		</div>
		<div id="footer" class="b">
			<?php include("includes/footer.php"); ?>
		</div>
	</body>
</html>
