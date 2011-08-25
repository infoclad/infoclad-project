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
			<h2 class="b blackbox titulo-principal">Incluir Lançamentos</h2>
			<div class="b p5"><!-- --></div>
			<div class="b conteudo">
						<span class="b formulario">
							<table class="formulario_cadastro">
								<tr>
										<td class="label"><span class="important">*</span> Data</td>
										<td colspan="3">
											<input type="text" class="data"/>
										</td>
								</tr>
								<tr>
									<td class="label">&nbsp;</td>
									<td colspan="3"><input type="radio"/>&nbsp;Entrada&nbsp;&nbsp;<input type="radio"/>&nbsp;Saída</td>
								</tr>
								<tr>
										<td class="label"><span class="important">*</span> Enviar comprovante</td>
										<td colspan="3">
											<input type="file"/>
										</td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Periodicidade</td>
									<td colspan="3"><select><option>&nbsp;</option></select></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Tipo de Lançamento</td>
									<td colspan="3"><select><option>&nbsp;</option></select></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Descrição</td>
									<td colspan="3"><textarea></textarea></td>
								</tr>
								<tr>
									<td class="label"><span class="important">*</span> Valor <span class="interrogation">(R$)</span></td>
									<td colspan="3">
										<input type="text" class="real" />
									</td>
								</tr>
							</table>
						</span>
						  <h2 class="b cadItem">
							<a href="#" class="blackbox">&#9664; Limpar Formulário</a>
							&nbsp;
							<a href="#" class="blackbox">Incluir Lançamentos &#9654;</a>
						  </h2>
			</div>
	</div>
	<div class="c"><!-- --></div>
