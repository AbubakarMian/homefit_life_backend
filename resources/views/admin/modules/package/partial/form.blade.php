<div class="form-group">
    {!! Form::label('name','Name') !!}
    <div>
        {!! Form::text('name',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'Name','required',
             								'maxlength'=>"50"]) !!}
    </div>
</div>


<div class="form-group">
    {!! Form::label('details','Details') !!}
    <div>
        {!! Form::text('details',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'details','required',
             								'maxlength'=>"250"]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('price','Price') !!}
    <div>
        {!! Form::text('price',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'price','required',
             								'maxlength'=>"50"]) !!}
    </div>
</div>



{{--//        $image =  asset('avatar/default_img.jpg');--}}
{{--//--}}
{{--//    if(isset($product)){--}}
{{--//--}}
{{--//        if($product->image){--}}
{{--//            $image = $product->image;--}}
{{--//        }--}}
{{--//    }--}}
{{--//?>--}}


{{--<div class="form-group">--}}

    {{--<div class="form-group pull-right">--}}
        {{--<img src="{!! $image !!}"  class="show-product-img" data-toggle="modal" data-target=".imagemodal">--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('image','Flag') !!}--}}
        {{--{!! Form::file('image', ['class' => 'choose-image', 'id'=>'image'] ) !!}--}}
        {{--<p class="help-block" id="error">Limit 2MB</p>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::textarea('image_visible',null,['class'=>'form-control' ,--}}
         {{--'rows'=>'3','placeholder'=>'Image URL',--}}
             								{{--'maxlength'=>"225"]) !!}--}}
        {{--{!!Form::hidden('image')!!}--}}

    {{--</div>--}}
{{--</div>--}}









@include('admin.modules.product.partial.image_modal')

        <span id="err" class="error-product"></span>



{{--start change side      --}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
    {{--<div class="form-group">--}}
  {{--end change side      --}}

{{--start add params--}}


<div class="form-group col-md-12">

    {{--<span id="err-param" class="error-product"></span>--}}
</div>


    {{--</div>--}}
{{--</div></div>--}}
{{--</form>--}}
{{--end add params--}}
       

  <div class="col-md-5 pull-left">
      <div class="form-group text-center">
        <div>
             {!!Form::submit('Save',
                ['class'=>'btn btn-primary btn-block btn-lg btn-parsley','onblur'=>'return validateForm();'])!!}
        </div>
      </div>
    </div>

@section('app_jquery')

<script>

    $(function() {

        $('img').on('click', function (e) {
            var my_url = $(this).attr('src');
            $('#modal_img').attr('src', my_url);
        });
    });

    function validateForm(){
        return true;
        alert('hi');
    }

</script>

  @endsection