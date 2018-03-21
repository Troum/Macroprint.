@extends('auth.layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">@lang('auth.dashboard')</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-left">
                        @include('dasboard.dashboard-list')
                        <div class="col-md-1"></div>
                        @include('dasboard.add-new')
                        @include('dasboard.add-teammate')
                        @include('dasboard.add-photo')
                        @include('dasboard.add-service')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
