@extends('layout')
@section('content')
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-12">
                <h3 class="cntnH">
                    <div style="width: 26%">НАШИ РАБОТЫ</div>
                </h3>
                <div class="col-sm-12" style="margin-bottom: 32px">
                    <span id="w1" class="work-nav active">все</span>
                    <span id="w2" class="work-nav">щитовые конструкции</span>
                    <span id="w3" class="work-nav">брендмауэры</span>
                    <span id="w4" class="work-nav">лайтпостеры</span>
                    <span id="w5" class="work-nav">призматроны</span>
                    <span id="w6" class="work-nav">интерьер</span>
                    <span id="w7" class="work-nav">транспорт</span>
                </div>
                <div class="col-sm-12" style="margin-bottom: 64px">
                    <div class="col-sm-4 p0">
                        <img class="col-sm-12 work-img" src="{{asset('/img/cntnOld.png')}}" alt="">
                    </div>
                    <div class="col-sm-4 p0">
                        <img class="col-sm-12 work-img" src="{{asset('/img/cntnOld.png')}}" alt="">
                    </div>
                    <div class="col-sm-4 p0">
                        <img class="col-sm-12 work-img" src="{{asset('/img/cntnOld.png')}}" alt="">
                    </div>
                    <div class="col-sm-4 p0">
                        <img class="col-sm-12 work-img" src="{{asset('/img/cntnOld.png')}}" alt="">
                    </div>
                    <div class="col-sm-4 p0">
                        <img class="col-sm-12 work-img" src="{{asset('/img/cntnOld.png')}}" alt="">
                    </div>
                    <div class="col-sm-4 p0">
                        <img class="col-sm-12 work-img" src="{{asset('/img/cntnOld.png')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection