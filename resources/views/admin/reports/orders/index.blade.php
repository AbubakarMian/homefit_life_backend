@extends('layouts.default_report')
@section('report_name')
	Confirmed Orders
@stop
@section('report_description')
	All Sales
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
	{!!Form::open(array('id'=>'search_form', 'method'=>'post','route' =>array('orders.index'),'class'=>'form-horizontal')) !!}
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
					   <a href="" onclick="set_lat_long('37,
						'64');"
				   data-toggle="modal" data-target=".map_modal" >

						<span class="ti-direction"></span>Click</a>
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


        function order_excel(event){
            $('#user_excel').val( $('#user').val());
            $('#req_num_excel').val( $('#req_num').val());
            $('#date_excel').val( $('#reservationtime').val());
            $('#status_excel').val( $('#status').val());
        }

        function set_lat_long(lat , long , location){
            $('#lat').val(lat);
            $('#long').val(long);
            $('#map-title').html('<b>Address: 	&nbsp;	&nbsp;</b>'+location);
        }

        function show_note(msg){
            $('#msg_div').html(msg);
		}

        $(function(){

            $('span[name="details"]').on('click', function(e){
                e.preventDefault();
                var my_url = $(this).attr('data-url');
                var mySpan = this;
                $.get(my_url , function (data) {
                    var trHTML = '';
                    $.ajax({
                        type: 'GET',
                        url: my_url,
                        data: 'application/json',
                        dataType: 'json',
                        success: function (data) {  console.log('Data:', data);
                            var data = data.details;
                            for (var i = 0, len = data.length; i < len; i++) {
                                console.log('Data[i]:', data[i]);
                                trHTML += '<tr><td>'
                                    + data[i].name + '</td><td>'
                                    + data[i].brand + '</td><td>'
                                    + data[i].promotion + '</td><td>'
                                    + data[i].quantity + '</td><td>'
                                    + data[i].orignal_price + '</td><td>'
                                    + data[i].discount + '</td><td>' +
                                    + data[i].total_price + '</td>' +
                                    '</tr>';
                            }
                            $("#my-modal-table tr").remove();
                            $('#my-modal-table').append(trHTML);
                            $('#ordermodal').modal('show');
                        },
                        error: function (data) {
                            console.log('Error:', data);
                        }
                    });
                });
            });

        });

	</script>
@endsection
                   