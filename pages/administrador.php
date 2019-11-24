<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Projeto Integralizador 6</title>
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/administrador.css">
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
                    <li><a href="cadastro_anuncio.php">Cadastrar anuncio</a></li>
                    <li><a href="cadastro_cliente.php">Cadastrar cliente</a></li>
                </ul>
            </nav>
            <div id="header-plano">Plano Adquirido <h3><a href="planos.php">Ouro</a></h3>
            </div>
        </section>
        <section id="section">
            <div id="adm-clientes">
                <h2>Clientes</h2>
                <div class="section-row">
                    <table>
                        <thead>
                            <th>Nome</th>
                            <th>Panfletos</th>
                            <th colspan="2">Administrar</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nome</td>
                                <td>Ilimitado</td>
                                <td><a href="" class="editar">editar</a></td>
                                <td><a href="" class="deletar">deletar</a></td>
                            </tr>
                            <tr>
                                <td>Nome 2</td>
                                <td>8 Panfletos</td>
                                <td><a href="" class="editar">editar</a></td>
                                <td><a href="" class="deletar">deletar</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <h2>Anúncios</h2>
                <div class="section-row">
                    <table>
                        <thead>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th colspan="2">Administrar</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nome</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. In totam vitae tenetur provident.</td>
                                <td><a href="" class="editar">editar</a></td>
                                <td><a href="" class="deletar">deletar</a></td>
                            </tr>
                            <tr>
                                <td>Nome 2 Lorem ipsum dolor sit amet</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</td>
                                <td><a href="" class="editar">editar</a></td>
                                <td><a href="" class="deletar">deletar</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
</body>

</html>