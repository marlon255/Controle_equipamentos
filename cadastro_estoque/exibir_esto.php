<?php
	$sql_esto = "SELECT * FROM cadastro_estoque";
	$query_esto = mysqli_query($conexao, $sql_esto);
	$exibir_esto = mysqli_fetch_assoc($query_esto);
?>