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
$getpref   = $_GET['cons_equip_pref'];
$getequip  = $_GET['cons_equip_equip'];
$getpropri = $_GET['cons_equip_propri'];
//SE TODOS OS CAMPOS DA BUSCA TIVER LIMPO ELE MOSTRA TUDO
	//TESTANDO SE TODOS CAMPOS GET ESTAO LIMPOS
	if(empty($getpref)&&empty($getequip)&&empty($getpropri)){
		//SELECIONANDO A TABELA DO BANCO DE DADOS
		$sql_total = "SELECT * FROM cadastro_equipamento";
		//RODANDO A SELEÇÃO DE DADOS
		$query_total = mysqli_query($conexao, $sql_total);
		//EXIBINDO ARRAYS DOS DADOS
		$exibir_total = mysqli_fetch_assoc($query_total);
		//RODANDO LOOP PARA PEGAR TODAS AS ARRAYS NO BANCO.
		do{
		echo $exibir_total['id']." ".$exibir_total['cad_equip']."<br />";
		}while($exibir_total = mysqli_fetch_assoc($query_total));
//TESTANDO SE TODOS CAMPOS GET FORAM DIGITADOS
	}elseif(!empty($getpref)&&!empty($getequip)&&!empty($getpropri)){
		//BUSCANDO TODOS OS DADOS DIGITADOS
		$busca_propri = mysqli_real_escape_string($conexao, $_GET['cons_equip_propri']);
		$busca_pref = mysqli_real_escape_string($conexao, $_GET['cons_equip_pref']);
		$busca_equip = mysqli_real_escape_string($conexao, $_GET['cons_equip_equip']);
		//SELECIONANDO A TABELA DO BANCO DE DADOS COM OS DADOS DIGITADOS
		$sql_todos = "SELECT * FROM cadastro_equipamento WHERE cad_propri LIKE '$busca_propri' AND cad_pref LIKE '$busca_pref' AND cad_equip LIKE '$busca_equip'";
		//RODANDO A SELEÇÃO DE DADOS
		$query_todos = mysqli_query($conexao, $sql_todos);
		//EXIBINDO ARRAYS DOS DADOS
		$exibir_todos = mysqli_fetch_assoc($query_todos);
		//RODANDO LOOP PARA PEGAR TODAS AS ARRAYS NO BANCO.
		do{
		echo $exibir_todos['id']." ".$exibir_todos['cad_equip']."<br />";
		}while($exibir_todos = mysqli_fetch_assoc($query_todos));
//TESTANDO QUAL CAMPO FOI DIGITADO
	//SE O CAMPO PROPRIETARIO FOI DIGITADO
	}elseif(empty($getpref)&&empty($getequip)&&!empty($getpropri)){
			$busca_propri = mysqli_real_escape_string($conexao, $_GET['cons_equip_propri']);
			$sql_busca = "SELECT * FROM cadastro_equipamento WHERE cad_propri LIKE '$busca_propri'";
			$query_busca = mysqli_query($conexao, $sql_busca);
			$exibir_busca = mysqli_fetch_assoc($query_busca);
			do{
			echo $exibir_busca['id']." ".$exibir_busca['cad_equip']."<br />";
			}while($exibir_busca = mysqli_fetch_assoc($query_busca));
	//SE O CAMPO PREFIXO FOI DIGITADO
	}elseif(!empty($getpref)&&empty($getequip)&&empty($getpropri)){
			$busca_pref = mysqli_real_escape_string($conexao, $_GET['cons_equip_pref']);
			$sql_pref = "SELECT * FROM cadastro_equipamento WHERE cad_pref LIKE '$busca_pref'";
			$query_pref = mysqli_query($conexao, $sql_pref);
			$exibir_pref = mysqli_fetch_assoc($query_pref);
			do{
			echo $exibir_pref['id']." ".$exibir_pref['cad_equip']."<br />";
			}while($exibir_pref = mysqli_fetch_assoc($query_pref));
	//SE O CAMPO EQUIPAMENTO FOI DIGITADO
	}elseif(empty($getpref)&&!empty($getequip)&&empty($getpropri)){
			$busca_equip = mysqli_real_escape_string($conexao, $_GET['cons_equip_equip']);
			$sql_equip = "SELECT * FROM cadastro_equipamento WHERE cad_equip LIKE '$busca_equip'";
			$query_equip = mysqli_query($conexao, $sql_equip);
			$exibir_equip = mysqli_fetch_assoc($query_equip);
			do{
				echo $exibir_equip['id']." ".$exibir_equip['cad_equip']."<br />";
			}while($exibir_equip = mysqli_fetch_assoc($query_equip));
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