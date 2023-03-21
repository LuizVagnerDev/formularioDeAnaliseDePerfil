let counter = 1
export default function travelToUsa(travelUsaElement){
    const addTravelElement = document.querySelector('.addTravel')
    const removeTravelElement = document.querySelector('.removeTravel')
        
    let label1Elements = []
    let label2Elements = []
    let input1Elements = []
    let input2Elements = []
    let input3Elements = []
    let selectElements = []
    let smallElements = []

    addTravelElement.addEventListener('click', event =>{
        counter ++
        if(label1Elements.length < 4){
            let divArrivalDate = document.createElement('div')
            divArrivalDate.className = 'arrivalDate'
            travelUsaElement.appendChild(divArrivalDate) 
    
            let divFormControl1 =  document.createElement('div')
            divFormControl1.className = 'form-control'
            divArrivalDate.appendChild(divFormControl1)
    
            let divFormControl2 =  document.createElement('div')
            divFormControl2.className = 'form-control'
            travelUsaElement.appendChild(divFormControl2)
    
            let divInputNumControl = document.createElement('div')
            divInputNumControl.className = 'inputNumControl'
            divFormControl2.appendChild(divInputNumControl)
    
            let label1 = document.createElement('label')
            let labelText1 = document.createTextNode('Data de chegada aos EUA')
            label1Elements.push(label1)
            label1.appendChild(labelText1)
            divFormControl1.appendChild(label1)
    
            let input1 = document.createElement('input')
            input1.name = `previousTravelDate${counter}`
            input1.className = 'insertDate'
            input1.type = 'date'
            input1.min = '1900-01-01'
            input1.required = true
            input1Elements.push(input1)
            divFormControl1.appendChild(input1)
    
            let input2 = document.createElement('input')
            input2.name = `previousTripTime${counter}`
            input2.className = 'inputDateTravelUsa'
            input2.className = "error"
            input2.maxLength = '3'
            input2.style.width = '1.6rem'
            input2.style.position = 'relative'
            input2.style.left = '17.2rem'
            input2Elements.push(input2)
            divInputNumControl.appendChild(input2)

            let input3 = document.createElement('input')
            input3.name = 'numberOfTrips'
            input3.value = counter
            input3.type = 'hidden'
            input3Elements.push(input3)
            travelUsaElement.appendChild(input3) 

            let label2 = document.createElement('label')
            let label2Text = document.createTextNode('Informe o tempo que permaneceu:')
            label2.className = 'labelDateTravelUsa'
            label2.style.right = '1.55rem'
            label2Elements.push(label2)
            label2.appendChild(label2Text)
            divInputNumControl.appendChild(label2)
    
            let small = document.createElement('small')
            let smallText = document.createTextNode('Apenas letras')
            small.className = 'errorDateTravelUsa'
            small.appendChild(smallText)
            smallElements.push(small)
            divInputNumControl.appendChild(small)
    
            let select = document.createElement('select')
            select.name = `periodOfPreviousTrip${counter}`
            select.className = 'travelPeriod'
            selectElements.push(select)
            divFormControl2.appendChild(select)
    
    
            let option = document.createElement('option')
            option.text = 'escolha'
            option.selected = true
            option.disabled = true
            select.appendChild(option)
    
            let option1 = document.createElement('option')
            option1.text = 'dias'
            select.appendChild(option1)
    
            let option2 = document.createElement('option')
            option2.text = 'meses'
            select.appendChild(option2)
    
            let option3 = document.createElement('option')
            option3.text = 'anos'
            select.appendChild(option3)       
        }
    })
    
    removeTravelElement.addEventListener("click", event => {
        if (label1Elements.length > 0) {
            let label1 = label1Elements.pop()
            let label2 = label2Elements.pop()
            let input1 = input1Elements.pop()
            let input2 = input2Elements.pop()
            let select  = selectElements.pop()
            let small = smallElements.pop()
            
            label1.remove()
            label2.remove()
            input1.remove()
            input2.remove()
            select.remove()
            small.remove()     
        }
    })  

}
