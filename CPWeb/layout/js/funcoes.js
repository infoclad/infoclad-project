// JScript File
//function fazlogoff() {
//	if(confirm('Realizar logoff?')) {
//		location.href = '/trabalhophp/index.php'
//	}
//}

function ValidaEmail(quem) {
	str_1 = quem.value;
	str_2 = str_1.split(","); 
	var reEmail = /^[\w-]+(\.[\w-]+)*@(([A-Za-z\d][A-Za-z\d-]{0,61}[A-Za-z\d]\.)+[A-Za-z]{2,6}|\[\d{1,3}(\.\d{1,3}){3}\])$/;
	Verro=0;
	msgerro = "";
	if(!str_1==""){
		for(i=0;i<str_2.length;i++){  
			if(!reEmail.test(str_2[i])) {
				msgerro += str_2[i] + '\n'; 
				Verro = 1;
			} 
		} 
	}
	if(Verro==0) {
		return true;
	} else {
		alert('Há e-mails Inválidos!: \n' + msgerro);
		quem.value="";
		quem.focus();
		return false;
	}
}
 
function digitar(){
    if (event.keyCode == 59){
		void(0);// event.returnValue = false;
        return false;
    } else {
    	return true;
	}
}


function PBrowser(objeto)
{
    var obj= document.getElementById(objeto).value;
    return obj;
}
function LetraMaiuscula(objeto){
    var l=objeto.value;
    l=l.toUpperCase();
        return  l;
    }
function LetraMinuscula(objeto){
    
        return objeto.value.strtolower();
    }
function mascaraInteiro(){
    if (event.keyCode < 48 || event.keyCode > 57){
        event.returnValue = false;
        return false;
    }
    return true;
}
function mascaraInteiroComVirgula(){
	if(event.keyCode == 44){event.returnValue = true ; return true;}
    if ( event.keyCode < 48 || event.keyCode > 57  ){
        event.returnValue = false;
        return false;
    }
    
    return true;
}
function Numeric(){//Digitação de campos numéricos
  if(isNaN(String.fromCharCode(window.event.keyCode))){return false;} 
  return true;}

function digitaCPF_CNPJ(objeto)
 {
	 if(mascaraInteiro(objeto)==false)
		{
			event.returnValue = false;
		}  
//	 if(objeto.value.length<15)
//		{
			if (objeto.value.length == 3 || objeto.value.length == 7)
			{ 
				objeto.value +='.';
			}
			if (objeto.value.length == 11)
			{
				objeto.value +='-';
			}
		//}
//		else
//		{
//			if (objeto.value.length == 2 || objeto.value.length == 6  )
//				{ 
//					objeto.value +='.';
//				}
//			if (objeto.value.length == 10)
//				{
//					objeto.value +='/';
//				}
//			if (objeto.value.length == 15)
//				{
//					objeto.value +='-';
//				}
//		}
return Numeric();
}
function digitaCPF(objeto) {
    if(mascaraInteiro(objeto)==false){
        event.returnValue = false;
    }  
if (objeto.value.length == 3 || objeto.value.length == 7) objeto.value +='.';
if (objeto.value.length == 11) objeto.value +='-';
return Numeric();
}
function validacpf(objeto){
if(objeto.value.length==0)
return ; 
	var i; 
	var s = objeto.value;
	s= s.substr(0,3) + s.substr(4,3)+ s.substr(8,3)+ s.substr(12,2)
	var c = s.substr(0,9); 
	var dv = s.substr(9,2); 
	var d1 = 0; 
	for (i = 0; i < 9; i++) 
	{ 
		d1 += c.charAt(i)*(10-i); 
	} 
	if (d1 == 0){ 
		alert("CPF Invalido!") 
		objeto.focus();
		objeto.select();
		return false; 
	} 
	d1 = 11 - (d1 % 11); 
	if (d1 > 9) d1 = 0; 
	if (dv.charAt(0) != d1) 
	{ 
		alert("CPF Invalido!") 
		objeto.focus();
		objeto.select();
		return false; 
	} 
	d1 *= 2; 
	for (i = 0; i < 9; i++) 
	{ 
		d1 += c.charAt(i)*(11-i); 
	} 
	d1 = 11 - (d1 % 11); 
	if (d1 > 9) d1 = 0; 
	if (dv.charAt(1) != d1) 
	{ 
		alert("CPF Invalido!")
		objeto.focus();
		objeto.select(); 
		return false; 
	} 
	return true; 
} 

