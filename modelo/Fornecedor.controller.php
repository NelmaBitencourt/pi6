<?php
	 
	require_once "Fornecedor.model.php";
	require_once "Fornecedor.service.php";
	require "../BaseDados/Conexao.php";	
 	
	$fornecedor = new Fornecedor();

	$fornecedor->__set('$for_nm_fornecedor', $_POST['nome'].$_POST['sobrenome']);
	$fornecedor->__set('$for_ds_data_nascimento', $_POST['dia'].$_POST['mes'].$_POST['ano']);
	$fornecedor->__set('$for_ds_email', $_POST['email']);
	$fornecedor->__set('$for_ds_endereco', $_POST['endereco']);
	$fornecedor->__set('$for_num_endereco', $_POST['numero']);
	$fornecedor->__set('$for_ds_cidade', $_POST['cidade']);
	$fornecedor->__set('$for_ds_sexo', $_POST['sexo']);
	$fornecedor->__set('$for_ds_senha', $_POST['senha']);
 
 $conexao = new Conexao();

 $fornecedorService = new FornecedorService($conexao, $fornecedor);
 $fornecedorService->inserir();
 $conexao = null;
 
 header('Location: ../pages/cadastro.php?inclusao=1');
?>