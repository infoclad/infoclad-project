<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistração</span>
			<div class="c"><!-- --></div>
		</div>
		<div class="b p5"><!--  --></div>
		<?php include("includes/menu.php"); ?>
	</div>
	<div class="b r">
		<div class="b">
			<h2 class="b blackbox titulo-principal">Alterar Dados Cadastrais</h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
				<div id="passo1" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 1</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="l titulo">Dados Cadastrais</span>
			      	<span class="b l p5"><!--  --></span>
			      	<a href="#"><u>editar</u></a>
				  </h2>
			      <div>
					<table class="formulario_cadastro">
						<tr>
							<td class="label"><span class="important">*</span> Informe o CPF</td>
							<td colspan="5">
								<input class="b l" type="text" id="cpffis" name="cpffis" class="mask-cpf"  />
								<span class="b l p5"><!-- --></span>
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label">Nome Completo</td>
							<td colspan="3"><input type="text" id="nomefis" name="nomefis" disabled/></td>
						</tr>
						<tr>
							<td class="label">Situação Cadastral</td>
							<td colspan="3"><input type="text" id="situfis" name="situfis" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Sexo</td>
							<td colspan="3"><input type="radio" id="smasfis" name="sexofis"/> Masculino &nbsp;&nbsp; <input type="radio" id="sfemfis" name="sexofis"/> Feminino</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> RG</td>
							<td>
								<input type="text" id="rgfis" name="rgfis" class="mask-rg" />
							</td>
							<td class="label"><span class="important">*</span> Órgão Emissor</td>
							<td>
								<input class="pq" id="oemfis" name="oemfis" type="text"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Carteira de Trabalho</td>
							<td colspan="3"><input class="mask-clt" type="text" id="situfis" name="situfis"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Matrícula</td>
							<td colspan="3"><input type="text" id="situfis" name="situfis"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento</td>
							<td colspan="3"><input type="text" id="nascfis" name="nascfis" class="mask-data"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Naturalidade</td>
							<td colspan="3">
								<select name="natusoc">
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
								<select name="natucidadesoc">
	 								<option><!--  --></option>
								</select>
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
							<td class="label"><span class="important">*</span> Telefones</td>
							<td><input id="telresfis" name="telresfis" type="text" class="mask-fone"/></td>
							<td class="label"><span class="important">*</span> Ramal <span class="interrogation">(opcional)</span></td>
							<td>
								<input class="pq" id="ramalresfis" name="ramalfaxju2" type="text"/>
							</td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="3"><input id="telcelfis" name="telcelfis" type="text" class="mask-fone"/></td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td><input id="telcomfis" name="telcomfis" type="text" class="mask-fone"/></td>
							<td class="label"><span class="important">*</span> Ramal  <span class="interrogation">(opcional)</span></td>
							<td>
								<input class="pq" id="ramalcomfis" name="ramalcomfis" type="text"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> E-mail</td>
							<td colspan="3"><input id="mailpesfis" name="mailpesfis" type="text"/></td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="3"><input id="mailaltfis" name="mailaltfis" type="text"/></td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td colspan="3"><input id="mailcomfis" name="mailcomfis" type="text"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Estado Civil</td>
							<td colspan="3">
								<input type="radio" id="escivsolfis" name="escivfis"/> Solteiro &nbsp;&nbsp; 
								<input type="radio" id="escivcasfis" name="escivfis"/> Casado &nbsp;&nbsp;
								<input type="radio" id="escivunfis" name="escivfis"/> Un. Estável &nbsp;&nbsp;
								<input type="radio" id="escivviufis" name="escivfis"/> Viúvo &nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td class="label">Nome do Cônjugue</td>
							<td colspan="3"><input type="text" id="nomeconjfis" name="nomeconjfis"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento do Cônjugue</td>
							<td colspan="3"><input type="text" id="conjnascfis" name="conjnascfis" class="mask-data"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> CEP</td>
							<td colspan="3"><input type="text" id="endfis" name="cepfis" class="mask-cep"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Endereço</td>
							<td><input type="text" id="endfis" name="endfis" disabled/></td>
							<td class="label">Número</td>
							<td><input type="text" class="pq" id="endfis" name="endnumfis"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important"></span> Cidade</td>
							<td><input type="text" id="endfis" name="endcidadefis" disabled/></td>
							<td class="label">UF</td>
							<td><input type="text" class="pq" id="endfis" name="enduffis" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Bairro</td>
							<td colspan="3"><input type="text" id="endbairrofis" name="endbairrofis"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Moradia</td>
							<td colspan="3"><input type="radio" id="moraprofis" name="morafis"/> Própria &nbsp;&nbsp; <input type="radio" id="moralfis" name="morafis"/> Alugada</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Tempo em que mora</td>
							<td colspan="3"><input type="text" id="moratempofis" name="morafis"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Grupo do cliente</td>
							<td colspan="3"><select name="grupofis"><option id="lipsum">Lorem Lipsum</option></select></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Referrer <a href="#" class="interrogation">(?)</a></td>
							<td colspan="3"><input type="text" id="referrerfis" name="referrerfis"/></td>
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
					</table>
					<span class="b p5"><!--  --></span>
					<span class="b etapa">
				      	<a href="#" class="redbox">&#9664; Limpar Formulário</a>
				      	&nbsp;
						<a href="#passo2" class="bluebox etapa-link">Próxima Etapa &#9654;</a>    
					</span> 
			      </div>
			    </div>
			    
				<div id="passo2" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 2</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="l titulo">Pesquisa Social</span>
			      	<span class="b l p5"><!--  --></span>
			      	<a href="#"><u>editar</u></a>
				  </h2>
			      <div>
					<table class="formulario_cadastro">
						<tr>
							<td class="label"><span class="important">*</span> Profissão</td>
							<td colspan="2">
								<input type="text" class="" id="socprof" name="socprof"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Funcionário Público?</td>
							<td colspan="2"><input type="radio" id="sim" name="funcpub"/> Sim &nbsp;&nbsp; <input type="radio" id="nao" name="funcpub"/> Não</td>
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
								Saída &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="pq mask-hora" id="saida" name="expediente"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Trabalha Sábados e Domingos?</td>
							<td colspan="2"><input type="radio" id="sim" name="trabsab"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="trabsab"/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Trabalha Feriados?</td>
							<td colspan="2"><input type="radio" id="sim" name="trabfer"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="trabfer"/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Mora com os pais?</td>
							<td colspan="2"><input type="radio" id="sim" name="morapais"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="morapais"/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Filhos?</td>
							<td colspan="2"><input type="radio" id="sim" name="filhosq"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="filhosq"/> Não</td>
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
							<td colspan="2"><input type="text" id="filhonasc" name="filhonasc" class="mask-data"/></td>
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
							<td><input type="text" class="" id="nomepaifilho" name="nomepaifilho"/></td>
							
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td><input type="checkbox" id="falecido" name="nomepaifilho"/>&nbsp;Falecido</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nome da mãe</td>
							<td><input type="text" class="" id="nomemaefilho" name="nomemaefilho"/></td>
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td><input type="checkbox" id="falecido" name="nomemaefilho"/>&nbsp;Falecida</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Salário Bruto R$</td>
							<td colspan="2"><input type="text" class="" id="salbruto" name="salbruto"/></td>
						</tr>
						<tr>
							<td class="label">Religião</td>
							<td colspan="2">
								<select class="" name="religiao">
									<option><!--  --></option>
									<option id="ateu">Ateu</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Visão Política</td>
							<td colspan="2">
								<select class="" name="visaopolitica">
									<option><!--  --></option>
									<option id="lipsum">Lorem Lipsum</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Filiado à algum Partido <br/> Político?</td>
							<td colspan="2"><input type="radio" id="sim" name="filiadopartido"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="filiadopartido"/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Partido Político</td>
							<td colspan="2"><input type="text" class="" id="partidopolitico" name="partidopolitico"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Fuma?</td>
							<td colspan="2"><input type="radio" id="sim" name="fumante"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="fumante"/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Bebe?</td>
							<td colspan="2"><input type="radio" id="sim" name="bebe"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="bebe"/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Possui animais de extimação?</td>
							<td colspan="2"><input type="radio" id="sim" name="animaisext"/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="nao" name="animaisext"/> Não</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Se sim, quantos animais?</td>
							<td colspan="2"><input type="text" class="pq" id="qtanimais" name="qtanimais"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Quais animais? <span class="interrogation">Separado por vírgulas(,)</span></td>
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
							<td class="label"><span class="important">*</span> Instituição de formação</td>
							<td colspan="2"><input type="text" class="" id="instituformacao" name="instituformacao"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de formação</td>
							<td colspan="2"><input type="text" id="formacaodata" name="formacaodata" class="mask-data"/></td>
						</tr>
						<tr>
							<td class="label">Orientação Sexual</td>
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
							<td class="label">Estados do Brasil que<br/>gostaria de conhecer? <span class="interrogation">(Até 3 estados.)</span></td>
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
					<span class="b p5"><!--  --></span>
					<span class="b etapa">
				      	<a href="#" class="redbox">&#9664; Limpar Formulário</a>
				      	&nbsp;
						<a href="#passo3" class="bluebox etapa-link">Próxima Etapa &#9654;</a>    
					</span> 
			      </div>
			    </div>
			    <div id="passo3" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 3</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="l titulo">Dados de Acesso</span>
			      	<span class="b l p5"><!--  --></span>
			      	<a href="#"><u>editar</u></a>
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
					<span class="b p5"><!--  --></span>
					<span class="b etapa">
				      	<a href="#" class="redbox">&#9664; Limpar Formulário</a>
				      	&nbsp;
						<a href="#passo4" class="greenbox">Finalizar Cadastro &#9654;</a>    
					</span> 
			      </div>
			    </div>
			    <div id="passo4" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 4</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="titulo">Confirmar Cadastro</span>
				  </h2>
			      <div>
			      	<a href="#" class="redbox">&#9664; Limpar Formulário</a>
			      	&nbsp;
			      	<a href="#" class="greenbox">Salvar Alterações &#9654;</a>
			      </div>
			    </div>
			</div>
		</div>
	</div>
	<div class="c"><!-- --></div>
</div>