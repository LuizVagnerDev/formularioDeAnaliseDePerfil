<?php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário para preenchimento de DS 160 pag 1</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    
</head>
    <body> 

        <div class="container">  
            <form method="post" action="pag2.php" enctype="multipart/form-data">
                <fieldset>
                    <legend><strong>Informações Pessoais</strong></legend>

                    <div class="personalData">

                        <div class="form-control">
                            <div class="inputControl">
                                <input name="fullName" type="text" id="styleInput" class="error"minLength = "1" required>
                                <small>Apenas letras</small>
                                <label class="labelInput">Nome Completo</label>
                            </div> 
                        </div>

                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="cpf" type="text" id="styleInput" class="error"  maxlength="11" required>
                                <small>Apenas números</small>
                                <label class="labelInput">CPF do solicitante</label> 
                            </div>
                        </div>

                        <div class="form-control">
                            <input name="email" type="email" id="styleInput" required>
                            <label class="labelInput">Insira seu E-mail</label>
                        </div>

                        <h4>Você já usou outros nomes (ou seja, casado(a), solteiro(a), religioso(a), profissional, pseudônimo, etc.)?</h4>
                        <div class="radioButton">
                            <label>Sim<label>
                                <input type="radio" name="otherNameSelect" value = "sim" class="otherNameYes" required>
                            <label>Não</label>
                            <input type="radio"name="otherNameSelect" value = "Não" class="otherNameNo" required>
                        </div>    
                        
                        <div class="otherName">    
                            <div class="form-control">
                                <div class="inputControl">
                                    <input type="text" name="otherNameUsed" id="styleInput">
                                    <small class="error" >Apenas letras</small>
                                    <label class="labelInput" >Digite seu outro nome</label>
                                </div>             
                            </div>
                        </div>


                        <h4>Você tem um código que represente seu nome?</h4>
                        <div class="radioButton">
                            <label>Sim</label>
                            <input type="radio" name="nameTelecodeSelect" value = "Sim" id = "yesTelecodeName"class="nameTelecodYes" required> 
                            <label>Não</label>
                            <input type="radio"name="nameTelecodeSelect" value = "Não" id = "noTelecodeName"class="nameTelecodNone" required>
                        </div>
                            
                        <div class="nameTelecode">
                            <div class="form-control">
                                <div class="inputControl">
                                    <input type="text" name="nameTelecode" id="styleInput">
                                    <small class="error">Apenas letras</small>
                                    <label class="labelInput" >Nome dado por telecódigo</label>
                                </div>
                            </div>
                                
                            
                            <div class="form-control">
                                <div class="inputControl">
                                    <input type="text" name="surnameTelecode" id="styleInput">
                                    <small class="error">Apenas letras</small>
                                    <label class="labelInput" >Sobrenome dado por telecódigo</label>
                                </div>
                            </div>
                        </div> 

                        <div class="radioButton">
                            <h4>Sexo</h4>
                            <label>Masculino</label>
                            <input  type="radio" name="genderSelect" value ="Masculino" id = "masc" required>
                            <label>Feminino</label>
                            <input  type="radio" name="genderSelect" value ="Feminino" id = "fem" required>
                        </div>

                        <div class="birth">
                            <h4>Data de Nascimento</h4>
                            <div class="form-control">
                                <input class="insertDate" name="birth" type="date"  min="1920-01-01" required>    
                            </div>
                        </div>
                            
                        <div class="nationality">
                            <h4>Estado (UF)</h4>
                            <select name="stateOfBirth" class="state" required>
                                <option value="" selected disabled>Escolha</option>
                                <option value="nd">Nenhuma das opções</option>
                            </select>
                        </div>
                            
                        <div class="otherCountry">
                            <div class="form-control">
                                <div class="inputControl">
                                    <input name="otherCity" type="text" id="styleInput" class="error">
                                    <small>Apenas letras</small>
                                    <label class="labelInput">Insira o nome da Cidade de nascimento</label>
                                </div>
                            </div>
                        
                            <div class="form-control">
                                <div class="inputControl">
                                    <input name="otherState" type="text" type="text" id="styleInput" class="error">
                                    <small>Apenas letras</small>
                                    <label class="labelInput">Insira o nome do Estado de nascimento</label>
                                </div>
                            </div>

                            <div class="form-control">
                                <label>País</label> 
                                <select name="otherCountry" class="country">
                                    <option value="" selected disabled>Escolha</option>
                                </select> 
                            </div>
                            
                        </div>

                        <div class="cityState">
                            <label >Cidade</label>
                            <select name="cityBirth" class="city" >
                            </select>
                        </div>
                    </div> 


                    <div class="maritalStatus">
                        <h4>Estado civil</h4>
                        <select name="maritalStatus" id="maritalStatusSelect" required>
                            <option value="escolha" selected disabled>Escolha</option>
                            <option value="Casado(a)">Casado(a)</option>
                            <option value="Solteiro(a)">Solteiro(a)</option>
                            <option value="União estável">União estável</option>
                            <option value="Divorciado(a)">Divorciado(a)</option>
                            <option value="Viúvo(a)">Viúvo(a)</option>
                        </select>
                    </div>
                        
                        <div class="spouse">
                            <div class="form-control">
                                <div class="inputControl">
                                    <input name="nameSpouse" type="text" id="styleInput">
                                    <small class="error">Apenas letras</small>
                                    <label class="labelInput" >Nome completo do(a) cônjuge</label>
                                </div>                
                            </div>

                            <div class="birthSp">
                                <label>Data de nascimento do cônjuge</label>
                                <input class="insertDate" name="birthSpouse" type="date" min="1920-01-01">    
                            </div>

                            <label>Local de nascimento do cônjuge(UF)</label>
                            <select name="stateBirthSpouse" class="stateSpouse">
                                <option value="" selected disabled>Escolha</option>
                                <option value="nd">Nenhuma das opções</option>
                            </select>

                            <div class="otherCountrySpouse">
                                <div class="form-control">
                                    <div class="inputControl">
                                        <input name="otherCitySpouse" type="text" id="styleInput">
                                        <small class="error">Apenas letras</small>
                                        <label class="labelInput" >Cidade de nascimento do(a) Esposo(a)</label>
                                    </div>                              
                                </div>

                                <div class="form-control">
                                    <div class="inputControl">
                                        <input name="otherStateSpouse" type="text" id="styleInput">
                                        <small class="error">Apenas letras</small>
                                        <label class="labelInput" >Estado de nascimento do(a) Esposo(a)</label>
                                    </div>                        
                                </div>

                                <label>País de nascimento do(a) Esposo(a)</label>
                                <select name="countrySpouse" class="country">
                                    <option value="" selected disabled>Escolha</option>
                                </select>
                            </div>

                            <div class="cityStateSpouse">
                                <label>Cidade</label>
                                <select name="cityBirthSpouse" class="citySpouse">
                                </select>
                    
                            
                            </div>
                        </div>
                    
                        <div class="exSpouse">
                
                            <div class="form-control">
                                <div class="inputControl">
                                    <input name="nameExSpose" type="text" id="styleInput">
                                    <small class="error">Apenas letras</small>
                                    <label class="labelInput">Nome completo do ex cônjuge</label>
                                </div>
                            </div>           

                            <div class="birthEx">
                                <label>Data de nascimento do ex cônjuge</label>
                                <input class="insertDate" name="birthExSpouse" type="date" min="1920-01-01">    
                            </div>
                
                            <label>Local de nascimento do(a) ex cônjuge(UF)</label>
                            <select name="stateBirthExSpouse" class="stateExSpouse" >
                                <option value="" selected disabled></option>
                                <option value="nd">Nenhuma das opções</option>
                            </select>
                
                            <div class="otherCountryExSpouse">
                                <div class="form-control">
                                    <div class="inputControl">
                                        <input name="otherCityExSpouse" type="text" id="styleInput">
                                        <small class="error">Apenas letras</small>
                                        <label class="labelInput" >Cidade de nascimento do(a) ex cônjuge</label>
                                    </div>
                                </div>           

                                <div class="form-control">
                                    <div class="inputControl">
                                        <input name="otherStateExSpouse" type="text" id="styleInput">
                                        <small class="error">Apenas letras</small>
                                        <label class="labelInput" >Estado de nascimento do(a) ex cônjuge</label>
                                    </div>
                                </div>

                                <label>País de nascimento do(a) ex cônjuge</label>
                                <select name="countryExSpouse" class="country">
                                    <option value="" selected disabled>Escolha</option>
                                </select>
                            </div>

                            <div class="cityStateExSpouse">
                                <label>Cidade</label>
                                <select name="cityBirthExSpouse" class="cityExSpouse">
                                </select>
                            </div>
                
                            <div class="dateMarried">
                                <label>Data Casamento</label>
                                <input class="insertDate" name="dateMarried" type="date" min="1920-01-01">    
                            </div>
                
                            <div class="dateDivorced">
                                <label>Data de Divórcio</label>
                                <input class="insertDate" name="dateDivorced" type="date" min="1920-01-01">    
                            </div>
                        </div>                      

                    <div class="radioButton">
                        <h4>Você possui outra nacionalidade?</h4>
                        <label>Sim</label>
                        <input type="radio" name="otherNationalitySelect" value = "Sim" id = "yesOtherNat" class="anotherNationalityYes" required>
                        <label>Não</label>
                        <input type="radio" name="otherNationalitySelect" value = "Não" id = "noOtherNat" class="anotherNationalityNo" required>
                    </div>

                    <div class="otherCountryBirth">
                        <label>Selecione o País de sua segunda nacionalidade</label>
                        <select name="secondCitizenship" class="country">
                            <option value="" selected disabled>Escolha</option>
                        </select>
                        <div class="radioButton">
                            <h4>Você possui passaporte da sua segunda nacionalidade</h4>
                            <label>Sim</label>
                            <input type="radio" name="otherPassportSelect" value = "Sim" id = "yesOtherPass" class="otherPassportYes">
                            <label>Não</label>
                            <input type="radio" name="otherPassportSelect" value = "Não" id = "noOtherPass" class="otherPassportNo">
                        </div>
                        <div class="otherPassportNumber">
                            <div class="form-control">
                                
                                <input  name="otherPassport" type="text" id="styleInput" minlength="8" maxlength="8">    
                                <small>Apenas números</small>
                                <label class="labelInput">Insira o número do passaporte estrangeiro</label>
                            </div>
                        </div>
                    </div>
                            
                    <div class="radioButton">
                        <h4>Você é residente permanente de algum país que não seja o de sua origem?</h4>
                        <labelvalue="yes">Sim</label>
                        <input  type="radio" name="residentOtherSelect" value = "Sim" id = "yesOtherRes" class="residentOtherYes" required>
                        <label>Não</label>
                        <input type="radio" name="residentOtherSelect" value = "Não" id = "noOtherRes" class="residentOtherNo" required>
                    
                        <div class="countryResidence">
                            <h4>Selecione o país em que reside</h4>
                            <select name="otherCountryResident" class="country">
                                <option value="" selected disabled>Escolha</option>
                            </select>
                        </div>
                    </div>

                    <div class="radioButton">
                        <h4>Você possui número de segurança Social dos EUA (SSN)?</h4>
                        <label>Sim</label>
                        <input type="radio" name="socialSecuritySelect" value = "Sim" id = "yesSSN" class="socialSecurityYes" required>
                        <label>Não</label>
                        <input type="radio" name="socialSecuritySelect" value = "Não" id = "noSSN" class="socialSecurityNo required"required>  
                    </div>
                        
                    <div class="socialSecurityNumber">
                        <div class="form-control">        
                            <div class="inputNumControl">
                                <input name="socialSecurity" type="text" id="styleInput" class="error" minlength="9" maxlength="9">
                                <small>Apenas números</small>
                                <label class="labelInput">Insira o número do seu Social Security</label>                   
                            </div>
                        </div> 
                    </div> 

                    <div class="radioButton">
                        <h4>Você possui número de Identificação de Contribuinte dos EUA (ITIN /TAX-ID)?</h4>
                        <label>Sim</label>
                        <input type="radio" name="idNumberEuaSelect" value = "Sim" id = "yesIdNum" class="idNumberEuaYes" required>
                        <label>Não</label>
                        <input type="radio" name="idNumberEuaSelect" value = "Não" id = "noIdNum" class="idNumberEuaNo" required>                       
                    </div>  

                    <div class="idContributorNumber">
                        <div class="form-control">
                            <div class="inputNumControl">
                                <input name="idNumberEua" type="text" id="styleInput" class="error" minlength="9" maxlength="9">
                                <small>Apenas números</small>
                                <label class="labelInput">Insira o número de Identificação de Contribuinte dos EUA</label>
                            </div>
                        </div> 
                    </div> 
                    
                    <div class="form-control">      
                        <button type="submit"  name="action">Próximo</button>
                    </div>
                
                </fieldset>
            </form>
        </div>

        <script type="module" src="./pag1.js"></script>       
    </body>
</html>


