@extends('layouts.default_module')
@section('module_name')
Users
@stop


<!-- @section('add_btn')
    {!! Form::open(['method' => 'get', 'route' => ['user.create'], 'files'=>true]) !!}
    <span >{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop -->
@section('table')
    <thead>
    <tr>

        <th>Name</th>
        


    </tr>
    </thead>
    <tbody>

    @foreach($user as $c)
        <
            <td>{!! $c->name !!}</td>
            <!-- <td>
                {!!link_to_action('Admin\UserController@edit',
                'Edit', array($c->id), array('class' => 'badge bg-info'))!!}

            </td> -->

            <td>
                {!! Form::open(['method' => 'POST', 'route' => ['user.delete', $c->id]]) !!}

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
<span class="pagination pagination-md pull-right">{!! $user->render() !!}</span>
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
