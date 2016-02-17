<?php
	if(isset($_POST['add_cad_esto'])){
		if(empty($_POST['cad_esto_comb'])){
			echo "<script>alert('Edite o campo Combustível/Prefixo antes de Salvar!')</script>";
		}else{
		$pref = $_POST['cad_esto_pref'];
		$cap = $_POST['cad_esto_capac'];
		$comb_pref= $_POST['cad_esto_comb'];
		$sql = "INSERT INTO cadastro_estoque (esto_prefixo, esto_capacidade, esto_combus) 
				VALUES ('$pref','$cap','$comb_pref')";
		$query_esto = mysqli_query($conexao, $sql);
	}
}
?>