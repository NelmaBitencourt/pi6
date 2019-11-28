<?php
    session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Projeto Integralizador 6</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/contato.css">
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
            <h1>Fale conosco</h1>
            <form action="" method="post" id="formulario">
                <div id="cadastro">
                    <!-- dados pessoais -->
                    <div class="form-col">
                        <div class="input">
                            <label>Nome completo:</label>
                            <input type="text" name="nome" value="">
                        </div>
                        <div class="input">
                            <label>E-mail:</label>
                            <input type="email" name="email" value="">
                        </div>
                        <div class="input">
                            <label>Mensagem</label>
                            <textarea name="mensagem" rows="5" cols="50"></textarea>
                        </div>
                    </div>
                    <!-- endereço -->
                    <div class="form-col">
                        <li> <img src="../imgs/phone.png"> 32 1654-789</li>
                        <li><img src="../imgs/email.png"> pi6@contato.com</li>
                        <li><img src="../imgs/address.png"> Av. Lorem Ipsum, 5485</li>
                        <div id="mapa">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.024190353756!2d-38.5146716857728!3d-12.970303863295907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71604e435d5ce59%3A0x28ab1adf89b36149!2sAv.%20Estados%20Unidos%2C%2020%20-%20Comercio%2C%20Salvador%20-%20BA%2C%2040010-020!5e0!3m2!1spt-BR!2sbr!4v1571793407709!5m2!1spt-BR!2sbr" width="280" height="270" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                        </div>
                    </div>
                </div>
                <div class="form-btn">
                    <button type="submit" name="submit" class="btn">Enviar</button>
                </div>
            </form>
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