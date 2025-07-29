function teste(){
    var teste = document.querySelector(".teste");
    var conta = document.querySelector(".header-conta");
    setTimeout(() => {
        conta.style.display = 'none';
    }, 490);
    teste.style.display = 'flex';
    teste.style.animation = '0.5s deslizar';

}

function fechar(){
    var conta = document.querySelector(".header-conta");
    var teste = document.querySelector(".teste")
    teste.style.animation = '1s deslizarBack';
    conta.style.display = 'flex';
    setTimeout(() => {
        teste.style.display = 'none';
    }, 490);

}