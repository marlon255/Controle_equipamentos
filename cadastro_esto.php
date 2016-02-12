<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div id="conteudo"><h2>Cadastro de Estoque</h2>
	   <form id="form_cadastro" method="post" target="_self">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Prefixo</label>
				<input type="text" name="cad_esto_pref" id="cad_esto_pref" required maxlength="6" />
			</div>
			<div id="ln">
				<label>Capacidade</label>
				<input type="text" name="cad_esto_capac" id="cad_esto_capac" required maxlength="8" />
			</div>
			<div id="ln">
				<label>Combustivel/Prefixo</label>
				<select name="cad_esto_un_medida" id="cad_esto_un_medida" required>
				<option>Selecione</option>
				<option>PHP COMBUSTIVEIS/PHP PREFIXO</option>
				</select>
			</div>
		   </div>
		   <div id="botao_cat_esto">
				<input id="add_cad_esto" name="add_cad_esto" type="submit" value="Adicionar" formaction="" />
				<input id="salve_cad_esto" name="salve_cad_esto" type="submit" value="Salvar" formaction="" />
				<input id="buscar_cad_esto" name="buscar_cad_esto" type="submit" value="Buscar" formaction="" />
		   </div>
	   </form>
<div id="fundo_pesq_pd">
	<div id="cons_esto">
				<ul id="cabecalho_esto">
					<li>Prefixo</li>
					<li>Capacidade</li>
					<li>Combustível/Prefixo</li>
					<li>Un. de Medida</li>
					<li>Editar</li>
					<li>Excluir</li>
				</ul>
				<div id="consu_esto">
					<form><input type="text" id="consu_esto_pref" name="consu_esto_pref" value="FALTA PHP" style="border-left:1px solid;" disabled></form>
					<form><input type="text" id="consu_esto_cap" name="consu_esto_cap" value="FALTA PHP" disabled></form>
					<form>
						<select name="cons_esto_comb" id="cons_esto_comb" disabled>
						<option>Selecione</option>
						<option>PHP</option>
						</select></form>
					<form><input type="text" id="cons_un_medida" name="consu_un_medida" value="FALTA PHP" disabled></form>
					<form action="editar_pd.php" id="cad_esto_edit" name="cad_esto_edit"><input type="image" src="a" alt="Editar" height="2px"></form>
					<form action="apagar_pd.php" id="cad_esto_del" name="cad_esto_del"><input type="image" src="a" alt="Apagar" height="2px"></form>
				</div>
	</div>
	</div>
	</div>
</body>
</html>