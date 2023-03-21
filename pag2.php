<?php
session_start();

    if (isset($_POST['firstName'])) {
    $_SESSION['firstName'] = $_POST['firstName'];
    }

    if (isset($_POST['surname'])) {
    $_SESSION['surname'] = $_POST['surname'];
    }

    if (isset($_POST['fullName'])) {
    $_SESSION['fullName'] = $_POST['fullName'];
    }

    if (isset($_POST['cpf'])) {
    $_SESSION['cpf'] = $_POST['cpf'];
    }

    if (isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
    }

    if (isset($_POST['otherNameSelect'])) {
    $_SESSION['otherNameSelect'] = $_POST['otherNameSelect'];
    }

    if (isset($_POST['otherNameSelect'])) {
    $_SESSION['otherNameSelect'] = $_POST['otherNameSelect'];
    }

    if (isset($_POST['otherNameUsed'])) {
    $_SESSION['otherNameUsed'] = $_POST['otherNameUsed'];
    }

    if (isset($_POST['nameTelecodeSelect'])) {
    $_SESSION['nameTelecodeSelect'] = $_POST['nameTelecodeSelect'];
    }

    if (isset($_POST['nameTelecodeSelect'])) {
    $_SESSION['nameTelecodeSelect'] = $_POST['nameTelecodeSelect'];
    }

    if (isset($_POST['nameTelecode'])) {
    $_SESSION['nameTelecode'] = $_POST['nameTelecode'];
    }

    if (isset($_POST['surnameTelecode'])) {
    $_SESSION['surnameTelecode'] = $_POST['surnameTelecode'];
    }

    if (isset($_POST['genderSelect'])) {
    $_SESSION['genderSelect'] = $_POST['genderSelect'];
    }

    if (isset($_POST['genderSelect'])) {
    $_SESSION['genderSelect'] = $_POST['genderSelect'];
    }

    if (isset($_POST['birth'])) {
    $_SESSION['birth'] = $_POST['birth'];
    }

    if (isset($_POST['stateOfBirth'])) {
    $_SESSION['stateOfBirth'] = $_POST['stateOfBirth'];
    }

    if (isset($_POST['otherCity'])) {
    $_SESSION['otherCity'] = $_POST['otherCity'];
    }

    if (isset($_POST['otherState'])) {
    $_SESSION['otherState'] = $_POST['otherState'];
    }

    if (isset($_POST['otherCountry'])) {
    $_SESSION['otherCountry'] = $_POST['otherCountry'];
    }

    if (isset($_POST['cityBirth'])) {
    $_SESSION['cityBirth'] = $_POST['cityBirth'];
    }

    if (isset($_POST['maritalStatus'])) {
    $_SESSION['maritalStatus'] = $_POST['maritalStatus'];
    }

    if (isset($_POST['nameSpouse'])) {
    $_SESSION['nameSpouse'] = $_POST['nameSpouse'];
    }

    if (isset($_POST['birthSpouse'])) {
    $_SESSION['birthSpouse'] = $_POST['birthSpouse'];
    }

    if (isset($_POST['stateBirthSpouse'])) {
    $_SESSION['stateBirthSpouse'] = $_POST['stateBirthSpouse'];
    }

    if (isset($_POST['otherCitySpouse'])) {
    $_SESSION['otherCitySpouse'] = $_POST['otherCitySpouse'];
    }

    if (isset($_POST['otherStateSpouse'])) {
    $_SESSION['otherStateSpouse'] = $_POST['otherStateSpouse'];
    }

    if (isset($_POST['countrySpouse'])) {
    $_SESSION['countrySpouse'] = $_POST['countrySpouse'];
    }

    if (isset($_POST['cityBirthSpouse'])) {
    $_SESSION['cityBirthSpouse'] = $_POST['cityBirthSpouse'];
    }

    if (isset($_POST['nameExSpose'])) {
    $_SESSION['nameExSpose'] = $_POST['nameExSpose'];
    }

    if (isset($_POST['birthExSpouse'])) {
    $_SESSION['birthExSpouse'] = $_POST['birthExSpouse'];
    }

    if (isset($_POST['stateBirthExSpouse'])) {
    $_SESSION['stateBirthExSpouse'] = $_POST['stateBirthExSpouse'];
    }

    if (isset($_POST['otherCityExSpouse'])) {
    $_SESSION['otherCityExSpouse'] = $_POST['otherCityExSpouse'];
    }

    if (isset($_POST['otherStateExSpouse'])) {
    $_SESSION['otherStateExSpouse'] = $_POST['otherStateExSpouse'];
    }

    if (isset($_POST['countryExSpouse'])) {
    $_SESSION['countryExSpouse'] = $_POST['countryExSpouse'];
    }

    if (isset($_POST['cityBirthExSpouse'])) {
    $_SESSION['cityBirthExSpouse'] = $_POST['cityBirthExSpouse'];
    }

    if (isset($_POST['dateMarried'])) {
    $_SESSION['dateMarried'] = $_POST['dateMarried'];
    }

    if (isset($_POST['dateDivorced'])) {
    $_SESSION['dateDivorced'] = $_POST['dateDivorced'];
    }

    if (isset($_POST['otherNationalitySelect'])) {
    $_SESSION['otherNationalitySelect'] = $_POST['otherNationalitySelect'];
    }

    if (isset($_POST['otherNationalitySelect'])) {
    $_SESSION['otherNationalitySelect'] = $_POST['otherNationalitySelect'];
    }

    if (isset($_POST['secondCitizenship'])) {
    $_SESSION['secondCitizenship'] = $_POST['secondCitizenship'];
    }

    if (isset($_POST['otherPassportSelect'])) {
    $_SESSION['otherPassportSelect'] = $_POST['otherPassportSelect'];
    }

    if (isset($_POST['otherPassportSelect'])) {
    $_SESSION['otherPassportSelect'] = $_POST['otherPassportSelect'];
    }

    if (isset($_POST['otherPassport'])) {
    $_SESSION['otherPassport'] = $_POST['otherPassport'];
    }

    if (isset($_POST['residentOtherSelect'])) {
    $_SESSION['residentOtherSelect'] = $_POST['residentOtherSelect'];
    }

    if (isset($_POST['residentOtherSelect'])) {
    $_SESSION['residentOtherSelect'] = $_POST['residentOtherSelect'];
    }

    if (isset($_POST['otherCountryResident'])) {
    $_SESSION['otherCountryResident'] = $_POST['otherCountryResident'];
    }

    if (isset($_POST['socialSecuritySelect'])) {
    $_SESSION['socialSecuritySelect'] = $_POST['socialSecuritySelect'];
    }

    if (isset($_POST['socialSecuritySelect'])) {
    $_SESSION['socialSecuritySelect'] = $_POST['socialSecuritySelect'];
    }

    if (isset($_POST['socialSecurity'])) {
    $_SESSION['socialSecurity'] = $_POST['socialSecurity'];
    }

    if (isset($_POST['idNumberEuaSelect'])) {
    $_SESSION['idNumberEuaSelect'] = $_POST['idNumberEuaSelect'];
    }

    if (isset($_POST['idNumberEuaSelect'])) {
    $_SESSION['idNumberEuaSelect'] = $_POST['idNumberEuaSelect'];
    }

    if (isset($_POST['idNumberEua'])) {
    $_SESSION['idNumberEua'] = $_POST['idNumberEua'];
    } 
