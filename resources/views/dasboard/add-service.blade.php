<div class="col-md-7">
    <form action="/home/service" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <input required type="text" class="form-control" id="service" name="service" placeholder="@lang('dashboard.service')">
        </div>
        <div class="form-group">
            <input required type="file" id="servicePreview" name="servicePreview">
            <label class="mainColor" for="servicePreview">@lang('dashboard.preview')</label>
            <span id="filename"></span>
        </div>
        <div class="form-group">
            <input required type="file" id="serviceCover" name="serviceCover">
            <label for="serviceCover">@lang('dashboard.choose_photo')</label>
            <span id="filename"></span>
        </div>
        <div class="form-group">
            <label style="color: #6c757d">@lang('dashboard.choose_color')</label>
            <div id="color-palette" class="row mx-auto">
                <div class="col-sm-2 m-0 p-0">
                    <label class="container">
                        <input required type="radio" name="style" value="#f7e7a9" checked="checked">
                        <span class="checkmark" style="background-color: #f7e7a9"></span>
                    </label>
                </div>
                <div class="col-sm-2 m-0 p-0">
                    <label class="container">
                        <input required type="radio" name="style" value="#fed59d">
                        <span class="checkmark" style="background-color: #fed59d"></span>
                    </label>
                </div>
                <div class="col-sm-2 m-0 p-0">
                    <label class="container">
                        <input required type="radio" name="style" value="#ffbf77">
                        <span class="checkmark" style="background-color: #ffbf77"></span>
                    </label>
                </div>
                <div class="col-sm-2 m-0 p-0">
                    <label class="container">
                        <input required type="radio" name="style" value="#fbb055">
                        <span class="checkmark" style="background-color: #fbb055"></span>
                    </label>
                </div>
                <div class="col-sm-2 m-0 p-0">
                    <label class="container">
                        <input required type="radio" name="style" value="#f29b38">
                        <span class="checkmark" style="background-color: #f29b38"></span>
                    </label>
                </div>
                <div class="col-sm-2 m-0 p-0">
                    <label class="container">
                        <input required type="radio" name="style" value="#d48625">
                        <span class="checkmark" style="background-color: #d48625"></span>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="shortServiceDescription" style="color: #6c757d">@lang('dashboard.short_service_description')</label>
            <textarea class="form-control" name="shortServiceDescription" id="shortServiceDescription" cols="30" rows="10"></textarea>
        </div>
        <div class="form-group">
            <label for="serviceDescription" style="color: #6c757d">@lang('dashboard.service_description')</label>
            <textarea class="form-control" name="serviceDescription" id="serviceDescription" cols="30" rows="20"></textarea>
        </div>
        <div class="form-group text-right">
            <button type="submit" class="btn btn-primary">@lang('dashboard.add_service')</button>
        </div>
    </form>
</div>