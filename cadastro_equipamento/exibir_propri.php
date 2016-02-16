<?php
	$select = "SELECT * FROM cadastro_proprietario";
	$sele_propri = mysqli_query($conexao, $select) or die(mysqli_errno());
	$exib_propri = mysqli_fetch_assoc($sele_propri);
	$total_propri = mysqli_num_rows($sele_propri);
?>