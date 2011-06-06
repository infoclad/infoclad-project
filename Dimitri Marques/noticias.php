<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
    <head>
        <?php
        include("head.php");
        ?>
    </head>
    <body onload="letra();">
        <div id="wrapper">
            <?php include("header.php"); ?>
            <div id="main-content" class="b">
                <?php include('menu.php'); ?>

                <div id="main-content-content" class="b l">
                    <div class="b">
                        <span><img class="navbanner" src="img/banners/projeto.gif"></span>
                    </div>
                    <div class="b">
                        <?php include("breadcrumb.php"); ?>
                        <?php include("sizertext.php"); ?>
                        <div class="c"><!-- --></div>
                    </div>
                    <div class="b p5"><!-- --></div>
                    <div class="b">
                        <h1>Todas as Headlines</h1>
                        <br>		
                        <p>		
                        <ul class="b lista-noticias">
                            <li><strong>Postado: 00/05/2011</strong> - <a href="noticiasView.php">Integer elementum suscipit tortor ut pulvinar. Donec eget augue et tortor tempus pulvinar. Etiam adipiscing mattis accumsan.</a></li>					
                        </ul>
                        </p>	
                    </div>
                    <?php include("paginacao.php"); ?>
                    <div class="b p5"><!-- --></div>
                </div>			
            </div>
        </div>
      
    </body>
</html>
