$(document).ready(function(){
    $("#calcBtn").on('click', function(e){
        $("#calc").slideToggle("fast");
        $("#expand").toggle();
    });

    $('span.work-nav').on('click', function (event) {
        $(event.currentTarget).addClass('active');
        $(event.currentTarget).siblings().removeClass('active');
    });
});