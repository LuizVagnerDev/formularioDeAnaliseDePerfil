export default function selectStatesUs(stateElement){
    //JSON com os Estados dos EUA 
  let statesUs =[
    { "name": "Alabama"},{ "name": "Alaska"},{ "name": "Arizona"},{ "name": "Arkansas"},
    { "name": "California"},{ "name": "Colorado"},{ "name": "Connecticut"},{ "name": "Delaware"},
    { "name": "District Of Columbia"},{ "name": "Florida"},{ "name": "Georgia"},{ "name": "Hawaii"},
    { "name": "Idaho"},{ "name": "Illinois"},{ "name": "Indiana"},{ "name": "Iowa"},{ "name": "Kansas"},
    { "name": "Kentucky"},{ "name": "Louisiana"},{ "name": "Maine"},{ "name": "Maryland"},{ "name": "Massachusetts"},
    { "name": "Michigan"},{ "name": "Minnesota"},{ "name": "Mississippi"},{ "name": "Missouri"},
    { "name": "Montana"},{ "name": "Nebraska"},{ "name": "Nevada"},{ "name": "New Hampshire"},
    { "name": "New Jersey"},{ "name": "New Mexico"},{ "name": "New York"},{ "name": "North Carolina"},
    { "name": "North Dakota"},{ "name": "Ohio"},{ "name": "Oklahoma"},{ "name": "Oregon"},{ "name": "Pennsylvania"},
    { "name": "Rhode Island"},{ "name": "South Carolina"},{ "name": "South Dakota"},{ "name": "Tennessee"},
    { "name": "Texas"},{ "name": "Utah"},{ "name": "Vermont"},{ "name": "Virginia"},{ "name": "Washington"},
    { "name": "West Virginia"},{ "name": "Wisconsin"},{ "name": "Wyoming"}
  ]

      //Evento para carregar os estados dentro do select
  window.addEventListener('load', event =>{
    //statesUs = array de objetos
    for(let newList of statesUs){ //newList = Lista gerada através do array de ojetos
      for(let allStates of stateElement){//Lista gerada através do elemento setado pelo DOM onde serão inseridos os valores do newList 
        allStates.innerHTML +=`
          <option>${newList.name}</option>
          `
      }
    }               
  })
} 


  






  