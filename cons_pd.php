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
<div id="conteudo"><h2>Tipo de equipamentos</h2>
	   <form id="form_cadastro" method="post" target="_self">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Data Inicíal</label><br />
				<input type="text" name="cons_pd_data_dia_ini" id="cons_pd_data_dia_ini" class="dia" maxlength="2" placeholder="dd" />
				<input type="text" name="cons_pd_data_mes_ini" id="cons_pd_data_mes_ini" class="mes" maxlength="2" placeholder="mm"  /> 
   				<input type="text" name="cons_pd_data_ano_ini" id="cons_pd_data_ano_ini" class="ano" maxlength="4" placeholder="aaaa" />
			</div>
			<div id="ln">
				<label>Prefixo</label>
				<input type="text" name="cons_pd_pref" id="cons_pd_pref" maxlength="6" />
			</div>
			<div id="ln">
				<label>Número do Documento</label>
				<input type="text" name="cons_pd_n_doc" id="cons_pd_n_doc" maxlength="8" />
			</div>
			<div id="ln">
				<label>Data Final</label><br>
				<input type="text" name="cons_pd_data_dia_fin" id="cons_pd_data_dia_fin" class="dia" maxlength="2" placeholder="dd" />
				<input type="text" name="cons_pd_data_mes_fin" id="cons_pd_data_mes_fin" class="mes" maxlength="2" placeholder="mm" /> 
   				<input type="text" name="cons_pd_data_ano_fin" id="cons_pd_data_ano_fin" class="ano" maxlength="4" placeholder="aaaa" />
			</div>
		   </div>
		   <div id="botao_equi">
				<input id="cons_pd_botao" name="cons_pd_botao" type="submit" value="Consultar" />
		   </div>
	   </form>
	<div id="fundo_pesq_pd">
	<div id="resultado_pesq_pd">
				<ul id="cabecalho_pd">
					<li>Data</li>
					<li>Prefixo</li>
					<li>Nº Documento</li>
					<li>Horimetro Inicial</li>
					<li>Horimetro Final</li>
					<li>KM Inicial</li>
					<li>KM Final</li>
					<li>Hora Inicial</li>
					<li>Hora Final</li>
					<li>Horas em Manutenção</li>
					<li>Editar</li>
					<li>Apagar</li>
				</ul>
				<div id="consulta_da_pd">
					<form><input type="text" id="consulta_pd_data" name="consulta_pd_data" value="FALTA PHP" style="border-left:1px solid;" disabled></form>
					<form><input type="text" id="consulta_pd_pref" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_pd_n_doc" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_pd_hori_ini" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_pd_hori_fin" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_pd_km_ini" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_pd_km_fin" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_pd_hora_ini" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_pd_hora_fin" value="FALTA PHP" disabled></form>
					<form><input type="text" id="consulta_pd_hora_manut" value="FALTA PHP" disabled></form>
					<form action="editar_pd.php" id="editar_pd"><input id="botao_cons_pd_editar" name="botao_cons_pd_editar" type="image" src="a" alt="Editar" height="2px"></form>
					<form action="apagar_pd.php" id="salvar_pd" style="display: none;"><input id="botao_cons_pd_salvar" name="botao_cons_pd_salvar" type="image" src="a" alt="Salvar" height="2px"></form>
					<form action="apagar_pd.php" id="apagar_pd"><input id="botao_cons_pd_apagar" name="botao_cons_pd_apagar" type="image" src="a" alt="Apagar" height="2px"></form>
				</div>
	</div>
	</div>
</div>
</body>
</html>