<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistração</span>
			<div class="c"><!-- --></div>
		</div>
		<div class="b p5"><!-- --></div>
		<?php include("includes/menu_config.php"); ?>
		<div class="b p5"><!--  --></div>
		<?php include("includes/menu.php"); ?>
	</div>
	<div class="b r">
		<div class="b">
			<h2 class="b blackbox titulo-principal">Geral</h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
					  <h2 class="b cadItem">
						<span class="titulo l">Dados Cadastrais</span>
						<div class="c"><!-- --></div>
					  </h2>
					  <span class="b p5"><!-- --></span>
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label"><span class="important">*</span> Nome Fantasia</td>
									<td colspan="3"><input type="text"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> CNPJ</td>
									<td colspan="3"><input type="text" class="mask-cnpj"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Inscrição Estadual</td>
									<td colspan="3"><input type="text"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Inscrição Municipal</td>
									<td colspan="3"><input type="text"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Telefones</td>
									<td colspan="3">&nbsp;</td>
								</tr>							
								<tr>
									<td class="label">Residencial</td>
									<td colspan="3"><input type="text" class="mask-fone"/></td>
								</tr>
								<tr>
									<td class="label">Celular</td>
									<td colspan="3"><input type="text" class="mask-fone"/></td>
								</tr>	
								<tr>
									<td class="label">Comercial</td>
									<td><input type="text" class="mask-fone"/>&nbsp;&nbsp;Ramal&nbsp;&nbsp;<input type="text" class="pq"/></td>
								</tr>
								<tr>
									<td class="label">ID Nextel</td>
									<td colspan="3"><input type="text"/></td>
								</tr>	
								<tr>
									<td class="label"><span class="important">*</span> E-mail</td>
									<td colspan="3">&nbsp;</td>
								</tr>							
								<tr>
									<td class="label">Pessoal</td>
									<td colspan="3"><input type="text"/></td>
								</tr>
								<tr>
									<td class="label">Secundário</td>
									<td colspan="3"><input type="text"/></td>
								</tr>	
								<tr>
									<td class="label">Comercial</td>
									<td colspan="3"><input type="text"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> CEP</td>
									<td colspan="3"><input type="text" id="endfis" name="cepfis" class="mask-cep"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Endereço</td>
									<td><input type="text" id="endfis" name="endfis" disabled/>&nbsp;&nbsp;Número&nbsp;&nbsp;<input type="text" class="pq" id="endfis" name="endnumfis"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Complemento</td>
									<td colspan="3"><input type="text" class="pq" id="endecompjur" name="endecompjur" /></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Ponto de Referência</td>
									<td colspan="3"><input type="text" id="endecompjur" name="endecompjur" /></td>
								</tr>
								<tr>
									<td class="label"><span class="important"></span> Cidade</td>
									<td><input type="text" id="endfis" name="endcidadefis" disabled/>&nbsp;&nbsp;UF&nbsp;&nbsp;<input type="text" class="pq" id="endfis" name="enduffis" disabled/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Bairro</td>
									<td colspan="3"><input type="text" id="endbairrofis" name="endbairrofis"/></td>
								</tr>
							</table>
						</span>
							  <h2 class="b cadItem">
								<span class="titulo l">Representante Legal</span>
								<div class="c"><!-- --></div>
							  </h2>
							  <span class="b p5"><!-- --></span>
							<span class="b formulario">
								<table class="formulario_cadastro">
								<tr>
									<td class="label"><span class="important">*</span> Informe o CPF</td>
									<td colspan="5">
										<input class="b l mask-cpf" type="text" id="cpffis" name="cpffis"/>
										<span class="b l p5"><!-- --></span>
										<a href="#" class="b l sprite lupa"><!--  --></a>
									</td>
								</tr>
								<tr>
									<td class="label">Nome Completo</td>
									<td colspan="3"><input type="text" id="nomefis" name="nomefis" disabled/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> RG</td>
									<td>
									<input type="text" id="rgfis" name="rgfis" class="mask-rg" />&nbsp;&nbsp;<span class="important">*</span> Órgão Emissor&nbsp;&nbsp;<input class="pq" id="oemfis" name="oemfis" type="text"/>
									</td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Rúbrica</td>
									<td colspan="3"><input type="file"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Assinatura</td>
									<td colspan="3"><input type="file"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Salário Mínimo Atual (R$)</td>
									<td colspan="3"><input class="pq" type="text"/></td>
								</tr>
							</table>
						</span>
				      <h2 class="b cadItem">
				      	<a href="#" class="blackbox">&#9664; Limpar Formulário</a>
				      	&nbsp;
				      	<a href="#" class="blackbox">Salvar Alterações &#9654;</a>
				      </h2>
			</div>
		</div>
		<div class="b p5"><!-- --></div>
		<div class="b">
			<h2 class="b blackbox titulo-principal">Premiação <span class="interrogation">(Medalhas)</span></h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label"><span class="important">*</span> Adicionar Medalha</td>
									<td><input type="text"/></td>
									<td><a href="#" class="b l greenbox">Adicionar nova medalha</a></td>
								</tr>
								<tr>
									<td>&nbsp;</td>
									<td>
										<ul>
											<li>Medalha Ouro Adicionada!</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Medalha</td>
									<td><select><option>Aspirante</option><option>Prata</option><option>Ouro</option><option>Bronze</option></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Valor <span class="interrogation">(R$)</span></td>
									<td><input type="text"/></td>
								</tr>
									<!-- <td><input type="text"/>&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;Valor Mínimo (Apartir)&nbsp;&nbsp;<input type="checkbox">&nbsp;&nbsp;Valor Máximo (Até)</td> -->
								</tr>
							</table>
						</span>
			      <h2 class="b cadItem">
			      	<a href="#" class="blackbox">Salvar Alterações &#9654;</a>
			      </h2>
			</div>
		</div>
		<div class="b p5"><!-- --></div>
		<div class="b">
			<h2 class="b blackbox titulo-principal">Cadastro de Testemunhas <span class="pq"><span class="interrogation"><span class="important">*</span>Scannear e enviar pelos campos abaixo o que for pedido.</span></span></h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label"><span class="important">*</span> Nome</td>
									<td colspan="3"><input type="text"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> RG</td>
									<td colspan="3"><input type="text"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> CPF</td>
									<td colspan="3"><input type="text" class="mask-cpf"/></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Assinatura</td>
									<td colspan="3"><input type="file"/></td>
								</tr>
							</table>
						</span>
				      <h2 class="b cadItem">
				      	<a href="#" class="blackbox">Cadastrar Testemunhas &#9654;</a>
				      </h2>
			</div>
		</div>
	</div>
	</div>
	<div class="c"><!-- --></div>
</div>