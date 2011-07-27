<script type="text/javascript">
jQury(document).ready(function () {

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

<style type="text/css">
    #mask {
        position:absolute;
        left:0;
        top:0;
        z-index:9000;
        background-color:#000;
        display:none;
    }

    #boxes .window {
        position:absolute;
        left:0;
        top:0;
        width:500px;
        height:500px;
        display:none;
        z-index:9999;
        padding:20px;
    }

    #boxes #dialog {
        width:500px;
        height:500px;
        padding:10px;
    }
</style>      


 <div id="boxes">
            <div id="dialog" class="window">
                <a href="#" class="close" title="Clique para fechar !">
                    <img src="img/publicidade.png" style="height: 600px; width: auto;" alt="" />
                </a>
            </div>
            <div id="mask"></div>
        </div>

<div class="b">
<div class="b l sidebar">
<?include("includes/sidebar_l.php");?>
</div>
<div class="b l p5"><!--  --></div>
	<div class="b l noticias-home-row">
		<div class="b l noticias-home">
			<div class="b p5">
				<span class="b"><img class="noticia" src="img/fotos/Imagem18.jpg"/></span>
				<span class="b"><h2>Formação sócio-esportiva</h2></span>
				<span class="b"><p>
					Implantação de núcleos de esporte e de lazer nas paróquias, organizando eventos esportivos e de lazer.
					</p></span>
			</div>
		</div>
		<div class="b l noticias-home">
			<div class="b p5">
				<span class="b"><img class="noticia" src="img/fotos/Imagem12.jpg"/></span>
				<span class="b"><h2>A Pastoral do Esporte</h2></span>
				<span class="b"><p>É uma iniciativa social e evangelizadora da igreja católica...</p></span>
			</div>
		</div>
		<div class="b l noticias-home">
			<div class="b p5">
				<span class="b"><img class="noticia" src="img/fotos/Imagem15.jpg"/></span>
				<span class="b"><h2>Pastoral do Rio de Janeiro</h2></span>
				<span class="b"><p>Em sua essência, a  Pastoral do Esporte no Estado do Rio de Janeiro já  acontecia  a mais de 20 anos...</p></span>
			</div>
		</div>
		<div class="c p5"><!--  --></div>
		<div class="b">
			<span class="b"><h2 class="blueText">Aniversariantes do mï¿½s</h2></span>
			<span class="b p5"><!--  --></span>
					<div id="carouselHolder">
						<!-- carousel -->
						    <div class="infiniteCarousel"> 
						      <div class="wrapper"> 
						        <ul> 
						          <li>
						          	<span class="b"><a href=""><img src="img/nop.gif"></a></span>
						          	<span class="b p5"><!--  --></span>
						          	<span class="b"><p>Lorem Ipsum - 14 Anos, Rio de Janeiro RJ</p></span>
						          </li>
						          <li>
						          	<span class="b"><a href=""><img src="img/nop.gif"></a></span>
						          	<span class="b p5"><!--  --></span>
						          	<span class="b"><p>Lorem Ipsum - 14 Anos, Rio de Janeiro RJ</p></span>
						          </li>
						          <li>
						          	<span class="b"><a href=""><img src="img/nop.gif"></a></span>
						          	<span class="b p5"><!--  --></span>
						          	<span class="b"><p>Lorem Ipsum - 14 Anos, Rio de Janeiro RJ</p></span>
						          </li>
						          <li>
						          	<span class="b"><a href=""><img src="img/nop.gif"></a></span>
						          	<span class="b p5"><!--  --></span>
						          	<span class="b"><p>Lorem Ipsum - 14 Anos, Rio de Janeiro RJ</p></span>
						          </li>
						        </ul>        
						      </div> 
						    </div>
						<!-- carousel -->
					</div>
		</div>
	</div>
<div class="b l p5"><!--  --></div>
<div class="b r sidebar">
	<div class="b">
		<span class="b"><h3 class="blueText">ï¿½ltimas Notï¿½cias</h3></span>
		<span class="b">
			<ul class="b headlines">
				<li><a href="#">Lorem ipsum ad option scriptorem sea.</a></li>
				<li><a href="#">Lorem ipsum ad option scriptorem sea.</a></li>
				<li><a href="#">Lorem ipsum ad option scriptorem sea.</a></li>
			</ul>
			<span class="b p5"><!--  --></span>
			<span class="b r"><a class="bluebox" href="#">Leia Mais</a></span>
			<div class="c"><!--  --></div>
		</span>
	</div>
	<span class="b p5"><!--  --></span>
	<div class="b">
		<span class="b"><h3 class="blueText">Testemunhos</h3></span>
		<span class="b">
			<ul class="b headlines">
				<li><a href="#">Lorem ipsum ad option scriptorem sea.</a></li>
				<li><a href="#">Lorem ipsum ad option scriptorem sea.</a></li>
				<li><a href="#">Lorem ipsum ad option scriptorem sea.</a></li>
			</ul>
			<span class="b p5"><!--  --></span>
			<span class="b r"><a class="bluebox" href="#">Leia Mais</a></span>
			<div class="c"><!--  --></div>
		</span>
	</div>
	<span class="b p5"><!--  --></span>
	<div class="b">
		<span class="b"><h3 class="blueText">Newsletter</h3></span>
		<span class="b">
			<span class="b"><p align="justify">Assine nosso Informativo e receba nossas novidades por e-mail!</p></span>
		</span>
		<span class="b p5 newsletter">
			<span class="b">
				<input type="text"/>
				<img class="fundo" src="img/informativo.gif"/>
			</span>
			<span class="b r" style="margin-top:5px;">
				<a class="bluebox" href="#">Enviar</a>
			</span>
			<div class="c"><!-- --></div>
		</span>
	</div>
</div>

<div class="c"><!--  --></div>


</div>