function digitaCNPJ(objeto) {
    if(mascaraInteiro(objeto)==false){
        event.returnValue = false;
    }  
if (objeto.value.length == 2 || objeto.value.length == 6) objeto.value +='.';
if (objeto.value.length == 10) objeto.value +='/';
if (objeto.value.length == 15) objeto.value +='-';
return Numeric();}
 
function digitaData(objeto){//Digitação de campos do tipo Data
    if(mascaraInteiro(objeto)==false){
        event.returnValue = false;
    }  
  if (objeto.value.length == 2 || objeto.value.length == 5) objeto.value += '/';	 
  return Numeric();}
  
function isDate(strData){//Verifica se a data é válida ou não
   var dia, mes, ano;	
	if(strData.length < 10) return false;		
   mes = strData.substr(3,2); 
	if(mes > "12" || mes == "00") return false;	    
   dia = strData.substr(0,2);       
	if(dia=="00") return false;
	ano = strData.substr(6,4);	
	if (ano < "0200") return false;
	if (mes=="01"||mes=="03"||mes=="05"||mes=="07"||mes=="08"||mes=="10"||mes=="12"){//Meses que têm 31 dias

	   if (dia > "31") return false;}		
	if(mes=="04"||mes=="06"||mes=="09"||mes=="11"){//Meses que têm 30 dias
	   if (dia > "30") return false;}
	if(mes=="02"){	
	   if((parseInt(ano) % 4) ==0){//Ano Bisexto
	   	if (dia > "29") return false;}		
		else		
	   	if (dia > "28") return false;}	
	return true;}
	
function CriticaData(objeto){
//Para críticas em campo
   if (objeto.value=="") return true;
   var resultado=isDate(objeto.value);
   if (resultado==false){
      alert("A data digitada não é válida, por favor confira a digitação !!!");
	  objeto.value="";
	   objeto.focus();
	   objeto.select();
	   return false;}
   return true;}
  
function MascaraTelefone(objForm,  evtKeyPress) {
if(mascaraInteiro(objForm)==false){
        event.returnValue = false;
    } 
    var sMask;
    if(objForm.value.length<=8)
    {
    sMask= '9999-9999';
    }
    if(objForm.value.length>8)
    {
    sMask= '(99) 9999-9999';
    }

var i, nCount, sValue, fldLen, mskLen,bolMask, sCod, nTecla;

if(document.all) { // Internet Explorer
nTecla = evtKeyPress.keyCode; }
else if(document.layers) { // Nestcape
nTecla = evtKeyPress.which;
}

sValue = objForm.value;

// Limpa todos os caracteres de formatação que
// já estiverem no campo.
sValue = sValue.toString().replace( "-", "" );
sValue = sValue.toString().replace( "-", "" );
sValue = sValue.toString().replace( ".", "" );
sValue = sValue.toString().replace( ".", "" );
sValue = sValue.toString().replace( "/", "" );
sValue = sValue.toString().replace( "/", "" );
sValue = sValue.toString().replace( "(", "" );
sValue = sValue.toString().replace( "(", "" );
sValue = sValue.toString().replace( ")", "" );
sValue = sValue.toString().replace( ")", "" );
sValue = sValue.toString().replace( " ", "" );
sValue = sValue.toString().replace( " ", "" );
sValue = sValue.toString().replace( ":", "" );
fldLen = sValue.length;
mskLen = sMask.length;

i = 0;
nCount = 0;
sCod = "";
mskLen = fldLen;

while (i <= mskLen) {
bolMask = ((sMask.charAt(i) == "-") || (sMask.charAt(i) == ".") || (sMask.charAt(i) == "/"))
bolMask = bolMask || ((sMask.charAt(i) == "(") || (sMask.charAt(i) == ")") || (sMask.charAt(i) == " "))
bolMask = bolMask || (sMask.charAt(i) == ":")

if (bolMask) {
sCod += sMask.charAt(i);
mskLen++; }
else {
sCod += sValue.charAt(nCount);
nCount++;
}

i++;
}

objForm.value = sCod;

if (nTecla != 8) { // backspace
if (sMask.charAt(i-1) == "9") { // apenas números...
return ((nTecla > 47) && (nTecla < 58)); } // números de 0 a 9
else { // qualquer caracter...
return true;
} }
else {
return true;
}
}   
  
