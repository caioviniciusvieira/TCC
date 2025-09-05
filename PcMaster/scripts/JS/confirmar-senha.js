const senha = document.getElementById('senha')
const ConfirmarSenha = document.getElementById('Confirmar')
const validacao = document.getElementById('validacao')

ConfirmarSenha.addEventListener('input', verificar)
senha.addEventListener('input', verificar)

function verificar (){
    value = senha.value
    value2 = ConfirmarSenha.value

    if (value == value2){
            senha.style.border = '2px solid  green'
            ConfirmarSenha.style.border = '2px solid  green'
            validacao.textContent = 'senhas iguais'
                    
            if(value == '' && value2 == ''){
                validacao.textContent=''
                senha.style.border = '2px solid red'
                ConfirmarSenha.style.border = '2px solid red'
            }
        }
    else{
        senha.style.border = '2px solid red'
        ConfirmarSenha.style.border = '2px solid red'
        validacao.textContent='Senhas não são iguais'              
    }
                    
}