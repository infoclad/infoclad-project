<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistração</span>
			<div class="c"><!-- --></div>
		</div>
		<div class="b p5"><!-- --></div>
		<div class="b menu">
			<div class="b menu-item" style="border:0;">
				<div class="b p5">
					<span class="b l sprite cadastro"><!-- --></span>
					<span class="b l p5"><!-- --></span>
					<a class="b l" href="?page=cad_vendedor">Cadastro de Vendedores</a>
					<div class="c"><!-- --></div>
				</div>
			</div>
		</div>
		<div class="b p5"><!--  --></div>
		<?php include("includes/menu.php"); ?>
	</div>
	<div class="b r">
		<h2 class="b blackbox titulo-principal">Lista de Vendedores</h2>
		<div class="b p5"><!-- --></div>
		<div class="b conteudo">
			<table class="lista">
				<tr class="cor1">
						<td>&nbsp;</td>
						<td>#</td>
						<td><a href="#">Nome do Vendedor</a></td>
						<td><a href="#">Usuário</a></td>
						<td><a href="#">Grupo do Vendedor</a></td>
						<td align="center"><a href="#">Ação</a></td>
				</tr>
				<tr class="cor2">
					<td><input type="checkbox"/></td>
					<td>1</td>
					<td>Lorem Lipsum Lorem</td>
					<td><a href="#">lipsum@laufen.com.br</a></td>
					<td>CRE 99</td>
					<td>
						<span class="b l sprite delete"><!-- --></span>
						<a class="b l delete-link" href="#">Deletar</a>	
						<div class="c"><!-- --></div>
					</td>
				</tr>
				<tr class="cor1">
					<td><input type="checkbox"/></td>
					<td>1</td>
					<td>Lorem Lipsum Lorem</td>
					<td><a href="#">lipsum@laufen.com.br</a></td>
					<td>CRE 99</td>
					<td>
						<span class="b l sprite delete"><!-- --></span>
						<a class="b l delete-link" href="#">Deletar</a>	
						<div class="c"><!-- --></div>
					</td>
				</tr>
				<tr><td colspan="7">Exibir <select><option>10</option><option>20</option><option>Tudo</option></select> de 200 Cadastros</td></tr>
			</table>
		</div>
	</div>
	<div class="c"><!-- --></div>
</div>