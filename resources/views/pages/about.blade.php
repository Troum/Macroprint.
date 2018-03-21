@extends('layout')
@section('content')
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-12">
                <h3 class="cntnH"><div style="width: 50%">НАШИ ПРЕИМУЩЕСТВА</div></h3>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-12 about-card p0">
                    <img class="col-sm-12 about-img p0" src="{{asset('/img/aboutCardImg01.png')}}">
                    <div class="col-sm-12 aboutPreHeader">
                        экономия
                    </div>
                    <div class="col-sm-12 aboutCardHeader">
                        Платите меньше
                    </div>
                    <div class="col-sm-12 cntnH aboutCardSepar">
                        <div style="width: 20%">
                            <img style="height: 18px; width: 18px" src="{{asset('/img/aboutCardSeparIcon.png')}}">
                        </div>
                    </div>
                    <div class="col-sm-12 aboutCardText">
                        Печать только на оригинальных расходных материалах, получаемых напрямую
                        от производителей, что позволяет нас сделать для вас эксклюзивную цену для
                        любого клиента
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-12 about-card p0">
                    <img class="col-sm-12 about-img p0" src="{{asset('/img/aboutCardImg02.png')}}">
                    <div class="col-sm-12 aboutPreHeader">
                        скорость
                    </div>
                    <div class="col-sm-12 aboutCardHeader">
                        Печатайте быстрее
                    </div>
                    <div class="col-sm-12 cntnH aboutCardSepar">
                        <div style="width: 20%">
                            <img style="height: 18px; width: 18px" src="{{asset('/img/aboutCardSeparIcon.png')}}">
                        </div>
                    </div>
                    <div class="col-sm-12 aboutCardText">
                        Печать происходит в формате 24/7 на 10-ти принтерах разной специфики и используемых
                        материалов, самый крупный из которых позволяет печатать полотно шириной 5м без склейки
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-12 about-card p0">
                    <img class="col-sm-12 about-img p0" src="{{asset('/img/aboutCardImg03.png')}}">
                    <div class="col-sm-12 aboutPreHeader">
                        вариативность
                    </div>
                    <div class="col-sm-12 aboutCardHeader">
                        Печатайте всё
                    </div>
                    <div class="col-sm-12 cntnH aboutCardSepar">
                        <div style="width: 20%">
                            <img style="height: 18px; width: 18px" src="{{asset('/img/aboutCardSeparIcon.png')}}">
                        </div>
                    </div>
                    <div class="col-sm-12 aboutCardText">
                        Мы печатаем на любых материалах таких как винил Backlit и FrontLit, сетка,
                        самоклеящаяся бумага, фотобумага, бумага BlueBack, стекло, пластик, дерево, холст
                        и т.д.
                    </div>
                </div>
            </div>
            <div class="col-sm-2"></div>
            <div class="col-sm-4">
                <div class="col-sm-12 about-card p0">
                    <img class="col-sm-12 about-img p0" src="{{asset('/img/aboutCardImg04.png')}}">
                    <div class="col-sm-12 aboutPreHeader">
                        уровень
                    </div>
                    <div class="col-sm-12 aboutCardHeader">
                        Печатайте качественно
                    </div>
                    <div class="col-sm-12 cntnH aboutCardSepar">
                        <div style="width: 20%">
                            <img style="height: 18px; width: 18px" src="{{asset('/img/aboutCardSeparIcon.png')}}">
                        </div>
                    </div>
                    <div class="col-sm-12 aboutCardText">
                        Нам уже 15 лет и за это время мы сделали мир ярче и красивее для более чем 6000
                        клиентов, среди которых McDonald's, Coca Cola, МТС, ОМА, Савушкин продукт, ведь в
                        нашей команде работают технологи и печатники, прошедшие обучение и стажировки в Бельгии
                        и России
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="col-sm-12 about-card p0">
                    <img class="col-sm-12 about-img p0" src="{{asset('/img/aboutCardImg05.png')}}">
                    <div class="col-sm-12 aboutPreHeader">
                        доставка
                    </div>
                    <div class="col-sm-12 aboutCardHeader">
                        Печатайте удобно
                    </div>
                    <div class="col-sm-12 cntnH aboutCardSepar">
                        <div style="width: 20%">
                            <img style="height: 18px; width: 18px" src="{{asset('/img/aboutCardSeparIcon.png')}}">
                        </div>
                    </div>
                    <div class="col-sm-12 aboutCardText">
                        Мы имеем возможность своими силами доставлять файлы и готовую продукцию клиентам,
                        отправлять продукцию в регионы, а также возможность принимать файлы по FTP
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <h3 class="cntnH"><div style="width: 30%">НАША КОМАНДА</div></h3>
            </div>
            <div class="col-sm-1"></div>
            @foreach($team as $one)
            <div class="col-sm-2">
                <div class="col-sm-12 team-card p0">
                    <img class="col-sm-12 about-img p0" src="{{asset('/img/team/'.$one->photo)}}">
                    <div class="col-sm-12 teamCardContent">
                        <div class="col-sm-12 workerName">{{$one->name}}</div>
                        <div class="col-sm-12">
                            <div class="col-sm-4 col-sm-offset-3 teamCardSepar"></div>
                        </div>
                        <div class="col-sm-12 positionInTeam ">{{$one->position}}</div>
                        <div class="col-sm-12 workerAbout p0">
                            {!! $one->description !!}
                        </div>
                    </div>

                </div>
            </div>
            @endforeach
            <div class="col-sm-1"></div>
        </div>
    </div>
    </div>
@endsection