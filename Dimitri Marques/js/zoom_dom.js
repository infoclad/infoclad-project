var estagioCorpo = 3;
var DOM= document.getElementById;
var obb,obb1,obb2,obb3,obb4,obb5,obb6,obb7,obb8;
var frutas,legumes,verduras,acougue,avicolas,peixaria,ovos,frutosdomar,laticinios,flores
var aviso
var obb10 = new Array;
var obb11 = new Array;
var botaoaumentadiminui1,botaoaumentadiminui2,textoaumentadiminui1,textoaumentadiminui2;

function iniciaIdTitulos()
{
    var cont=1;
    var val = "titulochamada" + cont;
    obb10[cont]=document.getElementById(val);
    while (obb10[cont])
    {
        cont = cont+1;
        val = "titulochamada" + cont; 
        obb10[cont]=document.getElementById(val);
    }
}


function iniciaIdChamadas()
{
    var cont=1;
    var val  = "chamada" + cont;
    obb11[cont]=document.getElementById(val);
    while (obb11[cont])
    {
        cont = cont+1;
        val  = "chamada" + cont;
        obb11[cont]=document.getElementById(val);  
    }
}


function alteraIdTitulos(novoCorpo)
{
    if (obb10.length>0)
    {
        for (i=1;i<=obb10.length-1;i++)
        {
            if (obb10[i]) {
                obb10[i].style.fontSize=novoCorpo;
            }
        }
    }	
}

function alteraIdChamadas(novoCorpo)
{
    if (obb11.length>0)
    {
        for (i=1;i<=obb11.length-1;i++)
        {
            if (obb11[i]) {
                obb11[i].style.fontSize=novoCorpo;
            }
        }
    }	
}

function iniciaObjetosTamanhoLetra()
{
    obb = document.getElementById("corpo");
    obb1 = document.getElementById("subtitulo");
    obb2 = document.getElementById("assinatura");
    obb3 = document.getElementById("creditoespecial");
    obb4 = document.getElementById("procedencia");
    obb5 = document.getElementById("coordenada");
    obb6 = document.getElementById("chamada0");
    obb7 = document.getElementById("titulochamada0");
    obb8 = document.getElementById("corpo1");
    frutas = document.getElementById("frutas");
    legumes = document.getElementById("legumes");
    verduras = document.getElementById("verduras");
    acougue = document.getElementById("acougue");
    avicolas = document.getElementById("avicolas");
    peixaria = document.getElementById("peixaria");
    ovos = document.getElementById("ovos");
    frutosdomar = document.getElementById("frutosdomar");
    laticinios = document.getElementById("laticinios");
    flores = document.getElementById("flores");
    aviso = document.getElementById("aviso");
    iniciaIdTitulos();
    iniciaIdChamadas();
    botaoaumentadiminui1 = document.getElementById("botaoaumentadiminui1");
    botaoaumentadiminui2 = document.getElementById("botaoaumentadiminui2");
    textoaumentadiminui1 = document.getElementById("textoaumentadiminui1");
    textoaumentadiminui2 = document.getElementById("textoaumentadiminui2");
}


function achaCookie(nome)
{
    var i=0;
    var achou=false;
    var COOKIES = document.cookie.split("; ")
    for (i=0;i<COOKIES.length;i++)
    {
        if (COOKIES[i].split("=")[0]==nome)
        {
            return COOKIES[i].split("=")[1]
        }
    }
    return ""
}

function todosCookies()
{
    if (document.cookie=="")
    {
        alert ("no cookie")
    }
    else
    {
        COOKIES = document.cookie.split("; ")
        for (i=0;i<COOKIES.length;i++)
        {
            alert("Cookie is " + COOKIES[i].split("="));
        }
    }
  
}

function setaCorpo()
{
    expirateDate = new Date;
    expirateDate.setMonth(expirateDate.getMonth()+6)
    document.cookie="estagioCorpo="+estagioCorpo;
    expires=expirateDate    
} 

        
function iniciaCorpo()
{
    estagioCorpo=achaCookie("estagioCorpo")
    if (estagioCorpo==1)
    {
        estagioCorpo1();
    }
    else
    {
        if (estagioCorpo==2)
        {
            estagioCorpo2();
        }
        else
        {
            if (estagioCorpo==4)
            {
                estagioCorpo4();
            }
            else
            {
                estagioCorpo3();
            }	
        } 
    } 
}

