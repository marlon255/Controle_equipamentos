<html>
<head>
<title>Pesquisa de Equipamento</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/popup.css">
</head>
<body>
<?php
	include_once('../php/conexao.php');
?>
<?php
//Testando o GET da pagina anterior
/*	if(!empty($_GET['cons_equip_pref'])){
			$busca_pref = mysqli_real_escape_string($conexao, $_GET['cons_equip_pref']);
			$sql_busca_pref = "SELECT * FROM cadastro_equipamento WHERE cad_pref LIKE '$busca_pref'";
			$query_busca_pref = mysqli_query($conexao, $sql_busca_pref);
			$exibir_busca_pref = mysqli_fetch_assoc($query_busca_pref);
			do{
			echo $exibir_busca_pref['id']." ".$exibir_busca_pref['cad_equip']."<br />";
			}while($exibir_busca_pref = mysqli_fetch_assoc($query_busca_pref));
			}
		if(!empty($_GET['cons_equip_equip'])){
			$busca_equip = mysqli_real_escape_string($conexao, $_GET['cons_equip_equip']);
			$sql_busca_equip = "SELECT * FROM cadastro_equipamento WHERE cad_equip LIKE '$busca_equip'";
			$query_busca_equip = mysqli_query($conexao, $sql_busca_equip);
			$exibir_busca_equip = mysqli_fetch_assoc($query_busca_equip);
			do{
			echo $exibir_busca_equip['id']." ".$exibir_busca_equip['cad_equip']."<br />";
				}while($exibir_busca_equip = mysqli_fetch_assoc($query_busca_equip));
			}
		if(!empty($_GET['cons_equip_mod'])){
			$busca_mod = mysqli_real_escape_string($conexao, $_GET['cons_equip_mod']);
			$sql_busca_mod = "SELECT * FROM cadastro_equipamento WHERE cad_mod LIKE '$busca_mod'";
			$query_busca_mod = mysqli_query($conexao, $sql_busca_mod);
			$exibir_busca_mod = mysqli_fetch_assoc($query_busca_mod);
			do{
			echo $exibir_busca_mod['id']." ".$exibir_busca_mod['cad_equip']."<br />";
				}while($exibir_busca_mod = mysqli_fetch_assoc($query_busca_mod));
			}
*/
	if(empty($_GET['cons_equip_pref']) && 
	   empty($_GET['cons_equip_equip']) && 
	   empty($_GET['cons_equip_mod']) && 
	   empty($_GET['cons_equip_serie']) && 
	   empty($_GET['cons_equip_placa']) && 
	   empty($_GET['cons_equip_chassis']) && 
	   empty($_GET['cons_equip_propri']) && 
	   empty($_GET['cons_equip_data_cheg']) && 
	   empty($_GET['cons_equip_hori_cheg']) && 
	   empty($_GET['cons_equip_km_cheg'])){
	   echo "<script>alert('Nenhum campo digitado.')</script>";
		exit;
	}else{
		$busca_pref = mysqli_real_escape_string($conexao, $_GET['cons_equip_pref']);
		$busca_equip = mysqli_real_escape_string($conexao, $_GET['cons_equip_equip']);
		$busca_mod = mysqli_real_escape_string($conexao, $_GET['cons_equip_mod']);
		$busca_serie = mysqli_real_escape_string($conexao, $_GET['cons_equip_serie']);
		$busca_placa = mysqli_real_escape_string($conexao, $_GET['cons_equip_placa']);
		$busca_chassis = mysqli_real_escape_string($conexao, $_GET['cons_equip_chassis']);
		$busca_propri = mysqli_real_escape_string($conexao, $_GET['cons_equip_propri']);
		$busca_data = mysqli_real_escape_string($conexao, $_GET['cons_equip_data_cheg']);
		$busca_hori = mysqli_real_escape_string($conexao, $_GET['cons_equip_hori_cheg']);
		$busca_km = mysqli_real_escape_string($conexao, $_GET['cons_equip_km_cheg']);
		$sql_busca = "SELECT * FROM cadastro_equipamento WHERE 
		cad_pref = '$busca_pref' OR 
		cad_equip = '$busca_equip' OR 
		cad_equip = '$busca_equip' OR 
		cad_mod = '$busca_mod' OR 
		cad_serie = '$busca_serie' OR 
		cad_placa = '$busca_placa' OR 
		cad_chassi = '$busca_chassis' OR 
		cad_propri = '$busca_propri' OR 
		cad_data = '$busca_data' OR 
		cad_hori = '$busca_hori' OR 
		cad_km = '$busca_km'";
		$query_busca = mysqli_query($conexao, $sql_busca);
		$exibir_busca = mysqli_fetch_assoc($query_busca);}
	if($exibir_busca > 0){
	do{
		echo $exibir_busca['id']." ".$exibir_busca['cad_equip']."<br />";
	}while($exibir_busca = mysqli_fetch_assoc($query_busca));
	}	
?>
<div id="consulta_equip">
		<div id="topo">
			<ul>
				<li class="primeiro">Prefixo</li>
				<li>Equipamento</li>
				<li>Modelo do Equip.</li>
				<li>Série do Equipamento</li>
				<li>Placa do Equipamento</li>
				<li>Número do chassis</li>
				<li>Proprietário</li>
				<li>Horas Mínimas</li>
				<li>Unidade de Medida</li>
				<li>Consumo</li>
				<li>Valor da Locação</li>
				<li>Data de Chegada</li>
				<li>Horimetro de Chegada</li>
				<li>KM de Chegada</li>
				<li>Ano de Fabricação</li>
				<li>Ações</li>
			</ul>
		</div>		
		<div id="inferior">
			<form method="POST" id="form_popup_equip" name="form_popup_equip">
				<input type='hidden' id="popup_id" name='popup_id' value="">
				<input type='text' id="popup_pref" name="popup_pref" class="equip_popup" value="Teste" style='border-left: 1px solid;' disabled>
				<input type='text' id="popup_equip" name="popup_equip" class="equip_popup" value="Teste"  disabled>
				<input type='text' id="popup_mod" name="popup_mod" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_serie" name="popup_serie" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_placa" name="popup_placa" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_chassis" name="popup_chassis" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_propri" name="popup_propri" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_horas" name="popup_horas" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_medida" name="popup_medida" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_consumo" name="popup_consumo" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_valor" name="popup_valor" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_data" name="popup_data" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_horim" name="popup_horim" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_km" name="popup_km" class="equip_popup" value="Teste" disabled>
				<input type='text' id="popup_fabric" name="popup_fabric" class="equip_popup" value="Teste" disabled>
				<input type="button" id="editar_popup_equi" name="editar_popup_equi" class="equip_button" value='Editar'>
				<input type="submit" id="salvar_popup_equi" name="salvar_popup_equi" class='equip_button' value='Salvar'/>
				<input type="submit" id="deletar_popup_equi" name="deletar_popup_equi" class='equip_button' value='Deletar'>
			</form>
		</div>
</div>
</body>
</html>