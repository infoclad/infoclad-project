<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistra��o</span>
			<div class="c"><!-- --></div>
		</div>
		<div class="b p5"><!-- --></div>
		<?php include("includes/menu_financeiro.php"); ?>
		<div class="b p5"><!--  --></div>
		<?php include("includes/menu.php"); ?>
	</div>
	<div class="b r">
			<h2 class="b blackbox titulo-principal">Gerar Proposta Comercial</h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
						  <h2 class="b cadItem">
							<span class="titulo l p5" style="padding-left:0;">Cliente</span>
							<span class="l p5"><!-- --></span>
							<span class="l blackbox"><span class="interrogation">Proposta N�</span> 110800551</span>
							<div class="c"><!-- --></div>
						  </h2>
						<span class="b p5"><!-- --></span>
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label">Informe o CPF</td>
									<td colspan="5">
										<input class="b l mask-cpf" type="text" id="" name=""  />
										<a href="#" class="b l sprite lupa"><!--  --></a>
									</td>
								</tr>
								<tr>
									<td class="label">Nome Completo</td>
									<td colspan="3"><input type="text" id="" name="" disabled/></td>
								</tr>
								</tr>
							</table>
						</span>
						  <h2 class="b cadItem">
							<span class="titulo l">Servi�os</span>
							<div class="c"><!-- --></div>
						  </h2>
						<span class="b p5"><!-- --></span>
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label">Incluir Servi�os</td>
									<td><input type="text"/></td>
									<td class="label"><a class="b greenbox" href="#">Adicionar</a></td>
								</tr>
								<tr><td class="label">1.</td><td style="width:117px;">Lorem Lipsum</td><td><a class="b redbox" href="#">Remover</a></td></tr>
							</table>
						</span>
						<span class="b p5"><!-- --></span>
						  <h2 class="b cadItem">
							<span class="titulo l">Investimento</span>
							<div class="c"><!-- --></div>
						  </h2>
						<span class="b p5"><!-- --></span>
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label">Valor Global <span class="interrogation">(R$)</span></td>
									<td colspan="3"><input type="text" class="pq"/></td>
								</tr>
								<tr>
									<td class="label">Forma de Pagamento</td>
									<td colspan="3"><input type="radio"/>&nbsp;� vista&nbsp;&nbsp;<input type="radio"/>&nbsp;� prazo</td>
								</tr>
								<tr>
									<td class="label">&nbsp;</td>
									<td colspan="3"><select><option>Empenho</option></select></td>
								</tr>
								<tr>
									<td class="label">&nbsp;</td>
									<td colspan="3"><select><option>3x (Entrada, Inicio, Fim do projeto)</option></select></td>
								</tr>
							</table>
						</span>
						<span class="b p5"><!-- --></span>
						  <h2 class="b cadItem">
							<span class="titulo l">Garantia</span>
							<div class="c"><!-- --></div>
						  </h2>
						<span class="b p5"><!-- --></span>
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label">Garantia</td>
									<td colspan="3"><input type="radio"/> 90 Dias&nbsp;&nbsp;<input type="radio"/> 5 Anos</td>
								</tr>
							</table>
						</span>
						<span class="b p5"><!-- --></span>
						  <h2 class="b cadItem">
							<span class="titulo l">Prazos, Trabalho e Entrega</span>
							<div class="c"><!-- --></div>
						  </h2>
						<span class="b p5"><!-- --></span>
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label">Prazo de Entrega</td>
									<td colspan="3"><input type="text" class="pq"/>&nbsp;Dias</td>
								</tr>
								<tr>
									<td class="label">Urg�ncia</td>
									<td colspan="3"><input type="radio"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio"/>&nbsp;N�o</td>
								</tr>
								</tr>
								<tr>
									<td class="label">Local de Execu��o</td>
									<td colspan="3"><input type="radio"/>&nbsp;Sede&nbsp;&nbsp;<input type="radio"/>&nbsp;Outro</td>
								</tr>
						<tr>
							<td class="label">CEP</td>
							<td colspan="3">
								<input type="text" id="" name="" class="mask-cep l"/>
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label">Endere�o</td>
							<td><input type="text" id="" name="" disabled/>&nbsp;&nbsp;N�mero&nbsp;&nbsp;<input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label">Complemento</td>
							<td colspan="3"><input type="text" class="pq" id="" name="" /></td>
						</tr>
						<tr>
							<td class="label">Ponto de Refer�ncia</td>
							<td colspan="3"><input type="text" id="" name="" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important"></span> Cidade</td>
							<td><input type="text" id="" name="" disabled/>&nbsp;&nbsp;UF&nbsp;&nbsp;<input type="text" class="pq" id="" name="" disabled/></td>
						</tr>
						<tr>
							<td class="label">Bairro</td>
							<td colspan="3"><input type="text" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label">Telefone</td>
							<td colspan="3">&nbsp;</td>
						</tr>							
						<tr>
							<td class="label">Comercial</td>
							<td><input type="text" class="mask-fone"/>&nbsp;&nbsp;Ramal&nbsp;&nbsp;<input type="text" class="pq"/></td>
						</tr>
								<tr>
									<td class="label">Hor�rio de Trabalho</td>
									<td colspan="3"><input type="radio"/>&nbsp;Comercial (06h �s 18h)</td>
								</tr>
								<tr>
									<td class="label">&nbsp;</td>
									<td colspan="3"><input type="radio"/>&nbsp;Noturno (18h �s 06h)</td>
								</tr>
								<tr>
									<td class="label">&nbsp;</td>
									<td colspan="3"><input type="radio"/>&nbsp;S�bados, Domingos e Feriados</td>
								</tr>
								<tr>
									<td class="label">Respons�vel pela Obra</td>
									<td colspan="3"><input type="text"/></td>
								</tr>	
								<tr>
									<td class="label">Telefone Celular</td>
									<td colspan="3"><input type="text" class="mask-fone"/></td>
								</tr>
								<tr>
									<td class="label">Nextel</td>
									<td colspan="3"><input type="text" class="mask-fone"/></td>
								</tr>
								<tr>
									<td class="label">Nextel <span class="interrogation">(ID)</span></td>
									<td colspan="3"><input type="text" class="pq"/></td>
								</tr>
								<tr>
									<td class="label">Nacionalidade</td>
									<td colspan="3"><select name="">
										<option id="">Brasileiro</option>
										<option id="">Estrangeiro</option>
									</select>
									</td>
								</tr>
								<tr>
									<td class="label">Naturalidade</td>
									<td colspan="3">
										<select name="">
											<option>Acre</option>	
											<option>Alagoas</option>	 	
											<option>Amap�</option> 	
											<option>Amazonas</option>	 	
											<option>Bahia</option>	 	
											<option>Cear�</option>	 	
											<option>Distrito Federal</option>	 
											<option>Esp�rito Santo</option> 
											<option>Goi�s</option>	 
											<option>Maranh�o</option>	 	
											<option>Mato Grosso</option>	 
											<option>Mato Grosso do Sul</option>	 	
											<option>Minas Gerais</option>	 	
											<option>Par�</option>	 
											<option>Para�ba</option>	 
											<option>Paran�</option>	 
											<option>Pernambuco</option>	 
											<option>Piau�</option>	 	
											<option>Rio de Janeiro</option>	 
											<option>Rio Grande do Norte</option>	
											<option>Rio Grande do Sul</option>	 	
											<option>Rond�nia</option>	 
											<option>Roraima</option>	 
											<option>Santa Catarina</option>	 
											<option>S�o Paulo</option>	 
											<option>Sergipe</option>	 
											<option>Tocantins</option>	 
										</select>
									</td>
								</tr>
								<tr>
									<td class="label">Cidade</td>
									<td colspan="3">
										<select name="">
											<option><!--  --></option>
										</select>
									</td>
								</tr>
								<tr>
									<td class="label">Data de Nascimento</td>
									<td colspan="3"><input type="text" id="" name="" class="pq mask-data"/> &nbsp; ?? Anos</td>

								</tr>
								<tr>
									<td class="label">Signo <a href="#" class="interrogation">(?)</a></td>
									<td colspan="3">
										<span class="b l signos sagitario"><!-- --></span> 
										<span class="b l p5"><!-- --></span>
										<span class="b l signo-nome"><a href="#" class="lightbluetext">Sagit�rio</a></span>
									</td>
								</tr>
								<tr>
									<td class="label">Descri��o do Signo</td>
									<td colspan="3">
										<textarea class="signo-descr"></textarea>
									</td>
								</tr>
							</table>
						</span>
						<span class="b p5"><!-- --></span>
						  <h2 class="b cadItem">
							<a href="#" class="blackbox">Gerar Proposta &#9654;</a>
						  </h2>
			</div>
	</div>
	<div class="c"><!-- --></div>
