$(function(){
    $('.acc_trigger').on('click', function(){
        $(this).toggleClass('trigger_active');
        $(this).find('.textContent').slideToggle( "slow" );
    });
});