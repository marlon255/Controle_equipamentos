<?php
include_once("php/conexao.php");

header('Content-Type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR.utf8');	


$sql = "DELETE FROM `calixto`.`tipo_equipamento` WHERE `tipo_equipamento`.`id` = ".$_REQUEST['idTipo'];
$deletar = $mysqli->query($sql);



if($deletar)
{
	echo "<p class='pos' align='center'>Registro apagado com sucesso!</p>";	
}
else
{
	echo "<p class='neg' align='center'>Erro ao apagar registro!</p>";	
}

	

?>

