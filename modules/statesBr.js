export default function statesBr(stateElement){
    const urlstatesBr = 'http://servicodados.ibge.gov.br/api/v1/localidades/estados'
    
    //Requisição para obter cidades
    window.addEventListener('load', async ()=>{
        const request = await fetch(urlstatesBr)
        const response = await request.json()
        const newList = response.map((newArray) => newArray.sigla)
        newList.sort()
        
        //Realizado um for of no response passando para pegar todas as UFs e inserir no html
        for(let stateElementControl of newList){     
            
            //inserir os estados nos selects da classe state, stateExSpouse
            stateElement.innerHTML +=`
            <option>${stateElementControl}</option>
            `      
        }    
        
    })
    
}