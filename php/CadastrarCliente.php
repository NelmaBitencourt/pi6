<?php
session_start();
if (!isset($_SESSION['fornecedor'])) {
    header("Location: login.php");
}

if (!empty($_POST['nome']) && 
	!empty($_POST['sobrenome']) && 
	!empty($_POST["dia"]) &&
	!empty($_POST["mes"]) &&
	!empty($_POST["ano"]) &&
	!empty($_POST["sexo"]) &&
	!empty($_POST["email"]) &&
	!empty($_POST["senha"]) &&
	!empty($_POST["endereco"]) &&
	!empty($_POST["numero"]) &&
	!empty($_POST["cidade"])
	) {
	try{


		require_once '../BaseDados/Conexao.php';

		$cli_nm_nome = $_POST['nome'].$_POST['sobrenome'];
		$cli_ds_data_nascimento = $_POST['dia'].$_POST['mes'].$_POST['ano'];
		$cli_ds_sexo = $_POST['sexo'];
		$cli_ds_email = $_POST['email'];
		$cli_ds_senha = $_POST['senha'];
		$cli_ds_endereco = $_POST['endereco'];
		$cli_num_endereco = $_POST['numero'];
		$cli_ds_cidade = $_POST['cidade'];
		//$cli_id_fornecedor		

		$conexao = new Conexao();

		$conexao = $conexao->conectar();

		$query = "INSERT INTO CLI_cliente (cli_nm_cliente, cli_ds_data_nascimento, cli_ds_endereco, cli_num_endereco, cli_ds_cidade, cli_ds_sexo, cli_ds_email, cli_ds_senha, cli_id_fornecedor) VALUES (:a, :b, :c, :d, :e, :f, :g, :h, :i);";

		$stm = $conexao->prepare($query);

		$stm->bindValue(":a", $cli_nm_nome);
		$stm->bindValue(":b", $cli_ds_data_nascimento);
		$stm->bindValue(":c", $cli_ds_endereco);
		$stm->bindValue(":d", $cli_num_endereco);
		$stm->bindValue(":e", $cli_ds_cidade);
		$stm->bindValue(":f", $cli_ds_sexo);
		$stm->bindValue(":g", $cli_ds_email);
		$stm->bindValue(":h", $cli_ds_senha);
		$stm->bindValue(":i", $_SESSION["fornecedor"]->for_id_fornecedor);

		$stm->execute();

// falta corrigir bug, nao salva o arquivo na pasta.
		// foreach ($_FILES["image"]["error"] as $key => $error) {
		//     if ($error == UPLOAD_ERR_OK) {
		//         $tmp_name = $_FILES["image"]["tmp_name"][$key];
		//         $name = $_FILES["image"]["name"][$key];
		//         move_uploaded_file($tmp_name, "../imgs/".$name);
		//     }
		// }

		header("Location: ../pages/cadastro_cliente.php?inserido=1");

	}catch(PDOException $e){
		echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
	}
} else {
	header("Location: ../pages/cadastro_cliente.php?inserido=0");
}
?>