export default function inputNumber(){
    const numberInputElements = document.querySelectorAll('.inputNumControl')
    for(let inputNumControl of numberInputElements){
        let inputNumControlValid = inputNumControl.children[0]
        inputNumControlValid.addEventListener('keypress', event =>{
            const char = String.fromCharCode(event.keyCode);// pega o valor da tecla digitada
            const charValid = '[0-9.,]';// array para apenas números

            function checkChar(event){
                if(char.match(charValid)){// char.match(charValid) valida apenas os valores digitados dentro do array e retorna verdadeiro
                    return true
                };
            };
      
            if(!checkChar(event)){ // se a tecla digitada não corresponder aos números, o input bloqueia a digitação
            event.preventDefault();
            inputNumControl.classList.add('error')
            }
            else{
                inputNumControl.classList.remove('error')
            }
       
        });

    }

  
} 