<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
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
<div id="conteudo"><h2>Digitação de Parte Diaria</h2>
	   <form id="form_cadastro" method="post">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Data</label><br>
				<input type="text" name="dig_pd_dia" id="dig_pd_dia" class="dia" maxlength="2" placeholder="dd" required > 
   				<input type="text" name="dig_pd_mes" id="dig_pd_mes" class="mes" maxlength="2" placeholder="mm" required> 
   				<input type="text" name="dig_pd_ano" id="dig_pd_ano" class="ano" maxlength="4" placeholder="aaaa" required>
			</div>
			<div id="ln">
				<label>Nº do Documento</label>
				<input type="text" name="dig_pd_doc" id="dig_pd_doc" class="dig_doc" required maxlength="8"/>
			</div>
			<div id="ln">
				<label>Prefixo</label>
				<input type="text" name="dig_pd_pref" id="dig_pd_pref" required maxlength="6"/>
			</div>
			<div id="ln">
				<label>Equipamento</label>
				<input type="text" name="dig_pd_equi" id="dig_pd_equi" disabled value="" />
			</div>
			<div id="ln">
				<label>Modelo do equipamento</label>
				<input type="text" name="dig_pd_mod" id="dig_pd_mod" disabled value="" />
			</div>
			<div id="ln">
				<label>Serie / Placa</label>
				<input type="text" name="dig_pd_serie_placa" id="dig_pd_serie_placa" disabled value="" />
			</div>
		   </div>
		   <div id="cadastro_baixo">
			<div id="ln">
				<label>Status do Equipamento</label>
				<select id="dig_pd_stat_equip" name="dig_pd_stat_equip" required>
				<option>Trabalhado</option>
				<option>À disposição</option>
				<option>Manutenção</option>
				</select>
			</div>
			<div id="ln">
				<label>Hora Inicíal</label>
				<input type="text" name="dig_pd_hora_ini" id="dig_pd_hora_ini" required maxlength="5" OnKeyPress="formatar('##:##', this)"/>
			</div>
			<div id="ln">
				<label>Hora Final</label>
				<input type="text" name="dig_pd_hora_fin" id="dig_pd_hora_fin" required maxlength="5" OnKeyPress="formatar('##:##', this)"/>
			</div>
			<div id="ln">
				<label>KM Inicíal</label>
				<input type="text" name="dig_pd_km_ini" id="dig_pd_km_ini" required maxlength="8" />
			</div>
			<div id="ln">
				<label>KM Final</label>
				<input type="text" name="dig_pd_km_fin" id="dig_pd_km_fin" required maxlength="8" />
			</div>
			<div id="ln">
				<label>Horimetro Inicíal</label>
				<input type="text" name="dig_pd_hori_ini" id="dig_pd_hori_ini" required maxlength="8" />
			</div>
			<div id="ln">
				<label>Horimetro Final</label>
				<input type="text" name="dig_pd_hori_fin" id="dig_pd_hori_fin" required maxlength="8" />
			</div>
		   </div>
		   <div id="botao_equi">
				<input type="submit" id="dig_pd_botao_add" name="dig_pd_botao_add" value="Adicionar" />
		   </div>
	   </form>
	</div>
    <div id="nomeclatura">
	<div id="titulo">Hora Inicíal</div>
	<div id="titulo">Hora Final</div>
	<div id="titulo">KM Inicíal</div>
	<div id="titulo">KM Final</div>
	<div id="titulo">Horim. Inicíal</div>
	<div id="titulo">Horim. Final</div>
     </div>
   <div id="visualizar">
	<table>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td id="del"><img id="dig_pd_deletar_pd" name="dig_pd_deletar_pd" src="img/dig_pd/delete.png" style="display:none;"/></td>
		</tr>
	</table>
   </div>
	<button id="dig_pd_salvar" name="dig_pd_salvar" onclick="">Salvar</button>
	<button id="dig_pd_limpar" name="dig_pd_limpar" onClick="">Limpar</button>
</body>
</html>