
export default function addRemoveContactStudent(){
  const visaTypeElement = document.querySelector('.visaType')
  const contactStudentElement = document.querySelector('.contactStudent')
    
    visaTypeElement.addEventListener('change', event =>{
      console.log(visaTypeElement.selectedIndex);
      if(visaTypeElement.selectedIndex === 2){
        contactStudentElement.classList.remove('contactStudent') 
      }
      else{
        contactStudentElement.classList.add('contactStudent')
      }
    })
}