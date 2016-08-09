<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="row">
<div class="row options">
    <div class="form-group col-md-12">
        <label for="options">{{trans('product.productoptions')}} : </label>
        <div id="add_product_option" class=" btn btn-sm btn-primary">+ Add Option</div>
        <div class="options-group row">
            <div class="option col-md-3" op-index="0">
                <span class="fa fa-times fa-lg remove-option"></span>
                <label for="options">{{trans('product.product_option_name')}} : </label>
                <input type="text" name="options[0][name]">

                <ul class="values">
                    <li><input type="text" name="options[0][values][]"></li>
                </ul>
                <div class="add_option_value btn btn-sm btn-primary">+ Add Value</div>
            </div>
        </div>
    </div>
</div>



            </div>
        </div>
    </div>
</div>

Here is some great literature: http://getbootstrap.com/css/#grid

Replace table and tbody with div class="container"
Replace tr with div class="row"
Replace td with div class="col-ww-nn"
Where ww is device width (xs, sm, md, lg)
Where nn is a number 1-12 for width percentage (divided by 12)
Below is your updated code (including some syntax fixes too). Note, I've added responsiveness so that on phones (xs devices) your second main column would be a separate line. And you can make images responsive with img-response so that it's size changes with the device.

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-sm-6">
            <div class="row">
                <div class="col-xs-4 col-sm-4">
                    &nbsp;
                </div>
                <div class="col-xs-4 col-sm-4">
                    <img src="#" class="img-responsive">
                </div>
                <div class="col-xs-4 col-sm-4">
                    &nbsp;
                </div>
                <div class="col-xs-4 col-sm-4">
                    <span style="font-size:10px;color:#cccccc;">Alpha testing</span>
                </div>
            </div>
        </div>
        <div class="col-xs-12 col-sm-6">
            <div class="row">
                <div class="col-xs-4 col-sm-4">
                    <span>Another tesing text</span>
                </div>
                <div class="col-xs-4 col-sm-4">
                    <span style="color:#ffffcc;"> - </span>
                </div>
                <div class="col-xs-4 col-sm-4">
                    <span style="font-size:11px;color:#ffffff;">Random text</span>
                </div>
            </div>
        </div>
    </div>
</div>
