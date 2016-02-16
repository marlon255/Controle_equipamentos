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
	<?php
		include_once('../php/conexao.php');
		include_once('exibir_propri.php');
		include_once('exibir_equip.php');
		include_once('cadastrar.php');
	?>
<div id="conteudo"><h2>Cadastro de Equipamento</h2>
	   <form id="form_cadastro" method="post" target="_self">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Equipamento</label>
				<select name="equi" id="cad_equi" required>
				<option>Selecione o equipamento</option>
				<?php
					if($total_equip > 0){
						do{
				?>
				<option><?php echo $exib_equip['tipo_equip']; ?></option>
				<?php
					}while($exib_equip = mysqli_fetch_assoc($sele_equip));
				}
				?>
				</select>
			</div>
			<div id="ln">
				<label>Modelo de equipamento</label>
				<input type="text" name="cad_mod" id="cad_mod" required maxlength="30" />
			</div>
			<div id="ln">
				<label>Série do equipamento</label>
				<input type="text" name="cad_serie" id="cad_serie" required maxlength="30" />
			</div>
			<div id="ln">
				<label>Placa do equipamento</label>
				<input type="text" name="cad_plac" id="cad_plac" required maxlength="8" OnKeyPress="formatar('###-####', this)" />
			</div>
			<div id="ln">
				<label>Chassis do equipamento</label>
				<input type="text" name="cad_chassis" id="cad_chassis" required maxlength="17" />
			</div>
			<div id="ln">
				<label>Proprietário</label><br>
				<select name="propri" id="cad_propri" required>
				<option>Selecione o proprietário</option>
			<?php
				if($total_propri >0){
					do{
			?>
				<option><?php echo $exib_propri['nome_fant']; ?> </option>
			<?php
					}while($exib_propri = mysqli_fetch_assoc($sele_propri));
				}
			?>
				</select>
			</div>
		   </div>
		   <div id="cadastro_baixo">
		   	<div id="ln">
				<label>Prefixo</label>
				<input type="text" name="cad_pref" id="cad_pref" required maxlength="6" />
			</div>
			<div id="ln">
				<label>Data de chegada</label>
				<input type="text" name="cad_data" id="cad_data" required maxlength="10"  OnKeyPress="formatar('##/##/####', this)" />
			</div>
			<div id="ln">
				<label>Horimetro de chegada</label>
				<input type="text" name="cad_hori" id="cad_hori" required maxlength="15" />
			</div>
			<div id="ln">
				<label>KM de chegada</label>
				<input type="text" name="cad_km" id="cad_km" required maxlength="20" />
			</div>
			<div id="ln">
				<label>Consumo</label>
				<input type="text" name="cad_consumo" id="cad_consumo" required maxlength="20" />
			</div>
			<div id="ln">
				<label>Ano de Fabricação</label>
				<input type="text" name="cad_fabric" id="cad_fabric" required maxlength="4" OnKeyPress="formatar('####', this)" />
			</div>
		   </div>
		   <div id="cadastro_baixo">
			<div id="ln">
				<label>Unidade de Medida</label>
				<select name="cad_unid_medida" id="cad_unid_medida" required>
				<option>Horas</option>
				<option>KM</option>
				</select>
			</div>
			<div id="ln">
				<label>Horas Minimas</label>
				<input type="text" name="cad_hor_min" id="cad_hor_min" required maxlength="10" />
			</div>
			<div id="ln">
				<label>Valor da Locação</label>
				<input type="text" name="cadastro_equi_valor" id="cadastro_equi_valor" required maxlength="20" />
			</div>
		   </div>
		   <div id="botao_equi">
				<input id="cad_equi_button" name="cad_equi_button" type="submit" value="Cadastrar" />
		   </div>
	   </form>
	</div>
</body>
</html>