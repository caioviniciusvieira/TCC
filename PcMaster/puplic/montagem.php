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
    <link rel="stylesheet" href="/PcMaster/src/CSS/montagem.css">
</head>

<body>
    <header>
        <div class="header-content">
            <span id="logo">
                <img class="icon" src="/PcMaster/assets/Imagens/pces.png" alt="Master PC Logo">
                <h2 class="titulo-site">MasterPC</h2>
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

  <!-- CONTEÚDO PRINCIPAL -->
  <main class="montagem-page">

    <!-- HERO -->
    <section class="hero-montagem">
      <h1>Monte Seu Próprio PC com Facilidade</h1>
      <p>Descubra como montar o seu computador de forma prática, divertida e sem complicação. Aprenda cada etapa com explicações simples e que vão te fazer entender facilmente.</p>
    </section>

    <!-- ETAPAS DA MONTAGEM -->


    <main>
    <section>
      <h2 class="step-1">1. Planejamento e Escolha das Peças</h2>
      <p class="etapa-p">Antes de começar, defina o objetivo do seu PC: se é pra jogos, edição, uso geral ou trabalho. Isso vai guiar todas as escolhas.
         Escolher peças compatíveis é o primeiro passo para evitar dores de cabeça! e aqui separei um resumo básico que é apenas pra você saber como funciona pra não ter erro</p>

      <div class="cards-container">
        <div class="card">
         <img class="iframe" src="/PcMaster/assets/Imagens/cpu-step.jpg" title="Organização dos cabos"></img>
          <h3>Processador (CPU)</h3>
          <p>O cérebro do computador. você pode escolher entre Intel ou AMD, um resumo bem rapido, basicamente intel é mais trabalho sendo ótimo 
            e bem otimizado enquanto amd é feita mais para o lado dos jogos tambem sendo bem otimizado nessa area,
             considerando o uso e o orçamento o maior custo beneficio seria entre um Ryzen 5 ou i5 tendo preços muito bons pro que entrega.</p>
        </div>

        <div class="card">
           <img class="iframe" src="/PcMaster/assets/Imagens/placamaster.webp" title="Organização dos cabos"></img>
          <h3>Placa-Mãe</h3>
          <p>A placa-mãe é a principal peça do computador, onde todos os outros componentes se conectam — processador, memória RAM, placa de vídeo,
             armazenamento e periféricos. Ela funciona como uma central que faz tudo se comunicar. Existem vários tamanhos (ATX, Micro-ATX, Mini-ITX) e tipos de soquete, que definem quais processadores ela suporta.
            Também varia na quantidade de entradas USB, slots de memória e conexões para SSD. Em resumo, sem a placa-mãe, as peças do computador não conseguiriam trabalhar juntas.</p>
        </div>

        <div class="card">
          <img class="iframe" src="/PcMaster/assets/Imagens/Memória RAM Kingston Fury Beast 16GB DIMM DDR4 RGB.jpg" title="Organização dos cabos"></img>
          <h3>Memória RAM</h3>
          <p >A memória RAM é o **espaço temporário** que o computador usa para guardar informações enquanto está ligado. Ela é responsável pela **velocidade e fluidez** das tarefas — quanto mais RAM, mais programas podem rodar ao mesmo tempo sem travar. Diferente do HD ou SSD, ela **apaga tudo quando o PC desliga**.
          Por exemplo: um computador com **4 GB de RAM** serve para navegar na internet e estudar, enquanto **16 GB** já é ideal para jogos e programas pesados.
          </p>
        </div>
      </div>




       <div class="cards-container2">
        <div class="card">
         <img class="iframe" src="/PcMaster/assets/Imagens/5060-windforce.webp" title="Organização dos cabos"></img>
          <h3>Placa de Video (GPU)</h3>
          <p>A placa de vídeo é o componente que cria e mostra as imagens na tela do computador. Ela é essencial para jogos, edição de vídeo, design e qualquer tarefa com gráficos. Existem dois tipos: integrada, 
            que vem junto do processador e é mais fraca, e dedicada, que é uma peça separada, muito mais potente.
          Quanto melhor a placa de vídeo, **maior a qualidade e a fluidez das imagens. Por exemplo, uma integrada roda jogos leves como Minecraft, enquanto uma dedicada, como a RTX 4060, roda jogos modernos com gráficos no máximo.
          </p>
        </div>

        <div class="card">
           <img class="iframe" src="/PcMaster/assets/Imagens/FonteGS600.webp" title="Organização dos cabos"></img>
          <h3>Fonte (PSU)</h3>
          <p>A fonte é a **peça que fornece energia** para todo o computador. Ela transforma a eletricidade da tomada em energia adequada para cada componente, como a placa-mãe, processador e placa de vídeo.
            Uma boa fonte é essencial para evitar quedas, travamentos ou queima de peças.
            Elas têm **potência medida em watts (W) — por exemplo, um PC simples pode usar uma fonte de 400W, enquanto um computador gamer pode precisar de 650W ou mais.
              Também é importante escolher fontes de boa marca e com selo 80 Plus**, que indicam eficiência e segurança.
            </p>
        </div>

        <div class="card">
          <img class="iframe" src="/PcMaster/assets/Imagens/armazenamento-step.webp" title="Organização dos cabos"></img>
          <h3>Armazenamento (SSD ou HDD)</h3>
          <p>O armazenamento é a parte do computador responsável por **guardar todos os dados**, como o sistema operacional, programas, fotos e jogos.
             Existem dois tipos principais: o HD, que oferece mais espaço por um preço menor, mas é mais lento por usar partes mecânicas; e o SSD,
              que é muito mais rápido e faz o computador iniciar e abrir programas em poucos segundos. Muitos computadores modernos combinam os dois — usam
               o SSD para o sistema e programas principais, e o HD para armazenar arquivos grandes.
          </p>
        </div>
      </div>



         <div class="cards-container3">
        <div class="card">
         <img class="iframe" src="/PcMaster/assets/Imagens/Gabinete ATX (1024px).png" title="Organização dos cabos"></img>
          <h3>Gabinete</h3>
          <p>O gabinete é a **estrutura que protege e organiza** todas as peças do computador, como a placa-mãe, fonte, armazenamento e placa de vídeo. Ele também ajuda na 
            **ventilação**, mantendo as partes internas em boa temperatura. Existem vários tamanhos e estilos, desde modelos simples até gabinetes com vidro e iluminação RGB.
             Além da aparência, é importante escolher um gabinete com **bom espaço interno e fluxo de ar eficiente**, para evitar superaquecimento e facilitar
              futuras trocas de peças.
          </p>
        </div>

        <div class="card">
           <img class="iframe" src="/PcMaster/assets/Imagens/WatercoolerAquaElite.jpg" title="Organização dos cabos"></img>
          <h3>Sistemas de refrigeração</h3>
          <p>Os sistemas de refrigeração têm a função de **manter a temperatura do computador sob controle**, evitando o superaquecimento dos componentes e garantindo
             um bom desempenho. Existem dois tipos principais: a **refrigeração a ar**, que usa ventoinhas e dissipadores para eliminar o calor, e a **refrigeração líquida**,
              que utiliza um líquido e radiadores para resfriar o processador e outras partes. Um bom sistema de refrigeração é essencial para aumentar a **vida útil e a
               estabilidade** do computador.
            </p>
        </div>

        <div class="card">
          <img class="iframe" src="/PcMaster/assets/Imagens/perifericos.jpg" title="Organização dos cabos"></img>
          <h3>Periféricos</h3>
          <p>Os periféricos são **aparelhos que conectamos ao computador** para usar ou controlar ele. Podem ser de entrada, como teclado e mouse; de saída,
             como monitor e impressora; ou de entrada e saída, como pen drives e fones com microfone. Eles não são essenciais, mas tornam o uso do PC
              **mais prático e completo**.</p>
        </div>
      </div>

       <p class="etapa-p">Isso que passei foi um resumo bem de leve, caso voce quer se aprofundar mais, separei esse video que vai te explicar super bem como que funciona. Video feito pelo to sem kit, você pode ver ele aqui <a class="link-youtube">https://youtu.be/jv5_isa9Lbc?si=92KEx6vGTaxYHeQb</a>

    </section>

    <section>
      <h2 class="step-1">2.Montagem Física</h2>
      <p class="etapa-p">Depois de escolher as peças, aqui esta um tutorial completo com tudo o que você precisa saber,
         indico bastante esse video porque ele realmente explica cada detalhe e até coisas que até pessoas do rumo não sabe</p>
        <a class="https://youtu.be/vyR4UGZGTzU?si=A4xQmcTPd5T3GCO3">
        <img class="video-placeholder" href="https://youtu.be/vyR4UGZGTzU?si=A4xQmcTPd5T3GCO3" src="/PcMaster/assets/Imagens/howpc.jpg" alt="Tutorial">
        </a>
         <p class="etapa-p">Esse video foi feito pelo Mw informartica. e você pode encontrar ele aqui ou clicando na imagem 
          <a class="link-youtube">https://youtu.be/vyR4UGZGTzU?si=A4xQmcTPd5T3GCO3</a></p>

    </section>

    <section>
      <h2 class="step-1">3. Primeira inicialização: BIOS, Sistema operacional e drivers</h2>
      <p class="etapa-p">Nem tudo são flores, após montar o pc e deixar tudo bonitinho vai ter a parte da bios, intalação do sistema operacional, atualizar drivers pra aí sim o pc rodar suave,
         aqui indico esse video que eu mesmo ja vi e achei muito interessante pela forma facil de explição, porém essa é a ultima etapa! termine e aproveite seu PC.</p>
      
      <a href="https://youtu.be/5axQkFYQ4nc?si=-lOFp9vC0tBWHGG1">
      <img class="video-placeholder" src="/PcMaster/assets/Imagens/howbios.jpg" alt="Tutorial">
      </a>
       <p class="etapa-p">Esse video foi feito pelo Lock Gamer hardware. e você pode encontrar ele aqui ou clicando na imagem 
          <a class="link-youtube">https://youtu.be/5axQkFYQ4nc?si=-lOFp9vC0tBWHGG1</a></p>

     
    </section>
  </main>

    <!-- FINAL -->
    <section class="final-section">
      <h2>E aí? Pronto para Começar?</h2>
      <p>Agora que você entende cada parte, é hora de colocar a mão na massa! Monte seu PC com calma e aproveite o processo — afinal, nada como usar algo que você mesmo construiu.</p>
      <a href="/PcMaster/tests/index.html" class="btn-final">Ver Peças Disponíveis</a>
    </section>

  </main>
    <footer>
        ©2025 MikaelL e CaioV. Todos os Direitos Reservados.
    </footer>
  <script src="/PcMaster/scripts/JS/search-bar.js"></script>
  <script src="/PcMaster/scripts/JS/dropdown.js"></script>
</body>
</html>
