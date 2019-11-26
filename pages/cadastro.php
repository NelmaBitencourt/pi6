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

    <? if (isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
       <div class ="bg-success pt-2 text-white d-flex justify-content-center">
        <h5>Cadastro realizado com sucesso!</h5>     
       </div>
    <? } ?>

    <div class="container">
        <section id="section">
            <h2>Cadastre-se</h2>
            <form method="post" action="../modelo/Fornecedor.controller.php" id="formulario">
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
                            <input type="text" name="dia" size="2" maxlength="2" placeholder="dd" required>
                            <input type="text" name="mes" size="2" maxlength="2" placeholder="mm" required>
                            <input type="text" name="ano" size="4" maxlength="4" placeholder="aaaa" required>
                        </div>
                        <div class="input">
                            <label>Sexo:</label>
                            <label class="checkbox">
                                <input type="radio" name="sexo" value="feminino" required> Feminino
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
                            <input type="password" name="senha" value="" required>
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
                    <button type="submit" name="cadastro" class="btn">Cadastrar</button>
                    <a href="login.php">Ou faça login</a>
                </div>
            </form>
    </div>
    </div>
    </section>
    </div>
</body>

</html>