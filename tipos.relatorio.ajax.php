<?php
include_once("php/conexao.php");
$mysqli->set_charset('utf8');
header('Content-Type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR.utf8');	

    $sql = "SELECT * FROM tipo_equipamento ORDER BY id DESC";
    $result = $mysqli->query($sql);
	
?>
<style>
.campo_off 
{
	background-color:transparent;	
	border-width:0px;
	border-color:transparent;
	cursor:cell;
}

.campo_on 
{
	background-color:#ffffff;	
	cursor:text;
}

.bt_ok
{
	display:none;	
}
</style>

<script language="javascript">
function ativaCampo(objeto,obj_bt_ok)
{
	var objcampo = document.getElementById(objeto);
	var objbtok  = document.getElementById(obj_bt_ok);
	
	if(objcampo.readOnly == true)
	{
		objcampo.readOnly = false;	
		objcampo.className = "campo_on";
		objbtok.style.display = "inline";

	}
	else 
	{
		objcampo.readOnly = true;
		objcampo.className = "campo_off";
		objbtok.style.display = "none";		
	}
}
</script>


<table border='0' width="550">
 <tr>
  <th>CÓD.</th>
  <th>Tipo de</th>
  <th>Sigla do</th>
  <th>Ações</th>
 </tr>
 

<?php	
	//loop que busca todos os tipos cadastrados
    while($linha = $result->fetch_assoc())
    {
		?>
        <tr>
		 <td><?php echo $linha['id']; ?></td>
         
         <td>
         <?php /* formulário do campo tipo_equip */?>
         <form name="frmTipoEquip<?php echo $linha['id']; ?>" id="frm_tipo_equip<?php echo $linha['id']; ?>" onSubmit="return false">
         <input type="text" name="tipo_equip" title="Clique para alterar o <?php echo $linha['tipo_equip']; ?>" class="campo_off" id="up_tipo_equip<?php echo $linha["id"]; ?>" value="<?php echo $linha['tipo_equip'];  ?>" onclick="ativaCampo(this.id,'bt_ok_<?php echo $linha['id']; ?>')" readonly>
         
         <input type='button' class="bt_ok" id="bt_ok_<?php echo $linha['id']; ?>" value="ok" onclick="cadastrarDados('tipos.update.tipo_equip.ajax.php?idTipo=<?php echo $linha['id']; ?>','frm_tipo_equip<?php echo $linha['id']; ?>','areaComandos','sim','tipos.relatorio.ajax.php','relatorioTiposEquipamentos');" />
     
         </form>
         <?php /* FIM formulário do campo tipo_equip */?>
         </td>
         
         <td> 
         <?php /* formulário do campo sigla_equip */?>
         <form name="frmSiglaEquip<?php echo $linha['id']; ?>" id="frm_sigla_equip<?php echo $linha['id']; ?>" onSubmit="return false">
         <input type="text" name="sigla_equip" title="Clique para alterar o <?php echo $linha['sigla_equip']; ?>" class="campo_off" id="up_sigla_equip<?php echo $linha["id"]; ?>" value="<?php echo $linha['sigla_equip'];  ?>" onclick="ativaCampo(this.id,'bt_ok2_<?php echo $linha['id']; ?>')" readonly>
         
         <input type='button' class="bt_ok" id="bt_ok2_<?php echo $linha['id']; ?>" value="ok" onclick="cadastrarDados('tipos.update.sigla_equip.ajax.php?idTipo=<?php echo $linha['id']; ?>','frm_sigla_equip<?php echo $linha['id']; ?>','areaComandos','sim','tipos.relatorio.ajax.php','relatorioTiposEquipamentos');" />
     
         </form>
         <?php /* FIM formulário do campo tipo_equip */?>
         
         </td>
         
         <td>
         <input type="button" value="Deletar" onclick="apagaRegistro(event,'tipos.deletar.ajax.php?idTipo=<?php echo $linha['id']; ?>&comando=apagar','areaComandos','moverNAO','sim','tipos.relatorio.ajax.php','relatorioTiposEquipamentos');">
         
         </td>
         
        </tr>
		<?php
    }//FIM loop que busca todos os tipos cadastrados
?>
</table>

