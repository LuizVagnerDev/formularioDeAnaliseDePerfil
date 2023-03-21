
import removeAddClass from "./modules/removeAddClass.js"
import statesBr from "./modules/statesBr.js"
import cities from "./modules/cities.js"
import selectCountries from "./modules/countries.js"
import maritalStatus from "./modules/maritalStatusStyle.js"
import otherCountry from "./modules/otherCountry.js"
import inputText from "./modules/inputText.js"
import inputNumber from "./modules/inputNumber.js"

//import save from "./modules/save.js"





//Selecionar os elementos da opção (Usou outros nomes)
const otherNameYesElement = document.querySelector('.otherNameYes')
const otherNameElement = document.querySelector('.otherName')
const otherNameNoElement = document.querySelector('.otherNameNo')

//Selecionar os elementos da opção (Usou outros códigos de nomes)
const nameTelecodSelectElement = document.querySelector('.nameTelecodYes')
const nameTelecodNoneElement = document.querySelector('.nameTelecodNone')
const nameTelecodeElement = document.querySelector('.nameTelecode')

//selecionar os elementos de locais de nascimento de outros países
const cityElement = document.querySelector('.city')
const otherCountryElement = document.querySelector('.otherCountry')
const cityStateElement = document.querySelector('.cityState')

const stateElement = document.querySelector('.state')


//Selecionar os elementos da opção de estado civil
const maritalStatusSelectElement = document.querySelector('#maritalStatusSelect')
const spouseElement = document.querySelector('.spouse')
const citySpouseElement = document.querySelector('.citySpouse')
const otherCountrySpouseElement = document.querySelector('.otherCountrySpouse')
const cityStateSpouseElement = document.querySelector('.cityStateSpouse')
const stateSpouseElement = document.querySelector('.stateSpouse')
const exSpouseElement = document.querySelector('.exSpouse')
const cityExSpouseElement = document.querySelector('.cityExSpouse')
const otherCountryExSpouseElement = document.querySelector('.otherCountryExSpouse')
const cityStateExSpouseElement = document.querySelector('.cityStateExSpouse')
const stateExSpouseElement = document.querySelector('.stateExSpouse')

//Selecionar os elementos da opção (Possui outra nacionalidade)
const anotherNationalityYesElement = document.querySelector('.anotherNationalityYes')
const anotherNationalityNoElement = document.querySelector('.anotherNationalityNo')
const otherCountryBirthElement = document.querySelector('.otherCountryBirth')

//Selecionar elementos da opção (possui passaporte estrangeiro)
const otherPassportYesElement = document.querySelector('.otherPassportYes')
const otherPassportNoElement = document.querySelector('.otherPassportNo')
const otherPassportNumberElement = document.querySelector('.otherPassportNumber')

//Selecionar elementos da opção (Residente permanente de outro país)
const residentOtherYesElement = document.querySelector('.residentOtherYes')
const residentOtherNoElement = document.querySelector('.residentOtherNo')
const countryResidenceElement = document.querySelector('.countryResidence')

//Selecionar elementos da opção (Possui Social Security)
const socialSecurityYesElement = document.querySelector('.socialSecurityYes')
const socialSecurityNoElement = document.querySelector('.socialSecurityNo')
const socialSecurityNumberElement = document.querySelector('.socialSecurityNumber')

//Selecionar elementos da opção (Possui SSN)
const idNumberEuaYesElement = document.querySelector('.idNumberEuaYes')
const idNumberEuaNoNeElement = document.querySelector('.idNumberEuaNo')
const idContributorNumberElement = document.querySelector('.idContributorNumber')



//Eventos
removeAddClass(otherNameYesElement, otherNameElement, otherNameNoElement)
removeAddClass(anotherNationalityYesElement,anotherNationalityNoElement, otherCountryBirthElement)
removeAddClass(anotherNationalityYesElement,otherCountryBirthElement, anotherNationalityNoElement)
removeAddClass(otherPassportYesElement, otherPassportNumberElement, otherPassportNoElement)
removeAddClass(residentOtherYesElement,countryResidenceElement,residentOtherNoElement)
removeAddClass(socialSecurityYesElement,socialSecurityNumberElement,socialSecurityNoElement)
removeAddClass(idNumberEuaYesElement,idContributorNumberElement,idNumberEuaNoNeElement)
removeAddClass(nameTelecodSelectElement,nameTelecodeElement,nameTelecodNoneElement)




statesBr(stateElement)
statesBr(stateSpouseElement)
statesBr(stateExSpouseElement)      

//selectStatesUs(urlStatesUs, stateUSElement)

cities(stateElement,cityStateElement, cityElement,)
cities(stateSpouseElement,cityStateSpouseElement,citySpouseElement)
cities(stateExSpouseElement,cityStateExSpouseElement,cityExSpouseElement)
 


selectCountries()
//maritalStatus(maritalStatusSelectElement, exSpouseElement)
maritalStatus(maritalStatusSelectElement, spouseElement,exSpouseElement)



otherCountry(stateElement, otherCountryElement, cityStateElement)
otherCountry(stateSpouseElement, otherCountrySpouseElement, cityStateSpouseElement)
otherCountry(stateExSpouseElement, otherCountryExSpouseElement, cityStateExSpouseElement)

//Função para controlar estilizalção e validação
inputText()
inputNumber()


//save()
