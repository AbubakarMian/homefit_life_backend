@extends('layouts.default_module')

@section('module_name')
	Trainer
@stop
{{--@section('add_btn')--}}

	{{--{!! Form::open(['method' => 'get', 'route' => ['trainer.create'], 'files'=>true]) !!}--}}
	{{--<span >{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>--}}
	{{--{!! Form::close() !!}--}}
{{--@stop--}}
@section('table-properties')
	width="400px" style="table-layout:fixed;"
@endsection
<style>
	td {
		white-space: nowrap;
		overflow: hidden;
		width: 30px;
		height: 30px;
		text-overflow: ellipsis;
	}
</style>
@section('table')

	<thead>
	<tr>
		<th>Name</th>
		<th>gender</th>
		<th>rating</th>
		<th>Featured</th>

	</tr>
	</thead>
	<tbody>

	@foreach($trainer as $c)

		<td>{!! $c->name !!}</td>
		<td>{!! $c->gender !!}</td>
		<td>{!! $c->rating !!}</td>
		<td>{!! $c->is_featured !!}</td>

			<td>{!! Form::open(['method' => 'POST', 'route' => ['trainer.delete', $c->id]]) !!}
				<a href="" data-toggle="modal"  name="activate_delete" data-target=".delete">
				   <span class="badge bg-danger">
				         Delete</span></a>
				{!! Form::close() !!}
			</td>
			<td>
				{!!link_to_action('Admin\TrainerController@edit',
				'Edit', array($c['id']), array('class' => 'badge bg-info'))!!}

			</td>
		</tr>
	@endforeach
	</tbody>
@section('pagination')
	<span class="pagination pagination-md pull-right">{!! $trainer->render() !!}</span>
	<div class="col-md-3 pull-left">
		<div class="form-group text-center">
			<div>
				{!! Form::open(['method' => 'get', 'route' => ['dashboard']]) !!}
				{!! Form::submit('Cancel', ['class' => 'btn btn-default btn-block btn-lg btn-parsley']) !!}
				{!! Form::close() !!}
			</div>
		</div>
	</div>
@endsection
@stop
                   