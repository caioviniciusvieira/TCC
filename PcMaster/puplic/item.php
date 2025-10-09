<?php
include_once('../src/backend/login-verificação.php');
include_once('../src/backend/produtos.php');
include_once('../src/backend/produto-info.php');
include_once("../src/backend/foto_perfil-info.php");
?>  

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="/PcMaster/assets/Imagens/Logo-2 TCC.png">
    <title>MASTER PC</title>
    <link rel="stylesheet" href="/PcMaster/src/CSS/item.css">
    <script src="../scripts/JS/menu.js" defer></script>
    <script src="../scripts/JS/conta-menu.js" defer></script>
    <script type="module" src='../scripts/JS/pegarId.js' defer></script>
</head>
<body>
<header>
        <div class="header-content">
            <span id=logo>
                <img class="icon" src="/PcMaster/assets/Imagens/pces.png" alt="Master PC Logo">
                <h2>MasterPC</h2>
            </span>
            <ul class="header-navegacao">
                <li class="nav-item"><a class="style" href="montagem.php">Montar</a></li>
                <li class="nav-item"><a class="style" href="index.php">Loja</a></li>
            </ul>
            <div class="header-right">
                <div class="header-barraPesquisa">
                    <form class="autocomplete" autocomplete="off">
                        <div>
                            <input type="text" id="input" placeholder="Digite..." />
                        </div>
                        <ul class="list">
                            <?php
                            while ($produtos = $query_produtos->fetch_assoc()) {
                                echo "<li style='display: none;' class='list-items'>
                                        <a href='item.php?id=" . $produtos['codigo_produto'] . "'>
                                            <p class='t'>" . $produtos['nome'] . "</p>
                                        </a>
                                      </li>";
                            }
                            ?>
                        </ul>
                    </form>
                </div>
                <ul class="header-conta">
                    <li><a href="/PcMaster/puplic/cadastro.html">Cadastrar</a></li>
                    <li><a href="/PcMaster/puplic/login.html">Login</a></li>
                    <li class="user-dropdown-container">
                        <div class="user" id="user-btn">
                         <img src='<?php echo $foto_perfil ;?>' alt="perfil">
                </div>
                    <ul class="user-dropdown-menu">
                        <li class="user-logout">
                        <a href='<?php echo $link_cadastro_html;?>'><span class="user-name"><?php echo $usuario; ?></span> <?php echo $logout;?></a>
                            </li>
                            <li><a href="config.php">Conta</a></li>
                            <li><a href="carrinho.php">Carrinho</a></li>
                            <li><a href="#">Endereço</a></li>
                        </li>
                    </ul>
                    <li><img class="carrinho icon" src="/PcMaster/assets/Imagens/carrinhos.png" alt="Carrinho de compras"></li>
                </ul>
            </div>
            <div class="hamburger-menu">
                <div class="bar"></div>
                <div class="bar"></div>
                <div class="bar"></div>
            </div>
        </div>
        <li>

    <nav class="mobile-nav">
      <ul>
        <li><a href="index.php">Inicio</a></li>
        <li><a href="montagem.html">Montar</a></li>
        <li><a href="index.php">Loja</a></li>
        <li><a href="cadastro.html">Sign Up</a></li>
        <li><a href="config.php">Minha Conta</a></li>
        <li><a href="carrinho.php">Carrinho</a></li>
        <li><input type="search" placeholder="Pesquisar" /></li>
        <li class="nav-sub-item"><a href="itensEspecificos.php?tipo=Aramazenamento">Armazenamento</a></li>
        <li class="nav-sub-item"><a href="itensEspecificos.php?tipo=Placa-mãe">Placa-mãe</a></li>
        <li class="nav-sub-item"><a href="itensEspecificos.php?tipo=laca de Vídeo">Placa de video</a></li>
        <li class="nav-sub-item"><a href="itensEspecificos.php?tipo=Gabinete">Gabinete</a></li>
        <li class="nav-sub-item"><a href="itensEspecificos.php?tipo=Processador">Processador</a></li>
        <li class="nav-sub-item"><a href="itensEspecificos.php?tipo=Fonte">Fonte</a></li>
        <li class="nav-sub-item"><a href="itensEspecificos.php?tipo=Memória">Memória</a></li>
        <li class="nav-sub-item"><a href="itensEspecificos.php?tipo=Fans">Fans</a></li>
        <li class="nav-sub-item">Montar</li>
      </ul>
    </nav>
  </header>

  <div class="sub-header desktop-only">
    <li class="sub-header-item"><a href="itensEspecificos.php?tipo=Aramazenamento">Armazenamento</a></li>
    <li class="sub-header-item"><a href="itensEspecificos.php?tipo=Placa-mãe">Placa-mãe</a></li>
    <li class="sub-header-item"><a href="itensEspecificos.php?tipo=Placa de Vídeo">Placa de video</a></li>
    <li class="sub-header-item"><a href="itensEspecificos.php?tipo=Gabinete">Gabinete</a></li>
    <li class="sub-header-item"><a href="itensEspecificos.php?tipo=Processador">Processador</a></li>
    <li class="sub-header-item"><a href="itensEspecificos.php?tipo=Fonte">Fonte</a></li>
    <li class="sub-header-item"><a href="itensEspecificos.php?tipo=Memória">Memória</a></li>
    <li class="sub-header-item"><a href="itensEspecificos.php?tipo=Fans">Fans</a></li>
    <li class="sub-header-item">Montar</li>
  </div>
        <div class="item-container" id="<?php echo $id; ?>">
            <div class="item-imagem-container">
                <img src="<?php echo $produto['imagem']; ?>" width="400" height="350" alt="<?php echo $produto['nome']; ?>">
                <div class="item_preco-container">
                    <div class="item_preco">
                        <p>R$<?php echo $produto['valor']; ?></p>
                    </div>
                    <div class="item_botoes-container">
                        <form method='post' action='../src/backend/verificaCompra.php?id=<?php echo $id; ?>'>
                           <button class="botao-item-container" name='comprar'>Comprar</button>
                        </form>
                        <form method='post' action='../src/backend/carrinho_adicionar.php'>
                        <button type="submit" class="botao-carrinho-item-container">
                            <img src="/PcMaster/assets/Imagens/carrinhos.png" alt="Carrinho" width="20" height="12">
                        </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="item_descricao-container">
                <h1><?php echo $produto['nome']; ?></h1>
                <p><?php echo $produto['descricao']; ?></p>
            </div>
        </div>

    <div class="especificacoes-item-container">
        <div class="especificacoes-container">
            <div class="especificacao">
                <h1>Versão</h1>
                <p><?php echo $produto['versao']; ?></p>
            </div>
            <div class="especificacao" style="border-right:1px solid;border-left:1px solid;">
                <h1>Formato</h1>
                <p><?php echo $produto['formato']; ?></p>
            </div>
            <div class="especificacao">
                <h1>Compatibilidade</h1>
                <p><?php echo $produto['compatibilidade']; ?></p>
            </div>
            <div class="especificacao">
                <h1>Latência</h1>
                <p><?php echo $produto['latencia']; ?></p>
            </div>
            <div class="especificacao" style="border-right:1px solid;border-left:1px solid;">
                <h1>Velocidade</h1>
                <p><?php echo $produto['velocidade']; ?></p>
            </div>
            <div class="especificacao">
                <h1>Capacidade</h1>
                <p><?php echo $produto['capacidade']; ?></p>
            </div>
        </div>
        <div class="especificacao-design">
            <h1>Design</h1>
            <p><?php echo $produto['design']; ?></p>
        </div>
    </div>

    <div class="item-avaliacoes-container">
        <ul class="avaliacoesPositivas-container">
            <h1>Pontos Positivos</h1>
            <li>Lorem ipsum dolor sit amet...</li>
            <li>Lorem ipsum dolor sit amet...</li>
            <li>Lorem ipsum dolor sit amet...</li>
        </ul>
        <ul class="avaliacoesNegativas-container">
            <h1>Pontos Negativos</h1>
            <li>Lorem ipsum dolor sit amet...</li>
            <li>Lorem ipsum dolor sit amet...</li>
            <li>Lorem ipsum dolor sit amet...</li>
        </ul>
    </div>

    <footer>
        ©2025 MikaelL e CaioV. Todos os Direitos Reservados.
    </footer>
    <script src="../scripts/JS/dropdown.js"></script>
    <script src="../scripts/JS/search-bar.js"></script>
</body>
</html>
