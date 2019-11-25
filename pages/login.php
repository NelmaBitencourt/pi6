<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/formulario.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,700,700i|Rubik:400,400i,500,500i,700,700i&display=swap" rel="stylesheet">
</head>

<body>
    <header id="header">
        <a href="index.php" id="logo">Projeto Integralizador 6</a>
        <nav>
            <ul id="menu">
                <li><a href="index.php">Início</a></li>
                <li><a href="login.php">Entrar</a></li>
                <li><a href="cadastro.php">Cadastre-se</a></li>
            </ul>
        </nav>
    </header>
    <?php
    if (isset($_GET['erro']) && $_GET['erro'] == 1) {
        echo "<div class='container'>";
        echo "Usuário ou senha incorretos";
        echo "</div>";
    }
    ?>
    <div class="container">
        <section id="section">
            <h2>Faça seu login</h2>
            <form action="../php/RecuperarUsuario.php" method="post" id="formulario">
                <div id="login">
                    <!-- dados pessoais -->
                    <div class="form-col">
                        <div class="input">
                            <label>E-mail:</label>
                            <input type="email" name="email" value="" required>
                        </div>
                        <div class="input">
                            <label>Senha:</label>
                            <input type="password" name="senha" value="" required>
                        </div>
                    </div>
                </div>
                <div class="form-btn">
                    <button type="submit" name="login" class="btn">Entrar</button>
                    <a href="cadastro.php">Ou cadastre-se</a>
                </div>
            </form>
        </section>
    </div>
</body>

</html>