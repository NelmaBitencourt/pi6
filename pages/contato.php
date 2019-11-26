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
        <section id="header-img">
            <h1>Projeto Integralizador 6</h1>
            <h2>Seu site de publicidade</h2>
            <p>
                Adquira já um de nossos pacotes e anuncie seus panfletos para todos os seus clientes! Forneça acesso a internet de maneira gratuita para seus clientes e em troca divulgue seus panfletos para o maior número de pessoas possível assim você alcançará um público muito maior!!
            </p>
        </section>
        <section id="section">
            <h1>Principais Anúncios</h1>
            <div class="section-row">
                <img src="../imgs/anun1.jpg">
                <img src="../imgs/anun2.jpg">
                <img src="../imgs/anun3.jpg">
            </div>
            <div id="btn">
                <button class="btn2"><a href="anuncios.php">Ver mais</a></button>
            </div>
        </section>
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
                            <button type="submit" name="item-prata" class="btn">Comprar</button>
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
                            <button type="submit" name="item-ouro" class="btn">Comprar</button>
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
                            <button type="submit" name="item-bronze" class="btn">Comprar</button>
                        </div>
                    </div>
                </div>
                <div id="btn">
                    <button class="btn2"><a href="planos.php">Saiba Mais</a></button>
                </div>
            </div>
        </section>
        <section id="section">
            <div id="contato">
                <h1>Newsletter </h1>
                <p>
                    Cadastre seu e-mail em nossa newsletter e receba gratuitamente conteudos relevantes, promoções e novidades.
                </p>
                <form action="" method="post" id="formulario">
                    <div id="contatoform">
                        <label>Digite seu melhor e-mail:</label>
                        <input type="email" name="email" value="">
                    </div>
                    <div class="input">
                        <button type="submit" name="login" class="btn">Cadastrar</button>
                    </div>
                </form>
                <div id="mapa">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3888.024190353756!2d-38.5146716857728!3d-12.970303863295907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71604e435d5ce59%3A0x28ab1adf89b36149!2sAv.%20Estados%20Unidos%2C%2020%20-%20Comercio%2C%20Salvador%20-%20BA%2C%2040010-020!5e0!3m2!1spt-BR!2sbr!4v1571793407709!5m2!1spt-BR!2sbr" width="800" height="219" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
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