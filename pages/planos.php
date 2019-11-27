<?php
session_start();
?>

<!DOCTYPE html>
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
                <? if (!isset($_SESSION['fornecedor'])) { ?>
                    <li><a href="login.php">Entrar</a></li>
                    <li><a href="cadastro.php" class="call-btn">Cadastre-se</a></li>
                <? }else{ ?>
                    <li><a href="administrador.php" class="call-btn">Administrador</a></li>
                <? } ?>                 
            </ul>
        </nav>
    </header>
    <div class="container">
        <section id="section">
            <div id="planos">
                <h1>Nossos planos</h1>
                <div class="section-row">
                    <div class="planos-item">
                        <h2>Prata</h2>
                        <img src="../imgs/icon2.png">
                        <p>
                            8 Panfletos por mês
                        </p>
                        <h3>R$ 19,90</h3>
                        <div id="formulario">
                            <?php
                            if (!isset($_SESSION['fornecedor'])) {
                                echo "<button name='item-prata' class='btn'><a href='login.php'>Comprar</a></button>";
                            } else {
                                 echo "<button name='item-prata' class='btn'><a href='../php/AssinarPlanoPrata.php'>Comprar</a></button>";
                            }
                            ?>
                            
                        </div>
                    </div>
                    <div class="planos-item">
                        <h2>Ouro</h2>
                        <h3 class="small">Preferido</h3>
                        <img src="../imgs/icon1.png">
                        <p>
                            Panfletos Ilimitados
                        </p>
                        <h3>R$ 39,90</h3>
                        <div id="formulario">
                            <?php
                            if (!isset($_SESSION['fornecedor'])) {
                                echo "<button name='item-ouro' class='btn' ><a href='login.php' >Comprar</a></button>";
                            } else {
                                echo "<button name='item-ouro' class='btn' ><a href='../php/AssinarPlanoOuro.php' >Comprar</a></button>";
                            }
                            ?>
                        </div>
                    </div>
                    <div class="planos-item">
                        <h2>Bronze</h2>
                        <img src="../imgs/icon3.png">
                        <p>
                            4 Panfletos por mês
                        </p>
                        <h3>R$ 9,90</h3>
                        <div id="formulario">
                            <?php
                            if (!isset($_SESSION['fornecedor'])) {
                                echo "<button name='item-bronze' class='btn'> <a href='login.php' >Comprar</a></button>";
                            } else {
                                echo "<button name='item-bronze' class='btn'> <a href='../php/AssinarPlanoBronze.php' >Comprar</a></button>";
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    </div>
    <footer id="footer">
        <div id="footer-item">
            <div id="logo">Projeto Integralizador 6</div>
            <ul>
                <li><a href="sobre.php">Sobre nós</a></li>
                <li><a href="contato.php">Fale conosco</a></li>
                <li>32 1654-789</li>
                <li>pi6@contato.com</li>
                <li>Av. Lorem Ipsum, 5485</li>
            </ul>
        </div>
        <div id="footer-item">
            <div id="logo">Minha conta</div>
            <ul>
                <li><a href="">Minha conta</a></li>
                <li><a href="cadastro.php">Cadastre-se</a></li>
                <li><a href="login.php">Faça login</a></li>
            </ul>
        </div>
        <div id="footer-item">
            <div id="logo">Nossos serviços</div>
            <ul>
                <li><a href="anuncios.php">Principais anúncios</a></li>
                <li><a href="planos.php">Nossos planos</a></li>
            </ul>
        </div>
    </footer>
</body>

</html>