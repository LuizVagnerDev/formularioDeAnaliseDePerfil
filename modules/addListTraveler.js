let counter = 1
export default function addListTraveler(travelersListElement){
  //Evento para adicionar viajantes à lista
  const addTraveler = document.querySelector('.addTraveler')
  const removeTraveler = document.querySelector('.removeTraveler')

  let labelElements = [];
  let inputElements = [];
  let inputElements2 = [];
  let smallElements = [];
  let label1Elements = [];
  let selectElements = [];

  addTraveler.addEventListener("click", event =>{
    counter ++
    
    let divFormControl =  document.createElement('div')
    divFormControl.className = 'form-control'
    divFormControl.style.display = 'block'
    travelersListElement.appendChild(divFormControl)

    let divInputControl  = document.createElement('div')
    divInputControl.className = 'inputControl'
    divInputControl.style.display = 'block'
    divFormControl.appendChild(divInputControl)

    let divRelationshipTraveler = document.createElement('div')
    divRelationshipTraveler.className = 'relationshipTraveler'
    divRelationshipTraveler.style.display = 'block'
    travelersListElement.appendChild(divRelationshipTraveler)

    let input = document.createElement('input')
    input.name = `travelersName${counter}`
    input.type = 'text'
    input.id = 'styleInput'
    input.className = 'error'
    inputElements.push(input)
    input.required = true
    divInputControl.appendChild(input)

    let input2 = document.createElement('input')
    input2.name = 'numberOfTravelers'
    input2.value = counter
    input2.type = 'hidden'
    inputElements2.push(input2)
      travelersListElement.appendChild(input2)


    let small = document.createElement('small')
    let smallText = document.createTextNode('Apenas letras')
    small.className = 'msgError'
    small.appendChild(smallText)
    divInputControl.appendChild(small)
    smallElements.push(small)

    let label = document.createElement('label')
    let labelText = document.createTextNode('Nome completo do viajante') 
    label.className = 'labelInput'
    label.appendChild(labelText)
    labelElements.push(label)
    divInputControl.appendChild(label)


    let label1 = document.createElement('label')
    let label1Text = document.createTextNode('Relacionamento com você')
    label1.style.position= 'relative'
    label1.style.top = '0rem'
    label1.style.right = '0'
    label1.appendChild(label1Text)
    label1Elements.push(label1)
    divInputControl.appendChild(label1)


    let select = document.createElement('select')
    select.name = `relationshipWithTheTraveler${counter}`
    divRelationshipTraveler.appendChild(select)
    selectElements.push(select)


    let option = document.createElement('option')
    option.text = "Escolha"
    select.appendChild(option)
    select.querySelector("option:first-child").setAttribute('disabled', true)

    let option1 = document.createElement('option')
    option1.text = "Pai/Mãe"
    select.appendChild(option1)
    

    let option2 = document.createElement('option')
    option2.text = "Filho(a)"
    select.appendChild(option2)

    let option3 = document.createElement('option')
    option3.text = "Cônjuge"
    select.appendChild(option3)

    let option4 = document.createElement('option')
    option4.text = "Outro parente"
    select.appendChild(option4)

    let option5 = document.createElement('option')
    option5.text = "Amigo(a)"
    select.appendChild(option5)

    let option6 = document.createElement('option')
    option6.text = "De outros"
    select.appendChild(option6)
       
  })

  removeTraveler.addEventListener("click", event => {
  // Evento para deletar um viajante da lista
    if(labelElements.length > 0){
      let label = labelElements.pop()
      let input = inputElements.pop()
      let small = smallElements.pop()
      let label1 = label1Elements.pop()
      let select  = selectElements.pop()
      
      label.remove()
      input.remove()
      small.remove() 
      label1.remove()
      select.remove()
    }
})

      
}