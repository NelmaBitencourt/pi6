<?php
session_start();
if (!isset($_SESSION['fornecedor'])) {
    header("Location: login.php");
}

if (!empty($_POST['nome']) && !empty($_POST['descricao']) && !empty($_FILES['image']["name"])) {
	try{


		require_once '../BaseDados/Conexao.php';

		$pan_nm_titulo = $_POST["nome"];
		$pan_ds_descricao = $_POST["descricao"];
		$pan_img_imagem = $_FILES["image"]["name"];

		$conexao = new Conexao();

		$conexao = $conexao->conectar();

		$query = "INSERT INTO PAN_panfleto (pan_nm_titulo, pan_ds_descricao, pan_img_imagem, pan_id_fornecedor) VALUES (:a, :b, :c, :d);";

		$stm = $conexao->prepare($query);

		$stm->bindValue(":a", $pan_nm_titulo);
		$stm->bindValue(":b", $pan_ds_descricao);
		$stm->bindValue(":c", $pan_img_imagem);
		$stm->bindValue(":d", $_SESSION["fornecedor"]->for_id_fornecedor);

		$stm->execute();

// falta corrigir bug, nao salva o arquivo na pasta.
		foreach ($_FILES["image"]["error"] as $key => $error) {
		    if ($error == UPLOAD_ERR_OK) {
		        $tmp_name = $_FILES["image"]["tmp_name"][$key];
		        $name = $_FILES["image"]["name"][$key];
		        move_uploaded_file($tmp_name, "../imgs/".$name);
		    }
		}

		header("Location: ../pages/cadastro_anuncio.php?inserido=1");

	}catch(PDOException $e){
		echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
	}
} else {
	header("Location: ../pages/cadastro_anuncio.php?inserido=0");
}
?>