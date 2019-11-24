<?php

	$dns = 'mysql:host=localhost;dbname=projetointegralizador6';
	$usuario = 'root';
	$senha = '';	

	try{
		$conexao = new PDO($dns, $usuario, $senha);
	 //$query = '
		//	select * from USU_usuario
		//';

		//$stmt = $conexao->query($query);
		//$lista = $stmt->fetchAll(PDO::FETCH_ASSOC); //referência por nome da coluna
		//$lista = $stmt->fetchAll(PDO::FETCH_NUM); //referência por indices
		//$lista = $stmt->fetchAll(PDO::FETCH_OBJ); //retorna objetos ao invés de array

		//recuperação para valores em array de objetos
		//echo $lista[1]->usu_nm_usuario;

		//echo '<pre>';
		//print_r($lista);
		//echo '</pre>';

	}catch(PDOException $e){
		echo 'Erro: '.$e->getCode().' Mensagem: '.$e->getMessage();
	}