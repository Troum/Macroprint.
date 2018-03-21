$(document).ready(function(){
    $("#calcBtn").on('click', function(e){
        $("#calc").slideToggle("fast");
        $("#expand").toggle();
    });

    $('span.work-nav').on('click', function (event) {
        $(event.currentTarget).addClass('active');
        $(event.currentTarget).siblings().removeClass('active');
    });

    $('#print').on('click', function () {
        print();
    });

    $('#gallery-choose').find('span').each(function () {
        $(this).on('click', function () {
            var link = $(this).data('src'),
                slug = $(this).data('slug');
            console.log(slug);
            $('#gallery').empty();
            $.ajax({
                url: link,
                type: 'GET',
                data: {_token: $('input[type="hidden"]').val(), slug: slug},
                dataType: 'JSON',
                success: function (response) {
                    console.log(response);
                    for(var i = 0; i < response.response.length; i++) {
                        $('#gallery').append(
                            '<div class="col-sm-4 h-100" style="' +
                            'height: 212px;'+
                            'background-size: cover;' +
                            'background-image: url(/img/gallery/'+response.response[i].category+'/'+response.response[i].photo+');"></div>'
                        );
                    }
                }
            });
        });

    });



});