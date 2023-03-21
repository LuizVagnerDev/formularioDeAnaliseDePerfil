export default function zipCode(zipCodeElement, streetElement,districtElement,automaticityElement,automaticEstateElement){
    const automaticAddressElement = document.querySelectorAll('.automaticAddress')
    
    zipCodeElement.addEventListener('keyup', event =>{
        
        let inputValue = event.target.value
        if(inputValue.length === 8){
            fetch(`https://viacep.com.br/ws/${inputValue}/json/`).then(response =>{
                response.json().then(success =>{
                   
                    if(success){
                        for(let automaticAddressElementControl of automaticAddressElement){

                        automaticAddressElementControl.classList.remove('automaticAddress')
                            streetElement.value = success.logradouro
                            districtElement.value = success.bairro
                            automaticityElement.value = success.localidade
                            automaticEstateElement.value = success.uf
                        }
                    }            
                    else if(success.erro){
                        for(let automaticAddressElementControl of automaticAddressElement){
                            automaticAddressElementControl.classList.add('automaticAddress')
                        }
                    }
                        
                })
            })
        }
    })  
}