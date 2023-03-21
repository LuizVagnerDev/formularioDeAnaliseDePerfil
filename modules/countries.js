export default function selectCountries(){
    const countryElement = document.querySelectorAll('.country')
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


  window.addEventListener('load', event =>{
    for(let newList of countries){ //newList = Lista gerada através do array de ojetos
      for(let allContries of countryElement){//Lista gerada através do elemento setado pelo DOM onde serão inseridos os valores do newList 
        allContries.innerHTML +=`
          <option>${newList}</option>
          `
      }
    }               
  })

}