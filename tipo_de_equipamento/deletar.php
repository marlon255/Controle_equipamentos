<?php 
	if(isset($_POST['deletar_tipo_equi'.$exibir['id']])){
		$sql_delete = "DELETE FROM tipo_equipamento WHERE id = ".$_POST['seacher_tipo_id']."";
		$deletar = mysqli_query($conexao, $sql_delete) or die(mysqli_errno());
		echo "<script>location.href='tipo_equi.php';</script>";
	}
?>