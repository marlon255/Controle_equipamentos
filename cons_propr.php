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
<div id="conteudo"><h2>Consulta de Proprietário</h2>
	   <form id="form_cadastro" method="post" target="_self">
		   <div id="cadastro_cima">
			<div id="ln">
				<label>CNPJ</label>
				<input type="text" name="cons_propr_cnpj" id="cons_propr_cnpj" maxlength="18" OnKeyPress="formatar('##.###.###/####-##', this)" required />
			</div>
			<div id="ln">
				<label>Razão Social</label>
				<input type="text" name="cons_propr_raz_soc" id="cons_propr_raz_soc" maxlength="48" required />
			</div>
			<div id="ln">
				<label>Nome Fantasia</label>
				<input type="text" name="cons_propr_nom_fan" id="cons_propr_nom_fan" maxlength="32" required />
			</div>
			<div id="ln">
				<label>Inscrição Estadual</label>
				<input type="text" name="cons_propr_ins_est" id="cons_propr_ins_est" maxlength="15" OnKeyPress="formatar('###.###.###.###', this)" required />
			</div>
			<div id="ln">
				<label>Inscrição Municipal</label>
				<input type="text" name="cons_propr_cad_equi" id="cons_propr_cad_equi" maxlength="15" required />
			</div>
			<div id="ln">
				<label>CEP</label>
				<input type="text" name="cons_propr_cep" id="cons_propr_cep" maxlength="9" OnKeyPress="formatar('#####-###', this)" required />
			</div>
			<div id="ln">
				<label>Estado</label>
				<input type="text" name="cons_propr_est" id="cons_propr_est" maxlength="25" required />
			</div>
			<div id="ln">
				<label>Cidade</label>
				<input type="text" name="cons_propr_cid" id="cons_propr_cid" maxlength="25" required />
			</div>
			<div id="ln">
				<label>Bairro</label>
				<input type="text" name="cons_propr_bairro" id="cons_propr_bairro" maxlength="25" required />
			</div>
			<div id="ln">
				<label>Rua/Nº</label>
				<input type="text" name="cons_propr_endereco" id="cons_propr_endereco" maxlength="25" required />
			</div>
			<div id="ln">
				<label>Complemento</label>
				<input type="text" name="cons_propr_compl" id="cons_propr_compl" maxlength="25" />
			</div>
			<div id="ln">
				<label>Telefone</label>
				<input type="tel" name="cons_propr_tel" id="cons_propr_tel" maxlength="13" OnKeyPress="formatar('## #####-####', this)" required />
			</div>
			<div id="ln">
				<label>E-mail</label>
				<input type="email" name="cons_propr_email" id="cons_propr_email" required />
			</div>
		   </div>
		<div id="botao_equi">
		   	<input type="submit" id="botao_cons_propr_salvar" name="botao_cons_propr_salvar" value="Salvar Alterações" />
			<input type="submit" id="botao_cons_propr_apagar" name="botao_cons_propr_apagar" value="Apagar" />
		</div>
	   </form>
	</div>
</body>
</html>