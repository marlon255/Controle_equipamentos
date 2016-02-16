<?php 
	if(isset($_POST['apagar_cad_comb'.$exibir_comb['id']])){
		$sql_delete = "DELETE FROM cadastro_combustivel WHERE id = ".$_POST['cad_comb_id']."";
		$deletar = mysqli_query($conexao, $sql_delete) or die(mysqli_errno());
		echo "<script>location.href='cadastro_comb.php';</script>";
	}
?>