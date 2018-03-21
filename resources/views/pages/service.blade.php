@extends('layout')
@section('content')
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-12">
                <h3 class="cntnH"><div style="width: 26%; text-transform: uppercase">{{$service->name}}</div></h3>
            </div>
            <div class="col-sm-12">
                <img src="{{asset('/img/service/'.$service->slug.'/main/'.$service->cover)}}" alt="{{$service->short}}" class="w100">
            </div>
            <div class="col-sm-12">
                <div class="servText col-md-12 mx-auto ">
                    <h4 style="font-weight: 600">{{$service->name}}</h4>
                    <div class="servInfoTxt">
                        <p>
                            {!! nl2br($service->description) !!}
                        </p>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection