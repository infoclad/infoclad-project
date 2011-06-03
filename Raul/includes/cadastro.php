<?php include("includes/topoFooter.php"); ?>
<?php include("includes/breadcrumb.php"); ?>
<span class="b p"><!--  --></span>
<div class="wrapper-holder">
    <div class="wrapper">
		<div id="novidades" class="b wrapper">
			<span class="b p5"><!--  --></span>
			<div class="headerTitulo b">
				Cadastre-se
			</div>
			<div class="b novidadesHeaderFooter">
				<div class="headerSubtitulo b l">
					Se torne um cliente agora mesmo e efetue suas compras e participe de nossas votações!
				</div>
				<div class="headerMenu b r">
					<span class="b l sprite headerMenuSeta"><!--  --></span>
					<span class="b l"><a href="?page=catatalogo">Catálogo completo</a></span>
					<span class="b l sprite headerMenuSeta"><!--  --></span>
					<span class="b l"><a href="?page=votacao">Vote</a></span>
					<div class="c"><!--  --></div>
				</div>
				<div class="c"><!--  --></div>
			</div>
			<div class="c"><!--  --></div>
			<span class="b p5"><!--  --></span>
			<span class="b p formCadastro">
				<table>
					<tr><td><h1 colspan="4">Dados Pessoais</h1></td></tr>
					<tr><td>Nome completo:</td><td colspan="3"><input class="fullInput" type="text"/></td></tr>
					<tr><td>CPF:</td><td>
                                        <label for="icpf">
                                            <input id="icpf" onkeypress="mascara(this,cpf)" maxlength="14" />
                                        </label>
					</td><td>RG:</td><td><input type="text"/></td></tr>
					<tr><td class="tinySize grayText">*Apenas números</td><td>&nbsp;</td><td class="tinySize grayText">*Apenas números</td><td>&nbsp;</td></tr>
					<tr><td>Endereço:</td><td><input type="text"/></td><td>Número:</td><td><input class="minInput" type="text"/></td></tr>
					<tr><td>Telefone:</td><td>
                                        <label for="itelefone">
                                            <input id="itelefone" onkeypress="mascara(this,telefone)" maxlength="14" />
                                        </label>
					</td></tr>
					<tr><td>Cidade:</td><td><input type="text"/></td><td>UF:</td><td><select><option>RJ</option></select></td></tr>
					<tr><td>Bairro:</td><td><input type="text"/></td><td>Complemento:</td><td><input type="text"/></td></tr>
					<tr><td>&nbsp;</td><td>&nbsp;</td><td class="tinySize grayText" colspan="2">*Ex: Casa, Ap, etc.</td></tr>
				</table>
				<table>
					<tr><td><h1 colspan="4">Dados de usuário</h1></td></tr>
					<tr><td>Login:</td><td colspan="3"><input class="" type="text"/></td></tr>
					<tr><td>E-mail:</td><td colspan="3"><input class="" type="text"/></td></tr>
					<tr><td>Senha:</td><td colspan="3"><input class="" type="password"/></td></tr>
					<tr><td>Confirme sua Senha:</td><td colspan="3"><input class="" type="password"/></td></tr>
					<tr><td colspan="4"><input type="submit" class="laranjaBtn" value="Cadastrar"/></td></tr>
				</table>
			</span>
		</div>
		<div class="b wrapper contentBottom">
			<img src="img/content-bottom.gif">
		</div>
		
    </div>
</div>