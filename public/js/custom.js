$(document).ready(function () {
    var tab = $('.col-md-7');
    var count = 0;

    $('input[type=file]').on('change', function () {
        count = $(this)[0].files.length;
        if(count === 1) {
            $(this).siblings('#filename').text($(this).val().replace(/C:\\fakepath\\/i, ''));
        }
        else {
            if(count === 2 || count === 3 || count === 4) {
                $(this).siblings('#filename').text('будет загружено ' + count + ' файла');
            }
            else {
                $(this).siblings('#filename').text('будет загружено ' + count + ' файлов');
            }
        }
    });
    tab.each(function (i) {
        $(this).attr('data-tab','tab'+i);
    });
    tab.not(':first-of-type').hide();
    $('.list-group').find('.list-group-item').each(function (index) {
        if ($(this).hasClass('active')){
            tab.filter('[data-tab=tab'+index+']').show();
        }
        $(this).on('click', function () {
            $(this).addClass('active').siblings('.list-group-item').removeClass('active');
            tab.hide();
            tab.filter('[data-tab=tab'+index+']').show();
        })
    });
});