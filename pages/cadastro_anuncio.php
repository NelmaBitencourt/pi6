<?php
session_start();
if (!isset($_SESSION['fornecedor'])) {
    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Projeto Integralizador 6</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/administrador.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <script src="js/home.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i|Rubik:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
</head>

<body>
    <header id="header">
        <a href="index.php" id="logo">Administrador</a>
        <nav>
            <ul id="menu">
                <li><a href="index.php">Início</a></li>
                <li><span>
                    <?php 
                            echo $_SESSION["fornecedor"]->for_nm_fornecedor;
                        ?>
                </span></li>
                <li><a href="../php/logout.php">Sair</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <section id="header-adm">
            <nav>
                <ul id="menu-adm">
                    <li><a href="administrador.php">Voltar</a></li>
                </ul>
            </nav>
        </section>
        <section id="section">
            <div id="cadastro">
                <? if (!isset($_GET['id'])){ ?>
                    <form action="../php/CadastrarAnuncio.php" method="post" id="formulario" enctype="multipart/form-data">
                <? }else{ ?>
                    <form action="../php/AlterarAnuncio.php" method="post" id="formulario" enctype="multipart/form-data">
                <? } ?>                
                    <div class="form-col">
                        <div class="input">
                            <label>Nome</label>
                            <input type="text" name="nome" value="">
                        </div>
                        <div class="input">
                            <label>Descrição</label>
                            <textarea name="descricao" rows="5" cols="50"></textarea>
                        </div>
                        <div class="input">
                            <label>Imagem</label>
                            <input type="file" name="image" class="text-input">
                        </div>
                        <? if (isset($_GET['id'])){ ?>
                            <input type="text" name="id" <? echo 'value="'. $_GET['id'] .'"'; ?> hidden>
                        <? } ?>
                        
                    </div>
                    <div class="form-btn">
                        <button type="submit" class="btn">Cadastrar anúncio</button>
                    </div>
                </form>
            </div>
        </section>
    </div>
</body>

</html>