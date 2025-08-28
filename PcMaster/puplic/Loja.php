<?php
    include_once("/PcMaster/src/backend/conexao.php");
    session_start();

    $sql_produto = "SELECT codigo_produto, imagem, nome, valor, quantidade FROM Produtos";
    $query_produtos = $conexao->query($sql_produto); // consulta o banco de dados
    $num_produtos = $query_produtos->num_rows; // número de colunas na tabela usuarios

    if ($conexao->connect_error) {
        die("Connetion failed:");
        echo $query_clientes->error;
    }

    $usuario = 'Crie sua conta';
    $link = 'conta.html';

    if (isset($_SESSION['s']) && isset($_SESSION['senha'])) {
        $usuario = $_SESSION['nome'];
    } else {
        $link2 = 'cadastro.html';
        $link = $link2;
        echo 'falha na conexão com o banco';
    }
?>     

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="Imagens/Logo-2 TCC.png">
    <title>Master Pc</title>
    <link rel="stylesheet" href="CSS/loja.css">
    <script src="JS/carrousel.js"></script>
    <script src="JS/conta-menu.js"></script>    
</head>
<body>
       <header>
        <div class="header-content">
            <span id=logo>
                <img class="icon" src="Imagens/Logo-2 TCC.png" alt="Master PC Logo">
                <h2>MasterPC</h2>
            </span>
            <ul class="header-navegacao">
                <li class="nav-item"><a href="index.html">Inicio</a></li>
                <li class="nav-item">Montar</li>
                <li class="nav-item"><a href="Loja.html">Loja</a></li>
            </ul>
            <div class="header-right">
                <div class="header-barraPesquisa">
                    <input class="pesquisa" type="search" placeholder="Pesquisar">
                </div>
                <ul class="header-conta">
                    <li><a href="cadastro.html">Entrar</a></li>
                    <li class="user" onclick="teste()"></li>
                    <li><img class="carrinho icon" src="Imagens/carrinhos.png" alt="Carrinho de compras"></li>
                </ul>
                <ul>
                    <div class="barra-lateral">
                        <div class="barra-lateral-conta-container">
                            <li class="user"></li>
                            <li><a href="<?php echo $link;?>"><?php echo $usuario;?></a></li>
                        </div>
                        <br>
                        <button class="botao-barra-lateral">Endereços</button>  
                        <button class="botao-barra-lateral">Carrinho</button>
                        <button class="fechar-barra-lateral" onclick="fechar()">Fechar</button>
                    </div>
                </ul>                
            </div>
            <div class="hamburger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
        <nav class="mobile-nav">
            <ul>
                <!-- os # na tag "a" devem ser preenchidos com suas paginas -->
                <li><a href="index.html">Inicio</a></li>
                <li><a href="#">Montar</a></li>
                <li><a href="Loja.html">Loja</a></li>
                <li><a href="cadastro.html">Sign Up</a></li>
                <li><a href="#">Minha Conta</a></li>
                <li><a href="#">Carrinho</a></li>
                <li><input type="search" placeholder="Pesquisar"></li>
                <li class="nav-sub-item">Armazenamento</li>
                <li class="nav-sub-item">Placa-mãe</li>
                <li class="nav-sub-item">Placa de video </li>
                <li class="nav-sub-item">Gabinete</li>
                <li class="nav-sub-item">Processador</li>
                <li class="nav-sub-item">Fonte</li>
                <li class="nav-sub-item">Memória</li>
                <li class="nav-sub-item">Fans</li>
                <li class="nav-sub-item">Montar</li>
                <li class="nav-sub-item">Ajuda</li>
            </ul>
        </nav>
    </header>

    <div class="sub-header desktop-only">
        <li class="sub-header-item">Armazenamento</li>
        <li class="sub-header-item">Placa-mãe</li>
        <li class="sub-header-item">Placa de video </li>
        <li class="sub-header-item">Gabinete</li>
        <li class="sub-header-item">Processador</li>
        <li class="sub-header-item">Fonte</li>
        <li class="sub-header-item">Memória</li>
        <li class="sub-header-item">Fans</li>
        <li class="sub-header-item">Montar</li>
        <li class="sub-header-item">Ajuda</li>
    </div>
    <br>
    <div class="slide-container">
        <img class="slide" style="display: block;" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSFLql02zuqn16zTgy0ZEONTRhPf_vJZYLEWw&s">
        <img class="slide" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS9HnQ9SyjB54UwOJjd86G7Fj0b61FQpFlpGA&s">
        <img class="slide" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTXkErz_Mt9nxgQFdB5wFk8ScL-CP90JcNP5Q&s">
        <p class="text">dehfuidhfuidhfiudjfhodjfdkljfdkofjdokfjdklfjkdklfjdklfjdkfjdjfoidkfjki</p>
        <button class="prev" onclick="Slideplus(-1)"><</button>
        <button class="next" onclick="Slideplus(1)">></button>
    </div>

    <div style="text-align: center;">
        <span class="dot" onclick="Slideatual(1)"></span>
        <span class="dot" onclick="Slideatual(2)"></span>
        <span class="dot" onclick="Slideatual(3)"></span>
    </div>

    <div class="flexRecomend">
        <h1 class="title">Em alta</h1>
        <div class="container">
            <div class="box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz6EWIo-9UazfEeTigPTNVj0vFXPNTsqBChA&s" alt="">
                <div class="text-content">
                    <h1>Ryzen 7 30584XD</h1>
                    <p>Vendidos:</p>
                    <div class="content-price">
                        <p>A vista </p>
                        <h1>R$ 1000,00 </h1>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz6EWIo-9UazfEeTigPTNVj0vFXPNTsqBChA&s" alt="">
                <div class="text-content">
                    <h1>Ryzen 7 30584XD</h1>
                    <p>Vendidos:</p>
                    <div class="content-price">
                        <p>A vista </p>
                        <h1>R$ 1000,00 </h1>
                    </div>
                </div>
            </div>
            <div class="box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz6EWIo-9UazfEeTigPTNVj0vFXPNTsqBChA&s" alt="">
                <div class="text-content">
                    <h1>Ryzen 7 30584XD</h1>
                    <p>Vendidos:</p>
                    <div class="content-price">
                        <p>A vista </p>
                        <h1>R$ 1000,00 </h1>
                    </div>
                </div>
            </div>  
            <div class="box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz6EWIo-9UazfEeTigPTNVj0vFXPNTsqBChA&s" alt="">
                <div class="text-content">
                    <h1>Ryzen 7 30584XD</h1>
                    <p>Vendidos:</p>
                    <div class="content-price">
                        <p>A vista </p>
                        <h1>R$ 1000,00 </h1>
                    </div>
                </div>
            </div>  
            <div class="box">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQz6EWIo-9UazfEeTigPTNVj0vFXPNTsqBChA&s" alt="">
                <div class="text-content">
                    <h1>Ryzen 7 30584XD</h1>
                    <p>Vendidos:</p>
                    <div class="content-price">
                        <p>A vista </p>
                        <h1>R$ 1000,00 </h1>
                    </div>
                </div>
            </div>      
        </div>
    </div>

    <div class='flexRecomend'>
        <h1 class='title'>Memória</h1>
        <div class="container">
            <?php 
                if ($num_produtos == 0) {
                    echo "nenhum produto encontrado";
                } else {
                    while ($produtos = $query_produtos->fetch_assoc()) {
                        echo "<a href='item.php?id=".$produtos['codigo_produto']."'>
                                <div class='box' id='" . $produtos['codigo_produto'] . "'>
                                    <img src='" . $produtos['imagem'] . "'>
                                    <div class='text-content'>
                                        <h1>" . $produtos['nome'] . "</h1>
                                        <p>Vendidos:</p>
                                        <div class='content-price'>
                                            <p>Quantidade: " . $produtos['quantidade'] . "</p>
                                            <h1>" . $produtos['valor'] . "</h1>
                                        </div>
                                    </div>
                                </div>
                              </a>";
                    }
                }        
            ?>
        </div>
    </div>
</body>
</html>
