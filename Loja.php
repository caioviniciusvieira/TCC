    <?php
    session_start();
    $conta = 'Crie sua conta';

    if(isset($_SESSION['s'])&& isset($_SESSION['senha'])){
       $conta = $_SESSION['s'];
    }
    else{
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
</head>
<body>
    <header>
        <ul>
            <ul class="header-navegacao">
                <img class="logo" src="Imagens/pces.png">
                <br>
                <br>
                <li>Inicio</li>
                <li>Montar</li>
                <li>Loja</li>
            </ul>
            <ul class="header-barraPesquisa">
                <input type="search" placeholder="Pesquisar">
            
            <ul class="header-conta">
                <li><a href="cadastro.html">Crie sua conta</a></li>
                <li class="user" onclick="teste()"></li>
                <li>Carrinho</li>
            </ul>
            <ul>
                <div class="teste">
                    <div class="flex">
                        <li class="user"></li>
                        <li><a href="cadastro.html"><?php echo $conta;?></a></li>
                    </div>
                        <br>
                        <button>Endereços</button>  
                        <button>Carrinho</button>
                        <button class="fechar" onclick="fechar()">Fechar</button>
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

<div class="flexRecomend">
    <h1 class="title"></h1>
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
    </body>
    </html>
</div>
