export default function sponsor(respForTripSelectElement,sponsor){
    //Evento para ser disparado se o botão da classe maritalStatusSelectElement for clicado
    respForTripSelectElement.addEventListener('change', event =>{
        
        //Se a opção 2 (outra pessoa) for selecionada abrirá um campo para digitar as informações
        if (respForTripSelectElement.selectedIndex === 2) {
            sponsor.classList.remove('sponsor');

        }
        else{
            sponsor.classList.add('sponsor');
        }
    })

}