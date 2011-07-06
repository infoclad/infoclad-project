//here you place the ids of every element you want.
var ids=new Array('horarios','lista-material','calendario-aluno');

function switchid(id){	
    hidediv(id);
    showdiv(id);
}

function hideallids(){
    //loop through the array and hide each element by id
    for (var i=0;i<ids.length;i++){
        hidediv(ids[i]);
    }		  
}

function hidediv(id) {
    //safe function to hide an element with a specified id
    if (document.getElementById) { // DOM3 = IE5, NS6
        document.getElementById(id).style.display = 'none';
    }
    else {
        if (document.layers) { // Netscape 4
            document.id.display = 'none';
        }
        else { // IE 4
            document.all.id.style.display = 'none';
        }
    }
}

function showdiv(id) {
    //safe function to show an element with a specified id
		  
    if (document.getElementById) { // DOM3 = IE5, NS6
        document.getElementById(id).style.display = 'block';
    }
    else {
        if (document.layers) { // Netscape 4
            document.id.display = 'block';
        }
        else { // IE 4
            document.all.id.style.display = 'block';
        }
    }

}

var clear="img/clear.gif"; //path to clear.gif
document.write('<script type="text/javascript" id="ct" defer="defer" src="javascript:void(0)"><\/script>');
var ct=document.getElementById("ct");
ct.onreadystatechange=function(){
    pngfix()
};
    
pngfix=function(){
    var els=document.getElementsByTagName('*'),ip=/\.png/i,al="progid:DXImageTransform.Microsoft.AlphaImageLoader(src='",i=els.length,uels=new Array(),c=0;
    while(i-->0){
        if(els[i].className.match(/unitPng/)){
            uels[c]=els[i];
            c++;
        }
    }
    if(uels.length==0)pfx(els);else pfx(uels);
    function pfx(els){
        i=els.length;
        while(i-->0){
            var el=els[i],es=el.style,elc=el.currentStyle,elb=elc.backgroundImage;
            if(el.src&&el.src.match(ip)&&!es.filter){
                es.height=el.height;
                es.width=el.width;
                es.filter=al+el.src+"',sizingMethod='crop')";
                el.src=clear;
            }else{
                if(elb.match(ip)){
                    var path=elb.split('"'),rep=(elc.backgroundRepeat=='no-repeat')?'crop':'scale',elkids=el.getElementsByTagName('*'),j=elkids.length;
                    es.filter=al+path[1]+"',sizingMethod='"+rep+"')";
                    es.height=el.clientHeight+'px';
                    es.backgroundImage='none';
                    if(j!=0){
                        if(elc.position!="absolute")es.position='static';
                        while(j-->0)if(!elkids[j].style.position)elkids[j].style.position="relative";
                    }
                }
            }
        }
    };

};

function mascara(o,f){
    v_obj=o
    v_fun=f
    setTimeout("execmascara()",1)
}
 
function execmascara(){
    v_obj.value=v_fun(v_obj.value)
}
 
function leech(v){
    v=v.replace(/o/gi,"0")
    v=v.replace(/i/gi,"1")
    v=v.replace(/z/gi,"2")
    v=v.replace(/e/gi,"3")
    v=v.replace(/a/gi,"4")
    v=v.replace(/s/gi,"5")
    v=v.replace(/t/gi,"7")
    return v
}
 
function soNumeros(v){
    return v.replace(/\D/g,"")
}
 
function telefone(v){
    v=v.replace(/\D/g,"")                 //Remove tudo o que não é dígito
    v=v.replace(/^(\d\d)(\d)/g,"($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")    //Coloca hífen entre o quarto e o quinto dígitos
    return v
}
 
