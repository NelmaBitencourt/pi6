<?php
	session_start();
	if (!isset($_SESSION['fornecedor'])) {
    header("Location: ../pages/login.php");
	}
	require_once '../BaseDados/Conexao.php';

	$id = $_GET['id'];

	$conexao = new Conexao();

	$conexao = $conexao->conectar();

	$query = "DELETE FROM PAN_panfleto WHERE pan_id_panfleto = :id";
	$stm = $conexao->prepare($query);
	$stm->bindValue(":id", $id);
	$stm->execute();
	header("Location: ../pages/administrador.php");
?>