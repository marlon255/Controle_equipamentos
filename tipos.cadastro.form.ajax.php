<?php
header('Content-Type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR.utf8');	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
</head>

<body>
  <form name="cadastroTipoEquipamento" id="cadastro_tipo_equipamento" method="POST">
  
 <table border="0" align="center">
 
  <tr>
  	<th colspan="2">Cadastro de Tipos de Equipamentos</th>
  </tr>
  
  <tr>
   <td colspan="2"><div id="areaValida"></div></td>
  </tr>
 
   <tr>
	<td><label for="tipo_equip">Tipo de equipamento</label></td>
	<td><input type="text" name="tipo_equip" id="tipo_equip" alt="Tipo de Equipamento" title="Tipo de Equipamento" value="" required /></td>
   </tr>
   
   <tr>
    <td><label for="sigla_equip">Sigla do equipamento</label></td>
	<td><input type="text" name="sigla_equip" id="sigla_equip" alt="" title="Sigla do Equipamento" value="" required maxlength="3" /></td>
   </tr>
   
   <tr>
    <td colspan="2" style="text-align:center"><input type='button' value="Cadastrar Tipo" onclick="cadastrarDados('tipos.cadastro.ajax.php','cadastro_tipo_equipamento','areaComandos','sim','tipos.relatorio.ajax.php','relatorioTiposEquipamentos');" />  </td>
   </tr>
   
</table>		
		   
	
  
</form>
</body>
</html>