<?php
	$selecionar = mysqli_query($mysqli, sprintf("SELECT * FROM tipo_equipamento")) or die(mysqli_error());
	$exibir = mysqli_fetch_assoc($selecionar);
	$total = mysqli_num_rows($selecionar);
?>