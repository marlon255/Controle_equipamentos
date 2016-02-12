<html>
<head>
<link rel="stylesheet" type="text/css" href="css/estilo.css">
<script>
function formatar(mascara, documento){
  var i = documento.value.length;
  var saida = mascara.substring(0,1);
  var texto = mascara.substring(i)
  
  if (texto.substring(0,1) != saida){
            documento.value += texto.substring(0,1);
  }
  
}
</script>
</head>
<body>
<div id="conteudo"><h2>Cadastro de Proprietário</h2>
	   <form id="form_cadastro" method="post" target="_self">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>Razão Social</label>
				<input type="text" name="raz_soc" id="raz_soc" maxlength="48" required />
			</div>
			<div id="ln">
				<label>Nome Fantasia</label>
				<input type="text" name="nom_fan" id="nom_fan" maxlength="32" required />
			</div>
			<div id="ln">
				<label>CNPJ</label>
				<input type="text" name="cnpj" id="cnpj" maxlength="18" required OnKeyPress="formatar('##.###.###/####-##', this)" required />
			</div>
			<div id="ln">
				<label>Inscrição Estadual</label>
				<input type="text" name="ins_est" id="ins_est" maxlength="15" required OnKeyPress="formatar('###.###.###.###', this)" required />
			</div>
			<div id="ln">
				<label>Inscrição Municipal</label>
				<input type="text" name="ins_mun" id="ins_mun" maxlength="15" required />
			</div>
			<div id="ln">
				<label>CEP</label>
				<input type="text" name="cep" id="cep" maxlength="9" required OnKeyPress="formatar('#####-###', this)" required />
			</div>
		   </div>
		   <div id="cadastro_baixo">
			<div id="ln">
				<label>Estado</label>
				<input type="text" name="est" id="est" maxlength="25" required />
			</div>
			<div id="ln">
				<label>Cidade</label>
				<input type="text" name="cid" id="cid" maxlength="25" required />
			</div>
			<div id="ln">
				<label>Bairro</label>
				<input type="text" name="bairro" id="bairro" maxlength="25" required />
			</div>
			<div id="ln">
				<label>Endereço</label>
				<input type="text" name="endereco" id="endereco" maxlength="25" required />
			</div>
			<div id="ln">
				<label>Complemento</label>
				<input type="text" name="compl" id="compl" maxlength="25" />
			</div>
			<div id="ln">
				<label>Telefone</label>
				<input type="tel" name="tel" id="tel" maxlength="13" required OnKeyPress="formatar('## #####-####', this)" required />
			</div>
			<div id="ln">
				<label>E-mail</label>
				<input type="email" name="email" id="email" required />
			</div>
		   </div>
		   <div id="botao_equi">
				<input type="submit" id="cad_propri_botao" value="Cadastrar" />
		   </div>
	   </form>
	</div>
</body>
</html>