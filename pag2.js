import addRemoveContactStudent from "./modules/addRemoveContactStudent.js"
import selectStatesUs from "./modules/statesUs.js"
import removeAddClass from "./modules/removeAddClass.js"
import sponsor from "./modules/sponsor.js"
import inputText from "./modules/inputText.js"
import inputNumber from "./modules/inputNumber.js"
import selectCountries from "./modules/countries.js"
/* import showAdress from "./modules/showAdress.js" */
import zipCode from "./modules/zipCode.js"
import addListTraveler from "./modules/addListTraveler.js"
import travelToUsa from "./modules/travelToUsa.js"
/* import recoveryData from "./modules/recoveryData.js" */
//import save from "./modules/save.js"




//Selecionar elementos da opção(Você fez planos de viagem)
const travelPlanYesElement =  document.querySelector('.travelPlanYes')
const travelPlanNoElement =  document.querySelector('.travelPlanNo')
const travelItineraryElement = document.querySelector('.travelItinerary') 
const dateOfIntentionTravelElement = document.querySelector('.dateOfIntentionTravel')
const stateUSElement = document.querySelectorAll('.stateUS')
const respForTripElement = document.querySelector('#respForTripSelect')
const sponsorElement = document.querySelector('.sponsor')

//Opção para nderir endereço do contato nos EUA
const contactUSYesElement = document.querySelector('.contactUSYes')
const contactUSNoElement = document.querySelector('.contactUSNo')
const contactUSElement = document.querySelector('.contactUS') 


const zipCodeSponsorElement = document.querySelector('.zipCodeSponsor')
const automaticStreetSponsorElement = document.querySelector('.automaticStreetSponsor')
const automatiDistrictSponsorElement = document.querySelector('.automatiDistrictSponsor')
const automatiCitySponsorElement = document.querySelector('.automatiCitySponsor')
const automaticEstateSponsorElement = document.querySelector('.automaticEstateSponsor') 

//Opção para inserir endereço e endereço do Sponsor
const sameAddressYesElement = document.querySelector('.sameAddressYes')
const sameAddressNoElement = document.querySelector('.sameAddressNo')
const sponsorAddressElement = document.querySelector('.sponsorAddress')


//opção se há outras pessoas viajando
const organiozationTravelYesElement = document.querySelector('.organiozationTravelYes')
const organiozationTravelNoElement = document.querySelector('.organiozationTravelNo')
const organiozationTravelElement = document.querySelector('.organiozationTravel')
const organizationNameElement = document.querySelector('.organizationName')

//Opção se há lista de viajantes
const travelCompanionYesElement = document.querySelector('.travelCompanionYes')
const travelCompanionNoElement = document.querySelector('.travelCompanionNo')
const travelersListElement = document.querySelector('.travelersList')

//Opção se há outras pessoas viajando com o solicitante
const addAnotherTravelerElement = document.querySelector('.addAnotherTraveler')

//Opção se já viajou aos EUA
const pastTripsToUsaYesElement = document.querySelector('.pastTripsToUsaYes')
const pastTripsToUsaNoElement = document.querySelector('.pastTripsToUsaNo')
const travelUsaElement = document.querySelector('.travelUsa')

//Opção para inserir outras viagens feitas aos EUA
const addPreviousTripElement = document.querySelector('.addPreviousTrip')

//Opção se possui carteira de habilitação dos EUA
const drivingLicenseElement = document.querySelector('.drivingLicense')
const drivingLicenseYesElement = document.querySelector('.drivingLicenseYes')
const drivingLicenseNoElement = document.querySelector('.drivingLicenseNo')
const drivingLicenseNumberElement = document.querySelector('.drivingLicenseNumber')

//Opção se possui visto anterior
const visaYesElement = document.querySelector('.visaYes')
const visaNoElement = document.querySelector('.visaNo')
const visaNumberElement = document.querySelector('.visaNumber')

//Opção se teve já visto perdido
const lostVisaYesElement = document.querySelector('.lostVisaYes')
const lostVisaNoElement = document.querySelector('.lostVisaNo')
const lostVisaElement = document.querySelector('.lostVisa')

//opção se teve já visto cancelado
const canceledVisaYesElement = document.querySelector('.canceledVisaYes')
const canceledVisaNoElement = document.querySelector('.canceledVisaNo')
const canceledVisaElement = document.querySelector('.canceledVisa')

