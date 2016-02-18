<meta charset="UTF-8">
<?php
	$select = "SELECT * FROM tipo_equipamento ORDER BY 	tipo_equip ASC";
	$query_exibir_equi = mysqli_query($conexao, $select) or die(mysqli_errno());
	$exibir_equi = mysqli_fetch_assoc($query_exibir_equi);

?>