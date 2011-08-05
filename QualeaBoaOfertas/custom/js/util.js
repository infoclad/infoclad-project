function CKupdate(){
    for ( instance in CKEDITOR.instances )
        CKEDITOR.instances[instance].updateElement();
}

function startTimer(){
    return setInterval(timer,1000);
}
function timer(){
    var seconds=secondsTil--;
    if(seconds<0){
        seconds=0;
    }
    var hours=Math.floor(seconds/3600);
    seconds-=hours*3600;
    var minutes=Math.floor(seconds/60);
    seconds-=minutes*60;
    hours=hours<10?'0'+hours:hours;
    minutes=minutes<10?'0'+minutes:minutes;
    seconds=seconds<10?'0'+seconds:seconds;
    document.getElementById("timer_h").innerHTML=hours>=0?hours:0;
    document.getElementById("timer_m").innerHTML=minutes>=0?minutes:0;
    document.getElementById("timer_s").innerHTML=seconds>=0?seconds:0;
    if(numTicks++>500||secondsTil==0){
        if(window.location.href.lastIndexOf('?')>-1){
            window.location.href=window.location.href;
            clearInterval(intervalid);
        }else{
            window.location.href=window.location.href;
            clearInterval(intervalid);
        }
    }
}
$(document).ready(function(){
    $('form table#newsletter input[name="email"]').click(function(){
        $(this).val('');
    }).blur(function(){
        if($(this).val()=='')$(this).val('Insira seu e-mail');
    });
    $('.sl_cidades').click(function(){
        $('.boxcidade').slideToggle();
        if($('.btn_cidade').attr("src")=="images/selectcidade_down.png"){
            $('.btn_cidade').attr("src",'images/selectcidade_up.png');
        } else { 
            $('.btn_cidade').attr("src",'images/selectcidade_down.png');
        }
    });
    $('input[alt="date"]').mask("99/99/9999",{
        placeholder:"_"
    });
    $('input[alt="datetime"]').mask("99/99/9999 99:99:99",{
        placeholder:"_"
    });
    $('input[alt="phone"]').mask("(99)9999-9999",{
        placeholder:"_"
    });
    $('input[alt="coupon"]').mask('***-***-***-***-***');
    $('input[alt="link"]').alphanumeric({
        allow:'-',
        nocaps:true
    });
    
    $('input[alt="price"]').priceFormat({
        prefix: '',
        centsSeparator: ',',
        thousandsSeparator: '.'
    }); 
    
    $('input[alt="numeric"]').numeric({
        allow:'.'
    });    
      
    $('a.warning').click(function() {
        return confirm('Atenção! Você tem certeza que deseja fazer isso ?');
    });
});