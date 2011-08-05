<div class="wrapper p5">
	<div class="b l sidebar">
		<div  class="b blackbox">
			<span class="b l sprite admin"><!-- --></span>
			<span class="b l p5"><!-- --></span>
			<span class="b l">Admnistração</span>
			<div class="c"><!-- --></div>
		</div>
		<div class="b p5"><!-- --></div>
		<?php include("includes/menu_groupusr.php"); ?>
		<div class="b p5"><!--  --></div>
		<?php include("includes/menu.php"); ?>
	</div>
	<div class="b r">
		<h2 class="b blackbox titulo-principal">Lista de Grupos de Usuários</h2>
		<div class="b p5"><!-- --></div>
		<div class="b conteudo">
			<table class="lista">
				<tr class="cor1">
						<td>&nbsp;</td>
						<td>#</td>
						<td><a href="#">Nome do Grupo de Usuário</a></td>
						<td><a href="#">Nível do Grupo de Usuário</a></td>
						<td align="center"><a href="#">Ação</a></td>
				</tr>
				<tr class="cor2">
					<td><input type="checkbox"/></td>
					<td>1</td>
					<td>Lorem Lipsum Lorem</td>
					<td>200</td>
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
					<td>300</td>
					<td>
						<span class="b l sprite delete"><!-- --></span>
						<a class="b l delete-link" href="#">Deletar</a>	
						<div class="c"><!-- --></div>
					</td>
				</tr>
				<tr><td colspan="6">Exibir <select><option>10</option><option>20</option><option>Tudo</option></select> de 200 Cadastros</td></tr>
			</table>
		</div>
	</div>
	<div class="c"><!-- --></div>
</div>