<html>
<head>
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<script type="text/javascript">
function popup(){
	window.open("pesquisa_equipamento.php", "janela", "width=600,height=400,toolbar=no,scroll=no,status=no");
}
</script>
</head>
<body>
<?php
	include_once('../php/javascript_formatar.php');
	include_once('../php/conexao.php');
	include_once('exibir_equip.php');
	include_once('exibir_propri.php');
?>
<?php
$sql_busca = "SELECT * FROM cadastro_equipamento";
$query_busca = mysqli_query($conexao, $sql_busca);
$exibir_busca = mysqli_fetch_assoc($query_busca);
$query_busca1 = mysqli_query($conexao, $sql_busca);
$exibir_busca1 = mysqli_fetch_assoc($query_busca1);
$query_busca2 = mysqli_query($conexao, $sql_busca);
$exibir_busca2 = mysqli_fetch_assoc($query_busca2);
$query_busca3 = mysqli_query($conexao, $sql_busca);
$exibir_busca3 = mysqli_fetch_assoc($query_busca3);
$query_busca4 = mysqli_query($conexao, $sql_busca);
$exibir_busca4 = mysqli_fetch_assoc($query_busca4);
$query_busca5 = mysqli_query($conexao, $sql_busca);
$exibir_busca5 = mysqli_fetch_assoc($query_busca5);
$query_busca6 = mysqli_query($conexao, $sql_busca);
$exibir_busca6 = mysqli_fetch_assoc($query_busca6);
?>
<div id="conteudo"><h2>Consulta de Equipamentos</h2>
	   <form id="form_cadastro" method="GET" target="_blank" action="pesquisa_equipamento.php">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Prefixo</label>
				<input type="text" name="cons_equip_pref" id="cons_equip_pref" maxlength="6" />
			</div>
			<div id="ln">
				<label>Equipamento</label>
				<select name="cons_equip_equip" id="cons_equip_equip">
				<option></option>
			<?php
			if($exibir_equi > 0){
				do{
			?>	
				<option><?=$exibir_equi['tipo_equip']?></option>
			<?php
				}while($exibir_equi = mysqli_fetch_assoc($query_exibir_equi));
			}
			?>
				</select>
			</div>
			<div id="ln">
				<label>Modelo do Equipamento</label>
				<select name="cons_equip_mod" id="cons_equip_mod" >
				<option></option>
			<?php
			while($exibir_busca = mysqli_fetch_assoc($query_busca)){
				echo "<option>".$exibir_busca['cad_mod']."</option>";
			}
			?>
			</select>
			</div>
			<div id="ln">
				<label>Série do Equipamento</label>
				<select name="cons_equip_serie" id="cons_equip_serie">
				<option></option>
				<?php
				while($exibir_busca1 = mysqli_fetch_assoc($query_busca1)){
					echo "<option>".$exibir_busca1['cad_serie']."</option>";
				}
				?>
				</select>
			</div>
			<div id="ln">
				<label>Placa do Equipamento</label>
				<select name="cons_equip_placa" id="cons_equip_placa">
				<option></option>
				<?php
				while($exibir_busca2 = mysqli_fetch_assoc($query_busca2)){
					echo "<option>".$exibir_busca2['cad_placa']."</option>";
				}
				?>
				</select>
			</div>
			<div id="ln">
				<label>Número do chassis</label>
				<select name="cons_equip_chassis" id="cons_equip_chassis">
				<option></option>
				<?php
				while($exibir_busca3 = mysqli_fetch_assoc($query_busca3)){
					echo "<option>".$exibir_busca3['cad_placa']."</option>";
				}
				?>
				</select>
			</div>
			<div id="ln">
				<label>Proprietário</label>
				<select name="cons_equip_propri" id="cons_equip_propri">
				<option></option>
			<?php
			if($resultado_propri > 0){
				do{
			?>
				<option><?=$resultado_propri['nome_fant']?></option>
			<?php
				}while($resultado_propri = mysqli_fetch_assoc($query_propri));
			}
			?>	
				</select>
			</div>
			<div id="ln">
				<label>Data de Chegada</label>
				<select name="cons_equip_data_cheg" id="cons_equip_data_cheg">
				<option></option>
				<?php
				while($exibir_busca4 = mysqli_fetch_assoc($query_busca4)){
					echo "<option>".$exibir_busca4['cad_data']."</option>";
				}
				?>
				</select>
			</div>
			<div id="ln">
				<label>Horimetro de Chegada</label>
				<select name="cons_equip_hori_cheg" id="cons_equip_hori_cheg">
				<option></option>
				<?php
				while($exibir_busca5 = mysqli_fetch_assoc($query_busca5)){
					echo "<option>".$exibir_busca5['cad_hori']."</option>";
				}
				?>
				</select>
			</div>
			<div id="ln">
				<label>KM de Chegada</label>
				<select name="cons_equip_km_cheg" id="cons_equip_km_cheg">
				<option></option>
				<?php
				while($exibir_busca6 = mysqli_fetch_assoc($query_busca6)){
					echo "<option>".$exibir_busca6['cad_km']."</option>";
				}
				?>
				</select>
			</div>
		   </div>
		<div id="botao_equi">
		   	<input type="submit" id="cons_equip_salvar" name="cons_equip_salvar" value="Pesquisar"/>
		</div>
		</form>
	</div>
</body>
</html>