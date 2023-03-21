//Função para aceitar apenas letras nos inputs
export default function inputText(){
    const inputControlElements = document.querySelectorAll('.inputControl')
    for(let inputControl of inputControlElements){
        let inputControlValid = inputControl.children[0]
        inputControlValid.addEventListener('keypress', event =>{

            const numberValue =  (event.keyCode ? event.keyCode : event.wich);//pega a numeração da tecla digitada
            
            const char = String.fromCharCode(event.keyCode);// pega o valor da tecla digitada
            
            const charValid = '[a-zA-z0-9-´-´-~-^ ]';// array para apenas letras e números e espaços
            
            function checkChar(){
                if(char.match(charValid)){// char.match(charValid) valida apenas os valores digitados dentro do array e retorna verdadeiro
                    return true
                };
            };
                
            if(numberValue > 47 && numberValue < 58 || !checkChar()){ // se a tecla digitada corresponder aos números ou se não forem caracteres de A a Z, o input bloqueia a digitação
            event.preventDefault();
            inputControl.classList.add('error')
            }
            else{
                inputControl.classList.remove('error')
            };   
        });
    }
} 