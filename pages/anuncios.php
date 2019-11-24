<?php
session_start();
// if (!isset($_SESSION['fornecedor'])) {
//     header("Location: login.php");
// }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Projeto Integralizador 6</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/anuncios.css">
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
                <li><a href="login.php">Entrar</a></li>
                <li><a href="cadastro.php" class="call-btn">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>
    <div class="container">
        <section id="section">
            <div id="anuncios">
                <h1>Panfletos de qualidade</h1>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </p>
                <div class="section-row">
                    <div class="anuncios-item">
                        <img src="../imgs/anun3.jpg">
                        <h2>Anuncio 1</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, eos, veritatis! Voluptatem molestiae quos, itaque distinctio earum officia ea eius mollitia tenetur. Quidem itaque, sequi pariatur vel eum porro quae.
                        </p>
                    </div>
                    <div class="anuncios-item">
                        <img src="../imgs/anun3.jpg">
                        <h2>Anuncio 2</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, eos, veritatis! Voluptatem molestiae quos, itaque distinctio earum officia ea eius mollitia tenetur. Quidem itaque, sequi pariatur vel eum porro quae.
                        </p>
                    </div>
                    <div class="anuncios-item">
                        <img src="../imgs/anun2.jpg">
                        <h2>Anuncio 3</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, eos, veritatis! Voluptatem molestiae quos, itaque distinctio earum officia ea eius mollitia tenetur. Quidem itaque, sequi pariatur vel eum porro quae.
                        </p>
                    </div>
                    <div class="anuncios-item">
                        <img src="../imgs/anun3.jpg">
                        <h2>Anuncio 4</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, eos, veritatis! Voluptatem molestiae quos, itaque distinctio earum officia ea eius mollitia tenetur. Quidem itaque, sequi pariatur vel eum porro quae.
                        </p>
                    </div>
                    <div class="anuncios-item">
                        <img src="../imgs/anun1.jpg">
                        <h2>Anuncio 5</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, eos, veritatis! Voluptatem molestiae quos, itaque distinctio earum officia ea eius mollitia tenetur. Quidem itaque, sequi pariatur vel eum porro quae.
                        </p>
                    </div>
                    <div class="anuncios-item">
                        <img src="../imgs/anun3.jpg">
                        <h2>Anuncio 6</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum, eos, veritatis! Voluptatem molestiae quos, itaque distinctio earum officia ea eius mollitia tenetur. Quidem itaque, sequi pariatur vel eum porro quae.
                        </p>
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