<?php
session_start();
    
    if (isset($_POST['fathersName'])) {
        $_SESSION['fathersName'] = $_POST['fathersName'];
    }

    if (isset($_POST['fathersDateOfBirth'])) {
        $_SESSION['fathersDateOfBirth'] = $_POST['fathersDateOfBirth'];
    }

    if (isset($_POST['fatherInUsa'])) {
        $_SESSION['fatherInUsa'] = $_POST['fatherInUsa'];
    }

    if (isset($_POST['fatherStatus'])) {
        $_SESSION['fatherStatus'] = $_POST['fatherStatus'];
    }

    if (isset($_POST['mothersName'])) {
        $_SESSION['mothersName'] = $_POST['mothersName'];
    }

    if (isset($_POST['mothersDateOfBirth'])) {
        $_SESSION['mothersDateOfBirth'] = $_POST['mothersDateOfBirth'];
    }

    if (isset($_POST['motherInUsa'])) {
        $_SESSION['motherInUsa'] = $_POST['motherInUsa'];
    }

    if (isset($_POST['motherStatus'])) {
        $_SESSION['motherStatus'] = $_POST['motherStatus'];
    }

    if (isset($_POST['relativeInUsa'])) {
        $_SESSION['relativeInUsa'] = $_POST['relativeInUsa'];
    }

    if (isset($_POST['otherRelativeName'])) {
        $_SESSION['otherRelativeName'] = $_POST['otherRelativeName'];
    }

    if (isset($_POST['kinship'])) {
        $_SESSION['kinship'] = $_POST['kinship'];
    }

    if (isset($_POST['relativesStatus'])) {
        $_SESSION['relativesStatus'] = $_POST['relativesStatus'];
    }

    if (isset($_POST['anotherRelative'])) {
        $_SESSION['anotherRelative'] = $_POST['anotherRelative'];
    }

    if (isset($_POST['occupation'])) {
        $_SESSION['occupation'] = $_POST['occupation'];
    }

    if (isset($_POST['professionName'])) {
        $_SESSION['professionName'] = $_POST['professionName'];
    }

    if (isset($_POST['employerName'])) {
        $_SESSION['employerName'] = $_POST['employerName'];
    }

    if (isset($_POST['telWork'])) {
        $_SESSION['telWork'] = $_POST['telWork'];
    }

    if (isset($_POST['zipCodeWork'])) {
        $_SESSION['zipCodeWork'] = $_POST['zipCodeWork'];
    }

    if (isset($_POST['automaticStreetWork'])) {
        $_SESSION['automaticStreetWork'] = $_POST['automaticStreetWork'];
    }

    if (isset($_POST['automaticAdressWork'])) {
        $_SESSION['automaticAdressWork'] = $_POST['automaticAdressWork'];
    }

    if (isset($_POST['automaticDistrictWork'])) {
        $_SESSION['automaticDistrictWork'] = $_POST['automaticDistrictWork'];
    }

    if (isset($_POST['automaticCityWork'])) {
        $_SESSION['automaticCityWork'] = $_POST['automaticCityWork'];
    }

    if (isset($_POST['automaticEstateWork'])) {
        $_SESSION['automaticEstateWork'] = $_POST['automaticEstateWork'];
    }

    if (isset($_POST['countryEmployer'])) {
        $_SESSION['countryEmployer'] = $_POST['countryEmployer'];
    }

    if (isset($_POST['startDateWork'])) {
        $_SESSION['startDateWork'] = $_POST['startDateWork'];
    }

    if (isset($_POST['wage'])) {
        $_SESSION['wage'] = $_POST['wage'];
    }

    if (isset($_POST['descriptionOfActivities'])) {
        $_SESSION['descriptionOfActivities'] = $_POST['descriptionOfActivities'];
    }

    if (isset($_POST['schoolName'])) {
        $_SESSION['schoolName'] = $_POST['schoolName'];
    }

    if (isset($_POST['telSchool'])) {
        $_SESSION['telSchool'] = $_POST['telSchool'];
    }

    if (isset($_POST['zipCodeSchool'])) {
        $_SESSION['zipCodeSchool'] = $_POST['zipCodeSchool'];
    }

    if (isset($_POST['automaticStreetSchool'])) {
        $_SESSION['automaticStreetSchool'] = $_POST['automaticStreetSchool'];
    }

    if (isset($_POST['automaticAddressSchool'])) {
        $_SESSION['automaticAddressSchool'] = $_POST['automaticAddressSchool'];
    }

    if (isset($_POST['automaticDistrictSchool'])) {
        $_SESSION['automaticDistrictSchool'] = $_POST['automaticDistrictSchool'];
    }

    if (isset($_POST['automatiCitySchool'])) {
        $_SESSION['automatiCitySchool'] = $_POST['automatiCitySchool'];
    }

    if (isset($_POST['automaticEstateSchool'])) {
        $_SESSION['automaticEstateSchool'] = $_POST['automaticEstateSchool'];
    }

    if (isset($_POST['countrySchool'])) {
        $_SESSION['countrySchool'] = $_POST['countrySchool'];
    }

    if (isset($_POST['startDateSchool'])) {
        $_SESSION['startDateSchool'] = $_POST['startDateSchool'];
    }

    if (isset($_POST['coursePeriod'])) {
        $_SESSION['coursePeriod'] = $_POST['coursePeriod'];
    }

    if (isset($_POST['previousWork'])) {
        $_SESSION['previousWork'] = $_POST['previousWork'];
    }

    if (isset($_POST['professionNamePreviousWork'])) {
        $_SESSION['professionNamePreviousWork'] = $_POST['professionNamePreviousWork'];
    }

    if (isset($_POST['employerNamePreviousWork'])) {
        $_SESSION['employerNamePreviousWork'] = $_POST['employerNamePreviousWork'];
    }

    if (isset($_POST['telPreviousWork'])) {
        $_SESSION['telPreviousWork'] = $_POST['telPreviousWork'];
    }

    if (isset($_POST['supervisorName'])) {
        $_SESSION['supervisorName'] = $_POST['supervisorName'];
    }

    if (isset($_POST['zipCodePreviousWork'])) {
        $_SESSION['zipCodePreviousWork'] = $_POST['zipCodePreviousWork'];
    }

    if (isset($_POST['automaticStreetPreviousWork'])) {
        $_SESSION['automaticStreetPreviousWork'] = $_POST['automaticStreetPreviousWork'];
    }

    if (isset($_POST['automaticAdressPreviousWork'])) {
        $_SESSION['automaticAdressPreviousWork'] = $_POST['automaticAdressPreviousWork'];
    }

    if (isset($_POST['automaticDistrictPreviousWork'])) {
        $_SESSION['automaticDistrictPreviousWork'] = $_POST['automaticDistrictPreviousWork'];
    }

    if (isset($_POST['automatiCityPreviousWork'])) {
        $_SESSION['automatiCityPreviousWork'] = $_POST['automatiCityPreviousWork'];
    }

    if (isset($_POST['automaticEstatePreviousWork'])) {
        $_SESSION['automaticEstatePreviousWork'] = $_POST['automaticEstatePreviousWork'];
    }

    if (isset($_POST['countryPreviousWork'])) {
        $_SESSION['countryPreviousWork'] = $_POST['countryPreviousWork'];
    }

    if (isset($_POST['startDatePreviousWork'])) {
        $_SESSION['startDatePreviousWork'] = $_POST['startDatePreviousWork'];
    }

    if (isset($_POST['endDatePreviousWork'])) {
        $_SESSION['endDatePreviousWork'] = $_POST['endDatePreviousWork'];
    }

    if (isset($_POST['descriptionOfActivitiesPreviousWork'])) {
        $_SESSION['descriptionOfActivitiesPreviousWork'] = $_POST['descriptionOfActivitiesPreviousWork'];
    }

    if (isset($_POST['penultimateWork'])) {
        $_SESSION['penultimateWork'] = $_POST['penultimateWork'];
    }

    if (isset($_POST['professionNamePenultimateWork'])) {
        $_SESSION['professionNamePenultimateWork'] = $_POST['professionNamePenultimateWork'];
    }

    if (isset($_POST['employerNamePenultimateWork'])) {
        $_SESSION['employerNamePenultimateWork'] = $_POST['employerNamePenultimateWork'];
    }

    if (isset($_POST['telPenultimateWork'])) {
        $_SESSION['telPenultimateWork'] = $_POST['telPenultimateWork'];
    }

    if (isset($_POST['supervisorNamePenultimateWork'])) {
        $_SESSION['supervisorNamePenultimateWork'] = $_POST['supervisorNamePenultimateWork'];
    }

    if (isset($_POST['zipCodePenultimateWork'])) {
        $_SESSION['zipCodePenultimateWork'] = $_POST['zipCodePenultimateWork'];
    }

    if (isset($_POST['automaticStreetPenultimateWork'])) {
        $_SESSION['automaticStreetPenultimateWork'] = $_POST['automaticStreetPenultimateWork'];
    }
    
    if (isset($_POST['automaticAdressPenultimateWork'])) {
        $_SESSION['automaticAdressPenultimateWork'] = $_POST['automaticAdressPenultimateWork'];
    }

    if (isset($_POST['automaticDistrictPenultimateWork'])) {
        $_SESSION['automaticDistrictPenultimateWork'] = $_POST['automaticDistrictPenultimateWork'];
    }

    if (isset($_POST['automatiCityPenultimateWork'])) {
        $_SESSION['automatiCityPenultimateWork'] = $_POST['automatiCityPenultimateWork'];
    }

    if (isset($_POST['automaticEstatePenultimateWork'])) {
        $_SESSION['automaticEstatePenultimateWork'] = $_POST['automaticEstatePenultimateWork'];
    }
    
    if (isset($_POST['countryPenultimateWork'])) {
        $_SESSION['countryPenultimateWork'] = $_POST['countryPenultimateWork'];
    }

    if (isset($_POST['startDatePenultimateWork'])) {
        $_SESSION['startDatePenultimateWork'] = $_POST['startDatePenultimateWork'];
    }

    if (isset($_POST['endDatePenultimateWork'])) {
        $_SESSION['endDatePenultimateWork'] = $_POST['endDatePenultimateWork'];
    }

    if (isset($_POST['descriptionOfActivitiesPenultimateWork'])) {
        $_SESSION['descriptionOfActivitiesPenultimateWork'] = $_POST['descriptionOfActivitiesPenultimateWork'];
    }


    if (isset($_POST['faculty'])) {
        $_SESSION['faculty'] = $_POST['faculty'];
    }

    if (isset($_POST['facultylName'])) {
        $_SESSION['facultylName'] = $_POST['facultylName'];
    }

    if (isset($_POST['telFaculty'])) {
        $_SESSION['telFaculty'] = $_POST['telFaculty'];
    }

    if (isset($_POST['zipCodeFaculty'])) {
        $_SESSION['zipCodeFaculty'] = $_POST['zipCodeFaculty'];
    }

    if (isset($_POST['automaticStreetFaculty'])) {
        $_SESSION['automaticStreetFaculty'] = $_POST['automaticStreetFaculty'];
    }

    if (isset($_POST['automaticAdressFaculty'])) {
        $_SESSION['automaticAdressFaculty'] = $_POST['automaticAdressFaculty'];
    }

    if (isset($_POST['automaticDistrictFaculty'])) {
        $_SESSION['automaticDistrictFaculty'] = $_POST['automaticDistrictFaculty'];
    }

    if (isset($_POST['automatiCityFaculty'])) {
        $_SESSION['automatiCityFaculty'] = $_POST['automatiCityFaculty'];
    }

    if (isset($_POST['automaticEstateFaculty'])) {
        $_SESSION['automaticEstateFaculty'] = $_POST['automaticEstateFaculty'];
    }

    if (isset($_POST['countryFaculty'])) {
        $_SESSION['countryFaculty'] = $_POST['countryFaculty'];
    }

    if (isset($_POST['startDateFaculty'])) {
        $_SESSION['startDateFaculty'] = $_POST['startDateFaculty'];
    }

    if (isset($_POST['endDateFaculty'])) {
        $_SESSION['endDateFaculty'] = $_POST['endDateFaculty'];
    }

    if (isset($_POST['courseName'])) {
        $_SESSION['courseName'] = $_POST['courseName'];
    }

    if (isset($_POST['otherFaculty'])) {
        $_SESSION['otherFaculty'] = $_POST['otherFaculty'];
    }

    if (isset($_POST['otherFacultName'])) {
        $_SESSION['otherFacultName'] = $_POST['otherFacultName'];
    }

    if (isset($_POST['telAnotherFaculty'])) {
        $_SESSION['telAnotherFaculty'] = $_POST['telAnotherFaculty'];
    }

    if (isset($_POST['zipCodeAnotherFaculty'])) {
        $_SESSION['zipCodeAnotherFaculty'] = $_POST['zipCodeAnotherFaculty'];
    }

    if (isset($_POST['automaticStreetOtherFaculty'])) {
        $_SESSION['automaticStreetOtherFaculty'] = $_POST['automaticStreetOtherFaculty'];
    }

    if (isset($_POST['adreesOtherFaculty'])) {
        $_SESSION['adreesOtherFaculty'] = $_POST['adreesOtherFaculty'];
    }

    if (isset($_POST['automaticDistrictOtherFaculty'])) {
        $_SESSION['automaticDistrictOtherFaculty'] = $_POST['automaticDistrictOtherFaculty'];
    }

    if (isset($_POST['automaticCityOtherFaculty'])) {
        $_SESSION['automaticCityOtherFaculty'] = $_POST['automaticCityOtherFaculty'];
    }

    if (isset($_POST['automaticEstateOtherFaculty'])) {
        $_SESSION['automaticEstateOtherFaculty'] = $_POST['automaticEstateOtherFaculty'];
    }

    if (isset($_POST['countryOtherFaculty'])) {
        $_SESSION['countryOtherFaculty'] = $_POST['countryOtherFaculty'];
    }

    if (isset($_POST['startDateOtherFalculty'])) {
        $_SESSION['startDateOtherFalculty'] = $_POST['startDateOtherFalculty'];
    }

    if (isset($_POST['endDateOtherFalculty'])) {
        $_SESSION['endDateOtherFalculty'] = $_POST['endDateOtherFalculty'];
    }

    if (isset($_POST['courseNameOtherFaculty'])) {
        $_SESSION['courseNameOtherFaculty'] = $_POST['courseNameOtherFaculty'];
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
        <form action="submitForm.php" method="post" enctype="multipart/form-data">
            <fieldset>
                <legend><strong>Informações adicionais</strong></legend>

                <h4>Você fala outros idiomas fluentemente?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="anotherLanguage" value ="Sim" class="anotherLanguageYes" required>
                    <label>Não</label>
                    <input type="radio" name="anotherLanguage" value ="Não" class="anotherLanguageNo" required>
                </div>

                <div class="anotherLanguage">
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="enterAnotherLanguage1" type="text" id="styleInput" class="error"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Informe o idioma:</label>
                        </div>               
                    </div>
                </div>
                <div class="addAnotherLang">
                    <a href="##" class="addLang">Adicionar</a>
                    <a href="##" class="removeLang">Remover</a>
                </div>

                <h4>Você tem alguma habilidade com armas?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="weaponSkill" value ="Sim" class="weaponSkillYes" required>
                    <label>Não</label>
                    <input type="radio" name="weaponSkill" value ="Não" class="weaponSkillNo"required>
                </div>
                <div class="weaponSkill">
                    <div class="explanation">
                        <p>Explique</p>
                        <textarea name="explanationweaponSkill" cols="50" rows="10"></textarea>
                    </div>
                </div>

                <h4>Você viajou para algum país nos últimos 5 anos?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="travelToOtherContries" value ="Sim" class="travelToOtherContriesYes" required>
                    <label>Não</label>
                    <input type="radio" name="travelToOtherContries" value ="Não" class="travelToOtherContriesNo" required>
                </div>

                <div class="travelToOtherContries">
                    <select name="travelToOtherContries1" class="country" >
                        <option selected disabled>Escolha</option>
                    </select>
                </div>
                <div class="addTravelToOtherContries">
                    <div class="addAnotherCountry">
                        <a href="##" class="addCountry">Adicionar</a>
                        <a href="##" class="removeCountry">Remover</a>
                    </div>
                </div>
                <h4>Você contribui com alguma organização social ou de caridade?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="charityOrganization" value ="Sim" class="charityOrganizationYes" required>
                    <label>Não</label>
                    <input type="radio" name="charityOrganization" value ="Não" class="charityOrganizationNo" required>
                </div>
                <div class="charityOrganization">
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="charityOrganizationName1" type="text" id="styleInput" > 
                            <label class="labelInput">Nome da Organização</label>
                        </div>               
                    </div>
                </div>
                <div class="addAnotherCharityOrganization">
                    <a href="##" class="addCharityOrganization" >Adicionar</a>
                    <a href="##" class="removeCharityOrganization" >Remover</a>
                </div>

                <h4>Você já prestou Serviço Militar?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="militaryService" value ="Sim" class="militaryServiceYes" required>
                    <label>Não</label>
                    <input type="radio" name="militaryService" value ="Não" class="militaryServiceNo" required>
                </div>

                <div class="militaryService">
                    <label>Em qual ramo das Forças Armadas você pertenceu?</label>
                    <select name="armedForces">
                        <option value="escolha" selected disabled>Escolha</option>
                        <option value="Marinha">Marinha</option>
                        <option value="Exército">Exército</option>
                        <option value="Aeronáutica">Aeronáutica</option>
                    </select>

                    <div class="form-control">
                        <div class="inputControl">
                            <input name="patent" type="text" id="styleInput" > 
                            <label class="labelInput">Informe a patente</label>
                        </div>               
                    </div>
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="specialty" type="text" id="styleInput" > 
                            <label class="labelInput">Informe a especialidade</label>
                        </div>               
                    </div>

                    <div class="form-control">
                        <label>Data de início</label>
                        <input  class="insertDate" name="militaryServiceStartDate" type="date" min="1920-01-01" >    
                    </div>
                    <div class="form-control">
                        <label>Data de término</label>
                        <input  class="insertDate" name="militaryServiceEndDate" type="date" min="1920-01-01" >    
                    </div>
                </div>

                <h4>Você já ficou ilegal nos EUA?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="illegalInTheUS" value ="Sim" class="illegalInTheUSYes" required>
                    <label>Não</label>
                    <input type="radio" name="illegalInTheUS" value ="Não" class="illegalInTheUSNo" required>
                </div>
                <div class="illegalInTheUS">
                    <div class="explanation">
                        <p>Explique</p>
                        <textarea name="explanationIllegalInTheUS" cols="50" rows="10"></textarea>
                    </div>
                </div>

                <h4>Você já foi deportado de algum país?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="deported" value ="Sim" class="deportedYes" required>
                    <label>Não</label>
                    <input type="radio" name="deported" value ="Não" class="deportedNo" required>
                </div>
                <div class="deported">
                    <div class="explanation">
                        <p>Explique</p>
                        <textarea name="explanationDeported" cols="50" rows="10"></textarea>
                    </div>
                </div>

                <h4>Você já estudou nos EUA com visto de Turismo?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="studiedWithB2Visa" value ="Sim" class="studiedWithB2VisaYes" required>
                    <label>Não</label>
                    <input type="radio" name="studiedWithB2Visa" value ="Não" class="studiedWithB2VisaNo" required>
                </div>
                <div class="studiedWithB2Visa">
                    <div class="explanation">
                        <p>Explique</p>
                        <textarea name="explanationStudiedWithB2Visa" cols="50" rows="10"></textarea>
                    </div>
                </div>


                <h4>Você possui alguma aplicação ou reserva de dinheiro?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="cashReserve" value ="Sim" class="cashReserveYes" required>
                    <label>Não</label>
                    <input type="radio" name="cashReserve" value ="Não" class="cashReserveNo" required>
                </div>

                <div class="cashReserve">
                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="cashReserveAmount" type="text" id="styleInput" class="error" minlength="6" maxlength="10" >
                            <label class="labelInput" >Média do valor aplicado ou reservado</label>
                            <small>Apenas números</small>
                        </div>
                    </div>
                </div>

                <h3>Envio de documentos</h3>
                <div class="visaUpload">
                    <div class="form-control">
                        <h4>Foto do visto, caso possua(página da foto com os números)</h4>
                        <input name="visaToUpload" type="file" accept= ".jpeg, .jpg, .png">
                    </div>
                </div>

                
                <div class="insertPassport">
                    <div class="form-control">
                        <h4>Foto do passaporte, caso possua</h4>
                        <input type="file" name="passportToUpload" accept= ".jpeg, .jpg, .png, .pdf">
                        <small>Página da foto com o código de barras</small>
                    </div>
                </div>              

                <div class="idCard">
                    <div class="form-control">
                        <h4>Foto do RG frente e verso</h4>
                        <input name="idCardToUpload[]" multiple  = "multiple" type="file" accept= ".jpeg, .jpg, .png, .pdf" required>
                    </div>
                </div>

                <div class="birthCertificate">
                    <div class="form-control">
                        <h4>Foto do cpf ou certidão de nascimento</h4>
                        <input name="birthCertificateToUpload" type="file" accept= ".jpeg, .jpg, .png, .pdf" required>
                    </div>
                </div>

                <h4>Você declara imposto de renda?</h4>
                <div class="radioButton">
                    <label>Sim</label>
                    <input type="radio" name="incomeTax" value ="Sim" class="incomeTaxYes" required>
                    <label>Não</label>
                    <input type="radio" name="incomeTax" value ="Não" class="incomeTaxNo" required>
                </div>

                <div class="incomeTax">
                    <div class="form-control">
                        <h4>Envie uma cópia da sua declaração de IR</h4>
                        <input type="file" name="incomeTaxToUpload" accept= ".jpeg, .jpg, .png, .pdf">
                    </div>
                </div>

                <div class="form-control">
                    <button type="submit"  name="action">Enviar</button>  
                </div>
                   
            </fieldset>
        </form>
    </div>
    <script type="module" src="pag5.js"></script> 
</body>
</html>