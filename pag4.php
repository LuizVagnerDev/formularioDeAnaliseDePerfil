<?php
session_start();

    if (isset($_POST['zipCodeAplicant'])) {
        $_SESSION['zipCodeAplicant'] = $_POST['zipCodeAplicant'];
    }

    if (isset($_POST['automaticStreetAplicant'])) {
        $_SESSION['automaticStreetAplicant'] = $_POST['automaticStreetAplicant'];
    }

    if (isset($_POST['automaticAdressAplicant'])) {
        $_SESSION['automaticAdressAplicant'] = $_POST['automaticAdressAplicant'];
    }

    if (isset($_POST['automaticDistrictAplicant'])) {
        $_SESSION['automaticDistrictAplicant'] = $_POST['automaticDistrictAplicant'];
    }
    
    if (isset($_POST['automatiCityAplicant'])) {
        $_SESSION['automatiCityAplicant'] = $_POST['automatiCityAplicant'];
    }

    if (isset($_POST['automaticEstateAplicant'])) {
        $_SESSION['automaticEstateAplicant'] = $_POST['automaticEstateAplicant'];
    }

    if (isset($_POST['zipCodeManuallyAplicant'])) {
        $_SESSION['zipCodeManuallyAplicant'] = $_POST['zipCodeManuallyAplicant'];
    }
    

    if (isset($_POST['cityManuallyAplicant'])) {
        $_SESSION['cityManuallyAplicant'] = $_POST['cityManuallyAplicant'];
    }

    if (isset($_POST['stateManuallyAplicant'])) {
        $_SESSION['stateManuallyAplicant'] = $_POST['stateManuallyAplicant'];
    }
    
    if (isset($_POST['countryAplicant'])) {
        $_SESSION['countryAplicant'] = $_POST['countryAplicant'];
    }

    if (isset($_POST['cellPhone'])) {
        $_SESSION['cellPhone'] = $_POST['cellPhone'];
    }

    if (isset($_POST['telResidential'])) {
        $_SESSION['telResidential'] = $_POST['telResidential'];
    }

    if (isset($_POST['telCommercial'])) {
        $_SESSION['telCommercial'] = $_POST['telCommercial'];
    }
    
    if (isset($_POST['otherNumbersTel'])) {
        $_SESSION['otherNumbersTel'] = $_POST['otherNumbersTel'];
    }

    if (isset($_POST['otherNumberTel1'])) {
        $_SESSION['otherNumberTel1'] = $_POST['otherNumberTel1'];
    }

    if (isset($_POST['addOtherNumberTel'])) {
        $_SESSION['addOtherNumberTel'] = $_POST['addOtherNumberTel'];

        for ($i = 2; $i <=  $_SESSION['addOtherNumberTel']; $i++) {      
            if(isset($_POST["otherNumberTel$i"])){
                $_SESSION["otherNumberTel$i"] = $_POST["otherNumberTel$i"];
            }     
            
        }
    }

    if (isset($_POST['otherAddresEmail'])) {
        $_SESSION['otherAddresEmail'] = $_POST['otherAddresEmail'];
    }

    if (isset($_POST['otherEmail1'])) {
        $_SESSION['otherEmail1'] = $_POST['otherEmail1'];
    }

    if (isset($_POST['addOtherEmail'])) {
        $_SESSION['addOtherEmail'] = $_POST['addOtherEmail'];

        for ($i = 2; $i <=  $_SESSION['addOtherEmail']; $i++) {      
            if(isset($_POST["otherEmail$i"])){
                $_SESSION["otherEmail$i"] = $_POST["otherEmail$i"];
            }         
        }
    }

    if (isset($_POST['socialMedia1'])) {
        $_SESSION['socialMedia1'] = $_POST['socialMedia1'];
    }

    if (isset($_POST['username1'])) {
        $_SESSION['username1'] = $_POST['username1'];
    }
    
    if (isset($_POST['addUsername'])) {
        $_SESSION['addUsername'] = $_POST['addUsername'];

        for ($i = 2; $i <=  $_SESSION['addUsername']; $i++) {      
            if(isset($_POST["socialMedia$i"])){
                $_SESSION["socialMedia$i"] = $_POST["socialMedia$i"];
            }         
    
            if(isset($_POST["username$i"])){
                $_SESSION["username$i"] = $_POST["username$i"];
            }    
        }
    }

    if (isset($_POST['passport'])) {
        $_SESSION['passport'] = $_POST['passport'];
    }

    if (isset($_POST['passportBrazil'])) {
        $_SESSION['passportBrazil'] = $_POST['passportBrazil'];
    }    


    if (isset($_POST['passportNumber'])) {
        $_SESSION['passportNumber'] = $_POST['passportNumber'];
    }

    if (isset($_POST['statePassport'])) {
        $_SESSION['statePassport'] = $_POST['statePassport'];
    }

    if (isset($_POST['cityPassport'])) {
        $_SESSION['cityPassport'] = $_POST['cityPassport'];
    }

    if (isset($_POST['passportIssueDate'])) {
        $_SESSION['passportIssueDate'] = $_POST['passportIssueDate'];
    }

    if (isset($_POST['passportExpirationDate'])) {
        $_SESSION['passportExpirationDate'] = $_POST['passportExpirationDate'];
    }

    if (isset($_FILES['foreignPassportNumber'])) {
        $_SESSION['foreignPassportNumber'] = $_FILES['foreignPassportNumber'];
    }

    if (isset($_FILES['foreignCityPassport'])) {
        $_SESSION['foreignCityPassport'] = $_FILES['foreignCityPassport'];
    }

    if (isset($_FILES['foreignStatePassport'])) {
        $_SESSION['foreignStatePassport'] = $_FILES['foreignStatePassport'];
    }

    if (isset($_FILES['dateOfIssueOfForeignPassport'])) {
        $_SESSION['dateOfIssueOfForeignPassport'] = $_FILES['dateOfIssueOfForeignPassport'];
    }

    if (isset($_FILES['foreignPassportExpiryDate'])) {
        $_SESSION['foreignPassportExpiryDate'] = $_FILES['foreignPassportExpiryDate'];
    }
    
    if (isset($_POST['stolenPassport'])) {
        $_SESSION['stolenPassport'] = $_POST['stolenPassport'];
    }

    if (isset($_POST['explanationStolenPassport'])) {
        $_SESSION['explanationStolenPassport'] = $_POST['explanationStolenPassport'];
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
        <form action="pag5.php" method="post">
            <fieldset>
                <legend><strong>Informações sobre Família, Trabalho e Escola</strong></legend>
               <div class="family">
                    
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="fathersName" type="text" id="styleInput" class="error"> 
                            <label class="labelInput">Nome Completo do Pai</label>
                            <small class="msgError">Apenas letras</small>
                        </div>               
                    </div>

                    <div class="form-control">
                        <label >Data de nascimento do Pai</label>
                        <input  class="insertDate" name="fathersDateOfBirth" type="date">    
                    </div>

                    <h4>Seu pai está nos EUA?</h4>
                    <div class="radioButton">
                        <label >Sim</label>
                        <input type="radio" name="fatherInUsa" value ="Sim" class="fatherInUsaYes" required>
                        <label >Não</label>
                        <input type="radio" name="fatherInUsa" value ="Não" class="fatherInUsaNo" required>
                    </div>

                    <div class="fatherInUsa">
                        <label>Selecione o Status do seu Pai nos EUA</label>
                        <select name="fatherStatus">
                                <option value="" selected disabled>Escolha</option>
                                <option value="cidadao Americano">Cidadão Americano</option>
                                <option value="residente Permanente">Residente Permanente(possui green card)</option>
                                <option value="Não-Imigrante">Não-Imigrante</option>
                                <option value="Não sei">Não sei</option>
                            </select>
                    </div>

                    <div class="form-control">
                        <div class="inputControl">
                            <input name="mothersName" type="text" id="styleInput" class="error"> 
                            <label class="labelInput" >Nome Completo da sua Mãe</label>
                            <small class="msgError">Apenas letras</small>
                        </div>               
                    </div>

                    <div class="form-control">
                        <label >Data de nascimento da sua Mãe</label>
                        <input  class="insertDate" name="mothersDateOfBirth" type="date">    
                    </div>
        
                    <h4>Sua Mãe está nos EUA?</h4>
                    <div class="radioButton">
                        <label >Sim</label>
                        <input type="radio" name="motherInUsa" value ="Sim" class="motherInUsaYes" required>
                        <label >Não</label>
                        <input type="radio" name="motherInUsa" value ="Não" class="motherInUsaNo" required>
                    </div>

                    <div class="motherInUsa">
                        <label>Selecione o Status da sua Mãe nos EUA</label>
                        <select name="motherStatus">
                            <option value="" selected disabled>Escolha</option>
                            <option value="cidadao Americano">Cidadão Americano</option>
                            <option value="residente Permanente">Residente Permanente(possui green card)</option>
                            <option value="Não-Imigrante">Não-Imigrante</option>
                            <option value="Não sei">Não sei</option>
                        </select>
                    </div>

                    <h4>Você tem algum parente imediato(cônjuge, filhos ou irmãos) nos EUA?</h4>
                    <div class="radioButton">
                        <label >Sim</label>
                        <input type="radio" name="relativeInUsa" value ="Sim" class="relativeInUsaYes" required>
                        <label >Não</label>
                        <input type="radio" name="relativeInUsa" value ="Não" class="relativeInUsaNo" required>
                    </div>
                    <div class="relativeInUsa">
                        <div class="form-control">
                            <div class="inputControl">
                                <input name="otherRelativeName" type="text" id="styleInput" class="error"> 
                                <small class="msgError">Apenas letras</small>
                                <label class="labelInput" >Nome Completo do outro parente</label>
                            </div>               
                        </div>

                        <label>relacionamento com você</label>
                        <select name = "kinship">
                            <option value="" selected disabled>Escolha</option>
                            <option value="conjuge">Cônjuge</option>
                            <option value="filho">Filho(a)</option>
                            <option value="irmao">Irmão</option>
                        </select>
                        
                        <label>Selecione o status do seu parente nos EUA</label>
                        <select name= "relativesStatus">
                            <option value="" selected disabled>Escolha</option>
                            <option value="cidadao Americano">Cidadão Americano</option>
                            <option value="residente Permanente">Residente Permanente(possui green card)</option>
                            <option value="Não-Imigrante">Não-Imigrante</option>
                            <option value="Não sei">Não sei</option>
                        </select>
                    </div>

                    <h4>Você tem algum outro parente nos EUA?</h4>
                    <div class="radioButton">
                        <label >Sim</label>
                        <input type="radio" name="anotherRelative" value ="Sim" required>
                        <label >Não</label>
                        <input type="radio" name="anotherRelative" value ="Não" required>
                    </div>  
               </div>

                <div class="occupation">
                   <h4>Qual é a sua ocupação atualmente?</h4>
                   <select class="occupationStatus" name="occupation" required>
                       <option value="" selected disabled>Escolha</option>
                       <option value="Trabalho Formal">Trabalho Formal(carteira assinada)</option>
                        <option value="Autônomo">Autônomo</option>
                        <option value="Desempregado">Desempregado(a)</option>
                        <option value="Aposentado">Aposentado</option>
                        <option value="Estudante">Estudante</option>
                        <option value="Dona de Casa">Dona de Casa</option>
                    </select>
               
                    <div class="work">
                        <div class="form-control">
                            <div class="inputControl">
                                <input name="professionName" type="text" id="styleInput" class="error" maxlength="50"> 
                                <small class="msgError">Apenas letras</small>
                                <label class="labelInput" >informe a sua profissão</label>
                            </div>               
                        </div>
                        <div class="form-control">
                            <div class="inputControl">
                                <input name="employerName" type="text" id="styleInput" class="error" maxlength="50"> 
                                <small class="msgError">Apenas letras</small>
                                <label class="labelInput" >Nome da Empresa</label>
                            </div>  
                        </div>
                       
                        <div class="form-control">
                           <div class="inputNumControl">
                               <input name="telWork" type="text" id="styleInput" class="error" minlength="8" maxlength="11">
                               <small>Apenas números</small>
                               <label class="labelInput">Telefone da Empresa</label> 
                           </div>
                       </div>
                       
                       <div class="workAddress">
                           <div class="form-control">
                               <div class="inputNumControl">
                                   <input name="zipCodeWork" type="text" id="styleInput" class="zipCodeWork" maxlength="8" minlength="8"> 
                                   <small class="msgError">Apenas números</small>
                                   <label class="labelInput" >Insira o cep da Empresa</label> 
                               </div>
                           </div>
                           <div class="form-control">
                               <input name="automaticStreetWork" class="automaticStreetWork" type="text" id="styleInput">
                               <label class="labelInput">Endereço</label>
                           </div>

                           <div class="form-control">
                               <input name="automaticAdressWork" type="text" id="styleInput">
                               <label class="labelInput">Número/ Complemento</label>
                           </div>

                           <div class="form-control">
                               <input name="automaticDistrictWork" type="text" id="styleInput" class="automaticDistrictWork">
                               <label class="labelInput">Bairro</label>
                           </div>


                           <div class="form-control">
                               <input name="automaticCityWork" type="text" id="styleInput" class="automaticCityWork">
                               <label class="labelInput">Cidade</label>
                           </div>
                           
                           <div class="form-control">
                               <input name="automaticEstateWork" type="text" id="styleInput" class="automaticEstateWork">
                               <label class="labelInput">Estado</label>
                            </div>   
                        </div>

                        <label >País</label>
                        <select name="countryEmployer" class="country" >
                            <option value="" selected disabled>Escolha</option>
                        </select>

                        <div class="form-control">
                            <label >Data de início </label>
                            <input  class="insertDate" name="startDateWork" type="date"  min="1900-01-01">    
                        </div>
    
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="wage" type="text" id="styleInput" class="error" minlength="6" maxlength="10">
                                <small>Apenas números</small>
                                <label class="labelInput">Valor da renda mensal na moeda local</label>
                                
                            </div>
                        </div>
                        
                        <div class="descriptionOfActivities">
                            <div class="explanation">
                                <h4>Faça uma breve descrição das suas atividades</h4>
                                <textarea name="descriptionOfActivities" cols="50" rows="10"></textarea>
                            </div>
                        </div>     
                    </div>

                 
                     <div class="school">
                        <div class="form-control">
                            <div class="inputControl">
                                <input name="schoolName" type="text" id="styleInput" class="error" maxlength="50"> 
                                <small class="msgError">Apenas letras</small>
                                <label class="labelInput" >Nome da Escola</label>
                            </div>   
                        </div>
                         
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="telSchool" type="text" id="styleInput" class="error" minlength="8" maxlength="11">
                                <small>Apenas números</small>
                                <label class="labelInput">Telefone ds Escola</label> 
                            </div>
                        </div>
     
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="zipCodeSchool" type="text" id="styleInput" class="zipCodeSchool" minlength="5" maxlength="8"> 
                                <small class="msgError">Apenas números</small>
                                <label class="labelInput" >Cep da Escola</label>
                            </div>
                        </div>
    
                        <div class="automaticAddress">
                            <div class="form-control">
                                <input name="automaticStreetSchool" class="automaticStreetSchool" type="text" id="styleInput">
                                <label class="labelInput">Endereço</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticAddressSchool" type="text" id="styleInput">
                                <label class="labelInput">Número/ Complemento</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticDistrictSchool" type="text" id="styleInput" class="automaticDistrictSchool">
                                <label class="labelInput">Bairro</label>
                            </div>
    
    
                            <div class="form-control">
                                <input name="automatiCitySchool" type="text" id="styleInput" class="automatiCitySchool">
                                <label class="labelInput">Cidade</label>
                            </div>
    
                            <div class="form-control">
                                <input name="automaticEstateSchool" type="text" id="styleInput" class="automaticEstateSchool">
                                <label class="labelInput">Estado</label>
                            </div>                                                    
                        </div>
     
                        <label >País</label>
                        <select name="countrySchool" class="country" >
                            <option value="" selected disabled>Escolha</option>
                        </select>
                     
                        <div class="form-control">
                            <label >Data de início</label>
                            <input  class="insertDate" name="startDateSchool" type="date"  min="1900-01-01">    
                        </div>

                        <div class="form-control">
                            <input name="coursePeriod" type="text" id="styleInput">
                            <label class="labelInput">Qual ano está cursando?</label>                  
                       </div>
                    </div>

                <h4>Já trabalhou anteriormente?</h4>
                <div class="radioButton">
                    <label >Sim</label>
                    <input type="radio" name="previousWork" value ="Sim" class="previousWorkYes" required>
                    <label >Não</label>
                    <input type="radio" name="previousWork" value ="Não" class="previousWorkNo" required>
                </div>

                <div class="previousWork">
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="professionNamePreviousWork" type="text" id="styleInput" class="error" maxlength="50"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput" >Profissão exercida</label>
                        </div>               
                    </div>
                    
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="employerNamePreviousWork" type="text" id="styleInput" class="error" maxlength="50"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Nome da Empresa</label>
                        </div>  
                    </div>  
                    
                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="telPreviousWork" type="text" id="styleInput" class="error" minlength="8" maxlength="11">
                            <small>Apenas números</small>
                            <label class="labelInput">Telefone da Empresa</label> 
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="inputControl">
                            <input name="supervisorName" type="text" id="styleInput" class="error" maxlength="50"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Nome do Supervisor</label>
                        </div>  
                    </div>  

                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="zipCodePreviousWork" type="text" id="styleInput" class="zipCodePreviousWork" maxlength="8" minlength="8"> 
                            <small class="msgError">Apenas números</small>
                            <label class="labelInput" >Insira o cep da Empresa</label>
                        </div>
                    </div>

                    <div class="automaticAddress">
                        <div class="form-control">
                            <input name="automaticStreetPreviousWork" class="automaticStreetPreviousWork" type="text" id="styleInput">
                            <label class="labelInput">Endereço</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticAdressPreviousWork" type="text" id="styleInput">
                            <label class="labelInput">Número/ Complemento</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticDistrictPreviousWork" type="text" id="styleInput" class="automaticDistrictPreviousWork">
                            <label class="labelInput">Bairro</label>
                        </div>


                        <div class="form-control">
                            <input name="automatiCityPreviousWork" type="text" id="styleInput" class="automatiCityPreviousWork">
                            <label class="labelInput">Cidade</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticEstatePreviousWork" type="text" id="styleInput" class="automaticEstatePreviousWork">
                            <label class="labelInput">Estado</label>
                        </div>                                                
                    </div>
                    <label >País</label>
                    <select name="countryPreviousWork" class="country" >
                        <option value="" selected disabled>Escolha</option>
                    </select>

                    <div class="form-control">
                        <label >Data de início </label>
                        <input  class="insertDate" name="startDatePreviousWork" type="date"  min="1900-01-01">    
                    </div>

                    <div class="form-control">
                        <label >Data de término</label>
                        <input  class="insertDate" name="endDatePreviousWork" type="date"  min="1900-01-01">    
                    </div>
                    
                    <div class="descriptionOfActivities">
                        <div class="explanation">
                            <h4>Faça uma breve descrição das suas atividades</h4>
                            <textarea name="descriptionOfActivitiesPreviousWork" cols="50" rows="10"></textarea>
                        </div>
                    </div>
  
                    <h4>Deseja inserir as informações do penúltimo trabalho?</h4>
                    <div class="radioButton">
                        <label >Sim</label>
                        <input type="radio" name="penultimateWork" value ="Sim" class="penultimateWorkYes">
                        <label >Não</label>
                        <input type="radio" name="penultimateWork" value ="Não" class="penultimateWorkNo">
                    </div>
                </div>

                <div class="penultimateWork">
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="professionNamePenultimateWork" type="text" id="styleInput" class="error" maxlength="50"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput" >Profissão exercida</label>
                        </div>               
                    </div>
                    
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="employerNamePenultimateWork" type="text" id="styleInput" class="error" maxlength="50"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Nome da Empresa</label>
                        </div>  
                    </div>  
                    
                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="telPenultimateWork" type="text" id="styleInput" class="error" minlength="8" maxlength="11">
                            <small>Apenas números</small>
                            <label class="labelInput">Telefone da Empresa</label> 
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="inputControl">
                            <input name="supervisorNamePenultimateWork" type="text" id="styleInput" class="error" maxlength="50"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Nome do Supervisor</label>
                        </div>  
                    </div>  

                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="zipCodePenultimateWork" type="text" id="styleInput" class="zipCodePenultimateWork" maxlength="8" minlength="8"> 
                            <small class="msgError">Apenas números</small>
                            <label class="labelInput" >Insira o cep da Empresa</label>
                        </div>
                    </div>

                    <div class="automaticAddress">
                        <div class="form-control">
                            <input name="automaticStreetPenultimateWork" class="automaticStreetPenultimateWork" type="text" id="styleInput">
                            <label class="labelInput">Endereço</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticAdressPenultimateWork" type="text" id="styleInput">
                            <label class="labelInput">Número/ Complemento</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticDistrictPenultimateWork" type="text" id="styleInput" class="automaticDistrictPenultimateWork">
                            <label class="labelInput">Bairro</label>
                        </div>


                        <div class="form-control">
                            <input name="automatiCityPenultimateWork" type="text" id="styleInput" class="automatiCityPenultimateWork">
                            <label class="labelInput">Cidade</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticEstatePenultimateWork" type="text" id="styleInput" class="automaticEstatePenultimateWork">
                            <label class="labelInput">Estado</label>
                        </div>                                                
                    </div>
                    <label >País</label>
                    <select name="countryPenultimateWork" class="country" >
                        <option value="" selected disabled>Escolha</option>
                    </select>

                    <div class="form-control">
                        <label >Data de início </label>
                        <input  class="insertDate" name="startDatePenultimateWork" type="date"  min="1900-01-01">    
                    </div>
    
                    <div class="form-control">
                        <label >Data de término</label>
                        <input  class="insertDate" name="endDatePenultimateWork" type="date"  min="1900-01-01">    
                    </div>
                    
                    <div class="descriptionOfActivities">
                        <div class="explanation">
                            <h4>Faça uma breve descrição das suas atividades</h4>
                            <textarea name="descriptionOfActivitiesPenultimateWork" cols="50" rows="10"></textarea>
                        </div>
                    </div>
                </div>




                <h4>Possui nível superior, técnico ou está cursando algum atualmente?</h4>

                <div class="radioButton">
                    <label >Sim</label>
                    <input type="radio" name="faculty" value ="Sim" class="facultyYes" required>
                    <label >Não</label>
                    <input type="radio" name="faculty" value ="Não" class="facultyNo" required>
                </div>

                <div class="faculty">
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="facultylName" type="text" id="styleInput" class="error" maxlength="50"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Nome da Instituição</label>
                        </div>   
                    </div>
                    
                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="telFaculty" type="text" id="styleInput" class="error" minlength="8" maxlength="11">
                            <small>Apenas números</small>
                            <label class="labelInput">Telefone da Escola</label> 
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="zipCodeFaculty" type="text" id="styleInput" class="zipCodeFaculty" maxlength="8" minlength="8"> 
                            <small class="msgError">Apenas números</small>
                            <label class="labelInput" >Cep da Escola</label>
                        </div>
                    </div>

                    <div class="automaticAddress">
                        <div class="form-control">
                            <input name="automaticStreetFaculty" class="automaticStreetFaculty" type="text" id="styleInput">
                            <label class="labelInput">Endereço</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticAdressFaculty" type="text" id="styleInput">
                            <label class="labelInput">Número/ Complemento</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticDistrictFaculty" type="text" id="styleInput" class="automaticDistrictFaculty">
                            <label class="labelInput">Bairro</label>
                        </div>


                        <div class="form-control">
                            <input name="automatiCityFaculty" type="text" id="styleInput" class="automatiCityFaculty">
                            <label class="labelInput">Cidade</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticEstateFaculty" type="text" id="styleInput" class="automaticEstateFaculty">
                            <label class="labelInput">Estado</label>
                        </div>                                                
                    </div>

                    <label>País</label>
                    <select name="countryFaculty" class="country" >
                        <option value="" selected disabled>Escolha</option>
                    </select>
                    
                
                    <div class="form-control">
                        <label >Data de início</label>
                        <input  class="insertDate" name="startDateFaculty" type="date"  min="1900-01-01">    
                    </div>

                    <div class="form-control">
                        <label  >Data de término</label>
                        <input  class="insertDate" name="endDateFaculty" type="date"  min="1900-01-01">    
                    </div>

                    <div class="form-control">
                       <input name="courseName" type="text" id="styleInput">
                       <label class="labelInput">Curso acadêmico</label>                  
                  </div>

                  <h4>Possui outro curso de nível superior ou técnico concluído?</h4>
                  <div class="radioButton">
                      <label >Sim</label>
                      <input type="radio" name="otherFaculty" value ="Sim" class="otherFacultyYes">
                      <label >Não</label>
                      <input type="radio" name="otherFaculty" value ="Não" class="otherFacultyNo">
                  </div>
                </div>

                
                <div class="otherFaculty">
                    <div class="form-control">
                        <div class="inputControl">
                            <input name="otherFacultName" type="text" id="styleInput" class="error maxlength="50"> 
                            <small class="msgError">Apenas letras</small>
                            <label class="labelInput">Nome da Instituição</label>
                        </div>   
                    </div>     
                    
                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="telAnotherFaculty" type="text" id="styleInput" class="error" minlength="8" maxlength="11">
                            <small>Apenas números</small>
                            <label class="labelInput">Telefone da Escola</label> 
                        </div>
                    </div>

                    <div class="form-control">
                        <div class="inputNumControl">
                            <input name="zipCodeAnotherFaculty" type="text" id="styleInput" class="zipCodeAnotherFaculty" maxlength="8" minlength="8"> 
                            <small class="msgError">Apenas números</small>
                            <label class="labelInput" >Cep da Escola</label>
                          
                        </div>
                    </div>

                    <div class="automaticAddress">
                        <div class="form-control">
                            <input name="automaticStreetOtherFaculty" class="automaticStreetOtherFaculty" type="text" id="styleInput">
                            <label class="labelInput">Endereço</label>
                        </div>

                        <div class="form-control">
                            <input name="adreesOtherFaculty" type="text" id="styleInput">
                            <label class="labelInput">Número/ Complemento</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticDistrictOtherFaculty" type="text" id="styleInput" class="automaticDistrictOtherFaculty">
                            <label class="labelInput">Bairro</label>
                        </div>


                        <div class="form-control">
                            <input name="automaticCityOtherFaculty" class="automaticCityOtherFaculty" type="text" id="styleInput">
                            <label class="labelInput">Cidade</label>
                        </div>

                        <div class="form-control">
                            <input name="automaticEstateOtherFaculty" type="text" id="styleInput" class="automaticEstateOtherFaculty">
                            <label class="labelInput">Estado</label>
                        </div>
                    </div>

                    <label>País</label>
                    <select name="countryOtherFaculty" class="country" >
                        <option value="" selected disabled>Escolha</option>
                    </select>
                    
                    <div class="form-control">
                        <label >Data de início</label>
                        <input  class="insertDate" name="startDateOtherFalculty" type="date"  min="1900-01-01">    
                    </div>

                    <div class="form-control">
                        <label >Data de término</label>
                        <input  class="insertDate" name="endDateOtherFalculty" type="date"  min="1900-01-01">    
                    </div>

                    <div class="form-control">
                       <input name="courseNameOtherFaculty" type="text" id="styleInput">
                       <label class="labelInput">Curso acadêmico</label>                  
                  </div>
                </div>

                <div class="form-control">
                    <button type="submit"  name="action">Próximo</button>      
                </div>
                    
            </fieldset>
        </form>
    </div>
    <script type="module" src="pag4.js"></script> 
</body>
</html>