<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
<div id="conteudo"><h2>Cadastro de Combustível</h2>
	   <form id="form_cadastro" method="post" target="_self">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Nome</label>
				<input type="text" name="comb_nome" id="comb_nome" required maxlength="10" />
			</div>
			<div id="ln">
				<label>Prefixo</label>
				<input type="text" name="comb_pref" id="comb_pref" required maxlength="6" />
			</div>
			<div id="ln">
				<label>Un. de Medida</label>
				<select name="comb_un_medida" id="comb_un_medida" required>
				<option>Selecione</option>
				<option>Kg</option>
				<option>g</option>
				<option>L</option>
				<option>ml</option>
				</select>
			</div>
		   </div>
		   <div id="botao_equi">
				<input id="cad_comb_button" type="submit" value="Cadastrar" />
		   </div>
	   </form>
	<div id="fundo_pesq_pd">
	<div id="cons_comb">
				<ul id="cabecalho_comb">
					<li>Nome</li>
					<li>Prefixo</li>
					<li>Un. de Medida</li>
					<li>Editar</li>
					<li>Excluir</li>
				</ul>
				<div id="cad_comb">
					<form><input type="text" id="cad_nome_comb" name="cad_nome_comb" value="FALTA PHP" style="border-left:1px solid;" disabled></form>
					<form><input type="text" id="cad_pref_comb" name="cad_pref_comb" value="FALTA PHP" disabled></form>
					<form>
						<select name="cad_unid_comb" id="cad_unid_comb" disabled>
						<option>Selecione</option>
						<option>Kg</option>
						<option>g</option>
						<option>L</option>
						<option>ml</option>
					</form>
					<form action="editar_pd.php" id="editar_comb" name="editar_cad_comb"><input type="image" src="a" alt="Editar" height="2px"></form>
					<form action="apagar_pd.php" id="salvar_comb" name="salvar_cad_comb" style="display: none"><input type="image" src="a" alt="Apagar" height="2px"></form>
					<form action="apagar_pd.php" id="apagar_comb" name="apagar_cad_comb"><input type="image" src="a" alt="Apagar" height="2px"></form>
				</div>
	</div>
	</div>
	</div>
</body>
</html>