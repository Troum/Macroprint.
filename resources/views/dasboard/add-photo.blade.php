<div class="col-md-7">
    <form action="/home/upload" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <input required type="file" id="gallery" name="gallery[]" multiple>
            <label for="gallery">@lang('dashboard.choose_photo')</label>
            <span id="filename"></span>
        </div>
        <h4>@lang('dashboard.category')</h4>
        <div class="form-group">
            @foreach($services as $service)
                <label class="container">{{$service->name}}
                    <input required type="radio" checked="checked" name="category" value="{{$service->slug}}">
                    <span class="checkmark"></span>
                </label>
            @endforeach
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">@lang('dashboard.upload_photo')</button>
        </div>
    </form>
</div>