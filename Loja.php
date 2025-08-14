<?php
    include_once("conexao.php");
    session_start();

    $sql_produto = "SELECT codigo_produto, imagem, nome, valor, quantidade FROM Produtos";
    $query_produtos = $conexao->query($sql_produto); // consulta o banco de dados
    $num_produtos = $query_produtos->num_rows; // número de colunas na tabela usuarios

    if ($conexao->connect_error) {
        die("Connetion failed:");
        echo $query_clientes->error;
    }

    $conta = 'Crie sua conta';
    $elemento2 = '<li><a><?php echo $conta;?></a></li>';

    if (isset($_SESSION['s']) && isset($_SESSION['senha'])) {
        $conta = $_SESSION['nome'];
        $elemento = '';
    } else {
        $elemento = '<li><a href="cadastro.html">Crie sua conta</a></li>';
        $elemento2 = $elemento;
        echo 'falha na conexão com o banco';
    }
?>     

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASTER PC</title>
    <link rel="stylesheet" href="CSS/loja.css">
    <script src="JS/loja.js"></script>
    <script src="JS/conta-menu.js"></script>
</head>
<body>
    <header>
        <ul>
            <ul class="header-navegacao">
                <img class="logo" src="Imagens/pces.png">
                <br><br>
                <li>Inicio</li>
                <li>Montar</li>
                <li>Loja</li>
            </ul>
            <ul class="header-barraPesquisa">
                <input type="search" placeholder="Pesquisar">
            </ul>
            <ul class="header-conta">
                <?php echo $elemento; ?> <!-- Cria um elemento no php -->
                <li class="user" onclick="teste()"></li>
                <li><img class="carrinho icon" src="Imagens/carrinhos.png" alt="Carrinho de compras"></li>
            </ul>
            <ul>
                <div class="barra-lateral">
                    <div class="barra-lateral-conta-container">
                        <li class="user"></li>
                        <li><a><?php echo $conta;?></a></li>
                    </div>
                    <br>
                    <button class="botao-barra-lateral">Endereços</button>  
                    <button class="botao-barra-lateral">Carrinho</button>
                    <button class="fechar-barra-lateral" onclick="fechar()">Fechar</button>
                </div>
            </ul>
            </ul>
        </ul>
    </header>

    <div class="sub-header">
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
