<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
</head>
<body>
<?php 
	include ('php/conexao.php');
	include ('php/cadastro.php');
	include ('php/exibir.php');
?>
<div id="conteudo"><h2>Tipo de Equipamentos</h2>
	   <form id="form_cadastro" method="post" >
		   <div>
			<div id="ln">
				<label>Tipo de equipamento</label>
				<input type="text" name="tipo_equi" id="tipo_equi" required />
			</div>
			<div id="ln">
				<label>Sigla do equipamento</label>
				<input type="text" name="sigla_equi" id="sigla_equi" required maxlength="3" />
			</div>
		   </div>
		   
		   <div id="botao_equi">
				<input type="submit" id="tipo_equi_cadastrar" name="tipo_equi_cadastrar" value="Cadastrar" />
		   </div>
	   </form>
	<div id="fundo_tipo_equi">
	<div id="consulta_tipo_equi">
		<div id="tipp">
			<ul id="cabecalho_tipo_equi">
				<li>Tipo de equipamento</li>
				<li>Sigla do equipamento</li>
				<li>Ações</li>
			</ul>
		</div>
<?php 
if($total > 0){
do{ ?>	
	<?php include ("php/javascript_editar.php") ?>
	<div id="change_tipo_equi">
			<form method="POST"><input type='text' id="seacher_tipo_equi<?=$exibir['id']?>" name="seacher_tipo_equi<?=$exibir['id']?>" class="seacher_tipo_equi" style='border-left: 1px solid;' disabled value="<?php echo $exibir['tipo_equip']; ?>"></form>
			<form method="POST"><input type='text' id="seacher_tipo_sigla<?=$exibir['id']?>" name="seacher_tipo_sigla<?=$exibir['id']?>" class="seacher_tipo_sigla" disabled value="<?php echo $exibir['sigla_equip']; ?>"></form>
			<form method="POST"><input type="button" id="editar_tipo_equi<?=$exibir['id']?>" name="editar_tipo_equi<?=$exibir['id']?>" class="teste" value='Editar'></form>
			<form method="POST"><input type="submit" id="salvar_tipo_equi<?=$exibir['id']?>" name="salvar_tipo_equi<?=$exibir['id']?>" class='teste' value='Salvar'></form>
			<form method="POST"><input type="submit" id="deletar_tipo_equi<?=$exibir['id']?>" name="deletar_tipo_equi<?=$exibir['id']?>" class='teste' value='Deletar'></form>
		</div>
<?php
	if(isset($_POST['salvar_tipo_equi'.$exibir["id"].''])){
		$procv = $_POST['seacher_tipo_equi'.$exibir['id'].''];
		echo $procv;
	}
?>
	<?php	}while($exibir = mysqli_fetch_assoc($selecionar));
	}
?>
	</div>
	</div>
	</div>
</body>
</html>