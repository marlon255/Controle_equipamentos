<?php
	include_once ('../php/conexao.php');
?>
<?php
	if(isset($_POST['cad_propri_botao'])){
		$raz = $_POST['raz_soc'];
		$fan = $_POST['nom_fan'];
		$cnpj = $_POST['cnpj'];
		$ins_est = $_POST['ins_est'];
		$ins_mun = $_POST['ins_mun'];
		$cep = $_POST['cep'];
		$estado = $_POST['est'];
		$cidade = $_POST['cid'];
		$bairro = $_POST['bairro'];
		$endereco = $_POST['endereco'];
		$complemento = $_POST['compl'];
		$telefone = $_POST['tel'];
		$email = $_POST['email'];
	$sql_cad_prop = "INSERT INTO cadastro_proprietario (
						raz_soc, nome_fant, cnpj, insc_estad, insc_munic, cep, estado, cidade, bairro, endereco, comple, telefone, email
						) 
					VALUES (
						'$raz','$fan','$cnpj','$ins_est','$ins_mun','$cep','$estado','$cidade','$bairro','$endereco','$complemento','$telefone','$email'
							)";
	$query = mysqli_query($conexao, $sql_cad_prop);
	}
?>