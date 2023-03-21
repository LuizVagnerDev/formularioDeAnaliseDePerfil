<?php
session_start();

    if (isset($_POST['visaType'])) {
        $_SESSION['visaType'] = $_POST['visaType'];
    }

    if (isset($_POST['plan'])) {
        $_SESSION['plan'] = $_POST['plan'];
    } 

    if (isset($_POST['approximateDateOfTravel'])) {
        $_SESSION['approximateDateOfTravel'] = $_POST['approximateDateOfTravel'];
    }
    
    if (isset($_POST['flightNumberArryval'])) {
        $_SESSION['flightNumberArryval'] = $_POST['flightNumberArryval'];
    } 

    if (isset($_POST['landingPlace'])) {
        $_SESSION['landingPlace'] = $_POST['landingPlace'];
    }

    if (isset($_POST['arryvalDate'])) {
        $_SESSION['arryvalDate'] = $_POST['arryvalDate'];
    }
    
    if (isset($_POST['departureDate'])) {
        $_SESSION['departureDate'] = $_POST['departureDate'];
    } 

    if (isset($_POST['flightNumberDeparture'])) {
        $_SESSION['flightNumberDeparture'] = $_POST['flightNumberDeparture'];
    }
    
    if (isset($_POST['boardingPlace'])) {
        $_SESSION['boardingPlace'] = $_POST['boardingPlace'];
    }

    if (isset($_POST['dateOfIntentionTravel'])) {
        $_SESSION['dateOfIntentionTravel'] = $_POST['dateOfIntentionTravel'];
    }
        
    if (isset($_POST['placeOfVisit'])) {
        $_SESSION['placeOfVisit'] = $_POST['placeOfVisit'];
    } 

    if (isset($_POST['lengthOfStay'])) {
        $_SESSION['lengthOfStay'] = $_POST['lengthOfStay'];
    }
    
    if (isset($_POST['period'])) {
    $_SESSION['period'] = $_POST['period'];
    } 

    if (isset($_POST['contactUS'])) {
        $_SESSION['contactUS'] = $_POST['contactUS'];
    }
            
    if (isset($_POST['nameContactUs'])) {
        $_SESSION['nameContactUs'] = $_POST['nameContactUs'];
    } 

    if (isset($_POST['zipCodeContact'])) {
        $_SESSION['zipCodeContact'] = $_POST['zipCodeContact'];
    }
    
    if (isset($_POST['adressContactUs'])) {
        $_SESSION['adressContactUs'] = $_POST['adressContactUs'];
    } 

    if (isset($_POST['telephoneContactUS'])) {
        $_SESSION['telephoneContactUS'] = $_POST['telephoneContactUS'];
    }
    
    if (isset($_POST['emailContactUS'])) {
        $_SESSION['emailContactUS'] = $_POST['emailContactUS'];
    } 

    if (isset($_POST['cityContactUs'])) {
        $_SESSION['cityContactUs'] = $_POST['cityContactUs'];
    }
    
    if (isset($_POST['stateContactUS'])) {
        $_SESSION['stateContactUS'] = $_POST['stateContactUS'];
    } 

    if (isset($_POST['relationship'])) {
        $_SESSION['relationship'] = $_POST['relationship'];
    }
    
    if (isset($_POST['respForTrip'])) {
        $_SESSION['respForTrip'] = $_POST['respForTrip'];
    } 

    if (isset($_POST['nameSponsor'])) {
        $_SESSION['nameSponsor'] = $_POST['nameSponsor'];
    }
    
    if (isset($_POST['surnameSponsor'])) {
        $_SESSION['surnameSponsor'] = $_POST['surnameSponsor'];
    } 

    if (isset($_POST['telSponsor'])) {
        $_SESSION['telSponsor'] = $_POST['telSponsor'];
    }
    
    if (isset($_POST['emailSponsor'])) {
        $_SESSION['emailSponsor'] = $_POST['emailSponsor'];
    } 
    
    if (isset($_POST['relationshipWithSponsor'])) {
        $_SESSION['relationshipWithSponsor'] = $_POST['relationshipWithSponsor'];
    }

    if (isset($_POST['sameAddress'])) {
        $_SESSION['sameAddress'] = $_POST['sameAddress'];
    } 
    
    if (isset($_POST['addressIsNotFromBrazil'])) {
        $_SESSION['addressIsNotFromBrazil'] = $_POST['addressIsNotFromBrazil'];
    }

    if (isset($_POST['zipCodeSponsorInter'])) {
        $_SESSION['zipCodeSponsorInter'] = $_POST['zipCodeSponsorInter'];
    }
            
    if (isset($_POST['cityManuallySponsor'])) {
        $_SESSION['cityManuallySponsor'] = $_POST['cityManuallySponsor'];
    } 

    if (isset($_POST['stateManuallySponsor'])) {
        $_SESSION['stateManuallySponsor'] = $_POST['stateManuallySponsor'];
    }
    
    if (isset($_POST['countrySponsor'])) {
        $_SESSION['countrySponsor'] = $_POST['countrySponsor'];
    } 

    if (isset($_POST['zipCodeSponsor'])) {
        $_SESSION['zipCodeSponsor'] = $_POST['zipCodeSponsor'];
    }
    
    if (isset($_POST['automaticStreetSponsor'])) {
        $_SESSION['automaticStreetSponsor'] = $_POST['automaticStreetSponsor'];
    } 

    if (isset($_POST['numberAdressSponsor'])) {
        $_SESSION['numberAdressSponsor'] = $_POST['numberAdressSponsor'];
    }
    
    if (isset($_POST['automatiDistrictSponsor'])) {
        $_SESSION['automatiDistrictSponsor'] = $_POST['automatiDistrictSponsor'];
    } 

    if (isset($_POST['automatiCitySponsor'])) {
        $_SESSION['automatiCitySponsor'] = $_POST['automatiCitySponsor'];
    }
    
    if (isset($_POST['automaticEstateSponsor'])) {
        $_SESSION['automaticEstateSponsor'] = $_POST['automaticEstateSponsor'];
    } 

    if (isset($_POST['travelCompanion'])) {
        $_SESSION['travelCompanion'] = $_POST['travelCompanion'];
    }
    
    
    if (isset($_POST['organiozationTravel'])) {
        $_SESSION['organiozationTravel'] = $_POST['organiozationTravel'];
    } 

    if (isset($_POST['organizationName'])) {
        $_SESSION['organizationName'] = $_POST['organizationName'];
    }

    if (isset($_POST['numberOfTravelers'])) {
        $_SESSION['numberOfTravelers'] = $_POST['numberOfTravelers'];

        for ($i = 2; $i <=  $_SESSION['numberOfTravelers']; $i++) {     
            if (isset($_POST["travelersName$i"])) {
                $_SESSION["travelersName$i"] = $_POST["travelersName$i"];
            }  
        
            if (isset($_POST["relationshipWithTheTraveler$i"])) {
                $_SESSION["relationshipWithTheTraveler$i"] = $_POST["relationshipWithTheTraveler$i"];
            } 
        }
    }
    
    if (isset($_POST['travelersName1'])) {
        $_SESSION['travelersName1'] = $_POST['travelersName1'];
    } 
    
    if (isset($_POST['relationshipWithTheTraveler1'])) {
        $_SESSION['relationshipWithTheTraveler1'] = $_POST['relationshipWithTheTraveler1'];
    } 

    if (isset($_POST['pastTripsToUsa'])) {
        $_SESSION['pastTripsToUsa'] = $_POST['pastTripsToUsa'];
    } 

    if (isset($_POST['previousTravelDate1'])) {
        $_SESSION['previousTravelDate1'] = $_POST['previousTravelDate1'];
    } 

    if (isset($_POST['previousTripTime1'])) {
        $_SESSION['previousTripTime1'] = $_POST['previousTripTime1'];
    }
    
    if (isset($_POST['periodOfPreviousTrip1'])) {
        $_SESSION['periodOfPreviousTrip1'] = $_POST['periodOfPreviousTrip1'];
    } 

    if (isset($_POST["numberOfTrips"])) {
        $_SESSION["numberOfTrips"] = $_POST["numberOfTrips"];

        for ($i = 2; $i <=  $_SESSION['numberOfTrips']; $i++) {     
            if (isset($_POST["previousTravelDate$i"])) {
                $_SESSION["previousTravelDate$i"] = $_POST["previousTravelDate$i"];
            }  
        
            if (isset($_POST["previousTripTime$i"])) {
                $_SESSION["previousTripTime$i"] = $_POST["previousTripTime$i"];
            } 
    
            if (isset($_POST["periodOfPreviousTrip$i"])) {
                $_SESSION["periodOfPreviousTrip$i"] = $_POST["periodOfPreviousTrip$i"];
            } 
        }
    } 

    
    if (isset($_POST["drivingLicense"])) {
        $_SESSION["drivingLicense"] = $_POST["drivingLicense"];
    } 

    if (isset($_POST["drivingLicenseNumber"])) {
        $_SESSION["drivingLicenseNumber"] = $_POST["drivingLicenseNumber"];
    } 

    if (isset($_POST["stateDrivingLicense"])) {
        $_SESSION["stateDrivingLicense"] = $_POST["stateDrivingLicense"];
    } 

    if (isset($_POST["visa"])) {
        $_SESSION["visa"] = $_POST["visa"];
    } 

    if (isset($_POST["visaNumber"])) {
        $_SESSION["visaNumber"] = $_POST["visaNumber"];
    } 

    if (isset($_POST["visaIssueDate"])) {
        $_SESSION["visaIssueDate"] = $_POST["visaIssueDate"];
    } 
    

    /*
     if (isset($_FILES["visaToUpload"])) {
        $_SESSION["visaToUpload"] = $_FILES["visaToUpload"];
    } 
    if(isset($_POST['action'])){
        $visaFile = explode('.',  $_FILES['visaToUpload']['name']);
        if($visaFile[sizeof($visaFile)-1]!= 'jpeg' &&
        $visaFile[sizeof($visaFile)-1]!= 'jpg' &&
        $visaFile[sizeof($visaFile)-1]!= 'png'){
        }
        else{
          move_uploaded_file( $_FILES['visaToUpload']['tmp_name'], 'uploads/'. $_FILES['visaToUpload']['name']);
        }
    } */

    if (isset($_POST["sameTypeVisa"])) {
        $_SESSION["sameTypeVisa"] = $_POST["sameTypeVisa"];
    } 

    if (isset($_POST["sameCountryVisa"])) {
        $_SESSION["sameCountryVisa"] = $_POST["sameCountryVisa"];
    } 

    if (isset($_POST["fingerprints"])) {
        $_SESSION["fingerprints"] = $_POST["fingerprints"];
    }

    if (isset($_POST["lostVisa"])) {
        $_SESSION["lostVisa"] = $_POST["lostVisa"];
    } 

    if (isset($_POST["lostVisaDate"])) {
        $_SESSION["lostVisaDate"] = $_POST["lostVisaDate"];
    } 

    if (isset($_POST["explanationLostVisa"])) {
        $_SESSION["explanationLostVisa"] = $_POST["explanationLostVisa"];
    }

    if (isset($_POST["canceledVisa"])) {
        $_SESSION["canceledVisa"] = $_POST["canceledVisa"];
    }

    if (isset($_POST["explanationvisaCanceled"])) {
        $_SESSION["explanationvisaCanceled"] = $_POST["explanationvisaCanceled"];
    }

    if (isset($_POST["visaDenied"])) {
        $_SESSION["visaDenied"] = $_POST["visaDenied"];
    }

    if (isset($_POST["explanationvisaDenied"])) {
        $_SESSION["explanationvisaDenied"] = $_POST["explanationvisaDenied"];
    }

    if (isset($_POST["immigrantPetition"])) {
        $_SESSION["immigrantPetition"] = $_POST["immigrantPetition"];
    }

    if (isset($_POST["explanationimmigrantPetition"])) {
        $_SESSION["explanationimmigrantPetition"] = $_POST["explanationimmigrantPetition"];
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para preenchimento de DS 160 pag 3</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form action="pag4.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend><strong>Endereço e redes sociais</strong></legend>         
                    <div class="aplicantAddress">
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="zipCodeAplicant" type="text" id="styleInput" class="zipCodeAplicant" minLength = "5" maxlength = "8"> 
                                <small class="msgError">Apenas números</small>
                                <label class="labelInput">Insira o cep da sua residencia</label> 
                            </div>
                        </div>
    
                        <div class="automaticAddress">
                            <div class="form-control">
                                <input name="automaticStreetAplicant" class="automaticStreetAplicant" type="text" id="styleInput" required>
                                <label class="labelInput" >Endereço</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticAdressAplicant" type="text" id="styleInput" required>
                                <label class="labelInput" >Número/ Complemento</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticDistrictAplicant" class="automaticDistrictAplicant" type="text" id="styleInput" required>
                                <label class="labelInput" >Bairro</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automatiCityAplicant" class="automatiCityAplicant" type="text" id="styleInput" required>
                                <label class="labelInput" >Cidade</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticEstateAplicant" class="automaticEstateAplicant" type="text" id="styleInput" required>
                                <label class="labelInput" >Estado</label>
                            </div>
                        </div>
                    </div>
    
                    <label>País</label>
                    <select name="countryAplicant" class="country" required>
                        <option value="" selected disabled>Escolha</option>
                    </select>

                    <div class="tel">           
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="cellPhone" type="text" id="styleInput" class="error" minlength="9" maxlength="11" required>
                                <small>Apenas números</small>
                                <label class="labelInput">Celular com DDD</label> 
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="telResidential" type="text" id="styleInput" class="error" minlength="8" maxlength="11" >
                                <small>Apenas números</small>
                                <label class="labelInput">Telefone Residencial</label> 
                            </div>
                        </div>
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="telCommercial" type="text" id="styleInput" class="error" minlength="8" maxlength="11" >
                                <small>Apenas números</small>
                                <label class="labelInput">Telefone Comercial</label> 
                            </div>
                        </div>
                             
                        <h4>Você usou outros números de telefone celular nos últimos 5 anos?</h4>
                        <div class="radioButton">
                            <label>Sim</label>
                            <input type="radio" name="otherNumbersTel" value ="Sim" class="otherNumbersTelYes" required>
                            <label>Não</label>
                            <input type="radio" name="otherNumbersTel" value ="Não" class="otherNumbersTelNo" required>
                        </div>
                        <div class="otherNumberTel">
                            <div class="form-control">
                                <div class="inputNumControl">
                                    <input  name="otherNumberTel1" type="text" id="styleInput" class="error" minlength="8" maxlength="11" >
                                    <small>Apenas números</small>
                                    <label class="labelInput">Insira o outro número de telefone</label> 
                                </div>
                            </div>
                        </div>
                        <div class="addOtherTel">
                            <a href="##" class="addTel">Adicionar</a>
                            <a href="##" class="removeTel">Remover</a>
                        </div>
                    </div>                    

                    <h4>Você usou outros e-mails nos últimos 5 anos?</h4>
                    <div class="radioButton">
                        <label>Sim</label>
                        <input type="radio" name="otherAddresEmail" value ="Sim" class="otherAddresEmailYes" required>
                        <label>Não</label>
                        <input type="radio" name="otherAddresEmail" value ="Não" class="otherAddresEmailNo" required>
                    </div>
                    <div class="otherAddresEmail">
                        <div class="form-control">
                            <div class="otherEmail">
                                <input name="otherEmail1" type="email" id="styleInput" >
                                <label class="labelInput">Insira outro E-mail</label>
                            </div>
                        </div>
                    </div>
                    <div class="addOtherEmail">
                        <a href="##" class="addEmail">Adicionar</a>
                        <a href="##" class="removeEmail">Remover</a>
                    </div>

                    <h4>Plataforma de mídia Social</h4>
                    <div class="socialMedia">
                        <select name="socialMedia1" class="socialMediaSelect" required>
                            <option value="" selected disabled>Escolha</option>
                            <option value="Facebook">Facebook</option>
                            <option value="Instagram">Instagram</option>
                            <option value="Linkedin">LinkedIn</option>
                            <option value="Pinterest">Pinterest</option>
                            <option value="Twiter">Twiter</option>
                            <option value="Reddit">Reddit</option>
                            <option value="Youtube">YouTube</option>
                            <option value="Nenhuma">Nenhuma</option>
                        </select>

                        <div class="insertSocialMedia">
                            <div class="form-control">
                                <input name="username1" type="text" id="styleInput" >
                                <label class="labelInput">Insira o nome de usuário</label>
                                
                            </div>
                        </div>
                        <div class="addOtherSocialMedia">
                            <a href="##" class="addSM">Adicionar</a>
                            <a href="##" class="removeSM">Remover</a>
                        </div>
                    </div>                 

                <div class="passport">
                    <h4>Você possui passaporte?</h4>
                    <div class="radioButton">
                        <label>Sim</label>
                        <input type="radio" name="passport" value ="Sim" class="passportYes" required>
                        <label>Não</label>
                        <input type="radio" name="passport" value ="Não" class="passportNo" required>
                    </div>

                    <div class="countryPassport">
                        <h4>Seu passaporte é brasileiro?</h4>
                        <div class="radioButton">
                            <label>Sim</label>
                            <input type="radio" name="passportBrazil" value ="Sim" class="passportBrazilYes">
                            <label>Não</label>
                            <input type="radio" name="passportBrazil" value ="Não" class="passportBrazilNo">
                        </div>
                    </div>

                    <div class="passportAnotherCountry">
                        <div class="form-control">
                            <input name="foreignPassportNumber" type="text" id="styleInput" minlength="8" maxlength="8">
                            <label class="labelInput" >Insira o número do passaporte</label>
                        </div>

                        <div class="form-control">
                            <input name="foreignCityPassport" type="text" id="styleInput">
                            <label class="labelInput" >Cidade onde foi emitido o passaporte</label>
                        </div>

                        <div class="form-control">
                            <input name="foreignStatePassport" type="text" id="styleInput">
                            <label class="labelInput" >Estado</label>
                        </div>
                        
                        <label>País</label>
                        <select name="countryFromPassport" class="country" >
                            <option value="" selected disabled>Escolha</option>
                        </select>

                        <div class="form-control">
                            <label>Data de emissão do passaporte</label>
                            <input  class="insertDate" name="dateOfIssueOfForeignPassport" type="date"  min="2013-01-01" >    
                        </div>
                        <div class="form-control">
                            <label>Data de validade do passaporte</label>
                            <input  class="insertDate" name="foreignPassportExpiryDate" type="date"  min="2013-01-01" >    
                        </div>
    
                    </div>                    

                    <div class="numberPassport">
                        <div class="form-control">
                            <input name="passportNumber" type="text" id="styleInput" minlength="8" maxlength="8">
                            <label class="labelInput" >Insira o número do passaporte</label>
                        </div>

                        <label>Estado onde foi emitido o passaporte</label>
                        <select name="statePassport" class="state" >
                            <option value="" selected disabled>Escolha</option>
                            <option value="nd">Nenhuma das opções</option>
                        </select>

                        <div class="cityState">
                            <label >Cidade</label>
                            <select name="cityPassport" class="city" >
                            </select>
                        </div>

                        <div class="form-control">
                            <label>Data de emissão do passaporte</label>
                            <input  class="insertDate" name="passportIssueDate" type="date"  min="2013-01-01" >    
                        </div>
                        <div class="form-control">
                            <label>Data de validade do passaporte</label>
                            <input  class="insertDate" name="passportExpirationDate" type="date"  min="2013-01-01" >    
                        </div>
                    </div>

                    <h4>Já teve um passaporte perdido ou roubado?</h4>
                    <div class="radioButton">
                        <label>Sim</label>
                        <input type="radio" name="stolenPassport" value ="Sim" class="stolenPassportYes" required>
                        <label>Não</label>
                        <input type="radio" name="stolenPassport" value ="Não" class="stolenPassportNo" required>
                    </div>

                    <div class="stolenPassport">
                        <div class="explanation">
                            <p>Explique</p>
                            <textarea name="explanationStolenPassport" cols="50" rows="10" ></textarea>
                        </div>
                    </div>
                </div>
                
                <div class="form-control">   
                    <button type="submit"  name="action">Próximo</button>    
                </div>
                
            </fieldset>
        </form>
    </div>
    <script type="module" src="./pag3.js"></script> 
</body>
</html>






















