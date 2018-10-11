/**
 * Created by XT-001 on 2018/10/11.
 */
$('#index .ui.accordion').accordion();
$('#index .ui.dropdown').mouseover(function() {
    $('#index .ui.dropdown .menu').show();
}).mouseout(function() {
    $('#index .ui.dropdown .menu').hide();
});