<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistra��o</span>
			<div class="c"><!-- --></div>
		</div>
		<div class="b p5"><!-- --></div>
		<?php include("includes/menu_funcionarios.php"); ?>
		<div class="b p5"><!--  --></div>
		<?php include("includes/menu.php"); ?>
	</div>
	<div class="b r">
		<div class="b">
			<h2 class="b blackbox titulo-principal">Cadastro de Funcion�rio</h2>
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
							<td class="label"><span class="important">*</span> Funcion�rio</td>
							<td colspan="3"><input type="radio" id="" name=""/> Tempor�rio &nbsp;&nbsp; <input type="radio" id="" name=""/> Efetivo</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Informe o CPF</td>
							<td colspan="5">
								<input class="b l mask-cpf" type="text" id="" name=""/>
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label">Situa��o Cadastral</td>
							<td colspan="3"><input type="text" id="" name="" disabled/></td>
						</tr>
						<tr>
							<td class="label">Nome Completo</td>
							<td colspan="3"><input type="text" id="" name="" disabled/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Cargo</td>
							<td colspan="3"><select><option>&nbsp;</option></select></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Matr�cula</td>
							<td colspan="3"><input type="text" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Sexo</td>
							<td colspan="3"><input type="radio" id="" name=""/> Masculino &nbsp;&nbsp; <input type="radio" id="" name=""/> Feminino</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> RG</td>
							<td>
							<input type="text" id="" name="" class="mask-rg" />&nbsp;&nbsp;<span class="important">*</span> �rg�o Emissor&nbsp;&nbsp;<input class="pq" id="" name="" type="text"/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Carteira de Trabalho</td>
							<td colspan="3"><input class="mask-clt" type="text" id="" name=""/>&nbsp;&nbsp;<span class="important">*</span> S�rie&nbsp;&nbsp;<input class="pq" id="" name="" type="text"/>&nbsp;&nbsp;<span class="important">*</span> Estado&nbsp;&nbsp;<select class="pq"><option><!-- --></option></select></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Certificado de Reservista</td>
							<td colspan="3"><input type="text" class="mask-decimal" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> T�tulo de Eleitor</td>
							<td colspan="3"><input type="text" id="" name=""/></td>
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
							<td class="label"><span class="important">*</span> Naturalidade</td>
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
							<td class="label"><span class="important">*</span> Cidade</td>
							<td colspan="3">
								<select name="">
	 								<option>&nbsp;</option>
								</select>
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
							<td class="label"><span class="important">*</span> Foto</td>
							<td colspan="3"><input type="file"/></td>
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
							<td class="label">Recado</td>
							<td colspan="3"><input type="text" class="mask-fone"/>&nbsp;&nbsp;Contato&nbsp;&nbsp;<input type="text"/></td>
						</tr>
						<tr>
							<td class="label">Recado 2</td>
							<td><input type="text" class="mask-fone"/>&nbsp;&nbsp;Contato&nbsp;&nbsp;<input type="text"/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> CEP</td>
							<td colspan="3">
								<input type="text" id="" name="" class="mask-cep l"/>
								<a href="#" class="b l sprite lupa"><!--  --></a>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Endere�o</td>
							<td><input type="text" id="" name="" disabled/>&nbsp;&nbsp;N�mero&nbsp;&nbsp;<input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Complemento</td>
							<td colspan="3"><input type="text" class="pq" id="" name="" /></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Ponto de Refer�ncia</td>
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
								<input type="radio" id="" name=""/> Solteiro &nbsp;&nbsp; 
								<input type="radio" id="" name=""/> Casado &nbsp;&nbsp;
								<input type="radio" id="" name=""/> Un. Est�vel &nbsp;&nbsp;
								<input type="radio" id="" name=""/> Vi�vo &nbsp;&nbsp;
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span>Nome do C�njugue</td>
							<td colspan="3"><input type="text" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de Nascimento do C�njugue</td>
							<td colspan="3"><input type="text" id="" name="" class="pq mask-data"/> &nbsp; ?? Anos</td>

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
					</table>
			      </div>
			    </div>
				<div id="passo2" class="accordionItem">
			      <h2>
			      	<span class="b l blackbox pq">Passo 2</span> 
			      	<span class="b l p5"><!--  --></span>
			      	<span class="titulo">Pesquisa Social</span>
				  </h2>
			      <div>
					<table class="formulario_cadastro">
						<tr>
							<td class="label"><span class="important">*</span> Profiss�o</td>
							<td colspan="2">
								<input type="text" class="" id="" name=""/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Funcion�rio P�blico?</td>
							<td colspan="2"><input type="radio" id="" name=""/> Sim &nbsp;&nbsp; <input type="radio" id="" name=""/> N�o</td>
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
								Sa�da &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type="text" class="pq mask-hora" id="" name=""/>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Trabalha S�bados e Domingos?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Trabalha Feriados?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Filhos?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> N�o</td>
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
							<td><input type="text" class="" id="" name=""/></td>
							
						</tr>
						<tr>
							<td class="label">&nbsp;</td>
							<td><input type="checkbox" id="" name=""/>&nbsp;Falecido</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Nome da m�e</td>
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
							<td class="label">Religi�o</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Ateu</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Vis�o Pol�tica</td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">Lorem Lipsum</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Filiado � algum Partido <br/> Pol�tico?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Partido Pol�tico</td>
							<td colspan="2"><select><option><!-- --></option></select></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Fuma?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Bebe?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Possui animais de extima��o?</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> N�o</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Se sim, quantos animais?</td>
							<td colspan="2"><input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Quais animais? <span class="interrogation">Separado por v�rgulas(,)</span></td>
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
							<td class="label"><span class="important">*</span> Institui��o de forma��o</td>
							<td colspan="2"><input type="text" class="" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Data de forma��o</td>
							<td colspan="2"><input type="text" id="" name="" class="mask-data"/></td>
						</tr>
						<tr>
							<td class="label">Orienta��o Sexual</td>
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
							<td class="label">Estados do Brasil que<br/>gostaria de conhecer? <span class="interrogation">(At� 3 estados.)</span></td>
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
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Sim&nbsp;&nbsp;<input type="radio" id="" name=""/> N�o</td>
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
							<td class="label"><span class="important">*</span> Tipo de ve�culo</td>
							<td colspan="2"><input type="radio" id="" name=""/>&nbsp;Nacional&nbsp;&nbsp;<input type="radio" id="" name=""/> Importado</td>
						</tr>
						<tr>
							<td class="label"><span class="important">*</span> Cilindradas</td>
							<td colspan="2"><input type="text" class="pq" id="" name=""/></td>
						</tr>
						<tr>
							<td class="label">Quanto cal�a? <span class="interrogation">(N�mero do sapato.)</span></td>
							<td colspan="2">
								<select class="" name="">
									<option><!--  --></option>
									<option id="">&nbps;</option>
								</select>
							</td>
						</tr>
						<tr>
							<td class="label">Quanto veste? <span class="interrogation">(N�mero da roupa.)</span></td>
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
