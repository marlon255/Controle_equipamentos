<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="../css/estilo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
</head>
<body>
<?php
	include_once('../php/conexao.php');
	include_once('cadastro.php');
	include_once('exibir.php');
?>
<div id="conteudo"><h2>Cadastro de Combustível</h2>
	   <form id="form_cadastro" method="post">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Nome</label>
				<input type="text" name="comb_nome" id="comb_nome" required maxlength="10" />
			</div>
			<div id="ln">
				<label>Prefixo</label>
				<input type="text" name="comb_pref" id="comb_pref" required maxlength="6" />
			</div>
			<div id="ln">
				<label>Un. de Medida</label>
				<select name="comb_un_medida" id="comb_un_medida" required>
				<option disabled selected>Selecione</option>
				<option>Kg</option>
				<option>g</option>
				<option>L</option>
				<option>ml</option>
				</select>
			</div>
		   </div>
		   <div id="botao_equi">
				<input type="submit" name="cad_comb_button" id="cad_comb_button" value="Cadastrar" />
		   </div>
	   </form>
	<div id="fundo_cadastro_comb">
		<div id="consumo_comb">
			<div id="nome_comb">
				<ul>
					<li>Nome</li>
					<li>Prefixo</li>
					<li>Un. de Medida</li>
					<li>Ações</li>
				</ul>
			</div>
<?php
	if($exibir_comb > 0){
		do{		
?>
	<?php
		require("editar.php"); require('salvar.php'); require('deletar.php');
	?>
			<div id="exibir_comb">
				<form id="exibir_combustivel<?=$exibir_comb['id']?>" name="exibir_combustivel<?=$exibir_comb['id']?>" method="POST">
					<input type='hidden' id='cad_comb_id' name='cad_comb_id' value='<?=$exibir_comb['id']?>'>
					<input type="text" id="cad_nome_comb<?=$exibir_comb['id']?>" name="cad_nome_comb<?=$exibir_comb['id']?>" class="teste" value="<?=$exibir_comb['combustivel_nome']?>" style="border-left:1px solid;" disabled>
					<input type="text" id="cad_pref_comb<?=$exibir_comb['id']?>" name="cad_pref_comb<?=$exibir_comb['id']?>" class="teste" value="<?=$exibir_comb['combustivel_pref']?>" disabled>
					<select name="cad_unid_comb<?=$exibir_comb['id']?>" id="cad_unid_comb<?=$exibir_comb['id']?>" class="teste" disabled>
					<option disabled selected><?php echo $exibir_comb['comb_unit'];?></option>
					<option>Kg</option>
					<option>g</option>
					<option>L</option>
					<option>ml</option>
					<input type="button" id="editar_comb<?=$exibir_comb['id']?>" name="editar_cad_comb<?=$exibir_comb['id']?>" class="comb_button" value='Editar'>
					<input type="submit" id="salvar_comb<?=$exibir_comb['id']?>" name="salvar_cad_comb<?=$exibir_comb['id']?>" class="comb_button" value='Salvar'/>
					<input type="submit" id="apagar_comb<?=$exibir_comb['id']?>" name="apagar_cad_comb<?=$exibir_comb['id']?>" class="comb_button" value='Deletar'>
				</form>
			</div>
<?php
		}while($exibir_comb = mysqli_fetch_assoc($query_comb));
			}
?>
		</div>
	</div>
</div>
</body>
</html>