<?php
	if(isset($_POST['cad_equi_button'])){
			$equipamento = $_POST['equi'];
			$mod_equip = $_POST['cad_mod'];
			$serie_equip = $_POST['cad_serie'];
			$placa_equip = $_POST['cad_plac'];
			$chassi_equip = $_POST['cad_chassis'];
			$propri_equip = $_POST['propri'];
			$prefixo = $_POST['cad_pref'];
			$data = $_POST['cad_data'];
			$hori = $_POST['cad_hori'];
			$km = $_POST['cad_km'];
			$consumo = $_POST['cad_consumo'];
			$ano_fabric = $_POST['cad_fabric'];
			$un_medida = $_POST['cad_unid_medida'];
			$horas_minimas = $_POST['cad_hor_min'];
			$valor_loc = $_POST['cadastro_equi_valor'];
		$sql = "INSERT INTO cadastro_equipamento 
			(
			cad_equip, cad_mod, cad_serie, cad_placa, cad_chassi, cad_propri, cad_pref, cad_data, cad_hori, cad_km, cad_consu, cad_fabric, cad_medida, cad_hor_min, cad_valor
			) 
		VALUES (
			'$equipamento','$mod_equip','$serie_equip','$placa_equip','$chassi_equip','$propri_equip','$prefixo','$data','$hori','$km','$consumo','$ano_fabric','$un_medida','$horas_minimas','$valor_loc'
			)";
		$adicionar = mysqli_query($conexao, $sql);
	}
?>