let counter = 1
export default function addInputEmail(otherAddresEmailElement){
    const addEmailElement = document.querySelector('.addEmail')
    const removeEmailElement = document.querySelector('.removeEmail')
  
    let labelElements = [];
    let inputElements = [];
    let input2Elements = [];
    
    addEmailElement.addEventListener('click', event =>{
        counter ++
        
        let divFormControl =  document.createElement('div')
        divFormControl.className = 'form-control'
        otherAddresEmailElement.appendChild(divFormControl)

        let divOtherEmail =  document.createElement('div')
        divOtherEmail.className = 'otherEmail'
        divFormControl.appendChild(divOtherEmail)

        let label = document.createElement('label')
        let labelText = document.createTextNode('Insira outro E-mail') 
        label.className = 'labelInput'
        label.appendChild(labelText)
        label.style.position = 'relative'
        label.style.color = 'dodgerblue' 
        label.style.fontSize = '.75rem'
        labelElements.push(label)
        divOtherEmail.appendChild(label)

        
        let input = document.createElement('input')
        input.type = 'email'
        input.name = `otherEmail${counter}`
        input.id = 'styleInput'
        input.required = true
        inputElements.push(input)
        divOtherEmail.appendChild(input)

        let input2 = document.createElement('input')
        input2.name = 'addOtherEmail'
        input2.value = counter
        input2.type = 'hidden'
        input2Elements.push(input2)
        otherAddresEmailElement.appendChild(input2)
        
 
    })
    removeEmailElement.addEventListener("click", event => {
        if (labelElements.length > 0) {
            let label = labelElements.pop();
            let input = inputElements.pop();
            label.remove();
            input.remove();
        }
    })  

}