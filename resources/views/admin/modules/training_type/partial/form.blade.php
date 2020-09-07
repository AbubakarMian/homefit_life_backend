<div class="form-group">
    {!! Form::label('name','Name') !!}
    <div>
        {!! Form::text('name',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'Name ','required',
             								'maxlength'=>"50"]) !!}
    </div>
<!-- </div> -->
<!-- {{--<div class="form-group">--}}
{{--{!! Form::label('type','Type') !!}--}}
{{--<div>--}}
{{--{!!Form::select('type',$type,--}}
{{--null,--}}
{{--['class'=>'form-control'])!!}--}}
{{--</div>--}}
{{--</div>--}} -->
<span id="err" class="error-product"></span>

<?php

$avatar =  asset('avatar/default_img.jpg');

if(isset($training_type)){
    if($training_type->avatar){
        $avatar = $training_type->avatar;
    }
}
?>


<div class="form-group">

    <div class="form-group pull-right">
        <img src="{!! $avatar !!}"  class="show-product-img" data-toggle="modal" data-target=".imagemodal">
    </div>

    <div class="form-group">
        {!! Form::label('avatar','Training Type Image') !!}
        {!! Form::file('avatar', ['class' => 'choose-image', 'id'=>'avatar'] ) !!}
        <p class="help-block" id="error">Limit 2MB</p>
    </div>
    <div class="form-group">
        {!! Form::textarea('image_visible',null,['class'=>'form-control' ,
         'rows'=>'3','placeholder'=>'enter image URL',
             								'maxlength'=>"225"]) !!}
        {!!Form::hidden('image')!!}

    </div>
</div>

{{--start change side      --}}
{{--</div>--}}
{{--<div class="col-md-6">--}}
{{--<div class="form-group">--}}
{{--end change side      --}}

{{--start add params--}}


<div class="form-group col-md-12">

    {{--<span id="err-param" class="error-product"></span>--}}
</div> 


<!-- </div>
</div></div>
</form>
end add params -->


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