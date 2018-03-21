@extends('layout')
@section('content')
    {{csrf_field()}}
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="col-sm-12">
                <h3 class="cntnH">
                    <div style="width: 26%">НАШИ РАБОТЫ</div>
                </h3>
                <a href="/works/all">all</a>
                <div id="gallery-choose" class="col-sm-12" style="margin-bottom: 32px">
                    <span data-slug="all" data-src="/works/all" id="w1" class="work-nav active">все</span>
                    @foreach($services as $service)
                        <span data-slug="{{$service->slug}}" data-src="/works/{{$service->slug}}" id="w1" class="work-nav text-lowercase">{{$service->name}}</span>
                    @endforeach
                </div>
                <div id="gallery" class="row" style="margin-bottom: 64px">
                    @foreach($gallery as $photo)
                        <div class="col-sm-4 h-100" style="height: 212px; background-size: cover; background-image: url({{asset('/img/gallery/'.$photo->category.'/'.$photo->photo)}});"></div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection