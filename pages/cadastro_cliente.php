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
                <li><span>Nome do Usuario/adm (se quiser)</span></li>
                <li><a href="">Sair</a></li>
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
            <form action="" method="post" id="formulario">
                <div id="cadastro">
                    <!-- dados pessoais -->
                    <div class="form-col">
                        <legend>Dados pessoais</legend>
                        <div class="input">
                            <label>Nome:</label>
                            <input type="text" name="nome" value="" required>
                        </div>
                        <div class="input">
                            <label>Sobrenome:</label>
                            <input type="text" name="sobrenome" value="" required>
                        </div>
                        <div class="input">
                            <label>Nascimento:</label>
                            <input type="text" name="dia" size="2" maxlength="2" value="dd" required>
                            <input type="text" name="mes" size="2" maxlength="2" value="mm" required>
                            <input type="text" name="ano" size="4" maxlength="4" value="aaaa" required>
                        </div>
                        <div class="input">
                            <label>Sexo:</label>
                            <label class="checkbox">
                                <input type="radio" name="sexo" value="feminino"> Feminino
                            </label>
                            <label class="checkbox">
                                <input type="radio" name="sexo" value="masculino"> Masculino
                            </label>
                        </div>
                        <div class="input">
                            <label>E-mail:</label>
                            <input type="email" name="email" value="" required>
                        </div>
                        <div class="input">
                            <label>Senha:</label>
                            <input type="password" name="" value="" required>
                        </div>
                    </div>
                    <!-- dados de endereço -->
                    <div class="form-col">
                        <legend>Dados de endereço</legend>
                        <div class="input">
                            <label>Endereço:</label>
                            <input type="text" name="endereco" value="" required>
                        </div>
                        <div class="input">
                            <label>Numero:</label>
                            <input type="text" size="4" name="numero" value="" required>
                        </div>
                        <div class="input">
                            <label>Cidade:</label>
                            <input type="text" name="cidade" value="" required>
                        </div>
                    </div>
                </div>
                <div class="form-btn">
                    <button type="submit" name="cadastro" class="btn">Cadastrar cliente</button>
                </div>
            </form>
        </section>
    </div>
</body>

</html>