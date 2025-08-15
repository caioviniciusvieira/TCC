const SearchInput = document.querySelector(".pesquisa")

 SearchInput.addEventListener('input', (event) =>{
    const input = event.target.input;
    const itens = document.querySelectorAll("CLASSE QUE O MIKAEL FARÁ, PRETO");
    
    itens.forEach(item => {
        const titulos = document.querySelectorAll("CLASSE QUE O MIKAEL FARÁ, PRETO");

        titulos.forEach(titulo => {
            itemTitulo = formatstring(titulo.textContent);
        });
        if(itemTitulo.includes(input)){
            item.style.display = "flex";
        }
        else{
            item.style.display = "none";
        }
    });
 });


function formatstring(input){
    return input.toLowerCase().trim()
} 