@extends('layouts.default_report')
@section('report_name')
Orders
@stop
@section('report_description')
Product Sales
@stop

@section('excel')
{!!Form::open(['method'=>'get','route' =>array('orders.index')])!!}
{!!Form::hidden('user_excel',null,['id'=>'user_excel'])!!}
{!!Form::hidden('date_excel',null,['id'=>'date_excel'])!!}
{!!Form::hidden('status_excel',null,['id'=>'status_excel'])!!}
{!!Form::submit('Export Excel',['class'=>'btn btn-success pull-right',
'onclick'=>'return order_excel(event);',
'data-url'=>asset('index.php/admin/pending_orders/excel')
])!!}
{!!Form::close()!!}
@stop
@section('form')
{!!Form::open(array('id'=>'search_form', 'method'=>'post','route' =>array('orders.index'),'class'=>'form-horizontal'))
!!}
@include('admin.reports.orders.partial.searchfilters')
{!!Form::close()!!}
@stop
@section('table')
<thead>
	<tr>
		<th>Name</th>
		<th>Address</th>
		<th>Total Amount </th>
		<th>Order</th>
		<th>Map</th>
		<th>Action</th>
	</tr>
</thead>
<tbody>

	@foreach($orders as $order)
	<tr>
		<td>{!! $order->user->name !!}</td>
		<td>{!! $order->address !!}</td>
		<td>{!! $order->total_price!!}</td>
		<td>

			<a href="" data-toggle="modal" name="activate_delete" data-target=".detail_{!! $order->id !!}">
				<span class=" badge bg-info btn-success">
					Detail</span></a>
			@include('admin.reports.orders.partial.order_modal',['order'=>$order])

		</td>
		<td>
			<div class="form-group">
				{{-- <a href="" onclick="set_lat_long('{!! $pending_order->Lat !!}',
							'{!! $order->lat !!}',
							'{!! $order->long !!}');"
					   data-toggle="modal" data-target=".map-modal" > --}}
				<a href="" onclick="set_lat_long('37', '64','karachi');" data-toggle="modal" data-target=".map_modal">
					<span onclick="set_lat_long('37', '64','karachi');" class="ti-direction"></span>Click</a>
			</div>
		</td>
		<td>
			<?php 
				$pending_display = $completed_display = $final_status_display ='display:none';
				if($order->status == 'pending'){
					$pending_display = 'display:block';
				}
				elseif($order->status == 'inprogress'){
					$completed_display = 'display:block';
				}
				else{
					$final_status_display = 'display:block';
				}
			?>
			
			<div id="pending_btn_{!!$order->id!!}" style="{!!$pending_display!!}">
				<a href="" data-toggle="modal" name="" data-target=".inprogress_request_{!! $order->id !!}">
					<span class=" badge bg-info btn-success ">
						In Progress
					</span>
				</a>
				@include('admin.reports.orders.partial.confirmation_modal',
				[
				'order_id'=>$order->id,
				'cell_id'=>'td_'.$order->id,
				'req_status'=>'inprogress_request_'.$order->id,
				'url'=>asset('admin/reports/orders/status_update/'.$order->id),
				'status'=>'inprogress',
				'btn_class'=>'btn-primary'
				])
				<a href="" data-toggle="modal" name="" data-target=".reject_request_{!! $order->id !!}">
					<span class=" badge bg-info btn-danger">
						Reject
					</span>
				</a>
				@include('admin.reports.orders.partial.confirmation_modal',
				[
				'order_id'=>$order->id,
				'cell_id'=>'td_'.$order->id,
				'req_status'=>'reject_request_'.$order->id,
				'url'=>asset('admin/reports/orders/status_update/'.$order->id),
				'status'=>'rejected',
				'btn_class'=>'btn-danger' ])
			</div>
			<div id="inprogress_btn_{!!$order->id!!}" style="{!!$completed_display!!}">
			<a href="" data-toggle="modal" name="" data-target=".completed_request_{!! $order->id !!}">
				<span class=" badge bg-info btn-success">
					Complete</span></a>
			@include('admin.reports.orders.partial.confirmation_modal',
			[
			'order_id'=>$order->id,
			'cell_id'=>'td_'.$order->id,
			'req_status'=>'completed_request_'.$order->id,
			'url'=>asset('admin/reports/orders/status_update/'.$order->id),
			'status'=>'completed',
			'btn_class'=>'btn-success'
			])
			</div>
			<div id="finalstatus_btn_{!!$order->id!!}" style="{!!$final_status_display!!}">
			{!! ucwords($order->status) !!}
			</div>
		</td>


	</tr>
	@endforeach
</tbody>

@section('pagination')
<span class="pagination pagination-md pull-right">{!! $orders->render() !!}</span>

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

@include('admin.reports.orders.partial.msg_modal')
@section('extra_css')
<link href="https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="{!! asset('css/MonthPicker.min.css') !!}" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="{!! asset('css/examples.css') !!}" />
@stop
@section('app_jquery')
<script>
	function change_modal_warning(status_url,status,cell_id,order_id) {
            console.log('url',status_url);
            console.log('status',status);
            $.ajax({
                url:status_url,
                method:'POST',
                data: {'_token' :'{!! csrf_token() !!}',
                       'status' : status
                      },
                success: function(data){
					if(data.new_value=='Inprogress'){
						$('#pending_btn_'+order_id).css('display','none');
						$('#inprogress_btn_'+order_id).css('display','block');
					}
					else{ // completed , rejected
						$('#pending_btn_'+order_id).css('display','none');
						$('#inprogress_btn_'+order_id).css('display','none');
						$('#finalstatus_btn_'+order_id).html(data.new_value);
						$('#finalstatus_btn_'+order_id).css('display','block');
					}
                    $('#'+cell_id).html(data.new_value);
                    console.log("response",data);
                },
                error: function(errordata){
                    console.log(errordata)
                }
            }
            )}

        function order_excel(event){
            $('#user_excel').val( $('#user').val());
            $('#req_num_excel').val( $('#req_num').val());
            $('#date_excel').val( $('#reservationtime').val());
            $('#status_excel').val( $('#status').val());
        }

        // function set_lat_long(lat , long , location){
		// 	alert('st');
        //     $('#lat').val('24.8607');
        //     $('#long').val('67.0011');
        //     $('#map-title').html('<b>Address: 	&nbsp;	&nbsp;</b>'+location);
        // }

        function show_note(msg){
            $('#msg_div').html(msg);
		}

</script>
@endsection