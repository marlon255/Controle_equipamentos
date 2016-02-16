<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
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
	<div id="consumo_comb">
			<div id="nome_comb">
				<ul>
					<li>Nome</li>
					<li>Prefixo</li>
					<li>Un. de Medida</li>
					<li>Ações</li>
				</ul>
			</div>
			<div id="exibir_comb">
				<form id="exibir_combustivel" name="exibir_combustivel" method="POST">
					<input type="text" id="cad_nome_comb" name="cad_nome_comb" class="teste" value="FALTA PHP" style="border-left:1px solid;" disabled>
					<input type="text" id="cad_pref_comb" name="cad_pref_comb" class="teste" value="FALTA PHP" disabled>
					<select name="cad_unid_comb" id="cad_unid_comb" class="teste" disabled>
					<option>Selecione</option>
					<option>Kg</option>
					<option>g</option>
					<option>L</option>
					<option>ml</option>
					<input type="button" id="editar_comb" name="editar_cad_comb" class="comb_button" value='Editar'>
					<input type="submit" id="salvar_comb" name="salvar_cad_comb" class="comb_button" value='Salvar'/>
					<input type="submit" id="apagar_comb" name="apagar_cad_comb>" class="comb_button" value='Deletar'>
				</form>
			</div>
	</div>
	</div>
	</div>
</body>
</html>