//Opção se já teve um visto negado
const visaDeniedYesElement = document.querySelector('.visaDeniedYes')
const visaDeniedNoElement = document.querySelector('.visaDeniedNo')
const visaDeniedElement = document.querySelector('.visaDenied')

//Opção se alguém já enrou com petição nos Serviços de Cidadania dos EUA
const immigrantPetitionYesElement = document.querySelector('.immigrantPetitionYes')
const immigrantPetitionNoElement = document.querySelector('.immigrantPetitionNo')
const immigrantPetitionElement = document.querySelector('.immigrantPetition')


//Auto-preenchimento do endereço através do cep

const automaticStreetContactBR1Element = document.querySelector('.automaticStreetContactBR1')
const automaticDistrictContactBR1Element = document.querySelector('.automaticDistrictContactBR1')
const automatiCityContactBR1Element = document.querySelector('.automatiCityContactBR1')
const automaticEstateContactBR1Element = document.querySelector('.automaticEstateContactBR1')

const automaticStreetContactBR2Element = document.querySelector('.automaticStreetContactBR2')
const automaticDistrictContactBR2Element = document.querySelector('.automaticDistrictContactBR2')
const automatiCityContactBR2Element = document.querySelector('.automatiCityContactBR2')
const automaticEstateContactBR2Element = document.querySelector('.automaticEstateContactBR2')

const zipCodeContactBR1Element = document.querySelector('.zipCodeContactBR1')
const zipCodeContactBR2Element = document.querySelector('.zipCodeContactBR2')




addRemoveContactStudent()
removeAddClass(travelPlanYesElement, travelItineraryElement, travelPlanNoElement)
removeAddClass(travelPlanNoElement,dateOfIntentionTravelElement, travelPlanYesElement)  
removeAddClass(sameAddressNoElement, sponsorAddressElement, sameAddressYesElement)


removeAddClass(travelCompanionYesElement, organiozationTravelElement, travelCompanionNoElement)
removeAddClass(organiozationTravelNoElement, travelersListElement,organiozationTravelYesElement)
removeAddClass(organiozationTravelNoElement, addAnotherTravelerElement,organiozationTravelYesElement)
removeAddClass(organiozationTravelYesElement, organizationNameElement,organiozationTravelNoElement)
removeAddClass(pastTripsToUsaYesElement, travelUsaElement, pastTripsToUsaNoElement)
removeAddClass(pastTripsToUsaYesElement, addPreviousTripElement, pastTripsToUsaNoElement)

removeAddClass(pastTripsToUsaYesElement, drivingLicenseElement, pastTripsToUsaNoElement)
removeAddClass(drivingLicenseYesElement, drivingLicenseNumberElement, drivingLicenseNoElement)
removeAddClass(visaYesElement, visaNumberElement, visaNoElement)
removeAddClass(lostVisaYesElement, lostVisaElement, lostVisaNoElement)
removeAddClass(canceledVisaYesElement, canceledVisaElement, canceledVisaNoElement)
removeAddClass(visaDeniedYesElement, visaDeniedElement, visaDeniedNoElement)
removeAddClass(immigrantPetitionYesElement, immigrantPetitionElement, immigrantPetitionNoElement)
removeAddClass(contactUSYesElement, contactUSElement, contactUSNoElement)

selectStatesUs(stateUSElement)
selectStatesUs(stateUSElement)

sponsor(respForTripElement, sponsorElement)
selectCountries()
/* showAdress(automaticAddressElement) */
zipCode(zipCodeSponsorElement, automaticStreetSponsorElement, automatiDistrictSponsorElement, automatiCitySponsorElement, automaticEstateSponsorElement)
addListTraveler(travelersListElement)
travelToUsa(travelUsaElement)
zipCode(zipCodeContactBR1Element, automaticStreetContactBR1Element, automaticDistrictContactBR1Element, automatiCityContactBR1Element, automaticEstateContactBR1Element)
zipCode(zipCodeContactBR2Element, automaticStreetContactBR2Element, automaticDistrictContactBR2Element, automatiCityContactBR2Element, automaticEstateContactBR2Element)

//Função para controlar estilizalção e validação
inputText()
inputNumber()
//save()