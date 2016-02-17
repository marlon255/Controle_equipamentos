<?php
	$exibir_sql_comb = "SELECT * FROM cadastro_combustivel";
	$query_comb = mysqli_query($conexao, $exibir_sql_comb);
	$exibir_comb = mysqli_fetch_assoc($query_comb);
?>