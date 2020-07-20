@extends('layouts.default_module')
@section('module_name')
USERS
@stop

@section('table')
    <thead>
    <tr>

        <th>Name</th>
        <th>Email</th>
        <th>Role</th>



    </tr>
    </thead>
    <tbody>

    @foreach($users as $c)

            <td>{!! $c->name !!}</td>
            <td>{!! $c->email !!}</td>
            <td>{!! $c->role_id!!}</td>


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
<span class="pagination pagination-md pull-right">{!! $users->render() !!}</span>
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
