$(document).ready(function() {
    $(".emailJunto").each(function() {
        palavra = $(this).html();
        letras = palavra.toString().split(",");
        novapalavra = ""
        i = 0
        while (i < letras.length) {
            novapalavra = novapalavra + letras[i] + " &nbsp;";
            i = i + 1;
        }

        $(this).html(novapalavra)

    })
})