function estagioCorpo1()
{
    if (obb) obb.style.fontSize="90%";
    if (obb1) obb1.style.fontSize="90%";
    if (obb2) obb2.style.fontSize="60%";
    if (obb3) obb3.style.fontSize="70%";
    if (obb4) obb4.style.fontSize="80%";
    if (obb5) obb5.style.fontSize="75%";
    if (obb) obb.style.lineHeight="160%";
    if (obb6) obb6.style.fontSize="80%";
    if (obb7) obb7.style.fontSize="110%";
    if (obb8) obb8.style.fontSize="75%";
    if (frutas) frutas.style.fontSize="70%";
    if (legumes) legumes.style.fontSize="70%";
    if (verduras) verduras.style.fontSize="70%";
    if (acougue) acougue.style.fontSize="70%";
    if (avicolas) avicolas.style.fontSize="70%";
    if (peixaria) peixaria.style.fontSize="70%";
    if (ovos) ovos.style.fontSize="70%";
    if (frutosdomar) frutosdomar.style.fontSize="70%";
    if (laticinios) laticinios.style.fontSize="70%";
    if (flores) flores.style.fontSize="70%";
    if (aviso) aviso.style.fontSize="80%";
    alteraIdChamadas("80%");
    alteraIdTitulos("80%");
    estagioCorpo=1;
} 		

function estagioCorpo2()
{
    if (obb) obb.style.fontSize="95%";
    if (obb1) obb1.style.fontSize="95%";
    if (obb2) obb2.style.fontSize="65%";
    if (obb3) obb3.style.fontSize="75%";
    if (obb4) obb4.style.fontSize="85%";
    if (obb5) obb5.style.fontSize="80%";
    if (obb) obb.style.lineHeight="165%";
    if (obb6) obb6.style.fontSize="85%";
    if (obb7) obb7.style.fontSize="115%";
    if (obb8) obb8.style.fontSize="75%";
    if (frutas) frutas.style.fontSize="85%";
    if (legumes) legumes.style.fontSize="85%";
    if (verduras) verduras.style.fontSize="85%";
    if (acougue) acougue.style.fontSize="85%";
    if (avicolas) avicolas.style.fontSize="85%";
    if (peixaria) peixaria.style.fontSize="85%";
    if (ovos) ovos.style.fontSize="85%";
    if (frutosdomar) frutosdomar.style.fontSize="85%";
    if (laticinios) laticinios.style.fontSize="85%";
    if (flores) flores.style.fontSize="85%";
    if (aviso) aviso.style.fontSize="85%";
    alteraIdChamadas("90%");
    alteraIdTitulos("90%");
    estagioCorpo=2;
}

function estagioCorpo3()
{
    if (obb) obb.style.fontSize="105%";
    if (obb1) obb1.style.fontSize="105%";
    if (obb2) obb2.style.fontSize="70%";
    if (obb3) obb3.style.fontSize="85%";
    if (obb4) obb4.style.fontSize="90%";
    if (obb5) obb5.style.fontSize="85%";
    if (obb6) obb6.style.fontSize="90%";
    if (obb6) obb6.style.fontSize="90%";
    if (obb7) obb7.style.fontSize="120%";
    if (obb8) obb8.style.fontSize="90%";
    if (frutas) frutas.style.fontSize="90%";
    if (legumes) legumes.style.fontSize="90%";
    if (verduras) verduras.style.fontSize="90%";
    if (acougue) acougue.style.fontSize="90%";
    if (avicolas) avicolas.style.fontSize="90%";
    if (peixaria) peixaria.style.fontSize="90%";
    if (ovos) ovos.style.fontSize="90%";
    if (frutosdomar) frutosdomar.style.fontSize="90%";
    if (laticinios) laticinios.style.fontSize="90%";
    if (flores) flores.style.fontSize="90%";
    if (aviso) aviso.style.fontSize="90%";
    alteraIdChamadas("95%");
    alteraIdTitulos("95%");
    estagioCorpo=3;
}

