<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistra��o</span>
			<div class="c"><!-- --></div>
		</div>
		<div class="b p5"><!-- --></div>
		<?php include("includes/menu_config.php"); ?>
		<div class="b p5"><!--  --></div>
		<?php include("includes/menu.php"); ?>
	</div>
	<div class="b r">
		<div class="b">
			<h2 class="b blackbox titulo-principal">Perfis</h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
				<table class="lista">
					<tr class="cor1">
							<td>&nbsp;</td>
							<td>#</td>
							<td><a href="#">Nome do Cliente</a></td>
							<td><a href="#">Usu�rio</a></td>
							<td><a href="#">Grupo do Cliente</a></td>
							<td><a href="#">Pontos de Vantagem</a></td>
							<td><a href="#">Padrinho</a> <span class="interrogation"><a href="#">(?)</a></span></td>
							<td><a href="#">Perfil</a></td>
							<td><a href="#">&nbsp;&nbsp;&nbsp;A��o</a></td>
					</tr>
					<tr class="cor2">
						<td align="center"><input type="checkbox"/></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td>
							Vendedor
						</td>
						<td><a class="b l sprite config"><!-- --></a><span class="b l p5"><!-- --></span><a class="b l sprite delete"><!-- --></a></td>
					</tr>
					<tr><td colspan="9" align="center">Exibir <select><option>10</option><option>20</option><option>Tudo</option></select> de 200 Cadastros</td></tr>
				</table>
			      <span class="b p5"><!-- --></span>
			      <h2 class="b cadItem">
			      	<a href="#" class="blackbox">Salvar Configura��es &#9654;</a>
			      </h2>
			</div>
		</div>
		<div class="b p5"><!-- --></div>
		<div class="b">
			<h2 class="b blackbox titulo-principal">Configurar Permiss�es de Usu�rios e Perfis</h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
						<h2 class="b cadItem">
							<span class="titulo l">Permiss�o ao Usu�rio</span>
							<div class="c"><!-- --></div>
						</h2>
						<span class="b p5"><!-- --></span>
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label"><span class="important">*</span> Usu�rio</td>
									<td colspan="5">
										<input type="text" id="" name="" class="b l mask-cpf"  />
										<a href="#" class="b l sprite lupa"><!--  --></a>
									</td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Atribuir Permiss�o <span class="interrogation">(Grupo)</span></td>
									<td><select><option>Lorem Lipsum</option></select></td>
									<td><a class="b greenbox" href="#">Adicionar</a></td>
								</tr>
								<tr><td class="label">&nbsp;</td><td style="width:117px;">Funcion�rios (Vendedores)</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								</table>
						</span>
							  <span class="b p5"><!-- --></span>
							  <h2 class="b cadItem">
								<a href="#" class="blackbox">Salvar Configura��es &#9654;</a>
							  </h2>
						<span class="b p5"><!-- --></span>
						<h2 class="b cadItem">
							<span class="titulo l">Permiss�o ao Grupo</span>
							<div class="c"><!-- --></div>
						</h2>
						<span class="b p5"><!-- --></span>
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label"><span class="important">*</span> Grupo</td>
									<td colspan="5">
										<select><option>Funcion�rios (Vendedores) <span class="interrogation">(Perfil)</span></option></select>
									</td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Adicionar Permiss�o</td>
									<td><select><option>Lorem Lipsum</option></select></td>
									<td><a class="b greenbox" href="#">Adicionar</a></td>
								</tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
							</table>
						</span>
							  <span class="b p5"><!-- --></span>
							  <h2 class="b cadItem">
								<a href="#" class="blackbox">Salvar Configura��es &#9654;</a>
							  </h2>
			</div>
		</div>
		<div class="b p5"><!-- --></div>
		<div class="b">
			<h2 class="b blackbox titulo-principal">Adicionar Perfis</h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
						<h2 class="b cadItem">
							<span class="titulo l">Perfis</span>
							<div class="c"><!-- --></div>
						</h2>
						<span class="b p5"><!-- --></span>
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label"><span class="important">*</span> Perfil</td>
									<td>
										<input type="text" id="" name=""/>
									</td>
									<td><a class="b bluebox" href="#">Criar Perfil</a></td>
								</tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr>
									<td class="label"><span class="important">*</span> Adicionar Permiss�o</td>
									<td><select><option>Lorem Lipsum</option></select></td>
									<td><a class="b greenbox" href="#">Adicionar</a></td>
								</tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
							</table>
						</span>
							  <span class="b p5"><!-- --></span>
							  <h2 class="b cadItem">
								<a href="#" class="blackbox">Salvar Configura��es &#9654;</a>
							  </h2>
			</div>
		</div>
	</div>
	<div class="c"><!-- --></div>
</div>


