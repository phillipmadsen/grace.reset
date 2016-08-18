<div class="col-md-12">
    <div class="row col-md-12" style="top-margin:10%;"></div>
    <div class="row">
        <br/> <br/> <br/>
        <div class="form-group">
            <div class="col-md-8">
                {!! Form::label('thumbnail', trans('product.primary-photo')) !!}

                <input id="thumbnail" name="thumbnail" type="file" class="file input-preview">
            </div>
        </div>

    </div>
    <div class="line"></div>
    {{--<br style="clear:both" />--}}
    <div class="row">
        <div class="col-md-12">
            <br/> <br/> <br/>
            <button id="add_album_image" class="btn btn-danger" type="button"><i class="fa fa-plus"></i> Add Photo
            </button>
            <br/> <br/> <br/>
        </div>
    </div>
    {{--<br style="clear:both" />--}}

    <div class="row">
        <div class="form-group">
            <div class="col-md-8">
                <label for="album">Additional Photos : </label>
                <input id="album" type="file" name="album[]" class="file form-control">
            </div>
        </div>
    </div>

    <div class="additional">

    </div>

    <br style="clear:both"/>


</div>