function estagioCorpo4()
{
    if (obb) obb.style.fontSize="115%";
    if (obb1) obb1.style.fontSize="115%";
    if (obb2) obb2.style.fontSize="80%";
    if (obb3) obb3.style.fontSize="95%";
    if (obb4) obb4.style.fontSize="100%";
    if (obb5) obb5.style.fontSize="95%";
    if (obb) obb.style.lineHeight="160%";
    if (obb6) obb6.style.fontSize="100%";
    if (obb7) obb7.style.fontSize="130%";
    if (obb8) obb8.style.fontSize="100%";
    if (frutas) frutas.style.fontSize="110%";
    if (legumes) legumes.style.fontSize="110%";
    if (verduras) verduras.style.fontSize="110%";
    if (acougue) acougue.style.fontSize="110%";
    if (avicolas) avicolas.style.fontSize="110%";
    if (peixaria) peixaria.style.fontSize="110%";
    if (ovos) ovos.style.fontSize="110%";
    if (frutosdomar) frutosdomar.style.fontSize="110%";
    if (laticinios) laticinios.style.fontSize="110%";
    if (flores) flores.style.fontSize="110%";
    if (aviso) aviso.style.fontSize="110%";
    alteraIdChamadas("110%");
    alteraIdTitulos("110%");
    estagioCorpo=4;
}

function estagioCorpo5()
{
    if (obb) obb.style.fontSize="120%";
    if (obb1) obb1.style.fontSize="120%";
    if (obb2) obb2.style.fontSize="90%";
    if (obb3) obb3.style.fontSize="105%";
    if (obb4) obb4.style.fontSize="110%";
    if (obb5) obb5.style.fontSize="105%";
    if (obb) obb.style.lineHeight="170%";
    if (obb6) obb6.style.fontSize="110%";
    if (obb7) obb7.style.fontSize="140%";
    if (obb8) obb8.style.fontSize="110%";
    if (frutas) frutas.style.fontSize="115%";
    if (legumes) legumes.style.fontSize="115%";
    if (verduras) verduras.style.fontSize="115%";
    if (acougue) acougue.style.fontSize="115%";
    if (avicolas) avicolas.style.fontSize="115%";
    if (peixaria) peixaria.style.fontSize="115%";
    if (ovos) ovos.style.fontSize="115%";
    if (frutosdomar) frutosdomar.style.fontSize="115%";
    if (laticinios) laticinios.style.fontSize="115%";
    if (flores) flores.style.fontSize="115%";
    if (aviso) aviso.style.fontSize="115%";
    alteraIdChamadas("115%");
    alteraIdTitulos("115%");
    estagioCorpo=5;
}

		
function aumentaCorpo()
{
    if (estagioCorpo==1) 
    { 
        estagioCorpo2();
    }	
    else
    {
        if (estagioCorpo==2) 
        {
            estagioCorpo3();		
        }	
        else
        {
            if (estagioCorpo==3) 
            {
                estagioCorpo4();
            }
            else 
            { 
                if (estagioCorpo==4) 
                {
                    estagioCorpo5();
                }
            } 	
        }	
    }
    setaCorpo();	
}

function diminuiCorpo()
{
    if(estagioCorpo==5)
    {
        estagioCorpo4();
    } 
    else 
    {
        if (estagioCorpo==4) 
        {
            estagioCorpo3();
        }	
        else
        {
            if (estagioCorpo==3) 
            {
                estagioCorpo2();
            }	
            else
            {
                if (estagioCorpo==3) 
                {		
                    estagioCorpo1();
                }	
            }	
        }	
    }
    setaCorpo();
}


function mostraAumentaDiminui()
{
// botaoaumentadiminui1.style.visibility="visible";
// botaoaumentadiminui2.style.visibility="visible";
//textoaumentadiminui1.style.visibility="visible";
//textoaumentadiminui2.style.visibility="visible";
}

function iniciaTamanhoLetra()
{
    if (DOM)
    {	
        iniciaObjetosTamanhoLetra();
        iniciaCorpo();
        mostraAumentaDiminui();
    }	  	
}
