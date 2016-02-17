<?php
	if(isset($_POST['salvar_cad_comb'.$exibir_comb['id']])){
		if(empty($_POST['cad_nome_comb'.$exibir_comb['id']]) || empty($_POST['cad_pref_comb'.$exibir_comb['id']]) || empty($_POST['cad_unid_comb'.$exibir_comb['id']])){
					echo "<script>alert('Edite um campo antes de Salvar!')</script>";
				}else{
				$nome_new = $_POST['cad_nome_comb'.$exibir_comb['id']];
				$prefixo_new = $_POST['cad_pref_comb'.$exibir_comb['id']];
				$unit_new = $_POST['cad_unid_comb'.$exibir_comb['id']];
				$sql_salvar = "UPDATE calixto.cadastro_combustivel SET combustivel_nome='$nome_new', combustivel_pref='$prefixo_new', comb_unit='$unit_new' WHERE cadastro_combustivel.id = ".$_POST['cad_comb_id'].";";
				$salvar = mysqli_query($conexao, $sql_salvar) or die(mysqli_error());
      			echo "<script>location.href='cadastro_comb.php';</script>";
      		}
	}
?>