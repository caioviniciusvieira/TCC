<?php 
  include_once("../src/backend/login-verificação.php");
  include_once("../src/backend/foto_perfil-info.php");
  include_once("../src/backend/produtos.php");

  $sql_cep = $conexao->prepare("SELECT * FROM enderecos WHERE nome_completo = ?");
  $sql_cep->bind_param('s', $_SESSION['nome']);
  $sql_cep->execute();
  $query_cep = $sql_cep->get_result();
  $cep = $query_cep->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="shortcut icon" href="/PcMaster/assets/Imagens/Logo-2 TCC.png" type="image/x-icon" />
  <link rel="stylesheet" href="../src/CSS/config.css" />
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

  <div class="account-wrapper">
    <!-- Menu lateral -->
    <aside class="account-sidebar">
      <div class="sidebar-profile">
        <img src='<?php echo $foto_perfil ;?>' id="profile-preview" alt="Foto de Perfil" />
      </div>
      <form method='post' action='../src/backend/upload_foto_perfil.php' enctype="multipart/form-data">
      <input type="file" name='foto' id="profile-pic" accept="image/*"  />
      <button onclick="document.getElementById('profile-pic').click()">Trocar Foto</button>
      </form>
      <h3><?php echo $usuario;?></h3>
      <nav class="account-menu">
        <ul>
          <li class="active"><a href="config.html">Configurações</a></li>
          <li><a href="carrinho.php">Carrinho</a></li>
          <li><a href="ajuda.html">Ajuda</a></li>
          <li><a href="pedidos.php">Meus Pedidos</a></li>
            <li><a href="../src/backend/logout.php">Sair da Conta</a></li>
        </ul>
      </nav>
    </aside>

    <!-- Conteúdo principal -->
   <!-- Conteúdo principal -->
<main class="account-content">
  <h3>Informações da Conta</h3>
  <form id="user-form">
    <!-- Contato -->
    <div class="form-group">
      <label for="name">Nome completo</label>
      <input type="text" id="name"  value="<?php echo $usuario;?>" disabled />
    </div>
    <div class="form-group">
      <label for="cellphone">Celular</label>
      <input type="tel" id="cellphone"  value="<?php echo $user['numero'];?>" placeholder="(xx) xxxxx-xxxx" disabled />
    </div>
    <div class="form-group">
      <label for="email">E-mail</label>
      <input type="email" id="email"  value="<?php echo $user['email'];?>" disabled />
    </div>

    <!-- Dados pessoais -->
    <div class="form-group">
      <label for="cpf">CPF</label>
      <input type="text" value="<?php echo $user['cpf'];?>" id="cpf" placeholder="000.000.000-00" disabled />
    </div>
    <br>

    <!-- Endereço -->
    <h1>Endereços</h1>                     
    <div class="container">
      <article class="address-card">
      <div class="address-main">
      <div class="title"><?php echo $cep['cidade'];?></div>
      <div class="meta"><?php echo $cep['bairro'];?>\<?php echo $cep['rua'];?></div>
      <div class="lines">
      <div class="line"><?php echo $cep['cidade'];?>/<?php echo $cep['estado'];?></div>
      <div class="line"><?php echo $cep['CEP'];?></div>
            <div class="line"><?php echo $cep['numero'];?></div>
      </div>
      </article>
        </form>
</main>

  <script>
    const form = document.getElementById('user-form');
    const inputs = form.querySelectorAll('input:not([type="file"])');
    const editBtn = document.getElementById('edit-btn');
    const saveBtn = document.getElementById('save-btn');
    const profileInput = document.getElementById('profile-pic');
    const profilePreview = document.getElementById('profile-preview');

    // Ativar modo edição
    editBtn.addEventListener('click', () => {
      inputs.forEach(input => input.disabled = false);
      saveBtn.disabled = false;
      editBtn.disabled = true;
    });

    // Salvar alterações
    form.addEventListener('submit', e => {
      e.preventDefault();
      alert('Dados salvos com sucesso!');
      inputs.forEach(input => input.disabled = true);
      saveBtn.disabled = true;
      editBtn.disabled = false;
    });

    // Trocar foto de perfil
    profileInput.addEventListener('change', (event) => {
      const file = event.target.files[0];
      if (file) {
        const reader = new FileReader();
        reader.onload = function (e) {
          profilePreview.src = e.target.result;
        };
        reader.readAsDataURL(file);
        
      }
    });
  </script>
  <script src="../scripts/JS/search-bar.js"></script>
  <script src="../scripts/JS/dropdown.js"></script>
</body>

</html>
