<?php
	if(isset($_POST['cad_esto_salve'.$exibir_esto['id']])){
		if(empty($_POST['consu_esto_pref'.$exibir_esto['id']]) && empty($_POST['consu_esto_cap'.$exibir_esto['id']]) && empty($_POST['cons_esto_comb'.$exibir_esto['id']])){
					echo "<script>alert('Edite os campo antes de Salvar!')</script>";
				}else{
				$pref_new = $_POST['consu_esto_pref'.$exibir_esto['id']];
				$cap_new = $_POST['consu_esto_cap'.$exibir_esto['id']];
				$comb_new = $_POST['cons_esto_comb'.$exibir_esto['id']];
				$salvar = mysqli_query($conexao, "UPDATE calixto.cadastro_estoque SET esto_prefixo='$pref_new', esto_capacidade='$cap_new', esto_combus='$comb_new' WHERE cadastro_estoque.id = ".$_POST['cad_esto_id'].";") or die(mysqli_error());
      			echo "<script>location.href='cadastro_esto.php';</script>";
      		}
	}
?>