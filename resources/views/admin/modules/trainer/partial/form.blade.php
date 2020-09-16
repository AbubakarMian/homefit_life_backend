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
    {!! Form::label('gender','Gender') !!}
    <div>
        {!! Form::select('gender', [1=>'male',0=>'female'], null,['class' => 'form-control',
                                                                'data-parsley-required'=>'true',
                                                                'data-parsley-trigger'=>'change',
                                                                'placeholder'=>'gender','required']) !!}       
    </div>
</div>
<div class="form-group">
    {!! Form::label('rating','Rating') !!}
    <div>
        {!! Form::text('rating',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'rating','required',
             								'readonly']) !!}
    </div>
</div><div class="form-group">
    {!! Form::label('specialities','specialities') !!}
    <div>
        {!! Form::text('specialities',null, ['class' => 'form-control',
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change',
                                'placeholder'=>'specialities','required',
             								'maxlength'=>"50"]) !!}
    </div>
</div>
<div class="form-group">
    {!! Form::label('is_featured','Is Featured') !!}
    <div>
        {!! Form::checkbox('is_featured',null,null, [
                                'data-parsley-required'=>'true',
                                'data-parsley-trigger'=>'change']) !!}
    </div>
</div>


<span id="error_companies" class="error"></span>
<div class="form-group">
    <div class="alert alert-info">
        &nbsp;<a href="" data-toggle="modal" style="padding-left: 25%;" data-target=".company">
            Click here to Add Training Types</a>
        @include('admin.modules.trainer.partial.training_type_modal')
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