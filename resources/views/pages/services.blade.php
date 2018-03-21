@extends('layout')
@section('content')
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-12">
                <h3 class="cntnH"><div style="width: 26%">НАШИ УСЛУГИ</div></h3>
            </div>
            @foreach($services as $service)
            <div class="col-sm-12"><img src="{{asset('/img/service/'.$service->slug.'/main/'.$service->cover)}}" alt="" class="w100"></div>
            <div class="col-sm-12">
                <div class="servText">
                    <h4 style="font-weight: 600">{{$service->name}}</h4>
                    <div class="servInfoTxt">
                        {!! nl2br($service->description)!!}
                        <hr>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection