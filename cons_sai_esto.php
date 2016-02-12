<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Consulta de Entrada de Estoque</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script type="text/javascript">
		</script>
		<style type="text/css">
		</style>
	</head>
	<body>
		<div id="conteudo">
			<h2>Consulta Saída de Estoque</h2>
			<form id="form_cadastro" method="post" target="_self">
				<div id="cadastro_cima">
					<div id="ln">
						<label>Data</label><br>
						<input type="text" name="cons_sai_esto_dia" id="cons_sai_esto_dia" class="dia" maxlength="2" placeholder="dd" />
						<input type="text" name="cons_sai_esto_mes" id="cons_sai_esto_mes" class="mes" maxlength="2" placeholder="mm" /> 
						<input type="text" name="cons_sai_esto_ano" id="cons_sai_esto_ano" class="ano" maxlength="4" placeholder="aaaa" />
					</div>
					<div id="ln">
						<label>Prefixo</label>
						<input type="text" name="cons_sai_esto_pref" id="cons_sai_esto_pref" maxlength="8" />
					</div>
					<div id="ln">
						<label>Nº do Documento</label>
						<input type="text" name="cons_sai_esto_n_doc" id="cons_sai_esto_n_doc" maxlength="8" />
					</div>
					<div id="ln">
						<label>Estoque</label>
						<select name="cons_sai_esto_esto" id="cons_sai_esto_esto" >
							<option>Selecione o Estoque</option>
						</select>
					</div>
					<div id="ln">
						<label>Combustível</label>
						<select name="cons_sai_esto_comb" id="cons_sai_esto_comb" >
							<option>Selecione o Combustível</option>
						</select>
					</div>
				</div>
			</form>
			<div id="botao_equi">
			<input type="submit" id="botao_cons_sai_esto_consultar" name="botao_cons_sai_esto_consultar" value="Consultar" formaction="" />
			</div>
			<div id="fundo_pesq_pd">
				<div id="cons_ent_esto">
					<ul id="cabecalho_ent_esto">
					<li>Data</li>
					<li>Nº do Documento</li>
					<li>Equipamento</li>
					<li>Quantidade</li>
					<li>Estoque</li>
					<li>Combustivel</li>
					<li>Valor</li>
					<li>Consumo</li>
					<li>Editar</li>
					<li>Excluir</li>
					</ul>
					<div id="consu_ent_esto">
					<form><input type="text" id="consulta_sai_esto_data" name="consulta_sai_esto_data" value="FALTA PHP" style="border-left:1px solid;" disabled></form>
					<form><input type="text" id="consulta_sai_esto_n_doc" name="consulta_sai_esto_n_doc" value="FALTA PHP" disabled></form>
					<form>
						<select name="consulta_sai_esto_equip" id="consulta_sai_esto_equip" disabled>
						<option>Selecione</option>
						<option>PHP</option>
						</select></form>
					<form><input type="text" id="consulta_sai_esto_qntd" name="consulta_sai_esto_qntd" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_sai_esto_esto" name="consulta_sai_esto_esto" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_sai_esto_comb" nome="consulta_sai_esto_comb" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_sai_esto_valor" nome="consulta_sai_esto_valor" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_sai_esto_consumo" nome="consulta_sai_esto_consumo" value="FALTA PHP" disabled></form>
					<form action="editar_consulta_sai_esto.php" id="editar_pd"><input id="consulta_sai_esto_editar" name="consulta_sai_esto_editar" type="image" src="a" alt="Editar" height="2px"></form>
					<form action="salvar_consulta_sai_esto.php" id="salvar_pd"><input id="consulta_sai_esto_salvar" name="consulta_sai_esto_salvar" type="image" src="a" alt="Salvar" height="2px" style="display: none"></form>
					<form action="apagar_consulta_sai_esto.php" id="apagar_pd"><input id="consulta_sai_esto_apagar" name="consulta_sai_esto_apagar" type="image" src="a" alt="Apagar" height="2px"></form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>