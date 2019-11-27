<?php	
	session_start();
	if (!isset($_SESSION['fornecedor'])) {
    header("Location: login.php");
  }
  require_once '../BaseDados/Conexao.php';

  		$id = $_POST['id'];
		$cli_nm_nome = $_POST['nome'].$_POST['sobrenome'];
		$cli_ds_data_nascimento = $_POST['dia'].$_POST['mes'].$_POST['ano'];
		$cli_ds_sexo = $_POST['sexo'];
		$cli_ds_email = $_POST['email'];
		$cli_ds_senha = $_POST['senha'];
		$cli_ds_endereco = $_POST['endereco'];
		$cli_num_endereco = $_POST['numero'];
		$cli_ds_cidade = $_POST['cidade'];

	$conexao = new Conexao();

	$conexao = $conexao->conectar();

	$query = "UPDATE CLI_cliente SET 
   cli_nm_cliente = :nome,
   cli_ds_data_nascimento = :dataNascimento,
   cli_ds_endereco = :endereco, 
   cli_num_endereco = :numero,
   cli_ds_cidade = :cidade,
   cli_ds_sexo = :sexo,
   cli_ds_email = :email,
   cli_ds_senha = :senha
   WHERE cli_id_cliente = :id";

	$stm = $conexao->prepare($query);
	$stm->bindValue(":nome", $cli_nm_nome);	
	$stm->bindValue(":dataNascimento", $cli_ds_data_nascimento);
	$stm->bindValue(":endereco", $cli_ds_endereco);
	$stm->bindValue(":numero", $cli_num_endereco);
	$stm->bindValue(":cidade", $cli_ds_cidade);
	$stm->bindValue(":sexo", $cli_ds_sexo);
	$stm->bindValue(":email", $cli_ds_email);
	$stm->bindValue(":senha", $cli_ds_senha);
	$stm->bindValue(":id", $id);

	$stm->execute();


// foreach ($_FILES["image"]["error"] as $key => $error) {
// 		    if ($error == UPLOAD_ERR_OK) {
// 		        $tmp_name = $_FILES["image"]["tmp_name"][$key];
// 		        $name = $_FILES["image"]["name"][$key];
// 		        move_uploaded_file($tmp_name, "../imgs/".$name);
// 		    }
// 		}

	header("Location: ../pages/administrador.php");
