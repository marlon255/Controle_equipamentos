<head><meta charset="UTF-8"></head>
<?php
	include('../php/conexao.php');
	$testando = $_GET['dig_pd_pref'];
	$sql_busca_equip = "SELECT * FROM cadastro_equipamento WHERE cad_pref =".$testando."";
	$query_busca_equip = mysqli_query($conexao, $sql_busca_equip);
	$teste = mysqli_fetch_assoc($query_busca_equip);
	echo $teste['cad_equip'];
?>