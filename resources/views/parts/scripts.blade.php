<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script></body>
<script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
<script src="{{asset('/js/main.js')}}"></script>
<script type="text/javascript">
    ymaps.ready(init);

    function init() {
        var myMap = new ymaps.Map("map", {
            center: [53.8430, 27.5170],
            zoom: 17,
            controls: ['smallMapDefaultSet']
        }, {
            searchControlProvider: 'yandex#search'
        });
        myMap.behaviors
            .disable(['scrollZoom']);
        var myPlacemark = new ymaps.Placemark([53.8430, 27.5170], {
            balloonContentBody: [
                '<address>',
                '<strong>Макропринт</strong>',
                '</address>'
            ].join('')
        }, {
            preset: 'islands#redDotIcon'
        });

        myMap.geoObjects.add(myPlacemark);
    }

</script>