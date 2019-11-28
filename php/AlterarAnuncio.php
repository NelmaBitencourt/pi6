<?php	
	session_start();
	if (!isset($_SESSION['fornecedor'])) {
    header("Location: login.php");
  }
  require_once '../BaseDados/Conexao.php';

	$id = $_POST['id'];
	$nome = $_POST['nome'];
	$descricao = $_POST['descricao'];
	$imagem = $_FILES["image"]["name"];

	$conexao = new Conexao();

	$conexao = $conexao->conectar();

	$query = "UPDATE PAN_panfleto SET 
   pan_nm_titulo = :nome,
   pan_ds_descricao = :descricao,
   pan_img_imagem = :imagem 
   WHERE pan_id_panfleto = :id";

	$stm = $conexao->prepare($query);
	$stm->bindValue(":nome", $nome);	
	$stm->bindValue(":descricao", $descricao);
	$stm->bindValue(":imagem", $imagem);
	$stm->bindValue(":id", $id);

	$stm->execute();

	$origem = $_FILES["image"]["tmp_name"];
	$destino = realpath("../imgs/")."/".$imagem;
	move_uploaded_file($origem, $destino);


	header("Location: ../pages/administrador.php");
