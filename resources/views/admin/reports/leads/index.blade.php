@extends('layouts.default_report')

@section('module_name')
Lead
@stop
@section('module_search_top')
{!!Form::open(['method'=>'get','route' =>array('leads.excel')])!!}
{!!Form::hidden('name',null,['id'=>'name'])!!}
{!!Form::hidden('status',null,['id'=>'status'])!!}
{!!Form::hidden('message',null,['id'=>'message'])!!}
{!!Form::submit('Export To Excel',['class'=>'btn btn-success pull-right',
'onclick'=>'return excel();', 'id'=>'export'])!!}
{!!Form::close()!!}
@stop

@section('form')
	{!!Form::open(array('id'=>'search_form', 'method'=>'post','route' =>array('lead.index'),'class'=>'form-horizontal')) !!}
		@include('admin.reports.leads.partial.searchfilters')
	{!!Form::close()!!}
@stop

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
		<th>User</th>
		<th>Status</th>
		<th>Message</th>
		<th>Activate/Deactivate</th>

	</tr>
</thead>
<tbody>

	@foreach($leads as $c)

	<td>{!! $c->user_id !!}</td>
	<td>{!! $c->status !!}</td>
	<td>{!! $c->message !!}</td>
	<td>
		@if($c->status == 'pending')
			{!! Form::open(['method' => 'POST', 'route' => ['leads.accept', $c->id]]) !!}

			<a href="" data-toggle="modal" name="activate_delete" data-target=".delete">
				<span class=" badge bg-info btn-success" onclick="change_modal_warning('Accepted as Trainer ?');">
					Accept</span></a>
			{!! Form::close() !!}
			{!! Form::open(['method' => 'POST', 'route' => ['leads.reject', $c->id]]) !!}

			<a href="" data-toggle="modal" name="activate_delete" data-target=".delete">
				<span class=" badge bg-info btn-success" onclick="change_modal_warning('Rejected as Trainer ?');">
					Reject</span></a>
			{!! Form::close() !!}
		@else
			{!! $c->status!!}
		@endif

	</td>
	</tr>


	@endforeach
</tbody>
@section('pagination')
<span class="pagination pagination-md pull-right">{!! $leads->render() !!}</span>
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
@section('app_jquery')
<script>
	function change_modal_warning(msg){
            $('#modal_msg').html(msg) ;
        }
</script>
@endsection