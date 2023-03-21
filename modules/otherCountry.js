export default function otherCountry(stateElement, otherCountry, cityAndStatesElement){
        
    stateElement.addEventListener('change', event =>{
                
        if(stateElement.selectedIndex == 1){
            otherCountry.classList.remove('otherCountry')
            cityAndStatesElement.classList.add('cityState')
            otherCountry.classList.remove('otherCountrySpouse')
            cityAndStatesElement.classList.add('cityStateSpouse')
            otherCountry.classList.remove('otherCountryExSpouse')
            cityAndStatesElement.classList.add('cityStateExSpouse')  
            
        }
            else{
            otherCountry.classList.add('otherCountry')
            otherCountry.classList.add('otherCountrySpouse')
            otherCountry.classList.add('otherCountryExSpouse')       
        }
    })
}