<div class="col-md-7">
    <form action="/home/teammate" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <input required type="text" class="form-control" id="name" name="name" placeholder="@lang('dashboard.name')">
        </div>
        <div class="form-group">
            <input required type="text" class="form-control" id="position" name="position" placeholder="@lang('dashboard.position')">
        </div>
        <div class="form-group">
            <input required type="file" id="avatar" name="avatar">
            <label for="avatar">@lang('dashboard.add_photo')</label>
            <span id="filename"></span>
        </div>
        <div class="form-group">
            <textarea class="form-control" name="teammateDescription" id="teammateDescription" cols="30" rows="20"></textarea>
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">@lang('dashboard.save')</button>
        </div>
    </form>
</div>