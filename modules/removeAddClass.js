 //Evento para ser disparado se o botão da classe otherNameSelect for clicado
 export default function removeAddClass(clickShowInput, affectedElement, clickHideInput){
  clickShowInput.addEventListener('click', event =>{
        
     //Remove a estilização das classes
    affectedElement.classList.remove('otherName')
    
    affectedElement.classList.remove('nameTelecode')
      
    affectedElement.classList.remove('otherCountryBirth')

    affectedElement.classList.remove('otherPassportNumber')

    affectedElement.classList.remove('countryResidence')

    affectedElement.classList.remove('socialSecurityNumber')

    affectedElement.classList.remove('idContributorNumber')
    
    affectedElement.classList.remove('travelItinerary')

    affectedElement.classList.remove('dateOfIntentionTravel')

    affectedElement.classList.remove('contactUS')

    affectedElement.classList.remove('sponsorAddress')

    affectedElement.classList.remove('aplicantAddress')

    affectedElement.classList.remove('organiozationTravel')

    affectedElement.classList.remove('addAnotherTraveler')

    affectedElement.classList.remove('travelersList')

    affectedElement.classList.remove('organizationName')

    affectedElement.classList.remove('travelUsa')

    affectedElement.classList.remove('addPreviousTrip')

    affectedElement.classList.remove('drivingLicense')

    affectedElement.classList.remove('drivingLicenseNumber')

    affectedElement.classList.remove('visaNumber')

    affectedElement.classList.remove('lostVisa')

    affectedElement.classList.remove('canceledVisa')

    affectedElement.classList.remove('visaDenied')

    affectedElement.classList.remove('immigrantPetition')
    
    affectedElement.classList.remove('otherNumberTel')

    affectedElement.classList.remove('addOtherTel')

    affectedElement.classList.remove('otherAddresEmail')
    
    affectedElement.classList.remove('addOtherEmail')

    affectedElement.classList.remove('countryPassport')

    affectedElement.classList.remove('passportAnotherCountry')
    
    affectedElement.classList.remove('numberPassport')

    affectedElement.classList.remove('stolenPassport')

    affectedElement.classList.remove('fatherInUsa')

    affectedElement.classList.remove('motherInUsa')

    affectedElement.classList.remove('relativeInUsa')

    affectedElement.classList.remove('professionInBrazil')

    affectedElement.classList.remove('professionAbroad')

    affectedElement.classList.remove('workAddress')

    affectedElement.classList.remove('previousWork')

    affectedElement.classList.remove('penultimateWork')

    affectedElement.classList.remove('faculty')

    affectedElement.classList.remove('otherFaculty')

    affectedElement.classList.remove('anotherLanguage')

    affectedElement.classList.remove('addAnotherLang')

    affectedElement.classList.remove('weaponSkill')

    affectedElement.classList.remove('travelToOtherContries')

    affectedElement.classList.remove('addTravelToOtherContries')
    
    affectedElement.classList.remove('charityOrganization')

    affectedElement.classList.remove('addAnotherCharityOrganization')

    affectedElement.classList.remove('militaryService')

    affectedElement.classList.remove('illegalInTheUS')
    
    affectedElement.classList.remove('deported')
    
    affectedElement.classList.remove('studiedWithB2Visa')

    affectedElement.classList.remove('incomeTax')

    affectedElement.classList.remove('cashReserve')

    affectedElement.classList.remove('documentsToUpload')

  })

//Evento para ser disparado se o botão da classe clickHideInput for clicado
  clickHideInput.addEventListener('click', event =>{
         
    //Adiciona a estilização das classes 
    affectedElement.classList.add('otherName')

    affectedElement.classList.add('nameTelecode')
  
    affectedElement.classList.add('otherCountryBirth')

    affectedElement.classList.add('otherPassportNumber')

    affectedElement.classList.add('countryResidence')

    affectedElement.classList.add('socialSecurityNumber')

    affectedElement.classList.add('idContributorNumber')

    affectedElement.classList.add('travelItinerary')
    
    affectedElement.classList.add('dateOfIntentionTravel')

    affectedElement.classList.add('contactUS')

    affectedElement.classList.add('sponsorAddress')

    affectedElement.classList.add('aplicantAddress')
    
    affectedElement.classList.add('organiozationTravel')

    affectedElement.classList.add('addAnotherTraveler')

    affectedElement.classList.add('travelersList')

    affectedElement.classList.add('organizationName')

    affectedElement.classList.add('travelUsa')

    affectedElement.classList.add('addPreviousTrip')
    
    affectedElement.classList.add('drivingLicenseNumber')

    affectedElement.classList.add('drivingLicense')

    affectedElement.classList.add('visaNumber')

    affectedElement.classList.add('lostVisa')

    affectedElement.classList.add('canceledVisa')

    affectedElement.classList.add('visaDenied')

    affectedElement.classList.add('immigrantPetition')

    affectedElement.classList.add('otherNumberTel')

    affectedElement.classList.add('addOtherTel')
    
    affectedElement.classList.add('otherAddresEmail')

    affectedElement.classList.add('addOtherEmail')

    affectedElement.classList.add('countryPassport')

    affectedElement.classList.add('passportAnotherCountry')
    
    affectedElement.classList.add('numberPassport')

    affectedElement.classList.add('stolenPassport')

    affectedElement.classList.add('fatherInUsa')

    affectedElement.classList.add('motherInUsa')
    
    affectedElement.classList.add('relativeInUsa')

    affectedElement.classList.add('professionInBrazil')

    affectedElement.classList.add('professionAbroad')

    affectedElement.classList.add('workAddress')

    affectedElement.classList.add('previousWork')

    affectedElement.classList.add('penultimateWork')

    affectedElement.classList.add('faculty')

    affectedElement.classList.add('otherFaculty')

    affectedElement.classList.add('anotherLanguage')

    affectedElement.classList.add('addAnotherLang')

    affectedElement.classList.add('weaponSkill')

    affectedElement.classList.add('travelToOtherContries')
    
    affectedElement.classList.add('addTravelToOtherContries')
    
    affectedElement.classList.add('charityOrganization')

    affectedElement.classList.add('addAnotherCharityOrganization')

    affectedElement.classList.add('militaryService')

    affectedElement.classList.add('illegalInTheUS')

    affectedElement.classList.add('deported')

    affectedElement.classList.add('studiedWithB2Visa')
    
    affectedElement.classList.add('incomeTax')

    affectedElement.classList.add('cashReserve')

    affectedElement.classList.add('documentsToUpload')

  })
}
