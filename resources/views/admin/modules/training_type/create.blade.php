<?php
    if($control == 'edit'){
        $heading = 'Edit';
    }
    else{
        $heading = 'Add';
    }
?>
@extends('layouts.default_edit')
@section('heading')
{!! $heading !!}
@endsection
@section('leftsideform')
    @if($control == 'edit')
      {!! Form::model($training_type,['id'=>'my_form', 'method' => 'POST', 'route' =>
                ['training_type.update', $training_type->id],'files'=>true]) !!}
    @else
        {!! Form::open(['id'=>'my_form','method' => 'POST', 'route' => ['training_type.save' ], 'files'=>true]) !!}
    @endif  
            @include('admin.modules.training_type.partial.form')
        {!!Form::close()!!}


<div class="col-md-5 pull-left">
  <div class="form-group text-center">
   <div>
{!! Form::open(['method' => 'get', 'route' => ['training_type.index']]) !!}
{!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
{!! Form::close() !!}
  </div>
 </div>
</div>
	
@endsection 
{!!Form::close()!!}




    