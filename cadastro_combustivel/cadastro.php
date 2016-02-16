<?php
	if(isset($_POST['cad_comb_button'])){
		$nome = $_POST['comb_nome'];
		$prefixo = $_POST['comb_pref'];
		$un_med = $_POST['comb_un_medida'];
		$sql = "INSERT INTO `cadastro_combustivel`(`combustivel_nome`, `combustivel_pref`, `comb_unit`) VALUES ('$nome','$prefixo','$un_med')";
		$query_comb = mysqli_query($conexao, $sql);
	}
?>