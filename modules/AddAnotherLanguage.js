let counter = 1
export default function addAnotherLanguage(anotherLanguageElement){
    const addLangElement = document.querySelector('.addLang')
    const removeLangElement = document.querySelector('.removeLang')
  
    let labelElements = [];
    let inputElements = [];
    let input2Elements = []

    addLangElement.addEventListener('click', event =>{
        counter ++
        
        let divFormControl =  document.createElement('div')
        divFormControl.className = 'form-control'
        anotherLanguageElement.appendChild(divFormControl)

        let divInputControl =  document.createElement('div')
        divInputControl.className = 'inputControl'
        divFormControl.appendChild(divInputControl)

        
        let input = document.createElement('input')
        input.type = 'text'
        input.className = 'msgError'
        input.name = `enterAnotherLanguage${counter}`
        input.id = 'styleInput'
        input.required = true
        inputElements.push(input)
        divInputControl.appendChild(input)

        let input2 = document.createElement('input')
        input2.type = 'hidden'
        input2.name = 'addLang'
        input2.id = 'styleInput'
        input2.value = counter
        input2.required = true
        input2Elements.push(input2)
        anotherLanguageElement.appendChild(input2)

        let label = document.createElement('label')
        label.className = 'labelInput'
        let labelText = document.createTextNode('Informe o outro idioma') 
        label.appendChild(labelText)
        labelElements.push(label)
        divInputControl.appendChild(label)


 
    })
    removeLangElement.addEventListener("click", event => {
        if (labelElements.length > 0) {
            let label = labelElements.pop();
            let input = inputElements.pop();
            label.remove();
            input.remove();
        }
    })  

}