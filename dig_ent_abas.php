<html>
<head>
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
<div id="conteudo"><h2>Entrada de Estoque</h2>
	   <form id="form_ent_comb" method="post" action="">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Data de Entrada</label><br>
				<input type="text" name="dig_ent_abas_dia" id="dig_ent_abas_dia" class="dia" maxlength="2" placeholder="dd" required> 
   				<input type="text" name="dig_ent_abas_mes" id="dig_ent_abas_mes" class="mes" maxlength="2" placeholder="mm" required> 
   				<input type="text" name="dig_ent_abas_ano" id="dig_ent_abas_ano" class="ano" maxlength="4" placeholder="aaaa" required>
			</div>
			<div id="ln">
				<label>Nº do Documento</label>
				<input type="text" name="dig_ent_abas_n_doc" id="dig_ent_abas_n_doc" class="dig_doc" required maxlength="8" />
			</div>
			<div id="ln">
				<label>Fornecedor</label>
				<input type="text" name="dig_ent_abas_forn" id="dig_ent_abas_forn" required maxlength="25"/>
			</div>
			<div id="ln">
				<label>Quantidade</label>
				<input type="text" name="dig_ent_abas_qntd" id="dig_ent_abas_qntd" required maxlength="8"/>
			</div>
			<div id="ln">
				<label>Estoque</label>
				<select id="dig_ent_abas_esto" name="dig_ent_abas_esto" required>
				<option>Selecione o Estoque</option>
				<option>PHP ESTOQUE</option>
				</select>
			</div>
			<div id="ln">
				<label>Combustível</label>
				<select id="dig_ent_abas_comb" name="dig_ent_abas_comb" required>
				<option>Selecione o Combustível</option>
				<option>PHP Combustível</option>
				</select>
			</div>
			<div id="ln">
				<label>Valor</label>
				<input type="text" name="dig_ent_abas_valor" id="dig_ent_abas_Valor" required maxlength="8"/>
			</div>
			<div id="ln">
				<label>Un. de Medida</label>
				<input type="text" name="dig_ent_abas_un_medida" id="dig_ent_abas_un_medida" disabled />
			</div>
			<div id="ln">
				<label>Valor/Unidade de Medida</label>
				<input type="text" name="dig_ent_abas_var_und" id="dig_ent_abas_var_und" disabled value="PHP CALCULO" />
			</div>
			<div id="ln">
				<label>Quantidade em Estoque</label>
				<input type="text" name="dig_ent_abas_qntd_esto" id="dig_ent_abas_qntd_esto" disabled value="CALCULO QUANTIDADE" />
			</div>
			<div id="ln">
				<label>Capacidade Disponivel</label>
				<input type="text" name="dig_ent_abas_capacidade" id="dig_ent_abas_capacidade" disabled value="CALCULO DISPONIVEL" />
			</div>
		   </div>
		   <div id="botao_equi">
				<input type="submit" id="dig_ent_abas_salvar" name="dig_ent_abas_salvar" value="Salvar" />
		   </div>
	   </form>
	</div>
</body>
</html>