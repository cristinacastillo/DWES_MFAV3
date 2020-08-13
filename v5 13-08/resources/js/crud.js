
$(document).ready(function(){

  $('.submitBtn').on('click',function(data) {
 
  	//console.log('run');

	var name = $('#name').val();
	var surnames = $('#surnames').val();
	var email = $('#email').val();
	var phoneNumber = $('#phoneNumber').val();



  	
  	$.ajax({

	    type:'POST',
	    url: 'edit',
		data: {
			 	"_token": $("meta[name='csrf-token']").attr("content"),
	        	'name': name},

	    dataType: 'json',
	    /*method: "POST",*/

	    success: function(data) {

	         console.log("Data: " + data);
	    },

	    error: function () {
	        console.log("Not working ");
	        $('#exampleModal').modal('hide');
	    }});
   
  });
});










	/* var name = $('#name').val();
	 var surnames = $('#surnames').val();
	 var email = $('#email').val();
	 var phoneNumber = $('#phoneNumber').val();

	 alert(name);

	 /*$.ajax({

	 	type: 'POST',
	 	url: 'edit',
	 	data: {
	 		'name': name,
	 		'surnames' : surnames,
	 		'email':  email,
	 		'phoneNumber' : phoneNumber
	 	},
	 	beforeSend: function(){
	 		$('.submitBtn').attr("disabled","disabled");
            $('.modal-body').css('opacity', '.5');

	 	},
	 	success: function(msg){
	 		if(msg == ok){
	 			$('#name').val('');
	 			$('#surnames').val('');
	 			$('#email').val('');
	 			$('#phoneNumber').val('');
	 			$('#form_result').html('Everything is correct');

	 		}else{
	 			$('#form_result').html('Everything is incorrect');
	 		}

	 		$('.submitBtn').removeAttr("disabled");
            $('.modal-body').css('opacity', '');
	 	}
	 });*/

		 

		


/*};

	$('.editModal').click(function(){
		$('#formModalEdit').modal('show');
	});*/

/*
$(document).ready(function(){

	
	
	/*$('.editModal').on('click',function(){

		console.log('click');

		$('#formModalEdit').modal('show'); 

		var id = $(this).attr('id'); 

		console.log(id);

		$.ajax({
			url: 'edit',
			dataType: "json",
			success: function(data){

				$('#name').val(data.result.name);
				$('#surnames').val(data.result.surnames);
				$('#hidden_id').val(id);
				$('.modal-title').text('Edit');
				$('#action_button').val('Edit');
				$('#action').val('Edit');
				$('#formModalEdit').modal('show');


			}

		});
	});*/




	/*$('#create_record').click(function(){

		$('.modal-title').text('Add new record');
		$('#action_button').val('Add');
		$('#hidden_id').val('add');
		$('#form_result').html('');
		$('#formModal').modal('show');

	})*/
/*$('.editModal').click(function(){

	$.ajax(){
		$('#formModal').modal('show');
	};
	
});*/


	/*$('.editModal').click(function(){
		$('#formModalEdit').modal('show');

		$('.formEdit').submit(function(){

			$.ajax({
			method: 'POST',
			url: 'edit',
			dataType: "json",
			success: function(data){

				$('#name').val(data.result.name);
				$('#surnames').val(data.result.surnames);
				$('#hidden_id').val(id);
				$('.modal-title').text('Edit');
				$('#action_button').val('Edit');
				$('#action').val('Edit');
				$('#formModalEdit').modal('show');


			}

		});
		});

		//var id = $(this).attr('id'); 

		//$('#form_result').html('');

		

		/*$.ajax(){

			url: "/profile/"+id+"/edit",
			dataType: "json",
			success: function(data){

				$('#name').val(data.result.name);
				$('#surnames').val(data.result.surnames);
				$('#hidden_id').val(id);
				$('.modal-title').text('Edit');
				$('#action_button').val('Edit');
				$('#action').val('Edit');
				$('#formModal').modal('show');


			};


		};*/
/*
		
	});*/
/*


});*/