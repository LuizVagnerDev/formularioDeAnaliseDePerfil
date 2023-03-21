
import removeAddClass from "./modules/removeAddClass.js"
import addAnotherLanguage from "./modules/AddAnotherLanguage.js"
import addAnotherContry from "./modules/addAnotherContry.js"
import selectCountries from "./modules/countries.js"
import addInputText from "./modules/addInputText.js"
//import save from "./modules/save.js"


//Opção se fala outros idiomas fluentemente
const anotherLanguageYesElement = document.querySelector('.anotherLanguageYes')
const anotherLanguageNoElement = document.querySelector('.anotherLanguageNo')
const anotherLanguageElement = document.querySelector('.anotherLanguage')
const addAnotherLangElement = document.querySelector('.addAnotherLang')

//Opção se possui habilidades com armas
const weaponSkillYesElement = document.querySelector('.weaponSkillYes')
const weaponSkillNoElement = document.querySelector('.weaponSkillNo')
const weaponSkillElement = document.querySelector('.weaponSkill')


//Opção se viajou recentemente para outros países
const travelToOtherContriesYesElement = document.querySelector('.travelToOtherContriesYes')
const travelToOtherContriesNoElement = document.querySelector('.travelToOtherContriesNo')
const travelToOtherContriesElement = document.querySelector('.travelToOtherContries')
const addTravelToOtherContriesElement = document.querySelector('.addTravelToOtherContries')

//opção se contribui para alguma organização beneficente
const charityOrganizationYesElement = document.querySelector('.charityOrganizationYes')
const charityOrganizationNoElement = document.querySelector('.charityOrganizationNo')
const charityOrganizationElement = document.querySelector('.charityOrganization')
const addAnotherCharityOrganizationElement = document.querySelector('.addAnotherCharityOrganization')

//Opção se prestou Serviço Militar
const militaryServiceYesElement = document.querySelector('.militaryServiceYes')
const militaryServiceNoElement = document.querySelector('.militaryServiceNo')
const militaryServiceElement = document.querySelector('.militaryService')

//Opção se ficou ilegal nos EUA
const illegalInTheUSYesElement = document.querySelector('.illegalInTheUSYes')
const illegalInTheUSNoElement = document.querySelector('.illegalInTheUSNo')
const illegalInTheUSElement = document.querySelector('.illegalInTheUS')

//Opção se já foi deportado de algum país
const deportedYesElement = document.querySelector('.deportedYes')
const deportedNoElement = document.querySelector('.deportedNo')
const deportedElement = document.querySelector('.deported')

//Opção se estudou com visto de Turismo nos EUA
const studiedWithB2VisaYesElement = document.querySelector('.studiedWithB2VisaYes')
const studiedWithB2VisaNoElement = document.querySelector('.studiedWithB2VisaNo')
const studiedWithB2VisaElement = document.querySelector('.studiedWithB2Visa')

//Opção se declara IR
const incomeTaxYesElement = document.querySelector('.incomeTaxYes')
const incomeTaxNoElement = document.querySelector('.incomeTaxNo')
const incomeTaxElement = document.querySelector('.incomeTax')



//Opção se possui reserva ou aplicação
const cashReserveYesElement = document.querySelector('.cashReserveYes')
const cashReserveNoElement = document.querySelector('.cashReserveNo')
const cashReserveElement = document.querySelector('.cashReserve')


removeAddClass(anotherLanguageYesElement, anotherLanguageElement, anotherLanguageNoElement)
removeAddClass(anotherLanguageYesElement, addAnotherLangElement, anotherLanguageNoElement)
addAnotherLanguage(anotherLanguageElement)
removeAddClass(weaponSkillYesElement, weaponSkillElement, weaponSkillNoElement)
selectCountries()
removeAddClass(travelToOtherContriesYesElement, travelToOtherContriesElement, travelToOtherContriesNoElement)
removeAddClass(travelToOtherContriesYesElement, addTravelToOtherContriesElement, travelToOtherContriesNoElement)
addAnotherContry(travelToOtherContriesElement)
removeAddClass(charityOrganizationYesElement, charityOrganizationElement, charityOrganizationNoElement)
removeAddClass(charityOrganizationYesElement, addAnotherCharityOrganizationElement, charityOrganizationNoElement)
addInputText(charityOrganizationElement)
removeAddClass(militaryServiceYesElement, militaryServiceElement, militaryServiceNoElement)
removeAddClass(illegalInTheUSYesElement, illegalInTheUSElement, illegalInTheUSNoElement)
removeAddClass(deportedYesElement, deportedElement, deportedNoElement)
removeAddClass(studiedWithB2VisaYesElement, studiedWithB2VisaElement, studiedWithB2VisaNoElement)
removeAddClass(incomeTaxYesElement, incomeTaxElement, incomeTaxNoElement)
removeAddClass(cashReserveYesElement, cashReserveElement, cashReserveNoElement)
