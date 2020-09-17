$(function() {
    let show = 'show';

    $('.myInput').on('checkval', function() {
        let label = $(this).next('.myLabel');
        if (this.value !== '') {
            label.addClass(show);
        } else {
            label.removeClass(show);
        }
    }).on('keyup', function() {
        $(this).trigger('checkval');
    });
});