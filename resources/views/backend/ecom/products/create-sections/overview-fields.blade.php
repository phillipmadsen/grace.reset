<hr />
<div class="row">
    <div class="form-group col-md-12">


        <!-- Status Field -->
        <div class="form-group col-sm-3">
            {!! Form::label('status', 'Status:') !!}
            {!! Form::select('status', [ 'online' => 'Online', 'offline' => 'Offline', 'Removed' => 'Removed', 'Archived' => 'Archived', 'Discontinued' => 'Discontinued'], null, ['class' => 'form-control']) !!}
        </div>

        <!-- Manufacturer Field -->
        <div class="form-group col-md-3">
            {!! Form::label('manufacturer', 'Manufacturer:') !!}
            {!! Form::select('manufacturer', ['The Grace Company' => 'The Grace Company'], null, ['class' => 'form-control']) !!}
        </div>

        <!-- Status Field -->
        <div class="form-group col-md-3">
            {!! Form::label('availability', 'Availability:') !!}
            {!! Form::select('status', ['available' => 'Available', 'InStock' => 'InStock',  'OnHold' => 'OnHold', 'OnBackorder' => 'OnBackorder', 'PreOrders' => 'PreOrders', 'PromoActive' => 'PromoActive', 'SoldOut' => 'SoldOut', 'Discontinued' => 'Discontinued'], null, ['class' => 'form-control']) !!}
        </div>

        <!-- Office Status Field -->
        <div class="form-group col-md-3">
            {!! Form::label('office_status', 'InOffice Status:') !!}
            {!! Form::select('office_status', ['Draft' => 'Draft', 'Review' => 'Review', 'inDesign' => 'inDesign', 'inProof' => 'inProof', 'inProcess' => 'inProcess', 'Hidden' => 'Hidden', 'Deleted' => 'Deleted', 'Online' => 'Online', 'Offline' => 'Offline', 'Removed' => 'Removed', 'Archived' => 'Archived'], null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>
<hr />





<div class="row">
    <div class="col-md-12">
        <!-- Name Field -->
        <div class="form-group col-sm-8">
            {!! Form::label('name', 'Product Name:') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Is Published Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('is_published', 'Is Published:') !!}
            <label class="checkbox-inline">
            {!! Form::checkbox('is_published', 1, null,['class' => 'icheckbox_square']) !!}
            </label>
        </div>

        <!-- Subtitle Field -->
        <div class="form-group col-sm-6">
            {!! Form::label('subtitle', 'Subtitle:') !!}
            {!! Form::text('subtitle', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Category Field -->
        <div class="form-group col-md-2">
            {!! Form::label('category', 'Category:') !!}
            <select class="form-control" name="categories[]" id="categories">
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->title }}</option>
                @endforeach
            </select>
        </div>

        <!-- Ispromo Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('ispromo', 'Ispromo:') !!}
            <label class="checkbox-inline">
            {!! Form::checkbox('ispromo', true, null) !!}
            </label>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-md-12">

        <div class="col-md-8">
                        <!-- Short Description Field -->
            <div class="form-group  ">
                {!! Form::label('short_description', 'Short Description:') !!}
                {!! Form::textarea('short_description', null, ['class' => 'form-control', 'rows' => '5']) !!}
            </div>

        </div>
        <div class="col-md-4">



          @include('backend.ecom.products.partials.productfeatures')

        </div>

    </div>
</div>


<div class="row">
    <div class="col-md-12">


        <!-- Description Field -->
        <div class="form-group col-sm-12 col-lg-12">
            {!! Form::label('description', 'Description:') !!}
            {!! Form::textarea('details', null, ['class' => 'form-control summernote', 'rows' => '5']) !!}
        </div>


        <div class="form-group col-sm-12 col-lg-12">

            {!! Form::label('details', 'Details:') !!}
            {!! Form::textarea('description', null, ['class' => 'form-control summernote', 'rows' => '5']) !!}
        </div>


        <!-- Video Url Field -->
        <div class="form-group col-md-8">
            {!! Form::label('video_url', 'Video Url:') !!}
            {!! Form::text('video_url', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Slug Field -->
        <div class="form-group col-md-4">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
        </div>
    </div>
</div>













{{-- <div class="col-sm-1"></div> --}}





