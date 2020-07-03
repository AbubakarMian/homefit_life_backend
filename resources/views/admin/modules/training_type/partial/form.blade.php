<div class="form-group">
    {!! Form::label('name_en','English Name') !!}
    <div>
        {!! Form::text('name_en',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'Name in english','required',
             								'maxlength'=>"50"]) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('name_ur','Urdu Name') !!}
    <div>
        {!! Form::text('name_ur',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'Name in urdu','required',
             								'maxlength'=>"50"]) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('type','Type') !!}
    <div>
        {!! Form::select('type_id',$all_types,null, ['class' => 'form-control',
                                         'data-parsley-required'=>'true',
                                         'data-parsley-trigger'=>'change',
                                         'placeholder'=>'Select A Type','required',
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

if(isset($company)){

    if($company->image){
        $image = $company->image;
    }
}
?>


<div class="form-group">

    <div class="form-group pull-right">
        <img src="{!! $image !!}"  class="show-product-img" data-toggle="modal" data-target=".imagemodal">
    </div>

    <div class="form-group">
        {!! Form::label('image','Company Logo') !!}
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



<div class="form-group">
    {!! Form::label('description','English Description ') !!}
    <div>
        {!! Form::textarea('description',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'Description in english',
                               'rows'=>'5',
             								'maxlength'=>"225"]) !!}
    </div>
</div>

<div class="form-group">
    {!! Form::label('description_ur','Urdu Description') !!}
    <div>
        {!! Form::textarea('description_ur',null, ['class' => 'form-control urdu',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'Description in urdu',
                                'maxlength'=>"225",
                                'rows'=>'3','onblur'=>'validateForm();']) !!}
    </div>
</div>


@include('admin.modules.companies.partial.image_modal')

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