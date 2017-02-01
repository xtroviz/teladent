/**
 * Created by Huma on 1/28/2017.
 */
function dismissMe() {
    $('.popup').hide();
}
function deleteme(obj) {
    var delete_url = $(obj).attr('data-href');
    $('.popup').show();
    $('.btn-delete-url').attr('href', delete_url);
}
$("#menu-toggle").click(function (e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
});