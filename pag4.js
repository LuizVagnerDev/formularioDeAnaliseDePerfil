
/* import addRemovePageStudent from "./modules/addRemovePageStudent.js" */
import removeAddClass from "./modules/removeAddClass.js"
import zipCode from "./modules/zipCode.js"
//import showAdress from "./modules/showAdress.js"
import selectCountries from "./modules/countries.js"
import inputText from "./modules/inputText.js"
import inputNumber from "./modules/inputNumber.js"
import occupation from "./modules/occupation.js"
//import save from "./modules/save.js"

/* const pageTourismElement = document.querySelector('.pageTourism')
const pageStudentElement = document.querySelector('.pageStudent') */

//Opção para inserir status do pai nos EUA
const fatherInUsaYesElement  = document.querySelector(".fatherInUsaYes")
const fatherInUsaNoElement  = document.querySelector(".fatherInUsaNo")
const fatherInUsaElement  = document.querySelector(".fatherInUsa")

//Opção para inserir status da mãe nos EUA
const motherInUsaYesElement  = document.querySelector(".motherInUsaYes")
const motherInUsaNoElement  = document.querySelector(".motherInUsaNo")
const motherInUsaElement  = document.querySelector(".motherInUsa")
//Opção para inserir status de outro parente imediato nos EUA
const relativeInUsaYesElement  = document.querySelector(".relativeInUsaYes")
const relativeInUsaNoElement  = document.querySelector(".relativeInUsaNo")
const relativeInUsaElement  = document.querySelector(".relativeInUsa")


//Buscar endereço do trabalho atual

const zipCodeWorkElement = document.querySelector('.zipCodeWork')
const automaticStreetWorkElement = document.querySelector('.automaticStreetWork')
const automaticDistrictWorkElement = document.querySelector('.automaticDistrictWork')
const automaticCityWorkElement = document.querySelector('.automaticCityWork')
const automaticEstateWorkElement = document.querySelector('.automaticEstateWork')

//Buscar endereço da escola
const zipCodeSchoolElement = document.querySelector('.zipCodeSchool')
const automaticStreetSchoolElement = document.querySelector('.automaticStreetSchool')
const automaticDistrictSchoolElement = document.querySelector('.automaticDistrictSchool')
const automatiCitySchoolElement = document.querySelector('.automatiCitySchool')
const automaticEstateSchoolElement = document.querySelector('.automaticEstateSchool')

//Opção para inserir trabalho anterior
const previousWorkYesElement  = document.querySelector(".previousWorkYes")
const previousWorkNoElement  = document.querySelector(".previousWorkNo")
const previousWorkElement  = document.querySelector(".previousWork")

//Buscar endereço do trabalho anterior e
const zipCodePreviousWorkElement = document.querySelector('.zipCodePreviousWork')
const automaticStreetPreviousWorkElement = document.querySelector('.automaticStreetPreviousWork')
const automaticDistrictPreviousWorkElement = document.querySelector('.automaticDistrictPreviousWork') 
const automatiCityPreviousWorkElement = document.querySelector('.automatiCityPreviousWork') 
const automaticEstatePreviousWorkElement = document.querySelector('.automaticEstatePreviousWork') 

//Opção para inserir o penúltimo trabalho
const penultimateWorkYesElement  = document.querySelector(".penultimateWorkYes")
const penultimateWorkNoElement  = document.querySelector(".penultimateWorkNo")
const penultimateWorkElement  = document.querySelector(".penultimateWork")

//Buscar endereço do penúltimo trabalho
const zipCodePenultimateWorkElement = document.querySelector('.zipCodePenultimateWork')
const automaticStreetPenultimateWorkElement = document.querySelector('.automaticStreetPenultimateWork')
const automaticDistrictPenultimateWorkElement = document.querySelector('.automaticDistrictPenultimateWork') 
const automatiCityPenultimateWorkElement = document.querySelector('.automatiCityPenultimateWork') 
const automaticEstatePenultimateWorkElement = document.querySelector('.automaticEstatePenultimateWork') 





//opção para inserir Faculdade
const facultyYesElement  = document.querySelector(".facultyYes")
const facultyNoElement  = document.querySelector(".facultyNo")
const facultyElement  = document.querySelector(".faculty")

//Buscar endereço da Faculdade
const zipCodeFacultyElement = document.querySelector('.zipCodeFaculty')
const automaticStreetFacultyElement = document.querySelector('.automaticStreetFaculty')
const automaticDistrictFacultyElement = document.querySelector('.automaticDistrictFaculty')
const automatiCityFacultyElement = document.querySelector('.automatiCityFaculty')
const automaticEstateFacultyElement = document.querySelector('.automaticEstateFaculty')



//opção para inserir outra Faculdade
const otherFacultyYesElement  = document.querySelector(".otherFacultyYes")
const otherFacultyNoElement  = document.querySelector(".otherFacultyNo")
const otherFacultyElement  = document.querySelector(".otherFaculty")

//Buscar endereço da outra Faculdade
const zipCodeAnotherFacultykElement = document.querySelector('.zipCodeAnotherFaculty')
const automaticStreetOtherFacultyElement = document.querySelector('.automaticStreetOtherFaculty')
const automaticDistrictOtherFacultyElement = document.querySelector('.automaticDistrictOtherFaculty')
const automaticCityOtherFacultyElement = document.querySelector('.automaticCityOtherFaculty')
const automaticEstateOtherFacultyElement = document.querySelector('.automaticEstateOtherFaculty')







/* addRemovePageStudent() */
inputText()
inputNumber()

//Função para adicionar ou remover elementos ao efetuar o click no botão
removeAddClass(fatherInUsaYesElement, fatherInUsaElement, fatherInUsaNoElement)
removeAddClass(motherInUsaYesElement, motherInUsaElement, motherInUsaNoElement)
removeAddClass(relativeInUsaYesElement, relativeInUsaElement, relativeInUsaNoElement)

removeAddClass(previousWorkYesElement, previousWorkElement, previousWorkNoElement)
removeAddClass(penultimateWorkYesElement, penultimateWorkElement, penultimateWorkNoElement)
removeAddClass(facultyYesElement, facultyElement, facultyNoElement)
removeAddClass(otherFacultyYesElement, otherFacultyElement, otherFacultyNoElement)




//Função para puxar o endereço inserindo o cep
zipCode(zipCodeWorkElement,automaticStreetWorkElement, automaticDistrictWorkElement, automaticCityWorkElement, automaticEstateWorkElement)
zipCode(zipCodeSchoolElement,automaticStreetSchoolElement, automaticDistrictSchoolElement, automatiCitySchoolElement, automaticEstateSchoolElement)
zipCode(zipCodePreviousWorkElement,automaticStreetPreviousWorkElement, automaticDistrictPreviousWorkElement, automatiCityPreviousWorkElement, automaticEstatePreviousWorkElement)
zipCode(zipCodePenultimateWorkElement,automaticStreetPenultimateWorkElement, automaticDistrictPenultimateWorkElement, automatiCityPenultimateWorkElement, automaticEstatePenultimateWorkElement)
zipCode(zipCodeFacultyElement,automaticStreetFacultyElement, automaticDistrictFacultyElement, automatiCityFacultyElement, automaticEstateFacultyElement)
zipCode(zipCodeAnotherFacultykElement,automaticStreetOtherFacultyElement,automaticDistrictOtherFacultyElement,automaticCityOtherFacultyElement,automaticEstateOtherFacultyElement)
//Função para mostrar os campos do endereço para ser digitado
//showAdress()
//Função para selecionar o país
selectCountries()
//Função para status da ocupação
occupation()
//save()