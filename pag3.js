//import showAdress from "./modules/showAdress.js"
import zipCode from "./modules/zipCode.js"
import selectCountries from "./modules/countries.js"
import inputNumber from "./modules/inputNumber.js"
import removeAddClass from "./modules/removeAddClass.js"
import addSocialMedia from "./modules/addSocialMedia.js"
import addInputTel from "./modules/addInputTel.js"
import addInputEmail from "./modules/addInputEmail.js"
import statesBr from "./modules/statesBr.js"
import cities from "./modules/cities.js"
//import save from "./modules/save.js"


//Opção para carregar endereço automaticamente ou manualmente

const zipCodeAplicantElement = document.querySelector('.zipCodeAplicant')
const automaticStreetAplicantElement = document.querySelector('.automaticStreetAplicant')
const automaticDistrictAplicantElement = document.querySelector('.automaticDistrictAplicant')
const automatiCityAplicantElement = document.querySelector('.automatiCityAplicant')
const automaticEstateAplicantElement = document.querySelector('.automaticEstateAplicant')




//Opção para outros números de telefone usados 
const otherNumbersTelYesElement = document.querySelector('.otherNumbersTelYes')
const otherNumbersTelNoElement = document.querySelector('.otherNumbersTelNo')
const otherNumberTelElement = document.querySelector('.otherNumberTel')
const addOtherTelElement = document.querySelector('.addOtherTel')

//Opção para outros e-mails usados 
const otherAddresEmailYesElement = document.querySelector('.otherAddresEmailYes')
const otherAddresEmailNoElement = document.querySelector('.otherAddresEmailNo')
const otherAddresEmailElement = document.querySelector('.otherAddresEmail')
const addOtherEmailElement = document.querySelector('.addOtherEmail')

//Opção para inserir redes sociais
const insertSocialMediaElement = document.querySelector('.insertSocialMedia')

//Opção se possui passaporte
const passportYesElement = document.querySelector('.passportYes')
const passportNoElement = document.querySelector('.passportNo')
const numberPassportElement = document.querySelector('.numberPassport')

//Opção se o passaporte é brasileiro
const passportBrazilYesElement = document.querySelector('.passportBrazilYes')
const passportBrazilNoElement = document.querySelector('.passportBrazilNo')
const countryPassportElement = document.querySelector('.countryPassport')
const passportAnotherCountryElement = document.querySelector('.passportAnotherCountry')


//Opção para Estado de emissão do passaporte
const stateElement = document.querySelector('.state')
const cityElement = document.querySelector('.city')
const cityStateElement = document.querySelector('.cityState')

//Opção se não possui passaporte ou passaporte vencido
//const applyForPassportElement = document.querySelector('.applyForPassport')

//Opção para passaporte perdido
const stolenPassportYesElement = document.querySelector('.stolenPassportYes')
const stolenPassportNoElement = document.querySelector('.stolenPassportNo')
const stolenPassportElement = document.querySelector('.stolenPassport')



//showAdress(automaticAddressElement)
zipCode(zipCodeAplicantElement,automaticStreetAplicantElement, automaticDistrictAplicantElement, automatiCityAplicantElement, automaticEstateAplicantElement)
selectCountries()
removeAddClass(otherNumbersTelYesElement, otherNumberTelElement, otherNumbersTelNoElement)
removeAddClass(otherNumbersTelYesElement, addOtherTelElement, otherNumbersTelNoElement)
removeAddClass(otherAddresEmailYesElement, otherAddresEmailElement, otherAddresEmailNoElement)
removeAddClass(otherAddresEmailYesElement, addOtherEmailElement, otherAddresEmailNoElement)
addSocialMedia(insertSocialMediaElement)
addInputTel(otherNumberTelElement)
addInputEmail(otherAddresEmailElement)
statesBr(stateElement)
cities(stateElement,cityStateElement,cityElement)

removeAddClass(passportYesElement, countryPassportElement, passportNoElement)
removeAddClass(passportBrazilYesElement, numberPassportElement, passportBrazilNoElement)
removeAddClass(passportBrazilNoElement, passportAnotherCountryElement, passportBrazilYesElement)
//removeAddClass(passportNoElement, applyForPassportElement, passportYesElement)
removeAddClass(stolenPassportYesElement, stolenPassportElement, stolenPassportNoElement)

//Selecionar elementos para controlar estilizalção e validação
inputNumber()
//save()