function cpf(v){
    v=v.replace(/\D/g,"")                    //Remove tudo o que não é dígito
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    v=v.replace(/(\d{3})(\d)/,"$1.$2")       //Coloca um ponto entre o terceiro e o quarto dígitos
    //de novo (para o segundo bloco de números)
    v=v.replace(/(\d{3})(\d{1,2})$/,"$1-$2") //Coloca um hífen entre o terceiro e o quarto dígitos
    return v
}
 
function cep(v){
    v=v.replace(/D/g,"")                //Remove tudo o que não é dígito
    v=v.replace(/^(\d{5})(\d)/,"$1-$2") //Esse é tão fácil que não merece explicações
    return v
}
 
function cnpj(v){
    v=v.replace(/\D/g,"")                           //Remove tudo o que não é dígito
    v=v.replace(/^(\d{2})(\d)/,"$1.$2")             //Coloca ponto entre o segundo e o terceiro dígitos
    v=v.replace(/^(\d{2})\.(\d{3})(\d)/,"$1.$2.$3") //Coloca ponto entre o quinto e o sexto dígitos
    v=v.replace(/\.(\d{3})(\d)/,".$1/$2")           //Coloca uma barra entre o oitavo e o nono dígitos
    v=v.replace(/(\d{4})(\d)/,"$1-$2")              //Coloca um hífen depois do bloco de quatro dígitos
    return v
}
 
function romanos(v){
    v=v.toUpperCase()             //Maiúsculas
    v=v.replace(/[^IVXLCDM]/g,"") //Remove tudo o que não for I, V, X, L, C, D ou M
    //Essa é complicada! Copiei daqui: http://www.diveintopython.org/refactoring/refactoring.html
    while(v.replace(/^M{0,4}(CM|CD|D?C{0,3})(XC|XL|L?X{0,3})(IX|IV|V?I{0,3})$/,"")!="")
        v=v.replace(/.$/,"")
    return v
}
 
function site(v){
    //Esse sem comentarios para que você entenda sozinho ;-)
    v=v.replace(/^http:\/\/?/,"")
    dominio=v
    caminho=""
    if(v.indexOf("/")>-1)
        dominio=v.split("/")[0]
    caminho=v.replace(/[^\/]*/,"")
    dominio=dominio.replace(/[^\w\.\+-:@]/g,"")
    caminho=caminho.replace(/[^\w\d\+-@:\?&=%\(\)\.]/g,"")
    caminho=caminho.replace(/([\?&])=/,"$1")
    if(caminho!="")dominio=dominio.replace(/\.+$/,"")
    v="http://"+dominio+caminho
    return v
}

function letra() {
    var valor_inicial = "11px";
    document.getElementById("wrapper").style.fontSize = valor_inicial;
}
function tamanhofonte(op) {

    var incremento = 2;  

    var local_alterado = document.getElementById("wrapper").style.fontSize;

    local_alterado = parseInt(local_alterado.replace(/px/,""));

    if (op == "mais") {
        local_alterado += incremento;
    } else {
        local_alterado -= incremento;
    }

    document.getElementById("wrapper").style.fontSize = local_alterado + 'px';

}

function set_NaoPago() {
    $('#naoPago')
    .removeClass('statusDesactivated')
    .addClass('status1activated');
    
    $('#pago')
    .removeClass('status2activated')
    .addClass('statusDesactivated');
    
    $('#enviado')
    .removeClass('status3activated')
    .addClass('statusDesactivated');
}

function set_Pago() {
    $('#naoPago')
    .removeClass('status1activated')
    .addClass('statusDesactivated');
    
    $('#pago')
    .removeClass('statusDesactivated')
    .addClass('status2activated');
    
    $('#enviado')
    .removeClass('status3activated')
    .addClass('statusDesactivated');
}

function set_Enviado() {
    $('#naoPago')
    .removeClass('status1activated')
    .addClass('statusDesactivated');
    
    $('#pago')
    .removeClass('status2activated')
    .addClass('statusDesactivated');
    
    $('#enviado')
    .removeClass('statusDesactivated')
    .addClass('status3activated');
}