$(document).ready(function() {

    $("#marque_id").on('change', function(){

        var marque_id   = $(this).val();

        var data        = {
            marque_id : marque_id
        };

        $.ajax({
            url		    : "http://mobile.localhost/manager/vehicule_modeles/get_modele",   //ot controller papkata file ajax/method modeles
            type		: "POST",
            dataType	: "json",
            data		: data,
            success		: function( json ){

                $("#modele_id").html(json.html);

            },

            error		: function(error) {
                console.log(error);
            }
        });

    });

});