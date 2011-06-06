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
                        <span><img class="navbanner" src="img/banners/proposta.gif"></span>
                    </div>
                    <div class="b">
                        <?php include("breadcrumb.php"); ?>
                        <?php include("sizertext.php"); ?>
                        <div class="c"><!-- --></div>
                    </div>
                    <div class="b p5"><!-- --></div>
                    <div class="b l">			
                        <span class="b p5"><!--  --></span>
                        <div class="login-box p5">
                            <table>
                                <tr><td>Nome:</td></tr>
                                <tr><td><input type="text"></td></tr>
                                <tr><td>E-mail:</td></tr>
                                <tr><td><input type="text"></td></tr>
                                <tr><td>Telefone:</td></tr>
                                <tr><td>
                                        <label for="itelefone">
                                            <input id="itelefone" onkeypress="mascara(this,telefone)" maxlength="14" />
                                        </label>
                                    </td></tr>
                                <tr><td>Assunto:</td></tr>
                                <tr><td><input type="text"></td></tr>
                                <tr><td>Mensagem:</td></tr>
                                <tr><td><textarea>Digite sua mensagem..</textarea></td></tr>
                                <tr><td colspan="2"><button class="sprite ok" /></td></tr>
                            </table>
                        </div>
                    </div>
		    <div class="b r">
			<iframe width="550" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com.br/maps?f=q&amp;source=s_q&amp;hl=pt-BR&amp;geocode=&amp;q=Avenida+Andr%C3%A9+Ves%C3%A1lio,+262,+Rio+de+Janeiro+-+RJ&amp;aq=0&amp;sll=-14.239424,-53.186502&amp;sspn=67.607835,135.263672&amp;ie=UTF8&amp;hq=&amp;hnear=Av.+Andr%C3%A9+Ves%C3%A1lio,+262+-+Campo+Grande,+Rio+de+Janeiro,+23080-430&amp;t=h&amp;z=14&amp;iwloc=r0&amp;ll=-22.897866,-43.570237&amp;output=embed"></iframe>
		    </div>
		    <div class="c"><!-- --></div>
                    <div class="b p5"><!-- --></div>
                </div>			
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
