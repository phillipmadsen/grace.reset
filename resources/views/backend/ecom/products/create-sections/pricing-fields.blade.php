<div class="row">
    <div class="col-md-12">

        <!-- Guid Field -->
        {{--<div class="form-group col-sm-2">--}}
            {{--{!! Form::label('guid', 'Guid:') !!}--}}
            {{--{!! Form::number('guid', null, ['class' => 'form-control']) !!}--}}
        {{--</div>--}}

        <!-- Asin Field -->
        {{--<div class="form-group col-sm-2">--}}
            {{--{!! Form::label('asin', 'Asin:') !!}--}}
            {{--{!! Form::number('asin', null, ['class' => 'form-control']) !!}--}}
        {{--</div>--}}
    <!-- Price Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('price', 'Price:') !!}
            <div class="input-group"><div class="input-group-addon">$</div>
            {!! Form::number('price', null, ['class' => 'form-control']) !!}
            </div>
        </div>



        <!-- Quantity Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('quantity', 'Quantity:') !!}
            <div class="input-group"><div class="input-group-addon">#</div>
            {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
            </div>
        </div>
        <!-- Model Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('model', 'Model:') !!}
            {!! Form::text('model', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Sku Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('sku', 'Sku:') !!}
            {!! Form::text('sku', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Upc Field -->
        <div class="form-group col-sm-2">
            {!! Form::label('upc', 'Upc:') !!}
            {!! Form::text('upc', null, ['class' => 'form-control']) !!}
        </div>

        <!-- Mpn Field -->
        {{--<div class="form-group col-sm-2">--}}
            {{--{!! Form::label('mpn', 'Mpn:') !!}--}}
            {{--{!! Form::text('mpn', null, ['class' => 'form-control']) !!}--}}
        {{--</div>--}}

    </div>
</div>