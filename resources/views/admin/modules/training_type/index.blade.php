@extends('layouts.default_module')
@section('module_name')
Training Type
@stop


@section('add_btn')
    {!! Form::open(['method' => 'get', 'route' => ['training_type.create'], 'files'=>true]) !!}
    <span >{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop
@section('table')
    <thead>
    <tr>

        <th>Name</th>
        <th>Image</th>
        


    </tr>
    </thead>
    <tbody>

    @foreach($training_type as $c)
    
            <td>{!! $c->name !!}</td>
            <td><img src="{!! $c->avatar !!}"  class="show-product-img"></td>
            <td>
                {!!link_to_action('Admin\Training_TypeController@edit',
                'Edit', array($c->id), array('class' => 'badge bg-info'))!!}

            </td>

            <td>
                {!! Form::open(['method' => 'POST', 'route' => ['training_type.delete', $c->id]]) !!}

                <a href="" data-toggle="modal"  name="activate_delete" data-target=".delete">
                    <span class=" badge bg-info btn-danger">
                    Delete
                    </span>
                </a>

                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>

@stop

@section('pagination')
<span class="pagination pagination-md pull-right">{!! $training_type->render() !!}</span>
<div class="col-md-3 pull-left">
<div class="form-group text-center">
<div>
{!! Form::open(['method' => 'get', 'route' => ['dashboard']]) !!}
{!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
{!! Form::close() !!}
</div>
</div>
</div>
@stop
