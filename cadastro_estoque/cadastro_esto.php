<html>
<head>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
</head>
<body>
<?php
	include_once('../php/conexao.php');
	include_once('cadastro.php');
	include_once('exibir_comb.php');
	include_once('exibir_esto.php');
?>
<div id="conteudo"><h2>Cadastro de Estoque</h2>
	   <form id="form_cadastro" method="post" target="_self">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Prefixo</label>
				<input type="text" name="cad_esto_pref" id="cad_esto_pref" required maxlength="6" />
			</div>
			<div id="ln">
				<label>Capacidade</label>
				<input type="text" name="cad_esto_capac" id="cad_esto_capac" required maxlength="8" />
			</div>
			<div id="ln">
				<label>Combustível/Prefixo</label>
				<select name="cad_esto_comb" id="cad_esto_comb" required>
				<option disabled selected>Selecione</option>
					<?php
						if($exibir_comb > 0){
							do{
					?>
				<option><?php echo $exibir_comb['combustivel_nome']."/".$exibir_comb['combustivel_pref']; ?></option>
					<?php
								}while($exibir_comb = mysqli_fetch_assoc($query_comb));
							}
						
					?>
				</select>
			</div>
		   </div>
		   <div id="botao_equi">
				<input id="add_cad_esto" name="add_cad_esto" type="submit" value="Incluir" formaction="" />
		   </div>
	   </form>
<div id="fundo_cad_esto">
	<div id="cons_esto">
		<div id="topo_consulta">
			<ul id="cabecalho_esto">
				<li>Prefixo</li>
				<li>Capacidade</li>
				<li>Combustível/Prefixo</li>
				<li>Ações</li>
			</ul>
		</div>

<?php
	if($exibir_esto > 0){
		do{
?>
<?php require("editar.php"); require('exibir_comb.php'); require('salvar.php'); require('deletar.php'); ?>
		<div id="consu_esto">
			<form id="exibir_cad_esto<?=$exibir_esto['id']?>" name="exibir_cad_esto<?=$exibir_esto['id']?>" method="POST">
				<input type="hidden" name="cad_esto_id" value="<?=$exibir_esto['id']?>">
				<input type="text" id="consu_esto_pref<?=$exibir_esto['id']?>" name="consu_esto_pref<?=$exibir_esto['id']?>" value="<?=$exibir_esto['esto_prefixo']?>" class="exibir" style="border-left:1px solid;" disabled>
				<input type="text" id="consu_esto_cap<?=$exibir_esto['id']?>" name="consu_esto_cap<?=$exibir_esto['id']?>" value="<?=$exibir_esto['esto_capacidade']?>" class="exibir" disabled>
				<select name="cons_esto_comb<?=$exibir_esto['id']?>" id="cons_esto_comb<?=$exibir_esto['id']?>" class="exibir" disabled>
					<option disabled selected><?php echo $exibir_esto['esto_combus'];?></option>
<?php 
	if($exibir_comb > 0){do{
?>
					<option><?php echo $exibir_comb['combustivel_nome']."/".$exibir_comb['combustivel_pref']; ?></option>
<?php
	}while($exibir_comb = mysqli_fetch_assoc($query_comb));}
 ?>
				</select>
				<input type="button" id="cad_esto_edit<?=$exibir_esto['id']?>" name="cad_esto_edit<?=$exibir_esto['id']?>" class="esto_button" value='Editar'>
				<input type="submit" id="cad_esto_salve<?=$exibir_esto['id']?>" name="cad_esto_salve<?=$exibir_esto['id']?>" class='esto_button' value='Salvar'/>
				<input type="submit" id="cad_esto_del<?=$exibir_esto['id']?>" name="cad_esto_del<?=$exibir_esto['id']?>" class='esto_button' value='Deletar'>
			</form>
		</div>
<?php
		}while($exibir_esto = mysqli_fetch_assoc($query_esto));
	}
?>
	</div>
</div>
	</div>
</body>
</html>