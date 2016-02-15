<?php
	if(isset($_POST['salvar_tipo_equi'.$exibir['id']])){
		if(empty($_POST['seacher_tipo_equi'.$exibir['id']])&&empty($_POST['seacher_tipo_sigla'.$exibir['id']])){
					echo "<script>alert('Edite um campo antes de Salvar!')</script>";
				}else{
				$tipo_new = $_POST['seacher_tipo_equi'.$exibir['id']];
				$sigla_new = $_POST['seacher_tipo_sigla'.$exibir['id']];
				$salvar = mysqli_query($conexao, "UPDATE calixto.tipo_equipamento SET tipo_equip='$tipo_new', sigla_equip='$sigla_new' WHERE tipo_equipamento.id = ".$_POST['seacher_tipo_id'].";") or die(mysqli_error());
				$url = 'tipo_equi.php';
      			header("Location: $url");
      		}
	}
?>
