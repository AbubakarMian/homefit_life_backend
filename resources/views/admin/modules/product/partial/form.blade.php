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
    {!! Form::label('avatar','Avatar') !!}
    <div>
        {!! Form::text('avatar',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'avatar','required',
             								'maxlength'=>"50"]) !!}
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

<div class="form-group">
    {!! Form::label('details','Details') !!}
    <div>
        {!! Form::text('details',null, ['class' => 'form-control',
    'data-parsley-required'=>'true',
    'data-parsley-trigger'=>'change',
    'placeholder'=>'details','required',
    'maxlength'=>"50"]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('rating','Rating') !!}
    <div>
        {!! Form::text('rating',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'rating','required',
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

{{----}}
{{--<?php--}}
{{--//--}}



{{--<div class="form-group">--}}

    {{--<div class="form-group pull-right">--}}
        {{--<img src="{!! $image !!}"  class="show-product-img" data-toggle="modal" data-target=".imagemodal">--}}
    {{--</div>--}}

    {{--<div class="form-group">--}}
        {{--{!! Form::label('image','Product Image') !!}--}}
        {{--{!! Form::file('image', ['class' => 'choose-image', 'id'=>'image'] ) !!}--}}
        {{--<p class="help-block" id="error">Limit 2MB</p>--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::textarea('image_visible',null,['class'=>'form-control' ,--}}
         {{--'rows'=>'3','placeholder'=>'Enter Image URL',--}}
             								{{--'maxlength'=>"225"]) !!}--}}
        {{--{!!Form::hidden('image')!!}--}}

    {{--</div>--}}
{{--</div>--}}



{{--<div class="form-group">--}}
    {{--{!! Form::label('description','English Description') !!}--}}
    {{--<div>--}}
        {{--{!! Form::textarea('description',null, ['class' => 'form-control',--}}
                                {{--'data-parsley-required'=>'true',--}}
                                {{--'data-parsley-trigger'=>'change',--}}
                                {{--'placeholder'=>'Enter Description in English',--}}
                               {{--'rows'=>'5',--}}
             								{{--'maxlength'=>"225"]) !!}--}}
    {{--</div>--}}
{{--</div>--}}

{{--<div class="form-group">--}}
     {{--{!! Form::label('description_ur','Urdu Description') !!}--}}
     {{--<div>--}}
            {{--{!! Form::textarea('description_ur',null, ['class' => 'form-control urdu',--}}
                                    {{--'data-parsley-required'=>'true',--}}
                                    {{--'data-parsley-trigger'=>'change',--}}
                                    {{--'placeholder'=>'Enter Description in Urdu',--}}
                                    {{--'maxlength'=>"225",--}}
                                    {{--'rows'=>'3','onblur'=>'validateForm();']) !!}--}}
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