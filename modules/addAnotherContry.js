let counter = 1

export default function addAnotherContry(travelToOtherContriesElement){

    const addCountryElement = document.querySelector('.addCountry')
    const removeCountryElement = document.querySelector('.removeCountry')
    
   
    let countries = [
        "Afeganistão","Albânia","Argélia","Andorra","Angola","Antígua e Barbuda","Argentina","Armênia","Austrália","Áustria",
        "Azerbaijão","Bahamas","Bahrein","Bangladesh","Barbados","Belarus","Bélgica","Belize","Benin","Bhutan",
        "Bolívia","Bósnia e Herzegovina","Botswana","Brasil","Brunei","Bulgária","Burquina Faso","Burúndi","Butão","Cabo Verde",
        "Camboja","Canadá","Catar","Cazaquistão","Chade","Chile","China","Chipre","Cidade do Vaticano","Colômbia",
        "Comores","Congo-Brazzaville","Congo-Kinshasa","Coreia do Norte","Coreia do Sul","Costa do Marfim","Costa Rica","Croácia","Cuba","Dinamarca",
        "Djibuti","Dominica","Egito","El Salvador","Emirados Árabes Unidos","Equador","Eritreia","Eslováquia","Eslovênia","Espanha",
        "Estados Unidos","Estônia","Etiópia","Fiji","Filipinas","Finlândia","França","Gabão","Gâmbia","Gana",
        "Geórgia","Alemanha","Gana","Grécia","Granada","Guatemala","Guiné","Guiné-Bissau","Guiné Equatorial","Haiti",
        "Honduras","Hungria","Iêmen","Ilhas Marshall","Indi","Indonésia","Irã","Iraque","Irlanda",
        "Islândia","Israel","Itália","Jamaica","Japão","Jordânia","Kiribati","Kuwait","Quirguistão","Laos",
        "Lesoto","Letônia","Líbano","Libéria","Líbia","Liechtenstein","Lituânia","Luxemburgo","Macedônia","Madagascar",
        "Malawi","Malásia","Maldivas","Mali","Malta","Marrocos","Ilhas Maurício","Mauritânia","México","Micronésia",
        "Moldávia","Mônaco","Mongólia","Montenegro","Moçambique","Myanmar (antiga Birmânia)","Namíbia","Nauru","Nepal","Países Baixos",
        "Nova Zelândia","Nicarágua","Níger","Nigéria","Noruega","Omã","Paquistão","Panamá","Papua-Nova Guiné","Paraguai",
        "Peru","Filipinas","Polônia","Portugal","Qatar","Romênia","Rússia","Ruanda","São Cristóvão e Névis","São Tomé e Príncipe",
        "Arábia Saudita","Senegal","Sérvia","Seicheles","Singapura","Eslováquia","Eslovênia","Ilhas Salomão","Somália","África do Sul",
        "Espanha","Sri Lanka","Sudão","Sudão do Sul","Suriname","Suazilândia","Suécia","Suíça","Síria","Taiwan",
        "Tajiquistão","Tanzânia","Tailândia","Timor-Leste","Togo","Tonga","Trinidad e Tobago","Tunísia","Turcomenistão","Turquia",
        "Tuvalu","Ucrânia","Uganda","Reino Unido","Estados Unidos","Uruguai","Uzbequistão","Vanuatu","Vaticano","Venezuela",
        "Vietnã","Ilhas Virgens Britânicas","Ilhas Virgens Americanas","Yemen","Zâmbia","Zimbábue"
        ]

        
        let selectCounter = 0 //contador para o select

        //evento de clique para adicionar um novo select a cada evento
        addCountryElement.addEventListener("click", event =>{
            counter ++
                selectCounter ++;
                let select = document.createElement("select");//gera um select
                    select.className = "country" // cria uma classe para o select
                    select.name = `travelToOtherContries${counter}`
                
                    let option = document.createElement("option");    //Cria um option com um texto "Escolha" e o seleciona e desabilita// 
                    let optionText = document.createTextNode('Escolha')
                    option.appendChild(optionText)
                    option.selected = true
                    option.disabled = true
                    select.appendChild(option)//Adiciona o option como elemento filho do select

                let input = document.createElement('input')
                    input.type = 'hidden'
                    input.name = 'addNewCountry'
                    input.value = counter
                    travelToOtherContriesElement.appendChild(input)
                    
                for(let countriesControl of countries){//iteração para controle dos países
                    let option1 = document.createElement("option");//é gerado um novo option
                    option1.innerHTML = countriesControl;// esse option conterá os elementos do array                 
                    select.appendChild(option1);//adiciona o novo option como elemento filho do select
                    };
                
                travelToOtherContriesElement.appendChild(select);
        });
      
          
//evento de clique para remover um novo select a cada evento
          removeCountryElement.addEventListener("click", event =>{
              if (selectCounter > 0) {
                let select = document.querySelector(".country" + selectCounter);
                select.remove();
                selectCounter--;
              }
          })


    

}
