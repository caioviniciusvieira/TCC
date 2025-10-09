<?php
    include_once("../src/backend/login-verificação.php");
    include_once("../src/backend/produtos.php");
    include_once("../src/backend/foto_perfil-info.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="/PcMaster/assets/Imagens/Logo-2 TCC.png">
    <title>Master Pc</title>
    <link rel="stylesheet" href="/PcMaster/src/CSS/index.css">
</head>

<body>
    <header>
        <div class="header-content">
            <span id="logo">
                <img class="icon" src="/PcMaster/assets/Imagens/pces.png" alt="Master PC Logo">
                <h2>MasterPC</h2>
            </span>
            <ul class="header-navegacao">
                <li class="nav-item"><a class="style" href="montagem.php">Montagem</a></li>
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

    <div class="img-slider">
        <!-- Slide 01 (ativo por padrão) -->
        <div class="slide active">
            <img class="Image-slider" src="/PcMaster/assets/Imagens/Memória RAM XPG Gammix D35 DDR4 3200MHz.png" alt="">
            <div class="info">
                <h2>Memoria Ram XPG XPG Gammix D35 DDR4 3200MHz</h2>
                <p>A memória RAM XPG GAMMIX D35 DDR4 3200MHz é ideal para gamers e profissionais que buscam alta performance e estabilidade.
                    Com tecnologia DDR4, oferece velocidade de 3200MHz e baixa latência CL16, garantindo rapidez e resposta eficiente em tarefas exigentes.
                    Seu design compacto com dissipador de calor de baixo perfil facilita a instalação em diferentes tipos de gabinetes, mantendo a memória fria mesmo em uso intenso.
                </p>
            </div>
        </div>
        <!-- Slide 02 -->
        <div class="slide">
            <img class="Image-slider" src="/PcMaster/assets/Imagens/Banner-1.png" alt="">
            <div class="info">
                <h2>Memoria 02</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
            </div>
        </div>
        <!-- Slide 03 -->
        <div class="slide">
            <img class="Image-slider" src="/PcMaster/assets/Imagens/placamaster.webp" alt="">
            <div class="info">
                <h2>Memoria 03</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
            </div>
        </div>
        <!-- Slide 04 -->
        <div class="slide">
            <img class="Image-slider" src="/PcMaster/assets/Imagens/Memória RAM XPG Gammix D35 DDR4 3200MHz.png" alt="">
            <div class="info">
                <h2>Memoria 04</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
            </div>
        </div>
        <!-- Slide 05 -->
        <div class="slide">
            <img class="Image-slider" src="/PcMaster/assets/Imagens/Memória RAM XPG Gammix D35 DDR4 3200MHz.png" alt="">
            <div class="info">
                <h2>Memoria 05</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua.
                </p>
            </div>
        </div>
        <div class="navigation">
            <div class="btn active"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            <div class="btn"></div>
            <div class="btn"></div>
        </div>
    </div>

    <div class="website-content">
        <section class="product">
            <h2 class="product-category">Produtos</h2>
            <button class="pre-btn"><img src="/PcMaster/assets/Imagens/Seta-3.png" alt=""></button>
            <button class="nxt-btn"><img src="/PcMaster/assets/Imagens/Seta-3.png" alt=""></button>
            <div class="product-container">
                <?php
                if ($num_produtos == 0) {
                    echo "<p>Nenhum produto encontrado</p>";
                } else {
                    $query_produtos = $conexao->query($sql_produto);
                    while ($produtos = $query_produtos->fetch_assoc()) {
                        echo "<div class='product-card'>
                                <div class='product-alone'>
                                <a href='item.php?id=".$produtos['codigo_produto']."'>
                                    <div class='product-image'>
                                        <img src='" . $produtos['imagem'] . "' class='product-thumb' alt=''>
                                    </div>
                              </a>                                    
                                    <div class='product-info'>
                                        <h2 class='product-brand'>" . $produtos['nome'] . "</h2>
                                        <p class='product-short-description'>" . $produtos['descricao'] ." <br>Quantidade: ".$produtos['quantidade']."</p>
                                        <span class='price'>R$ " . $produtos['valor'] . "</span>
                                        <form method='post' action='../src/backend/verificaCompra.php?id=".$produtos['codigo_produto']."'>                                        
                                            <button name='comprar' class='button-buy'>Comprar</button>
                                        </form>
                                    </div>
                                </div>
                              </div>";
                    }
                }
                ?>
            </div>
        </section>
    </div>

    <div class="website-content">
        <section class="product">
            <h2 class="product-category">Placas de vídeo</h2>
            <button class="pre-btn"><img src="/PcMaster/assets/Imagens/Seta-3.png" alt=""></button>
            <button class="nxt-btn"><img src="/PcMaster/assets/Imagens/Seta-3.png" alt=""></button>
            <div class="product-container">
                <?php
                if ($num_[0] == 0) {
                    echo "<p>Nenhum produto encontrado</p>";
                } else {

                    while ($placa = $query_[0]->fetch_assoc()) {
                        echo "<div class='product-card'>
                                <div class='product-alone'>
                                <a href='item.php?id=".$placa['codigo_produto']."'>
                                    <div class='product-image'>
                                        <img src='" . $placa['imagem'] . "' class='product-thumb' alt=''>
                                    </div>
                              </a>                                    
                                    <div class='product-info'>
                                        <h2 class='product-brand'>" . $placa['nome'] . "</h2>
                                        <p class='product-short-description'>" . $placa['descricao'] ." <br>Quantidade: ".$placa['quantidade']."</p>
                                        <span class='price'>R$ " . $placa['valor'] . "</span>
                                        <form method='post' action='../src/backend/verificaCompra.php?id=".$placa['codigo_produto']."'>                                        
                                            <button name='comprar' class='button-buy'>Comprar</button>
                                        </form>
                                    </div>
                                </div>
                              </div>";
                    }
                }
                ?>
            </div>
        </section>
    </div>

    <div class="website-content">
        <section class="product">
            <h2 class="product-category">Processadores</h2>
            <button class="pre-btn"><img src="/PcMaster/assets/Imagens/Seta-3.png" alt=""></button>
            <button class="nxt-btn"><img src="/PcMaster/assets/Imagens/Seta-3.png" alt=""></button>
            <div class="product-container">
                <?php
                if ($num_[1] == 0) {
                    echo "<p>Nenhum produto encontrado</p>";
                } else {
                    while ($processador = $query_[1]->fetch_assoc()) {
                        echo "<div class='product-card'>
                                <div class='product-alone'>
                                <a href='item.php?id=".$processador['codigo_produto']."'>
                                    <div class='product-image'>
                                        <img src='" . $processador['imagem'] . "' class='product-thumb' alt=''>
                                    </div>
                                </a>                                    
                                    <div class='product-info'>
                                        <h2 class='product-brand'>" . $processador['nome'] . "</h2>
                                        <p class='product-short-description'>" . $processador['descricao'] ." <br>Quantidade: ".$processador['quantidade']."</p>
                                        <span class='price'>R$ " . $processador['valor'] . "</span>
                                        <form method='post' action='../src/backend/verificaCompra.php?id=".$processador['codigo_produto']."'>                                        
                                            <button name='comprar' class='button-buy'>Comprar</button>
                                        </form>
                                    </div>
                                </div>
                              </div>";
                    }
                }
                ?>
            </div>
        </section>
    </div>
        <footer>
        ©2025 MikaelL e CaioV. Todos os Direitos Reservados.
    </footer>
    <script src="../scripts/JS/image-slider.js" defer></script>
    <script src="../scripts/JS/item-slider.js" defer></script>
    <script src="../scripts/JS/search-bar.js" defer></script>
    <script src="../scripts/JS/dropdown.js" defer></script>
</body>

</html>
