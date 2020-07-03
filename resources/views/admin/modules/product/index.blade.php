@extends('layouts.default_module')
@section('module_name')
	Products
@stop
@section('add_btn')

	{!! Form::open(['method' => 'get', 'route' => ['product.create'], 'files'=>true]) !!}
	<span >{!! Form::submit('Add', ['class' => 'btn btn-success pull-right']) !!}</span>
	{!! Form::close() !!}
@stop
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
		<th>Avatar</th>
		<th>Price</th>
		<th>Details </th>
		<th>Rating</th>
	</tr>
	</thead>
	<tbody>

	@foreach($product as $key=>$p)

		{{--<tr>   <?php--}}
            {{--if(!$p->avatar){--}}
                {{--$p->avatar = asset('avatar/default_img.jpg');--}}
            {{--}--}}
            {{--?>--}}


			<td>{!! $p->name !!}</td>
			<td>{!! $p->avatar !!}</td>
			<td>{!! $p->price!!}</td>
			<td>{!! $p->details!!}</td>
			<td>{!! $p->rating !!}</td>
			<td>
				{!!link_to_action('Admin\productController@edit',
				'Edit', array($p['id']), array('class' => 'badge bg-info'))!!}

			</td>
			<td>{!! Form::open(['method' => 'POST', 'route' => ['product.delete', $p->id]]) !!}
				<a href="" data-toggle="modal"  name="activate_delete" data-target=".delete">
				   <span class="badge bg-danger">
				         Delete</span></a>
				{!! Form::close() !!}
			</td>
		</tr>
	@endforeach
	</tbody>
@section('pagination')
	<span class="pagination pagination-md pull-right">{!! $product->render() !!}</span>
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
                   