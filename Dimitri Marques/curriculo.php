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
                        <span><img src="img/banners/proposta.gif"></span>
                    </div>
                    <div class="b">
                        <?php include("breadcrumb.php"); ?>
                        <?php include("sizertext.php"); ?>
                        <div class="c"><!-- --></div>
                    </div>
                    <div class="b p5"><!-- --></div>
                    <div class="b">			
                        <?php include("atencao.php"); ?>
                        <span class="b p5"><!--  --></span>
                        <p>
							Quisque placerat, magna nec elementum varius, est odio vehicula velit, quis convallis nibh justo eu arcu. Morbi sed lectus augue, id aliquam mi. Etiam convallis, ipsum non aliquam tincidunt, dui magna tincidunt purus, vel euismod massa erat a libero. Ut tristique tempor augue, id venenatis urna vehicula at. 	
                            <br><br>
                        <ul class="b p5">
                            <li>a) Integer ullamcorper lacus dictum felis molestie id ultrices est luctus.</li>						
                            <li>b) Aliquam vitae tellus velit, fringilla mollis felis.</li>						
                            <li>c) Curabitur sollicitudin urna quis dolor porttitor mollis.</li>						
                            <li>d) Nulla vitae lectus at neque malesuada condimentum ut et urna.</li>						
                            <li>e) Nunc ultrices eros non mauris ultricies et pretium augue posuere.</li>						
                            <li>f) Aliquam ultrices lorem sit amet mi placerat et rhoncus erat interdum.</li>						
                            <li>g) Quisque aliquet purus quis massa hendrerit mattis.</li>
                        </ul>
                        </p>
                        <div class="login-box p5">
                            <table>
                                <tr><td>Nome:</td></tr>
                                <tr><td><input type="text"></td></tr>
                                <tr><td>E-mail:</td></tr>
                                <tr><td><input type="text"></td></tr>
                                <tr><td>Endereço:</td></tr>
                                <tr><td><input type="text"></td></tr>
                                <tr><td>UF:</td></tr>
                                <tr><td><select><option>RJ</option></select></td></tr>
                                <tr><td>CPF:</td></tr>
                                <tr><td>
                                        <label for="icpf">
                                            <input id="icpf" onkeypress="mascara(this,cpf)" maxlength="14" />
                                        </label>
                                    </td></tr>
                                <tr><td>Cargo Pretendido:</td></tr>
                                <tr><td><select><option>Professor</option></select></td></tr>
                                <tr><td>Telefone:</td></tr>
                                <tr><td>
                                        <label for="itelefone">
                                            <input id="itelefone" onkeypress="mascara(this,telefone)" maxlength="14" />
                                        </label>
                                    </td></tr>
                                <tr><td>Curriculo:</td></tr>
                                <tr><td><input type="file"></td></tr>
                                <tr><td class="rdt">(*) Extensões Permitidas: *.PDF,*.DOC,*.RTF,*.TXT.</td></tr>
                                <tr><td class="rdt">(*) Não são permitidos arquivos maiores que 1MB.</td></tr>
                                <tr><td>Mensagem: *opcional</td></tr>
                                <tr><td><textarea>Digite sua mensagem..</textarea></td></tr>
                                <tr><td colspan="2"><button class="sprite ok" /></td></tr>
                            </table>
                        </div>
                    </div>
                    <div class="b p5"><!-- --></div>
                </div>			
            </div>
        </div>
        <?php include("footer.php"); ?>
    </body>
</html>
