$(document).ready(function(){
    //On keyup exec
    $('#search2').on('keyup', function(){

        //Save the text value of SearchBar
        var text = $(this).val();
        console.log("Search: " + text);


        $.ajax({

            type:"GET",
            url: 'search2',
            data: {search2: text},
            success: function(data) {

                if( data ){

                  $('#results2').show();
                  $('#aviso2').hide();
                  $('#index2').hide();
                  //$('#pags').hide();
                  $('#success2').show();
                  $('#success2').html( "<div class=\"alert mx-auto alert-success\" style=\"width:75%\" role=\"alert\">Se han encontrado resultados:<\/div>" );
                  $('#ajax2').show();
                  $('#ajax2').html( data );
                  console.log("Data: " + data);

                }else{


                  $('#success2').hide();
                  $('#aviso2').show();
                  $('#ajax2').hide();
                  $('#index2').hide();
                  //$('#pags').hide();

                    if(text){

                      console.log("No existen resultados");
                      $('#results2').hide();
                      $('#aviso2').html( "<div class=\"alert mx-auto alert-warning\" style=\"width:75%\" role=\"alert\">No existen resultados resultados<\/div>" );

                    }else{

                      $('#results2').show();
                      $('#aviso2').hide();
                      $('#index2').show();
                      //$('#pags').show();

                    }

                }

             }
        });

    });

});