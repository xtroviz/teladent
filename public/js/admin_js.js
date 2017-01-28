/**
 * Created by Huma on 1/28/2017.
 */
$('.data-table').ready(function () {
    $('.btn-dismiss').click(function () {
        $('.popup').hide();
    });
    $('.btn-delete-me').click(function () {
        var delete_url = $(this).attr('data-href');
        $('.popup').show();
        $('.btn-delete-url').attr('href', delete_url);
    });
});