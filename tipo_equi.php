<?php 
	include_once('php/conexao.php');
	
	//include ('php/cadastro.php');
	//include ('php/exibir.php');
	
$mysqli->set_charset('utf8');
header('Content-Type: text/html; charset=UTF-8');
setlocale(LC_ALL, 'pt_BR.utf8');	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<title>Tipos de Equipamentos ok</title>


<script type="text/javascript" src="js/xmlhttp.js"></script> 	<!-- AJAX -->
<script type="text/javascript" src="js/funcoes.js"></script>	<!-- AJAX -->

<style>
#areaCadastroTipo
{
	background-color:#c9c9c9;
	border-style:solid;
	border-width:1px;
	border-color:#999;	
	height:180px;
}

#areaCadastroTipo input[type='text']
{
	padding:5px;	
}

#areaCadastroTipo td, #areaCadastroTipo th
{
	border-style:solid;
	border-width:1px;
	border-color:#777;	
	padding:5px;
}

#areaCadastroTipo th
{
	background-color:#777;
	color:white;	
}

table
{
	border-collapse:collapse;	
}

#areaValida
{
	border-style:solid;
	border-width:2px;
	border-color:#ff0000;
	background-color:#BBF18A;	
	display:none;
}

#relatorioTiposEquipamentos
{
	background-color:#FDF5E6;	
}

#relatorioTiposEquipamentos th
{
	background-color:#C1E387;		
	border-style:solid;
	border-width:1px;
	border-color:#000;
}

#relatorioTiposEquipamentos td
{
	background-color:#d9d9d9;
	border-style:solid;
	border-width:1px;
	border-color:#bbb;		
	font-size:12px;
}


</style>

</head>
<body>


<!-- conteúdo -->
<div id="conteudo">
 <h2>Tipos de Equipamentos</h2>
 

 
 <!-- área de cadastro -->
 <div id="areaCadastroTipo">
 
<?php
include_once("tipos.cadastro.form.ajax.php");
?>
 
 </div>


   <div id="areaComandos" onclick="fechaPagina(this.id)"></div>

    <h2>Lista de Equipamentos Cadastrados</h2>
          
    <!-- relatório da lista de tipos de equipamentos cadastrados -->     
    <div id='relatorioTiposEquipamentos'>       
    <?php
		include_once("tipos.relatorio.ajax.php");
    ?>       
    </div>
    <!--  FIM relatório da lista de tipos de equipamentos cadastrados -->
    
 



</div>
<!-- fim conteúdo -->

</body>
</html>