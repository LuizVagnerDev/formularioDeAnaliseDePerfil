<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$form = "
            <head>
                <style>
                    
                    h3{ background-color: gray; 
                        margin: 0px;
                        padding: 2px;
                    }
                    h4{ background-color: rgb(234, 234, 234);; 
                        margin: 0px;
                        padding: 2px;
                    }
                    p{ background-color: darkgray;
                        margin: 0px;
                        padding: 2px;
                    }    
                </style>
            </head>"

    #region formulário página 1
    ."<h2>Dados pessoais</h2>"
    ."<h3>Nome Completo:</h3> "."<p>".$_SESSION['fullName']."</p>"
    ."<h3>CPF:</h3> "."<p>".$_SESSION['cpf']."</p>"
    ."<h3>E-mail:</h3> "."<p>".$_SESSION['email']."</p>"

    ."<h3>Já utilizou outro nome?</h3> "."<p>".$_SESSION['otherNameSelect']."</p>";  
    if($_SESSION['otherNameSelect'] == 'Sim'){    
        if(empty($_SESSION['otherNameUsed'])){
            $_SESSION['emptyOtherNameUsed'] = "O campo é obrigatório";
            die( $_SESSION['emptyOtherNameUsed']);
        }
        $form .=  "<h3>Outro nome utilizado:</h3> "."<p>".$_SESSION['otherNameUsed']."</p>";
    }

    $form .= "<h3>Você tem um código que represente seu nome?</h3> "."<p>".$_SESSION['nameTelecodeSelect']."</p>";
    if($_SESSION['nameTelecodeSelect'] == 'Sim'){
        $form .= "<h3>Nome por telecódigo:</h3> "."<p>".$_SESSION['nameTelecode']."</p>";
        $form .= "<h3>Sobrenome por telecódigo:</h3> "."<p>".$_SESSION['surnameTelecode']."</p>";
    }

    $form .= "<h3>Sexo:</h3>"."<p>".$_SESSION['genderSelect']."</p>";
    $form .= "<h3>Data de nascimento:</h3> ";
    if ($_SESSION['birth']) { //TEM ALGO NO POST?
        
        //Explode transforma uma string num vetor, separando os elementos a partir do char específicado.
        $vetDate = explode("-", $_SESSION['birth']);

        /*
            echo "<pre>".print_r($vetDate)."</pre>";

            Exemplo da saída Array ( [0] => 27 [1] => 06 [2] => 2018 )
        */

        $_SESSION['birth'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];

       $form .= "<p>".$_SESSION['birth']."</p>";
    }

    if($_SESSION['stateOfBirth'] == 'nd'){
        $form .= "<h3>Cidade de nascimento:</h3> "."<p>".$_SESSION['otherCity']."</p>";
        $form .= "<h3>Estado de nascimento:</h3> "."<p>".$_SESSION['otherState']."</p>";
        $form .= "<h3>País nascimento:</h3> "."<p>".$_SESSION['otherCountry']."</p>";
    }
    else{
        $form .= "<h3>Cidade de nascimento:</h3> "."<p>".$_SESSION['cityBirth']."</p>";
        $form .= "<h3>Estado de nascimento:</h3> "."<p>".$_SESSION['stateOfBirth']."</p>";

    }

    $form .= "<h3>Estado civil:</h3> "."<p>".$_SESSION['maritalStatus']."</p>";
    if($_SESSION["maritalStatus"] =='Casado(a)' ||$_SESSION["maritalStatus"] =='União estável'||
        $_SESSION["maritalStatus"] =='Viúvo(a)'){

        $form .= "<h2>Dados do(a) cônjuge</h2>";
        $form .= "<h3>Nome:</h3> "."<p>".$_SESSION['nameSpouse']."</p>";
        $form .= "<h3>Data de nascimento:</h3>";
        if ($_SESSION['birthSpouse']) { 
            $vetDate = explode("-", $_SESSION['birthSpouse']);
    
            $_SESSION['birthSpouse'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
    
           $form .= "<p>".$_SESSION['birthSpouse']."</p>";
        }

        if($_SESSION['stateBirthSpouse'] == 'nd'){
            $form .= "<h3>Cidade de nascimento:</h3> "."<p>".$_SESSION['otherCitySpouse']."</p>";
            $form .= "<h3>Estado de nascimento:</h3> "."<p>".$_SESSION['otherStateSpouse']."</p>";
            $form .= "<h3>País nascimento:</h3> "."<p>".$_SESSION['countrySpouse']."</p>";
        }
        else{
            $form .= "<h3>Cidade de nascimento:</h3> "."<p>".$_SESSION['cityBirthSpouse']."</p>";
            $form .= "<h3>Estado de nascimento:</h3> "."<p>".$_SESSION['stateBirthSpouse']."</p>";
        
        }
    }
    if($_SESSION["maritalStatus"] =='Divorciado(a)'){
        $form .= "<h2>Dados do(a) ex-cônjuge</h2>";
        $form .= "Nome:</h3> "."<p>".$_SESSION['nameExSpose']."</p>";
        $form .= "Data de nascimento:</h3>";
        if ($_SESSION['birthExSpouse']) { 
            $vetDate = explode("-", $_SESSION['birthExSpouse']);
    
            $_SESSION['birthExSpouse'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
    
           $form .= "<p>".$_SESSION['birthExSpouse']."</p>";
        }


        if($_SESSION['stateBirthExSpouse'] == 'nd'){
            $form .= "<h3>Cidade de nascimento:</h3> "."<p>".$_SESSION['otherCityExSpouse']."</p>";
            $form .= "<h3>Estado de nascimento:</h3> "."<p>".$_SESSION['otherStateExSpouse']."</p>";
            $form .= "<h3>País nascimento:</h3> "."<p>".$_SESSION['countryExSpouse']."</p>";
        }
        else{
            $form .= "<h3>Cidade de nascimento:</h3> "."<p>".$_SESSION['cityBirthExSpouse']."</p>";
            $form .= "<h3>Estado de nascimento:</h3> "."<p>".$_SESSION['stateBirthExSpouse']."</p>";
        
        }
        $form .= "<h3>Data de casamento:</h3>";
        if ($_SESSION['dateMarried']) { 
            $vetDate = explode("-", $_SESSION['dateMarried']);
    
            $_SESSION['dateMarried'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
    
           $form .= "<p>".$_SESSION['dateMarried']."</p>";
        }

        $form .= "<h3>Data de divórcio:</h3>";
        if ($_SESSION['dateDivorced']) { 
            $vetDate = explode("-", $_SESSION['dateDivorced']);
    
            $_SESSION['dateDivorced'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
    
           $form .= "<p>".$_SESSION['dateDivorced']."</p>";
        }
    }

    $form .= "<h2>Informações Internacionais</h2>";

    $form .= "<h3>Possui dupla cidadania?</h3>  "."<p>".$_SESSION['otherNationalitySelect']."</p>";
    if($_SESSION['otherNationalitySelect'] == 'Sim'){
        $form .= "<h3>País que possui a segunda cidadania:</h3> "."<p>".$_SESSION['secondCitizenship']."</p>";
        $form .= "<h3>Possui passaporte desse país?</h3>  "."<p>".$_SESSION['otherPassportSelect']."</p>";
        if($_SESSION['otherPassportSelect'] == 'Sim'){
            $form .= "<h3>Número do passaporte estrangeiro :</h3> "."<p>".$_SESSION['otherPassport']."</p>";
        }
    }

    $form .= "<h3>Residente permanente de outro país?</h3> "."<p>".$_SESSION['residentOtherSelect']."</p>";
    if($_SESSION['residentOtherSelect'] == 'Sim'){
        $form .= "<h3>País de residencia permanente :</h3> "."<p>".$_SESSION['secondCitizenship']."</p>";
    }

    $form .= "<h3>Possui Social Security?</h3> "."<p>".$_SESSION['socialSecuritySelect']."</p>";
    if($_SESSION['socialSecuritySelect'] == 'Sim'){
        $form .= "<h3>Número do Social Security :</h3> "."<p>".$_SESSION['socialSecurity']."</p>";
    }

    $form .= "<h3>Possui (ITIN /TAX-ID)?</h3> "."<p>".$_SESSION['idNumberEuaSelect']."</p>";
    if($_SESSION['idNumberEuaSelect'] == 'Sim'){
        $form .= "<h3>Número do ITIN /TAX-ID:</h3> "."<p>".$_SESSION['idNumberEua']."</p>";
    }
#endregion

    #region formulário página 2
$form .= "<h2>Informações sobre viagem</h2>";

    $form .="<h3>Tipo de visto:</h3>"."<p>".$_SESSION['visaType']."</p>";

    $form .="<h3>Você fez planos específicos de viagem?(tem passagem comprada?)</h3>"."<p>".$_SESSION['plan']."</p>";
    if($_SESSION['plan'] == 'Sim'){
        $form .= "<h3>Data de chegada nos EUA</h3>";
        if ($_SESSION['arryvalDate']) { 
            $vetDate = explode("-", $_SESSION['arryvalDate']);
    
            $_SESSION['arryvalDate'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
    
           $form .= "<p>".$_SESSION['arryvalDate']."</p>";
        }

        $form .= "<h3>Número do voo de chegada(se conhecido)</h3> "."<p>".$_SESSION['flightNumberArryval']."</p>";
        $form .= "<h3>Local de desembarque</h3> "."<p>".$_SESSION['landingPlace']."</p>";
        $form .= "<h3>Data de partida dos EUA</h3>";
        if ($_SESSION['departureDate']) { 
            $vetDate = explode("-", $_SESSION['departureDate']);
    
            $_SESSION['departureDate'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
    
           $form .= "<p>".$_SESSION['departureDate']."</p>";
        }

        $form .= "<h3>Número do voo de partida(se conhecido)</h3> "."<p>".$_SESSION['flightNumberDeparture']."</p>";
        $form .= "<h3>Local de embarque</h3> "."<p>".$_SESSION['boardingPlace']."</p>";
    }
    if($_SESSION['plan'] == 'Não'){
        $form .= "<h3>Data de intenção de viagem:</h3>";
        if ($_SESSION['approximateDateOfTravel']) { 
            $vetDate = explode("-", $_SESSION['approximateDateOfTravel']);
    
            $_SESSION['approximateDateOfTravel'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
    
           $form .= "<p>".$_SESSION['approximateDateOfTravel']."</p>";
        }
    }
    $form .= "<h3>Local que pretende visitar:</h3>"."<p>".$_SESSION['placeOfVisit']."</p>";
    $form .= "<h3>Tempo pretende ficar nos EUA:</h3> "."<p>".$_SESSION['lengthOfStay']." ".$_SESSION['period']."</p>";
    $form .= "<h3>Tem o endereço de onde pretende ficar? </h3> "."<p>".$_SESSION['contactUS']."</p>";
    
    if($_SESSION['contactUS'] == 'Sim'){
        $form .= "<h3>Nome do contato:</h3> "."<p>".$_SESSION['nameContactUs']."</p>";
        $form .= "<h3>Cep:</h3> "."<p>".$_SESSION['zipCodeContact']."</p>";
        $form .= "<h3>Endereço:</h3> "."<p>".$_SESSION['adressContactUs']."</p>";
        $form .= "<h3>Telefone:</h3> "."<p>".$_SESSION['telephoneContactUS']."</p>";
        $form .= "<h3>E-mail:</h3> "."<p>".$_SESSION['emailContactUS']."</p>";
        $form .= "<h3>Cidade:</h3> "."<p>".$_SESSION['cityContactUs']."</p>";
        $form .= "<h3>Estado:</h3> "."<p>".$_SESSION['stateContactUS']."</p>";
        $form .= "<h3>Relacionamento com você:</h3> "."<p>".$_SESSION['relationship']."</p>";      
    }

    $form .= "<h3>Responsável pela viagem:</h3> "."<p>".$_SESSION['respForTrip']."</p>";  

    if($_SESSION['respForTrip'] == 'Outra pessoa'){
        $form .= "<h2>Dados do Sponsor:</h2>";
        $form .= "<h3>Nome do responsável pela viagem:</h3> "."<p>".$_SESSION['nameSponsor']."</p>";
        $form .= "<h3>Sobrenome do responsável pela viagem:</h3> "."<p>".$_SESSION['surnameSponsor']."</p>";
        $form .= "<h3>Telefone:</h3> "."<p>".$_SESSION['telSponsor']."</p>";
        $form .= "<h3>E-mail:</h3> "."<p>".$_SESSION['emailSponsor']."</p>";
        $form .= "<h3>Relacionamento com você:</h3> "."<p>".$_SESSION['relationshipWithSponsor']."</p>";
        $form .= "<h3>O endereço do Sponsor é o mesmo que o seu?</h3> "."<p>".$_SESSION['sameAddress']."</p>";

        if($_SESSION['sameAddress'] == 'Não'){
            $form .= "<h3>Cep do Sponsor:</h3> "."<p>".$_SESSION['zipCodeSponsor']."</p>";
            $form .= "<h3>Endereço do Sponsor:</h3> "."<p>".$_SESSION['automaticStreetSponsor']."</p>";
            $form .= "<h3>Número/Complemento:</h3> "."<p>".$_SESSION['numberAdressSponsor']."</p>";
            $form .= "<h3>Bairro:</h3> "."<p>".$_SESSION['automatiDistrictSponsor']."</p>";
            $form .= "<h3>Cidade:</h3> "."<p>".$_SESSION['automatiCitySponsor']."</p>";
            $form .= "<h3>Estado:</h3> "."<p>".$_SESSION['automaticEstateSponsor']."</p>";      
        }   
    }

    $form .= "<h3>Há outras pessoas viajando com você?</h3> "."<p>".$_SESSION['travelCompanion']."</p>";
    
    if($_SESSION['travelCompanion'] == 'Sim'){
        
        $form .= "<h3>Você está viajando como parte de alguma organizaçao?(Escola, Empresa, etc.)</h3> "."<p>".$_SESSION['organiozationTravel']."</p>";
        if($_SESSION['organiozationTravel'] == 'Sim'){
            $form .= "<h3>Nome da Organização:</h3> "."<p>".$_SESSION['organizationName']."</p>";   
        }
        else{  
            $form .= "<h2>Lista de viajantes:</h2>";
            $numberOfTravelers = $_SESSION['numberOfTravelers'];

            if(isset($numberOfTravelers)){
                $form .= "<h3>Nome do Viajante:</h3> "."<p>".$_SESSION['travelersName1']."</p>";
                $form .= "<h3>Relacionamento com você:</h3> "."<p>".$_SESSION['relationshipWithTheTraveler1']."</p>";
                for ($i = 2; $i <=  $numberOfTravelers; $i++) {
                    $travelersName = $_SESSION["travelersName$i"];
                    $relationshipWithTheTraveler = $_SESSION["relationshipWithTheTraveler$i"];

                    $form .= "<h3>Nome do Viajante:</h3> "."<p>".$travelersName."</p>";
                    $form .= "<h3>Relacionamento com você:</h3> "."<p>".$relationshipWithTheTraveler."</p>";
                }  
            }
        } 
    }

    $form .= "<h3>Você já viajou para os EUA?</h3> "."<p>".$_SESSION['pastTripsToUsa']."</p>";

    if($_SESSION['pastTripsToUsa'] == 'Sim'){
        $form .= "<h2>Viagens anteriores para os EUA</h2>";
        $numberOfTrips  = $_SESSION['numberOfTrips'];
        if(isset($numberOfTrips)){
            $form .= "<h3>Data de chegada:</h3>";
            if ($_SESSION['previousTravelDate1']) { 
                $vetDate = explode("-", $_SESSION['previousTravelDate1']);
        
                $_SESSION['previousTravelDate1'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
        
               $form .= "<p>".$_SESSION['previousTravelDate1']."</p>";
            }

            $form .= "<h3>Tempo de permanência</h3> "."<p>".$_SESSION['previousTripTime1']." ".$_SESSION['periodOfPreviousTrip1']."</p>";
            for ($i = 2; $i <=  $numberOfTrips; $i++) {           
                $previousTravelDate = $_SESSION["previousTravelDate$i"];
                $previousTripTime =  $_SESSION["previousTripTime$i"];
                $periodOfPreviousTrip = $_SESSION["periodOfPreviousTrip$i"];

                $form .= "<h3>Data de chegada:</h3>";
                if ($previousTravelDate) { 
                    $vetDate = explode("-", $previousTravelDate);
            
                    $previousTravelDate = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
            
                   $form .= "<p>".$previousTravelDate."</p>";
                }

                $form .= "<h3>Tempo de permanência</h3> "."<p>".$previousTripTime." ".$periodOfPreviousTrip."</p>";
            }
            
        }
        $form .= "<h3>Você já teve ou tem uma carteira de habilitação dos EUA?</h3> "."<p>".$_SESSION['drivingLicense']."</p>";
        if($_SESSION['drivingLicense'] == 'Sim'){
            $form .= "<h3>Número da carteira de motorista dos EUA:</h3> "."<p>".$_SESSION['drivingLicenseNumber']."</p>";
            $form .= "<h3>Estado onde foi emitida a carteira de motorista:</h3> "."<p>".$_SESSION['stateDrivingLicense']."</p>";
        }
    }

    $form .= "<h3>Você ja teve um visto americano?</h3> "."<p>".$_SESSION['visa']."</p>";
    
        if($_SESSION['visa'] == 'Sim'){
            $form .= "<h3>Insira o número do seu último visto:</h3> "."<p>".$_SESSION['visaNumber']."</p>";

            $form .= "<h3>Data de emissão do visto:</h3>";
            if ($_SESSION['visaIssueDate']) { 
                $vetDate = explode("-", $_SESSION['visaIssueDate']);
        
                $_SESSION['visaIssueDate'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
        
               $form .= "<p>".$_SESSION['visaIssueDate']."</p>";
            }
            
             $form .= "<h3>Você está solicitando o mesmo tipo de visto?</h3> "."<p>".$_SESSION['sameTypeVisa']."</p>";     
           
            $form .= "<h3>Você está aplicando no mesmo país onde aplicou o visto mencionado?</h3> "."<p>".$_SESSION['sameCountryVisa']."</p>";
            
            $form .= "<h3>Você forneceu as digitais dos 10 dedos na sua solicitação de visto anterior?</h3> "."<p>".$_SESSION['fingerprints']."</p>";
            
            $form .= "<h3>Você já teve um visto americano perdido ou roubado?</h3> "."<p>".$_SESSION['lostVisa']."</p>";
            if($_SESSION['lostVisa'] == 'Sim'){
                $form .= "<h3>Informe aproximadamente o ano em que seu visto foi perdido ou roubado</h3>";
                if ($_SESSION['lostVisaDate']) { 
                    $vetDate = explode("-", $_SESSION['lostVisaDate']);
            
                    $_SESSION['lostVisaDate'] = $vetDate[1]."-".$vetDate[0];
            
                   $form .= "<p>".$_SESSION['lostVisaDate']."</p>";
                }
                
                $form .= "<h3>Explique</h3> "."<p>".$_SESSION['explanationLostVisa']."</p>";
            }
           
            $form .= "<h3>Você já teve um visto americano cancelado ou revogado?</h3> "."<p>".$_SESSION['canceledVisa']."</p>";
                if($_SESSION['canceledVisa'] == 'Sim'){
                    $form .= "<h3>Explique</h3> "."<p>".$_SESSION['explanationvisaCanceled']."</p>";
                }
        }

        $form .= "<h3>Você já teve um visto americano negado ou teve a sua admissão nos EUA negada?</h3> "."<p>".$_SESSION['visaDenied']."</p>";
            if($_SESSION['visaDenied'] == 'Sim'){
                $form .= "<h3>Explique</h3> "."<p>".$_SESSION['explanationvisaDenied']."</p>";
            }
            
        $form .= "<h3>Alguém já entrou com uma petição de imigrante em seu nome nos Serviços dos de e imigração dos EUA?</h3> "."<p>".$_SESSION['visaDenied']."</p>";
            if($_SESSION['immigrantPetition'] == 'Sim'){
                $form .= "<h3>Explique</h3> "."<p>".$_SESSION['explanationimmigrantPetition']."</p>";
            }
#endregion             
            
    #region formulário página 3
    $form .= "<h2>Endereço e redes sociais:</h2>";
    
    $form .= "<h3>Insira o cep de sua residência:</h3> "."<p>".$_SESSION['zipCodeAplicant']."</p>";
    $form .= "<h3>Endereço:</h3> "."<p>".$_SESSION['automaticStreetAplicant']."</p>";
    $form .= "<h3>Número/Complemento:</h3> "."<p>".$_SESSION['automaticAdressAplicant']."</p>";
    $form .= "<h3>Bairro:</h3> "."<p>".$_SESSION['automaticDistrictAplicant']."</p>";
    $form .= "<h3>Cidade:</h3> "."<p>".$_SESSION['automatiCityAplicant']."</p>";
    $form .= "<h3>Estado:</h3> "."<p>".$_SESSION['automaticEstateAplicant']."</p>";
    $form .= "<h3>País:</h3> "."<p>".$_SESSION['countryAplicant']."</p>";
    

    $form .= "<h3>Celular:</h3> "."<p>".$_SESSION['cellPhone']."</p>";

    $form .= "<h3>Telefone residencial:</h3> "."<p>".$_SESSION['telResidential']."</p>";

    $form .= "<h3>Telefone comercial:</h3> "."<p>".$_SESSION['telCommercial']."</p>";

    $form .= "<h3>Você usou outros números de telefone celular nos últimos 5 anos?</h3> "."<p>".$_SESSION['otherNumbersTel']."</p>";
    if($_SESSION['otherNumbersTel'] == 'Sim'){

        $form .= "<h2>Outros telefones utilizados</h2>";
        $addOtherNumberTel = $_SESSION['addOtherNumberTel'];

        if(isset($addOtherNumberTel)){
            $form .= "<p>".$_SESSION['otherNumberTel1']."</p>";
            
            for ($i = 2; $i <= $addOtherNumberTel; $i++) {           

                $form .= "<p>".$_SESSION["otherNumberTel$i"]."</p>";
            }
        }
    }

    $form .= "<h3>Você usou outros e-mails nos últimos 5 anos?</h3> "."<p>".$_SESSION['otherAddresEmail']."</p>";
    if($_SESSION['otherAddresEmail'] == 'Sim'){
        $form .= "<h2>Outros e-mails utilizados</h2>";
        $addOtherEmail = $_SESSION['addOtherEmail'];

        if(isset($addOtherEmail)){
            $form .= "<p>".$_SESSION['otherEmail1']."</p>";
            
            for ($i = 2; $i <=  $addOtherEmail; $i++) {           

                $form .= "<p>".$_SESSION["otherEmail$i"]."</p>";
            }
        }
    }

    $form .= "<h2>Redes sociais</h2>";
    $form .= "<h3>Plataforma: </h3>"."<p>".$_SESSION['socialMedia1']."</p>";
    if($_SESSION['socialMedia1'] != 'Nenhuma'){
        
        $form .= "<h3>Nome de usuário: </h3>"."<p>".$_SESSION['username1']."</p>";

        if(isset($_SESSION['addUsername'])){
            
            for ($i = 2; $i <= $_SESSION['addUsername']; $i++) {   
                $form .= "<h3>Plataforma:</h3>"."<p>".$_SESSION["socialMedia$i"]."</p>";
                $form .= "<h3>Nome de usuário: </h3>"."<p>".$_SESSION["username$i"]."</p>";
            }
        }
    }

    $form .= "<h2>Passaporte</h2>";
    $form .= "<h3>Você possui passaporte?</h3>"."<p>".$_SESSION['passport']."</p>";
    if($_SESSION['passport'] == "Sim"){
        $form .= "<h3>Seu passaporte é brasileiro?</h3>"."<p>".$_SESSION['passportBrazil']."</p>";
        if($_SESSION['passportBrazil'] == 'Sim'){
            $form .= "<h3>Insira o número do passaporte:</h3>"."<p>".$_SESSION['passportNumber']."</p>";
            $form .= "<h3>Estado onde foi emitido o passaporte:</h3>"."<p>".$_SESSION['statePassport']."</p>";
            $form .= "<h3>Cidade:</h3>"."<p>".$_SESSION['cityPassport']."</p>";
            $form .= "<h3>Data de emissão do passaporte:</h3>";
            if ($_SESSION['passportIssueDate']) { 
                $vetDate = explode("-", $_SESSION['passportIssueDate']);
        
                $_SESSION['passportIssueDate'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
        
               $form .= "<p>".$_SESSION['passportIssueDate']."</p>";
            }
            
            $form .= "<h3>Data de validade do passaporte:</h3>";
            if ($_SESSION['passportExpirationDate']) { 
                $vetDate = explode("-", $_SESSION['passportExpirationDate']);
        
                $_SESSION['passportExpirationDate'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
        
               $form .= "<p>".$_SESSION['passportExpirationDate']."</p>";
            }

        }else{
            $form .= "<h3>Insira o número do passaporte:</h3>"."<p>".$_SESSION['foreignPassportNumber']."</p>";
            $form .= "<h3>Cidade onde foi emitido o passaporte:</h3>"."<p>".$_SESSION['foreignCityPassport']."</p>";
            $form .= "<h3>Estado onde foi emitido o passaporte:</h3>"."<p>".$_SESSION['foreignStatePassport']."</p>";
            $form .= "<h3>País:</h3>"."<p>".$_SESSION['countryFromPassport']."</p>";
            $form .= "<h3>Data de emissão do passaporte:</h3>"."<p>".$_SESSION['dateOfIssueOfForeignPassport']."</p>";
            $form .= "<h3>Data de validade do passaporte:</h3>"."<p>".$_SESSION['foreignPassportExpiryDate']."</p>"; 
            $form .= "<h3>Envie uma foto do seu passaporte:</h3>";
        }
    }

    $form .= "<h3>Já teve um passaporte perdido ou roubado?</h3>"."<p>".$_SESSION['stolenPassport']."</p>";
        if($_SESSION['stolenPassport'] == 'Sim'){
            $form .= "<h3>Explique:</h3>";
            $form .="<p>" .$_SESSION['explanationStolenPassport']."</p>";
        }
#endregion
        
    #region formulário página 4

    $form .= "<h2>Informações sobre a Família:</h2>";

    $form .= "<h3>Nome do pai:</h3> "."<p>".$_SESSION['fathersName']."</p>";
    $form .= "<h3>Data de nascimento:</h3>";
    if ($_SESSION['fathersDateOfBirth']) { 
        $vetDate = explode("-", $_SESSION['fathersDateOfBirth']);

        $_SESSION['fathersDateOfBirth'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];

       $form .= "<p>".$_SESSION['fathersDateOfBirth']."</p>";
    }

    $form .= "<h3>Seu pai está nos EUA?</h3> "."<p>".$_SESSION['fatherInUsa']."</p>";
        if($_SESSION['fatherInUsa'] =='Sim'){
            $form .= "<h3>Status do pai nos EUA:</h3> "."<p>".$_SESSION['fatherStatus']."</p>";
        }

    $form .= "<h3>Nome da mãe:</h3> "."<p>".$_SESSION['mothersName']."</p>";
    $form .= "<h3>Data de nascimento:</h3>";
    if ($_SESSION['mothersDateOfBirth']) { 
        $vetDate = explode("-", $_SESSION['mothersDateOfBirth']);

        $_SESSION['mothersDateOfBirth'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];

       $form .= "<p>".$_SESSION['mothersDateOfBirth']."</p>";
    }

    $form .= "<h3>Sua mãe está nos EUA?</h3> "."<p>".$_SESSION['motherInUsa']."</p>";
        if($_SESSION['motherInUsa'] =='Sim'){
            $form .= "<h3>Status da sua mãe nos EUA:</h3> "."<p>".$_SESSION['motherStatus']."</p>";
        }

    $form .= "<h3>Você tem algum parente Imediato(cônjuge, filhos ou irmãos) nos EUA?</h3>"."<p>".$_SESSION['relativeInUsa']."</p>";
        if($_SESSION['relativeInUsa'] =='Sim'){
            $form .= "<h3>Nome completo do parente</h3>"."<p>".$_SESSION['otherRelativeName']."</p>";
            $form .= "<h3>Grau de parentesco</h3>"."<p>".$_SESSION['kinship']."</p>";
            $form .= "<h3>Status:</h3>"."<p>".$_SESSION['relativesStatus']."</p>";
        }

    $form .= "<h3>Você tem algum outro parente nos EUA?</h3>"."<p>".$_SESSION['anotherRelative']."</p>";
    
    $form .= "<h2>Informações sobre ocupação</h2>";

    $form .= "<h3>Qual é a sua ocupação atualmente?</h3>"."<p>".$_SESSION['occupation']."</p>";
        if($_SESSION['occupation'] == 'Trabalho Formal' || $_SESSION['occupation'] == 'Autônomo'){
            $form .= "<h3>Profissão:</h3>"."<p>".$_SESSION['professionName']."</p>";
            $form .= "<h3>Nome da Empresa:</h3>"."<p>".$_SESSION['employerName']."</p>";
            $form .= "<h3>Telefone da Empresa:</h3>"."<p>".$_SESSION['telWork']."</p>";
            $form .= "<h3>Cep da Empresa:</h3>"."<p>".$_SESSION['zipCodeWork']."</p>";
            $form .= "<h3>Endereço:</h3>"."<p>".$_SESSION['automaticStreetWork']."</p>";
            $form .= "<h3>Número:</h3>"."<p>".$_SESSION['automaticAdressWork']."</p>";
            $form .= "<h3>Bairro:</h3>"."<p>".$_SESSION['automaticDistrictWork']."</p>";
            $form .= "<h3>Cidade:</h3>"."<p>".$_SESSION['automaticCityWork']."</p>";
            $form .= "<h3>Estado:</h3>"."<p>".$_SESSION['automaticEstateWork']."</p>";
            $form .= "<h3>País:</h3>"."<p>".$_SESSION['countryEmployer']."</p>";
            $form .= "<h3>Data de início das atividades:</h3>";
            if($_SESSION['startDateWork']) { 
                $vetDate = explode("-", $_SESSION['startDateWork']);
        
                $_SESSION['startDateWork'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
        
               $form .= "<p>".$_SESSION['startDateWork']."</p>";
            }

            $form .= "<h3>Valor da renda mensal</h3>"."<p>".$_SESSION['wage']."</p>";
            $form .= "<h3>Descrição das atividades:</h3>"."<p>".$_SESSION['descriptionOfActivities']."</p>";
        }
        elseif($_SESSION['occupation'] == 'Estudante'){
            $form .= "<h3>Nome da Escola:</h3>"."<p>".$_SESSION['schoolName']."</p>";
            $form .= "<h3>Telefone da Escola:</h3>"."<p>".$_SESSION['telSchool']."</p>";
            $form .= "<h3>Cep da Escola:</h3>"."<p>".$_SESSION['zipCodeSchool']."</p>";
            $form .= "<h3>Endereço:</h3>"."<p>".$_SESSION['automaticStreetSchool']."</p>";
            $form .= "<h3>Número:</h3>"."<p>".$_SESSION['automaticAddressSchool']."</p>";
            $form .= "<h3>Bairro:</h3>"."<p>".$_SESSION['automaticDistrictSchool']."</p>";
            $form .= "<h3>Cidade:</h3>"."<p>".$_SESSION['automatiCitySchool']."</p>";
            $form .= "<h3>Estado:</h3>"."<p>".$_SESSION['automaticEstateSchool']."</p>";
            $form .= "<h3>País:</h3>"."<p>".$_SESSION['countrySchool']."</p>";
            $form .= "<h3>Data de início do curso:</h3>";
            if ($_SESSION['startDateSchool']) { 
                $vetDate = explode("-", $_SESSION['startDateSchool']);
        
                $_SESSION['startDateSchool'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
        
               $form .= "<p>".$_SESSION['startDateSchool']."</p>";
            }

            $form .= "<h3>Período que está cursando:</h3>"."<p>".$_SESSION['coursePeriod']."</p>";
        }
    
    $form .= "<h3>Já trabalhou anteriormente?</h3>"."<p>".$_SESSION['previousWork']."</p>";
        if($_SESSION['previousWork'] == 'Sim'){
            $form .= "<h3>Profissão:</h3>"."<p>".$_SESSION['professionNamePreviousWork']."</p>";
            $form .= "<h3>Nome da Empresa:</h3>"."<p>".$_SESSION['employerNamePreviousWork']."</p>";
            $form .= "<h3>Telefone da Empresa:</h3>"."<p>".$_SESSION['telPreviousWork']."</p>";
            $form .= "<h3>Nome do Supervisor:</h3>"."<p>".$_SESSION['supervisorName']."</p>";
            $form .= "<h3>Cep da Empresa:</h3>"."<p>".$_SESSION['zipCodePreviousWork']."</p>";
            $form .= "<h3>Endereço:</h3>"."<p>".$_SESSION['automaticStreetPreviousWork']."</p>";
            $form .= "<h3>Número:</h3>"."<p>".$_SESSION['automaticAdressPreviousWork']."</p>";
            $form .= "<h3>Bairro:</h3>"."<p>".$_SESSION['automaticDistrictPreviousWork']."</p>";
            $form .= "<h3>Cidade:</h3>"."<p>".$_SESSION['automatiCityPreviousWork']."</p>";
            $form .= "<h3>Estado:</h3>"."<p>".$_SESSION['automaticEstatePreviousWork']."</p>";
            $form .= "<h3>País:</h3>"."<p>".$_SESSION['countryPreviousWork']."</p>";
            $form .= "<h3>Data de início:</h3>";
            if($_SESSION['startDatePreviousWork']) { 
                $vetDate = explode("-", $_SESSION['startDatePreviousWork']);
        
                $_SESSION['startDatePreviousWork'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
        
               $form .= "<p>".$_SESSION['startDatePreviousWork']."</p>";
            }

            $form .= "<h3>Data de término:</h3>";
            if($_SESSION['endDatePreviousWork']) { 
                $vetDate = explode("-", $_SESSION['endDatePreviousWork']);
        
                $_SESSION['endDatePreviousWork'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
        
               $form .= "<p>".$_SESSION['endDatePreviousWork']."</p>";
            }

            $form .= "<h3>Descrição das atividades:</h3>"."<p>".$_SESSION['descriptionOfActivitiesPreviousWork']."</p>";

            $form .= "<h3>Deseja inserir as informações do penúltimo trabalho?</h3>"."<p>".$_SESSION['penultimateWork']."</p>";
                if($_SESSION['penultimateWork'] == 'Sim'){
                    $form .= "<h3>Profissão:</h3>"."<p>".$_SESSION['professionNamePenultimateWork']."</p>";
                    $form .= "<h3>Nome da Empresa:</h3>"."<p>".$_SESSION['employerNamePenultimateWork']."</p>";
                    $form .= "<h3>Telefone da Empresa:</h3>"."<p>".$_SESSION['telPenultimateWork']."</p>";
                    $form .= "<h3>Nome do Supervisor:</h3>"."<p>".$_SESSION['supervisorNamePenultimateWork']."</p>";
                    $form .= "<h3>Cep da Empresa:</h3>"."<p>".$_SESSION['zipCodePenultimateWork']."</p>";
                    $form .= "<h3>Endereço:</h3>"."<p>".$_SESSION['automaticStreetPenultimateWork']."</p>";
                    $form .= "<h3>Número:</h3>"."<p>".$_SESSION['automaticAdressPenultimateWork']."</p>";
                    $form .= "<h3>Bairro:</h3>"."<p>".$_SESSION['automaticDistrictPenultimateWork']."</p>";
                    $form .= "<h3>Cidade:</h3>"."<p>".$_SESSION['automatiCityPenultimateWork']."</p>";
                    $form .= "<h3>Estado:</h3>"."<p>".$_SESSION['automaticEstatePenultimateWork']."</p>";
                    $form .= "<h3>País:</h3>"."<p>".$_SESSION['countryPenultimateWork']."</p>";
                    $form .= "<h3>Data de início:</h3>"."<p>";
                    if($_SESSION['startDatePenultimateWork']) { 
                        $vetDate = explode("-", $_SESSION['startDatePenultimateWork']);
                
                        $_SESSION['startDatePenultimateWork'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
                
                       $form .= "<p>".$_SESSION['startDatePenultimateWork']."</p>";
                    }

                    $form .= "<h3>Data de término:</h3>";
                    if($_SESSION['endDatePenultimateWork']) { 
                        $vetDate = explode("-", $_SESSION['endDatePenultimateWork']);
                
                        $_SESSION['endDatePenultimateWork'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
                
                       $form .= "<p>".$_SESSION['endDatePenultimateWork']."</p>";
                    }

                    $form .= "<h3>Descrição das atividades:</h3>"."<p>".$_SESSION['descriptionOfActivitiesPenultimateWork']."</p>";
                }
        }

    $form .= "<h2>Informações sobre cursos superiores</h2>";

    $form .= "<h3>Possui nível superior ou técnico ou está cursando algum atualmente?</h3>"."<p>".$_SESSION['faculty']."</p>";
        if($_SESSION['faculty'] == 'Sim'){
            $form .= "<h3>Nome da Escola:</h3>"."<p>".$_SESSION['facultylName']."</p>";
            $form .= "<h3>Telefone da Escola:</h3>"."<p>".$_SESSION['telFaculty']."</p>";
            $form .= "<h3>Cep da Escola:</h3>"."<p>".$_SESSION['zipCodeFaculty']."</p>";
            $form .= "<h3>Endereço:</h3>"."<p>".$_SESSION['automaticStreetFaculty']."</p>";
            $form .= "<h3>Número:</h3>"."<p>".$_SESSION['automaticAdressFaculty']."</p>";
            $form .= "<h3>Bairro:</h3>"."<p>".$_SESSION['automaticDistrictFaculty']."</p>";
            $form .= "<h3>Cidade:</h3>"."<p>".$_SESSION['automatiCityFaculty']."</p>";
            $form .= "<h3>Estado:</h3>"."<p>".$_SESSION['automaticEstateFaculty']."</p>";
            $form .= "<h3>País:</h3>"."<p>".$_SESSION['countryFaculty']."</p>";
            $form .= "<h3>Data de início do curso:</h3>";
            if($_SESSION['startDateFaculty']) { 
                $vetDate = explode("-", $_SESSION['startDateFaculty']);
        
                $_SESSION['startDateFaculty'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
        
               $form .= "<p>".$_SESSION['startDateFaculty']."</p>";
            }

            $form .= "<h3>Data de término do curso:</h3>";
            if($_SESSION['endDateFaculty']) { 
                $vetDate = explode("-", $_SESSION['endDateFaculty']);
        
                $_SESSION['endDateFaculty'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
        
               $form .= "<p>".$_SESSION['endDateFaculty']."</p>";
            }

            $form .= "<h3>Nome do curso:</h3>"."<p>".$_SESSION['courseName']."</p>";
        
            $form .= "<h3>Possui outro curso de nível superior ou técnico concluído?</h3>"."<p>".$_SESSION['otherFaculty']."</p>";
                if($_SESSION['otherFaculty'] == 'Sim'){
                    $form .= "<h3>Nome da Escola:</h3>"."<p>".$_SESSION['otherFacultName']."</p>";
                    $form .= "<h3>Telefone da Escola:</h3>"."<p>".$_SESSION['telAnotherFaculty']."</p>";
                    $form .= "<h3>Cep da Escola:</h3>"."<p>".$_SESSION['zipCodeAnotherFaculty']."</p>";
                    $form .= "<h3>Endereço:</h3>"."<p>".$_SESSION['automaticStreetOtherFaculty']."</p>";
                    $form .= "<h3>Número:</h3>"."<p>".$_SESSION['adreesOtherFaculty']."</p>";
                    $form .= "<h3>Bairro:</h3>"."<p>".$_SESSION['automaticDistrictOtherFaculty']."</p>";
                    $form .= "<h3>Cidade:</h3>"."<p>".$_SESSION['automaticCityOtherFaculty']."</p>";
                    $form .= "<h3>Estado:</h3>"."<p>".$_SESSION['automaticEstateOtherFaculty']."</p>";
                    $form .= "<h3>País:</h3>"."<p>".$_SESSION['countryOtherFaculty']."</p>";
                    $form .= "<h3>Data de início do curso:</h3>";
                    if($_SESSION['startDateOtherFalculty']) { 
                        $vetDate = explode("-", $_SESSION['startDateOtherFalculty']);
                
                        $_SESSION['startDateOtherFalculty'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
                
                       $form .= "<p>".$_SESSION['startDateOtherFalculty']."</p>";
                    }

                    $form .= "<h3>Data de término do curso:</h3>";
                    if($_SESSION['endDateOtherFalculty']) { 
                        $vetDate = explode("-", $_SESSION['endDateOtherFalculty']);
                
                        $_SESSION['endDateOtherFalculty'] = $vetDate[2]."-".$vetDate[1]."-".$vetDate[0];
                
                       $form .= "<p>".$_SESSION['endDateOtherFalculty']."</p>";
                    }

                    $form .= "<h3>Nome do curso:</h3>"."<p>".$_SESSION['courseNameOtherFaculty']."</p>";
                }
        }
    
        
#endregion
        
    #region formulário página 5
        
    $form .= "<h2>Informações adicionais</h2>";

    $form .= "<h3>Você fala outros idiomas fluentemente?</h3>"."<p>".$_POST['anotherLanguage']."</p>";
        if($_POST['anotherLanguage'] == 'Sim'){
            $form .= "<h3>Idiomas</h3>";
            if(isset($_POST['addLang'])){
                $form .= "<p>".$_POST['enterAnotherLanguage1']."</p>";
                
                for ($i = 2; $i <=  $_POST['addLang']; $i++) {           
        
                    $form .= "<p>".$_POST["enterAnotherLanguage$i"]."</p>";
                }
            }
        }

    $form .= "<h3>Você tem alguma habilidade com armas?</h3>"."<p>".$_POST['weaponSkill']."</p>";
        if($_POST['weaponSkill'] == 'Sim'){
            $form .= "<h3>Explique</h3>"."<p>".$_POST['explanationweaponSkill']."</p>";
        }
        
    $form .= "<h3>Você viajou para algum país nos últimos 5 anos?</h3>"."<p>".$_POST['travelToOtherContries']."</p>"; 
        if($_POST['travelToOtherContries'] == 'Sim'){

            $form .= "<h3>Países visitados nos últimos 5 anos</h3>";
            if(isset($_POST['addNewCountry'])){
                $form .= "<p>".$_POST['travelToOtherContries1']."</p>";
                
                for ($i = 2; $i <=  $_POST['addNewCountry']; $i++) {           
        
                    $form .= "<p>".$_POST["travelToOtherContries$i"]."</p>";
                }
            }
        }

    $form .= "<h3>Você contribui com alguma organização social ou de caridade?</h3>"."<p>".$_POST['charityOrganization']."</p>"; 
        if($_POST['charityOrganization'] == 'Sim'){

            $form .= "<h3>Nome da Organização</h3>"."<p>";
            if(isset($_POST['addCharityOrganization'])){
                $form .= "<p>".$_POST['charityOrganizationName1']."</p>";
                
                for ($i = 2; $i <=  $_POST['addCharityOrganization']; $i++) {           
        
                    $form .= "<p>".$_POST["charityOrganizationName$i"]."</p>";
                }
            }        
        }

    $form .= "<h3>Você já prestou Serviço Militar?</h3>"."<p>".$_POST['militaryService']."</p>";
        if($_POST['militaryService'] == 'Sim'){
            
            $form .= "<h3>Ramo das Forças Armadas:</h3>"."<p>".$_POST['armedForces']."</p>";
            $form .= "<h3>Patente:</h3>"."<p>".$_POST['patent']."</p>";
            $form .= "<h3>Especialidade</h3>"."<p>".$_POST['specialty']."</p>";
            $form .= "<h3>Data de início:</h3>"."<p>".$_POST['militaryServiceStartDate']."</p>";
            $form .= "<h3>Data de término</h3>"."<p>".$_POST['militaryServiceEndDate']."</p>";                
        }

    $form .= "<h3>Você já ficou ilegal nos EUA?</h3>"."<p>".$_POST['illegalInTheUS']."</p>";
    if($_POST['illegalInTheUS'] == 'Sim'){
        $form .= "<h3>Explique</h3>"."<p>".$_POST['explanationIllegalInTheUS']."</p>";
    }

    $form .= "<h3>Você já foi deportado de algum país?</h3>"."<p>".$_POST['deported']."</p>";
    if($_POST['deported'] == 'Sim'){
        $form .= "<h3>Explique</h3>".$_POST['explanationDeported']."</p>";
    }

    $form .= "<h3>Você já estudou nos EUA com visto de Turismo?</h3>"."<p>".$_POST['studiedWithB2Visa']."</p>";
    if($_POST['studiedWithB2Visa'] == 'Sim'){
        $form .= "<h3>Explique</h3>"."<p>".$_POST['explanationStudiedWithB2Visa']."</p>";
    }

    $form .= "<h3>Você declara imposto de renda?</h3>"."<p>".$_POST['incomeTax']."</p>";
    
    $form .= "<h3>Você possui alguma aplicação ou reserva de dinheiro?</h3>"."<p>".$_POST['cashReserve']."</p>";
    if($_POST['cashReserve'] == 'Sim'){
        $form .= "<h3>Valor</h3>"."<p>".$_POST['cashReserveAmount']."</p>";
    }

//inserção de anexos

    
    if (isset($_FILES["visaToUpload"])&& in_array(pathinfo($_FILES['visaToUpload']['name'],
    PATHINFO_EXTENSION),array('jpeg','jpg','png'))){
        
        $mail->addAttachment($_FILES['visaToUpload']['tmp_name'],$_FILES['visaToUpload']['name']); 
    }
    
    if(isset($_FILES['passportToUpload'])&& in_array(pathinfo($_FILES['passportToUpload']['name'],
    PATHINFO_EXTENSION),array('jpeg','jpg','png'))){
       
        $mail->addAttachment($_FILES['passportToUpload']['tmp_name'],$_FILES['passportToUpload']['name']);
    }
    

    for($count = 0; $count < count($_FILES['idCardToUpload']['name']); $count++){
        if(isset($_FILES['idCardToUpload'])&& in_array(pathinfo($_FILES['idCardToUpload']['name'][$count],
        PATHINFO_EXTENSION),array('jpeg','jpg','png'))){

                $mail->addAttachment($_FILES['idCardToUpload']['tmp_name'][$count],$_FILES['idCardToUpload']['name'][$count]);
            }
        
        
    } 

    if(isset($_FILES['birthCertificateToUpload'])&& in_array(pathinfo($_FILES['birthCertificateToUpload']['name'],
    PATHINFO_EXTENSION),array('jpeg','jpg','png'))){
      
        $mail->addAttachment($_FILES['birthCertificateToUpload']['tmp_name'],$_FILES['birthCertificateToUpload']['name']);  
    }
    
    if($_POST['incomeTax'] == 'Sim'){
        //$incomeTaxFile = explode('.',  $_FILES['incomeTaxToUpload']['name']);
        if(isset($_FILES['incomeTaxToUpload'])&& in_array(pathinfo($_FILES['incomeTaxToUpload']['name'],
        PATHINFO_EXTENSION),array('jpeg','jpg','png'))){

        $mail->addAttachment($_FILES['incomeTaxToUpload']['tmp_name'],$_FILES['incomeTaxToUpload']['name']);
        }
       
    }   
    
    #endregion

    
    
    



if(isset($_POST['action'])){      

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send t<hr>ough
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'luizvagnerdev@gmail.com';                     //SMTP username
        $mail->Password   = ''
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer:</h3>:ENCRYPTION_STARTTLS`
        //$mail->SMTPAutoTLS = false;  
    
         $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        ); 

        //Recipients
        $mail->setFrom($_SESSION['email'], $_SESSION['fullName']);
        $mail->addAddress('luizvagnerdev@gmail.com', 'Luiz');     //Add a recipient
        $mail->addReplyTo($_SESSION['email'], $_SESSION['fullName']);
      
        $mail->isHTML(true);         
        $mail->CharSet = 'UTF-8';             
        $mail->Subject = 'Informações do cliente - '. $_SESSION['fullName'];
        $mail->Body = $form;

    $mail->send();
    echo 'E-mail enviado';
    } 
    catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    }
}
else{
    echo "Formulário não enviado";
}
?>
