let counter = 1
export default function addInputText(charityOrganization){
    const addCharityOrganizationElement = document.querySelector('.addCharityOrganization')
    const removeCharityOrganizationElement = document.querySelector('.removeCharityOrganization')
    let labelElements =[]
    let inputElements = []
    let input2Elements = []

    addCharityOrganizationElement.addEventListener('click', event =>{
        counter ++
        let divFormControl = document.createElement('div') 
        divFormControl.className = 'form-control'
        charityOrganization.appendChild(divFormControl)

        let divInputControl = document.createElement('div') 
        divInputControl.className = 'inputControl'
        divFormControl.appendChild(divInputControl)

        let input = document.createElement('input')
        input.name = `charityOrganizationName${counter}`
        input.type = 'text'
        input.id = 'styleInput'
        input.required = true
        inputElements.push(input)
        divInputControl.appendChild(input)

        let input2 = document.createElement('input')
        input2.name = 'addCharityOrganization'
        input2.type = 'hidden'
        input2.value = counter
        input2Elements.push(input2)
        charityOrganization.appendChild(input2)

        let label = document.createElement('label')
        let labelText = document.createTextNode('Nome da Organização')
        label.className = 'labelInput'
        label.appendChild(labelText)
        labelElements.push(label)
        divInputControl.appendChild(label)  
    })
    removeCharityOrganizationElement.addEventListener('click', event =>{
        if(labelElements.length > 0){
           let label = labelElements.pop()
           let input = inputElements.pop()
           label.remove()
           input.remove()
        }
    })
}