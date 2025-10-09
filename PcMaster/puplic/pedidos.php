<?php 
  include_once("../src/backend/login-verificação.php");
  include_once("../src/backend/foto_perfil-info.php");
  include_once("../src/backend/produtos.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="/PcMaster/assets/Imagens/Logo-2 TCC.png" type="image/x-icon" />
  <link rel="stylesheet" href="/PcMaster/src/CSS/carrinho.css" />
  <title>Configuração de Conta</title>
</head>

<body>
  <!-- Cabeçalho -->
  <header>
    <div class="header-content">
      <span id="logo">
        <img class="icon" src="/PcMaster/assets/Imagens/pces.png" alt="Master PC Logo" />
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
                    <li style="position: relative;">
                    <img class="carrinho icon" src="/PcMaster/assets/Imagens/carrinhos.png" alt="Carrinho de compras">
                    <span class="cart-badge"></span>
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
    <li class="sub-header-item">Montar</li>
  </div>


  <!-- ===== Layout ===== -->
  <main class="page">
    <div class="account-wrapper">
      
      <!-- Sidebar -->
    <!-- Menu lateral -->
    <aside class="account-sidebar">
      <div class="sidebar-profile">
        <img src="<?php echo $foto_perfil ;?>" id="profile-preview" alt="Foto de Perfil" />
      </div>
      <h3><?php echo $usuario; ?></h3>
      <nav class="account-menu">
        <ul>
          <li><a href="config.php">Configurações</a></li>
          <li class="active"><a href="carrinho.php">Carrinho</a></li>
          <li><a href="ajuda.html">Ajuda</a></li>
          <li><a href="pedidos.html">Meus Pedidos</a></li>
          <li><a href="../src/backend/logout.php">Sair da Conta</a></li>
        </ul>
      </nav>
    </aside>

      <!-- Carrinho -->
      <section class="cart">
        <h2 class="title">Meus pedidos</h2>
        
        <div class="cart-items">
          <?php
     
        $sql_compra = $conexao->prepare("SELECT * FROM comprar WHERE nome_completo = ? ");
        $sql_compra->bind_param('s', $_SESSION['nome']);
        $sql_compra->execute();
        $query_compra = $sql_compra->get_result();
        $num_compra = $query_compra->num_rows;

          if($num_compra == 0){
            echo "nenhum produto encontrado";
          }else{
          while($compra = $query_compra->fetch_assoc()){
            echo"  <form method='post' action='../src/backend/deletar_carrinho.php'>  
            <a href='' class='cart-item'>
            <img class='item' src='".$compra['imagem']."' alt='Produto' />
            <div class='cart-info'>
              <h3 class='title-item'>".$compra['nome_produto']."</h3>
              <p class='subtitle-item'>CEP: ".$compra['CEP']."/Quantidade: ".$compra['quantidade']."</p>
              <span class='price'>".$compra['valor']."</span>
              <div class='cart-controls'>
              <input type='hidden' name='nome_produto' value='" . $compra['nome_produto'] . "'>
                <button name='deletar' class='remove'>Remover</button>                           
                <button class='comprar'>Comprar</button>
              </div>
            </div>
          </a>
        </form>  ";
          }   
        }
          ?>
        </div>
      </section>
    </div>
  </main>

<script>
  const cart = document.querySelectorAll('.cart-items').length;
  const carrinhoCount = document.querySelector('.cart-badge');
  console.log(cart)

  if (cart == 0){
    carrinhoCount.style.display='none'
  }
  else if (cart > 0){
    carrinhoCount.textContent= cart
  }
</script>


   <script src="/PcMaster/scripts/JS/search-bar.js"></script>
   <script src="/PcMaster/scripts/JS/dropdown.js"></script>
</body>
</html>
