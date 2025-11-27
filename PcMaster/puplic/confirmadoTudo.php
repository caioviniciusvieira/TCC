<?php 
    include_once("../src/backend/login-verificação.php");
    include_once("../src/backend/foto_perfil-info.php");
    include_once("../src/backend/produtos.php");

    $sql_cep = $conexao->prepare("SELECT * FROM enderecos WHERE nome_completo = ?");
    $sql_cep->bind_param('s', $_SESSION['nome']);
    $sql_cep->execute();
    $query_cep = $sql_cep->get_result();
    $num_cep = $query_cep->num_rows;
    $cep = $query_cep->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/icon" href="/PcMaster/assets/Imagens/Logo-2 TCC.png">
    <title>Master Pc</title>
    <link rel="stylesheet" href="/PcMaster/src/CSS/confirmado.css">
</head>

<body>
<header>
    <div class="header-content">
      <span id="logo">
        <img class="icon"  src="/PcMaster/assets/Imagens/logo-2 TCC.png" alt="Master PC Logo" />
        <h2>MasterPC</h2>
      </span>

      <ul class="header-navegacao">
        <li class="nav-item"><a href="montagem.php">Montagem</a></li>
        <li class="nav-item"><a href="index.php">Loja</a></li>
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
                <?php echo $link_cadastro_html;?>
                <?php echo $link_cadastro_login;?>
                    <li class="user-dropdown-container">
                        <div class="user" id="user-btn">
                            <img class="foto-perfil" src='<?php echo $foto_perfil ;?>' alt="perfil">
                        </div>
                        <ul class="user-dropdown-menu">
                            <li class="user-logout">
                            <a href='<?php echo $link_cadastro;?>'><span class="user-name"><?php echo $usuario; ?></span> <?php echo $logout;?></a>
                                </li>
                                <li><a href="config.php">Conta</a></li>
                                <li><a href="carrinho.php">Carrinho</a></li>
                                <li><a href="config.php">Endereço</a></li>
                            </li>
                        </ul>
                        <li style="position: relative;">
                        <a href="carrinho.php">
                        <img  class="carrinho icon" src="/PcMaster/assets/Imagens/carrinhos.png" alt="Carrinho de compras">
                        </a>
                        <span class="cart-badge"><?php echo $num_carrinhos;?></span>
                    </li>
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
  </div>

    <main class="container">
        <h1>Pagamento</h1>
        <p class="sub-title"> Seu pedido está sendo processado.</p>

        <div class="section order-status" id="status-pedido">
            <p>Processando</p>
        </div>
        <form method = 'post' action='../src/backend/inserir-compra.php'>
        <div class="section">
            <h2>Detalhes do Produto</h2>
            <?php
                if ($num_carrinhos == 0) {
                     echo "nenhum produto encontrado";
                } else {
                    while ($carrinho = $query_carrinho->fetch_assoc()) {
                        echo "
                        <div class='order-details'>
                            <img id='produto-img' src='" . $carrinho['imagem'] . "' alt='Imagem do Produto' />
                            <div class='product-info'>
                                <h3 id='produto-nome'>" . $carrinho['nome_produto'] . "</h3>
                                <p>Quantidade: 
                                    <span class='produto-quantidade'>
                                        <input type='number' min='1' name='quantidade' id='quantidade' required>
                                    </span>
                                </p>
                                <p>Preço unitário: R$ 
                                    <span class='produto-preco'>" . $carrinho['valor'] . "</span>
                                </p>
                            </div>
                        </div>
                        ";
                    }
                }
                ?>

        <div class="section">
            <h2>Endereço de Entrega</h2>
            <div class="address" id="endereco-entrega">
            <div class="section">
            <div class="order-details">
                <div class="product-info">
                    <?php if ($num_cep == 0){
                            echo "Cadastre um endereço";
                        }
                        else{
                            echo "
                                <h3 id='produto-nome'>CEP: {$cep['CEP']}</h3>
                                <input type='text' id='produto-nome' name='cep' value='{$cep['CEP']}' hidden>
                                <input type='text' id='produto-nome' name='id-usuario' value='{$user['codigo_usuario']}' hidden>
                                <input type='text' id='produto-nome' name='cpf' value='{$user['cpf']}' hidden>
                                <p>Cidade: <span id='produto-preco'>{$cep['cidade']}</span></p>
                                <p>Estado: <span id='produto-preco'>{$cep['estado']}</span></p>
                                <p>Bairro: <span id='produto-preco'>{$cep['bairro']}</span></p>
                                <p>Rua: <span id='produto-preco'>{$cep['rua']}</span></p>
                                <p>Número da casa: <span id='produto-preco'>{$cep['numero']}</span></p>
                            ";
                        }
                    ?>
                </div>
            </div>
        </div>
            </div>
        </div>

        <div class="section payment-summary">
              <select id="pagamento" name="pagamento">
                <option value="pix">Pix</option>
                <option value="cartao">Cartão</option>
                <option value="boleto">Boleto</option>
            </select>
            <div>Valor Produto(s):<span id="valor-produtos"></span></div>
            <div>Frete:<span id="valor-frete">R$ 20,00</span></div>
            <div>Total:<span id="valor-total">R$ </span></div>
        </div>
        <a href="/PcMaster/puplic/index.php" class="btn-home">Voltar para a Página Inicial</a>
                <button name='comprar_tudo' class="btn-home">Comprar</button>
        </form>
    </main>
<script src="../scripts/JS/atualizar-preco.js"></script>
<script type='module' src="../scripts/JS/quantidadeCarrinho.js"></script>
    <script src="/PcMaster/scripts/JS/dropdown.js"></script>
    <script src="/PcMaster/scripts/JS/search-bar2.js"></script>
</body>

</html>