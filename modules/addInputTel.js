let counter = 1
export default function addInputTel(otherNumberTelElement){
    const addTelElement = document.querySelector('.addTel')
    const removeTelElement = document.querySelector('.removeTel')
  
    let labelElements = [];
    let inputElements = [];
    let input2Elements = [];
    let smallElements = [];

    addTelElement.addEventListener('click', event =>{
        counter ++
        
        let divFormControl =  document.createElement('div')
        divFormControl.className = 'form-control'
        otherNumberTelElement.appendChild(divFormControl)

        let divInputNumControl =  document.createElement('div')
        divInputNumControl.className = 'inputNumControl'
        divFormControl.appendChild(divInputNumControl)

        let label = document.createElement('label')
        label.className = 'labelInput'
        let labelText = document.createTextNode('Insira o outro número de telefone') 
        label.appendChild(labelText)
        label.style.position = 'relative'
        label.style.color = 'dodgerblue' 
        label.style.fontSize = '.75rem'
        labelElements.push(label)
        divInputNumControl.appendChild(label)

        
        let input = document.createElement('input')
        input.name = `otherNumberTel${counter}`
        input.type = 'text'
        input.id = 'styleInput'
        input.className = 'error'
        input.minLength = 8
        input.maxLength = 11
        input.required = true
        inputElements.push(input)
        divInputNumControl.appendChild(input)

        let input2 = document.createElement('input')
        input2.name = 'addOtherNumberTel'
        input2.value = counter;
        input2.type = 'hidden'
        input2Elements.push(input2);
        otherNumberTelElement.appendChild(input2)

        
        let small = document.createElement('small')
        let smallText = document.createTextNode('Apenas letras')
        small.appendChild(smallText)
        smallElements.push(small)
        divInputNumControl.appendChild(small)
 
    })
    removeTelElement.addEventListener("click", event => {
        if (labelElements.length > 0) {
            let label = labelElements.pop();
            let input = inputElements.pop();
            let small = smallElements.pop();
            label.remove();
            input.remove();
            small.remove();
        }
    })  

}