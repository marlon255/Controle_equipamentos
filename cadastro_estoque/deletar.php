<?php 
	if(isset($_POST['cad_esto_del'.$exibir_esto['id']])){
		$sql_delete = "DELETE FROM cadastro_estoque WHERE id = ".$_POST['cad_esto_id']."";
		$deletar = mysqli_query($conexao, $sql_delete) or die(mysqli_errno());
		echo "<script>location.href='cadastro_esto.php';</script>";
	}
?>