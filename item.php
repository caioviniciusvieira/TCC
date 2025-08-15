<?php
    include_once('conexao.php');
    session_start();

    $id = $_GET['id'];
    $stmt = $conexao->prepare("SELECT * FROM Produtos WHERE codigo_produto = ?");
    $stmt->bind_param("id", $id);
    $stmt->execute();
    $query_produtos = $stmt->get_result();

    $num_produtos = $query_produtos->num_rows;
    $produtos = $query_produtos->fetch_assoc();

    if($num_produtos == 0|| $id == ''){
        echo "Produto não encontrado";
    }

    $conta = 'Crie sua conta';
    $elemento2 = '<li><a><?php echo $conta;?></a></li>';

    if (isset($_SESSION['s']) && isset($_SESSION['senha'])) {
        $conta = $_SESSION['nome'];
        $elemento = '';
    } else {
        $elemento = '<li><a href="cadastro.html">Crie sua conta</a></li>';
        $elemento2 = $elemento;
        echo 'Falha na conexão com o usuario';
    }
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="Imagens/Logo-2 TCC.png">
    <title>MASTER PC</title>
    <link rel="stylesheet" href="CSS/item.css">
    <script src="JS/menu.js" defer></script>
    <script src="JS/conta-menu.js" defer></script>
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
                    <input type="search" placeholder="Pesquisar">
                </div>
                <ul class="header-conta">
                    <li><a href="cadastro.html">Entrar</a></li>
                    <?php echo $elemento; ?> <!-- Cria um elemento no php -->
                    <li class="user" onclick="teste()"></li>
                    <li><img class="carrinho icon" src="Imagens/carrinhos.png" alt="Carrinho de compras"></li>
                </ul>
                <ul>
                <div class="barra-lateral">
                    <div class="barra-lateral-conta-container">
                        <li class="user"></li>
                        <li><a><?php echo "conta";?></a></li>
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

<div class="item-container" id="<?php echo $id; ?>">
    <div class="item-imagem-container">
        <img src="<?php echo $produtos['imagem']; ?>" width="400rem" height="350rem">
        <div class="item_preco-container">
            <div class="item_preco">
                <p>R$<?php echo $produtos['valor']; ?></p>
                <p>Ver na loja</p>
            </div>
            <div class="item_botoes-container">
                <button class="botao-item-container">Comprar</button>
                <button class="botao-carrinho-item-container"><img src="Imagens/carrinhos.png" alt="Carrinho imagem"  width="30px" height="30px"></button>
            </div>
        </div>    
    </div>    
    <div class="item_descricao-container">
        <h1><?php echo $produtos['nome'];?></h1>
        <br>
        <p><?php echo $produtos['descricao'];?></p>
    </div>   
</div>
<div class="especificacoes-item-container">
    <div class="especificacoes-container">
        <div class="especificacao">
            <h1>Versão</h1>
            <br>
            <p><?php echo $produtos['versao']; ?></p>
        </div>
        <div class="especificacao" style="border-right: 1px solid; border-left: 1px solid;">
            <h1>Formato</h1>
            <br>
            <p><?php echo $produtos['formato']; ?></p>
        </div>
        <div class="especificacao">
            <h1>Compatibilidade</h1>
            <br>
            <p><?php echo $produtos['compatibilidade']; ?></p>
        </div>
        <div class="especificacao">
            <h1>Latência</h1>
            <br>
            <p><?php echo $produtos['latencia']; ?></p>
        </div>
        <div class="especificacao" style="border-right: 1px solid; border-left: 1px solid;">
            <h1>Velocidade</h1>
            <br>
            <p><?php echo $produtos['velocidade']; ?></p>
        </div>
        <div class="especificacao">
            <h1>Capacidade</h1>
            <br>
            <p><?php echo $produtos['capacidade']; ?></p>
        </div>                                
    </div>
    <div class="especificacao-design">
        <h1>Design</h1>
        <br>
        <p><?php echo $produtos['design'];?><p>  
    </div>  
</div>
<div class="item-avaliacoes-container">
    <ul class="avaliacoesPositivas-container">  
        <h1>Pontos Positivos</h1>
        <br>
        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas nihil rerum autem. Nobis aut placeat
            quaerat odio, obcaecati ducimus porro et ipsum, cumque autem laudantium adipisci veniam facere accusantium vel!</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident totam repellendus est cum,
            vero quae distinctio possimus corrupti tempore corporis. 
            Quam aut, magnam esse quasi ducimus neque facilis velit tempore.</li>
        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium odio sint cum
            iste inventore consequatur corporis nostrum ipsam explicabo porro, pariatur illum amet. Neque dolorum 
            facilis quas culpa corporis?</li>
        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eligendi ipsa rem repellat doloremque, quod,
            fugit, consequuntur aperiam minima ut tempora neque illum fugiat harum porro nostrum vitae ea voluptatibus?</li>
        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem quas quasi expedita. Illo officia ullam tempore magni
            error earum doloremque sunt porro, quod hic, ratione adipisci corrupti. Iusto, quidem perspiciatis.</li>
    </ul>
    <ul class="avaliacoesNegativas-container">
        <h1>Pontos Negativos</h1>
        <br>
        <li>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quas nihil rerum autem. Nobis aut placeat
            quaerat odio, obcaecati ducimus porro et ipsum, cumque autem laudantium adipisci veniam facere accusantium vel!</li>
        <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident totam repellendus est cum,
            vero quae distinctio possimus corrupti tempore corporis. 
            Quam aut, magnam esse quasi ducimus neque facilis velit tempore.</li>
        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus praesentium odio sint cum
            iste inventore consequatur corporis nostrum ipsam explicabo porro, pariatur illum amet. Neque dolorum 
            facilis quas culpa corporis?</li>
        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Modi eligendi ipsa rem repellat doloremque, quod,
            fugit, consequuntur aperiam minima ut tempora neque illum fugiat harum porro nostrum vitae ea voluptatibus?</li>
        <li>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Autem quas quasi expedita. Illo officia ullam tempore magni
            error earum doloremque sunt porro, quod hic, ratione adipisci corrupti. Iusto, quidem perspiciatis.</li>
    </ul>    
</div>
<br>
    <footer>
        @2025 MikaelL e CaioV. Todos os Direitos Reservados. 
    </footer>
</body>
</html>