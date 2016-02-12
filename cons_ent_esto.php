<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<title>Consulta de Entrada de Estoque</title>
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
	</head>
	<body>
		<div id="conteudo">
			<h2>Consulta Entrada de Estoque</h2>
			<form id="form_cadastro" method="post" target="_self">
				<div id="cadastro_cima">
					<div id="ln">
						<label>Data</label><br>
						<input type="text" name="consu_ent_dia" id="consu_ent_dia" class="dia" maxlength="2" placeholder="dd" />
						<input type="text" name="consu_ent_mes" id="consu_ent_mes" class="mes" maxlength="2" placeholder="mm" /> 
						<input type="text" name="consu_ent_ano" id="consu_ent_ano" class="ano" maxlength="4" placeholder="aaaa" />
					</div>
					<div id="ln">
						<label>Prefixo</label>
						<input type="text" name="consu_ent_pref" id="consu_ent_pref" maxlength="6" />
					</div>
					<div id="ln">
						<label>Nº do Documento</label>
						<input type="text" name="consu_ent_n_doc" id="consu_ent_n_doc" maxlength="8" />
					</div>
					<div id="ln">
						<label>Estoque</label>
						<select name="consu_ent_esto" id="consu_ent_esto" >
							<option>Selecione o Estoque</option>
						</select>
					</div>
					<div id="ln">
						<label>Combustível</label>
						<select name="consu_ent_comb" id="consu_ent_comb" >
							<option>Selecione o Combustível</option>
						</select>
					</div>
				</div>
			</form>
			<div id="botao_equi">
			<input type="submit" id="botao_cons_ent_esto" value="Consultar" formaction="" />
			</div>
			<div id="fundo_pesq_pd">
				<div id="cons_ent_esto">
					<ul id="cabecalho_ent_esto">
					<li>Data</li>
					<li>Nº do Documento</li>
					<li>Fornecedor</li>
					<li>Quantidade</li>
					<li>Estoque</li>
					<li>Combustivel</li>
					<li>Valor</li>
					<li>Editar</li>
					<li>Excluir</li>
					</ul>
					<div id="consu_ent_esto">
					<form><input type="text" id="consulta_ent_data" name="consulta_ent_data" value="FALTA PHP" style="border-left:1px solid;" disabled></form>
					<form><input type="text" id="consulta_ent_n_doc" name="consulta_ent_n_doc" value="FALTA PHP" disabled></form>
					<form>
						<select name="consulta_ent_for" id="consulta_ent_for" disabled>
						<option>Selecione</option>
						<option>PHP</option>
						</select></form>
					<form><input type="text" id="consulta_ent_quant" name="consulta_ent_quant" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_ent_esto" name="consulta_ent_quant" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_ent_comb" name="consulta_ent_comb" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_ent_valor" name="consulta_ent_valor" value="FALTA PHP" disabled></form>
					<form action="editar_ent_esto.php" id="editar_ent_esto"><input id="editar_ent_esto_botao" name="editar_ent_esto_botao" type="image" id="" name="" src="a" alt="Editar" height="2px"></form>
					<form action="salvar_ent_esto.php" id="salvar_ent_esto"><input id="salvar_ent_esto_botao" name="salvar_ent_esto_botao" type="image" src="a" alt="Salvar" height="2px" style="display: none"></form>
					<form action="apagar_ent_esto.php" id="apagar_ent_esto"><input id="apagar_ent_esto_botao" name="apagar_ent_esto_botao" type="image" src="a" alt="Apagar" height="2px"></form>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>