<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistração</span>
			<div class="c"><!-- --></div>
		</div>
		<div class="b p5"><!-- --></div>
		<?php include("includes/menu_cliente.php"); ?>
		<div class="b p5"><!--  --></div>
		<?php include("includes/menu.php"); ?>
	</div>
	<div class="b r">
		<div class="b">
			<h2 class="b blackbox titulo-principal">Cadastro de Clientes</h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
			      <h2 class="b cadItem">
			      	<span class="b l blackbox pq">Passo 1</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="titulo l">Identifique o tipo de pessoa</span>
			      	<span class="b l p5"><!--  --></span>
			      	<span class="l pq p5"><input type="radio" id="pfis" name="pessoa"/> Pessoa Física &nbsp;&nbsp; <input type="radio" id="pjur" name="pessoa"/> Pessoa Jurídica &nbsp;&nbsp; <span class="important">*</span> Cadastrado por <u>Admnistrador</u></span>
			     	<div class="c"><!-- --></div>
			      </h2>
				<span class="b p5"><!--  --></span>
			    <div id="passo2" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 2</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="titulo">Dados Cadastrais</span>
				  </h2>
			      <div>
			      	<!-- Pessoa Jurídica -->
					<table class="formulario_cadastro" style="display:none;">
						<tr>
							<td class="label"><span class="important">*</span> ID <span class="interrogation">(Token)</span></td>
							<td colspan="3"><input type="text" id="" name="" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Tipo de Empresa</td>
							<td colspan="3">
								<select name="">
									<option id="">Sociedade Limitada</option>
									<option id="">Empreendedor Individual</option>
									<option id="">Empresa Federal</option>
									<option id="">Empresa Estadual</option>
									<option id="">Empresa Municipal</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Informe o CNPJ</td>
							<td colspan="3">
								<input type="text" id="" name="" class="b l mask-cnpj"  />
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Grupo do cliente</td>
							<td colspan="3"><select name=""><option id="">Lorem Lipsum</option></select></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Indicação</td>
							<td colspan="3"><input type="radio" /> Token &nbsp;&nbsp; <input type="radio" /> CPF</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="3">
								<input type="text" class="b l"  />
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label">Razão Social</td>
							<td colspan="3"><input type="text" id="" name="" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Inscrição Municipal</td>
							<td colspan="3"><input type="text" id="" name="" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Inscrição Estadual</td>
							<td colspan="3"><input type="text" id="" name="" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important"></span> Data da Fundação</td>
							<td colspan="3"><input type="text" id="" name="" class="pq mask-data"  disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Website</td>
							<td colspan="3"><input type="text" id="" name="" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> E-mail</td>
							<td colspan="3"><input type="text" id="" name="" /></td>
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
							<td class="label"><span class="important">*</span> Melhor hora de contato</td>
							<td colspan="3"><input type="text" class="pq mask-hora" id="" name=""/></td>
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
							<td class="label">Adicionar Filial? <span class="interrogation">(opcional)</span></td>
							<td colspan="3">
								<input type="radio" id="" name=""/> Sim &nbsp;&nbsp; 
								<input type="radio" id="" name=""/> Não &nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td class="label">Ramo de Atividade</td>
							<td colspan="3">
								<select name="">
									<option id="">Indústria</option>
									<option id="">Comércio</option>
									<option id="">Prestadora de Serviços</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Quantidade de Sócios</td>
							<td colspan="3">
								<select name="">
									<option id="">2</option>
									<option id="">4</option>
									<option id="">6</option>
									<option id="">8</option>
									<option id="">10</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nome do Sócio</td>
							<td colspan="3"><input type="text" id="" name="" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> CPF</td>
							<td colspan="5">
								<input type="text" id="" name="" class="b l mask-cpf"  />
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> RG</td>
							<td>
							<input type="text" id="" name="" class="mask-rg" />&nbsp;&nbsp;<span class="important">*</span> Órgão Emissor&nbsp;&nbsp;<input class="pq" id="" name="" type="text"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento</td>
							<td colspan="3"><input type="text" id="" name="" class="pq mask-data"/> &nbsp; ?? Anos</td>

						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Signo <a href="#" class="interrogation">(?)</a></td>
							<td colspan="3">
								<span class="b l signos sagitario"><!-- --></span> 
								<span class="b l p5"><!-- --></span>
								<span class="b l signo-nome"><a href="#" class="lightbluetext">Sagitário</a></span>
							</td>
						</tr>
						<tr>
							<td class="label">Descrição do Signo</td>
							<td colspan="3">
								<textarea class="signo-descr"></textarea>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nacionalidade</td>
							<td colspan="3"><select name="">
								<option id="">Brasileiro</option>
								<option id="">Estrangeiro</option>
							</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Naturalidade</td>
							<td colspan="3">
								<select name="">
									<option>Acre</option>	
									<option>Alagoas</option>	 	
									<option>Amapá</option> 	
									<option>Amazonas</option>	 	
									<option>Bahia</option>	 	
									<option>Ceará</option>	 	
									<option>Distrito Federal</option>	 
									<option>Espírito Santo</option> 
									<option>Goiás</option>	 
									<option>Maranhão</option>	 	
									<option>Mato Grosso</option>	 
									<option>Mato Grosso do Sul</option>	 	
									<option>Minas Gerais</option>	 	
									<option>Pará</option>	 
									<option>Paraíba</option>	 
									<option>Paraná</option>	 
									<option>Pernambuco</option>	 
									<option>Piauí</option>	 	
									<option>Rio de Janeiro</option>	 
									<option>Rio Grande do Norte</option>	
									<option>Rio Grande do Sul</option>	 	
									<option>Rondônia</option>	 
									<option>Roraima</option>	 
									<option>Santa Catarina</option>	 
									<option>São Paulo</option>	 
									<option>Sergipe</option>	 
									<option>Tocantins</option>	 
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Cidade</td>
							<td colspan="3">
								<select name="">
	 								<option><!--  --></option>
								</select>
							</td>
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
					</table>
					<!-- Pessoa Física -->
					<div id="fis_foto">
						<span class="b"><img src="img/avatar.gif"/></span>
						<span class="b p5"><!-- --></span>
						<span class="b foto-edit"><a href="#" class="gray">editar foto</a></span>
					</div>
					<table class="formulario_cadastro">
						<tr>
							<td class="label"><span class="important">*</span> ID <span class="interrogation">(Token)</span></td>
							<td colspan="3"><input type="text" id="" name="" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Informe o CPF</td>
							<td colspan="5">
								<input class="b l mask-cpf" type="text" id="" name=""  />
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Grupo do cliente</td>
							<td colspan="3"><select name=""><option id="">Lorem Lipsum</option></select></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Indicação</td>
							<td colspan="3"><input type="radio" /> Token &nbsp;&nbsp; <input type="radio" /> CPF</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="3">
								<input type="text" class="b l"  />
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label">Nome Completo</td>
							<td colspan="3"><input type="text" id="" name="" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Como gostaria de ser chamado?</td><td><input type="text" id="" name=""/>&nbsp;&nbsp;<input type="checkbox"/>&nbsp;Indiferente</td>
						</tr>
						<tr>
							<td class="label">Situação Cadastral</td>
							<td colspan="3"><input type="text" id="" name="" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Sexo</td>
							<td colspan="3"><input type="radio" id="" name=""/> Masculino &nbsp;&nbsp; <input type="radio" id="" name=""/> Feminino</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> RG</td>
							<td>
							<input type="text" id="" name="" class="mask-rg" />&nbsp;&nbsp;<span class="important">*</span> Órgão Emissor&nbsp;&nbsp;<input class="pq" id="" name="" type="text"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento</td>
							<td colspan="3"><input type="text" id="" name="" class="pq mask-data"/> &nbsp; ?? Anos</td>

						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Signo <a href="#" class="interrogation">(?)</a></td>
							<td colspan="3">
								<span class="b l signos sagitario"><!-- --></span> 
								<span class="b l p5"><!-- --></span>
								<span class="b l signo-nome"><a href="#" class="lightbluetext">Sagitário</a></span>
							</td>
						</tr>
						<tr>
							<td class="label">Descrição do Signo</td>
							<td colspan="3">
								<textarea class="signo-descr"></textarea>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nacionalidade</td>
							<td colspan="3"><select name="">
								<option id="">Brasileiro</option>
								<option id="">Estrangeiro</option>
							</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Naturalidade</td>
							<td colspan="3">
								<select name="">
									<option>Acre</option>	
									<option>Alagoas</option>	 	
									<option>Amapá</option> 	
									<option>Amazonas</option>	 	
									<option>Bahia</option>	 	
									<option>Ceará</option>	 	
									<option>Distrito Federal</option>	 
									<option>Espírito Santo</option> 
									<option>Goiás</option>	 
									<option>Maranhão</option>	 	
									<option>Mato Grosso</option>	 
									<option>Mato Grosso do Sul</option>	 	
									<option>Minas Gerais</option>	 	
									<option>Pará</option>	 
									<option>Paraíba</option>	 
									<option>Paraná</option>	 
									<option>Pernambuco</option>	 
									<option>Piauí</option>	 	
									<option>Rio de Janeiro</option>	 
									<option>Rio Grande do Norte</option>	
									<option>Rio Grande do Sul</option>	 	
									<option>Rondônia</option>	 
									<option>Roraima</option>	 
									<option>Santa Catarina</option>	 
									<option>São Paulo</option>	 
									<option>Sergipe</option>	 
									<option>Tocantins</option>	 
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Cidade</td>
							<td colspan="3">
								<select name="">
	 								<option><!--  --></option>
								</select>
							</td>
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
							<td class="label"><span class="important">*</span> Melhor hora de contato</td>
							<td colspan="3"><input type="text" class="pq mask-hora" id="" name=""/></td>
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
							<td class="label"><span class="important">*</span> Estado Civil</td>
							<td colspan="3">
								<input type="radio" id="" name=""/> Solteiro &nbsp;&nbsp; 
								<input type="radio" id="" name=""/> Casado &nbsp;&nbsp;
								<input type="radio" id="" name=""/> Un. Estável &nbsp;&nbsp;
								<input type="radio" id="" name=""/> Viúvo &nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td class="label">Nome do Cônjugue</td>
							<td colspan="3"><input type="text" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento do Cônjugue</td>
							<td colspan="3"><input type="text" id="" name="" class="pq mask-data"/> &nbsp; ?? Anos</td>

						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Signo <a href="#" class="interrogation">(?)</a></td>
							<td colspan="3">
								<span class="b l signos sagitario"><!-- --></span> 
								<span class="b l p5"><!-- --></span>
								<span class="b l signo-nome"><a href="#" class="lightbluetext">Sagitário</a></span>
							</td>
						</tr>
						<tr>
							<td class="label">Descrição do Signo</td>
							<td colspan="3">
								<textarea class="signo-descr"></textarea>
							</td>
						</tr>
						<tr>
							<td class="label">Referências Pessoais</td>
							<td colspan="3">&nbsp;</td>
						</tr>
						<tr>
							<td class="label">Nome</td>
							<td colspan="3"><input type="text" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label">Telefone</td>
							<td colspan="3"><input type="text" id="" name="" class="mask-fone"/></td>
						</tr>
						<tr>
							<td class="label">Relação</td>
							<td colspan="3">
								<span class="l"><input type="radio"/> Parente</span>
								<span class="b l p5"><!-- --></span>
								<span class="l"><input type="radio"/> Amigo</span>
								<span class="b l p5"><!-- --></span>
								<span class="l"><input type="radio"/> Outros</span>
								<span class="b l p5"><!-- --></span>
								<a class="b l greenbox" href="#">Comprovado</a>
							</td>
						</tr>
						<tr>
							<td class="label">Caso "Outros",<br/>informe a relação</td>
							<td colspan="3"><input class="l" type="text"/><span class="b l p5"><!-- --></span><a class="b l greenbox" href="#">Comprovado</a></td>
						</tr>
						<tr>
							<td class="label">Empresa em que trabalha</td>
							<td colspan="3"><input type="text"/>&nbsp;&nbsp;<input type="checkbox"/> Confirmado</td>
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
							<td class="label">Telefone</td>
							<td colspan="3"><input type="text" class="mask-fone"/></td>
						</tr>
						<tr>
							<td class="label">Cargo/Atividade</td>
							<td colspan="3"><select><option>&nbsp;</option></select></td>
						</tr>
						<tr>
							<td class="label">Tempo de trabalho</td>
							<td colspan="3">Anos <input type="text"/>&nbsp;&nbsp;Meses <input type="text"/></td>
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
							<td class="label"><span class="important">*</span> Moradia</td>
							<td colspan="3"><input type="radio" id="" name=""/> Própria &nbsp;&nbsp; <input type="radio" id="" name=""/> Alugada</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Tempo em que mora</td>
							<td colspan="3"><select><option><!-- --></option><option>Menos de 6 Meses</option><option>Até 1 Ano</option><option>Até 2 Anos</option><option>Até 5 Anos</option><option>Mais de 10 Anos</option></select></td>
						</tr>
					</table>
			      </div>
			    </div>
			    <div id="passo3" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 3</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="titulo">Dados Bancários</span>
				  </h2>
			      <div>
					<table class="formulario_cadastro">
						<tr>
							<td class="label"><span class="important">*</span> Quantas contas bancárias <br/> a empresa possui?</td>
							<td colspan="3">
								<select class="pq" name="">
									<option id="">1</option>
									<option id="">2</option>
									<option id="">3</option>
									<option id="">4</option>
									<option id="">5</option>
									<option id="">6</option>
									<option id="">7</option>
									<option id="">8</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Banco</td>
							<td colspan="3"><input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> AG</td>
							<td><input type="text" class="pq" id="" name=""/></td>
							<td class="label"><span class="important">*</span> Conta Corrente</td>
							<td><input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Faturamento Anual: R$</td>
							<td colspan="3"><input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Capital Social: R$</td>
							<td colspan="3"><input type="text" class="pq" id="" name=""/></td>
						</tr>
					</table>
			      </div>
			    </div>
				<div id="passo4" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 4</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="titulo">Pesquisa Social</span>
				  </h2>
			      <div>
					<table class="formulario_cadastro">
						<tr>
							<td class="label"><span class="important">*</span> Profissão</td>
							<td colspan="2">
								<input type="text" class="" id="" name=""/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Funcionário Público?</td>
							<td colspan="2"><input type="radio" id="" name=""/> Sim &nbsp;&nbsp; <input type="radio" id="" name=""/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Expediente</td>
							<td colspan="2">
								Entrada &nbsp; <input type="text" class="pq mask-hora" id="" name=""/>
							</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="2">
								Saída &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="pq mask-hora" id="" name=""/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Trabalha Sábados e Domingos?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Trabalha Feriados?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Filhos?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Se sim, quantos filhos?</td>
							<td colspan="2"><input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nome do filho</td>
							<td colspan="2"><input type="text" class="" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento</td>
							<td colspan="2"><input type="text" id="" name="" class="pq mask-data"/>&nbsp;?? Anos</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Signo <a href="#" class="interrogation">(?)</a></td>
							<td colspan="2">
								<span class="b l signos sagitario"><!-- --></span> 
								<span class="b l p5"><!-- --></span>
								<span class="b l signo-nome"><a href="#" class="lightbluetext">Sagitário</a></span>
							</td>
						</tr>
						<tr>
							<td class="label">Descrição do Signo</td>
							<td colspan="2">
								<textarea class="signo-descr"></textarea>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nome do pai</td>
							<td><input type="text" class="" id="" name=""/></td>
							
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td><input type="checkbox" id="" name=""/>&nbsp;Falecido</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nome da mãe</td>
							<td><input type="text" class="" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td><input type="checkbox" id="" name=""/>&nbsp;Falecida</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Renda Mensal <span class="interrogation">(R$)</span></td>
							<td colspan="2"><input type="text" class="" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de pagamento</td>
							<td colspan="2"><input type="text" id="" name="" class="pq mask-data"/></td>
						</tr>
						<tr>
							<td class="label">Religião</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Ateu</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Visão Política</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Lorem Lipsum</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Filiado à algum Partido <br/> Político?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Partido Político</td>
							<td colspan="2"><select><option><!-- --></option></select></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Fuma?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Bebe?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Possui animais de extimação?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Se sim, quantos animais?</td>
							<td colspan="2"><input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Quais animais? <span class="interrogation">Separado por vírgulas(,)</span></td>
							<td colspan="2"><input type="text" class="" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label">Escolaridade</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Superior Completo</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Instituição de formação</td>
							<td colspan="2"><input type="text" class="" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de formação</td>
							<td colspan="2"><input type="text" id="" name="" class="mask-data"/></td>
						</tr>
						<tr>
							<td class="label">Orientação Sexual</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Gay</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Cor da pele</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Afro Descendente</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Cor dos olhos</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Preto</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Cor do cabelo</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Preto</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Estados do Brasil que<br/>gostaria de conhecer? <span class="interrogation">(Até 3 estados.)</span></td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Rio de Janeiro</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Rio de Janeiro</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Rio de Janeiro</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Time de futebol</td>
							<td colspan="2"><input type="text" class="" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Possui carteira<br/>de motorista?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> Não</td>
						</tr>
						<tr>
							<td class="label">Caso "Sim",<br/>qual categoria?</span></td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">&nbps;</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Tipo de veículo</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Nacional&nbsp;&nbsp;<input type="radio" id="" name=""/> Importado</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Cilindradas</td>
							<td colspan="2"><input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label">Quanto calça? <span class="interrogation">(Número do sapato.)</span></td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">&nbps;</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Quanto veste? <span class="interrogation">(Número da roupa.)</span></td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">&nbps;</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Facebook</td>
							<td colspan="2"><input type="text" class="" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Orkut</td>
							<td colspan="2"><input type="text" class="" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Msn</td>
							<td colspan="2"><input type="text" class="" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Enviar uma foto</td>
							<td colspan="2"><input type="file" class="" id="" name=""/></td>
						</tr>
					</table>	
			      </div>
			    </div>
			    <div id="passo3" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 5</span> 
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
					</table>	
			      </div>
			    </div>
			      <h2 class="b cadItem">
			      	<a href="#" class="blackbox">Salvar as alterações &#9654;</a>
			      </h2>
			</div>
		</div>
	</div>
	<div class="c"><!-- --></div>
</div>
