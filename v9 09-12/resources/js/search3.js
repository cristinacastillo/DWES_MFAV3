$(document).ready(function(){
    //On keyup exec
    $('#search3').on('keyup', function(){

        //Save the text value of SearchBar
        var text = $(this).val();
        console.log("Search: " + text);


        $.ajax({

            type:"GET",
            url: 'search3',
            data: {search: text},
            success: function(data) {

                if( data ){

                  $('#results3').show();
                  $('#aviso3').hide();
                  $('#index3').hide();
                  //$('#pags').hide();
                  //$('#success3').show();
                  //$('#success3').html( "<div class=\"alert mx-auto alert-success\" style=\"width:75%\" role=\"alert\">Se han encontrado resultados:<\/div>" );
                  $('#ajax3').show();
                  $('#ajax3').html( data );
                  console.log("Data: " + data);

                }else{


                  //$('#success3').hide();
                  $('#aviso3').show();
                  $('#ajax3').hide();
                  $('#index3').hide();
                  //$('#pags').hide();

                    if(text){

                      console.log("No existen resultados");
                      $('#results3').hide();
                      $('#aviso3').html( "<div class=\"alert mx-auto alert-warning\" style=\"width:75%\" role=\"alert\">No existen resultados resultados<\/div>" );

                    }else{

                      $('#results3').show();
                      $('#aviso3').hide();
                      $('#index3').show();
                      //$('#pags').show();

                    }

                }

             }
        });

    });

});