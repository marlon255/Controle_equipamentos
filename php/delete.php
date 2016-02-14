<?php
if(isset($_POST['apagar_tipo_equi'])){
		$tipo_new = $_POST['seacher_tipo_equi'];
		$sigla_new = $_POST['seacher_tipo_sigla'];
		$deletar = mysqli_query($mysqli, sprintf("DELETE FROM tipo_equipamento WHERE tipo_equip='$tipo_new', sigla_equip='#sigla_new'")) or die(mysqli_error());
	}
?>