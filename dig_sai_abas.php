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
<div id="conteudo"><h2>Saída de Estoque</h2>
	   <form id="form_cadastro" method="post" action="">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Data</label><br>
				<input type="text" name="dig_sai_abas_dia" id="dig_sai_abas_dia" class="dia" maxlength="2" placeholder="dd" required> 
   				<input type="text" name="dig_sai_abas_mes" id="dig_sai_abas_mes" class="mes" maxlength="2" placeholder="mm" required> 
   				<input type="text" name="dig_sai_abas_ano" id="dig_sai_abas_ano" class="ano" maxlength="4" placeholder="aaaa" required>
			</div>
			<div id="ln">
				<label>Nº do Abastecimento</label>
				<input type="text" name="dig_sai_abas_doc" id="dig_sai_abas_doc" class="dig_doc" required maxlength="8" />
			</div>
			<div id="ln">
				<label>Prefixo</label>
				<input type="text" name="dig_sai_abas_pref" id="dig_sai_abas_pref" required maxlength="6"/>
			</div>
			<div id="ln">
				<label>Equipamento</label>
				<input type="text" name="dig_sai_abas_equi" id="dig_sai_abas_equi" disabled value="" />
			</div>
			<div id="ln">
				<label>Modelo do equipamento</label>
				<input type="text" name="dig_sai_abas_mod" id="dig_sai_abas_mod" disabled value="" />
			</div>
			<div id="ln">
				<label>Serie / Placa</label>
				<input type="text" name="dig_sai_abas_serie_placa" id="dig_sai_abas_serie_placa" disabled value="" />
			</div>
			<div id="ln">
				<label>Custo</label>
				<select id="dig_sai_abas_custo" name="dig_sai_abas_custo" required>
				<option>Selecione o Custo</option>
				<option>Direto</option>
				<option>Indireto</option>
				</select>
			</div>
			<div id="ln">
				<label>Estoque</label>
				<select id="dig_sai_abas_esto" name="dig_sai_abas_esto" required>
				<option>Selecione o Estoque</option>
				<option>Tanque</option>
				<option>Posto</option>
				<option>Caminhão Lubrificante</option>
				</select>
			</div>
			<div id="ln">
				<label>Tipo de Combustível</label>
				<select id="dig_sai_abas_tipo_comb" name="dig_sai_abas_tipo_comb" required>
				<option>Selecione o Combustível</option>
				<option>Gasolina</option>
				<option>Diesel</option>
				<option>Lubrificantes</option>
				</select>
			</div>
			<div id="ln">
				<label>Total em Estoque</label>
				<input type="text" name="dig_sai_abas_tot_esto" id="dig_sai_abas_tot_esto" disabled value="" />
			</div>
			<div id="ln">
				<label>Consumo Anterior</label>
				<input type="text" name="dig_sai_abas_consu_anterior" id="dig_sai_abas_consu_anterior" disabled value="" />
			</div>
			<div id="ln">
				<label>Data do Último Abast.</label>
				<input type="text" name="dig_sai_abas_data_ult_abas" id="dig_sai_abas_data_ult_abas" disabled value="" />
			</div>
			<div id="ln">
				<label>Horim. do Último Abast.</label>
				<input type="text" name="dig_sai_abas_hori_ult_abas" id="dig_sai_abas_hori_ult_abas" disabled value="" />
			</div>
			<div id="ln">
				<label>KM do Último Abast.</label>
				<input type="text" name="dig_sai_abas_km_ult_abas" id="dig_sai_abas_km_ult_abas" disabled value="" />
			</div>
		   </div>
		   <div id="cadastro_baixo">
			<div id="ln">
				<label>Hora do Abastecimento</label>
				<input type="text" name="dig_sai_abas_hora_atual" id="dig_sai_abas_hora_atual" required maxlength="5" OnKeyPress="formatar('##:##', this)" />
			</div>
			<div id="ln">
				<label>Horimetro Atual</label>
				<input type="text" name="dig_sai_abas_hori_atual" id="dig_sai_abas_hori_atual" required maxlength="8"/>
			</div>
			<div id="ln">
				<label>KM Atual</label>
				<input type="text" name="dig_sai_abas_km_atual" id="dig_sai_abas_km_atual" required maxlength="8"/>
			</div>
			<div id="ln">
				<label>Consumo por Horimetro</label>
				<input type="text" name="dig_sai_abas_consumo_hori" id="dig_sai_abas_consumo_hori" disabled />
			</div>
			<div id="ln">
				<label>Consumo por KM</label>
				<input type="text" name="dig_sai_abas_consumo_km" id="dig_sai_abas_consumo_km" disabled />
			</div>
		   </div>
		   <div id="botao_equi">
				<input type="submit" id="dig_sai_abas_salvar" name="dig_sai_abas_salvar" value="Salvar" />
		   </div>
	   </form>
	</div>
</body>
</html>