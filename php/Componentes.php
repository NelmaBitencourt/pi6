<?php
	
	function menu(){
		echo '<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Projeto Integralizador 6</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/planos.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <script src="js/home.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i|Rubik:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
</head>

<body>
    <header id="header">
        <a href="index.php" id="logo">Projeto Integralizador 6</a>
        <nav>
            <ul id="menu">
                <li><a href="index.php">Início</a></li>
                <li><a href="planos.php">Planos</a></li>
                <li><a href="contato.php">Contato</a></li>                
                <? if (!isset($_SESSION["fornecedor"])) { ?>
                    <li><a href="login.php">Entrar</a></li>
                    <li><a href="cadastro.php" class="call-btn">Cadastre-se</a></li>
                <? }else{ ?>
                    <li><a href="administrador.php" class="call-btn">Administrador</a></li>
                <? } ?> 
            </ul>
        </nav>
    </header>';
	}



?>