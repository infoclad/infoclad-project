<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistração</span>
			<div class="c"><!-- --></div>
		</div>
		<div class="b p5"><!-- --></div>
		<?php include("includes/menu_visita.php"); ?>
		<div class="b p5"><!--  --></div>
		<?php include("includes/menu.php"); ?>
	</div>
	<div class="b r">
		<h2 class="b blackbox titulo-principal">Agendar Visita</h2>
		<div class="b p5"><!-- --></div>
		<div class="b conteudo">
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
									<td class="label"><span class="important">*</span> Buscar cliente</td>
									<td colspan="5">
										<input type="text" id="" name="" class="b l mask-cpf"  />
										<a href="#" class="b l sprite lupa"><!--  --></a>
									</td>
								</tr>
								<tr>
									<td class="label">&nbsp;</td>
									<td colspan="5">
										<input type="radio"/> CPF&nbsp;&nbsp;<input type="radio"/> CNPJ&nbsp;&nbsp;<input type="radio"/> E-mail
									</td>
								</tr>
								<tr>
									<td class="label">Nome Completo</td>
									<td colspan="3"><input type="text" id="" name="" disabled/></td>
								</tr>
								<tr>
									<td class="label">Nome de usuário</td>
									<td colspan="3"><input type="text" id="" name="" disabled/></td>
								</tr>
								<tr>
									<td class="label">E-mail</td>
									<td colspan="3"><input type="text" id="" name="" disabled/></td>
								</tr>
								<tr>
									<td class="label">Motivo</td>
									<td colspan="3">
										<select>
											<option>Prospecção</option>
											<option>Manutenção da Fidelização</option>
											<option>Prestação de Serviços</option>
											<option>Outros</option>
										</select>
									</td>
								</tr>
								<tr>
									<td class="label">Caso "Outros", <br/>informe o motivo</td>
									<td colspan="3"><input type="text" id="" name=""/></td>
								</tr>
								<tr>
									<td class="label">Data</td>
									<td colspan="3"><input type="text" id="" name="" class="mask-data"/></td>
								</tr>
							</table>
						</span>
				      <h2 class="b cadItem">
				      	<a href="#" class="blackbox">Agendar &#9654;</a>
				      </h2>
		</div>
	</div>
	<div class="c"><!-- --></div>
</div>