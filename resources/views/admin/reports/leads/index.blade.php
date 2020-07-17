@extends('layouts.default_module')

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
			{!! Form::open(['method' => 'POST', 'route' => ['leads.delete', $c->id]]) !!}
			@if($c->deleted_at == null)
                <?php
                $status = 'Deactivate';
                $delete_title_modal = $status;
                $delete_msg_modal = 'Do you want to Deactivate';
                ?>
			@else
                <?php
                $status = 'Activate';
                $delete_title_modal = $status;
                $delete_msg_modal ='Do you want to Deactivate';
                ?>
			@endif
			<a href="" data-toggle="modal"  name="activate_delete" data-target=".delete">
	<span class=" badge bg-info btn-success"
		  onclick="change_modal_warning(this);">
	{!! $status !!}</span></a>
			{!! Form::close() !!}

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
        function change_modal_warning(x){
            var status =$.trim(x.innerHTML) ;
            var msg = 'Do You Want to Deactivate?';
            $('#modal-heading').html(status);
            if(status == 'Activate'){
                msg = 'Do You Want to Activate?';
            }
            else if(status == 'Deactivate'){
                msg = 'Do You Want to Deactivate?';
            }
            $('#modal_msg').html(msg) ;
        }
	</script>
@endsection
                   