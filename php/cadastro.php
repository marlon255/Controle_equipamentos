<?php
if(isset($_POST['tipo_equi_cadastrar'])){
	$tipo = $_POST['tipo_equi'];
	$sigla = $_POST['sigla_equi'];
	$add = mysqli_query($mysqli, "INSERT INTO tipo_equipamento (tipo_equip, sigla_equip) VALUES ('$tipo','$sigla')");	
}
?>