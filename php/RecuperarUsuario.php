<?php
 session_start();
 if (!empty($_POST['email']) && !empty($_POST['senha'])) {
		try{

			$email = $_POST['email'];
   $senha = $_POST['senha'];

   // Adicionando importações
   require_once '../modelo/Fornecedor.service.php';
   require_once '../modelo/Fornecedor.model.php';
   require_once '../BaseDados/Conexao.php';

   $fornecedorService = new FornecedorService(new Conexao(), new Fornecedor());

   $fornecedor = $fornecedorService->recuperar($email, $senha);

   if ($fornecedor) {
				header("Location: ../pages/index.php");
				$_SESSION["fornecedor"] = $fornecedor;
			
			} else {
				header("Location: ../pages/login.php?erro=1");
			}

		}catch(PDOException $e){
			echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
		}
 }

	