?> 

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para preenchimento de DS 160 pag 2</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <form action="pag3.php" method="POST"  enctype="multipart/form-data">
            <fieldset>
                <legend><strong>Informações sobre viagem</strong></legend>
                <div class="visa">
                    <h4>Selecione o tipo de visto</h4>
                    <select name="visaType" class="visaType" required>
                        <option value="" selected disabled>Escolha</option>
                        <option value="Turismo">Turismo (B1/B2)</option>
                        <option value="Estudante Principal(F1)">Estudante Principal(F1)</option>
                        <option value="Cônjuge ou filho de Estudante (F2)">Cônjuge ou filho de Estudante (F2)</option>
                    </select>
                </div>

                <h4>Você fez planos específicos de viagem?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="plan" value ="Sim" class="travelPlanYes" required>
                    <label>Não</label>
                    <input type="radio" name="plan" value ="Não" class="travelPlanNo" required>
                </div>

                <div class="dateOfIntentionTravel">
                    <div class="form-control">
                        <label>Informe uma data aproximada de intenção de viagem</label>
                        <input class="insertDate" name= "approximateDateOfTravel" type="date" min="2023-01-01">    
                    </div>
                </div>

                <div class="travelItinerary">
                    <div class="form-control">
                        <label>Data de chegada nos EUA</label>
                        <input  class="insertDate" name="arryvalDate" type="date">    
                    </div>

                    <div class="form-control">
                        <input name="flightNumberArryval" type="text" id="styleInput">  
                        <label class="labelInput">Número do voo de chegada(se conhecido)</label>
                    </div>

                    <label >Local de desembarque</label>
                    <select name="landingPlace" class="stateUS">
                        <option value="" selected disabled>Escolha</option>
                    </select>

                    
                    <div class="form-control">
                        <label>Data de partida dos EUA</label>
                        <input  class="insertDate" name="departureDate" type="date" min="2023-01-01">    
                    </div>

                    <div class="form-control">
                        <input id="styleInput" type="text" name="flightNumberDeparture">
                        <label class="labelInput">Número do voo de partida(se conhecido)</label>
                    </div>

                
                    <label >Cidade de embarque</label>
                    <select name="boardingPlace" class="stateUS">
                        <option value="" selected disabled>Escolha</option>
                    </select>            
                </div>
            
                <div class="form-control">

                    <h4>Informe o local que você deseja visitar nos EUA</h4>
                    <select name="placeOfVisit" class="stateUS" required>
                        <option value="" selected disabled>Escolha</option>
                    </select> 

                    <div class="inputNumControl">
                        <input name="lengthOfStay" class="inputDateTravelUsa" type="text" required>
                        <small class="error">Apenas números</small>
                        <label class="labelDateTravelUsa"><strong>Tempo que pretende ficar nos EUA?</strong></label>
                    </div>
                    <select name="period" class="travelPeriod" required>
                        <option value="" selected disabled >Escolha</option>
                        <option value="dias">dias</option>
                        <option value="meses">meses</option>
                        <option value="anos">anos</option>
                    </select>
                    
            
                </div>
                
                <h4>Você tem o endereço de onde pretende ficar nos EUA?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="contactUS" value ="Sim" class="contactUSYes" required>
                    <label>Não</label>
                    <input type="radio" name="contactUS" value ="Não" class="contactUSNo" required>
                </div>
                <div class="contactUS">
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="nameContactUs" type="text" id="styleInput" class="error"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Nome completo do contato</label>
                        </div>  
                    </div>

                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="zipCodeContact" type="text" id="styleInput" class="error" minlength= "5" maxlength="5"> 
                            <small class="msgError">Apenas números</small>
                            <label class="labelInput">Cep</label>
                        </div>
                    </div>

                    <div class="form-control">
                        <input name="adressContactUs" type="text" id="styleInput" class="error"> 
                        <small class="msgError">Apenas letras</small>
                        <label class="labelInput">Endereço</label>
                    </div>

                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="telephoneContactUS" type="text" id="styleInput" class="error" minlength="8" maxlength="13"> 
                            <small class="msgError">Apenas números</small>
                            <label class="labelInput">Telefone</label>
                        </div>
                    </div>

                    <div class="form-control">
                        <input name="emailContactUS" type="email" id="styleInput">
                        <label class="labelInput">E-mail</label>
                    </div>

                    <div class="form-control">
                        <div class="inputControl">
                            <input name="cityContactUs" type="text" id="styleInput" class="error"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Cidade</label>
                        </div>
                    </div>

                    <label>Estado</label>
                    <select name="stateContactUS" class="stateUS">
                        <option value="" selected disabled>Escolha</option>
                    </select> 

                    <label>Qual é o relacionamento do contato com você</label>
                    <select name="relationship">
                        <option value="escolha" selected disabled>Escolha</option>
                        <option value="parente">Parente</option>
                        <option value="conjuge">Cônjuge</option>
                        <option value="amigo">Amigo</option>
                        <option value="associadoComercial">Associado Comercial</option>
                        <option value="empregador">Empregador</option>
                        <option value="escola">Escola</option>
                        <option value="outros">Outros</option>
                    </select>

                </div>

                <div class="respForTrip">
                    <h4>Pessoa/ Entidade pagando ela viagem </h4>
                    <select name="respForTrip" id="respForTripSelect" required>
                        <option value="" selected disabled>Escolha</option>
                        <option value="Recursos próprios">Recursos próprios</option>
                        <option value="Outra pessoa">Outra pessoa</option>
                        <option value="Empregador">Empregador</option>
                    </select>
                </div>

                <div class="sponsor">
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="nameSponsor" type="text" id="styleInput" class="error"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Nome do responsável pela viagem</label>
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="inputControl">
                            <input name="surnameSponsor" type="text" id="styleInput" class="error"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Sobrenome do responsável pela viagem</label>    
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="telSponsor" type="text" id="styleInput" class="error" minLength="8" maxlength="13"> 
                            <small class="msgError">Apenas números</small>
                            <label class="labelInput">Telefone</label>
                        </div>
                    </div>

                    <div class="form-control">
                        <input type="email" name="emailSponsor"  id="styleInput">
                        <label class="labelInput">Endereço de e-mail</label>
                    </div>

                    <h4>Relacionamento com você</h4>
                    <select name= "relationshipWithSponsor">
                        <option value="" selected disabled>Escolha</option>
                        <option value="pai-mae">Pai/Mãe</option>
                        <option value="filho">Filho(a)</option>
                        <option value="conjuge">Cônjuge</option>
                        <option value="outro-parente">Outro parente</option>
                        <option value="amigo">Amigo(a)</option>
                        <option value="outros">De outros</option>
                    </select>

                    <h4>O endereço do Sponsor é o mesmo que o seu?</h4>
                    <div class="radioButton">
                        <label>Sim</label>
                        <input type="radio" name="sameAddress" value ="Sim" class="sameAddressYes">
                        <label>Não</label>
                        <input type="radio" name="sameAddress" value ="Não" class="sameAddressNo">
                    </div>
                    
                    <div class="sponsorAddress">
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="zipCodeSponsor" type="text" id="styleInput" class="zipCodeSponsor" minlength="5" maxlength="8" > 
                                <small class="msgError">Apenas números</small>
                                <label class="labelInput">Insira o cep</label>
                            </div>
                        </div>

                        <div class="automaticAddress">
                            <div class="form-control">
                                <input name="automaticStreetSponsor" class="automaticStreetSponsor" type="text" id="styleInput">
                                <label class="labelInput">Endereço</label>
                            </div>


                            <div class="form-control">
                                <input name="numberAdressSponsor" type="text" id="styleInput">
                                <label class="labelInput">Número/ Complemento</label>
                            </div>

                            <div class="form-control">
                                <input name="automatiDistrictSponsor" class="automatiDistrictSponsor" type="text" id="styleInput">
                                <label class="labelInput">Bairro</label>
                            </div>


                            <div class="form-control">
                                <input name="automatiCitySponsor" class="automatiCitySponsor" type="text" id="styleInput">
                                <label class="labelInput">Cidade</label>
                            </div>
                            
                            <div class="form-control">
                                <input name="automaticEstateSponsor" class="automaticEstateSponsor" type="text" id="styleInput">
                                <label class="labelInput">Estado</label>
                            </div>
                            
                        </div>
                    </div>
                        
                    <label>País</label>
                    <select name="countrySponsor" class="country" >
                        <option value="" selected disabled>Escolha</option>
                    </select>
                </div>
                

                <div class="travelCompanion">
                        <h4>Há outras pessoas viajando com você?</h4>
                    <div class="radioButton">
                        <label>Sim</label>
                        <input type="radio" name="travelCompanion" value ="Sim" class="travelCompanionYes" required>
                        <label>Não</label>
                        <input type="radio" name="travelCompanion" value ="Não" class="travelCompanionNo" required>
                    </div>
                </div>

                <div class="organiozationTravel">
                    <h4>Você está viajando como parte de alguma organizaçao?(Escola, Empresa, etc.)</h4>
                    <div class="radioButton">
                        <label>Sim</label>
                        <input type="radio" name="organiozationTravel" value ="Sim" class="organiozationTravelYes">
                        <label>Não</label>
                        <input type="radio" name="organiozationTravel" value ="Não" class="organiozationTravelNo">
                    </div>
                    
                    <div class="organizationName">
                        <div class="form-control">
                            <input name="organizationName" type="text" id="styleInput" class="error"> 
                            <label class="labelInput">Nome da Organização</label>
                        </div>
                    </div>
                </div>

                <div class="travelersList">
                    <h4>Lista de viajantes</h4>                    
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="travelersName1" type="text" id="styleInput" class="error"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Nome completo do viajante</label>
                        </div>
                    </div>

                    <div class="relationshipTraveler">
                        <label>Relacionamento com você</label>
                        <select name="relationshipWithTheTraveler1">
                                <option value="nd" selected disabled>Escolha</option>
                                <option value="Pai-Mãe">Pai/Mãe</option>
                                <option value="Filho(a)">Filho(a)</option>
                                <option value="Cônjuge">Cônjuge</option>
                                <option value="Outro parente">Outro parente</option>
                                <option value="Amigo">Amigo(a)</option>
                                <option value="Outros">De outros</option>
                            </select>
                    </div>
                </div>
                    
                <div class="addAnotherTraveler">
                    <a href="##" class="addTraveler">Adicionar outro viajante</a>
                    <a href="##" class="removeTraveler">Remover</a>
                </div>
                             
                         
                <div class="pastTripsToUsa">
                    <h4>Você já esteve nos EUA?</h4>
                    <div class="radioButton">
                        <label>Sim</label>
                        <input type="radio" name="pastTripsToUsa" value ="Sim" class="pastTripsToUsaYes" required>
                        <label>Não</label>
                        <input type="radio" name="pastTripsToUsa" value ="Não" class="pastTripsToUsaNo" required>
                    </div>
                </div>

                <div class="travelUsa">   
                    <h4>Informe as últimas 5 viagens aos EUA</h4>
                    
                    <div class="arrivalDate">
                        <div class="form-control">
                            <label>Data de chegada aos EUA</label>
                            <input name="previousTravelDate1" class="insertDate" type="date" id="birth" min="1900-01-01">    
                        </div>
                    </div>
                    
                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="previousTripTime1" type="text" class="inputDateTravelUsa" class="error">
                            <label class="labelDateTravelUsa"><strong>Informe o tempo que permaneceu:</strong></label >
                            <small class="error">Apenas números</small>
                        </div>
                        <select name="periodOfPreviousTrip1" class="travelPeriod">
                            <option value="escolha" selected disabled>escolha</option>
                            <option value="dias">dias</option>
                            <option value="meses">meses</option>
                            <option value="anos">anos</option>
                        </select>
                    </div>
                </div>

                <div class="addPreviousTrip">
                    <a href="##" class="addTravel">Adicionar</a>
                    <a href="##" class="removeTravel">Remover</a>
                </div>

                <div class="drivingLicense">
                    <h4>Você já teve ou tem uma carteira de habilitação dos EUA?</h4>
                    
                    <div class="radioButton">
                        <label>Sim</label>
                        <input type="radio" name="drivingLicense" value ="Sim" class="drivingLicenseYes">
                        <label>Não</label>
                        <input type="radio" name="drivingLicense" value ="Não" class="drivingLicenseNo">
                    </div>
                    <div class="drivingLicenseNumber">
                        <div class="form-control">
                            <input name="drivingLicenseNumber" type="text" id="styleInput" maxlength="12" minlength="12">
                            <label class="labelInput">Número da carteira de motorista dos EUA</label>
                        </div>
                        
                        <label>Estado onde foi emitida a carteira de motorista</label>
                        <select name="stateDrivingLicense" class="stateUS">
                            <option value="" selected disabled>Escolha</option>
                        </select>
                    </div>
                </div>
                <div class="visa">
                    <h4>Você ja teve um visto americano?</h4>
                    <div class="radioButton">
                        <label>Sim</label>
                        <input type="radio" name="visa" value ="Sim" class="visaYes" required>
                        <label>Não</label>
                        <input type="radio" name="visa" value ="Não" class="visaNo" required>
                    </div>
                    <div class="visaNumber">
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="visaNumber" type="text" id="styleInput" class="InputControl" maxlength="8" placeholder="Numeração Vermelha do lado inferior direito">
                                <small>Apenas números</small>
                                <label class="labelInput">Insira o número do seu último visto</label>
                            </div>
                        </div>
                        
                        <div class="form-control">
                            <label>Data de emissão do visto</label>
                            <input class="insertDate" name="visaIssueDate" type="date"  min="1920-01-01" >    
                        </div>

                        <h4>Você está solicitando o mesmo tipo de visto?</h4>
                        <div class="radioButton">
                            <label>Sim</label>
                            <input type="radio" name="sameTypeVisa" value ="Sim">
                            <label>Não</label>
                            <input type="radio" name="sameTypeVisa" value ="Não">
                        </div>

                        <h4>Você está aplicando no mesmo país onde aplicou o visto mencionado?</h4>
                        <div class="radioButton">
                            <label>Sim</label>
                            <input type="radio" name="sameCountryVisa" value ="Sim">
                            <label>Não</label>
                            <input type="radio" name="sameCountryVisa" value ="Não">
                        </div>

                        <h4>Você forneceu as digitais dos 10 dedos na sua solicitação de visto anterior?</h4>
                        <div class="radioButton">
                            <label>Sim</label>
                            <input type="radio" name="fingerprints" value ="Sim">
                            <label>Não</label>
                            <input type="radio" name="fingerprints" value ="Não">
                        </div>

                        <h4>Você já teve um visto americano perdido ou roubado?</h4>
                        <div class="radioButton">
                            <label>Sim</label>
                            <input type="radio" name="lostVisa" value ="Sim" class="lostVisaYes">
                            <label>Não</label>
                            <input type="radio" name="lostVisa" value ="Não" class="lostVisaNo">
                        </div>
                        <div class="lostVisa">
                            <div class="form-control">
                                <label>Informe aproximadamente o ano em que seu visto foi perdido ou roubado</label>
                                <input name= "lostVisaDate" class="insertDate" type="month" min="1920-01">
                            </div>
                            <div class="explanation">
                                <p>Explique</p>
                                <textarea name="explanationLostVisa"></textarea>
                            </div>
                        </div>

                        <h4>Você já teve um visto americano cancelado ou revogado?</h4>
                        <div class="radioButton">
                            <label>Sim</label>
                            <input type="radio" name="canceledVisa" value ="Sim" class="canceledVisaYes">
                            <label>Não</label>
                            <input type="radio" name="canceledVisa" value ="Não" class="canceledVisaNo">
                        </div>
                        <div class="canceledVisa">
                            <div class="explanation">
                                <p>Explique</p>
                                <textarea name="explanationvisaCanceled"></textarea>
                            </div>
                        </div>

                    </div>
                </div>

                <h4>Você já teve um visto americano negado ou teve a sua admissão nos EUA negada?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="visaDenied" value ="Sim" class="visaDeniedYes" required>
                    <label>Não</label>
                    <input type="radio" name="visaDenied" value ="Não" class="visaDeniedNo" required>
                </div>   
                <div class="visaDenied">
                    <div class="explanation">
                        <p>Explique</p>
                        <textarea name="explanationvisaDenied" ></textarea>
                    </div>
                </div>

                <h4>Alguém já entrou com uma petição de imigrante em seu nome nos Serviços dos de  e imigração dos EUA?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="immigrantPetition" value ="Sim" class="immigrantPetitionYes" required>
                    <label>Não</label>
                    <input type="radio" name="immigrantPetition" value ="Não" class="immigrantPetitionNo" required>
                </div>
                <div class="immigrantPetition">
                    <div class="explanation">
                        <p>Explique</p>
                        <textarea name="explanationimmigrantPetition"></textarea>
                    </div>
                </div>

                <div class="contactStudent">
                    <h3>Informe dois contatos no Brasil</h3>
                    <div class="contactStudentBR1">  
                        <h4>Primeiro Contato</h4>
                        <div class="form-control">
                            <div class="inputControl">       
                                <input name="contactNameBR1" type="text" id="styleInput" class="error"> 
                                <small class="msgError">Apenas letras</small>
                                <label class="labelInput">Nome Completo</label>
                            </div>               
                        </div>
    
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input  type="text" name="contactTelBR1" id="styleInput" class="error">
                                <small>Apenas números</small>
                                <label class="labelInput">Telefone</label> 
                            </div>
                        </div>
    
                        <div class="form-control">
                            <input name="contactEmailBR1" type="email" id="styleInput">
                            <label class="labelInput">E-mail</label>
                        </div>
    
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="zipCodeContactBR1" type="text" id="styleInput" class="zipCodeContactBR1" minLength = "5" maxlength = "8"> 
                                <small class="msgError">Apenas números</small>
                                <label class="labelInput" >Insira o cep</label>
                            </div>
                        </div>
    
                        <div class="automaticAddress">
                            <div class="form-control">
                                <input name="automaticStreetcontactBR1" class="automaticStreetContactBR1" type="text" id="styleInput">
                                <label class="labelInput">Endereço</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticAdressContactBR1" type="text"  id="styleInput">
                                <label class="labelInput">Número/ Complemento</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticDistrictcontactBR1" type="text" class="automaticDistrictContactBR1" id="styleInput">
                                <label class="labelInput">Bairro</label>
                            </div>
    
    
                            <div class="form-control">
                                <input name="automatiCitycontactBR1" type="text" class="automatiCityContactBR1" id="styleInput">
                                <label class="labelInput">Cidade</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticEstatecontactBR1" type="text" class="automaticEstateContactBR1" id="styleInput">
                                <label class="labelInput">Estado</label>
                            </div>
                        </div>
                    </div>
                 
                    <div class="contactStudentBR2">  
                        <h4>Segundo contato Contato</h4>
    
                        <div class="form-control">
                            <div class="inputControl"> 
                                <input name="contactNameBR2" type="text" id="styleInput" class="error"> 
                                <small class="msgError">Apenas letras</small>
                                <label class="labelInput">Nome Completo</label>
                            </div>               
                        </div>
    
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input  type="text" name="contactTelBR2" id="styleInput" class="error">
                                <small>Apenas números</small>
                                <label class="labelInput">Telefone</label> 
                            </div>
                        </div>
    
                        <div class="form-control">
                            <input name="contactEmailBR2" type="email" id="styleInput">
                            <label class="labelInput">E-mail</label>
                        </div>
    
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="zipCodeContactBR2" type="text" id="styleInput" class="zipCodeContactBR2" minLength = "5" maxlength = "8"> 
                                <small class="msgError">Apenas números</small>
                                <label class="labelInput" >Insira o cep</label>
                            </div>
                        </div>
    
                        <div class="automaticAddress">
                            <div class="form-control">
                                <input name="automaticStreetContactBR2" class="automaticStreetContactBR2" type="text" id="styleInput">
                                <label class="labelInput">Endereço</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticAdressContactBR2" type="text" id="styleInput">
                                <label class="labelInput">Número/ Complemento</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticDistriCtcontactBR2" type="text" class="automaticDistrictContactBR2" id="styleInput">
                                <label class="labelInput">Bairro</label>
                            </div>
    
    
                            <div class="form-control">
                                <input name="automatiCityContactBR2" type="text" class="automatiCityContactBR2" id="styleInput">
                                <label class="labelInput">Cidade</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticEstateContactBR2" type="text" class="automaticEstateContactBR2" id="styleInput">
                                <label class="labelInput">Estado</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-control">
                    <button type="submit"  name="action">Próximo</button>        
                </div>

            </fieldset>
        </form>
    </div>
    <script type="module" src="./pag2.js"></script> 
</body>
</html>