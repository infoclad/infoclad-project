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
                                <tr><td>Matrícula do aluno:</td></tr>
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
                                <tr><td><select><option>Escolha seu evento</option><option>Olímipiadas de Matemática</option></select></td></tr>
                                <tr><td>Mensagem: *opcional</td></tr>
                                <tr><td><textarea>Digite sua mensagem..</textarea></td></tr>
                                <tr><td colspan="2"><button class="sprite ok" /></td></tr>
                            </table>
                        </div>
                    </div>
		    <div class="b r">
			<!-- <img src="img/math.jpg" width="550" height="370"> -->
		    </div>
		    <div class="c"><!-- --></div>
                    <div class="b p5"><!-- --></div>
                </div>			
            </div>
        </div>
  
    </body>
</html>