function MascaraCEP(cep)
{
    if(mascaraInteiro(cep)==false)
    {
        event.returnValue = false;
    }  
  if (cep.value.length == 5 )
  {
   cep.value += '-';	 
  return Numeric();
  }
}  
   
function Validar(theCPF) 
{ 
  
  if (theCPF.value == "") 
  { 
    //alert("Campo inválido. É necessário informar o CPF ou CNPJ"); 
    //theCPF.focus(); 
    //return (false); 
    return;
  } 
  if (((theCPF.value.length == 11) && (theCPF.value == 11111111111) || (theCPF.value == 22222222222) || (theCPF.value == 33333333333) || (theCPF.value == 44444444444) || (theCPF.value == 55555555555) || (theCPF.value == 66666666666) || (theCPF.value == 77777777777) || (theCPF.value == 88888888888) || (theCPF.value == 99999999999) || (theCPF.value == 00000000000))) 
  { 
    alert("CPF/CNPJ inválido."); 
    theCPF.focus(); 
    return (false); 
  } 


  if (!((theCPF.value.length == 11) || (theCPF.value.length == 14))) 
  { 
    alert("CPF/CNPJ inválido."); 
    theCPF.focus(); 
    return (false); 
  } 

  var checkOK = "0123456789"; 
  var checkStr = theCPF.value; 
  var allValid = true; 
  var allNum = ""; 
  for (i = 0;  i < checkStr.length;  i++) 
  { 
    ch = checkStr.charAt(i); 
    for (j = 0;  j < checkOK.length;  j++) 
      if (ch == checkOK.charAt(j)) 
        break; 
    if (j == checkOK.length) 
    { 
      allValid = false; 
      break; 
    } 
    allNum += ch; 
  } 
  if (!allValid) 
  { 
    alert("Favor preencher somente com dígitos o campo CPF/CNPJ."); 
    theCPF.focus(); 
    return (false); 
  } 

  var chkVal = allNum; 
  var prsVal = parseFloat(allNum); 
  if (chkVal != "" && !(prsVal > "0")) 
  { 
    alert("CPF zerado !"); 
    theCPF.focus(); 
    return (false); 
  } 

if (theCPF.value.length == 11) 
{ 
  var tot = 0; 

  for (i = 2;  i <= 10;  i++) 
    tot += i * parseInt(checkStr.charAt(10 - i)); 

  if ((tot * 10 % 11 % 10) != parseInt(checkStr.charAt(9))) 
  { 
    alert("CPF/CNPJ inválido."); 
    theCPF.focus(); 
    return (false); 
  } 
  
  tot = 0; 
  
  for (i = 2;  i <= 11;  i++) 
    tot += i * parseInt(checkStr.charAt(11 - i)); 

  if ((tot * 10 % 11 % 10) != parseInt(checkStr.charAt(10))) 
  { 
    alert("CPF/CNPJ inválido."); 
    theCPF.focus(); 
    return (false); 
  } 
} 
else 
{ 
  var tot  = 0; 
  var peso = 2; 
  
  for (i = 0;  i <= 11;  i++) 
  { 
    tot += peso * parseInt(checkStr.charAt(11 - i)); 
    peso++; 
    if (peso == 10) 
    { 
        peso = 2; 
    } 
  } 

  if ((tot * 10 % 11 % 10) != parseInt(checkStr.charAt(12))) 
  { 
    alert("CPF/CNPJ inválido."); 
    theCPF.focus(); 
    return (false); 
  } 
  
  tot  = 0; 
  peso = 2; 
  
  for (i = 0;  i <= 12;  i++) 
  { 
    tot += peso * parseInt(checkStr.charAt(12 - i)); 
    peso++; 
    if (peso == 10) 
    { 
        peso = 2; 
    } 
  } 

  if ((tot * 10 % 11 % 10) != parseInt(checkStr.charAt(13))) 
  { 
    alert("CPF/CNPJ inválido."); 
    theCPF.focus(); 
    return (false); 
  } 
} 
var s=theCPF.value;
if(s.length<12)
{
	s= s.substr(0,3) + "." +  s.substr(3,3)+ "." + s.substr(6,3)+ "-" + s.substr(9,2);
}
else
{
	s= s.substr(0,2) + "." +  s.substr(2,3)+ "." + s.substr(5,3)+ "/" + s.substr(8,4)+ "-" +s.substr(12,2);
}
theCPF.value=s;
  return(true); 
} 


