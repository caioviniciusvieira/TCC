const senha = document.getElementById('senha');
const confirmar = document.getElementById('Confirmar');
const validacao = document.getElementById('validacao');

// dispara só quando o usuário termina de digitar o confirmar senha
confirmar.addEventListener('blur', verificar);

function verificar() {
  const valor1 = senha.value.trim();
  const valor2 = confirmar.value.trim();

  if (!valor2) {
    validacao.style.visibility = 'hidden';
    senha.style.border = '';
    confirmar.style.border = '';
    return;
  }

  validacao.style.visibility = 'visible';

  if (valor1 === valor2) {
    validacao.textContent = 'Senhas iguais';
    validacao.className = 'mensagem-validacao';
    senha.style.border = '2px solid green';
    confirmar.style.border = '2px solid green';
  } else {
    validacao.textContent = 'Senhas não são iguais';
    validacao.className = 'mensagem-validacao erro';
    senha.style.border = '2px solid red';
    confirmar.style.border = '2px solid red';
  }
}
