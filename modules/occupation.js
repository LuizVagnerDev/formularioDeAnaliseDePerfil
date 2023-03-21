export default function occupation(){
    const occupationStatusElement = document.querySelector('.occupationStatus')
    const workElement = document.querySelector('.work')
    const schoolElement = document.querySelector('.school')
    occupationStatusElement.addEventListener('change', event =>{
        
       if(occupationStatusElement.selectedIndex == 1 || occupationStatusElement.selectedIndex == 2){
            workElement.classList.remove('work')
            schoolElement.classList.add('school')
       }
       else if(occupationStatusElement.selectedIndex == 5){
        workElement.classList.add('work')
        schoolElement.classList.remove('school')
        }
        else{
            workElement.classList.add('work')
            schoolElement.classList.add('school')
        }
    })
}