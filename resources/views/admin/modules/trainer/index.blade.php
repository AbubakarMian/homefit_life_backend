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
		<th>Gender</th>
		<th>Rating</th>
		<th>Specialities</th>
		<th>Featured</th>

	</tr>
	</thead>
	<tbody>

	@foreach($trainer as $c)
		<td>{!! $c->name !!}</td>
		<td>{!! $c->gender  == 1?'male':'Female'!!}</td>
		<td>{!! $c->rating !!}</td>
		<td>{!! $c->specialities !!}</td>
		<td>{!! $c->is_featured == 1?'True':'False'!!}</td>
		<td>
			{!!link_to_action('Admin\TrainerController@edit',
			'Edit', array($c['id']), array('class' => 'badge bg-info'))!!}

		</td>
		<td>
			{!! Form::open(['method' => 'POST', 'route' => ['trainer.delete', $c->id]]) !!}
			@if($c->deleted_at == null)
                <?php
                $status = 'Disable';
                $delete_title_modal = $status;
                $delete_msg_modal = 'Do you want to disable this trainer ?';
                ?>
			@else
                <?php
                $status = 'Enable';
                $delete_title_modal = $status;
                $delete_msg_modal ='Do you want to enable this trainer ?';
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
@section('app_jquery')
	<script>
        function change_modal_warning(x){
            var status =$.trim(x.innerHTML) ;
            var msg = 'Do you want to disable this trainer ?';
            $('#modal-heading').html(status);
            if(status == 'enable'){
                msg = 'Do you want to enable this trainer ?';
            }
            else if(status == 'disable'){
                msg = 'Do you want to disable this trainer ?';
            }
            $('#modal_msg').html(msg) ;
        }
	</script>
@endsection
                   