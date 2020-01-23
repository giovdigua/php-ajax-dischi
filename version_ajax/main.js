$(document).ready( function () {

    var source   = $("#disco-template").html();
    var template = Handlebars.compile(source);
    var URL = 'dischi.php';

    $.ajax({
        url: URL,
        method: 'GET',
        success: function (dataRow) {
            var data = JSON.parse(dataRow);
            
            var dischi = data.response;
            for (var i = 0; i < dischi.length; i++) {
                var img_copertina = dischi[i].poster;
                var album = dischi[i].title;
                var artista_album = dischi[i].author;
                var anno_uscita = dischi[i].year;
                var genre = dischi[i].genre;

                var context = { copertina: img_copertina,
                                titolo: album,
                                artista: artista_album,
                                anno: anno_uscita,
                                genere: genre
                };
                var html    = template(context);

                $('#dischi').append(html);

            }
        }
    });



    $('#scelta-genere').change(function() {

        var genere_selezionato = $('#scelta-genere').val();
        if (genere_selezionato == '') {
            $('.card-disco').fadeIn();
        }else{

            $('.card-disco').fadeOut();
        }

        $('.card-disco').each(function() {
            var genere_disco = $(this).attr('data-genere');
            console.log(genere_disco);
            if (genere_disco.toLowerCase() == genere_selezionato.toLowerCase()) {
                    $(this).fadeIn();
            }
        });

    });

});
