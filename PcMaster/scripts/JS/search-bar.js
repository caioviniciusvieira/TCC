   const SearchInput = document.querySelector('#input');

   SearchInput.addEventListener('input', (event) => {
      const value = formatString(event.target.value); 
      const itens = document.querySelectorAll('.list-items');
      
      if (value == ''){
         itens.forEach(item => item.style.display='none')
         return
      }

      itens.forEach(item => { 
         const titulos = item.querySelectorAll('.t'); // seleciona todos os titulos dentro do item
      
         titulos.forEach(titulo => {
            itemText = formatString(titulo.textContent); // pega o conteudo de texto dentro dos titulos
         });

         if (itemText.includes(value)) { // verifica se a barra de pesquisa inclui conteudo de texto do titulo 
            item.style.display = 'flex';

         } else {
            item.style.display = 'none';
         }

      });
});

function formatString(value){
   return value.toLowerCase().trim(); // formata o texto para minuculo e sem espaço 
 }