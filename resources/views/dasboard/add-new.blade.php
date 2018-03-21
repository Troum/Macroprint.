<div class="col-md-7">
    <form action="/home/publish" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <input required type="text" class="form-control" id="title" name="title" placeholder="@lang('dashboard.title')">
        </div>
        <div class="form-group">
            <input required type="file" id="cover" name="cover">
            <label for="cover">@lang('dashboard.upload_cover')</label>
            <span id="filename"></span>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="new" id="new" cols="30" rows="20"></textarea>
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">@lang('dashboard.publish')</button>
        </div>
    </form>
</div>