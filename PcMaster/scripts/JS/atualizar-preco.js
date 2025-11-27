    // Pega os elementos do DOM
const inputQuantidade = document.querySelectorAll(".produto-quantidade");
const precoSpan = document.querySelectorAll('.produto-preco');
const freteSpan = document.getElementById("valor-frete");
const totalSpan = document.getElementById("valor-total");
const produtos = document.getElementById("valor-produtos");


// Captura o valor do frete
const frete = parseFloat(
  freteSpan.textContent.replace("R$", "").trim()
) || 0;

// Função para formatar valor como moeda brasileira
function formatarMoeda(valor) {
  return valor.toLocaleString("pt-BR", {
    style: "currency",
    currency: "BRL"
  });
}

// Função para atualizar os valores
function atualizarValores(quantidade) {
  let subtotal = 0;

  // percorre todos os produtos
  for (let i = 0; i < precoSpan.length; i++) {
    const precoUnitario = parseFloat(precoSpan[i].textContent.replace("R$", "").trim()) || 0;
    const qtd = parseInt(quantidade[i])  || 0;
    subtotal += precoUnitario * qtd; 
  }

  // Atualiza os valores no DOM
  produtos.textContent = formatarMoeda(subtotal);
  totalSpan.textContent = formatarMoeda(subtotal + frete);

}

// Atualizar ao alterar a quantidade
const quantidadeLista = []; 

inputQuantidade.forEach((input, index) => {

  input.addEventListener("input", (event) => {

    const value = Number(event.target.value);

    if (event.target.value === "") return;

    if (value <= 0) {
      alert("O valor deve ser maior que 0!");
      event.target.value = "";
      return;
    }

    // 👉 Substitui o valor certo no índice certo
    quantidadeLista[index] = value;
    atualizarValores(quantidadeLista);
  });
});

// Atualizar ao carregar a página
window.addEventListener("DOMContentLoaded", atualizarValores);
