<?php
/**
 * @Author Josean Matias (www.joseanmatias.com.br)
 * fun��o para criar breadcrumb da p�gina
 * pode ser passado os fragmentos da url
 * ou os fragmentos ser�o criados pela pr�pria fun��o
 * @param $url_pieces = url em forma de array
 */
function breadcrumb($url_pieces = array(), $divisor = '>') {
 //verifica se foram passados parametros
 if ($url_pieces) {
 	$url_crumb = $url_pieces;
	$http = null;
 } else {
 	//sen�o n�o houver parametro
 	//ent�o criar a url automaticamente
	$http = 'http://'; 
 	$request = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
 	$explode = explode('/', $request);
 	foreach($explode as $explode) {
 		$url_crumb[str_replace('.php', '', $explode)] = str_replace('.php', '', $explode);
 	}
 }
 //quantidade de fragmentos da url
	$count = sizeof($url_crumb);
 //inicia contador
	$i = 1;
	foreach($url_crumb as $link=>$inner) {
 		//verifica se � o primeiro fragmento da url
		if($i == 1) {
			$href .= $http.$link;
		} else {
			$href .= '/'.$link;
		}
 		//verifica se � o ultimo fragmento da url
		if($i == $count) {
 			//mostrar fragmento sem link
			$crumb[] = '<span>'.($inner).'</span>';
		} else {
 			//mostrar fragmento com link para a pagina
			$crumb[] = '<a href="'.$href.'" title="'.$inner.'">'.$inner.'</a> '.$divisor.' ';
		}
		$i++;
	}
 //mostrar breadcrumb na tela
	echo '<div class="breadcrumb">';
	foreach($crumb as $crumb) {
		echo $crumb;
	}
	echo '</div>';
}
?>
<!-- 
						<ul id="breadcrumb" class="inline b l">
							<li><a href="index.php">P�gina Inicial</a></li>
							<li>></li>
							<li><a href="#">P�gina atual</a></li>
						</ul>
-->
<?php
//chamada da fun��o breadcrumb com parametro
breadcrumb(array('http://wesleyandrade.infocladhost.com.br/dimitrimarques/'=>'Home', 'artigo'=>'Artigo', 'titulo-do-artigo'=>'T�tulo do Artigo'));
?>
						