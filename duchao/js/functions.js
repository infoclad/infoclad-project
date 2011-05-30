$(document).ready(function () {
    $("button#encomenda-comerciante").click(function () {
        $("div#comerciante-form").show();
        $("div#pessoafis-form").hide();
    });

    $("button#encomenda-fisica").click(function () {
        $("div#pessoafis-form").show();
        $("div#comerciante-form").hide();
    });

    $(".close-window").click(function () {
        $("div.encomenda-form").hide();
        $("div.form-content-pessfis").hide();
        $("div.form-content-comerciante").hide();
        $("div.condicoes-pessfis").show();
        $("div.condicoes-comerciante").show();
    });

    $("a.encomendar-link-pessfis").click(function () {
        $("div.condicoes-pessfis").hide();
        $("div.form-content-pessfis").show();
    });

    $("a.encomendar-link-comerciante").click(function () {
        $("div.condicoes-comerciante").hide();
        $("div.form-content-comerciante").show();
    });

    $('.cartao-pagto-radio').click(function() {
        $(".cartao-pagto").show();
    });

    $('.boleto-pagto-radio,.dinheiro-pagto-radio').click(function() {
        $(".cartao-pagto").hide();
    });
});