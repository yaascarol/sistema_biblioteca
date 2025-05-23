<?php 
require_once ('conexao.php');

if(isset($_POST['submit'])){
    $Genero = $_POST['Genero'];

    $resultado = $conexao->query ("INSERT INTO Genero(Genero) VALUES ('$Genero')"); 
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Genero</title>
    <link rel="stylesheet" href="CSS/nav_bar.css">
    <link rel="stylesheet" href="CSS/cadastrar_genero.css">
</head>
<body>

    <nav>
        <h3>ADMINISTRADOR - (NOME)</h3>
        <h1>CADASTRAR GÊNERO</h1>
        <div class="menu">
            <ul>
                    <li class="menu-icon"><img src="imagens/332-3321096_mobile-menu-brown-menu-icon-png.png" alt="">
                        <ul>
                            <li class="menu-dropdown">Livros
                            <ul class="menu-dropdown-right">
                                <li><a href="cadastrar_livros.php">Cadastrar</a></li>
                                <li><a href="editar_livros.php">Editar</a></li>
                                <li><a href="listar_livros.php">Listar</a></li>
                            </ul>
                            </li>
                            <li class="menu-dropdown">Gêneros
                                <ul class="menu-dropdown-right">
                                    <li><a href="cadastrar_generos.php">Cadastrar</a></li>
                                    <li><a href="editar_generos.php">Editar</a></li>
                                    <li><a href="listar_generos.php">Listar</a></li>
                                </ul>
                            </li>
                            <li class="menu-dropdown">Leitores
                                <ul class="menu-dropdown-right">
                                    <li><a href="cadastrar_clientes.php">Cadastrar</a></li>
                                    <li><a href="editar_clientes.php">Editar</a></li>
                                    <li><a href="listar_clientes.php">Listar</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
                <button class="search"><input type="search" placeholder="Consultar..."> <img src="imagens/search-icon-png-21.png"></button>
                <button class="user"><a href="login.html"><img src="imagens/logout-icon-2048x2048-libuexip.png"><h6>SAIR</a><h6></button>
        </div>
    </nav>

    <div class="container">
        <form class="dados" action="cadastrar_generos.php" method="post">
            <div id="dados-esquerda">
                <div id="capa"></div>
            </div>
            <div id="dados-direita">
                <input type="text" name="Genero" placeholder="Gênero:" class="genero">
                <button type="submit" name="submit">Cadastrar</button>
            </div>
        </form>
    </div>
    </div>

</body>
</html>
