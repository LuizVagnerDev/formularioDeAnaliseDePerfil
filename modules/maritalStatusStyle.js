export default function maritalStatus(maritalStatusSelectElement, married, divorced){
    //Evento para ser disparado se o botão da classe maritalStatusSelectElement for clicado
    maritalStatusSelectElement.addEventListener('change', event =>{
        
        //Se a opção 1 (casado) for selecionada abrirá um campo para digitar as informações
        if (maritalStatusSelectElement.selectedIndex == 1 || maritalStatusSelectElement.selectedIndex == 3 ||
            maritalStatusSelectElement.selectedIndex == 5) {
            married.classList.remove('spouse');
            divorced.classList.add('exSpouse');
        }

        //Se a opção 4 (divorciado) for selecionada abrirá um campo para digitar as informações
        else if((maritalStatusSelectElement.selectedIndex == 4)){
            divorced.classList.remove('exSpouse');
            married.classList.add('spouse');
        }
        else{
            divorced.classList.add('exSpouse');
            married.classList.add('spouse');
        }
    })

}