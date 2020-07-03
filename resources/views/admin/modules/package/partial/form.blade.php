<div class="form-group">
    {!! Form::label('name_ur','Name_Urdu ') !!}
    <div>
        {!! Form::text('name_ur',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'Name in Urdu','required',
             								'maxlength'=>"50"]) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('name_en','English Name') !!}
    <div>
        {!! Form::text('name_en',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'Name in English','required',
             								'maxlength'=>"50"]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('latitude','Latitude') !!}
    <div>
        {!! Form::text('latitude',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'latitude','required',
             								'maxlength'=>"50"]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('longitude','Longitude') !!}
    <div>
        {!! Form::text('longitude',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'longitude','required',
             								'maxlength'=>"50"]) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('shortName','ShortName') !!}
    <div>
        {!! Form::text('shortName',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'Country short Name ','required',
             								'maxlength'=>"50"]) !!}
    </div>
</div>

{{--<div class="form-group">--}}
    {{--{!! Form::label('type','Type') !!}--}}
    {{--<div>--}}
        {{--{!!Form::select('type',$type,--}}
                                   {{--null,--}}
                            {{--['class'=>'form-control'])!!}--}}
    {{--</div>--}}
{{--</div>--}}


<?php

        $image =  asset('avatar/default_img.jpg');

    if(isset($product)){

        if($product->image){
            $image = $product->image;
        }
    }
?>


<div class="form-group">

    <div class="form-group pull-right">
        <img src="{!! $image !!}"  class="show-product-img" data-toggle="modal" data-target=".imagemodal">
    </div>

    <div class="form-group">
        {!! Form::label('image','Flag') !!}
        {!! Form::file('image', ['class' => 'choose-image', 'id'=>'image'] ) !!}
        <p class="help-block" id="error">Limit 2MB</p>
    </div>
    <div class="form-group">
        {!! Form::textarea('image_visible',null,['class'=>'form-control' ,
         'rows'=>'3','placeholder'=>'Image URL',
             								'maxlength'=>"225"]) !!}
        {!!Form::hidden('image')!!}

    </div>
</div>









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