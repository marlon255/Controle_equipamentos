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
<div id="conteudo"><h2>Consulta de Equipamentos</h2>
	   <form id="form_cadastro" method="post" target="_self">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Prefixo</label>
				<input type="text" name="cons_equip_pref" id="cons_equip_pref" required maxlength="6" />
			</div>
			<div id="ln">
				<label>Equipamento</label>
				<select name="cons_equip_equip" id="cons_equip_equip" required>
				<option>PHP AQUI</option>
				</select>
			</div>
			<div id="ln">
				<label>Modelo do Equipamento</label>
				<input type="text" name="cons_equip_mod" id="cons_equip_mod" required maxlength="30" />
			</div>
			<div id="ln">
				<label>Série do Equipamento</label>
				<input type="text" name="cons_equip_serie" id="cons_equip_serie" required maxlength="30" />
			</div>
			<div id="ln">
				<label>Placa do Equipamento</label>
				<input type="text" name="cons_equip_placa" id="cons_equip_placa" required maxlength="8" OnKeyPress="formatar('###-####', this)" />
			</div>
			<div id="ln">
				<label>Número do chassis</label>
				<input type="text" name="cons_equip_chassis" id="cons_equip_chassis" disabled required maxlength="17" />
			</div>
			<div id="ln">
				<label>Proprietário</label>
				<select name="cons_equip_propri" id="cons_equip_propri" required >
				<option>Selecione o Proprietário</option>
				</select>
			</div>
			<div id="ln">
				<label>Horas Mínimas</label>
				<input type="text" name="cons_equip_h_min" id="cons_equip_h_min" required maxlength="10" />
			</div>
			<div id="ln">
				<label>Unidade de Medida</label>
				<select name="cons_equip_und_med" id="cons_equip_und_med">
				<option>Horas</option>
				<option>KM</option>
				</select>
			</div>
			<div id="ln">
				<label>Consumo</label>
				<input type="text" name="cons_equip_consumo" id="cons_equip_consumo" required maxlength="20" />
			</div>
			<div id="ln">
				<label>Valor da Locação</label>
				<input type="text" name="cons_equip_valor" id="cons_equip_valor" required maxlength="20" />
			</div>
		   </div>
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Data de Chegada</label>
				<input type="text" name="cons_equip_data_cheg" id="cons_equip_data_cheg" required maxlength="10"  OnKeyPress="formatar('##/##/####', this)" />
			</div>
			<div id="ln">
				<label>Horimetro de Chegada</label>
				<input type="text" name="cons_equip_hori_cheg" id="cons_equip_hori_cheg" required maxlength="15" />
			</div>
			<div id="ln">
				<label>KM de Chegada</label>
				<input type="text" name="cons_equip_km_cheg" id="cons_equip_km_cheg" required maxlength="20" />
			</div>
			<div id="ln">
				<label>Ano de Fabricação</label>
				<input type="text" name="cons_equip_ano_fabric" id="cons_equip_ano_fabric" required maxlength="4" OnKeyPress="formatar('####', this)" />
			</div>
		   </div>
	   </form>
		<div id="botao_equi">
		   	<input id="cons_equip_salvar" name="cons_equip_salvar" type="submit" value="Salvar Alterações" />
			<input id="cons_equip_del" name="cons_equip_del" type="submit" value="Apagar" />
		</div>
	</div>
</body>
</html>