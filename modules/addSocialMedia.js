let counter = 1
export default function addSocialMedia(insertSocialMediaElement){
    const socialMediaSelectElement = document.querySelector('.socialMediaSelect')
    const addOtherSocialMediaElement = document.querySelector('.addOtherSocialMedia')
    const addSMElement = document.querySelector('.addSM')
    const removeSMElement = document.querySelector('.removeSM')
    
    //addOtherSocialMedia
    socialMediaSelectElement.addEventListener('change', event =>{
        if (socialMediaSelectElement.selectedIndex != '8') {
            insertSocialMediaElement.classList.remove('insertSocialMedia')
            addOtherSocialMediaElement.classList.remove('addOtherSocialMedia')
            let selectElements = [];
            let inputElements = [];
            let labelElements = [];
            let input2Elements = []
            
            addSMElement.addEventListener('click', event =>{
                counter ++
            
                let select = document.createElement('select')
                select.name = `socialMedia${counter}`
                select.required = true
                select.className = 'socialMediaSelect'
                selectElements.push(select)          

                let option = document.createElement('option')
                option.text = 'Escolha'
                option.value = ''
                option.disabled = true
                option.selected = true
                select.appendChild(option)
                
                let option1 = document.createElement('option')
                option1.text = 'Facebook'
                select.appendChild(option1)
                
                let option2 = document.createElement('option')
                option2.text = 'Instagram'
                select.appendChild(option2)

                let option3 = document.createElement('option')
                option3.text = 'LinkedIn'
                select.appendChild(option3)

                let option4 = document.createElement('option')
                option4.text = 'Pinterest'
                select.appendChild(option4)

                let option5 = document.createElement('option')
                option5.text = 'Twiter' 
                select.appendChild(option5)

                let option6 = document.createElement('option')
                option6.text = 'Reddit'
                select.appendChild(option6)

                let option7 = document.createElement('option')
                option7.text = 'Youtube'
                select.appendChild(option7)
                insertSocialMediaElement.appendChild(select)
                
                
                let divFormControl =  document.createElement('div')
                divFormControl.className = 'form-control'
                insertSocialMediaElement.appendChild(divFormControl)
                    
                let input = document.createElement('input')
                input.name = `username${counter}`
                input.type = 'text'
                input.id = 'styleInput'
                input.required = true
                inputElements.push(input)
                insertSocialMediaElement.appendChild(input)

                let input2 = document.createElement('input')
                input2.name = 'addUsername'
                input2.value = counter
                input2.type = 'hidden'
                input2.required = true
                input2Elements.push(input2)   
                insertSocialMediaElement.appendChild(input2)   

                let label =  document.createElement('label')
                let labelText = document.createTextNode('Insira o nome de usuário')
                label.appendChild(labelText)
                label.style.position = 'relative'
                label.style.bottom = '3rem'
                label.style.color = 'dodgerblue' 
                label.style.fontSize = '.75rem'
                labelElements.push(label)
                insertSocialMediaElement.appendChild(label)
                    
            }) 
                
            removeSMElement.addEventListener("click", event => {
                if (selectElements.length > 0) {
                    let select = selectElements.pop();
                    let input = inputElements.pop();
                    let label = labelElements.pop();
                    select.remove();
                    input.remove();
                    label.remove();
                }
            })  
        
        }
         else{
            insertSocialMediaElement.classList.add('insertSocialMedia')   
            addOtherSocialMediaElement.classList.add('addOtherSocialMedia')
        }       
        
    })

}