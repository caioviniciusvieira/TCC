// Seleciona todos os slides e botões
const slides = document.querySelectorAll('.slide');
const btns = document.querySelectorAll('.btn');

// Define o slide atual (inicialmente 1)
let currentSlide = 1;

// --- Navegação manual entre slides ---
const manualNav = function(manual) {
  // Remove a classe 'active' de todos os slides e botões
  slides.forEach((slide) => {
    slide.classList.remove('active');
  });

  btns.forEach((btn) => {
    btn.classList.remove('active');
  });

  // Adiciona 'active' ao slide e botão clicado
  slides[manual].classList.add('active');
  btns[manual].classList.add('active');
}

// Adiciona evento de clique a cada botão
btns.forEach((btn, i) => {
  btn.addEventListener("click", () => {
    manualNav(i);     // Mostra o slide correspondente
    currentSlide = i; // Atualiza o slide atual
  });
});

// --- Navegação automática (autoplay) ---
const repeat = function() {
  let i = currentSlide;

  // Função que repete a troca de slides a cada 10 segundos
  const repeater = () => {
    setTimeout(function() {
      // Remove 'active' de todos os elementos atualmente ativos
      const active = document.querySelectorAll('.active');
      active.forEach((activeSlide) => {
        activeSlide.classList.remove('active');
      });

      // Adiciona 'active' ao próximo slide e botão
      slides[i].classList.add('active');
      btns[i].classList.add('active');
      i++;

      // Reinicia o índice se chegar ao final
      if (i >= slides.length) {
        i = 0;
      }

      currentSlide = i; // Atualiza a variável global
      repeater(); // Chama novamente a função (loop)
    }, 10000); // Tempo entre os slides: 10 segundos
  }

  repeater(); // Inicia o autoplay
}

// Inicia a navegação automática
repeat();
