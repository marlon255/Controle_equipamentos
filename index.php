<html>
<head>
<title>Gerenciamento de Equipamentos</title>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<div id="cabecalho"></div><br />
	<div id="menu">
		<ul id="ul_menu">
			<a href="index.php"><li id="li_menu">In�cio</li></a>
			<li id="li_menu" class="dropando"><a>Cadastro &raquo;</a>
			    <ul id="drop_ul_menu">
				<a href="tipo_de_equipamento/tipo_equi.php" target="iframe"><li id="drop_menu">Tipo de equipamento</li></a>
				<a href="cadastro_proprietario/cadastro_propr.php" target="iframe"><li id="drop_menu">Propriet�rio</li></a>
				<a href="cadastro_equipamento/cadastro_equi.php" target="iframe"><li id="drop_menu">Equipamento</li></a>
				<a href="cadastro_combustivel/cadastro_comb.php" target="iframe"><li id="drop_menu">Combust�vel</li></a>
				<a href="cadastro_estoque/cadastro_esto.php" target="iframe"><li id="drop_menu">Estoque</li></a>
			    </ul>
			</li>
			<li id="li_menu" class="dropando"><a>Digita��o &raquo;</a>
			    <ul id="drop_ul_menu">
				<a href="digitacao_pd/digitacao_pd.php" target="iframe"><li id="drop_menu">Parte diaria</li></a>
				<a href="dig_ent_abas.php" target="iframe"><li id="drop_menu">Entrada de Estoque</li></a>
				<a href="dig_sai_abas.php" target="iframe"><li id="drop_menu">Sa�da de Estoque</li></a>
			    </ul>
			</li>
			<li id="li_menu" class="dropando"><a>Consulta &raquo;</a>
			    <ul id="drop_ul_menu">
				<a href="consulta_equipamento/consulta_equip.php" target="iframe"><li id="drop_menu">Equipamento</li></a>
				<a href="cons_propr.php" target="iframe"><li id="drop_menu">Propriet�rio</li></a>
				<a href="cons_pd.php" target="iframe"><li id="drop_menu">Parte diaria</li></a>
				<a href="cons_ent_esto.php" target="iframe"><li id="drop_menu">Entrada de Estoque</li></a>
				<a href="cons_sai_esto.php" target="iframe"><li id="drop_menu">Sa�da de Estoque</li></a>
			    </ul>
			</li> 
		</ul>
	</div>
	<iframe name="iframe" id="iframe" />
</body>
</html>