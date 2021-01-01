@extends('layouts.default_report')
@section('report_name')
Personal Session Payments
@stop
@section('report_description')
  All Personal Session Payments
@stop

@section('excel')
{!!Form::open(['method'=>'get','route' =>array('personal_session_payments.excel')])!!}
{!!Form::hidden('user_excel',null,['id'=>'user_excel'])!!}
{!!Form::hidden('date_excel',null,['id'=>'date_excel'])!!}
{!!Form::hidden('status_excel',null,['id'=>'status_excel'])!!}
{!!Form::submit('Export Excel',['class'=>'btn btn-success pull-right',
'onclick'=>'return export_excel(event);',
'data-url'=>asset('index.php/admin/personal_session_payments/excel')
])!!}
{!!Form::close()!!}

@stop
@section('form')
{!!Form::open(array('id'=>'search_form', 'method'=>'post','route' =>array('personal_session_payments.index'),'class'=>'form-horizontal'))
!!}
@include('admin.reports.personal_session_payments.partial.searchfilters')
{!!Form::close()!!}
@stop
@section('table')
<thead>
	<tr>
		<th>User</th>
		<th>Trainer</th>
		<th>Payments</th>

	</tr>
</thead>
<tbody>

	@foreach($personal_session_payments as $r)
	<tr>
		<td>{!! $r->user->name !!}</td>
		<td>{!! $r->trainer->name !!}</td>
		<td>{!! $r->payments->payment_id !!}</td>





	</tr>
	@endforeach
</tbody>

@section('pagination')
<span class="pagination pagination-md pull-right">{!! $personal_session_payments->render() !!}</span>

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

@include('admin.reports.personal_session_payments.partial.msg_modal')
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

        function personal_session_payments_excel(event){
            $('#user_excel').val( $('#user').val());
            $('#req_num_excel').val( $('#req_num').val());
            $('#date_excel').val( $('#reservationtime').val());
            $('#status_excel').val( $('#status').val());
        }

		function export_excel(){
			$('#user_excel').val( $('#user').val());
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