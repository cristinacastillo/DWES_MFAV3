
/**
 * The showForm function will collect the id of the 
 * element that you want to hide and the id of the 
 * element that you want to make visible
 *
 * @param id
 * @param editable
 */
function showForm(id,editable){


	document.getElementById(editable).style.display = "block";
    document.getElementById(id).style.display = "none";

};

/**
 * The hideForm function will collect the id of the 
 * element that you want to hide and the id of the 
 * element that you want to make visible
 *
 * @param id
 * @param editable
 */
function hideForm(id,editable){

	document.getElementById(editable).style.display = "none";
    document.getElementById(id).style.display = "block";

}



$(document).ready(function() {

    $('.deleteButton').each(function(i) {
        var whichModal = i; //use this index, a data attribute on the modal, or $(this).parent().parent() to find delete the actual item from the page
        var deleteModal = $(this).parent().find('.deleteModal');

        $(this).click(function(e) {
            deleteModal.fadeIn('slow');
        });

        $(this).parent().find('.delete').click(function(e) {
            deleteModal.fadeOut('slow');
            
        });
        
        $(this).parent().find('.cancel').click(function(e) {
            deleteModal.fadeOut();

        });
    });
});