<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistração</span>
			<div class="c"><!-- --></div>
		</div>
		<div class="b p5"><!-- --></div>
		<?php include("includes/menu_financeiro.php"); ?>
		<div class="b p5"><!--  --></div>
		<?php include("includes/menu.php"); ?>
	</div>
	<div class="b r">
		<div class="b">
			<h2 class="b blackbox titulo-principal">Cadastro de Fornecedor</h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
			    <div id="passo1" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 1</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="titulo">Dados Cadastrais &nbsp;&nbsp; <span class="pq"><span class="important">*</span> Cadastrado por <u>Admnistrador</u><span></span>
				  </h2>
			      <div>
					<table class="formulario_cadastro">
						<tr>
							<td class="label"><span class="pq"><span class="important">*</span> CNPJ</td>
							<td colspan="3"><input type="text" class="mask-cnpj"/></td>
						</tr>
						<tr>
							<td class="label"><span class="pq"><span class="important">*</span> Razão Social</td>
							<td colspan="3"><input type="text"/></td>
						</tr>
						<tr>
							<td class="label"><span class="pq"><span class="important">*</span> Nome Fantasia</td>
							<td colspan="3"><input type="text"/></td>
						</tr>
						<tr>
							<td class="label"><span class="pq"><span class="important">*</span> Inscrição Municipal</td>
							<td colspan="3"><input type="text"/>&nbsp;&nbsp;&nbsp;<input type="checkbox"/>&nbsp;&nbsp;Isento</td>
						</tr>
						<tr>
							<td class="label"><span class="pq"><span class="important">*</span> Inscrição Estadual</td>
							<td colspan="3"><input type="text"/>&nbsp;&nbsp;&nbsp;<input type="checkbox"/>&nbsp;&nbsp;Isento</td>
						</tr>
						<tr>
							<td class="label"><span class="pq"><span class="important">*</span> Data da Fundação</td>
							<td colspan="3"><input type="text" class="mask-data" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="pq">Site</td>
							<td colspan="3"><input type="text"/></td>
						</tr>
						<tr>
							<td class="label"><span class="pq"><span class="important">*</span> E-mail</td>
							<td colspan="3"><input type="text"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> CEP</td>
							<td colspan="3">
								<input type="text" id="" name="" class="mask-cep l"/>
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Endereço</td>
							<td><input type="text" id="" name="" disabled/>&nbsp;&nbsp;Número&nbsp;&nbsp;<input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Complemento</td>
							<td colspan="3"><input type="text" class="pq" id="" name="" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Ponto de Referência</td>
							<td colspan="3"><input type="text" id="" name="" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important"></span> Cidade</td>
							<td><input type="text" id="" name="" disabled/>&nbsp;&nbsp;UF&nbsp;&nbsp;<input type="text" class="pq" id="" name="" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Bairro</td>
							<td colspan="3"><input type="text" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Telefones</td>
							<td colspan="3">&nbsp;</td>
						</tr>							
						<tr>
							<td class="label">Comercial</td>
							<td><input type="text" class="mask-fone"/></td>
						</tr>
						<tr>
							<td class="label">Comercial 2</td>
							<td><input type="text" class="mask-fone"/>&nbsp;&nbsp;Ramal&nbsp;&nbsp;<input type="text" class="pq"/></td>
						</tr>
						<tr>
							<td class="label">Fax</td>
							<td colspan="3"><input type="text" class="mask-fone"/></td>
						</tr>
						<tr>
							<td class="label">Celular</td>
							<td colspan="3"><input type="text" class="mask-fone"/></td>
						</tr>	
						<tr>
							<td class="label">Nextel</td>
							<td colspan="3"><input type="text" class="mask-fone"/></td>
						</tr>
						<tr>
							<td class="label">Nextel <span class="interrogation">(ID)</span></td>
							<td colspan="3"><input type="text"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Vendedor <span class="interrogation">(Nome)</span></td>
							<td colspan="3"><input type="text"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Telefone</td>
							<td colspan="3"><input type="text" class="mask-fone"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Celular</td>
							<td colspan="3"><input type="text" class="mask-fone"/></td>
						</tr>	
						<tr>
							<td class="label">Nextel</td>
							<td colspan="3"><input type="text" class="mask-fone"/></td>
						</tr>
						<tr>
							<td class="label">Nextel <span class="interrogation">(ID)</span></td>
							<td colspan="3"><input type="text"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> E-mail</td>
							<td colspan="3"><input type="text"/></td>
						</tr>	
					</table>
			      </div>
			    </div>
			    <div id="passo3" class="accordionItem" style="display:none;">
			      <h2>
			      	<span class="b l blackbox pq">Passo 2</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="titulo">Dados de Acesso</span>
				  </h2>
			      <div>
					<table class="formulario_cadastro">
						<tr>
							<td class="label">Login</td>
							<td colspan="3"><input type="text"/></td>
						</tr>
						<tr>
							<td class="label">Senha</td>
							<td colspan="3"><input type="password"/></td>
						</tr>
						<tr>
							<td class="label">E-mail principal</td>
							<td colspan="3"><input type="text"/></td>
						</tr>
						<tr>
							<td class="label">E-mail secundário</td>
							<td colspan="3"><input type="text"/></td>
						</tr>
						<tr>
							<td class="label">Nìvel de Acesso</td>
							<td colspan="3"><select><option>Admnistrador</option><option>Vendedor</option></select></td>
						</tr>
					</table>	
			      </div>
			    </div>
			      <h2 class="b cadItem">
			      	<a href="#" class="blackbox">&#9664; Limpar Formulário</a>
			      	&nbsp;
			      	<a href="#" class="blackbox">Confirmar Cadastro &#9654;</a>
			      </h2>
			</div>
		</div>
	</div>
	<div class="c"><!-- --></div>
</div>
