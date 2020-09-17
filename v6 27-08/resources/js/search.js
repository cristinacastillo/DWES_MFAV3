$(document).ready(function(){
    //On keyup exec
    $('#search').on('keyup', function(){

        //Save the text value of SearchBar
        var text = $(this).val();
        //console.log("Search: " + text);


        $.ajax({

            type:"GET",
            url: 'search',
            data: {search: text},
            success: function(data) {

                if( data ){

                  $('#results').show();
                  $('#aviso').hide();
                  $('#index').hide();
                  //$('#pags').hide();
                  //$('#success').show();
                  //$('#success').html( "<div class=\"alert mx-auto alert-success\" style=\"width:75%\" role=\"alert\">Se han encontrado resultados:<\/div>" );
                  $('#ajax').show();
                  $('#ajax').html( data );
                  console.log("Data: " + data);

                }else{


                  //$('#success').hide();
                  $('#aviso').show();
                  $('#ajax').hide();
                  $('#index').hide();
                  //$('#pags').hide();

                    if(text){

                      console.log("No existen resultados");
                      $('#results').hide();
                      $('#aviso').html( "<div class=\"alert mx-auto alert-warning\" style=\"width:75%\" role=\"alert\">No existen resultados resultados<\/div>" );

                    }else{

                      $('#results').show();
                      $('#aviso').hide();
                      $('#index').show();
                      //$('#pags').show();

                    }

                }

             }
        });

    });

});