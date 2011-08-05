$(document).ready(function(){
    jQuery.validator.messages.required = "";

    // Register
    $("form#register").validate({
        rules: {
            email: {
                required: true,
                email: true,
                remote: {
                    url: "ajax/available-email",
                    type: "post",
                    data: {
                        email: function() {
                            return $("#email").val();
                        }
                    }
                }
            },
            password: "required",
            confirm_password: {
                equalTo: "#password"
            }
        },
        invalidHandler: function(e, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = 'Um ou mais erros foram ocorridos. Verifique-os e tente novamente'
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        },
        onkeyup: true,
        submitHandler: function(form) {
            $("div.error").hide();
            form.submit();
        },
        messages: {
            name:  "Informe seu nome",
            last_name: "Informe seu sobrenome",
            birth_date: "Informe sua data de nascimento",
            gender: "Informe seu sexo",
            email: {
                required: "Informe um email seu v�lido",
                remote: "Este email j� est� em uso, por favor tente outro."
            },
            password: "Informe uma senha",
            confirm_password: {
                required: "Informe a confirma��o de sua senha",
                equalTo: "Senhas n�o coincidem. Verifique se foram digitadas corretamente"
            },
            agree: "Voc� deve aceitar os termos de uso para se cadastrar"

        },
        debug:true
    });
    
    // Index Subscribe    
    $("form#indexSubscribe").validate({
        invalidHandler: function(e, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = 'Um ou mais erros foram ocorridos. Verifique-os e tente novamente'
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        },
        onkeyup: false,
        submitHandler: function(form) {
            $("div.error").hide();
            form.submit();
        },
        messages: {
            name:  "Informe o nome",
            email: "Informe um endere�o de email v�lido"
        },
        debug:true
    });
    
    // Index Register
    $("form#indexNewsletter").validate({
        invalidHandler: function(e, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                alert('Aten��o ! Voc� deve fornecer seus dados corretamente.');
            }
        },
        onkeyup: false,
        submitHandler: function(form) {
            form.submit();
        },
        messages: {
            name: "",
            email: ""
        },
        debug:false
    });
    
    // Index Contact
    $("form#indexContact").validate({
        invalidHandler: function(e, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = 'Um ou mais erros foram ocorridos. Verifique-os e tente novamente'
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        },
        onkeyup: false,
        submitHandler: function(form) {
            form.submit();
        },
        messages: {
            nome: "Informe seu nome completo.",
            email: "Informe um endere�o de email v�lido.",
            telefone: "Informe um numero de telefone v�lido.",
            assunto: "Selecione o assunto de sua mensagem.",
            mensagem: "Digite o texto da sua mensagem."
        },
        debug:false
    });
    
    // Index Career
    $("form#indexCareer").validate({
        invalidHandler: function(e, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = 'Um ou mais erros foram ocorridos. Verifique-os e tente novamente'
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        },
        onkeyup: false,
        submitHandler: function(form) {
            form.submit();
        },
        messages: {
            nome: "Informe seu nome completo.",
            email: "Informe um endere�o de email v�lido.",
            telefone: "Informe um numero de telefone v�lido.",
            website: "Informe um endere�o URL v�lido",
            mensagem: "Digite o texto da sua mensagem."
        },
        debug:false
    });

    // Index SugerirDesconto
    $("form#indexSugerirDesconto").validate({
        invalidHandler: function(e, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = 'Um ou mais erros foram ocorridos. Verifique-os e tente novamente'
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        },
        onkeyup: false,
        submitHandler: function(form) {
            form.submit();
        },
        messages: {
            nome: "Informe seu nome completo.",
            email: "Informe um endere�o de email v�lido.",
            empresa: "Informe o nome da empresa.",
            cidade: "Informe o nome  da cidade.",
            bairro: "Informe o nome do bairro.",
            website: "URL informada n�o � v�lida",
            atividade: "Informe a atividade da empresa."
        },
        debug:false
    });
    
    // Index SugerirCidade
    $("form#indexSugerirCidade").validate({
        invalidHandler: function(e, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = 'Um ou mais erros foram ocorridos. Verifique-os e tente novamente'
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        },
        onkeyup: false,
        submitHandler: function(form) {
            form.submit();
        },
        messages: {
            nome: "Informe seu nome completo.",
            email: "Informe um endere�o de email v�lido.",
            telefone: "Informe um endere�o de email v�lido.",
            estado: "Informe o estado da cidade.",
            cidade: "Informe o nome da cidade a ser sugerida.",
            bairro: "Informe o nome do seu bairro."
        },
        debug:false
    });
    
    // Index Partner
    $("form#indexBeaPartner").validate({
        invalidHandler: function(e, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = 'Um ou mais erros foram ocorridos. Verifique-os e tente novamente'
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        },
        onkeyup: false,
        submitHandler: function(form) {
            form.submit();
        },
        messages: {
            nome: "Informe seu nome completo.",
            sobrenome: "Informe seu sobrenome.",
            empresa: "Informe o nome da sua empresa.",
            endereco: "Informe seu endereco (nome da rua, numero e complemento).",
            bairro: "Informe o nome de seu bairro.",
            cep: "Informe seu CEP.",
            estado: "Informe o nome de seu estado.",
            cidade: "Informe o nome da sua cidade.",
            email: "Informe um endere�o de email v�lido.",
            telefone: "Informe um numero de telefone v�lido."
        },
        debug:false
    });
    
    // Remind Password
    $("form#remind_password").validate({
        invalidHandler: function(e, validator) {
            var errors = validator.numberOfInvalids();
            if (errors) {
                var message = 'Um ou mais erros foram ocorridos. Verifique-os e tente novamente'
                $("div.error span").html(message);
                $("div.error").show();
            } else {
                $("div.error").hide();
            }
        },
        onkeyup: true,
        submitHandler: function(form) {
            $("div.error").hide();
            form.submit();
        },
        messages: {
            email:  "Informe o endere�o de email de sua conta."
        },
        debug:true
    });
});