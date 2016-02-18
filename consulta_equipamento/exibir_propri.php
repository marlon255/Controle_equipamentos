<?php
		$sql_propri = "SELECT * FROM cadastro_proprietario ORDER BY nome_fant ASC";
		$query_propri = mysqli_query($conexao, $sql_propri);
		$resultado_propri = mysqli_fetch_assoc($query_propri);
?>