@extends('layouts.default_module')
@section('module_name')
    Companies
@stop


@section('add_btn')
    {!! Form::open(['method' => 'get', 'route' => ['company.create'], 'files'=>true]) !!}
    <span >{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
    {!! Form::close() !!}
@stop
@section('table')
    <thead>
    <tr>

        <th>Name in English</th>
        <th>Name in Urdu</th>
        <th>Type</th>
        <th>image</th>


    </tr>
    </thead>
    <tbody>

    @foreach($company as $c)
        <tr>
            <?php
//            dd($c->types->name_ur);
            if(!$c->image){
                $c->avatar = asset('images/default_img.jpg');
            }
            ?>
            {{--<td><img src="{!! $company->image !!}"  class="show-product-img"></td>--}}
            <td>{!! $c->name_en !!}</td>
            <td>{!! $c->name_ur !!}</td>
                <td>{!! $c->type->name_en!!}</td>
            <td>
                {!!link_to_action('Admin\CompanyController@edit',
                'Edit', array($c->id), array('class' => 'badge bg-info'))!!}

            </td>

            <td>
                {!! Form::open(['method' => 'POST', 'route' => ['company.delete', $c->id]]) !!}

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
<span class="pagination pagination-md pull-right">{!! $company->render() !!}</span>
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
