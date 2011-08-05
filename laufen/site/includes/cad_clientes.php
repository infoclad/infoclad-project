<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistra��o</span>
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
			      	<span class="l pq p5"><input type="radio" id="pfis" name="pessoa"/> Pessoa F�sica &nbsp;&nbsp; <input type="radio" id="pjur" name="pessoa"/> Pessoa Jur�dica &nbsp;&nbsp; <span class="important">*</span> Cadastrado por <u>Admnistrador</u></span>
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
			      	<!-- Pessoa Jur�dica -->
					<table class="formulario_cadastro" style="display:none;">
						<tr>
							<td class="label"><span class="important">*</span> Tipo de Empresa</td>
							<td colspan="3">
								<select name="tipoempresa">
									<option id="socilimi">Sociedade Limitada</option>
									<option id="empreendindividual">Empreendedor Individual</option>
									<option id="empresfederal">Empresa Federal</option>
									<option id="empresestadual">Empresa Estadual</option>
									<option id="empresmunicipal">Empresa Municipal</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Informe o CNPJ</td>
							<td colspan="3">
								<input type="text" id="cnpjjur" name="cnpjjur" class="b l mask-cnpj"  />
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label">Raz�o Social</td>
							<td colspan="3"><input type="text" id="razaosocialjur" name="razaosocialjur" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Inscri��o Municipal</td>
							<td colspan="3"><input type="text" id="inscrmunicipaljur" name="inscrmunicipaljur" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Inscri��o Estadual</td>
							<td colspan="3"><input type="text" id="inscrestadualjur" name="inscrestadualjur" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important"></span> Data da Funda��o</td>
							<td colspan="3"><input type="text" id="datafundjur" name="datafundjur" class="pq mask-data"  disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Website</td>
							<td colspan="3"><input type="text" id="websitejur" name="websitejur" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> E-mail</td>
							<td colspan="3"><input type="text" id="emailjur" name="emailjur" /></td>
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
							<td colspan="3"><input type="text" class="pq mask-hora" id="horacontatojur" name="horacontatojur"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> CEP</td>
							<td colspan="3">
								<input type="text" id="endfis" name="cepfis" class="mask-cep l"/>
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Endere�o</td>
							<td><input type="text" id="endfis" name="endfis" disabled/>&nbsp;&nbsp;N�mero&nbsp;&nbsp;<input type="text" class="pq" id="endfis" name="endnumfis"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Complemento</td>
							<td colspan="3"><input type="text" class="pq" id="endecompjur" name="endecompjur" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Ponto de Refer�ncia</td>
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
						<tr>
							<td class="label">Adicionar Filial? <span class="interrogation">(opcional)</span></td>
							<td colspan="3">
								<input type="radio" id="addfilialsim" name="addfilial"/> Sim &nbsp;&nbsp; 
								<input type="radio" id="addfilialnao" name="addfilial"/> N�o &nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td class="label">Ramo de Atividade</td>
							<td colspan="3">
								<select name="ramoatividade">
									<option id="atividadeindustria">Ind�stria</option>
									<option id="atividadecomercio">Com�rcio</option>
									<option id="atividadeprestadora">Prestadora de Servi�os</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Quantidade de S�cios</td>
							<td colspan="3">
								<select name="ramoatividade">
									<option id="dois">2</option>
									<option id="quatro">4</option>
									<option id="seis">6</option>
									<option id="oito">8</option>
									<option id="10">10</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nome do S�cio</td>
							<td colspan="3"><input type="text" id="nomesoc" name="nomesoc" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> CPF</td>
							<td colspan="5">
								<input type="text" id="cpfsoc" name="cpfsoc" class="b l mask-cpf"  />
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> RG</td>
							<td>
							<input type="text" id="rgfis" name="rgfis" class="mask-rg" />&nbsp;&nbsp;<span class="important">*</span> �rg�o Emissor&nbsp;&nbsp;<input class="pq" id="oemfis" name="oemfis" type="text"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento</td>
							<td colspan="3"><input type="text" id="nascsoc" name="nascsoc" class="pq mask-data"/> &nbsp; ?? Anos</td>

						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Signo <a href="#" class="interrogation">(?)</a></td>
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
						<tr>
							<td class="label"><span class="important">*</span> Nacionalidade</td>
							<td colspan="3"><select name="naciosoc">
								<option id="nacobrassoc">Brasileiro</option>
								<option id="nacobrassoc">Estrangeiro</option>
							</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Naturalidade</td>
							<td colspan="3">
								<select name="natusoc">
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
							<td class="label"><span class="important">*</span> Cidade</td>
							<td colspan="3">
								<select name="natucidadesoc">
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
							<td class="label"><span class="important">*</span> Indica��o</td>
							<td colspan="3"><input type="radio" /> Token &nbsp;&nbsp; <input type="radio" /> CPF</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="3">
								<input type="text" class="b l"  />
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
					</table>
					<!-- Pessoa F�sica -->
					<table class="formulario_cadastro">
						<tr>
							<td class="label"><span class="important">*</span> Informe o CPF</td>
							<td colspan="5">
								<input class="b l mask-cpf" type="text" id="cpffis" name="cpffis"  />
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label">Nome Completo</td>
							<td colspan="3"><input type="text" id="nomefis" name="nomefis" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Como gostaria de ser chamado?</td><td><input type="text" id="" name=""/>&nbsp;&nbsp;<input type="checkbox"/>&nbsp;Indiferente</td>
						</tr>
						<tr>
							<td class="label">Situa��o Cadastral</td>
							<td colspan="3"><input type="text" id="situfis" name="situfis" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Sexo</td>
							<td colspan="3"><input type="radio" id="smasfis" name="sexofis"/> Masculino &nbsp;&nbsp; <input type="radio" id="sfemfis" name="sexofis"/> Feminino</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> RG</td>
							<td>
							<input type="text" id="rgfis" name="rgfis" class="mask-rg" />&nbsp;&nbsp;<span class="important">*</span> �rg�o Emissor&nbsp;&nbsp;<input class="pq" id="oemfis" name="oemfis" type="text"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento</td>
							<td colspan="3"><input type="text" id="nascsoc" name="nascsoc" class="pq mask-data"/> &nbsp; ?? Anos</td>

						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Signo <a href="#" class="interrogation">(?)</a></td>
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
						<tr>
							<td class="label"><span class="important">*</span> Nacionalidade</td>
							<td colspan="3"><select name="naciosoc">
								<option id="nacobrassoc">Brasileiro</option>
								<option id="nacobrassoc">Estrangeiro</option>
							</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Naturalidade</td>
							<td colspan="3">
								<select name="natusoc">
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
							<td class="label"><span class="important">*</span> Cidade</td>
							<td colspan="3">
								<select name="natucidadesoc">
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
							<td colspan="3"><input type="text" class="pq mask-hora" id="horacontatofis" name="horacontatofis"/></td>
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
									<td class="label">Secund�rio</td>
									<td colspan="3"><input type="text"/></td>
								</tr>	
								<tr>
									<td class="label">Comercial</td>
									<td colspan="3"><input type="text"/></td>
								</tr>
						<tr>
							<td class="label"><span class="important">*</span> Estado Civil</td>
							<td colspan="3">
								<input type="radio" id="escivsolfis" name="escivfis"/> Solteiro &nbsp;&nbsp; 
								<input type="radio" id="escivcasfis" name="escivfis"/> Casado &nbsp;&nbsp;
								<input type="radio" id="escivunfis" name="escivfis"/> Un. Est�vel &nbsp;&nbsp;
								<input type="radio" id="escivviufis" name="escivfis"/> Vi�vo &nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td class="label">Nome do C�njugue</td>
							<td colspan="3"><input type="text" id="nomeconjfis" name="nomeconjfis"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento do C�njugue</td>
							<td colspan="3"><input type="text" id="nascsoc" name="nascsoc" class="pq mask-data"/> &nbsp; ?? Anos</td>

						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Signo <a href="#" class="interrogation">(?)</a></td>
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
						<tr>
							<td class="label"><span class="important">*</span> CEP</td>
							<td colspan="3">
								<input type="text" id="endfis" name="cepfis" class="mask-cep l"/>
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Endere�o</td>
							<td><input type="text" id="endfis" name="endfis" disabled/>&nbsp;&nbsp;N�mero&nbsp;&nbsp;<input type="text" class="pq" id="endfis" name="endnumfis"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Complemento</td>
							<td colspan="3"><input type="text" class="pq" id="endecompjur" name="endecompjur" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Ponto de Refer�ncia</td>
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
						<tr>
							<td class="label"><span class="important">*</span> Moradia</td>
							<td colspan="3"><input type="radio" id="moraprofis" name="morafis"/> Pr�pria &nbsp;&nbsp; <input type="radio" id="moralfis" name="morafis"/> Alugada</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Tempo em que mora</td>
							<td colspan="3"><select><option><!-- --></option><option>Menos de 6 Meses</option><option>At� 1 Ano</option><option>At� 2 Anos</option><option>At� 5 Anos</option><option>Mais de 10 Anos</option></select></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Grupo do cliente</td>
							<td colspan="3"><select name="grupofis"><option id="lipsum">Lorem Lipsum</option></select></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Indica��o</td>
							<td colspan="3"><input type="radio" /> Token &nbsp;&nbsp; <input type="radio" /> CPF</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="3">
								<input type="text" class="b l"  />
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>

					</table>
			      </div>
			    </div>
			    <div id="passo3" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 3</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="titulo">Dados Banc�rios</span>
				  </h2>
			      <div>
					<table class="formulario_cadastro">
						<tr>
							<td class="label"><span class="important">*</span> Quantas contas banc�rias <br/> a empresa possui?</td>
							<td colspan="3">
								<select class="pq" name="qtccbancariajur">
									<option id="um">1</option>
									<option id="dois">2</option>
									<option id="tres">3</option>
									<option id="quatro">4</option>
									<option id="cinco">5</option>
									<option id="seis">6</option>
									<option id="sete">7</option>
									<option id="oito">8</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Banco</td>
							<td colspan="3"><input type="text" class="pq" id="bancojur" name="bancojur"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> AG</td>
							<td><input type="text" class="pq" id="agjur" name="agjur"/></td>
							<td class="label"><span class="important">*</span> Conta Corrente</td>
							<td><input type="text" class="pq" id="ccjur" name="ccjur"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Faturamento Anual: R$</td>
							<td colspan="3"><input type="text" class="pq" id="faturanualjur" name="faturanualjur"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Capital Social: R$</td>
							<td colspan="3"><input type="text" class="pq" id="capitalsocjur" name="capitalsocjur"/></td>
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
							<td class="label"><span class="important">*</span> Profiss�o</td>
							<td colspan="2">
								<input type="text" class="" id="socprof" name="socprof"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Funcion�rio P�blico?</td>
							<td colspan="2"><input type="radio" id="sim" name="funcpub"/> Sim &nbsp;&nbsp; <input type="radio" id="nao" name="funcpub"/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Expediente</td>
							<td colspan="2">
								Entrada &nbsp; <input type="text" class="pq mask-hora" id="entrada" name="expediente"/>
							</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="2">
								Sa�da &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="pq mask-hora" id="saida" name="expediente"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Trabalha S�bados e Domingos?</td>
							<td colspan="2"><input type="radio" id="sim" name="trabsab"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="trabsab"/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Trabalha Feriados?</td>
							<td colspan="2"><input type="radio" id="sim" name="trabfer"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="trabfer"/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Filhos?</td>
							<td colspan="2"><input type="radio" id="sim" name="filhosq"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="filhosq"/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Se sim, quantos filhos?</td>
							<td colspan="2"><input type="text" class="pq" id="qtfilhos" name="qtfilhos"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nome do filho</td>
							<td colspan="2"><input type="text" class="" id="nomefilho" name="nomefilho"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento</td>
							<td colspan="2"><input type="text" id="nascsoc" name="nascsoc" class="pq mask-data"/>&nbsp;?? Anos</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Signo <a href="#" class="interrogation">(?)</a></td>
							<td colspan="2">
								<span class="b l signos sagitario"><!-- --></span> 
								<span class="b l p5"><!-- --></span>
								<span class="b l signo-nome"><a href="#" class="lightbluetext">Sagit�rio</a></span>
							</td>
						</tr>
						<tr>
							<td class="label">Descri��o do Signo</td>
							<td colspan="2">
								<textarea class="signo-descr"></textarea>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nome do pai</td>
							<td><input type="text" class="" id="nomepaifilho" name="nomepaifilho"/></td>
							
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td><input type="checkbox" id="falecido" name="nomepaifilho"/>&nbsp;Falecido</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nome da m�e</td>
							<td><input type="text" class="" id="nomemaefilho" name="nomemaefilho"/></td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td><input type="checkbox" id="falecido" name="nomemaefilho"/>&nbsp;Falecida</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Sal�rio Bruto R$</td>
							<td colspan="2"><input type="text" class="" id="salbruto" name="salbruto"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de pagamento</td>
							<td colspan="2"><input type="text" id="pagtodata" name="pagtodata" class="pq mask-data"/></td>
						</tr>
						<tr>
							<td class="label">Religi�o</td>
							<td colspan="2">
								<select class="" name="religiao">
									<option><!--  --></option>
									<option id="ateu">Ateu</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Vis�o Pol�tica</td>
							<td colspan="2">
								<select class="" name="visaopolitica">
									<option><!--  --></option>
									<option id="lipsum">Lorem Lipsum</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Filiado � algum Partido <br/> Pol�tico?</td>
							<td colspan="2"><input type="radio" id="sim" name="filiadopartido"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="filiadopartido"/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Partido Pol�tico</td>
							<td colspan="2"><input type="text" class="" id="partidopolitico" name="partidopolitico"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Fuma?</td>
							<td colspan="2"><input type="radio" id="sim" name="fumante"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="fumante"/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Bebe?</td>
							<td colspan="2"><input type="radio" id="sim" name="bebe"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="bebe"/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Possui animais de extima��o?</td>
							<td colspan="2"><input type="radio" id="sim" name="animaisext"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="animaisext"/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Se sim, quantos animais?</td>
							<td colspan="2"><input type="text" class="pq" id="qtanimais" name="qtanimais"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Quais animais? <span class="interrogation">Separado por v�rgulas(,)</span></td>
							<td colspan="2"><input type="text" class="" id="partidopolitico" name="partidopolitico"/></td>
						</tr>
						<tr>
							<td class="label">Escolaridade</td>
							<td colspan="2">
								<select class="" name="escolaridade">
									<option><!--  --></option>
									<option id="superiorcompleto">Superior Completo</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Institui��o de forma��o</td>
							<td colspan="2"><input type="text" class="" id="instituformacao" name="instituformacao"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de forma��o</td>
							<td colspan="2"><input type="text" id="formacaodata" name="formacaodata" class="mask-data"/></td>
						</tr>
						<tr>
							<td class="label">Orienta��o Sexual</td>
							<td colspan="2">
								<select class="" name="orsex">
									<option><!--  --></option>
									<option id="gay">Gay</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Cor da pele</td>
							<td colspan="2">
								<select class="" name="corpele">
									<option><!--  --></option>
									<option id="afro">Afro Descendente</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Cor dos olhos</td>
							<td colspan="2">
								<select class="" name="corolho">
									<option><!--  --></option>
									<option id="preto">Preto</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Cor do cabelo</td>
							<td colspan="2">
								<select class="" name="corcabelo">
									<option><!--  --></option>
									<option id="preto">Preto</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Estados do Brasil que<br/>gostaria de conhecer? <span class="interrogation">(At� 3 estados.)</span></td>
							<td colspan="2">
								<select class="" name="brestados1">
									<option><!--  --></option>
									<option id="rio">Rio de Janeiro</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="2">
								<select class="" name="brestados2">
									<option><!--  --></option>
									<option id="rio">Rio de Janeiro</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="2">
								<select class="" name="brestados3">
									<option><!--  --></option>
									<option id="rio">Rio de Janeiro</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Facebook</td>
							<td colspan="2"><input type="text" class="" id="facebook" name="facebook"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Orkut</td>
							<td colspan="2"><input type="text" class="" id="orkut" name="orkut"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Msn</td>
							<td colspan="2"><input type="text" class="" id="msn" name="msn"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Enviar uma foto</td>
							<td colspan="2"><input type="file" class="" id="uploadfoto" name="uploadfoto"/></td>
						</tr>
					</table>	
			      </div>
			    </div>
			    <div id="passo5" class="accordionItem">
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
							<td class="label">E-mail secund�rio</td>
							<td colspan="3"><input type="text"/></td>
						</tr>
					</table>	
			      </div>
			    </div>
			      <h2 class="b cadItem">
			      	<a href="#" class="blackbox">&#9664; Limpar Formul�rio</a>
			      	&nbsp;
			      	<a href="#" class="blackbox">Confirmar Cadastro &#9654;</a>
			      </h2>

			</div>
		</div>
	</div>
	<div class="c"><!-- --></div>
</div>