function ValidaTelefone(tel){
    exp = /\(\d{2}\)\ \d{4}\-\d{4}/ 
    if(!exp.test(tel.value)){
       alert('Numero de Telefone Invalido!');
       tel.focus();}
       }
       
//  function formataCampo(campo, Mascara, evento) {         
//  var boleanoMascara;                 
//  var Digitato = evento.keyCode;        
//  exp = /\-|\.|\/|\(|\)| /g        
//  campoSoNumeros = campo.value.toString().replace( exp, "" );            
//  var posicaoCampo = 0;            
//  var NovoValorCampo="";       
//   var TamanhoMascara = campoSoNumeros.length;;                 
//   if (Digitato != 8) { 
//   // backspace                 
//   for(i=0; i<= TamanhoMascara; i++) {                         
//   boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".") || (Mascara.charAt(i) == "/"))                         
//   boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " "))                         
//   if (boleanoMascara) {                                 
//   NovoValorCampo += Mascara.charAt(i);                                   
//   TamanhoMascara++;                        
//   }else {                                 
//   NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);                                 
//   posicaoCampo++;                           
//   }                                
//   }                      
//   campo.value = NovoValorCampo;                  
//   return true;         
//   }else {                 
//   return true;         
//   }     
       
//-------------------------------------------------
// Javascript Document//adiciona mascara de cnpj
//function MascaraCNPJ(cnpj){
//   if(mascaraInteiro(cnpj)==false){
//     event.returnValue = false;
//     }               
//     return formataCampo(cnpj, '00.000.000/0000-00', event);
//     }
//     //adiciona mascara de cep
//     function MascaraCep(cep){                
//     if(mascaraInteiro(cep)==false){                
//     event.returnValue = false;        
//     }               
//     return formataCampo(cep, '00.000-000', event);
//     }
//     //adiciona mascara de data
//     function MascaraData(data){        
//     if(mascaraInteiro(data)==false){                
//     event.returnValue = false;        
//     }               
//     return formataCampo(data, '00/00/0000', event);
//     }
//     //adiciona mascara ao telefone
//     function MascaraTelefone(tel){          
//     if(mascaraInteiro(tel)==false){                
//     event.returnValue = false;        
//     }               
//     return formataCampo(tel, '(00) 0000-0000', event);
//     }
//     //adiciona mascara ao CPF
//     function MascaraCPF(cpf){        
//     if(mascaraInteiro(cpf)==false){                
//     event.returnValue = false;        
//     }               
//     return formataCampo(cpf, '000.000.000-00', event);
//     }
//     //valida telefone
//     function ValidaTelefone(tel){        
//     exp = /\(\d{2}\)\ \d{4}\-\d{4}/        
//     if(!exp.test(tel.value))                
//     alert('Numero de Telefone Invalido!');
//     }
//     //valida CEP
//     function ValidaCep(cep){        
//     exp = /\d{2}\.\d{3}\-\d{3}/        
//     if(!exp.test(cep.value))                
//     alert('Numero de Cep Invalido!');               
//     }
//     //valida data
//     function ValidaData(data){        
//     exp = /\d{2}\/\d{2}\/\d{4}/        
//     if(!exp.test(data.value))                
//     alert('Data Invalida!');                        
//     }
//     //valida o CPF digitado
//     function ValidarCPF(Objcpf){        
//     var cpf = Objcpf.value;        
//     exp = /\.|\-/g        
//     cpf = cpf.toString().replace( exp, "" );         
//     var digitoDigitado = eval(cpf.charAt(9)+cpf.charAt(10));        
//     var soma1=0, soma2=0;        
//     var vlr =11;                
//     for(i=0;i<9;i++){                
//     soma1+=eval(cpf.charAt(i)*(vlr-1));                
//     soma2+=eval(cpf.charAt(i)*vlr);                
//     vlr--;        
//     }               
//     soma1 = (((soma1*10)%11)==10 ? 0:((soma1*10)%11));        
//     soma2=(((soma2+(2*soma1))*10)%11);                
//     var digitoGerado=(soma1*10)+soma2;        
//     if(digitoGerado!=digitoDigitado)                        
//     alert('CPF Invalido!');         
//     }
//     //valida numero inteiro com mascara
//     function mascaraInteiro(){        
//     if (event.keyCode < 48 || event.keyCode > 57){                
//     event.returnValue = false;                
//     return false;        
//     }        
//     return true;
//     }
//     //valida o CNPJ digitado
//     function ValidarCNPJ(ObjCnpj){        
//     var cnpj = ObjCnpj.value;        
//     var valida = new Array(6,5,4,3,2,9,8,7,6,5,4,3,2);        
//     var dig1= new Number;        
//     var dig2= new Number;                
//     exp = /\.|\-|\ //g        
//     cnpj = cnpj.toString().replace( exp, "" );         
//     var digito = new Number(eval(cnpj.charAt(12)+cnpj.charAt(13)));                        
//     for(i = 0; i<valida.length; i++){                
//     dig1 += (i>0? (cnpj.charAt(i-1)*valida[i]):0);                  
//     dig2 += cnpj.charAt(i)*valida[i];               
//     }        
//     dig1 = (((dig1%11)<2)? 0:(11-(dig1%11)));        
//     dig2 = (((dig2%11)<2)? 0:(11-(dig2%11)));                
//     if(((dig1*10)+dig2) != digito)                  
//     alert('CNPJ Invalido!');                
//     }
//     //formata de forma generica os campos
//     function formataCampo(campo, Mascara, evento) {         
//     var boleanoMascara;                 
//     var Digitato = evento.keyCode;        
//     exp = /\-|\.|\/|\(|\)| /g        
//     campoSoNumeros = campo.value.toString().replace( exp, "" );            
//     var posicaoCampo = 0;            
//     var NovoValorCampo="";        
//     var TamanhoMascara = campoSoNumeros.length;;                 
//     if (Digitato != 8) { 
//     // backspace                 
//     for(i=0; i<= TamanhoMascara; i++) {                         
//     boleanoMascara  = ((Mascara.charAt(i) == "-") || (Mascara.charAt(i) == ".") || (Mascara.charAt(i) == "/"))                         
//     boleanoMascara  = boleanoMascara || ((Mascara.charAt(i) == "(") || (Mascara.charAt(i) == ")") || (Mascara.charAt(i) == " ")) 
//     if (boleanoMascara) {                                 
//     NovoValorCampo += Mascara.charAt(i);                                   
//     TamanhoMascara++;                        
//     }else {                                 
//     NovoValorCampo += campoSoNumeros.charAt(posicaoCampo);                                 
//     posicaoCampo++;                           
//     }                                
//     }                      
//     campo.value = NovoValorCampo;                  
//     return true;         
//     }else {                 
//     return true;         
//     }
//     } 