<?php
	$sql = "SELECT * FROM cadastro_combustivel";
	$query_comb = mysqli_query($conexao, $sql) or die(mysqli_error());
	$exibir_comb = mysqli_fetch_assoc($query_comb);
?>